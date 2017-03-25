
@extends('frontEnd.layouts.page')
@section('PageContent')

    <!--- Test Variables !--->

    <!--- End test variables !--->

    <div class="container">

        <div class="row pt-sm mb-xl">
            <div class="col-md-3">
                <aside class="sidebar">

                    @include('frontEnd.partials.global.sidebar')

                </aside>

            </div>
            <div class="col-md-9">

                <h2 class="mb-sm">{{ $service_type->title }}</h2>

                <p class="lead mb-xl mt-lg">{{ $service_type->excerpt }}</p>
                <div class="row">
                    <div class="col-md-7 align-right">
                        <div class="img-thumbnail mb-xlg">
                            <div>
                                <img src="{{ asset($service_type->image) }}" class="img-responsive img-rounded" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <p>{{ $service_type->body }}</p>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg">
                <h2 class="align-center mb-none">Select the Language of Your <strong>{{ $service_type->title }}</strong></h2>
                <div class="divider divider-short divider-full divider-primary"> <hr> </div>

                    <!--- Service Language Menu !--->
                    @include('frontEnd.partials.global.service-lang')
                         <!-- End Service Language Menu !-->

            </div>
        </div>
    </div>

    <hr class="tall">

    @endsection

         <!-- Call To Action !-->
            @include('frontEnd.partials.global.call-to-action')
                <!-- End Call To Action !-->