@extends("layouts.main")

@section("title", "Accounts")

@section("content")

    @if ($accounts !== null) 
        <ul class="list-group">
        @foreach ($accounts as $account)
            <li class="list-group-item">
                <h3>{{ $account->amount }}</h3>
                <div class="opertation-from">{{ $account->name }}</div>
            </li>
        @endforeach
        </ul>
    @endif
    
@endsection