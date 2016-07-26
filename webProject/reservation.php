<?php
$conn = mysqli_connect('localhost','root','');
$db_select = mysqli_select_db($conn,'food');
$name =

//$data_row = mysqli_num_rows();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];
    if (mysqli_query($conn, "INSERT INTO reservation VALUES ('$name','$email','$subject','$date','$time','$message')"))
        echo "success";
    else
        echo "failed";
?>
<script type="text/javascript">
    alert('Data Are Inserted Successfully ');
            window.location.href='index.html';
        </script>

