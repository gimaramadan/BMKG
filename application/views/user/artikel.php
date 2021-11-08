<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Artikel</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/art.css') ?>">
  <style type="text/css">
    a {
      text-decoration:none;
    }
  </style>
</head>
<body>
  <h1 style="text-align:center; font-size:60px;color:white">ARTIKEL</h1>
  <?php foreach ($artikel->result() as $row) : ?>
  <div class="blog-post">
    <div class="blog-post-img">
      <img src="<?php echo base_url(); ?>uploads/<?php echo $row->nama_berkas; ?>" alt="">
    </div>
    <div class="blog-post-info">
      <div class="blog-post-title">
       <h2><a href="<?php echo base_url('user/detail/'.$row->article_id) ?>"><?php echo $row->article_title; ?></a></h2>
      </div>
   <!--    <div class="blog-post-date">
        <span>Friday</span>
        <span>June 12 2020</span>
      </div> -->
      <div class="blog-post-desc">
        <p>
          <?php 
              $string = $row->article_content;
              if (strlen($string) > 300) {

                  // truncate string
                  $stringCut = substr($string, 0, 300);
                  $endPoint = strrpos($stringCut, ' ');

                  //if the string doesn't contain any space then it will cut without word basis.
                  $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                  $string .= '...';
              }
              echo $string;
           ?>
        </p>
      </div>
 <!--      <div class="blog-post-read-more">
        <a href="#">Read More</a>
      </div> -->
    </div>
  </div>
<?php endforeach; ?>
</body>
</html>