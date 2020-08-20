<?php


class Request
{


    public function __construct(array $query,array $post)
    {
        $this->query = $query;
        $this->post = $post;

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
            return $default;
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

}