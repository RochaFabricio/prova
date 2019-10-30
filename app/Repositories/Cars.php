<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class Cars
{
    
    protected $client;

    public function __construct()
    {
        $this->client = $client = new Client([
            'base_uri' => 'http://157.230.213.199:3000/api/',
            'timeout'  => 2.0,
        ]);
    }


    public function all()
    {
        return $this->get('cars');
    }

    public function find($id)
    {
        return $this->get('cars/'.$id);
    }

    public function store($request)
    {
        return $this->post('cars', $request);
    }

    protected function get($url)
    {

        $response = $this->client->request('GET', $url);
    
        return json_decode( $response->getBody()->getContents() );
    }

    protected function post($url, $request)
    {
        // dd($request->title);
        $response = $this->client->request('POST', $url, [
            'json' => [
                "title" => $request->title,
                "brand" =>  $request->brand,
                "price" =>  $request->price,
                "age" => $request->age
            ]
        ]);
    
        return json_decode( $response->getBody()->getContents() );
    }

}




