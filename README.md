README
======

QRL
---
* Author :    Raphaël
* Website :   http://www.onlinecreation.pro
* Demo :      http://bin.wf
* GIT :       https://github.com/onlinecreation/QRL

Credits
-------

QRL is based on 

* [Phurl](https://code.google.com/p/phurl/), a free and open source url shortening script 
* [PHP QR Code](http://sourceforge.net/projects/phpqrcode), a GPL QRcode generator script 
* the favicon is from the [famfamfam silk icons library](http://www.famfamfam.com/lab/icons/silk/)

How to install it
-----------------
    
Step 1: Place the content of the htdocs folder into the root folder of your webserver
    
Step 2: Open and fill the config.fillme.php file
    
Step 3: Rename config.fillme.php into config.php
    
Step 4: Open, read and eventually correct the db.sql file
    
Step 5: Inject into your MySQL database the db.sql file

Step 6: Make sure that a rewrite rule redirects the visitor who try to access 
to http://yourwebsite/([a-zA-Z0-9]+) to redirect.php?alias=$1

Step 7: Try your new url shortener website !
