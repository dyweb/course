# Git Workflow

## Submit your local change

Last topic, we list some common commands, like ``git init``, ``git clone``, ``git status``. Now we will track a change from your local repository to remote. 

For example we create a README.md file in your initialized directory. Now, run ``git status``

```
$ git status
On branch master

Initial commit

Untracked files:
  (use "git add <file>..." to include in what will be committed)

    README.md
```

As we see, git found a new file named README.md was created in the directory, and the file hasn't been tracked.

So, we follow it's guide, run ``git add`` to add the file to the git index, which is called stage changes.

```
$ git add README.md
$ git status
On branch master

Initial commit

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)

    new file:   README.md
```
Now, the file has been really added to git index, but before you want to submit it to remote repository, you should use ``git commit`` to create record contained all your stage changes.
```
$ git commit -m"Init"
[master (root-commit) 8ecc069] Init
 1 file changed, 1 insertion(+)
 create mode 100644 README.md
 
$ git status
On branch master
nothing to commit, working directory clean
```
This time, run ``git status``, you will see nothing to commit, it proves that your local change has been saved as a commit record.

Use ``git push`` to submit your commit to remote master branch.

```
$ git push origin master
```


## Update your local repository from remote

When you find the remote respositoy has updated some changes, you can use ``git pull`` to fetch the latest changes.
```
$ git pull origin master
```