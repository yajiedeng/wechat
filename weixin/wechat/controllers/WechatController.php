<?php
/**
 * Created by PhpStorm.
 * User: 邓超
 * Date: 2018/7/3
 * Time: 15:08
 */
namespace app\weixin\wechat\controllers;

use app\weixin\wechat\controllers\WeixinController;
use Yii;

class WechatController extends WeixinController
{
    public function actionIndex()
    {
        echo "wechat index";
    }

    // 接受微信消息
    public function actionServe()
    {
        $request = Yii::$app->request;
        if($request->isGet){
            $response = $this->app->server->serve();
            $response->send();
        }elseif ($request->isPost){
            $messageObj = $this->app->server->getMessage();
            $keywords = $messageObj->Content;//接收关键字
            $message  = new MessageController();
            $content = "您刚才讲 ： ".$keywords;
            $message->actionResponseText();
        }
    }

    public function actionText()
    {
        echo "message text";
    }

}