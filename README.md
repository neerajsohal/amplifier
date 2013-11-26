# Amplifier

Amplifier is an extension of Facebook PHP SDK. It provides additional functions to Facebook's SDK.

Couple of months back, I started writing my own functions on top of Facebook's PHP SDK to cut down the development time by defining methods for tasks like:

- whether a person liked a page or not
- has he provided support for a particular extended permission

I am building Amplifier by keeping Composer in mind. Therefore, for installing Amplifier, you should be comfortable with composer. If you are not, I suggest you learn it. It's one of the best things that has happened to PHP and will surely make you a better programmer :)

## Requirements

- Facbeook's PHP SDK
- PHP version > 5.5.*

## Installation

To install via Composer, Simply add a dependency on neerajsohal/amplifier to your project's composer.json file. Here is a minimal example of a composer.json file that just defines a dependency on Amplfier's master branch:

```json
{
    "require": {
        "neerajsohal/amplifier": "dev-master"
    }
}
```

If you want to use other version, you can check [https://packagist.org/packages/neerajsohal/amplifier](https://packagist.org/packages/neerajsohal/amplifier). It lists all the versions available. I strongly recommend latest stable version of master branch version for production.


##links

Amplifier on Packagist: [https://packagist.org/packages/neerajsohal/amplifier](https://packagist.org/packages/neerajsohal/amplifier)

Facbeook's PHP SDK on Github: [https://github.com/facebook/facebook-php-sdk](https://github.com/facebook/facebook-php-sdk)