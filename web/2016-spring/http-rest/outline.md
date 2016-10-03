## HTTP & RESTful API

0. What happened entering a website (Simple Ver.) 5 min
    - https://github.com/alex/what-happens-when
1. How can we get access to pages? 5 min
    - Type an address and enter
    - The browser sends a request to a server
    - The server gives back a response
    - The browser parse the response and render the page
2. What does request/response pair work? 10 min
    - By a application layer protocol HTTP
        - Stateless
        - Port: 80
    - Where is the server?
        - IP address
        - DNS Server
            - DNS Pollution
    - How to observe HTTP?
        - Chrome DevTool
        - Fiddler
3. Basic structure of HTTP 20 min
    - Version   1 min
        - HTTP/1.0, HTTP/1.1, HTTP/2.0
    - URI   2 min
        - URL, URN
        - Locator for resources
        - format: scheme:[//[user:password@]host[:port]][/]path[?query][#fragment]
        - protocol, http, https, ftp, ...
        - server name ip
        - port
        - path
        - query string
        - fragment
    - Verb  5 min
        - GET
        - POST
            - Post Content
            - x-www-url-encoded
            - form-data
            - customized type
        - PUT/DELETE/PATCH
        - HEAD/OPTIONS
    - Status Code   5 min
        - 1xx
        - 2xx
            - 200 OK
            - 201 Created
            - 202 Accepted
            - 204 No Content
        - 3xx
            - 301 Moved Permanently
            - 302 Moved Temporarily (header Location)
            - 304 Not Modified
        - 4xx
            - 400 Bad Request
            - 401 Unauthorized
            - 403 Forbidden
            - 404 Not Found
            - 405 Method Not Allowed
            - 409 Conflict
        - 5xx
            - 500 Internal Server Error
            - 501 Not Implemented
            - 502 Bad Gateway
            - 503 Service Unavailable
    - Message Format    5 min
        - Request/Response Pair
        - General Header
            general-header = Cache-Control            
               | Connection        
               | Date              
               | Pragma            
               | Trailer           
               | Transfer-Encoding 
               | Upgrade           
               | Via               
               | Warning
        - Entity Header
            entity-header  = Allow                    
               | Content-Encoding  
               | Content-Language  
               | Content-Length    
               | Content-Location  
               | Content-MD5       
               | Content-Range     
               | Content-Type *
               | Expires           
               | Last-Modified
        - Request Header
            GET /articles/http-basics HTTP/1.1
            Host: www.articles.com
            Connection: keep-alive
            Cache-Control: no-cache
            Pragma: no-cache
            Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8

            request-header = Accept *
               | Accept-Charset    
               | Accept-Encoding   
               | Accept-Language   
               | Authorization     
               | Expect            
               | From              
               | Host *
               | If-Match          
               | If-Modified-Since 
               | If-None-Match     
               | If-Range          
               | If-Unmodified-Since
               | Max-Forwards       
               | Proxy-Authorization
               | Range              
               | Referer *
               | TE                 
               | User-Agent *
        - Response Header
            response-header = Accept-Ranges
                | Age
                | ETag              
                | Location *
                | Proxy-Authenticate
                | Retry-After       
                | Server            
                | Vary              
                | WWW-Authenticate
        - Body
            - HTML
            - Other format
4. Identification and Authentication
    - Identification    5 min
        - Host, Referer, User-Agent
        - Cookie
        - Session
        - OAuth
    - Authentication    5 min
        - Basic Auth
        - Secure HTTP (SSL)
5. HTTP Caching 5 min
    - Client Cache
        - Cache-Control
            - no-cache
            - max-age
        - Expires (Old)
    - Server Cache
        - Last-Modified
        - ETag
        - Application cache
6. RESTful API 17 min
    - API?  1 min
    - REST? 1 min
        - Resource based
        - Web Service
    - REST examples 5 min
        - GitHub API
    - How to use RESTful API    10 min
        - curl
        - Postman
7. RESTful API Design 35 min
    - Versioning    2 min
        - Accept
        - Ugly URL
    - Naming        5 min
        - nouns
    - Verbs         5 min
    - Filtering (Query String)  5 min
    - Status Code   5 min
    - Documents     2 min
    - Authentication 9 min
        - Cookie based  2 min
        - JWT           1 min
        - OAuth         1 min
    - Content Type
        - JSON          2 min
        - XML           2 min
