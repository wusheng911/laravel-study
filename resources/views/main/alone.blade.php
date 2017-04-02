@extends('layouts.app')

@section('title','闲言碎语')

@push('scripts')

@endpush

@section('content')
<div class="alone-container">
@foreach($alone as $key=>$value)
    <ul class="alone-ul">
            <div class="alone-content-div">
                <p>{{$value->content}}</p>
            </div>
            @php
            $str = $value->created_at;
            $arr = explode(":", $str);
            $str = $arr[0];
            @endphp
            <span class="alone-tap">{{$str}}</span>
    </ul>
@endforeach
</div>

@endsection
