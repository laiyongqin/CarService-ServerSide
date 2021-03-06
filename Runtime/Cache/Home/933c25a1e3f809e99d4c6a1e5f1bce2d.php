<?php if (!defined('THINK_PATH')) exit();?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>驾遇-只关心你的车</title>
    <meta charset="utf-8">
    <meta name="description" content="驾遇-只关心你的车">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="MobileOptimized" content="320">
    <meta name="referrer" content="default" id="meta_referrer">
    <meta name="format-detection" content="telephone=no">
    <style type="text/css">
        html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6,
        p, blockquote, pre, a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, samp, small, strike, strong, sub, sup, tt, var,
        dl, dt, dd, ol, ul, li, fieldset, form, label, legend,
        caption, tbody, tfoot, thead, tr, th, td,
        article, aside, figure, footer, header, menu, nav, section, menu,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-weight: inherit;
            font-style: inherit;
            font-family: inherit;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
        }

        article, aside, details, figcaption, figure,
        footer, header, menu, nav, section {
            display:block;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #ff9000;
        }
        * {
            -webkit-touch-callout: none;
            -webkit-text-size-adjust: none;
        }

        @media (min-width: 640px) {
            html{
                font-size: 200%;
            }
        }

        .hide{
            display: none!important;
        }
        .text-center{
            text-align: center;
        }
        .display-block{
            display: block;
        }
        .block-center{
            margin: 0 auto;
        }
        .mt1rem{
            margin-top: 1rem!important;
        }
        .mb1rem{
            margin-bottom: 1rem;
        }
        .mr1rem{
            margin-right: 1rem;
        }
        .ml1rem{
            margin-left: 1rem;
        }
        .origin-logo-container{
            height: 12.125rem;
        }
        .origin-logo-container .big-logo{
            width: 4.6875rem;
            height: 4.6875rem;
        }
        .origin-logo-container .origin-slogan{
           
            height: 2.375rem;
        	margin:0 auto;
        	color:white;
        }
        .origin-logo-container .origin-button{
            width: 6.25rem;
            height: 2.8125rem;
        }
        .origin-logo-container .big-button{
            width: 15.3125rem;
            margin-left: 0.5rem;
        }

        .origin-logo-container .intro-pc-button{
            height: 2.8125rem;
            width: 13.5rem;
            display: block;
            margin: 0 auto;
        }
		.origin-logo-container .intro-weixin-button{
            height: 2.8125rem;
            width: 13.5rem;
            display: block;
            margin: 0 auto;
        	margin-bottom:0.3rem;
        }
        
		.origin-logo-container .intro-weixin-m-button{
             width: 15.3125rem;
            margin-left: 0.5rem;
	    	margin-top:0.5rem;
        }

        .origin-logo-container .intro-mobile-button{
            width: 15.3125rem;
            margin-left: 0.5rem;
	    	margin-top:0.5rem;
        }

        .fold-logo-container{
            top:-4.0625rem;
            background-color: #261d1a;
            position: fixed;
            width: 100%;
            text-align: center;
            height: 4.0625rem;
            line-height: 4.0625rem;
        }
        .fold-logo-container .big-logo{
            height: 2.8125rem;
            width: 2.8125rem;
            margin-top: 0.625rem;
        }
        .fold-logo-container .origin-button{
            margin-right: 0.5rem;
            width: 6.25rem;
            height: 2.8125rem;
        }
        .fold-logo-container .big-button{
            width: 15.3125rem;
            margin-left: 0.5rem;
        }

        div.item-container{
            width: 20rem;
            height: 25rem;
            margin: 2rem auto 0;
            background: url("/Public/popularize/item-bg.png") 100% 100%;
            background-size: 100% 100%;
            text-align: center;
        }
        img.item-1{
            width: 20rem;
            height: 21.4375rem;
            margin-top: 4.5625rem;
        }
        img.item-2{
            width:20.03125rem;
            height: 21.4375rem;
            margin-top: 3.125rem;
        }
        img.item-3{
            width: 20.03125rem;
            height:21.4375rem;
            margin-top: 2.5rem;
        }
        img.item-4{
            width: 20.03125rem;
            height:21.4375rem;
            margin-top: 4rem;
        }

        .footer{
            margin-top: 3.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: #ffffff;
            font-size: 0.75rem;
        }
        .footer .footer-slogan{
            margin-bottom: 0.5rem;
        }
        .hidden{
			display:none;
        }
		.sysAlert {
			font-size: 100%;
			position: absolute;
			top: 0.6rem;
			right: 2%;
			background: #F6F6F6;
			color: #333;
			line-height: 2.2rem;
			padding: 0.6rem 0.8rem;
			border: 0 none;
			border-radius: 0.3rem;
			z-index: 9999;
			margin: 0;
		
		}
		.sysbg{
			position: fixed;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background: #000;
			z-index: 9998;
			overflow: hidden;
			opacity: 0.6;
		}
		.triangle {
			position: absolute;
			top: -0.5rem;
			right: 0.8rem;
			display: inline-block;
			width: 0;
			height: 0;
			line-height: 0;
			font-size: 0;
			border-width: 0.5rem;
			border-color: transparent transparent #fff transparent;
			border-style: none dashed solid dashed;
		}
    </style>
</head>
<body>
<div class="sysAlert hidden" ><i class="triangle"></i>1.点击右上角<br/>2.选择‘在游览器中打开’<br/>3.点击下载</div>
<div class="sysbg hidden" ></div>
<div class="origin-logo-container mb1rem">
    <img src="/Public/popularize/big-logo.png" class="big-logo display-block block-center mt1rem mb1rem">
   <div class="origin-slogan display-block block-center mb1rem text-center">驾遇-只关心你的车</div>
    <div class="button-wrapper text-center">
        <img src="/Public/popularize/android-big.png" class="big-button android-btn hide">
        <img src="/Public/popularize/ios-big.png" class="big-button ios-btn hide">
        <img src="/Public/popularize/android.png" class="origin-button android-btn mr1rem ">
        <img src="/Public/popularize/ios.png" class="origin-button ios-btn ">
          <img src="/Public/popularize/introduction-weixin.png" class="intro-weixin-button weixin-btn">
         <img src="/Public/popularize/introduction-weixin-m.png" class="intro-weixin-m-button weixin-btn">
        <img src="/Public/popularize/introduction.png" class="intro-pc-button introduction-btn">
        <img src="/Public/popularize/introduction-big.png" class="intro-mobile-button introduction-btn hide">
    </div>
</div>
<div class="fold-logo-container            " style="top: -130px;">
    <img src="/Public/popularize/big-logo.png" class="big-logo">
    <img src="/Public/popularize/android-big.png" class="big-button android-btn hide">
    <img src="/Public/popularize/ios-big.png" class="big-button ios-btn hide">
    <img src="/Public/popularize/android.png" class="origin-button android-btn ml1rem ">
    <img src="/Public/popularize/ios.png" class="origin-button ios-btn ">
</div>
<div class="item-container">
    <img src="/Public/popularize/item-1.png" class="item-1">
</div>
<div class="item-container">
    <img src="/Public/popularize/item-2.png" class="item-2">
</div>
<div class="item-container">
    <img src="/Public/popularize/item-3.png" class="item-3">
</div>
<div class="item-container mt1rem">
    <img src="/Public/popularize/item-4.png" class="item-4">
</div>
<div class="footer">
    <div class="footer-slogan">驾遇&nbsp;&nbsp;&nbsp;只关心你的车</div>
    <div class="footer-copyright">Copyright © 2014-2015 驾遇</div>
</div>

<script type="text/javascript" src="/Public/popularize/my.js"></script>
<script type="text/javascript">

    var MY = MY || {};
    var isIOS = function(){
        var u = navigator.userAgent;
        return !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
    };

    var isAndroid = function(){
        var u = navigator.userAgent;
        return u.indexOf('Android') > -1 || u.indexOf('Linux') > -1;
    };

    var isInWX = function(){
        var u = navigator.userAgent;
        return u.indexOf('MicroMessenger') > -1;
    };

    var foldLogoContainer = document.getElementsByClassName("fold-logo-container");
    var foldLogoContainerHeight = foldLogoContainer[0].offsetHeight;
    var btnWrapperOffsetTop = document.getElementsByClassName("button-wrapper")[0].offsetTop;
    var intervalMoveDown;
    var intervalMoveUp;
    window.onscroll = function(){
        if(document.body.scrollTop >= btnWrapperOffsetTop){
            if(foldLogoContainer[0].className.indexOf("show") > -1) return;
            if(foldLogoContainer[0].className.indexOf("moving") > -1) return;
            if(intervalMoveDown) return;
            intervalMoveDown = window.setInterval(function(){
                addClass(foldLogoContainer, "moving");
                var currentTop = foldLogoContainer[0].offsetTop;
                if(currentTop >= 0) {
                    window.clearInterval(intervalMoveDown);
                    removeClass(foldLogoContainer, "moving");
                    addClass(foldLogoContainer, "show");
                    intervalMoveDown = null;
                    return;
                }
                foldLogoContainer[0].style.top = currentTop + 5;
            }, 10);
        }else{
            if(foldLogoContainer[0].className.indexOf("show") == -1) return;
            if(foldLogoContainer[0].className.indexOf("moving") > -1) return;
            if(intervalMoveUp) return;
            intervalMoveUp = setInterval(function(){
                addClass(foldLogoContainer, "moving");
                var currentTop = foldLogoContainer[0].offsetTop;
                if(currentTop <= -foldLogoContainerHeight) {
                    window.clearInterval(intervalMoveUp);
                    removeClass(foldLogoContainer, "moving");
                    removeClass(foldLogoContainer, "show");
                    intervalMoveUp = null;
                    return;
                }
                foldLogoContainer[0].style.top = currentTop - 5;
            }, 10);
        }
    };

    var addClass = function(elems, className){
        for(var i = 0; i < elems.length; i++){
            var originClassName = elems[i].className;
            if(originClassName.indexOf(className) == -1){
                elems[i].className = originClassName + " " + className;
            }
        }
    };

    var removeClass = function(elems, className){
        for(var i = 0; i < elems.length; i++){
            var originClassName = elems[i].className;
            elems[i].className = originClassName.replace(className, "");
        }
    };

    var init = (function(){
    	
        if(isIOS()){
            addClass(document.getElementsByClassName("origin-button"), "hide");
            addClass(document.getElementsByClassName("big-button"), "hide");
            removeClass(document.getElementsByClassName("big-button ios-btn"), "hide");
        }else if(isAndroid()){
            addClass(document.getElementsByClassName("origin-button"), "hide");
            addClass(document.getElementsByClassName("big-button"), "hide");
            removeClass(document.getElementsByClassName("big-button android-btn"), "hide");
        }else{
            addClass(document.getElementsByClassName("big-button"), "hide");
            removeClass(document.getElementsByClassName("origin-button"), "hide");
        }

        if(MY.isMobile()){
            addClass(document.getElementsByClassName("intro-pc-button"), "hide");
            removeClass(document.getElementsByClassName("intro-mobile-button"), "hide");
            addClass(document.getElementsByClassName("intro-weixin-button"), "hide");
            removeClass(document.getElementsByClassName("intro-weixin-m-button"), "hide");
        }else{
            removeClass(document.getElementsByClassName("intro-pc-button"), "hide");
            addClass(document.getElementsByClassName("intro-mobile-button"), "hide");
            removeClass(document.getElementsByClassName("intro-weixin-button"), "hide");
            addClass(document.getElementsByClassName("intro-weixin-m-button"), "hide");
        }
        var weixinBtns = document.getElementsByClassName("weixin-btn");
        for(var i = 0; i < weixinBtns.length; i++){
        	weixinBtns[i].addEventListener("click", function(){
                location.href = "http://mp.weixin.qq.com/s?__biz=MzAwMjI2Mjg2NQ==&mid=204205766&idx=1&sn=90a64d98b43c39c401189d85eeb35777#rd";
            });
        }
        var introBtns = document.getElementsByClassName("introduction-btn"); 
        for(var i = 0; i < introBtns.length; i++){
            introBtns[i].addEventListener("click", function(){
                location.href = "http://www.caryu.net/Service/introduction";
            });
        }
		//判断微信
	    var weixin;
	  	var ua = window.navigator.userAgent; 
	  	if(ua.indexOf('MicroMessenger') !==-1){
	  		weixin = true;
	  	} else {
	  		weixin = false;;
	    }
	  	var sysbg = document.getElementsByClassName("sysbg");
	  		sysbg[0].addEventListener("click", function(event){
		  		 addClass(document.getElementsByClassName("sysAlert"), "hidden");
		  		 addClass(document.getElementsByClassName("sysbg"), "hidden");
		    });
        //绑定下载事件
        var androidBtns = document.getElementsByClassName("android-btn");
        for(var i = 0; i < androidBtns.length; i++){
            androidBtns[i].addEventListener("click", function(event){
            	if(weixin){
            		  removeClass(document.getElementsByClassName("sysAlert"), "hidden");
            	      removeClass(document.getElementsByClassName("sysbg"), "hidden");
            	      window.scrollTo(0,0);
             		  return false;
            	}else{
                	MY.downloadAndroid();
            	}
            });
        }

        var iosBtns = document.getElementsByClassName("ios-btn");
        for(var j = 0; j < iosBtns.length; j++){
            iosBtns[j].addEventListener("click", function(event){
            	if(weixin){
                    removeClass(document.getElementsByClassName("sysAlert"), "hidden");
                    removeClass(document.getElementsByClassName("sysbg"), "hidden");
                    window.scrollTo(0,0);
            		return false;
           		}else{
               		 MY.downloadIOS();
           		}
            });
        }
    })();
</script>

</body></html>