# PHP-HTML-GENERATOR
It contains various generator like navigation, date and etc.


<code>
  <?php
$t = new Template();
$t->setNavigation("nav",array("test"=>"Open me up","nav2"=>"nav2 bitch","nav3"=>"navigation 3"));
?>
<ul>
	<?php
$t->createNavigation("nav","modal");
?>
</ul>

<?php
$t->createModal(array(
		'id'=>"test",
		'title'=>'YOU OPENED ME',
		'file'=>'testing/admin.php'
));

$t->createModal(array(
		'id'=>"nav2",
		'title'=>"Navigation 2",
		"file"=>"testing/user.php"
));


$t->createModal(array(
	'title'=>"nav3",
	'id'=>"nav3",
	'file'=>"testing/notfound.php"
));
  
  </code>
