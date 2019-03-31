<?php 
namespace app\home\model;
use think\Model;

class Tag extends Model
{
	public function Category()
	{
		return $this->belongsTo("Category");
	}
	//关联Article模型
	public function article()
	{
	    return $this->hasMany('Article');
	}
	//关联Share模型
	public function share()
	{
	    return $this->hasMany('Share');
	}
}

?>