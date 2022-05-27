<?php
// date_default_timezone_set("asia/Tashkent");
// $token = '5216842331:AAF4vu5VY9Hdi5hjmIHc9aZAFMZGoLGlYcA';
// $admin = ["1769851684"];
// $adminn = "1769851684";

// function bot($method, $datas = [])
// {
//   global $token;
//   $url = "https://api.telegram.org/bot" . $token . "/" . $method;
//   $ch = curl_init();
//   curl_setopt($ch, CURLOPT_URL, $url);
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//   curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
//   $res = curl_exec($ch);
//   if (curl_error($ch)) {
//     var_dump(curl_error($ch));
//   } else {
//     return json_decode($res);
//   }
// }
// $url = json_decode(file_get_contents('https://api.telegram.org/bot5215318660:AAH1vry9uGAXw4dQVGXI6tHaV1LvTwOhex4/getFile?file_id=CQACAgIAAxkBAAIHxWJdr_GIOKqWMR9rwru3gXF_Hd0LAAJvCgACrnOJSvoj2MERo4C0JAQ'),true);
// $path=$url['result']['file_path'];
// print_r($path);
// $file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;

$file = 'https://api.telegram.org/file/bot5215318660:AAH1vry9uGAXw4dQVGXI6tHaV1LvTwOhex4/music/file_9.mp3';
header("location: $file");
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}
?>