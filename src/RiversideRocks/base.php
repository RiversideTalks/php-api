<?php

namespace RiversideRocks;

class RiversideTalks
{
    private $key;

    protected function auth($token)
    {
        $key = $token;
    }

    public function sendMessage($message, $channel)
    {
        if(! $message)
        {
            return false;
            die();
        }
        if(! $channel)
        {
            return false;
            die();
        }
        $login = self::$key;

        $handle = curl_init();
 
        $url = "https://riverside.rocks/v1/new?m=" . $message . "&key=" . $login . "&c_id=" . $channel;
        
        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        
        $output = json_decode(curl_exec($handle), true);
        
        curl_close($handle);
        
        return $output["message"] . "\n" . $output["success"];
    }
}
