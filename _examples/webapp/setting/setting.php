<?php
require_once dirname(__FILE__) . '../../../Mobile_Detect.php';
$arr = array(
    'adddesktop' => array(
        "name" => 'Add2desktop',
        "description" => '添加到桌面',
        "group" => 'Components',
        "icon" => 'adddesktop.png',
        "href" => 'add2desktop/add2desktop.html',
    ),
    'appframe' => array(
        "name" => 'Appframe',
        "description" => 'webapp框架',
        "group" => 'Components',
        "icon" => 'slider.png',
        "href" => 'appframe/appframe.html',
    ),
    'button' => array(
        "name" => 'Button',
        "description" => '按钮',
        "group" => 'Components',
        "icon" => 'button.png',
        "href" => 'button/button.html',
    ),
    'dialog' => array(
        "name" => 'Dialog',
        "description" => '弹出框',
        "group" => 'Components',
        "icon" => 'dialog.png',
        "href" => 'dialog/dialog.html',
    ),
    'dropmenu' => array(
        "name" => 'Dropmenu',
        "description" => '下拉菜单',
        "group" => 'Components',
        "icon" => 'dropmenu.png',
        "href" => 'dropmenu/dropmenu.html',
    ),
    'gotop' => array(
        "name" => 'Gotop',
        "description" => '',
        "group" => 'Components',
        "icon" => 'gotop.png',
        "href" => 'gotop/gotop.html',
    ),
    'imglazyload' => array(
        "name" => 'Image lazy load',
        "description" => '图片懒加载',
        "group" => 'Components',
        "icon" => 'imglazyload.png',
        "href" => 'imglazyload/imglazyload.html',
    ),
    'more' => array(
        "name" => 'More',
        "description" => '更多',
        "group" => 'Components',
        "icon" => 'more.png',
        "href" => 'more/more.html',
    ),
    'navigator' => array(
        "name" => 'Navigator',
        "description" => '导航栏',
        "group" => 'Components',
        "icon" => 'navigator.png',
        "href" => 'navigator/navigator.html',
    ),
    'pageswipe' => array(
        "name" => 'Page swipe',
        "description" => '页面切换',
        "group" => 'Components',
        "icon" => 'slider.png',
        "href" => 'pageswipe/pageswipe.html',
    ),
    'refresh' => array(
        "name" => 'Refresh',
        "description" => '加在更多',
        "group" => 'Components',
        "icon" => 'refresh.png',
        "href" => 'refresh/refresh.html',
    ),
    'slider' => array(
        "name" => 'Slider',
        "description" => '旋转木马',
        "group" => 'Components',
        "icon" => 'slider.png',
        "href" => 'slider/slider.html',
    ),
    'suggestion' => array(
        "name" => 'Suggestion',
        "description" => '',
        "group" => 'Components',
        "icon" => 'suggestion.png',
        "href" => 'suggestion/suggestion_setup.html',
    ),
    'tabs' => array(
        "name" => 'Tabs',
        "description" => '选项卡',
        "group" => 'Components',
        "icon" => 'tabs.png',
        "href" => 'tabs/tabs.html',
    ),
    'toolbar' => array(
        "name" => 'Toolbar',
        "description" => '',
        "group" => 'Components',
        "icon" => 'toolbar.png',
        "href" => 'toolbar/toolbar.html',
    ),
);

$detect = new Mobile_Detect();

if(!$detect->isiOS()){
    unset($arr['adddesktop']);
}

return $arr;