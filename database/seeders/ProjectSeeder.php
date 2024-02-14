<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
               [
                "titolo" => "Comics",
                "descrizione" => "I comics possono coprire una vasta gamma di generi e argomenti, tra cui supereroi, fantasy, avventura, horror, umorismo e molto altro ancora. Sono popolari in tutto il mondo e hanno una lunga storia che risale a decenni.
                    Tra i più famosi editori di fumetti ci sono Marvel Comics e DC Comics, noti soprattutto per i loro universi di supereroi come Spider-Man, Batman, Superman, X-Men e molti altri. "
               ],
            [
                "titolo" => "Pokemon",
                "descrizione" => " mondo di Pokémon è abitato da creature chiamate Pokémon, che gli allenatori possono catturare e addestrare. 
                Ci sono centinaia di specie di Pokémon, ognuna con caratteristiche e abilità uniche. Alcuni Pokémon possono volare, altri possono nuotare, altri ancora possono lanciare potenti attacchi elementali."
            ],
            [
                "titolo" => "Spotify",
                "descrizione" => "Spotify è una piattaforma di streaming musicale che consente agli utenti di ascoltare una vasta gamma di brani musicali, album, podcast e altro ancora su richiesta attraverso Internet."
            ],
            [
                "titolo" => "Dropbox",
                "descrizione" => "Dropbox è un servizio di archiviazione cloud che consente agli utenti di caricare, archiviare e condividere file e documenti digitali su Internet."
            ],
     
       ];

       foreach ($projects as $project) {
        Project::create($project); 
    }
    }
}
