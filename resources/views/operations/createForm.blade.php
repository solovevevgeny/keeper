@extends("layouts.main")


@section ("content")
<form METHOD="POST" action="{{ route('operations.store') }}">
    @csrf

    @if ($errors->any())
        @foreach($errors->all() as $error) 
            <div class="alert alert-danger">{{ $error  }}</div>
        @endforeach
    @endif


    @if ($accounts !== null) 
        <select name="account_from">
        @foreach($accounts as $account)
            <option value="{{$account->id}}">{{ $account->name }}</option>
        @endforeach
        </select>
    @endif

    @if ($accounts !== null) 
        <select name="account_to">
        <option value=""></option>
        @foreach($accounts as $account)
            <option value="{{$account->id}}">{{ $account->name }}</option>
        @endforeach
        </select>
    @endif

    @if (!$categories !== null)
        <select name="category_id">
        <option value=""></option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->title }} </option>
            @endforeach
        </select>
    @endif


    <input type="text" name="amount" placeholder="Сумма">
    <input type="text" name="comment" placeholder="Комментарий">

    <button type="submit">Добавить операцию</button>

</form>
@endsection