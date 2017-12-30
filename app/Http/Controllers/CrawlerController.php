<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class CrawlerController extends Controller
{
    //
    public function show(){
        $client = new Client();

        $crawler = $client->request('GET', 'https://dps.psx.com.pk/webpages/mktSummary.php?r=REG');
        
        $data = array();
        $data = $crawler->filter('table.marketData')->each(function ($node) {
            return $node;
        });
        
        return view('crawler')->with('data', $data);
    }
}
