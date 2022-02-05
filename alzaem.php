<?php

/*
by: 𝗛𝙊𝗦𝗦𝗔𝗠 𝗭𝙍𝗭𝙊𝙍
CH : 𝙍𝘼𝙒𝘼𝙉
Ch2 : HZ_RS
*/

ob_start();
$API_KEY = '5166194673:AAGPncTfQZDGK_zU-xz2gpJhh8gwlYaP_3U'; //add your bot token
$sudo = 5047045277; // add your id
$bot_id = 5166194673; 
$e = "@RAWAN2004_bot";
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}


$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$from_id    = $message->from->id;
$text       = $message->text;
$chat_id    = $message->chat->id;
$new        = $message->new_chat_member;
$left       = $update->message->left_chat_member;
$result2    = $json2->result;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb       = $update->message->message_id;
$game       = $update->message->game; 
$name       = $update->message->from->first_name;
$re         = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user       = $update->message->from->username;
$for        = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$mid        = $message->message_id;

$number     = str_word_count($text);
$numper     = strlen($text);
$set        = file_get_contents("data/$chat_id.txt");
$ex         = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1       = $ex[3];
$fwd1       = $ex[4];
$voice1     = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$video1     = $ex[8];
$tag1       = $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$commands = array('/add','/lock photo','/lock voice','/lock audio','/lock video','/lock link','/lock user','/lock sticker','/lock contact','/lock doc','/promote','/ban','/kick','/pin','/setname',"قفل الصور","قفل البصمات","قفل الصوت","قفل الفيديو","قفل الروابط","قفل الجهات","قفل الملفات","حظر","طرد","رفع ادمن","ضع اسم","تثبيت","/link","الرابط");
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if(in_array($from_id,$Dev)){
$info =  "المطور الاساسي 👨🏻‍💻";
}elseif($status == "creator"){
$info = "المنشئ 👨‍✈️";
}elseif($status == "administrator"){
$info = "المشرف 👨‍✈️";
}elseif(in_array($from_id,$admin_user) ){
$info = "الادمن 💂‍♂";
}elseif(in_array($from_id,$manger) ){
$info = "المدير 👮‍♂";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "المطور 👨🏻‍💻";
}
 //***************************//
// info developers //
$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers."*➺*".$developers_infos."\n➖➖➖➖➖➖➖\n📨¦ الٱيـديـٱت :\n" ."*➺*`".$developers_info . "`";
// info mangers //
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
// info admins //
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
// info mmaz //
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
// info dogs //
$joksss = file_get_contents("data/jok/$chat_id.txt");
$jokid  = explode("\n",$joksss);
$jokl = file_get_contents("data/jok/$chat_id/jok.txt");
$jokll = explode ("\n",$jokl);
$jokv = file_get_contents("data/jok/$chat_id/joks.txt");
$jokss = explode ("\n",$jokv);
// info joks //
$dogsss = file_get_contents("data/dog/$chat_id.txt");
$dogid  = explode("\n",$dogsss);
$dogl = file_get_contents("data/dog/$chat_id/dog.txt");
$dogll = explode ("\n",$dogl);
$dogv = file_get_contents("data/dog/$chat_id/dogs.txt");
$dogss = explode ("\n",$dogv);
// Banslist //
$Bans = file_get_contents("data/ban/$chat_id.txt");
$Banids  = explode("\n",$Bans);
$BansList = file_get_contents("data/ban/$chat_id/list.txt");
$Banlist = explode ("\n",$Banslist);
// silents //
$silentids = file_get_contents("data/silent/$chat_id.txt");
$silents = explode ("\n",$silentids);
$silent1 = file_get_contents("data/silent/$chat_id/list.txt");
$silentlist = explode("\n",$silent1);
// folders auto //
mkdir("data");
mkdir("data/developers");
mkdir("data/dog");
mkdir("data/dog/$chat_id");
mkdir("data/jok");
mkdir("data/ban");
mkdir("data/silent");
mkdir("data/silent/$chat_id");
mkdir("data/ban/$chat_id");
mkdir("data/jok/$chat_id");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
if(!$re_user){
$usew = "$first_name";
}elseif($re_user){
$usew = "@$re_user";
}
if(in_array($text, $commands) and $bot != "administrator"){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🚫┇للأسف البوت ليس ادمن في المجموعة",
  'reply_to_message_id'=>$mid
    ]);
}
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
 if($text=="/start" and $type == "private"){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي ᯓ𝙒𝙉𝙀𝙏𝘼 "Ⓡ.Ⓢ 🎖
💰¦ آختصـآصـي حمـآيهہ‏‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‏‏ وآلتگرآر وآلخ...
👨🏽‍🔧",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"آلمـطـور 🌿",'url'=>"https://t.me/hossamzrzor"]]
    ]

  ])
  ]);
}
if ($new and $new->id == $bot_id) {
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي ᯓ𝙒𝙉𝙀𝙏𝘼 "Ⓡ.Ⓢ 🎖
💰¦ آختصـآصـي حمـآيهہ‏‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‏‏ وآلتگرآر وآلخ...
⚖️¦ مـعرف آلمـطـور  : @hossamzrzor 🌿
👨🏽‍🔧",
    ]);
}

if ($type == "supergroup" and in_array($chat_id, $groups)){
  
  if($you != "creator" && $you != "administrator" && $from_id != $sudo){
    if($photo && $photo1 == "l"){
        bot('deleteMessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$message->message_id
        ]);
    }

    if($voice and $voice1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    } 
    if($audio && $audio1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($video && $video1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($link1 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
       bot('deleteMessage',[
         'chat_id'=>$chat_id,
         'message_id'=>$message->message_id
      ]);
    } 
    if($tag1 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
       bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message->message_id
       ]);
    }
    if($doc and $doc1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($sticker and $sticker1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($update->message->forward_from && $fwd1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($message->entities and $mark1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($new and $bots1 == "l"){
      $new_user = $new->username;
      if (preg_match('/^(.*)([Bb][Oo][Tt]/', $new_user)) {
        bot('kickChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$new->id
          ]);
      }
    }
  }

if($bot == "administrator"){
if($you == "creator" or $you == "administrator") {
$re_user    = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "/del"){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
    ]);
  }
   if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt","~» (" . "@". $re_user .")  " . "»" . "  (". $re_id .") ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مطور في البوت 
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مطور من قبل
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "رفع مطور اساسي" and $re_id !=$id_Bot and  in_array($from_id,$Dev)){
file_put_contents("$re_id.txt",$re_id);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مطور اساسي معك
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "رفع مطور"  || $text == "رفع ادمن" || $text == "رفع مميز" || $text == "رفع مدير" || $text == "رفع منشئ" and $re_id ==$bot_id and in_array($from_id,$Dev)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📮 ❉ لاتحرجناش والله ماريد 😹😹
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
$cdevs = count($developers)-1;
if($text == "مسح المطورين" and $cdevs != 0 and in_array($from_id,$Dev)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطة الـ مطور الاساسي
👤┊تم حذف {$cdevs} مطور
➖
", reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}
if($text == "مسح المطورين" and $cdevs == 0 and in_array($from_id,$Dev)){
$cdevs = count($developers);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊عذرا ! لم يتم رفع اي مطورين
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}

if($re and $text == "رفع مدير" || $text == "رفع المدير"  and !in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , "~» (" . "@". $re_user .") " . "»" . "  (". $re_id .") ". "\n" , FILE_APPEND);
bot( SendMessage ,[
 chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مدير بالبوت
➖"
, parse_mode => markdown ,
 reply_to_message_id =>$message->message_id,
 disable_web_page_preview =>true,
]);
}
}
if($re and $text == "رفع مدير" || $text == "رفع المدير" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مدير من قبل
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
$derb = file_get_contents("data/$chat_id/sen.txt");
$sww = file_get_contents("data/$chat_id/seen.txt");
$sew = file_get_contents("data/$chat_id/seeen.txt");
if($re and $text == "رفع بصلاحيه" || $text == "رفع بصلاحية" || $text == "رفع صلاحيه" || $text == "رفع صلاحية"){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
file_put_contents("data/$chat_id/sen.txt","name");
file_put_contents("data/$chat_id/seen.txt",$from_id);
file_put_contents("data/$chat_id/seeen.txt",$re_id);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇حسنا عزيزي $info
📛┇هاذا الامر يستخدم لرفع العضو بصلاحيه واحده فقط انت تختارها ✓
📕┇ارسل الان الصلاحيه التي تريدها للعضو » $re_id ، يمكنك ارسال رموز الصلاحيات للرفع 📌
ـــ  ــــ  ـــ  ـــ  ـــ
🗑┇حذف رسائل » {1}
🚫┇حظر مستخدمين » {2}
⛔️┇تثبيت رسائل » {3}
🚸┇دعوة مستخدمين » {4}
⚜┇اضافة مشرفين » {5}
♻️┇تغيير معلومات الجروب » {6}
🚸┇رفع بكامل الصلاحيات
❌┇الغاء » لالغاء الامر
ـــ  ــــ  ـــ  ـــ  ـــ
⚠️┇ملاحطة : للرفع بكل الصلاحيات عدا صلاحيات محددة » { تنزيل صلاحية } بالرد ✓",
]);
}}
if($text == "5" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه رفع مشرفين فقط✓
📕┇بواسطة » $info
➖ 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>false,
   can_invite_users =>false,
   can_restrict_members =>false,
   can_pin_messages =>false,
   can_promote_members =>True,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "1" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه حذف الرسائل فقط ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>True,
   can_invite_users =>false,
   can_restrict_members =>false,
   can_pin_messages =>false,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if( $text == "4" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه دعوة مستخدمين ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>false,
   can_invite_users =>True,
   can_restrict_members =>false,
   can_pin_messages =>false,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text  == "3" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه تثبيت رسائل ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>false,
   can_invite_users =>false,
   can_restrict_members =>false,
   can_pin_messages =>True,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "6" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه تغيير المعلومات ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>True,
   can_delete_messages =>false,
   can_invite_users =>false,
   can_restrict_members =>false,
   can_pin_messages =>false,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "2" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه حظر مستخدمين ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>false,
   can_delete_messages =>false,
   can_invite_users =>false,
   can_restrict_members =>True,
   can_pin_messages =>false,
   can_promote_members =>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "رفع بكامل الصلاحيات" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بكامل الصلاحيات ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot( promoteChatMember ,[
  chat_id =>$chat_id,
   user_id =>$sew,
  can_change_info =>true,
   can_delete_messages =>true,
   can_invite_users =>true,
   can_restrict_members =>true,
   can_pin_messages =>True,
   can_promote_members =>True,
]);
}
}
if($text == "الغاء" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📛┇تم الغاء الامر ✓
📕┇بواسطة » $info
➖ 
",
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "مسح المدراء" and $mangers_info != NULL and $mangers_info != " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
$cmang = count($mangers)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطة الـ $info
👤┊تم حذف {$cmang} من المدراء
➖",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
}}
if($text == "مسح المدراء" and $mangers_info == NULL or $mangers_info == " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"*
📬┊عذرا ! لم يتم رفع اي ممدراء
➖",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("~» (" . "@". $re_user .")  " . "»" . "  (". $re_id .") .","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
??┊ايديه » {$re_id}
🎖┊تم حذفه من المدراء
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" || $text == "تنزيل bbbbbb" || $text == "تنزيل nnnnnn" and !in_array($re_id,$manger)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊انه ليس مدير
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" || $text == "تنزيل المطور"  and in_array($re_id,$developer)){
	$re_id_info = file_get_contents("data/developers/$chat_id.txt");
	$devr = file_get_contents("data/developers/$chat_id/developer.txt");
	$devr1 = explode("             \n",$devr);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("~» (" . "@". $re_user .") " . "»" . "  (". $re_id .") .","",$devr1);
	file_put_contents("data/developers/developer.txt",$str);
			file_put_contents("data/developers/developers.txt",$str);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله من المطورين
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل المطور" || $text == "تنزيل مطور" || $text == "تنزيل ورديسسس" and !in_array($re_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊انه ليس مطور ليتم حذفه !
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور اساسي" || $text == "تنزيل مطور الاساسي"  and in_array($re_id,$Dev)){
			file_put_contents("$re_id.txt","");
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله مطور اساسي
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع ادمن"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , "~» ([" . "@". $re_user ."]) " . "»" . "  (`". $re_id ."`) ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه ادمن في البوت
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if ($re and $text == "رفع ادمن" and in_array($re_id,$admin_user)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه ادمن بالبوت قبلا
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($text == "مسح الادمنيه" or $text == "مسح الادمنية" ){
$cadmins = count($admin_users)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطة الـ $info
👤┊تم حذف {$cadmins} ادمن
➖",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/admin_user/$chat_id.txt","");
	file_put_contents("data/admin_user/$chat_id/mange.txt","");
	}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("| {[" . "@". $re_user ."]}  " . "»" . "  (`". $re_id ."`) .","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله من الادمنيه
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊انه ليس ادمن ليتم تنزيله
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and !in_array($re_id,$mmyaz)){
file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , "| {[" . "@". $re_user ."]}  " . "»" . "  (`". $re_id ."`) ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه عضو مميز
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and in_array($re_id,$mmyaz)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مميز من قبل
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "مسح المميزين" ){
$cmmyz = count($mmyazs)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطة الـ $info
👤┊تم حذف {$cmmyz} مميز
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
}}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("| {[" . "@". $re_user ."]}  " . "»" . "  (`". $re_id ."`) .","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله من المميزين
➖
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊العضو » [$re_user]
👤┊ايديه » {$re_id}
🎖┊انه ليس مميز لتنزيله
➖
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" and in_array($from_id,$Dev)){
if($text == "تنزيل الكل" or $text == "حذف الكل"){
$CMM = count($mmyazs)-1;
$CM = count($mangers)-1;
$CA = count($admin_users)-1;
$CALL = $CA + $CM + $CMM;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊بواسطـة $info
ـــ ـــ ـــ ــــ ــــ 
🗑┊تم حذف {$CA} من الادمنيه
🗑┊تم حذف {$CM} من المدراء
🗑┊تم حذف {$CMM} من المميزين
ـــ ـــ ـــ ــــ ــــ 
📛┊تم حذف {$CALL} من المرفوعين
🚸┊تم حذف الكل بنجاح 
✓
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt","");
}
}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer)){
if($text == "رفع مدير" || $text == "رفع منشئ" or $text == "رفع الادمنيه" or $text == "رفع الادمنية" or $text == "تفعيل"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊عذرا ! هاذا الامر ليس لك
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if( !in_array($from_id,$Dev)){
if($text == "رفع مطور" || $text == "تنزيل مطور" or $text == "رفع منشئ" or $text == "المطورين" or $text == "مسح مطور"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊عذرا ! هاذا الامر ليس لك
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "رفع ادمن" || $text == "رفع مميز" or $text == "م1" or $text == "م2" or $text == "م3" or $text == "م4" or $text == "م5" or $text == "قفل الصور" or $text == "تنزيل مميز" or $text == "تنزيل ادمن" or $text == "قفل الفيديو" or $text == "فتح الفيديو" or $text == "تفعيل الايدي" or $text == "تعطيل الايدي"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
📬┊عذرا ! هاذا الامر ليس لك
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
 
if(in_array($from_id,$Dev)){
if($text == "المطورين" and $cdevs != 0){
if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
👨🏻‍💻┇المطورين {$cdevs} : 
$developers_infos
",
]);
}
}
if($text == "المطورين" and $cdevs == 0 || $developers_info == ""){
if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
 📬┊عذرا ! لم يتم رفع اي مطورين
➖
",
]);
}
}
}
$CM = count($mangers)-1;
if($text == "المدراء" and $CM != 0){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
👨🏻‍💻┇المدراء [{$CM}] : 
$mangers_infos
",
]);
}
}
}
if($text == "المدراء" and $CM == 0){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>
"
📬┊عذرا ! لم يتم رفع اي مدراء
➖",
]);
}
}
}
$CA = count($admin_users)-1;
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_infos != null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
📙┇قائمة الادمنية [{$CA}] :
$admin_users_infos",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_infos == null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
📛┇NotDirector - *Admins* -
📛┇لايوجد مجلد - *الادمنيه* -
➖",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
$CMM = count($mmyazs)-1;
if($text == "المميزين" and $mmyazs_infos != null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
📙┇قائمة المميزين [{$CMM}] :
$mmyazs_infos",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
if($text == "المميزين" and $mmyazs_infos == null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
📛┇NotDirector - *VipMember* -
📛┇لايوجد مجلد - *المميزين* -
➖",
]);
}
}
}
 elseif($text  == "كتم" && $rt or $text  == "silent" && $rt or $text  == "تقييد" && $rt){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt !=  creator  && $statusrt !=  administrator  && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	
$add = $settings["information"]["added"];
if ($add == true){
   bot( restrictChatMember ,[
    user_id =>$re_id,   
    chat_id =>$chat_id,
    can_post_messages =>false,
         ]);
  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"👤¦ العضو » [$re_user]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم كتمه/تقييده
✓️
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
 }
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>" لايمكنني تقييد الادمنية او المدراء او  او المميزين",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text  , "كتم لمدة ") !== false && $rt or strpos($text  , "تقييد لمدة ") !== false && $rt) {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt !=  creator  && $statusrt !=  administrator  && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace([ كتم لمدة  ,  تقييد لمدة ],  ,$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	bot( sendmessage ,[
	 chat_id =>$chat_id,
 text =>"👤¦ العضو » [$re_user]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم كتمه لمدة $we دقيقه
✓️
", parse_mode =>"markdown", disable_web_page_preview =>true,
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
    bot( restrictChatMember ,[
    user_id =>$re_id,   
    chat_id =>$chat_id,
    can_post_messages =>false,
    until_date =>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
else
{
bot( sendmessage ,[
  chat_id  => $chat_id,
  text =>"لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
 reply_markup =>$inlinebutton,
   ]);
}
}
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$tq = str_replace("الغاء تقييد ", "$tq", $text);
if($text == "الغاء تقييد $tq" and preg_match( /([0-9])/i ,$tq)){
file_put_contents("data/$chat_id/bans.txt",$tq);
$idp == file_get_contents("data/$chat_id/bans.txt");
$statusidd = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$tq),true);
$statusid = $statusidd[ result ][ status ];
	 bot( restrictChatMember ,[
    user_id =>$tq,   
    chat_id =>$chat_id,
    can_post_messages =>true,
    can_add_web_page_previews =>false,
    can_send_other_messages =>true,
    can_send_media_messages =>true,
         ]);
bot( sendmessage ,[
	 chat_id =>$chat_id,
 text =>"🙍🏼‍♂┊العضو » {$tq}
👤┊تم الغاء تقييده
➖
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$message_id,
	  reply_markup =>$inlinebutton,
   ]);
$key = array_search($tq,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$re_user= str_replace("الغاء كتم ", "$re_user", $text);
if($text == "الغاء كتم $re_user" and preg_match( /([0-9])/i ,$re_user)){
file_put_contents("data/$chat_id/bans.txt",$re_user);
$idp == file_get_contents("data/$chat_id/bans.txt");
$statusidd = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_user),true);
$statusid = $statusidd[ result ][ status ];
	 bot( restrictChatMember ,[
    user_id =>$re_user,   
    chat_id =>$chat_id,
    can_post_messages =>true,
    can_add_web_page_previews =>false,
    can_send_other_messages =>true,
    can_send_media_messages =>true,
         ]);
bot( sendmessage ,[
	 chat_id =>$chat_id,
 text =>"🙍🏼‍♂┊العضو » {$re_user}
👤┊تم الغاء كتمه
➖
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$message_id,
	  reply_markup =>$inlinebutton,
   ]);
$key = array_search($re_user,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
if($text  == "الغاء تقييد" && $rt or $text  == "الغاء كتم" && $rt or $text  == "الغاء التقييد" && $rt){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot( restrictChatMember ,[
    user_id =>$re_id,   
    chat_id =>$chat_id,
    can_post_messages =>true,
    can_add_web_page_previews =>false,
    can_send_other_messages =>true,
    can_send_media_messages =>true,
         ]);
  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"👤¦ العضو » [$re_user]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم الغاء كتمه/تقييده
✓️
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}

if( $text  == "قائمة المقيدين" or $text == "المقيدين") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"
📙┇قائمة المقيدين :
$result",
 parse_mode =>"MarkDown",
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
if( $text  == "قائمة المكتومين" or $text == "المكتومين") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"
📙┇قائمة المكتومين :
$result",
 parse_mode =>"MarkDown",
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
if( $text  == "مسح المكتومين" or $text == "مسح المكاتيم") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot( restrictChatMember ,[
    user_id =>$silent[$z],   
    chat_id =>$chat_id,
    can_post_messages =>true,
    can_add_web_page_previews =>false,
    can_send_other_messages =>true,
    can_send_media_messages =>true,
         ]);
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"  
📬┊بواسطة $keees
👤┊تم تنظيف سلة المكتومين
➖
", parse_mode =>"markdown", disable_web_page_preview =>true,
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
    bot( sendMessage ,[
       chat_id =>$chat_id,
       text =>"👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم حظره 
✓️",
   reply_to_message_id =>$mid
      ]);
    bot( kickChatMember ,[
         chat_id =>$chat_id,
         user_id =>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء الحظر"){
    bot( sendMessage ,[
       chat_id =>$chat_id,
       text =>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تم الغاء حظره 
✓️",
   reply_to_message_id =>$mid
      ]);
    bot( unbanChatMember ,[
         chat_id =>$chat_id,
         user_id =>$re_id
      ]);
    }
  if($text == "/promote" or $text == "رفع ادمن"){
      bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تمت ترقيته ليصبح ادمن 
✓️",
   reply_to_message_id =>$mid
      ]);
      bot( promoteChatMember ,[
           chat_id =>$chat_id,
           user_id =>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot( setChatTitle ,[
       chat_id =>$chat_id,
       title =>$ename 
      ]);
  }
   if($text == "ضع اسم $aname"){
     bot( setChatTitle ,[
       chat_id =>$chat_id,
       title =>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "تثبيت"){
    bot( pinChatMessage ,[
         chat_id =>$chat_id,
         message_id =>$re_msgid
      ]);
   }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم حظره 
✓️",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء الحظر"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تم الغاء حظره 
✓️",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
    }
  if($text == "/promote" or $text == "رفع ادمن"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تمت ترقيته ليصبح ادمن 
✓️",
  'reply_to_message_id'=>$mid
      ]);
      bot('promoteChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
  }
   if($text == "ضع اسم $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "تثبيت"){
    bot('pinChatMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
      ]);
   }
   if($text == "/lock photo" or $text == "قفل الصور"){
    file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصور 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo" or $text == "فتح الصور"){
    file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصور 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker" or $text == "قفل الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملصقات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/open sticker" or $text == "فتح الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملصقات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/lock contact" or $text == "قفل الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل جهات الاتصال 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact" or $text == "فتح الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح جهات الاتصال 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock doc" or $text == "قفل الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/open doc" or $text == "فتح الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/lock fwd" or $text == "قفل التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التوجيه 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open fwd" or $text == "فتح التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التوجيه 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock voice" or $text == "قفل البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البصمات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/open voice" or $text == "فتح البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البصمات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/lock link" or $text == "قفل الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الروابط 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open link" or $text == "فتح الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الروابط 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock audio" or $text == "قفل الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصوت 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open audio" or $text == "فتح الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصوت 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock video" or $text == "قفل الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الفيديو 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open video" or $text == "فتح الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الفيديو 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock user" or $text == "قفل المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المعرفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open user" or $text == "فتح المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المعرفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "/lock mark" or $text == "قفل الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الماركدون 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open mark" or $text == "فتح الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الماركدون 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/lock bots" or $text == "قفل البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots" or $text == "فتح البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text=="/help"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❂

 ‏‎‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‏‏ ⇊

👨‍⚖️¦ م1 » آوآمـر آلآدآرهہ‏‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‏‏
🛡¦ م3 » آوآمـر آلحمـآيهہ‏‏
⚙¦ م4 » آلآوآمـر آلعآمـهہ‏‏
🕹¦ م المطور »  آوآمـر آلمـطـور


 ‏‎‏❋¦ رآسـلني للآسـتفسـآر ☜ { @hossamzrzor } ✓",
      ]);
   }
  if($text=="الاوامر"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❂

 ‏‎‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‏‏ ⇊

👨‍⚖️¦ م1 » آوآمـر آلآدآرهہ‏‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‏‏
🛡¦ م3 » آوآمـر آلحمـآيهہ‏‏
⚙¦ م4 » آلآوآمـر آلعآمـهہ‏‏
🕹¦ م المطور »  آوآمـر آلمـطـور


 ‏‎‏❋¦ رآسـلني للآسـتفسـآر ☜ { @hossamzrzor } ✓",
      ]);
  }
 }
}
if($text=="/setting" or $text=="/setting$e" or $text=="الاعدادات"){

  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"➖➖➖
👮🏾¦ اعدادات المجموعه : 


✔️¦ مقفول » l
✖️¦ مفتوح » o

➖➖➖

📸¦ الصور : $photo1
🀄️¦ الملصقات : $sticker1

📹¦ الفيديو : $video1
📡¦ الروابط :  $link1

☎️¦ الجهات : $contact1
🗂¦ الملفات :  $doc1

↩️¦ التوجيه : $fwd1
🎙¦ البصمات : $bsma1

🔊¦ الصوت : $audio1
Ⓜ️¦ المعرف : $tag1

🔖¦ الماركدون : $mark1
📟¦ البوتات : $bots1

➖➖➖
",
]);
}
}
if($bot == "administrator"){
 if ($you == "administrator" or $you == "creator") {
if($text == "/add" or $text == "/add$e" or $text=="تفعيل"){
if(!in_array($chat_id, $groups)){
  file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no");
  file_put_contents("data/groups.txt", "$chat_id\n",FILE_APPEND);
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ تـم تـفـعـيـل آلمـجمـوعهہ‏‏ 
✓️",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
if (in_array($chat_id, $groups)) {
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎗¦ المجموعه بالتأكيد ✓️ تم تفعيلها",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
}
}
}
 if($text == "المجموعات"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ عدد المجموعات المفعلة » $c  ➼"
    ]);
 }
if($text == "اذاعه" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📭¦ حسننا الان ارسل الكليشه للاذاعه للمجموعات 
🔛"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "اذاعه" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
$id   = $message->from->id; 
$user = $message->from->username; 
$name = $message->from->first_name; 
if($text=="موقعي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي :

📜¦ الاسم : $name
🎟¦ المعرف: @$user
🏷¦ الايدي : ( $id )
🎗¦ رتبتك : منشئ المجموعة 🛠
🎫¦ ايدي المجموعه : ( $chat_id )
📨¦ رسائل المجموعة : $message->message_id
🏌🏻¦ مـطـور البوت : @hossamzrzor
👨🏽‍🔧
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="موقعي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي :

📜¦ الاسم : $name
🎟¦ المعرف : @$user
🏷¦ الايدي : ( $id )
🎗¦ رتبتك : ادمن المجموعة 🛠
🎫¦ ايدي المجموعه : ( $chat_id )
📨¦ رسائل المجموعة : $message->message_id
🏌🏻¦ مـطـور البوت : @hossamzrzor
👨🏽‍🔧",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="موقعي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي :

📜¦ الاسم : $name
🎟¦ المعرف : @$user
🏷¦ الايدي : ( $id )
🎗¦ رتبتك : عضو المجموعة 🛠
🎫¦ ايدي المجموعه : ( $chat_id )
📨¦ رسائل المجموعة : $message->message_id
🏌🏻¦ مـطـور البوت : @hossamzrzor
👨🏽‍🔧",
'reply_to_message_id'=>$message->message_id, 
]);
}
 
$rnd = rand(1,999999999999999999);
if($text=="ايدي" or $text == "id"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://devmemo0.000webhostapp.com//$rnd.jpg"; // رابط استضافتك
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
👤¦ اسمـك » $name
🎫¦ معرفك » @$user
🏷¦ ايديك  » $id
📨¦ رسائل المجموعة »  $message->message_id
🎫¦ ايدي المجموعة » $chat_id
➖",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
$rnd = rand(1,999999999999999999);
if($text=="صورتي"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://devmemo0.000webhostapp.com//$rnd.jpg"; // رابط استضافتك
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>" ",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
if($text == "/link" or $text == "الرابط"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🔖¦رابـط الـمـجـمـوعه 💯
🌿¦$t :

$l",
      'disable_web_page_preview'=>true,
      'reply_to_message_id'=>$message->message_id,
      ]);
  
   }
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
$id_bot = 592557902;
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot and  $you == "member"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ آلعضـو : @$user
👤¦ الايدي : $id 
🚫¦ مـمـنوع آضـآفهہ آلبوتآت 
📛¦ تم طـرد آلبوت 
✘",
]);
}
if(preg_match('/^(مسح) (.*)/', $text, $delmsg) and $from_id == $sudo){
for($h=$message_id; $h>=$message_id-$delmsg[2]; $h--){
bot('deletemessage',[
'chat_id' => $chat_id,
'message_id' =>$h,]);}}
$editMessage = $update->edited_message;
$chatedit = $update->edited_message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
if($editMessage){
	 bot('sendMessage',[
	 'chat_id'=>$chatedit,
	 'text'=>'سحك وعدل 😹☝🏿',
	 'message_id'=>$message->edited_message->message_id,
	 'reply_to_message_id'=>$update->edited_message->message_id,
	 ]);
 }
if($rep && $text == "ايدي" or $text == "ايديه"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => " $re_id ",
]);
}
if($text == "م1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ┇  ( آوآمـر آلرفع وآلتنزيل )
      
┇{ رفع ادمن ~ تنزيل ادمن } 
┇{ رفع مدير ~ تنزيل مدير } 
┇{ رفع مميز ~ تنزيل مميز } 
┇{ رفع مطور ~ تنزيل مطور } 
┇{ رفع مطور اساسي ~ تنزيل مطور اساسي } 
┇{ رفع منشئ ~ تنزيل منشئ } 



┇ـ➖➖➖➖➖
      
┇ـ
┇ ( آوآمـر آلحظـر وآلطـرد )
┇ـ
      
┇  { طرد بالرد  } : لطرد العضو 
┇ { حظر بالرد  } : لحظر وطرد العضو 
┇ { الغاء الحظر بالرد } : لالغاء الحظر عن عضو 

┇ـ➖➖➖➖➖

🗯┇ راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍✈️¦  اوامر الوضع للمجموعه ::

📮¦ـ➖➖➖➖➖  
💭¦ ضع اسم :↜ لوضع اسم  
  
💭¦ الـرابـط :↜  لعرض الرابط  
📮¦ـ➖➖➖➖➖

👨🏽‍💻¦  اوامر رؤية الاعدادات ::

🗯¦ المطور : لعرض معلومات المطور 
🗯¦ معلوماتي :↜لعرض معلوماتك  
🗯¦ الاعدادات : لعرض اعدادات المجموعه 
🗯¦ المجموعه : لعرض معلومات المجموعه 

➖➖➖➖➖➖➖
🗯¦ راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م3"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚡️ اوامر حماية المجموعه ⚡️
🗯|ـ➖➖➖➖
🗯|️ قفل ~ فتح :  الصوت
🗯| قفل ~ فتح :  الــفيديو
🗯| قفل ~ فتح :  الـصــور 
🗯| قفل ~ فتح :  الملصقات
🗯| قفل ~ فتح : الروابط
🗯| قفل ~ فتح : البوتات
🗯| ️قفل ~ فتح : المعرفات
🗯|| قفل ~ فتح :  التوجيه
🗯| قفل ~ فتح : الجهات 
🗯| قفل ~ فتح : الملفات
 🗯| قفل ~ فتح : الماركدون
 🗯| قفل ~ فتح : البصمات
🔅|ـ➖➖➖➖➖
🗯| راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م4"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"📍💭 اوامر اضافيه 🔹🚀🔹

🔅¦ـ➖➖➖➖➖
🕵🏻 معلوماتك الشخصيه 🙊
🔸¦ اسمي : لعرض اسمك 💯
💱¦ معرفي : لعرض معرفك 💯
🌀¦ ايديي : لعرض ايديك 💯
🔅¦ـ➖➖➖➖➖
◽¦ اوامر التحشيش 😄
📌¦ رفع ➸ تنزيل ➸ متوحد
📌¦ رفع ➸ تنزيل ➸ بقره
📌¦ رفع ➸ تنزيل ➸ كلب
📌¦ رفع ➸ تنزيل ➸ قرد
📌¦ رفع ➸ تنزيل ➸ غبي
📌¦ رفع ➸ تنزيل ➸ فرسه
📌¦ رفع ➸ تنزيل ➸ عره
📌¦ رفع ➸ تنزيل ➸ زواج ➪ طلاق
📌¦ رفع ➸ تنزيل ➸ بقلبي
📌¦ رفع ➸ تنزيل ➸ بيستي
📌¦ رفع ➸ تنزيل ➸ وتكه
📌¦ رفع ➸ تنزيل ➸ رقاصه
📌¦ رفع ➸ تنزيل ➸ دكري
📌¦ رفع ➸ تنزيل ➸ حيوان
📌¦ رفع ➸ تنزيل ➸ مهزء
📌¦ رفع ➸ تنزيل ➸ فاشل
📌¦ رفع ➸ تنزيل ➸ قطتي
📌¦ رفع ➸ تنزيل ➸ ابني
📌¦ رفع ➸ تنزيل ➸ بنتي
📌¦ رفع ➸ تنزيل ➸ زوجي
📌¦ رفع ➸ تنزيل ➸ خاين
📌¦ رفع ➸ تنزيل ➸ خاينه
📌¦ رفع ➸ تنزيل ➸ عبيط
📌¦ رفع ➸ تنزيل ➸ متخزوق
📌¦ كول + (اسم الشخص) 
📌¦ كله + الرد + (الكلام) 
🔅¦ـ➖➖➖➖➖

🗯¦ راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"📌¦ اوامر المطور 🃏

🔅¦ تفعيل : لتفعيل البوت 
🔅¦ اذاعه : لنشر كلمه لكل المجموعات
🔅¦ استخدم /admin في خاص البوت فقط : لعرض كيبود الخاص بك 💯 
🔅¦ تحديث: لتحديث ملفات البوت
🔅¦ـ➖➖➖➖➖

🗯¦ راسلني للاستفسار 💡↭ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}

/*
by: 𝗛𝙊𝗦𝗦𝗔𝗠 𝗭𝙍𝗭𝙊𝙍
owner : 𝙍𝘼𝙒𝘼𝙉
Ch1 : DEV_1IRAQ
*/

if($text == 'المطور' or $text == "مطور"){
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+9647815864486",
'first_name'=>"م̶̶ـ̶̶ـ̶̶ي̶̶م̶̶ـ̶̶ـ̶̶و 34K ™`☻",
'last_name'=>"ٵڵٵڼـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲٞ࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫҉ৡـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲٞ࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫ैۖـښـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲٞ࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫࣫҉ৡـࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲࣲैۖـٱڹ 📿 ٵلڕجُيُـُैُۖـُـُـُـُࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣩࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧۖـُـُـُـࣩࣩࣩࣩࣩࣩࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧࣧم",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » المنشىء 🏌🏻
🌿
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » ادمن في البوت 🎖
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » فقط عضو 🙍🏼‍♂️
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"حاظر تاج راسي انجبيت 😇
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"فوك ما مصعدك ادمن و تكلي انجب 😏 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"انجب انته لا تندفر 😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
$me = $message->reply_to_message; 
$mem = $me->message_id;
$MEMO = explode('كله',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
'reply_to_message_id'=>$mem,
]);
}
$MEMO = explode('كول',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
]);
}
$u = explode("\n",file_get_contents("memb.txt"));
$m = count($u)-1;
$modxe = file_get_contents("usr.txt");
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
if($text == '/admin' and $for == $sudo){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
...

🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'🆔¦ ايديك •'] 
], 
[ 
['text'=>'💯¦ المشتركين •'],['text'=>'☑️¦ المجموعات •'] 
], 
[ 
['text'=>'🚸¦ اسمك •'] 
], 
[ 
['text'=>'💢¦ معرفك •'] 
], 
[ 
['text'=>'📈¦ الاحصائيات •'] 
], 
[ 
['text'=>'🔂¦ اذاعة •'] 
], 
[ 
['text'=>'🛠¦ المطور •'] 
], 
[ 
['text'=>'📡¦ قناة المطور •'],['text'=>'🛠¦ المساعدة •'] 
],  
] 
]) 
]); 
}
if($text == "🔂¦ اذاعة •" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📭¦ حسننا الان ارسل الكليشه للاذاعه للمجموعات 
🔛"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "🔂¦ اذاعة •" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
if($text == "☑️¦ المجموعات •"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ عدد المجموعات المفعلة » $c  ➼"
    ]);
 }
$id = $message->from->id;
if($text == "🆔¦ ايديك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🚸¦ اسمك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💢¦ معرفك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🛠¦ المطور •" and $for == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 🏌🏻¦ مـطـور البوت : @$user 👨🏽‍🔧 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💯¦ المشتركين •" and $from_id == $sudo){
$m = count($u)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "💯¦ عدد مشتركين البوت :- { $m }" ,
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "📈¦ الاحصائيات •"){
$c = count($groups);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" الاحصائيات : 📈 

👥¦ عدد المجموعات المفعله : $c 
👤¦ عدد المشتركين في البوت : $m
📡 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "📡¦ قناة المطور •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🛠¦   قناة مـطـور الملف : @DEV_1IRAQ ☑️ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🛠¦ المساعدة •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"💯¦ للمساعدة او اي أراء او افكار تواصل مع مطور الملف @M_E_M1BOT √",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
👮🏽¦ قام احد المدراء بتفعيل البوت
👥¦ $t
🎫¦ ايدي المجموعه » $chat_id
⚖️¦ عدد الاعضاء » 【  $result2  】 عضو 🗣
👨🏽‍💻¦ بواسطة » $name
🎟¦ معرفه » @$user
📮
",
]);
}
}
if($text == "ايديي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معرفي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"أسمي روان 🌚🌸","لتخليني اعصب وردا ترا اسمي روان","ٱنۨــہت ٱلبوت يۧلٱ ٱشطحۡ 😠","چمٱعّﭥڪْ شبّـعّو مي ورد وٱنت بّـعّدڪ ﭥصيح بّـوت 👌🤣","لك ٱنۨــہيۧ ٱحۡبك صيۧحۡليۧ بٱسۜمۘيۧ روان","يۧمۘعود شتريۧد مۘوعت ٱذنۨــہيۧ،😕ض","اسمي روان"
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😔"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش الحلو ضايج ❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😳"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ها بس لا شفت خالتك الشكره 😳😹🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😭"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتبجي حياتي 😭😭",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😡"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ابرد  🚒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😍"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يَمـه̷̐ إآلُحــ❤ــب يَمـه̷̐ ❤️😍",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😉"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😻🙈",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😋"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طبب لسانك جوه عيب 😌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "☹️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لضوج حبيبي 😢❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هلو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هلووات 😊🌹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"محات حياتي🙈❤",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب ابني/بتي اتفل/ي اكبر منها شوية 😌😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تخليني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اخليك بزاويه 380 درجه وانته تعرف الباقي 🐸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكرهك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ديله شلون اطيق خلقتك اني😾🖖🏿🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "باي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بايات حياتي 😍 $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"زاحف عله خالتك الشكره 🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "واو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"قميل 🌝🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو ماكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غيرك/ج بل كلب ماكو يبعد كلبي😍❤️️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلشي وكلاشي🐸تگـول عبالك احنـة بالشورجـة🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معزوفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طرطاا طرطاا طرطاا 😂👌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لو زاحفتلك جان ماكلت زاحفه 🌝🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حفلش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"افلش راسك 🤓",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ضوجه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شي اكيد الكبل ماكو 😂 لو بعدك/ج مازاحف/ة 🙊😋",
'reply_to_message_id'=>$message->message_id, 
]);
}
$message_id = $update->message->message_id;
if($text == "اقرالي دعاء"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اللهم عذب المدرسين 😢 منهم الاحياء والاموات 😭🔥 اللهم عذب ام الانكليزي 😭💔 وكهربها بلتيار الرئيسي 😇 اللهم عذب ام الرياضيات وحولها الى غساله بطانيات 🙊 اللهم عذب ام الاسلاميه واجعلها بائعة الشاميه 😭🍃 اللهم عذب ام العربي وحولها الى بائعه البلبي اللهم عذب ام الجغرافيه واجعلها كلدجاجه الحافية اللهم عذب ام التاريخ وزحلقها بقشره من البطيخ وارسلها الى المريخ اللهم عذب ام الاحياء واجعلها كل مومياء اللهم عذب المعاون اقتله بلمدرسه بهاون 😂😂😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == 'روان'){
$rand = array('سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑','نعم حبي 😎','اشتعلو اهل روان شتريد 😠','لك فداك روان حبيبي انت اموووح 💋','بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف 😂','هياتني اجيت 🌚❤️','راجع المكتب حبيبي عبالك روان سهل تحجي ويا 😒','باقي ويتمدد 😎','لك دبدل ملابسي اطلع برااااا 😵😡 ناس متستحي','دا اشرب جاي تعال غير وكت 😌','هوه غير يسكت عاد ها شتريد 😷','انت مو اجيت البارحه تغلط عليه ✋🏿😒','ﮬ̲̌ٱ حيٱت̲ي ٱمـرّﻧ̲ـي 🥰','عيۧونۨــہ روان تفضل؟،💕🥰','ﮬ̲̌ٱ حيٱت̲ي ٱمـرّﻧ̲ـي 🥰','م̀وجود̀ بس̀́ لتص̀́يح̀ 😐٠','رٱڂ ڻموﭠ ﭜڳوروڻٱ وڻﭠهـﮧ ﭜ؏ﮃڳ ﭠڝيِّڂ، ميرو');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}

if($text == "وه"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"بس يا فلاح يا عره 😂🦋",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حبيبي"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"يہرﯛ̲حہي آنہت/ ي 🥰",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حبيبتي"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"مشغوله ويا الكبد 🌝🌷",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اي"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"جاك اوه مش سامع 😂🤤",
 "reply_to_message_id"=>$message->message_id, 
]);
}
if($text == "ايوه"){
bot("sendMessage",[
 "chat_id"=>$chat_id, 
 "text"=>"يقطعني😂💔",
 "reply_to_message_id"=>$message->message_id, 
]);
}
if($text == "رفع متوحد"  || $text == "رفع متوحده" and"$from_id"==$sudo|| in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
  'text'=>" ◍ تم رفع العضو $re_name الى قائمه المتوحدين والمرضي النفسيين
◍ راح نجبلك دكتور نفساني
√
", parse_mode'=>'markdown','reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot("sendMessage",["chat_id"=>$chat_id,
       'text'=>"◍ العضو [$re_name] متوحد بالفعل
◍ ويتعالج مع دكتور نفسي الان
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل متوحد"  || $text == "تنزيل متوحده" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot("SendMessage",['chat_id'=>$chat_id,
  'text'=>"◍ تم تنزيل العضو $re_name من المتوحدين بنجاح 
◍ واصبح الان حر طليق مع العقلاء
√
",'parse_mode'=>'markdown','reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع زوجتي"   $text == "زواج" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"◍ تم زواجك ب $re_name بارك الله لكما
◍ يلا اتفضلو اعملو واحد بس مش فى الروم
√
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name متزوجه من قبل 
◍ اسف يصحبى كل شئ قسمه ونصيب
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل زوجتي"   $text == "طلاق" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"◍ تم تنزيل العضو $re_name من المتزوجات بنجاح واصبحت طليقه
◍ طلقتها عشان مبتعرفش صح
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش متزوجه اصلا
◍ الحق اخطبها بقا قبل ماتتشقط
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع غبي"   $text == "رفع غبيه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"◍ تم رفع العضو $re_name غبي من اغبياء الجروب 
◍ قولولو نقطنا بسكاتك
√", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name غبي بالفعل 
◍ وحابسينو جوا وهاتك ياضحك
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل غبي"   $text == "تنزيل غبيه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الاغبياء بنجاح 
◍ مكنش المفروض ينزل ده لسه غبى
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش غبي اصلا
◍ شوفو كده يمكن فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع حمار"   $text == "رفع حماره" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name حمار الجروب 
◍ حد عايز يركبو وياخد لفه؟؟
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"[◍ العضو $re_name حمار بالفعل 
◍ بس هو فى الغيط مش فاضى الوقتى
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل حمار"   $text == "تنزيل حماره" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الحمير بنجاح 
◍ تعالى حبيبى هخلى الكل يحترمك
√

", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش حمار اصلا
◍ شوفو كده فى ليسته القرود
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع بقره"   $text == "رفع بقر" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name البقره الحلوبه 
◍ يلا تعالى يابقره بدنا لبن
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name بقره بالفعل 
◍ وبيتحلب فى الزريبه ناو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل بقره"   $text == "تنزيل بقر" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من البقرات بنجاح 
◍ تعالى حبيبى خد اللبن بتاعك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش بقره اصلا
◍ شوفو كده يمكن فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع قرد"   $text == "رفع قرده" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الكلب جيرمن 
◍ والنبي يجماعه اللى عندو عضمه يدهالو
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name قرد بالفعل 
◍ وفرحان بالموزه اوى
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل قرد"   $text == "تنزيل قرده" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من القرود بنجاح 
◍ شيل قشر الموز بتاعك يلا
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش قرد اصلا
◍ شوفو كده فى ليسته الحمير
√
"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع كلب"   $text == "رفع كلبه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الكلب جيرمن 
◍ والنبي يجماعه اللى عندو عضمه يدهالو
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name كلب بالفعل 
◍ بس بيمصمص فى العضمه مش فاضى
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل كلب"   $text == "تنزيل كلبه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الكلاب بنجاح 
◍ هات العضمه عشان نديها لحد غيرك
√

", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش كلب اصلا
◍ شوفو كده فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع عره"   $text == "رفع عار" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name عره الجروب 
◍ مش عيب اما تكون عره كده
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name عره بالفعل 
◍ ومختوم على قفاه كمان
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل عره"   $text == "تنزيل عار" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من العرر بنجاح 
◍ مش عارف الناس هترجع تحترمك تانى ولا لا
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش عره اصلا
◍ شوفو كده فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع فرسه"   $text == "رفع صاروخ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name فرسه بنجاح 
◍ هووووووووووف صاااروخ ياناس
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name فرسه بالفعل 
◍ اول مره اشوف فرسه شبه الحمار
√
"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل فرسه"   $text == "تنزيل صاروخ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الفرسات بنجاح 
◍ يااه كانت فرسه جامده اوى
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش فرسه اصلا
◍ شوفو كده فى ليسته الحمير
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع بقلبي"   $text == "رفع بقلبي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name بقلبك كده وكده 
◍ يكش بعد يومين ملقكمش مشحورين بعض
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name فى قلب حد غيرك 
◍ الواضح ان الشخص ده محبوب جداا
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل بيستي"   $text == "بيستي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name بيستك 
◍ اتنين ليمووونادا لاحلى بيستين
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name بيست لشخص تانى 
◍ دايما بتيجى متأخر يافواز
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل بيستي"   $text == "ليست بيستي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من البيستات بنجاح 
◍ اهو هنبتدى نجرح فى بعض بقا
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش بيستك اصلا
◍ مش اى اتنين يبقو بيستات بالساهل ياصحبى
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع متخزوق"   $text == "رفع متخزوقه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name المتخزوق الحزين 
◍ يلا تعالى يامتخزوق نستفيد من خبرتك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name متخزوق بالفعل 
◍ وبيبكي ع احزانه اللي باقياله نااو
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل متخزوق"   $text == "تنزيل متخزوقه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ ◍ تم تنزيل العضو $re_name من المتخزوقين بنجاح 
◍ تعالى حبيبى هحتويك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش متخزوق اصلا
◍ شوفو كده يمكن فى ليسته الخاينين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع عبيط"   $text == "رفع عبيطه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name عبيط واهبل 
◍ يارب استرها معاه اصل هو عبيط
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name عبيط بالفعل 
◍ وبيتعالج ع نفقة الدوله
√"
    ]);
  }
}

$message_idd = $update->message->message_id;
if($text == "تنزيل عبيط"   $text == "تنزيل عبيطه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من العبط بنجاح 
◍ تعالى حبيبى انت بقيت اعقل واحد
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش عبيط اصلا
◍ شوفو كده يمكن فى ليسته المهزئين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع خاينه"   $text == "رفع خاينات" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الخاينه بنجاح 
◍ تعالي ياخاينه فضحتينا ولميتي علينا الناس
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name خاينه بالفعل 
◍ ولمت علينا ال يسوي ومايسواش
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل خاينه"   $text == "تنزيل خاينات" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الخاينات بنجاح 
◍ تع خلاص سامحتك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش خاينه اصلا
◍ شوفها كده يمكن فى ليسته المتزوجات
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع خاين"   $text == "رفع خاينين" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الخاين قليل الاصل 
◍ تعالي بينادو عليك ياخاين
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name خاين بالفعل 
◍ وبيتهان من مراته ناو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل خاين"   $text == "تنزيل خاينين" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الخاينين بنجاح 
◍ تع خلاص سامحتك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش خاين اصلا
◍ شوفو كده يمكن فى ليسته المتزوجين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع زوجي"   $text == "رفع زوجي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name زوجي حبيبي 
◍ يلا تعالى يازوجي نقضي شهر العسل في مارينا 
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name زوج بالفعل 
◍ وخاربها ف مارينا نااو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل زوجي"   $text == "تنزيل زوجي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ ◍ تم تنزيل العضو $re_name من قائمة زوجاتك بنجاح 
◍ تعالي يا طليقي خد الدهب بتاعك 🙂💔
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش جوزك اصلا
◍ ولا انتي نسيتيهم من كترهم 🙂💔
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع بنتي"   $text == "رفع بنتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name بنتي ونن عنيا 
◍ تع يبنتي شوفي بابا عاوز اي
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name بنتي بالفعل 
◍ وتعيش في تبات ونبات
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل بنتي"   $text == "تنزيل بنتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من البنوتات بنجاح 
◍ انتي م النهارده لا بنتي ولا اعرفك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش بنتي اصلا
◍ شوفوها كده في ليسته المتوحدين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع فاشل"   $text == "رفع فاشل" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name الفاشل بنجاح 
◍ يلا تعالى يافاشل وسيب الكتاب كده كده هتسقط
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name فاشل بالفعل 
◍ وبيقفل اصفار في كل المواد
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل فاشل"   $text == "تنزيل فاشل" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الفشله بنجاح 
◍ تعالى خد كتابك اهو
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش فاشل اصلا
◍ شوفو كده يمكن فى ليسته الاغبيه
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع دكري"   $text == "رفع دكري" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name دكري وابو عيالي 
◍ يلا تعالى يادكري ادم ابننا بينادي
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name دكري بالفعل 
◍ وادم مطلع عينه
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل دكري"   $text == "تنزيل دكري" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الدكور بنجاح 
◍ تعالى حبيبى خد ابنك ادم
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش دكري اصلا
◍ شوفو كده يمكن فى ليسته الاغبيه
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع ابني"   $text == "رفع ابني" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name ابن بنت بنتي 
◍ تعالي يابني هاتلنا شاي ام حسن 
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name ابني بالفعل 
◍ والان زهقت منه وهوديه دار ايتام
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل ابني"   $text == "تنزيل ابني" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الابناء بنجاح 
◍ شوفلك كلبه بقي
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش ابني اصلا
◍ شوفو كده يمكن فى ليسته اللاجئين
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع قطتي"   $text == "رفع قطتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name قطتي ونن عنيا 
◍ يلا تعالى ياقطتي نشتري تونه هههه
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name قطتي بالفعل 
◍ وبتاكل احلي سمك ناو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل قطتي"   $text == "تنزيل قطتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>◍ تم تنزيل العضو $re_name من القطط بنجاح 
◍ هاتي علبط التونه بتاعتي
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش قطتي اصلا
◍ شوفها كده يمكن فى ليسته الحيوانات
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع وتكه"   $text == "رفع وتكتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name وتكتي بنجاح❤️ 
◍ يلا تعالى ياوتكه نسافر بره مصر
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name وتكه بالفعل 
◍ والكل بيكراش عليها خد بالك 😉😈
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل وتكه"   $text == "تنزيل وتكتي" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من قائمة الوتكات بنجاح 
◍ شوفلك كلبه اجري 😂💔
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مكانتش وتكتك اصلا
◍ بطلو كدب بقي 😂💔
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع رقاصه"   $text == "رفع رقاصة" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name رقاصه بنجاح❤️ 
◍ يلا تعالى يارقاصه هنقطك بالدولارات 
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name رقاصه بالفعل 
◍ والكل عينه عليها خد بالك 😉😈
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل رقاصه"   $text == "تنزيل رقاصة" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من قائمة الرقاصات بنجاح 
◍ شوفلك كلبه اجري 😂💔
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مكانتش رقاصه اصلا
◍ بطلو كدب بقي 😂💔
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع مهزء"   $text == "رفع مهزءه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name المهزء الي الجروب 
◍ تعالي يامهزء ياللي جايبلنا الكلام 
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مهزء بالفعل 
◍ وبيتهان ناو
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "تنزيل مهزء"   $text == "تنزيل مهزءه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من المهزئيين بنجاح 
◍ تعالى حبيبى انت بقيت عاقل
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش مهزء اصلا
◍ شوفو كده يمكن فى ليسته الاغبيه
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "رفع حيوان"   $text == "رفع حيوانه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم رفع العضو $re_name حيوان فرز اول 
◍ يلا تعالى جنينة الحيوانات مستنياك
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name حيوان بالفعل 
◍ ويتحدث من داخل الحديقه
√"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "حيوان"   $text == "تنزيل حيوانه" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"◍ تم تنزيل العضو $re_name من الحيوانات بنجاح 
◍ تعالى حبيبى خد عقلك اهو
√
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◍ العضو $re_name مش حيوان اصلا
◍ شوفو كده يمكن فى ليسته الوتكات
√"  
    ]);
  }
}
$message_idd = $update->message->message_id;
