<html>
    <head>
        <title> Upload Bulletin -</title>
        <link href="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
    </head>
    <body>
      <h3>UBAH BULETIN</h3>
      <?php echo $this->session->flashdata('message') ?>
        <?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
        <div class="card mb-3" >
          <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/simpanubahbuletin/' . $buletin_ubah['kd_berkas']); ?>">
            <div>Berkas : </div>
          <div class="form-group"><input type="file" class="form-control" name="berkas"></div>
            <div>Keterangan : </div>
            <?php foreach ($buletin_update->result() as $row) : ?>
            <div class="form-group"><textarea name="keterangan_berkas" class="form-control"><?php echo $row->keterangan_berkas; ?></textarea></div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Ubah</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
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
                      <th>Image</th>
                      <th>Keterangan</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                        $no = 1;
                        foreach ($berkas->result() as $row) : ?>
                            <tr>
                                <td align='center'><?php echo $no++; ?></td>
                                <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $row->nama_berkas; ?>"/></td>
                                <td><?php echo $row->keterangan_berkas; ?></td>
                                <td align='center'><a href="<?php echo base_url(); ?>admin/buletin_delete/<?php echo $row->kd_berkas; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="<?php echo base_url(); ?>admin/buletin_update/<?php echo $row->kd_berkas; ?>" class="btn btn-primary btn-sm">
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

    </body>
</html>