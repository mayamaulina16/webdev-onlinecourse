<?php
include "database/connection.php";
?>
<div class="row">
    <div class="col">
        <h3>Daftar Kursus</h3>
    </div>
    <div class="col">
        <a href="?page=addcourse" class="btn btn-success float-end">
            <i class="fa fa-plus-circle"></i>
            Tambah
        </a>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <?php
        $selectSQL = "SELECT * FROM courses";
        $result = mysqli_query($connection, $selectSQL);
        if (!$result) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo mysqli_error($connection) ?>
            </div>
        <?php
            return;
        }
        if (mysqli_num_rows($result) == 0) {
        ?>
            <div class="alert alert-light" role="alert">
                Data kosong
            </div>
        <?php
            return;
        }
        ?>
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">No.</th>
                    <th scope="col">Judul Kursus</th>
                    <th scope="col" width="130">Durasi</th>
                    <th scope="col" width="200">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr class="align-middle">
                        <td>
                            <?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $row["courses_name"] ?><br>
                            <p><small>Deskripsi :</small> <br>
                                <small><?php echo $row["description"] ?></small>
                            </p>
                        </td>
                        <td>
                            <?php echo $row["duration"] ?>
                        </td>
                        <td>
                            <a href="?page=editcourse&id=<?php echo $row["courses_id"] ?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                            <a href="?page=deletecourse&id=<?php echo $row["courses_id"] ?>" onclick="javascript: return confirm('Apakah yakin ingin menghapus kursus ini?');" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>