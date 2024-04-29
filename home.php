<div class="page-header text-center">
    <h1 class="entry-title">Sistem Pakar Diagnosis Penyakit Ibu Hamil </h1>
</div>
<div class="enrty-body flex-grow-1 px-3">
    <h2 class="text-center">
        Lacak kesehatan Anda di masa kehamilan Anda
    </h2>
    <p class="text-center">
        Di sini, kami bertujuan untuk meningkatkan kesehatan dan kesejahteraan setiap wanita dan ibu hamil pada masa kehamilannya.
    </p>
    <div class="container-lg">
        <h3>
            Dapatkan prediksi akurat berbasis AI
        </h3>
        <p>
            Sistem akan memberi Anda prediksi tentang potensi maupun resiko pada masa kehamilan berbasis AI yang akurat dengan melacak lebih dari 40 tanda-tanda pada tubuh seperti kram, pusing, lemas, dan banyak lagi.
        </p>
        <h3>
            Temukan pola dalam masa kehamilan Anda
        </h3>
        <p>
            Pahami gejala unik Anda, temukan pola pada masa kehamilan, lalu ketahui apakah kondisi yang Anda alami normal.
        </p>
        <div class="row">
            <div class="col-sm-6 col-lg-6 text-center">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <?php
                            $q = esc_field(_get('q'));
                            $rows = $db->get_results("SELECT * FROM tb_gejala WHERE nama_gejala LIKE '%$q%' ORDER BY kode_gejala");
                            $jumlah_gejala = count($rows);
                        ?>
                        <h1><?php echo $jumlah_gejala; ?></h1>
                        <div>Data Gejala</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 text-center">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <?php
                            $q = esc_field(_get('q'));
                            $rows = $db->get_results("SELECT * FROM tb_diagnosa WHERE nama_diagnosa LIKE '%$q%' ORDER BY kode_diagnosa");
                            $jumlah_penyakit = count($rows);
                        ?>
                        <h1><?php echo $jumlah_penyakit; ?></h1>
                        <div>Data Penyakit</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>