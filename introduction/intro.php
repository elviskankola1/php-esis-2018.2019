<h1>Welcome to PHP</h1>
<form method="post" action="intro.php">
	<input type="text" name="recherche" />
</form>
<?php
	if(!isset($_POST['recherche']) || empty($_POST['recherche']) ){
		echo "<h1 style='color:red;'>entrez un mot svp!";
	}else {
		echo"<h1>vous recherchez ce mot?  ".$_POST['recherche'];
	}
	
?>

<h2>
	Like it
</h2>