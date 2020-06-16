<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];

    // update user data
    $result = mysqli_query($connect, "UPDATE user SET nama='$nama',alamat='$alamat' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: view.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id_user'];

// Fetech user data based on id
$result = mysqli_query($connect, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="view.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id_user'];?>"></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>