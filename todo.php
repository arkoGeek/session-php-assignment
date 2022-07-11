<?php
  session_start();
  if(!isset($_SESSION["todoCollection"])){
    $_SESSION["todoCollection"] = [];
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
  <form action="storeItem.php" method="post">
    <label for="item">Enter task : </label>
    <input type="text" name="item" id="item">
    <input type="submit" value="ADD">
  </form>
  <ul>
    <?php
    $array = $_SESSION["todoCollection"];
    for($i = 0; $i < sizeof($array); $i++){?>
      <li><?php echo $array[$i]["caption"]; ?></li>
    <?php } ?>
  </ul>
</body>
</html>