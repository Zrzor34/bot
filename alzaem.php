<?php

/*
by: πππ¦π¦ππ  π­ππ­ππ
CH : ππΌππΌπ
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
$commands = array('/add','/lock photo','/lock voice','/lock audio','/lock video','/lock link','/lock user','/lock sticker','/lock contact','/lock doc','/promote','/ban','/kick','/pin','/setname',"ΩΩΩ Ψ§ΩΨ΅ΩΨ±","ΩΩΩ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ","ΩΩΩ Ψ§ΩΨ΅ΩΨͺ","ΩΩΩ Ψ§ΩΩΩΨ―ΩΩ","ΩΩΩ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ·","ΩΩΩ Ψ§ΩΨ¬ΩΨ§Ψͺ","ΩΩΩ Ψ§ΩΩΩΩΨ§Ψͺ","Ψ­ΨΈΨ±","Ψ·Ψ±Ψ―","Ψ±ΩΨΉ Ψ§Ψ―ΩΩ","ΨΆΨΉ Ψ§Ψ³Ω","ΨͺΨ«Ψ¨ΩΨͺ","/link","Ψ§ΩΨ±Ψ§Ψ¨Ψ·");
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if(in_array($from_id,$Dev)){
$info =  "Ψ§ΩΩΨ·ΩΨ± Ψ§ΩΨ§Ψ³Ψ§Ψ³Ω π¨π»βπ»";
}elseif($status == "creator"){
$info = "Ψ§ΩΩΩΨ΄Ψ¦ π¨ββοΈ";
}elseif($status == "administrator"){
$info = "Ψ§ΩΩΨ΄Ψ±Ω π¨ββοΈ";
}elseif(in_array($from_id,$admin_user) ){
$info = "Ψ§ΩΨ§Ψ―ΩΩ πββ";
}elseif(in_array($from_id,$manger) ){
$info = "Ψ§ΩΩΨ―ΩΨ± π?ββ";
}elseif(in_array($from_id,$mmyaz) ){
$info = "ΨΉΨΆΩ ΩΩΩΨ² πΌ";
}elseif(in_array($from_id,$developer) ){
$info = "Ψ§ΩΩΨ·ΩΨ± π¨π»βπ»";
}
 //***************************//
// info developers //
$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers."*βΊ*".$developers_infos."\nβββββββ\nπ¨Β¦ Ψ§ΩΩ±ΩΩΨ―ΩΩΩ±Ψͺ :\n" ."*βΊ*`".$developers_info . "`";
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
      'text'=>"π«βΩΩΨ£Ψ³Ω Ψ§ΩΨ¨ΩΨͺ ΩΩΨ³ Ψ§Ψ―ΩΩ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
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
    'text'=>"π―Β¦ ΩΩΨ±Ψ­Ψ¨Ψ’ Ψ’ΩΨ’ Ψ¨ΩΨͺ Ψ’Ψ³ΩΩΩΩ α―πππππΌ "β.β π
π°Β¦ Ψ’Ψ?ΨͺΨ΅ΩΨ’Ψ΅ΩΩ Ψ­ΩΩΨ’ΩΩΫββ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΨ’Ψͺ
πΒ¦ ΩΩΩ Ψ’ΩΨ³ΩΨ¨Ψ’Ω ΩΨ’ΩΨͺΩΨ¬ΩΩΫββ ΩΨ’ΩΨͺΪ―Ψ±Ψ’Ψ± ΩΨ’ΩΨ?...
π¨π½βπ§",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"Ψ’ΩΩΩΨ·ΩΩΨ± πΏ",'url'=>"https://t.me/hossamzrzor"]]
    ]

  ])
  ]);
}
if ($new and $new->id == $bot_id) {
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"π―Β¦ ΩΩΨ±Ψ­Ψ¨Ψ’ Ψ’ΩΨ’ Ψ¨ΩΨͺ Ψ’Ψ³ΩΩΩΩ α―πππππΌ "β.β π
π°Β¦ Ψ’Ψ?ΨͺΨ΅ΩΨ’Ψ΅ΩΩ Ψ­ΩΩΨ’ΩΩΫββ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΨ’Ψͺ
πΒ¦ ΩΩΩ Ψ’ΩΨ³ΩΨ¨Ψ’Ω ΩΨ’ΩΨͺΩΨ¬ΩΩΫββ ΩΨ’ΩΨͺΪ―Ψ±Ψ’Ψ± ΩΨ’ΩΨ?...
βοΈΒ¦ ΩΩΨΉΨ±Ω Ψ’ΩΩΩΨ·ΩΩΨ±  : @hossamzrzor πΏ
π¨π½βπ§",
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
   if($re and $text == "Ψ±ΩΨΉ ΩΨ·ΩΨ±" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt","~Β» (" . "@". $re_user .")  " . "Β»" . "  (". $re_id .") ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ·ΩΨ± ΩΩ Ψ§ΩΨ¨ΩΨͺ 
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "Ψ±ΩΨΉ ΩΨ·ΩΨ±"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ·ΩΨ± ΩΩ ΩΨ¨Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "Ψ±ΩΨΉ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω" and $re_id !=$id_Bot and  in_array($from_id,$Dev)){
file_put_contents("$re_id.txt",$re_id);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω ΩΨΉΩ
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
if($re and $text == "Ψ±ΩΨΉ ΩΨ·ΩΨ±"  || $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ" || $text == "Ψ±ΩΨΉ ΩΩΩΨ²" || $text == "Ψ±ΩΨΉ ΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ ΩΩΨ΄Ψ¦" and $re_id ==$bot_id and in_array($from_id,$Dev)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π? β ΩΨ§ΨͺΨ­Ψ±Ψ¬ΩΨ§Ψ΄ ΩΨ§ΩΩΩ ΩΨ§Ψ±ΩΨ― πΉπΉ
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
$cdevs = count($developers)-1;
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΨ·ΩΨ±ΩΩ" and $cdevs != 0 and in_array($from_id,$Dev)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© Ψ§ΩΩ ΩΨ·ΩΨ± Ψ§ΩΨ§Ψ³Ψ§Ψ³Ω
π€βΨͺΩ Ψ­Ψ°Ω {$cdevs} ΩΨ·ΩΨ±
β
", reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΨ·ΩΨ±ΩΩ" and $cdevs == 0 and in_array($from_id,$Dev)){
$cdevs = count($developers);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΩ ΩΨͺΩ Ψ±ΩΨΉ Ψ§Ω ΩΨ·ΩΨ±ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}

if($re and $text == "Ψ±ΩΨΉ ΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ Ψ§ΩΩΨ―ΩΨ±"  and !in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , "~Β» (" . "@". $re_user .") " . "Β»" . "  (". $re_id .") ". "\n" , FILE_APPEND);
bot( SendMessage ,[
 chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ―ΩΨ± Ψ¨Ψ§ΩΨ¨ΩΨͺ
β"
, parse_mode => markdown ,
 reply_to_message_id =>$message->message_id,
 disable_web_page_preview =>true,
]);
}
}
if($re and $text == "Ψ±ΩΨΉ ΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ Ψ§ΩΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ ΩΩΨ΄Ψ¦" || $text == "Ψ±ΩΨΉ Ψ§ΩΩΩΨ΄Ψ¦" and in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΨ―ΩΨ± ΩΩ ΩΨ¨Ω
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
$derb = file_get_contents("data/$chat_id/sen.txt");
$sww = file_get_contents("data/$chat_id/seen.txt");
$sew = file_get_contents("data/$chat_id/seeen.txt");
if($re and $text == "Ψ±ΩΨΉ Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ" || $text == "Ψ±ΩΨΉ Ψ¨Ψ΅ΩΨ§Ψ­ΩΨ©" || $text == "Ψ±ΩΨΉ Ψ΅ΩΨ§Ψ­ΩΩ" || $text == "Ψ±ΩΨΉ Ψ΅ΩΨ§Ψ­ΩΨ©"){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
file_put_contents("data/$chat_id/sen.txt","name");
file_put_contents("data/$chat_id/seen.txt",$from_id);
file_put_contents("data/$chat_id/seeen.txt",$re_id);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨ­Ψ³ΩΨ§ ΨΉΨ²ΩΨ²Ω $info
πβΩΨ§Ψ°Ψ§ Ψ§ΩΨ§ΩΨ± ΩΨ³ΨͺΨ?Ψ―Ω ΩΨ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ ΩΨ§Ψ­Ψ―Ω ΩΩΨ· Ψ§ΩΨͺ ΨͺΨ?ΨͺΨ§Ψ±ΩΨ§ β
πβΨ§Ψ±Ψ³Ω Ψ§ΩΨ§Ω Ψ§ΩΨ΅ΩΨ§Ψ­ΩΩ Ψ§ΩΨͺΩ ΨͺΨ±ΩΨ―ΩΨ§ ΩΩΨΉΨΆΩ Β» $re_id Ψ ΩΩΩΩΩ Ψ§Ψ±Ψ³Ψ§Ω Ψ±ΩΩΨ² Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ ΩΩΨ±ΩΨΉ π
ΩΩΩ  ΩΩΩΩ  ΩΩΩ  ΩΩΩ  ΩΩΩ
πβΨ­Ψ°Ω Ψ±Ψ³Ψ§Ψ¦Ω Β» {1}
π«βΨ­ΨΈΨ± ΩΨ³ΨͺΨ?Ψ―ΩΩΩ Β» {2}
βοΈβΨͺΨ«Ψ¨ΩΨͺ Ψ±Ψ³Ψ§Ψ¦Ω Β» {3}
πΈβΨ―ΨΉΩΨ© ΩΨ³ΨͺΨ?Ψ―ΩΩΩ Β» {4}
ββΨ§ΨΆΨ§ΩΨ© ΩΨ΄Ψ±ΩΩΩ Β» {5}
β»οΈβΨͺΨΊΩΩΨ± ΩΨΉΩΩΩΨ§Ψͺ Ψ§ΩΨ¬Ψ±ΩΨ¨ Β» {6}
πΈβΨ±ΩΨΉ Ψ¨ΩΨ§ΩΩ Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ
ββΨ§ΩΨΊΨ§Ψ‘ Β» ΩΨ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ§ΩΨ±
ΩΩΩ  ΩΩΩΩ  ΩΩΩ  ΩΩΩ  ΩΩΩ
β οΈβΩΩΨ§Ψ­Ψ·Ψ© : ΩΩΨ±ΩΨΉ Ψ¨ΩΩ Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ ΨΉΨ―Ψ§ Ψ΅ΩΨ§Ψ­ΩΨ§Ψͺ ΩΨ­Ψ―Ψ―Ψ© Β» { ΨͺΩΨ²ΩΩ Ψ΅ΩΨ§Ψ­ΩΨ© } Ψ¨Ψ§ΩΨ±Ψ― β",
]);
}}
if($text == "5" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ Ψ±ΩΨΉ ΩΨ΄Ψ±ΩΩΩ ΩΩΨ·β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
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
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ Ψ­Ψ°Ω Ψ§ΩΨ±Ψ³Ψ§Ψ¦Ω ΩΩΨ· β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
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
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ Ψ―ΨΉΩΨ© ΩΨ³ΨͺΨ?Ψ―ΩΩΩ β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
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
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ ΨͺΨ«Ψ¨ΩΨͺ Ψ±Ψ³Ψ§Ψ¦Ω β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
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
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ ΨͺΨΊΩΩΨ± Ψ§ΩΩΨΉΩΩΩΨ§Ψͺ β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
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
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨Ψ΅ΩΨ§Ψ­ΩΩ Ψ­ΨΈΨ± ΩΨ³ΨͺΨ?Ψ―ΩΩΩ β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
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
if($text == "Ψ±ΩΨΉ Ψ¨ΩΨ§ΩΩ Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¨ββοΈβΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ Β» $sew
πβΩΨ΄Ψ±Ω Ψ¨ΩΨ§ΩΩ Ψ§ΩΨ΅ΩΨ§Ψ­ΩΨ§Ψͺ β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
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
if($text == "Ψ§ΩΨΊΨ§Ψ‘" and $derb == "name"){
if($from_id == $sww){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
πβΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ§ΩΨ± β
πβΨ¨ΩΨ§Ψ³Ψ·Ψ© Β» $info
β 
",
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘" and $mangers_info != NULL and $mangers_info != " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
$cmang = count($mangers)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© Ψ§ΩΩ $info
π€βΨͺΩ Ψ­Ψ°Ω {$cmang} ΩΩ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘
β",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
}}
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘" and $mangers_info == NULL or $mangers_info == " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"*
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΩ ΩΨͺΩ Ψ±ΩΨΉ Ψ§Ω ΩΩΨ―Ψ±Ψ§Ψ‘
β",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΨ―ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ―ΩΨ±"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("~Β» (" . "@". $re_user .")  " . "Β»" . "  (". $re_id .") .","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
??βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ­Ψ°ΩΩ ΩΩ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΨ―ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ―ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ bbbbbb" || $text == "ΨͺΩΨ²ΩΩ nnnnnn" and !in_array($re_id,$manger)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨ§ΩΩ ΩΩΨ³ ΩΨ―ΩΨ±
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΨ·ΩΨ±"  and in_array($re_id,$developer)){
	$re_id_info = file_get_contents("data/developers/$chat_id.txt");
	$devr = file_get_contents("data/developers/$chat_id/developer.txt");
	$devr1 = explode("             \n",$devr);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("~Β» (" . "@". $re_user .") " . "Β»" . "  (". $re_id .") .","",$devr1);
	file_put_contents("data/developers/developer.txt",$str);
			file_put_contents("data/developers/developers.txt",$str);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ ΨͺΩΨ²ΩΩΩ ΩΩ Ψ§ΩΩΨ·ΩΨ±ΩΩ
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if(in_array($from_id,$Dev)){
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΨ·ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ±Ψ―ΩΨ³Ψ³Ψ³" and !in_array($re_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨ§ΩΩ ΩΩΨ³ ΩΨ·ΩΨ± ΩΩΨͺΩ Ψ­Ψ°ΩΩ !
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω" || $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ± Ψ§ΩΨ§Ψ³Ψ§Ψ³Ω"  and in_array($re_id,$Dev)){
			file_put_contents("$re_id.txt","");
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ ΨͺΩΨ²ΩΩΩ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , "~Β» ([" . "@". $re_user ."]) " . "Β»" . "  (`". $re_id ."`) ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ Ψ§Ψ―ΩΩ ΩΩ Ψ§ΩΨ¨ΩΨͺ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if ($re and $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ" and in_array($re_id,$admin_user)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ Ψ§Ψ―ΩΩ Ψ¨Ψ§ΩΨ¨ΩΨͺ ΩΨ¨ΩΨ§
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($text == "ΩΨ³Ψ­ Ψ§ΩΨ§Ψ―ΩΩΩΩ" or $text == "ΩΨ³Ψ­ Ψ§ΩΨ§Ψ―ΩΩΩΨ©" ){
$cadmins = count($admin_users)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© Ψ§ΩΩ $info
π€βΨͺΩ Ψ­Ψ°Ω {$cadmins} Ψ§Ψ―ΩΩ
β",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
file_put_contents("data/admin_user/$chat_id.txt","");
	file_put_contents("data/admin_user/$chat_id/mange.txt","");
	}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§Ψ―ΩΩ" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("| {[" . "@". $re_user ."]}  " . "Β»" . "  (`". $re_id ."`) .","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ ΨͺΩΨ²ΩΩΩ ΩΩ Ψ§ΩΨ§Ψ―ΩΩΩΩ
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "ΨͺΩΨ²ΩΩ Ψ§Ψ―ΩΩ"  and !in_array($re_id,$admin_user)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨ§ΩΩ ΩΩΨ³ Ψ§Ψ―ΩΩ ΩΩΨͺΩ ΨͺΩΨ²ΩΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "Ψ±ΩΨΉ ΩΩΩΨ²"  and !in_array($re_id,$mmyaz)){
file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , "| {[" . "@". $re_user ."]}  " . "Β»" . "  (`". $re_id ."`) ". "\n" , FILE_APPEND);
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΨΉΨΆΩ ΩΩΩΨ²
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "Ψ±ΩΨΉ ΩΩΩΨ²"  and in_array($re_id,$mmyaz)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ Ψ±ΩΨΉΩ ΩΩΩΨ² ΩΩ ΩΨ¨Ω
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "ΩΨ³Ψ­ Ψ§ΩΩΩΩΨ²ΩΩ" ){
$cmmyz = count($mmyazs)-1;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© Ψ§ΩΩ $info
π€βΨͺΩ Ψ­Ψ°Ω {$cmmyz} ΩΩΩΨ²
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,  
]);
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
}}

if($re and $text == "ΨͺΩΨ²ΩΩ ΩΩΩΨ²"   and in_array($re_id,$mmyaz)){
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("| {[" . "@". $re_user ."]}  " . "Β»" . "  (`". $re_id ."`) .","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot( SendMessage ,[ chat_id =>$chat_id,
     text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨͺΩ ΨͺΩΨ²ΩΩΩ ΩΩ Ψ§ΩΩΩΩΨ²ΩΩ
β
",
 parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "ΨͺΩΨ²ΩΩ ΩΩΩΨ²" and !in_array($re_id,$mmyaz)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ§ΩΨΉΨΆΩ Β» [$re_user]
π€βΨ§ΩΨ―ΩΩ Β» {$re_id}
πβΨ§ΩΩ ΩΩΨ³ ΩΩΩΨ² ΩΨͺΩΨ²ΩΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
if($status == "creator" and in_array($from_id,$Dev)){
if($text == "ΨͺΩΨ²ΩΩ Ψ§ΩΩΩ" or $text == "Ψ­Ψ°Ω Ψ§ΩΩΩ"){
$CMM = count($mmyazs)-1;
$CM = count($mangers)-1;
$CA = count($admin_users)-1;
$CALL = $CA + $CM + $CMM;
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨ¨ΩΨ§Ψ³Ψ·ΩΨ© $info
ΩΩΩ ΩΩΩ ΩΩΩ ΩΩΩΩ ΩΩΩΩ 
πβΨͺΩ Ψ­Ψ°Ω {$CA} ΩΩ Ψ§ΩΨ§Ψ―ΩΩΩΩ
πβΨͺΩ Ψ­Ψ°Ω {$CM} ΩΩ Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘
πβΨͺΩ Ψ­Ψ°Ω {$CMM} ΩΩ Ψ§ΩΩΩΩΨ²ΩΩ
ΩΩΩ ΩΩΩ ΩΩΩ ΩΩΩΩ ΩΩΩΩ 
πβΨͺΩ Ψ­Ψ°Ω {$CALL} ΩΩ Ψ§ΩΩΨ±ΩΩΨΉΩΩ
πΈβΨͺΩ Ψ­Ψ°Ω Ψ§ΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β
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
if($text == "Ψ±ΩΨΉ ΩΨ―ΩΨ±" || $text == "Ψ±ΩΨΉ ΩΩΨ΄Ψ¦" or $text == "Ψ±ΩΨΉ Ψ§ΩΨ§Ψ―ΩΩΩΩ" or $text == "Ψ±ΩΨΉ Ψ§ΩΨ§Ψ―ΩΩΩΨ©" or $text == "ΨͺΩΨΉΩΩ"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΨ§Ψ°Ψ§ Ψ§ΩΨ§ΩΨ± ΩΩΨ³ ΩΩ
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if( !in_array($from_id,$Dev)){
if($text == "Ψ±ΩΨΉ ΩΨ·ΩΨ±" || $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ±" or $text == "Ψ±ΩΨΉ ΩΩΨ΄Ψ¦" or $text == "Ψ§ΩΩΨ·ΩΨ±ΩΩ" or $text == "ΩΨ³Ψ­ ΩΨ·ΩΨ±"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΨ§Ψ°Ψ§ Ψ§ΩΨ§ΩΨ± ΩΩΨ³ ΩΩ
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ" || $text == "Ψ±ΩΨΉ ΩΩΩΨ²" or $text == "Ω1" or $text == "Ω2" or $text == "Ω3" or $text == "Ω4" or $text == "Ω5" or $text == "ΩΩΩ Ψ§ΩΨ΅ΩΨ±" or $text == "ΨͺΩΨ²ΩΩ ΩΩΩΨ²" or $text == "ΨͺΩΨ²ΩΩ Ψ§Ψ―ΩΩ" or $text == "ΩΩΩ Ψ§ΩΩΩΨ―ΩΩ" or $text == "ΩΨͺΨ­ Ψ§ΩΩΩΨ―ΩΩ" or $text == "ΨͺΩΨΉΩΩ Ψ§ΩΨ§ΩΨ―Ω" or $text == "ΨͺΨΉΨ·ΩΩ Ψ§ΩΨ§ΩΨ―Ω"){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΨ§Ψ°Ψ§ Ψ§ΩΨ§ΩΨ± ΩΩΨ³ ΩΩ
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}}
 
if(in_array($from_id,$Dev)){
if($text == "Ψ§ΩΩΨ·ΩΨ±ΩΩ" and $cdevs != 0){
if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
π¨π»βπ»βΨ§ΩΩΨ·ΩΨ±ΩΩ {$cdevs} : 
$developers_infos
",
]);
}
}
if($text == "Ψ§ΩΩΨ·ΩΨ±ΩΩ" and $cdevs == 0 || $developers_info == ""){
if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
 π¬βΨΉΨ°Ψ±Ψ§ ! ΩΩ ΩΨͺΩ Ψ±ΩΨΉ Ψ§Ω ΩΨ·ΩΨ±ΩΩ
β
",
]);
}
}
}
$CM = count($mangers)-1;
if($text == "Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘" and $CM != 0){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
π¨π»βπ»βΨ§ΩΩΨ―Ψ±Ψ§Ψ‘ [{$CM}] : 
$mangers_infos
",
]);
}
}
}
if($text == "Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘" and $CM == 0){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>
"
π¬βΨΉΨ°Ψ±Ψ§ ! ΩΩ ΩΨͺΩ Ψ±ΩΨΉ Ψ§Ω ΩΨ―Ψ±Ψ§Ψ‘
β",
]);
}
}
}
$CA = count($admin_users)-1;
if($text == "Ψ§ΩΨ§Ψ―ΩΩΩΩ" || $text == "Ψ§ΩΨ§Ψ―ΩΩΩΨ©" and $admin_users_infos != null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
πβΩΨ§Ψ¦ΩΨ© Ψ§ΩΨ§Ψ―ΩΩΩΨ© [{$CA}] :
$admin_users_infos",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
if($text == "Ψ§ΩΨ§Ψ―ΩΩΩΩ" || $text == "Ψ§ΩΨ§Ψ―ΩΩΩΨ©" and $admin_users_infos == null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
πβNotDirector - *Admins* -
πβΩΨ§ΩΩΨ¬Ψ― ΩΨ¬ΩΨ― - *Ψ§ΩΨ§Ψ―ΩΩΩΩ* -
β",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
$CMM = count($mmyazs)-1;
if($text == "Ψ§ΩΩΩΩΨ²ΩΩ" and $mmyazs_infos != null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
πβΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΩΨ²ΩΩ [{$CMM}] :
$mmyazs_infos",
 parse_mode =>"markdown", disable_web_page_preview =>true,
]);
}
}
}
if($text == "Ψ§ΩΩΩΩΨ²ΩΩ" and $mmyazs_infos == null){
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc ==  group  | $tc ==  supergroup ){
bot( sendmessage ,[
  chat_id =>$chat_id,
  text =>"
πβNotDirector - *VipMember* -
πβΩΨ§ΩΩΨ¬Ψ― ΩΨ¬ΩΨ― - *Ψ§ΩΩΩΩΨ²ΩΩ* -
β",
]);
}
}
}
 elseif($text  == "ΩΨͺΩ" && $rt or $text  == "silent" && $rt or $text  == "ΨͺΩΩΩΨ―" && $rt){
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
 text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» [$re_user]
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» {[$re_id]}
π Β¦ ΨͺΩ ΩΨͺΩΩ/ΨͺΩΩΩΨ―Ω
βοΈ
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
	 text =>"βοΈβΨ?Ψ·Ψ£ Ψ§ΩΨ¨ΩΨͺ ΩΨ§ ΩΨΉΩΩ Ψ¨Ψ³Ψ¨Ψ¨ ΨΉΨ―Ω ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
πβΨ§Ψ±Ψ³Ω ΩΩΩΨ© ΨͺΩΨΉΩΩ ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
 }
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>" ΩΨ§ΩΩΩΩΩΩ ΨͺΩΩΩΨ― Ψ§ΩΨ§Ψ―ΩΩΩΨ© Ψ§Ω Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘ Ψ§Ω  Ψ§Ω Ψ§ΩΩΩΩΨ²ΩΩ",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text  , "ΩΨͺΩ ΩΩΨ―Ψ© ") !== false && $rt or strpos($text  , "ΨͺΩΩΩΨ― ΩΩΨ―Ψ© ") !== false && $rt) {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt !=  creator  && $statusrt !=  administrator  && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace([ ΩΨͺΩ ΩΩΨ―Ψ©  ,  ΨͺΩΩΩΨ― ΩΩΨ―Ψ© ],  ,$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	bot( sendmessage ,[
	 chat_id =>$chat_id,
 text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» [$re_user]
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» {[$re_id]}
π Β¦ ΨͺΩ ΩΨͺΩΩ ΩΩΨ―Ψ© $we Ψ―ΩΩΩΩ
βοΈ
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
	 text =>"βοΈβΨ?Ψ·Ψ£ Ψ§ΩΨ¨ΩΨͺ ΩΨ§ ΩΨΉΩΩ Ψ¨Ψ³Ψ¨Ψ¨ ΨΉΨ―Ω ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
πβΨ§Ψ±Ψ³Ω ΩΩΩΨ© ΨͺΩΨΉΩΩ ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
else
{
bot( sendmessage ,[
	 chat_id =>$chat_id,
	 text =>"Ψ?Ψ·Ψ§β οΈ
ββββββ
ΩΨ¬Ψ¨ Ψ§Ψ?ΨͺΩΨ§Ψ± ΨΉΨ―Ψ― Ψ¨ΩΩ 1 Ψ§ΩΩ 1000",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
else
{
bot( sendmessage ,[
  chat_id  => $chat_id,
  text =>"ΩΨ§ΩΩΩΩΩΩ ΨͺΩΩΩΨ― Ψ§ΩΨ§Ψ―ΩΩΩΨ© Ψ§Ω Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘ Ψ§Ω Ψ§ΩΩΨ·ΩΨ±ΩΩ Ψ§Ω Ψ§ΩΩΩΩΨ²ΩΩ",
 reply_markup =>$inlinebutton,
   ]);
}
}
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$tq = str_replace("Ψ§ΩΨΊΨ§Ψ‘ ΨͺΩΩΩΨ― ", "$tq", $text);
if($text == "Ψ§ΩΨΊΨ§Ψ‘ ΨͺΩΩΩΨ― $tq" and preg_match( /([0-9])/i ,$tq)){
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
 text =>"ππΌβββΨ§ΩΨΉΨΆΩ Β» {$tq}
π€βΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ ΨͺΩΩΩΨ―Ω
β
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
$re_user= str_replace("Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩ ", "$re_user", $text);
if($text == "Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩ $re_user" and preg_match( /([0-9])/i ,$re_user)){
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
 text =>"ππΌβββΨ§ΩΨΉΨΆΩ Β» {$re_user}
π€βΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩΩ
β
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
if($text  == "Ψ§ΩΨΊΨ§Ψ‘ ΨͺΩΩΩΨ―" && $rt or $text  == "Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩ" && $rt or $text  == "Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨͺΩΩΩΨ―" && $rt){
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
 text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» [$re_user]
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» {[$re_id]}
π Β¦ ΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ ΩΨͺΩΩ/ΨͺΩΩΩΨ―Ω
βοΈ
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
	 text =>"βοΈβΨ?Ψ·Ψ£ Ψ§ΩΨ¨ΩΨͺ ΩΨ§ ΩΨΉΩΩ Ψ¨Ψ³Ψ¨Ψ¨ ΨΉΨ―Ω ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
πβΨ§Ψ±Ψ³Ω ΩΩΩΨ© ΨͺΩΨΉΩΩ ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}

if( $text  == "ΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΩΨ―ΩΩ" or $text == "Ψ§ΩΩΩΩΨ―ΩΩ") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"
πβΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΩΨ―ΩΩ :
$result",
 parse_mode =>"MarkDown",
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
if( $text  == "ΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΨͺΩΩΩΩ" or $text == "Ψ§ΩΩΩΨͺΩΩΩΩ") {
if ( $status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"
πβΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΩΨͺΩΩΩΩ :
$result",
 parse_mode =>"MarkDown",
 reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
if( $text  == "ΩΨ³Ψ­ Ψ§ΩΩΩΨͺΩΩΩΩ" or $text == "ΩΨ³Ψ­ Ψ§ΩΩΩΨ§ΨͺΩΩ") {
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
π¬βΨ¨ΩΨ§Ψ³Ψ·Ψ© $keees
π€βΨͺΩ ΨͺΩΨΈΩΩ Ψ³ΩΨ© Ψ§ΩΩΩΨͺΩΩΩΩ
β
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
	 text =>"βοΈβΨ?Ψ·Ψ£ Ψ§ΩΨ¨ΩΨͺ ΩΨ§ ΩΨΉΩΩ Ψ¨Ψ³Ψ¨Ψ¨ ΨΉΨ―Ω ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
πβΨ§Ψ±Ψ³Ω ΩΩΩΨ© ΨͺΩΨΉΩΩ ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ©",
   reply_to_message_id =>$message_id,
 reply_markup =>$inlinebutton,
 ]);
}
}
}
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "Ψ­ΨΈΨ±" or $text == "/kick" or $text=="Ψ·Ψ±Ψ―"){
    bot( sendMessage ,[
       chat_id =>$chat_id,
       text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩ Ψ­ΨΈΨ±Ω 
βοΈ",
   reply_to_message_id =>$mid
      ]);
    bot( kickChatMember ,[
         chat_id =>$chat_id,
         user_id =>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ­ΨΈΨ±"){
    bot( sendMessage ,[
       chat_id =>$chat_id,
       text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user 
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ Ψ­ΨΈΨ±Ω 
βοΈ",
   reply_to_message_id =>$mid
      ]);
    bot( unbanChatMember ,[
         chat_id =>$chat_id,
         user_id =>$re_id
      ]);
    }
  if($text == "/promote" or $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ"){
      bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user 
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩΨͺ ΨͺΨ±ΩΩΨͺΩ ΩΩΨ΅Ψ¨Ψ­ Ψ§Ψ―ΩΩ 
βοΈ",
   reply_to_message_id =>$mid
      ]);
      bot( promoteChatMember ,[
           chat_id =>$chat_id,
           user_id =>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ΨΆΨΉ Ψ§Ψ³Ω ", "$aname", $text);
  if($text == "/setname $ename"){
    bot( setChatTitle ,[
       chat_id =>$chat_id,
       title =>$ename 
      ]);
  }
   if($text == "ΨΆΨΉ Ψ§Ψ³Ω $aname"){
     bot( setChatTitle ,[
       chat_id =>$chat_id,
       title =>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "ΨͺΨ«Ψ¨ΩΨͺ"){
    bot( pinChatMessage ,[
         chat_id =>$chat_id,
         message_id =>$re_msgid
      ]);
   }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "Ψ­ΨΈΨ±" or $text == "/kick" or $text=="Ψ·Ψ±Ψ―"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩ Ψ­ΨΈΨ±Ω 
βοΈ",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ­ΨΈΨ±"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user 
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩ Ψ§ΩΨΊΨ§Ψ‘ Ψ­ΨΈΨ±Ω 
βοΈ",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
    }
  if($text == "/promote" or $text == "Ψ±ΩΨΉ Ψ§Ψ―ΩΩ"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"π€Β¦ Ψ§ΩΨΉΨΆΩ Β» @$re_user 
π«Β¦ Ψ§ΩΨ§ΩΨ―Ω Β» ( $re_id )
π Β¦ ΨͺΩΨͺ ΨͺΨ±ΩΩΨͺΩ ΩΩΨ΅Ψ¨Ψ­ Ψ§Ψ―ΩΩ 
βοΈ",
  'reply_to_message_id'=>$mid
      ]);
      bot('promoteChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ΨΆΨΉ Ψ§Ψ³Ω ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
  }
   if($text == "ΨΆΨΉ Ψ§Ψ³Ω $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "ΨͺΨ«Ψ¨ΩΨͺ"){
    bot('pinChatMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
      ]);
   }
   if($text == "/lock photo" or $text == "ΩΩΩ Ψ§ΩΨ΅ΩΨ±"){
    file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ΅ΩΨ± 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo" or $text == "ΩΨͺΨ­ Ψ§ΩΨ΅ΩΨ±"){
    file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ΅ΩΨ± 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker" or $text == "ΩΩΩ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/open sticker" or $text == "ΩΨͺΨ­ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/lock contact" or $text == "ΩΩΩ Ψ§ΩΨ¬ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ¬ΩΨ§Ψͺ Ψ§ΩΨ§ΨͺΨ΅Ψ§Ω 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact" or $text == "ΩΨͺΨ­ Ψ§ΩΨ¬ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ¬ΩΨ§Ψͺ Ψ§ΩΨ§ΨͺΨ΅Ψ§Ω 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock doc" or $text == "ΩΩΩ Ψ§ΩΩΩΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΩΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/open doc" or $text == "ΩΨͺΨ­ Ψ§ΩΩΩΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΩΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/lock fwd" or $text == "ΩΩΩ Ψ§ΩΨͺΩΨ¬ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨͺΩΨ¬ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open fwd" or $text == "ΩΨͺΨ­ Ψ§ΩΨͺΩΨ¬ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨͺΩΨ¬ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock voice" or $text == "ΩΩΩ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/open voice" or $text == "ΩΨͺΨ­ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/lock link" or $text == "ΩΩΩ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ·"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ· 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open link" or $text == "ΩΨͺΨ­ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ·"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ· 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock audio" or $text == "ΩΩΩ Ψ§ΩΨ΅ΩΨͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ΅ΩΨͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open audio" or $text == "ΩΨͺΨ­ Ψ§ΩΨ΅ΩΨͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ΅ΩΨͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock video" or $text == "ΩΩΩ Ψ§ΩΩΩΨ―ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΩΨ―ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open video" or $text == "ΩΨͺΨ­ Ψ§ΩΩΩΨ―ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΩΨ―ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock user" or $text == "ΩΩΩ Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open user" or $text == "ΩΨͺΨ­ Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "/lock mark" or $text == "ΩΩΩ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open mark" or $text == "ΩΨͺΨ­ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/lock bots" or $text == "ΩΩΩ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΩΩ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots" or $text == "ΩΨͺΨ­ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ππΌββοΈΒ¦ Ψ£ΩΩΨ§ ΨΉΨ²ΩΨ²Ω 
π‘Β¦ ΨͺΩ ΩΨͺΨ­ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ 
β",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text=="/help"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"β

 ββββΒ¦ ΩΩΨ³ΩΨ’Ψ±Ψͺ Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΨΉΨ’ΩΩΩΫββ β

π¨ββοΈΒ¦ Ω1 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ’Ψ―Ψ’Ψ±ΩΫββ
πΒ¦ Ω2 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΨΉΨ―Ψ’Ψ―Ψ’Ψͺ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΩΫββ
π‘Β¦ Ω3 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ­ΩΩΨ’ΩΩΫββ
βΒ¦ Ω4 Β» Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΨΉΨ’ΩΩΩΫββ
πΉΒ¦ Ω Ψ§ΩΩΨ·ΩΨ± Β»  Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΩΩΨ·ΩΩΨ±


 ββββΒ¦ Ψ±Ψ’Ψ³ΩΩΩΩ ΩΩΨ’Ψ³ΩΨͺΩΨ³ΩΨ’Ψ± β { @hossamzrzor } β",
      ]);
   }
  if($text=="Ψ§ΩΨ§ΩΨ§ΩΨ±"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"β

 ββββΒ¦ ΩΩΨ³ΩΨ’Ψ±Ψͺ Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΨΉΨ’ΩΩΩΫββ β

π¨ββοΈΒ¦ Ω1 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ’Ψ―Ψ’Ψ±ΩΫββ
πΒ¦ Ω2 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΨΉΨ―Ψ’Ψ―Ψ’Ψͺ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΩΫββ
π‘Β¦ Ω3 Β» Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ­ΩΩΨ’ΩΩΫββ
βΒ¦ Ω4 Β» Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΨΉΨ’ΩΩΩΫββ
πΉΒ¦ Ω Ψ§ΩΩΨ·ΩΨ± Β»  Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΩΩΨ·ΩΩΨ±


 ββββΒ¦ Ψ±Ψ’Ψ³ΩΩΩΩ ΩΩΨ’Ψ³ΩΨͺΩΨ³ΩΨ’Ψ± β { @hossamzrzor } β",
      ]);
  }
 }
}
if($text=="/setting" or $text=="/setting$e" or $text=="Ψ§ΩΨ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ"){

  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"βββ
π?πΎΒ¦ Ψ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ Ψ§ΩΩΨ¬ΩΩΨΉΩ : 


βοΈΒ¦ ΩΩΩΩΩ Β» l
βοΈΒ¦ ΩΩΨͺΩΨ­ Β» o

βββ

πΈΒ¦ Ψ§ΩΨ΅ΩΨ± : $photo1
ποΈΒ¦ Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ : $sticker1

πΉΒ¦ Ψ§ΩΩΩΨ―ΩΩ : $video1
π‘Β¦ Ψ§ΩΨ±ΩΨ§Ψ¨Ψ· :  $link1

βοΈΒ¦ Ψ§ΩΨ¬ΩΨ§Ψͺ : $contact1
πΒ¦ Ψ§ΩΩΩΩΨ§Ψͺ :  $doc1

β©οΈΒ¦ Ψ§ΩΨͺΩΨ¬ΩΩ : $fwd1
πΒ¦ Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ : $bsma1

πΒ¦ Ψ§ΩΨ΅ΩΨͺ : $audio1
βοΈΒ¦ Ψ§ΩΩΨΉΨ±Ω : $tag1

πΒ¦ Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ : $mark1
πΒ¦ Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ : $bots1

βββ
",
]);
}
}
if($bot == "administrator"){
 if ($you == "administrator" or $you == "creator") {
if($text == "/add" or $text == "/add$e" or $text=="ΨͺΩΨΉΩΩ"){
if(!in_array($chat_id, $groups)){
  file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no");
  file_put_contents("data/groups.txt", "$chat_id\n",FILE_APPEND);
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π?Β¦ ΨͺΩΩ ΨͺΩΩΩΨΉΩΩΩΩ Ψ’ΩΩΩΨ¬ΩΩΩΨΉΩΫββ 
βοΈ",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
if (in_array($chat_id, $groups)) {
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"πΒ¦ Ψ§ΩΩΨ¬ΩΩΨΉΩ Ψ¨Ψ§ΩΨͺΨ£ΩΩΨ― βοΈ ΨͺΩ ΨͺΩΨΉΩΩΩΨ§",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
}
}
}
 if($text == "Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π?Β¦ ΨΉΨ―Ψ― Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ Ψ§ΩΩΩΨΉΩΨ© Β» $c  βΌ"
    ]);
 }
if($text == "Ψ§Ψ°Ψ§ΨΉΩ" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π­Β¦ Ψ­Ψ³ΩΩΨ§ Ψ§ΩΨ§Ω Ψ§Ψ±Ψ³Ω Ψ§ΩΩΩΩΨ΄Ω ΩΩΨ§Ψ°Ψ§ΨΉΩ ΩΩΩΨ¬ΩΩΨΉΨ§Ψͺ 
π"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "Ψ§Ψ°Ψ§ΨΉΩ" and $mode=="bc" and $for == $sudo){
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
if($text=="ΩΩΩΨΉΩ" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π¨π½βπ§Β¦ Ψ§ΩΩΩΨ§ Ψ¨ΩΩ ΨΉΨ²ΩΨ²Ω :

πΒ¦ Ψ§ΩΨ§Ψ³Ω : $name
πΒ¦ Ψ§ΩΩΨΉΨ±Ω: @$user
π·Β¦ Ψ§ΩΨ§ΩΨ―Ω : ( $id )
πΒ¦ Ψ±ΨͺΨ¨ΨͺΩ : ΩΩΨ΄Ψ¦ Ψ§ΩΩΨ¬ΩΩΨΉΨ© π 
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΩ : ( $chat_id )
π¨Β¦ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© : $message->message_id
ππ»Β¦ ΩΩΨ·ΩΩΨ± Ψ§ΩΨ¨ΩΨͺ : @hossamzrzor
π¨π½βπ§
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="ΩΩΩΨΉΩ" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π¨π½βπ§Β¦ Ψ§ΩΩΩΨ§ Ψ¨ΩΩ ΨΉΨ²ΩΨ²Ω :

πΒ¦ Ψ§ΩΨ§Ψ³Ω : $name
πΒ¦ Ψ§ΩΩΨΉΨ±Ω : @$user
π·Β¦ Ψ§ΩΨ§ΩΨ―Ω : ( $id )
πΒ¦ Ψ±ΨͺΨ¨ΨͺΩ : Ψ§Ψ―ΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ© π 
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΩ : ( $chat_id )
π¨Β¦ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© : $message->message_id
ππ»Β¦ ΩΩΨ·ΩΩΨ± Ψ§ΩΨ¨ΩΨͺ : @hossamzrzor
π¨π½βπ§",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="ΩΩΩΨΉΩ" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π¨π½βπ§Β¦ Ψ§ΩΩΩΨ§ Ψ¨ΩΩ ΨΉΨ²ΩΨ²Ω :

πΒ¦ Ψ§ΩΨ§Ψ³Ω : $name
πΒ¦ Ψ§ΩΩΨΉΨ±Ω : @$user
π·Β¦ Ψ§ΩΨ§ΩΨ―Ω : ( $id )
πΒ¦ Ψ±ΨͺΨ¨ΨͺΩ : ΨΉΨΆΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ© π 
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΩ : ( $chat_id )
π¨Β¦ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© : $message->message_id
ππ»Β¦ ΩΩΨ·ΩΩΨ± Ψ§ΩΨ¨ΩΨͺ : @hossamzrzor
π¨π½βπ§",
'reply_to_message_id'=>$message->message_id, 
]);
}
 
$rnd = rand(1,999999999999999999);
if($text=="Ψ§ΩΨ―Ω" or $text == "id"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://devmemo0.000webhostapp.com//$rnd.jpg"; // Ψ±Ψ§Ψ¨Ψ· Ψ§Ψ³ΨͺΨΆΨ§ΩΨͺΩ
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
π€Β¦ Ψ§Ψ³ΩΩΩ Β» $name
π«Β¦ ΩΨΉΨ±ΩΩ Β» @$user
π·Β¦ Ψ§ΩΨ―ΩΩ  Β» $id
π¨Β¦ Ψ±Ψ³Ψ§Ψ¦Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© Β»  $message->message_id
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΨ© Β» $chat_id
β",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
$rnd = rand(1,999999999999999999);
if($text=="Ψ΅ΩΨ±ΨͺΩ"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://devmemo0.000webhostapp.com//$rnd.jpg"; // Ψ±Ψ§Ψ¨Ψ· Ψ§Ψ³ΨͺΨΆΨ§ΩΨͺΩ
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>" ",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
if($text == "/link" or $text == "Ψ§ΩΨ±Ψ§Ψ¨Ψ·"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"πΒ¦Ψ±Ψ§Ψ¨ΩΨ· Ψ§ΩΩΩΩΨ¬ΩΩΩΩΨΉΩ π―
πΏΒ¦$t :

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
'text'=>"π€Β¦ Ψ’ΩΨΉΨΆΩΩ : @$user
π€Β¦ Ψ§ΩΨ§ΩΨ―Ω : $id 
π«Β¦ ΩΩΩΩΩΩΨΉ Ψ’ΨΆΩΨ’ΩΩΫ Ψ’ΩΨ¨ΩΨͺΨ’Ψͺ 
πΒ¦ ΨͺΩ Ψ·ΩΨ±Ψ― Ψ’ΩΨ¨ΩΨͺ 
β",
]);
}
if(preg_match('/^(ΩΨ³Ψ­) (.*)/', $text, $delmsg) and $from_id == $sudo){
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
	 'text'=>'Ψ³Ψ­Ω ΩΨΉΨ―Ω πΉβπΏ',
	 'message_id'=>$message->edited_message->message_id,
	 'reply_to_message_id'=>$update->edited_message->message_id,
	 ]);
 }
if($rep && $text == "Ψ§ΩΨ―Ω" or $text == "Ψ§ΩΨ―ΩΩ"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => " $re_id ",
]);
}
if($text == "Ω1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" β  ( Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ±ΩΨΉ ΩΨ’ΩΨͺΩΨ²ΩΩ )
      
β{ Ψ±ΩΨΉ Ψ§Ψ―ΩΩ ~ ΨͺΩΨ²ΩΩ Ψ§Ψ―ΩΩ } 
β{ Ψ±ΩΨΉ ΩΨ―ΩΨ± ~ ΨͺΩΨ²ΩΩ ΩΨ―ΩΨ± } 
β{ Ψ±ΩΨΉ ΩΩΩΨ² ~ ΨͺΩΨ²ΩΩ ΩΩΩΨ² } 
β{ Ψ±ΩΨΉ ΩΨ·ΩΨ± ~ ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ± } 
β{ Ψ±ΩΨΉ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω ~ ΨͺΩΨ²ΩΩ ΩΨ·ΩΨ± Ψ§Ψ³Ψ§Ψ³Ω } 
β{ Ψ±ΩΨΉ ΩΩΨ΄Ψ¦ ~ ΨͺΩΨ²ΩΩ ΩΩΨ΄Ψ¦ } 



βΩβββββ
      
βΩ
β ( Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ­ΨΈΩΨ± ΩΨ’ΩΨ·ΩΨ±Ψ― )
βΩ
      
β  { Ψ·Ψ±Ψ― Ψ¨Ψ§ΩΨ±Ψ―  } : ΩΨ·Ψ±Ψ― Ψ§ΩΨΉΨΆΩ 
β { Ψ­ΨΈΨ± Ψ¨Ψ§ΩΨ±Ψ―  } : ΩΨ­ΨΈΨ± ΩΨ·Ψ±Ψ― Ψ§ΩΨΉΨΆΩ 
β { Ψ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ­ΨΈΨ± Ψ¨Ψ§ΩΨ±Ψ― } : ΩΨ§ΩΨΊΨ§Ψ‘ Ψ§ΩΨ­ΨΈΨ± ΨΉΩ ΨΉΨΆΩ 

βΩβββββ

π―β Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ω2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"π¨π½ββοΈΒ¦  Ψ§ΩΨ§ΩΨ± Ψ§ΩΩΨΆΨΉ ΩΩΩΨ¬ΩΩΨΉΩ ::

π?Β¦Ωβββββ  
π­Β¦ ΨΆΨΉ Ψ§Ψ³Ω :β ΩΩΨΆΨΉ Ψ§Ψ³Ω  
  
π­Β¦ Ψ§ΩΩΨ±Ψ§Ψ¨ΩΨ· :β  ΩΨΉΨ±ΨΆ Ψ§ΩΨ±Ψ§Ψ¨Ψ·  
π?Β¦Ωβββββ

π¨π½βπ»Β¦  Ψ§ΩΨ§ΩΨ± Ψ±Ψ€ΩΨ© Ψ§ΩΨ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ ::

π―Β¦ Ψ§ΩΩΨ·ΩΨ± : ΩΨΉΨ±ΨΆ ΩΨΉΩΩΩΨ§Ψͺ Ψ§ΩΩΨ·ΩΨ± 
π―Β¦ ΩΨΉΩΩΩΨ§ΨͺΩ :βΩΨΉΨ±ΨΆ ΩΨΉΩΩΩΨ§ΨͺΩ  
π―Β¦ Ψ§ΩΨ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ : ΩΨΉΨ±ΨΆ Ψ§ΨΉΨ―Ψ§Ψ―Ψ§Ψͺ Ψ§ΩΩΨ¬ΩΩΨΉΩ 
π―Β¦ Ψ§ΩΩΨ¬ΩΩΨΉΩ : ΩΨΉΨ±ΨΆ ΩΨΉΩΩΩΨ§Ψͺ Ψ§ΩΩΨ¬ΩΩΨΉΩ 

βββββββ
π―Β¦ Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ω3"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"β‘οΈ Ψ§ΩΨ§ΩΨ± Ψ­ΩΨ§ΩΨ© Ψ§ΩΩΨ¬ΩΩΨΉΩ β‘οΈ
π―|Ωββββ
π―|οΈ ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΨ΅ΩΨͺ
π―| ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΩΩΩΩΨ―ΩΩ
π―| ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΩΨ΅ΩΩΩΨ± 
π―| ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΩΩΨ΅ΩΨ§Ψͺ
π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΨ±ΩΨ§Ψ¨Ψ·
π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΨ¨ΩΨͺΨ§Ψͺ
π―| οΈΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΩΨΉΨ±ΩΨ§Ψͺ
π―|| ΩΩΩ ~ ΩΨͺΨ­ :  Ψ§ΩΨͺΩΨ¬ΩΩ
π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΨ¬ΩΨ§Ψͺ 
π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΩΩΩΨ§Ψͺ
 π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΩΨ§Ψ±ΩΨ―ΩΩ
 π―| ΩΩΩ ~ ΩΨͺΨ­ : Ψ§ΩΨ¨Ψ΅ΩΨ§Ψͺ
π|Ωβββββ
π―| Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ω4"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ππ­ Ψ§ΩΨ§ΩΨ± Ψ§ΨΆΨ§ΩΩΩ πΉππΉ

πΒ¦Ωβββββ
π΅π» ΩΨΉΩΩΩΨ§ΨͺΩ Ψ§ΩΨ΄Ψ?Ψ΅ΩΩ π
πΈΒ¦ Ψ§Ψ³ΩΩ : ΩΨΉΨ±ΨΆ Ψ§Ψ³ΩΩ π―
π±Β¦ ΩΨΉΨ±ΩΩ : ΩΨΉΨ±ΨΆ ΩΨΉΨ±ΩΩ π―
πΒ¦ Ψ§ΩΨ―ΩΩ : ΩΨΉΨ±ΨΆ Ψ§ΩΨ―ΩΩ π―
πΒ¦Ωβββββ
β½Β¦ Ψ§ΩΨ§ΩΨ± Ψ§ΩΨͺΨ­Ψ΄ΩΨ΄ π
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨͺΩΨ­Ψ―
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ¨ΩΨ±Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΩΨ¨
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨ±Ψ―
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΨΊΨ¨Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨ±Ψ³Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΨΉΨ±Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ²ΩΨ§Ψ¬ βͺ Ψ·ΩΨ§Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ¨ΩΩΨ¨Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ¨ΩΨ³ΨͺΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨͺΩΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ±ΩΨ§Ψ΅Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ―ΩΨ±Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ­ΩΩΨ§Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΩΨ²Ψ‘
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨ§Ψ΄Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨ·ΨͺΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ§Ψ¨ΩΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ¨ΩΨͺΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ²ΩΨ¬Ω
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ?Ψ§ΩΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ Ψ?Ψ§ΩΩΩ
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΨΉΨ¨ΩΨ·
πΒ¦ Ψ±ΩΨΉ βΈ ΨͺΩΨ²ΩΩ βΈ ΩΨͺΨ?Ψ²ΩΩ
πΒ¦ ΩΩΩ + (Ψ§Ψ³Ω Ψ§ΩΨ΄Ψ?Ψ΅) 
πΒ¦ ΩΩΩ + Ψ§ΩΨ±Ψ― + (Ψ§ΩΩΩΨ§Ω) 
πΒ¦Ωβββββ

π―Β¦ Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ω Ψ§ΩΩΨ·ΩΨ±"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"πΒ¦ Ψ§ΩΨ§ΩΨ± Ψ§ΩΩΨ·ΩΨ± π

πΒ¦ ΨͺΩΨΉΩΩ : ΩΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ 
πΒ¦ Ψ§Ψ°Ψ§ΨΉΩ : ΩΩΨ΄Ψ± ΩΩΩΩ ΩΩΩ Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ
πΒ¦ Ψ§Ψ³ΨͺΨ?Ψ―Ω /admin ΩΩ Ψ?Ψ§Ψ΅ Ψ§ΩΨ¨ΩΨͺ ΩΩΨ· : ΩΨΉΨ±ΨΆ ΩΩΨ¨ΩΨ― Ψ§ΩΨ?Ψ§Ψ΅ Ψ¨Ω π― 
πΒ¦ ΨͺΨ­Ψ―ΩΨ«: ΩΨͺΨ­Ψ―ΩΨ« ΩΩΩΨ§Ψͺ Ψ§ΩΨ¨ΩΨͺ
πΒ¦Ωβββββ

π―Β¦ Ψ±Ψ§Ψ³ΩΩΩ ΩΩΨ§Ψ³ΨͺΩΨ³Ψ§Ψ± π‘β­ @hossamzrzor",
'reply_to_message_id'=>$message->message_id, 
]);
}

/*
by: πππ¦π¦ππ  π­ππ­ππ
owner : ππΌππΌπ
Ch1 : DEV_1IRAQ
*/

if($text == 'Ψ§ΩΩΨ·ΩΨ±' or $text == "ΩΨ·ΩΨ±"){
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+9647815864486",
'first_name'=>"ΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩΜΆΜΆΩ 34K β’`β»",
'last_name'=>"Ω΅Ϊ΅Ω΅ΪΌΩΩΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²?ΰ§‘ΩΩΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ₯ΫΩΪΩΩΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£«ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²?ΰ§‘Ωΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ£²ΰ₯ΫΩΩ±ΪΉ πΏ Ω΅ΩΪΨ¬ΩΩΩΩΩΰ₯ΫΩΩΩΩΩΩΩΩΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΫΩΩΩΩΩΩΩΩΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£§ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©ΰ£©Ω",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ±ΨͺΨ¨ΨͺΩ" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π«Β¦ Ψ±ΨͺΨ¨ΨͺΩ Β» Ψ§ΩΩΩΨ΄ΩΨ‘ ππ»
πΏ
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ±ΨͺΨ¨ΨͺΩ" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π«Β¦ Ψ±ΨͺΨ¨ΨͺΩ Β» Ψ§Ψ―ΩΩ ΩΩ Ψ§ΩΨ¨ΩΨͺ π
πΏ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ±ΨͺΨ¨ΨͺΩ" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"π«Β¦ Ψ±ΨͺΨ¨ΨͺΩ Β» ΩΩΨ· ΨΉΨΆΩ ππΌββοΈ
πΏ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ§ΩΨ¬Ψ¨" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ­Ψ§ΨΈΨ± ΨͺΨ§Ψ¬ Ψ±Ψ§Ψ³Ω Ψ§ΩΨ¬Ψ¨ΩΨͺ π
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ§ΩΨ¬Ψ¨" and $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΩ ΩΨ§ ΩΨ΅ΨΉΨ―Ω Ψ§Ψ―ΩΩ Ω ΨͺΩΩΩ Ψ§ΩΨ¬Ψ¨ π ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="Ψ§ΩΨ¬Ψ¨" and $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§ΩΨ¬Ψ¨ Ψ§ΩΨͺΩ ΩΨ§ ΨͺΩΨ―ΩΨ± π",
'reply_to_message_id'=>$message->message_id, 
]);
}
$me = $message->reply_to_message; 
$mem = $me->message_id;
$MEMO = explode('ΩΩΩ',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
'reply_to_message_id'=>$mem,
]);
}
$MEMO = explode('ΩΩΩ',$text);
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
'text'=>'πΒ¦ Ψ’ΩΫββΩΨ’ ΨΉΨ²ΩΨ²Ω Ψ’ΩΩΩΨ·ΩΩΨ± π
π°Β¦ Ψ’ΩΨͺΩΫββ Ψ’ΩΩΩΨ·ΩΩΨ± Ψ’ΩΨ’Ψ³ΩΨ’Ψ³ΩΩ ΩΫββΩΨ’ π 
...

πΈΒ¦ ΨͺΨ³ΩΨͺΨ·ΩΩΨΉββ Ψ’ΩΨͺΨ­Ϊ―Ω Ψ¨Ϊ―Ω Ψ’ΩΨ’ΩΨ’ΩΩΨ± Ψ’ΩΩΩΩΩΩΨ¬ΩΨ―ΩΫββ Ψ¨Ψ’ΩΪ―ΩΨ¨ΩΨ±Ψ―
βοΈΒ¦ ΩΩΨ· Ψ’ΨΆΩΨΊΨ· ΨΉ Ψ’ΩΨ’ΩΩΨ± Ψ’ΩΨ°Ω ΨͺΨ±ΩΨ― ΨͺΩΩΩΨ°ΩΫββ', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'πΒ¦ Ψ§ΩΨ―ΩΩ β’'] 
], 
[ 
['text'=>'π―Β¦ Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩ β’'],['text'=>'βοΈΒ¦ Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ β’'] 
], 
[ 
['text'=>'πΈΒ¦ Ψ§Ψ³ΩΩ β’'] 
], 
[ 
['text'=>'π’Β¦ ΩΨΉΨ±ΩΩ β’'] 
], 
[ 
['text'=>'πΒ¦ Ψ§ΩΨ§Ψ­Ψ΅Ψ§Ψ¦ΩΨ§Ψͺ β’'] 
], 
[ 
['text'=>'πΒ¦ Ψ§Ψ°Ψ§ΨΉΨ© β’'] 
], 
[ 
['text'=>'π Β¦ Ψ§ΩΩΨ·ΩΨ± β’'] 
], 
[ 
['text'=>'π‘Β¦ ΩΩΨ§Ψ© Ψ§ΩΩΨ·ΩΨ± β’'],['text'=>'π Β¦ Ψ§ΩΩΨ³Ψ§ΨΉΨ―Ψ© β’'] 
],  
] 
]) 
]); 
}
if($text == "πΒ¦ Ψ§Ψ°Ψ§ΨΉΨ© β’" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π­Β¦ Ψ­Ψ³ΩΩΨ§ Ψ§ΩΨ§Ω Ψ§Ψ±Ψ³Ω Ψ§ΩΩΩΩΨ΄Ω ΩΩΨ§Ψ°Ψ§ΨΉΩ ΩΩΩΨ¬ΩΩΨΉΨ§Ψͺ 
π"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "πΒ¦ Ψ§Ψ°Ψ§ΨΉΨ© β’" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
if($text == "βοΈΒ¦ Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ β’"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"π?Β¦ ΨΉΨ―Ψ― Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ Ψ§ΩΩΩΨΉΩΨ© Β» $c  βΌ"
    ]);
 }
$id = $message->from->id;
if($text == "πΒ¦ Ψ§ΩΨ―ΩΩ β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "πΈΒ¦ Ψ§Ψ³ΩΩ β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π’Β¦ ΩΨΉΨ±ΩΩ β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π Β¦ Ψ§ΩΩΨ·ΩΨ± β’" and $for == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ππ»Β¦ ΩΩΨ·ΩΩΨ± Ψ§ΩΨ¨ΩΨͺ : @$user π¨π½βπ§ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π―Β¦ Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩ β’" and $from_id == $sudo){
$m = count($u)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "π―Β¦ ΨΉΨ―Ψ― ΩΨ΄ΨͺΨ±ΩΩΩ Ψ§ΩΨ¨ΩΨͺ :- { $m }" ,
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "πΒ¦ Ψ§ΩΨ§Ψ­Ψ΅Ψ§Ψ¦ΩΨ§Ψͺ β’"){
$c = count($groups);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" Ψ§ΩΨ§Ψ­Ψ΅Ψ§Ψ¦ΩΨ§Ψͺ : π 

π₯Β¦ ΨΉΨ―Ψ― Ψ§ΩΩΨ¬ΩΩΨΉΨ§Ψͺ Ψ§ΩΩΩΨΉΩΩ : $c 
π€Β¦ ΨΉΨ―Ψ― Ψ§ΩΩΨ΄ΨͺΨ±ΩΩΩ ΩΩ Ψ§ΩΨ¨ΩΨͺ : $m
π‘ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π‘Β¦ ΩΩΨ§Ψ© Ψ§ΩΩΨ·ΩΨ± β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"π Β¦   ΩΩΨ§Ψ© ΩΩΨ·ΩΩΨ± Ψ§ΩΩΩΩ : @DEV_1IRAQ βοΈ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π Β¦ Ψ§ΩΩΨ³Ψ§ΨΉΨ―Ψ© β’"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"π―Β¦ ΩΩΩΨ³Ψ§ΨΉΨ―Ψ© Ψ§Ω Ψ§Ω Ψ£Ψ±Ψ§Ψ‘ Ψ§Ω Ψ§ΩΩΨ§Ψ± ΨͺΩΨ§Ψ΅Ω ΩΨΉ ΩΨ·ΩΨ± Ψ§ΩΩΩΩ @M_E_M1BOT β",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "ΨͺΩΨΉΩΩ" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
π?π½Β¦ ΩΨ§Ω Ψ§Ψ­Ψ― Ψ§ΩΩΨ―Ψ±Ψ§Ψ‘ Ψ¨ΨͺΩΨΉΩΩ Ψ§ΩΨ¨ΩΨͺ
π₯Β¦ $t
π«Β¦ Ψ§ΩΨ―Ω Ψ§ΩΩΨ¬ΩΩΨΉΩ Β» $chat_id
βοΈΒ¦ ΨΉΨ―Ψ― Ψ§ΩΨ§ΨΉΨΆΨ§Ψ‘ Β» γ  $result2  γ ΨΉΨΆΩ π£
π¨π½βπ»Β¦ Ψ¨ΩΨ§Ψ³Ψ·Ψ© Β» $name
πΒ¦ ΩΨΉΨ±ΩΩ Β» @$user
π?
",
]);
}
}
if($text == "Ψ§ΩΨ―ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΨΉΨ±ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ§Ψ³ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ¨ΩΨͺ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ£Ψ³ΩΩ Ψ±ΩΨ§Ω ππΈ","ΩΨͺΨ?ΩΩΩΩ Ψ§ΨΉΨ΅Ψ¨ ΩΨ±Ψ―Ψ§ ΨͺΨ±Ψ§ Ψ§Ψ³ΩΩ Ψ±ΩΨ§Ω","Ω±ΩΫ¨ΩΩΫΨͺ Ω±ΩΨ¨ΩΨͺ ΩΫ§ΩΩ± Ω±Ψ΄Ψ·Ψ­Ϋ‘ π ","ΪΩΩ±ΨΉΩο­₯ΪͺΩ Ψ΄Ψ¨ΩΩΨΉΩΩ ΩΩ ΩΨ±Ψ― ΩΩ±ΩΨͺ Ψ¨ΩΩΨΉΩΨ―Ϊͺ ο­₯Ψ΅ΩΨ­ Ψ¨ΩΩΩΨͺ ππ€£","ΩΩ Ω±ΩΫ¨ΩΩΫΩΫ§ Ω±Ψ­Ϋ‘Ψ¨Ω Ψ΅ΩΫ§Ψ­Ϋ‘ΩΩΫ§ Ψ¨Ω±Ψ³ΫΩΫΩΫ§ Ψ±ΩΨ§Ω","ΩΫ§ΩΫΨΉΩΨ― Ψ΄ΨͺΨ±ΩΫ§Ψ― ΩΫΩΨΉΨͺ Ω±Ψ°ΩΫ¨ΩΩΫΩΫ§ΨπΨΆ","Ψ§Ψ³ΩΩ Ψ±ΩΨ§Ω"
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΨ΄ Ψ§ΩΨ­ΩΩ ΨΆΨ§ΩΨ¬ β€οΈπ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π³"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΨ§ Ψ¨Ψ³ ΩΨ§ Ψ΄ΩΨͺ Ψ?Ψ§ΩΨͺΩ Ψ§ΩΨ΄ΩΨ±Ω π³πΉπ·",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π­"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΨͺΨ¨Ψ¬Ω Ψ­ΩΨ§ΨͺΩ π­π­",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π‘"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§Ψ¨Ψ±Ψ―  π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΩΩΩΜΜ· Ψ₯Ψ’ΩΩΨ­ΩΩβ€ΩΩΨ¨ ΩΩΩΩΩΜΜ· β€οΈπ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"π»π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "π"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ·Ψ¨Ψ¨ ΩΨ³Ψ§ΩΩ Ψ¬ΩΩ ΨΉΩΨ¨ π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "βΉοΈ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΨΆΩΨ¬ Ψ­Ψ¨ΩΨ¨Ω π’β€οΈπ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΩΩΨ§Ψͺ ππΉ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΨ­"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΨ­Ψ§Ψͺ Ψ­ΩΨ§ΨͺΩπβ€",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΨͺΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΨΉΩΨ¨ Ψ§Ψ¨ΩΩ/Ψ¨ΨͺΩ Ψ§ΨͺΩΩ/Ω Ψ§ΩΨ¨Ψ± ΩΩΩΨ§ Ψ΄ΩΩΨ© ππΉ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΨͺΨ?ΩΩΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§Ψ?ΩΩΩ Ψ¨Ψ²Ψ§ΩΩΩ 380 Ψ―Ψ±Ψ¬Ω ΩΨ§ΩΨͺΩ ΨͺΨΉΨ±Ω Ψ§ΩΨ¨Ψ§ΩΩ πΈ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ§ΩΨ±ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ―ΩΩΩ Ψ΄ΩΩΩ Ψ§Ψ·ΩΩ Ψ?ΩΩΨͺΩ Ψ§ΩΩπΎππΏπ·",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ¨Ψ§Ω"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ¨Ψ§ΩΨ§Ψͺ Ψ­ΩΨ§ΨͺΩ π $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ²Ψ§Ψ­Ω"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ²Ψ§Ψ­Ω ΨΉΩΩ Ψ?Ψ§ΩΨͺΩ Ψ§ΩΨ΄ΩΨ±Ω π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΨ§Ω"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΩΩ ππΏ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ΄ΩΩ ΩΨ§ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΨΊΩΨ±Ω/Ψ¬ Ψ¨Ω ΩΩΨ¨ ΩΨ§ΩΩ ΩΨ¨ΨΉΨ― ΩΩΨ¨Ωπβ€οΈοΈ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ΄ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩΨ΄Ω ΩΩΩΨ§Ψ΄ΩπΈΨͺΪ―ΩΩΩ ΨΉΨ¨Ψ§ΩΩ Ψ§Ψ­ΩΩΨ© Ψ¨Ψ§ΩΨ΄ΩΨ±Ψ¬ΩΨ©π",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΩΨΉΨ²ΩΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ·Ψ±Ψ·Ψ§Ψ§ Ψ·Ψ±Ψ·Ψ§Ψ§ Ψ·Ψ±Ψ·Ψ§Ψ§ ππ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ²Ψ§Ψ­ΩΩ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ΩΩ Ψ²Ψ§Ψ­ΩΨͺΩΩ Ψ¬Ψ§Ω ΩΨ§ΩΩΨͺ Ψ²Ψ§Ψ­ΩΩ ππΈ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ­ΩΩΨ΄"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§ΩΩΨ΄ Ψ±Ψ§Ψ³Ω π€",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ΨΆΩΨ¬Ω"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ΄Ω Ψ§ΩΩΨ― Ψ§ΩΩΨ¨Ω ΩΨ§ΩΩ π ΩΩ Ψ¨ΨΉΨ―Ω/Ψ¬ ΩΨ§Ψ²Ψ§Ψ­Ω/Ψ© ππ",
'reply_to_message_id'=>$message->message_id, 
]);
}
$message_id = $update->message->message_id;
if($text == "Ψ§ΩΨ±Ψ§ΩΩ Ψ―ΨΉΨ§Ψ‘"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§ΩΩΨ―Ψ±Ψ³ΩΩ π’ ΩΩΩΩ Ψ§ΩΨ§Ψ­ΩΨ§Ψ‘ ΩΨ§ΩΨ§ΩΩΨ§Ψͺ π­π₯ Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ§ΩΩΩΩΨ²Ω π­π ΩΩΩΨ±Ψ¨ΩΨ§ Ψ¨ΩΨͺΩΨ§Ψ± Ψ§ΩΨ±Ψ¦ΩΨ³Ω π Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ±ΩΨ§ΨΆΩΨ§Ψͺ ΩΨ­ΩΩΩΨ§ Ψ§ΩΩ ΨΊΨ³Ψ§ΩΩ Ψ¨Ψ·Ψ§ΩΩΨ§Ψͺ π Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ§Ψ³ΩΨ§ΩΩΩ ΩΨ§Ψ¬ΨΉΩΩΨ§ Ψ¨Ψ§Ψ¦ΨΉΨ© Ψ§ΩΨ΄Ψ§ΩΩΩ π­π Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨΉΨ±Ψ¨Ω ΩΨ­ΩΩΩΨ§ Ψ§ΩΩ Ψ¨Ψ§Ψ¦ΨΉΩ Ψ§ΩΨ¨ΩΨ¨Ω Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ¬ΨΊΨ±Ψ§ΩΩΩ ΩΨ§Ψ¬ΨΉΩΩΨ§ ΩΩΨ―Ψ¬Ψ§Ψ¬Ω Ψ§ΩΨ­Ψ§ΩΩΨ© Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨͺΨ§Ψ±ΩΨ? ΩΨ²Ψ­ΩΩΩΨ§ Ψ¨ΩΨ΄Ψ±Ω ΩΩ Ψ§ΩΨ¨Ψ·ΩΨ? ΩΨ§Ψ±Ψ³ΩΩΨ§ Ψ§ΩΩ Ψ§ΩΩΨ±ΩΨ? Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§Ω Ψ§ΩΨ§Ψ­ΩΨ§Ψ‘ ΩΨ§Ψ¬ΨΉΩΩΨ§ ΩΩ ΩΩΩΩΨ§Ψ‘ Ψ§ΩΩΩΩ ΨΉΨ°Ψ¨ Ψ§ΩΩΨΉΨ§ΩΩ Ψ§ΩΨͺΩΩ Ψ¨ΩΩΨ―Ψ±Ψ³Ω Ψ¨ΩΨ§ΩΩ πππ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == 'Ψ±ΩΨ§Ω'){
$rand = array('Ψ³ΩΩΨͺ ΩΩΨ§Ω Ψ΄ΨΊΩΨ§Ψͺ Ψ³Ψ?ΩΩΩ Ψ¨Ψ­ΩΨ§ΨͺΩ Ψ¨Ψ³ ΨΉΩΨ±Ω ΩΨ΅Ψ­Ψͺ ΨΉΩΩ ΩΨ§Ψ­Ψ― ΩΩΩΨͺΩΩ Ψ§ΩΨ¬Ψ¨ π','ΩΨΉΩ Ψ­Ψ¨Ω π','Ψ§Ψ΄ΨͺΨΉΩΩ Ψ§ΩΩ Ψ±ΩΨ§Ω Ψ΄ΨͺΨ±ΩΨ― π ','ΩΩ ΩΨ―Ψ§Ω Ψ±ΩΨ§Ω Ψ­Ψ¨ΩΨ¨Ω Ψ§ΩΨͺ Ψ§ΩΩΩΩΨ­ π','Ψ¨ΩΩΩΩΩΩΩΩΩ π» ΩΨ§ ΩΨ§ ΩΨ²ΩΨͺ Ψ΄ΩΨͺΩ Ψ΄ΩΨͺΩ ΩΨ§ ΨͺΨ­ΩΩ π','ΩΩΨ§ΨͺΩΩ Ψ§Ψ¬ΩΨͺ πβ€οΈ','Ψ±Ψ§Ψ¬ΨΉ Ψ§ΩΩΩΨͺΨ¨ Ψ­Ψ¨ΩΨ¨Ω ΨΉΨ¨Ψ§ΩΩ Ψ±ΩΨ§Ω Ψ³ΩΩ ΨͺΨ­Ψ¬Ω ΩΩΨ§ π','Ψ¨Ψ§ΩΩ ΩΩΨͺΩΨ―Ψ― π','ΩΩ Ψ―Ψ¨Ψ―Ω ΩΩΨ§Ψ¨Ψ³Ω Ψ§Ψ·ΩΨΉ Ψ¨Ψ±Ψ§Ψ§Ψ§Ψ§Ψ§ π΅π‘ ΩΨ§Ψ³ ΩΨͺΨ³ΨͺΨ­Ω','Ψ―Ψ§ Ψ§Ψ΄Ψ±Ψ¨ Ψ¬Ψ§Ω ΨͺΨΉΨ§Ω ΨΊΩΨ± ΩΩΨͺ π','ΩΩΩ ΨΊΩΨ± ΩΨ³ΩΨͺ ΨΉΨ§Ψ― ΩΨ§ Ψ΄ΨͺΨ±ΩΨ― π·','Ψ§ΩΨͺ ΩΩ Ψ§Ψ¬ΩΨͺ Ψ§ΩΨ¨Ψ§Ψ±Ψ­Ω ΨͺΨΊΩΨ· ΨΉΩΩΩ βπΏπ','ο?¬ΜΜ²Ω± Ψ­ΩΩ±ΨͺΜ²Ω Ω±ΩΩΨ±Ωο»§Μ²ΩΩ π₯°','ΨΉΩΫ§ΩΩΫ¨ΩΩΫ Ψ±ΩΨ§Ω ΨͺΩΨΆΩΨΨππ₯°','ο?¬ΜΜ²Ω± Ψ­ΩΩ±ΨͺΜ²Ω Ω±ΩΩΨ±Ωο»§Μ²ΩΩ π₯°','ΩΜΩΨ¬ΩΨ―Μ Ψ¨Ψ³ΜΜ ΩΨͺΨ΅ΜΜΩΨ­Μ πΩ ','Ψ±Ω±Ϊ Ϊ»ΩΩο­  ο­Ϊ³ΩΨ±ΩΪ»Ω± ΩΪ»ο­ ΩΩο?§ ο­Ψο?Ϊ³ ο­ ΪΩΩΩΪΨ ΩΩΨ±Ω');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}

if($text == "ΩΩ"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"Ψ¨Ψ³ ΩΨ§ ΩΩΨ§Ψ­ ΩΨ§ ΨΉΨ±Ω ππ¦",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ­Ψ¨ΩΨ¨Ω"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"ΩΫΨ±ο―Μ²Ψ­ΫΩ Ψ’ΩΫΨͺ/ Ω π₯°",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ­Ψ¨ΩΨ¨ΨͺΩ"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"ΩΨ΄ΨΊΩΩΩ ΩΩΨ§ Ψ§ΩΩΨ¨Ψ― ππ·",
 'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Ψ§Ω"){
bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"Ψ¬Ψ§Ω Ψ§ΩΩ ΩΨ΄ Ψ³Ψ§ΩΨΉ ππ€€",
 "reply_to_message_id"=>$message->message_id, 
]);
}
if($text == "Ψ§ΩΩΩ"){
bot("sendMessage",[
 "chat_id"=>$chat_id, 
 "text"=>"ΩΩΨ·ΨΉΩΩππ",
 "reply_to_message_id"=>$message->message_id, 
]);
}
if($text == "Ψ±ΩΨΉ ΩΨͺΩΨ­Ψ―"  || $text == "Ψ±ΩΨΉ ΩΨͺΩΨ­Ψ―Ω" and"$from_id"==$sudo|| in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
  'text'=>" β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩ ΩΨ§Ψ¦ΩΩ Ψ§ΩΩΨͺΩΨ­Ψ―ΩΩ ΩΨ§ΩΩΨ±ΨΆΩ Ψ§ΩΩΩΨ³ΩΩΩ
β Ψ±Ψ§Ψ­ ΩΨ¬Ψ¨ΩΩ Ψ―ΩΨͺΩΨ± ΩΩΨ³Ψ§ΩΩ
β
", parse_mode'=>'markdown','reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot("sendMessage",["chat_id"=>$chat_id,
       'text'=>"β Ψ§ΩΨΉΨΆΩ [$re_name] ΩΨͺΩΨ­Ψ― Ψ¨Ψ§ΩΩΨΉΩ
β ΩΩΨͺΨΉΨ§ΩΨ¬ ΩΨΉ Ψ―ΩΨͺΩΨ± ΩΩΨ³Ω Ψ§ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨͺΩΨ­Ψ―"  || $text == "ΨͺΩΨ²ΩΩ ΩΨͺΩΨ­Ψ―Ω" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot("SendMessage",['chat_id'=>$chat_id,
  'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨͺΩΨ­Ψ―ΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ§Ψ΅Ψ¨Ψ­ Ψ§ΩΨ§Ω Ψ­Ψ± Ψ·ΩΩΩ ΩΨΉ Ψ§ΩΨΉΩΩΨ§Ψ‘
β
",'parse_mode'=>'markdown','reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ²ΩΨ¬ΨͺΩ"   $text == "Ψ²ΩΨ§Ψ¬" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"β ΨͺΩ Ψ²ΩΨ§Ψ¬Ω Ψ¨ $re_name Ψ¨Ψ§Ψ±Ω Ψ§ΩΩΩ ΩΩΩΨ§
β ΩΩΨ§ Ψ§ΨͺΩΨΆΩΩ Ψ§ΨΉΩΩΩ ΩΨ§Ψ­Ψ― Ψ¨Ψ³ ΩΨ΄ ΩΩ Ψ§ΩΨ±ΩΩ
β
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨͺΨ²ΩΨ¬Ω ΩΩ ΩΨ¨Ω 
β Ψ§Ψ³Ω ΩΨ΅Ψ­Ψ¨Ω ΩΩ Ψ΄Ψ¦ ΩΨ³ΩΩ ΩΩΨ΅ΩΨ¨
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ²ΩΨ¬ΨͺΩ"   $text == "Ψ·ΩΨ§Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨͺΨ²ΩΨ¬Ψ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ ΩΨ§Ψ΅Ψ¨Ψ­Ψͺ Ψ·ΩΩΩΩ
β Ψ·ΩΩΨͺΩΨ§ ΨΉΨ΄Ψ§Ω ΩΨ¨ΨͺΨΉΨ±ΩΨ΄ Ψ΅Ψ­
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨͺΨ²ΩΨ¬Ω Ψ§Ψ΅ΩΨ§
β Ψ§ΩΨ­Ω Ψ§Ψ?Ψ·Ψ¨ΩΨ§ Ψ¨ΩΨ§ ΩΨ¨Ω ΩΨ§ΨͺΨͺΨ΄ΩΨ·
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΨΊΨ¨Ω"   $text == "Ψ±ΩΨΉ ΨΊΨ¨ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
 'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΨΊΨ¨Ω ΩΩ Ψ§ΨΊΨ¨ΩΨ§Ψ‘ Ψ§ΩΨ¬Ψ±ΩΨ¨ 
β ΩΩΩΩΩΩ ΩΩΨ·ΩΨ§ Ψ¨Ψ³ΩΨ§ΨͺΩ
β", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
       'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΨΊΨ¨Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ­Ψ§Ψ¨Ψ³ΩΩΩ Ψ¬ΩΨ§ ΩΩΨ§ΨͺΩ ΩΨ§ΨΆΨ­Ω
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΨΊΨ¨Ω"   $text == "ΨͺΩΨ²ΩΩ ΨΊΨ¨ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ§ΨΊΨ¨ΩΨ§Ψ‘ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΩΩΨ΄ Ψ§ΩΩΩΨ±ΩΨΆ ΩΩΨ²Ω Ψ―Ω ΩΨ³Ω ΨΊΨ¨Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΨΊΨ¨Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ­ΩΨ§Ψ±"   $text == "Ψ±ΩΨΉ Ψ­ΩΨ§Ψ±Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ­ΩΨ§Ψ± Ψ§ΩΨ¬Ψ±ΩΨ¨ 
β Ψ­Ψ― ΨΉΨ§ΩΨ² ΩΨ±ΩΨ¨Ω ΩΩΨ§Ψ?Ψ― ΩΩΩΨΨ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"[β Ψ§ΩΨΉΨΆΩ $re_name Ψ­ΩΨ§Ψ± Ψ¨Ψ§ΩΩΨΉΩ 
β Ψ¨Ψ³ ΩΩ ΩΩ Ψ§ΩΨΊΩΨ· ΩΨ΄ ΩΨ§ΨΆΩ Ψ§ΩΩΩΨͺΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ­ΩΨ§Ψ±"   $text == "ΨͺΩΨ²ΩΩ Ψ­ΩΨ§Ψ±Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ­ΩΩΨ± Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω ΩΨ?ΩΩ Ψ§ΩΩΩ ΩΨ­ΨͺΨ±ΩΩ
β

", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ­ΩΨ§Ψ± Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨ±ΩΨ―
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ¨ΩΨ±Ω"   $text == "Ψ±ΩΨΉ Ψ¨ΩΨ±" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΨ¨ΩΨ±Ω Ψ§ΩΨ­ΩΩΨ¨Ω 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ¨ΩΨ±Ω Ψ¨Ψ―ΩΨ§ ΩΨ¨Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨ±Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨͺΨ­ΩΨ¨ ΩΩ Ψ§ΩΨ²Ψ±ΩΨ¨Ω ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨ±Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨ±" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ¨ΩΨ±Ψ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ?Ψ― Ψ§ΩΩΨ¨Ω Ψ¨ΨͺΨ§ΨΉΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ¨ΩΨ±Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨ±Ψ―"   $text == "Ψ±ΩΨΉ ΩΨ±Ψ―Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΩΨ¨ Ψ¬ΩΨ±ΩΩ 
β ΩΨ§ΩΩΨ¨Ω ΩΨ¬ΩΨ§ΨΉΩ Ψ§ΩΩΩ ΨΉΩΨ―Ω ΨΉΨΆΩΩ ΩΨ―ΩΨ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ±Ψ― Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΩΨ±Ψ­Ψ§Ω Ψ¨Ψ§ΩΩΩΨ²Ω Ψ§ΩΩ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨ±Ψ―"   $text == "ΨͺΩΨ²ΩΩ ΩΨ±Ψ―Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨ±ΩΨ― Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ΄ΩΩ ΩΨ΄Ψ± Ψ§ΩΩΩΨ² Ψ¨ΨͺΨ§ΨΉΩ ΩΩΨ§
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨ±Ψ― Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β
"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΩΨ¨"   $text == "Ψ±ΩΨΉ ΩΩΨ¨Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΩΨ¨ Ψ¬ΩΨ±ΩΩ 
β ΩΨ§ΩΩΨ¨Ω ΩΨ¬ΩΨ§ΨΉΩ Ψ§ΩΩΩ ΨΉΩΨ―Ω ΨΉΨΆΩΩ ΩΨ―ΩΨ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩΨ¨ Ψ¨Ψ§ΩΩΨΉΩ 
β Ψ¨Ψ³ Ψ¨ΩΩΨ΅ΩΨ΅ ΩΩ Ψ§ΩΨΉΨΆΩΩ ΩΨ΄ ΩΨ§ΨΆΩ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΩΨ¨"   $text == "ΨͺΩΨ²ΩΩ ΩΩΨ¨Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΩΨ§Ψ¨ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ§Ψͺ Ψ§ΩΨΉΨΆΩΩ ΨΉΨ΄Ψ§Ω ΩΨ―ΩΩΨ§ ΩΨ­Ψ― ΨΊΩΨ±Ω
β

", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΩΨ¨ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΨΉΨ±Ω"   $text == "Ψ±ΩΨΉ ΨΉΨ§Ψ±" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΨΉΨ±Ω Ψ§ΩΨ¬Ψ±ΩΨ¨ 
β ΩΨ΄ ΨΉΩΨ¨ Ψ§ΩΨ§ ΨͺΩΩΩ ΨΉΨ±Ω ΩΨ―Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΨΉΨ±Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΩΨ?ΨͺΩΩ ΨΉΩΩ ΩΩΨ§Ω ΩΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΨΉΨ±Ω"   $text == "ΨͺΩΨ²ΩΩ ΨΉΨ§Ψ±" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨΉΨ±Ψ± Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ΄ ΨΉΨ§Ψ±Ω Ψ§ΩΩΨ§Ψ³ ΩΨͺΨ±Ψ¬ΨΉ ΨͺΨ­ΨͺΨ±ΩΩ ΨͺΨ§ΩΩ ΩΩΨ§ ΩΨ§
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΨΉΨ±Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨ±Ψ³Ω"   $text == "Ψ±ΩΨΉ Ψ΅Ψ§Ψ±ΩΨ?" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΩΨ±Ψ³Ω Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΩΩΩΩΩΩΩΩΩΩΩ Ψ΅Ψ§Ψ§Ψ§Ψ±ΩΨ? ΩΨ§ΩΨ§Ψ³
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ±Ψ³Ω Ψ¨Ψ§ΩΩΨΉΩ 
β Ψ§ΩΩ ΩΨ±Ω Ψ§Ψ΄ΩΩ ΩΨ±Ψ³Ω Ψ΄Ψ¨Ω Ψ§ΩΨ­ΩΨ§Ψ±
β
"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨ±Ψ³Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ΅Ψ§Ψ±ΩΨ?" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨ±Ψ³Ψ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ§Ψ§Ω ΩΨ§ΩΨͺ ΩΨ±Ψ³Ω Ψ¬Ψ§ΩΨ―Ω Ψ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨ±Ψ³Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ±
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ¨ΩΩΨ¨Ω"   $text == "Ψ±ΩΨΉ Ψ¨ΩΩΨ¨Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΩΨ¨Ω ΩΨ―Ω ΩΩΨ―Ω 
β ΩΩΨ΄ Ψ¨ΨΉΨ― ΩΩΩΩΩ ΩΩΩΩΩΨ΄ ΩΨ΄Ψ­ΩΨ±ΩΩ Ψ¨ΨΉΨΆ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩ ΩΩΨ¨ Ψ­Ψ― ΨΊΩΨ±Ω 
β Ψ§ΩΩΨ§ΨΆΨ­ Ψ§Ω Ψ§ΩΨ΄Ψ?Ψ΅ Ψ―Ω ΩΨ­Ψ¨ΩΨ¨ Ψ¬Ψ―Ψ§Ψ§
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨ³ΨͺΩ"   $text == "Ψ¨ΩΨ³ΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨ³ΨͺΩ 
β Ψ§ΨͺΩΩΩ ΩΩΩΩΩΩΩΨ§Ψ―Ψ§ ΩΨ§Ψ­ΩΩ Ψ¨ΩΨ³ΨͺΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨ³Ψͺ ΩΨ΄Ψ?Ψ΅ ΨͺΨ§ΩΩ 
β Ψ―Ψ§ΩΩΨ§ Ψ¨ΨͺΩΨ¬Ω ΩΨͺΨ£Ψ?Ψ± ΩΨ§ΩΩΨ§Ψ²
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨ³ΨͺΩ"   $text == "ΩΩΨ³Ψͺ Ψ¨ΩΨ³ΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ¨ΩΨ³ΨͺΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ§ΩΩ ΩΩΨ¨ΨͺΨ―Ω ΩΨ¬Ψ±Ψ­ ΩΩ Ψ¨ΨΉΨΆ Ψ¨ΩΨ§
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ¨ΩΨ³ΨͺΩ Ψ§Ψ΅ΩΨ§
β ΩΨ΄ Ψ§Ω Ψ§ΨͺΩΩΩ ΩΨ¨ΩΩ Ψ¨ΩΨ³ΨͺΨ§Ψͺ Ψ¨Ψ§ΩΨ³Ψ§ΩΩ ΩΨ§Ψ΅Ψ­Ψ¨Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨͺΨ?Ψ²ΩΩ"   $text == "Ψ±ΩΨΉ ΩΨͺΨ?Ψ²ΩΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΨͺΨ?Ψ²ΩΩ Ψ§ΩΨ­Ψ²ΩΩ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΨͺΨ?Ψ²ΩΩ ΩΨ³ΨͺΩΩΨ― ΩΩ Ψ?Ψ¨Ψ±ΨͺΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨͺΨ?Ψ²ΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨ¨ΩΩ ΨΉ Ψ§Ψ­Ψ²Ψ§ΩΩ Ψ§ΩΩΩ Ψ¨Ψ§ΩΩΨ§ΩΩ ΩΨ§Ψ§Ω
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨͺΨ?Ψ²ΩΩ"   $text == "ΨͺΩΨ²ΩΩ ΩΨͺΨ?Ψ²ΩΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨͺΨ?Ψ²ΩΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω ΩΨ­ΨͺΩΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨͺΨ?Ψ²ΩΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ?Ψ§ΩΩΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΨΉΨ¨ΩΨ·"   $text == "Ψ±ΩΨΉ ΨΉΨ¨ΩΨ·Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΨΉΨ¨ΩΨ· ΩΨ§ΩΨ¨Ω 
β ΩΨ§Ψ±Ψ¨ Ψ§Ψ³ΨͺΨ±ΩΨ§ ΩΨΉΨ§Ω Ψ§Ψ΅Ω ΩΩ ΨΉΨ¨ΩΨ·
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΨΉΨ¨ΩΨ· Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨͺΨΉΨ§ΩΨ¬ ΨΉ ΩΩΩΨ© Ψ§ΩΨ―ΩΩΩ
β"
    ]);
  }
}

$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΨΉΨ¨ΩΨ·"   $text == "ΨͺΩΨ²ΩΩ ΨΉΨ¨ΩΨ·Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨΉΨ¨Ψ· Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ§ΩΨͺ Ψ¨ΩΩΨͺ Ψ§ΨΉΩΩ ΩΨ§Ψ­Ψ―
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΨΉΨ¨ΩΨ· Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΩΨ²Ψ¦ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ?Ψ§ΩΩΩ"   $text == "Ψ±ΩΨΉ Ψ?Ψ§ΩΩΨ§Ψͺ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΨ?Ψ§ΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ?Ψ§ΩΩΩ ΩΨΆΨ­ΨͺΩΩΨ§ ΩΩΩΩΨͺΩ ΨΉΩΩΩΨ§ Ψ§ΩΩΨ§Ψ³
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ?Ψ§ΩΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΩΩΨͺ ΨΉΩΩΩΨ§ Ψ§Ω ΩΨ³ΩΩ ΩΩΨ§ΩΨ³ΩΨ§Ψ΄
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ?Ψ§ΩΩΩ"   $text == "ΨͺΩΨ²ΩΩ Ψ?Ψ§ΩΩΨ§Ψͺ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ?Ψ§ΩΩΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉ Ψ?ΩΨ§Ψ΅ Ψ³Ψ§ΩΨ­ΨͺΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ?Ψ§ΩΩΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩΨ§ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨͺΨ²ΩΨ¬Ψ§Ψͺ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ?Ψ§ΩΩ"   $text == "Ψ±ΩΨΉ Ψ?Ψ§ΩΩΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΨ?Ψ§ΩΩ ΩΩΩΩ Ψ§ΩΨ§Ψ΅Ω 
β ΨͺΨΉΨ§ΩΩ Ψ¨ΩΩΨ§Ψ―Ω ΨΉΩΩΩ ΩΨ§Ψ?Ψ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ?Ψ§ΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨͺΩΨ§Ω ΩΩ ΩΨ±Ψ§ΨͺΩ ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ?Ψ§ΩΩ"   $text == "ΨͺΩΨ²ΩΩ Ψ?Ψ§ΩΩΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ?Ψ§ΩΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉ Ψ?ΩΨ§Ψ΅ Ψ³Ψ§ΩΨ­ΨͺΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ?Ψ§ΩΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨͺΨ²ΩΨ¬ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ²ΩΨ¬Ω"   $text == "Ψ±ΩΨΉ Ψ²ΩΨ¬Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ²ΩΨ¬Ω Ψ­Ψ¨ΩΨ¨Ω 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ²ΩΨ¬Ω ΩΩΨΆΩ Ψ΄ΩΨ± Ψ§ΩΨΉΨ³Ω ΩΩ ΩΨ§Ψ±ΩΩΨ§ 
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ²ΩΨ¬ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ?Ψ§Ψ±Ψ¨ΩΨ§ Ω ΩΨ§Ψ±ΩΩΨ§ ΩΨ§Ψ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ²ΩΨ¬Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ²ΩΨ¬Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ ΩΨ§Ψ¦ΩΨ© Ψ²ΩΨ¬Ψ§ΨͺΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ ΩΨ§ Ψ·ΩΩΩΩ Ψ?Ψ― Ψ§ΩΨ―ΩΨ¨ Ψ¨ΨͺΨ§ΨΉΩ ππ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ¬ΩΨ²Ω Ψ§Ψ΅ΩΨ§
β ΩΩΨ§ Ψ§ΩΨͺΩ ΩΨ³ΩΨͺΩΩΩ ΩΩ ΩΨͺΨ±ΩΩ ππ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ¨ΩΨͺΩ"   $text == "Ψ±ΩΨΉ Ψ¨ΩΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨͺΩ ΩΩΩ ΨΉΩΩΨ§ 
β ΨͺΨΉ ΩΨ¨ΩΨͺΩ Ψ΄ΩΩΩ Ψ¨Ψ§Ψ¨Ψ§ ΨΉΨ§ΩΨ² Ψ§Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ¨ΩΨͺΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨͺΨΉΩΨ΄ ΩΩ ΨͺΨ¨Ψ§Ψͺ ΩΩΨ¨Ψ§Ψͺ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨͺΩ"   $text == "ΨͺΩΨ²ΩΩ Ψ¨ΩΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ¨ΩΩΨͺΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ§ΩΨͺΩ Ω Ψ§ΩΩΩΨ§Ψ±Ψ―Ω ΩΨ§ Ψ¨ΩΨͺΩ ΩΩΨ§ Ψ§ΨΉΨ±ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ¨ΩΨͺΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩΩΨ§ ΩΨ―Ω ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨͺΩΨ­Ψ―ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨ§Ψ΄Ω"   $text == "Ψ±ΩΨΉ ΩΨ§Ψ΄Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΨ§Ψ΄Ω Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΨ§Ψ΄Ω ΩΨ³ΩΨ¨ Ψ§ΩΩΨͺΨ§Ψ¨ ΩΨ―Ω ΩΨ―Ω ΩΨͺΨ³ΩΨ·
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ§Ψ΄Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΩΩΩ Ψ§Ψ΅ΩΨ§Ψ± ΩΩ ΩΩ Ψ§ΩΩΩΨ§Ψ―
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨ§Ψ΄Ω"   $text == "ΨͺΩΨ²ΩΩ ΩΨ§Ψ΄Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨ΄ΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ?Ψ― ΩΨͺΨ§Ψ¨Ω Ψ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨ§Ψ΄Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ§ΨΊΨ¨ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ―ΩΨ±Ω"   $text == "Ψ±ΩΨΉ Ψ―ΩΨ±Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ―ΩΨ±Ω ΩΨ§Ψ¨Ω ΨΉΩΨ§ΩΩ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ―ΩΨ±Ω Ψ§Ψ―Ω Ψ§Ψ¨ΩΩΨ§ Ψ¨ΩΩΨ§Ψ―Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ―ΩΨ±Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ§Ψ―Ω ΩΨ·ΩΨΉ ΨΉΩΩΩ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ―ΩΨ±Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ―ΩΨ±Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ―ΩΩΨ± Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ?Ψ― Ψ§Ψ¨ΩΩ Ψ§Ψ―Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ―ΩΨ±Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ§ΨΊΨ¨ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ§Ψ¨ΩΩ"   $text == "Ψ±ΩΨΉ Ψ§Ψ¨ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§Ψ¨Ω Ψ¨ΩΨͺ Ψ¨ΩΨͺΩ 
β ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ¨ΩΩ ΩΨ§ΨͺΩΩΨ§ Ψ΄Ψ§Ω Ψ§Ω Ψ­Ψ³Ω 
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ§Ψ¨ΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ§ΩΨ§Ω Ψ²ΩΩΨͺ ΩΩΩ ΩΩΩΨ―ΩΩ Ψ―Ψ§Ψ± Ψ§ΩΨͺΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ§Ψ¨ΩΩ"   $text == "ΨͺΩΨ²ΩΩ Ψ§Ψ¨ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ§Ψ¨ΩΨ§Ψ‘ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ΄ΩΩΩΩ ΩΩΨ¨Ω Ψ¨ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ§Ψ¨ΩΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨ§Ψ¬Ψ¦ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨ·ΨͺΩ"   $text == "Ψ±ΩΨΉ ΩΨ·ΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΩΨ·ΨͺΩ ΩΩΩ ΨΉΩΩΨ§ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΨ·ΨͺΩ ΩΨ΄ΨͺΨ±Ω ΨͺΩΩΩ ΩΩΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ·ΨͺΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΨͺΨ§ΩΩ Ψ§Ψ­ΩΩ Ψ³ΩΩ ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨ·ΨͺΩ"   $text == "ΨͺΩΨ²ΩΩ ΩΨ·ΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΨ·Ψ· Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΩΨ§ΨͺΩ ΨΉΩΨ¨Ψ· Ψ§ΩΨͺΩΩΩ Ψ¨ΨͺΨ§ΨΉΨͺΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΨ·ΨͺΩ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩΨ§ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ­ΩΩΨ§ΩΨ§Ψͺ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΨͺΩΩ"   $text == "Ψ±ΩΨΉ ΩΨͺΩΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name ΩΨͺΩΨͺΩ Ψ¨ΩΨ¬Ψ§Ψ­β€οΈ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΨͺΩΩ ΩΨ³Ψ§ΩΨ± Ψ¨Ψ±Ω ΩΨ΅Ψ±
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨͺΩΩ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ§ΩΩΩ Ψ¨ΩΩΨ±Ψ§Ψ΄ ΨΉΩΩΩΨ§ Ψ?Ψ― Ψ¨Ψ§ΩΩ ππ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΨͺΩΩ"   $text == "ΨͺΩΨ²ΩΩ ΩΨͺΩΨͺΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ ΩΨ§Ψ¦ΩΨ© Ψ§ΩΩΨͺΩΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ΄ΩΩΩΩ ΩΩΨ¨Ω Ψ§Ψ¬Ψ±Ω ππ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩΨ§ΩΨͺΨ΄ ΩΨͺΩΨͺΩ Ψ§Ψ΅ΩΨ§
β Ψ¨Ψ·ΩΩ ΩΨ―Ψ¨ Ψ¨ΩΩ ππ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ±ΩΨ§Ψ΅Ω"   $text == "Ψ±ΩΨΉ Ψ±ΩΨ§Ψ΅Ψ©" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ±ΩΨ§Ψ΅Ω Ψ¨ΩΨ¬Ψ§Ψ­β€οΈ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ ΩΨ§Ψ±ΩΨ§Ψ΅Ω ΩΩΩΨ·Ω Ψ¨Ψ§ΩΨ―ΩΩΨ§Ψ±Ψ§Ψͺ 
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ±ΩΨ§Ψ΅Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ§ΩΩΩ ΨΉΩΩΩ ΨΉΩΩΩΨ§ Ψ?Ψ― Ψ¨Ψ§ΩΩ ππ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ Ψ±ΩΨ§Ψ΅Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ±ΩΨ§Ψ΅Ψ©" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ ΩΨ§Ψ¦ΩΨ© Ψ§ΩΨ±ΩΨ§Ψ΅Ψ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β Ψ΄ΩΩΩΩ ΩΩΨ¨Ω Ψ§Ψ¬Ψ±Ω ππ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩΨ§ΩΨͺΨ΄ Ψ±ΩΨ§Ψ΅Ω Ψ§Ψ΅ΩΨ§
β Ψ¨Ψ·ΩΩ ΩΨ―Ψ¨ Ψ¨ΩΩ ππ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ ΩΩΨ²Ψ‘"   $text == "Ψ±ΩΨΉ ΩΩΨ²Ψ‘Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ§ΩΩΩΨ²Ψ‘ Ψ§ΩΩ Ψ§ΩΨ¬Ψ±ΩΨ¨ 
β ΨͺΨΉΨ§ΩΩ ΩΨ§ΩΩΨ²Ψ‘ ΩΨ§ΩΩΩ Ψ¬Ψ§ΩΨ¨ΩΩΨ§ Ψ§ΩΩΩΨ§Ω 
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΩΨ²Ψ‘ Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΨ¨ΩΨͺΩΨ§Ω ΩΨ§Ω
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "ΨͺΩΨ²ΩΩ ΩΩΨ²Ψ‘"   $text == "ΨͺΩΨ²ΩΩ ΩΩΨ²Ψ‘Ω" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΩΩΨ²Ψ¦ΩΩΩ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ§ΩΨͺ Ψ¨ΩΩΨͺ ΨΉΨ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ ΩΩΨ²Ψ‘ Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΨ§ΨΊΨ¨ΩΩ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ±ΩΨΉ Ψ­ΩΩΨ§Ω"   $text == "Ψ±ΩΨΉ Ψ­ΩΩΨ§ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ Ψ±ΩΨΉ Ψ§ΩΨΉΨΆΩ $re_name Ψ­ΩΩΨ§Ω ΩΨ±Ψ² Ψ§ΩΩ 
β ΩΩΨ§ ΨͺΨΉΨ§ΩΩ Ψ¬ΩΩΩΨ© Ψ§ΩΨ­ΩΩΨ§ΩΨ§Ψͺ ΩΨ³ΨͺΩΩΨ§Ω
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name Ψ­ΩΩΨ§Ω Ψ¨Ψ§ΩΩΨΉΩ 
β ΩΩΨͺΨ­Ψ―Ψ« ΩΩ Ψ―Ψ§Ψ?Ω Ψ§ΩΨ­Ψ―ΩΩΩ
β"
    ]);
  }
}
$message_idd = $update->message->message_id;
if($text == "Ψ­ΩΩΨ§Ω"   $text == "ΨͺΩΨ²ΩΩ Ψ­ΩΩΨ§ΩΩ" and $from_id == $sudo  in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "ΩΩΩΩΩ"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"β ΨͺΩ ΨͺΩΨ²ΩΩ Ψ§ΩΨΉΨΆΩ $re_name ΩΩ Ψ§ΩΨ­ΩΩΨ§ΩΨ§Ψͺ Ψ¨ΩΨ¬Ψ§Ψ­ 
β ΨͺΨΉΨ§ΩΩ Ψ­Ψ¨ΩΨ¨Ω Ψ?Ψ― ΨΉΩΩΩ Ψ§ΩΩ
β
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);
}
}
else{
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"β Ψ§ΩΨΉΨΆΩ $re_name ΩΨ΄ Ψ­ΩΩΨ§Ω Ψ§Ψ΅ΩΨ§
β Ψ΄ΩΩΩ ΩΨ―Ω ΩΩΩΩ ΩΩ ΩΩΨ³ΨͺΩ Ψ§ΩΩΨͺΩΨ§Ψͺ
β"  
    ]);
  }
}
$message_idd = $update->message->message_id;
