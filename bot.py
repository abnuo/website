from mastodon import Mastodon
import random
import requests
import time
import os

describy = ["awesome", "cool", "swag", "amazing"]
kats = ["cat", "kat", "kitty"]

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

while True:
    tootuz(random.randint(0, 2))
    time.sleep(10)

#tootuz(2)
