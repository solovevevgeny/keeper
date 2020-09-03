@extends("layouts.main")


@section("content")
    <div class="accounts">
        <h3>Счета</h3>

        @if($accounts !== null)
            @foreach($accounts as $account)

            <div class="card" style="width: 14rem; float:left;">
            <div class="card-body">
                <h5 class="card-title">{{ $account->name}}</h5>
                <p class="card-text">{{ number_format($account->amount,2,'.', ' ') }} {{ $account->currency->sufix }}  </p>
            </div>
            </div>
            @endforeach
        @endif
    </div><br />

    <div style="width:100%; height:1px; clear:both;"></div>
    <div class="operations">
        <h3>Операции</h3>    
        <ul class="list-group">
        @if($operations !== null)
            @foreach($operations as $operation)
                    @if ($operation->accountFrom !== null)
                        <li class="list-group-item">{{ $operation->accountFrom->name }} 

                        @if ($operation->category !== null)
                        <i class="fas fa-arrow-right"></i> {{ $operation->category->title }} 
                        @endif

                        @if ($operation->accountTo !== null)
                        <i class="fas fa-arrow-right"></i> {{ $operation->accountTo->name }} 
                        @endif


                        <div style="float:right">{{ number_format($operation->amount, 2, '.', ' ') }}</div> 
                        <div class="bg-light">{{ $operation->comment }}</div>
                        </li>
                    @endif
            @endforeach
        </ul>
        @endif
    </div>

    <div class="operationsGraph">
        <h3><i class="fas fa-chart-line"></i> Статистика</h3>
        @include("chars.sample")
    </div>

    </div>
@endsection