<?php 
namespace app\home\model;
use think\Model;

class Share extends Model
{
	public function Tag()
	{
		return $this->belongsTo("Tag");
	}
}

 ?>