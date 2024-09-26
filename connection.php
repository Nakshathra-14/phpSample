<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $HOSTNAME='localhost';
    $USERNAME='root';
    $PASSWORD='';
    $DATABASE='tourism';
    $con=mysqli_connect($HOSTNAME,$USERNAME, $PASSWORD,$DATABASE);
    if($con){
        echo"Connection successful";
    }
    else{
        die(mysqli_error($con));
    }
    ?>
    
</body>
</html>