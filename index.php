
<?php
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;
use Twilio\Rest\Client;

$db = new FirestoreClient([
  'projectId' => 'xlssms-6788c',
]);

$docRef = $db->collection('Messages')->document($_POST['msg']);
$snapshot = $docRef->snapshot();

if ($snapshot->exists()) {
  $msgBody = $snapshot->get('txtmsg');

    if (isset($_POST['mobile']) && isset($_POST['msg'])) {

      // twilio
      $account_sid = 'AC81327f710ac147b31f6d94c01317abc0';
      $auth_token = '3a812cc128935e2424380ff198c62030';
  
      $twilio_number = "+14252925116"; 
      
      $client = new Client($account_sid, $auth_token);
      $client->messages->create(

          $_POST['mobile'],
          array(
              'from' => $twilio_number,
              'body' => $msgBody
          )
      );
  }


} else {
    printf('%s : Token is Invalid!' . PHP_EOL, $snapshot->id());
    $msgBody = '';
    $_POST['mobile'] = '';
}

?>



<style>
    * {box-sizing: border-box}

    body {
      padding-top: 100px;
      background-color: #1a2c94;
    }

    /* style the container */
    .container {
      position: relative;
      border-radius: 5px;
      width: 50%;
      background-color: #f2f2f2;
      padding: 20px 40px 30px 40px;
      font-family: montserrat;
      margin-top: 50px;
      margin: auto;
      box-shadow: 0px 10px 50px rgba(20, 20, 20, 0.623);
    }

    /* style inputs and link buttons */
    input,
    .btn {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 4px;
      margin: 5px 0;
      opacity: 0.85;
      display: inline-block;
      font-size: 17px;
      line-height: 20px;
      text-decoration: none; /* remove underline from anchors */
    }

    input:hover,
    .btn:hover {
      opacity: 1;
    }

    /* style the submit button */
    input[type=submit] {
      background-color: #1a2c94;
      color: white;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    /* Two-column layout */
    .col {
      float: left;
      width: 50%;
      margin: auto;
      padding: 0 50px;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* vertical line */
    .vl {
      position: absolute;
      left: 50%;
      transform: translate(-50%);
      border: 2px solid #ddd;
      height: 175px;
    }

    /* text inside the vertical line */
    .inner {
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%);
      background-color: #f1f1f1;
      border: 1px solid #ccc;
      border-radius: 50%;
      padding: 8px 10px;
    }

    /* hide some text on medium and large screens */
    .hide-md-lg {
      display: none;
    }

    /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 650px) {
      .col {
        width: 100%;
        margin-top: 0;
      }
      /* hide the vertical line */
      .vl {
        display: none;
      }
      /* show the hidden text on small screens */
      .hide-md-lg {
        display: block;
        text-align: center;
      }
    }
</style>



<body>
  <div class="container">
    <form action="" method="post">
      <div class="row">
        <h2 style="text-align:center">Send SMS</h2>
          <input type="text" name="msg" placeholder="Token" required>
          <input type="text" name="mobile" placeholder="+92XXXXXXXXXX" required>
          <input type="submit" value="Send SMS">
        </div>
      </div>
    </form>
  </div>
</body>