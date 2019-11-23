<h1> liste des etudiants</h1>
<html>
    <body>
                    @foreach($etudiants as $etudiant)
                    <?php echo 'matricule :'.$etudiant->matricule ?>
                    <br>
                    @endforeach
    </body>
</html>