<?php
	session_start();
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	
	if (!isset($username)) {
        ?>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script>
			swal("Good job!", "You clicked the button!", "success");
			document.location='index.php';
		</script>
		<?php
		exit;
	}
?>