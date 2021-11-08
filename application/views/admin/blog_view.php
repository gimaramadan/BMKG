<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
            <h3>ADD NEW ARTICLE</h3>
                <?php echo $this->session->flashdata('message') ?>
                <?php 
                    if(isset($error))
                    {
                        echo "ERROR UPLOAD : <br/>";
                        print_r($error);
                        echo "<hr/>";
                    }
                ?>
                <form enctype="multipart/form-data" action="<?php echo site_url('admin/publish');?>" method="post">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <div><input type="file" name="berkas"></div>
                    </div>
                    <div class="form-group">
                        <textarea name="content" id="ckeditor" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">PUBLISH</button>
                </form>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Gambar</th>
                      <th>Konten</th>
                      <th>Tanggal Buat</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php 

                                    function tgl_indo_convert($date){
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
                    <?php
                        $no = 1;
                        foreach ($article->result() as $row) : ?>
                            <tr>
                                <td align='center'><?php echo $no++; ?></td>
                                <td><?php echo $row->article_title; ?></td>
                                <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $row->nama_berkas; ?>"/></td>
                                <td><?php echo $row->article_content; ?></td>
                                <td><?php $date = $row->article_created_at; $dt = date('Y-m-d', strtotime($date)); echo tgl_indo_convert($dt);?> <?php $date = $row->article_created_at; $dt = date('H:i:s', strtotime($date)); echo $dt ?></td>
                                <td align='center'><a href="<?php echo base_url(); ?>admin/artikel_delete/<?php echo $row->article_id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="<?php echo base_url(); ?>admin/artikel_update/<?php echo $row->article_id; ?>" class="btn btn-primary btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>

                            </tr>
                        <?php
                        endforeach;
                        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js');?>"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?php echo base_url('js/sb-admin-2.min.js');?>"></script>

      <!-- Page level plugins -->
      <script src="<?php echo base_url('vendor/datatables/jquery.dataTables.min.js');?>"></script>
      <script src="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>

      <!-- Page level custom scripts -->
      <script src="<?php echo base_url('js/demo/datatables-demo.js');?>"></script>

      <!-- Page level custom scripts -->
      <script src="<?php echo base_url('js/demo/datatables-demo.js');?>"></script>
    <script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
    <script type="text/javascript">
        $(function () {
                CKEDITOR.replace('ckeditor',{
                    filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder/browse.php');?>',
                    height: '400px'             
                });
            });
    </script>
</body>
</html>