<?php

include 'libs/load.php';

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<?php load_template('head'); ?>

<body>
	<?php load_template("header"); ?>
	
	<main>

	<?php load_template("landing") ?>

	<?php load_template("album") ?>

	</main>

	<?php load_template("footer") ?>

	<script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>