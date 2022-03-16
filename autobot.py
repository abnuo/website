import json
import os
import time
import glob

scripts = glob.glob("bot/*.py")
script = random.choice(scripts)
command = f"python {script}"
f = open('bot_config.json', 'r')
config = json.loads(f.read())
dur = config['dur']

while True:
    os.system(command)
    time.sleep(dur)
