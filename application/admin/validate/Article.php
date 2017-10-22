<?php

namespace app\admin\validate;
use think\Validate;

class Article extends Validate
{
    protected $rule = [
        "arc_title" => "require",
        "arc_author" =>"require",
        "arc_sort" => "require|between:1,9999",  //排序在1-9999
        "cate_id" => "notIn:0",   //分类不得为空
        "arc_thumb" => "require",
        "attachment_id" => "require",
        "arc_digest" => "require",
        "arc_content" => "require"
    ];

    protected $message = [
        "arc_title.require" => "请输入文章标题",
        "arc_author.require" => "请输入文章作者",
        "arc_sort.require" => "请输入文章排序",
        "arc_sort.between" => "文章排序需要在1-9999",
        "cate_id.notIn" => "请选择文章所属分类",
        "arc_thumb.require" => "请上传文章主图",
        "attachment_id.require" => "请上传正确的文章主图",
        "arc_digest.require" => "请输入文章摘要",
        "arc_content.require" => "请输入文章内容",
    ];
}
