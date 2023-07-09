@extends('layouts.app6')

@section('title')
    Cours
@endsection

@section('cours')
    mm-active
@endsection

@section('body')
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
                    @foreach ($cours as $c)
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('cours/' . $c->cours->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title cursor-pointer"><strong>{{$c->cours->title}}</strong></h6>
                                <div class="d-flex align-items-center mt-3 fs-6">
                                    <div class="cursor-pointer">
                                        <i class='bx bxs-star text-warning'></i>
                                        <i class='bx bxs-star text-warning'></i>
                                        <i class='bx bxs-star text-warning'></i>
                                        <i class='bx bxs-star text-warning'></i>
                                        <i class='bx bxs-star text-secondary'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
