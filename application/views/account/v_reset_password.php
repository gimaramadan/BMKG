
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

  <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="container" align="center">
            <div class="card mb-3"
               style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Change Password</h1>
                    </div>
                    <?php echo $this->session->flashdata('message') ?>
                    <form class="user"
                        method="post"
                        action="<?= base_url('admin/changepassword') ?>">
                      <div class="form-group">
                        <input type="password"
                             class="form-control form-control-user"
                             id="inputPassword"
                             name="password"
                             value="<?php echo set_value('password'); ?>"
                             placeholder="Masukkan Password Baru">
                        <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                        <input type="password"
                             class="form-control form-control-user"
                             id="inputConfirmPassword"
                             name="password_conf"
                             value="<?php echo set_value('password_conf'); ?>"
                             placeholder="Ulangi Password Baru">
                      </div>
                      <button type="submit"
                          class="btn btn-primary btn-user btn-block">
                        Submit
                      </button>
                      <hr>
                      <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
                    </form>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.container-fluid -->
          </div>


        </div>
        <!-- End of Main Content -->

</div>