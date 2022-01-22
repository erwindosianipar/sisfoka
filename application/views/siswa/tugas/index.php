<?php
if (empty($this->session->userdata('siswalog'))) {
    show_404();
}
?>
<div class="container-fluid">
    <p>Login sebagai: <b><?= $siswa->nama; ?></b> (<?= $siswa->nisn; ?>)</p>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Tugas</th>
                    <th>Tanggal</th>
                    <th>Ditutup</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($tugass->num_rows() < 1) : ?>
                    <tr>
                        <td colspan="4">Belum ada tugas</td>
                    </tr>
                <?php endif; ?>

                <?php $no = 0;
                foreach ($tugass->result_array() as $tugas) : $no++; ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><a href="<?= base_url('siswa/tugas/upload/' . $tugas['id']); ?>"><?= $tugas['nama']; ?></a></td>
                        <td><?= $tugas['date']; ?></td>
                        <td><?php if ($tugas['aktif'] == '1') echo 'Tidak';
                            else echo 'Ya'; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <?php include(APPPATH . 'views/siswa/dir/copyright.php'); ?>
</div>