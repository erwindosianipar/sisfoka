<div class="container-fluid">
    <a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
    <hr>
    <h3 class="bold"><?= $title; ?></h3>
    <div class="mt-4"></div>

    <?php
    if ($this->session->flashdata('success')) {
        $keterangan = $this->session->flashdata('success');
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
        echo '<a class="close" data-dismiss="alert" aria-label="close">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</a>';
        echo $keterangan;
        echo '</div>';
    }
    ?>
    <div class="shadow-sm">
        <div class="table table-responsive">
            <table class="table table-hovered mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;
                    foreach ($prestasis as $prestasi) : $no++; ?>
                        <tr>
                            <th><?= $no; ?></th>
                            <td>
                                <a href="<?= base_url('p/' . $prestasi['link']); ?>" class="text-dark">
                                    <?= $prestasi['title']; ?>
                                </a>
                            </td>
                            <td>
                                <?= $prestasi['date']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/prestasi/update/' . $prestasi['id']); ?>">
                                    <span class="badge badge-success">Edit</span>
                                </a>
                            </td>
                            <td>
                                <?= form_open('admin/prestasi/delete'); ?>
                                <input type="hidden" name="id" value="<?= $prestasi['id'] ?>">
                                <button type="submit" class="badge badge-danger border-0">Hapus</button>
                                <?= form_close(); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include(APPPATH . 'views/admin/dir/copyright.php'); ?>

</div>