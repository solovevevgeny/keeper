@extends("layouts.main")

@section("title", "Operations")

@section("content")

    @if ($operations !== null) 
        <ul class="list-group">
        @foreach ($operations as $operation)
            <li class="list-group-item">
                <div class="operation-date">{{ $operation->created_at }}</div>
                <h3>{{ $operation->amount }}</h3>
                <div class="opertation-from">{{ $operation->account_from }}</div>
                <div class="opertation-to">{{ $operation->account_to }}</div>
                <span>{{ $operation->comment }}</span>
            </li>
        @endforeach
        </ul>
    @endif
    
@endsection