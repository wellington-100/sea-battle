<?
$y = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
function render_map($map, $y)
{
    $html = '<div class="yDimension">';

    $html .= '<div class="map">';
    for ($ri = 0; $ri < 10; $ri++) {
        for ($ci = 0; $ci < 10; $ci++) {
            $attributes = $map[$ri][$ci] == 1 ? 'class="ship sq"' : 'class="sq"';
            $attributes .= " href=\"/?shoot={$ri}x{$ci}\" ";
            $html .= '<div><a ' . $attributes . '></a></div>';
        }
    }
    $html .= '</div>'; // Close map div

    $html .= '<div class="y">';
    for ($i = 0; $i < 10; $i++) {
        $html .= '<div>' . $y[$i] . '</div>';
    }
    $html .= '</div>'; // Close y div

    $html .= '</div>'; // Close yDimension div

    $html .= '<div class="x">';
    for ($x = 1; $x < 11; $x++) {
        $html .= '<div>' . $x . '</div>';
    }
    $html .= '</div>'; // Close x div

    return $html;
}
/////////////////////////////////////////

function get_coords($request) {
    if (isset($request['shoot'])) {
        $coords = explode('x', $request['shoot']);
        return $coords;
    }
    return false;
}
/////////////////////////////////////////

function shoot($map, $coords) {
    if ($coords) {
        $map[$coords[0]][$coords[1]] = 1;
    }
    return $map;
}
/////////////////////////////////////////

function save_map($map){
    file_put_contents("./data/map.json", json_encode($map));
}

function load_map() {
    return json_decode(file_get_contents("./data/map.json"), true) ;
}



?>