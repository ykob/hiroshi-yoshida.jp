<?php
  $website_title = get_bloginfo('name');
  $url = get_bloginfo('url');
  $description = get_bloginfo('description');
  $path = get_bloginfo('stylesheet_directory');
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $website_title; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="<?php echo $website_title; ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    
    <meta property="og:title" content="<?php echo $website_title; ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $path; ?>/img/ogp.png">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@yoshidahiroshi8">
    <meta name="twitter:title" content="<?php echo $website_title; ?>">
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

      <div class="contents">
        <div class="main-image">
          <img src="<?php echo $path; ?>/img/main.jpg" alt="">
        </div>
        
<?php
  $args = array(
    'posts_per_page' => 5,
    'post_type' => 'post'
  );
  $posts = get_posts($args);
  foreach ($posts as $post) {
    $post_title = $post->post_title;
    $post_date = substr($post->post_date, 0, 10);
    $post_content = wpautop($post->post_content);
    $post_str = <<<EOT
        <div class="blog-item">
          <p class="blog-post-date">
            $post_date
          </p>
          <h1 class="blog-item-title">
            $post_title
          </h1>
          <div class="blog-body">
            $post_content
          </div>
        </div>
EOT;
    echo $post_str;
  };
  wp_reset_postdata();
?>
      </div>
    </div>
  </body>
</html>
