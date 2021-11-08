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
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Saran</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                        $no = 1;
                        foreach ($saran->result() as $row) : ?>
                            <tr>
                                <td align='center'><?php echo $no++; ?></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->isi; ?></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</body>
</html>