@extends("layouts.main")

@section("title", "Operations")

@section("content")

    @if ($operations !== null) 
        <ul class="list-group">
        @foreach ($operations as $operation)
            <li class="list-group-item">

            <div style="float:right">
                <div style='text-align:right; font-size:2rem;font-weight:bold'>{{ number_format($operation->amount,0,'', ' ') }}</div>
                <div style="text-align:right;" class="operation-date">{{ date_format($operation->created_at, 'Y.m.d') }}</div>
            </div>

            <div style="float:left">
                @if ($operation->accountFrom !== null) 
                    <span class="opertation-from">  {{ $operation->accountFrom->name }} <i class="material-icons">arrow_right_alt</i> </span>
                @endif

                @if ($operation->accountTo !== null) 
                    <span class="opertation-to">{{ $operation->accountTo->name }}</span>
                @endif

                @if ($operation->category !== null) 
                    <span class="opertation-to">{{ $operation->category->title }}</span>
                @endif

                <div>{{ $operation->comment }}</div>
            </div>
            </li>
        @endforeach
        </ul>
    @endif
    
@endsection