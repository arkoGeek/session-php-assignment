<?php
  session_start();
  if(isset($_POST["item"])){
    array_push($_SESSION["todoCollection"], ["caption" => $_POST["item"], "isComplete" => false]);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Task added. Latest task is 
    <?php echo $_SESSION["todoCollection"][sizeOf($_SESSION["todoCollection"])-1]["caption"]; ?>
  </h1>
  <a href="todo.php">Go back to add more tasks.</a>
</body>
</html>