@extends('layouts.admin')

@section('title', '控制面板')
@section('content')
<form method="post" action="/tm/role" role="form">
    {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading"> <h3 class="panel-title text-center">角色信息</h3> </div>
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">识别名称</label>
                                <input class="col-lg-9 form-control-static" name="role[name]" type="text"  placeholder="请输入角色识别名称" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">名称</label>
                            <input class="col-lg-9 form-control-static" name="role[display_name]" type="text"  placeholder="请输入角色名" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">角色说明</label>
                            <input class="col-lg-9 form-control-static" name="role[description]" type="text"  placeholder="请输入角色描述信息" aria-describedby="basic-addon1">
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
