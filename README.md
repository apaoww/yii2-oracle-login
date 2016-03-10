Yii 2 Oracle Login
==================
Login using oracle database usename

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist apaoww/yii2-oracle-login "dev-master"
```

or add

```
"apaoww/yii2-oracle-login": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```
<?php 

\apaoww\OracleLogin::widget(["username" => 'oracle_id_username', "password" => "password",
                "dsn" => '(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=127.0.0.1)(PORT=1521))(CONNECT_DATA=(SID=xe)))']); ?>
```

This could be use on Login model to validate the password for example:

```
public function validatePassword($attribute, $params)
    {
        $dsn = $this->getDsn();
        if (!$this->hasErrors()) {
            $oracle = OracleLogin::widget(["username" => $this->username, "password" => $this->password,
                "dsn" => $dsn['tns']]);
            if(!$oracle){
                $this->addError($attribute, 'Incorrect username or password.');
            }

        }
    }
```
                
