<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
div {
background-color: lightblue;
border: 1px solid black;
height: 100px;
width: 500px;
overflow-x: scroll;
}
p {
width: 1000px;
margin: 10px;
}
  </style>
</head>
<body>
<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$i = array_search('red', $array);   
          // int(1)
echo ($i !== false) ? $i : -1;     // 1

$i = array_search('blue', $array);          // int(0)
echo ($i !== false) ? $i : -1;     // 0      // CORRECT

$i = array_search('blueee', $array);
                  // bool(false)
echo ($i !== false) ? $i : -1;     // -1, i.e. not found

?>
</body>
</html>
