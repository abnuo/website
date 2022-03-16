import twitter_selenium
import pickle

def getsession():
  if not os.path.isfile("session.pkl"):
    session = twitter_selenium.TwitterSession(os.environ["twitteruser"],os.environ["twitterpass"],driver="chrome")
    f = open("session.pkl","wb")
    pickle.dump(session.cookies,f)
  else:
    f = open("session.pkl","rb")
    session = twitter.selenium(cookies=pickle.load(f),driver="chrome")
  return session
