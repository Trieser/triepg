<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trie World</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Pastikan CSS dipanggil dengan benar -->
</head>

<body>
    @include('layouts.header') <!-- Memanggil header -->
    
    <div class="wrapper">
        @include('layouts.sidebar') <!-- Memanggil sidebar -->
        
        <div class="main-content">
            @include('pages.dashboard') <!-- Memanggil dashboard -->
        </div>
    </div>
</body>

</html>
