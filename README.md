# Kapdabazzar API !

Hi this is the documentation for  **Kapdabazzar API**. 
https://kapdabazzar.com 
Based on WooCommerce API.


# Endpoint

[https://www.kapdabazzar.com/wp-admin/neurasoft.php](https://www.kapdabazzar.com/wp-admin/neurasoft.php)
## Create API keys

Make a **[GET]** request and please don't send empty requests.
Use parameters in Postman or Query strings in the URl.
#### Attributes
'**user**'  - Find the user id using the **USER API** .
'**d**'       - Name of the api key / description
'**p**'  -      Permissions for the user (Can be 'read', 'write', 'read/write')

Note that the above fields have types int, string and string respectively.



|           parameters     |sample data              |Type                        |
|----------------|-------------------------------|-----------------------------|
|user|  			35          |Integer            |
|d          |  `"test"`            |String            |
|p         |`read_write`|String|


https://www.kapdabazzar.com/wp-admin/neurasoft.php?user=35&d=test&p=read
## Request and Response Headers
### Request

1.  Accept:
    
	    text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3
    
2.  Accept-Encoding:
    
		    gzip, deflate, br
    
3.  Accept-Language:
    
		  en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7
    
4.  Cache-Control:
    
	    max-age=0
    
5.  Connection:
    
	    keep-alive
    
6.  Cookie:
    
	    wordpress_sec_64084e2ed890a6d31dfdb7a656d32a41=debjyoti%7C1571558003%7Cif249VakWH7BwjaU0PO97RhqRwEazpatMI3gA3rcjMS%7C94dcbf3a696b87a18536693c727e7a5121a11430406215d1bfe825b113df9b35; redux_blast=1571311666; tumbas_login_register=#customer_login; wp-settings-35=mfold%3Do%26libraryContent%3Dbrowse%26urlbutton%3Dpost; wp-settings-time-35=1571381113; PHPSESSID=ma68e7h5p2qj6dle3dev9fn7s4; wordpress_logged_in_64084e2ed890a6d31dfdb7a656d32a41=sashwat%7C1571558003%7Cif249VakWH7BwjaU0PO97RhqRwEazpatMI3gA3rcjMS%7C47f02b93dc6d0bf478de351371017de415026a6cb93f2a9691e9e6cd96692baa; tk_ai=woo%3ACl2JePtTm%2FB5rfvpzUbWEjFT
    
7.  Host:
    
	    www.kapdabazzar.com
    
8.  Sec-Fetch-Mode:
    
	    navigate
    
9.  Sec-Fetch-Site:
    
	    none
    
10.  Sec-Fetch-User:
    
		  1
    
11.  Upgrade-Insecure-Requests:
    
		  1
    
12.  User-Agent:
    
		 Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Mobile Safari/537.36

### Response

1.  Access-Control-Allow-Credentials:
    
	    true
    
2.  Access-Control-Allow-Methods:
    
	    POST, GET, OPTIONS, PUT, DELETE
    
3.  Access-Control-Allow-Origin:
    
4.  Cache-Control:
    
	    no-store, no-cache, must-revalidate
    
5.  Connection:
    
	    Keep-Alive
    
6.  Content-Type:
    
	    application/json
    
7.  Date:
    
	    Fri, 18 Oct 2019 11:51:11 GMT
    
8.  Expires:
    
	    Thu, 19 Nov 1981 08:52:00 GMT
    
9.  Keep-Alive:
    
	    timeout=5, max=100
    
10.  Pragma:
    
		    no-cache
    
11.  Server:
    
		    Apache
    
12.  Transfer-Encoding:
    
		    chunked
    
13.  X-Frame-Options:
    
		    SAMEORIGIN
    
14.  X-Powered-By:
    
		    PHP/7.3.9
## Faulty Parameters

BAD REQUEST

