<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{
      public function login()
    {
        header("Content-type: text/html; charset=utf-8");
           // 判断提交方式
        if (I('post.username')!=''&&I('post.password')!='') {
            // 实例化Login对象
            $user = D('userinfo');
            $where = array();
            $where['username'] = I('post.username');
            $result = $user->where($where)->field('uid,username,upwd,utime')->find();
            // 验证用户名 对比 密码
            if ($result['upwd'] === md5(I('post.password') . $result['utime'])) {
                // 存储session
                session('uid', $result['uid']);          // 当前用户id
                session('husername', $result['username']);   // 当前用户昵称
                // 更新用户登录信息
                $dd['lastlog']=time();
                $user->where('uid='.$result['uid'])->save($dd);
                $where['uid'] = session('uid');
                $this->redirect('Index/index');
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        }
        $userinfo = M('userinfo');
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'MicroMessenger') === false) {
             //非微信浏览器禁止浏览
            //echo "不是微信";
            $this->assign('is_weixin',0);
            $this->display(); 
        } else {
            //做跳转，拿到openid,第一步跳转链接，
            if ($_GET['openid']=='') {
                $this->assign('is_weixin',1);
                $wechat=M('wechat')->find();
             $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$wechat['appid']."&redirect_uri=http://www.caomengde.cn/Extend/weixin.php&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";
               echo "<script language='javascript'>window.location='".$url."'</script>";
            }else{
                $this->assign('is_weixin',2);
                echo $_GET['openid'];
                //这里做一个判断，客户没有注册，则直接去注册页面，否则去登录页面。
                $openid['openid']='';
                $openid['nickname']=$_GET['nickname'];
                $openid['address']=$_GET['address'];
                $openid['portrait']=$_GET['portrait'];
                $openid['utime']=$_GET['subscribe_time'];//时间
                $openid['username']= substr($openid['openid'], -5).time();//登录名
                $openid['usertype']='1';
                $openid['wxtype']='1';
                $userinfoid=$userinfo->where("openid='".$openid['openid']."'")->find();
                //有数据在判断看是否有密码，有账号，没有的话跳转到初始页面，让输入密码，这里是修改方法。
                if ($userinfoid) {
                    if ($userinfoid['upwd']) {
                          //传用户名过去，做隐藏，然后直接登录
                          $this->assign('username',$userinfoid['username']);
                       }else{
                          //注册初始密码页面
                          $this->redirect('User/reg', array('openid' => $openid['openid']), 1, '请设置初始密码...');  
                       }  
                }
                else{
                 //没查询到，就跳转到注册页面，让输入初始密码。生成一个账号。这里是添加账号方法后，赋值跳转到登录页面。
                  if($userinfo->add($openid)){
                      //初始密码页面
                      $this->redirect('User/reg', array('openid' => $openid['openid']), 1, '请设置初始密码...'); 
                      
                    }
                
                 }
                
               }
              $this->display(); 
           }
            
    }

       //注册页面
   public function reg()
    {
        
        $openid=I('get.openid'); 
        $oid = I('get.oid');
        $this->assign('openid',$openid);
        $this->assign('oid',$oid);
        $this->display();

    }
    //注册
    public function register()
    {
         //$this->userlogin();
        if(IS_POST)
        {// 判断提交方式 做不同处理
            // 实例化User对象
            $user = D('userinfo');
            //检查用户名
            header("Content-type: text/html; charset=utf-8");
            //检查手机验证码
            $code = $this->mescontent();
            $verify = I('post.code');
           // if ($code != $verify) {
                /*
                *推广链接时需要在注册时添加一个获取oid的方法，添加进去，作为上线的记录。
                */                 
                $data['username'] = I('post.username');
                $data['utel'] = I('post.utel');
                $data['utime'] = date(time());
                $data['upwd'] = md5(I('post.upwd') . date(time()));
                $data['oid']=I('post.oid');
                $sjxx=$user->where(array('uid'=>I('post.puid')))->find();
                $data['managername']=$sjxx['username'];
                $uname = $user->where('username='.$data['username'])->find();
                $utel = $user->where('utel='.$data['utel'])->find();
                //var_dump($data);
                if($uname){
                    die("<script>alert('用户名已注册！');history.back(-1);</script>");
                    //$this->ajaxReturn(3);
                }elseif ($utel) {
                    die("<script>alert('手机号已注册！');history.back(-1);</script>");
                }else{
                    //插入数据库
                    if ($uid = $user->add($data)) {
                        //添加对应的金额表
                        $acc['uid']=$uid;
                        $aid = M('accountinfo')->add($acc);
                        die("<script>alert('注册成功！');location.href='login.html';</script>");
                    } else {
                        die("<script>alert('注册失败！');history.back(-1);</script>");
                    }
                }
            }else{
                die("<script>alert('非法操作！');history.back(-1);</script>");
           // }

       // }else{
            $oid = I('get.oid');
            $com = M('userinfo')->field('comname,uid')->where('uid='.$oid)->find();         
            $this->assign('com',$com);
            $this->display();           
        }

    }
    //设置初始密码，密码后台可以修改。这里需要创建资金表，创建详细信息表。
    public function myreg(){
       
        $userinfo=M('userinfo');
        $openid=I('post.openid');
        $user=$userinfo->where("openid='".$openid."'")->find();
        $data['uid']=$user['uid'];
        $data['utime'] = date(time());
        $data['upwd'] = md5(I('post.upwd') . date(time()));
        $data['wxtype']='0';
        if($userinfo->save($data)){
              $brok['uid']=$user['uid'];
              $brok['brokerid']=I('post.brokerid');
              M('managerinfo')->add($brok);
              $accid['uid']=$user['uid'];
              $accid['pwd']=I('post.upwd');
              M('accountinfo')->add($accid);
            $this->redirect('User/login');
        }else{
            $this->error('设置失败，请联系管理员');
        }
        
        
    }
    //生成随机六位验证码

    public function mescontent()
    {

        $CheckCode = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
        return $CheckCode;

    }

    //短信验证
    public function smsverify()
    {
        $code = $this->mescontent();
        $post_data = array();
        $post_data['userid'] = '2571';
        $post_data['password'] = 'zjy100200';
        $post_data['account'] = 'zj46602437';
        $post_data['content'] = '【期货开发】您的验证码是:' . $code;
        $post_data['mobile'] = $_REQUEST['tel'];
        $post_data['sendtime'] = ''; //不定时发送，值为0，定时发送，输入格式YYYYMMDDHHmmss的日期值
        $url = 'http://118.145.18.236:9999/sms.aspx?action=send';
        $o = '';
        foreach ($post_data as $k => $v) {
            $o .= "$k=" . urlencode($v) . '&';
        }
        $post_data = substr($o, 0, -1);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果需要将结果直接返回到变量里，那加上这句。
        $result = curl_exec($ch);

    }

    //会员中心
    public function memberinfo()
    {
        $this->userlogin();
        $uid = $_SESSION['uid'];
        $result = M('accountinfo')->where('uid=' . $uid)->find();
        $suer = M('userinfo')->where('uid='. $uid)->find();
        $this->assign('result', $result);
        $this->assign('suer', $suer);
        $this->display();
    }

    //修改密码
    public function edituser()
    {
        $this->userlogin();
        if (IS_POST) {
            $data['uid'] = $_SESSION['uid'];
            $myuser = M('userinfo')->where('uid=' . $data['uid'])->find();
            $user = M('userinfo')->where($data)->find();
            if ($user['upwd'] === md5(I('post.upwd') . $myuser['utime'])) {
                $edit = M('userinfo');
                if ($edit->create()) {
                    $edit->uid = $_SESSION['uid'];
                    $edit->utime = date(time());
                    $edit->upwd = md5(I('post.newpwd') . date(time()));
                    $edituser = $edit->save();
                    if ($edituser) {
                        redirect(U('User/memberinfo'), 1, '密码修改成功...');
                    } else {
                        $this->error('密码修改失败，请重新修改');
                    }
                }
            } else {
                $this->error('原密码不正确，请重新输入');
            }
        }
        $this->display();
    }

 //修改交易密码
    public function edituserb()
    {
        $this->userlogin();

        if (IS_POST) {
            $data['uid'] = $_SESSION['uid'];
            $myuser = M('userinfo')->where('uid=' . $data['uid'])->find();
            $user = M('accountinfo')->where('uid=' . $data['uid'])->find();
            if ($user['pwd'] == md5(I('post.pwd') . $myuser['utime'])||$user['pwd']==''||!$user) {
                $editb = M('accountinfo');
                if (I('post.newpwdb')!==I('post.mypwdb')) {
                    die("<script>alert('密码不一致！');history.back(-1);</script>");
                }

                    $data['pwd'] = md5(I('post.newpwdb') . $myuser['utime']);
                    $edituserb = $editb->where('uid=' . $data['uid'])->save($data);
                    if ($edituserb) {
                        redirect(U('User/memberinfo'), 1, '密码修改成功...');
                    } else {
                        $this->error('密码修改失败1，请重新修改');
                    }
                
            } else {
                $this->error('原密码不正确，请重新输入');
            }
        }
        $this->display();
    }



    //退出登录
    public function logout()
    {
        // 清楚所有session
        session(null);
        $this->redirect('Index/login');

    }



    //账户提现
    public function cash()
    {
        $this->userlogin();
        $account = D('accountinfo');
        $balance = D('balance');
        $bankinfo = D('bankinfo');
        $bournal = D('bournal');
        $uid = $_SESSION['uid'];
        $username = $_SESSION['husername'];
        if(IS_POST){
            //交易密码
            $bpwd = $account->field('pwd,balance')->where('uid='.$uid)->find();
            $myuser=M('userinfo')->where(array('uid'=>$uid))->find();
            $pwd = md5(I('post.pwd').$myuser['utime']);
            $banknumber = I('post.banknumber');
            $bankname = I('post.bankname');
            $province = I('post.province');
            $city = I('post.city');
            $branch = I('post.branch');
            $busername = I('post.busername');
            $bpprice = I('post.bpprice');
            if($bpwd['pwd']==$pwd){
                if($banknumber!=''||isset($banknumber)){
                    $detailed = A('Home/Detailed');
                    //提现表
                    $balances['bptype'] = '提现';
                    $balances['bptime'] = date(time());
                    $balances['bpprice'] = $bpprice;
                    $balances['uid'] = $uid;
                    $balances['isverified'] = 0;
                    //提现记录
                    $bournals['btype'] = '提现';
                    $bournals['btime'] = date(time());
                    $bournals['bprice'] = $bpprice;
                    $bournals['uid'] = $uid;
                    $bournals['username'] = $username;
                    $bournals['isverified'] = 0;
                    $bournals['bno'] = $detailed->build_order_no();
                    $bournals['balance'] = $bpwd['balance']-$bpprice;
                    //银行卡信息，添加或修改
                    $banks['bankname'] = $bankname;
                    $banks['province'] = $province;
                    $banks['city'] = $city;
                    $banks['branch'] = $branch;
                    $banks['banknumber'] = $banknumber;
                    $banks['busername'] = $busername;
                    //插入提现记录
                    $balance_result = $balance->add($balances);
                    $bournal_result = $bournal->add($bournals);
                    //查询银行卡表所有用户id数组
                    $uidcount = $bankinfo->where('uid='.$uid)->count();
                    //判断uid是否已经存在银行卡表内，存在插入数据，不存在修改数据
                    if($uidcount==1){
                        //查询用户银行卡表的bid
                        $bid = $bankinfo->field('bid')->where('uid='.$uid)->find();
                        $bankinfo->where('bid='.$bid['bid'])->save($banks);
                    }else{
                        $banks['uid'] = $uid;
                        $bankinfo->add($banks);
                    }
                    if($balance_result){
                        $accounts['balance'] = $bpwd['balance']-$bpprice;
                        $account->where('uid='.$uid)->save($accounts);
                        $this->ajaxReturn();
                    }else{
                        $this->ajaxReturn("0");
                    }
                }else{
                    $this->ajaxReturn("10");
                }
            }else{
                $this->ajaxReturn("-99");
            }
        }else{
            //账户余额
            $totle = $account->field('balance')->where('uid='.$uid)->find();
            //银行信息
            $binfo = $bankinfo->where('uid='.$uid)->find();
            
            $this->assign('binfo',$binfo);
            $this->assign('totle',$totle);
            $this->display();   
        }
    }
    //账户充值
    public function recharge()
    {
        $this->userlogin();
        $uid = $_SESSION['uid'];
        $result = M('accountinfo')->where('uid='. $uid)->find();
        $suer = M('userinfo')->where('uid='.$uid)->find();
        $this->assign('result', $result);
        $this->assign('suer', $suer);
        $this->assign('style','1');
        if (IS_POST) {
             $date['bpprice']=I('post.tfee1');
             if ($date['bpprice']<100) {
                 die("<script>alert('充值金额最低为100元！');history.back(-1);</script>");
             }
             $date['bptime']=$this->build_order_no();
             $date['uid']=$uid;
             $date['bptype']='充值';
             $date['bptime']=date(time());
             $date['remarks']='开始充值';
             $balanceid=M('balance')->add($date);

             if ($balanceid) {
                $balc=M('balance')->where('bpid='.$balanceid)->find();
                $this->assign('balc',$balc);
             }
             $this->assign('style','2');
        }
        $this->display();
    }
    //处理支付后的结果，加钱
    public function notify(){
         $orderno=I('get.order_id');
         $balance=M('balance')->where('bptime='.$orderno)->find();
        
         //判断订单是否存在，并且判断是否是同一个人操作
         if ($balance&&$balance['uid']==$_SESSION['uid']) {
            $date['bptime']=$balance['bptime'];
            $date['remarks']='充值成功';
            $style=M('balance')->where('uid='.$balance['uid'])->save($date);
            //修改客户的帐号余额
            if ($style) {
                //先取出用户帐号的余额。
                $userprice=M('accountinfo')->where('uid='.$balance['uid'])->find();
                $mydate['balance']=$balance['bpprice']+$userprice['balance'];
                M('accountinfo')->where('uid='.$balance['uid'])->save($mydate);
                echo "<script>alert('充值成功！');</script>";
                $this->redirect('User/memberinfo','2');
                
            }
         }
         
            
    }

    public function notify2(){
        $orderno=I('post.order_id');
        $balance=M('balance')->where('bptime='.$orderno)->find();
        if ($balance) {
            $aab=2;
            
        }else{
            $aab=1;
        }
        $this->ajaxReturn($aab);    
    }
    
    //获取用户收入排行
    public function ranking(){
        $this->userlogin();
        $order=M('order');
        //$userinfo=M('userinfo')->select();
        $tq=C('DB_PREFIX');
       // foreach ($userinfo as $k => $v) {
        $list=$order->field('sum('.$tq.'order.ploss) as pric,'.$tq.'order.uid')->group($tq.'order.uid')->order('sum('.$tq.'order.ploss) desc')->limit(10)->select();
        $lists=array();
        foreach ($list as $k => $v) {
           $lists[$k]=$v;
           $username=M('userinfo')->field('username','portrait')->where('uid='.$v['uid'])->find();
           $lists[$k]['name']=$username['username'];
           $lists[$k]['portrait']=$username['portrait'];
        }
        $this->assign('lists',$lists);
        $this->display();
    }
    //体验卷列表
    public function experiencelist()
    {
        $this->userlogin();
        $uid = $_SESSION['uid'];
        $tq = C('DB_PREFIX');
        $endtime = date(time());
        
       // $list=M('experience')->join($tq.'experienceinfo on'.$tq.'experienceinfo.exid=' . $tq . 'experience.eid')->select();

        $list=M('experienceinfo')->join($tq.'experience on '.$tq.'experienceinfo.eid='.$tq.'experience.eid')->where($tq.'experienceinfo.uid='.$uid.' and '.$endtime.' < '.$tq.'experienceinfo.endtime and '.$tq.'experienceinfo.getstyle=0')->select(); 


        $this->assign('list', $list);
        $this->display();
    }


      //体验卷列表
    public function alist()
    {
        $this->userlogin();
        $uid = $_SESSION['uid'];
        $tq = C('DB_PREFIX');
        $endtime = date(time());
        $alist = M('experience')->where(  $endtime . ' < ' . $tq . 'experience.endtime')->select();
        $this->assign('alist', $alist);
        $this->display();
    }





    //体验卷详情页
    public function experienceid()
    {
        $this->userlogin();
        $eid = I('eid');
        $expid = M('experience')->where('eid=' . $eid)->find();
        $this->assign('expid', $expid);
        $this->display();
    }

    public function userlogin()
    {
        //判断用户是否已经登录
        if (!isset($_SESSION['uid'])) {
            $this->redirect('User/login');
        }
    }
    public function img(){
        $this->userlogin();
        $hostlink= $_SERVER['HTTP_HOST'];
        $url=  $hostlink.U('User/reg')."?uid=".session('uid');
        $this->assign('url', $url);
        $this->display();
    }

    //随机生成订单编号
    function build_order_no(){
        return date(time()).substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 3);
    }
        

}