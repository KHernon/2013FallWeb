<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  <h4>'Search in format http://cs.newpaltz.edu/~n02285069/2013/Playground/Final/source.php?term=new%20york, changing the term for your desired search'</h4>
 <script type="text/javascript">
$(document).ready(function(){
    $('#tags').keyup(function(){
        var x = "search.php?term=" + $('#val').val();
        $('#tags').autocomplete({
            source: x,
            minLenght:5,
        });
    });
});
</script>
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>
 
 
</body>
</html>