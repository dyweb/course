# Assignment

## Hand In

- Email: web@dongyue.io
- GitHub / GitLab Tq:
  1. Crete a new repository and make it public
  2. Open an issue [here](https://github.com/dyweb/course/issues) and tell us your repository link
- QQ, Wechat is also OK!

## Due?
- Deadline: May 2nd
- Answers available next week

## Assignment I

Finish a simple To-do List application.

- Only one file "todo.php" is enough
    - Multiple files are also ok
- Try to implement displaying, creating, editing & deleting of to-do items
- No JS & CSS needed
    - Just focus on PHP coding
- (Advanced) Try to add file uploading in item creating form
    - *Tips: Use $_FILES superglobal*

## Assignment II

The output of the following code looks strange. Try to figure out why.

```php
<?php
$array = ['a', 'b', 'c', 'd'];
$array2 = [1, 2, 3, 4];
foreach ($array as &$item) {
    echo $item . PHP_EOL;
}

foreach ($array2 as $item) {
    echo $item . PHP_EOL;
}

echo implode($array, ',') . PHP_EOL;    // Outputs a,b,c,4
echo implode($array2, ',') . PHP_EOL;   // Outputs 1,2,3,4
?>
```


## Assignment III

- Implement simple login logic
- 4 files needed: `index.php`, `private.php`, `login.php`, `logout.php`
- Only a user who has logged in has access to `private.php`
- Use `Session` to finish this assignment

## Assignment IV

Finish an event registering site (simple-tongqu).

- You need to use implement:
    - Event List
    - Event Registration CRUD
        - Register an event
        - Modify registering info
        - Exit an event
        - Get all the registrations
    - Login is not needed
      - You can implement it anyway
    - Keep data in disk files
      - No database is needed
- You need to split components, logic & views
    - aka. MVC in later lectures
- Suggested structure
    - register.php
    - event.php
    - libraries/functions.php
    - libraries/Event.php
    - libraries/File.php
    - views/register_xxxx.php, views/register_yyyy.php
    - views/event_xxxx.php, views/event_yyyy.php

## Reading Materials

### Tutorials
- [Codecademy PHP Tutorial](https://codecademy.com)
- [*PHP and MySQL Web Development (4th edition)*](https://book.douban.com/subject/2118632/)
- [慕课网 PHP 入门篇](http://www.imooc.com/view/54)
- [慕课网 PHP 进阶篇](http://www.imooc.com/view/26)
- [PHP Fundamentals](http://code.tutsplus.com/courses/php-fundamentals)

### Guides
- [PHP Manual](http://www.php.net/manual)
- [The Best Way to Learn PHP](http://code.tutsplus.com/tutorials/the-best-way-to-learn-php--net-22287)
- [PHP: The Right Way](http://www.phptherightway.com/)
