<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/style/page.css">
    <script src="src/scripts/yemekscript.js"></script>
</head>

<body>

    <div id="header">
        <a href="/tte">GERİ DÖN</a>

        <div id="searchbox__container">
            <input type="text" name="" id="searchbox" placeholder="yemek veya şehir arayınız..">
            <button id="searchbox__button" type="submit">
                <img id="icon__search" src="./src/images/icon_search.svg">
            </button>
        </div>
    </div>
    <div id="content">
        <?php
        include('utils/dbconnec.php');
        $sehir = $_GET['sehir'];
        $id = $_GET['id'];

    


















       
        // Tablodaki satır sayısını almak için SQL sorgusu
        $sql = "SELECT COUNT(*) AS row_count FROM $sehir";
        // Sorguyu çalıştır
        $result = $db->query($sql);
        // Sonucu al
        $row = $result->fetch(PDO::FETCH_ASSOC);
        // Satır sayısını al
        $row_count = $row['row_count'];
        
        do {
            $rand1 = rand(1, $row_count);
            $rand2 = rand(1, $row_count);
            $rand3 = rand(1, $row_count);
        } while (
            $rand1 == $rand2 || $rand2 == $rand3 || $rand1 == $rand3 
        );
        // Sonucu kullan
        
        $sorgu = $db->prepare("SELECT * FROM $sehir where id = $id");
        $sorgu->execute();
        $sorgutam = $db->prepare("SELECT * FROM $sehir WHERE id IN($rand1 , $rand2 ,$rand3)");
        $sorgutam->execute();
        $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

















        ?>
        <div class="content-row">

            <!-- <img id="yemekFoto" src="x"  width="500px" height="400px"> -->
            <div id="img-wrapper">
                <?php echo '<img id="yemekFoto" src="data:image/jpg;base64,' . base64_encode($cikti['yemekFoto']) . '">' ?>
                <div id="img-overlay"></div>
                <h2 id="meal-title"><?php echo $cikti['yemekAdi']; ?></h2>
            </div>
        </div>
        <div class="content-row">

            <div class="content-col">
                <div id="yemektarif">
                    <h1 style="text-align: center;"><?php echo $cikti['yemekAdi']; ?> Nasıl Yapılır?</h1>
                    <span class="yemektarif-content">
                        <?php echo $cikti['yemekTarifi']; ?>
                    </span>
                </div>
                <div id="yemektarif">
                    <h1 style="text-align: center;">Malzemeler</h1>
                    <span class="yemektarif-content">
                        <?php echo $cikti['yemekMalzemeleri']; ?>
                        <br>
                        <h2>Afiyet Olsun :)</h2>
                    </span>
                </div>
            </div>
            <div class="content-col">
                <div id="meal-list">
                    <ul>
                        <li id="list-header"><?php echo $sehir; ?> İlinin diğer yemekleri</li>
                        <?php while ($ciktitam = $sorgutam->fetch(PDO::FETCH_ASSOC)) { ?>
                            <li class="listitems">
                                    <a href="yemek.php?id=<?php echo $ciktitam['id']; ?>&sehir=<?php echo $sehir; ?>">
                                    <?php echo '<img class="list-foto" src="data:image/jpg;base64,' . base64_encode($ciktitam['yemekFoto']) . '"  >' ?>
                                    <p class="list-yemekadi">
                                        <?php echo $ciktitam["yemekAdi"]; ?>
                                    </p>
                                </a>
                                </li>
                        <?php } ?>
                        <li>
                        <a href="/tte/sehir.php?sehir=<?= $sehir ?>">
                            Tümünü Gör
                        </a>
                        </li>
                    </ul>
                    
                    <span id="end-of-the-meal-list"></span>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="footer-col">
                <ul>
                    <h3>LOREM İPSUM</h3>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Cum, earum veritatis.</li>
                    <li>Autem, odit pariatur?</li>
                    <li>Adipisci, quod repellat!</li>
                    <li>Laborum, tempora delectus?</li>
                </ul>
            </div>
            <div class="footer-col">
                <ul>
                <h3>LOREM İPSUM</h3>

                    <li>Lorem, ipsum dolor.</li>
                    <li>Cum, earum veritatis.</li>
                    <li>Autem, odit pariatur?</li>
                    <li>Adipisci, quod repellat!</li>
                    <li>Laborum, tempora delectus?</li>
                </ul>
            </div>
            <div class="footer-col">
                <ul>
                <h3>LOREM İPSUM</h3>

                    <li>Lorem, ipsum dolor.</li>
                    <li>Cum, earum veritatis.</li>
                    <li>Autem, odit pariatur?</li>
                    <li>Adipisci, quod repellat!</li>
                    <li>Laborum, tempora delectus?</li>
                </ul>
            </div>
        </div>
</body>

</html>