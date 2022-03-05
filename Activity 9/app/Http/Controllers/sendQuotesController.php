<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\Gmail;
use App\Jobs\sendquoteJob;
use App\Jobs\sendweatherdetJob;
use App\Models\Quotesmail;

class sendQuotesController extends Controller
{

    public function quotepage(){
        return view('Quotewelcome');
    }
    public function weatherpage(){
        return view('Weatherwelcome');
    }
    public function sendquote(Request $request){
        $member =new Quotesmail;
        $member->email=$request->email;
        $member->save();

        //$email=Quotesmail::find(1,['3','email']);

        $quotemail = new Quotesmail;
        $email = $quotemail->pluck('email');

        $url = 'https://zenquotes.io/api/random';
        $response = file_get_contents($url);
        $newsData = json_decode($response, true);
        $quote = $newsData[0]['q'];
        $author = $newsData[0]['a'];

        $quotes = [
            'quote' => $quote,
            'author' => $author,
            'email'=>$email
        ];

        sendquoteJob::dispatch($quotes);
    }


    public function sendweather(Request $request){

        $member =new Quotesmail;
        $member->email=$request->email;
        $member->save();

        //$email=Quotesmail::find(1,['3','email']);

        $quotemail = new Quotesmail;
        $email = $quotemail->pluck('email');

            $bangalore_url = 'https://api.openweathermap.org/data/2.5/weather?q=Bangalore&appid=777a367af263cfb27f7d5445074f9727';
            $bangalore_response = file_get_contents($bangalore_url);
            $bangaloreData = json_decode($bangalore_response, true);

            $chennai_url = 'https://api.openweathermap.org/data/2.5/weather?q=Chennai&appid=777a367af263cfb27f7d5445074f9727';
            $chennai_response = file_get_contents($chennai_url);
            $chennaiData = json_decode($chennai_response, true);

            $mumbai_url = 'https://api.openweathermap.org/data/2.5/weather?q=Mumbai&appid=777a367af263cfb27f7d5445074f9727';
            $mumbai_response = file_get_contents($mumbai_url);
            $mumbaiData = json_decode($mumbai_response, true);

            $delhi_url = 'https://api.openweathermap.org/data/2.5/weather?q=Delhi&appid=777a367af263cfb27f7d5445074f9727';
            $delhi_response = file_get_contents($delhi_url);
            $delhiData = json_decode($delhi_response, true);

            $kolkatta_url = 'https://api.openweathermap.org/data/2.5/weather?q=Goa&appid=777a367af263cfb27f7d5445074f9727';
            $kolkatta_response = file_get_contents($kolkatta_url);
            $kolkattaData = json_decode($kolkatta_response, true);

            $weather_report = [
                'email' => $email,
                'chennai_weather' => $chennaiData["weather"][0]["main"],
                'mumbai_weather' => $mumbaiData["weather"][0]["main"],
                'delhi_weather' => $delhiData["weather"][0]["main"],
                'bangalore_weather' => $bangaloreData["weather"][0]["main"],
                'kolkatta_weather' => $kolkattaData["weather"][0]["main"]
            ];

            sendweatherdetJob::dispatch($weather_report);


    }
}
