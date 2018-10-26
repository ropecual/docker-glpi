<?php
class DB extends DBmysql {
   public $dbhost     = getenv('$MYSQL_ROOT_PASSWORD');
   public $dbuser     = getenv('$MYSQL_DATABASE');
   public $dbpassword = getenv('$MYSQL_USER');
   public $dbdefault  = getenv('$MYSQL_PASSWORD');
}