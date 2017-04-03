@extends('layouts.admin')

@section('title','孤言寡语')

@push('scripts')
    <script src="/assets/js/admin/alone/alone.js"></script>
@endpush
@section('content')

        <button type="button" onClick="window.location.href='/tm/alone/create'" class="btn btn-lg btn-success">新建</button>
        <div class="table-responsive">
            <table id="table" class="table table-striped">
                <thead>
                    <th>操作</th>
                    <th>ID</th>
                    <th>内容</th>
                    <th>作者</th>
                </thead>
                <tfoot>
                    <tr>
                        <th>操作</th>
                        <th>ID</th>
                        <th>内容</th>
                        <th>作者</th>
                    </tr>
                </tfoot>
                <tbody>
                </tbody>
            </table>
        </div>

@endsection

