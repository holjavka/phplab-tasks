<?php



class Sessions
{

    public function __construct(array $session)
    {
        session_start();
        $this->session = $session;

    }

    public function all(array $only=[]):array
    {
        if (empty($only)) {
            return $this->session ;
        }
        else{
            return array_keys($this->session);
        }
    }

    public function get(string $key, $default = null) : string
    {
        if (array_key_exists($key, $this->session)) {
            return $this->session[$key];
        } else {
            return strval($default);
        }
    }

    public function set($key, $value)
    {
        $this->session[$key] = $value;
    }

    public function has($key)
    {
        if (array_key_exists($key, $this->session)) {
            return true;
        }
        else
            return false;
    }

    public function remove($key)
    {
        if (array_key_exists($this->session,$key)) {
            unset($this->session[$key]);
        }
    }

    public function clear()
    {
        session_unset();
    }



}