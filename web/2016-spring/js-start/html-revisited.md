# HTML Revisited

## Nginx

A sample `/etc/nginx/conf.d/playground.conf`:

```
server {
  root /playground/;
  server_name playground.lk;
}
```

More: listen, index, sendfile, try_files, location block, with php-fpm...

BTW: Got Nginx 1.8.1? Google 'nginx ppa'.

Q: No 'playground.lk'? A: Modify `/etc/hosts`.

Q: Who loads this .conf? A: See `/etc/nginx/nginx.conf`.

## HTML

A sample `/playground/0411/index.html`:

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SOS Dan web site</title>
  <link rel="icon" href="http://www.haruhi.tv/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="main">
    <p>あなたは <span class="number">００２９８７３</span> 人目の訪問者です。</p>
    <h1 style="color:red">ＳＯＳ団のサイトにようこそ！</h1>
    <p><img src="http://www.haruhi.tv/img/zozlogo.jpg" alt="SOS Logo" title="Hey"></p>
    <h2><a href="http://www.haruhi.tv/" target="_blank">入り口</a></h2>
    <p>
      メールはこちらから→
      <img src="http://www.haruhi.tv/img/post_no.jpg" alt="In Construction">
    </p>
  </div>
</body>
</html>
```

Q: What does each tag and attribute mean? A: See [img](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img) and more at [HTML | MDN](https://developer.mozilla.org/en-US/docs/Web/HTML)!

[live demo](https://jsfiddle.net/arrowrowe/L8vugLdx/)

## CSS

A sample `/playground/0411/main.css`:

```css
.main {
  text-align: center;
}

.number {
  color: white;
  background-color: black;
}

a {
  text-decoration: none;
}
```

Just a prep for the CSS lecture... See [selectors](https://developer.mozilla.org/en/docs/Web/Guide/CSS/Getting_started/Selectors), [text-align](https://developer.mozilla.org/en/docs/Web/CSS/text-align) and more at [CSS | MDN](https://developer.mozilla.org/en-US/docs/Web/CSS)!

## JavaScript

```html
<h1 style="...">...</h1>       | <span onclick="...">...</span>
                               |
<style> /* ... */ </style>     | <script> /* ... */ </script>
                               |
<link href="...">              | <script src="..."></script>
```

[live demo](https://jsfiddle.net/arrowrowe/pmahvd3g/)

Q? Just move on...
