<?php
    $opsi = "p1";

    if(isset($_GET["pg"])){
        $opsi = $_GET["pg"];
    }

    $judulpage = "";
    $konten = "";

    switch($opsi){
        case "p1":
            $judulpage = "Page 1";
            $konten = "<h3>Page 1</h3><p>Isi dari Page Satu</p>";
            break;
        case "p2":
            $judulpage = "Page 2";
            $konten = "<h3>Page 2</h3><p>Isi dari Page Dua</p>";
            break;
        case "p3":
            $judulpage = "Page 3";
            $konten = "<h3>Page 3</h3><p>Isi dari Page Tiga</p>";
            break;
        case "p4":
            $judulpage = "Page 4";
            $konten = "<h3>Page 4</h3><p>Isi dari Page Empat</p>";
            break;
        default :
            $judulpage = "Page 1";
            $konten = "<h3>Page 1</h3><p>Isi dari Page Satu</p>";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage;?></title>
</head>
<body>
    
    <a href="latihan03.php?pg=p1">Page 1</a><a href="latihan03.php?pg=p2">Page 2</a><a href="latihan03.php?pg=p3">Page 3</a><a href="latihan03.php?pg=p4">Page 4</a>

    <?php
        echo $konten;
    ?>
</body>
</html>