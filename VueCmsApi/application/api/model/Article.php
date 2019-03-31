<?php 
namespace app\home\model;
use think\Model;

class Article extends Model
{
  	//自动写入时间戳字段，类型为datetime
	protected $autoWriteTimestamp = 'datetime';
	//关闭自动写入update_time字段
	protected $updateTime = false;
	public function Tag()
	{
		return $this->belongsTo("Tag");
	}
	public function Category()
	{
		return $this->belongsTo("Category");
	}
}

 ?>