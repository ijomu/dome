<?php
/**
 * |********************************************************************
 * |
 * | Author: IJomu <ijomu@vip.qq.com>
 * | Copyright (c) 2015-2017, http://www.hzhihe.com. All Rights Reserved.
 * |
 * |********************************************************************
 * |
 * | web is very nice
 * | site www.hzhihe.com
 * | @package JS提示跳转
 * | @author IJomu <ijomu@vip.qq.com>
 * |
 * |********************************************************************
 * | @param  $tip  弹窗口提示信息(为空没有提示)
 * | @param  $type 设置类型 close = 关闭 ，back=返回 ，refresh=提示重载，jump=提示并跳转url
 * | @param  $url  跳转url
 * |********************************************************************
 */
function alert($tip = "", $type = "", $url = "") {
    $js = "<script>";
    if ($tip)
        $js .= "alert('" . $tip . "');";
    switch ($type) {
        case "close" : //关闭页面
            $js .= "window.close();";
            break;
        case "back" : //返回
            $js .= "history.back(-1);";
            break;
        case "refresh" : //刷新
            $js .= "parent.location.reload();";
            break;
        case "top" : //框架退出
            if ($url)
                $js .= "top.location.href='" . $url . "';";
            break;
        case "jump" : //跳转
            if ($url)
                $js .= "window.location.href='" . $url . "';";
            break;
        default :
            break;
    }
    $js .= "</script>";
    echo $js;
    if ($type) {
        exit();
    }
}