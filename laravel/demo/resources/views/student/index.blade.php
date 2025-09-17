<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>students Data</title>
    <x-bootstrap-css></x-bootstrap-css>

</head>

<body>
    <x-navbar></x-navbar>
 <div class="d-flex justify-content-around">
       <h1 class="text-success text-center m-5  ">All Studenta Data</h1>
    {{-- @dump($students) --}}

    <div class="m-5">
            <a class="text-decoration-none" href="{{ route('students.create' ) }}">
               {{-- <button class="btn btn-info">Create New Student</button> --}}
                 <x-button class="info" name="Create New Student"/>
            </a>

    </div>
<a href="{{route('home')  }}"> <x-button class="success m-5" name="Home"></x-button>
</a>
 </div>
    <table class="table table-bordered w-75 m-auto p-1 text-center">
        <thead>

                <th>id</th>
                <th>Name</th>
                <th>Image</th>
              <th>Gender</th>
              <th>Actions</th>

        </thead>

        </tr>
        </thead>
        <tbody>
@foreach($students as $student)
<tr>
    <td>{{ $student->id }}</td>
    <td>{{ $student->name }}</td>
    <td> <img src="{{ $student->image}}" alt="{{ $student->name}}" srcset="" width="100px" height="100px"> </td>
    <td>{{ $student->gender }}</td>
      <td class="p-2 d-flex justify-content-around">
          <div>
               <a class="text-decoration-none" href="{{ route('students.show',$student->id ) }}">
               {{-- <button class="btn btn-warning">View</button> --}}

               <x-button class="warning" name="View"/>
            </a>

          </div>
               <form action="{{ route('students.destroy',$student->id ) }}" method="post">
                 @method('delete')
                 @csrf
                 <x-button class="danger" name="Delete"></x-button>
               </form>
<div>

                 <a class="text-decoration-none" href="{{ route('students.update',$student->id ) }}">
               <x-button class="info" name="Update"></x-button></a>
</div>
            </td>
</tr>

@endforeach
        </tbody>


    </table>
<div class="text-center p-3 w-75 mx-auto my-3">
    {{ $students->links() }}

</div>
    <x-footer></x-footer>
<x-bootstrap-js></x-bootstrap-js>

</body>

</html>
