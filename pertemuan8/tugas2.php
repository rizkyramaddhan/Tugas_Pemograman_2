<html>
<head><title>Tugas 2 Rizki Ramadhan</title></head>
<body>
<form method="POST"> 
    Input Bilangan Pertama : <br>
    <input type="text" name="A" size=10> <br>
    Input Bilangan Kedua : <br>
    <input type="text" name="B" size=10> <br>
    <input type="submit" name="hitung" value="hitung">
</form>

<?php
if(isset($_POST['hitung'])){
    $A = $_POST["A"];
    $B = $_POST["B"];

    function jumlah($A, $B) {
        $jumlahbil = $A + $B; 
        return $jumlahbil; 
    }

    function kurang($A, $B) {
        $kurangbil = $A - $B; 
        return $kurangbil; 
    }

    function kali($A, $B) {
        $kalibil = $A * $B; 
        return $kalibil; 
    }

    function bagi($A, $B) {
        $bagibil = $A / $B; 
        return $bagibil; 
    }

    echo "Bilangan Pertama : $A <br>"; 
    echo "Bilangan Kedua : $B <br><br>"; 

    $hasil_jumlah = jumlah($A, $B);
    printf("Penjumlahan antara : %d + %d = %d <br><br>", $A, $B, $hasil_jumlah);

    $hasil_kurang = kurang($A, $B);
    printf("Pengurangan antara : %d - %d = %d <br><br>", $A, $B, $hasil_kurang);

    $hasil_kali = kali($A, $B);
    printf("Perkalian antara : %d * %d = %d <br><br>", $A, $B, $hasil_kali);

    $hasil_bagi = bagi($A, $B);
    printf("Pembagian antara : %d / %d = %d <br><br>", $A, $B, $hasil_bagi);
}
?>
</body>
</html>