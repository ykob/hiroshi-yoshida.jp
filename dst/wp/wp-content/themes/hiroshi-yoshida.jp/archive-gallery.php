<?php
  $website_title = get_bloginfo('name');
  $url = get_bloginfo('url');
  $description = get_bloginfo('description');
  $path = get_bloginfo('stylesheet_directory');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>gallery | <?php echo $website_title; ?></title>
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
        <h1 class="page-title">
          gallery
        </h1>
        
<?php
  $str = '';
  
  $cat_args = array(
      'taxonomy' => 'gallery-group'
  );
  $categories = get_categories($cat_args);
  foreach($categories as $category) {
    $cat_title = $category->name;
    $cat_summary = $category->category_description;
    $str .= <<<EOT
        <div class="gallery-wrap">
          <h2 class="gallery-title">
            $cat_title
          </h2>
          <ul class="gallery-thumbs">
EOT;
    $args = array(
        'taxonomy' => $category->name,
        'post_type' => 'gallery'
    );
    $posts = get_posts($args);
    //var_dump($posts);
    global $post;
    if ($posts) {
      foreach ($posts as $post) {
        setup_postdata($post);
        $str .= <<<EOT
            <li><a href=""><img src="" alt=""></a></li>
EOT;
      }
    }
    wp_reset_postdata();
    $str .= <<<EOT
          </ul>
          <div class="gallery-summary">
            $cat_summary
          </div>
        </div>
EOT;
  }
  echo $str;
?>
      </div>
    </div>

<?php
  include 'script.php';
?>
  </body>
</html>
