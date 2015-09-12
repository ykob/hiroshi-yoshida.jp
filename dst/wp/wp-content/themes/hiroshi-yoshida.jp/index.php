<?php
  $title = get_bloginfo('name');
  $url = get_bloginfo('url');
  $description = get_bloginfo('description');
  $path = get_bloginfo('stylesheet_directory');
?>
<!DOCTYPE html>
<html>
  <head>
<?php
  include 'head.php';
?>
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
    
<?php
  include 'script.php';
?>
  </body>
</html>
