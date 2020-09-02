@extends("layouts.main")


@section ("content")


@if ($errors->any())
    @foreach($errors->all() as $error) 
        <div class="alert alert-danger">{{ $error  }}</div>
    @endforeach
@endif


<form method="POST" action="{{ route('operations.store') }}">
    @csrf
    <div class="form-group">

    <select name="type" class="form-control">
        <option value="sup">Расход</option>    
        <option value="move">Перевод</option>
        <option value="sum">Доход</option>
    </select>


    <label for="input-account-from">Отправитель</label>
    @if ($accounts !== null) 
        <select name="accountfrom" id="input-account-from" class="form-control">
        <option value=""></option>
        @foreach($accounts as $account)
            <option value="{{$account->id}}">{{ $account->name }}</option>
        @endforeach
        </select>
    @endif

    @if ($accounts !== null) 
    <label for="input-account-to">Получатель</label>
        <select name="accountto" id="input-account-to" class="form-control">
        <option value=""></option>
        @foreach($accounts as $account)
            <option value="{{$account->id}}">{{ $account->name }}</option>
        @endforeach
        </select>
    @endif

    @if (!$categories !== null)
        <label for="category_id">Категория</label>
        <select name="category_id" class="form-control" id="category_id">
        <option value=""></option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->title }} </option>
            @endforeach
        </select>
    @endif

    <input type="text" name="amount" placeholder="Сумма" class="form-control">
    <input type="text" name="comment" placeholder="Комментарий" class="form-control">

    <button class="btn btn-success" type="submit">Добавить операцию</button>

    </div>
</form>
@endsection