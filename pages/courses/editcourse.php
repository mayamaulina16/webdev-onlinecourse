<div id="top" class="row mb-3">
    <div class="col">
        <h3>Ubah Kursus</h3>
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

            $updateSQL = "UPDATE courses SET
                courses_name='$name',
                description='$desc',
                duration='$duration',
                WHERE courses_id=$id";
            $result = mysqli_query($connection, $updateSQL);
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
                    Ubah Data Berhasil Disimpan
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
                    <label for="courses_name" class="form-label">Judul Kursus</label>
                    <input type="text" class="form-control" id="courses_name" name="courses_name" value="<?php echo $row['courses_name'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $row['description'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="duration" class="form-label">Durasi</label>
                    <input type="text" class="form-control" id="duration" name="duration" value="<?php echo $row['duration'] ?>" required>
                </div>
                <div class="col mb-3">
                    <button class="btn btn-success" type="submit" name="simpan_button">
                        <i class="fa fa-save"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    if (window.history.replaceState) {
        window.historry.repllaceState(null, null, window.location.href);
    }
</script>