@extends('layout/main')

@section('tittle', 'Class')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <ul class="tilesWrap">
                @foreach($kelas as $k)
                    <li>
                    {{ $k }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection