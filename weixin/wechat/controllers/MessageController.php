<?php
/**
 * Created by PhpStorm.
 * User: 邓超
 * Date: 2018/7/3
 * Time: 15:32
 */

namespace app\weixin\wechat\controllers;

use EasyWeChat\Kernel\Messages\Image;
use EasyWeChat\Kernel\Messages\Text;
use Yii;

class MessageController extends WeixinController
{
    public function actionIndex()
    {
        return "fdsklfjlkdsaf";
    }
    // 回复文本消息
    public function actionText($content = 'hello',$openId = '')
    {
//        $request = Yii::$app->request;
//        $content = $request->get('content','hello');
//        $openId = $request->get('openId','');
        if(empty($openId)){
            $messageObj = $this->app->server->getMessage();
            $openId = $messageObj->FromUserName;
        }
        $message = new Text($content);
        $this->app->customer_service->message($message)->to($openId)->send();
        $response = $this->app->server->serve();
        $response->send();
    }

    // 回复图片消息
    public function actionResponseImage($media,$openId = '')
    {
        if(empty($openId)){
            $messageObj = $this->app->server->getMessage();
            $openId = $messageObj->FromUserName;
        }
        $message = new Image($media);
        $this->actionResponse($message,$openId);
    }

    // 发送消息
    public function actionResponse($message,$openId)
    {
        $this->app->customer_service->message($message)->to($openId)->send();
        $response = $this->app->server->serve();
        $response->send();
    }

    public function actionTest($content = 'hello')
    {
        echo 'message test '.$content;
    }
}