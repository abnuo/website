import eel
import requests
import os

# Set web files folder and optionally specify which file types to check for eel.expose()
#   *Default allowed_extensions are: ['.js', '.html', '.txt', '.htm', '.xhtml']
eel.init('web', allowed_extensions=['.js', '.html'])

@eel.expose                         # Expose this function to Javascript
def discord(x):
    r = requests.post('https://discord.com/api/webhooks/839988220203630623/f0e6qbNlT5cPmsP3M3638XEb_dEaeFoownCvOx3pdnebTR3FNWfAYGp-p6LV1Qff3xeT', data={"content": str(x)})

eel.start('index.html', mode=None, host='0.0.0.0', port=int(os.environ['PORT']))
