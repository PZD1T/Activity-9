<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>


</style>
<body>
    
<div class="container mt-4">
    <h1 class="text-center">Conferences Table</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Number</th>
                <th>Conferences</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($conferences as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->Title}}</td>
            <td>{{$item->Conference}}</td>

        </tr>

        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>
