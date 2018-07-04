<?php
/**
 * Created by PhpStorm.
 * User: 邓超
 * Date: 2018/7/3
 * Time: 15:08
 */
namespace app\weixin\wechat\controllers;

use app\weixin\wechat\controllers\WeixinController;
use app\weixin\wechat\controllers\MessageController;
use EasyWeChat\Kernel\Messages\Text;
use Yii;

class WechatController extends WeixinController
{
    public function actionIndex()
    {
        Yii::$app->runAction("wechat/message/test",['content'=>'content']);
//        if($request->isGet){
//            echo "wechat index";
//        }else{
//            echo "wechat index1";
//        }

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
            
//            $openId = $messageObj->FromUserName;
            $content = "您刚才讲 ： ".$keywords;

//            $message = new Text($content);

//            $this->app->customer_service->message($message)->to($openId)->send();
//            $response = $this->app->server->serve();
//            $response->send();

//            $message->text($content);
            Yii::$app->runAction("wechat/message/text",['content'=>'jiege']);

//            $message->actionResponseText($content);

        }
    }

    public function actionText()
    {
        echo "message text";
    }

}