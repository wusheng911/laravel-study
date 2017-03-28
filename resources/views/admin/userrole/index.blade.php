@extends('layouts.admin')

@section('title','用户角色配置')

    @push('scripts')
    <script src="/assets/admin/js/userrole/userrole.js"></script>
    @endpush

@section('content')
        <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead>
                    <th>操作</th>
                    <th>ID</th>
                    <th>用户名</th>
                    <th>邮箱</th>
                    <th>角色</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
@endsection
