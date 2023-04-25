@extends('client.layouts.master')
@section('body-class', 'animated-banner')

@section('content')
    @include('client.pages.index._slider', ['intro' => $intros])

    @if($intros && $intros->count() > 0)
        @include('client.pages.index._intro')
    @endif
    @if (isset($aboutUs))
    @include('client.pages.index._about-us')
    @endif
{{--    @include('client.pages.index._payments-noused')--}}
@foreach($services as $service)
@if ($service->service_type === config('constants.service_type.service_block'))
    @include('client.pages.index._services')
@elseif ($service->service_type === config('constants.service_type.loan_calculator'))
    @include('client.pages.index._calculator')
@elseif ($service->service_type === config('constants.service_type.process'))
    @include('client.pages.index._process')
@elseif ($service->service_type === config('constants.service_type.practive_area'))
    @include('client.pages.index._why-choose-us')
@elseif ($service->service_type === config('constants.service_type.our_team'))
    @include('client.pages.index._our-team')
@endif
@endforeach
    @include('client.pages.index._loan-now')

@endsection
