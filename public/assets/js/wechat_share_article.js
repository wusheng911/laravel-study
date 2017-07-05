$(document).ready(function(){
	$.ajax({
			
			    url: '/wechatshare',
			    method: 'post',
			    data: {},
			    dataType: "json",
			    success: function(data){
					 wx.config({
					   debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
					   appId: data.appid, // 必填，公众号的唯一标识
					   timestamp: data.timestamp, // 必填，生成签名的时间戳
					   nonceStr: data.noncestr, // 必填，生成签名的随机串
					   signature: data.signature,// 必填，签名，见附录1
					   jsApiList: ['onmenusharetimeline', 'onmenushareappmessage'] // 必填，需要使用的js接口列表，所有js接口列表见附录2
					 });
					 wx.ready(function(){
						 // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
					   console.log('初步测试成功');
						var wechat_share_msg ='测试微信分享接口';
					   //wx.onmenusharetimeline(wechat_share_msg);
					   //wx.onmenushareappmessage(wechat_share_msg);
					   //wx.onmenushareqq(wechat_share_msg);
					   //wx.onmenushareweibo(wechat_share_msg);
					   //wx.onmenushareqzone(wechat_share_msg);
					wx.onMenuShareAppMessage({title:"我又测试了一次分享",
						desc:"哼哈二将",
						link:"http://www.wusheng911.com",
						success:function(){
							console.log('我分享成功了');	
						}})
					 });
					wx.error(function(res){
						alert('报错信息:'+res);
						// config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
					});
			    },
			    error:function(error){
					console.log(error);
			    }
	
	})

})
