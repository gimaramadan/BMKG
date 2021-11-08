<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
  <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <?php foreach ($artikel->result() as $row) : ?>
    <title><?php echo $row->article_title; ?></title>
    <?php endforeach; ?>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no"/>

    <!-- Load Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,500,600,600i,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://corona.kepriprov.go.id/assets/frontend/css/corona-style.css">
    <!-- Demo CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body class="creative-bg section-80">
  <main>
                <section id="blog" class="white-bg">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="text-primary mb-5"></h4>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($artikel->result() as $row) : ?>
                    <div class="col-md-8">
                        <div class="post">
                            <div class="post-title">
                                <h4><?php echo $row->article_title; ?></h4>
                            </div>
                            <div class="post-meta">
                                <?php 

                                    function tgl_indo($date){
                                        $bulan = array(
                                            1 => 'Januari',
                                            'Februari',
                                            'Maret',
                                            'April',
                                            'Mei',
                                            'Juni',
                                            'Juli',
                                            'Agustus',
                                            'September',
                                            'Oktober',
                                            'November',
                                            'Desember'
                                        );
                                        $pecahkan = explode('-', $date);

                                        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                    }
                                ?>
                                <span><i class="fa fa-calendar"></i> <?php $date = $row->article_created_at; $dt = date('Y-m-d', strtotime($date)); echo tgl_indo($dt);?></span>
                            </div>
                            <div class="post-image">
                                <img class="img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $row->nama_berkas; ?>" alt="post image">
                            </div>
                            <div class="post-content">
                                <div class="post-text">
                                    
                                        <p style="margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Open Sans&quot;, Arial, sans-serif; vertical-align: baseline;"><?php echo $row->article_content; ?></p>                                    
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <?php endforeach; ?>

                    <div class="offset-md-1 col-md-3">
                        <div class="sidebar">
                            <div class="related-posts">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="related-title">Postingan Terbaru</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php foreach ($artikelnew->result() as $row) : ?>
                                            <div class="col-md-12">
                                                <div class="post-related">
                                                    <div class="post-related-image">
                                                        <a href="<?php echo base_url('user/detail/'.$row->article_id) ?>">
                                                            <img class="img-fluid" style="object-fit: cover;" src="<?php echo base_url(); ?>uploads/<?php echo $row->nama_berkas; ?>" alt="Post image">
                                                        </a>
                                                    </div>
                                                    <div class="post-related-title">
                                                        <a href="<?php echo base_url('user/detail/'.$row->article_id) ?>">
                                                            <h6><?php echo $row->article_title; ?></h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
    </main>

      <div class="back-to-top">
        <a class="backToTop" href="#hero"><i class="fas fa-chevron-up"></i></a>
      </div>

      <!-- ================== END BASE JS ================== -->    <script>
    $(document).ready(function(){
       $(".post-text img").css("width", "100%"); 
    });
</script>
</html>