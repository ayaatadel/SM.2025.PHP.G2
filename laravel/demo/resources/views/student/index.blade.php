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
    <h1 class="text-info text-center m-5  ">All Studenta Data</h1>
    {{-- @dump($students) --}}
    <table class="table table-bordered w-75 m-auto p-1 text-center">
        <thead>

                <th>id</th>
                <th>Name</th>
                <th>email</th>
              <th>gender</th>
              <th>Actions</th>

        </thead>

        </tr>
        </thead>
        <tbody>
@foreach($students as $student)
<tr>
    <td>{{ $student->id }}</td>
    <td>{{ $student->name }}</td>
    <td>{{ $student->email}}</td>
    <td>{{ $student->gender }}</td>
      <td class="p-2">
             <a class="text-decoration-none" href="{{ route('students.show',$student->id ) }}">
               <button class="btn btn-warning">View</button></a>

               <form action="{{ route('students.destroy',$student->id ) }}" method="post">
                 @method('delete')
                 @csrf
                 <button class="btn btn-danger">Delete</button>
               </form>
            </td>
</tr>

@endforeach
        </tbody>


    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
