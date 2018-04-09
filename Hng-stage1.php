<?php 
date_default_timezone_set('Africa/Accra');
 $date_time = new DateTime();
 $date = $date_time->format('jS F, Y');
 $time =  $date_time->format('H:i A');
?>
<!DOCTYPE html>
<html>
<head>
    <title>HNG something</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="outer">
        <img src="images/nature.jpg" alt="HTML5 Icon" >
        <div class="inner">
            <div class="inner-h1">
                <h1 style="font-size:250%;">NATURE SPEAKS</h1>
            </div>
            <div class="time">
                <p style="font-size:20px; color:aqua "><?php echo $date ?></p>
                <p style="font-size:20px; color:aqua "><?php echo $time ?></p>
            </div>
        </div>
    </div>
</body>
</html> 