@extends("layouts.main")

@section("title", "Operations")

@section("content")

    @if ($operations !== null) 
        <ul class="list-group">
        @foreach ($operations as $operation)
            <li class="list-group-item">
                <div class="operation-date">{{ $operation->created_at }}</div>
                <h3>{{ $operation->amount }}</h3>

                @if ($operation->accountFrom !== null) 
                    <div class="opertation-from">{{ $operation->accountFrom->name }}</div>
                @endif

                @if ($operation->accountTo !== null) 
                    <div class="opertation-to">{{ $operation->accountTo->name }}</div>
                @endif

                @if ($operation->category !== null) 
                    <div class="opertation-to">{{ $operation->category->title }}</div>
                @endif

                <span>{{ $operation->comment }}</span>
            </li>
        @endforeach
        </ul>
    @endif
    
@endsection