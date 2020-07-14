<?php
include "header.php";
?>
<title>Coffee Shop</title>
<form method="post" action="input.php">
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
                        <td><input type="text" name="nama"></td>
                        <td><input type="text" name="deskripsi"></td>
                        <td>
                            <input type="submit" value="Save">
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</form>
<?php
include "footer.php";
?>