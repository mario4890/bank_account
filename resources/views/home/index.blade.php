@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card__container">
            <div class="card__header">
                <h2>Your wallets</h2>
            </div>
            <div class="card__content">
                <div class="table">
                    <div class="table__container">
                        <div class="table__header">
                            <div class="table__row">
                                <div class="table__col">Name</div>
                                <div class="table__col">Amount</div>
                                <div class="table__col"></div>
                            </div>
                        </div>
                        <div class="table__content">
                            @foreach($wallets as $wallet)
                            <div class="table__row">
                                <div class="table__col">{{ $wallet->name }}</div>
                                <div class="table__col">{{ $wallet->amount }}</div>
                                <div class="table__col">
                                    <button class="button--red" onclick="wallet.addAmount({{ $wallet->id }})"><span>Add amount</span></button>
                                    <button class="button--red" onclick="wallet.subtractAmount({{ $wallet->id }})"><span>Subtract amount</span></button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="card__footer--right">
                <button class="button--green"><span>Add wallet</span></button>
            </div>
        </div>
    </div>

@endsection
