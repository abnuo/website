from scratchclient import ScratchSession, Studio
import scratchapi
import markovify
import console
from objc_util import on_main_thread
import requests
mode = 1
min = 0
max = 9000
max = max + min
username = os.environ["sUsername"]
password = os.environ["sPassword"]
on_main_thread(console.set_idle_timer_disabled)(True)
session = ScratchSession(username, password)
profile = session.get_user("BlorpusYeeter")
comments = scratchapi.getComments("BlorpusYeeter")
latestcomment = comments[0][1]
print("Latest comment id:", latestcomment)
#with open("scratchcorpus.txt", "a+") as f:
#  corpus = f.read()
#  for i in comments:
#    if not i[0] in corpus:
#      print("Comment", i[1], "not in corpus! Adding...")
#      f.write(i[0] + "\n")
#    else:
#      pass
corpus = '\n'.join([i[0] for i in comments])
with open("scratchcorpus.txt", "w") as f:
  f.write(corpus)

markov = markovify.Text(corpus, state_size=1)
newComment = markov.make_short_sentence(280)

print("New comment:", newComment)
profile.post_comment(str(newComment), parent_id=str(latestcomment))
