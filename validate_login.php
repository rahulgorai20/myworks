<?php
   include("config.php");
   // Grab User submitted information
   $uname = $_POST["uname"];
   $pass = $_POST["pass"];
   
   // Connect to the database
   $con = mysql_connect("localhost","root","rahul");
   // Make sure we connected successfully
   if(! $con)
   {
       die('Connection Failed'.mysql_error());
   }
   
   // Select the database to use
   mysql_select_db("profile",$con);
   
   $result = mysql_query("SELECT * FROM login WHERE username='$uname' and pword='$pass'");
   
   $row = mysql_fetch_array($result);
   
   if($row["username"]==$uname && $row["pword"]==$pass)
       echo"You are a validated user.";
   else
       echo"Sorry, your credentials are not valid, Please try again.";
   ?>