<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class Posts{

    public function all(){
        return $this->get('posts');
    }

    public function find($id){
        return $this->get("posts/{$id}");
    }

    public function get($url){
        $client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com/posts',
            'timeout'  => 2.0,
            'verify' => false,
        ]);
        $reponse = $client->request('GET', $url);
        return json_decode($reponse->getBody()->getContents());
    }
}
