<?php 
namespace app\index\controller;
use app\index\controller\LoginVerfy;

class UserLog extends LoginVerfy
{
	public function loginLog()
	{
		$loginlogs = model('LoginLog')->paginate(20);
		$pages = $loginlogs->lastPage();
		$current_page = $loginlogs->currentPage();
		$this->assign('loginlogs',$loginlogs);
		$this->assign('pages',$pages);
		$this->assign('current_page',$current_page);
		return $this->fetch();
	}
	public function operateLog()
	{
		$operatelogs = model('OperateLog')->paginate(20);
		$pages = $operatelogs->lastPage();
		$current_page = $operatelogs->currentPage();
		$this->assign('pages',$pages);
		$this->assign('current_page',$current_page);
		$this->assign('operatelogs',$operatelogs);
		return $this->fetch();
	}
}


 ?>
 
