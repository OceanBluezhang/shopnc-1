<?php defined('Inshopec') or exit('Access Invalid!');?>



<link rel="stylesheet" type="text/css" href="<?php echo MOBILE_TEMPLATES_URL;?>/css/nctouch_products_list.css">

</head>

<body>

<header id="header" class="fixed">

  <div class="header-wrap">

    <div class="header-l"><a href="javascript:history.go(-1)"><i class="back"></i></a></div>

    <div class="header-title">

      <h1>浏览记录</h1>

    </div>

    <div class="header-r">

		<a id="clearbtn" href="javascript:void(0);" class="text">清空</a>

	</div>

  </div>

</header>

<div class="nctouch-main-layout">

  <div id="viewlist" class="list"> </div>

</div>

<div class="fix-block-r">

	<a href="javascript:void(0);" class="gotop-btn gotop hide" id="goTopBtn"><i></i></a>

</div>

<script type="text/html" id="viewlist_data">

<% if (goodsbrowse_list.length > 0) {%>

	<ul class="goods-secrch-list">

	<% for (var i=0; i<goodsbrowse_list.length; i++) {%>

	<li class="goods-item">

		<span class="goods-pic">

			<a href="<%=ApiUrl%>/index.php?con=goods&fun=detail&goods_id=<%=goodsbrowse_list[i].goods_id%>">

				<img src="<%=goodsbrowse_list[i].goods_image_url%>"/>

			</a>

		</span>

		<dl class="goods-info">

			<dt class="goods-name">

				<a href="<%=ApiUrl%>/index.php?con=goods&fun=detail&goods_id=<%=goodsbrowse_list[i].goods_id%>">

					<h4><%=goodsbrowse_list[i].goods_name%></h4>

					<h6></h6>

				</a>

			</dt>

			<dd class="goods-sale">

				<a href="<%=ApiUrl%>/index.php?con=goods&fun=detail&goods_id=<%=goodsbrowse_list[i].goods_id%>">

					<span class="goods-price">￥<em><%=goodsbrowse_list[i].goods_promotion_price%></em></span>

				</a>

			</dd>

		</dl>

</li>

<% } %>

<li class="loading"><div class="spinner"><i></i></div>浏览记录读取中...</li>

</ul>

<% } else {%>

	<div class="nctouch-norecord views">

		<div class="norecord-ico"><i></i></div>

		<dl>

			<dt>暂无您的浏览记录</dt>

			<dd>可以去看看哪些想要买的</dd>

		</dl>

		<a href="<%=ApiUrl%>" class="btn">随便逛逛</a>

	</div>

<% } %>

</script> 

<script type="text/javascript" src="<?php echo MOBILE_TEMPLATES_URL;?>/js/zepto.min.js"></script> 

<script type="text/javascript" src="<?php echo MOBILE_TEMPLATES_URL;?>/js/template.js"></script> 

<script type="text/javascript" src="<?php echo MOBILE_TEMPLATES_URL;?>/js/common.js"></script>

<script type="text/javascript" src="<?php echo MOBILE_TEMPLATES_URL;?>/js/list/view_list.js"></script> 

<script type="text/javascript" src="<?php echo MOBILE_TEMPLATES_URL;?>/js/ncscroll-load.js"></script>

