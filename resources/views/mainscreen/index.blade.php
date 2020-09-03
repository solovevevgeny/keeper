@extends("layouts.main")


@section("content")
    <div class="accounts">
        <h3>Счета</h3>
        @if($accounts !== null)
            @foreach($accounts as $account)
                <div style="float:left">{{$account->name}}</div>
                <div style="float:right">{{ number_format($account->amount,0, ' ', ' ')}}</div><br />
            @endforeach
        @endif
    </div>

    <div class="operations">
        <h3>Операции</h3>    
        @if($operations !== null)
            @foreach($operations as $operation)
                @if ($operation->accountFrom !== null)
                    <div style='float:left'> {{ $operation->accountFrom->name }}</div>
                @endif
                <div style='float:right'>{{ number_format($operation->amount, 0, ' ', ' ') }}</div><br />
            @endforeach
        @endif

    </div>
@endsection