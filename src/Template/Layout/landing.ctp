<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Awesome Landing Page by Creative Tim</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />

<?php echo $this->Html->css(['bootstrap/bootstrap','assets/css/landing-page']);?>

<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
<?php echo $this->Html->css('assets/css/pe-icon-7-stroke');?>

</head>
<body class="landing-page landing-page2">
	<?php echo $this->fetch('content'); ?>
</body>
<?php echo $this->Html->script(['assets/js/jquery-1.10.2',
'assets/js/jquery-ui-1.10.4.custom.min','bootstrap/bootstrap','jquery/awesome-landing-page'
]);?>
</html>
