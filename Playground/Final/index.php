<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Autocomplete</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

</head>
<body> 
<label for="val">Search for a City:</label>
<input class="searchInput" id="val" name="val" type="text" />  

<script type="text/javascript">
$(document).ready(function(){
    $('#val').keyup(function(){
        var x = "source.php?term=" + $('#val').val();        
        $('#val').autocomplete({        	
            source: x,
            minLenght:5,
        });
    });
});
</script>
</body>
</html>