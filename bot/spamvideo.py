import os
import glob
import json
import requests
import base64
import twitter_selenium
import shlex
import subprocess
import mimetypes
import imghdr
import random
import time
import pickle
from urllib.parse import quote, unquote, urlparse
from bs4 import BeautifulSoup

def genTaD(query):
  tad = {}
  r = requests.get("http://suggestqueries.google.com/complete/search?client=chrome&q=" + quote(query))
  tad = {"title": json.loads(r.text)[0], "description": '\n'.join(json.loads(r.text)[1])}
  return tad

instance = "searx.projectlounge.pw"
if not os.path.isfile("session.pkl"):
  session = twitter_selenium.TwitterSession(os.environ[""],os.environ[""],driver="chrome")
  f = open("session.pkl","wb")
  pickle.dump(session.cookies,f)
else:
  f = open("session.pkl","rb")
  session = twitter.selenium(cookies=pickle.load(f),driver="chrome")
tr = requests.get("https://twitter-trends.iamrohit.in/united-states")
soup = BeautifulSoup(tr.text)
tweets = soup.find_all("a",{"class": "tweet"})
trends = [i.text for i in tweets]
query = random.choice(trends).lower()
tad = genTaD(query)
r = requests.post(f"https://{instance}/search",data={"q": query, "categories": "images", "format": "json"})
results = json.loads(r.text)
images = list(enumerate(results["results"]))[:20]
concat = ""
music = random.choice([i for i in glob.glob("music/*") if os.path.isfile(i)])

print(query)

for i in glob.glob("images/*"):
  if os.path.isfile(i):
    os.remove(i)

for i,v in images:
  fn = f"images/{i+1}"
  img = v["img_src"]
  print(i)
  if not img.startswith("data:"):
    r = requests.get(img)
    ext = os.path.splitext(os.path.basename(urlparse(img).path))[1]
    if ext == "":
      ext = "."+imghdr.what(None,h=r.content)
    with open(f"{fn}{ext}","wb") as f:
      f.write(r.content)
  else:
    b64 = img.split(",")[1]
    data = base64.b64decode(b64)
    mime = img[5:].split(";")[0]
    ext = mimetypes.guess_extension(mime)
    with open(f"{fn}{ext}","wb") as f:
      f.write(data)

imagefiles = glob.glob("images/*")
for i,v in enumerate(imagefiles):
  if os.path.isfile(v):
    if not os.path.splitext(v)[1] == ".png":
      command = ["ffmpeg","-i",v,os.path.splitext(v)[0]+".png"]
      print(shlex.join(command))
      subprocess.call(command)
      if not i == len(imagefiles)-1:
        concat = concat+"file '"+os.path.splitext(v)[0]+".png"+"'\nduration 5\n"
      else:
        concat = concat+"file '"+os.path.splitext(v)[0]+".png"+"'\nduration 5\nfile '"+os.path.splitext(v)[0]+".png"+"'"
      os.remove(v)

with open("images.txt","w") as f:
  f.write(concat)

while True:
  time.sleep(0.01)
  if os.path.isfile("images.txt"):
    break

command = ["ffmpeg","-safe","0","-f","concat","-i","images.txt","-stream_loop","-1","-i",music,"-vf","scale=256:256","-shortest","-pix_fmt","yuv420p","-y","output.mp4"]
print(shlex.join(command))
subprocess.call(command)

session.tweet("{0}\n{1}".format(tad["title"],tad["description"]),media=["output.mp4"])
