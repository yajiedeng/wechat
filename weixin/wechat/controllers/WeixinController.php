<?php
/**
 * Created by PhpStorm.
 * User: 邓超
 * Date: 2018/7/3
 * Time: 15:09
 */

namespace app\weixin\wechat\controllers;

use EasyWeChat\Factory;
use yii\base\Controller;

class WeixinController extends Controller
{
    public $app;
    public function init()
    {
        // 公众号配置信息
        $config = [
            'app_id' => 'wxe52d47b93aeae351',
            'secret' => '3d779bed0bc68ec450749709e9c4324d',
            'token' => 'mydadaotest',
            'aes_key' => 'qzoX56ojEkSzFR9yDlCLii14mAVKLSnHTW2ZwHwL3Sq',

            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'collection',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/../runtime/logs/wechat.log',
            ],
        ];
        $this->app = Factory::officialAccount($config);
    }
}