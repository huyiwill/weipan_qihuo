<?php
class  DBHelper{
    private $serverName;
    private $userName;
    private $userPwd;
    private $dbName;
    private $link;
    function __construct(){
        $this->serverName="127.0.0.1";
        $this->userName="root";
        $this->userPwd="tu-*BnGR";
        $this->dbName="ces";
    }

    function ConnectDB(){

        $this->link= mysql_connect($this->serverName,$this->userName,$this->userPwd)
        or die("数据库连接失败".mysql_error());

        mysql_select_db($this->dbName) or die("找不到指定数据库".mysql_error());
    }
    function ExecuteDML($sql){
        mysql_query("set names utf8");
        $res=mysql_query($sql);
        if($res){
            $affectedRows=mysql_affected_rows($this->link);
            if($affectedRows==1){

                return true;
            }
            else {
                return false;
            }
        }
        else{

            return false;
        }

    }

    function ExecuteDQL($sql){
        mysql_query("set names uft8");
        $res=mysql_query($sql);

        $array=array();
        if($res){
            $rows=mysql_num_rows($res);
            if($rows){
                while ($rows=mysql_fetch_array($res)) {
                $array[]=$rows;
                }
                
                return $array;

            }else{

                return false;
            }

        }else{

            return false;
        }

    }
}
?>