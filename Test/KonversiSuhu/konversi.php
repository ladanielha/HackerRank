
<?php
if (isset($_POST["submit"])) {
    $suhu = $_POST['suhu'];
    $suhu_asal = $_POST['suhu_asal'];
    $konversi = $_POST['konversi'];
    $hasil = $suhu;

    // Mengonversi suhu asal ke Celsius terlebih dahulu
    switch ($suhu_asal) {
        case "celsius":
            $suhu_celsius = $suhu;
            break;
        case "reamur":
            $suhu_celsius = $suhu * (5 / 4);
            break;
        case "fahrenheit":
            $suhu_celsius = ($suhu - 32) * (5 / 9);
            break;
        case "kelvin":
            $suhu_celsius = $suhu - 273.15;
            break;
        default:
            echo "Pilih suhu asal yang valid.";
            exit;
    }

    // Mengonversi dari Celsius ke suhu tujuan
    switch ($konversi) {
        case "celsius":
            $hasil = $suhu_celsius;
            echo "Hasil konversi: $hasil °C";
            break;
        case "reamur":
            $hasil = $suhu_celsius * (4 / 5);
            echo "Hasil konversi ke Reamur: $hasil °R";
            break;
        case "fahrenheit":
            $hasil = ($suhu_celsius * (9 / 5)) + 32;
            echo "Hasil konversi ke Fahrenheit: $hasil °F";
            break;
        case "kelvin":
            $hasil = $suhu_celsius + 273.15;
            echo "Hasil konversi ke Kelvin: $hasil K";
            break;
        default:
            echo "Pilih suhu tujuan yang valid.";
            exit;
    }
}
?>
