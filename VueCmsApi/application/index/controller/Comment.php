<?php
/**
 * Created by PhpStorm.
 * User: JS_chen
 * Date: 2018/5/29
 * Time: 21:50
 */

namespace app\index\controller;
use think\Db;
use app\index\controller\LoginVerfy;

class Comment extends LoginVerfy
{
    /**
     * Notes:评论列表
     * User: 'JS_chen'
     * Date: 2018/5/29
     * Time: 21:51
     * @return mixed
     */
    public function index()
    {
        $comments = Db::name('comment')->paginate(20);
        $pages = $comments->lastPage();
        $current_page = $comments->currentPage();
        $this->assign('comments', $comments);
        $this->assign('pages', $pages);
        $this->assign('current_page', $current_page);
        return $this->fetch();
    }
}