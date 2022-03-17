<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Http\Request;
use App\modelRecaudation;
use App\TokenApi;
use Illuminate\Support\Facades\DB;

class Recaudation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$analitico = modelRecaudation::whereIn('sir_fecha_proceso', ['16-01-2021', '17-01-2021'])->paginate(15);
        //$contador = modelRecaudation::whereIn('sir_fecha_proceso', ['17-01-2021'])->count();
        //return view('home', compact('totalemployes'));
        //$response = Http::get('https://mexico-bixxi.ixxi.net/bixxi-api/api/adip/geolocation/latest?size=400');
        $token = DB::table('token_apis')->pluck('token');
        
        $headers = [
            'Content-Type' => 'application/json',
            'X-Auth-Token' => $token[0],
            'Authorization' => 'Bearer token',
        ];
        
        
        $client = new GuzzleClient([
            'headers' => $headers
        ]);

        try {
            $r = $client->get('http://peaje.rtp.cdmx.gob.mx/bixxi-api/api/adip/geolocation/latest?size=1800');
            //$dato = $r->getBody()->getContents();
            //$dato = $r->getBody()->getContents();
            $responseBody = json_decode($r->getBody());
            //var_dump($dato);
            //dd($responseBody);
            return compact('responseBody');
        }
        catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
        }
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, modelRecaudation $gallery)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
