<form action="{{route('autorization-form')}}" method="get">
    @csrf
    <div class="form-group">
        <label for="name">Логин</label>
        <input type="text" name="name" placeholder="Логин">
        <label for="password">Пароль</label>
        <input type="password" name="password" placeholder="Пароль">
    </div>
    <button>Войти</button>
</form>