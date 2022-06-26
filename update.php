<?php
    function update_task_status($id, $current_state){
        include('db_connect.php');

        if($current_state){
            $sql = "UPDATE tasks SET 'completed'= 0 WHERE 'id' = $id";
        } else {
            $sql = "UPDATE tasks SET 'completed'= 1 WHERE 'id' = $id";
        }

        mysqli_query($conn, $sql);
    }
?>