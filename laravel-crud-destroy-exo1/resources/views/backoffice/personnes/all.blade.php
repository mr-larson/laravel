<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personnes</title>
</head>
<body>

    <section class="container bg-success">
        
        <h1>tableau de personnes</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($personnes as $personnes)
                    <tr>
                        <th scope="row">{{ $personne->id }}</th>
                        <td>{{ $personne->nom }}</td>
                        <td>{{ $personne->prenom }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary text-white" href="/personne/{{ $personne->id }}/edit">Edit</a>
                            <form action="/personne/{{ $personne->id }}/delete" method="POST">
                                @csrf
                                <button class="btn btn-danger text-white" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
           
    </section>
    
</body>
</html>