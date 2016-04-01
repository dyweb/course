# Git Introduce

## What is Git?

The widely used source code management system for software development in the world.

## History

- In 2002, the developers of the Linux kernel use [Bitkeeper](https://en.wikipedia.org/wiki/BitKeeper) to maintain the project, but the Bitkeeper is not good for developing.
- In 2005, the copyright holder of BitKeeper, Larry McVoy, had withdrawn gratis use of the product after claiming that Andrew Tridgell had reverse-engineered the BitKeeper protocols.
- In 2005, Torvalds decided to develop a distributed system to replace the Bitkeeper. So, he create git.

## Version Control and Collaboration

You won't like this:

````
D:/Schoolwork/Group-work-1
  -- our-fancy-work-v1-outline-only
  -- our-fancy-work-v2-victor-part-done
  -- our-fancy-work-v2-cece-part-done
  -- our-fancy-work-v3-victor-and-cece-merged
  -- our-fancy-work-v3-victor-part-updated
  -- our-fancy-work-v4-victor-part-updated-again
  -- our-fancy-work-v5-victor-part-updated-again-and-cece-merged
  -- our-fancy-work-v8-final
  -- our-fancy-work-v9-final-updated-by-victor
  -- our-fancy-work-v9-final-updated-by-cece
  -- our-fancy-work-v10-final-updated-merged
  -- our-fancy-work-v11-final-final
````

What if we have Git?

````
D:/Schoolwork/Group-work-1
  -- our-fancy-work
  -- .git # <- Hidden
````

````
$ git log --graph --oneline
* 1fa35d1 final final
*   d0eb39d Merge branch 'cece'
|\  
| * 10604d8 final updated by cece
* | 243bd99 final updated by victor
|/  
* 8e4c071 final
*   a8e02e7 Merge branch 'master' into cece
|\  
| * 222a46f victor part updated again
| * 391ea6c victor part updated
* |   7b3fe97 Merge branch 'master' into cece
|\ \  
| |/  
| * e919d2d victor part done
* | e0c35e5 cece part done
|/  
* 8ab6c50 outline only
````

Benefits?
- Detailed history.
- Better collaboration: safely write on your own, then merge.
- Peer review.

For coders?
- Safe master.
- Every branch safe: "It works here!"

## Reference

[Wike.Git(software)](https://en.wikipedia.org/wiki/Git_(software))
