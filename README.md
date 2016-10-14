# Ride: Web Setup

Installer hook to setup the Ride web application through the [Composer](http://getcomposer.org) dependency manager.

When installed/updated through composer, this script will:

* make sure _public_ exists
* copy _vendor/ride/web/src/index.php_ to _public/index.php_
* copy _vendor/ride/web/src/.htaccess_ to _public/.htaccess_ (if not exists)

## Related Modules

- [ride/setup](https://github.com/all-ride/ride-setup-app)
- [ride/setup-app](https://github.com/all-ride/ride-setup-app)
- [ride/setup-base](https://github.com/all-ride/ride-setup-base)
- [ride/setup-cli](https://github.com/all-ride/ride-setup-cli)
- [ride/setup-cms](https://github.com/all-ride/ride-setup-cms)
- [ride/web](https://github.com/all-ride/ride-app)

## Installation

You can use [Composer](http://getcomposer.org) to install this application.

```
composer require ride/setup-web
```
