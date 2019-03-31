<?php
namespace app\api\controller;
use think\Controller;
use think\Db;

class Api extends Controller
{
    /**
     * Notes:获取轮播图接口
     * User: 'JS_chen'
     * Date: 2018/5/19
     * Time: 21:20
     * @return \think\response\Json|void
     */
    public function getSwipe()
    {
        $swipes = Db::name('swipe')->order('id', 'desc')->limit(3)->select();
        $count = Db::name('swipe')->count();
        return getJson(200, 'ok', $count, $swipes);
    }

    /**
     * Notes:获取新闻列表接口
     * User: 'JS_chen'
     * Date: 2018/5/19
     * Time: 21:21
     * @return \think\response\Json|void
     */
    public function getNewsList()
    {
        $news = Db::name('news')->order('id', 'desc')->select();
        $count = Db::name('news')->count();
        return getJson(200, 'ok', $count, $news);
    }

    /**
     * Notes:获取新闻详情接口
     * User: 'JS_chen'
     * Date: 2018/5/19
     * Time: 21:22
     * @param int $id
     * @return \think\response\Json|void
     */
    public function getNewsDetail($id=0)
    {
        if(!$id){
            return getJson(400, '参数错误', 0);
        }else{
            $new = Db::name('news')->where('id',$id)->find();
            $click_num = $new["click_num"] + 1;
            Db::name('news')->where('id',$id)->update(["click_num"=>$click_num]);
            return getJson(200, 'ok', 1, $new);
        }
    }

    /**
     * Notes:获取图文分类
     * User: 'JS_chen'
     * Date: 2018/5/21
     * Time: 20:36
     * @return \think\response\Json|void
     */
    public function getImgCategory()
    {
        $img_category = Db::name('img_category')->select();
        $count = Db::name('img_category')->count();
        return getJson(200,'ok',$count,$img_category);
    }

    /**
     * Notes:获取图文列表
     * User: 'JS_chen'
     * Date: 2018/5/29
     * Time: 22:06
     * @param int $id
     * @return \think\response\Json|void
     */
    public function getImage($id=0)
    {
        if($id==null)
        {
            return getJson(400,'参数错误');
        }
        if($id==0)
        {
            $imgs = Db::name('img')->join('img_category imgc','imgcategory_id=imgc.id')->select();
            $count = Db::name('img')->count();
        }else {
            $imgs = Db::name('img')->join('img_category imgc','imgcategory_id=imgc.id')->where('imgcategory_id',$id)->select();
            $count = Db::name('img')->where('imgcategory_id',$id)->count();
        }
        return getJson(200,'ok',$count,$imgs);
    }

    /**
     * Notes:获取图文详情
     * User: 'JS_chen'
     * Date: 2018/5/29
     * Time: 22:06
     * @param int $id
     * @return \think\response\Json|void
     */
    public function getImageDetail($id=0)
    {
        if($id==null)
        {
            return getJson(400,'参数错误');
        }
        if($id>0)
        {
            $img = Db::name('img')->join('img_category imgc','imgcategory_id=imgc.id')->where('img_id',$id)->find();
            $click_num = $img["click_num"] + 1;
            Db::name('img')->where('img_id',$id)->update(['click_num'=>$click_num]);
            return getJson(200,'ok',1,$img);
        }else{
            return getJson(400,'fail',0);
        }
    }

    /**
     * Notes:获取评论
     * User: 'JS_chen'
     * Date: 2018/5/29
     * Time: 22:16
     * @param $cid
     * @return \think\response\Json|void
     */
    public function getcomment($category,$cid)
    {
        if(($cid==null)&&($category=null))
        {
            return getJson(400,'参数错误');
        }
        $isWhere = [
            'category'=>$category,
            'cid'=>$cid
        ];
        $comments = Db::name('comment')->where($isWhere)->order('add_time','desc')->paginate(4);
        $count = Db::name('comment')->where('cid',$cid)->count();
        return getJson(200,'ok',$count,$comments);
    }

    /**
     * Notes:提交评论
     * User: 'JS_chen'
     * Date: 2018/6/4
     * Time: 14:44
     * @param $cid
     */
    public function postComment($category,$cid)
    {

        if(($cid==null)&&($category=null))
        {
            return getJson(400,'参数错误');
        }$content = request()->post('content');
//        var_dump($content);exit();
        $data = [
            'content'=>$content,
            'category'=>$category,
            'cid'=>$cid
        ];
        Db::name('comment')->insert($data);
        return postJson(200,'评论成功');
    }

    /**
     * Notes:商品列表
     * User: 'JS_chen'
     * Date: 2018/6/4
     * Time: 14:45
     */
    public function goodsList()
    {
        $goods = Db::name('goods')->paginate(8);
        $count = Db::name('goods')->count();
        return getJson(200,'ok',$count,$goods);
    }

    /**
     * Notes:获取商品详情
     * User: 'JS_chen'
     * Date: 2018/6/4
     * Time: 15:00
     * @param $id
     */
    public function goodsDetail($id)
    {
        if(!$id)
        {
            return getJson(400,'参数错误');
        } else{
            $good = Db::name('goods')->where('id',$id)->find();
            $click_num = $good['click_num'] + 1;
            Db::name('goods')->where('id',$id)->update(['click_num'=>$click_num]);
            return getJson(200,'ok',1,$good);
        }
    }

    /**
     * Notes:获取商品轮播图
     * User: 'JS_chen'
     * Date: 2018/6/8
     * Time: 21:01
     * @param $id
     */
    public function goodImages($id)
    {
        if(!$id)
        {
            return getJson(400,'参数错误');
        } else{
            $goodImages = Db::name('goodImages')->where('good_id',$id)->field('url')->select();
            $count = Db::name('goodImages')->where('good_id',$id)->count();
            return getJson(200,'ok',$count,$goodImages);
        }
    }

    /**
     * Notes:获取购物车商品信息
     * User: 'JS_chen'
     * Date: 2018/6/8
     * Time: 21:29
     * @param $ids
     */
    public function getShopCartlist($ids)
    {
        if(!$ids)
        {
            return getJson(400,'参数错误');
        }else{
            $shopCartList = Db::name('goods')->where('id','in',$ids)->field('id,title,sell_price,face,stock_quantity')->select();
            $count = Db::name('goods')->where('id','in',$ids)->count();
            return getJson(200,'ok',$count,$shopCartList);
        }
    }
    /**
     * Notes:获取验证码
     * User: 'JS_chen'
     * Date: 2018/6/12
     * Time: 15:39
     * @param $cid 行为id ,1=>注册，2=>登陆，3=>忘记密码
     */
    public function getCode()
    {
        $cid = (int)request()->post('cid',0);
        $to = request()->post('to');
        //判断参数是否合法
        if($cid==1||$cid==2||$cid==3)
        {
            //如果是注册行为，判断账号是否已经存在
            if($cid==1)
            {
                if(phoneOremail($to) == "phone")
                {
                    $count = Db::name('user')->where("phone",$to)->count();
                }else if(phoneOremail($to) == "email"){
                    $count = Db::name('user')->where("email",$to)->count();
                }
                if($count)
                {
                    return postJson(400,"该账号已被注册");
                }
            }
            $code = getRandNum(6);
            //判断是否为手机
            if(phoneOremail($to) == "phone")
            {
                $res = sendSMS($to,$code);
                $res_json = json_decode($res,true);
                if($res_json["respCode"] == "00000")
                {
                    Db::name('code')->insert(["to"=>$to,"code"=>$code,"category"=>$cid]);
                    return postJson(200,"发送成功");
                }else{
                    return postJson(400,"发送失败");
                }
            }
            //判断是否为邮箱
            else if(phoneOremail($to) == "email")
            {
                $res = sendMail($to,$code);
                if($res['code'] == 200)
                {
                    Db::name('code')->insert(["to"=>$to,"code"=>$code,"category"=>$cid]);
                    return postJson(200,"发送成功");
                }else{
                    return postJson(400,"发送失败");
                }
            }
        } else{
            return postJson(400,"参数错误");
        }
    }
    public function register()
    {
        $username = trim(request()->post('username'));
        $user = request()->post('user');
        $password = trim(request()->post('password'));
        $code = request()->post('code');
        $where = ["to"=>$user,"category"=>"注册"];
        $currentTime = time();
        $add_time = Db::name('code')->where($where)->field("add_time")->order('add_time','desc')->find()["add_time"];
        //判断用户名是否存在
        $isHas = Db::name('user')->where('name',$username)->find();
        if($isHas)
        {
            return postJson(400,"该用户名已被注册");
        }
        //判断账号是否已获取验证码
        if($add_time)
        {
            $sendTime = strtotime($add_time);
        }else{
            return postJson(400,"该账号未发送验证码");
        }
        //当前时间减去发送验证码时间小于5分钟，则有效；
        if($currentTime - $sendTime < 300)
        {
            //查询验证码是否正确
            $where = ["to"=>$user,"code"=>$code,"category"=>"注册"];
            $count = Db::name('code')->where($where)->count();
            if(!$count){
                return postJson(400,"验证码错误");
            }
            if(phoneOremail($user) == "phone")
            {
                $count = Db::name('user')->where("phone",$user)->count();
                if($count)
                {
                    return postJson(400,"该手机号码已被注册");
                }else{
                    Db::name('user')->insert(["name"=>$username,"phone"=>$user,"password"=>md5($password)]);
                    return postJson(200,"注册成功");
                }
            } else if(phoneOremail($user) == "email")
            {
                $count = Db::name('user')->where("phone",$user)->count();
                if($count)
                {
                    return postJson(400,"该邮箱已被注册");
                }else{
                    Db::name('user')->insert(["name"=>$username,"email"=>$user,"password"=>md5($password)]);
                    return postJson(200,"注册成功");
                }
            }
        }else{
            return postJson(400,"验证码已过期");
        }
    }

    /**
     * Notes:登陆
     * User: 'JS_chen'
     * Date: 2018/6/13
     * Time: 16:09
     */
    public function login()
    {
        $username = trim(request()->post('username'));
        $password = trim(request()->post('password'));
        $hasUser = Db::name("user")->where("name",$username)->whereOr("phone",$username)
            ->whereOr("email",$username)->find();
        if($hasUser)
        {
            if(md5($password) == $hasUser["password"])
            {
                $token = md5("vuecms"+$username+$password+time());
                session($username,$token);
                $info = array("username"=>$hasUser["name"],"face"=>$hasUser["face"],"token"=>$token);
                return getJson(200,"登陆成功",1,$info);
            }else{
                return postJson(400,"密码错误");
            }
        }else{
            return postJson(400,"用户不存在");
        }
    }

    /**
     * Notes:退出登录
     * User: 'JS_chen'
     * Date: 2018/6/14
     * Time: 15:32
     * @param $username
     */
    public function logout($username)
    {
        if($username)
        {
            session($username,null);
            return postJson(200,"退出成功");
        }else{
            return postJson(400,"参数错误");
        }
    }

    /**
     * Notes:获取用户信息
     * User: 'JS_chen'
     * Date: 2018/6/14
     * Time: 17:24
     * @param $username
     */
    public function getUserInfo($username)
    {
        if($username)
        {
            $token = request()->header("token");
            //判断token是否一致
            if($token === session($username))
            {
                $user = Db::name("user")->where("name",$username)->find();
                return getJson(200,"获取成功",1,$user);
            }else{
                return postJson(400,session($username));
            }
        }else{
            return postJson(400,"参数错误");
        }
    }
    public function updateFace()
    {
        $file = request()->file("face");
        $username = request()->post("username");
        $token = request()->header("token");
        if($token === session($username))
        {
            $tmp = $file->move("uploads/user");
            $face = 'http://www.vuecms.com/uploads/user/'.$tmp->getSaveName();
            Db::name("user")->where("name",$username)->update(["face"=>$face]);
            return getJson(200,"上传成功",1,["face"=>$face,]);
        }else{
            return postJson(400,"上传失败");
        }

    }
}
