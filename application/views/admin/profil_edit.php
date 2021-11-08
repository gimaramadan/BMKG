<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
    <link href="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <h3>ADD NEW DATA PROFIL</h3>
                <?php echo $this->session->flashdata('message') ?>
                <?php 
                    if(isset($error))
                    {
                        echo "ERROR UPLOAD : <br/>";
                        print_r($error);
                        echo "<hr/>";
                    }
                ?>
                <form enctype="multipart/form-data" action="<?php echo site_url('admin/simpanubahprofil/' . $profil_ubah['id']);?>" method="post">
                    <div class="form-group">
                        <div><input type="file" name="berkas"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $profil_ubah['nama'] ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?= $profil_ubah['jabatan'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
					<button type="reset" class="btn btn-warning">Reset</button>
                </form>
                </div>
              </div>
            
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
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                        $no = 1;
                        foreach ($profil->result() as $row) : ?>
                            <tr>
                                <td align='center'><?php echo $no++; ?></td>
                                <td><img width="100 " src="<?php echo base_url(); ?>foto/<?php echo $row->nama_berkas; ?>"/></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->jabatan; ?></td>
                                <td align='center'><a href="<?php echo base_url(); ?>admin/profil_delete/<?php echo $row->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="<?php echo base_url(); ?>admin/profil_update/<?php echo $row->id; ?>" class="btn btn-primary btn-sm">
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

      <script src="<?php echo base_url('vendor/jquery/jquery.min.js');?>"></script>
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
 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</body>
</html>