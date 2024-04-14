@extends('master')

@section('content')
    <div class="row" style="margin-top: 24px ">
        <div class="col-md-4">
            <livewire:Posts.components.PostAdd />

        </div>
        <div class="col-md-8">
            <livewire:Posts.components.Posts />

        </div>

    </div>
@endsection
