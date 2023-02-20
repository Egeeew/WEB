<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <title>PHP + SQL Kodları</title>
    </head>
    <body>
    <h1 style="text-align: center; font-family: 'Gill Sans MT';">PHP BÖLÜMÜ</h1>
    <?php
    echo "Merhaba <strong>PHP!</strong>" . "<br>";
    $degisken = "değişkenleri $ işaretiyle tanımlıyoruz.";
    ECHO "Yazıların nasıl yazıldığı fark etmiyor ayrıca, " . $degisken . "<br>";

    // Tekli Yorum Satırı
    # Bu da Tekli Yorum Satırı
    /*
     * Bu çoklu yorum satırı
     */

    $satir = "<br>";
    $isim = "Ege";
    echo "Merhaba $isim! $satir";

    $x = 5;
    $y = 10.2;
    echo $x + $y . "$satir";

    $x = 5;
    function Test() {
        echo "<p>X'in fonksiyon değeri (Hata verir global olmadığı için): $x</p>";
    }
    Test();
    echo "<p>X'in dış değeri: $x</p>";

    function dogruTest() {
        global $x;
        echo "<p>X'in global ile çağırılmış fonksiyondaki değeri: $x</p>";
    }
    dogruTest();

    function alternatifTest() {
        $GLOBALS["x"] = $GLOBALS["x"] + $GLOBALS["x"];
        echo "<p>X + X'in \$GLOBALS ile çağırılmış fonksiyondaki değeri:</p>";
    }
    alternatifTest();
    echo "<p>$x</p>";

    function statik() {
        static $statik = 5;
        echo $statik;
        $statik -= 1;
    }
    statik();
    statik();
    statik();
    statik();
    statik();

    function yeniSatir() {
        echo "<br>";
    }
    yeniSatir();

    print "echo yerine print kullandım!";
    yeniSatir();

    echo "Bir değişkenin tipini öğrenmek için var_dump() kullanılıyor. Örnek:";
    yeniSatir();
    $yeni = 33;
    $yeni1 = "33";
    $yeni2 = NULL;
    $yeni3 = 10.2;
    $yeni4 = True;
    $yeni5 = ["1","2"];
    var_dump($yeni);
    var_dump($yeni1);
    var_dump($yeni2);
    var_dump($yeni3);
    var_dump($yeni4);
    var_dump($yeni5);
    yeniSatir();

    $yazi = "Merhaba Dunya!";
    echo "Bir string değerinin uzunluğunu strlen() veriyor. '$yazi' örneği:";
    yeniSatir();
    $yazi = strlen($yazi);
    echo "$yazi";
    yeniSatir();

    $yazi = "Merhaba Dunya!";
    echo "Bir string değerindeki kelime sayısını str_word_count() veriyor. '$yazi' örneği:";
    yeniSatir();
    $yazi = str_word_count($yazi);
    echo "$yazi";
    yeniSatir();

    $yazi = "Merhaba Dunya!";
    echo "Bir string değerini strrev() ters çevirir. '$yazi' örneği:";
    yeniSatir();
    $yazi = strrev($yazi);
    echo "$yazi";
    yeniSatir();

    $yazi = "Merhaba Dunya!";
    $aranan = "Dunya!";
    echo "Bir string değerinde bir kelimeyi strpos() arar. '$yazi'de '$aranan' örneği:";
    yeniSatir();
    $yazi = strpos($yazi, $aranan);
    echo "$yazi";
    yeniSatir();

    $yazi = "Merhaba Dunya!";
    echo "Bir string değerinde str_replace() bir kelimeyi değiştirir. '$yazi' örneği:";
    yeniSatir();
    $yazi = str_replace("Dunya", "Ege", $yazi);
    echo "$yazi";
    yeniSatir();

    ?>
    </body>
</html>