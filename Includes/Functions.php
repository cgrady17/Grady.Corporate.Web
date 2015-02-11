<?php
// CDN & Site Variables
//$cdn1 = '//static.centurion.bluefiber.us/gradycapital/';
$cdn1 = '/gradycapital/';
$site = '/gradycapital/';
/* Below if statement for production only
 * if (($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) {
    $cdn1 = '//dc5vkwh81rnyv.cloudfront.net/gradycapital/';
    $site = 'https://gradycapital.us/';
};*/

// LESSPHP
require_once 'Includes/less.php';
try {
    // run autoCompileLess
    autoCompileLess('CSS/Bundled.less', 'CSS/GradyCapital.css');

} catch (exception $e) {
    echo "fatal error: " . $e->getMessage();
}

function autoCompileLess($inputFile, $outputFile) {
    // load the cache
    $cacheFile = $inputFile.".cache";

    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }

    $less = new lessc;
    //$less->setFormatter("compressed"); // Uncomment to enable minification
    $newCache = $less->cachedCompile($cache);

    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}
