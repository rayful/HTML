<?php

/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 下午10:15
 */

namespace test;

class Product
{
    /**
     * @var string
     * @input
     * @label 标题
     */
    public $title = "高跟平底鞋";

    /**
     * @var string
     * @input text
     * @label 货号
     * @tips 产品唯一编号
     */
    public $sn;

    /**
     * @var string
     * @input Radios
     * @label 性别
     * @data ['male'=>'男士','female'=>'女士']
     */
    public $gender = 'male';

    /**
     * @var string
     * @input select
     * @label 分类
     * @data test\Enum::$category
     */
    public $category = 'clothing';

    /**
     * @var string
     * @input textarea
     * @label 描述
     */
    public $description = '产品描述';

    /**
     * @var array
     * @input multiselect
     * @label 标签
     * @data ['预售产品','特价产品','独家折扣']
     */
    public $tags = [1];

    /**
     * @var array
     * @input checkbox
     * @label 自动上传
     * @data ['淘宝','京东','自营']
     */
    public $belongs = [0, 1];

    /**
     * @var bool
     * @input bool
     * @label 是否自动更新
     */
    public $is_auto;

    /**
     * @var array
     * @input MultiFile
     * @label 图片
     */
    public $images;

}