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
    $cat_slug = $category->slug;
    $cat_summary = $category->category_description;
    $str .= <<<EOT
        <div class="gallery-wrap" id="$cat_slug">
          <h2 class="gallery-title">
            $cat_title
          </h2>
          <ul class="gallery-thumbs">
EOT;
    $args = array(
        'post_type' => 'gallery',
        'gallery-group' => $cat_slug,
        'numberposts' => -1
    );
    $posts = get_posts($args);
    global $post;
    if ($posts) {
      foreach ($posts as $post) {
        setup_postdata($post);
        $files = get_post_meta($post->ID, '_thumbnail_id', true);
        $file = wp_get_attachment_url($files);
        $image_src = clean_url($file);
        $thumbnail = get_the_post_thumbnail();
        $str .= <<<EOT
            <li>
              <a href="$image_src">
                $thumbnail
              </a>
            </li>
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
  $script_str = '';
  $script_str .= <<<EOT
    <script>
      var activityIndicatorOn = function() {
        $('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
      };

      var activityIndicatorOff = function() {
        $('#imagelightbox-loading' ).remove();
      };

      var overlayOn = function() {
        $('<div id="imagelightbox-overlay"></div>').appendTo('body');
      };

      var overlayOff = function() {
        $('#imagelightbox-overlay' ).remove();
      };

      var imageLightboxObj = {
        onStart: function() {
          overlayOn();
        },
        onEnd: function() {
          overlayOff(); activityIndicatorOff();
        },
        onLoadStart: function() {
          activityIndicatorOn();
        },
        onLoadEnd: function() {
          activityIndicatorOff();
        }
      };

EOT;
  foreach($categories as $category) {
    $cat_slug = $category->slug;
    $script_str .= <<<EOT
      $("#$cat_slug a").imageLightbox(imageLightboxObj);

EOT;
  }
  $script_str .= <<<EOT
    </script>

EOT;
  echo $script_str;
?>
  </body>
</html>
