<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body {
    width:60%;
    margin:auto;
    text-align:center;
    padding:150px;
    line-height:30px;
}
h2 {
    margin-bottom:0;
}
</style>
<body>
<h2>Bubble sorting</h2>
<form action="" method="post">
    <input type="text" name="input" placeholder="Number separater by 1 space">
    <input type="submit" name='submit' value="Sort">
</form>
<?php
    function sorting($a) {
        $b = count($a);
        for($i = 0; $i < $b - 1; $i++) {
            if ($a[$i] > $a[$i + 1]) {
            $test = 10;
             $tmp = $a[$i];
             $a[$i] = $a[$i+1];
             $a[$i+1] = $tmp;
            }
         }
         if (isset($test)) {
            sorting($a);
         } else {
            echo "<br>";
            echo 'After sorting : ';
            for($i = 0;$i < $b; $i++) {
                echo $a[$i]." ";
            }
            return $a;
         }
    }
    if (isset($_POST['submit'])) {
        echo'Before sorting : '.$_POST['input'];
        $h = trim($_POST['input']);
        $h = explode(" ",$h);
        sorting($h);
    }
    
?>
</body>
</html>