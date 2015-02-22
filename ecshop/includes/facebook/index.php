<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Document</title>
</head>
<body>
  


<?php
session_start();
// added in v4.0.0

require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;

// start session

// init app with app id and secret
// FacebookSession::setDefaultApplication( '794941383913845','4a046bfaf54aac49d37f95d33f857a0c' );
FacebookSession::setDefaultApplication( '1540719832870090','6f887ba04606412f06c63832d99756fa' );
// login helper with redirect_uri
    // $helper = new FacebookRedirectLoginHelper('http://dn0663.com/' );
    $helper = new FacebookRedirectLoginHelper('http://www.bobo-d2c.com/' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest(
    $session,
    'GET',
    '/me/friends'
  );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject(GraphUser::className());

  // print data
  echo '<pre>' . print_r( $graphObject, 1 ) . '</pre>';
} else {
  // show login url
  echo '<a href="' . $helper->getLoginUrl(array('user_friends', 'public_profile','email')) . '">Login</a>';
}

?>





</body>
</html>