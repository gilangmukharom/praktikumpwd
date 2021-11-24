<?php
// include database connection file
include_once("koneksi.php");
// Get id from URL to delete that user
$nim = $_GET['nim'];
// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim='$nim'");
// After delete redirect to Home, so that latest user list will be displayed.


if ($result == TRUE)
{
    echo "Data Berhasil Dihapus!";
}
else
{
    echo "Data Gagal Dihapus!";
}
header('index.php');
