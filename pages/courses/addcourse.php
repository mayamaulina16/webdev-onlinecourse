<div id="top" class="row mb-3">
    <div class="col">
        <h3>Tambah Kursus</h3>
    </div>
    <div class="col">
        <a href="?page=courses" class="btn btn-primary float-end">
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
            $name = $_POST['courses_name'];
            $desc = $_POST['description'];
            $duration = $_POST['duration'];

            $insertSQL = "INSERT INTO courses SET
                courses_name='$name',
                description='$desc',
                duration='$duration'";
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
                    <label for="Desc" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="Desc" name="description" placeholder="Ketikkan Deskripsi Kursus" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="Duration" class="form-label">Durasi</label>
                    <input type="text" class="form-control" id="Duration" name="duration" placeholder="Ketikkan Durasi Kursus" required>
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