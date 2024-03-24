<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Teams Table</title>
</head>
<body>
    
<div class="container mt-4">
    <h1 class="text-center">Teams Table</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Team</th>
                <th>City</th>
                <th>Conference</th>
                <th>Division</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($teams as $item)
<tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->city_name }}</td> 
    <td>{{ $item->conference_title }}</td> 
    <td>{{ $item->division_name }}</td> 
</tr>
@endforeach
        </tbody>
    </table>
</div>

</body>
</html>
