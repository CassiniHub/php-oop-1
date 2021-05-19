<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie
{
    public $title;
    public $description;

    public function __construct(string $title, string $description = '')
    {
        $this -> title = $title;

        if ($description === '') {
            $this -> description = 'No description';
        } else {
            $this -> description = $description;
        }
    }

    public function getString() {
        return 'Movie: ' . $this -> title . "\n"
             . 'Description: ' . $this -> description
             ;
    }
}

class HomeController extends Controller
{    

    public function home() {

        $movie1 = new Movie("Ritorno al futuro", "Il diciottenne Marty ha come amico un bislacco scienziato che ha inventato una macchina per viaggiare nel tempo. Grazie ad essa Marty tornerà indietro nel tempo, fino al 1955.");
        $movie1str = $movie1 -> getString();

        $movie2 = new Movie("La dolce vita", "Personaggio centrale è il giornalista Marcello Rubini, testimone e complice di un mondo caotico e volgare, cinico, privo di valori e soprattutto minato da un'insopportabile noia di vivere.");
        $movie2str = $movie2 -> getString();
        


        dd($movie1, $movie1str, $movie2, $movie2str);
        return view('home');
    }
}
