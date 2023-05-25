Database extension for DM
=========================
A database extension for DM database

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist luguohuakai/yii2-dm "*"
```

or add

```
"luguohuakai/yii2-dm": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
'components' => [
    'db' => [
        'class' => 'luguohuakai\db\dm\Connection',
        'dsn' => 'dm:host=localhost:xxx;dbname=xxx',
        'username' => 'SYSDBA',
        'password' => 'SYSDBA',
    ]
]
```