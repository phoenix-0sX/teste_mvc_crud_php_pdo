<?php
require_once SITE_ROOT.DS.'config.php';

class Getconnection
{

  public static function make($sdn, $USER_NAME, $PASSWORD, $APP_NAME)
  {
    try {
      define('APP_NAME', $APP_NAME);
      $db = new PDO($sdn, $USER_NAME, $PASSWORD);
      //set some db attributes
      $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $db;
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}

return Getconnection::make($sdn, $USER_NAME, $PASSWORD, $APP_NAME);
?>