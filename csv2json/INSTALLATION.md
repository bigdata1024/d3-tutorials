Using the Built-In Webserver in PHP 5.5
=======================================
Since PHP 5.4, the Server Application Programming Interface layer at the
Command Line Interface provides a built-in webserver that can be used for
development purposes.

This eliminates the need to set up a full-blown webservers just for simple
development tasks.

This web server is designed for developmental purposes only and it is
strongly recommended that it should should not be used in production use cases.

URI requests are served from the current working directory where
PHP was started, unless the -t option is used to specify an explicit
document root.

If a URI request does not explicity specify a file, then either
index.php or index.html in the given directory are returned.
If neither file exists, then a 404 HTTP response code is returned.

More information about this feature is available here
http://php.net/manual/en/features.commandline.webserver.php

Downloading and Setting up PHP 5.5 on Ubuntu
============================================

Create the following folder on your local hard drive. Make sure you own the folder

We will be using this later on.

$ mkdir /sandbox

Head out to http://www.php.net/downloads.php and download the tarball for PHP 5.5

Its approximately 15MB in size.

Once the tarball is downloaded, extract the contents so that we can compile it.

Change your current directory to the folder where PHP 5.5 was downloaded to
and run the following command to extract the contents:

$ tar -zxvf php-5.5.1.tar.gz

Then change your current working directory to the php-5.5.1 directory:

$ cd php-5.5.1

Run the following command to build and configure PHP 5.5.1 with built-in webserver support


$ ./configure --prefix=/sandbox/webserver --with-config-file-path=/sandbox/php --with-config-file-scan-dir=/sandbox/php.d --disable-all --enable-json --enable-cli --enable-pcntl


Run the following command to compile and install PHP 5.5.1

$ make && make install

Once the installation is completed, make sure PHP is available in the PATH,

so add it to your .profile or .bashrc files as follows:

export PATH=/sandbox/webserver/bin:$PATH

You can check if it loads properly by running the following command

$ php -v

You should see something similar to the following

PHP 5.5.1 (cli) (built: Aug  2 2013 23:43:09)
Copyright (c) 1997-2013 The PHP Group
Zend Engine v2.5.0, Copyright (c) 1998-2013 Zend Technologies

Running the Built-In Web Server
===============================
Now that PHP 5.5 has been installed lets start the webserver

Download the csv2json tutorial folder to your local computer

Change the current working directory to that folder and run the following
command to start up the built-in webserver on port 8000:


$ cd /home/iekpo/Labs/d3-tutorials/csv2json

$ php -S localhost:8000

You should see something similar to the follwing:

PHP 5.5.1 Development Server started at Fri Aug  2 23:50:56 2013
Listening on http://localhost:8000
Document root is /home/iekpo/Labs/d3-tutorials/csv2json
Press Ctrl-C to quit.

If you would like to bind it on all interfaces then run the following command:

$ php -S 0.0.0.0:8000

This should produce an output similar to:

PHP 5.5.1 Development Server started at Fri Aug  2 23:52:34 2013
Listening on http://0.0.0.0:8000
Document root is /home/iekpo/Labs/d3-tutorials/csv2json
Press Ctrl-C to quit.


Accessing the Webserver from a Browser
======================================

You should now be able to access your webserver from your browser now

http://localhost:8000/stacked-to-grouped-bar.html


