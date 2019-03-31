<?php
/**
 * Created by PhpStorm.
 * User: JS_chen
 * Date: 2018/5/31
 * Time: 20:29
 */

namespace app\index\controller;
use think\Db;
use app\index\controller\LoginVerfy;

class Goods extends LoginVerfy
{
    /**
     * Notes:商品列表
     * User: 'JS_chen'
     * Date: 2018/5/31
     * Time: 20:30
     * @return mixed
     */
    public function index()
    {
        $goods = Db::name('goods')->paginate(20);
        $pages = $goods->lastPage();
        $current_page = $goods->currentPage();
        $this->assign('goods',$goods);
        $this->assign('pages',$pages);
        $this->assign('current_page',$current_page);
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isPost())
        {
            $title = request()->post('title','');
            $sell_price = request()->post('sell_price','');
            $market_price = request()->post('market_price','');
            $stock_quantity = request()->post('stock_quantity','');
            $image = request()->file("image");
            $desc = request()->post('desc','');
            $info = $image->validate(['ext'=>'jpg,jpeg,png,gif'])->move('uploads/goods');
            $image_path = "/uploads/goods/".$info->getSaveName();
            $img = 'http://www.vuecms.com'.$image_path;
            $data = [
                'title'=>$title,
                'face'=>$img,
                'sell_price'=>$sell_price,
                'market_price'=>$market_price,
                'stock_quantity'=>$stock_quantity,
                'desc'=>$desc
            ];
            Db::name('goods')->insert($data);
            $this->success('添加成功');
            return $this->fetch();
        }
        return $this->fetch();
    }
}