<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Config;

class FlarumEventSubscriber implements ShouldQueue
{
    private $api_url;
    private $api_key;
    private $root;
    private $password_token;
    private const REMEMBER_ME_KEY = 'flarum_remember';
    private const SESSION_KEY = 'flarum_session';
    private const LIFETIME_IN_SECONDS = 99999999;
  
    public $queue = 'flarum';

    public function __construct($usuario, $metodo)
    {
        $this->api_url = Config::get('flarum.url');
        $this->api_key = Config::get('flarum.api_key');
        $this->root = config('flarum.root');

        if ($metodo=="onUserRegistration") return self::onUserRegistration($usuario);
        if ($metodo=="onUserLogin") return self::onUserLogin($usuario);
    }
  
    public function onUserRegistration($usuario)
        {
            $method = 'POST';
            $endpoint = 'api/users';

            $data = [
              'data' => [
                  'attributes' => [
                      'id'       => $usuario["id"],
                      'username' => $usuario["username"],
                      'password' => $usuario["password"],
                      'email'    => $usuario["email"]
                  ]
              ]
          ];

         return $this->sendRequest($endpoint, $method, $data);
        }

        private function sendRequest($endpoint, $method, $data)
        {
            $data_string = json_encode($data);
            $ch = curl_init($this->api_url.$endpoint);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt(
              $ch,
              CURLOPT_HTTPHEADER,
              [
                  'Content-Type: application/json',
                  'Content-Length: ' . strlen($data_string),
                  'Authorization: Token '.$this->api_key.'; userId=1',
              ]
            );
            $result = curl_exec($ch);
            return json_decode($result, true);
        }





    
        // public function onUserLogin($usuario)
        // {
        //     $response = $this->authenticate($usuario["user"], $usuario["password"]);
        //     $token = $response['token'] ?: '';
        //     return $this->setRememberMeCookie($token);
        // }

        // private function authenticate($id, $password)
        // {
        //     $endpoint = '/api/token';
        //     $method = 'POST';

        //     $data = [
        //         'identification' => "andresjosehr",
        //         'password' => "Paralelepipe2",
        //         'lifetime' => self::LIFETIME_IN_SECONDS
        //     ];
            
        //     return $this->sendRequest($endpoint, $method, $data);
        // }

        // private function setRememberMeCookie($token)
        // {
        //     $this->setCookie(self::SESSION_KEY, $token, time() + self::LIFETIME_IN_SECONDS);
        // }

        // private function removeRememberMeCookie()
        // {
        //     $this->setCookie(self::SESSION_KEY, '', time() - 10);
        // }

        // private function setCookie($key, $token, $time, $path = '/')
        // {
        //     setcookie($key, $token, $time, $path, $this->root);
        // }
















    
    public function onUserLogout($event)
    {
    }
  
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Registered',
            'App\Listeners\FlarumEventSubscriber@onUserRegistration'
        );

        // $events->listen(
        //     'Illuminate\Auth\Events\Login',
        //     'App\Listeners\FlarumEventSubscriber@onUserLogin'
        // );
        
        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\FlarumEventSubscriber@onUserLogout'
        );
    }
}