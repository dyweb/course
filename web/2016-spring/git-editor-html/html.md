# HTML

## What is HTML?

- HyperText Markup Language.
- Describe web documents (the basic of web).
- Consist of different tags.

When you type a domain in browser, you send a request the website server. 

The website server will receive your request and return a HTML string to you. 

The browser will interpret the HTML string and display the web page.



## A Sample HTML

```
<!DOCTYPE html>
<html>
<head>
    <title>My first html</title>
</head>
<body>
    <div style="background-color: green">
        <p> My first paragraph </p>
    </div>
    <p>My second paragraph.</p>
</body>
</html>
```

- The text between ``<html>`` and ``</html>`` describes an HTML document.
- The text between ``<head>`` and ``</head>`` provides information about the document.
- The text between ``<title>`` and ``</title>`` provides a title for the document.
- The text between ``<body>`` and ``</body>`` describes the visible page content.
- The text between ``<div>`` and ``</div>`` describes a block element.
- The text between ``<p>`` and ``</p>`` describes a paragraph.


## HTML DOM TREE

If you look the above sample carefully, you will find the structure of the HTML is a tree.

```
html
 |    \
head body
 |     |  \
title div  p
       |
       p
```

This standard makes HTML more structuring, and be easy converted to object model which we can easily modify it.

## Reference

- [W3schoool HTML Tutorial](http://www.w3schools.com/html/default.asp)

