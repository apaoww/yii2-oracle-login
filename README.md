Yii 2 Oracle Login
==================
Login using oracle database usename

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist apaoww/yii2-oracle-login "*"
```

or add

```
"apaoww/yii2-oracle-login": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \apaoww\OracleLogin::widget(["username" => 'oracle_id_username', "oracle_password" => $this->password,
                "dsn" => '(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=127.0.0.1)(PORT=1521))(CONNECT_DATA=(SID=xe)))']); ?>```
