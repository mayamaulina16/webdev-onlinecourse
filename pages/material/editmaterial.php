<div id="top" class="row mb-3">
    <div class="col">
        <h3>Ubah Materi</h3>
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
            $id = $_POST["material_id"];
            $cname = $_POST['courses_name'];
            $mname = $_POST['material_name'];
            $link = $_POST['material_link'];

            $updateSQL = "UPDATE material SET
                courses_name='$cname',
                material_name='$mname',
                material_link='$link'
                WHERE material_id='$id'";
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
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $id ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Judul Kursus</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $$row['courses_name'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Judul Materi</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['material_name'] ?>" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="material_link" class="form-label">Link Materi</label>
                    <input type="text" class="form-control" id="material_link" name="material_link" value="<?php echo $row['material_link'] ?>" required>
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