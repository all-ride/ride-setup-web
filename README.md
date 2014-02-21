# Ride: Web Setup

Installer hook to setup the Ride web application through the [Composer](http://getcomposer.org) dependency manager.

When installed/updated through composer, this script will:

* make sure _public_ exists
* copy _vendor/ride/web/src/index.php_ to _public/index.php_
* copy _vendor/ride/web/src/.htaccess_ to _public/.htaccess_ (if not exists)