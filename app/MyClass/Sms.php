<?php

namespace App\MyClass;

use Illuminate\Support\Facades\Http;

class Sms
{
    public static function send($mobile,$tempId,$params){

        $response=Http::withOptions(['verify' => false])
            ->withHeaders(['Content-Type'=> 'application/json',
                'Accept'=>'text/plain',
                'x-api-key'=>'uqncdm470s43LeqXJ9VvnIM9SvtRaYvPJPACtIeUtwT842Tf'])
            ->post('https://api.sms.ir/v1/send/verify',[
                "mobile" => $mobile,
                "templateId"=>$tempId,
                "parameters" => [$params]
            ]);


        return $response;

    }

}
