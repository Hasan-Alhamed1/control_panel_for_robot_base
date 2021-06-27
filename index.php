<?php

//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'control_panel';
$db_port = 8889;

//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;



if(isset($_POST['forward'])){

    $my_query = "select * from control_panel WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_panel (forward_dir) VALUES ('forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['right'])){

    $my_query = "select * from control_panel WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_panel (right_dir) VALUES ('right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['left'])){

    $my_query = "select * from control_panell WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_panel (left_dir) VALUES ('left')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['stop'])){

    $my_query = "select * from control_panel WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_panel (stop_dir) VALUES ('stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['backward'])){

    $my_query = "select * from control_panel WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO control_panel (backward_dir) VALUES ('backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}





?>