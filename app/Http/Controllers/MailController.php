<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function send($email){
    	$to = $email; // note the comma

        // Subject
        $subject = 'Welcome to Talent Team';

        // Message
        $message = '
        <html>
        <head>
          <title>Welcome to Talent Team</title>
        </head>
        <body>
          <p>Before joining in our Team, please verify your email!</p>
          <table>
            <tr>
              <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
            </tr>
            <tr>
              <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
            </tr>
            <tr>
              <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
            </tr>
          </table>
        </body>
        </html>
        ';

        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        // Additional headers
        $headers[] = 'To: '. $to;
        $headers[] = 'From: Team Service <service@gmail.com>';
        //$headers[] = 'Cc: birthdayarchive@example.com';
       // $headers[] = 'Bcc: birthdaycheck@example.com';

        // Mail it
        mail($to, $subject, $message, implode("\r\n", $headers));
    }
}
