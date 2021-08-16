from mastodon import Mastodon
import random
import requests
import time
import os
import json

describy = ["awesome", "cool", "swag", "amazing"]
kats = ["cat", "kat", "kitty"]

f = open('bot_config.json','r') 

bot_config = json.load(f)
tootdur = bot_config['dur']

mastodon = Mastodon(
    client_id = os.environ['client_id'],
    client_secret = os.environ['client_secret'],
    access_token = os.environ['access_token'],
    api_base_url = os.environ['baseurl']
)
#mastodon.log_in(
#    '1@2.com',
#    'goodpass123',
#    to_file = '.secrets'
#)
def get_random_unicode(length):

    try:
        get_char = unichr
    except NameError:
        get_char = chr

    # Update this to include code point ranges to be sampled
    include_ranges = [
        ( 0x0021, 0x0021 ),
        ( 0x0023, 0x0026 ),
        ( 0x0028, 0x007E ),
        ( 0x00A1, 0x00AC ),
        ( 0x00AE, 0x00FF ),
        ( 0x0100, 0x017F ),
        ( 0x0180, 0x024F ),
        ( 0x2C60, 0x2C7F ),
        ( 0x16A0, 0x16F0 ),
        ( 0x0370, 0x0377 ),
        ( 0x037A, 0x037E ),
        ( 0x0384, 0x038A ),
        ( 0x038C, 0x038C ),
    ]

    alphabet = [
        get_char(code_point) for current_range in include_ranges
            for code_point in range(current_range[0], current_range[1] + 1)
    ]
    return ''.join(random.choice(alphabet) for i in range(length))

def tootuz(num):
  print(str(num))
  if num == 0:
      tootus = "func1"
      tootify(tootus)
      mastodon.toot(tootus)
  if num == 1:
      tootus = 'Check out my ' + random.choice(describy) + ' ' + random.choice(kats)
      kitty = requests.get("https://thiscatdoesnotexist.com")
      kittyjson = mastodon.media_post(kitty.content, 'image/png')
      print(kittyjson)
      tootify(tootus)
      mastodon.status_post(status=tootus, media_ids=kittyjson['id'])
  if num == 2:
      print('Grabbing fake human.')
      r = requests.get('https://thispersondoesnotexist.com/image')
      mastodon.account_update_credentials(avatar=r.content, avatar_mime_type = 'image/jpeg', fields=[('unix', str(time.time()))])
      tootify2('New Human!', r.content, 'image/jpeg')
  if num == 3:
      r = requests.get("https://v2.jokeapi.dev/joke/Programming,Miscellaneous?format=txt")
      tootify2(r.text, None, None)
  if num == 4:
      red = requests.get('https://abnuosite.herokuapp.com/imgur2.php')
      r = requests.get(red.url)
      imgurpic = mastodon.media_post(r.content, 'image/png')
      mastodon.status_post(status='De Imgur Has Spoken', media_ids=imgurpic['id'], sensitive=True)
  if num == 5:
      r = requests.get('https://yomomma-api.herokuapp.com/jokes')
      penis = json.loads(r.text)
      tootify2(penis['joke'], None, None)
  if num == 6:
      r = requests.get('https://api.kanye.rest/')
      penis = json.loads(r.text)
      tootify2('A wise man once said this... ' + penis['quote'], None, None)
  if num == 7:
      print('Tooting -> Noise video')
      os.system('ffmpeg -y -f rawvideo -video_size 100x100 -pixel_format yuv420p -framerate 25 -i /dev/urandom -ar 48000 -ac 2 -f s16le -i /dev/urandom -t 5 output.mp4')
      f = open('output.mp4', 'rb')
      vids = mastodon.media_post(f.read(), 'video/mp4')
      mastodon.status_post(status=get_random_unicode(10), media_ids=vids['id'])
  if num == 8:
      print('Tooting -> Noise image')
      os.system('ffmpeg -y -f rawvideo -video_size 100x100 -pixel_format yuv420p /dev/urandom -ar 48000 -ac 2 -f s16le -i /dev/urandom output.png')
      f = open('output.png', 'rb')
      vids = mastodon.media_post(f.read(), 'image/png')
      mastodon.status_post(status=get_random_unicode(10), media_ids=vids['id'])
  

def tootify(fart):
    print('Tooting -> ' + str(fart))

def tootify2(fart, media, mime):
    print('Tooting -> ' + str(fart))
    if media == None:
        try:
            mastodon.toot(fart)
        except Exception as e:
            print('FartError: ' + str(e))
    if media != None:
        try:
            mediaj = mastodon.media_post(media, mime)
            mastodon.status_post(status=fart, media_ids=mediaj['id'])
        except Exception as e:
            print('FartError: ' + str(e))

tootuz(random.randint(0, 8))
#tootuz(2)
