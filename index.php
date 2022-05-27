<?php
date_default_timezone_set("asia/Tashkent");
$token = '5216842331:AAF4vu5VY9Hdi5hjmIHc9aZAFMZGoLGlYcA';
$admin = ["1769851684"];
$adminn = "1769851684";

function bot($method, $datas = [])
{
  global $token;
  $url = "https://api.telegram.org/bot" . $token . "/" . $method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if (curl_error($ch)) {
    var_dump(curl_error($ch));
  } else {
    return json_decode($res);
  }
}


function put($joy, $matn)
{
  $saqla = file_put_contents($joy, $matn);
  return $saqla;
}

function mb($joy, $matn)
{
  $sss = mb_stripos($joy, $matn);
  return $sss;
}


function get($ccc)
{
  $tek = file_put_contents($ccc, '');
  return $tek;
}

function del($content)
{
  unlink($content);
}

require("sql.php");
$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id;
$mid2 = $update->callback_query->message->message_id;
$fid2 = $update->callback_query->message->from->id;
$call = $update->callback_query;
$qid = $call->id;
$id2 = $call->message->chat->id;
$xabar = $update->message;
$xabar_id = $xabar->message_id;
$chat_id = $xabar->chat->id;
$cid = $xabar->chat->id;
$mid = $xabar->message_id;
$text = $xabar->text;

$p = $text;

$p10 = $p;
$p = str_replace("'","obelgi",$p);



$name = $message->from->first_name;
$step = file_get_contents("step/$cid.txt");
mkdir("step");
function removeEmoji($text)
{

  $clean_text = "";

  // Match Emoticons
  $regexEmoticons = '/[\x{1F600}-\x{1F64F}]/u';
  $clean_text = preg_replace($regexEmoticons, '', $text);

  // Match Miscellaneous Symbols and Pictographs
  $regexSymbols = '/[\x{1F300}-\x{1F5FF}]/u';
  $clean_text = preg_replace($regexSymbols, '', $clean_text);

  // Match Transport And Map Symbols
  $regexTransport = '/[\x{1F680}-\x{1F6FF}]/u';
  $clean_text = preg_replace($regexTransport, '', $clean_text);

  // Match Miscellaneous Symbols
  $regexMisc = '/[\x{2600}-\x{26FF}]/u';
  $clean_text = preg_replace($regexMisc, '', $clean_text);

  // Match Dingbats
  $regexDingbats = '/[\x{2700}-\x{27BF}]/u';
  $clean_text = preg_replace($regexDingbats, '', $clean_text);

  return $clean_text;
}
function remove_emoji($string)
{
  $a =  preg_replace('%(?:
        \xF0[\x90-\xBF][\x80-\xBF]{2}      # planes 1-3
      | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
      | \xF4[\x80-\x8F][\x80-\xBF]{2}      # plane 16
  )%xs', '', $string);
  return removeEmoji($a);
}
// if($text){
//   $not_e = $text;
//   bot("sendmessage",['chat_id'=>$cid,'text'=>$not_e]);
//   $a = mysqli_query($connect, "INSERT into vdata(name,doc_id,size,creator) VALUES('$not_e','$not_e','$not_e','$not_e')");


// }
// $file = "https://api.telegram.org/file/bot".$token."/".bot('getfile',['file_id'=>"AAMCBAADGQEAAkOXYnv_qZA0s7WTCxGrHJBCVAAB-NntAALvCwACNlcoUgUhD5bt3VL9AQAHbQADJAQ"])->result->file_path;
// file_put_contents("1.jpg",file_get_contents($file));

if (!empty($update->message->video)) {
  $mp3 = true;
  $doc_id = $update->message->video->file_id;
  $doc_f = $update->message->caption;
  $doc_f = remove_emoji($doc_f);
  $doc_f = str_replace("<", "", $doc_f);
  $doc_f = str_replace(">", "", $doc_f);
  $doc_f = str_replace("‘", "obelgi", $doc_f);
  $doc_f = str_replace("'", "obelgi", $doc_f);

  $doc_f = str_replace("\n", "pastga tush", $doc_f);
  $doc_s = $update->message->video->file_size;
  $doc_height = $update->message->video->height;
}

$fid = $xabar->from->id;
$fname = $xabar->from->first_name;
$fuser = $xabar->from->username;
$sana = date('d.m.Y');
$soat = date('H:i:s');
$call = $update->callback_query;
$qid = $call->id;
$type = $xabar->chat->type;
$botname = "@botname";
$k1 = json_encode([
  'inline_keyboard' => [
    [["text" => "❎", "callback_data" => "del"]],
  ]
]);

$ball = json_encode([
  'inline_keyboard' => [
    [["text" => "⭐️", "callback_data" => "01"]],
    [["text" => "⭐️⭐️", "callback_data" => "02"]],
    [["text" => "⭐️⭐️⭐️", "callback_data" => "03"]],
    [["text" => "⭐️⭐️⭐️⭐️", "callback_data" => "04"]],
    [["text" => "⭐️⭐️⭐️⭐️⭐️", "callback_data" => "05"]],
  ]
]);

$reklamauz = "Tezkor musiqa qidiruv <a href='https://t.me/VKM_PRO_ROBOT'>Bot</a>";
$reklamaru = "Tezkor musiqa qidiruv <a href='https://t.me/VKM_PRO_ROBOT'>Bot</a>";


if ($text == "/speed" or $text == "/speed$botname") {
  $start_time = round(microtime(true) * 1000);
  $send =  bot('sendmessage', [
    'chat_id' => $cid,
    'text' => "Loading...",
  ])->result->message_id;

  $end_time = round(microtime(true) * 1000);
  $time_taken = $end_time - $start_time;
  bot('editMessagetext', [
    "chat_id" => $cid,
    "message_id" => $send,
    "text" => "Bot Tezligi: " . $time_taken .  "Ms",
  ]);
}


$lan = json_encode([
  'inline_keyboard' => [
    [["text" => "🇺🇿O`zbek tili", "callback_data" => "0"]],
    [["text" => "🇷🇺Русский язык", "callback_data" => "1"]],
    [["text" => "❎", "callback_data" => "del"]],
  ]
]);

$txt = "<b>Sizga istalgan turdagi mp4 larni (Kinolarni) izlashda yordamlashaman !


/help - Barcha buyruqlar jamlanmasi!
/rand - Tasodifiy kinolar.
/last - Eng oxirgi kinolar.
/add - Botga fayl yuklash buyicha yo`riqnoma.
/settings - Tilni o`zgartirish</b>


<i>🔎 Kerakli kino nomini yozib yuboring...</i>


$reklamauz";
$first_name = $update->message->from->first_name;
$username = $update->message->from->username;
$qfirst_name = $call->from->first_name;
$qusername = $call->from->username;

$status = false;
if (file_exists("azo.txt")) {
  $f = file_get_contents("azo.txt");
  $f = explode("\n", $f);
  foreach ($f as $a) {
    if ($a == $cid) {
      $status = true;
    }
  }
  if ($status != true) {
    file_put_contents("azo.txt", $cid . "\n", FILE_APPEND);
    bot("sendmessage", ['chat_id' => $adminn, 'text' => "😄 Yangi aʼzo\n👤 Ismi: $first_name\n🆔 raqami: $fid\n✳️ Usernamesi: @$username\n💡 Lichka: <a href='tg://user?id=$fid'>$first_name</a>", 'parse_mode' => "html"]);
  }
} else {
  bot("sendmessage", ['chat_id' => $adminn, 'text' => "😄 Yangi aʼzo\n👤 Ismi: $first_name\n🆔 raqami: $fid\n✳️ Usernamesi: @$username\n💡 Lichka: <a href='tg://user?id=$fid'>$first_name</a>", 'parse_mode' => "html"]);
  file_put_contents("azo.txt", $cid . "\n", FILE_APPEND);
}

$txt2 = "<b> Я помогу вам найти mp3 (песни) любого типа!


/help - Все команды установлены!
/rand - Случайные mp3.
/last - Последние добавленные mp3.
/add - Инструкция по загрузке файлов в бот.
/settings - изменить язык </b>


<i>🔎 Введите желаемое имя музику...</i>


$reklamaru";


$topilmadi = "Hech narsa topilmadi 😔";

$topilmadi2 = "Ничего не нашлось 😔";

//admin panel

if ($cid == $adminn) {
  if ($text == "/start") {
    bot("sendmessage", ['chat_id' => $cid, 'text' => "Siz bot adminisiz\nAdmin panelga kirish uchun /panel ustiga bosing", 'reply_markup' => json_encode(['remove_keyboard' => true])]);
  }

  $admin_keyboard = json_encode([
    'keyboard' => [


      [['text' => "📊Statistika"]],
      [['text' => "🚫Ban🚫"], ['text' => "🚫Bandan Olish✅"]],
      [['text' => "👥Xabar👥 (hammaga)"], ['text' => "👥 xabar (userga)"]],
      [['text' => "◀️Ortga"]]
    ]
  ]);



  if ($text == "/panel" and $cid == $admin[0]) {
    put("step/$fid.txt", "panel");
    bot("sendmessage", ['chat_id' => $cid, 'text' => "Admin panelga Xush kelibsiz", 'reply_markup' => $admin_keyboard]);
  }
  if ($text == "📊Statistika") {
    $all = file_get_contents("azo.txt");
    $all = explode("\n", $all);
    $all = count($all) - 1;
    $al4 = "SELECT name FROM vdata";
    $al4 = mysqli_query($connect, $al4);
    $al4 = mysqli_num_rows($al4);
    bot("sendMessage", ['chat_id' => $cid, "text" => "📊 Statistika\nBot a'zolari soni: $all ta\nBotdagi kinolar soni $al4"]);
  } elseif ($text == "❌Botni o‘chirish") {
    file_put_contents("a.txt", "off");
    bot("sendMessage", ['chat_id' => $cid, 'text' => "❌ Bot o'chirildi"]);
  } elseif ($text == "✅Botni yoqish") {
    file_put_contents("a.txt", "on");
    bot("sendMessage", ['chat_id' => $cid, 'text' => "✅ Bot Ishga tushurildi"]);
  } elseif ($text == "◀️Ortga") {
    bot("sendMessage", ['chat_id' => $cid, 'text' => "Bosh Menu", "reply_markup" => json_encode(['remove_keyboard' => true])]);
    file_put_contents("step/$fid.txt", "music");
  } elseif ($text == "🚫Ban🚫") {
    bot("sendmessage", ['chat_id' => $fid, 'text' => "Ban Qilinadigan 🆔️ni Yuboring!"]);
    file_put_contents("step/$fid.txt", "banid");
  } elseif ($step == "banid" and strlen((int)$text) >= 5) {
    if (!is_dir("ban")) {

      mkdir("ban");
    }
    fopen("ban/$text.txt", "w");
    file_put_contents("step/$fid.txt", "admin");
    bot("sendMessage", ['chat_id' => $fid, 'text' => "✅ Foydalanuvchi Bloklandi"]);
  } elseif ($text == "🚫Bandan Olish✅") {
    bot("sendMessage", ['chat_id' => $fid, 'text' => "Bandan olinadigan 🆔️ni Yuboring!"]);
    file_put_contents("step/$fid.txt", "unban");
  } elseif ($step == "unban") {
    if (is_file("ban/$text.txt")) {
      unlink("ban/$text.txt");
      bot("sendMessage", ['chat_id' => $fid, 'text' => "✅ Foydalanuvchi blokdan chiqarildi"]);
    } else {
      bot("sendMessage", ['chat_id' => $fid, 'text' => "Foydalanuvchi Bloklanmagan"]);
      file_put_contents("step/$fid.txt", "admin");
    }
  } elseif ($text == "👥Xabar👥 (hammaga)") {
    bot("sendMessage", ['chat_id' => $fid, 'text' => "Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing."]);
    file_put_contents("step/$fid.txt", "all_xabar");
  } elseif ($step == "all_xabar" and isset($text)) {
    $users = file_get_contents("azo.txt");
    $users = explode("\n", $users);
    foreach ($users as $user) {
      bot("sendmessage", ['chat_id' => $user, 'text' => $text]);
    }
    $info = count($users) - 1;
    bot("sendmessage", ['chat_id' => $fid, 'text' => "Xabar " . $info . " ta odamga yuborildi"]);
    file_put_contents("step/$fid.txt", "admin");
  } elseif ($text == "/cancel") {
    file_put_contents("step/$fid.txt", "admin");
    bot("sendmessage", ['chat_id' => $fid, 'text' => "Habar yuborish bekor qilindi"]);
  } elseif ($text == "👥 xabar (userga)") {
    bot("sendMessage", ['chat_id' => $fid, 'text' => "Xabar yuboriladigan foydalanuvchi id sini kiriting"]);

    file_put_contents("send_id.txt", $text);
    file_put_contents("step/$fid.txt", "onse_xabar");
  } elseif ($step == "onse_xabar" and isset($text)) {
    $text = $text;

    file_put_contents("send_id.txt", $text);
    file_put_contents("step/$fid.txt", "onse1_xabar");
    bot("sendMessage", ['chat_id' => $fid, 'text' => "Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing."]);
  } elseif ($step == "onse1_xabar") {
    $send_id = file_get_contents("send_id.txt");
    bot("sendMessage", ['chat_id' => $send_id, 'text' => "🧑‍💻 Admindan Xabar\n\n $text"]);
    bot("sendMessage", ['chat_id' => $fid, 'text' => "Xabar Userga yetkazildi"]);
    file_put_contents("step/$fid.txt", "admin");
  }
}






$blok_info = true;
$step = file_get_contents("step/$cid.txt");
if (is_file("ban/$cid.txt")) {

  $blok_info = false;
}

if ($blok_info == false) {

  bot("sendmessage", ['chat_id' => $fid, 'text' => "😡 Siz Bot Tomonidan Bloklangansiz"]);
}
function joinchat($chatid){
  $result = bot('getChatMember',[
  'chat_id'=>"-1001784633360", 
  'user_id'=>$chatid
  ])->result->status;
  $result2 = bot('getChatMember',[
    'chat_id'=>"@uzfilm_chanel", 
    'user_id'=>$chatid
    ])->result->status;
  //ortiqcha kanal
  //     $results = bot('getChatMember',[
  // 'chat_id'=>"-1001740724455",
  // 'user_id'=>$chatid
  // ])->results->status;
  
  if(($result == "creator" or $result == "administrator" or $result == "member") and ($result2 == "creator" or $result2 == "administrator" or $result2 == "member")){
      return true;
  } else {
      return false;
  }
}

$join = joinchat($cid);
$join_info = false;
if($type == "private"){
  if($join){
    $join_info = true;
  }else{
    $join_info = false;
  }
  if($join_info == false){
    bot("sendmessage",['chat_id'=>$cid,'text'=>"❌Kechirasiz $first_name siz bizning kanallarimizga obuna boʻlmasangiz botdan foydalana olmaysiz! 🔰Obuna boʻlib /start bosing!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Kanal","url"=>"https://t.me/mycoders1"],['text'=>"Kanal","url"=>"https://t.me/mycoders11"]],[['text'=>"Kanal","url"=>"https://t.me/uzfilm_chanel"]]]])]);
  }
}


if ($blok_info and $join_info and $text == "/start"  or $text == "/start$botname" or $text == "/start php") {
  $result = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
  $row = mysqli_fetch_assoc($result);
  $lang = $row['lang'];
  if ($row) {
    if ($lang == "0") {
      bot('sendmessage', [
        'chat_id' => $cid,
        'text' => $txt,
        'parse_mode' => 'html',
      ]);
      file_put_contents("step/$cid.txt", 'music');
      exit();
    } elseif ($lang == "1") {
      bot('sendmessage', [
        'chat_id' => $cid,
        'text' => $txt2,
        'parse_mode' => 'html',
      ]);
      file_put_contents("step/$cid.txt", 'music');
      exit();
    }
  } else {

    mysqli_query($connect, "INSERT INTO vusers(`user_id`,`reg`,`lang`) VALUES ('$cid','$sana--$soat','0')");
    $result = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
    $row = mysqli_fetch_assoc($result);
    $lang = $row['lang'];
    if ($lang == "0") {
      bot('sendmessage', [
        'chat_id' => $cid,
        'text' => $txt,
        'parse_mode' => 'html',
      ]);
      file_put_contents("step/$cid.txt", 'music');
      exit();
    } elseif ($lang == "1") {
      bot('sendmessage', [
        'chat_id' => $cid,
        'text' => $txt2,
        'parse_mode' => 'html',
      ]);
      file_put_contents("step/$cid.txt", 'music');
      exit();
    }
  }
}


//Delete

if ($data == "del" or $data == "mp3_del") {
  bot('answerCallbackQuery', [
    'cache_time' => 0,
    'callback_query_id' => $qid,
    'show_alert' => false,
  ]);
  bot('deletemessage', [
    'chat_id' => $cid2,
    'message_id' => $mid2,
  ]);
}


$buyruquz = "<b>🥳 Buyruqlar!!


/help - Barcha buyruqlar jamlanmasi!
/rand - Tasodifiy mp3lar.
/last - Eng oxirgi qo`shilgan mp3lar.
/add - Botga fayl yuklash buyicha yo`riqnoma.
/settings - Tilni o`zgartirish</b>


<i>🔎 Kerakli kino nomini yozib yuboring...</i>


$reklamauz";

$buyruqru = "<b>🥳 Команды!!

/help - Все команды установлены!
/rand - Случайные mp3.
/last - Последние добавленные mp3.
/add - Инструкция по загрузке файлов в бот.
/settings - изменить язык </b>


<i>🔎 Введите желаемое имя музику...</i>


$reklamaru";


if ((mb_stripos($text, "help") !== false) or (mb_stripos($text, "/help") !== false)) {
  $result = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
  $row = mysqli_fetch_assoc($result);
  $lang = $row['lang'];
  if ($lang == "0") {
    bot('sendmessage', [
      'chat_id' => $cid,
      'text' => $buyruquz,
      'parse_mode' => "html",
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('sendmessage', [
      'chat_id' => $cid,
      'text' => $buyruqru,
      'parse_mode' => "html",
    ]);
    exit();
  }
}


if ($text == "/add"  or $text == "/add$botname") {
  $result = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
  $row = mysqli_fetch_assoc($result);
  $lang = $row['lang'];
  if ($lang == "0") {
    bot('sendmessage', [
      'chat_id' => $cid,
      'text' => "<b>Botga barcha foydalanuchilar kino yuklashi mumkin!
kino yuklamoqchi bo`lsangiz shunchaki botga kino ni yuboring...</b>

$reklamauz",
      'parse_mode' => 'html',
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('sendmessage', [
      'chat_id' => $cid,
      'text' => "<b>Все пользователи бота могут скачать mp3!
// Если вы хотите starскачать mp3, просто отправьте mp3 боту ...</b>

$reklamaru",
      'parse_mode' => 'html',
    ]);
    exit();
  }
}









if ($data == "my") {
  $result = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row = mysqli_fetch_assoc($result);
  $lang = $row['lang'];
  if ($lang == "0") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Bu sizga yoqti",
      'show_alert' => false,
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Тебе понравилось",
      'show_alert' => false,
    ]);
    exit();
  }
}

if ($data == "my1") {
  $result = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row = mysqli_fetch_assoc($result);
  $lang = $row['lang'];
  if ($lang == "0") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Bu sizga yoqmadi",
      'show_alert' => false,
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Тебе это не понравилось",
      'show_alert' => false,
    ]);
    exit();
  }
}





$size = fsize($doc_s);
function fsize($size, $round = 2)
{
  $sizes = array(' Bytes', ' Kb', ' Mb', ' Gb', ' Tb');
  $total = count($sizes) - 1;
  for ($i = 0; $size > 1024 && $i < $total; $i++) {
    $size /= 1024;
  }
  return round($size, $round) . $sizes[$i];
}

if ($blok_info and $join_info and ($mp3) and $type == "private" and $text != "◀️Ortga") {
  $result7 = mysqli_query($connect, "SELECT * FROM `vusers` WHERE `user_id` = '$cid'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  $ss = intval($doc_s/1024/1024);
  
  
  if ($mp3) {
    $result = mysqli_query($connect, "SELECT * FROM `vdata` WHERE `name` = '$doc_f'");
    $row = mysqli_fetch_assoc($result);
  }
  if ($row) {
    $doc_f = str_replace("pastga tush","\n",$doc_f);
    $doc_f = str_replace("obelgi","'",$doc_f);
    if ($lang == "0") {
      bot('sendMessage', [
        'chat_id' => $cid,
        'text' => "<b>Ushbu $doc_f fayl bazada mavjud
Iltimos boshqa fayl yuboring yoki fayl nomiga qo`shimchalar qo`shing !</b>

$reklamauz",
        'parse_mode' => 'html',
        'disable_web_page_preview' => true,
      ]);
      exit();
    } elseif ($lang == "1") {
      bot('sendMessage', [
        'chat_id' => $cid,
        'text' => "<b>Этот файл $doc_f доступен в базе данных
Пожалуйста, отправьте другой файл или добавьте вложения к имени файла!</b>

$reklamaru",
        'parse_mode' => 'html',
        'disable_web_page_preview' => true,
      ]);
      exit();
    }
  } else {
    
    if ($mp3 and $ss > 40) {

      $a = mysqli_query($connect, "INSERT into vdata(name,doc_id,size,creator) VALUES('$doc_f','$doc_id','$size','$fid')");
      $eror = mysqli_error($connect);
    }else{
      bot("sendmessage",['chat_id'=>$cid,'text'=>"❌ Kechirasiz siz botga Faqatgina Kino yuklashinggiz mumkun 🎞"]);
    }
    if (isset($a) and $ss > 40) {
      $result7 = mysqli_query($connect, "SELECT * FROM `vusers` WHERE `user_id` = '$cid'");
      $row7 = mysqli_fetch_assoc($result7);
      $lang = $row7['lang'];
      $doc_f2 = str_replace("pastga tush", "\n", $doc_f);
      $doc_f2 = str_replace("obelgi", "'", $doc_f2);
      if ($lang == "0") {
        bot('sendMessage', [
          'chat_id' => $cid,
          'text' => "✅Fayl yuklandi !
$doc_f2 - $size

$reklamauz",
          'parse_mode' => 'html',
          'disable_web_page_preview' => true,
        ]);
      } elseif ($lang == "1") {
        bot('sendMessage', [
          'chat_id' => $kanal_id,
          'text' => "✅Файл загружен!
$doc_f - $size

$reklamaru",
          'parse_mode' => 'html',
          'disable_web_page_preview' => true,
        ]);
      }

      exit();
    } elseif($ss > 40) {
      $result7 = mysqli_query($connect, "SELECT * FROM `vusers` WHERE `user_id` = '$fid'");
      $row7 = mysqli_fetch_assoc($result7);
      $lang = $row7['lang'];
      if ($lang == "0") {
        bot('sendMessage', [
          'chat_id' => $cid,
          'text' => "<b>Baza bilan aloqa yo`q</b>",
          'parse_mode' => 'html',
        ]);
        exit();
      } elseif ($lang == "1") {
        bot('sendMessage', [
          'chat_id' => $cid,
          'text' => "<b>Нет подключения к базе данных </b>",
          'parse_mode' => 'html',
        ]);
        exit();
      }
    }
  }
}



if ($text == "/stat"  or $text == "/stat$botname") {
  $res = mysqli_query($connect, "SELECT * FROM `vusers`");
  $stat = mysqli_num_rows($res);
  $res2 = mysqli_query($connect, "SELECT * FROM `vdata`");
  $stat2 = mysqli_num_rows($res2);
  $res3 = mysqli_query($connect, "SELECT * FROM `data3`");
  $stat3 = mysqli_num_rows($res3);
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  if ($lang == "0") {
    bot('SendMessage', [
      'chat_id' => $cid,
      'text' => "📊<b>┌ STATISTIKA
👥├ A`zolar: <code>$stat</code>
🎧└ Yuklangan kino soni: <code>$stat2</code></b>

$reklamauz",
      'parse_mode' => 'html',
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [['text' => "🔹Yangilash", 'callback_data' => "stat"]],
        ]
      ]),
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('SendMessage', [
      'chat_id' => $cid,
      'text' => "📊<b>┌ СТАТИСТИКА
👥├ Члены: <code>$stat</code>
🎧└ Кол-во скачанной музыки: <code>$stat2</code></b>

$reklamaru",
      'parse_mode' => 'html',
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [['text' => "🔹Обновлять", 'callback_data' => "stat"]],
        ]
      ]),
    ]);
    exit();
  }
}


if ($data == "stat") {
  $res = mysqli_query($connect, "SELECT * FROM `vusers`");
  $stat = mysqli_num_rows($res);
  $res2 = mysqli_query($connect, "SELECT * FROM `vdata`");
  $stat2 = mysqli_num_rows($res2);
  $res3 = mysqli_query($connect, "SELECT * FROM `data3`");
  $stat3 = mysqli_num_rows($res3);
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  if ($lang == "0") {
    bot('answerCallbackQuery', [
      'cache_time' => 0,
      'callback_query_id' => $qid,
      'text' => "Statistika Yangilandi ✅",
      'show_alert' => false,
    ]);
    bot('editmessagetext', [
      'chat_id' => $cid2,
      'message_id' => $mid2,
      'text' => "📊<b>┌ STATISTIKA
👥├ A`zolar: <code>$stat</code>
🎧└ Yuklangan kino soni: <code>$stat2</code></b>

$reklamauz",
      'parse_mode' => 'html',
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [['text' => "🔹Yangilash", 'callback_data' => "stat"]],
        ]
      ]),
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('answerCallbackQuery', [
      'cache_time' => 0,
      'callback_query_id' => $qid,
      'text' => "Статистика обновлена ✅",
      'show_alert' => false,
    ]);
    bot('editmessagetext', [
      'chat_id' => $cid2,
      'message_id' => $mid2,
      'text' => "📊<b>┌ СТАТИСТИКА
👥├ Члены: <code>$stat</code>
🎧└ Кол-во скачанной музыки: <code>$stat2</code></b>

$reklamaru",
      'parse_mode' => 'html',
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [['text' => "🔹Обновлять", 'callback_data' => "stat"]],
        ]
      ]),
    ]);
    exit();
  }
}



if ($text == "/settings"  or $text == "/settings$botname") {
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  if ($lang == "0") {
    bot('SendMessage', [
      'chat_id' => $cid,
      'text' => "<b>Hozirgi til:</b> <i>🇺🇿O`zbek tili</i>

$reklamauz",
      'parse_mode' => 'html',
      'reply_markup' => $lan,
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('SendMessage', [
      'chat_id' => $cid,
      'text' => "<b>Текущий язык:</b> <i>🇷🇺Русский язык</i>

$reklamaru",
      'parse_mode' => 'html',
      'reply_markup' => $lan,
    ]);
    exit();
  }
}


if ($data == "0" or $data == "1") {
  mysqli_query($connect, "UPDATE vusers SET  lang = '$data' WHERE user_id = '$cid2'");
  $str = str_replace(["0", "1"], ["<b>Hozirgi til:</b> <i>🇺🇿O`zbek tili</i>", "<b>Текущий язык:</b> <i>🇷🇺Русский язык</i>"], $data);
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  if ($lang == "0") {
    bot('answerCallbackQuery', [
      'cache_time' => 0,
      'callback_query_id' => $qid,
      'text' => "Til yangilandi ✅",
      'show_alert' => false,
    ]);
    bot('editmessagetext', [
      'chat_id' => $cid2,
      'message_id' => $mid2,
      'text' => "$str

$reklamauz",
      'parse_mode' => "html",
      'reply_markup' => $lan,
    ]);
    exit();
  }
  if ($lang == "1") {
    bot('answerCallbackQuery', [
      'cache_time' => 0,
      'callback_query_id' => $qid,
      'text' => "Язык обновлен ✅",
      'show_alert' => false,
    ]);
    bot('editmessagetext', [
      'chat_id' => $cid2,
      'message_id' => $mid2,
      'text' => "$str

$reklamaru",
      'parse_mode' => "html",
      'reply_markup' => $lan,
    ]);
    exit();
  }
}



if ((mb_stripos($text, "/del=") !== false) and (in_array($cid, $admin))) {
  $e = explode("/del=", $text);
  $e = $e[1];
  $r = mysqli_query($connect, "DELETE FROM `vdata` WHERE `name` = '$e'");
  if ($r) {
    bot('sendMessage', [
      'chat_id' => $cid,
      'text' => "🗑<b>O`chirildi</b>
$e",
      'parse_mode' => 'html',
    ]);
    exit();
  } else {
    bot('sendMessage', [
      'chat_id' => $cid,
      'text' => "<b>Fayl topilmadi baza bilan aloqa yo`q</b>
$e",
      'parse_mode' => 'html',
    ]);
    exit();
  }
  exit();
}


if ($text == "/inn" or $text == "/inn$botname") {
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  if ($lang == "0") {
    bot('sendmessage', [
      'chat_id' => $cid,
      'text' => "<b>Botni inline rejimda ham sinab koʻrishingiz mumkin!🥳🥳</b>

$reklamauz",
      'parse_mode' => 'html',
      'disable_web_page_preview' => true,
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [["text" => "Inline", "switch_inline_query" => "Janob Rasul"],],
        ]
      ]),
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('sendmessage', [
      'chat_id' => $cid,
      'text' => "<b>Вы также можете попробовать встроенного бота!🥳🥳</b>

$reklamaru",
      'parse_mode' => 'html',
      'disable_web_page_preview' => true,
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [["text" => "Встроенный Попытайся", "switch_inline_query" => "Эльбрус"],],
        ]
      ]),
    ]);
    exit();
  }
}


if ((mb_stripos($text, "/send=") !== false)) {
  $e = explode("/send=", $text);
  $e = $e[1];
  $res = mysqli_query($connect, "SELECT * FROM `vusers` LIMIT 350,772");
  while ($a = mysqli_fetch_assoc($res)) {
    $id = $a['user_id'];
    bot('sendMessage', [
      'chat_id' => $id,
      'text' => $e,
      'parse_mode' => 'html',
    ]);
  }
  bot('sendMessage', [
    'chat_id' => $cid,
    'text' => "Yuborildi",
    'parse_mode' => 'html',
  ]);
  exit();
}

if ((mb_stripos($text, "/ovoz=") !== false)) {
  $e = explode("/ovoz=", $text);
  $e = $e[1];
  bot('sendMessage', [
    'chat_id' => $e,
    'text' => "✔️Botimizga baxo bering !

 🚀tezligi,
 ✅sifat darajasi,
 🔐kodlarning havfsizlik darajasi,
 💎tashqi ko`rinishini baxolashga o`z hissangizni qo`shasiz degan umiddamiz.",
    'parse_mode' => 'html',
    'reply_markup' => $ball,
  ]);
  //}
  bot('sendMessage', [
    'chat_id' => 1461491407,
    'text' => "Yuborildi",
    'parse_mode' => 'html',
  ]);
  exit();
}



if ($data == "01" or $data == "02"  or $data == "03"  or $data == "04"  or $data == "05") {
  $b = file_get_contents("ball.txt");
  file_put_contents("ball.txt", "$b\n$data");
  bot('SendMessage', [
    'chat_id' => 1461491407,
    'text' => "<b><a href='tg://user?id=$cid2'>$cid2</a> - Ovoz berdi. $data</b>",
    'parse_mode' => 'html',
  ]);

  bot('EditMessagetext', [
    'chat_id' => $cid2,
    'message_id' => $mid2,
    'text' => "<i>Biz bilan ekanligingizdan xursandmiz🙂
Ovoz  berganingiz uchun raxmat !</i>",
    'parse_mode' => 'html',
  ]);
  exit();
}






if ($text == "/last"  or $text == "/last$botname") {
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  
  $res = mysqli_query($connect, "SELECT * FROM `vdata`ORDER BY id DESC LIMIT 10");
  $arr = [];
  while ($a = mysqli_fetch_assoc($res)) {
    $vid = $a['doc_id'];
    $f = $a['name'];
    $f = str_replace("obelgi", "'", $f);
    
    $size = $a['size'];
    $id = $a['id'];
    $f = str_replace("\n", " ", $f);
    $f = str_replace("pastga tush", " ", $f);
      $tt = str_split($f,1);
      $f = '';
      foreach($tt as $t){
        $r = preg_match("/^[a-zA-Z0-9\\s._-]*$/",$t);
        if($r){
          $f .= $t;
        }else{
          if($t == "'"){
            $f .= $t;
          }
        }

      }
    $f = substr($f, 0, 35);

      $f .= "...";
    $arr[] = [['text' => "$f" . $size, 'callback_data' => "mp3_$id" . "_$p" . "_1_" . "_$stat"]];
  }
  $arr[]=[['text'=>"❎","callback_data"=>"mp3_del"]];
  $keyboard = json_encode([
    'inline_keyboard' => $arr,
  ]);
  if ($lang == "0") {
    bot('sendMessage', [
      'chat_id' => $cid,
      'text' => "<b>Eng Oxirgi fayllar:</b>
$p10


$reklamauz",
      'reply_markup' => $keyboard,
      'parse_mode' => 'html',
      'disable_web_page_preview' => true,
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('sendMessage', [
      'chat_id' => $cid,
      'text' => "<b>Последние файлы:</b>
$p10



$reklamaru",
      'reply_markup' => $keyboard,
      'parse_mode' => 'html',
      'disable_web_page_preview' => true,
    ]);
    exit();
  }
}


if ($text == "/rand" or $text == "/rand$botname") {
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  $res = mysqli_query($connect, "SELECT * FROM `vdata` ORDER BY RAND() LIMIT 10");
  $arr = [];
  while ($a = mysqli_fetch_assoc($res)) {
    $vid = $a['doc_id'];
    $f = $a['name'];
    $f = str_replace("obelgi", "'", $f);
  
    $size = $a['size'];
    $id = $a['id'];
    $f = str_replace("\n", " ", $f);
    $f = str_replace("pastga tush", " ", $f);
      $tt = str_split($f,1);
      $f = '';
      foreach($tt as $t){
        $r = preg_match("/^[a-zA-Z0-9\\s._-]*$/",$t);
        if($r){
          $f .= $t;
        }else{
          if($t == "'"){
            $f .= $t;
          }
        }

      }
    $f = substr($f, 0, 35);

      $f .= "...";
    $arr[] = [['text' => "$f" . $size, 'callback_data' => "mp3_$id" . "_$p" . "_1_" . "_$stat"]];
  }
  $arr[]=[['text'=>"❎","callback_data"=>"mp3_del"]];
  $keyboard = json_encode([
    'inline_keyboard' => $arr,
  ]);
  if ($lang == "0") {
    bot('sendMessage', [
      'chat_id' => $cid,
      'text' => "<b>Rand 15:</b>
$p10


$reklamauz",
      'reply_markup' => $keyboard,
      'parse_mode' => 'html',
      'disable_web_page_preview' => true,
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('sendMessage', [
      'chat_id' => $cid,
      'text' => "<b>Смешанный 15:</b>
$p10


$reklamaru",
      'reply_markup' => $keyboard,
      'parse_mode' => 'html',
      'disable_web_page_preview' => true,
    ]);
    exit();
  }
}




if ($blok_info and $join_info and $type == "private" and $step == 'music' and $text != "◀️Ortga") {
  function search($connect,$p,$lang,$cid,$p10,$reklamauz,$reklamaru,$topilmadi,$topilmadi2,$a_p,$i_p){
    $res = mysqli_query($connect, "SELECT * FROM `vdata` WHERE `name`  LIKE '%$p%' OR `creator` LIKE '%$p%'");

    if (mysqli_fetch_assoc($res)) {
      

      $stat = mysqli_num_rows($res);
      $arr = [];
      $res = mysqli_query($connect, "SELECT * FROM `vdata` WHERE `name`  LIKE '%$p%' OR `creator` LIKE '%$p%' LIMIT 0,10");
      while ($a = mysqli_fetch_assoc($res)) {
        $vid = $a['doc_id'];
        $f = $a['name'];
        $f = str_replace("obelgi", "'", $f);

        
        $size = $a['size'];
        $id = $a['id'];
        $f = str_replace("\n", " ", $f);
        $f = str_replace("pastga tush", " ", $f);
        $tt = str_split($f,1);
        $f = '';
        foreach($tt as $t){
          $r = preg_match("/^[a-zA-Z0-9\\s._-]*$/",$t);
      if($r){
        $f .= $t;
      }else{
        if($t == "'"){
          $f .= $t;
        }
      }
  
        }
        $f = substr($f, 0, 35);

        $f .= "...";
        $arr[] = [['text' => "$f" . $size, 'callback_data' => "mp3_$id" . "_$p" . "_1_" . "_$stat"]];
      }


      $arr[] = [['text' => "⏪", "callback_data" => "mp3_back_0"], ['text' => "❎", "callback_data" => "mp3_del"], ['text' => "⏩", "callback_data" => "mp3_go_0_" . $p . "_1_" . $stat]];

      $keyboard = json_encode([
        'inline_keyboard' => $arr,
      ]);
      $ttopilmadi = "";
      $ttopilmadi2 = "$p10 topildi ✅";
      if($i_p == 1){
        $ttopilmadi2 = "♻️ keyingi variant: $p topildi ✅";
        $ttopilmadi = " ⁉️ topilmadi: $p10 ❌ ";
      }
      if ($lang == "0") {
        bot('sendMessage', [
          'chat_id' => $cid,
          'text' => "<b>Natijalar: 1-$r из $stat</b>\n\n$ttopilmadi\n\n$ttopilmadi2


$reklamauz",
          'reply_markup' => $keyboard,
          'parse_mode' => 'html',
          'disable_web_page_preview' => true,
        ]);
        exit();
      } elseif ($lang == "1") {
        bot('sendMessage', [
          'chat_id' => $cid,
          'text' => "<b>Резултаты: 1-$r из $stat</b>
$p10


$reklamaru",
          'reply_markup' => $keyboard,
          'parse_mode' => 'html',
          'disable_web_page_preview' => true,
        ]);
        exit();
      }
    } else {
      
    
      if($i_p == 1){
        array_shift($a_p);
        
      }
      // bot("sendmessage",['chat_id'=>$cid,'text'=>count($p_info)]);
      $a_p = array_filter($a_p);
      if(count($a_p) >= 1){
        
          $p = $a_p[0];

        

        
        
        search($connect,$p,$lang,$cid,$p10,$reklamauz,$reklamaru,$topilmadi,$topilmadi2,$a_p,1);
      }else{

      
      if ($lang == "0") {
        bot('sendMessage', [
          'chat_id' => $cid,
          'text' => "*$topilmadi*",
          'parse_mode' => "markdown",
          'reply_markup' => json_encode([
            'inline_keyboard' => [
              [['text' => "⏪", 'callback_data' => "bosh"], ['text' => "❎", 'callback_data' => "del"], ['text' => "⏩", 'callback_data' => "keyin"]],
            ]
          ]),
        ]);
      } elseif ($lang == "1") {
        bot('sendMessage', [
          'chat_id' => $cid,
          'text' => "*$topilmadi2*",
          'parse_mode' => "markdown",
          'reply_markup' => json_encode([
            'inline_keyboard' => [
              [['text' => "⏪", 'callback_data' => "bosh"], ['text' => "❎", 'callback_data' => "del"], ['text' => "⏩", 'callback_data' => "keyin"]],
            ]
          ]),
        ]);
      }

      exit();
    }}
  }
  if ($text) {
    $p = $text;
    $p10 = $p;
    $p = str_replace("'","obelgi",$p);
    $p = str_replace("\n","pastga tush",$p);
    $a_p = explode(" ",$p);


    $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid'");
    $row7 = mysqli_fetch_assoc($result7);
    $lang = $row7['lang'];
    $son = mb_strlen($p);
    if ($son > 1) {
      $i_p = 0;
      $res = mysqli_query($connect, "SELECT * FROM `vdata` WHERE `name`  LIKE '%$p%' OR `creator` LIKE '%$p%'");
     search($connect,$p,$lang,$cid,$p10,$reklamauz,$reklamaru,$topilmadi,$topilmadi2,$a_p,$i_p);
    } else {
      if ($lang == "0") {
        bot('sendmessage', [
          'chat_id' => $cid,
          'text' => "Matn kamida 2 ta belgidan iborat bo`lsin!
$p10


$reklama",
          'parse_mode' => 'html',
        ]);
        exit();
      } elseif ($lang == "1") {
        bot('sendmessage', [
          'chat_id' => $cid,
          'text' => "Убедитесь, что текст содержит не менее 2 символов!
$p10


  $reklama",
          'parse_mode' => 'html',
        ]);
        exit();
      }
    }
  }
  exit();
}



if ($data == "mp3_back_0") {
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  if ($lang == "0") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Siz 1-sahifadasiz !",
      'show_alert' => false,
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Вы на странице 1 !",
      'show_alert' => false,
    ]);
    exit();
  }
}


if (mb_stripos($data, "mp3_go_") !== false) {
  $d = explode("_", $data);
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  $son = $d[2];
  $son = explode("_", $son);
  $son = $son[0];
  $name = $d[3];
  $name = explode("_", $name);
  $name = $name[0];
  $sn = $d[4];
  $sn = explode("_", $sn);
  $sn = $sn[0];
  $stat = $d[5];
  $stat = explode("_", $stat);
  $stat = $stat[0];
  $r = $d[6];

  /////////////////
  $son = $son + 10;
  $sonn = $son - 10;
  $sn = $sn + 1;
  $snn = $sn - 1;
  $res = mysqli_query($connect, "SELECT * FROM `vdata` WHERE `name`  LIKE '%$name%' OR `creator` LIKE '%$name%'");
  if (mysqli_fetch_assoc($res)) {
    $res = mysqli_query($connect, "SELECT * FROM `vdata` WHERE name LIKE '%$name%' OR `creator` LIKE '%$name%' LIMIT $son,10");
    $arr = [];
    while ($a = mysqli_fetch_assoc($res)) {
      $vid = $a['doc_id'];
      $f = $a['name'];
      $f = str_replace("obelgi", "'", $f);

      $f = htmlspecialchars($f);
      $size = $a['size'];
      $id = $a['id'];
      $f = str_replace("\n", " ", $f);
      $f = str_replace("pastga tush", " ", $f);

      $tt = str_split($f,1);
      $f = '';
      foreach($tt as $t){
        $r = preg_match("/^[a-zA-Z0-9\\s._-]*$/",$t);
        if($r){
          $f .= $t;
        }else{
          if($t == "'"){
            $f .= $t;
          }
        }

      }
      $f = str_replace("quot", "'", $f);

      $f = substr($f, 0, 35);

      $f .= "...";
      $arr[] = [['text' =>  $f. $size, 'callback_data' => "mp3_$id"]];
    }
    $r = count($arr);
    if (!$r == "0") {


      $arr[] = [['text' => "⏪", 'callback_data' => "mp3_back_" . $sonn . "_" . $name . "_" . $snn . "_" . $stat], ['text' => "❎", 'callback_data' => "mp3_del"], ['text' => "⏩", "callback_data" => "mp3_go_" . $son . "_" . $name . "_" . $sn . "_" . $stat]];


      $keyboard = json_encode([
        'inline_keyboard' => $arr,
      ]);
      if ($lang == "0") {
        bot('EditMessagetext', [
          'chat_id' => $cid2,
          'message_id' => $mid2,
          'text' => "<b>Natijalar: $sn-$r из $stat</b>
$p10


$reklamauz",
          'reply_markup' => $keyboard,
          'parse_mode' => 'html',
          'disable_web_page_preview' => true,
        ]);
        exit();
      } elseif ($lang == "1") {
        bot('EditMessagetext', [
          'chat_id' => $cid2,
          'message_id' => $mid2,
          'text' => "<b>Результаты: $sn-$r из $stat</b>
$p10


$reklamaru",
          'reply_markup' => $keyboard,
          'parse_mode' => 'html',
          'disable_web_page_preview' => true,
        ]);
        exit();
      }
    } else {
      if ($lang == "0") {
        bot('answerCallbackQuery', [
          'callback_query_id' => $qid,
          'text' => "Siz oxirgi sahifadasiz !",
          'show_alert' => false,
        ]);
        exit();
      } elseif ($lang == "1") {
        bot('answerCallbackQuery', [
          'callback_query_id' => $qid,
          'text' => "Вы на последней странице!",
          'show_alert' => false,
        ]);
        exit();
      }
    }
  } else {
    if ($lang == "0") {
      bot('sendMessage', [
        'chat_id' => $cid2,
        'text' => "*$topilmadi*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => "⏪", 'callback_data' => "bosh"], ['text' => "❎", 'callback_data' => "del"], ['text' => "⏩", 'callback_data' => "keyin"]],
          ]
        ]),
      ]);
      exit();
    } elseif ($lang == "1") {
      bot('sendMessage', [
        'chat_id' => $cid2,
        'text' => "*$topilmadi2*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => "⏪", 'callback_data' => "bosh"], ['text' => "❎", 'callback_data' => "del"], ['text' => "⏩", 'callback_data' => "keyin"]],
          ]
        ]),
      ]);
      exit();
    }
  }
  exit();
}


if (mb_stripos($data, "mp3_back_") !== false) {
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  $d = explode("_", $data);
  if ($d[4] == 0) {
    if ($lang == "0") {
      bot('answerCallbackQuery', [
        'callback_query_id' => $qid,
        'text' => "Siz 1-sahifadasiz !",
        'show_alert' => false,
      ]);
      exit();
    } elseif ($lang == "1") {
      bot('answerCallbackQuery', [
        'callback_query_id' => $qid,
        'text' => "Вы на странице 1 !",
        'show_alert' => false,
      ]);
      exit();
    }
  }
}


if ($data == "bosh") {
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  if ($lang == "0") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Siz 1-sahifadasiz !",
      'show_alert' => false,
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Вы на странице 1 !",
      'show_alert' => false,
    ]);
    exit();
  }
}

if ($data == "keyin") {
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  if ($lang == "0") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Siz oxirgi sahifadasiz !",
      'show_alert' => false,
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('answerCallbackQuery', [
      'callback_query_id' => $qid,
      'text' => "Вы на последней странице!",
      'show_alert' => false,
    ]);
    exit();
  }
}


if (mb_stripos($data, "mp3_back_") !== false) {
  $d = explode("_", $data);
  $son = $d[2];
  $son = explode("_", $son);
  $son = $son[0];
  $name = $d[3];
  $name = explode("_", $name);
  $name = $name[0];
  $sn = $d[4];
  $sn = explode("_", $sn);
  $sn = $sn[0];
  $stat = $d[5];
  $stat = explode("_", $stat);
  $stat = $stat[0];
  $r = $d[6];

  $sonn = $son - 10;
  $snn = $sn - 1;
  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  $res = mysqli_query($connect, "SELECT * FROM `vdata` WHERE `name`  LIKE '%$name%' OR `creator` LIKE '%$name%'");
  if (mysqli_fetch_assoc($res)) {
    $res = mysqli_query($connect, "SELECT * FROM `vdata` WHERE name LIKE '%$name%' OR `creator` LIKE '%$name%' LIMIT $son,10");
    $arr = [];
    while ($a = mysqli_fetch_assoc($res)) {
      $vid = $a['doc_id'];
      $f = $a['name'];
      $f = str_replace("obelgi", "'", $f);
      
      $size = $a['size'];
      $id = $a['id'];
      
      $f = str_replace("pastga tush", " ", $f);
      $tt = str_split($f,1);
      $f = '';
      foreach($tt as $t){
        $r = preg_match("/^[a-zA-Z0-9\\s._-]*$/",$t);
        if($r){
          $f .= $t;
        }else{
          if($t == "'"){
            $f .= $t;
          }
        }

      }
      $f = substr($f, 0, 35);

      $f .= "...";
      $arr[] = [['text' => $f . $size, "callback_data" => "mp3_$id"]];
    }

    $arr[] = [['text' => "⏪", 'callback_data' => "mp3_back_" . $sonn . "_" . $name . "_" . $snn . "_" . $stat], ['text' => "❎", 'callback_data' => "mp3_del"], ['text' => "⏩", "callback_data" => "mp3_go_" . $son . "_" . $name . "_" . $sn . "_" . $stat]];

    $so = "" . $so . "⏪\n❎\n⏩\n";
    $b1 = "" . $b1 . "back_" . $sonn . "_" . $name . "_" . $snn . "_" . $stat . "\ndel\ngo_" . $son . "_" . $name . "_" . $sn . "_" . $stat . "\n";



    $keyboard = json_encode([
      'inline_keyboard' => $arr,
    ]);
    $r = substr_count($b, "\n");
    if ($lang == "0") {
      bot('EditMessagetext', [
        'chat_id' => $cid2,
        'message_id' => $mid2,
        'text' => "<b>Natijalar: $sn-$r из $stat</b>
$p10


$reklamauz",
        'reply_markup' => $keyboard,
        'parse_mode' => 'html',
        'disable_web_page_preview' => true,
      ]);
      exit();
    } elseif ($lang == "1") {
      bot('EditMessagetext', [
        'chat_id' => $cid2,
        'message_id' => $mid2,
        'text' => "<b>Результаты: $sn-$r из $stat</b>
$p10


$reklamaru",
        'reply_markup' => $keyboard,
        'parse_mode' => 'html',
        'disable_web_page_preview' => true,
      ]);
      exit();
    }
  } else {
    if ($lang == "0") {
      bot('sendMessage', [
        'chat_id' => $cid2,
        'text' => "*$topilmadi*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => "⏪", 'callback_data' => "bosh"], ['text' => "❎", 'callback_data' => "del"], ['text' => "⏩", 'callback_data' => "keyin"]],
          ]
        ]),
      ]);
      exit();
    } elseif ($lang == "1") {
      bot('sendMessage', [
        'chat_id' => $cid2,
        'text' => "*$topilmadi2*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => "⏪", 'callback_data' => "bosh"], ['text' => "❎", 'callback_data' => "del"], ['text' => "⏩", 'callback_data' => "keyin"]],
          ]
        ]),
      ]);
      exit();
    }
  }
}




if (mb_stripos($data, "mp3_") !== false) {
  $d = explode("_", $data);
  $dgh = $d[1];
  $dh = explode("_", $dgh);
  $d1 = $dh[0];
  $sql = "SELECT * FROM `vdata` WHERE id = '$d1'";
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_assoc($result);
  $id = $row["doc_id"];
  $f = $row["name"];
  $f = str_replace("obelgi", "'", $f);

  $f2 = $f;
  $f = str_replace("\n", " ", $f);
  $t = $row["top"];
  $c = $row["creator"];
  $t = $t + 1;
  mysqli_query($connect, "UPDATE data SET  top = '$t' WHERE id = '$d1'");

  $result7 = mysqli_query($connect, "SELECT * FROM vusers WHERE user_id = '$cid2'");
  $row7 = mysqli_fetch_assoc($result7);
  $lang = $row7['lang'];
  $get = bot('getChat', [
    'chat_id' => $c,
  ]);
  $g = $get->result->first_name;
  if ($lang == "0") {
    bot('answerCallbackQuery', [
      'cache_time' => 0,
      'callback_query_id' => $qid,
      //'text'=>"Yuklanmoqda",
      'show_alert' => false
    ]);
    $f2 = str_replace("pastga tush", "\n", $f2);
    $f2 = str_replace("uzfilme", "@freexost_robot", $f2);
    bot('sendvideo', [
      'chat_id' => $cid2,
      'video' => "$id",
      "caption" => $f2,


      'parse_mode' => 'html',
      'reply_markup' => $k1,
    ]);
    exit();
  } elseif ($lang == "1") {
    bot('answerCallbackQuery', [
      'cache_time' => 0,
      'callback_query_id' => $qid,
      //'text'=>"Yuklanmoqda",
      'show_alert' => false
    ]);
    $f2 = str_replace("pastga tush", "\n", $f2);
    $f2 = str_replace("uzfilme", "@freexost_robot", $f2);
    bot('sendvideo', [
      'chat_id' => $cid2,
      'video' => "$id",
      "caption" => $f2,


      'parse_mode' => 'html',
      'reply_markup' => $k1,
    ]);
    exit();
  }
}
