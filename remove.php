<?php
date_default_timezone_set('Asia/Tashkent');
define('TOKEN', '5472707661:AAHKRBjecc8c0BVlQZIdq4JeKeehya5P0Og');
$token = '5472707661:AAHKRBjecc8c0BVlQZIdq4JeKeehya5P0Og';
$admin = "1989309538"; 
$bot_username = "remove_bg_png_bot";
$kanal = '-1001667358131';
function bot($method,$datas=[]){ 
    $url = "https://api.telegram.org/bot".TOKEN."/".$method;
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


$server = $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
file_get_contents("https://api.telegram.org/bot".TOKEN."/setwebhook?url=$server");
$botname = 'faUseful_bot';
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$tx = $message->text;
$from_id = $update->message->from->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$fid = $message->from->id;
$callback = $update->callback_query;
$message = $update->message;
$mid = $message->message_id;
$cal_query = $update->callback_query;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
    $inlinequery = $update->inline_query;
    $inline_id = $inlinequery->id;
    $cal = $update->callback_query;
    $inlinesi = $cal->data;
    $cid2 = $cal->message->chat->id;
    $inlineid = $inlinequery->from->id;
    $inline_query = $inlinequery->query;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cfid = $update->callback_query->message->from->id;
$cuid = $update->callback_query->message->from->id;
$cqid = $update->callback_query->id;


$reply = $message->reply_to_message->text;
$nomer = $message->contact->phone_number;

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$data = $callback->data;
$callid = $callback->id;
$cname = $calback->message->from->first_name;
$clname = $calback->message->from->last_name;
$lname = $message->from->last_name;
$ccid = $callback->message->chat->id;
$cmid = $callback->message->message_id;
$user = $message->from->username;
$inlinequery = $update->inline_query;
$inline_id = $inlinequery->id;
$inlineid = $inlinequery->from->id;
$inline_query = $inlinequery->query;
$chanel = '@php_foydali_kodlar';
$nameuz = "<a href='tg://user?id=$fid'>$name $lname</a>";


function r($url) {
	if (!file_exists('remove')) {
		mkdir('remove');
	}
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://api.remove.bg/v1.0/removebg');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	$post = array(
		'image_url' => $url,
		'size' => 'auto'
	);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	$headers = array();
	$headers[] = 'X-Api-Key: mcqxYPMnzWzzt9G7P1h1Rn9R';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$result = curl_exec($ch);
	curl_close($ch);

	file_put_contents('./remove/fayzlidev.png', $result);
	return 'remove/fayzlidev.png';
}



function joinchat($chatid){
    global $name, $cmid, $ccid, $chanel;
    $result = bot('getChatMember',[
    'chat_id'=>"$chanel",
    'user_id'=>$chatid
    ])->result->status;
   
    
    if($result == "creator" or $result == "administrator" or $result == "member" or 1){
        return true;
    } else {

        bot('sendMessage',[
        'chat_id'=>$chatid,
        'text'=>"🔐 <b>$chanel ga obuna bo'lmasangiz botdan foydalana olmaysiz!</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"✅ Tekshirish",'callback_data'=>"tekshir"]]
        ]
        ])
        ]);
        return false;
    }
}


if (!file_exists('user')) {
	mkdir('user');
}


if (!file_exists('user/'.$fid)) {
	mkdir('user/'.$fid);
}


if (!file_exists('user/'.$fid."/dimond.txt")) {
	file_put_contents('user/'.$fid."/dimond.txt", '0');
}

if (!file_exists('user/'.$fid."/step.txt")) {
	file_put_contents('user/'.$fid."/step.txt", '');
}



function sp($id, $t) {
	file_put_contents('user/'.$id."/step.txt", $t);
}

$dimonds = file_get_contents('user/'.$fid."/dimond.txt");
$olmos = "💎";

	if($data == "tekshir"){
	    if(joinchat($ccid) == true){
	        bot('deleteMessage',[
	        'chat_id'=>$ccid,
	        'message_id'=>$cmid
	        ]); 
	    }
	}

	if (true) {
		$removeBtn = json_encode([
			'inline_keyboard'=>[
				[['text'=>'🏞✂️ Remove Background', 'callback_data'=>'removebg']]
			]
		]);

		if ($tx == '/start') {
			# code...
			bot('sendmessage', [
				'chat_id'=>$cid,
				'text'=>"✋🏻 Assalomu Alaykum $nameuz.
Siz bu bot orqali hohlagan rasmingizni orqa fonini olib tashlashingiz mumkin!
Bit martta orqa fonni olib tashlash 1ta 💎 olmosga teng. Sizda hozirda $dimonds ta olmos bor.  

👨🏻‍💻 Dasturchi: <a href='tg://user?id=$admin'>Fayzobek</a>
📊 Bizni kanalimiz: $chanel
💬 Bizni guruhimiz: https://t.me/php_kod_code",
				'parse_mode'=>'html',
				'reply_markup'=>$removeBtn
			]);
		} elseif ($data =='removebg') {


			if ( file_get_contents("user/$ccid/dimond.txt") == 0) {
				# code...
				bot('etidMessageText', [
					'chat_id'=>$ccid,
					'text'=>"<b>Sizda $olmos olmos yetarli emas. $olmos yeg'ish uchun referal taklif qiling! Sizning referal havolangiz: https://t.me/remove_bg_png_bot?start=$ccid</b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>'◀️ Ortga', 'callback_data'=>'back']]
						]
					]),
					'message_id'=>$cmid,
				]);

				exit();
			}


			bot('etidMessageText', [
				'chat_id'=>$ccid,
				'text'=>"<b>✂ Orqa fonni o'chirish uchun rasm yuboring 🏞 </b>",
				'parse_mode'=>'html',
				'reply_markup'=>json_encode([
					'inline_keyboard'=>[
						[['text'=>'◀️ Ortga', 'callback_data'=>'back']]
					]
				]),
				'message_id'=>$cmid,
			]);

			sp($ccid, 'removebg');
		}  elseif ($data =='back') {
			bot('etidMessageText', [
				'chat_id'=>$ccid,
				'text'=>"<b>Orqa fonni olib tashlash uchun Remove Background tugmasini bosing\nBitta orqa fonni olib tashlash bitta 💎 olmosga teng. Sizda hozirda ${file_get_contents("user/$ccid/dimond.txt")}ta olmos bor. \n\n👨🏻‍💻 Dasturchi: </b><a href='tg://user?id=$admin'>Fayzobek</a>\n<b>📊 Bizni kanalimiz: $chanel\n💬 Bizni guruhimiz: https://t.me/php_kod_code<b>",
				'parse_mode'=>'html',
				'reply_markup'=>json_encode([
					'inline_keyboard'=>[
						[['text'=>'RemoveBg', 'callback_data'=>'removebg']]
					]
				]),
				'message_id'=>$cmid,
			]);

			sp($ccid, '');
		} elseif ($step == 'removebg' and !$data) {
			if (!$photo) {
				bot('sendmessage', [
					'chat_id'=>$cid,
					'text'=>"<b>✂ Orqa fonni o'chirishda xato! </b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>'Remove Bg', 'callback_data'=>'removebg']]
						]
					]),
				]);

			} elseif ($photo) {
				$file_id = $photo[0]->file_id;
				$file_id = file_get_contents('https://api.telegram.org/bot'.$token."/getFile?file_id=$file_id");
				if ($file_id==false) {
					bot('sendmessage', [
						'chat_id'=>$cid,
						'text'=>"<b>✂ Orqa fonni o'chirishda xato! </b>",
						'parse_mode'=>'html',
						'reply_markup'=>json_encode([
							'inline_keyboard'=>[
								[['text'=>'Remove Bg', 'callback_data'=>'removebg']]
							]
						]),
					]);

					exit();
				}
				$file_path = json_decode($file_id)->result->file_path;
				bot('sendmessage', [
					'chat_id'=>$cid,
					'text'=>"<b>Tayyorlanmoqda.</b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>"Ortga",'callback_data'=>"back"],],
						]
					])
				]);

				$rphoto = r("https://api.telegram.org/file/bot$token/$file_path");
				bot('editMessageText', [
					'message_id'=>$mid + 1,
					'chat_id'=>$cid,
					'text'=>"<b>Tayyorlanmoqda..</b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>"Ortga",'callback_data'=>"back"],],
						]
					])
				]);


				sleep(1.1);
				bot('editMessageText', [
					'message_id'=>$mid + 1,
					'chat_id'=>$cid,
					'text'=>"<b>Tayyorlanmoqda...</b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>"Ortga",'callback_data'=>"back"],],
						]
					])
				]);

				sleep(1.2);

				bot('editMessageText', [
					'message_id'=>$mid + 1,
					'chat_id'=>$cid,
					'text'=>"<b>Tayyorlanmoqda.</b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>"Ortga",'callback_data'=>"back"],],
						]
					])
				]);

				sleep(1.2);


				bot('editMessageText', [
					'message_id'=>$mid + 1,
					'chat_id'=>$cid,
					'text'=>"<b>Tayyorlanmoqda..</b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>"Ortga",'callback_data'=>"back"],],
						]
					])
				]);

				sleep(1.4);


				bot('editMessageText', [
					'message_id'=>$mid + 1,
					'chat_id'=>$cid,
					'text'=>"<b>Tayyorlanmoqda...</b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>"Ortga",'callback_data'=>"back"],],
						]
					])
				]);


				bot('editMessageText', [
					'message_id'=>$mid + 1,
					'chat_id'=>$cid,
					'photo'=>$rphoto,
					'caption'=>"Rasmingiz tayyor! \n\nn👨🏻‍💻 Dasturchi: </b><a href='tg://user?id=$admin'>Fayzobek</a>\n<b>📊 Bizni kanalimiz: $chanel\n💬 Bizni guruhimiz: https://t.me/php_kod_code<b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>"Remove Bg",'callback_data'=>"removeBtn"],],
						]
					])
				]);
			} else {
				bot('sendmessage', [
					'chat_id'=>$cid,
					'text'=>"<b>✂ Orqa fonni o'chirishda xato! </b>",
					'parse_mode'=>'html',
					'reply_markup'=>json_encode([
						'inline_keyboard'=>[
							[['text'=>'Remove Bg', 'callback_data'=>'removebg']]
						]
					]),
				]);
			}

			sp($ccid, '');

		}







		if (mb_stripos($tx, '/start')!==false and isset(explode(' ', $tx)[1]) ) {
			if (explode(' ', $tx)[1] == $fid) {
				bot('sendmessage',[
				   'chat_id'=>$fid,
				   'text'=>"💥 Siz o`zingizni botga referal orqali taklif qila olmaysiz.",
				]);
			}

			else {
				if (mb_stripos(get('statistika/users.txt'), $fid)!==false) {}
				else {
					bot('sendmessage',[
					   'chat_id'=>explode(' ', $tx)[1],
					   'text'=>"Siz do`stingizni taklif qilganingiz uchun sizga 1 ta $olmos berildi.",
					]);

					file_put_contents('./user/'.explode(' ', $tx)[1]."/dimond.txt", intval( file_get_contents("./user/${explode(' ', $tx)[1]}/dimond.txt") ) + 1);
				}
			}




			bot('sendmessage', [
				'chat_id'=>$cid,
				'text'=>"<b>✋🏻 Assalomu Alaykum $nameuz.\n🔰 @${$botname}ga xush kelibsiz. \nSiz bu bot orqali hohlagan rasmingizni orqa fonini olib tashlashingiz mumkin!\nBitta orqa fonni olib tashlash bitta 💎 olmosga teng. Sizda hozirda ${$dimond}ta olmos bor.  \n\n👨🏻‍💻 Dasturchi: </b><a href='tg://user?id=$admin'>Fayzobek</a>\n<b>📊 Bizni kanalimiz: $chanel\n💬 Bizni guruhimiz: https://t.me/php_kod_code<b>",
				'parse_mode'=>'html',
				'reply_markup'=> $removeBtn
			]);
		}

	}
?>
