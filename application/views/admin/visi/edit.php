<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Visi MIsi</h1>

<div class="row">
    <div class="col-md-12">
        <a href="<?php echo base_url(); ?>admin/visi" class="btn btn-primary btn-sm">Kembali</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4 mt-4">
            <div class="card-body">
                <form action="<?php echo site_url('admin/visi_edit/' . $visi['id_visi']) ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Visi</label>
                        <input name="visi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $visi['Visi']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Misi</label>
                        <textarea name="misi" id="" cols="30" rows="10" class="form-control" value="<?php echo $visi['Misi']; ?>"><?php echo $visi['Misi']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Update</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->