<?php

/**
 *
 */
class ClassName
{

  private $_host = '';
  private $_db_name = '';
  private $_username = '';
  private $_password = '';
  private $_conn;

  function __construct()
  {
    $this->_conn = null;

    try {
      $this->_conn = new PDO('mysql:host='.$this->_host.';dbname='.$this->_db_name.';user='.$this->_username.';pass='.$this->_password.';');
      $this->_conn->exec('set names utf8');
    } catch (\Exception $e) {
      echo $e->getMessage();
    }


    return $this->$_conn;
  }
}


 ?>
