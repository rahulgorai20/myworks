
<html>
    <head>
            <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    </head>
    <body>
        <div class="flex-container">
            <div style="flex-grow:1">
                <div>
                    <table>
                        <tr><td>LOGIN</td></tr>
                        <tr><td>WORKLOAD TRACKER</td></tr>
                    </table>
                </div>



            </div>
            <div style="flex-grow:4">
                <div>
                    <form method="POST" action="validate_login.php">
                        <table>
                            <tr><td colspan="2">LOGIN USING CREDENTIALS</td></tr>
                            <tr><td>USERNAME:</td><td><input type="text" name="uname"></td></tr>
                            <tr><td>PASSWORD:</td><td><input type="password" name="pass"></td></tr>
                            <tr><td colspan="2"><input type="SUBMIT" value="LOGIN"></td></tr>
                        </table>
                    </form>
                </div>



            </div>
        </div>

    </body>
</html>