<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tracks Data</title>
    <x-bootstrap-css></x-bootstrap-css>

</head>

<body>
    <x-navbar></x-navbar>
 <div class="d-flex justify-content-around">
       <h1 class="text-success text-center m-5  ">{{ $track->Name}}</h1>
    {{-- @dump($tracks) --}}

    <div class="m-5">
            <a class="text-decoration-none" href="{{ route('tracks.create' ) }}">
               {{-- <button class="btn btn-info">Create New track</button> --}}
                 <x-button class="info" name="Create New track"/>
            </a>

    </div>
<a href="{{route('tracks.index')  }}"> <x-button class="success m-5" name="Back"></x-button>
</a>
 </div>
    <table class="table table-bordered w-75 m-auto p-1 text-center">
        <thead>

                <th>id</th>
                <th>Name</th>
                <th>Description</th>
              <th>Img</th>
              <th>Actions</th>

        </thead>

        </tr>
        </thead>
        <tbody>

<tr>
    <td>{{ $track->id }}</td>
    <td>{{ $track->name }}</td>
    <td>{{ $track->description}}</td>
    <td><img src="{{ $track->image }}" alt="{{$track->name}}" srcset="" width="100px" height="100px"></td>
      <td class="p-2 d-flex justify-content-around">
          <div>
               <a class="text-decoration-none" href="{{ route('tracks.show',$track->id ) }}">
               {{-- <button class="btn btn-warning">View</button> --}}

               <x-button class="warning" name="View"/>
            </a>

          </div>
               <form action="{{ route('tracks.destroy',$track->id ) }}" method="post">
                 @method('delete')
                 @csrf
                 <x-button class="danger" name="Delete"></x-button>
               </form>
<div>

                 <a class="text-decoration-none" href="{{ route('tracks.update',$track->id ) }}">
               <x-button class="info" name="Update"></x-button></a>
</div>
            </td>
</tr>

        </tbody>


    </table>



    {{-- students in track   array--}}
{{-- @dd($track->students ) --}}

@if($track->students )
    <h2 class="text-center text-success my-5">Track : {{ $track->name }} Students</h2>
    <table class="table table-bordered w-75 m-auto p-1 text-center">
        <thead>
        <td>Name</td>
        <td>Email</td>
        <td>Age</td>
        </thead>
        <tbody>
            @foreach($track->students as $student)

            <tr>
                <td>
                    <a href="{{ route('students.show',$student->id) }}">
                    {{ $student->name }}</a>
                </td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->age }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif
<x-footer></x-footer>
<x-bootstrap-js></x-bootstrap-js>

</body>

</html>
