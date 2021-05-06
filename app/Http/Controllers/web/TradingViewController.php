<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TradingViewController extends Controller
{
    public function author()
    {
        return $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('https://your-rest-implementation.com/api/authorize', [
            'login' => 'filmanseindo',
            'password' => 'qwerasdf123',
        ]);
    }
}
