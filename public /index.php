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
        // nếu vẫn còn cặp số so sánh thỏa mãn điều kiện này thì ta sẽ tạo 1 biến là $test để nhận biết về vc còn có cặp số
        // nào thỏa mãn điều kiện hay ko
            $test = 10;
             $tmp = $a[$i];
             $a[$i] = $a[$i+1];
             $a[$i+1] = $tmp;
            }
         }
         // nếu còn cặp số thỏa mãn tức là biến $test đã tồn tại thì ta sẽ gọi tiếp lại hàm này. còn ko thì tức là mảng đã đc sắp xếp
         // đúng nên ta sẽ in ra kết quả.
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
        var_dump(sorting($h));
    }
    
?>
</body>
</html>