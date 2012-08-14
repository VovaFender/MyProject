<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 14.08.12
 * Time: 1:38
 * To change this template use File | Settings | File Templates.
 */
$con = mysql_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("my_db", $con);

$sql="INSERT INTO products (name, Description)
VALUES
('$_POST[name]','$_POST[description]')";

if (!mysql_query($sql,$con))
{
    die('Error: ' . mysql_error());
}
echo "product added";

mysql_close($con);
?>