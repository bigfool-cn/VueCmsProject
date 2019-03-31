<?php
/**
 * Created by PhpStorm.
 * User: JS_chen
 * Date: 2018/6/2
 * Time: 21:45
 */

namespace app\index\controller;
use think\Db;
use app\index\controller\LoginVerfy;

class GoodImages extends LoginVerfy
{
    public function index()
    {
        $goodImages = Db::name('goodImages')->join('goods g','good_id=g.id')->paginate(20);
        $pages = $goodImages->lastPage();
        $current_page = $goodImages->currentPage();
        $this->assign('goodImages',$goodImages);
        $this->assign('pages',$pages);
        $this->assign('current_page',$current_page);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost())
        {
            $id = request()->post('id',0);
            $image = request()->file("image");
            $info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/goods');
            $image_path = "/uploads/goods/".$info->getSaveName();
            $img = 'http://www.vuecms.com'.$image_path;
            $data = ['good_id'=>$id,'url'=>$img];
            Db::name('goodImages')->insert($data);
            $this->success('添加成功');
            return $this->fetch();
        }
        $id = request()->get('id',0);
        $good = Db::name('goods')->where('id',$id)->field('id,title')->find();
        $this->assign('good',$good);
        return $this->fetch();
    }
}