<?php 
namespace app\controllers;

class win7
{
    public function ptbr($params)
    {
        return [
            "view" => 'home.views.php',
            "data" => ['titulo' => 'Fake Update BR']
        ];
    }
}