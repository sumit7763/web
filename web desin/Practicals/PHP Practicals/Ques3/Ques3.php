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
		$background_colour = array('white','green','red','yellow','blue','orange','black','purple','peach','cyan');
	    $rand_background = $background_colour[array_rand($background_colour)];
	    
	?>
    <html>
	<head>
    </head>
    <body style="background: <?php echo $rand_background;?>;">
    
    </body>
</html>


    
</body>
</html>