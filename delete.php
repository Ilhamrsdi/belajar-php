<?php 

if(isset($_GET['id'])){
    // ambil id dari get
    $id = $_GET['id'];

   // Buat koneksi dengan MySQL
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "jurusan";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password ,$dbname);
   
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   echo "Connected successfully";
   

    $sql = "DELETE FROM mahasiswa WHERE id='$id' ";

    if (mysqli_query($conn, $sql)) {
        echo "Delete data berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      
    mysqli_close($conn);
}