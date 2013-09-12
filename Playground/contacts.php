<?
	$location = 'contact';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">    
  </head>
  <body>
  		
  	<?
  		include 'navbar.php';
  	?>
  		
  	<div class='container'>
  		<div class='well'>
  			<h1>Hello World</h1>
  			<p>Welcome class of 2013 to Web Server Programming</p>
  			<a class='btn btn-default'>Learn More</a>
  		</div>
  		<div class="col-lg-8> 
		  		<h2>Contact Us</h2>
		  		<form class="form-horizontal">
				  <div class="form-group">
				    <label for="inputEmail1" class="col-md-2 control-label">Your Email</label>
				    <div class="col-md-10">
				      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="txtMsg" class="col-md-2 control-label">Message</label>
				    <div class="col-md-10">
				      <textarea class="form-control" id="txtMsg" placeholder="text"></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-2">
				      <input type="submit" class="btn" value="Submit">
				    </div>
				  </div>  			
		  		</form>
  			</div>
  	</div> 	

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
