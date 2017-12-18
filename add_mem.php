<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'rahul';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $name=(isset($_POST['mem_name']) ? $_POST['mem_name'] : '');
   $empid=(isset($_POST['mem_emp_id']) ? $_POST['mem_emp_id'] : '');
   $xid=(isset($_POST['mem_x_id']) ? $_POST['mem_x_id'] : '');
   $rem_empid=(isset($_POST['mem_emp_id_remove']) ? $_POST['mem_emp_id_remove'] : '');

   $obj_id=(isset($_POST['obj_id']) ? $_POST['obj_id'] : '');
   $obj_emp=(isset($_POST['obj_emp_id']) ? $_POST['obj_emp_id'] : '');
   $des=(isset($_POST['obj_des']) ? $_POST['obj_des'] : '');
   $start_date=(isset($_POST['start_date']) ? $_POST['start_date'] : '');
   $end_date=(isset($_POST['end_date']) ? $_POST['end_date'] : '');
   mysql_select_db('profile');

   $sql_query1 = "INSERT INTO team (member_name,emp_id,X_id) VALUES ('$name','$empid','$xid')";
   $retval_q1 = mysql_query( $sql_query1, $conn );
   $sql_query2="DELETE FROM team WHERE emp_id='$rem_empid'";
   $retval_q2 = mysql_query( $sql_query2, $conn );
   $sql_query3 = 'SELECT * FROM team ';
   $retval_q3 = mysql_query( $sql_query3, $conn );
   $sql_query4="INSERT INTO objectives (OBJ_ID,DESCRIPTION,START,END) VALUES ('$obj_id','$des','$start_date','$end_date')";
   $retval_q4=mysql_query( $sql_query4, $conn );
   $sql_query5="INSERT INTO obj_emp_map (OBJ_ID,emp_id) VALUES ('$obj_id','$obj_emp')";
   $retval_q5=mysql_query( $sql_query5, $conn );
   $sql_query6="SELECT * FROM objectives";
   $retval_q6=mysql_query( $sql_query6, $conn );

   
   
   mysql_close($conn);
?>