<?php
namespace app\index\controller;
use app\index\controller\LoginVerfy;

class Index extends LoginVerfy
{
    public function index()
    {
        return $this->fetch();
    }
}
