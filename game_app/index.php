<? require_once 'lib.php'?>
<? $map = load_map()?>
<? $coords = get_coords($_GET)?>
<? $map = shoot($map, $coords)?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SEA BATTLE</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <? print (render_map($map, $y))?>
        
    </body>
    </html>
    
<? save_map($map)?>



