<? require_once 'lib.php'?>
<? $map_ship = load_map('map_ship')?>
<? $map_state = load_map('map_state')?>

<? //$coords = get_coords($_GET)?>
<? //$map = shoot($map, $coords)?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SEA BATTLE</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <? print (render_map($map_ship, $map_state, $y))?>
        
    </body>
    </html>
    
<? // save_map($map)?>



