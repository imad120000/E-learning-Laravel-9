@extends('layouts.app6')

@section('title')
    Demande
@endsection

@section('meet')
    mm-active
@endsection

@section('body')
    <div class="page-wrapper">
        <div class="page-content">
            <h6>Meet</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Niveau</th>
                                <th scope="col">Cours</th>
                                <th scope="col">Date Meet</th>
                                <th scope="col">Lien Meet</th>
                            </tr>
                        </thead>
                        @if ($meet)
                            @foreach ($meet as $item)
                                <tbody>
                                    <tr>
                                        <td style="padding: 20px">{{ $item->meet_title }}</td>
                                        <td style="padding: 20px">{{ $item->target_niveau }}</td>
                                        <td style="padding: 20px">{{ $item->target_cours }}</td>
                                        <td style="padding: 20px">{{ $item->meet_date }}</td>
                                        <td style="padding: 20px"><a href="{{ $item->jitsi_meet_url }}" target="_blank">{{ $item->jitsi_meet_url }}</a></td>
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
