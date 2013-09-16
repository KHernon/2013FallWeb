<?
	$pages = array(
			array(
				'url' => 'index.php',
				'section' => 'home',
				'title' => 'Home'
				),
			array(
				'url' => 'links.php',
				'section' => 'links',
				'title' => 'Links'
				),
			array(
				'url' => 'contact.php',
				'section' => 'contact',
				'title' => 'Contact Us'
				));
					
				$pages[] = array(
					'url' => 'store.php',
					'section' => 'store',
					'title' => 'Buy our stuff'
					);
	$location = 'home'; 
?>
<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  <div class='container'>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Playground</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
    	
    	
      <!--<li class='home <? if($location=='home') echo "active";?>'><a href="index.php">Home</a></li>
      <li class='contact <? if($location=='contact') echo "active";?>'><a href="contacts.php">Contact</a></li>
      <li class='link <? if($location=='link') echo "active";?>'><a href="links.php">Links</a></li>
      -->
      
      <? foreach($pages as $name => $data): ?>
      		<li class="<?=$data['section']?>">
      			<a href="<?=$data['url']?>"> <?=$data['title']?> </a>
      		</li>	
	  <? endforeach; ?>
       
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li><a href="#">Separated link</a></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">           
        <p>Signed in as <a href="#" class="navbar-link">Kurt Hernon</a>  </p>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</div>
<pre class="container">
<? echo json_encode($pages); ?>
</pre>
