import requests
import json
apikey = "ZZX2MOY2BVGV"
def searchTenor(query, limit):
  urls = []
  r = requests.get(
    "https://api.tenor.com/v1/search?q=%s&key=%s&limit=%s" % (query, apikey, limit))
  if r.status_code == 200:
    giff0rs = json.loads(r.content)
    giff0rs = giff0rs['results']
    for i in giff0rs:
      for x in i['media']:
        urls.append(x['gif']['url'])
    return urls
  else:
    giff0rs = None
