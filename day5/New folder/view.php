<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($connect, "SELECT * FROM user");
?>
<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<br>
<a href="tambah.php">Tambah data</a>
<br/><br/>
    <table width='80%' border=1>
        <tr>
            <th>No</th> 
			<th>Nama</th> 
			<th>Alamat</th>
			<th>Action</th>
        </tr>
        <?php  
			$no = 1;
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['alamat']."</td>";
				echo "<td><a href='edit.php?id_user=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
				echo "</tr>";
            }
        ?>
    </table>
</body>
</html>