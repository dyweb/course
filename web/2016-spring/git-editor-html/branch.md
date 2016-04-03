# Git Branch

## What is branch?

- Nearly every VCS has some form of branching support. 
- Branching means you diverge from the main line of development and continue to do work without messing with that main line.

see the following picture

![image](./images/branch.png)

## Working with branches

### Create branch

``git branch <branch name>``

### Switch branch

``git checkout <branch name>``

It is worth mentioning that if you want to checkout to an inexistent branch, you will get error message. Like this one.

```
$ git checkout vain-branch
error: pathspec 'vain-branch' did not match any file(s) known to git.
```
But if you add ``-b`` option, you will create a new branch and switch to the new branch
```
$ git checkout -b vain-branch
Switched to a new branch 'vain-branch'
```


### Merge branch

See the above picture, you will find sometimes branches should be merged. Run the following command, you will merge appointed branch into your current branch.

``git merge <branch name>``

But frequently, The operation won't execute well when same codes were modified by different people in different branch. This time, when you run ``git merge``, git will tell you where are the conflicts. Like this one.

```
$ git merge gh-pages
Auto-merging index.html 
CONFLICT (content): Merge conflict in index.html 
Automatic merge failed; fix conflicts and then commit the result.
```
You can see the conflict is in 'index.html', so open the file and find the conflict mark.

```
<<<<<<< HEAD
The codes in current branch
====== 
The codes in merging branch 
>>>>>>> Merging branch
```
The codes under the ``<<<<<<< HEAD`` is your current branch codes, the codes between the ``====== `` and `>>>>>>> Merging branch` is the codes in merging branch.

Here is a sample.
```
<<<<<<< HEAD:index.html
<div id="footer">sway</div>
=======
<div id="footer">
sway
</div>
>>>>>>> gh-pages:index.html
```

## Reference

- [Learn Git Branching](http://pcottle.github.io/learnGitBranching/)
