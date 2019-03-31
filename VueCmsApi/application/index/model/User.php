<?php
namespace app\index\model;
use think\Model;

class User extends Model
{
	 protected $autoWriteTimestamp = 'datetime';
	 public function setPasswordAttr($value)
    {
        return MD5($value);
    }
}

?>