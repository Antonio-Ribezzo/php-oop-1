<?php
include __DIR__ . '/../models/movie.php';
include __DIR__ . '/../models/category.php';



    $arrayMovie = [
        new Film( "Star Wars", "1977", "George Lucas", "https://posters.movieposterdb.com/22_11/1983/251413/l_star-wars-movie-poster_911ecf5a.jpg",[new Category('Adventure'), new Category('Science')]),
        new Film( "Pulp Fiction", "1994", "Quentin Tarantino","https://posters.movieposterdb.com/07_10/1994/110912/l_110912_55345443.jpg",[new Category('Crime'), new Category('Thriller')]),
        new Film( "Jurassic Park", "1993", "Steven Spielberg","https://posters.movieposterdb.com/22_12/1993/478182/l_jurassic-park-movie-poster_67ec4606.jpg",[new Category('Adventure'), new Category('Fantasy')]),
        new Film( "Taxi Driver", "1976", "Martin Scorsese","https://posters.movieposterdb.com/21_06/1976/75314/l_75314_a3d1031e.jpg",[new Category('Drama'), new Category('Crime')]),
        new Film( "Twin Peaks", "1990", "David Lynch","https://posters.movieposterdb.com/15_09/1990/98936/l_98936_95016962.jpg",[new Category('Mistery')]),
        new Film( "Volver", "2006", "Pedro Almodovar","https://posters.movieposterdb.com/08_03/2006/441909/l_441909_cb199e4a.jpg",[new Category('Drama'), new Category('Comedy')]),
    ]
?>