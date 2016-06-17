from bs4 import BeautifulSoup
import feedparser
import webbrowser

feed = feedparser.parse('http://home.web.cern.ch/scientists/updates/feed')

'''soup = BeautifulSoup(feed, "xml")
print (soup.title)

feedurl = feedparser.parse('http://home.web.cern.ch/scientists/updates/feed')
statusupdate = feedurl.entries[0].content
soup = BeautifulSoup(statusupdate[0]['value'])
print (soup.find("img")["src"])'''

'''
for post in feed.entries:
	fo = open('urllist.txt', 'a')
	fo.write(post.link + "\n")
	fo.close()

with open('wordlist.txt', 'r') as searchfile:
    for line in searchfile:
        if word in line:
                print line
'''

for post in feed.entries:
	with open('urllist.txt', 'r') as fo:
		flag = 0
		for line in fo:
			if post.link in line:
				flag = 1
				break
		if flag == 0: 
			fo = open('urllist.txt', 'a')
			fo.write(post.link + "\n")

'''
new = 2 # open in a new tab, if possible
url = "http://localhost/try.php"
webbrowser.open(url,new=new)
'''