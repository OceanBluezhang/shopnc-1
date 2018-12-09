<?php
/**
 * 银行列表模型
 *
 *
 *
 *
 * @copyright  Copyright (c) 2007-2016 shopec Inc. (http://www.shopec.net)
 * @license    http://www.shopec.net
 * @link       http://www.shopec.net
 * @since      File available since Release v1.1
 */
defined('Inshopec') or exit('Access Invalid!');
class merchant_bankModel extends Model{

    public function __construct(){
        parent::__construct('merchant_bank');
    }

    /**
     * 读取列表
     * @param array $condition
     *
     */
    public function getList($condition,$page='',$order='',$field='*'){
        $result = $this->table('merchant_bank')->field($field)->where($condition)->page($page)->order($order)->select();
        return $result;
    }
}
?>
