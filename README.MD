[![Build Status](https://travis-ci.org/mtigdemir/symfony-unit-test.svg?branch=master)](https://travis-ci.org/mtigdemir/symfony-unit-test)

## Install Symfony Skeleton 
```bash
composer create-project symfony/skeleton symfony-unit-test
```

## Install Symfony Web Server
```bash
composer require server --dev
php bin/console server:run
```


## Install Symfony Phpunit Bridge
## 
```bash
- composer require --dev symfony/phpunit-bridge
- ./vendor/bin/simple-phpunit
```

## Install Symfony Browser Kit
### This package is required for Controller Testing
```bash
- composer require --dev symfony/browser-kit
- ./vendor/bin/simple-phpunit
```

