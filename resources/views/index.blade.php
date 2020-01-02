<h1> entrer le groupe </h1>
<html>
    <body>
            <form methode="post" action="{{action('etudiantsController@index')}}">   
            <input type="text"  name ="gr" placeholder="groupe" />
            <input type="submit" value="afficher"/>
            </form>
        
    </body>
</html>
