<?php
session_start();

include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = WB_CALLBACK_URL;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;

	} catch (OAuthException $e) {
	}
}

//code=67005728fa7a56eff594a8f445f611c1
//Array ( [access_token] => 2.00wXezLGd2twmDed6bbccfa60PbovF
//[remind_in] => 157679999 [expires_in] => 157679999 [uid] => 5674030560 ) 

if ($token) {
	print_r($token);
	$_SESSION['token'] = $token;
	setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
?>
授权完成,<a href="weibolist.php">进入你的微博列表页面</a><br />
<?php
} else {
?>
授权失败。
<?php
}
?>
