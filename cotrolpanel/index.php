<?php
include_once 'dbconfig.php';
if(isset($_GET['delete_id']))
{
    $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
    mysql_query($sql_query);
    header("Location: $_SERVER[PHP_SELF]");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>control panel</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

    <div id="body">
        <div id="content">
            <table align="center">
                <tr>
                    <th colspan="5"><a href="add_data.php">add data here.</a></th>
                </tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City Name</th>
                <th colspan="2">Operations</th>
                </tr>

                <?php
                $sql_query="SELECT * FROM users";
                $result_set=mysql_query($sql_query);
                while($row=mysql_fetch_row($result_set))
                {
                    ?>
                    <tr>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td align="center"><a href="edit_data.php?edit_id=(<?php echo $row[0]; ?>)">EDIT</a></td>
                        <td align="center"><a href="index.php?delete_id=<?php echo $row[0]; ?>">DELETE</a>

                        </td>
                    </tr>
                    <?php
                }

                ?>
            </table>
        </div>
    </div>

</center>
</body>
</html>