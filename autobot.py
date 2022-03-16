import json
import os
import time
import glob
import random

scripts = [i for i in glob.glob("bot/*.py") if not i.endswith("pklmake.py")]
script = random.choice(scripts)
command = f"python {script}"
f = open('bot_config.json', 'r')
config = json.loads(f.read())
dur = config['dur']

os.remove("bot/images/delete.me")
while True:
    os.system(command)
    time.sleep(dur)
