if(isset($_POST['file']))
{
	$img = $_POST['file'];

	// need to get employee's id somehow to insert into database.
	sc_exec_sql("INSERT INTO Table_5 (id, sign) VALUES('222', '$img')");
	
	$signature = array();
	sc_lookup(signature, "SELECT sign FROM Table_5 WHERE id='222'");
	echo $signature[0][0];
} 
else
{
	$message = "Cannot add signature into database. Please try again.";
	echo "<script type='text/javascript'>alert('$message');</script>";;
}