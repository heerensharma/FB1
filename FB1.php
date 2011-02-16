<html>
<body>
****************************************************
<?php
/* include the PHP Facebook Client Library to help
  with the API calls and make life easy */

require_once('./api_googletranslate.class.php');

/* initialize the facebook API with your application API Key
  and Secret */
//$facebook = new Facebook(1fd74329bbfc7948ad11a0027d4ca8dd,5dacd0f9f1151af747b2685381379271);
$translate = new GoogleTranslateApi;
$translate->FromLang = 'en';
				$translate->ToLang = $_POST["mylist"];
				//$text="This is my life !!"; 
				echo $translate->translate($_POST["text"]);
/* require the user to be logged into Facebook before
  using the application. If they are not logged in they
  will first be directed to a Facebook login page and then
  back to the application's page. require_login() returns
  the user's unique ID which we will store in fb_user */
//$fb_user = $facebook->require_login();

/* now we will say:
  Hello USER_NAME! Welcome to my first application! */
?>
****************************************************
<br />
<?php 
  require_once './facebook.php';
  $facebook = new Facebook(array(
  'appId' => '180798501961761',
  'secret' => '5dacd0f9f1151af747b2685381379271',
  'cookie' => true,
   ));
 $user = $facebook->require_login();
 $friends = $facebook->api_client->friends_get();
 echo "User name: $user" ;
foreach ($friends as $friend)

{
 echo "$friend";
} ?>
   
</body>
</html>



