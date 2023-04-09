<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title> {{ $first_name ?? 'Contact Book' }} </title>
</head>
<body class="d-flex flex-column min-vh-100">
    <main class="container">
        <div class="row">
            <div class="col">
                {{ $slot }}
            </div>
        </div>
    </main>
    <footer class="bg-dark py-4 mt-auto">
        <p class="text-center text-light"> By Marina Wolff </p>
    </footer>
</body>
</html>