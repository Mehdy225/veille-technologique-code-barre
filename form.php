<html>
<body>
<center>
<h1>
Créer un Code Barre
</h1>
<form action="form.php">
Les données du Code Barre <input type="" name="bar_code"><br>
<input type="submit" value="Créer un Code Barre">
</form>
<?php
if(isset($_GET['bar_code'])){
	$bar_code=$_GET['bar_code'];
	include 'barcode225.php';
	echo bar225($bar_code);
}	
?>
</center>
</body>
</html>