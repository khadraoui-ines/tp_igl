
<!-- View stored in resources/views/index.blade.php -->

<html>
    <body>

        @foreach($fins as $fin)
        <h1> {{ $fin->matricule }}, {{ $fin->name }},{{ $fin->date_naissance }}, {{ $fin->groupe }}</h1>


        @endforeach



    </body>
</html>
