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
                    <span class="opertation-from">  {{ $operation->accountFrom->name }} <i class="material-icons">arrow_right_alt</i> </span>
                @endif

                @if ($operation->accountTo !== null) 
                    <span class="opertation-to">{{ $operation->accountTo->name }}</span>
                @endif

                @if ($operation->category !== null) 
                    <span class="opertation-to">{{ $operation->category->title }}</span>
                @endif

                <span>{{ $operation->comment }}</span>
            </li>
        @endforeach
        </ul>
    @endif
    
@endsection