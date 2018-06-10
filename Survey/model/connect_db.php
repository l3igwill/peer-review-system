<?php
$dsn = "mysql:host=localhost;dbname=peer_review";
//$dsn = 'mysql:host=198.71.225.63;dbname=brentapresley_peer_review';
$username = 'root';
$password = '';
//$username = 'reviewsystem';
//$password = 'YxT9m9MGxzBx';


$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

try {
    $db = new PDO($dsn, $username, $password, $options);
    $lifetime = 108000; //30 minutes
    session_set_cookie_params($lifetime,'/');
    session_start();
} catch (PDOException $e) {
    $error_message = $e->getMessage();
	include ('views/Header.php');
	?>
	<div id="content">
		<h1>Database Error</h1>
		<p>The database server seems to be down temporarily.</p>
		<p>This doesn't usually last long. Try again in a minute or two.</p>
		<p>Error message: <?php echo $error_message; ?></p>
		<p>&nbsp;</p>
	</div><!-- end content -->

	<?php
	include ('views/Footer.php');
	exit;
}//end catch
?>