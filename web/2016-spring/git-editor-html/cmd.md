# Git Command

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