@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card__container">
            <form action="" method="post">
                @csrf
                <div class="table">
                    <div class="table__container">
                        <label class="table__row">
                            <div class="table__col--left">
                                <span>City:</span>
                            </div>
                            <div class="table__col--right">
                            </div>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
