<?php
/**
 * Created by PhpStorm.
 * User: JS_chen
 * Date: 2018/5/9
 * Time: 21:10
 */

namespace app\index\controller;
use think\Db;
use app\index\controller\LoginVerfy;

class Swipe extends LoginVerfy
{
    public function index()
    {
        $swipes = Db::name('swipe')->paginate(20);
        $pages = $swipes->lastPage();
        $current_page = $swipes->currentPage();
        $this->assign('swipes',$swipes);
        $this->assign('pages',$pages);
        $this->assign('current_page',$current_page);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost())
        {
            $url = request()->post('url');
            $image = request()->file("image");
            $info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/swipe');
            $image_path = "/uploads/swipe/".$info->getSaveName();
            $img = 'http://www.vuecms.com'.$image_path;
            $data = ['url'=>$url,'img'=>$img];
            Db::name('swipe')->insert($data);
            $this->success('添加成功');
            return $this->fetch();
        }
        return $this->fetch();
    }
}