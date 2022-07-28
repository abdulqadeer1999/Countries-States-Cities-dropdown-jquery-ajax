<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel AJAX Dependent Country State City </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-primary mb-4 text-center">
                   <h4 >Laravel AJAX Dependent Country State City Dropdown </h4>
                </div>
                <form>
                    <div class="form-group mb-3">
                        <select  id="country-dropdown" class="form-control">
                            <option value="">-- Select Country --</option>
                            @foreach ($countries as $data)
                            <option value="{{$data->id}}">
                                {{$data->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <select id="state-dropdown" class="form-control" placeholder="Select State">
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="city-dropdown" class="form-control">
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $('#country-dropdown').on('change', function() {
            var id = $(this).val();
            // alert(id);
            $.ajax({
                type: "GET",
                url: '{{ url('fetch-state') }}',
                data: {
                    'id': id
                },
                success: function(response) {
                    console.log(response.clients);
                    $("#pageloader").hide()
                    $('#state-dropdown').html('');
                    $('#city-dropdown').html('');
                    if (response != '') {
                        $.each(response.clients, function(value, i) {
                            console.log(response);
                            $('#state-dropdown').append('<option value ="' + i.id + '">' + i.name +
                                '</option>');
                        });
                    } else {
                        $('#state-dropdown').append('<h3>No City Found</h3>');
                    }
                }
            });
        });

        $('#state-dropdown').on('change', function() {
            var id = $(this).val();
            // alert(id);
            $.ajax({
                type: "GET",
                url: '{{ url('fetch-city') }}',
                data: {
                    'id': id
                },
                // dataType: 'json',
                //  cache: false,
                success: function(response) {
                    console.log(response.clients);
                    $("#pageloader").hide()
                    $('#city-dropdown').html('');
                    if (response != '') {
                        $.each(response.clients, function(value, i) {
                            console.log(response);
                            $('#city-dropdown').append('<option value ="' + i.id + '">' + i.name +
                                '</option>');
                        });
                    } else {
                        $('#city-dropdown').append('<h3>No City Found</h3>');
                    }
                }
            });
        });
    </script>
        </body>
</html>
