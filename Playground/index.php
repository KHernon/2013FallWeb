<?
	$location = 'home';
	
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">    
    <style type ="text/css">
    	body {padding-top: 70px;}
    </style>
  </head>
  <body> 
  	
  	<?
  		include 'navbar.php';
	?>
	<div class='container'>
		<div class = 'jumbotron'>
			<h1>Hello World</h1>			
			<p>Welcome class of 2013 to Web Server Programming</p>
			<a class = 'btn btn-lg btn-success' >Learn More</a>		
		</div>		
      
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#">View details »</a></p>
        </div>
      <div class="col-sm-6 col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#">View details »</a></p>
       </div>
         <div class="col-sm-6 col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-primary" href="#">View details »</a></p>
        </div>
      </div>     
    </div>
	
    <!--<h1>This is the playground</h1>-->
    
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>
    <script type="text/javascript">
    	$(function(){
    		$(".nav .home").addClass("active");
    	});
    	
    </script>
  </body>
</html>
