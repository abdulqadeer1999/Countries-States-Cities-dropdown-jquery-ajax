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
        // country city state | start
    $('#country-dropdown').on('change', function() {
            var id = $(this).val();
            // alert(id);
            $.ajax({
                type: "GET",
                url: '{{ url('fetch-state') }}',
                data: {
                    'id': id
                },
                beforeSend: function(){
                    $("#preloader").show()
                },
                success: function(response) {
                    $("#preloader").hide()
                    // $("#state-dropdown option:first").attr('selected','selected');
                    $('#state-dropdown').html('');
                    $('#city-dropdown').html('');
                    if (response.status == 200) {

                        // console.log(response);
                        $.each(response.states, function(value, i) {
                            // console.log(response);

                            $('#state-dropdown').append('<option value ="' + i.id + '">' + i.name +
                                '</option>');


                                if(value == 0){
                                // console.log(i.id);
                                $.ajax({
                                        type: "GET",
                                        url: '{{ url('fetch-city') }}',
                                        data: {
                                            'id': i.id
                                        },
                                        success: function(response) {
                                            if (response.status == 200) {
                                                // alert("200")
                                                // console.log(response)
                                                $('#city-dropdown').html('');
                                                $.each(response.cities, function(index, val) {
                                                    // console.log(response);
                                                    $('#city-dropdown').append('<option value="' + val.id + '">' + val.name +
                                                        '</option>');
                                                });
                                            }else {
                                                $('#city-dropdown').html('');
                                                $('#city-dropdown').append('<option>City Not Found!</option>');
                                            }
                                        }
                                    });
                                }
                            });


                    } else {
                        $("#state-dropdown").html("");
                        $('#state-dropdown').append('<option>State Not Found</option>');
                    }
                }
            });
        });

        $('#state-dropdown').on('change', function() {
            var id = $(this).val();
            // $("#state-dropdown").click();

            $.ajax({
                type: "GET",
                url: '{{ url('fetch-city') }}',
                data: {
                    'id': id
                },
                beforeSend: function(){
                    $("#preloader").show()
                },
                success: function(response) {
                    $("#preloader").hide();

                    if (response.status == 200) {
                        // alert("200")
                        // console.log(response)
                        $('#city-dropdown').html('');
                        $.each(response.cities, function(value, i) {
                            // console.log(response);
                            $('#city-dropdown').append('<option value ="' + i.id + '">' + i.name +
                                '</option>');
                        });
                    }else {
                        $('#city-dropdown').html('');
                        $('#city-dropdown').append('<option>City Not Found!</option>');
                    }
                }
            });
        });
// country city state | end
    </script>
        </body>
</html>
