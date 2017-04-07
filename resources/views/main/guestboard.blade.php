@extends('layouts.app')

@section('title','闲言碎语')

@push('scripts')

@endpush

@section('content')
<div class="guestboard-container">
    <div class="guestboard-letter-container">
        <div class="letter-group">
            @foreach($letters as $key=>$value)
                @if ($loop->last)
                    <div class="letter-item" style="border-bottom-style:solid"> 
                @else
                    <div class="letter-item"> 
                @endif
                    <div class="letter-guest-info">
                        <img class="letter-info-head">
                        <label class="letter-info-name">游客</label>
                    </div> 
                    <div class="letter-content">
                        <div class="letter-content-top">
                            <div class="letter-content-time">发表于{{$value->created_at}}   </div>
                @if ($loop->first)
                            <div class="letter-content-position">沙发</div> 
                @else
                            <div class="letter-content-position">{{$loop->iteration}}楼</div> 
                @endif
                        </div>
                        <div>
                            {{$value->content}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <form method="post" action="/addguest">
        {{ csrf_field() }}
        <label>给我留言</label>
        <div class="guestboard-textarea-container">
            <textarea class="guestboard-textarea" name="letter[content]"></textarea> 
            <input style="display:none;" name="letter[status]" value="0"></input>
            <input style="display:none;" name="letter[root_id]" value="0"></input>
        </div>
        <input class="guestboard-submit-btn" type="submit">
    </form>
</div>
@endsection
