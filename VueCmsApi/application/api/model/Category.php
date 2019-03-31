<?php 
namespace app\home\model;
use think\Model;

class Category extends Model
{
	//关联Tag模型
	public function tag()
	{
	    return $this->hasMany('Tag');
	}
	//关联article模型
	public function article()
	{
	    return $this->hasMany('Article');
	}
}

 ?>