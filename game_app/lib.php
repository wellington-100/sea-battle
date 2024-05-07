<?
$y = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];

const NO_SHOT = 0;
const SHOT = 1;
const NO_SHIP = 0;
const SHIP = 1;
function render_map($map_ship, $map_state, $y) {
    $html = '<div class="yDimension">';

    $html .= '<div class="map">';
    for ($ri = 0; $ri < 10; $ri++) {
        for ($ci = 0; $ci < 10; $ci++) {
            if ($map_state[$ri][$ci] == NO_SHOT){
                $attributes = 'class="sq"';
            } elseif ($map_state[$ri][$ci] == SHOT && $map_ship[$ri][$ci] == NO_SHIP) {
                $attributes = 'class="missed sq"';
            } elseif ($map_state[$ri][$ci] == SHOT && $map_ship[$ri][$ci] == SHIP) {
                $attributes = 'class="hit sq"';
            };

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
        $map[$coords[0]][$coords[1]] = SHOT;
    }
    return $map;
}
/////////////////////////////////////////

function save_map($map_state, $map_name){
    file_put_contents("./data/{$map_name}.json", json_encode($map_state));
}

function load_map($map_name) {
    return json_decode(file_get_contents("./data/{$map_name}.json"), true) ;
}

/////////////////////////////////////////

function load_users() {
    return json_decode(file_get_contents("./data/users.json"), true);
}


/////////////////////////////////////////

function user_exist($users, $username, $password){
    $found = false;
    // HW: rewrite this by array_filter & git coomit variants
    $credentials = array_filter($users, function($user) use ($username, $password){
        return ($user['username'] == $username && $user['password'] == $password);
    });
    if (count($credentials) > 0){
        $found = true;
    }
    return $found;
}
?>