
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>PowerZone|Login</title>
</head>
<body>
  <div class="container w-80 my-2 bg-light p-5" >
    <h3> se connecter </h3>
  <form method="post" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
      <label for="emailRespo" class="form-label">Email</label>
      <input type="text" class="form-control"  name="email">
      @error('email')
      {{ $message }}
        
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary"  >Submit</button>
  </form>
  </div>
</body>
</html>

