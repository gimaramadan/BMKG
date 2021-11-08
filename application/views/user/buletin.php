<html>
    <head>
        <title>Buletin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">

body:before {
  content: "";
  position: fixed;
  z-index: -1;
  background-size:cover;
  background-position:center top;
  display: block;
  background-image: url("<?= base_url() ?>/assets/img/meja.jpg");
  width: 99%;
  height: 700px;
  filter: blur(11px) ;
  -webkit-filter: blur(10px) ;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 15px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
a{
  color: white;
  text-decoration:none
}
#title {
  text-align:center;}


        </style>
    </head>
    <body>
         <div id="title">
        <h3><center>Tampil Berkas Bulletin</center></h3>
        <hr/>
        <table border="1" width="100%" style="text-align:center;">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
            <?php 
                $no = 1;
                foreach($berkas->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $row->nama_berkas; ?>"/></td>
                        <td><?php echo $row->keterangan_berkas; ?></td>
                        <td><a href="<?php echo base_url(); ?>user/download/<?php echo $row->kd_berkas; ?>"><button class="btn"><i class="fa fa-download"></i>&nbsp;Download</a></button></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html>