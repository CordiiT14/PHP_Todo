<?php
    include('db_connect.php');

    //query for all tasks
    $sql = 'SELECT * FROM tasks ORDER BY created_at';

    //make query and store in result
    $result = mysqli_query($conn, $sql);

    //fetch result rows in turn in to array
    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //  //free result from memory
    // mysqli_free_result($result);

    //  //close connection to database
    // mysqli_close($conn);


    //new task submission
    if(isset($_POST['submit'])){
        echo $_POST['new_task'];

        $task_to_add = mysqli_real_escape_string($conn, $_POST['new_task']);

        $sql = "INSERT INTO tasks(description) VALUES('$task_to_add')";

        //save to db and check
        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        }else {
            echo 'query error: '.mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Todo</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style> 
        .primary {
            background-color: #7BAE7F;
        }
        .secondary {
            background-color: #F4EDEA;
        }
        h1 {
        margin: 0;
        padding: 5px;
        font-size: 50px;
        }
        h4{
        font-size: 20px;
        }
        body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
        main {
        flex: 1 0 auto;
        display: block;
        margin-left: 35%;
        margin-right: 35%;
        }
        form {
            text-align: center;
            background-color: #F4EDEA;
            padding: 20px;
            margin-top: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-wrapper primary">
            <h1 class="center">Todo List</h1>
        </div>
    </nav>
    <main>
        <!-- new task form field -->

            <form action="index.php" method="POST">
                <div class="input-field">
                    <input type="text" name="new_task">
                    <label for="new_task" class="active">Add new task:</label>

                </div>
                <input class="btn primary" type="submit" value="submit" name="submit">
            </form>


        <!-- task list -->
        <section class="list-container">
        <?PHP foreach($tasks as $task):?>
            <div class="card horizontal">
                <div class="card-title">
                    <h4><?php echo htmlspecialchars($task['description']); ?></h4>
                </div>
                <div class="card-content">
                    <p>
                        <?php if($task['completed']): ?>
                            <p style="font-size: 20px; color: green;"><?php echo "☑"; ?></p>
                        <?php else:?>
                            <p style="font-size: 20px;"><?php echo "☐";?></p>
                        <?php endif;?>
                    </p>
                </div>
            </div>
        <?PHP endforeach; ?>
        </section>

    </main>
    <footer class="page-footer primary">
        <p class="center"> © 2022 Cordii.T Creative</p>
    </footer>
</body>
</html>