@extends('layouts.admin')

@section('title','创建说说')
@push('scripts')
@endpush
@section('content')

<form method="post" action="/tm/alone">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-12" >
                <div class="panel panel-default">
                    <div class="panel-heading"> <h3 class="panel-title">基础选项</h3> </div>
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">内容</label>
                            <textarea class="col-lg-9 form-control-static" name="alone[content]" type="text" placeholder="请输入内容" aria-describedby="basic-addon1"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">作者</label>
                            <input class="col-lg-9 form-control-static" name="alone[author]" type="text" placeholder="作者" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-4" ></div>
            <div class="col-md-4" >
            <input id="submit" type="submit" style="width:100%;" class="btn btn-lg btn-success" value="保存">
            </div>
        </div>
</form>
@endsection
