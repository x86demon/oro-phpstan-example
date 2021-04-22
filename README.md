# Oro PHPStan example

This repository was created to demonstrate PHPStan issue during analysis of Oro Extend Entities. Requires Oro application to be installed

## Oro application installation steps

Install composer2 https://getcomposer.org/download/

Create MySQL DB for an application

```
mysqladmin create oro_crm
```

Get OroCRM source code

```
git clone https://github.com/oroinc/crm-application.git
cd crm-application
git checkout 5.0.0-alpha.1
```

Copy config/parameters.yml.dist to config/parameters.yml, edit it and set correct credentials to access the database

Install the application without sample data, translations, and assets
```
composer install

./bin/console oro:install --user-name=admin --user-email=admin@example.com --user-firstname=John --user-lastname=Doe --user-password=admin --sample-data=n --symlink --organization-name=Test --application-url="http://localhost/" --skip-assets --skip-download-translations --skip-translations --formatting-code=en --language=en

./bin/console cache:warmup
```

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

Run checks
```
export ORO_APPLICATION_PATH=<path_to_oro_crm_application>
./vendor/bin/phpstan analyze -l0 "$ORO_APPLICATION_PATH/vendor/oro/crm"
```
