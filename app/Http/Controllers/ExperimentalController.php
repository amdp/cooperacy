<?php
namespace App\Http\Controllers;

use Mail;


class ExperimentalController extends Controller
{

  public function testmail() {

    send('emails.welcome', [], function($message) {
        $message->to('cooperacy@cooperacy.org','Cooperacy')
            ->from('cooperacy@cooperacy.org','Cooperacy')
            ->subject('Test e-mail from Cooperacy');
    });

    return 'Test e-mail sent';

  }

}