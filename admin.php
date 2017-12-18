<?php
include "add_mem.php";
?>

<html>

</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<body>
    <div class="flex-container">
        <div style="flex-grow:1">
           


        </div>
        <div style="flex-grow:4">
            <div>
                <?php 
            echo "<table >
            <tr><th colspan='4'>TEAM MEMBERS</th></tr>
            <tr>
            <th>NAME</th>
            <th>EMP_ID</th>
            <th>X_ID</th>
            </tr>";
            while($row = mysql_fetch_array($retval_q3, MYSQL_ASSOC))
            {
            echo "<tr>";
            echo "<td>" . $row['member_name'] . "</td>";
            echo "<td>" . $row['emp_id'] . "</td>";
            echo "<td>" . $row['X_id'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            ?>
            </div>
            <div>
                <table>
                    <form method="POST" >
                        <tr><th colspan="5">ADD NEW MEMBERS TO TEAM</th></tr>
                        <tr>
                            <th>NAME</th>
                            <th>EMP-ID</th>
                            <th>X-ID</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><input type="text" name="mem_name" required></td>
                            <td><input type="text" name="mem_emp_id" required></td>
                            <td><input type="text" name="mem_x_id" required></td>
                            <td><input type="submit" value="ADD"</td> 
                        </tr>
                    </form>
                </table>
            </div>
            <div>
                <table>
                    <form method="POST" >
                        <tr><th colspan="5">REMOVE MEMBERS FROM TEAM</th></tr>
                        <tr>
                            <th>EMP-ID</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="mem_emp_id_remove" ></td>
                            <td><input type="submit" value="REMOVE"</td> 
                        </tr>
                    </form>
                </table>
            </div>
            <div>
            <?php 
            echo "<table >
            <tr><th colspan='4'>OBJECTIVES</th></tr>
            <tr>
            <th>OBJ ID</th>
            <th>DESCRIPTION</th>
            <th>START DATE</th>
            <th>END DATE</th>
            </tr>";
            while($row = mysql_fetch_array($retval_q6, MYSQL_ASSOC))
            {
            echo "<tr>";
            echo "<td>" . $row['OBJ_ID'] . "</td>";
            echo "<td>" . $row['DESCRIPTION'] . "</td>";
            echo "<td>" . $row['START'] . "</td>";
            echo "<td>" . $row['END'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
            ?>

           </div>
            <div>
                <table>
                    <form method="POST">
                        <tr><th colspan="4">OBJECTIVE SETTING</th></tr>
                        <tr><th>OBJ_ID</th><th>EMP_ID</th><th>START</th><th>END</th></tr>
                        <tr>
                            <td><input type="text" name="obj_id" required></td>
                            <td><input type="text" name="obj_emp_id" required></td>
                            <td><input type="date" name="start_date"></td>
                            <td><input type="date" name="end_date"></td>
                        </tr>
                        <tr><td colspan="4"><textarea rows="10" cols="100" name="obj_des"></textarea></td></tr>
                        <tr><td colspan="4"><input type="SUBMIT" value="SET"></td></tr>
                    </form>
                </table>
            </div>


        </div>

    </div>

</body>
</html>