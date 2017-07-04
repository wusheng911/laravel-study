@extends('layouts.app')

@section('title','欢迎访问')

@push('scripts')
    <script type="text/javascript" src="/assets/js/main/wechat.js"></script>
    <script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script type="text/javascript" src="/assets/js/wechat_share_article.js"></script>
@endpush

@section('content')
<div id="signature">{{ $signature }}</div>
<div id="timestamp">{{ $timestamp }}</div>
<div id="noncestr">{{ $noncestr }}</div>
<div id="ticket">{{ $ticket }}</div>
@endsection



