<!DOCTYPE html>
<html>
	<head>
		<meta charset="GB2312">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>我为 四川十四五 发展献一策</title>
		<link rel="stylesheet" type="text/css" href="/static/onefourfive/index.css"/>
		<link rel="stylesheet" type="text/css" href="/static/onefourfive/index_phone.css"/>
	</head>
	<body>
		<!--顶部-->
		<div class="m_top01 mtop01 ">
			<div class="m_top01_left">
				<img src="/static/onefourfive/newssc.png" alt="" />
				<a href="http://www.newssc.org"  target="_blank">四川新闻网首页</a><span></span>
				<a href="http://scnews.newssc.org" target="_blank">四川</a><span></span>
				<a href="http://world.newssc.org" target="_blank">国际</a><span></span>
				<a href="http://china.newssc.org" target="_blank">国内</a>
			</div>
			<div class="m_top01_right">
				<img src="/static/onefourfive/i_share_sinawb.png" alt="" />
				<a href="https://weibo.com/newssc" target="_blank">加关注</a>
				<img src="/static/onefourfive/QQ.png" alt="" />
				<a>2226834809</a>
			</div>
		</div>
		<!--顶部完-->
		
		<!--banner-->
		<div class="mbanner01 modal">
			<img src="/static/onefourfive/banner.png"/>
		</div>
		<!--banner完-->
		
		<!--征集介绍-->
		<div class="content" >
			<div class="content_img"><img src="/static/onefourfive/content.png" alt="" /></div>

		 	<!--表单-->
		 	<form action="/SiChuan145" method="post" autocomplete="on">
				@csrf
		 		<div class="form_item" id="begin">
		 			<span>姓名</span>
		 			<input type="text" name="name" placeholder="请输入您的姓名" required="required" value="{{ old('name') }}"/>
		 		</div>
		 		<div class="form_item">
		 			<span>联系电话</span>
		 			<input type="text" name="tel" placeholder="请输入您的联系电话" required="required"/>
		 		</div>
		 		<div class="form_item">
		 			<span>邮箱</span>
		 			<input type="email" name="email" placeholder="请输入您的邮箱"  required="required"/>
		 		</div>
		 		<div class="form_item theme">
		 			<span>建言主题</span>
		 			<select name="category">
		 				<option value="请选择建言主题" selected="selected">请选择建言主题</option>
		 				<option value="融入国内国际双循环新发展格局">融入国内国际双循环新发展格局</option>
		 				<option value="区域协调发展">区域协调发展</option>
		 				<option value="科技创新驱动">科技创新驱动</option>
		 				<option value="构建现代产业体系">构建现代产业体系</option>
		 				<option value="现代基础设施体系建设">现代基础设施体系建设</option>
		 				<option value="扩大内需">扩大内需</option>
		 				<option value="深化改革">深化改革</option>
		 				<option value="扩大开放">扩大开放</option>
		 				<option value="乡村振兴">乡村振兴</option>
		 				<option value="文化产业和文化事业">文化产业和文化事业</option>
		 				<option value="生态文明建设">生态文明建设</option>
		 				<option value="民生和社会事业">民生和社会事业</option>
		 				<option value="城乡基层治理">城乡基层治理</option>
		 				<option value="平安四川建设">平安四川建设</option>
		 				<option value="其他">其他</option>
		 			</select>
		 		</div>
		 		<div class="form_item text">
		 			<span>发表建言</span>
		 			<textarea name="content" placeholder="请输入建言内容" required="required"></textarea>
		 		</div>
		 		
				 @if (count($errors) > 0)
					@foreach($errors->all() as $error)
					<div class="form_item">
					<span style="font-size:16px;color:red;padding-top:10px;text-align:center;float:none">*{{ $error }}</span>
					</div>
		
					@endforeach
				@endif	
				
				@if(session()->has('success'))
				<div class="form_item">
				<span style="font-size:16px;color:red;padding-top:10px;text-align:center;float:none">{{ session()->get('success') }}</span>
				</div>
				@endif
		 		<input type="submit" value="提交"/>
		 	</form>
		</div>
		
		<!--底部-->
		<div class="mfoot modal">
			<p>网上传播视听节目许可证 编号：2304068  <br />发证机关：国家广播电影电视总局<br />
	经营许可证 编号：川B2-20100027 <br /> 四川新闻网版权所有 蜀ICP备12007028号-8</p>
		</div>
		<!--底部完-->
		
		<script type="text/javascript">
			
			(function() {
				var htmlWidth = document.documentElement.clientWidth || document.body.clientWidth;
				var htmlDom = document.getElementsByTagName("html")[0];
				htmlDom.style.fontSize = htmlWidth / 6.4 + "px";
			
				var $dom = document.createElement('div');
				$dom.style.cssText = 'font-size:16px;';
				document.body.appendChild($dom);
				
				var scaledFontSize = parseInt(window.getComputedStyle($dom, null).getPropertyValue('font-size'));
				document.body.removeChild($dom);
				
				var scaleFactor = 16 / scaledFontSize;
				var originRootFontSize = parseInt(window.getComputedStyle(htmlDom, null).getPropertyValue('font-size'));
				
				htmlDom.style.fontSize = originRootFontSize * scaleFactor * scaleFactor + 'px';
			})()
			
			/*
			!!!!!!!!!!!!!!!!!!!!
			!!!!!!!!!!!!!!!!!!!!
			
			提交成功后，会显示提示消息：.title
			这里仅做效果测试，无实际意义

			!!!!!!!!!!!!!!!!!!!!
			!!!!!!!!!!!!!!!!!!!!
			*/

			// var _submit = document.querySelector("input[type = submit]");
			// var title = document.querySelector(".title");
			// _submit.onclick = function(){
			// 	title.style.display = "block"
			// 	setTimeout(function(){
			// 		title.style.display = "none"
			// 	},3000)
			// }
			
			/*
			!!!!!!!!!!!!!!!!!!!!
			!!!!!!!!!!!!!!!!!!!!
			
			提交成功后，会显示提示消息：.title
			这里仅做效果测试，无实际意义
			
			!!!!!!!!!!!!!!!!!!!!
			!!!!!!!!!!!!!!!!!!!!
			*/
			
			//设置标题文字的两端对齐
			var form_item = document.querySelectorAll(".form_item");
			for(var i = 0; i < form_item.length; i++){
				var item_span = form_item[i].children[0];
				var item_lastChild = form_item[i].children[1];
				
				if(item_span.innerText.length == 2){
					item_span.style.letterSpacing = "2em";
				}
				item_lastChild.onfocus = function(){
					this.className = "ff"
				}
				item_lastChild.onblur = function(){
					this.className = ""
				}
			}
			
			//设置下拉框的默认选中样式
			var theme_select = document.querySelector(".theme select ");
			theme_select.onchange = function(){
				if(this.value == "请选择建言主题"){
					this.style.color = "#999"
				}else{
					this.style.color = "#000"
				}
			}
			
			//段落文本框的自动高度控制
			function makeExpandingArea(el) {
			    var timer = null;
			    var setStyle = function(el, auto) {
			        if (auto) el.style.height = 'auto';
			        el.style.height = el.scrollHeight + 'px';
			    }
			    var delayedResize = function(el) {
			        if (timer) {
			            clearTimeout(timer);
			            timer = null;
			        }
			        timer = setTimeout(function() {
			            setStyle(el)
			        }, 200);
			    }
			    if (el.addEventListener) {
			        el.addEventListener('input', function() {
			            setStyle(el, 1);
			        }, false);
			        setStyle(el)
			    } else if (el.attachEvent) {
			        el.attachEvent('onpropertychange', function() {
			            setStyle(el)
			        })
			        setStyle(el)
			    }
			    if (window.VBArray && window.addEventListener) { //IE9
			        el.attachEvent("onkeydown", function() {
			            var key = window.event.keyCode;
			            if (key == 8 || key == 46) delayedResize(el);
			
			        });
			        el.attachEvent("oncut", function() {
			            delayedResize(el);
			        }); 
			    }
			}
			var _text = document.querySelector('.text textarea');
			makeExpandingArea(_text);
			
			
		</script>

		<!-- @if(session()->has('success'))
		<script>
		window.onload=function(){
			alert('提交成功，感谢您的参与~')
		}
		</script>
		@endif -->

	</body>
</html>
