@extends('layouts.admin')

@section('title','角色面板')

@push('scripts')
    <script src="/assets/admin/js/role/role.js"></script>
@endpush
@section('content')
      <button type="button" onClick="window.location.href='{{ action('Admin\RoleController@create') }}';" class="btn btn-lg btn-success">新建角色</button>
        <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead>
                    <th>操作</th>
                    <th>ID</th>
                    <th>名称</th>
                    <th>昵称</th>
                    <th>描述</th>
                </thead>
                <tfoot>
		            <tr>
		                <th>操作</th>
		                <th>ID</th>
		                <th>名称</th>
                        <th>昵称</th>
		                <th>描述</th>
		            </tr>
		        </tfoot>
                <tbody>
                </tbody>
            </table>
        </div>
@endsection

