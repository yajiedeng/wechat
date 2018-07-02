<?php
/**
 * Created by PhpStorm.
 * User: 邓超
 * Date: 2018/6/29
 * Time: 15:26
 */
namespace app\controllers;

use yii\web\Controller;
use Yii;

class HelloController extends Controller
{
    public function actionIndex()
    {

        // session
//        $session = Yii::$app->session;
//        // session 是否开启
//        if($session->isActive){
//            echo "session active";
//        }else{
//            // 开启session
//            $session->open();
//        }

        // 获取响应组件
//        $response = Yii::$app->response;
//        $response->headers->add('pragma','no-cache');
//        $response->headers->add('location','http://www.baidu.com');
//        $response->statusCode = 404;
//        $this->redirect('http://www.baidu.com',302);
//        $response->headers->add("content-disposition",'');
        // 文件下载
//        $response->sendFile('robots.txt');
//        // 获取请求参数值
        $request = Yii::$app->request;
//
//        // 判断请求类型
        if($request->isGet){
            // 获取 get 参数
            echo $request->get('id',20)."<br/>";
            echo "this is get method";
        }elseif ($request->isPost){
            // 获取 post 参数
            echo $request->post('id',15)."<br/>";
            echo "this is post method";
        }
//

//        echo "hello world";
    }
}