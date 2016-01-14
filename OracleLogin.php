<?php

namespace apaoww\oraclelogin;

use  yii\web\Session;

/**
 * This is just an example.
 */
class OracleLogin extends \yii\base\Widget
{
    public $username;

    public $password;

    public $dsn;

    public function run()
    {
        $session = new Session;
        if (!@oci_connect($this->username, $this->password, $this->dsn ,"AL32UTF8")) {
            $e = oci_error();
            $session->set('oracle_error', $e['message']);
            throw new \yii\web\HttpException(403, $e);
            return false;
        } else {
            return true;
        }


    }



}
