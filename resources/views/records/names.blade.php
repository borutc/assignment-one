@extends('layouts.app')

@section('content')
    <h1>Names page</h1>
    <div>
        <a href="{{route('home')}}">Back</a>
    </div>
    <div class="alert"></div>
@endsection

@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            getNames();
        });
        function getNames() {
            $.ajax({
                url: 'https://randomuser.me/api/?results=55&inc=name&nat=us,dk,fr,gb',
                dataType: 'json',
                success: function(data) {
                    var test = [];
                    for(var i=0; i < data.results.length; i++){

                        tmp = {};
                        tmp['title'] = data.results[i].name.title;
                        tmp['first'] = data.results[i].name.first;
                        tmp['last'] = data.results[i].name.last;

                        test.push(tmp);
                    }
                    var a = Object.assign({}, test);
                    $.ajax({
                    type: "POST",
                    url: "{{ url('/addNames')}}",
                    data: a,
                    success: function(data){
                       $('.alert').append(data.text);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("Status: " + textStatus);
                        alert("Error: " + errorThrown);
                    }
                    });
                    }

            });
        }
    </script>
@endpush