<?php
// include packed version of Frosted MySQL Library
include("../packed/mysql.class.packed.php");

// include configuration
include("../examples/mysql.config.php");

// create instance
$sql = new mysqlClass();

// connect to mysql
#$sql->connect();



// it is possible to build every mysql replace query with Frosted MySQL Library
// Frosted MySQL Library support all types of replacing data as mysql does

// insert by column list
$sql->replace("table_name")
	->columns("name", "email", "timestamp")
	->values("eisbehr", "test@test.com", time())
	->showQuery()
	/*->run()*/;

// insert and set every column
$sql->replace("table_name")
	->set("name", "eisbehr")
	->set("email", "test@test.com")
	->set("timestamp", time())
	->showQuery()
	/*->run()*/;

// insert by sub-select
$sql->replace("table_name")
	->columns("name", "email", "timestamp")
	->select($sql->select("name", "email", "timestamp")->from("sub_table"))
	->showQuery()
	/*->run()*/;
