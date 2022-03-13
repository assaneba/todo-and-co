# ToDo & Co


Application to manage daily tasks

## Installation

### Prerequisites 

Install GitHub (<https://gist.github.com/derhuerst/1b15ff4652a867391f03>) .\
Install Composer (<https://getcomposer.org/>)

Symfony 4.4 requires PHP 7.1.3 or higher to run.\
Prefer MySQL 5.6 or higher.

### Download

[![Repo Size](https://img.shields.io/github/repo-size/assaneba/todo-and-co.svg?label=Repo+Size)](https://github.com/assaneba/todo-and-co/tree/master) \
After Git installation execute the following command line to download project into your chosen directory:
```
git clone https://github.com/assaneba/todo-and-co.git

```

Install dependencies by running the following command:
```
composer install
```

### Database

Database connection in .env file.\
```
DATABASE_URL=mysql://root:@127.0.0.1:3306/todo-and-co?serverVersion=5.7
```

Create database:
```
php bin/console doctrine:database:create
```

Build the database structure using the following command:
```
php bin/console doctrine:migrations:migrate
```

Load the initial data
```
php bin/console doctrine:fixtures:load
```

### Run the web application

Launch the Apache/Php runtime environment by using :
```
php bin/console server:run
```
#### Then go to <http://localhost:8000> from your browser.

### Users accounts

Default password for all users is ```passer12345```\
Users whose username begin with ```admin``` have admin role and those username begin with ```user``` have user role 

## Creator

Assane Thione Ba

[![WebSite Status](https://img.shields.io/website-up-down-green-red/https/philippebeck.net.svg?label=https://assaneba.com)](https://assaneba.com)
[![GitHub Followers](https://img.shields.io/github/followers/assaneba.svg?label=GitHub+:+assaneba+|+Followers)](https://github.com/assaneba)
[![Twitter Follow](https://badgen.net/twitter/follow/assanetba)](https://twitter.com/assanetba)
