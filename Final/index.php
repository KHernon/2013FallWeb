<? include 'inc/_global.php'; ?>

<?
	$conn = GetConnection();
	$result = $conn->query('SELECT * FROM 2013Fall_Keywords');
	$rs = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
  </head>
  <body>
    <h1>This is the final</h1>
    
    <? 
    	
    	$msg= 'Hello ';
		$name = 'Kurt';
    	include 'something.php'; 
    
    
    ?>
    
    <span class="label label-success"><?= $msg . $name ?> </span>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
