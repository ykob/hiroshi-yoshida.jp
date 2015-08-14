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
      <div class="contents">
        <h1 class="page-title">
          gallery
        </h1>
      
        <div class="gallery-wrap">
          <h2 class="gallery-title">
            作品名が入ります。作品名が入ります。
          </h2>
          <ul class="gallery-thumbs">
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img001.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb001.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img002.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb002.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img003.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb003.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img004.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb004.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img001.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb001.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img002.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb002.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img003.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb003.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img004.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb004.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img001.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb001.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img002.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb002.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img003.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb003.png" alt="">
              </a>
            </li>
            <li>
              <a href="<?php echo $path; ?>/img/gallery-img004.jpg">
                <img src="<?php echo $path; ?>/img/gallery-thumb004.png" alt="">
              </a>
            </li>
          </ul>
          <div class="gallery-summary">
            <p>作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。</p>
            <p>作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。作品の説明が入ります。</p>
          </div>
        </div>
        
        
      </div>
<?php
  include 'header.php';
?>
    </div>
    <script src="<?php echo $path; ?>/js/lib/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $path; ?>/js/lib/imagelightbox.js"></script>
    <script src="<?php echo $path; ?>/js/main.js"></script>
  </body>
</html>
