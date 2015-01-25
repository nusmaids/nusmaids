<?php
   $host        = "host=ec2-54-83-9-127.compute-1.amazonaws.com";
   $port        = "port=5432";
   $dbname      = "dbname=d9cat6o047isk2";
   $credentials = "user=yihhtussusbvyj password=RQ7DHHjZySEykZ5u2R0vurmLQz";
   $sslmode = "sslmode=require";

   $db = pg_connect( "$host $port $dbname $credentials $sslmode"  );
   if(!$db){
       echo "Error : Unable to open database\n";
   } else {
       echo "Opened database successfully\n";
   }
?>