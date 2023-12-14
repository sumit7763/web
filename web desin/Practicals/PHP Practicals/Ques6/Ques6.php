<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Testing</title>
</head>
<body>
    <?php
        $database = "college";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $connector = mysqli_connect($servername , $username , $password , $database);


        if ($connector){
            echo ("Connection established successfully <br>");
        }
        else{
            echo ("Unsuccessful in establishment of connection <br>");
            echo ("The error is " . mysqli_connect_error() . "<br>");
        }

        $result = mysqli_query($connector , "SELECT * FROM `students`;");
        echo("<table border = 4 style = 'padding : 5'");
        $fields = array("username","password",);
        // headder row
        echo("<tr>");
        for ($i = 0; $i < count($fields); $i++){
            echo "<th>".$fields[$i]."</th>";
        }
        echo("</tr>");

        for ($i = 0; $i <$result->num_rows; $i++){
            $row = $result->fetch_object();
            
            // each particular row
            echo("<tr>");
            $x= get_object_vars($row);
            for ($i = 0; $i < count($fields); $i++){
                echo "<td>".$x[$fields[$i]]."</td>";
            }
            echo("</tr>");
        }
        echo("</table>");
        if (mysqli_close($connector)){
            echo("Connector closed successfully <br>");
        }
        else{
            echo ("Connection is still there among us <br>");
        }
    ?>
    
</body>
</html>