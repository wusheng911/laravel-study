@extends('layouts.admin')

@section('title','创建文章')
@push('scripts')

    <script src="/assets/libs/ckeditor/ckeditor.js"></script>
    <script src="/assets/libs/ckfinder/ckfinder.js"></script>
    <script src="/assets/js/admin/content/content_edit.js"></script>

@endpush
@section('content')

<form method="post" action="/tm/content" >
    {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-6" >
                <div class="panel panel-default">
                    <div class="panel-heading"> <h3 class="panel-title">基础选项</h3> </div>
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">发布时间</label>
                            <input class="col-lg-9 form-control-static" name="content[post_at]" value="2017-01-07 17:04:58" id="post_at" type="text"  placeholder="请选则默认发布时间" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">标题</label>
                            <input class="col-lg-9 form-control-static" name="content[title]" type="text" placeholder="请输入标题" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">名称</label>
                            <input class="col-lg-9 form-control-static" name="content[name]" value="test" type="text" placeholder="请输入标题" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" >描述</label>
                            <textarea id="contentdescription" class="col-lg-9 form-control-static" name="content[description]" type="text"  placeholder="请输入标题" aria-describedby="basic-addon1"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">显示作者名</label>
                            <input class="col-lg-9 form-control-static" name="content[show_author]" type="text"  placeholder="请输入待显示作者的名称" aria-describedby="basic-addon1">
                        </div>

                        <div class="row form-group">
                            <label class="col-lg-2 control-label">查看权限</label>
                            <div class="col-lg-10" >
                                <div class="row checkbox" >
                                    <label >
                                        <input name="content[need_logined]" type="checkbox">
                                        仅允许已登陆用户
                                    </label>
                                </div>
                            </div>
                        </div>
                       
                        <input hidden="true" id="backtype" class="col-lg-9 form-control-static" name="other[backtype]" type="text" value="0" placeholder="请输入待显示作者的名称" aria-describedby="basic-addon1">
                        <input hidden='true' id = "articletype" name="content[type]" type="text" value="1">

                    </div>
                </div>
            </div>

            <div class="col-lg-6" >
                <div class="panel panel-default">
                    <div class="panel-heading"> <h3 class="panel-title">seo相关</h3> </div>
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">seo标题</label>
                            <input class="col-lg-8 form-control-static" name="content[seo_title]" type="text" placeholder="请输入seo标题" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">seo关键字</label>
                            <input class="col-lg-8 form-control-static" name="content[seo_keywords]" type="text"  placeholder="请输入seo关键字" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">seo描述</label>
                            <input class="col-lg-8 form-control-static" name="content[seo_description]" type="text"  placeholder="请输入seo描述" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">所属分类</h3>
            </div>

            <div class="panel-body form-horizontal">
                <div class="row" >
                    @foreach ($categories as $category)

                        <label class="col-lg-2 control-label">{{ $category->title }}</label>
                        <input class="col-lg-1 form-control-static" name="content[content_category_id]" type="radio" checked="" value="{{ $category->id }}" aria-describedby="basic-addon1">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">文章内容</h3>
            </div>

            <div class="row" >
                <div class="col-lg-1" ></div>
                <div class="col-lg-11 panel-body">
                    <!-- <input type="textarea" id="content" name="content[content]" value=""> -->
                    <label for="content">文章内容</label>
                    <textarea id="content" cols="20" name="content[content]" rows="2" class=""></textarea>
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

