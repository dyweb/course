# Git Setup

## Install on windows

Maybe it's complicated, but I don't use windows for several years. But with the big news for ubuntu in windows10, everything may become easy.

## Install on Mac OS X or Linux

I don't want to tell you, because it's so easy.

## Use command line

If you are in Windows

- Go to the directory you want to work in, and click your right mouse and choose the git bash.
- Input 'git' to see the usage

if you are in Mac OS X or Linux
- Input 'git' to see the usage

if should look like this 

```
$ git
usage: git [--version] [--help] [-C <path>] [-c name=value]
           [--exec-path[=<path>]] [--html-path] [--man-path] [--info-path]
           [-p | --paginate | --no-pager] [--no-replace-objects] [--bare]
           [--git-dir=<path>] [--work-tree=<path>] [--namespace=<name>]
           <command> [<args>]
```

## First command: set up your personal info

```
$ git config --global user.name [username]
$ git config --global user.email [email]
```

The commands above will let the git know who you are. the  ``global``  option will set the attribute globally.

Remove the ``global`` will set the attribute inside your project.



