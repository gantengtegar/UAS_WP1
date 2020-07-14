<?php
include "header.php";
?>
<title>Wisata</title>
<div class="card" align="center">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Wisata</th>
                    <th scope="col">Deksripsi</th>
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