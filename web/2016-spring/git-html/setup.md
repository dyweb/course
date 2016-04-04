# Git Setup

## Install on windows

Maybe it's complicated, but I don't use windows for several years. But with the big news for ubuntu in windows10, everything may become easy.

## Install on Mac OS X or Linux

I don't want to tell you, because it's so easy.

## Use command line

If you are in Windows

- Go to the directory you want to work in, and click your right mouse and choose git bash.
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

## The basic commands you have to know

### Initialize a repository
``git init``
```
$ git init
Initialized empty Git repository in /Users/sway/WebProj/test-project/.git/
```

This command will initialize a repository in current directory.
```
$ ls -a
.    ..   .git
```
 And as you see, a new subdirectory named ``.git`` was created in current directory which contains all your repository files.

### Clone an existing repository

``git clone [url]``

```
$ git clone https://github.com/dyweb/web-stuff
remote: Counting objects: 695, done.
remote: Compressing objects: 100% (11/11), done.
remote: Total 695 (delta 4), reused 0 (delta 0), pack-reused 684
Receiving objects: 100% (695/695), 1.56 MiB | 224.00 KiB/s, done.
Resolving deltas: 100% (320/320), done.
Checking connectivity... done.
```

This will copy the a existing remote repository into your local and every version of every file for the history of the project will be pulled down.

### Checking the status of the repository

``git status``

```
$ git status

```
As the title says, this command will show you current status of the repository.



