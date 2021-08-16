import json
import os
import time

f = open('bot_config.json', 'r')
config = json.loads(f)
dur = config['dur']

while True:
    os.system('python bot.py')
    time.sleep(dur)
