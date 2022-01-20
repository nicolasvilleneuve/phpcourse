<?php include("variables.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<h1><?php
    // This is a single-line comment //
    /* This is a multiple line comment. */
    echo "Hello World!";
    $first_name = "Nic";
    $favorite_number = 41;
    $floating_num = 41.00;
    $num1 = 12;
    $num2 = 27;
    $last_name = $first_name;
    ?></h1>
<?php echo $num1 + $num2; ?>
</br>
<?php echo $first_name . "</br>" . $last_name; ?>
<?php var_dump($num1 == $num2); ?>
</br>
<?php echo "hello: \"You're Ugly\""; ?>
</br>
<?php
    if ($first_name == "Nic"){
        echo "Hello Nic, how are you?";
    } else {
        echo "INTRUDER ALERT!";
    }
?>
</br>
<?php $first_names = array("John", "Steve", "Nic");
    echo $first_names[0];
    echo ($first_names[rand(0,2)]);
?>
</br>
<?php $fav_pizza = array(
        "John"=>"Pepperoni",
        "Steve"=>"None",
        "Nic"=>"Margherita");

    echo count($fav_pizza);
?>
</br>
<?php
// while loops //
    $i = 0;
    while ($i < count($fav_pizza)) {
        echo "the count is: $i </br>";
        $i++;
}
?>
<?php
    for($num = 0; $num <= 10; $num++) {
        echo "$num </br>";
    }
?>
<?php //foreach loops //
    $names = array("a", "b", "c");
    foreach ($names as $n) {
        echo "$n </br>";
    }
?>
</br>
<?php
    // functions //
    function hellothere($num1, $num2){
        echo $num1 + $num2;
    }
    hellothere(49, 1);
    echo rand(0, 3);

?>
</br>
<?php
    echo date('D, jS, F, Y');
?>
<?php //String Manipulation //
    $stuff = "john is a bohn </br>";
    echo str_replace("bohn", "man", $stuff);
    echo strtoupper($stuff);
?>
</br>
<?php
    echo "Copyright (c) " . $company_name . " " . date('Y') . " - All Rights Reserved";
?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>

