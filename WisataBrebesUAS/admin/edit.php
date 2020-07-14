<?php
include "header.php";
?>

<head>
    <title>Wisata</title>
</head>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from wisata where id='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <form method="post" action="update.php">
        <div class="card" align="center">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Wisata</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            </td>
                            <td>
                                <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                            </td>
                            <td>
                                <input type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>">
                            </td>
                            <td>
                                <input type="submit" value="Update">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
<?php
}
?>
<?php
include "footer.php";
?>