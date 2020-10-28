<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class executeController extends Controller
{
    public function execute(){
  $apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    'YOUR APPLICATION CLIENT ID',
    'YOUR APPLICATION CLIENT SECRET'
  )
);


    }
}
