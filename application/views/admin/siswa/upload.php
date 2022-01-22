<div class="container-fluid">
    <a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
    <hr>
    <h3 class="bold"><?= $title; ?></h3>
    <a href="<?= base_url('assets/excel/Template.xlsx'); ?>">
        <button class="btn btn-primary btn-sm mt-3">Download template</button>
    </a>
    <div class="row mb-4">
        <div class="col-sm-6">
            <?php
            if ($this->session->flashdata('success')) {
                $keterangan = $this->session->flashdata('success');
                echo '<div class="alert alert-primary alert-dismissible fade show mt-4" role="alert">';
                echo '<a class="close" data-dismiss="alert" aria-label="close">';
                echo '<span aria-hidden="true">&times;</span>';
                echo '</a>';
                echo $keterangan;
                echo '</div>';
            }
            ?>
            <div class="card card-body mt-4 shadow-sm">

                <?= form_open_multipart('admin/siswa/upload'); ?>
                <label class="bold">File</label>
                <input type="file" name="file" class="form-control" required="" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">

                <div class="pt-3"></div>
                <button type="submit" name="preview" class="btn btn-primary" id="btn">Preview</button>
                <?= form_close(); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-body mt-4 shadow-sm">
                <p class="bold mb-3">Keterangan template Excel</p>
                <p>[*] <b>NISN</b>: tidak boleh duplikat (ada yang sama)</p>
                <p>[*] <b>KELAS</b>: <b>0</b> (untuk siswa nonaktif) <b>/ X / XI / XII</b> (harus huruf kapital) </p>
                <p>[*] <b>JURUSAN</b>: <b>RPL / TKJ / AK / AP</b> (harus huruf kapital) </p>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['preview'])) {
        if (isset($upload_error)) {
            echo $upload_error;
            die;
        }
        echo '<form action="' . base_url('admin/siswa/import') . '" method="POST">';

        echo '
		<div class="table table-responsive mb-5">
		<table class="table table-hovered mb-0">
		<thead class="table-dark">
		<tr>
		<th>NISN</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		</tr>
		</thead>
		<tbody>';

        $numrow = 1;
        $kosong = 0;

        foreach ($sheet as $row) {
            $nisn         = $row['A'];
            $nama         = $row['B'];
            $kelas         = $row['C'];
            $jurusan     = $row['D'];

            if ($nisn == "" && $nama == "" && $kelas == "" && $jurusan == "")
                continue;

            if ($numrow > 1) {
                $nisntd     = (!empty($nisn)) ? '' : ' class="bg-red"';
                $namatd     = (!empty($nama)) ? '' : ' class="bg-red"';
                $kelastd     = (!empty($kelas)) ? '' : ' class="bg-red"';
                $jurusantd     = (!empty($jurusan)) ? '' : ' class="bg-red"';

                if ($nisn == "" or $nama == "" or $kelas == "" or $jurusan == "") {
                    $kosong++;
                }

                echo "<tr>";
                echo "<td" . $nisntd . ">" . $nisn . "</td>";
                echo "<td" . $namatd . ">" . $nama . "</td>";
                echo "<td" . $kelastd . ">" . $kelas . "</td>";
                echo "<td" . $jurusantd . ">" . $jurusan . "</td>";
                echo "</tr>";
            }
            $numrow++;
        }

        echo '
		</tbody>
		</table>
		</div>
		';

        if ($kosong > 0) {
            echo '
			<div class="alert alert-primary alert-dismissible mt-4">
				Ada field data kosong
			</div>
			';
        } else {
            echo '<button type="submit" name="import" class="btn btn-primary">Import</button>';
            echo '<a href="' . base_url("admin/siswa/add") . '" class="btn">Batal</a>';
        }
        echo "</form>";
    }
    ?>
    <?php include(APPPATH . 'views/admin/dir/copyright.php'); ?>
</div>