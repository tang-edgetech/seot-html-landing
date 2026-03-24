<?php
// -----------------------------
// CONFIGURATION & GLOBAL FUNCS
// -----------------------------
define('BASE_PATH', __DIR__);
define('LOCALHOST_NAME', 'kaya88.info');
$serverPath = $_SERVER['DOCUMENT_ROOT']; // "/home/seot2/public_html/kaya88.info"
$domainFolder = basename($serverPath);
define('DOMAIN_NAME', $domainFolder); // kaya88.info
$siteKey = 'kaya88';
if( $domainFolder !== 'htdocs' ) {
    $siteKey = explode('.', $domainFolder)[0];
}
define('SITE_KEY', $siteKey); // kaya88

// Detect if environment is localhost
function is_localhost(): bool {
    $whitelist = ['127.0.0.1', '::1', 'localhost', 'localhost:8080'];
    return in_array($_SERVER['SERVER_NAME'], $whitelist, true);
}

function home_url(string $path = ''): string {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    if (
        (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === 'localhost:8080') ||
        (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === 'localhost' && $_SERVER['SERVER_PORT'] == 8080)
    ) {
        $domain   = is_localhost() ? "localhost:8080/".LOCALHOST_NAME : DOMAIN_NAME;
    }
    else {
        $domain   = is_localhost() ? "localhost/".LOCALHOST_NAME : DOMAIN_NAME;
    }

    $url = $protocol . "://" . $domain;

    if (!empty($path)) {
        $url .= '/' . ltrim($path, '/');
    }

    return $url;
}

function assets_url() {
    $url = home_url()."/assets/images/";
    return $url;
}

// Load pages.json into an array
function get_pages(): array {
    $file = __DIR__ . '/data/pages.json';
    if (!file_exists($file)) {
        return [];
    }
    return json_decode(file_get_contents($file), true) ?: [];
}

// Get a specific page by slug
function get_page_by_slug(string $slug): ?array {
    $pages = get_pages();
    foreach ($pages['pages'] as $page) {
        if ($page['page_slug'] === $slug) {
            return $page;
        }
    }
    return null;
}

function get_page_meta_tags(array $page): string {
    if (empty($page['meta_tags']) || !is_array($page['meta_tags'])) {
        return '';
    }

    $output = '';
    foreach ($page['meta_tags'] as $meta) {
        $output .= convert_string_url($meta) . PHP_EOL;
    }

    return $output;
}

function get_page_markup_schema(array $page): string {
    if (empty($page['schema']) || !is_array($page['schema'])) {
        return '';
    }
    
    $output = '';
    if (!empty($page['schema'])) {
        foreach( $page['schema'] as $key => $tag) {
            $output .= "<script type=\"application/ld+json\" id=\"$key\">\n";
            $output .= json_encode($tag, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
            $output .= "\n</script>\n";
        }
    }
    return $output;
}

function tags_version() {
    $version = '1.0.'.time();
    return $version;
}

function convert_string_url($data) {
    return str_replace('{{site_base_url}}', home_url(), $data);
}

function getColorConfig($key = null) {
    $configPath = __DIR__ . "/data/settings.json";
    if (file_exists($configPath)) {
        $config = json_decode(file_get_contents($configPath), true);
        return $key ? ($config['colors'][$key] ?? null) : $config['colors'];
    }
    return [];
}

function get_the_menu_items($type) {
    if( $type !== 'disclaimer' ) {
        $type = 'pages';
    }
    $pages = get_pages();
    $titlesAndSlugs = array_map(function ($page) {
        return [
            'page_title' => $page['page_title'],
            'page_slug'  => $page['page_slug']
        ];
    }, $pages[$type]);
    return $titlesAndSlugs;
}

function randomUniqueID($length = 8) {
    return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, $length);
}

// To setup the sidebar top menu list
$main_menu = [
    "home",
    "slot",
    "promosi",
    "vip",
    "kaedah-pembayaran",
    "tentang-kami",
    "hubungi-kami",
];
$disclaimer_menu = [
    "perjudian-bertanggungjawab",
    "keselamatan-akaun",
    "lesen",
    "dasar-privasi",
    "terma-syarat",
];

// Alternative way to disable the shortcode
$shortcode_visibility = [
    'marquee' => 1,
    'top-brand' => 0,
    'banner' =>  ['home'],
    'user-profile' =>  ['home'],
    'game-providers' =>  ['home'],
    'leaderboard' => ['vip'],
    'content' => 1,
    'faq' => 1
];


/**
 * MYR - Malaysia
 * SGD - Singapore
 * THB - Thailand
 * VND - Vietnam
 * IDR - Indonesia
 */
$currency = 'MYR';
/**
 * en - English
 * ms - Bahasa Malaysia
 * id or in - Bahasa Indonesia
 * vi - Vietnam
 * th - Thailand
 */
$language = 'ms'; 

$language_label = array(
    'label_main_balance' => 'Main Balance',
    'label_min_deposit' => 'Min Deposit',
    'label_min_withdraw' => 'Min Withdrawal',
    'label_signup' => 'JOIN',
    'label_login' => 'LOGIN',
    'label_deposit' => 'Deposit',
    'label_withdraw' => 'Withdraw',
    'label_refresh' => 'Refresh',
    'label_current_rank' => 'Current Rank',
    'label_current_deposit' => 'Current Deposit',
    'label_current_crypto_deposit' => 'Current Crypto Deposit',
    'label_rank' => 'Rank',
    'label_montly_total_deposit' => 'Monthly Total Deposit',
    'label_vip_upgrade_bonus' => 'VIP Upgrade Bonuns',
    'label_birthday_bonus' => 'Birthday Bonus',
    'label_daily_withdrawal_limit' => 'Daily Withdrawal Limit',
    'label_daily_withdrawal_count' => 'Daily Withdrawal Count',
);
if( $language == 'ms' ) {
    $language_label['label_main_balance'] = 'Main Baki';
    $language_label['label_min_deposit'] = 'Depo Minimum';
    $language_label['label_min_withdraw'] = 'Pengeluaran Minimum';
    $language_label['label_signup'] = 'DAFTAR';
    $language_label['label_login'] = 'LOG MASUK';
    $language_label['label_deposit'] = 'Deposit';
    $language_label['label_withdraw'] = 'Withdraw';
    $language_label['label_refresh'] = 'Segar Semula';
    $language_label['label_current_rank'] = 'Current Rank';
    $language_label['label_current_deposit'] = 'Current Deposit';
    $language_label['label_current_crypto_deposit'] = 'Current Crypto Deposit';
    $language_label['label_rank'] = 'Pangkat';
    $language_label['label_montly_total_deposit'] = 'Jumlah Deposit Bulanan';
    $language_label['label_vip_upgrade_bonus'] = 'Bonus Naik Taraf VIP';
    $language_label['label_birthday_bonus'] = 'Bonus Hari Jadi';
    $language_label['label_daily_withdrawal_limit'] = 'Had Pengeluaran Harian';
    $language_label['label_daily_withdrawal_count'] = 'Kiraan Pengeluaran Harian';
}
else if( $language == 'th' ) {
    $language_label['label_main_balance'] = 'ยอดเงินคงเหลือหลัก';
    $language_label['label_min_deposit'] = 'เงินฝากขั้นต่ำ';
    $language_label['label_min_withdraw'] = 'ถอนขั้นต่ำ';
    $language_label['label_signup'] = 'เข้าร่วม';
    $language_label['label_login'] = 'เข้าสู่ระบบ';
    $language_label['label_deposit'] = 'เงินฝาก';
    $language_label['label_withdraw'] = 'ถอน';
    $language_label['label_refresh'] = 'รีเฟรช';
    $language_label['label_current_rank'] = 'อันดับปัจจุบัน';
    $language_label['label_current_deposit'] = 'เงินฝากปัจจุบัน';
    $language_label['label_current_crypto_deposit'] = 'เงินฝากคริปโตปัจจุบัน';
    $language_label['label_rank'] = 'อันดับ';
    $language_label['label_montly_total_deposit'] = 'ยอดฝากรวมรายเดือน';
    $language_label['label_vip_upgrade_bonus'] = 'โบนัสอัปเกรด VIP';
    $language_label['label_birthday_bonus'] = 'โบนัสวันเกิด';
    $language_label['label_daily_withdrawal_limit'] = 'วงเงินถอนรายวัน';
    $language_label['label_daily_withdrawal_count'] = 'จำนวนการถอนรายวัน';
}