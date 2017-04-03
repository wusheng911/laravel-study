@extends('layouts.admin')

@section('title','新建分类')

@push('scripts')

@endpush

@section('content')

<form method="post" action="/tm/category">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-6" >
                <div class="panel panel-default">
                    <div class="panel-heading"> <h3 class="panel-title">基础选项</h3> </div>
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">标题</label>
                            <input class="col-lg-9 form-control-static" name="category[title]" type="text" placeholder="请输入标题" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" >描述</label>
                            <textarea id="contentdescription" class="col-lg-9 form-control-static" name="category[description]" type="text"  placeholder="请输入描述" aria-describedby="basic-addon1"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" >
                <div class="panel panel-default">
                    <div class="panel-heading"> <h3 class="panel-title">seo相关</h3> </div>
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">seo标题</label>
                            <input class="col-lg-8 form-control-static" name="category[seo_title]" type="text" placeholder="请输入seo标题" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">seo关键字</label>
                            <input class="col-lg-8 form-control-static" name="category[seo_keywords]" type="text"  placeholder="请输入seo关键字" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">seo描述</label>
                            <input class="col-lg-8 form-control-static" name="category[seo_description]" type="text"  placeholder="请输入seo描述" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
<div class="row">

    <div class="col-md-12">
        <input type="submit" style="width:50%;margin:auto" class="btn btn-lg btn-success" value="保存">
    </div>
</div>
</form>
@endsection
