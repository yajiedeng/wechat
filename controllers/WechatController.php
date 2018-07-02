<?php
/**
 * Created by PhpStorm.
 * User: 邓超
 * Date: 2018/6/29
 * Time: 16:46
 */
namespace app\controllers;

use EasyWeChat\Factory;
use yii\web\Controller;


class WechatController extends Controller
{
    public function actionServe()
    {
        $config = [
            'app_id' => 'wxe52d47b93aeae351',
            'secret' => '3d779bed0bc68ec450749709e9c4324d',
            'token' => 'mydadaotest',
            'aes_key' => 'qzoX56ojEkSzFR9yDlCLii14mAVKLSnHTW2ZwHwL3Sq',

            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'collection',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];
        $app = Factory::officialAccount($config);
        $response = $app->server->serve();
        $response->send();
    }
}