<?
if (isset($_GET['shoot'])) {
    $coords = explode('x', $_GET['shoot']);
    header('Location: /');  // redirect to homepage
}
?>