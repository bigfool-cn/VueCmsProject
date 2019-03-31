<?php 
namespace app\index\controller;
use think\Controller;

class LoginVerfy extends Controller
{
	public function _initialize()
	{
		if(session('username'))
        {
        	return true;
        }
        else
        {
        	return $this->redirect('index/user/login');
        }
	}
}


 ?>