<?php



class Cookies
{

    public function __construct(array $cookies)
    {
        $this->cookies = $cookies;
    }


    public function all(Array $only=[]):array
    {
        if (empty($only)) {
            return $this->cookies ;
        }
        else{
            return array_keys($this->cookies);
        }
    }

    public function get(string $key, $default = null) : string
    {
        if (array_key_exists($key, $this->cookies)) {
            return $this->cookies[$key];
        } else {
            return strval($default);
        }
    }

    public function set($key, $value)
    {
        $this->cookies[$key] = $value;
    }

    public function has($key)
    {
        if (array_key_exists($key, $this->cookies)) {
            return true;
        }
        else
            return false;
    }

    public function remove($key)
    {
        if (array_key_exists($key,$this->cookies)) {
            setcookie($key,"",time()-3600);
        }
    }
}