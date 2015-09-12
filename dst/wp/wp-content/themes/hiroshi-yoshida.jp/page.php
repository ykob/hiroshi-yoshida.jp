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
<?php
  include 'head.php';
  include 'script.php';
  echo post_custom('JavaScript');
?>
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
