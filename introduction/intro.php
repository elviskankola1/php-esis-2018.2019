<h1>Welcome to PHP</h1>
<form method="post" action="intro.php">
	<input type="text" name="recherche" />
</form>
<?php
	if(!isset($_POST['recherche']) || empty($_POST['recherche']) )
	{
		echo "<br><br><br><h6 style="color:red;">entrez un mot svp!<h6>";
	}else {
		echo"vous recherchez ce mot?".$_POST['recherche'];
	}
	
?>

<h2>
	Like it
</h2>