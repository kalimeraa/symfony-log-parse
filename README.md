# Application

### API Architecture
- Runs on :90002
- [GET] => /count?serviceNames[]=USER-SERVICE&serviceNames[]=INVOICE-SERVICE&startDate=2021-08-17 09:21:55&endDate=2021-08-18 09:31:56&statusCode=201


### Installation
```
  make run
  make enter
  php bin/console doctrine:migrations:migrate
```

### How to test importing interruption
```
  open /var/log/logs.txt
  add a blank line to line 19.
  run php bin/console app:parse yes
  check logs table it will add all up to line 19 and throw an exception
  delete blank line
  run again php bin/console app:parse yes
  you will see it will add last 2 rows to logs table
```

### RUN TEST
```
    php bin/console --env=test doctrine:database:create
    php bin/console --env=test doctrine:schema:create
    php bin/console doctrine:fixtures:load --env=test
    ./vendor/bin/phpunit
```
