# Oro PHPStan example

This repository was created to demonstrate PHPStan issue during analysis of Oro Extend Entities.

## Running checks

Clone this repository
```
https://github.com/x86demon/oro-phpstan-example.git
```

Install dependencies
```
cd oro-phpstan-example
composer install
```

### Oro application source code praparations:

Extract app-example.tar.bz2 somewhere
For example:

```
cp app-example.tar.bz2 /tmp
cd /tmp
tar -xvjf app-example.tar.bz2
```

### Run checks
```
export ORO_APPLICATION_PATH=/tmp/app-example
./vendor/bin/phpstan analyze -l0 "$ORO_APPLICATION_PATH/vendor/oro/crm"
```
