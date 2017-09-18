<?php
if (isset($_GET['id']) && isset($_GET['u']) && isset($_GET['e']) && isset($_GET['p'])) {
	// Connect to database and sanitize incoming $_GET variables
    include_once("php_includes/db_conx.php");
    $id = preg_replace('#[^0-9]#i', '', $_GET['id']); 
	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
	$e = mysqli_real_escape_string($db_conx, $_GET['e']);
	$p = mysqli_real_escape_string($db_conx, $_GET['p']);
	// Evaluate the lengths of the incoming $_GET variable
	if($id == "" || strlen($u) < 3 || strlen($e) < 5 || strlen($p) != 74){
		// Log this issue into a text file and email details to yourself
    	exit(); 
	}
	// Check their credentials against the database
	$sql = "SELECT * FROM users WHERE id='$id' AND username='$u' AND email='$e' AND password='$p' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
	$numrows = mysqli_num_rows($query);
	// Evaluate for a match in the system (0 = no match, 1 = match)
	if($numrows == 0){
    	exit();
	}
	
	$sql = "UPDATE users SET activated='1' WHERE id='$id' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);

	$sql = "SELECT * FROM users WHERE id='$id' AND activated='1' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
	$numrows = mysqli_num_rows($query);
	// Evaluate the double check
    if($numrows == 0){
    	exit();
    } else if($numrows == 1) {
       header("location:index.php");
    	exit();
    }
} else {
    exit(); 
}
?>