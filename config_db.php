<?php
class DB extends DBmysql {
   public $dbhost     = getenv('$MYSQL_ROOT_PASSWORD');
   public $dbuser     = getenv('$MYSQL_USER');
   public $dbpassword = getenv('$MYSQL_PASSWORD');
   public $dbdefault  = getenv('$MYSQL_DATABASE');
}