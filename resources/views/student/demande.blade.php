@extends('layouts.app6')

@section('title')
    Demande
@endsection

@section('demande')
    mm-active
@endsection

@section('body')
    <div class="page-wrapper">
        <div class="page-content">
            <h6>Demande de Cours</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Niveau</th>
                                <th scope="col">Categorie</th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        @if ($demande)
                        @foreach ($demande as $item)
                        <tbody >
                            <tr>
                                <td>
                                    <img src="{{ asset('cours/' . $item->cours->image) }}" width="70"/>
                                    {{ $item->cours->title }}
                                </td>
                                <td style="padding: 20px">{{ $item->cours->niveau }}</td>
                                <td style="padding: 20px">{{ $item->cours->categorie }}</td>
                                <td style="padding: 20px">{{ $item->status }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                            
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
