<?php
$page_name = "Program VIP di LPK777";
$page_slug = 'vip';
$page_index = 4;
$page_thumbnail = "https://example.com/image.jpg";
include '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en-MY" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>WINMYR - Laman Slot Online & Pengeluaran Cepat di Malaysia</title>
        <base href="<?php echo $site_base_url;?>">
        <?php include '../inc/stylesheet.php';?>
    </head>
    <body>
        <?php include '../inc/navbar.php';?>
        <main class="pt-0" id="">
            <?php include '../inc/marquee.php';?>
            <section class="" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-3">
                            <div class="top-brand">
                            <?php
                            if( $top_brands ) {
                                foreach( $top_brands as $key => $brand ) {
                                    $brand_title = $brand['title'];
                                    $brand_desc = $brand['description'];
                                    $brand_thumbnail = $site_base_url.'/images/top_brand/top_brand_'.$key.'.png';
                                    $brand_link = $brand['url'];
                            echo '<div class="top-brand-item '.$key.' p-2">
                                <div class="top-brand-inner d-flex align-items-center justify-content-start">
                                    <div class="col col-header pt-3">
                                        <div class="col-image"><img src="'.$brand_thumbnail.'"/></div>
                                        <div class="col-title">'.$brand_title.'</div>
                                    </div>
                                    <div class="col col-desc pt-3">
                                        <p class="mb-0">'.$brand_desc.'</p>
                                    </div>
                                    <div class="col col-cta pt-3">
                                        <a href="'.$brand_link.'"><span>VISIT</span></a>
                                    </div>
                                </div>
                            </div>';
                                }
                            }
                            ?>
                            </div>

                            <div class="userprofile-container p-3 mt-3 w-100">
                                <div class="row mx-0">
                                    <div class="col-5 px-0 text-center">
                                        <img src="https://maltese9.protonz-cdn.com/public/assets/global_home/temp_vip.png" alt="vip_rank" class="w-50">
                                    </div>
                                    <div class="col-7 pr-0">
                                        <div class="text-0-65 text-weight-400">Current Rank</div>
                                        <div class="text-0-9 text-weight-700">--</div>
                                        <div class="text-0-65 text-weight-400 mt-2">Current deposit</div>
                                        <div class="text-0-9 text-weight-700"> --</div>
                                        <div class="text-0-65 text-weight-400 mt-2">Current crypto deposit</div>
                                        <div class="text-0-9 text-weight-700">0.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="userprofile-container w-100 mt-3 p-3">
                                <div class="row mx-0 align-items-center vip-table-row-line pb-2 pt-0">
                                    <div class="col-2 text-0-7 px-2 text-center">
                                        Rank
                                    </div>
                                    <div class="col-2 text-0-7 px-2 text-center">
                                        Monthly Total Deposit
                                    </div>
                                    <div class="col-2 text-0-7 px-2 text-center">
                                        VIP Upgrade Bonus
                                    </div>
                                    <div class="col-2 text-0-7 px-2 text-center">
                                        Birthday Bonus
                                    </div>
                                    <div class="col-2 text-0-7 px-2 text-center">
                                        Daily Withdrawal Limit
                                    </div>
                                    <div class="col-2 text-0-7 px-2 text-center">
                                        Daily Withdrawal Count
                                    </div>
                                </div>
                                        <div class="row mx-0 align-items-center vip-table-row-line pb-2 pt-2">
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            <img src="https://maltese9.protonz-cdn.com/public/assets/merchant/plugnplaym4/vip/my/regular.png?25071610" alt="vip_rank" class="w-50">
                                            
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            -
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            -
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            -
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            30,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            6
                                        </div>
                                    </div>
                                        <div class="row mx-0 align-items-center vip-table-row-line pb-2 pt-2">
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            <img src="https://maltese9.protonz-cdn.com/public/assets/merchant/plugnplaym4/vip/my/vip1.png?25071610" alt="vip_rank" class="w-50">
                                            
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            3,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            38
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            68
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            40,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            7
                                        </div>
                                    </div>
                                        <div class="row mx-0 align-items-center vip-table-row-line pb-2 pt-2">
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            <img src="https://maltese9.protonz-cdn.com/public/assets/merchant/plugnplaym4/vip/my/vip2.png?25071610" alt="vip_rank" class="w-50">
                                            
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            5,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            50
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            88
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            40,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            7
                                        </div>
                                    </div>
                                        <div class="row mx-0 align-items-center vip-table-row-line pb-2 pt-2">
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            <img src="https://maltese9.protonz-cdn.com/public/assets/merchant/plugnplaym4/vip/my/vip3.png?25071610" alt="vip_rank" class="w-50">
                                            
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            10,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            118
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            138
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            50,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            8
                                        </div>
                                    </div>
                                        <div class="row mx-0 align-items-center vip-table-row-line pb-2 pt-2">
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            <img src="https://maltese9.protonz-cdn.com/public/assets/merchant/plugnplaym4/vip/my/vip4.png?25071610" alt="vip_rank" class="w-50">
                                            
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            30,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            228
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            288
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            60,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            8
                                        </div>
                                    </div>
                                        <div class="row mx-0 align-items-center vip-table-row-line pb-2 pt-2">
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            <img src="https://maltese9.protonz-cdn.com/public/assets/merchant/plugnplaym4/vip/my/vip5.png?25071610" alt="vip_rank" class="w-50">
                                            
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            100,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            398
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            498
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            80,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            10
                                        </div>
                                    </div>
                                        <div class="row mx-0 align-items-center vip-table-row-line pb-2 pt-2">
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            <img src="https://maltese9.protonz-cdn.com/public/assets/merchant/plugnplaym4/vip/my/vip6.png?25071610" alt="vip_rank" class="w-50">
                                            
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            300,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            688
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            988
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            100,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            15
                                        </div>
                                    </div>
                                        <div class="row mx-0 align-items-center vip-table-row-line pb-2 pt-2">
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            <img src="https://maltese9.protonz-cdn.com/public/assets/merchant/plugnplaym4/vip/my/vvip7.png?25071610" alt="vip_rank" class="w-50">
                                            
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            500,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            1118
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            1988
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            150,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            15
                                        </div>
                                    </div>
                                        <div class="row mx-0 align-items-center vip-table-row-line  pt-2">
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            <img src="https://maltese9.protonz-cdn.com/public/assets/merchant/plugnplaym4/vip/my/vvip8.png?25071610" alt="vip_rank" class="w-50">
                                            
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            JEMPUTAN
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            1388
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            3888
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            200,000
                                        </div>
                                        <div class="col-2 text-0-7 px-2 text-center">
                                            20
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <div class="text-editor">
                                <h1></h1>
                                <p></p>
                                <p>&nbsp;</p>
                                <p></p>
                                <p>&nbsp;</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="" id="faq">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <h2>Soalan Lazim (FAQ)</h2>
                            <div class="accordion" id="accordionFAQ">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                            Bagaimana nak jadi ahli VIP di LPK777?
                                        </button>
                                    </h3>
                                    <div id="collapse01" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Anda akan disenaraikan secara automatik bila aktif bermain dan membuat deposit.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                            Adakah terdapat bayaran untuk sertai program VIP?
                                        </button>
                                    </h3>
                                    <div id="collapse02" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Tiada. Ia percuma dan berdasarkan aktiviti permainan anda.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                            Apa faedah jadi ahli VIP?
                                        </button>
                                    </h3>
                                    <div id="collapse03" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Pengeluaran cepat, cashback, bonus eksklusif, sokongan khas & hadiah harijadi – semuanya meningkat ikut tahap anda.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                            Berapa tahap VIP yang ada?
                                        </button>
                                    </h3>
                                    <div id="collapse04" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Empat tahap utama: Bronze, Silver, Gold, dan Platinum. Ada juga tahap sementara ikut musim.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                                            Boleh ke hilang status VIP?
                                        </button>
                                    </h3>
                                    <div id="collapse05" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Boleh jika akaun tidak aktif untuk tempoh panjang (30-60 hari).
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                                            Seberapa kerap status VIP dikemas kini?
                                        </button>
                                    </h3>
                                    <div id="collapse06" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Setiap hari atau minggu berdasarkan aktiviti terkini.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                                            Apa yang dikira untuk naik VIP?
                                        </button>
                                    </h3>
                                    <div id="collapse07" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Permainan slot dan jumlah deposit. Kadang-kadang promosi khas boleh percepatkan kemajuan.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                                            Cashback dapat dalam bentuk apa?
                                        </button>
                                    </h3>
                                    <div id="collapse08" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Biasanya sebagai bonus kredit atau <a href="https://lpk-777.com/slot"><strong>putaran percuma slot</strong></a>, bergantung kepada tawaran.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse09" aria-expanded="false" aria-controls="collapse09">
                                            Bagaimana nak tahu saya naik tahap?
                                        </button>
                                    </h3>
                                    <div id="collapse09" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Anda akan terima notifikasi melalui emel atau papan pemuka.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Adakah promosi VIP berbeza dari biasa?
                                        </button>
                                    </h3>
                                    <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Ya! <a href="https://lpk-777.com/bonus-promosi"><strong>Promosi VIP</strong></a> lebih tinggi nilainya dan lebih eksklusif.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            VIP dapat had pengeluaran lebih baik?
                                        </button>
                                    </h3>
                                    <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Betul. Pengeluaran lebih besar & pantas dengan sedikit sekatan.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            Sokongan untuk VIP lain dari biasa?
                                        </button>
                                    </h3>
                                    <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            Ya. Anda akan dapat keutamaan atau pengurus khas jika tahap Gold/Platinum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include '../inc/footer.php';?>
    </body>
</html>