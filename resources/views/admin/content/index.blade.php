@extends('layouts.admin')

@section('title','文章列表')

@push('scripts')
    <script src="/assets/js/admin/content/content.js"></script>
@endpush
@section('content')

        <button type="button" onClick="window.location.href='/tm/content/create'" class="btn btn-lg btn-success">新建</button>
        <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead>
                    <th>操作</th>
                    <th>ID</th>
                    <th>标题</th>
                    <th>seo标题</th>
                    <th>说明</th>
                </thead>
                <tfoot>
                    <tr>
                        <th>操作</th>
                        <th>ID</th>
                        <th>标题</th>
                        <th>seo标题</th>
                        <th>说明</th>
                    </tr>
                </tfoot>
                <tbody>
                </tbody>
            </table>
        </div>

@endsection
