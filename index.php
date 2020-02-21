<?php include "utils.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // include "functions.php";
    // $car = "skoda";
    // var_dump($car);
    // $names = ["Danilo","Hamza","Mario"];
    // foreach($names as $name){
    //     echo $name."<br>";
    //     // echo "<br>";
    // }
    // $student = [
    //     "js" => 8,
    //     "php" => 10,
    //     "css" => 4
    // ];
    // foreach($student as $key=>$val){
    //     echo $key." : ".$val."<br>";
    // }
    // dd($student);
    // dd($names);
    // echo '<pre>';
    // var_dump ($names);
    // echo '</pre>';
    // // die(var_dump($car));
     ?>
     <form action="save_data.php" method="post">
     <input name="name" type="text">
     <input name="password" type="password">
     <button>submit</button>
     </form>
     <!-- <h1>Zdravo</h1>
     <h1>Zdravo</h1>
     <script>
     let names = ["Danilo","Hamza","Mario"];
     names.forEach(function(name){
        console.log(name)
     })
     </script> -->
</body>
</html>