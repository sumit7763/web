<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $num=$_POST["number"];
    if(isset($_POST["submit"])){
        if($num<2||$num>100){
            echo "Number $num is out of range of 2-100.";
            header('refresh:2; url=Q2.html');
        }
        else{
            if(prime($num))
                printFibonacci($num);
            else
                printFactorial($num);
        }
    }

    function prime($param){
        $count=0;
        for($i=1;$i<=$param/2;$i++){
            if($param%$i==0)
                $count++;
        }
        if($count>1)
            return false;
        else
            return true;
    }

    function printFactorial($param){
        $pro=1;
        for($i=1;$i<=$param;$i++){
            echo"$i&nbsp;";
            $pro*=$i;
        }
        echo "=$pro";
    }

    function printFibonacci($param){
        $a=0;
        $b=1;
        $c=$a+$b;
        echo "$a&nbsp;$b&nbsp;";
        while($c<=$param){
            echo "$c&nbsp;";
            $a=$b;
            $b=$c;
            $c=$a+$b;
        }
    }
?>
    
</body>
</html>