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
    <x-navbar/>
<h1 class="text-info text-center m-5">Create New Student </h1>
{{-- handel errors --}}
{{-- @if ($errors->any())
    <div class="alert alert-danger text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li >{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form method="POST" action="{{ route('students.store') }}" class="rounded w-75 mx-auto my-5 border p-5" >
 @csrf
 {{-- name --}}
 @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name </label>
    <input  name="name" type="text" class="form-control" id="exampleInputName1" >
  </div>

  {{-- email --}}
   @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
   {{-- gender --}}
   @error('gender')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="mb-3">
    <label for="gender" class="form-label">Gender </label>
    <br>
    <label for="male" class="form-label">male</label>
    <input type="radio" name="gender" id="male" value="male">
    <label for="female" class="form-label">female</label>
    <input type="radio" name="gender" id="female" value="female">
    {{-- <input value="{{ $student->gender }}"   name="gender" type="text" class="form-control" id="exampleInputGender1" > --}}
  </div>
   {{-- image --}}
   @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 <div class="mb-3">
    <label for="exampleInputimage1" class="form-label">image </label>
    <input    name="image" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

   {{-- address --}}
   @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
    <label for="exampleInputaddress1" class="form-label">address </label>
    <input    name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
   {{-- age --}}
   @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
    <label for="exampleInputage1" class="form-label">age </label>
    <input  name="age" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Add New Student</button>

</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
