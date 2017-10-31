<?php
include "libraries/Template.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.modal-btn
  	{
  	
  		margin: 1%;
  		border: 1px solid;
  		padding: 1%;
  		background-color: darkred;
  		color: white;
  	}

  	ul li
  	{
  		display: inline;
  		list-style: none;
  	}

  	a:hover{
  		text-decoration: none;
  		color: white;
  	}

  	ul
  	{
  		margin-top: 60px;
  	}

  </style>
</head>
<body>
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



?>
</body>
</html>