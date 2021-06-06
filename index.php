<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>

<?php
session_start();
echo "<script>";
if (isset($_SESSION['result'])) {

    echo " const data = " . $_SESSION['result'];

} else {
    echo " const data = 0";
}
if(isset( $_SESSION['query'])){
    $q = $_SESSION['query'];
}else{
    $q = "";
}
echo "</script>";

?>
    <form action="./link.php" method="get">
        <input name="query" type="hidden"  value="SELECT * from `sales` where 1">
        <button type="submit">uzkrauti duomenis</button>
    </form>
    <br>
    <br>
    <form action="./link.php" method="get">
    <textarea id="w3review" name="query" rows="10" cols="50"  ><?php echo $q ?></textarea>
        <button type="submit">siusti uzklausa</button>
    </form>
    <table id= "table" class="table">

    </table>


    <script src="./render.js"></script>
    
</body>

</html>