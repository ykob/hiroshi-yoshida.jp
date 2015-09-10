<?php
  $website_title = get_bloginfo('name');
  $url = get_bloginfo('url');
  $description = get_bloginfo('description');
  $path = get_bloginfo('stylesheet_directory');
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta name="keywords" content="吉田博,yoshida hiroshi">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@yoshidahiroshi8">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    
    <link rel="index" href="/">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Josefin+Slab:400,300">
    <link rel="stylesheet" href="<?php echo $path; ?>/style.css">
    <link rel="alternate" href="/feed/jstarted.xml" type="application/rss+xml" title="">
  </head>
  <body>
    <div class="page">
<?php
  include 'header.php';
?>

<?php
  include 'script.php';
?>
    </div>
  </body>
</html>
