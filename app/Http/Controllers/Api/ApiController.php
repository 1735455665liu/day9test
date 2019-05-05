<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\p_wx_user;
use App\Model\api_user;
class ApiController extends Controller
{
    //接口查询数据
    public function apiuser(Request $request){
//        echo __METHOD__;
        $data=[];
        $uid=$request->input('uid');
//        $id=$_GET['uid'];


        $userInfo=[
            'nickname' =>'张三',
            'sex' =>1,
            'city' =>'邢台',
            'province' =>'河北',
        ];
        $data=[
          'error'=>0,
          'msg'=>'ok',
          'data'=>[
              'userInfo'=>$userInfo
          ]
        ];
            die(json_encode($data,true));
    }
    public function reg(Request $request){
//        echo '<pre>';print_r($_POST);echo'<pre>';die;
        $user=$request->input();//接收id
        $apiuser=api_user::insertGetId($user);
        $data=[];
            if($apiuser){
                $data=[
                  'error'=>0,
                  'msg'=>'ok',
                ];
            }else{
                $data=[
                    'error'=>1, //错误返回状态码
                    'msg'=>'ssssss',//返回的错误信息
                ];
            }
        die(json_encode($data,true));



    }



}
