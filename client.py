# import requests
# r = requests.post("server-address/add.php", data={'var1':'101','var2':'102'})
# print(r.url)
# print(r.content)

## OR

import httplib2
import urllib

http = httplib2.Http()
body = {'var1':'101','var2':'102'}
content = http.request("server-address/add.php",   # replace server-address with yout server's address
                 method="POST",					   # POST request
                 headers={'Content-Type':'application/x-www-form-urlencoded'},
                 body=urllib.parse.urlencode(body) )[1]
print(content.decode())
