@extends('myTemplate')

@section('title', 'Ajax test')

@section('content')
    <h2>Ajax call</h2>

    <div id="results"></div>
@endsection


@section('js')
    <script>
        fetch("{{ route('api_flowers') }}", {
                method: 'get',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            }).then(res => res.json())
            .then(function(result) {
                // Once AJAX call is done
                console.log(result);

                let htmlResult = '';
                result.forEach(element => {
                    htmlResult += element.name + ' / ' + element.price + '€<hr>';
                });

                document.getElementById('results').innerHTML = htmlResult;
            });
    </script>
@endsection
