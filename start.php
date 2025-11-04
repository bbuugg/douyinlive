<?php
require_once __DIR__ . '/vendor/autoload.php';
use app\DouyinLive;

/**
 * 方式1 只填写room_id：room_id获取网页打开抖音，登录后随便进一个直播间，F12查看源码，在Ctrl+F5搜索roomid，搜索到第8个的时候就拿到了
 * 方式2 填写live_id跟cookie：live_id获取网页打开抖音，随便进一个直播间，url后面的那串数字；cookie获取网页打开抖音，登录后随便进一个直播间，F12查看源码，在刷新下，把请求网页请求头里面cookie值复制出来
 */
$room_id = "7568783948617173798";
$live_id = "";
$cookie  = "";

$fetcher = new DouyinLive($live_id, $room_id, $cookie);
$fetcher->start();