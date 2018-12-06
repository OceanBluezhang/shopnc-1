<?php defined('Inshopec') or exit('Access Invalid!');?>
<style type="text/css">
.d_inline {
	display: inline;
}
</style>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title"><a class="back" href="index.php?con=store&fun=store" title="返回<?php echo $lang['manage'];?>列表"><i class="fa fa-arrow-circle-o-left"></i></a>
      <div class="subject">
        <h3><?php echo $lang['nc_store_manage'];?> - 会员“<?php echo $output['joinin_detail']['member_name'];?>”开通支付平台业务</h3>
        <h5><?php echo $lang['nc_store_manage_subhead'];?></h5>
      </div>
    </div>
  </div>
  <!-- 操作说明 -->
  <div class="explanation" id="explanation">
    <div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
      <h4 title="<?php echo $lang['nc_prompts_title'];?>"><?php echo $lang['nc_prompts'];?></h4>
      <span id="explanationZoom" title="<?php echo $lang['nc_prompts_span'];?>"></span> </div>
    <ul>
      <li>商家提交的入驻信息，用于商户开通支付平台业务</li>
      <li>此页面数据不提供修改功能，请前往<font color="red">编辑店铺信息</font>页面修改</li>
    </ul>
  </div>
  <div class="homepage-focus">
    <div class="title">
        <ul class="tab-base nc-row">
        <li><a class="current" href=javascript:void(0);">开通支付平台业务</a></li>
        </ul>
    </div>
    <form id="joinin_form" enctype="application/x-www-form-urlencoded " method="post" action="index.php?con=store&fun=store_merchant_pay">
      <input type="hidden" name="form_submit" value="ok" />
      <input type="hidden" name="store_id" value="<?php echo $output['store_array']['store_id'];?>" />
      <table border="0" cellpadding="0" cellspacing="0" class="store-joinin">
        <thead>
          <tr>
            <th colspan="20">商户信息</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>商户id：</th>
            <td colspan="20"><input readonly="readonly" type="text" class="txt w300" name="merchant_id" value="<?php echo $output["store_array"]["store_merchantno"];?>"></td>
          </tr>
        </tbody>
      </table>
      <table border="0" cellpadding="0" cellspacing="0" class="store-joinin">
        <thead>
          <tr>
            <th colspan="20">结算信息</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>结算周期：</th>
            <td colspan="20">
              <select name="cycleValue" id="cycleValue">
              <option value="">请选择</option>
              <option value="1">T+1</option>
              <option value="2">D+0</option>
            </select>
            </td>
          </tr>
        </tbody>
      </table>
      <table border="0" cellpadding="0" cellspacing="0" class="store-joinin">
        <thead>
          <tr>
            <th colspan="20">费率列表</th>
          </tr>
        </thead>
        <tbody>
            <?php if(!empty($output['busi_list']) && is_array($output['busi_list'])){ ?>
            <?php foreach($output['busi_list'] as $k => $v){ ?>
            <tr>
              <th><?php echo $v['busi_name']?>：</th>
              <td colspan="20">
              </td>
            </tr>
            <?php } ?>
            <?php } ?>
        </tbody>
      </table>
      <div class="bot"><a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" id="submitBtn">提交</a></div>
    </form>
  </div>
</div>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/common_select.js" charset="utf-8"></script> 

<script type="text/javascript">
var SHOP_SITE_URL = '<?php echo SHOP_SITE_URL;?>';
$(function(){
    //按钮先执行验证再提交表单
    $("#submitBtn").click(function(){
        if($("#joinin_form").valid()){
            $("#joinin_form").submit();
        }
    });

    $('#joinin_form').validate({
        rules : {
             merchant_id: {
                 equalTo: '' 
              }
        },
        messages : {
            merchant_id: {
                equalTo: '<i class="fa fa-exclamation-circle"></i>商户未入驻，请先入驻'
            }
        }
    });
});
</script>
