<?php
require_once('connect.php');
$db = new DB_CONNECT();

$query_create_table_profile = "CREATE TABLE IF NOT EXISTS profile (
                            serial INT(11) NOT NULL auto_increment,
                            firstname VARCHAR(30),
                            lastname VARCHAR(30),
                            mobile BIGINT(15),
                            email varchar(50) NOT NULL,
                            passwd varchar(255) NOT NULL,
                            recipient_name varchar(50),
                            address text(1000),
                            city varchar(100),
                            state varchar(100),
                            country varchar(100),
                            postal_code varchar(15),
                            fav_list text(65536),
                            reward_points INT(11) DEFAULT 0,
                            isset_firstname TINYINT(1) DEFAULT 0,
                            isset_lastname TINYINT(1) DEFAULT 0,
                            isset_mobile TINYINT(1) DEFAULT 0,
                            isset_address TINYINT(1) DEFAULT 0,
                            isset_subscribe TINYINT(1) DEFAULT 1,
                            PRIMARY KEY(serial,email)
                            )ENGINE=InnoDB AUTO_INCREMENT=0";

$result_create_table_profile = mysql_query($query_create_table_profile) or die(mysql_error());

$query_create_table_product = "CREATE TABLE IF NOT EXISTS product(
                            serial INT(11) NOT NULL auto_increment,
                            product_id varchar(255),
                            product_title varchar(255),
                            product_color varchar(255),
                            product_fav_count int(11),
                            product_price int(11),
                            
                            )";
echo "Script ran successfully!";
?>



