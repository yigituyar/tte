<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/sehir.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>


    <?php
    include('utils/dbconnec.php');
    $sehir = $_GET['sehir'];
    ?>
    <div id="header">
        </div>
        <div id="sehiradim">
            <?php echo $sehir; ?>
        </div>
    <?php
    $sorgu = $db->prepare("SELECT * FROM $sehir " );
    $sorgu->execute();
    ?>
    <div id="cards">
        <?php
        while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="card">
                    <a href="/tte/yemek.php?id=<?php echo $cikti['id']; ?>&sehir=<?php echo $sehir; ?>">

                    <?php echo '<img src="data:image/jpg;base64,' . base64_encode($cikti['yemekFoto']) . '" height=100px width=100px >' ?>
                    <div class="overlay">
                        <h2><?php echo $cikti["yemekAdi"]; ?></h2>

                    </div>
                </a>
                </div>
        <?php } ?>




    </div>

</body>

</html>