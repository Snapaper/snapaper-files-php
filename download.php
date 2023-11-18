<?php
$url = $_GET['filename'];

if (empty($url)) {
    exit;
}

$path_parts = pathinfo($url);
$ext = $path_parts['extension'];
$filename = $path_parts['filename'];

header("Content-type: application/$ext");
header("Content-Disposition: attachment; filename=$filename.$ext");
header("Pragma: no-cache");
header("Expires: 0");

if (false === strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE6')) {
    header('Cache-Control:no-cache,must-revalidate');
}

$handle = fopen($url, "rb");
if ($handle) {
    while (!feof($handle)) {
        $buffer = fread($handle, 256 * 1024);
        echo $buffer;
        ob_flush();
        flush();
    }
    fclose($handle);
}
?>

