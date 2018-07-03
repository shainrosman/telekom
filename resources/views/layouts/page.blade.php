@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @isset($card_header)
                    <div class="card-header">
                        {{ $card_header }}
                    </div>
                @endisset

                <div class="card-body">
                    {{ $card_body }}                  
                </div>

                @isset($card_footer)
                    <div class="card-footer">
                        {{ $card_footer }}
                    </div>
                @endisset
            </div>
        </div>
    </div>
</div>
@endsection