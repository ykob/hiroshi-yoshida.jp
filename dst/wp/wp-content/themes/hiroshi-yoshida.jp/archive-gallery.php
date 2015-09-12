<?php
  $title = 'gallery | '. get_bloginfo('name');
  $url = get_post_type_archive_link('gallery');;
  $description = 'これまでの作品を掲載。';
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
