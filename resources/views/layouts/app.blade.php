<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-pb15T5e0TtZ0bXQF5E0gXGzVjzQb+1X7J3Ht7+nXlf8fE5s5+0lG7oBvFQhMjP3G01u6+fJvC8LwR4Y+9l4H5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Pratama Jaya Group</title>
</head>

<body>

    @include('layouts.navbar')

    @yield('content')

</body>

</html>
