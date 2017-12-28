@extends('layouts.app')

@section('content')
        <h1>Records page</h1>
        <div>
                <a href="{{route('home')}}">Back</a>
        </div>
        <div class="records">
                @include('records.records')
        </div>

@endsection

@push('scripts')
        {{--<script>--}}
            {{--$(document).ready(function() {--}}
                {{--$(document).on('click', '.pagination a', function (e) {--}}
                    {{--getRecords($(this).attr('href').split('page=')[1]);--}}
                    {{--e.preventDefault();--}}
                {{--});--}}
            {{--});--}}
            {{--function getRecords(page) {--}}
                {{--$.ajax({--}}
                    {{--url : '?page=' + page,--}}
                    {{--dataType: 'json',--}}
                {{--}).done(function (data) {--}}
                    {{--$('.records').html(data);--}}
                    {{--location.hash = page;--}}
                {{--}).fail(function () {--}}
                    {{--alert('Records could not be loaded.');--}}
                {{--});--}}
            {{--}--}}
        {{--</script>--}}
@endpush
