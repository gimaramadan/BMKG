
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Visi Misi Stasiun Meterologi Geofisika </h1>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4 mt-4">
            <div class="card-body">

                <?php echo $this->session->flashdata('message'); ?>

                <table class="table-bordered table-striped w-100">
                    <thead>
                        <td align='center'>Visi</td>
                        <td align='center'>Misi</td>
                        <td align='center'>Aksi</td>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($visi as $tampil) : ?>
                            <tr>
                                <td align='center'><?php echo $tampil['Visi']; ?></td>
                                <td align='center'><?php echo $tampil['Misi']; ?></td>
                                <td align='center'><a href="<?php echo base_url(); ?>admin/visi_delete/<?php echo $tampil['id_visi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="<?php echo base_url(); ?>admin/visi_edit/<?php echo $tampil['id_visi']; ?>" class="btn btn-primary btn-sm">
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
</div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
