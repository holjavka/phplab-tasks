<?php
require_once "Sessions.php";
require_once "Cookies.php";

class Request
{

    public function __construct(array $query,array $post, array $server, Sessions $session,Cookies $cookies )
    {
        $this->query = $query;
        $this->post = $post;
        $this->session = $session;
        $this->cookies = $cookies;
        $this->server = $server;
    }

    public function query(string $key, $default = null) : string
    {
        if (array_key_exists($key, $this->query)) {
            return $this->query[$key];
        } else {
            return strval($default);
        }
    }

    public function post(string $key, $default = null) : string
    {
        if (array_key_exists($key, $this->post)) {
            return $this->post[$key];
        } else {
            return strval($default);
        }
    }
    public function get(string $key, $default = null) : string
    {
        if(array_key_exists($key, $this->post) && array_key_exists($key, $this->query)){
            return $this->post[$key];
        }
        elseif (array_key_exists($key, $this->post)) {
            return $this->post[$key];
        }
        elseif (array_key_exists($key, $this->query)) {
            return $this->query[$key];
        }
        else {
            return strval($default);
        }
    }

    public function all(array $only = []) : array
    {
        if (empty($only)) {
            return array_merge($this->query, $this->post);
        }
        else{
            return array_merge($only,array_keys(array_merge($this->query, $this->post)));
        }
    }

    public function has($key)
    {
        if ((array_key_exists($key, $this->query)) || (array_key_exists($key, $this->post))) {
            return true;
        }
        else
            return false;
    }

    public function ip()
    {
        return $_SERVER['REMOTE_ADDR'];
    }
    public function userAgent()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }

}