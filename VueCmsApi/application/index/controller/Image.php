<?php
/**
 * Created by PhpStorm.
 * User: JS_chen
 * Date: 2018/5/21
 * Time: 19:44
 */

namespace app\index\controller;
use think\Db;
use app\index\controller\LoginVerfy;


class Image extends LoginVerfy
{
    /**
     * Notes:图文列表
     * User: 'JS_chen'
     * Date: 2018/5/21
     * Time: 20:08
     * @return mixed
     */
    public function index()
    {
        $imgs = Db::name('img')->join('img_category imgc','imgcategory_id=imgc.id')->paginate(10);
        $pages = $imgs->lastPage();
        $current_page = $imgs->currentPage();
        $this->assign('imgs',$imgs);
        $this->assign('pages',$pages);
        $this->assign('current_page',$current_page);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost())
        {
            $title = request()->post("title","");
            $imgcategory_id = request()->post("category",0);
            $desc = request()->post("desc","");
            $content = request()->post("content","");
            $image = request()->file("image");
            $info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/imgs');
            $img = "http://www.vuecms.com/uploads/imgs/".$info->getSaveName();
            $data = [
                'img_title'=>$title,
                'desc'=>$desc,
                'content'=>$content,
                'img'=>$img,
                'imgcategory_id'=>$imgcategory_id,
            ];
            Db::name('img')->insert($data);
            return $this->success('添加成功');
        }
        $categorys = Db::name('img_category')->select();
        $this->assign('categorys',$categorys);
        return $this->fetch();
    }
}