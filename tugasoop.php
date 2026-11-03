<?php

// Membuat class untuk menghitung bangun datar
class BangunDatar
{
    public $phi; // Menyimpan nilai phi

    // Constructor untuk memberikan nilai phi
    public function __construct($phi = 3.14)
    {
        $this->phi = $phi;
    }

    // Method untuk menghitung luas dan keliling persegi
    public function persegi($sisi)
    {
        $luas = $sisi * $sisi; // Menghitung luas
        $keliling = 4 * $sisi; // Menghitung keliling

        // Menampilkan hasil perhitungan
        echo "<h3>1. Persegi</h3>";
        echo "Sisi = $sisi <br>";
        echo "Luas = $sisi x $sisi = $luas <br>";
        echo "Keliling = 4 x $sisi = $keliling <br><br>";
    }

    // Method untuk menghitung luas dan keliling persegi panjang
    public function persegiPanjang($panjang, $lebar)
    {
        $luas = $panjang * $lebar; // Menghitung luas
        $keliling = 2 * ($panjang + $lebar); // Menghitung keliling

        // Menampilkan hasil perhitungan
        echo "<h3>2. Persegi Panjang</h3>";
        echo "Panjang = $panjang <br>";
        echo "Lebar = $lebar <br>";
        echo "Luas = $panjang x $lebar = $luas <br>";
        echo "Keliling = 2 x ($panjang + $lebar) = $keliling <br><br>";
    }

    // Method untuk menghitung luas dan keliling segitiga
    public function segitiga($alas, $tinggi, $sisi1, $sisi2)
    {
        $luas = 0.5 * $alas * $tinggi; // Menghitung luas
        $keliling = $alas + $sisi1 + $sisi2; // Menghitung keliling

        // Menampilkan hasil perhitungan
        echo "<h3>3. Segitiga</h3>";
        echo "Alas = $alas <br>";
        echo "Tinggi = $tinggi <br>";
        echo "Sisi 1 = $sisi1 <br>";
        echo "Sisi 2 = $sisi2 <br>";
        echo "Luas = 1/2 x $alas x $tinggi = $luas <br>";
        echo "Keliling = $alas + $sisi1 + $sisi2 = $keliling <br><br>";
    }

    // Method untuk menghitung luas dan keliling lingkaran
    public function lingkaran($jariJari)
    {
        $luas = $this->phi * $jariJari * $jariJari; // Menghitung luas
        $keliling = 2 * $this->phi * $jariJari; // Menghitung keliling

        // Menampilkan hasil perhitungan
        echo "<h3>4. Lingkaran</h3>";
        echo "Jari-jari = $jariJari <br>";
        echo "Phi = $this->phi <br>";
        echo "Luas = $this->phi x $jariJari x $jariJari = $luas <br>";
        echo "Keliling = 2 x $this->phi x $jariJari = $keliling <br><br>";
    }

    // Method untuk menghitung luas dan keliling trapesium
    public function trapesium($a, $b, $c, $d, $tinggi)
    {
        $luas = 0.5 * ($a + $b) * $tinggi; // Menghitung luas
        $keliling = $a + $b + $c + $d; // Menghitung keliling

        // Menampilkan hasil perhitungan
        echo "<h3>5. Trapesium</h3>";
        echo "Sisi atas = $a <br>";
        echo "Sisi bawah = $b <br>";
        echo "Sisi kiri = $c <br>";
        echo "Sisi kanan = $d <br>";
        echo "Tinggi = $tinggi <br>";
        echo "Luas = 1/2 x ($a + $b) x $tinggi = $luas <br>";
        echo "Keliling = $a + $b + $c + $d = $keliling <br><br>";
    }
}

// Membuat objek dari class BangunDatar
$bangun = new BangunDatar(3.14);

// Memanggil method untuk menghitung setiap bangun datar
$bangun->persegi(5);
$bangun->persegiPanjang(10, 5);
$bangun->segitiga(6, 4, 5, 5);
$bangun->lingkaran(7);
$bangun->trapesium(6, 10, 5, 5, 4);

?>