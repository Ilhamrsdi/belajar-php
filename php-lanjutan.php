<?php
$a = "Ilham";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
<h1>Input Data</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label>Nama</label>
        <input type="text" name="a">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty ($_POST['submit'])) {

            switch ($_POST['a']) {
                case 'ilham':
                    $pesan = $_POST['a'].  " adalah orang Banyuwangi";
                    break;
                case 'adi':
                    $pesan = $_POST['a'].  " berasal dari Jember";
                    break;
                default:
                    $pesan = $_POST['a']. " darimana ya?";
            }
            for ($i=0; $i < $_POST['no']; $i++) {
                echo $pesan. "<br/>";
            }
        } else {
            echo "Anda belum input data";
        }
    ?>
</body>

</html>