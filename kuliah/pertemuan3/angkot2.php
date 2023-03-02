<?php 
    
    $nilai = 1;
    $jumlah_angkot = 10;
    $angkot_rusak = 4;
    while($nilai = $jumlah_angkot-$angkot_rusak <= 6) {
        
        echo "Angkot No. $nilai beroprasi dengan baik! <br>";

        $nilai +=1;
        
    }
    for($nilai >= $jumlah_angkot; $nilai <= 10; $nilai ++){

        echo "Angkot No. $nilai beroprasi dengan baik <br>";
    }
?>
