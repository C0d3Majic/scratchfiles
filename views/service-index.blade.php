
@extends('frontEnd.layouts.page')

@section('PageContent')

    @php
    $ServiceType = 'something';
    @endphp
    <div class="container">
	<!--
        <h2><strong>{{ $ServiceCategory->title }}</strong> Translation Services </h2> <!---PHP !--->

        <div class="row">
            <div class="col-md-12">
                <p class="lead">
                    {{ $ServiceCategory->excerpt }}.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <div class="img-thumbnail">
                        <img class="img-responsive" src="{{asset( $ServiceCategory->image)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-md">
                <p>
                    {{ $ServiceCategory ->body }}.
                </p>
            </div>
        </div>

        <hr class="tall">

        <div class="row">

            <div class="col-md-12">
                <ul class="portfolio-list">
                    @foreach($ServiceCategory->$ServiceType as $ServiceType)
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item {{ $ServiceType->title }}">
                        <div class="portfolio-item">
                            <a href="{{ URL::to ('service-type') }}">
											<span class="thumb-info thumb-info-lighten">
												<span class="thumb-info-wrapper">
													<img src="{{asset( $ServiceType->image)}}" class="img-responsive" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">{!! $ServiceType->title or 'Service Type' !!}</span> <!-- PHP service type !-->
														<span class="thumb-info-type">{!! $ServiceCategory ->title or 'Service Category' !!}</span> <!-- PHP service category !-->
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
													</span>
												</span>
											</span>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div-->
	<?php echo json_encode($serviceCategory); ?>
    </div>

    @include('frontEnd.partials.global.call-to-action')

@endsection
