@extends('layouts.admin')

@section('title','用户角色编辑')
@section('content')
<form method="POST" action="/tm/userrole/{{$user->id}}" role="form">
     {{ method_field('PUT') }}
   {{ csrf_field() }}
<div class="row">
    <div class="col-lg-12" >
        <div class="panel panel-default">
            <div class="panel-heading"> <h3 class="panel-title text-center">用户信息</h3> </div>
            <div class="panel-body form-horizontal">
                <div class="form-group">
                    <label class="col-lg-2 control-label">用户名</label>
                    <input class="col-lg-9 form-control-static" disabled name="role[name]" type="text" value="{{$user->name}}" placeholder="请输入角色识别名称" aria-describedby="basic-addon1">
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">用户邮箱</label>
                    <input class="col-lg-9 form-control-static" disabled name="role[description]" type="text" value="{{$user->email}}" placeholder="请输入角色描述信息" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-center">角色选择</h3>
        </div>

        <div class="panel-body form-horizontal">
            <div class="row" >
                @foreach ($roles as $role)

                    <label class="col-lg-2 control-label">{{ $role->display_name }}</label>
                    <input class="col-lg-1 form-control-static" name="user_roles[]" type="checkbox"
                           {{ in_array($role->id, $checks) ? "checked" : "" }}
                           value="{{ $role->id }}" aria-describedby="basic-addon1">
                @endforeach
            </div>
        </div>
    </div>
  <button type="submit" class="btn btn-default">提交</button>
</form>
@endsection
