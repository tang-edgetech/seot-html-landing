<?php
$page_name = "Home";
$page_slug = 'home';
$page_index = 1;
$page_thumbnail = "https://example.com/image.jpg";
include 'inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en-MY" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>CLUBMY – Pengalaman Kasino Dalam Talian Terunggul di Malaysia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="title" content="CLUBMY – Pengalaman Kasino Dalam Talian Terunggul di Malaysia">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="canonical" href="https://clubmy.org/">
        <link rel="alternate" hreflang="x-default" href="https://clubmy.org/">
        <link rel="alternate" hreflang="en" href="https://clubmy.org/">
        <base href="<?php echo $site_base_url;?>">
        <?php include 'inc/stylesheet.php';?>
    </head>
    <body>
        <?php include 'inc/navbar.php';?>
        <main class="pt-0" id="">
            <?php include 'inc/marquee.php';?>
            <section class="" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-3">
                            <div class="top-brand">
                            <?php include 'inc/top-brand.php';?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-login py-0" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <div class="d-flex flex-wrap p-3 userprofile-container w-100 mt-3" id="userProfileModule">
                                <div class="d-flex flex-wrap p-0 m-0 w-100 justify-content-between mb-3">
                                    <a class="btn-style text-uppercase btn-section-bg col-6 text-center" style="max-width: 48.5%;" type="button" alt="Register Button" href="#">Daftar</a>
                                    <a class="btn-style text-uppercase btn-primary col-6 text-center" style="max-width: 48.5%;" type="button" alt="Login Button" href="#">Log Masuk</a>
                                </div>
                                <div class="d-flex m-0 p-0 w-100">
                                    <div class="col-7 px-0 pe-2">
                                        <div class="text-0-75">Main Baki:</div>
                                        <div class="text-1-3 text-weight-700 text-primary">MYR&nbsp; <span class="setWallet-homepage d-inline-block" style="width: max-content">0.00</span></div>
                                        <div class="d-flex m-0 p-0 text-0-75">
                                            <div class="col-6 px-0">Depo Minimum</div>
                                            <div class="col px-0">:&nbsp;MYR&nbsp;30.00</div>
                                        </div>
                                        <div class="d-flex m-0 p-0 text-0-75">
                                            <div class="col-6 px-0">Pengeluaran Minimum</div>
                                            <div class="col px-0">:&nbsp;MYR&nbsp;50.00</div>
                                        </div>
                                    </div>
                                    <div class="col-5 px-0 ">
                                        <div class="row m-0 p-0 w-100">
                                            <a class="btn-style btn-primary w-100" type="button" alt="Deposit Button" href="https://kayabet888.com/my-wallet?tab=deposit">
                                                <div class="d-flex align-items-center">
                                                    <img class="col-3 px-0 filter-black-to-white" src="<?php echo $site_base_url;?>images/icon-deposit.png" alt="token" style="max-width: 11%">
                                                    <span class="col px-0 ps-2 text-0-9 text-weight-600">Deposit</span>
                                                </div>
                                            </a>
                                            <a class="btn-style btn-section-bg w-100 mt-2 " type="button" alt="withdraw Button" href="https://kayabet888.com/my-wallet?tab=withdraw">
                                                <div class="d-flex align-items-center">
                                                    <img class="col-3 px-0 filter-black-to-white" src="<?php echo $site_base_url;?>images/icon-withdrawal.png" alt="token" style="max-width: 11%">
                                                    <span class="col px-0 ps-2 text-0-9 text-weight-600">Withdraw</span>
                                                    <div class="sequence-line">
                                                        <span> </span>
                                                        <span> </span>
                                                        <span> </span>
                                                        <span> </span>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <a class="btn-style btn-section-bg w-100 mt-2" type="button" alt="refresh Button" href="https://kayabet888.com/login">
                                                <div class="d-flex align-items-center">
                                                    <img class="col-3 px-0 filter-black-to-white" src="<?php echo $site_base_url;?>images/icon-refresh.png" alt="token" style="max-width: 11%">
                                                    <span class="col px-0 ps-2 text-0-9 text-weight-600">Segar Semula</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-0" id="">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-4">
                            <div class="row px-2 py-3 mx-0 userprofile-container w-100 mt-3 provider-list" style="gap:1%;">
                            <?php
                            if( $gameProviders ) {
                                $i = 0;
                                $total_count = count($gameProviders);
                                $middle = floor($total_count / 2);
                                foreach( $gameProviders as $key => $items ) {
                                    $slug = $key;
                                    $title = $items['title'];
                                    $icon = $items['icon'];
                                    $index = intval($i)+1;
                                    $class_active = ($i==0) ? ' active' : '';
                                    $class_active .= ' '.$slug;
                                    $check_active = 'check-active';
                                    if ($i < $middle) {
                                        $class_active .= ' row-first';
                                    }
                                    else {
                                        $class_active .= ' row-second mt-2';
                                        $check_active .= ' d-none';
                                    }
                                    echo '<div class="col btn-style btn-section-bg text-0-6 text-center px-0 text-capitalize'.$class_active.'" style="min-width: 19%; max-width: 19%;" data-target="'.$slug.'">
                                    <div class="mb-2 '.$check_active.'">
                                        <img src="'.$icon.'" alt="provider">
                                    </div>
                                    '.$title.'
                                </div>';

                                    $i++;
                                }
                            }
                            ?>
                            </div>

                            <div class="w-100 position-relative">
                                <div id="game_tab" class="row px-2 mx-0 w-100">
                                <?php $default_provider = 'slot';
                                if( $gameProviders[$default_provider] ) {
                                    foreach( $gameProviders[$default_provider]['games'] as $key => $game ) {
                                        $title = $game['title'];
                                        $thumbnail = $game['thumbnail'];
                                        echo '<div class="col-2 mt-2 px-2">
                                        <a href="javascript:void(0)">
                                            <img src="'.$thumbnail.'" alt="'.$title.'" class="w-100 rounded">
                                        </a>
                                    </div>';
                                    }
                                }
                                ?>
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
                                <h1>CLUBMY – Pengalaman Kasino Dalam Talian Terunggul di Malaysia</h1>
                                <p>Selamat datang ke <strong><a href="https://clubmy.org/">CLUBMY</a></strong>, platform kasino dalam talian terkemuka di Malaysia yang direka khas untuk para pemain. Di sini, keseronokan dan keselamatan berjalan seiring. Sama ada anda seorang pemain baru atau sudah berpengalaman, clubmy menawarkan navigasi yang jelas, pembayaran pantas, serta sokongan pelanggan yang dipercayai. Setiap ciri di clubmy dibina dengan teliti bagi memastikan pengalaman permainan anda seronok, selamat, dan memberi ganjaran.</p>
                                <h2>Kenapa Pemain Mempercayai CLUBMY</h2>
                                <p>Di club my, kepercayaan adalah paling utama. Kami percaya bahawa ketelusan dapat membina keyakinan anda. Kasino kami sentiasa diaudit oleh pihak bebas bagi menjamin keadilan dan keselamatan pada setiap peringkat. Semua data peribadi anda dilindungi menggunakan teknologi enkripsi terkini, memberikan ketenangan fikiran untuk anda menikmati permainan kegemaran. Selain itu, pasukan sokongan pelanggan kami sedia berkhidmat 24 jam sehari bagi membantu anda pada bila-bila masa.</p>
                                <h2>Pelbagai Pilihan Permainan Untuk Semua Pemain</h2>
                                <p>Terokai pelbagai jenis permainan dari mesin slot klasik hingga meja permainan langsung yang mengasyikkan. Apa pun pilihan anda, clubmy menyediakan sesuatu yang sesuai dengan citarasa dan tahap kemahiran anda. Jika anda gemar permainan <strong><a href="https://clubmy.org/slot">slot</a></strong>, layari koleksi slot kami untuk menemui tema-tema menarik seperti pengembaraan, fantasi, dan filem popular. Bagi peminat permainan kasino tradisional pula, cuba permainan blackjack, roulette, baccarat, dan poker dengan dealer profesional secara langsung.</p>
                                <h2>Pengalaman Unik di CLUBMY</h2>
                                <p>Di clubmy, inovasi adalah penting. Kami menyediakan pengalaman permainan baru seperti permainan VR dan pertandingan jackpot interaktif yang jarang ditemui dalam kalangan kasino dalam talian di Malaysia. Permainan baru ini menjadikan pengalaman anda lebih segar dan menawarkan peluang untuk mencuba sesuatu yang unik.</p>
                                <h2>Panduan Mudah Untuk Pemain Baru</h2>
                                <p>Jika anda masih baru dalam dunia kasino dalam talian, clubmy sedia membantu anda. Kami menyediakan panduan lengkap tetapi mudah difahami tentang konsep penting seperti RTP (Return to Player), volatiliti permainan, dan strategi asas pertaruhan. Anda juga boleh mencuba permainan secara percuma melalui mod demo sebelum membuat taruhan sebenar. Pendekatan mesra pemain baru ini membantu anda memahami setiap permainan dengan lebih baik.</p>
                                <h2>Program VIP & Kesetiaan Eksklusif</h2>
                                <p>Clubmy menghargai kesetiaan pemain secara eksklusif. Setiap taruhan anda akan menghasilkan mata yang membawa anda kepada status VIP bermula dari tahap Silver, Gold, Platinum, hingga Diamond. Setiap tahap memberikan faedah istimewa seperti pengeluaran yang lebih pantas, promosi peribadi, sokongan pelanggan berdedikasi, dan jemputan eksklusif ke acara khas. Ketahui lebih lanjut tentang kelebihan program ini di <strong><a href="https://clubmy.org/vip">halaman VIP kami</a></strong>.</p>
                                <h2>Kemudahan Bermain di Mudah Alih</h2>
                                <p>Nikmati kemudahan bermain di mana-mana sahaja anda berada. Clubmy dioptimumkan sepenuhnya untuk kegunaan mudah alih, memastikan pengalaman permainan yang lancar pada telefon pintar dan tablet sama ada menggunakan Android atau iOS. Pengguna Android yang inginkan pengalaman seperti aplikasi boleh <strong><a href="https://clubmy.org/muat-turun-apk">memuat turin APK rasmi clubmy</a></strong>. Uruskan akaun anda, deposit dana, dan mainkan permainan kegemaran anda secara mudah.</p>
                                <h2>Pembayaran yang Selamat & Mudah</h2>
                                <p>Urusan deposit dan pengeluaran di clubmy sangat mudah, pantas, dan selamat. Kami menerima pelbagai <strong><a href="https://clubmy.org/kaedah-pembayaran">kaedah pembayaran</a></strong> termasuk kad kredit dan debit, e-dompet tempatan seperti GrabPay dan Touch 'n Go, serta mata wang kripto popular. Deposit dikreditkan segera dan kebanyakan pengeluaran diproses dalam tempoh 24 jam. Kunjungi kaedah pembayaran untuk maklumat lanjut.</p>
                                <h2>Bonus Eksklusif & Promosi Berterusan</h2>
                                <p>Tingkatkan peluang kemenangan anda dengan pelbagai promosi menarik kami. Pemain baru akan menerima bonus alu-aluan yang lumayan, manakala pemain tetap boleh menikmati bonus mingguan, tawaran cashback, dan promosi istimewa mengikut musim. Lawati bahagian <strong><a href="https://clubmy.org/bonus-promosi">bonus dan promosi</a></strong> kami secara kerap untuk tawaran terkini yang menarik.</p>
                                <h2>Komitmen Terhadap Permainan Bertanggungjawab</h2>
                                <p>Di club my, kesejahteraan anda menjadi keutamaan. Kami menyediakan alat yang membantu anda bermain secara bertanggungjawab termasuk had deposit dan kerugian, tempoh bertenang, serta pengecualian diri. Jika perjudian menjadi terlalu membebankan, khidmat sokongan profesional tersedia menerusi <strong><a href="https://clubmy.org/perjudian-bertanggungjawab">sumber perjudian bertanggungjawab</a></strong> kami.</p>
                                <h2>Komuniti Pemain Aktif & Kejohanan Menarik</h2>
                                <p>Sertai komuniti aktif para pemain di clubmy. Sertai kejohanan tetap, bersaing dalam papan pendahulu, dan kongsikan kemenangan anda di forum pemain. Acara komuniti kami menambahkan keseronokan dan interaksi sosial dalam perjalanan permainan anda, menjadikan pengalaman lebih bermakna.</p>
                                <h2>Sokongan Pelanggan Berdedikasi</h2>
                                <p>Ada sebarang pertanyaan atau perlukan bantuan? Pasukan sokongan pelanggan clubmy sentiasa bersedia membantu anda melalui sembang langsung, e-mel, atau Telegram. Bantuan yang pantas, mesra, dan boleh dipercayai sentiasa tersedia apabila diperlukan. Layari halaman <strong><a href="https://clubmy.org/hubungi-kami">hubungan kami</a></strong> untuk mendapatkan bantuan terus.</p>
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
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                        Bagaimana cara untuk saya daftar akaun di clubmy?
                                    </button>
                                    </h3>
                                    <div id="collapse01" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Klik butang "Daftar", isi maklumat anda, sahkan e-mel, dan anda boleh mula bermain dalam masa beberapa minit.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                        Apakah jumlah deposit minimum?
                                    </button>
                                    </h3>
                                    <div id="collapse02" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Jumlah deposit minimum di clubmy ialah RM50 atau yang setara dengannya.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                        Bolehkah saya mencuba permainan tanpa pertaruhan wang sebenar?
                                    </button>
                                    </h3>
                                    <div id="collapse03" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ya. Kebanyakan permainan mempunyai mod demo yang membolehkan anda bermain tanpa risiko wang sebenar.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                        Berapa lama pengeluaran dana diproses?
                                    </button>
                                    </h3>
                                    <div id="collapse04" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Pengeluaran biasanya mengambil masa kurang daripada 24 jam, tetapi tempoh mungkin berbeza mengikut kaedah yang dipilih.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                                        Adakah clubmy memiliki lesen yang sah?
                                    </button>
                                    </h3>
                                    <div id="collapse05" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ya, clubmy beroperasi di bawah lesen permainan Malaysia yang sah dan sentiasa diaudit secara bebas.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                                        Adakah terdapat syarat pertaruhan untuk bonus yang diberikan?
                                    </button>
                                    </h3>
                                    <div id="collapse06" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ya. Semua bonus mempunyai syarat pertaruhan yang jelas, biasanya antara 20x hingga 35x jumlah bonus.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                                        Bolehkah saya menetapkan had deposit atau kerugian?
                                    </button>
                                    </h3>
                                    <div id="collapse07" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ya, anda boleh menetapkan had deposit dan kerugian melalui tetapan akaun anda.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                                        Adakah clubmy menyokong pembayaran mata wang kripto?
                                    </button>
                                    </h3>
                                    <div id="collapse08" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ya, kami menerima Bitcoin, Ethereum dan beberapa mata wang kripto lain.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse09" aria-expanded="false" aria-controls="collapse09">
                                        Apa yang berlaku jika permainan saya tergendala semasa bermain?
                                    </button>
                                    </h3>
                                    <div id="collapse09" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Sistem kami akan menyimpan sesi terakhir permainan anda. Anda boleh sambung semula selepas membuka permainan tersebut semula.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                        Bagaimana saya boleh menyertai kejohanan yang dianjurkan?
                                    </button>
                                    </h3>
                                    <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Anda boleh sertai kejohanan secara terus melalui bahagian promosi atau acara komuniti di laman web kami.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                        Adakah permainan mudah alih disokong?
                                    </button>
                                    </h3>
                                    <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ya, laman web kami dioptimumkan sepenuhnya untuk peranti mudah alih, dan pengguna Android boleh memuat turun APK kami.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                        Bolehkah saya menggunakan akaun yang sama pada beberapa peranti secara serentak?
                                    </button>
                                    </h3>
                                    <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Tidak, untuk tujuan keselamatan, hanya satu sesi aktif dibenarkan bagi setiap akaun pada satu-satu masa.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                        Apa yang perlu saya lakukan jika terlupa kata laluan?
                                    </button>
                                    </h3>
                                    <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Klik "Lupa Kata Laluan" di halaman log masuk dan ikut arahan yang diberikan.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                        Apa berlaku jika terdapat aktiviti mencurigakan pada akaun saya?
                                    </button>
                                    </h3>
                                    <div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Akaun anda akan dibekukan sementara untuk keselamatan, dan pasukan kami akan menjalankan siasatan segera.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                        Adakah clubmy mempunyai ciri unik yang tiada di laman kasino lain?
                                    </button>
                                    </h3>
                                    <div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ya, clubmy menawarkan permainan realiti maya (VR) dan kejohanan interaktif eksklusif yang jarang ditemui di kasino dalam talian Malaysia.
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h2>Kesimpulan</h2>
                            <p>Clubmy merupakan kasino dalam talian yang selamat, menyeronokkan, dan mesra pemain baru di Malaysia. Daftar sekarang untuk menikmati promosi eksklusif dan sertai komuniti pemain yang mengutamakan kualiti, keadilan, serta keseronokan permainan. Alami pengalaman permainan dalam talian terbaik di clubmy hari ini!</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include 'inc/footer.php';?>
    </body>
</html>