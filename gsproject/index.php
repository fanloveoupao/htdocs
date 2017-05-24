<?php
define("IN_TG", true);
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once "include/title.inc.php"
?>

<head>
    <meta charset="UTF-8">
    <title>广师师兄师姐</title>
</head>
<body>
<?php
require "include/header.php";
?>
<div id="list">
    <h2>帖子列表</h2>
    <a href="post.php" class="post">发表帖子</a>
    <ul class="article">
        <li class="icon1"><em>阅读数(<strong>8</strong>) 评论数(<strong>0</strong>)</em> <a href="article.php?id=339">测试</a>
        </li>
        <li class="icon1"><em>阅读数(<strong>78</strong>) 评论数(<strong>1</strong>)</em> <a
                    href="article.php?id=337">帖子里有BUG</a></li>
        <li class="icon1"><em>阅读数(<strong>56</strong>) 评论数(<strong>3</strong>)</em> <a href="article.php?id=333">评论功能怎么实现</a>
        </li>
        <li class="icon1"><em>阅读数(<strong>50</strong>) 评论数(<strong>6</strong>)</em> <a
                    href="article.php?id=327">11111</a></li>
        <li class="icon13"><em>阅读数(<strong>42</strong>) 评论数(<strong>0</strong>)</em> <a
                    href="article.php?id=326">啊实打实方法</a></li>
        <li class="icon1"><em>阅读数(<strong>20</strong>) 评论数(<strong>0</strong>)</em> <a
                    href="article.php?id=325">1111111</a></li>
        <li class="icon1"><em>阅读数(<strong>30</strong>) 评论数(<strong>1</strong>)</em> <a
                    href="article.php?id=323">失去自由的鸟</a></li>
        <li class="icon10"><em>阅读数(<strong>63</strong>) 评论数(<strong>0</strong>)</em> <a href="article.php?id=322">jkhjkhjkhjkhjk</a>
        </li>
        <li class="icon3"><em>阅读数(<strong>32</strong>) 评论数(<strong>1</strong>)</em> <a
                    href="article.php?id=320">4231</a></li>
        <li class="icon10"><em>阅读数(<strong>60</strong>) 评论数(<strong>0</strong>)</em> <a href="article.php?id=319">dsfdfdsfdsfdsf</a>
        </li>
    </ul>

    <div id="page_text">
        <ul>
            <li>1/13页 |</li>
            <li>共有<strong>122</strong>条数据 |</li>
            <li>首页 |</li>
            <li>上一页 |</li>
            <li><a href="index.php?page=2">下一页</a> |</li>
            <li><a href="index.php?page=13">尾页</a></li>
        </ul>
    </div>
</div>
<div id="user">
    <h2>新进会员</h2>
    <dl>
        <dd class="user">beck(男)</dd>
        <dt><img src="images/m06.gif" alt="beck"></dt>
        <dd class="message"><a href="javascript:;" name="message" title="331">发消息</a></dd>
        <dd class="friend"><a href="javascript:;" name="friend" title="331">加为好友</a></dd>
        <dd class="guest">写留言</dd>
        <dd class="flower"><a href="javascript:;" name="flower" title="331">给他送花</a></dd>
        <dd class="email">邮件：<a href="mailto:791183580@qq.com">791183580@qq.com</a></dd>
        <dd class="url">网址：<a href="http://www.baidu.com" target="_blank">http://www.baidu.com</a></dd>
    </dl>
</div>
<div id="pics">
    <h2>最新图片 -- ceshi</h2>
    <a href="photo_detail.php?id=77"></a>
</div>
<?php
require_once "include/foot.php"
?>
</body>
</html>