<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="content" style="background-color: #fffee0; font-family: Poppins, sans-serif;">
        <div class="container py-5">
            <br><center><h1>Sunset Coffee</h1></center> <br>
            <br>
            <div class="row text-center">
                <?php
                $ambil = $koneksi->query("SELECT * FROM kopi");
                ?>
                <?php
                while($perproduk = $ambil->fetch_assoc()){
                ?>
                
                <div class="col-md-4 mb-3 gx-5 gy-5" style="padding-left: 50px">
                    <div class="card" style="width: 25rem;">
                        <div class="caption mt-3 mb-4">
                            <h4><?php echo $perproduk['nama']; ?></h4>
                            <h5 class="mt-3 mb-3">Rp. <?php echo number_format($perproduk['harga']); ?></h5>
                            <a href="beli.php?id=<?php echo $perproduk['id']; ?>" class="btn btn-warning fw-bold">Pesan&nbsp;<i class="bi bi-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>
</html>