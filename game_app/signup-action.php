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


if (!$available) {
    header("Location: /signup.php?message=User already exist!!");
} elseif (strlen($username) < 3) {
    header("Location: /signup.php?message=Username must contain at least 3 symbols");
} elseif (strlen($password) < 3) {
    header("Location: /signup.php?message=Password must contain at least 3 symbols");
} elseif ($password !== $confirm_password){
    header("Location: /signup.php?message=". urlencode("Password & confirmation do not match!"));
} else {
    $users[] = $credentials;
    save_users($users);
    print ("Successful signup!!");
}


?>