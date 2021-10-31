import json
import os
import time

command = "python bot.py & python newmaker.py"
f = open('bot_config.json', 'r')
config = json.loads(f.read())
dur = config['dur']

while True:
    os.system(command)
    time.sleep(dur)
