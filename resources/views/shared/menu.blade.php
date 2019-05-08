<div class="pull-right">
    <strong>Bem-Vindo {{ Auth::user()->nome_informal }}</strong>
    <form action="logout" method="POST" class="inline">
        {{csrf_field()}}
        <button class="btn btn-xs btn-default" type="submit">Logout</button>
    </form>
</div>
