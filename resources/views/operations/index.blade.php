@extends("layouts.main")

@section("title", "Operations")

@section("content")

    @if ($operations !== null) 
        <div class="operation-box">
        @foreach ($operations as $operation)
            <div class="operation-item">
                <h1>{{ $operation->amount }}</h1>
                <div class="opertation-from">{{ $operation->account_from }}</div>
                <span>{{ $operation->comment }}</span>
            </div>
        @endforeach
        </div>
    @endif
    
@endsection