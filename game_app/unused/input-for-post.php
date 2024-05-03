<?
if (isset($_POST['shoot'])) {
    $coords = explode('x', $_POST['shoot']);
    header('Location: /');  
}
?>