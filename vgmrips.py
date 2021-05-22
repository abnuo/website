import requests
import random
import sys
from bs4 import BeautifulSoup

def getVGM():
    r = requests.get(sys.argv[1])
    urls = []
    soup = BeautifulSoup(r.text)
    songs = soup.find("div", {"id": "details"})
    table = soup.find("table", {"class": "playlist"})
    tbody = soup.find("tbody")
    for item in tbody.find_all('tr'):
        if 'data-audiourl' in str(item):
            urls.append(item['data-audiourl'])
    print(','.join(urls))
getVGM()
