
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Paper Kit by Creative Tim</title>

<meta
	content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'
	name='viewport' />
<meta name="viewport" content="width=device-width" />


<?php echo $this->Html->css('bootstrap/bootstrap');?>
<?php echo $this->Html->css('assets/css/ct-paper');?>
<?php echo $this->Html->css('assets/css/demo');?>
<?php echo $this->Html->css('assets/css/examples');?>


<!--     Fonts and icons     -->
<link
	href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
	rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300'
	rel='stylesheet' type='text/css'>

</head>

<body>
	<?= $this->fetch('content')?>
</body>

<?php

echo $this->Html->script ( [ 
		'assets/js/jquery-1.10.2',
		'assets/js/jquery-ui-1.10.4.custom.min',
		'bootstrap/bootstrap',
		'assets/js/ct-paper-radio',
		'assets/js/bootstrap-select',
		'assets/js/bootstrap-datepicker',
		'assets/js/ct-paper' 
] );
?>


</html>