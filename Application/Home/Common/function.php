<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/12
 * Time: 9:05
 */


function checkorderstatus($ordid){
    $Ord=M('Balance');
    $isverified=$Ord->where('balanceno='.$ordid)->getField('isverified');
    if($isverified==1){
        return true;
    }else{
        return false;
    }
}


function orderhandle($parameter){
    $ordid=$parameter['order_no'];
    $data['isverified']  =1;
    $Ord=M('Balance');
    $uid = $Ord->where('balanceno='.$ordid)->getField('uid');
    //充值金额
    $data['bpprice']  = $parameter['order_amount'];

    $balance = D('Accountinfo')->where("uid=".$uid)->getField('balance');
    $balance = $balance + $parameter['order_amount'];
    $da['balance'] = $balance;
    //更新总账户
    D('Accountinfo')->where("uid=".$uid)->save($da);
    //更新充值金额及状态
    $Ord->where('balanceno='.$ordid)->save($data);
}