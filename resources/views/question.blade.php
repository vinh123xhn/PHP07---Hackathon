<form action="{{ route('showInput') }}">
    {{ csrf_field() }}
    Số nguwofi chơi :
    <input type="number" name="number">
    <input type="submit">
</form>