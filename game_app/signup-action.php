<?
require_once 'lib.php';

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$users = load_users();

$available = available_username($users, $username);
$credentials = [
    'username' => $username,
    'password' => $password
];


if ($available) {
    print ("User already exist!!");
} elseif ($password !== $confirm_password){
    print ("Passwords do not match!!");
} else {
    $users[] = $credentials;
    file_put_contents("./data/users.json", json_encode($users, JSON_PRETTY_PRINT));
    print ("Successful signup!!");
}


?>