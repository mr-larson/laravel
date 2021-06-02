<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>edit personnes</h2>
    <form method="POST" action="/personne/{{ $personne->id }}/update">
        @csrf
        <div class="mb-3">
          <label  class="form-label">nom</label>
          <input type="email" class="form-control" value="{{ $personne->nom }}" name="nom">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">adresse</label>
          <input type="text" class="form-control" value="{{ $personne->adresse }}">
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <textarea class="form-control" name="" id="" cols="30" rows="10" name="description">{{ $personne->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>