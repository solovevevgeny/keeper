@extends("layouts.main")


@section("content")
    <div class="accounts">
        <h3>Счета</h3>

        @if($accounts !== null)
            @foreach($accounts as $account)

            <div class="card" style="width: 14rem; float:left;">
            <div style="background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);">&nbsp;</div>
            <div class="card-body">
                <h5 class="card-title">{{ $account->name}}</h5>
                <p class="card-text">{{ number_format($account->amount,2,'.', ' ') }}</p>
            </div>
            </div>
            @endforeach
        @endif
    </div><br />

    <div style="width:100%; height:1px; clear:both;"></div>
    <div class="operations">
        <h3>Операции</h3>    
        @if($operations !== null)
            @foreach($operations as $operation)
                @if ($operation->accountFrom !== null)
                    <div style='float:left'> {{ $operation->accountFrom->name }}</div>
                @endif
                <div style='float:right'>{{ number_format($operation->amount, 2, '.', ' ') }}</div><br />
            @endforeach
        @endif


    <div class="operationsGraph">
        @include("chars.sample")
    </div>

    </div>
@endsection