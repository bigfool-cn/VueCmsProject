<?php
/**
 * Created by PhpStorm.
 * User: JS_chen
 * Date: 2018/5/11
 * Time: 21:38
 */

namespace app\index\controller;
use think\Db;
use app\index\controller\LoginVerfy;

class News extends LoginVerfy
{
    public function index()
    {
        $news = Db::name('news')->paginate(20);
        $pages = $news->lastPage();
        $current_page = $news->currentPage();
        $this->assign('news',$news);
        $this->assign('pages',$pages);
        $this->assign('current_page',$current_page);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost())
        {
            $title = request()->post('title','');
            $image = request()->file("image");
            $content = request()->post('content','');
            $info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/news');
            $image_path = "/uploads/news/".$info->getSaveName();
            $img = 'http://www.vuecms.com'.$image_path;
            $data = ['title'=>$title,'img'=>$img,'content'=>$content];
            Db::name('news')->insert($data);
            $this->success('添加成功');
            return $this->fetch();
        }
        return $this->fetch();
    }
}