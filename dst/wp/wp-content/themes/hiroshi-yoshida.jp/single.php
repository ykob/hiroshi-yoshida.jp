<?php
  $website_title = get_bloginfo('name');
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

<?php
  include 'script.php';
?>
    </div>
  </body>
</html>
