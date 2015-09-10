<?php
  $post = get_post();
  $post_title = $post->post_title;
  $post_name = $post->post_name;
  if ($post_title == 'contact') {
    $post_content = do_shortcode($post->post_content);
  } else {
    $post_content = wpautop($post->post_content);
  }

  $title = $post_title. ' | '. get_bloginfo('name');
  $url = get_permalink();
  $description = post_custom('description');;
  $path = get_bloginfo('stylesheet_directory');
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="吉田博,yoshida hiroshi">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $path; ?>/img/main.jpg">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@yoshidahiroshi8">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo $path; ?>/img/main.jpg">
    
    <link rel="index" href="/">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Josefin+Slab:400,300">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC">
    <link rel="stylesheet" href="<?php echo $path; ?>/style.css">
    <link rel="alternate" href="/feed/jstarted.xml" type="application/rss+xml" title="">
  </head>
  <body class="body__<?php echo $post_name; ?>">
    <div class="page">
<?php
  include 'header.php';
?>

      <div class="contents">
        <h1 class="page-title page-title__<?php echo $post_name; ?>">
          <?php echo $post_title; ?>
        </h1>

        <?php echo $post_content; ?>
      </div>
    </div>
    
<?php
  include 'script.php';
  echo post_custom('JavaScript');
?>
  </body>
</html>
