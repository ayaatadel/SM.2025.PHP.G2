<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>create Student</title>
</head>
<body>
    {{-- @dump($student) --}}
<h1 class="text-info text-center m-5 text-capitalize">Update <span class="text-danger">{{ $student->name }} </span>Profile </h1>

<form method="POST" action="{{ route('students.edit',$student->id) }}" class="rounded w-75 mx-auto my-5 border p-5" >
 @csrf
 @method('put')
    <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name </label>
    <input  value="{{ $student->name }}" name="name" type="text" class="form-control" id="exampleInputName1" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input  value="{{ $student->email }}"  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputGender1" class="form-label">Gender </label>
    <input value="{{ $student->gender }}"   name="gender" type="text" class="form-control" id="exampleInputGender1" >
  </div>


  <button type="submit" class="btn btn-primary">Edit</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
