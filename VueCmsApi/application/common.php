<?php

use phpmailer\PHPMailer;

/**
 * Notes:get请求返回json格式
 * User: 'JS_chen'
 * Date: 2018/5/29
 * Time: 22:34
 * @param $code
 * @param string $msg
 * @param int $count
 * @param array $data
 */
function getJson($code,$msg="",$count=0,$data=array())
{
    $result=array(
        "code"=>$code,
        "msg"=>$msg,
        "count"=>$count,
        "data"=>$data,//数组
    );
    //输出json
    header('Content-type: application/json;charset=utf-8');
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
    exit;
}

/**
 * Notes:post请求返回json格式
 * User: 'JS_chen'
 * Date: 2018/5/29
 * Time: 22:35
 * @param $code
 * @param string $msg
 */
function postJson($code,$msg="")
{
    $result=array(
        "code"=>$code,
        "msg"=>$msg,
    );
    //输出json
    header('Content-type: application/json;charset=utf-8');
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
    exit;
}

/**
 * Notes:发送post请求
 * User: 'JS_chen'
 * Date: 2018/6/11
 * Time: 20:57
 * @param string $url
 * @param array $post_data
 * @return bool|mixed
 */
function request_post($url = '', $post_data = array()) {
    $o = "";
    foreach ( $post_data as $k => $v )
    {
        $o.= "$k=" . urlencode( $v ). "&" ;
    }
    $post_data = substr($o,0,-1);
    $postUrl = $url;
    $curlPost = $post_data;
    $ch = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定地址
    curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//不验证证书
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
    curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
    //var_dump(curl_error($ch));
    $data = curl_exec($ch);//运行curl
    curl_close($ch);
    return $data;
}

/**
 * Notes:生成指定长度的数字
 * User: 'JS_chen'
 * Date: 2018/6/11
 * Time: 21:31
 * @param $len
 * @return string
 */
function getRandNum($len)
{
    $chars = array(
        "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"
    );
    $charsLen = count($chars) - 1;
    shuffle($chars);
    $output = "";
    for ($i=0; $i<$len; $i++)
    {
        $output .= $chars[mt_rand(0, $charsLen)];
    }
    return $output;
}

/**
 * Notes:发送短信
 * User: 'JS_chen'
 * Date: 2018/6/11
 * Time: 21:11
 * @param $to
 * @return bool|mixed
 */
function sendSMS($to,$code)
{
    $url= "https://api.miaodiyun.com/20150822/industrySMS/sendSMS";
    $accountSid = "";
    $authToken = "";
    $smsContent = "【Vue内容管理】您的验证码为".$code."，请于5分钟内正确输入，如非本人操作，请忽略此短信。";
    $timestamp = date("YmdHis",time());
    $post_data = [
        "accountSid"=>$accountSid,
        "smsContent"=>$smsContent,
        "to"=>$to,
        "timestamp"=>$timestamp,
        "sig"=>md5($accountSid.$authToken.$timestamp)
    ];
    $response = request_post($url,$post_data);
    return $response;
}

function sendMail($to,$code)
{
    $mail = new PHPMailer(true);
    $mail->isSMTP(); // 使用SMTP
    $mail->Host = 'smtp.163.com'; // 使用 SMTP servers
    $mail->SMTPAuth = true;
    $mail->Port = 465;
    $mail->Username = '13126051483@163.com'; // SMTP 账户
    $mail->Password = ''; // SMTP 密码
    $mail->SMTPSecure = 'ssl'; // 支持ssl
    $mail->setFrom('13126051483@163.com', 'Vue内容管理系统');//发件人邮箱
    $mail->addAddress($to); // 收件人邮箱
    $mail->addReplyTo('13126051483@163.com', 'Vue内容管理系统');//收件人回复邮箱
    $mail->Subject = '验证码';
    $mail->Body = '您的验证码：'.$code."。请于5分钟内正确输入。若非本人操作，请忽略。";
    if (!$mail->send()) {
        return ['code'=>400,'msg'=>$mail->ErrorInfo];
    } else {
        return ['code'=>200,'msg'=>"发送成功"];
    }
}
function phoneOremail($to)
{
    if(preg_match("/^1[345789]{1}\d{9}$|166\d{8}$/",$to)){
        return 'phone';
    }
    else if(preg_match("/^[A-Za-z0-9\u{4e00}-\u{9fa5}]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/u",$to))
    {
        return 'email';
    }else{
        return postJson(400,"账号格式错误");
    }
}