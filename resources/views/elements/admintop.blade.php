<div class='admin-top'>
<div class="admin-user">
<form method="post" action="/tm/logout">
{{ csrf_field() }}
<label class="admin-top-user">
欢迎管理员:{{$name}}
</label>
<button type="submit">退出登录</button>
</form>
</div>
</div>
