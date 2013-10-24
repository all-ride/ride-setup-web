# Pallo: Web Setup

Installer hook to setup the Pallo web application through the [Composer](http://getcomposer.org) dependency manager.

When installed/updated through composer, this script will:

* make sure _public_ exists
* copy _vendor/pallo/web/src/index.php_ to _public/index.php_
* copy _vendor/pallo/web/src/.htaccess_ to _public/.htaccess_ (if not exists)