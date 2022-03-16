import twitter_selenium
import pickle
import os
from selenium.webdriver.chrome.options import Options
options = Options()
options.addArguments("--window-size=1920,1080"); 
options.addArguments("--disable-gpu"); 
options.addArguments("-- disable-extensions"); 
options.setExperimentalOption("useAutomationExtension", false); 
options.addArguments("--proxy-server='direct://'"); 
options.addArguments("--proxy-bypass-list=*"); 
options.addArguments("--start-maximized"); 
options.addArguments("--headless"); 
options.add_argument("user-agent=Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.50 Safari/537.36")

def getsession():
  if not os.path.isfile("session.pkl"):
    session = twitter_selenium.TwitterSession(os.environ["twitteruser"],os.environ["twitterpass"],driver="chrome",options=options)
    f = open("session.pkl","wb")
    pickle.dump(session.cookies,f)
  else:
    f = open("session.pkl","rb")
    session = twitter.selenium(cookies=pickle.load(f),driver="chrome",options=options)
  print(session.driver.execute_script("return navigator.userAgent"))
  return session
