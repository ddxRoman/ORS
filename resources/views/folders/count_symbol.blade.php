<form action="{{route(('count-form'))}}" method="post">
    @csrf
    <textarea class="" name="text" id=""></textarea>
    <button>Посчитать</button>
</form>