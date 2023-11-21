<?php

require('vendor/autoload.php');

$SERVER_URL   = "https://platform.devtest.ringcentral.com";
$CLIENT_ID    = "9tndZPSS51yckslckRaszc";
$CLIENT_SECRET = "1E52YiB90R4d25zZPqxKxdd95b4S6ehNCfSbyF966GsJ";
$JWT_TOKEN    = "eyJraWQiOiI4NzYyZjU5OGQwNTk0NGRiODZiZjVjYTk3ODA0NzYwOCIsInR5cCI6IkpXVCIsImFsZyI6IlJTMjU2In0.eyJhdWQiOiJodHRwczovL3BsYXRmb3JtLmRldnRlc3QucmluZ2NlbnRyYWwuY29tL3Jlc3RhcGkvb2F1dGgvdG9rZW4iLCJzdWIiOiI4NTI2MTIwMDUiLCJpc3MiOiJodHRwczovL3BsYXRmb3JtLmRldnRlc3QucmluZ2NlbnRyYWwuY29tIiwiZXhwIjozODQ3MDE4NDI1LCJpYXQiOjE2OTk1MzQ3NzgsImp0aSI6ImZUYTNxam4zUjdPLVhYemhURmtNLUEifQ.ZefBujm7b7hmxQSyp8NPn-g386GeZQ0VN8M-vwelp7fa6TOucWhxaFRkw0pkBcKh5Tw1e4YuBXG9u0_6KjLEb_9Mc3WMhwe0nrpp8jdl5Jf9Pamx0JBcwoP8hnuIbSwQbTwrbF1ACqlqXZjr8JXLn4WOx2aUmZYPYVlvHWweG1im0Iu0gVYMuwjDnQfLYsVXLK8XeFOS34SOHDPN0MWgK0EqpWnkyu9jNkljuekJF8LSn0Wm5M_srNp6CnQQ9GbiLMuW2OKMcJ6eeuASh-nm1ARmJ9J0GThG1PAkd3evv3oErMNbnFzK7CukVdD_KqajbA2AwTi1GW0-gdLvxJbwTg";

if (!isset($_POST['caller']) || !isset($_POST['recipient'])) {
    die('Caller and recipient phone numbers are required.');
}

$CALLER       = $_POST['caller'];
$RECIPIENT    = $_POST['recipient'];

$rcsdk = new RingCentral\SDK\SDK($CLIENT_ID, $CLIENT_SECRET, $SERVER_URL);
$platform = $rcsdk->platform();
$platform->login(["jwt" => $JWT_TOKEN]);

$resp = $platform->post('/account/~/extension/~/ring-out',
    array(
        'from'        => array('phoneNumber' => $CALLER),
        'to'          => array('phoneNumber' => $RECIPIENT),
        'playPrompt'  => false
    ));

echo json_encode([
  "status" => "success", 
  "message" => "Call placed. Call status: " . $resp->json()->status->callStatus]);
?>

