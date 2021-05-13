@extends('.auth.seller.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                       <span>{{$data['random']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
