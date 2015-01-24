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

   $sql = "SELECT * FROM nusmaids.workflow_state";
    $result = pg_query($db, $sql);
    if (!$result) {
        echo ("Error in SQL query: " . pg_last_error());
    } else {
        echo $result;
    }

    while ($row = pg_fetch_row($result)) {
      echo "$row[0] $row[1]\n";
    }
?>