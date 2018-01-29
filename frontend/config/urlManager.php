<?php
/**
 * Created by PhpStorm.
 * User: dmitriy
 * Date: 29.01.18
 * Time: 11:17
 * @var array $params
 */

return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        '<_a:about|contact|signup|login|logout>' => 'site/<_a>',
        '<_c:[\w\-]+>' => '<_c>/index',
        '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
        '<_c:[\w\-]+>/<_a:[\w-]+>' => '<_c>/<_a>',
        '<_c:[\w\-]+>/<_id:\d+>/<_a:[\w\-]+' => '<_c>/<_a>',
    ],
];