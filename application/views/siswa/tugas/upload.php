<?php
if (empty($this->session->userdata('gurulog'))) {
    show_404();
}
?>
<div class="container-fluid">
    <p>Login sebagai: <b><?= $siswa->nama; ?></b> (<?= $siswa->nisn; ?>)</p>
    <hr>
    <h3 class="mb-3"><?= $title; ?></h3>

    <div class="list-group mb-3">
        <div class="list-group-item shadow-sm">
            <h4 class="bold"><?= $tugas['nama']; ?></h4>
            <p><?= $tugas['kelas'] . '-' . $tugas['jurusan']; ?>, <?= date("d/m/Y", strtotime($tugas['date'])); ?></p>
            <div class="mt-2">
                <?= $tugas['keterangan']; ?>
            </div>
        </div>
    </div>

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

    <div class="list-group">
        <div class="list-group-item shadow-sm">
            <?= form_open_multipart('siswa/tugas/upload/' . $tugas['id']); ?>
            <label class="bold">Tambahkan file</label> <small class="text-danger bold mt-3">File harus dalam bentuk atau format .zip, .rar, .docx, .xlsx, .pdf</small>
            <input type="hidden" name="guruid" value="<?= $tugas['guruid']; ?>">
            <div class="form-row mb-4">
                <div class="col-4">
                    <input type="file" name="file" class="form-control">
                    <small>Dapat dikosongkan</small>
                </div>
            </div>
            <label class="bold">Jawaban</label>
            <div class="form-row mb-4">
                <div class="col">
                    <textarea name="keterangan" id="summernote" class="form-control"></textarea>
                </div>
            </div>
            <button class="btn btn-primary">Posting</button>
            <?= form_close(); ?>
        </div>
    </div>

    <?php include(APPPATH . 'views/guru/dir/copyright.php'); ?>
</div>