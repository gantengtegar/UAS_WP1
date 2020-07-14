<?php
include "header.php";
?>
<title>Wisata</title>
<div align="center">
    <a href="insert.php" class="tambah" align="center">+ Tambah Data Wisata</a>
</div>
<div class="card" align="center">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Wisata</th>
                    <th scope="col">Deksripsi</th>
                    <th scope="col">Option</th>
                </tr>
                <?php
                include 'koneksi.php';
                $wisata = mysqli_query($koneksi, "SELECT * FROM wisata");
                $no = 1;
                while ($d = mysqli_fetch_array($wisata)) {
                ?>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['deskripsi']; ?></td>
                    <td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>">Update</a>
                        <a href="delete.php?id=<?php echo $d['id']; ?>"> Delete</a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include "footer.php";
?>