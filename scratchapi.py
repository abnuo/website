import requests
from bs4 import BeautifulSoup

def replyCheck(str):
  if str.startswith("@"):
   return str
  else:
    return str[1:len(str)]

def getComments(user):
  r = requests.get(f"https://scratch.mit.edu/site-api/comments/user/{user}/")
  soup = BeautifulSoup(r.text, 'html.parser')
  comments = soup.find_all("div", class_="comment")
  return [(replyCheck(i.find("div", class_="content").text.replace("\n", "").replace("                    ", " ").replace("          ", "")), int(i["data-comment-id"])) for i in comments]
  #return r.text

#test = getComments("mres")
#print(test)
