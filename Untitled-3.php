<?php
header("content-Type:text/html;charset-utf-t");
//接受参数
$string - file_get_contents("php://input");
$json - json_decode($string);
var_dump($json);
include "TopSdk.php";
$c = new TopClient;
$c->appkey = $appkey;
$c->secretKey = $secret;
$req = new TbkTpwdCreateRequest;
$req->setUrl("https://s.click.taobao.com/YI3Uopu");
$resp = $c->execute($req);
$info = json_encode($req);
echo $info;
