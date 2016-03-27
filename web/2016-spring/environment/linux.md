# Linux

- Cheap. No License fee, less electricity fee.
- Open source.

NOTE: Mac OSX is based on Unix, but it works like Linux distributions most of the time.

## Differences between Linux and Windows in Command line

This only list some frequently asked questions when you start using command line.

### Directory separtor

**Windows use `\` as directory separator, while Linux use `/`**

Example

Windows

`partition` + `:\` + `folder` + `\` + `filename`

````
C:\Program Files\Adobe\Photoshop CC\amtlib.dll
D:\学习\abs-132.rmvb
````

Linux

`Folder` + `/` + `filename`. Linux DOES NOT have `partition` in path. NO `C`,`D` etc.

````
/home/at15/Downloads/abs-132.rmvb
/etc/nginx/conf.d/tongqu.lk.conf
````

However, most programming lanague can deal with it automaticlly.

### Case sensitive

- **Windows is NOT case sensitive**
- **Linux IS cas sensitvie**

Winodws

````
D:\Code\Happy.txt
D:\Code\happy.txt  -> This file is not allowed
````

Linux

````
/home/at15/Downloads/abs-123.rmvb  -> ok
/home/at15/Downloads/abs-123.rmvB  -> ok, notice that b is upper case.
````

This could cause TROUBLE when you are using Git. 

TODO: how to solve that trouble ... and image, error message for that trouble.

### Password

- **Windows have `*` to show you how many words you have entered for password**
- **Linux shows nothing**

TODO: images