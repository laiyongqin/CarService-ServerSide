<?php if (!defined('THINK_PATH')) exit();?>


	<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>驾客－首页</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/Public/static/bootstrap/css/front-end.css" rel="stylesheet" type="text/css" />
        <link href="/Public/static/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/Public/static/bootstrap/css/pagination.css" rel="stylesheet" type="text/css" />
        <link href="/Public/static/bootstrap/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/Public/static/bootstrap/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
        <script src="/Public/static/jquery-2.0.3.min.js" type="text/javascript"></script>
		<script src="/Public/static/bootstrap/js/bootstrap.js" type="text/javascript"></script>
		<script src="/Public/static/bootstrap/js/jquery.paginatetable.js" type="text/javascript"></script>
		<script src="/Public/static/bootstrap/js/bootstrap-dialog.min.js" type="text/javascript"></script>
        <link rel="Shortcut icon" href="/Public/img/favicon.ico" >
<!-- 自定义css -->
        <link href="/Public/css/index.css" rel="stylesheet" type="text/css">
        <link href="/Public/static/bootstrap/css/chat.css" rel="stylesheet" type="text/css">
        <link href="/Public/static/bootstrap/css/lightbox.css" rel="stylesheet" type="text/css" />
        
       <link href="/Public/bootstrap-star-rating-master/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
		<script src="/Public/bootstrap-star-rating-master/js/star-rating.min.js" type="text/javascript"></script>
        <style>
.ycbb-service-items p {
	text-align: left;
	margin-left: 40%;
}

.h {
	font-weight: bolder;
}

.h-warning {
	color: #f87d22;
}

.h-lg {
	font-size: 25px;
}

.h-sm {
	font-size: 20px;
}

.h-xs {
	font-size: 16px;
}

table .input-border-dc {
	border: 1px solid #dcdcdc;
}

table input{
	text-align:center;
}
.table > thead > tr > th {
	padding:5px;
}
.table .input-style{
	border: 1px solid #ccc;
	border-radius: 4px;
	width: 30%;
	font-size:14px;	
	text-indent:0.5em;
}
.table .time-format{
	width:45px;
}
.table-bordered > tbody > tr > td{
	border-right:none;
	border-left:none;
}
input::-webkit-input-placeholder {
color: #D6D0CA !important; 
}
input:-moz-placeholder {
color: #D6D0CA !important; 
}
input::-moz-placeholder {
color: #D6D0CA !important; 
}
input:-ms-input-placeholder {
color: #D6D0CA !important; 
}
.margin-auto {
	margin-left: 50px;
}

.border-bot {
	padding: 5px;
	border-bottom: 1px solid #ccc;
}

.rating-xs {
	font-size: 16px;
}

.rating-disabled {
	cursor: default;
}
.control-label{
	font-size:16px;
}

</style>
        
        
    </head>
    
<body>
<div class="col-md-12" style="height:30px; background-color:#ddd; z-index:99;margin-bottom:0px; margin-top:0px;">
	    	<ul class="top-nav pull-right">
	    		<li>欢迎 ，<a href="/Plateform/userCenter"><span class="badge badge-default" id="username_id" data="<?php echo ($cookie['jid']); ?>"><?php echo ($cookie['name']); ?></span></a></li>
		    	<li><a href="javascript:;"><i class="fa fa-envelope"></i> 消息 <span id="push-count" class="label label-default">0</span> </a></li>
		    	<li><a href="/Plateform/userCenter"><i class="fa fa-gear"></i> 帐号管理 </a></li>
		    	<li><a href="javascript:;" id="loginOut"> 退出 </a></li>
	    	</ul>
</div>
 <div class="col-md-12" style="height:80px; z-index:99; margin-bottom:0px; background-color:#fff;">
 	<div style="margin-top:20px; margin-left:50px;" >
  	<a href="/"  class="pull-left"><img src="/Public/img/logo.png"></a>
  	<div class="pull-left" style="font-size:19px;">|&nbsp;&nbsp;商户后台管理</div>
  	</div>
 </div>
 <nav class="navbar navbar-default" role="navigation" style="background-color:#f87d22;">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
	      data-target="#bs-example-navbar-collapse-1">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="border-bottom:0px;">
	      <ul class="nav navbar-nav navbar-left nav-p">
	      	
	      	<li>

<!-- 
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="margin-top:10px;">
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="/Plateform/unbid">未报价</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="/plateform/bid">已报价</a></li>
			    
			  </ul>
			</div>
			 -->
			 <a href="/Plateform/unbid">我要抢单 </a>
			</li>
			<li><a class="order-history" href="/Plateform/orderIncomplete"> 我的订单 </a><label id='order-num' class='label label-danger' style="display:none"></label></li>
	      	<li><a href="/Plateform/project"> 我的项目 </a></li>
	      	<li><a href="/Plateform/userCenter"> 管理中心 </a></li>
	      	<li style="margin-left:650px;"><img src="/Public/img/index_03.png"
						style="margin-left: 35px; margin-top: -5px;z-index:99; position:absolute;" /> <a href="/Answer"
						style="padding-top: 10px;">问答</a></li>
	      </ul>

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	  <audio id="message-alert" hidden="true">
	  	<source src="/Public/static/bootstrap/audio/alert.wav" type="audio/wav">
	  </audio>

</nav>
 <script>
 	$(document).ready(function(){
 		$('#loginOut').click(function(){
 			$.ajax({
 				type: 'POST',
 				url:'/Acount/loginOut',
 				data:'',
 				success:function(json){
 					if(json.code==0){
 						alert(json.msg);
 						location.href = "/";
 						$.session.clear();
 					}else{
 						alert('登出失败');
 					}
 				},
 		 	  dataType: 'json'
 			});
 		})
 	})
 </script>
	<div class="container">
		<div class="col-md-12" style="text-align: center; margin-top: 10px;">
			<div class="panel panel-default">
				<div class="panel-header" style="border-bottom: 1px solid #eee;">
					<h3 class="h" style="color: #f87d22; margin-bottom: 15px;">
						订单详情
						<?php if($data['status'] == 1 ): ?><span
							class="label label-success">完成</span> 
							<?php elseif($data['status'] == 2 ): ?>
							<span
							class="label label-success">用户违约</span> 
							<?php elseif($data['status'] == 3): ?> <span
							class="label label-warning">用户取消</span>
							<?php elseif($data['status'] == 0): ?> <span
							class="label label-warning">未完成</span><?php endif; ?>
					</h3>
				</div>
				
				<div class="panel-body">
					<div class="col-md-12" style="text-align: left;">
						<div class="col-md-3">
							<span class="" style="margin-top: 20px; padding: 21px 5px;">
								<img
								src="<?php echo ((isset($data['header']) && ($data['header'] !== ""))?($data['header']):'/Public/img/default_user.jpg'); ?>"
								class="img-responsive  img-circle" width="200"  height="200"/> <!-- <button class="btn btn-info">删除 <i class="fa fa-remove fa-la"></i></button> -->
							</span>
						</div>
						<div class="col-md-9">
							<div class="col-md-12">
								<h4>昵称：<?php echo ($data['nick_name']); ?></h4>
							</div>
							<div class="col-md-12">
								<p>车主留言： <?php echo ($data['description']); ?></p>
							</div>
							<?php if(is_array($data["pics"])): $i = 0; $__LIST__ = $data["pics"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3">
								<span class="thumbnail"> <img src="<?php echo ($vo["hb"]); ?>" /> <!-- <button class="btn btn-info">删除 <i class="fa fa-remove fa-la"></i></button> -->
								</span>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<div class="col-md-12" style="padding-bottom: 20px;">
								<label class="label label-default">
									车型：<?php echo ($data['cart_model']); ?> </label>
							</div>
							<div class="col-md-12" style="padding-bottom: 20px;">
								<label class="label label-default"> 到店时间：
									<?php echo ($data['reach_time']); ?> </label>
							</div>
							<div class="col-md-12" style="padding-bottom: 20px;">
								<label class="label label-default"> 距离：
									<?php echo ($data['distance']); ?> 公里</label>
							</div>
							<div class="col-md-12" style="padding-bottom: 20px;">
								<label class="label label-default"> 订单号：
									<?php echo ($data['order_no']); ?> </label>
									<input type="hidden" value="<?php echo ($data['order_no']); ?>" name="order_no"/>
							</div>
						</div>
					</div>
					<div class="col-md-12"
						style="border-top: 1px solid #eee; padding-top: 25px;">
						<!-- Table -->
						<div class="col-md-9 " style="margin-left: 12.5%">
							
								<table class="table table-bordered text-center" id="project-table">
									<thead>
										<tr>
											<th>项目</th>
											<th>价格</th>
											<th>时长</th>
										</tr>
									</thead>
									<tbody>

										<?php if(is_array($data["list"])): $i = 0; $__LIST__ = $data["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
											<td><?php echo ($vo['name']); ?> 
											</td>
											<td> <input type="number"
													name="prices[]" value="<?php echo ($vo["price"]); ?>"  class="input-style " disabled="disabled"
													placeholder="填写价格" />元 </td>
											<td style="border-right:1px solid #dddddd;">
													
													 <input
													type="number" name="day[]" value="<?php echo ($vo["day"]); ?>" disabled="disabled" class="time-format input-style"
													 /> 天
													  <input
													type="number" name="hour[]" value="<?php echo ($vo["hour"]); ?>"  disabled="disabled"class="time-format input-style"
													 /> 时
													  <input
													type="number" name="min[]" value="<?php echo ($vo["min"]); ?>"  disabled="disabled" class="time-format input-style"
													 /> 分
												
											</td>


										</tr><?php endforeach; endif; else: echo "" ;endif; ?>
										<tr>
											<td colspan="4">
												<div class="form-group">
													<h4 class="h h-sm"
														style="text-align:left;">商家备注</h4>
													<textarea class="form-control" 
														style="width: 100%; height: 200px; resize: none; color: black; border: 1px solid #dcdcdc;"
														placeholder="暂无备注" name="merchant_remark" disabled="disabled"><?php echo ($data['merchant_remark']); ?></textarea>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							<?php if($data["member_comment"] == 1 ): ?><div class="col-md-12 text-left" >
									<div class="col-md-12">
									<h5 ><strong>用户留言</strong></h5>
									</div>
								<div class="col-md-2">
									
										<img
										src="<?php echo ((isset($data['member_comment_info']['header']) && ($data['member_comment_info']['header'] !== ""))?($data['member_comment_info']['header']):'/Public/img/default_user.jpg'); ?>"
										class="img-responsive  img-circle" width="80" height="80"/>
								</div>
								<div class="col-md-9">
									<div class="col-md-12">
										<h6>昵称：<?php echo ($data['member_comment_info']['nick_name']); ?></h6>
									</div>
									<div class="col-md-12">
										<p style="font-size:16px;">车主留言： <?php echo ($data['member_comment_info']['desc']); ?></p>
									</div>
									<div class="col-md-12">
									 <div class="form-group">
									    <label class="col-xs-4 col-sm-3 control-label">服务态度：</label>
									    <div class="col-xs-12 col-sm-8">
									     <input id="input-id1" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs"  
										 value="<?php echo ($data['member_comment_info']['service_attitude']); ?>">
									  </div>
									</div>
									</div>
									<div class="col-md-12">
										 <div class="form-group">
									    <label class="col-xs-4 col-sm-3 control-label"> 服务质量：</label>
									    <div class="col-xs-12 col-sm-8">
									     <input id="input-id1" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs"  
										 value="<?php echo ($data['member_comment_info']['service_quality']); ?>">
									  </div>
									  </div>
									  
									</div>
									<div class="col-md-12">
										 <div class="form-group">
									    <label class="col-xs-4 col-sm-3 control-label">休闲环境：</label>
									    <div class="col-xs-12 col-sm-8">
									     <input id="input-id1" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs"  
										 value="<?php echo ($data['member_comment_info']['merchant_setting']); ?>">
									  </div>
									</div>
									</div>
									
								</div>
								</div><?php endif; ?>	
									<?php if($data["merchant_comment"] == 1 ): ?><div class="col-md-12 text-left" >
									<div class="col-md-12">
									<h5 ><strong>商户留言</strong></h5>
									</div>
								<div class="col-md-2">
									
										<img
										src="<?php echo ((isset($data['merchant_comment_info']['header']) && ($data['merchant_comment_info']['header'] !== ""))?($data['merchant_comment_info']['header']):'/Public/img/default_user.jpg'); ?>"
										class="img-responsive  img-circle" width="80" height="80"/>
								</div>
								<div class="col-md-9">
									<div class="col-md-12">
										<h6>昵称：<?php echo ($data['merchant_comment_info']['nick_name']); ?></h6>
									</div>
									<div class="col-md-12">
										<p style="font-size:16px;">我回复： <?php echo ($data['merchant_comment_info']['desc']); ?></p>
									</div>
						
									
								</div>
								</div><?php endif; ?>
							
							
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-md-5">
							<h5>
								总价<span class="total_price"><?php echo ($data['total_price']); ?></span>元 总时间<span
									class="total_time"><?php echo ($data['total_time']); ?></span>
							</h5>
						</div>
						<div class="col-md-3">
						</div>
					
						<div class=" col-md-4">
							<div class="col-md-4">
							<?php if($data["status"] == 1 and $data["merchant_comment"] == 0): ?><!-- Button trigger modal -->
								<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">
								  评论
								</button><?php endif; ?>
							</div>
							<div class="col-md-4">
							<?php if($data["status"] == 1): ?><button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal1">
								用户违约
								</button>
								<!-- 订单完成 可以违约 --><?php endif; ?>
							</div>
							<div class="col-md-4">
								<a class="btn btn-info" href="javascript:window.history.go(-1);">取消</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">评论</h4>
      </div>
      <div class="modal-body">
      <textarea class="form-control" rows="4" id="comText" placeholder="填写评论内容"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-info" id ="submitcomment">确认</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">确认用户违约</h4>
      </div>
      <div class="modal-body">
      <textarea class="form-control" rows="4" id="comTextfail" placeholder="填写违约原因" ></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-info" id ="submitorderfail">确认</button>
      </div>
    </div>
  </div>
</div>

	<!-- footer -->
	<section class='chat-container'>
        	<header class='top-header'>
              <div class='left-nav-btn left'>
                <span class='top-header-tit glyphicon glyphicon-user'></span>
                <span class="current-chat-user" data="<?php echo ($sessionJID); ?>"></span>
                <span class='msg-count-icon badge badge-danger'>新消息</span>
              </div>
              <div class='right-nav-btn right'>
                <span id='chat-box-minimize'>显示</span>
              </div>
			 </header>
			<div class="contact-list-container" style="display:none">
	        	<div class="setting">
		            <div class='col-md-2 center'>
		              <span class='glyphicon glyphicon-user'></span> 
		            </div>
		            <div class='col-md-8 center'>
					  	<input type="text" class="contact-textfield" placeholder="电话号码"/>
		            </div>
		            <div class="col-md-2 center">
			            <span class='add-user-btn glyphicon glyphicon-search'></span> 
		            </div>
				</div>
	        <div class="contact-list">
		        <ol class='contact-box'>
		            <li class='push-contact'></li>
		          </ol>
	        </div>
        </div>
        <div class="chat-minimize-container" style="display:none">
          <div class="setting">
          </div>
          <ol class='chat-box'>
            <li class='push-msg'></li>
          </ol>
          <div class="emojicon">
	          <div class='emoji-box'></div>
	          <div class='arrow-down'></div>
          </div>
          <div class="tools">
	          <button class="choose-image-click btn btn-default btn-sm">
	          	<form class="post-img-form" enctype="multipart/form-data">
	          		<input id="selectedfile" class="select-image" type="file" name="selectedfile" multiple/>
	          		<input class="sid" type="hidden" value="<?php echo ($mer_session_id); ?>"/>
	          	</form>
	          	<i class="glyphicon glyphicon-picture"></i>
	          </button>
	          <div class="emoji-click">
	          	<img src="http://121.40.92.53/ycbb/Uploads/Emoji/1.png"/>
	          </div>
          </div>
          <div class="send-message-box">
              <textarea id="mytTextField" name="send_message" class="col-md-12" row="5"></textarea>
          </div>
        </div>
        </section>
        <div class="enlarge-img"></div>
<!-- footer -->
<div class="footer">
	
	<div class="col-md-12" style="text-align:center; font-size:15px; background-color:rgb(254,247,250); color:rgb(153,153,153); padding-top:50px; padding-bottom:5px;">
	<div class="bottom_logo"><img src="/Public/index/img/bottom_logo.png" alt="bottom logo" width="105" height="49"></div>
	<p class="copy-right">&copy; 2014 Caryu
版权所有：厦门日厚网络科技有限公司
客服电话：0592-5021243 传真：0592-5021243 </p>
	<div class="menu_bottom">

<a href="javascript:;">Support</a> <div class="sep">|</div>
<a href="/AboutUs" target="_blank">About Us</a> <div class="sep">|</div>
<a href="/ContactUs" target="_blank">Contact Us</a> <div class="sep">|</div>
<a href="/Services" target="_blank">Services</a> <div class="sep">|</div>
<a href="javascript:;">闽ICP备14019281号-1</a>


</div>
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254510099'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1254510099' type='text/javascript'%3E%3C/script%3E"));</script>
	</div>
</div>

<!-- footer end-->
	<script type="text/javascript" src="/Public/static/bootstrap/js/jquery.base64.js"></script>
        <script type="text/javascript" src="/Public/static/bootstrap/js/strophe.js"></script>
<!--         <script type="text/javascript" src="/Public/static/bootstrap/js/strophe.register.js"></script> -->
		<script type="text/javascript" src="/Public/static/bootstrap/js/strophe.rsm.js"></script>
		<script type="text/javascript" src="/Public/static/bootstrap/js/iso8601_support.js"></script>
        <script type="text/javascript" src="/Public/static/bootstrap/js/strophe.archive.js"></script>
        <script type="text/javascript" src="/Public/static/bootstrap/js/jquery.cookie.js"></script>
        <script src="/Public/static/bootstrap/js/jquery.session.js"></script>
        <script type="text/javascript" src="/Public/static/bootstrap/js/lightbox.js"></script>
        <script type="text/javascript" src="/Public/static/bootstrap/js/WebSQL.js"></script>
        <script type="text/javascript" src="/Public/static/bootstrap/js/chat.js"></script>
        <script src="/Public/uploadify3.2/jquery.uploadify.js" type="text/javascript"></script>
	<script src="/Public/static/bootstrap/js/script.js"></script>



	<!-- footer end-->
	<script>
		$().ready(function() {
			//初始化rating
			$(".rating").rating('refresh',{ showClear: false, showCaption: false,readonly:true});
			$("input[name='prices[]']").blur(function() {
				var price = 0 * 1;
				$("input[name='prices[]']").each(function() {
					var value = $(this).val();
					if (value == '' || value == undefined) {
						$(this).val('');
					} else if (!isNaN(value) && value >= 0) {
						price += value * 1;
					} else {
						alert('价格必须是数字且大于等于0');
						$(this).focus();
						return false;
					}
				});
				$('.total_price').html(price);

			});
			$("#submitcomment").click(function(){
				var order_no = $("input[name=order_no]").val();
				var content = $("textarea[id=comText]").val();
				//console.log(order_no);
				//console.log(content);
				$.ajax({
				    type: 'POST',
				    url: '/Plateform/merComment',
				    data: {'order_no':order_no,'content':content} ,
				    success: function(json){
				    	if(json['code'] == 0){
				    		//location.href = "/Plateform/unbid";
				    		window.location.reload();
				    		//$('#login_btn').attr('data-content','登录成功，跳转页面正在开发').popover('show');;
				    	}else{
				    		
				    		alert(json.msg);
				    		
				    	}
				    } ,
				    dataType: 'json'
				});
				
				
			});
			$("#submitorderfail").click(function(){
				
				var order_no = $("input[name=order_no]").val();
				var content = $("textarea[id=comTextfail]").val();
				//console.log(order_no);
				//console.log(content);
				$.ajax({
				    type: 'POST',
				    url: '/Plateform/confirmfail',
				    data: {'order_no':order_no,'content':content} ,
				    success: function(json){
				    	if(json['code'] == 0){
				    		//location.href = "/Plateform/unbid";
				    		window.location.reload();
				    		//$('#login_btn').attr('data-content','登录成功，跳转页面正在开发').popover('show');;
				    	}else{
				    		
				    		alert(json.msg);
				    		
				    	}
				    } ,
				    dataType: 'json'
				});
			})
			
		})
	</script>
</body>
</html>