<?php
ignore_user_abort();//关闭浏览器仍然执行
set_time_limit(0);//让程序一直执行下去
$interval = 60;
error_reporting(E_ALL^E_NOTICE);
require_once("dbhelp.class.php");
//do{
    $content1 = file_get_contents("http://".$_SERVER['HTTP_HOST']."/xh/json.php?code=conc");//得到文件执行的结果
    $of1 = fopen('xh/you.txt','w');//创建并打开dir.txt
    if($content1){
     fwrite($of1,$content1);//把执行文件的结果写入txt文件
    }
    fclose($of1);
    $content1 = file_get_contents("http://".$_SERVER['HTTP_HOST']."/xh/json.php?code=tjxag");//得到文件执行的结果
    $of1 = fopen('xh/baiyin.txt','w');//创建并打开dir.txt
    if($content1){
     fwrite($of1,$content1);//把执行文件的结果写入txt文件
    }
    fclose($of1);
    $content1 = file_get_contents("http://".$_SERVER['HTTP_HOST']."/xh/json.php?code=tjcu");//得到文件执行的结果
    $of1 = fopen('xh/tong.txt','w');//创建并打开dir.txt
    if($content1){
     fwrite($of1,$content1);//把执行文件的结果写入txt文件
    }
    fclose($of1);
//break;
/*
	$content1 = file_get_contents("http://www.weipan.com/xh/json.php?code=cl1000xh");//得到文件执行的结果
	$of1 = fopen('xh/you.txt','w');//创建并打开dir.txt
	if($content1){
	 fwrite($of1,$content1);//把执行文件的结果写入txt文件
	}
	// fclose($of1);

	$content2 = file_get_contents("http://120.27.24.252/xh/json.php?code=ag50kgxh");//得到文件执行的结果
	$of2 = fopen('xh/baiyin.txt','w');//创建并打开dir.txt
	if($content2){
	 fwrite($of2,$content2);//把执行文件的结果写入txt文件
	}
	//fclose($of2);

	$content3 = file_get_contents("http://120.27.24.252/xh/json.php?code=cu10txh");//得到文件执行的结果
	$of3 = fopen('xh/tong.txt','w');//创建并打开dir.txt
	if($content3){
	 fwrite($of3,$content3);//把执行文件的结果写入txt文件
	}
*/

	 //连接接数据库
    $db = new DBHelper();
    $db->ConnectDB();
    

	   //获取当前时间的油价
	$ydiancha=selectcid(1);
	$source1=file_get_contents("http://".$_SERVER['HTTP_HOST']."/xh/you.txt");
	$msg1 = explode(',',$source1);
	$youjia= str_replace('price:', '',str_replace('"','',$msg1[1]));//最新

	// $youjia =$youjiato*$ydiancha['myat']*$ydiancha['myatjia'];
    //echo $youjia;
	//获取当前时间的银价
	$bdiancha=selectcid(2);
	$source2=file_get_contents("http://".$_SERVER['HTTP_HOST']."/xh/baiyin.txt");
	$msg2 = explode(',',$source2);
	$yinjia = round(str_replace('price:', '',str_replace('"','',$msg2[1])));
	// $yinjia =$yinjiato*$bdiancha['myat']*$bdiancha['myatjia'];
 //   echo $yinjia;
	//获取当前时间的铜价
	$tdiancha=selectcid(3);
	$source3=file_get_contents("http://".$_SERVER['HTTP_HOST']."/xh/tong.txt");
	$msg3 = explode(',',$source3);
	$tongjia = str_replace('price:', '',str_replace('"','',$msg3[1]));

	// $tongjia =$tongjiato*$tdiancha['myat']*$tdiancha['myatjia'];

   // echo $tongjia;

    //查询已经到设置的平仓时间的订单信息  
    $arraynow = $db->ExecuteDQL("SELECT * FROM wp_order WHERE ostaus=0");
 
    foreach ($arraynow as $now) {


        //echo $now['pid'];
        
        // $con=mysql_connect('localhost','root','root');
        // if (!$con) {
        //     die('Could not connect: ' . mysql_error());
        // }
        // $res=mysql_query($sql,$con);
        // $ab=array();
        // //var_dump(mysql_fetch_row($res));
        // while ($rows=mysql_fetch_array($res)) {
        //     //var_dump(mysql_fetch_row($res));
        //     $ab[]=$rows;
        // }
        //var_dump($ab);
        //商品价格
        $oprice = $order[0]['uprice'];
        //$wav = $order[0]['wave'];
        $jc = $oprice*$now['onumber'];    
        
        //var_dump($order[0]['cid']); 
// echo $youjia;
// echo "<br/>";
// echo $yinjia;
// echo "<br/>";
// echo $tongjia;
        //die();
        
                     
      }

//自动平仓开始()
if ($arraynow!="") {

	for ($i=0; $i < count($arraynow); $i++) {
		//取订单分类
		$sql="SELECT * FROM wp_productinfo WHERE pid=".$arraynow[$i]['pid'];
        $order =$db->ExecuteDQL($sql);
		$cid = $order[$i]['cid'];
		//得到订单品种的当前价格
		if($cid==1)
        {
            $sellprice = $youjia;

        }
        else if($cid==2)
        {
            $sellprice = $yinjia;
        }
        else if($cid==3)
        {
            $sellprice =$tongjia;
        }
        //如果用户买涨后的平仓 
        //var_dump(count($arraynow));
		if ($arraynow[$i]['ostyle']==0&&$sellprice>=($arraynow[$i]['buyprice']+$arraynow[$i]['endprofit'])) {
			//echo "1";
			$danjia=$db->ExecuteDQL("SELECT * FROM wp_productinfo WHERE pid={$arraynow[$i]['pid']}");
			$yinli=$danjia[0]['uprice']*$arraynow[$i]['onumber']*(1+$arraynow[$i]['endloss']/100);
			$db->ExecuteDQL("UPDATE wp_accountinfo SET balance=balance+$yinli WHERE uid={$arraynow[$i]['uid']}");
			$time=time();
			$sql="UPDATE wp_order SET ostaus=1,sellprice=$sellprice,selltime=$time WHERE oid=".$arraynow[$i]['oid'];
            $db->ExecuteDQL($sql);
            //如果用户买跌后的平仓
		}else if ($arraynow[$i]['ostyle']==1&&$sellprice<=($arraynow[$i]['buyprice']-$arraynow[$i]['endprofit'])) {
			//echo "2";
			$danjia=$db->ExecuteDQL("SELECT * FROM wp_productinfo WHERE pid={$arraynow[$i]['pid']}");
			$yinli=$danjia[0]['uprice']*$arraynow[$i]['onumber']*(1+$arraynow[$i]['endloss']/100);
			$db->ExecuteDQL("UPDATE wp_accountinfo SET balance=balance+$yinli WHERE uid={$arraynow[$i]['uid']}");
			$time=time();
			$sql="UPDATE wp_order SET ostaus=1,sellprice=$sellprice,selltime=$time WHERE oid=".$arraynow[$i]['oid'];
            $db->ExecuteDQL($sql);
		}else{
			//echo "3";
			// $sql="update wp_order set ostaus=1,sellprice=$sellprice,selltime=time() WHERE oid=".$arraynow[$i]['oid'];
   //          $db->ExecuteDQL($sql);
		}
	}
	
}
die();
//自动平仓结束        


    // if($array!="")
    // {   foreach($array as $order)
    //     {

    //     $porder =  $db->ExecuteDQL("select * from wp_productinfo where pid={$order['pid']}");
    //     $uprice = $porder[0]['uprice'];
    //     $cid = $porder[0]['cid'];
    //     $wave = $porder[0]['wave'];
    //     $feeprice = $porder[0]['feeprice'];
    //     if($cid==1)
    //     {
    //         $sellprice = $youjia;
    //     }
    //     else if($cid==2)
    //     {
    //         $sellprice = $yinjia;
    //     }
    //     else if($cid==3)
    //     {
    //         $sellprice =$tongjia;
    //     }

    //     //不用体验券
    //     if($order['eid']==0)
    //     {
    //         //建仓金额
    //         $jc = round($uprice*$order['onumber'],1);
    //         //买涨还是买跌 0涨1跌
    //         if ( $order['ostyle']==0) {
    //             //盈亏资金
    //             $ykzj = round(($sellprice-$order['buyprice'])*$order['onumber']*$wave,2);
    //             //本单盈余
    //             $bdyy = round($jc+$ykzj,1);
    //         }
    //         else
    //         {  //盈亏资金
    //             $ykzj = round(($order['buyprice']-$sellprice)*$order['onumber']*$wave,2);
    //             //本单盈余
    //             $bdyy = round($jc+$ykzj,1);
    //         }
    //         if ($bdyy<0) {
    //             $bdyy=0;
    //         }

    //     }

    //     //使用体验券
    //     else
    //     {
    //         $jc = 0;
    //         //买涨还是买跌，0涨1跌
    //         if($order['ostyle']==0)
    //         {

    //             $ykzj = round(($sellprice-$order['buyprice'])*$order['onumber']*$wave,2);
    //             $bdyy = round($jc+$ykzj,1);
    //             if($ykzj <0)
    //             {
    //              //   $ykzj = 0;
    //                 $bdyy = 0;
    //             }

    //         }
    //         else
    //         {
    //             //盈亏资金
    //             $ykzj = round(($order['buyprice']-$sellprice)*$order['onumber']*$wave,2);
    //             //本单盈余
    //             $bdyy = round($jc+$ykzj,1);
    //             if($ykzj <0)
    //             {
    //                // $ykzj = 0;
    //                 $bdyy = 0;
    //             }
    //         }
    //     }


    //        //平仓

    //     //先修改订单信息(selltime,ostaus,sellprice,ploss,fee)，返回成功信息后修改账户余额和添加日志记录
    //     //修改订单信息
   
         
       
    //     $orderno = build_order_no();
    //     $selltime = date(time());
    //     $fee=$feeprice*$order['onumber'];
    //     $resorder = $db->ExecuteDML("update wp_order set selltime=$selltime,ostaus=1,sellprice=$sellprice,ploss=$ykzj,fee=$fee where oid={$order['oid']}");
    //       if($resorder)
    //    {

    //         if ($ykzj>0) {
    //             $newprice=$uprice*2;
    //             $db->ExecuteDML("update wp_accountinfo set balance=balance+$newprice where uid = {$order['uid']} ");    
    //         }
    //         if ($ykzj==0) {
    //             $db->ExecuteDML("update wp_accountinfo set balance=balance+$uprice where uid = {$order['uid']} ");
    //         }

    //        //用户亏损了，返点
    //         if($ykzj<0)
    //         {

    //             $user = $db->ExecuteDQL("select * from wp_userinfo where uid={$order['uid']}");
    //             $otype =$user[0]['otype'];//用户类型
    //             $ouid = $user[0]['oid'];//上级id
    //            //有ouid为分销用户
    //             if($ouid!="")
    //             {
    //                 if($otype==0)
    //                 {//此id用户是普通客户，oid为代理用户id
    //                     $otype = "客户";
    //                     //查会员单位返点比例
    //                     $reagent = $db->ExecuteDQL("select oid,rebate,feerebate,otype,username from wp_userinfo where uid=$ouid");
    //                     $agent = $reagent[0];
    //                     $reagent_user = $db->ExecuteDQL("select * from wp_accountinfo where uid=$ouid");
    //                     $agent_user =   $reagent_user[0];
    //                    //判断上级用户，如果是代理商
    //                     if($agent['otype']==1)
    //                     {
    //                         $agent_rebate = $agent['rebate'];				//代理盈亏返点
    //                         $agent_feerebate = $agent['feerebate']; 		//代理手续费返点
    //                         $menber_id = $agent['oid'];						//用户的上级id
    //                         if($menber_id!=""){

    //                             $remenber = $db->ExecuteDQL("select rebate,feerebate,username from wp_userinfo where uid=$menber_id");
    //                             $menber = $remenber[0];
    //                             $menber_rebate = $menber['rebate'];					//会员盈亏返点
    //                             $menber_feerebate = $agent['feerebate']; 			//会员手续费返点
    //                             $newykzj = abs($ykzj);
    //                             $menber_ploss = $newykzj*$menber_rebate/100;			//会员盈亏反金
    //                             $menber_feeploss = $fee*$menber_feerebate/100;		//会员手续费反金
    //                             $agent_ploss = $menber_ploss*$agent_rebate/100;					//代理盈亏反金
    //                             $agent_feeploss = $menber_feeploss*$agent_feerebate/100;		//代理手续费反金
    //                             $remenber_user =$db->ExecuteDQL("select * from wp_accountinfo where uid=$menber_id");
    //                             $menber_user = $remenber_user[0];
    //                             //写两条记录，一条代理，一条会员

    //                             $jtime = date(time());								//操作时间
    //                             $disj['balance'] = $agent_user['balance']+$agent_ploss+$agent_feeploss;			//账户余额
    //                           /*  $disj['jfee'] = $agent_feeploss;							//手续费反金
    //                             $disj['jploss'] = $agent_ploss;								//盈亏反金*/
    //                             $disj['jaccess'] = $agent_feeploss+$agent_ploss;			//出入金额
    //                             $disj['jusername'] = $agent['username'];					//用户名
    //                             //$disj['oid'] = $oid;									//订单id
    //                             //$disj['explain'] = '代理反金';									//操作标记
    //                             $disj['remarks'] = $porder[0]['ptitle'];						//产品名称
    //                             $disj['number'] = $order['onumber'];						//数量
    //                             $disj['jostyle'] =  $order['ostyle'];						//涨、跌
    //                             $disj['jbuyprice'] = $order['buyprice'];					//入仓价
    //                             $disj['jsellprice'] = $sellprice;								//平仓价
    //                             $db->ExecuteDML("insert into wp_journal values('$orderno',$ouid,'返点',$jtime,NULL,{$disj['number']},'{$disj['remarks']}',{$disj['balance']},NULL,'{$disj['jusername']}',{$disj['jostyle']},NULL,$agent_feeploss,{$disj['jbuyprice']},{$disj['jsellprice']},{$disj['jaccess']},$agent_ploss,$oid)");
    //                             //写入会员记录

    //                             $mdisj['balance'] = $menber_user['balance']+$menber_ploss+$menber_feeploss;			//账户余额
    //                             $mdisj['jaccess'] = $menber_feeploss+$menber_ploss;			//出入金额
    //                             $mdisj['jusername'] = $menber['username'];					//用户名


    //                             $db->ExecuteDML("insert into wp_journal values('$orderno',$ouid,'返点',$jtime,NULL,{$disj['number']},'{$disj['remarks']}',{$mdisj['balance']},NULL,'{$mdisj['jusername']}',{$disj['jostyle']},NULL,$menber_feeploss,{$disj['jbuyprice']},{$disj['jsellprice']},{$mdisj['jaccess']},$menber_ploss,$oid)");
    //                         }
    //                     }
    //                     else if($agent['otype']==2)
    //                     {  //如果上级是会员
    //                         $menber_rebate = $agent['rebate'];				//代理盈亏返点
    //                         $menber_feerebate = $agent['feerebate']; 		//代理手续费返点
    //                         $newykzj = abs($ykzj);
    //                         $menber_ploss = $newykzj*$menber_rebate/100;			//会员盈亏反金
    //                         $menber_feeploss = $fee*$menber_feerebate/100;		//会员手续费反金
    //                         //写入会员记录
    //                         $jtime= date(time());								//操作时间
    //                         $disj['balance'] = $user[0]['balance']+$menber_ploss+$menber_feeploss;			//账户余额
    //                         $disj['jfee'] = $menber_feeploss;							//手续费反金
    //                         $disj['jploss'] = $menber_ploss;							//盈亏反金
    //                         $disj['jaccess'] = $menber_feeploss+$menber_ploss;			//出入金额
    //                         $disj['jusername'] = $agent['username'];					//用户名
    //                         /*$mdisj['oid'] = $oid;									//订单id
    //                         $mdisj['explain'] = '会员反金';								//操作标记*/
    //                         $disj['remarks'] = $porder[0]['ptitle'];						//产品名称
    //                         $disj['number'] = $order['onumber'];						//数量
    //                         $disj['jostyle'] =  $order['ostyle'];						//涨、跌
    //                         $disj['jbuyprice'] = $order['buyprice'];					//入仓价
    //                         $disj['jsellprice'] = $sellprice;								//平仓价

    //                         $db->ExecuteDML("insert into wp_journal values('$orderno',$ouid,'返点',$jtime,NULL,{$disj['number']},'{$disj['remarks']}',{$disj['balance']},NULL,'{$disj['jusername']}',{$disj['jostyle']},NULL,{$disj['jfee']},{$disj['jbuyprice']},{$disj['jsellprice']},{$disj['jaccess']},{$disj['jploss']},$oid)");
    //                     }
    //                     else{
    //                         //上级是平台

    //                     }


    //                 }
    //                 else if($otype==1)
    //                 {
    //                        //此id用户是代理
    //                     //$menber = $users->field('oid,rebate,feerebate,otype')->where('uid='.$ouid)->find();
    //                     $remenber = $db->ExecuteDQL("select oid,rebate,feerebate,otype from wp_userinfo where uid=$ouid ");
    //                     $menber = $remenber[0];
    //                     if($menber['oid']!=""){
    //                         $menber_rebate = $menber['rebate'];				//会员盈亏返点
    //                         $menber_feerebate = $menber['feerebate']; 		//会员手续费返点
    //                         $newykzj = abs($ykzj);
    //                         $menber_ploss = $newykzj*$menber_rebate/100;			//会员盈亏反金
    //                         $menber_feeploss = $fee*$menber_feerebate/100;		//会员手续费反金
    //                         //写入会员记录


    //                         $$jtime = date(time());								//操作时间
    //                         $disj['balance'] = $user[0]['balance']+$menber_ploss+$menber_feeploss;			//账户余额
    //                         $disj['jfee'] = $menber_feeploss;							//手续费反金
    //                         $disj['jploss'] = $menber_ploss;							//盈亏反金
    //                         $disj['jaccess'] = $menber_feeploss+$menber_ploss;			//出入金额
    //                         $disj['jusername'] = $menber['username'];					//用户名
    //                        /* $disj['oid'] = $oid;									//订单id
    //                         $disj['explain'] = '会员反金';									//操作标记*/
    //                         $disj['remarks'] = $porder[0]['ptitle'];						//产品名称
    //                         $disj['number'] = $order['onumber'];						//数量
    //                         $disj['jostyle'] =  $order['ostyle'];						//涨、跌
    //                         $disj['jbuyprice'] = $order['buyprice'];					//入仓价
    //                         $disj['jsellprice'] = $sellprice;								//平仓价
    //                         $db->ExecuteDML("insert into wp_journal values('$orderno',$ouid,'返点',$jtime,NULL,{$disj['number']},'{$disj['remarks']}',{$mdisj['balance']},NULL,'{$disj['jusername']}',{$disj['jostyle']},NULL,{$disj['jfee']},{$disj['jbuyprice']},{$disj['jsellprice']},{$disj['jaccess']},{$disj['jploss']},$oid)");
    //                     }
    //                 }
    //                 else if($otype==2){
    //                     //此id用户是会员

    //                 }
    //             }
    //             else{
    //                 //不是分销用户

    //             }



    //         }
    //        //添加平仓日志表
    //        //随机生成订单号

    //        $userac = $db->ExecuteDQL("select * from wp_accountinfo where uid={$order['uid']}");
    //        $user = $db->ExecuteDQL("select * from wp_userinfo where uid={$order['uid']}");
    //        $jtime = date(time());								//操作时间
    //        $journal['jincome'] = $bdyy;									//收支金额【要予以删除】
    //        $journal['number'] = $order['onumber'];						//数量
    //        $journal['remarks'] = $porder[0]['ptitle'];							//产品名称
    //        $journal['balance'] = $userac[0]['balance'];					//账户余额
    //        if ($bdyy>$jc){
    //            $journal['jstate']=1;										//盈利还是亏损
    //        }else{
    //            $journal['jstate']=0;
    //        }
    //        $journal['jusername'] = $user[0]['username'];								//用户名
    //        $journal['jostyle'] = $order['ostyle'];						//涨、跌
    //        $journal['juprice'] = $uprice;									//单价
    //        $journal['jfee'] = $fee;										//手续费
    //        $journal['jbuyprice'] = $order['buyprice'];					//入仓价
    //        $journal['jsellprice'] = $sellprice;								//平仓价
    //        $journal['jaccess'] = $bdyy;									//出入金额
    //        $journal['jploss'] = $ykzj;										//出入金额
    //        $journal['oid'] = $order['oid'];											//改订单流水的订单id

    //        //$myjournal->add($journal);
    //        $db->ExecuteDML("insert into wp_journal values('$orderno',{$order['uid']},'平仓',$jtime,{$journal['jincome']},{$journal['number']},'{$journal['remarks']}',{$journal['balance']},{$journal['jstate']},'{$journal['jusername']}',{$journal['jostyle']},{$journal['juprice']},{$journal['jfee']},{$journal['jbuyprice']},{$journal['jsellprice']},{$journal['jaccess']},{$journal['jploss']},{$journal['oid']})");
    //       // $order->where('oid='.$oid)->setField('commission',$journal['balance']);
    //        $db->ExecuteDML("update wp_order set  commission={$journal['balance']} where oid={$order['oid']}");
    //    }
    //    else{
    //        $msg="平仓失败，稍后平仓";
    //    }
         
    //     }
    // }

 
   sleep($interval);//等待时间，进行下一次操作。 
 // }while(true);


//随机生成订单编号
function build_order_no(){
    return date(time()).substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 3);
}
//折Y翼Y天Y使Y资Y源Y社Y区Y提Y供Y源Y码Y
function selectcid($cid){
    //连接接数据库
    $db = new DBHelper();
    $db->ConnectDB();
    $str = $db->ExecuteDQL("select * from wp_catproduct where cid=$cid");

    return  $str[0];
}




?>