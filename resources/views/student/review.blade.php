@extends('layouts.app6')

@section('title')
    Review
@endsection

@section('review')
    mm-active
@endsection

@section('body')
    <div class="page-wrapper" data-select2-id="25">
        <div class="page-content" data-select2-id="24">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Review</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">cours</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <br><br>
            @if (session()->has('succes'))
                <div class="alert alert-success">
                    {{ session()->get('succes') }}
                </div>
            @endif
            @if (session()->has('fail'))
                <div class="alert alert-danger">
                    {{ session()->get('fail') }}
                </div>
            @endif
            <form method="post" action="{{ route('student.addreview') }}">
                @csrf
                <div class="row" data-select2-id="23">
                    <div class="col-xl-9 mx-auto" data-select2-id="22">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <div class="mb-3" data-select2-id="21">
                                        <label class="form-label">Cours</label>
                                        <select class="single-select select2-hidden-accessible" data-select2-id="1" name="cours_id"
                                    tabindex="-1" aria-hidden="true">

                                            @foreach ($cours as $a)
                                                <option value="{{ $a->cours->id }}">{{ $a->cours->title }}</option>
                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="mb-3">
                                        <input type="text" value="{{ auth('etd')->user()->id }}" name="etds_id" hidden>
                                    </div>

                                    <div class="mb-3">
                                        <textarea class="form-control" name="des"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Add</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end row-->
        </div>
    </div>
@endsection
