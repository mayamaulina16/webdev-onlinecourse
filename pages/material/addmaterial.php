<div id="top" class="row mb-3">
    <div class="col">
        <h3>Tambah Materi</h3>
    </div>
    <div class="col">
        <a href="?page=material" class="btn btn-primary float-end">
            <i class="fa fa-arrow-circle-left"></i>
            Kembali
        </a>
    </div>
</div>
<div id="pesan" class="row mb-3">
    <div class="col">
        <?php
        include "database/connection.php";

        if (isset($_POST["simpan_button"])) {
            $cname = $_POST['courses_name'];
            $mname = $_POST['material_name'];
            $desc = $_POST['description'];
            $link = $_POST['material_link'];

            $insertSQL = "INSERT INTO material SET
                courses_name='$cname',
                material_name='$mname',
                description='$desc',
                material_link='$link'";
            $result = mysqli_query($connection, $insertSQL);
            if (!$result) {
        ?>
                <div class="alert alert-danger" role="alert">
                    <i class="fa fa-exclamation-circle"></i>
                    <?php echo mysqli_error($connection) ?>
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-success" role="alert">
                    <i class="fa fa-check-circle"></i>
                    Data Berhasil disimpan
                </div>
        <?php
            }
        }

        ?>
    </div>
</div>
<div id="inputan" class="row mb-3">
    <div class="col">
        <div class="card px-3 py-3">
            <form action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="Name" class="form-label">Judul Kursus</label>
                    <input type="text" class="form-control" id="Name" name="courses_name" placeholder="Ketikkan Nama Kursus" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="Name" class="form-label">Judul Materi</label>
                    <input type="text" class="form-control" id="Name" name="material_name" placeholder="Ketikkan Nama Materi" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="Desc" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="Desc" name="description" placeholder="Ketikkan Deskripsi Materi" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="Link" class="form-label">Link Materi</label>
                    <input type="text" class="form-control" id="Link" name="material_link" placeholder="Ketikkan Link Materi" required>
                </div>
                <div class="col mb-3">
                    <button class="btn btn-success" type="submit" name="simpan_button">
                        <i class="fas fa-save"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>