<?php


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
        margin: auto;
        }
        form{
            max-width: 450px;
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

        <div class="card center z-depth-0 secondary" style="max-width: 300px; padding: 10px; margin: 15px;">
            <form action="index.html" method="POST">
                <div class="input-field">
                    <input type="text" id="new_task" >
                    <label for="new_task" class="active">Add new task:</label>

                </div>
                <input class="btn primary"type="submit" value="submit">
            </form>
        </div>

    </main>
    <footer class="page-footer primary">
        <p class="center"> © 2022 Cordii.T Creative</p>
    </footer>
</body>
</html>