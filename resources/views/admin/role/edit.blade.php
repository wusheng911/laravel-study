@extends('layouts.admin')
@section('title', '修改角色信息')
@section('content')
<form method="POST" action="/tm/role/{{$role->id}}" role="form">
     {{ method_field('PUT') }}
   {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading"> <h3 class="panel-title text-center">角色信息</h3> </div>
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">识别名称</label>
                            @if ($errors->has('email'))
                                <input class="col-lg-9 form-control-static" name="role[name]" type="text" value="{{ old('role[name]') }}" placeholder="请输入角色识别名称" aria-describedby="basic-addon1">
                                <span class="help-block">
                                    <strong>{{ $errors->first('role[name]') }}</strong>
                                </span>
                            @else
                                <input class="col-lg-9 form-control-static" name="role[name]" type="text" value="{{$role->name}}" placeholder="请输入角色识别名称" aria-describedby="basic-addon1">
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">名称</label>
                            <input class="col-lg-9 form-control-static" name="role[display_name]" type="text" value="{{$role->display_name}}" placeholder="请输入角色名" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">角色说明</label>
                            <input class="col-lg-9 form-control-static" name="role[description]" type="text" value="{{$role->description}}" placeholder="请输入角色描述信息" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">权 限</h3>
            </div>

            <div class="panel-body form-horizontal">
                <div class="row" >
                    @foreach ($perms as $perm)

                        <label class="col-lg-2 control-label">{{ $perm->display_name }}</label>
                        <input class="col-lg-1 form-control-static" name="role_perms[]" type="checkbox"
                               {{ in_array($perm->id, $checks) ? "checked" : "" }}
                               value="{{ $perm->id }}" aria-describedby="basic-addon1">
                    @endforeach
                </div>
            </div>
        </div>
  <button type="submit" class="btn btn-default">提交</button>
</form>


@endsection
