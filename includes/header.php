<?php
// if (!isset($page)) $page = [];
$settings = json_decode(file_get_contents( __DIR__ . '/../data/settings.json' ), true);
?>
<!DOCTYPE html>
<html lang="ms">
    <head>
    <?= get_page_meta_tags($page);?>
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?= home_url();?>">
    <link rel="icon" type="image/webp" href="<?= home_url().'/assets/images/favicon/'.SITE_KEY.'_favicon.webp';?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= home_url();?>/assets/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?= home_url();?>/assets/css/base.php?v=<?= tags_version();?>"/>
    <link rel="stylesheet" type="text/css" href="<?= home_url();?>/assets/css/style.css?v=<?= tags_version();?>"/>
    <link rel="stylesheet" type="text/css" href="<?= home_url();?>/assets/css/media.css?v=<?= tags_version();?>"/>
    <?php
    if( isset($settings['google_tag']) && $settings['google_tag']['status'] === 1 ) {
        $gtag_id = $settings['google_tag']['code'];
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $gtag_id ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?= $gtag_id ?>');
    </script>
    <?php
    }
    ?>
    <?= get_page_markup_schema($page);?>
    </head>
    <body class="page page-<?= $page_slug;?>">
        <div class="app" id="app">
            <?php
            $current_url = trim($_SERVER['REQUEST_URI'], "/");
            ?>
            <header class="masthead" id="masthead">
                <nav class="navbar rounded px-4 py-2">
                    <div class="navbar-row">
                        <button type="button" class="navbar-toggler collapsed filter-black-to-white" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="d-none">Open Mobile Menu</span>
                            <img src="<?= home_url();?>/assets/images/icon-menu.png"/>
                        </button>
                        <a href="<?= home_url();?>" class="navbar-brand p-0">
                            <span class="d-none">Home</span>
                            <picture>
                                <source srcset="<?= home_url() .'/assets/images/logo/'.SITE_KEY.'_logo.webp';?>" type="image/webp">
                                <source srcset="<?= home_url() .'/assets/images/logo/'.SITE_KEY.'_logo.png';?>" type="image/png">
                                <img src="<?= home_url() .'/assets/images/logo/'.SITE_KEY.'_logo.webp';?>" alt="<?= strtoupper(SITE_KEY);?> Logo" class="img-fit">
                            </picture>
                        </strong></a>
                        <div></div>
                        <div class="collapse navbar-collapse justify-content-xl-end" id="main-navigation">
                            <div class="navbar-collapse-inner">
                                <h4 class="d-block text-center p-4 py-2 title-logo mb-0"><a href="<?= home_url();?>" class="d-block"><img src="<?= home_url() .'/assets/images/logo/'.SITE_KEY.'_logo.webp';?>" alt="<?= strtoupper(SITE_KEY);?> Logo" class="img-fit mx-auto"></strong></a></h4>
                                <button type="button" class="navbar-close" aria-label="Close menu">
                                    <span class="d-none">Close Mobile Menu</span>
                                </button>
                                <div class="menu-wrapper d-flex flex-column justify-content-between">
                                    <ul class="navbar-nav nav w-100 w-xl-auto p-4 px-0 p-xl-0" id="primary-menu">
                                        <?php 
                                        
                                        $home_active = ( trim($current_url, SITE_KEY) === "" ) ? ' active' : '';?>
                                        <li class="nav-item home nav-item-0">
                                            <a href="<?= home_url().'/';?>" class="nav-link<?= $home_active;?>">Halaman Utama</strong></a>
                                        </li>
                                        <?php
                                        $menu_items = get_the_menu_items('pages');
                                        foreach( $menu_items as $key => $item ) {
                                            $url = $item['page_slug'];
                                            if($url !== 'home') :
                                            $index = intval($key)+1;
                                            $title = $item['page_title'];
                                            $target = isset($item['target']) ? $item['target'] : '_self';
                                            if( is_localhost() ) { 
                                                // localhost/u31th.asia/download
                                                // current_url == u31th.asia/download
                                                if (strpos($current_url, '/') !== false) {
                                                    $temp = explode('/', $current_url);
                                                    $path = $temp[1];
                                                }
                                                else {
                                                    $path = $current_url;
                                                }
                                            }
                                            else { 
                                                // u31th.asia/download
                                                // current_url == downnload
                                                $path = $current_url;
                                            }
                                            $is_active = ($path === trim($item['page_slug'], '/')) ? ' active' : '';
                                        ?>
                                            <li class="nav-item <?= $url;?> nav-item-<?= $index;?>">
                                                <a href="<?= home_url().'/'.$url.'/';?>" target="<?= $target;?>" class="nav-link<?= $is_active;?>"><?= $title;?></strong></a>
                                            </li>
                                        <?php
                                            endif;
                                        }
                                        ?>
                                    </ul>
                                    
                                    <ul class="navbar-nav nav w-100 w-xl-auto p-4 px-0 p-xl-0" id="disclaimer-menu">
                                        
                                        <?php $disclaimer_items = get_the_menu_items('disclaimer');
                                        foreach( $disclaimer_items as $dkey => $ditem ) {
                                            // $index = intval($key)+1;
                                            $dtitle = $ditem['page_title'];
                                            $durl = $ditem['page_slug'];
                                            $dtarget = isset($ditem['target']) ? $ditem['target'] : '_self';
                                            $dis_active = str_contains($current_url, $ditem['page_slug']) ? ' active' : '';
                                        ?>
                                            <li class="nav-item <?= $durl;?>">
                                                <a href="<?= home_url() .'/'.$durl.'/';?>" target="<?= $dtarget;?>" class="nav-link<?= $dis_active;?>"><?= $dtitle;?></strong></a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <main class="pt-0" id="">