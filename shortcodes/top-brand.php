<?php
$top_brands = json_decode(file_get_contents(__DIR__.'/../data/top_brands.json'), true);
$tb_index = 0;
?>
<section class="pt-4 pb-0" id="">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 px-3">
                <div class="top-brand">
                <?php 
                $brand = $top_brands[SITE_KEY];
                $brand_title = $brand['title'];
                $brand_desc = $brand['description'];
                $brand_thumbnail = assets_url().'top_brand/top_brand_'.SITE_KEY.'.webp';
                $brand_link = $brand['url'];
                $disabled = ($tb_index > 0) ? ' disabled' : '';
                echo '<div class="top-brand-item '.$key.' p-2">
                    <div class="top-brand-inner d-flex align-items-center justify-content-start">
                        <div class="col col-header pt-3">
                            <div class="col-image"><img src="'.$brand_thumbnail.'" alt="'.SITE_KEY.'-logo-official"/></div>
                            <div class="col-title">'.$brand_title.'</div>
                        </div>
                        <div class="col col-desc pt-3">
                            <p class="mb-0">'.$brand_desc.'</p>
                        </div>
                        <div class="col col-cta pt-3">
                            <a href="'.$brand_link.'" class="btn btn-visit"'.$disabled.' target="_blank" rel="nofollow noreferrer noopener"><span>'.$language_label['label_visit'].'</span></strong></a>
                        </div>
                    </div>
                </div>';
                ?>
                </div>
            </div>
        </div>
    </div>
</section>