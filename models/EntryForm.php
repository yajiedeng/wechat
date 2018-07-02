<?php
/**
 * Created by PhpStorm.
 * User: 邓超
 * Date: 2018/6/27
 * Time: 10:34
 */
namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $age;
    public $email;
    public function rules()
    {
        return [
            [
                ['name', 'email', 'age'], 'required'],
                ['age', 'number'],
                ['email', 'email'],
        ];
    }
}