<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>students Data</title>
</head>

<body>
    <h1 class="text-info text-center m-5  "> Student Data</h1>
    {{-- @dd($student->track) --}}
    <table class="table table-bordered w-75 m-auto p-1 text-center ">
        <thead>

                <th>id</th>
                <th>Name</th>
                <th>email</th>
              <th>gender</th>
              <th>address</th>
              <th>Image</th>
              <th>Age</th>
                 @if($student->track_id )
                <th>Track Name</th>
                @endif
              <th>Actions</th>

        </thead>

        </tr>
        </thead>
        <tbody>

<tr>
    <td>{{ $student->id }}</td>
    <td>{{ $student->name }}</td>
    <td>{{ $student->email}}</td>

    <td>{{ $student->gender }}</td>
    <td>{{ $student->address }}</td>
    <td> <img src="{{ $student->image}}" alt="{{ $student->name}}" srcset="" width="100px" height="100px"> </td>
<td>{{ $student->age }}</td>
@if($student->track_id)
    <td class="text-center" >
     <a  class="text-danger  text-decoration-none "href="{{ route('tracks.show',$student->track_id) }}">   {{ $student->track->name}}</a>
    </td>
    @endif
    <td class="p-2">
        <a class="text-decoration-none" href="{{ route('students.index') }}">
                        <button class="btn btn-info">Back</button>

        </a>
                <button class="btn btn-danger">Delete</button>
            </td>
</tr>


        </tbody>


    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>

