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
        <link rel="canonical" href="https://winmyr.online/">   
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="IE=Edge" http-equiv="X-UA-Compatible">
        <meta name="author" content="WINMYR">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="renderer" content="webkit"/>
        <title>WINMYR – Premium Online Slot & Kasino di Malaysia </title>
        <meta name="title" content="WINMYR – Premium Online Slot & Kasino di Malaysia">
        <meta name="description" content="Nikmati pengalaman winmyr slot dan kasino dalam talian di Malaysia. Muat turun APK, buka keistimewaan VIP, lakukan pembayaran selamat & log in untuk mula menang hari ini!">
        <meta name="keywords" content="winmyr, winmyr slot, winmyr casino, winmyr login, muat turun APK, download winmyr, win myr, winmyr apk download, kasino online, VIP kasino, WINMYR bonus slot">

        <!-- Schema.org for Google -->
        <meta itemprop="name" content="WINMYR – Premium Online Slot & Kasino di Malaysia">
        <meta itemprop="description" content="Nikmati pengalaman winmyr slot dan kasino dalam talian di Malaysia. Muat turun APK, buka keistimewaan VIP, lakukan pembayaran selamat & log in untuk mula menang hari ini!">
        <meta itemprop="image" content="<?php echo $site_base_url;?>/images/winmyr_logo.webp">

        <!-- Open Graph / Facebook -->
        <meta property="og:locale" content="ms-MY">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://winmyr.online/">
        <meta property="og:title" content="WINMYR – Premium Online Slot & Kasino di Malaysia">
        <meta property="og:description" content="Nikmati pengalaman winmyr slot dan kasino dalam talian di Malaysia. Muat turun APK, buka keistimewaan VIP, lakukan pembayaran selamat & log in untuk mula menang hari ini!">
        <meta property="og:site_name" content="WINMYR">
        <meta property="og:image" content="<?php echo $site_base_url;?>/images/winmyr_logo.webp">
        <meta property="article:tag" content="WINMYR">
        <meta property="article:tag" content="WINMYR slot">
        <meta property="article:tag" content="WINMYR casino">
        <meta property="article:tag" content="WINMYR login">
        <meta property="article:tag" content="WINMYR download">
        <meta property="article:tag" content="WINMYR apk download">
        <meta property="article:tag" content="muat turun WINMYR">
        <meta property="article:tag" content="download WINMYR apk">
        <meta property="article:tag" content="WINMYR bonus slot">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="<?php echo $site_base_url;?>/images/winmyr_logo.webp">
        <meta name="twitter:title" content="WINMYR – Premium Online Slot & Kasino di Malaysia">
        <meta name="twitter:description" content="Nikmati pengalaman winmyr slot dan kasino dalam talian di Malaysia. Muat turun APK, buka keistimewaan VIP, lakukan pembayaran selamat & log in untuk mula menang hari ini!">
        <meta name="twitter:image" content="<?php echo $site_base_url;?>/images/winmyr_logo.webp">
        <base href="<?php echo $site_base_url;?>">
        <?php include 'inc/stylesheet.php';?>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "WINMYR",
            "url": "https://winmyr.online",
            "logo": "https://winmyr.online/images/winmyr_logo.webp",
            "description": "Permainan slot terbaik di WINMYR - daftar, login & muat turun app rasmi. Dapatkan bonus harian, pengeluaran pantas & akses ke ratusan game dari provider ternama.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "No. 45, Jalan Merpati 3, Taman Melati",
                "addressLocality": "Kuala Lumpur",
                "postalCode": "53100",
                "addressCountry": "MY"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "khidmat pelanggan",
                "email": "support@winmyr.online",
                "telephone": "+6014-3507586",
                "availableLanguage": ["Malay", "English"]
            }
        }
        </script>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                "@type": "ListItem",
                "position": 1,
                "name": "WINMYR",
                "item": "https://winmyr.online"
                }
            ]
        }
        </script>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                "@type": "Question",
                "name": "Bagaimana saya daftar akaun di WINMYR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Klik sign up, isi maklumat, sahkan melalui kod emel atau SMS, dan boleh mula deposit serta bermain."
                }
                },
                {
                "@type": "Question",
                "name": "Cara pembayaran apa yang disokong?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Kami terima Touch ’n Go, GrabPay, FPX dan kad kredit utama. Senarai penuh ada di halaman Payment Methods."
                }
                },
                {
                "@type": "Question",
                "name": "Bagaimana saya muat turun dan pasang aplikasi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Layari APK Download pada peranti Android, ketik “Download”, benarkan pemasangan, kemudian ikut arahan untuk pasang."
                }
                },
                {
                "@type": "Question",
                "name": "Bolehkah saya bermain di pelbagai peranti dengan satu akaun?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Ya, log masuk yang sama berfungsi pada desktop, pelayar mudah alih dan aplikasi Android."
                }
                },
                {
                "@type": "Question",
                "name": "Apakah umur minima untuk bermain slot di WINMYR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Anda mestilah berumur sekurang-kurangnya 21 tahun dengan ID Malaysia yang sah."
                }
                },
                {
                "@type": "Question",
                "name": "Bagaimana program VIP berfungsi dan cara naik tahap?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Anda kumpul mata untuk setiap RM1 dipertaruhkan, semak kemajuan dekat VIP halaman. Mata terkumpul naikkan anda ke tahap seterusnya untuk ganjaran lebih menarik."
                }
                },
                {
                "@type": "Question",
                "name": "Berapa lama masa pengeluaran diproses?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Permintaan e-wallet dan FPX biasanya selesai dalam 24 jam, manakala kad dan pemindahan bank mungkin hingga 48 jam. Anda akan dapat notifikasi setiap peringkat."
                }
                },
                {
                "@type": "Question",
                "name": "Jenis slot apa yang tersedia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Perpustakaan slot kami ada mesin tiga gelendong klasik, video slot interaktif, dan jackpot progresif dengan hadiah besar."
                }
                },
                {
                "@type": "Question",
                "name": "Ada alat bantu perjudian bertanggungjawab?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Ya, tetapkan had deposit, kerugian dan sesi, atau pilih kendiri mengecualikan akaun di halaman Responsible Gambling."
                }
                },
                {
                "@type": "Question",
                "name": "Apa bonus selamat datang untuk pemain baru?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Layak dapat padanan 100% deposit pertama hingga RM500 dan 50 putaran percuma. Terma penuh di halaman Bonuses & Promotions."
                }
                }
            ]
        }
        </script>
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
                                                    <img class="col-3 px-0 filter-black-to-white" src="<?php echo $site_base_url;?>/images/icon-deposit.png" alt="token" style="max-width: 11%">
                                                    <span class="col px-0 ps-2 text-0-9 text-weight-600">Deposit</span>
                                                </div>
                                            </a>
                                            <a class="btn-style btn-section-bg w-100 mt-2 " type="button" alt="withdraw Button" href="https://kayabet888.com/my-wallet?tab=withdraw">
                                                <div class="d-flex align-items-center">
                                                    <img class="col-3 px-0 filter-black-to-white" src="<?php echo $site_base_url;?>/images/icon-withdrawal.png" alt="token" style="max-width: 11%">
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
                                                    <img class="col-3 px-0 filter-black-to-white" src="<?php echo $site_base_url;?>/images/icon-refresh.png" alt="token" style="max-width: 11%">
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
                                <h1>WINMYR – Slot Dalam Talian Premium di Malaysia</h1>
                                <p>Aplikasi <strong>WINMYR</strong> ialah destinasi sehenti untuk permainan dalam talian yang menarik, selamat dan mesra pemula di Malaysia. Sama ada anda baru nak cuba atau sudah berpengalaman, kami mudahkan cara anda sign up, sahkan maklumat, dan terus boleh buat pertaruhan pertama.</p>
                                <p>&nbsp;</p>
                                <h2>Buat Pertaruhan Pertama Dalam Masa Beberapa Minit</h2>
                                <p class="mb-2">Kami faham langkah pertama kadang rasa mencabar, jadi kami pecahkan proses itu kepada tiga langkah mudah. Dengan hanya tiga klik, anda boleh bergerak dari pendaftaran hingga buat pertaruhan pertama tanpa rasa pening atau tertunda.</p>
                                <ol>
                                    <li class="mb-2"><strong>Daftar akaun</strong></li>
                                    <li class="mb-2"><strong>Buat deposit pertama</strong></li>
                                    <li><strong>Ketakkan pertaruhan</strong><br/>Akaun anda akan siap serta-merta, jadi anda boleh terus mula bermain tanpa kerumitan.</li>
                                </ol>
                                <p>&nbsp;</p>
                                <h2>Pilihan Slot Sesuai Untuk Semua</h2>
                                <p>Sama ada anda suka slot klasik atau teruja dengan pengalaman dealer langsung, aplikasi winmyr ada semua. Perpustakaan kami campur rasa tempatan dan trend global, jadi sentiasa ada yang baru untuk dicuba.</p>
                                <p>&nbsp;</p>
                                <h3>Pengembaraan Slot Mendebarkan</h3>
                                <p class="mb-2">Daripada mesin tiga gelendong tradisional hingga video slot dengan grafik sinematik, pilihan kami pastikan gulungan terus berputar. Setiap permainan hadir dengan ciri bonus unik dan tema menarik ikut mood anda.</p>
                                <ul>
                                    <li class="mb-2">Slot tiga gelendong klasik untuk peminat nostalgia</li>
                                    <li class="mb-2">Video slot dengan pusingan bonus interaktif</li>
                                    <li>Jackpot progresif yang semakin meningkat hingga ada pemenang</li>
                                </ul>
                                <p>&nbsp;</p>
                                <h3>Papan Pendahulu Slot Komuniti: Bersaing dan Menang Besar</h3>
                                <p class="mb-2">Setiap putaran dan pertaruhan menyumbang kepada papan pendahulu mingguan kami, di mana pemain Malaysia bersaing untuk tempat teratas. Kumpul mata dalam permainan kegemaran anda untuk naik pangkat dan rebut hadiah yang semakin hebat bila anda berada di kedudukan atas.</p>
                                <ul>
                                    <li class="mb-2"><a href="https://winmyr.online/bonus-promosi">Winmyr bonus tunai</a> sehingga RM1,000 untuk <strong>tiga pemenang teratas</strong></li>
                                    <li class="mb-2">100–500 putaran percuma pada slot terpilih untuk pencapaian tertentu</li>
                                    <li class="mb-2">Barangan eksklusif winmyr edisi terhad (kad TNG, T-shirt)</li>
                                    <li class="mb-2">Jemputan ke acara VIP dan pengganda mata bonus untuk pemain elit</li>
                                    <li>Hadiah kejutan sempena musim perayaan dan kejohanan utama</li>
                                </ul>
                                <p>&nbsp;</p>
                                <h2>Permainan Mudah Alih Lancar dengan Aplikasi WINMYR</h2>
                                <p>Main di mana saja tanpa kompromi. Aplikasi Android kami tawarkan masa muat yang pantas, navigasi mesra pengguna, dan semua ciri kegemaran anda dalam satu tempat.</p>
                                <p>&nbsp;</p>
                                <h3>Proses Download apk WINMYR Mudah</h3>
                                <p class="mb-2">Pasang aplikasi tanpa pening kepala teknikal ikut langkah ini:</p>
                                <ul>
                                    <li class="mb-2">Lawat <a href="https://winmyr.online/muat-turun-apk">Download winmyr APK</a> pada peranti Android anda</li>
                                    <li class="mb-2">Ketik “Download” dan benarkan pemasangan dari sumber tidak dikenali</li>
                                    <li>Buka aplikasi dan log masuk dengan akaun winmyr anda</li>
                                </ul>
                                <p>&nbsp;</p>
                                <h3>Keistimewaan Eksklusif Mudah Alih</h3>
                                <p class="mb-2">Aplikasi kami lebih daripada versi laman web mudah alih, ia tawarkan kelebihan khusus:</p>
                                <ul>
                                    <li class="mb-2">Notifikasi segera untuk bonus kilat dan kemenangan besar</li>
                                    <li class="mb-2">Top-up satu klik untuk deposit pantas</li>
                                    <li>Antara muka dioptimumkan untuk kawalan sentuh</li>
                                </ul>
                                <p>&nbsp;</p>
                                <h2>Program VIP di WINMYR: Tingkatkan Pengalaman Anda</h2>
                                <p>Pemain setia layak menerima ganjaran, jadi kami reka sistem VIP yang semakin dermawan mengikut kekerapan anda bermain. Setiap tahap buka manfaat baharu, daripada pulangan tunai hingga barangan edisi terhad.</p>
                                <p>&nbsp;</p>
                                <h3>Tahap VIP dan Ganjaran</h3>
                                <ul>
                                    <li class="mb-2"><strong>Bronze</strong>: Bonus selamat datang dan cashback bulanan</li>
                                    <li class="mb-2"><strong>Silver</strong>: Cashback lebih tinggi, putaran percuma, sokongan keutamaan</li>
                                    <li class="mb-2"><strong>Gold</strong>: Pengurus akaun peribadi dan permainan eksklusif</li>
                                    <li><strong>Platinum</strong>: Barangan mewah, had pengeluaran tinggi, acara VIP</li>
                                </ul>
                                <p>&nbsp;</p>
                                <h3>Cara Buka Tahap VIP</h3>
                                <p>Kenaikan status VIP berlaku automatik dan telus. Anda dapat satu mata untuk setiap RM1 dipertaruhkan; semak kemajuan di halaman <a href="https://winmyr.online/vip">VIP</a> dan buka ganjaran apabila capai tahap baharu.</p>
                                <p>&nbsp;</p>
                                <h2>Kaedah Pembayaran Selamat dan Mudah</h2>
                                <p>Tambah dana atau buat pengeluaran dengan pantas menggunakan pilihan tempatan dan antarabangsa yang dipercayai. Setiap langkah dijelaskan dengan jelas untuk memudahkan anda.</p>
                                <p>&nbsp;</p>
                                <h3>Pilihan Tempatan di Malaysia</h3>
                                <p class="mb-2">Kami bekerjasama dengan e-dompet dan bank yang popular supaya anda tidak susah untuk deposit atau withdraw:</p>
                                <ul class="mb-3">
                                    <li class="mb-2">Touch ’n Go e-wallet</li>
                                    <li class="mb-2">GrabPay</li>
                                    <li>FPX Pemindahan Bank</li>
                                </ul>
                                <p>Maklumat lanjut ada di halaman <a href="https://winmyr.online/kaedah-pembayaran">Payment Methods</a>.</p>
                                <p>&nbsp;</p>
                                <h3>Deposit dan Pengeluaran Pantas</h3>
                                <p>Deposit biasanya diproses serta-merta manakala permintaan pengeluaran selalunya diselesaikan dalam masa 24 jam. Setiap transaksi dikemas kini secara live supaya anda tahu statusnya.</p>
                                <p>&nbsp;</p>
                                <h2>Tawaran dan Promosi Yang Sukar Ditolak</h2>
                                <p>Dari hari pertama anda sertai, <strong>WINMYR aplikasi</strong> sentiasa ada tawaran bernilai untuk pemain baru dan sedia ada.</p>
                                <p>&nbsp;</p>
                                <h3>Butiran Bonus Selamat Datang</h3>
                                <p>Nikmati padanan 100% pada deposit pertama sehingga RM500 beserta 50 putaran percuma pada slot terpilih. Terma pertaruhan dijelaskan dengan mudah supaya tiada kejutan.</p>
                                <p>&nbsp;</p>
                                <h3>Kejohanan dan Ganjaran Berterusan</h3>
                                <p>Sertai promosi top-up harian dan pertandingan papan pendahulu untuk peluang tambahan memenangi hadiah tunai dan barangan eksklusif.</p>
                                <p>&nbsp;</p>
                                <h2>Komitmen Kepada Perjudian Bertanggungjawab</h2>
                                <p>Keseronokan perlu seiring dengan keselamatan. Kami sediakan alat untuk membantu anda kawal masa dan perbelanjaan bermain, termasuk had boleh ubah dan pilihan kendiri mengecualikan akaun. Ketahui lebih lanjut di halaman <a href="https://winmyr.online/perjudian-bertanggungjawab">Responsible Gambling</a>.</p>
                                <p>&nbsp;</p>
                                <h2>Janji Privasi Kami</h2>
                                <p>Maklumat peribadi dan kewangan anda dilindungi dengan penyulitan termaju dan protokol ketat. Untuk maklumat penuh tentang perlindungan data, sila rujuk <a href="https://winmyr.online/dasar-privasi">Privacy Policy</a>.</p>
                                <p>&nbsp;</p>
                                <h2>Terma dan Syarat Telus</h2>
                                <p>Tiada terma tersembunyi. Halaman <a href="https://winmyr.online/terma-dan-syarat">Terms & Conditions</a> terangkan keperluan bonus, prosedur pengeluaran, dan peraturan pengesahan akaun supaya anda sentiasa jelas.</p>
                                <p>&nbsp;</p>
                                <h2>Perlukan Bantuan? Hubungi Pasukan Sokongan Kami</h2>
                                <p>Pasukan sokongan mesra kami sedia membantu 24/7 bagi sebarang soalan—dari pemasangan APK hingga pertanyaan VIP. Hubungi melalui live chat, emel atau telefon di halaman <a href="https://winmyr.online/hubungi-kami">Contact Us</a>.</p>
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
                                        Bagaimana saya daftar akaun di WINMYR?
                                    </button>
                                    </h3>
                                    <div id="collapse01" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Klik sign up, isi maklumat, sahkan melalui kod emel atau SMS, dan boleh mula deposit serta bermain.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                        Cara pembayaran apa yang disokong?
                                    </button>
                                    </h3>
                                    <div id="collapse02" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Kami terima Touch ’n Go, GrabPay, FPX dan kad kredit utama. Senarai penuh ada di halaman <strong>Payment Methods</strong>.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                        Bagaimana saya muat turun dan pasang aplikasi?
                                    </button>
                                    </h3>
                                    <div id="collapse03" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Layari halaman <strong>Muat Turun APK</strong> pada peranti Android, ketik “Download”, benarkan pemasangan, kemudian ikut arahan untuk pasang.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                        Bolehkah saya bermain di pelbagai peranti dengan satu akaun?
                                    </button>
                                    </h3>
                                    <div id="collapse04" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Ya, log masuk yang sama berfungsi pada desktop, pelayar mudah alih dan aplikasi Android.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                                        Apakah umur minima untuk bermain slot di WINMYR?
                                    </button>
                                    </h3>
                                    <div id="collapse05" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Anda mestilah berumur sekurang-kurangnya 21 tahun dengan ID Malaysia yang sah.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                                        Bagaimana program VIP berfungsi dan cara naik tahap?
                                    </button>
                                    </h3>
                                    <div id="collapse06" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Anda kumpul mata untuk setiap RM1 dipertaruhkan, semak kemajuan dekat <a href="https://winmyr.online/vip">VIP</a> halaman. Mata terkumpul naikkan anda ke tahap seterusnya untuk ganjaran lebih menarik.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                                        Berapa lama masa pengeluaran diproses?
                                    </button>
                                    </h3>
                                    <div id="collapse07" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Permintaan e-wallet dan FPX biasanya selesai dalam 24 jam, manakala kad dan pemindahan bank mungkin hingga 48 jam. Anda akan dapat notifikasi setiap peringkat.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                                        Jenis slot apa yang tersedia?
                                    </button>
                                    </h3>
                                    <div id="collapse08" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Perpustakaan slot kami ada mesin tiga gelendong klasik, video slot interaktif, dan jackpot progresif dengan hadiah besar.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse09" aria-expanded="false" aria-controls="collapse09">
                                        Ada alat bantu perjudian bertanggungjawab?
                                    </button>
                                    </h3>
                                    <div id="collapse09" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Ya, tetapkan had deposit, kerugian dan sesi, atau pilih kendiri mengecualikan akaun di halaman <strong>Responsible Gambling</strong>.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                        Apa bonus selamat datang untuk pemain baru?
                                    </button>
                                    </h3>
                                    <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Layak dapat padanan 100% deposit pertama hingga RM500 dan 50 putaran percuma. Terma penuh di halaman <strong>Bonuses & Promotions</strong>.
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include 'inc/footer.php';?>
    </body>
</html>