<?php 
    // // exercise 1 
    // $number = 10;
    // if ($number % 2 == 0) {
    //     echo "angka genap </br>";
    // } else {
    //     echo "angka ganjil </br>";
    // }

    // //exercise 2
    // $age = 18;
    // if ($age >= 18) {
    //     echo "dewasa </br>";
    // } else {
    //     echo "remaja </br>";
    // }

    // //exercise 3
    // $total = 120000;
    // $discount = "50%"; 

    // if ($total >= 120000) {
    //     echo "congrats, you get discount =  $discount </br>";
    // } else {
    //     echo "your total shop is = $total </br>";
    // }


    // //exercise 4
    // $value = 85;

    // if ($value >= 90) {
    //     echo "your grade is A </br>";
    // } else if ($value >= 80) {
    //     echo "your grade is B </br>";
    // } else if ($value >= 70) {
    //     echo "your grade is C </br>";
    // } else if ($value >= 60) {
    //     echo "your grade is D </br>";
    // } else {
    //     echo "your grade is E </br>";
    // }

    // //exercise 5
    //  $weather = 35;

    //  if ($weather > 35) {
    //     echo "weather is hot";
    //  } else if ($weather >= 25 || $weather >=34) {
    //     echo "weather is normal";
    //  } else if ($weather <br 25) { 
    //     echo "weather is cool";
    //  }


     //task 1 penilaian siswa
     $nilai_siswa = 85;
     $rata_rata = 85;

     if ($nilai_siswa >= $rata_rata) {
        echo "selamat, anda dinyatakan lulus! </br>";
     } else {
        echo "maaf, anda belum lulus </br>";
     }


     //task 2 cek kelayakan kredit yssa (yang simpel simpel aja) 
     $cicilan = 1500000; 
     $min_usia = 21 ;
     $max_usia = 55;
     
     $penghasilan = 6000000;
     $usia = 30;
     $riwayat_kredit = 'lancar';
     
     if ($penghasilan < $cicilan * 3) { // cek penghasilannya 
        echo "sorry yeee gabisa ngajuin kartu kredit karena penghasilannya masih kurang dari 3x ciciclan! </br>";      
     } else  if ($usia <= $min_usia ) { // cek usia
        echo "sorry yee usia kamu masih " .  $usia . " tahun, masih belum bisa ngajuin kartu kredit </br>";
    } else if ($usia >= $max_usia) { // cek usia
        echo "maaf yaa pak, usia bapak udah" . " " . $usia . " tahun, udah gabisa ngajuin kartu kredit </br>";
    } else  if ($riwayat_kredit == 'macet') { // cek riwayat kredit
        echo "sorry yeee gabisa ngajuin kartu kredit soalnya riwayat kreditnya macet! hehe:) </br>";
    } else {
        echo "selamatttt!, kamuu bisa ngajuin kartu kredittt! </br>";
    }

    //task 3 sistem tiket bioskop ini juga yssa
    $saldo = 50000;
    $kursi_keseluruhan = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $kursi_tersedia = [1, 2, 5, 6, 7, 8];
    $film = ['together', 'dopamin', 'the running man'];
    $harga_tiket = 30000;

    $kursi_pilihan = 1;
    $film_pilihan = 'together';
    $kembalian = $saldo - $harga_tiket;

    if ($saldo < $harga_tiket) {
        echo "uang kamu kurang cuma Rp. " . $saldo . " sedangkan harga tiketnya Rp. " . $harga_tiket ."</br>";
    } else if (!in_array($kursi_pilihan, $kursi_tersedia)) { // in_array buat cek apakah valuenya ada di array reference (params pertama value dan params kedua array reference)
        echo "kursi udah ada yang ngisi, pilih kursi yang lain aja!</br>";
    } else if (!in_array($kursi_pilihan, $kursi_keseluruhan)) { // bacanya kursi pilihan != kursi 
        echo "kursi nya kan cuma ada 10 kenapa malah milih kursi " . $kursi_pilihan . "</br>"; 
    } else if (!in_array($film_pilihan, $film)) {
        echo "Film tidak tersedia! </br>";
    } else {
        echo "makasiii udah beli tiketnya! kembaliannya Rp. " . number_format($kembalian, 0, ',', '.') . " yaaaa!" . "</br>" ;
    }


    //task 4 sistem diskon toko (case in bread shop) ini juga yssa masbro
    $varian = ['coklat', 'keju'];
    $harga = 5000;
    $diskon_member = (100 - 15) / 100; // diskon 15% jadi cuma bayar 85% dari harga total
    $diskon_pembelian = (100 - 30) / 100; // diskon 30% jadi cuma bayar 70% dari harga total
    $jumlah_untuk_diskon = 10;

    $isMember = true;
    $roti_dibeli = 1;
    $varian_dibeli = 'coklat';

    if (!in_array($varian_dibeli, $varian)) {
        echo "varian tidak tersedia!";
    } else if ($roti_dibeli >= $jumlah_untuk_diskon && $isMember) {
        $total_diskon = $diskon_pembelian * $diskon_member; // total diskon = 45%, jadi cuma bayar 55% dari total belanja (level 3)
        $total_harga1 = ($harga * $roti_dibeli) * $total_diskon;
        echo "selamat!, karena anda sudah member dan anda pembelian anda lebih dari {$jumlah_untuk_diskon} maka harganya menjadi Rp. " . number_format($total_harga1, 0, ',' , '.') . "</>";
    } else if ($roti_dibeli >= $jumlah_untuk_diskon) { 
        $total_harga2 = $harga * $roti_dibeli * $diskon_pembelian; // cuma diskon pembelian = 30%, jadi cuma bayar 70% dari harga total (level 2)
        echo "selamat!, karena pembelian anda lebih dari {$jumlah_untuk_diskon} maka harganya menjadi Rp. " . number_format($total_harga2, 0, ',' , '.') . "</br>";
    } else if ($isMember) {
        $total_harga3 = $harga * $roti_dibeli * $diskon_member; // cuma diskon member = 15%, jadi cuma bayar 85% dari harga total (level 1)
        echo "selamat!, karena anda sudah menjadi member kami, maka harganya menjadi Rp. " . number_format($total_harga3, 0, ',' , '.') . "</br>"; // params number format (angka yg ingin di format, 0 untuk desimal ,pemisal desimal, pemisah ribuan)
    } else {
        $total_harga4 = $roti_dibeli * $harga;
        echo "total harga anda adalah Rp. " . number_format($total_harga4, 0, ',' , '.') . "</br>";
    }

    


?>