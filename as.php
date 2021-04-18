<?php

error_reporting(0);

ob_start();

$bot_id = "1799571256"; //ايدي البوت

$admmm = "826928708"; //ايدي المطور

$tbbots = "E_L_4"; //معرف المطور بدون @

$API_KEY = "1799571256:AAHMGJoIHLme8ciCT6EjtAG7fohsOMbpFM4";

$url_info = file_get_contents("https://api.telegram.org/bot$API_KEY/getMe");

$json_info = json_decode($url_info);

$userr = $json_info->result->username;

define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $iBadlz = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$iBadlz";
        $iBadlz = file_get_contents($url);
        return json_decode($iBadlz);
}
$bgh = file_get_contents("$re_id.txt");
$Dev = array("$admmm","$bgh");
@$channel = "E_L_4"; //معرف قناتك
@$token = $API_KEY;
$buyy = "@$tbbots";

@$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$from_ud = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
$name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$texxt = $update->inline_qurey->qurey;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$re = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$hj = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$you = $hj['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$yyou = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$edits = json_decode(file_get_contents("edits.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
$can_change_info_rply = $statjsonrt['result']['can_change_info'];
$can_delete_messages_rply =  $statjsonrt['result']['can_delete_messages'];
$can_restrict_members_rply = $statjsonrt['result']['can_restrict_members'];
$can_invite_users_rply = $statjsonrt['result']['can_invite_users'];
$can_pin_messages_rply = $statjsonrt['result']['can_pin_messages'];
$can_promote_members_rply = $statjsonrt['result']['can_promote_members'];
$new = $message->new_chat_member;
$can_change_info= $statjson['result']['can_change_info'];
$can_delete_messages =  $statjson['result']['can_delete_messages'];
$can_restrict_members = $statjson['result']['can_restrict_members'];
$can_invite_users = $statjson['result']['can_invite_users'];
$can_pin_messages = $statjson['result']['can_pin_messages'];
$can_promote_members = $statjson['result']['can_promote_members'];
$idBot = $bot_id;
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
$allmsg = file_get_contents("data/allmsg.txt");
$allmsgpv = file_get_contents("data/allmsgpv.txt");
mkdir("game");
/*===== فاكشن =====*/
function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
if($can_bot_chang_info == 1){ 
$canchangeinfo = "✅";
}else{
$canchangeinfo = "❌";
}
if($can_bot_delete== 1){ 
$candeletemessages = "✅";
}else{
$candeletemessages = "❌";
}
if($can_bot_restrict == 1){ 
$canrestrictmembers = "✅";
}else{
$canrestrictmembers = "❌";
}
if($can_bot_invite == 1){ 
$caninviteusers = "✅";
}else{
$caninviteusers = "❌";
}
if($can_bot_pin == 1){ 
$canpinmessages = "✅";
}else{
$canpinmessages = "❌";
}
if($can_bot_promote == 1){ 
$canpromotemembers = "✅";
}else{
$canpromotemembers = "❌";
}
if(strpos($text, "صورتي") !== false){
$n = str_replace("صورتي ", "", $text);
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][$n-1][0]["file_id"];
if($e == 0){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛┇› لايوجد لديك اي صورة ✓",
]);
}
else{
if($n <= $e){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
'caption'=>"صورتك عزيزي رقم $n 💙🙈",
]);
}
else{
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"انت لاتمتلك $n من الصور",
]);
}
}
}
if(strpos($text, "جلب صورة") !== false){
$n = str_replace("جلب صورة ", "", $text);
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$n));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
• العضو { $n }
📛┇› لايوجد لديه اي صوره ✓
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
📌❉ تم جلب صورة • { $n } •
" ,
]);
}}}
if(strpos($text, "صورته") !== false){
$n = str_replace("صورته ", "", $text);
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$re_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
• العضو { $re_id }
📛┇› لايوجد لديه اي صوره ✓
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
📌❉ تم جلب صورة • { $re_id } •
" ,
]);
}}}
if ($text && $tc == "supergroup" ){
$newmessg = $allmsg + 1;
file_put_contents("data/allmsg.txt","$newmessg");
}
if ($text && $tc == "private" ){
$newmessg = $allmsgpv + 1;
file_put_contents("data/allmsgpv.txt","$newmessg");
}
if($can_change_info == 1){ 
$canchangeinfo1 = "✓";
}else{
$canchangeinfo1 = "✗";
}
if($can_delete_messages == 1){ 
$candeletemessages1 = "✓";
}else{
$candeletemessages1 = "✗";
}
if($can_restrict_members == 1){ 
$canrestrictmembers1 = "✓";
}else{
$canrestrictmembers1 = "✗";
}
if($can_invite_users == 1){ 
$caninviteusers1 = "✓";
}else{
$caninviteusers1 = "✗";
}
if($can_pin_messages == 1){ 
$canpinmessages1 = "✓";
}else{
$canpinmessages1 = "✗";
}
if($can_promote_members == 1){ 
$canpromotemembers1 = "✓";
}else{
$canpromotemembers1 = "✗";
}

if( $text=="/start" &&  $tc == "private" or $text=="🔙  رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📦┇› اهلا بڪ عزيـزي المطـور 🍁
📫┇› اليـڪ اعـداداتك الخاصه 🗳
⚙┇› تستطيع التحـكم بها الان 🛠

📮┇› مطور السـورس @E_L_4 👨‍✈️
",
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"• عدد المشتركين؛ 👥"],['text'=>"• عدد الجروبات ؛ 🚸"]
],
[
['text'=>"• وضع شرط التفعيل ؛ 〽️"]
],
[
['text'=>"• وضع كليشة مطور ؛ 🗣"],['text'=>"• وضع اسم للبوت ؛ 🤖"]
],
[
['text'=>""]
],
[
['text'=>"• تفعيل الترحيب ؛ ⚜"],['text'=>"• تعطيل الترحيب ؛ ❎"]
],
[
['text'=>""]
],
[
['text'=>"• روابط الجروبات ؛ 🖇"],['text'=>"• الاحصائيات ؛ 🗳"]
],
[
['text'=>"• تعيين كلايش الاوامر ؛ 🌀"]
],
[
['text'=>"📨┇› اذﻉـة خاص"],['text'=>"📨┇› اذﻉـة جروبات"]
],
[
['text'=>"• تفعيل البوت خدمي ؛ 🖲"]
],
[
['text'=>"📨┇› توجيـہه خاص"],['text'=>"📨┇› توجيـہه جروبات"]
],
[
['text'=>"• تعطيل البوت خدمي ؛ 💡"]
],
[
['text'=>"• تعيين الترحيب ؛ 💥"],['text'=>"• حذف الترحيب ؛ 🗑"],['text'=>""]                            
],
[
['text'=>"• جلب الترحيب ؛ 👻"]
],
[
['text'=>"• تعيين الستارت ؛ 💥"],['text'=>""],['text'=>"• حذف الستارت ؛ 🗑"]                            
],
[
['text'=>"• جلب الستارت ؛ 👻"]
],
[
['text'=>"• تعيين رد التواصل ؛ 💥"],['text'=>""],['text'=>"• حذف رد التواصل ؛ 🗑"]                            
],
[
['text'=>"• جلب رد التواصل ؛ 👻"]
],
[
['text'=>"• تفعيل التواصل ؛ ⚜"],['text'=>"• تعطيل التواصل ؛ ❎"]
],
[
['text'=>"• تحديث السورس ؛ ♻️"]
],
[
['text'=>"• تفعيل الستارت ؛ ⚜"],['text'=>"• تعطيل الستارت ؛ ❎"]
],
],
  'resize_keyboard'=>true
])
]);
}
}
if($text=="• تعيين كلايش الاوامر ؛ 🌀" &&  $tc == "private"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📦┇› اهلا بڪ عزيـزي المطـور 🍁
• راسل مطور السورس اذا كنت تريد هاذه الميزه في بوتك •
📮┇› مطور السـورس @E_L_4 👨‍✈️
• اليك اوامر هاذه الميزه :-
",
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"• تعيين امر م1"],['text'=>"• تعيين امر م2"]
],
[
['text'=>"• تعيين امر الايدي"]
],
[
['text'=>"• تعيين امر م3"],['text'=>"• تعيين امر م4"]
],
[
['text'=>"• تعيين امر م5"]
],
[
['text'=>"• تعيين امر م المطور"],["text"=>""]
],
[
['text'=>"• تعيين رد لامر { السورس }"]
],
[
['text'=>"• تعيين امر { الاوامر }"],['text'=>""]
],
[
['text'=>""]
],
],
])
]);
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl == null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
📮❉ تم ارسال رسالتك لـ المطور ✓
📬❉ معرف المطور » $buyy",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'• قناة السورس •','url'=>'https://t.me/E_L_4']],
               ]
        ])
    ]);
}
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl != null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$Twasl",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'• قناة السورس •','url'=>'https://t.me/E_L_4']],
               ]
        ])
    ]);
}
}
}
if($message->reply_to_message->forward_from->id and in_array($from_id,$Dev)){
    bot('sendMessage',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$Dev[0],
        'text'=>"
• تم ارسال رسالتك •",
]);
}

elseif($text =="• الاحصائيات ؛ 🗳" or $text == "الاحصائيات"){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
$allc = $group + $users;
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"
👨‍💻┇› اهلا بك عزيــزي 🍂
♻✣ اليك احصائيات بوتك :-
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️┇› عدد المشتركين  ‹ $users › ➺
💬┇› عدد الجروبات ‹ $group › ➺
🚸┇› عدد رسائل الخاص ‹ $allmsgpv › ➺
",
                'hide_keyboard'=>true,
		]);
		}}
$new = $message->new_chat_member;
$newbot = $update->message->new_chat_member;
$wel = file_get_contents("wel.txt");
if ($new and $new->id == $bot_id and $wel == null) {
$op1 = file_get_contents("openwel.txt");
if($op1 == "✔"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"👨‍✈️❉ اهلا انا اسمي $namebot 🎗
🏅❉ عملي هو حماية مجموعتك •
☢❉ من الاعلانات والتفليش ..الخ •
🔰❉ خالي من الاعلانات وآمن •

⚜❉ ارفعني ادمن وارسل تفعيل •
🔱❉ مطوري › $buyy ✅
♻️",
'reply_to_message_id'=>$message->message_id
]);}}
$wel = file_get_contents("wel.txt");
if ($new and $new->id == $bot_id and $wel != null) {
$op1 = file_get_contents("openwel.txt");
if($op1 == "✔"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$wel",
'reply_to_message_id'=>$message->message_id
]);}}
elseif($text =="• عدد المشتركين؛ 👥" or $text == "المشتركين" or $text == "عدد المشتركين"){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
$allc = $group + $users;
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"
👨‍💻┇› اهلا بك عزيــزي 🍂

👨‍✈️┇› عدد المشتركين  ‹ $users › ➺
",
                'hide_keyboard'=>true,
		]);
		}}
elseif($text =="• عدد الجروبات ؛ 🚸" or $text == "عدد الجروبات" or $text == "الجروبات"){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
$allc = $group + $users;
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"
👨‍💻┇› اهلا بك عزيــزي 🍂

💬┇› عدد الجروبات ‹ $group › ➺
",
                'hide_keyboard'=>true,
		]);
		}}
elseif ($text  == '📨┇› اذﻉـة خاص' && in_array($from_id,$Dev)) {
$users = count($user["userlist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ ارسل رسالتك الان ✓
🚸✣ ليتم ارسالها الى $users مشترك !!",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="senduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› اذﻉـة جروبات' && in_array($from_id,$Dev)) {
$group = count($user["grouplist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ ارسل رسالتك الان ✓
🚸✣ ليتم ارسالها الى $group جروب !!",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="sendgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› اذﻉـة عام' && in_array($from_id,$Dev)) {
$group = count($user["grouplist"]);
$users = count($user["userlist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ ارسل رسالتك الان ✓
🚸✣ ليتم ارسالها الى $group جروب و $users عضو !!",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="sendall";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› توجيـہه جروبات' && in_array($from_id,$Dev)) {
$group = count($user["grouplist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ قم بتوجيه رسالتك الان ✓
🚸✣ ليتم توجيهها الى $group جروب !!",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forwardgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› توجيـہه عام' && in_array($from_id,$Dev)) {
$group = count($user["grouplist"]);
$users = count($user["userlist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ قم بتوجيه رسالتك الان ✓
🚸✣ ليتم توجيهها الى $group جروب و $users عضو !!
",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forall";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› توجيـہه خاص' && in_array($from_id,$Dev)) {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ وججه رسالتك الان ✓
🚸✣ ليتم توجيهها الى $users مشترك !!",
				  'reply_to_message_id'=>$message_id,
				   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
    		]);
$user["userjop"]["$from_id"]["file"]="forwarduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}


elseif ($user["userjop"]["$from_id"]["file"] == 'forwarduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال الرسالة بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'forwardgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>" تم ارسال الرسالة بنجاح✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'sendgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     bot('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$text ",
        ]);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'senduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     bot('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$text ",
        ]);
}
}
}
$set = file_get_contents("set.txt");
$m1 = file_get_contents("m1.txt");
if ($text == "• تعيين امر م1" and in_array($from_id,$Dev)){
file_put_contents("set.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة م1 الان ✓
الكليشة الحالية 
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر القفل والفتح !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
• قفل + الامر ادناه » لقفل الامر 🔐
• فتح + الامر ادناه » لفتح الامر 🔓

💥 الروابط «» التوجيه
💥 المعرفات «» التاك
💥 الملصقات «» الاشعارات
💥 الالعاب «» المواقع
💥 العربيه «» الانجليزيه
💥 الفيديو «» البصمات
💥 الموسيقى «» المتحركة
💥 الماركداون «» الجهات
💥 الممنوعات «» الرد
💥 الكل «» التكرار
💥 الدردشة «» البوتات
💥 التعديل «» الملفات
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
• تعطيل + الامر ادناه » لتعطيل امر 🔐
• تفعيل + الامر ادناه » لتفعيل الامر 🔓

📮✣ الايدي
📮✣ اطردني
📮✣ الرابط
📮✣ الالعاب
📮✣ الاشتراك الاجباري
📮✣ الاضافه
📮✣ الزخرفه
📮✣ التصميم
📮✣ الترحيب
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ @E_L_4 › 👨🏽‍💻
#ملاحظة :/ لاتضيف اوامر جديدة من عندك
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nam" and in_array($from_id,$Dev)){
file_put_contents("m1.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ م1 بنجاح ✓
🔱✣ صبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$m2 = file_get_contents("m2.txt"); 
if ($text == "• تعيين امر م2" or $text == "تعيين م2" and in_array($from_id,$Dev)){
file_put_contents("set.txt","namm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة م2 الان ✓
الكليشة الحالية 
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر اوامر الوضع !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🗯❉ وضع ترحيب 
🗯❉ وضع توديع
• تاكد من تفعيل الترحيب •
• تاكد من تفعيل التوديع •
🗯❉ وضع قوانين + القوانين
🗯❉ وضع قناة + قناة اشتراك اجباري
🗯❉ وضع عدد الاضافه + عدد
🗯❉ وضع اسم + اسم للمجموعة
🗯❉ وضع وصف + نص الوصف
🗯❉ وضع  + نص الترحيب
🗯❉ وضع رابط
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ @E_L_4 › 👨🏽‍💻
#ملاحظة :/ لاتضيف اوامر جديدة من عندك
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="namm" and in_array($from_id,$Dev)){
file_put_contents("m2.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ م2 ✓
🔱✣ صبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$m3 = file_get_contents("m3.txt");
if ($text == "• تعيين امر م3" or $text == "تعيين م3" and in_array($from_id,$Dev)){
file_put_contents("set.txt","nammm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة م1 الان ✓
الكليشة الحالية 
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر الادمنيه والمدراء! 
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🚫❉ حظر (بالرد) » لحظر العضو من المجموعة 
🚫❉ كتم/تقييد (بالرد) » لتقييد العضو في المجموعة
🚫❉ تقييد/كتم لمدة + عدد الدقائق » لكتم او تقييد العضو بالتوقيت
🚸❉ رفع ادمن (بالرد) » لرفع العضو ادمن بالمجموعة
🚸❉ رفع مشرف (بالرد) » لرفع العضو مشرف في المجموعة
🚸❉ رفع مدير » لرفع العضو مدير في المجموعة
??❉ رفع ممير » لرفع العضو مميز بالمجموعة
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
🔱❉ اوامر المسح وعرض القوائم :-
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
⛓❉ الادمنيه » لعرض الادمنية
⛓❉ مسح الادمنيه
⛓❉ المكتومين » لعرض المكتومين
⛓❉ المقيدين » لعرض المقيدين
⛓❉ مسح المكتومين
⛓❉ مسح المقيدين
⛓❉ القوانين » لعرض القوانين
⛓❉ مسح القوانين
⛓❉ المدراء » لعرض قائمة المدراء
⛓❉ مسح المدراء » لمسح المدراء
⛓❉ المميزين » لعرض المميزين
⛓❉ مسح المميزين 
⛓❉ المشرفين » لعرض المشرفين
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
📮✣ للاستفسار ‹ @E_L_4 › 👨🏽‍💻
#ملاحظة :/ لاتضيف اوامر جديدة من عندك
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nammm" and in_array($from_id,$Dev)){
file_put_contents("m3.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ م3 بنجاح ✓
🔱✣ صبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$m4 = file_get_contents("m4.txt");
if ($text == "• تعيين امر م4" or $text == "تعيين م4" and in_array($from_id,$Dev)){
file_put_contents("set.txt","nammmm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة م2 الان ✓
الكليشة الحالية 
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر اوامر الاعضاء !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🗯❉ ايدي » لعرض ايديك ومعلوماتك
🗯❉ معلوماتي » لعرض معلوماتك
🗯❉ موقعي » لعرض موقعك
🗯❉ اسمي » لعرض اسمك
🗯❉ معرفي » لعرض معرفك
🗯❉ ايديي » لعرض ايديك
🗯❉ رتبتي » لعرض رتبتك
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ @E_L_4 › 👨🏽‍💻
#ملاحظة :/ لاتضيف اوامر جديدة من عندك
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nammmm" and in_array($from_id,$Dev)){
file_put_contents("m4.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ م4 ✓
🔱✣ صبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$m5 = file_get_contents("m5.txt");
if ($text == "• تعيين امر م5" or $text == "تعيين م5" and in_array($from_id,$Dev)){
file_put_contents("set.txt","ser");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة م5 ✓
الكليشة الحالية 
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر اوامر الاضافيه !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
💢❉ اضف رد 
💢❉ حذف رد
💢❉ الردود
💢❉ مسح الردود
💢❉ زخرفلي
💢❉ صصملي
💢❉ رسائلي
💢❉ نقاطي
💢❉ بيع نقاطي
💢❉ مسح رسائلي
💢❉ الالعاب
💢❉ تفاعلي
💢❉ نسبه تفاعلي
💢❉ /insta + رابط المنشور
💢❉ اطردني
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ @E_L_4 › 👨🏽‍💻
#ملاحظة :/ لاتضيف اوامر جديدة من عندك
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="ser" and in_array($from_id,$Dev)){
file_put_contents("m5.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ م5 ✓
🔱✣ صبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$mdev = file_get_contents("mdev.txt");
if ($text == "• تعيين امر م المطور" or $text == "تعيين م5" and in_array($from_id,$Dev)){
file_put_contents("set.txt","nammn");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة م5 ✓
الكليشة الحالية 
👨‍✈️❉ اهلا بك مطوري 🙋🏽‍♂
🔘❉ اليك اوامرك في خاص البوت وهنا !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
• تفعيل/تعطيل المجموعات
• وضع شرط التفعيل
• تفعيل البوت خدمي
• تفعيل البوت للمطور
• وضع اسم للبوت
• رفع/تنزيل مطور
• المطورين / مسح المطورين
• رفع منشئ / مدير
• بقيه الاوامر في كيبورد البوت في الخاص
• تستطيع التحكم بها هنا ايضا
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
📮✣ للاستفسار ‹ @E_L_4
#ملاحظة :/ لاتضيف اوامر جديدة من عندك
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nammn" and in_array($from_id,$Dev)){
file_put_contents("mdev.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ م المطور ✓
🔱✣ صبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$mid = file_get_contents("mid.txt");
if ($text == "• تعيين امر الايدي" or $text == "تعيين الايدي" and in_array($from_id,$Dev)){
file_put_contents("set.txt","naam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة امر الايدي ✓

• لطبع اسم المستخدم { NA }
• لطبع معرف المستخدم { US }
• لطبع ايدي المستخدم { ID }
• لطبع عدد النقاط { PO }
• لطبع عدد الصور { PIC }
• لطبع رتبة المستخدم { ST }
• لطبع عدد الرسائل { MSG }
• لطبع ايدي الجروب { IDGP }
• لطبع راي الصوره { PT }
• لطبع تفاعلك { TF }
• لطبع نسبة تفاعلك { FFF }

هاذه دوال من الضروري استخدامها في كليشة الايدي 🔱
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="naam" and in_array($from_id,$Dev)){
file_put_contents("mid.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ امر الايدي ✓
 ", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$minfo = file_get_contents("data/minfo.txt");
if ($text == "• تعيين امر معلوماتي" or $text == "تعيين معلوماتي" and in_array($from_id,$Dev)){
file_put_contents("set.txt","naamm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة امر معلوماتي ✓

• لطبع اسم المستخدم { NA }
• لطبع معرف المستخدم { US }
• لطبع ايدي المستخدم { ID }
• لطبع عدد النقاط { PO }
• لطبع عدد الصور { PIC }
• لطبع رتبة المستخدم { ST }
• لطبع عدد الرسائل { MSG }
• لطبع ايدي الجروب { IDGP }
• لطبع راي الصوره { PT }
• لطبع تفاعلك { TF }
• لطبع نسبة تفاعلك { FFF }

هاذه دوال من الضروري استخدامها في كليشة معلوماتي 🔱
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="naamm" and in_array($from_id,$Dev)){
file_put_contents("data/minfo.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ امر معلوماتي ✓
 ", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$mhinfo = file_get_contents("data/mhinfo.txt");
if ($text == "• تعيين امر معلوماته" or $text == "تعيين معلوماته" and in_array($from_id,$Dev)){
file_put_contents("set.txt","naaamm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة امر معلوماته ✓

• لطبع اسم المستخدم { NA }
• لطبع معرف المستخدم { US }
• لطبع ايدي المستخدم { ID }
• لطبع عدد النقاط { PO }
• لطبع عدد الصور { PIC }
• لطبع رتبة المستخدم { ST }
• لطبع عدد الرسائل { MSG }
• لطبع ايدي الجروب { IDGP }
• لطبع راي الصوره { PT }
• لطبع تفاعلك { TF }
• لطبع نسبة تفاعلك { FFF }

هاذه دوال من الضروري استخدامها في كليشة معلوماته 🔱
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="naaamm" and in_array($from_id,$Dev)){
file_put_contents("data/mhinfo.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ امر معلوماته ✓
 ", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$morder = file_get_contents("morder.txt");
if ($text == "• تعيين امر { الاوامر }" or $text == "تعيين م5" and in_array($from_id,$Dev)){
file_put_contents("set.txt","nnam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة الاوامر ✓
الكليشة الحالية 
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك قائمة الاوامر العامه !
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉
⚜❉ م1 » لعرض اوامر القفل والفتح
⚜❉ م2 » لعرض اوامر الوضع 
⚜❉ م3 » لعرض اوامر الادمنيه
⚜❉ م4 » لعرض اوامر الاعضاء
⚜❉ م5 » لعرض الاوامر الاضافيه
⚜❉ م المطور » لعرض اوامر المطور
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮✣ للاستفسار ‹ @E_L_4 › 👨🏽‍💻
#ملاحظة :/ لاتضيف اوامر جديدة من عندك
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nnam" and in_array($from_id,$Dev)){
file_put_contents("morder.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ امر الاوامر ✓
🔱✣ صبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$set = file_get_contents("set.txt");
$mso = file_get_contents("mso.txt");
if ($text == "• تعيين رد لامر { السورس }" or $text == "تعيين م5" and in_array($from_id,$Dev)){
file_put_contents("set.txt","naaam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة الرد ✓
الكليشة الحالية 
👨‍✈️❉ اهلا بك عزيزي في سورس روكي
💢❉ السورس الاول بلغه php
💢❉ السورس الاول اكتمالا في اليمن والدول العربيه
💢❉ لايحتاج سرفرات او VPS
💢❉ سريع جدا ومميزات خياليه
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
💢❉ قم بمراسله المطور لصنع بوت مدفوع خاص بك › @E_L_4 ✅
📮✣ لصنع بوتك مجاني من مصنع بوتات روكي ‹ @Hmai5bot › 👨🏽‍💻
#ملاحظة :/ لاتضيف اوامر جديدة من عندك
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="naaam" and in_array($from_id,$Dev)){
file_put_contents("mso.txt",$text); 
file_put_contents("set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ كليشه السورس ✓
🔱✣ صبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$twasl = file_get_contents("twasl.txt");
if($text=="• جلب رد التواصل ؛ 👻" and $twasl == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الحالي` } •

📮❉ تم ارسال رسالتك لـ المطور ✓
📬❉ معرف المطور » $buyy
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/E_L_4"]],
]])
]);
}}}
$twasl = file_get_contents("twasl.txt");
if($text=="• جلب رد التواصل ؛ 👻" and $twasl != null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الجديد` } •

$twasl
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/E_L_4"]],
]])
]);
}}}
$wel = file_get_contents("wel.txt");
if($text=="• جلب الترحيب ؛ 👻" and $wel == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد الترحيب الحالي` } •

👨‍✈️❉ اهلا انا اسمي $namebot 🎗
🏅❉ عملي هو حماية مجموعتك •
☢❉ من الاعلانات والتفليش ..الخ •
🔰❉ خالي من الاعلانات وآمن •

⚜❉ ارفعني ادمن وارسل تفعيل •
🔱❉ مطوري › $buyy ✅
♻️
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/E_L_4"]],
]])
]);
}}}
$wel = file_get_contents("wel.txt");
if($text=="• جلب الترحيب ؛ 👻" and $wel != null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد الترحيب الجديد` } •

$wel
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/E_L_4"]],
]])
]);
}}}

$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
if ($text == "• وضع اسم للبوت ؛ 🤖" or $text == "وضع اسم للبوت" and $namebot == null and in_array($from_id,$Dev)){
file_put_contents("setname.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال اسم لي الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $setnamebot =="nam" and in_array($from_id,$Dev)){
file_put_contents("namebot.txt",$text); 
file_put_contents("setname.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الاسم بنجاح ✓
🔱✣ اسمي الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
if ($text == "• تعيين رد التواصل ؛ 💥" or $text == "تعيين رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twassl.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الرد الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $Twassl =="nam" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt",$text); 
file_put_contents("twassl.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الرد بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$kock = file_get_contents("kock.txt");
$kocke = file_get_contents("kocke.txt");
if ($text == "وضع عدد التفعيل" or $text == "وضع شرط التفعيل" or $text == "• وضع شرط التفعيل ؛ 〽️" and in_array($from_id,$Dev)){
file_put_contents("kock.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال العدد الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kock =="nam" and in_array($from_id,$Dev)){
file_put_contents("kocke.txt",$text); 
file_put_contents("kock.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ العدد بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
• لن يستطيع احد تفعيل مجموعته اذا كانت اقل من $text عضو ✓
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

$wel = file_get_contents("wel.txt");
$well = file_get_contents("well.txt");
if ($text == "• تعيين الترحيب ؛ 💥" or $text == "تعيين الترحيب" and in_array($from_id,$Dev)){
file_put_contents("well.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الترحيب الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $well =="nam" and in_array($from_id,$Dev)){
file_put_contents("wel.txt",$text); 
file_put_contents("well.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الترحيب بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
mkdir("data/$chat_id");
$setlink = file_get_contents("data/$chat_id/set.txt");
$linktxt = file_get_contents("data/$chat_id/link.txt");
if ($text == "وضع رابط" or $text == "ضع رابط" or $text == "وضع الرابط" or $text == "ضع الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/set.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الرابط الان ✓
",
 'reply_to_message_id'=>$message_id
,]);}}}
if ($text == "حذف الرابط" or $text == "حذف الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/link.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣  تم حذف الرابط بنجاح ✓
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text && $setlink =="nam"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/link.txt",$text); 
file_put_contents("data/$chat_id/set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الرابط بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
",
 'reply_to_message_id'=>$message_id
,]);}}}
$setlink = file_get_contents("data/$chat_id/set.txt");
$byetxt = file_get_contents("data/$chat_id/bye.txt");
if ($text == "وضع توديع" or $text == "ضع توديع" or $text == "وضع التوديع" or $text == "ضع التوديع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/set.txt","naa");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة التوديع الان ✓
",
 'reply_to_message_id'=>$message_id
,]);}}}
if ($text == "حذف توديع" or $text == "حذف التوديع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/bye.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف التوديع ✓
",
 'reply_to_message_id'=>$message_id
,]);}}}
$setrules = file_get_contents("data/$chat_id/set.txt");
$ruless = file_get_contents("data/$chat_id/rules.txt");
if ($text == "وضع قوانين" or $text == "ضع قوانين" or $text == "وضع القوانين" or $text == "ضع القوانين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/set.txt","nja");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة القوانين الان ✓
",
 'reply_to_message_id'=>$message_id
,]);}}}
if ($text == "حذف قوانين" or $text == "حذف القوانين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/bye.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف القوانين ✓
",
 'reply_to_message_id'=>$message_id
,]);}}}
if ($text == "القوانين" or $text == "قوانين"){
if ($tc == 'group' | $tc == 'supergroup'){
$ruless = file_get_contents("data/$chat_id/ruless.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
$ruless
",
 'reply_to_message_id'=>$message_id
,]);}}
if($text && $setrules =="nja"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/rules.txt",$text); 
file_put_contents("data/$chat_id/set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ القوانين بنجاح ✓
🔱✣ اصبحت الان  ❨ $text ❩
",
 'reply_to_message_id'=>$message_id
,]);}}}
$setlink = file_get_contents("data/$chat_id/set.txt");
$welctxt = file_get_contents("data/$chat_id/welc.txt");
if ($text == "وضع ترحيب" or $text == "ضع ترحيب" or $text == "وضع الترحيب" or $text == "ضع الترحيب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/set.txt","nea");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة الترحيب الان ✓

• يمكنك الترحيب بدوال خاصه منها :-
- دالة اسم الجروب » {GP}
- دالة معرف العضو » {USER}
- دالة اسم العضو » {NAME}
- دالة ايدي العضو » {ID}
• يمكنك دمج احد هاذه الدوال في الكليشه لطبع المطلوب كمثال :-
• مرحبا بك عزيزي USER في جروب GP
ايديك » ID
",
 'reply_to_message_id'=>$message_id
,]);}}}
if ($text == "حذف ترحيب" or $text == "حذف الترحيب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/bye.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف الترحيب ✓
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text && $setlink =="nea"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/welc.txt",$text); 
file_put_contents("data/$chat_id/set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الترحيب بنجاح ✓

🔱✣ اصبح الان  ❨ $text ❩
",
 'reply_to_message_id'=>$message_id
,]);}}}
$sek = file_get_contents("sek.txt");
$sekk = file_get_contents("sekk.txt");
if ($text == "تفعيل البوت خدمي" or $text == "• تفعيل البوت خدمي ؛ 🖲" and in_array($from_id,$Dev)){
file_put_contents("sek.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ ارسل نعم للتاكيد ✓
• او ارسل اي امر اخر للالغاء ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "نعم" && $sek =="nam" and in_array($from_id,$Dev)){
file_put_contents("sekk.txt","متاح"); 
file_put_contents("sek.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم تغيير نظام البوت ✓
🔱✣ اصبح الان  ❨ متاح ❩
• يستطيع اي شخص تفعيل المجموعة بدون الحاجه لك 
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$sek = file_get_contents("sek.txt");
$sekk = file_get_contents("sekk.txt");
if ($text == "تعطيل البوت خدمي" or $text == "• تعطيل البوت خدمي ؛ 💡" and in_array($from_id,$Dev)){
file_put_contents("sek.txt","namm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ ارسل نعم للتاكيد ✓
• او ارسل اي امر اخر للالغاء ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "نعم" && $sek =="namm" and in_array($from_id,$Dev)){
file_put_contents("sekk.txt","للمطور"); 
file_put_contents("sek.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم تغيير نظام البوت ✓
🔱✣ اصبح الان  ❨ للمطور فقط ❩
• انت فقط تستطيع تفعيل المجموعات 
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$startt = file_get_contents("start.txt");
$starttext = file_get_contents("starttxt.txt");
if ($text == "• تعيين الستارت ؛ 💥" or $text == "تعيين الستارت" and in_array($from_id,$Dev)){
file_put_contents("start.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الكليشه الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $startt =="nam" and in_array($from_id,$Dev)){
file_put_contents("starttxt.txt",$text); 
file_put_contents("start.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الكليشه ✓
🔱✣ اصبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "• حذف الستارت ؛ 🗑" or $text == "حذف الستارت" and in_array($from_id,$Dev)){
file_put_contents("starttxt.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف كليشه الستارت ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "• حذف الترحيب ؛ 🗑" or $text == "حذف الترحيب" and in_array($from_id,$Dev)){
file_put_contents("wel.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف كليشه الترحيب ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "• حذف رد التواصل ؛ 🗑" or $text == "حذف رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف كليشه رد التواصل
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$s = json_decode(file_get_contents('http://www.api-hany.cf/time?GTM=Asia/Baghdad&lang=ar'),true);
$time = $s["time"];
$date = $s["date"];
$day = $s["day"];
$mon = $s["month"];
$t24 = $s["time24"];
$dayhj = $s["hijri"]["day"];
$monhj = $s["hijri"]["month"];
$yearhj = $s["hijri"]["year"];
if($text == "الوقت" or $text == "الساعة" or $text == "الساعه"){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
🕐❉ الوقت الان -: $time {$t24}
",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
]);
}
$s = json_decode(file_get_contents('http://www.api-hany.cf/time?GTM=Asia/Baghdad&lang=ar'),true);
$time = $s["time"];
$date = $s["date"];
$day = $s["day"];
$mon = $s["month"];
$t24 = $s["time24"];
$dayhj = $s["hijri"]["day"];
$monhj = $s["hijri"]["month"];
$yearhj = $s["hijri"]["year"];
if($text == "كم التاريخ" or $text == "تاريخ" or $text == "التاريخ"){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
📆❉ التاريخ » $date
📅❉التاريخ العربي » *$dayhj*/*$monhj*/*$yearhj*
",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
]);
}
$fre = file_get_contents("data/$chat_id/sett.txt");
if ($text == "صمملي" or $text == "صمم"){
$lockphotor = $settings["lock"]["photoshop"];
if ($lockphotor == "مفتوح") {
if($tc == "supergroup"){
file_put_contents("data/$chat_id/sett.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال اسمك الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text && $fre =="nam"){
if($tc == "supergroup"){
file_put_contents("data/$chat_id/sett.txt","");
bot("sendPhoto",[
"chat_id"=>$chat_id,
"photo" => "https://rta10.ir/creatphoto/api/api.php?text=$text&color=white&size=100&RL=-160&UD=120&RO=0&picaddrs=799273845/file_8995.jpg&font=QuranTaha.ttf",
'caption'=>"
🚸✣ تم تصميم الاسم بنجاح ✓
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}}
$linksg = file_get_contents("linkss.txt");
$namesg = file_get_contents("lonks.txt");
if ($text == "• روابط الجروبات ؛ 🖇" or $text == "روابط الجروبات"){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ اليك روابط المجموعات :-

$namesg
$linksg

",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id
,]);}

$freee = file_get_contents("freee.txt");
if ($text == "زخرفه" or $text == "زخرفة" or $text == "زخرفلي"){
file_put_contents("freee.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال اسمك الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $freee =="nam"){
file_put_contents("freee.txt","");
$get = json_decode(file_get_contents("https://api-bots.000webhostapp.com/api/ZH.php?text=$text"));
$z = $get->result->z;
$z1 = $get->result->z1;
$z2 = $get->result->z2;
$z3 = $get->result->z3;
$z4 = $get->result->z4;
$z5 = $get->result->z5;
$z6 = $get->result->z6;
$z7 = $get->result->z7;
$z8 = $get->result->z8;
$z9 = $get->result->z9;
$z10 = $get->result->z10;
$z11 = $get->result->z11;
$z12 = $get->result->z12;
$z13 = $get->result->z13;
$z14 = $get->result->z14;
$z15 = $get->result->z15;
$z16 = $get->result->z16;
$z17 = $get->result->z17;
$z18 = $get->result->z18;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
`$z `
`$z1 `
`$z2 `
`$z3 `
`$z4 `
`$z5 `
`$z6 `
`$z7 `
`$z8`
`$z9 `
`$z10 `
`$z11 `
`$z12 `
`$z13 `
`$z14 `
`$z15 `
`$z16 `
`$z17 `
`$z18 `
*-------------*
🚸✣ تم زخرفة الاسم بنجاح ✓
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "بوت" || $text == "ايش اسمك" || $text == "شسمك" || $text == "مسمك" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"محد سماني  ☹💔"
,'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id,
]);}}
if($text == "بوت" || $text == "ايش اسمك" || $text == "شسمك" || $text == "مسمك" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"آإسسمي $namebot 🌚☄
• اي خدمات ☹"
,'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id,
]);}}

$kdeveloper = file_get_contents("kdevelopers.txt");
$kdevelopers = file_get_contents("kdeveloper.txt");
if ($text == "• وضع كليشة مطور ؛ 🗣" || $text == "وضع كليشة المطور" and in_array($from_id,$Dev)){
file_put_contents("kdevelopers.txt","namdev");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة للمطور الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kdeveloper =="namdev" and in_array($from_id,$Dev)){
file_put_contents("kdeveloper.txt",$text); 
file_put_contents("kdevelopers.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
👨‍✈️✣ تم حفظ كليشتك ✓

`$text`
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "المطور" and $kdevelopers != null || $kdevelopers != " "){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$kdevelopers",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}
if($text == "المطور"and $kdevelopers == null || $kdevelopers == " "){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
🍁✣ لم يتم وضع كليشة للمطور ✗",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}

$message_id = $update->message->message_id;
$user          = $update->message->from->username;

/*
الاوامر كتٱلي : 
- اضف رد ، مسح رد ، الردود ، مسح الردود 
- اضف رد عام ، مسح رد عام ، الردود العامه ، مسح الردود العامه
*/
if($text == "$namebot"){
$rand = array('سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑','نعم حبي 😎','اشتعلو اهلي شتريد 😠','لك افداك اني حبيبي انت اموووح 💋','بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف 😂','هياتني اجيت 🌚❤️','راجع المكت حبيبي عبالك اني سهل تحجي ويا 😒','باقي ويتمدد 😎','لك دبدل ملابسي اطلع برااااا 😵😡 ناس متستحي','دا اشرب جاي تعال غير وكت 😌','هوه غير يسكت عاد ها شتريد 😷','انت مو اجيت البارحه تغلط عليه ✋🏿😒');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'تخليني'){
$rand = array('لمن يصير عدك 🌚💗' , 'ديلك وصخ 🌚🌼' , 'ي فتح حلكك دابول 🌚😹');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'البوت'){
$rand = array('معاجبك 🌚🌼 ؟' , 'شبي 😒😹' , 'صكارك/ج 🌚💗');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'البوت واكف'){
$rand = array('تخسه 🌚💗' , 'لتجذب 🌚🌼' , 'لاع مو هاي مشتغل 🌚😹');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'منو حذف رسايلي'){
$rand = array('محد 🌚💗' , 'البوت 😹💚' , 'معرف 😹🌿');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'اكطع'){
$rand = array('سلطه من بعد البوت' , 'النعال عراسك 😹😹😹🌚' , 'شعليك 🌚💗');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'المدرسه'){
$rand = array('اشش خلينه ناسينها 😹🌚' , 'الله لا يشوفنه 😒💗' , 'حزوع 😹😹🌚');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'يعني شكد'){
$rand = array('فوك متتوقع 😻💗' , 'حد الموت 🙊🌼' , 'حد الجنون 😻🙊');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'تبادل'){
$rand = array('متمل انت 😒🌿' , 'لع منريد 😹🌚' , 'بعدكم عايشين 🌚💗');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'البوت عاوي'){
$rand = array('مضغوط 🌚😹 ', 'اهينك 🌚😹 ؟');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
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
$startt = file_get_contents("start.txt");
$starttext = file_get_contents("starttxt.txt");
if($text=="/start" and $starttext == null){
$st1 = file_get_contents("startlock.txt");
if($st1 == "✔"){
if($tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💯¦ مـرحبآ آنآ بوت آسـمـي $namebot 🎖
💰¦ آختصـآصـي حمـآيهہ‌‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‌‏ وآلتگرآر وآلخ...
🚸¦ البوت خدمي ومتاح للكل 
👷🏽¦ فقط اضف البوت لمجموعتك وارفعه مشرف  
  ثم ارسل تفعيل

⚖️¦ مـعرف آلمـطـور  : $buyy
👨🏽‍🔧
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ﺂ لمطـــــور 🍁",'url'=>"t.me/$tbbots"]],
]])
]);
}}}}
$starttext = file_get_contents("starttxt.txt");
if($text=="/start" and $starttext != null){
if($tc == "private"){
$st1 = file_get_contents("startlock.txt");
if($st1 == "✔"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$starttext
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ﺂ لمطـــــور 🍁",'url'=>"t.me/$tbbots"]],
]])
]);
}}}}
$startt = file_get_contents("start.txt");
$starttext = file_get_contents("starttxt.txt");
if($text=="• جلب الستارت ؛ 👻" and $starttext == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رسالة الستارت الحالية` } •

💯¦ مـرحبآ آنآ بوت آسـمـي $namebot 🎖
💰¦ آختصـآصـي حمـآيهہ‌‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‌‏ وآلتگرآر وآلخ...
🚸¦ البوت خدمي ومتاح للكل 
👷🏽¦ فقط اضف البوت لمجموعتك وارفعه مشرف  
  ثم ارسل تفعيل

⚖️¦ مـعرف آلمـطـور  : $buyy
👨🏽‍🔧
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
]);
}}}
$starttext = file_get_contents("starttxt.txt");
if($text=="• جلب الستارت ؛ 👻" and $starttext != null){
if($tc == "private"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رسالة الستارت الحالية` } •

$starttext
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  }}
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;

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
// folders auto //
mkdir("data");
mkdir("data/developers");
mkdir("data/dog");
mkdir("data/dog/$chat_id");
mkdir("data/jok");
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
if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
			file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
			file_put_contents("data/developers/developers.txt","- @" . $re_user . " » " . $re_id . "❉" . "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مطور
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مطور بالفعل
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "رفع مطور اساسي" and $re_id !=$id_Bot and  in_array($from_id,$Dev)){
			file_put_contents("$re_id.txt",$re_id);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مطور اساسي
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "رفع مطور"  || $text == "رفع ادمن" || $text == "رفع مميز" || $text == "رفع مدير" || $text == "رفع منشئ" and $re_id ==$bot_id and in_array($from_id,$Dev)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📮 ❉ لاتحرجناش والله ماريد 😹😹
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المطورين" and $developers != null and in_array($from_id,$Dev)){
$cdevs = count($developers);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*🛠 ❉ تم حذف ❨ $cdevs ❩ من المطورين ✓*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}
if($text == "مسح المطورين" and $developers == null and in_array($from_id,$Dev)){
$cdevs = count($developers);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*🛠 ❉ لايوجد مطورين ✓*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}

if($re and $text == "رفع مدير" || $text == "رفع المدير"  and !in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *❉* [" . "@". $re_user ."] *𓆪* " . "»" . " `". $re_id ."`". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مدير
✓️"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
}
if($re and $text == "رفع مدير" || $text == "رفع المدير" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مدير بالفعل
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}

if($text == "مسح المدراء" and $mangers_info != NULL and $mangers_info != " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
$cmang = count($mangers)-1;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*🛠 ❉ تم حذف ❨ $cmang ❩ من المدراء ✓*",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
}}
if($text == "مسح المدراء" and $mangers_info == NULL or $mangers_info == " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*
📛❉ لم يتم رفع اي مدير ✗*",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *❉* [" . "@". $re_user ."] *𓆪* " . "»" . " `". $re_id ."`","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنزيله من المدراء
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" || $text == "تنزيل منشئ" || $text == "تنزيل المنشئ" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت تنزيله من المدراء من قبل
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" || $text == "تنزيل المطور"  and in_array($re_id,$developer)){
	$re_id_info = file_get_contents("data/developers/$chat_id.txt");
	$devr = file_get_contents("data/developers/$chat_id/developer.txt");
	$devr1 = explode("             \n",$devr);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" - @" . $re_user . " » " . $re_id . "❉","",$devr1);
	file_put_contents("data/developers/developer.txt",$str);
			file_put_contents("data/developers/developers.txt",$str);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنزيله من المطورين
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل المطور" || $text == "تنزيل مطور" || $text == "تنزيل ورديسسس" and !in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنزيله من المطورين بالفعل
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور اساسي" || $text == "تنزيل مطور الاساسي"  and in_array($re_id,$Dev)){
			file_put_contents("$re_id.txt","");
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنزيله من المطورين الاساسين
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع ادمن"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح ادمن
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if ($re and $text == "رفع ادمن" and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح ادمن بالفعل
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($text == "مسح الادمنيه" or $text == "مسح الادمنية" ){
$cadmins = count($admin_users)-1;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*🛠 ❉ تم حذف ❨ $cadmins ❩ من الادمنيه ✓*",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
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
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنزيله من الادمنيه
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ انه ليس ادمن
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and !in_array($re_id,$mmyaz)){
file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مميز
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت ترقيته ليصبح مميز
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "مسح المميزين" ){
$cmmyz = count($mmyazs)-1;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*🛠 ❉ تم حذف ❨ $cmmyz ❩ من المميزين ✓*
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
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
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنزيله من المميزين
✓️
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تمت تنزيله من المميز بالفعل
✓️
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer)){
if($text == "رفع مدير" || $text == "رفع منشئ" or $text == "رفع الادمنيه" or $text == "رفع الادمنية" or $text == "تفعيل"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📮 ❉ هاذا الامر {للمنشئين|المطورين}
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if( !in_array($from_id,$Dev)){
if($text == "رفع مطور" || $text == "تنزيل مطور" or $text == "رفع منشئ" or $text == "المطورين" or $text == "مسح مطور"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📮 ❉ هاذا الامر {للمنشئين|المطورين}
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "رفع ادمن" || $text == "رفع مميز" or $text == "م1" or $text == "م2" or $text == "م3" or $text == "م4" or $text == "م5" or $text == "قفل الصور" or $text == "تنزيل مميز" or $text == "تنزيل ادمن" or $text == "قفل الفيديو" or $text == "فتح الفيديو" or $text == "تفعيل الايدي" or $text == "تعطيل الايدي"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📮 ❉ هاذا الامر {للمنشئين|المطورين|الادمنيه|المدراء}
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "فتح الروابط"  || $text == "الادمنية" || $text == "المميزين" || $text == "الادمنيه" || $text == "قفل الروابط" or $text == "قفل التوجيه" or $text == "فتح التوجيه" or $text == "تفعيل الالعاب" or $text == "تعطيل الالعاب" or $text == "تفعيل الرابط" or $text == "تعطيل الرابط" or $text == "تفعيل جلب الصور" or $text == "تعطيل جلب الصور"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📮 ❉ هاذا الامر {للمنشئين|المطورين|الادمنيه|المدراء}
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "تفعيل التصميم"  || $text == "تعطيل التصميم" || $text == "تفعيل الزخرفه" || $text == "تعطيل الزخرفه" || $text == "تفعيل الاشتراك الاجباري" or $text == "قفل المعرفات" or $text == "فتح المعرفات" or $text == "قفل البوتات" or $text == "فتح البوتات" or $text == "قفل المتحركه" or $text == "الاوامر" or $text == "قفل الاشعارات" or $text == "قفل البوتات بالطرد"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📮 ❉ هاذا الامر {للمنشئين|المطورين|الادمنيه|المدراء}
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "وضع رابط"  || $text == "حذف الرابط" || $text == "صنع رابط" || $text == "انشاء رابط" || $text == "تفعيل الرابط" or $text == "تعطيل الرابط" or $text == "قفل الدردشة" or $text == "فتح الدردشة" or $text == "قفل الدردشه" or $text == "فتح الدردشه" or $text == "كتم" or $text == "حظر" or $text == "طرد" or $text == "تقييد" or $text == "الغاء حظر" or $text == "الغاء كتم" or $text == "الغاء تقييد" or $text == "وضع ترحيب" or $text == "وضع توديع" or $text == "حذف التوديع" or $text == "حذف الترحيب"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📮 ❉ هاذا الامر {للمنشئين|المطورين|الادمنيه|المدراء}
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
$namesaeedh = $update->message->reply_to_message->from->first_name;
$usersaeedh = $update->message->reply_to_message->from->username;
$idsaeedh = $update->message->reply_to_message->from->id;


$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];

$command = array("id","/id","ايدي");

$get_myid = file_get_contents("data/ids/idset.txt");
$_get_ = file_get_contents("data/ids/id.txt");
$get_ALONE = file_get_contents("data/ids/id_.txt");
$GETGG1ZZ = file_get_contents("data/ids/iBadlz.txt");
$_GG1ZZ_ = explode("\n",$GETGG1ZZ);

if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
$game = json_decode(file_get_contents('game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
$gg1zz = array('اســرع واحد يرتب » { ل ، س ، ا ، ق ، ت ، ب ،ا } «','اســرع واحد يرتب » { ه ، ا ، ع ، ر ، ا } «','اســرع واحد يرتب » { ر ، و ، ح ، س } «','اســرع واحد يرتب » { ن ، ف ، ه ، ق } «','اســرع واحد يرتب » { و ، ن ، ي ، ا ، ف } «','اســرع واحد يرتب » { ن ، و ، ه ، ب ، ز } «','اســرع واحد يرتب » { ر ، ك ، و ، س ، ت ، ن ، ا ، ي } «','اســرع واحد يرتب » { ا ، ن ، م ، ل ، ي } «','اســرع واحد يرتب » { و ، ه ، ق ، ه } «','اســرع واحد يرتب » { ف ، ي ، س ، ه ، ن } «','اســرع واحد يرتب » { ج ، ا ، د ، ج ، ه } «','اســرع واحد يرتب » { س ، م ، ر ، د ، ه } «','اســرع واحد يرتب » { ا ، ن ، ا ، و ، ل } «','اســرع واحد يرتب » { ه ، غ ، ف ، ر ، } «','اســرع واحد يرتب » { ج ، ه ، ث ، ل ، ا } «','اســرع واحد يرتب » { خ ، م ، ب ، ط } «');
$get_iBadlz = array_rand($gg1zz, 1);
$fast = array('• اسرع واحد يرسل » { احمد }','• اسرع واحد يرسل » { محمد }','• اسرع واحد يرسل » { قناة }','• اسرع واحد يرسل » { بوت روكي }','• اسرع واحد يرسل » { رمضان }','• اسرع واحد يرسل » { تيم كايدو }','• اسرع واحد يرسل » { العبسي }','• اسرع واحد يرسل » { تلفون }','• اسرع واحد يرسل » { مطبخ }','• اسرع واحد يرسل » { اليمن }','• اسرع واحد يرسل » { سوريا }','• اسرع واحد يرسل » { العراق }','• اسرع واحد يرسل » { السعوديه }','• اسرع واحد يرسل » { مصر }','• اسرع واحد يرسل » { السودان }');
$faster = array_rand($fast, 1);
$mthal = array('• اكمل المثل التالي ؛👇
• { لكل حالة مقاله ولكل .... برع } •','• اكمل المثل التالي ؛👇
• { عادت .... الى عادتها القديمه } •','• اكمل الحكمة التاليه ؛👇
• { من .... العلى سهر الليالي } •','• اكمل المثل التالي ؛👇
• { مخرب .... الف عمار } •','• اكمل المثل التالي ؛👇
• { من .... لقي } •','• اكمل المثل التالي ؛👇
• { ادخلها من ..... واخرجها من الثانيه } •','• اكمل المثل التالي ؛👇
• { ادق من خيط .... } •','• اكمل المثل التالي ؛👇
• { اذا التقت .... هانت الحقوق } •','•  اكمل المثل التالي ؛👇
• { كل .... فيه خير } •',' • اكمل الجمله التالي ؛👇
• { كما تدين .... } •',' • اكمل الجمله التالي ؛👇
• { الصميل خرج من .... } •',' • اكمل المثل التالي ؛👇
• { اللي مايعرف .... يشويه } •',' • اكمل المثل التالي ؛👇
• { الهربات كثير و ..... وحده } •',' • اكمل المثل التالي ؛👇
• { القبيلي .... نفسه } •'
);
$qui1 = array('•| سؤال :/ ماهو اسرع المخلوقات البحريه على الاطلاق؟!','•| سؤال :/ ماهي اقوى انواع الحجارة؟!','•| سؤال :/ ماهي السورة التي ذكر فيها بالعوض؟!','•| سؤال :/ ماهي اول عمله اسلاميه؟!','•| سؤال :/ ماهو الحيوان الذي اذا قطعت احدى اذرعته نمت مره اخرى؟!','•| سؤال :/ ماهو اسرع الحيوان الذي يصاب بالحصبه كالانسان؟!','•| سؤال :/ ماهو العنصر الذي اذا وجد في الحليب اصبح الحليب غذاء كامل؟!','•| سؤال :/ من هو مؤسس علم الجبر؟!','•| سؤال :/ من هو اقوى الحيوانات ذاكرة؟!');
$qui2 = array_rand($qui1,1);
$ope1 = array('
• ماعكس هاذه الكلمه •{ جاوع }•','• ماعكس هاذه الكلمه •{ فارغ }•','• ماعكس هاذه الكلمه •{ سمين }•','• ماعكس هاذه الكلمه •{ بخيل }•','
• ماعكس هاذه الكلمه •{ شجاع }•','
• ماعكس هاذه الكلمه •{ الخوف }•','
• ماعكس هاذه الكلمه •{ عاقل }•','
• ماعكس هاذه الكلمه •{ كن }•','
• ماعكس هاذه الكلمه •{ الذهاب }•','
• ماعكس هاذه الكلمه •{ العودة }•','
• ماعكس هاذه الكلمه •{ مطفئه }•','
• ماعكس هاذه الكلمه •{ الليل }•','
• ماعكس هاذه الكلمه •{ مضلم }•','
• ماعكس هاذه الكلمه •{ حالي }•'
);
$ope2 = array_rand($ope1 ,1);
$mog1 = array('
• ارسل المختلف من الايموجي 👇
{ 😫😫😫😫😩😫😫😫 }','
• ارسل المختلف من الايموجي 👇
{ ✌️✌️🤘✌️✌️✌️✌️✌️ }','
• ارسل المختلف من الايموجي 👇
{ 🧝‍♂🧝‍♂🧝‍♂🧝‍♂🧝‍♀🧝‍♂🧝‍♂🧝‍♂ }','
• ارسل المختلف من الايموجي 👇
{ 😰😰😰😰😥😰😰😰 }','
• ارسل المختلف من الايموجي 👇
{ 💏💏💏👩‍❤️‍💋‍👩💏💏💏💏 }','
• ارسل المختلف من الايموجي 👇
{ 👨‍👦👨‍👧👨‍👦👨‍👦👨‍👦👨‍👦👨‍👦👨‍👦 }','
• ارسل المختلف من الايموجي 👇
{ ❤️❤️❤️❤️🧡❤️❤️❤️️ }','
• ارسل المختلف من الايموجي 👇
{ 💗💗💗💗💗💗💓💗 }');
$mog2 = array_rand($mog1, 1);
$meen1 = array('
• مامعنى هاذه الكلمه •{ فحط }•','• مامعنى هاذه الكلمه •{ ذهب }•','• مامعنى هاذه الكلمه •{ عاد }•','
• مامعنى هاذه الكلمه •{ يلفظ }•','
• مامعنى هاذه الكلمه •{ خروج }•','
• مامعنى هاذه الكلمه •{ يراعي }•','
• مامعنى هاذه الكلمه •{ ينتظر }•','
• مامعنى هاذه الكلمه •{ مؤمن }•','
• مامعنى هاذه الكلمه •{ مسلم }•','
• مامعنى هاذه الكلمه •{ بيت }•','
• مامعنى هاذه الكلمه •{ محافظة }•','
• مامعنى هاذه الكلمه •{ دولة }•');
$meen2 = array_rand($meen1, 1);
mkdir("game/$chat_id");
$level = file_get_contents("game/$chat_id/game.txt");
$mthals = array_rand($mthal, 1);
if($text =="امثله" or $text =="امثلة"){
file_put_contents("game/$chat_id/game.txt","gamem");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mthal[$mthals],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="كلمات" or $text =="الاسرع"){
file_put_contents("game/$chat_id/game.txt","gamew");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$fast[$faster],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="معاني" or $text =="المعاني"){
file_put_contents("game/$chat_id/game.txt","gememe");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$meen1[$meen2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="اسئله" or $text =="الاسئله" or $text == "الاسئلة"){
file_put_contents("game/$chat_id/game.txt","gameq");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$qui1[$qui2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="المختلف" or $text =="مختلف"){
file_put_contents("game/$chat_id/game.txt","gamed");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mog1[$mog2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="العكس" or $text =="عكس"){
file_put_contents("game/$chat_id/game.txt","gameo");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ope1[$ope2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="الترتيب" or $text =="ترتيب"){
file_put_contents("game/$chat_id/game.txt","gamet");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$gg1zz[$get_iBadlz],
'reply_to_message_id'=>$message->message_id]);
}}
if(in_array($chat_id,$game1) and $text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'قهوه' or $text == 'سفينه' or $text == 'اليمن'){
if($level == "gamet"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'ينطق' or $text == 'مغادره'  or $text == 'منزل'  or $text == 'ينتظر'  or $text == 'يراعي'  or $text == 'مؤمن' or  $text == 'مسلم' or $text == 'دولة' or $text == 'دوله' or $text == 'مدينه' or $text == 'مدينة' or $text == "هرب" or $text == "رجع" or $text == "راح"){
if($level == "gameme"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == '🧝‍♀' or $text == '👩‍❤️‍💋‍👩'  or $text == '😩'  or $text == '💓'  or $text == '🤘'  or $text == '👨' or  $text == '😥'){
if($level == "gamed"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'شابع' or $text == 'ممتلئ'  or $text == 'مليان'  or $text == 'نحيف'  or $text == 'سخي'  or $text == 'خائف' or  $text == 'الشجاعه' or $text == 'مجنون' or $text == 'لاتكن' or $text == 'الاياب' or $text == 'الإياب' or $text == 'الرجوع' or $text == 'منيره' or $text == 'النهار' or $text == 'منير' or $text == 'مضيئ' or $text == "مالح" or $text == "حامض"){
if($level == "gameo"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'شقي' or $text == 'دقه'  or $text == 'دقة'  or $text == 'حليمه'  or $text == 'حليمة'  or $text == 'طلب' or  $text == 'غلب' or $text == 'الوجوه' or $text == 'الوجوة' or $text == 'الاوجه' or $text == 'الاوجة' or $text == 'اذن' or $text == 'أذن' or $text == 'الابره' or $text == 'الابرة' or $text == "تاخير" or $text == "تدان" or $text == "الجنه" or $text == "الجنة" or $text == "الصقر" or $text == "الودافه" or $text == "قاتل"){
if($level == "gamem"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'نجم البحر' or $text == 'الخوارزمي'  or $text == 'سمك التونه'  or $text == 'سمك التونة'  or $text == 'الالماس'  or $text == 'البقره' or  $text == 'البقرة' or $text == 'الدينار الذهبي' or $text == 'القرد' or $text == 'الحديد' or $text == 'الجمل' or $text == 'الدينار'){
if($level == "gameq"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'العبسي' or $text == 'احمد'  or $text == 'اليمن'  or $text == 'مصر'  or $text == 'السودان'  or $text == 'سوريا' or  $text == 'العراق' or $text == 'رمضان' or $text == 'تيم كايدو' or $text == 'تلفون' or $text == 'بوت روكي' or $text == 'قناة' or $text == 'محمد' or $text == 'مطبخ'){
if($level == "gamew"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
$iBadlz_smile = array('🍏','🍎','843578','9755','25677','578866','14589','🍐','🍊','🍋','🍌','🍉','🍇','🍓','🍈','🍒','🍑','🍍','🥥','🥝','🍅','🍆','🥑','🥦','🥒','🌶','🌽','🥕','🥔','🍠','🥐','🍞','🥖','🥨','🧀','🥚','🍳','🥞','🥓','🥩','🍗','🍖','🌭','🍔','🍟','🍕','🥪','🥙','🍼','☕️','🍵','🥤','🍶','🍺','🍻','🏀','⚽️','🏈','⚾️','🎾','🏐','🏉','🎱','🏓','🏸','🥅','🎰','🎮','🎳','🎯','🎲','🎻','🎸','🎺','🥁','🎹','🎼','🎧','🎤','🎬','🎨','🎭','🎪','🎟','🎫','🎗','🏵','🎖','🏆','🥌','🛷','🚕','7643','93289','3457','95439','378865','24568','9976','289','2288','2854','🚗','🚙','🚌','🚎','🏎','🚓','🚑','🚚','🚛','🚜','🇮🇶','⚔','🛡','🔮','🌡','💣','📌','📍','📓','📗','📂','📅','📪','📫','📬','📭','⏰','📺','🎚','☎️','📡');$MOD = array_rand($iBadlz_smile,1);
if($text =="سمايلات" || $text =="سمايل"){
file_put_contents("game/$chat_id/game.txt","games");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>"اسرع واحد يدز هذهہٓ ›› `$iBadlz_smile[$MOD]`",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}}
if(in_array($text,$iBadlz_smile) and in_array($chat_id,$game1) and $level == "games"){file_put_contents("gamess.txt","");$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","MMoHaMMeD");}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  > 0){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*📮¦ عدد النقود التي ربحتها هي » { ".$game['game'][$chat_id][$from_id]." }*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  == 0){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*💬¦ ليس لديك نقود ،
📬¦ للحصول ؏ النقود ،
📮¦ ارسل الالعاب وابدأ اللعب !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  >= 19 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 20 } من نقودك ،📨¦ وتم اضافة » { 200 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 49 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 50 } من نقودك ،📨¦ وتم اضافة » { 600 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+600);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-50);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 99 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 100 } من نقودك ،📨¦ وتم اضافة » { 1000 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text == "msg" or $text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*  💬 ❉ رسائلك »  { ".$msgs['msgs'][$chat_id][$from_id]." } ➺*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
elseif($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  < 19){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*⚜¦ لايمكنني بيع نقودك  ،
❗️¦ يجب ان تكون نقودك 20 فما فوق !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
mkdir("data/count");
$linktxt = file_get_contents("data/$chat_id/link.txt");
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "المجموعه" || $text == "معلومات المجموعه" || $text == "معلومات المجموعة" and $linktxt != null){
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$cmmyz = count($mmyazs)-1;
$cmanger = count($mangers)-1;
$cadmin = count($admin_users)-1;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🚸✣ معلومات المجموعة :-
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
✣ الايدي » { $chat_id } 
✣ الاسم » { $namegroup }
✣ عدد الاعضاء » { $MEMH }
✣ عدد الادمنيه » { $cadmin }
✣ عدد المدراء » { $cmanger }
✣ عدد المنشئين » { $cmsg }
✣ عدد المميزين » { $cmmyz }
✣ عدد الرسائل » { $message->message_id}
✣ الرابط { $linktxt }
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
$linktxt = file_get_contents("data/$chat_id/link.txt");
if($text == "المجموعه" || $text == "معلومات المجموعه" || $text == "معلومات المجموعة" and $linktxt == null){
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$cmmyz = count($mmyazs)-1;
$cmanger = count($mangers)-1;
$cadmin = count($admin_users)-1;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🚸✣ معلومات المجموعة :-
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
✣ الايدي » { $chat_id } 
✣ الاسم » { $namegroup }
✣ عدد الاعضاء » { $MEMH }
✣ عدد الادمنيه » { $cadmin }
✣ عدد المدراء » { $cmanger }
✣ عدد المنشئين » { $cmsg }
✣ عدد المميزين » { $cmmyz }
✣ عدد الرسائل » { $message->message_id}
✣ الرابط { لم يتم وضع رابط }
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$linktxt = file_get_contents("data/$chat_id/link.txt");
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "صنع رالط وهمي" || $text == "صنع رابط" || $text == "انشاء رابط" and $caninviteusers == "✅"){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ تم انشاء رابط جديد 
🔖¦ $getlinkde
🔖¦ لعرض الرابط ارسل { الرابط }",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/$chat_id/link.txt","$getlinkde");
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "صنع رالط وهمي" || $text == "صنع رابط" || $text == "انشاء رابط"  and $caninviteusers == "❌"){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🎗❉ ليس لدي صلاحيه دعوة مستخدمين ❌
• قم باعطائي صلاحية دعوة مستخدمين ✓",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($text == "مسح رسايلي" or $text == "مسح رسائلي"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*📌✣ تم مسح { ".$msgs['msgs'][$chat_id][$from_id]." } من رسائلك ✓*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if( $text =="المشرفين" or $text == "المنشئين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️❉ منشى المجموعة :-
❉ $owner ➻ @$owner2

👮🏽‍♂❉ الاداريين | المشرفين :-
$msg
",
'reply_to_message_id'=>$message_id,

'parse_mode'=>"MarkDown",
 ]);
	}
}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info != NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_users_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ (t.me/$buyy)[للاستفسار] ",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info != NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_users_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ (t.me/$buyy)[للاستفسار]",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info == NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ (t.me/$buyy)[للاستفسار]",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info != NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_user_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ (t.me/$buyy)[للاستفسار]",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info == NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » $buyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}

if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info == NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » $buyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info != NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_users_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » $buyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info == NULL and $mangers_infos == NULL ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
??❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » $buyy ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}

if( $text =="رفع الادمنيه" or $text == "رفع الادمنية"){
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🧟‍♂❉ تم رفع { $cmsg } من الادمنيه ✓
",
'reply_to_message_id'=>$message_id,
 ]);
	}
}

$id = $rep->id; 
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 

if($settings["lock"]["link"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if (strstr($text ,"t.me") == true or strstr($text ,"telegram.me") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// lock photo
if($settings["lock"]["photo"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->photo){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// gif
if($settings["lock"]["gif"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// document
if($settings["lock"]["document"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// video
if($settings["lock"]["video"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->video){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
if ($settings["lock"]["ar"] == "مقفول️"){
if (strstr($text,"ض") == true  or strstr($text,"ص") == true or strstr($text,"ق") == true  or  strstr($text,"ف") == true   or strstr($text,"غ") == true or  strstr($text,"ع") == true  or strstr($text,"ه") == true or strstr($text,"خ") == true  or  strstr($text,"ح") == true   or strstr($text,"ج") == true or strstr($text,"ش") == true  or strstr($text,"س") == true or strstr($text,"ي") == true  or  strstr($text,"ب") == true   or strstr($text,"ل") == true or  strstr($text,"ا") == true  or strstr($text,"ت") == true or strstr($text,"ن") == true  or  strstr($text,"م") == true   or strstr($text,"ك") == true or strstr($text,"ظ") == true or strstr($text,"ط") == true  or  strstr($text,"ذ") == true   or strstr($text,"د") == true or  strstr($text,"ز") == true  or strstr($text,"ر") == true or strstr($text,"و") == true  or  strstr($text,"ة") == true   or strstr($text,"ث") == true or strstr($text,"ؤ") == true  or strstr($text,"ء") == true or strstr($text,"ى") == true  or  strstr($text,"ئ") == true   or strstr($text,"آ") == true or  strstr($text,"إ") == true  or strstr($text,"أ") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["en"] == "مقفول️"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
// edit 
if($editgetsettings["lock"]["edit"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $mmyaz && $edit_for_id != $developer){
if ($update->edited_message->text){  
bot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
  }
}
}

// contact
if ($settings["lock"]["contact"] == "مقفول"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if(preg_match('/^\/(احسب)(.*)/s', $text)){
	preg_match('/^\/(احسب)(.*)/s', $text, $mtch);
	$calc = urlencode($mtch[2]);
	$rs = file_get_contents('http://api.mathjs.org/v1/?expr='.$calc);
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"الاجابة : $rs",
	'parse_mode'=>"MarkDown"
	]);
}
if(strpos($text, "قول") !== false ){
	$echo = str_replace("كول", "", $text);
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$echo,
	'parse_mode'=>"MarkDown"
	]);
}
$as = $message->reply_to_message; 
$asf = $as->message_id;  
if($as and $text =="قله اسف"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اسف💚🌺",
'reply_to_message_id'=>$asf,
]);
}
$me = $message->reply_to_message; 
$mem = $me->message_id;
$echoo = explode('قله',$text);
if($echoo){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$echoo[1],
'reply_to_message_id'=>$mem,
]);
}
if(strpos($text, "قول") !== false ){
	$echo = str_replace("قول", "", $text);
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$echo,
	'parse_mode'=>"MarkDown"
	]);
}
$as = $message->reply_to_message; 
$asf = $as->message_id;  
$rand = array('😘😘😘','😍 ابوس النخرة 🤣','😶 لامش ضروري','ميحتاج بوس 😑');
$r = array_rand($rand,true);
if($as and $text =="بوسه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$rand[$r]",
'reply_to_message_id'=>$asf,
]);
}
$rand = array('ياخي عيب 💔🚫','للام ولا للاب 🌚☄','انا ... امك','انا اعرف امك 🌚','اين كمك 🌝');
$r = array_rand($rand,true);
if($as and $text =="سبله"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$rand[$r]",
'reply_to_message_id'=>$asf,
]);
}
$as = $message->reply_to_message; 
$asf = $as->message_id;  
$rand1 = array('😘😘😘','😤 لاعيب 😓','مالك جننت 🤧','طيب بعدين 🤐');
$r1 = array_rand($rand1,true);
if($as and $text =="بوسها"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$rand1[$r1]",
'reply_to_message_id'=>$asf,
]);
}
$me = $message->reply_to_message; 
$mem = $me->message_id;
$MEMO = explode('قله',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
'reply_to_message_id'=>$mem,
]);
}
$edit_media  = $update->edited_message->message_id;
$edit_chat_id_media = $update->edited_message->chat->id;
$edit_medias  = $update->edited_message->text;
$video_media = $update->edited_message->video;
$voice_media = $update->edited_message->voice;
$photo_media = $update->edited_message->photo;
$document_media = $update->edited_message->document;
$audio_media = $update->edited_message->audio;
$location_media = $update->edited_message->location;

if ($editgetsettings["lock"]["editmd"] == "مقفول"){
	if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $mmyaz && $edit_for_id != $developer){
if(edit_medias || $photo_media || $document_media || $video_media || $voice_media || $audio_media || $location_media || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$edit_medias) ){
bot('deleteMessage',[
'chat_id'=>$edit_chat_id_media,
'message_id'=>$edit_media,
]);
}
}
}

// tag
if ($settings["lock"]["tag"] == "مقفول"){
if (strstr($text ,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}// username 
if ($settings["lock"]["username"] == "مقفول"){
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// audio
if ($settings["lock"]["audio"] == "مقفول"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// voice 
if ($settings["lock"]["voice"] == "مقفول"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["markdown"] == "مقفول"){
if($update->message->entities){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}


if($settings["lock"]["bot"] == "مقفول"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مفتوح"){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
  }
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
}
// sticker
if ($settings["lock"]["sticker"] == "مقفول"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["iduser"] == "مقفول"){
$iduserr = $update->message->text;
if($iduserr == "ايدي"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ امر ‹ ايدي › تم تعطيله ✗",
    ]);
	}
}
}
}
// forward
if ($settings["lock"]["forward"] == "مقفول"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// fosh 
if ($settings["lock"]["fosh"] == "مقفول"){
if (strstr($text ,"كس") == true  or strstr($text ,"زب") == true or strstr($text ,"اير") == true  or  strstr($text ,"شرموطة") == true   or strstr($text ,"طيز") == true or strstr($text ,"كسمك") == true or strstr($text ,"كسختك") == true or strstr($text ,"مشتهيه") == true or strstr($text ,"مشتهية") == true  ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["getlink"] == "مقفول"){
$getlinkk = $update->message->text;
if($getlinkk == "الرابط"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني اعطائك الرابط ☹👊
🔱❉ بسبب منع المدراء عن ذالك ☹💔",
    ]);
	}
}
}
}
if ($settings["lock"]["zhr"] == "مقفول"){
$zhrr = $update->message->text;
if($zhrr == "زخرفه" or $zhrr == "زخرفة"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني الزخرفة ✗
🚫❉ المدير قام بمنعي عن ذالك 💔",
    ]);
	}
}
}
}
if($text == "ايديي" or $text == "أيديي"){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
• ايديك { `$from_id` } •",
'parse_mode'=>"markdown",
    ]);
	}
// muteall
if ($settings["lock"]["mute_all"] == "مقفول"){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
// replay
if ($settings["lock"]["reply"] == "مقفول"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "مقفول"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "مقفول"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
if ($settings["lock"]["getpic"] == "مقفول"){
$getpicc = $update->message->text;
if(strpos($getpicc, "صورتي") !== false){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
😺✣ هاذا الامر تم تعطيله ",
    ]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "مقفول"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
$omarreal = array(
'انعل ابوك' => 'وابوك عل واهس🌚✋🏻',
'تتزوجني' => 'اي تعال والمهر عليه ولايهمك🙊😂',
'تعال خاص' => 'لا عيب 🏽️',
'بوسني' =>'ٲٳٲمــﮨ﴿💋﴾ﮨﮨﮨﮨ﴿😚﴾ﮨــوٱآاﮨـٍٰۣۗح✵❤ لحلك/ق',
'مرحبا'=>'[مـراحـݕ ياۿـلا┋ 💖😻](https://t.me/E_L_4)',
'هلو'=>'[هــلؤﯙؤات ﺣﻳـاﺗـﻲ 🌸❓❓](https://t.me/E_L_4)',
'السلام عليكم' => 'وعـﻟﻳـكم الــﺳـلام 😻🌸',
'الحمد لله' => "عســاها دو{مـو يـوم}وم┋ 💜'ء",
'كيفكم' => "انـا الحمـد ﻟﻟـﮧ'ه شـوف البقيـﮧ'ه┋💝'ء",
'هاي' => "هـايـات يـروحـي┋🌸😻'ء",
'جاو' => "اﻟﻟـﮧ'ه ويـاك حيـاتي┋💛💭ء",
'سلام' => "سـلامات حـﺒﯥ┋💝✨",
'اعشقك' => "لاتعشقه ¦ 😹😻'ء",
'اخباركم' =>"انـا الحمـد ﻟﻟـﮧ'ه شـوف البقيـﮧ'ه┋💝'ء",
'شكرا' => "{ •• الـّ~ـعـفو •• }",
'تمام' => "عســاها دو{مـو يـوم}وم┋💜'ء",
'بوس القروب' => "😁🌹امووووح فديتكم عضو عضو بس بنات انا استحرم غمضن خ عنْتر ورطني المطور┋💜'ء",
'تكرهني' => "طـبعاً مـا اكـرهك ¦ 😹✨'ء",
'😒' => 'ماﮧ❃لكہ/.  ليش تقلب صور🚶🏻',
'🌚' => 'منور صخام الجدر😹☝',
'بوسه' => 'امــہـ😘😚😘😚😘ــہــواااااح',
'انته وين' => 'بالــبــ🏠ــيــت',
'وينك' =>'بالــســ🚗ــيــارﮭﮧ',
'منور' => 'نِْـِْـــِْ([💡])ِْــــًِـًًْـــِْـِْـِْـورِْكِْ',
'دي' => '🚬 😌 يقولوها بس ليك/ي',
'تخليني' => 'تعالي ورة الكروب واخليك 😻🚶',
'غنيلي' =>'💖احبك انا  🙊 انا احبك 🙉 واتحدى واحد بلبشر زيي يحبك 🙊',
'المدرسة' => '😒🍃 الله لا يـوريـنا',
'اقفل التلاجة' => 'طفيتهه 😒🍃',
'شغل الاسبلت' => 'شغلته 🌚🍃 بس هتموتو من البرد ما عندي شغل ها',
'مايا خليفة' => '😂 عيب صايمين',
'فطور' =>'واخيراً 😍😍 عايز افطر ياخ جعان مدير القروب دا جابني هنا وقتلني بالجوع ',
'هههههه' => '❀دِْوم حبيْ❀',
'ههههههه' => '❀دِْوم حبيْ❀',
'هههههههه' => '❀دِْوم حبيْ❀',
'ههههههههه' => '❀دِْوم حبيْ❀',
'تركيا' => '😐🍃 فديتهه',
'عراسي' => 'يـسـلـمراسـك',
'تبادل' => 'ماا مليت من التبادل😓???•',
'اقطع' =>'سِـلُـطِـُه مٌـنَ بّْعـدِ 😅الُبّـ🤖ـوَتْ🎄',
'صايم' => 'اعمل ليك شنة مثلا 😐🍃',
'عطشان' => 'امشي ٲشـﮩـرب مي 😐',
'جعان' => 'تـ؏ـال اكـلـني☺ 😐😂',
'😭' => '😢 لا👈تـبـكـي ??',
'وينها' => 'عايز يدخل خاص 😹',
'😍' => 'آإمـ﴿😚﴾ـح',
'ممكن' => 'ﺗْـ•ـﮩ؏ْﮩـ•ــ🚶ـاْل طبعااا ممكن 😋',
'حلو' => 'ٱنـﮩـت الاحـلآ 🌚❤️️',
'غبي' => 'انـت ٱڵٱغبۍ',
'😔' => 'مالك زعلان 😿🍃',
'☹️' => 'ماتزعل פـٍـٍبيبي  😢❤️🍃',
'شنو تتمنه' => 'أمنية حياتي أن أغوص في أعماقك🍷🌝',
'دايخ' => 'مڪ͜͡ﮩـ❦ـبـ﴿☺️﴾ـہسैـل┇?🌿',
'زهجان' => 'نِتـ؏ـاآركك ! 🙂🌸',
'👞' => 'ع راسك وراس الخلفك 🌚😹',
'😑' => 'مالك عصبي 🙁💔',
'🚶' => 'وين رايح وين جاي 🌚😹😹',
'وين المدير' => 'مادخلك منه 🙄💔🍃',
'ماتدخل خاص' => 'مالك داخل خاص ع خالتك خلي يستفاد😕😹🙊',
'تنح' => 'من ما يكون معاك ببتدي يتنح كدا الشافع دا😸🤘🏿',
'🙄' => 'نزل عيونك لتنحول 😐😹😹' ,
 'وين القناة'  =>  'قناة جديدنا @E_L_4',
'قناتي' => 'قناة البوتات @E_L_4',
'احبك' => 'واني هم حبي',
'🙊' => '• ه̷̷َـَْذآ ۈيِھگَ لْۈ خليـﮫۂ مال ﻋسلِ,🍯🤤`',
'ارفعني ادمن' => 'مانرفع جهــال 😏😎',
'ممكن خاص' => 'الخصوصيات عتد امك مش هنا 🐸',
'تعال خاص' => 'عيب ',
'كواد' => 'انت بنكواد',
'طيط' => 'عراسك',
'كذاب' => 'انت كذاب',
'ابوسك' => '• بـﯛسهۂ منڪ ﺂانسى الآلي ۈلـﻣﯛ ﺂلـي,🤤😻ֆ',
'ممكن ابوسك' => '• بـﯛسهۂ منڪ ﺂانسى الآلي ۈلـﻣﯛ ﺂلـي,🤤😻ֆ',
'ولله' => 'لاتحلف ادري بك كذاب قد جربتك 🙄',
'كسختك' => 'دي',
 'وش تقول'  =>  'ميخہًًٖ⁽℘ّ₎ـٖصِٰڪَٖہٌ‏՞ 🙄♩',
 'مافهمتك'  =>  'شي ميخہًًٖ⁽℘ّ₎ـٖصِٰڪَٖہٌ‏՞ 🙄♩',
 'كيف'  =>  'ميخہًًٖ⁽℘ّ₎ـٖصِٰجـَٖہٌ‏՞ 🙄♩',
 'دولي'  =>  'سـہﹻۧـاْℓلميـِْט ☻✋🏾',
 'مالي خلك'  =>  'سـہﹻۧـاْℓلميـِْט ☻✋🏾',
 'مالي خلكك'  =>  'سـہﹻۧـاْℓلميـِْט ☻✋🏾',
'دي' => 'دي تنكال لبوك',
'كول اه' => 'يـ๋͜‏ـﮧلـ๋͜‏ـﮧۿۿہ ڪـ๋͜‏ـﮧﯛ̲୭لـ๋͜‏ـﮧ ⩩ꪳ🌚♚⌠',
'اه' => 'شِٰہٰٰبّہيِٰہڪٰྀہ ٰٰٖمٰ̲ہتَہَٰتَہَٰحہٰٰمٰ̲ہل‌‌‏⁾⇣✿😹❥',
'كسمك' => 'عيب بنلكواد',
'العب به' => 'مـٌضـٰٚـ͢ر بـٓاﭑلـٌصـّحـُِۿہ 😿💔ᵛ͢ᵎᵖ⌯﴾❥',
 'انيك امك'  =>  'مـٌضـٰٚـ͢ر بـٓاﭑلـٌصـّحـُِۿہ 😿💔ᵛ͢ᵎᵖ⌯﴾❥',
'مرتبطه' => '• مـٌرتـٰٚبـَ͢ـِۢطـٖۧۿہ بـٓالـٌدَرُاسَـُِۿہ♥️📚ᵛ͢ᵎᵖ⌯﴾❥',
'نرتبط' => '• مـٌرتـٰٚبـَ͢ـِۢطـٖۧہ بـٓالـٌدَرُاسَـُِۿہ♥️📚ᵛ͢ᵎᵖ⌯﴾❥',
'صباحو' => 'يـٰٖۧـفٰٰٰٖٖٖۧـ๋͜دﯛا صـٰٖۧبٳٲحـٰٰٰٖٖٖۧـ๋͜ي وجٰـه๋͜͡‏ــْکہ"̮♥️🤭،₎⇣',
'صباح الخير' => 'يـٰٖۧـفٰٰٰٖٖٖۧـ๋͜دﯛا صـٰٖۧبٳٲحـٰٰٰٖٖٖۧـ๋͜ي وجٰـه๋͜͡‏ــْکہ"̮♥️🤭،₎⇣',
'وينك' => 'هون 😓',
'انا' => 'انت لاتدخل 😂',
'احمد العبسي' => 'ههه فديته احمد 🍟🌿 ',
'كيفك' => 'تمام وانته',
'مرحبا' => 'مراحب',
 'اخجل'  =>  'فـٰ̲ـٌـديـِْـتك يزمالَُ ۦالخجولٰ،🍋💛ֆ⇣˝',
'السلام عليكم' => 'وعليكم السلام',
'كيف حالك' => 'بخير',
'اموت بيك' => 'كذاب 😜',
'تكسي' => 'ماعندنا تاكسي 😶',
'سياره' => 'ماعدنا روح امشي هع',
 'رايح'  =>  'لا حٰـٰ̲بـﺂﺂب۶،😻♥️ֆ⇣',
'رايح باي'  =>  'لا حٰـٰ̲بـﺂﺂب۶،انہهضہم خطہيہه😻♥️ֆ⇣',
 'لا شبهني بيك'  =>  '♯آℓخــ๋͜͡‏ـﻶقڱ مہا اشہبه حہيوان ۦ🐸⇣ֆ',
'سيارة' => 'ماعہدنه مشي ولي هع',
'هلو' => ' [هٍُلٍــــ👋ـٍٍُوات ̯ﻋﻣٰཻ̯ﮧٰـّريٰٰ 🖤ֆ” ]',
'السلام عليكم' => '[وعليكم السلام]',
'كيف حالك' => '[بخير]',
'هلا' => '[هــلآۄات ⁽💗₎ۦ❥]',
'شلونج' => '[اۢنٰـۛتهہ شعليك بيهة]',
'اشلونك' => '[مــﮫـمـ❥ـوﯢمـ۾"☹️]',
'محح' => ' [• ﺄموﯟعنَ ،😞💓.]',
'مححه' => ' [ﻋِﻋٰافيٰۛـۢھٰهۃ ؛💜ֆ ]',
'صباحوو' => '[ صۢبٰاζـۢوٰﯟ ،☀️ عسل]',
'توني كعدت' => '[ صۢبٰاζـۢوٰﯟ ،☀️ عسل]',
'صباح العافيه' => '[ صۢبٰاζ النور ]',
'شبيك' => '[ مٰۛكٰسْوٰ୭ر💔‏ֆ، ]',
'احبك' => '[ • اعـۢ͜شـق̲ـﮧڪ/ج 😻🙊💛ֆ]',
'😐' => '[الصفنه مو الك لابو صابر🌚😹☄️]',
'🌝' => '[ • نـۢ͜ورت̲ـﮧ😻ֆ]',
'🌚' => '[منور صخام الجدر 🌝😹]',
'😹' => '[دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]',
'😹😹' => '[دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]', 
'😹😹😹' => '[ دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]',
'😹😹😹😹' => '[ دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]', 
'😹😹😹💔' => ' [دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]', 
'😹😹😹😹😹😹 ' => ' [دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]',
'😂😂' => '[ضحكنه وياك]',
'😂😂😂' => '[يضحك التعبان😹]',
'ههه' => '[ضحكه مال نفسيه ☹️💦]',
'هههه' => '[شبيك تضحك☹️♥️]', 
'ههههه' => '[ئووف شهالضحكه😻]',
'ممكن خاص' => ' [• ﭑطرردَ ،😹💔.]',
'شلونكم' => ' [تٰ̲مۢم̲ۢآمٰہۢ 🌸ֆ و انَـَY̷ ̜̐O̷ ̜̐U̷ ̜̐ـَتَ/ي]',
'شكو ماكو' => ' [✘مْْـْـِْMâkøـ﴿🌚﴾ـٌّـٌاْٰكو شـي💔]',
'🌝' => ' [نــــ🌝ـــورت/ي ̯ﻋﻣٰཻ̯ﮧٰـّريٰٰ 🖤ֆ]” ',
'وانت شعليك' => ' [بـــيہۢۦ😹⇣]',
'تبادل' => '[﴿لـاۥ﴾❌ֆ ̮!❥]',
'شونك' => ' [تمـٍٍُام ̯وانتٰ/يٰٰ 🖤ֆ” ]',
'هلاو' => ' [هٍُلٍاوات ̯ﻋﻣٰཻ̯ﮧٰـّريٰٰ 🖤ֆ]”',
'تحبني' => ' [اعشقك عشق ⁦❤️⁩]”',
'كذاب' => ' [لا]”',
'😱' => ' [خير خوفتني 😨]”',
'كحبه' => ' [عيب ولك مطوري تعال اطرده هاذا نعال 😠]”',
'بيش الساعة' => ' [اكتب الوقت و اكلك 😑]”',
'🚶' => ' [لُـﮩـضڵ تتـمشـﮥ اڪعـد ﺳـﯠڵـف 😐👋🏻]”',
'عشرين' => ' [تاكل جدر خنين 😫]”',
'طار' => ' [ابن الطيار ⁦✈️⁩⁦✈️⁩]”',
'لتزحف' => ' [وك اسف🙃]”',
'حاته' => ' [زاحف 😂 منو هاي دزلي صورتهه]”',
'صاكه' => ' [زاحف 😂 منو هاي دزلي صورتهه]”',
'صاك' => ' [زاحف 😂 منو هاي دزلي صورتهه]”',
'زباله' => ' [لشبهني بيك فدوه]”',
'بوت ساقط' => ' [اطردك ؟ 😒]”',
'🌝' => ' [مــﮩﮩﮩــننوورر 🌝💙]”',
' حلو' => ' [ٱنـﮩـت الاحـلآ 🌚❤️]”',
'😒' => ' [شِـبـيک کآڵـب وجـهہهـڪ 😐]”',
'شوف خاصك' => ' [شدازله 😱😨]”',
'??🏻' => ' [لُـﮩـضڵ تتـمشـﮥ اڪعـد ﺳـﯠڵـف 😐👋🏻]”',
);
foreach ( $omarreal as $real => $words ) {
if($settings["lock"]["rdodsg"] == "مقفول") {
if($text == $real){
bot('sendMEssage',[
'chat_id'=>$chat_id,
'text'=>$words,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id
]);
}
}
}
if($settings["information"]["add"] == "مقفول") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}

if($settings["information"]["add"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
            if($youadding < $setadd){
			if($addtext == false){
            bot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"
📭❉ المعذرة !!
📮❉ لاتستطيع التكلم هنا ✗
📌❉ قم باضافة $setadd للتكلم ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true
            ]);
            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($status == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "من المطورين 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$username){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "$username";
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل ??ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$from_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
$Free1 = array("كون تصير العافيةه ، 😔😹","شجاب الكمر بالكروب ؟ ☹️💚","مخلوق من طين الكمر ؟ 😻💛","حلو لتلح العالم ديسولفون 😔😹","هاي منين خامطها 😔😹","امك شمتنسية بيك ؟ 💗😔","ممكن نجي خطابه 😻👌","اوف اتخبل 💋💔","فدوه باع الصاك 👌💔 ","هوه نته ينشبع منك 😣😻","اويلي ع الجمال 🙊","عمري وغلاي انت 😴💔","ئمنور يالكمر 🌜🧐","صارت قديمه بدلها عاد 🖤🙃","مكن سيلفي وياك 🤳😹","صورة مو حلوة ??","افضل صورة 💜","اعجبتني 😉","غيرها 😜","والله قووووه 😎","Very Nice 😍","روعةة 🤗","ذوقك حلو 👌");
$Free2 = array_rand($Free1,1);
$mid = file_get_contents("mid.txt");
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] < 0 and $mid == null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✔"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
 📬❉ لم يتم وضع صورة ✗
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
📬❉ الصورة » $Free1[$Free2]
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقاطك » ❨ 0 ❩
" ,
]);
}}}}}
$mid = file_get_contents("mid.txt");
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] == 0 and $mid == null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✔"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
 📬❉ لم يتم وضع صورة ✗
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
📬❉ الصورة » $Free1[$Free2]
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقودك » ❨ ".$game['game'][$chat_id][$from_id]." ❩
" ,
]);
}}}}}
$mid = file_get_contents("mid.txt");
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id]  > 0 and $mid == null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✔"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
 📬❉ لم يتم وضع صورة ✗
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
📬❉ الصورة » $Free1[$Free2]
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقودك » ❨ ".$game['game'][$chat_id][$from_id]." ❩
" ,
]);
}}}}
}
$mid = file_get_contents("mid.txt");
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] < 0 and $mid != null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✔"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
$text1 = file_get_contents("mid.txt");
$text = str_replace(["PT","IDGP","US","NA","ID","TF","PO","PIC","MSG","FFF","ST"],["$Free1[$Free2]","$chat_id","@$username","$first_name","$from_id","$active[$JJ119]","".$game['game'][$chat_id][$from_id]."","$count","".$msgs['msgs'][$chat_id][$from_id]."","$Free3[$Free4]","$info"],"$text1");
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
 📬❉ لم يتم وضع صورة ✗
$text
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
$text
" ,
]);
}}}}}
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] == 0 and $mid != null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✔"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
$text1 = file_get_contents("mid.txt");
$text = str_replace(["PT","IDGP","US","NA","ID","TF","PO","PIC","MSG","FFF","ST"],["$Free1[$Free2]","$chat_id","@$username","$first_name","$from_id","$active[$JJ119]","".$game['game'][$chat_id][$from_id]."","$count","".$msgs['msgs'][$chat_id][$from_id]."","$Free3[$Free4]","$info"],"$text1");
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
$text
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
$text
" ,
]);
}}}}}
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id]  > 0 and $mid != null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✔"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
$text1 = file_get_contents("mid.txt");
$text = str_replace(["PT","IDGP","US","NA","ID","TF","PO","PIC","MSG","FFF","ST"],["$Free1[$Free2]","$chat_id","@$username","$first_name","$from_id","$active[$JJ119]","".$game['game'][$chat_id][$from_id]."","$count","".$msgs['msgs'][$chat_id][$from_id]."","$Free3[$Free4]","$info"],"$text1");
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
 📬❉ لم يتم وضع صورة ✗
$text
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
$text
" ,
]);
}}}}}
//--------//
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] < 0 and $mid == null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✖"){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقاطك » ❨ 0 ❩
",
  'reply_to_message_id'=>$message->message_id,
]);
}}}
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] == 0 and $mid == null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✖"){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقاطك » ❨ 0 ❩
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
}}
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id]  > 0 and $mid == null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✖"){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقاطك » ❨ 0 ❩
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
}
}
$mid = file_get_contents("mid.txt");
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] < 0 and $mid != null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✖"){
$text1 = file_get_contents("mid.txt");
$text = str_replace(["PT","IDGP","US","NA","ID","TF","PO","PIC","MSG","FFF","ST"],["$Free1[$Free2]","$chat_id","@$username","$first_name","$from_id","$active[$JJ119]","".$game['game'][$chat_id][$from_id]."","$count","".$msgs['msgs'][$chat_id][$from_id]."","$Free3[$Free4]","$info"],"$text1");
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
$text
",
  'reply_to_message_id'=>$message->message_id,
  ]);
}}}
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] == 0 and $mid != null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✖"){
$text1 = file_get_contents("mid.txt");
$text = str_replace(["PT","IDGP","US","NA","ID","TF","PO","PIC","MSG","FFF","ST"],["$Free1[$Free2]","$chat_id","@$username","$first_name","$from_id","$active[$JJ119]","".$game['game'][$chat_id][$from_id]."","$count","".$msgs['msgs'][$chat_id][$from_id]."","$Free3[$Free4]","$info"],"$text1");
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
$text
",
  'reply_to_message_id'=>$message->message_id,
  ]);
}}}
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id]  > 0 and $mid != null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$idu = file_get_contents("data/$chat_id/idpic.txt");
if($idu == "✖"){
$text1 = file_get_contents("mid.txt");
$text = str_replace(["PT","IDGP","US","NA","ID","TF","PO","PIC","MSG","FFF","ST"],["$Free1[$Free2]","$chat_id","@$username","$first_name","$from_id","$active[$JJ119]","".$game['game'][$chat_id][$from_id]."","$count","".$msgs['msgs'][$chat_id][$from_id]."","$Free3[$Free4]","$info"],"$text1");
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
$text
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
}}}
if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($status == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "من المطورين 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$username){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "$username";
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$from_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
$minfo = file_get_contents("data/minfo.txt");
if(!$rep && $text=="معلوماتي" and $minfo == null){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📬❉ معلوماتك عزيزي العضو 📜

⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$usr ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقاطك » ❨ ".$game['game'][$chat_id][$from_id]." ❩
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
]);
}
if(!$rep && $text=="معلوماتي" and $minfo != null){
$text1 = file_get_contents("data/minfo.txt");
$text = str_replace(["IDGP","US","NA","ID","TF","PO","PIC","MSG","FFF","ST"],["$chat_id","@$username","$first_name","$from_id","$active[$JJ119]","".$game['game'][$chat_id][$from_id]."","$count","".$msgs['msgs'][$chat_id][$from_id]."","$Free3[$Free4]","$info"],"$text1");
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
$text
",
  'reply_to_message_id'=>$message->message_id,
]);
}
if(in_array($re,$Dev)){
$info = "مطور اساسي 👷";
}elseif($statusrt == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($statusrt == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($re_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($re_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($re_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($re_id,$developer) ){
$info = "من المطورين 👷";
}elseif($statusrt== "member" ){
$info = "عضو فقط 😿";
}
if(!$re_user){
$usr = "لايوجد يوزر 😐";
}elseif($re_user){
$usr = "@$re_user";
}
if($msgs['msgs'][$chat_id][$re_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$re_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$re_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
$mhinfo = file_get_contents("data/mhinfo.txt");
if($rep && $text=="معلوماته" and $mhinfo == null){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📬❉ معلومات { $re_id } 📜

⚜❉ اسمه » ❨ $re_name ❩
🚸❉ معرفه » ❨ @$re_user ❩
🥇❉ رتبته » ❨ $info ❩
🎗❉ تفاعله » ❨ $active[$JJ119] ❩
🎲❉ ايديه » ❨ $re_id ❩
🔱❉ نسبة تفاعله » ❨ $Free3[$Free4] ❩
📮❉ رسائله » ❨ ".$msgs['msgs'][$chat_id][$re_id]." ❩
💰❉ نقاطه » ❨ ".$game['game'][$chat_id][$re_id]." ❩
",
  'reply_to_message_id'=>$message->message_id,
]);
}
if($rep && $text=="معلوماته" and $mhinfo != null){
$text1 = file_get_contents("data/mhinfo.txt");
$text = str_replace(["PT","IDGP","US","NA","ID","TF","PO","PIC","MSG","FFF","ST"],["$Free1[$Free2]","$chat_id","@$re_user","$re_name","$re_id","$active[$JJ119]","".$game['game'][$chat_id][$re_id]."","$count","".$msgs['msgs'][$chat_id][$re_id]."","$Free3[$Free4]","$info"],"$text1");
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
$text
",
  'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الالعاب" || $text == "قائمه الالعاب"){
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"🕹❉ اهلا بك في قائمة الالعاب !!

💰❉ يمكنك لعب احد الالعاب هذه:  -
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🎁❉ سمايلات » لعبه تطابق ايموجي
📮❉ اسئله » لعبة اسئله مباشره
🔱❉ المختلف » لعبة استخراج المختلف
🚸❉ العكس » لعبة تضاد الكلمات
🎎❉ ترتيب » لعبة ترتيب كلمات
✌❉ الاسرع » لعبة السرعة
😾❉ امثله » لعبة اكمال الامثله
💥❉ معاني » لعبة معاني الكلمات
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MARKDOWN",
	]);
	}
}
if($msgs['msgs'][$chat_id][$re_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$re_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$re_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
if($rt and $text == "تفاعله" || $text == "نسبه تفاعله" or $text == "نسبة تفاعله" or $text == "نسبة تفاعلة"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
🎁❉ تفاعله » { $active[$JJ119] }
📮❉ نسبه تفاعله » { $Free3[$Free4] }
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$from_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
if( $text == "تفاعلي" || $text == "نسبه تفاعلي" or $text == "نسبة تفاعلي"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
🎁❉ تفاعلك » { $active[$JJ119] }
📮❉ نسبة تفاعلك » { $Free3[$Free4] }
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
if($text == "اسمي" || $text == "اسميي"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉  اسمك » { $first_name }
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
	if($text == "معرفي" || $text == "يوزري"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉  يوزرك » { $usr }
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
if(in_array($re,$Dev)){
$info = "مطور اساسي 👷";
}elseif($statusrt == "creator"){
$info = "منشئ";
}elseif($statusrt == "administrator"){
$info = "مشرف";
}elseif(in_array($re_id,$admin_user) ){
$info = "ادمن";
}elseif(in_array($re_id,$manger) ){
$info = "مدير";
}elseif(in_array($re_id,$mmyaz) ){
$info = "مميز";
}elseif(in_array($re_id,$developer) ){
$info = "من المطورين 👷";
}elseif($statusrt== "member" ){
$info = "عضو فقط 😿";
}
if($rt and $text == "الرتبه" || $text == "رتبته" or $text == "الرتبة" or $text == "رتبتة"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
👤¦ العضو » $re_name

ـ⠀•⊱ { رتـبـه الشخص } ⊰•

🤖¦ في البوت » $info
💬¦ في المجموعه » $info
✓
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
//  game
if($settings["lock"]["game"] == "مقفول"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
 date_default_timezone_set('Asia/Damascus');
$as = date('i')+15;
mkdir("data/$chat_id");
mkdir("spam");
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
  if(strpos($text,"وضع التكرار") !== false){
$spamx = str_replace("وضع التكرار ","",$text);
if(is_numeric($spamx)){
 if($spamx > 0){
file_put_contents("data/$chat_id/spamxe.txt",$spamx);
file_put_contents("spam/tim.txt",$as); 
var_dump(bot('sendMessage',[ 
'chat_id' => $chat_id,
'text' =>"
💬┇بواسطه ~⪼ $info
☑┇تم وضع تكرار $spamx",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id' => $message->message_id,
]));
}}}}
$weplus = 1 ;
$timex = date("Y-m-d-h-i-A");
$timex = str_replace("am", "", $timex);
@$NBots = file_get_contents("spam/$from_id/$timex.txt");
$timex_spam = $NBots + 1;
mkdir("spam/$from_id");
file_put_contents("spam/$from_id/$timex.txt",$timex_spam);
$NBots2 = file_get_contents("spam/$from_id/$timex.txt");
$NBX = file_get_contents("data/$chat_id/spamxe.txt");
if($NBots2 >=$NBX) {
if ($settings["lock"]["spam"] == "مقفول️"){
var_dump(bot('restrictChatMember',[
'user_id'=>$from_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*1600,
]));
}}
$timer = file_get_contents("spam/tim.txt"); 
if($message and $timer<date('h')){
$dir = "spam";
$all = scandir($dir);
if($all != null){
   foreach($all as $file){
      if($file == '.' or $file == '..') continue;
      if(is_file($dir.'/'.$file)){
         unlink($dir.'/'.$file);
      } elseif(is_dir($dir.'/'.$file)){
          $sc = scandir($dir.'/'.$file);
foreach($sc as $sn){
             if($sn == '.' or $sn == '..') continue;
             unlink($dir.'/'.$file.'/'.$sn);
             rmdir($dir.'/'.$file);
          }
      } 
   }
} else {
   die('not found dir');
}
rmdir($dir);
mkdir($dir);
file_put_contents("spam/tim.txt",$as); 
}
if ( strpos($text , 'وضع تحذير') !== false  ) {
$newdec = str_replace(['وضع تحذير'],'',$text);
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 👤┇تم تعيين عدد التحذيرات {*$newdec*}
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
❕┇لا تستطيع وضع اكثر من 20 تحذير  
",
'reply_markup'=>$inlinebutton,
   ]);
 }
}
}
}
elseif( $text=="تحذيراتي"){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🚸┇تحذيراتك *$warn* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }
// location
if ($settings["lock"]["location"] == "مقفول"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if(in_array($re,$Dev)){
$info = "مطور اساسي 👷";
}elseif($statusrt == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($statusrt == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($re_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($re_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($re_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($re_id,$developer) ){
$info = "من المطورين 👷";
}elseif($statusrt== "member" ){
$info = "عضو فقط 😿";
}
if(!$re_user){
$reus = "لايوجد يوزر 😐";
}elseif($re_user){
$reus = "@$re_user";
}
if($rt and $text == "كشف" || $text == "ايديه"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
'text'=>"
📌❉ اسمه » { $namesaeedh }
🎟❉ ايديه » { $idsaeedh  }
🎗❉ معرفه »{ $reus }
🎖❉ رتبته » $info 
❉",
]);
}
if ($settings["lock"]["kickme"] == "مقفول"){
$KickmeText = $update->message->text;
if($KickmeText == "اطردني"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني طردك بسبب تعطيل المدير لهاذا الامر !! ",
    ]);
	}
}
}
}
if($game['game'][$chat_id][$from_id] > 20){
if(strpos($text, "تحويل نقاط ") !== false){
$an = str_replace("تحويل نقاط ", "", $text);
if($tc == "supergroup"){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم تحويل 20 من نقاطك ✓
• وتم ارسالها الى { $an }
",
 'reply_to_message_id'=>$message_id
,]);
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
$game['game'][$chat_id][$an] = ($game['game'][$chat_id][$an]+20);file_put_contents('game.json', json_encode($game));
}}}
if($game['game'][$chat_id][$from_id] < 20){
if(strpos($text, "تحويل نقاط ") !== false){
$an = str_replace("تحويل نقاط ", "", $text);
if($tc == "supergroup"){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
• نقاطك اقل من 20 ❌ لايمكنك التحويل
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text == "تحديث السورس"  || $text == "تحديث" || $text == "• تحديث السورس ؛ ♻️" || $text == "تحديث سورس" and in_array($from_id,$Dev)){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%
Open Games.php ...
• Updateing ...',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%
• Updateing ...
Open kickme.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%
• Updateing ...
Open Orders.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(10);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%
• Updateing ...
Open bot.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%
• Updateing ...
Open id.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%
• Updateing ...
Open photoshop.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%
• Updateing ...
Open Hello.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%
• Updateing ...
Open welcome.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%
• Updateing ...
Open replys.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%
• Updateing ...
Open fun.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
-',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(2);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
- -',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(3);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
- - -',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(4);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>
 "*👨‍✈️ ❉ تم تحديث السورس 🔱*
 
• اخر اصدار من السورس ، 🙌",
  'parse_mode'=>"MARKDOWN",
  'reply_to_message_id'=>$message->message_id, 

 ]);
 } 
$oopp = file_get_contents("sett.txt");
$n = file_get_contents("seto.txt");
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if(strpos($text, "اضف نقاط ") !== false){
$an = str_replace("اضف نقاط ", "", $text);
if($tc == "supergroup"){
file_put_contents("sett.txt","nnam");
file_put_contents("seto.txt","$n");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال عدد النقاط الان ✓
• سيتم ارسالها الى { $an }
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text && $oopp =="nnam"){
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($tc == "supergroup"){
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
🚸✣ تم اضافة نقاط { $text } ✓
• لصاحب الحساب » $n
",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("sett.txt","");
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('game.json', json_encode($game));
}}}
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if(strpos($text, "اضف رسائل ") !== false){
$n = str_replace("اضف رسائل ", "", $text);
if($tc == "supergroup"){
file_put_contents("sett.txt","naam");
file_put_contents("seto.txt","$n");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال عدد الرسائل الان ✓
• سيتم اضافتها الى { $an }
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($text && $oopp =="naam"){
if($tc == "supergroup"){
file_put_contents("sett.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
🚸✣ تم اضافة عدد الرسائل { $text } ✓
• لصاحب الحساب » $n
",
 'reply_to_message_id'=>$message_id
,]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$n] = ($msgs['msgs'][$chat_id][$n]+$text);
file_put_contents('msgs.json', json_encode($msgs));
}}}
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if(strpos($text, "اضف مجوهرات ") !== false){
$n = str_replace("اضف مجوهرات ", "", $text);
if($tc == "supergroup"){
file_put_contents("sett.txt","nammm");
file_put_contents("seto.txt","$n");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال عدد النقاط الان ✓
• سيتم ارسالها الى { $an }
",
 'reply_to_message_id'=>$message_id
,]);}}
}
if($text && $oopp =="nammm"){
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($tc == "supergroup"){
file_put_contents("sett.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
🚸✣ تم اضافة نقاط { $text } ✓
• لصاحب الحساب » $n
",
 'reply_to_message_id'=>$message_id
,]);
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('game.json', json_encode($game));
}}}
$text = $message->text;
mkdir("data/kickme");
mkdir("data/kickmelist");
$TTKTT = "$admmm";
$TTK       = $message->message_id;
$Kickmetxt = file_get_contents("data/$chat_id/kickme.txt");
$koin = file_get_contents("data/$chat_id/Kio.txt");
if ($text =="اطردني" or $text == "ادفرني" or $text == "مغادره" and $from_id != $TTKTT){
if ($settings["lock"]["kickme"] == "مفتوح"){
file_put_contents("data/$chat_id/kickme.txt","yes");
file_put_contents("data/$chat_id/Kio.txt",$from_id);
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• ارسل ( نعم ) ليتم طردك •
• ارسل ( لا ) لكي لايتم طردك •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
 if($text == "نعم" && $Kickmetxt =="yes" and $from_id == $koin){ file_put_contents("kickme.txt","");
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
bot('sendmessage',[
    'chat_id'=>$from_id,
    'text'=>
"
رابط المحموعه اللي طردت منها 👀
$getlinkde
",
]);
  bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text" => "
📛❉ يلا مع اللسلامه
  ", 'parse_mode'=>"HTML",
  "reply_to_message_id"=>$TTK,
  ]);
file_put_contents("data/kickme/$chat_id.txt",$from_id . "\n" , FILE_APPEND);
file_put_contents("data/kickmelist/$chat_id.txt",".» @$username.". "\n" , FILE_APPEND);
  }
  if($text == "لا" && $Kickmetxt =="yes" and $from_id == $koin){ 
file_put_contents("kickme.txt","");
  bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text" => "
• تم الغاء الامر •
  ", 'parse_mode'=>"HTML",
  "reply_to_message_id"=>$TTK,
  ]);
}
if ($text =="اطردني" and $from_id == $TTKTT){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك مطوري •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if ($text =="اطردني" and $status == 'administrator'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if($from_id != $TTKTT){
if ($text =="اطردني" and $status == 'craetor'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك منشئ •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if($status == "member"){
if ($text =="اطردني" and in_array($from_id,$mmyaz)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مميز •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if ($text =="اطردني" and in_array($from_id,$admin_user)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك ادمن •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$manger)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 
if (strpos($text , "قفل الدردشه لمدة ") !== false or strpos($text , "قفل الدردشة لمدة ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$developer)) {
	$num = str_replace(['قفل الدردشه لمدة ','قفل الدردشة لمدة'],'',$text);
	$add = $settings["information"]["added"];
if ($add == true) {
	if ($num <= 100000 && $num >= 1){
		date_default_timezone_set('Asia/baghdaf');
        $date1 = date("h:i:s");
        $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
        $next_date = date('h:i:s', strtotime($date2 ."+$num Minutes"));
			  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم قفل الدردشة لمدة $num دقيقة ، ✅ •

- الوقت الان ، $date1 🕑 •
- وقت فتح الدردشة ، $next_date 🕒 •
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["mute_all_time"]="$next_date";
$settings["lock"]["mute_all_time"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
   }else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا ⚠️
➖➖➖➖➖➖
- تستطيع فقط الاختيار من دقيقة الى 1000 دقيقة ، ❌ •
$date1
$nextdata",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if ($settings["lock"]["mute_all_time"] == "مقفول"){
$locktime = $settings["information"]["mute_all_time"];
date_default_timezone_set('Asia/baghdad');
$date1 = date("h:i:s");
if($date1 < $locktime){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
else
{
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if ($settings["lock"]["gamess"] == "مقفول"){
$gamesText = $update->message->text;
if($gamesText == "الالعاب"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني اللعب معك بامر من المنشئ ☹💔",
    ]);
	}
}
}
}
if ($settings["lock"]["photoshop"] == "مقفول"){
$photoshop = $update->message->text;
if($photoshop == "تصميم"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني التصميم لك ✗
🙄❉ مش شاقي مع امك ☹",
    ]);
	}
}
}
}
function check_filter($str){
	global $filterget;
	foreach($filterget as $d){
		if (mb_strpos($str, $d) !== false) {
			return true;
		}
	}
}

// filter
if($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$text");
if ($check == true) {
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    ]);
}
}
}

if( $text =="قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ الكلمات الممنوعة هنا :-

$result
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
if( $text =="قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
if($settings["filterlist"][] = " "){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ الكلمات الممنوعة هنا :-

$result
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="المطرودين" and $frokick != null and $frokicked != null){
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
$ckic = explode("\n",$frokick);
$ckick = count($ckic);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ الاعضاء الذين طردتهم :-
• عددهم » $ckick
*----------*
$frokicked
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="المطرودين" and $frokick == null and $frokicked == null){
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
$ckic = explode("\n",$frokick);
$ckick = count($ckic);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
لم يتم طرد احد •
┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="مسح المطرودين" and $frokick != null and $frokicked != null){
file_put_contents("data/kickme/$chat_id.txt","");
file_put_contents("data/kickmelist/$chat_id.txt","");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ تم مسح المطرودين بنجاح ✓ ",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="مسح المطرودين" and $frokick == null and $frokicked == null){
file_put_contents("data/kickme/$chat_id.txt","");
file_put_contents("data/kickmelist/$chat_id.txt","");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ لايوجد مطرودين ✓ ",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($text , "منع ") !== false or strpos($text , "امنع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text1 = str_replace(['امنع ','منع'],'',$text);
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📛❉ تم منع ❨ $text1 ❩
⚜❉ لن يتم ارسالها بعد الان ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("data/$chat_id/filtrs.txt",$text1 ."\n" , FILE_APPEND);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text1";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔘┋لم يتم تفعيل البوت في مجموعتك⁉️┋ يرجى تفعيل البوت في المجموعة
☑️┋يمكنك تفعيل البوت مجانا م̷ـــِْن خلال ارسال كلمة { • تفعيل • }",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text == "صيح للادمنيه" or $text == "تاك للادمنيه"){
$up = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
   $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['username']);
$msg = $msg.""."❉"."[@$innames]";
}
  }
   }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• ياأدمنيه تعالو في واحد محتاج لكم 🙀 :-
@[".$result[$key]['user']['username']."]
$msg
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
 ]);
 }
elseif ( strpos($text  , "الغاء منع") !== false) {
	$text1 = str_replace(['البييييس ','الغاء منع'],'',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$text1 = str_replace(['الغاء فلترة'],'',$text );
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📛❉ تم منع ❨ $text1 ❩
⚜❉ سـ يتم ارسالها من الان ✓

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$re_id_ = file_get_contents("data/$chat_id/filtrs.txt");
$str = str_replace($text1,"",$re_id_);
file_put_contents("data/$chat/$chat_id.txt",$str);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text1,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif( $text =="مسح قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🚸❉ تم مسح كل الكلمات التي تم منعها من الارسال في هذه المجموعة ✓
",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);

@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

// lock channel 
if($settings["information"]["lockchannel"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
			if($channeltext == false){
            bot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"
📭❉ المعذرة !!
📮❉ لاتستطيع التكلم هنا ✗
📌❉ قم بالاشتراك $usernamechannel اولا ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
            ]);
            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($text  , '@') !== false) {
$plus = mb_strlen("$text ");
if($plus < 25) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
⚜❉ احسنت ؛ تم وضع @$text ✓
⚜❉ ارسل تفعيل الاشتراك الاجباري وتاكد من رفع البوت ادمن في القناة !!
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["setchannel"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⚠️┇خطا المعرف غير مسموح به",
  'reply_to_message_id'=>$message_id,
      
                     
               
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⚠️┇خطأ يجب ان تضع @ للمعرف  
🔰┇مثال • @$channel •√
",
  'reply_to_message_id'=>$message_id,
               
 ]);
}
}
}
}
if($text == "المطورين" and $developers_infos != null and  in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المطورين :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

$developers_infos
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
if($text == "المطورين" and $developers_infos == null and  in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المطورين :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

• لايوجد مطورين √
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
if($text == "المدراء" and $mangers_info != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المدراء :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

$mangers_infos
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "المدراء" and $mangers_info == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المدراء :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

• لايوجد مدراء √
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_infos != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة الادمنيه :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

$admin_users_infos
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_infos == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة الادمنيه :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

• لايوجد ادمنية √
??┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "المميزين" and $mmyazs_infos != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المميزين :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

$mmyazs_infos
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "الكلاب" and $dogsss != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة الكلاب :-
$dogl
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "الكلاب" and $dogsss == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
• مابش كلاب 😬",
]);
}
}
}

if($text == "الزوجات" and $joksss != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة الزوجات :-
$jokl
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "الزوجات" and $joksss == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
• مابش زوجات هنا مش حانه 😬",
]);
}
}
}

if($text == "المميزين" and $mmyazs_infos == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المميزين :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

لايوجد
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
// setwelcome
if($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text ");
if($plus < 200) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📮❉ تم بنجاح وضع الترحيب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️¦ يجب ان يكون العدد بين ⊱ *1* إلى *200* ⊰
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     
 ]);
}
}
}
}
// banall
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🛑 لقد تم حظرك م̷ـــِْن البوت

❇️ ارجو ان لٱ تقوم بارسال رسالة اخرى",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
		bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
      ]);
}
}
// sup
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($text  != "🔙 رجوع") {	
bot('ForwardMessage',[
'chat_id'=>$Dev[0],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
			bot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"✔️ تم ارسال اقتراحك شكرا لك",
	]);	
	}
	}


if($text  == "تفعيل الاعضاء" or $text  == "تفعيل الاضافه الاجباريه" or $text  == "تفعيل لاعضاء"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📮❉ تم بنجاح تفعيل الاضافة ✓
📬❉ بواسطة » `$from_id` ➺
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}   
}
	}
}
elseif($text  == "تعطيل الاضافة" or $text  == "تعطيل الاضافه الاجباريه" or $text  == "تعطيل الاضافه"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📮❉ تم بنجاح تعطيل الاضافه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
	}
}
elseif (strpos($text  , '/setadd ') !== false or strpos($text  , 'وضع عدد الاضافه ') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setadd ','وضع عدد الاضافه '],'',$text );
if($code <= 20 && $code >= 1){
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⚜❉ احسنت ؛ تم وضع $code ✓
⚜❉ لن يستطيع احد الدردشة قبل اضافه $code من الاعضاء ✓

• تاكد من تفعيل الاضافه اولا ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🚸❉ يمكنك وضع عدد الاعضاء 20 فقط !!",
  'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);  
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
}
if(in_array($from_id,$Dev)){
$info = "المطور الاساسي";
}elseif($status == "creator"){
$info = "المنشئ";
}elseif($status == "administrator"){
$info = "المشرف";
}elseif(in_array($from_id,$admin_user) ){
$info = "الادمن";
}elseif(in_array($from_id,$manger) ){
$info = "المدير";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "المطور";
}
if($text =="قفل الروابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الروابط" or $text =="فتح روابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="• تعطيل التواصل ؛ ❎" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل التواصل ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✖");
}
}
if($text =="• تفعيل التواصل ؛ ⚜" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل التواصل ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✔");
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($text =="تعطيل الايدي بالصوره" or $text == "تعطيل ايدي بالصوره" or $text == "تعطيل الايدي بالصورة"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل الايدي بالصوره
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("data/$chat_id/idpic.txt","✖");
}
}
if($text =="تفعيل الايدي بالصوره" or $text == "تفعيل الايدي بالصورة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تفعيل الايدي بالصوره
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("data/$chat_id/idpic.txt","✔");
}
}

if($text =="• تعطيل الستارت ؛ ❎" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الستارت ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("startlock.txt","✖");
}
}
if($text =="• تفعيل الستارت ؛ ⚜" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الستارت ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("startlock.txt","✔");
}
}
if($text =="• تعطيل الترحيب ؛ ❎" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الترحيب ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openwel.txt","✖");
}
}
if($text =="• تفعيل الترحيب ؛ ⚜" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الترحيب ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openwel.txt","✔");
}
}
if($text =="تعطيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل الالعاب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الالعاب" or $text =="تفعيل الألعاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تفعيل الالعاب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="جوائز النقاط" or $text =="جوائز الالعاب"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌❉ جوائز ربح النقاط :-
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
• عدد النقاط 💰         الجوائز 🏆
1 - 20 نقطة.     - اضافه 200 رساله لك
2 - 50 نقطة.     - اضافه 600 رساله لك
5 - 100 نقطة.   - اضافه 1000 رساله لك
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
}
if($text =="تعطيل الزخرفه" || $text == "تعطيل الزخرفة" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل الزخرفه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zhr"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الزخرفه" or $text =="تفعيل الزخرفة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تفعيل الزخرفه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="تعطيل التصميم" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل التصميم
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photoshop"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل التصميم" or $text =="فتح التصميم"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تفعيل التصميم
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photoshop"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="تعطيل الرابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل الرابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["getlink"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الرابط" or $text =="تفعيل جلب الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تفعيل الرابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["getlink"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="تعطيل اطردني" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل اطردني
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["kickme"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل اطردني" or $text =="تفعيل المغادرة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تفعيل اطردني
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["kickme"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="قفل الانكليزيه" or $text == "قفل الانجليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الانجليزي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الانكليزيه" or $text == "فتح الانجليزيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الانجليزي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock photo
elseif($text =="قفل الصور" or $text =="قفل صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الصور" or $text =="فتح صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الردود" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تفعيل ردود البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل الردود" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// gif
elseif($text =="قفل المتحركة" or $text =="قفل الصور المتحركه" or $text == "قفل المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🚸┇تم بنجاح قفل الـ GIF ✓
📬┇بواسطة » $info ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح المتحركة" or $text =="فتح المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🚸┇تم بنجاح فتح الـ GIF ✓
📬┇بواسطة » $info ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الماركداون
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["markdown"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الماركداون
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdown"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل العربيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ar"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح العربيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// document
elseif($text =="قفل الملفات" or $text =="قفل ملفات،"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الملفات" or $text =="فتح ملفات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الملفات
✓
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video
elseif($text =="قفل الفيديو" or $text =="قفل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الفيديو" or $text =="فتح فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// edit
elseif($text =="قفل التعديل" or $text =="قفل تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح التعديل" or $text =="فتح تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// game
elseif($text =="قفل الالعاب" or $text =="قفل العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الالعلب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الالعاب" or $text =="فتح العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الالعاب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// location
elseif($text =="قفل المواقع" or $text =="قفل الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح المواقع" or $text =="فتح الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// contact
elseif($text =="قفل الجهات" or $text =="قفل جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الجهات" or $text =="فتح جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل تعديل الميديا" or $text == "قفل تعديل الوسائط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل تعديل الوسائط ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح تعديل الميديا" or $text == "فتح تعديل الوسائط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل تعديل الوسائط ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tag
elseif($text =="قفل التاك" or $text =="قفل الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح التاك" or $text =="فتح الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// username 
elseif($text =="قفل المعرفات" or $text =="قفل المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح المعرفات" or $text =="فتح المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// audio
elseif($text =="قفل الصوت" or $text =="قفل الموسيقى"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الصوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الصوت" or $text =="فتح صوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الصوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="قفل الايدي" or $text == "تعطيل الايدي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الايدي" or $text == "تفعيل الايدي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// replay
elseif($text =="قفل الرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}


elseif($text =="فتح الرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tgservic
elseif($text =="قفل الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video note
elseif($text =="قفل بصمة اااااالفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌┊❯ تم قفل ⊱ بصمة الفيديو ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح بصمة الرارررفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌┊❯ تم فتح ⊱ بصمة الفيديو ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock bots
if($settings["lock"]["botk"] == "مقفول️"){
if ($message->new_chat_member->is_bot) {
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
if($settings["lock"]["linkr"] == "مقفول️"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"🌚┇ممنوع الروابط { تم تقييدك }" ,
]);
}
}
}
if($settings["lock"]["linkk"] == "مقفول️"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('kickChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"🌚┇ممنوع الروابط { تم طردك }" ,
]);
}
}
}
if ($settings["lock"]["forwardr"] == "مقفول️"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
 }
}
}
}
if ($settings["lock"]["userr"] == "مقفول️"){
if (strstr($text,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
  ]);
}
}
}
}
elseif ($text  == "قفل البوتات" or $text  == "قفل بوتات" or $text  == "قفل البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($text  == "فتح البوتات" or $text  == "فتح بوتات"  or $text  == "فتح البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح البوتات
✓
 ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
  if($text  == "تفعيل اشتراك الاجباري" or $text  == "/channel on" or $text  == "تفعيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🚸┇تم بنجاح تفعيل الاجباري ✓
📬┇بواسطة » $info ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
elseif($text  == "/channel off" or $text  == "تعطيل اشتراك اجباري" or $text  == "تعطيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🚸┇تم بنجاح تعطيل الاجباري ✓
📬┇بواسطة » $info ➺
 ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
elseif ( strpos($text  , 'وضع قناة ') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['وضع قناة'],'',$text );
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⚜❉ احسنت ؛ تم وضع $code ✓
⚜❉ ارسل تفعيل الاشتراك الاجباري وتاكد من رفع البوت ادمن في القناة !!
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setchannel"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }  
if($text =="قفل البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// sticker
elseif($text =="قفل الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// forward
elseif($text =="قفل التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// fosh
elseif($text =="قفل السيئات" or $text =="قفل الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الممنوعات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح السيئات" or $text =="فتح الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الممنوعات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="قفل الررركلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌┊❯ تم قفل ⊱ الكلايش ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="فتح الكررررلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌┊❯ تم فتح ⊱ الكلايش ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

elseif ( strpos($text  , "وضع كررررلايش") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	$num = str_replace(['وضع كلايش'],'',$text );
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
			  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📌┊❯ تم وضع ⊱ *$startlock* ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// farsi
if( $text =="قفل الدردشه" or $text == "قفل الدردشة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الدردشة
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="فتح الدردشه" or $text == "فتح الدردشة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

elseif (strpos($text  , "/banall ") !== false or strpos($text  , "حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/banall ','حظر عام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
🚸┇تم بنجاح حظر $id ✓
📬┇بواسطة » $info ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif (strpos($text  , "/unbanall ") !== false or strpos($text  , "الغاء الحظر العام ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/unbanall ','الغاء الحظر العام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📮❉ تم الغاء حظر $id ✓
📬❉ بواسطة » `$info` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif( $text  == "المحظورين عام") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛❉ قائمة المحظورين عام :-

$result
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
// lock character
// lock photo

 elseif($text  == "كتم" && $rt or $text  == "silent" && $rt or $text  == "تقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true){
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم كتمه/تقييده
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني تقييد الادمنية او المدراء او  او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text  , "كتم لمدة ") !== false && $rt or strpos($text  , "تقييد لمدة ") !== false && $rt) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace(['كتم لمدة ',' تقييد لمدة'],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم كتمه لمدة $we دقيقه
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
elseif($text  == "الغاء تقييد" && $rt or $text  == "الغاء كتم" && $rt or $text  == "الغاء التقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم الغاء كتمه/تقييده
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text  == "قائمة المقيدين" or $text == "قائمة المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛❉ قائمة المكتومين/المقيدين :-

$result
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif( $text  == "مسح المقيدين" or $text == "مسح المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"  
📮❉ تم بنجاح مسح المكتومين ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// promote
if($can_bot_chang_info == 1){ 
$canchangeinfo = "✅";
}else{
$canchangeinfo = "❌";
}
if($can_bot_delete == 1){ 
$candeletemessages = "✅";
}else{
$candeletemessages = "❌";
}
if($can_bot_restrict == 1){ 
$canrestrictmembers = "✅";
}else{
$canrestrictmembers = "❌";
}
if($can_bot_invite == 1){ 
$caninviteusers = "✅";
}else{
$caninviteusers = "❌";
}
if($can_bot_pin == 1){ 
$canpinmessages = "✅";
}else{
$canpinmessages = "❌";
}
if($can_bot_promote == 1){ 
$canpromotemembers = "✅";
}else{
$canpromotemembers = "❌";
}
if($rt && $text =="رفع منشئ" and $canpromotemembers == "✅"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم رفعه منشئ
✓️
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>True,
]);
	}
}
if($rt && $text =="رفع منشئ" and $canpromotemembers == "❌"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎗❉ ليس لدي صلاحيه رفع مشرفين ❌
• قم باعطائي صلاحية اضافة مشرفين جدد ✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
 }
if($rt && $text =="تنزيل منشئ" and $canpromotemembers == "✅"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم تنريله من المنشئين
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
	}
}
if($rt && $text =="تنزيل منشئ" and $canpromotemembers == "❌"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎗❉ ليس لدي صلاحيه رفع مشرفين ❌
• قم باعطائي صلاحية اضافة مشرفين جدد ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
 }
if(in_array($from_id,$Dev)){
$info = "📮❉ صلاحياتك :-

📮❉ مطور البوت 👨‍✈️
";
}elseif($status == "creator"){
$info = "
📮❉ صلاحياتك :-

📮❉ منشئ الجروب 👨‍✈️
";
}elseif($status == "administrator"){
$info = "
📮❉ صلاحياتك :-
ـــ  ــــ  ـــ  ـــ  ـــ
علامة {✓} تعني انه يمتلك الصلاحيه
علامة {✗} تعني انه لايمتلك الصلاحيه
ـــ  ــــ  ـــ  ـــ  ـــ   
📮❉ حذف رسائل » • { $candeletemessages1 } •
📮❉ دعوة مستخدمين » • { $caninviteusers1 } •
📮❉ حظر مستخدمين » • { $canrestrictmembers1 } •
📮❉ تثبيت رسائل » • { $candeletemessages1 } •
📮❉تغيير المعلومات » • { $canchangeinfo1 } •
📮❉ رفع مشرفين جدد » • { $canpromotemembers1 } •
ـــ  ــــ  ـــ  ـــ  ـــ
";
}elseif(in_array($from_id,$admin_user) ){
$info = "📮❉ صلاحياتك :-

📮❉ ادمن في البوت وليس المجموعه 👨‍✈️
";
}elseif(in_array($from_id,$manger) ){
$info = "📮❉ صلاحياتك :-

📮❉ مدير في البوت وليس المجموعه 👨‍✈️
";
}elseif(in_array($from_id,$mmyaz) ){
$info = "
📮❉ صلاحياتك :-

📮❉ عضو مميز في البوت 👨‍✈️
";
}elseif(in_array($from_id,$developer) ){
$info = "📮❉ صلاحياتك :-

📮❉ من مطورين البوت 👨‍✈️
";
}elseif($status == "member" ){
$info = "
📮❉ صلاحياتك :-

📮❉ عضو فقط ليس لديك صلاحيات ✗
";
}
if($text == "صلاحياتي"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
$info
",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($text == "فحص البوت" or $text == "كشف البوت" or $text == "فحص"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️❉ تم الفحص ✓
📮❉ البوت ادمن وصلاحياته هي :-
ـــ  ــــ  ـــ  ـــ  ـــ
علامة {✓} تعني انه يمتلك الصلاحيه
علامة {✗} تعني انه لايمتلك الصلاحيه
ـــ  ــــ  ـــ  ـــ  ـــ   
📮❉ حذف رسائل » • { $candeletemessages } •
📮❉ دعوة مستخدمين » • { $caninviteusers } •
📮❉ حظر مستخدمين » • { $canrestrictmembers } •
📮❉ تثبيت رسائل » • { $candeletemessages } •
📮❉تغيير المعلومات » • { $canchangeinfo } •
📮❉ رفع مشرفين جدد » • { $canpromotemembers } •
ـــ  ــــ  ـــ  ـــ  ـــ
",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if(in_array($from_id,$Dev)){
$info = "المطور الاساسي";
}elseif($status == "creator"){
$info = "المنشئ 👮";
}elseif($status == "administrator"){
$info = "المشرف 🕵";
}elseif(in_array($from_id,$admin_user) ){
$info = "الادمن 👷";
}elseif(in_array($from_id,$manger) ){
$info = "المدير 👷";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif(in_array($from_id,$developer) ){
$info = "المطور";
}
if ($settings["information"]["welcome"] == "مقفول"){
if($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$text1 = file_get_contents("data/$chat_id/welc.txt");
$newmemberuser = $update->message->new_chat_member->username;
$namenew = $update->message->new_chat_member->first_name;
$newidd = $update->message->new_chat_member->id;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["GP","USER","NAME","ID"],["$namegroup","@$newmemberuser","$namenew","$newidd"],"$text1");
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
'reply_to_message_id'=>$message_id,
	]);
}
}
}
if ($settings["information"]["bye"] == "مقفول"){
if($update->message->left_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$text1 = file_get_contents("data/$chat_id/bye.txt");
$newmemberuser = $update->message->left_chat_member->username;
$namenew = $update->message->left_chat_member->first_name;
$newidd = $update->message->left_chat_member->id;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["GP","USER","NAME","ID"],["$namegroup","@$newmemberuser","$namenew","$newidd"],"$text1");
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
'reply_to_message_id'=>$message_id,
	]);
}
}
}
// lock character
if($settings["lock"]["lockcharacter"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$plus = mb_strlen("$text ");
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
if ($pluscharacter < $plus or $plus < $downcharacter) {   
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}

  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoStaFa = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoStaFa,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
}

if( $text =="الاعدادات" or $text == "الوسائط" or $text == "الحمايه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$locklink = $settings["lock"]["link"];
$markdown = $settings["lock"]["markdown"];
$editmd = $settings["lock"]["editmd"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$rdodsg = $settings["lock"]["rdodsg"];
$ar = $settings["lock"]["ar"];
$en = $settings["lock"]["en"];
$spam = $settings["lock"]["spam"];
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$iduser = $settings["lock"]["iduser"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$kickk = $settings["lock"]["kickme"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$add = $settings["information"]["add"];
$zhr = $settings["lock"]["zhr"];
$photoshop = $settings["lock"]["photoshop"];
$lockgamess = $settings["lock"]["gamess"];
$getlinkk = $settings["lock"]["getlink"];
$joinn = $settings["information"]["lockchannel"];
$lockaddd = $settings["information"]["setadd"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$text = str_replace("| فعال |","","
🤖❉ اعدادات المجموعة :-
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🔗❉ الروابط » ❨ $locklink ❩
🎲❉ الالعاب » ❨ $lockgame ❩
🏌‍♀❉ المعرفات » ❨ $lockusername ❩
🎟❉ التاك » ❨ $locklink ❩
🎨❉ الصور » ❨ $lockphoto ❩
🏵❉ الفيديو » ❨ $lockvideo ❩
🎖❉ التوجيه » ❨ $lockforward ❩
☄❉ الاشعارات » ❨ $locktg ❩
✨❉ الملصقات » ❨ $locksticker ❩
🗳❉ التكرار » ❨ $spam ❩
🎟❉ الـ GIF » ❨ $lockgif ❩
💥❉ البصمات » ❨ $lockvoice ❩
💫❉ الرد » ❨ $lockreply ❩
🗂❉ الملفات » ❨ $lockdocument ❩
📭❉ الجهات » ❨ $lockcontact ❩
📯❉ المواقع » ❨ $locklocation ❩
📨❉ الدردشة » ❨ $locktext ❩
🏮❉ الماركداون » ❨ $markdown ❩
📜❉ الممنوعات » ❨ $lockfosh ❩
🗳❉ العربيه » ❨ $ar ❩
📑❉ الانجليزية » ❨ $en ❩
🎈❉ البوتات » ❨ $lockbots ❩
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🏹❉ اعدادات التفعيل والتعطيل :-
💡❉ الايدي » $iduser
⚖❉ الردود » $rdodsg
⚙❉ الزخرفه » $zhr
🏷❉ الترحيب » $wel
🎈❉ التصميم » $photoshop
🗂❉ الالعاب » $lockgamess
🗳❉ الرابط » $getlinkk
🏅❉ امر اطردني » $kickk
💢❉ الاضافة » $lockaddd
🔥❉ الاشتراك الاجباري » $joinn
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
");
$text2 = str_replace("| غير مفعل |","","$text");
	bot('sendmessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"$text2",
'reply_to_message_id'=>$message_id,
   ]);
}
}


if($text  == '/leave'  or $text  == 'leave'  or $text  == 'بوت غادر'){
if (in_array($from_id,$Dev) and in_array($from_id,$developer)){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
📮❉ حسنا مطوري سيتم المغادرة ✓
📬❉ بواسطة » `$info` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
bot('LeaveChat',[
  'chat_id'=>$chat_id,
  ]);
  }
}
if($text  == "$namebot غادر"  or $text  == "غادر الجروب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { 
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
📮❉ سيتم مغادرة المجموعة ✓
📬❉ بواسطة » `$info` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
bot('LeaveChat',[
  'chat_id'=>$chat_id,
  ]);
  }
}
  elseif($text  == 'تعطيل' ){
	  if (in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
📮❉ تم بنجاح تعطيل البوت ✓
📬❉ بواسطة » `$info` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
unlink("data/$chat_id.json");
   }  
  }   
 // tools and cmd
 //rules
elseif( $rt && $text =="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📮❉ تم تثبيت الرساله ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif(  $text =="الغاء التثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📮❉ تم الغاء تثبيت الرساله ✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}

 elseif( $rt && $text == "حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
]);
	bot('banChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"🙋🏽‍♂ ❉ العضو ❨ [@$re_user] ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم حظره بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( $rt && $text == "الغاء الحظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏽‍♂ ❉ العضو ❨ [@$re_user] ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم الغاء حظره ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني الغاء تقييد الادمنية او المدراء او المطورين او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
  elseif( $rt && $text == "طرد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » {[$re_id]}
🛠¦ تم طرده
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( strpos($text  ,"حظر عام") !== false) {
if(in_array($from_id,$Dev) or in_array($from_id,$developer)) {
$text1 = str_replace(['حظر عام'],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text1);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text1
      ]);
       bot('sendmessage', [
                'chat_id' => $chat_id,
'text'=>"🙋🏽‍♂ ❉ العضو ❨ [@$re_user] ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم حظره عام بنجاح ✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);

}
}
 
   //del
elseif( $rt && $text  == "حذف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$re_msgid
    ]);
	 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
 }
}
// rmsg
elseif ( strpos($text  , '/rmsg ') !== false or strpos($text  , 'تنظيف') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$num = str_replace(['/rmsg ','تنظيف'],'',$text );
if ($num <= 300 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"
⛑¦ تـم مسح ~⪼ { $num } من الرسائل  
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>$inlinebutton,
   ]);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
⁉️┇يجب ان يكون العدد بين 1 إلى 300 ",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
//  setname
elseif ( strpos($text , 'وضع اسم ') !== false or strpos($text , 'ضع اسم ') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$newname= str_replace(['وضع اسم ','ضع الاسم '],'',$text);
 bot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📭❉ تم وضع اسم للمجموعةة ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}}
if(in_array($from_id,$Dev)){
$info = "المطور الاساسي";
}elseif($status == "creator"){
$info = "المنشئ";
}elseif($status == "administrator"){
$info = "المشرف";
}elseif(in_array($from_id,$admin_user) ){
$info = "الادمن";
}elseif(in_array($from_id,$manger) ){
$info = "المدير";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "المطور";
}
if($text== "قفل التوجيه بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}

if($text== "قفل الروابط بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المعرفات بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل المعرفات بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المعرفات بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح المعرفات بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
//-------//
if($text== "قفل البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}

if($text== "قفل الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الروابط بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الروابط بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($settings["lock"]["farse"] == "مقفول️"){
	if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
$uo = json_decode(file_get_contents("https://api.telegram.org/bot$token/getchat?chat_id=$from_id"))->result;
$io = $uo->first_name;
$word = json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/detect?key=trnsl.1.1.20170725T151635Z.31fe7a5603917164.915fed1f5a9aaebef43860694075516e7af7aa47&text=".urlencode($io)))->lang;
$new = $update->message->new_chat_member; 
if($new and $word !="ar" and $word !="en"){
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️┇ ممنوع دخول الفارسية هنا  [$io](tg://user?id=$from_id)"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
]);
}
}
}
// link
$linktxt = file_get_contents("data/$chat_id/link.txt");
if( $text =="الرابط" and $linktxt == null){
if ($tc == 'group' | $tc == 'supergroup'){  
$getlinkk = $settings["lock"]["getlink"];
if ($getlinkk == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
📡¦ اوه 🙀 لا يوجد رابط ☹️
🔖¦لانشاء رابط ارسل { انشاء رابط } 
📡
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }}}
$linktxt = file_get_contents("data/$chat_id/link.txt");
if( $text =="الرابط" and $caninviteusers == "❌" and $linktxt == null){
if ($tc == 'group' | $tc == 'supergroup'){  
$getlinkk = $settings["lock"]["getlink"];
if ($getlinkk == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
🎗❉ ليس لدي صلاحيه دعوة مستخدمين ❌
• قم بارسال وضع رابط ثم ارسل لي الرابط ✓
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }}}
$linktxt = file_get_contents("data/$chat_id/link.txt");
if( $text =="الرابط" and $linktxt != null){
if ($tc == 'group' | $tc == 'supergroup'){  
$getlinkk = $settings["lock"]["getlink"];
if ($getlinkk == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
🔖¦رابـط الـمـجـمـوعه 💯
🌿¦ $namegroup
$linktxt
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }}}
if($text== "قفل التكرار" ){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🚸┇تم بنجاح قفل التكرار ✓
📬┇بواسطة » $info ➺
••• قم بوضع تكرار الان •••
••• وضع التكرار + عدد •••
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
//add
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH <= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🛑❉ عذرا !!
⚜❉ لايمكنني تفعيل هاذه المجموعة لانها قليله جدا ❌
🔱❉ يجب ان يكون عدد اعضاء المجموعة { $kocke } عضو ليتم التفعيل ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 }
 }
 }
 }
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
	$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$add = $settings["information"]["added"];
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
👨🏽‍💻❉ اهلا مطوري ؛ كيف حالك 🙋🏽‍♂
🧜‍♂❉ تم تفعيلي في مجموعة جديدة
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📛❉ اسم الجروب « $namegroup »
📛❉ ايدي الجروب « `$chat_id` »
📛❉ رابط الجروب « $getlinkde »
📛❉ عدد الاعضاء « $MEMH »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🚸❉ بواسطة « [$first_name](t.me/$username)
🚸❉ ايديه « $from_id »
🚸❉ معرفه « @$username »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
file_put_contents("data/$chat_id/idpic.txt","✔");
file_put_contents("data/$chat_id/idpic.txt","
❂

 ‌‌‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‌‏ ⇊

👨‍⚖️¦ م3 » آوآمـر آلآدآرهہ‌‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‌‏
🛡¦ م1 » آوآمـر آلحمـآيهہ‌‏
🕹¦ م المطور »  آوآمـر آلمـطـور

❉ (t.me/$buyy)[للاستفسار]
 ✓
");
}
}
}
file_put_contents("data/$chat_id/spamxe.txt","100");
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
              "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفتوح",
                "getlink": "مفتوح",
                "audio": "مفتوح",
                "iduser": "مفتوح",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "spam": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفتوح",
				"zhr": "مفتوح",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"linkr": "مفتوح",
				"linkk": "مفتوح",
				"botk": "مفتوح",
				"userr": "مفتوح",
				"forwardr": "مفتوح",
				"rdodsg": "مقفول",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"bye": "مقفول",
			"add": "مفتوح",
			"spamx": "5",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';

        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🎗¦ المجموعه بالتأكيد ✓️ تم تفعيلها
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == null) {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
	$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$add = $settings["information"]["added"];
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
👨🏽‍💻❉ اهلا مطوري ؛ كيف حالك 🙋🏽‍♂
🧜‍♂❉ تم تفعيلي في مجموعة جديدة
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📛❉ اسم الجروب « $namegroup »
📛❉ ايدي الجروب « `$chat_id` »
📛❉ رابط الجروب « $getlinkde »
📛❉ عدد الاعضاء « $MEMH »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🚸❉ بواسطة « [$first_name](t.me/$username)
🚸❉ ايديه « $from_id »
🚸❉ معرفه « @$username »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
file_put_contents("data/$chat_id/idpic.txt","✔");
}
}
}
file_put_contents("data/$chat_id/spamxe.txt","100");
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                   "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفتوح",
                "getlink": "مفتوح",
                "audio": "مفتوح",
                "iduser": "مفتوح",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفتوح",
				"zhr": "مفتوح",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"linkr": "مفتوح",
				"linkk": "مفتوح",
				"botk": "مفتوح",
				"userr": "مفتوح",
				"forwardr": "مفتوح",
				"rdodsg": "مقفول",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"bye": "مقفول",
			"add": "مفتوح",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🎗¦ المجموعه بالتأكيد ✓️ تم تفعيلها
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH <= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🛑❉ عذرا !!
⚜❉ لايمكنني تفعيل هاذه المجموعة لانها قليله جدا ❌
🔱❉ يجب ان يكون عدد اعضاء المجموعة { $kocke } عضو ليتم التفعيل ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 }
 }
 }
 }
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "للمطور") {
if(!in_array($from_id,$Dev)){
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
👨‍✈️✣ للمطور الاساسي فقط ✓
📌✣ معرفه $buyy",
]);
}
}
elseif ($text  == "قفل الكل"  or $text  == "automatic" or $text  == "قفل كل") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
		$settings["lock"]["link"]="مقفول";
		$settings["lock"]["username"]="مقفول";
		$settings["lock"]["bot"]="مقفول";
		$settings["lock"]["forward"]="مقفول";
		$settings["lock"]["tgservices"]="مقفول";
		$settings["lock"]["contact"]="مقفول";
		$settings["lock"]["mute_all_time"] == "مقفول";
}
}
}
}
elseif( $text =="unmute all" or $text =="فتح الكل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="مفتوح";
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

// setwelcome
if ($text == "الترحيب" or $text == "جلب الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	$text = file_get_contents("data/$chat_id/welc.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text
",  'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
if ($text == "التوديع" or $text == "جلب التوديع") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	$text = file_get_contents("data/$chat_id/bye.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text
",  'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);
$settings["information"]["bye"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
// welcome enbale and disable
elseif ( $text  == "تفعيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id, 
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( $text  == "تعطيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

elseif ( $text  == "تفعيل التوديع") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = file_get_contents("data/$chat_id/bye.txt");
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تفعيل التوديع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id, 
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["bye"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( $text  == "تعطيل التوديع") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 👷🏽
📡¦ تم تعطيل التوديع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["bye"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

mkdir("data");
mkdir("data/addrd");

$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);

if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
if($text == "اضف رد"){
	
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
 	file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$text);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
- 
",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"* تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 	$str = str_replace("- $text","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
 	unlink("data/addrd/$chat_id/$text.txt");
     unlink("data/addrd/$chat_id/media/$text.txt");
     unlink("data/addrd/$chat_id/media/sticker/$text.txt");
     unlink("data/addrd/$chat_id/media/video/$text.txt");
     unlink("data/addrd/$chat_id/media/videonote/$text.txt");
     unlink("data/addrd/$chat_id/media/document/$text.txt");
     unlink("data/addrd/$chat_id/media/photo/$text.txt");
     unlink("data/addrd/$chat_id/media/audio/$text.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*($text)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
	file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*💬¦ هذا الرد ليس مضاف في قائمه الردود 📛*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }

if($text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}


if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ ردود البوت في المجموعه  :

$get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*🚸¦ لا يوجد ردود مضافه حاليا 
❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($message->text and file_exists("data/addrd/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$chat_id/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 
 
if($text =="الاوامر" or $text =="مساعدة" or $text =="مساعده" and $morder != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$morder
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
$m1 = file_get_contents("m1.txt");
if($text =="م1" and $m1 == null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
📮┇ اوامر حمايه المجموعه
ـــ  ــــ  ـــ  ـــ  ـــ
⏺┇قفل/فتح + الاوامر الادناه
ـــ  ــــ  ـــ  ـــ  ـــ
🔐┇الروابط
🔐┇المعرفات
🔐┇التاك
🔐┇الالعاب
🔐┇التعديل
🔐┇المتحركه
🔐┇الملفات
🔐┇الصور

🔐┇الملصقات
🔐┇الفيديو
🔐┇الانلاين
🔐┇الدردشه
🔐┇التوجيه
🔐┇الصوت
🔐┇الجهات
🔐┇الاشعارات
🔐┇الماركدون

🔐┇البوتات
🔐┇العربيه
🔐┇الانكليزية
ـــ  ــــ  ـــ  ـــ  ـــ
📮✣ للاستفسار ‹ $buyy › 👨🏽‍💻
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م1" and $m1 != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m1
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
$mdev = file_get_contents("mdev.txt");
if($text =="م المطور" || $text == "اوامر المطور" and $mdev == null){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك مطوري 🙋🏽‍♂
🔘❉ اليك اوامرك في خاص البوت وهنا !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
• تفعيل/تعطيل المجموعات
• وضع شرط التفعيل
• تفعيل البوت خدمي
• تفعيل البوت للمطور
• وضع اسم للبوت
• رفع/تنزيل مطور
• المطورين / مسح المطورين
• رفع منشئ / مدير
• بقيه الاوامر في كيبورد البوت في الخاص
• تستطيع التحكم بها هنا ايضا
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
📮❉ (t.me/$buyy)[للاستفسار]
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م المطور" || $text == "اوامر المطور" and $mdev != null){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$mdev
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
$m2 = file_get_contents("m2.txt");
if($text =="م2"  and $m2 == null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر اوامر الوضع !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🗯❉ وضع ترحيب 
🗯❉ وضع توديع
• تاكد من تفعيل الترحيب •
• تاكد من تفعيل التوديع •
🗯❉ وضع قوانين + القوانين
🗯❉ وضع قناة + قناة اشتراك اجباري
🗯❉ وضع عدد الاضافه + عدد
🗯❉ وضع اسم + اسم للمجموعة
🗯❉ وضع وصف + نص الوصف
🗯❉ وضع  + نص الترحيب
🗯❉ وضع رابط
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ $buyy › 👨🏽‍💻
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م2"  and $m2 != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m2
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
$m4 = file_get_contents("m4.txt");
if($text =="م4"  and $m4 == null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر اوامر الاعضاء !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🗯❉ ايدي » لعرض ايديك ومعلوماتك
🗯❉ معلوماتي » لعرض معلوماتك
🗯❉ موقعي » لعرض موقعك
🗯❉ اسمي » لعرض اسمك
🗯❉ معرفي » لعرض معرفك
🗯❉ ايديي » لعرض ايديك
🗯❉ رتبتي » لعرض رتبتك
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣❉ (t.me/$buyy)[للاستفسار]
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م4"  and $m4 != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m4
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
$m3 = file_get_contents("m3.txt");
if($text =="م3" and m3 == null ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
📛┇اليك اوامر المنشئين والمدراء
ـــ  ــــ  ـــ  ـــ  ـــ
⚜┇اوامر القوائم
ـــ  ــــ  ـــ  ـــ  ـــ
🚸┇رفع الادمنيه
🔱┇الادمنيه
🌐┇المدراء
📛┇المميزين
💢┇المنشئين
💯┇عرض الكل
ـــ  ــــ  ـــ  ـــ  ـــ
👻┇اوامر المسح
ـــ  ــــ  ـــ  ـــ  ـــ
💭┇مسح الادمنيه
💭┇مسح المدراء
💭┇مسح المميزين
💭┇مسح المطرودين
💭┇مسح الكل
💭┇مسح الممنوعات
💭┇مسح المكتومين
💭┇مسح المقيدين
ـــ  ــــ  ـــ  ـــ  ـــ
⚙┇اوامر الكتم والطرد
ـــ  ــــ  ـــ  ـــ  ـــ
🚸┇كتم
🚸┇طرد
🚸┇حظر
🚸┇تقييد
🚸┇الغاء حظر
🚸┇الغاء كتم
🚸┇الغاء تقييد
ـــ  ــــ  ـــ  ـــ  ـــ
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م3" and $m3 != null ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m3
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
$m5 = file_get_contents("m5.txt");
if($text =="م5" and $m5 == null ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر اوامر الاضافيه !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
💢❉ اضف رد 
💢❉ حذف رد
💢❉ الردود
💢❉ مسح الردود
💢❉ زخرفلي
💢❉ صصملي
💢❉ رسائلي
💢❉ نقاطي
💢❉ بيع نقاطي
💢❉ مسح رسائلي
💢❉ الالعاب
💢❉ تفاعلي
💢❉ نسبه تفاعلي
💢❉ /insta + رابط المنشور
💢❉ اطردني
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ $buyy › 👨🏽‍💻
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

if($text =="م5" and $m5 != null ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m5
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "ححذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ⸨ رابط حذف التلكرام ⸩ 🗑
➧  https://telegram.org/deactivate
⸺⸺⸺⸺⸺⸺⸺
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($status == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "من المطورين 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$re_user){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "@$username";
}
if($text=="رتبتي" ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
🎫¦ رتبتك » $info
➖
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == " مـَسّـِآء الـخّـيًــر" || $text == " مَـــسُأُء أَلَــوّورّد " || $text == "مساء الخير" || $text == "مسا الخير"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>"https://t.me/shehad2/8036",
 'reply_to_message_id'=>$message_id,
]);}}}
$rand = array('مزاج 🚶','في مانع 😒','صنافه','مدري لَيــِْ♡̷̴̬̩̃̊ـِْش😹😔','خلاص دامك ماتعرف اسكت لٱ تسئل 😹🐸');
$ra = array_rand($rand, 1);
if($text ==  "ليش"or $text =="لَيــِْ♡̷̴̬̩̃̊ـِْش "){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('انَـَY̷ ̜̩̐̌̋O̷ ̜̩̐̌̋U̷ ̜̩̐̌̋ـَتَ الاجمل👍🌷','كـ جمالك حب 😘','مثلك 😍');
$ra = array_rand($rand, 1);
if($text == 'جميل'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('شو تسويها🙁','يله خلينا نشوف');
$ra = array_rand($rand, 1);
if($text == 'اسويها'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
]);
}
}
}
if(preg_match('/^(.*)(م̷ـــِْن امس|من امس|امس |قبل يومين )(.*)/',$text) ){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
حاول الان حب لاتيئس ☹",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($text == "ضابح" or $text == "ضايج"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"روح انتحر🌚🌷",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "🚶‍♂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ع وين😉",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "😂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لف اسنانك😚فضحتنا بين الأجانب😢",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "طمام"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي زحاوق😋لرجع وماهي جاهزه😒😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if(preg_match('/^(.*)(ملف ردود|بوت ردود|ردود|ملف بوت ردود)(.*)/',$text) ){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ها حب تريد ملفي 😔رح اعطيك تَعاّإاّإلّ خاص 🚶
بس ارسل الملف", 
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
$rand = array('احسن 😌مو لآزٍمٍ تدري بكل جديد','كلشي انت متعرفه اصلا 😴','م̷ـــِْن مِِـتــ ؟؟! ـى عرفت شي انت بدون ماعلمك 😔😹','عمرك لادريت ☹');
$ra = array_rand($rand, 1);

if($text == 'مدري'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
if($text == "مالك"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مدري🤷‍♂سئل نفسك",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "وش"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي الدقل. خل نسمع الاخبار📻😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "فهمت"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اكييد😌",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "ممكن طلب"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اتفظل بس لاتطلب حسابات🙂",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "??"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وش فْيَگ روح اقرب عياده استلم علاجك😬",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array('بويش تفكر شاركنا 🚶','لٱ تروح بعيد خلك معنا 🐸','شو مافهمت ??');
$ra = array_rand($rand, 1);

if($text == '🤔'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('معك حب شو تريد🙂','موجود ماتشوفني يعني 😕','مشغولين حب 😔بقي انت ماعندك شغل');
$ra = array_rand($rand, 1);

if($text == 'وينكم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}}}
if($text == "تعال"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجيك خاص😍",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
if($text == "تعال خاص"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🤭😐😑",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array(' دِْۈۈۈۈم/يّارٌب ماتفارقك العافيه 😘ْ','يستاهل الحمد🙌','❤️');
$ra = array_rand($rand, 1);

if($text == 'الحمد لله'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('ع الجميع 🌹','علينا وعليكم 
اكثرو م̷ـــِْن الصلاة ع النبي واله 💐','اغنم حبي ودعي ليـّۓ معاك 🌺');
$ra = array_rand($rand, 1);

if($text == 'جمعه مباركه'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('هاا گـّيَفْ الـّحـّال ٱن شـْاءِ اللـٌہ بَخـّيَرٌ 🙂','وينك مغيب غلا 😉');
$ra = array_rand($rand, 1);

if($text == 'وعليكم السلام'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('🌺⌣{يـّـٌدِْۈۈ/عّزٌگ-ۈنَبْضّ قَلبْگ/ۈۈمْ}⌣ 🍂','تدوم العافيه عليك غلا 🤓');
$ra = array_rand($rand, 1);
if($text == 'دووم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}}}
$rand = array('الْحٍمَدٍ للـّہ🌹
     وانت??','بخيـــ😃ــر دامـّگ بـْخـّيرٌ يـّٱلـّغـٌالـّے 🌾');
$ra = array_rand($rand, 1);

if($text == 'كيفك'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$mso = file_get_contents("mso.txt");
if($text =="السورس" || $text =="سورس" and $mso == null){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
👨‍✈️❉ اهلا بك عزيزي في سورس روكي
💢❉ السورس الاول بلغه php
💢❉ السورس الاول اكتمالا في اليمن والدول العربيه
💢❉ لايحتاج سرفرات او VPS
💢❉ سريع جدا ومميزات خياليه
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
💢❉ قم بمراسله المطور لصنع بوت مدفوع خاص بك › @E_L_4 ✅
📮✣ لصنع بوتك مجاني من مصنع بوتات روكي ‹ @Hmai5bot › 👨🏽‍💻
",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>'','url'=>"https://telegram.me/E_L_4"]
              ] 
              ],
        ])
            ]);
        }
       if($text =="السورس" || $text =="سورس" and $mso != null){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
$mso
",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>'','url'=>"https://telegram.me/E_L_4"]
              ] 
              ],
        ])
            ]);
        }
 
