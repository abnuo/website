import random
import hashlib
import requests
import glob
import os
import imghdr
import __main__

downfolder = '/images/'
failures = 0
suffixes = ["_d", "s", ""]
urlformat = "https://i.imgur.com/{0}{1}.png"
removedhash = "9b5936f4006146e4e1e9025b474c02863c0b5614132ad40db4b925a10e8bfbb9"

#deletedatshit = glob.glob('*.*')
#for i in deletedatshit:
#  if i == __file__:
#    print('Skipping current script.')
#  else:
#    os.remove(i)
def rand(byte):
  letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"
  if byte == 5:
    byter = 5
  elif byte == 7:
    byter = 7
  return ''.join(random.choice(letters) for i in range(byte))

def genurls(byte, amount, urlsuffix):
  global failures
  failures = 0
  imgururls = []
  if not urlsuffix in suffixes:
    print('Not a valid URL suffix, using "_d"')
    urlsuffix = '_d'
  try:
    while True:
      randerps = rand(byte)
      url2 = urlformat.format(randerps,urlsuffix)
      r = requests.get(url2)
      if hashlib.sha256(r.content).hexdigest() !== removedhash:
        imgururls.append(url2)
        break
    return imgururls
  except Exception as e:
    print('Error.', str(e))
def downloadurls(listor):
  print('Downloading urls.')
  for i in range(len(listor)):
    try:
      r = requests.get(listor[i])
      filetype = imghdr.what(None, h=r.content)
      if filetype == None:
        print('Filetype unidentifiable, using png')
        filetype = png
      with open(str(i) + '.' + filetype, 'wb') as image:
        image.write(r.content)
    except Exception as e:
      print('Error downloading image url', str(i), str(e))

urls = genurls(5, 1, '')
print(urls[0])
