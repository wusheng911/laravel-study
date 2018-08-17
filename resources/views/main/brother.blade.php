@extends('layouts.app')

@section('title','各种职业的录入页面')

@push('scripts')
	<script>
$(document).ready(function(){
	var cnt =0;
	var f = 0;
	var w ;
	var s = 0;
	var t =0;
	$('#btn').on('click',function(){
		$('#btn').html('demo，不用提交数据！')
	});
	$(".brother-item").each( function(){
		cnt++;
		w = cnt;
		t = w;
		$("#ww").html(w);
		$(this).on('click',function(evt,index){
			var target = $(evt.currentTarget);
			var value = target.data("v");
			if(value=="0"){
				target.data("v","1");
				$('#s-'+target.attr('id')).css('display','inline-block');
				$('#f-'+target.attr('id')).css('display','none');
				$("#"+target.attr('id')).css('border-color',"#0f0")
				$('#w-'+target.attr('id')).css('display','none');
				s++;
				f--;
				if(f<0){
					f =0;
				}
				w = t - s -f;
		$("#ff").html(f);
		$("#ss").html(s);
		$("#ww").html(w);

			}else{
				target.data("v","0");
				$('#s-'+target.attr('id')).css('display','none');
				$('#f-'+target.attr('id')).css('display','inline-block');
				$("#"+target.attr('id')).css('border-color',"#f00")
				$('#w-'+target.attr('id')).css('display','none');
				f++;
				s--;
				if(s<0){
					s =0;
				}
				w = t - s -f;
		$("#ff").html(f);
		$("#ss").html(s);
		$("#ww").html(w);
			}
		});	
	});
});
	</script>
@endpush

@section('content')
<div class="brother-container">
	@foreach($list as $key => $value)
		<div class="brother-group">
		<div id="{{$key}}" class="brother-item" data-v="0">{{$value}}</div>
		<div id="w-{{$key}}" class="brother-item-wait">待定</div>
		<div id="s-{{$key}}" class="brother-item-success">合格</div>
		<div id="f-{{$key}}" class="brother-item-fail">不合格</div>
		</div>
	@endforeach
	<div class="brother-panel">
		<p style="">筛选结果</p>
		<div>
			<p>入选个数:<span id="ss">0</span></p>
			<p>落选个数:<span id="ff">0</span></p>
			<p>待定个数:<span id="ww">0</span></p>
		</div>
	<button id="btn" class="brother-button">提交筛选结果</button>
	</div>
</div>

@endsection
