Environment
===========

You write and run your code on certain machine. It contains two parts, your code, and the execution environment of your code. Like your `index.php` and the `LNMP`
stack. see refernece for formal explaination.


* **local**: your laptop, PC.
* **remote**: server, bare metal, vps, ec2 etc.

Simplest: Develop -> Production
--------------------------------

You write code in your local machine, they deploy it to remote machine, which is the production environment. 

NOTE: Not all local environment is develop environment, you can use your own laptop to publish your works, DONT do this in SJTU, you will
get a phone call. Not all remote environment is production environment, you can use a server to write code, like you use vim or you sync 
code to server everytime you change something.

Problems
^^^^^^^^^^^^^^^^^^^^^

* You use Windows, but the server is running Ubuntu. 
* You use PHP5.6, but the server uses PHP5.3.
* You use Chinese as local (GB2312), but the server uses English (UTF-8).

You may have encounter similar problems when your are installing games or softwares, they cannot be installed to path with Chinese or space, and
the text are displayed as strange marks.

Solution
^^^^^^^^^^^^^^^^^^^^^

Use the exact same environment for your laptop and server.

But what if:

* You want to use Windows to play Dota. (BGM: I want to play some dota ...)
* You can't install dual system. 
* You have a small team working on the project, you can't force everyone to install Ubuntu.

Formal: Develop -> Test -> Production
-------------------------------------

You write you code locally, push to Git host, trigger test in CI (Continuous Integration), test pass, you deploy it to production. When you are working like this, 
you are highly likely not alone (but still single), either you are working on some opensource projects or you are working with a team (which has no girls). DONT use
this for your homework.

Problems
^^^^^^^^^^^^^^^^^^^^^

* Test works fine locally, but breaks in CI.
* CI pass, but the production system is down.
* CI pass, production works, your local environment can't pass test.

Solution
^^^^^^^^^^^^^^^^^^^^^

* Have detail guide for environment setup.
* Use the exact same environment for your laptop, CI server, Production server.

But what if:

* Someone forgot to write the guide. 
* Forgot to update CI or Production server. Worse if only production server is not up to date.

Complex: Develop -> Test -> QA -> Part of Production -> Production
------------------------------------------------------------------

tl;dw

How to setup a unfamiliar environment
-------------------------------------

* DONT be afraid.
* Backup your important things if you are NOT using virtual machine.
* READ the offical documentation before google.
* Google for stackoverflow answers.
* Read blogs
* Ask others
* Give up and use docker

this kind of work is inclued in a position called `Dev Ops`_

Future of Develop Environment
-----------------------------

* Cloud develop environment, ie: Koding, c9.io, Eclipse Che
* Hybird, ie: Koding, Coding.net
* Docker

Reference
---------

* `Wiki Deploy Environment`_ 
* `Dev Ops`_

.. _Wiki Deploy Environment: https://en.wikipedia.org/wiki/Deployment_environment
.. _Dev Ops: https://en.wikipedia.org/wiki/DevOps