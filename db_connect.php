<?php
//create connection to db
$conn = mysqli_connect('localhost', 'cordii', 'test1234', 'todo_tasks');

//check connection was succesful
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>