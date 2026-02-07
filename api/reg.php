<?php include_once "db.php";

// $_POST['acc'];
// $_POST['pw'];

// $_POST['email'];
unset($_POST['pw2']);
echo $Mem->save($_POST);