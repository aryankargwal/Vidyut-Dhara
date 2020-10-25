  <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Home | Vidyut Dhara</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?=DOCUMENT_ROOT;?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?=DOCUMENT_ROOT;?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
</head>
<body>
  <nav class="white" role="navigation" style="min-height: 120px;">
    <div class="nav-wrapper container ">
      <a id="logo-container" href="index.php" class="brand-logo"><img src="<?=BRAND_IMAGE_PATH.'header_logo2.jpg';?>" height=100px></a>s
      <ul class="right hide-on-med-and-down">
        <li><a href="<?=DOCUMENT_ROOT;?>">Home</a></li>
        <li><a href="<?=DOCUMENT_ROOT;?>on_grid.php">What's On Grid?</a></li>
        <li><a href="<?=DOCUMENT_ROOT;?>gallery.php">Gallery</a></li>
        <li><a href="<?=DOCUMENT_ROOT;?>faq.php">FAQ</a></li>
        <li><a href="<?=DOCUMENT_ROOT;?>contact.php">Contact us</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="<?=DOCUMENT_ROOT;?>">Home</a></li>
        <li><a href="<?=DOCUMENT_ROOT;?>on_grid.php">What's On Grid?</a></li>
        <li><a href="<?=DOCUMENT_ROOT;?>gallery.php">Gallery</a></li>
        <li><a href="<?=DOCUMENT_ROOT;?>faq.php">FAQ</a></li>
        <li><a href="<?=DOCUMENT_ROOT;?>contact.php">Contact us</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>