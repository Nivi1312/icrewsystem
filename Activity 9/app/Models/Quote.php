<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client as GuzClient;

class Quote extends Model
{
    use HasFactory;

    public function fetchquotes():Array{
        $client = new GuzClient();
        $quotes=[];

        $request = $client->get('https://zenquotes.io/api/random');
        $data = json_decode($request->getBody()->getContents());
        $quotes[]=$data->quoteText . "-". $data->quoteAuthor;

        return $quotes;
    }
}
