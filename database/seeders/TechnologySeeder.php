<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'technology_name' => 'HTML',
                'description' => 'HTML (HyperText Markup Language) è un linguaggio di markup utilizzato per la creazione e la strutturazione di pagine web. Attraverso tag e attributi, definisce la struttura, il contenuto e la formattazione dei documenti web, inclusi testo, immagini, link e altri elementi multimediali.'
            ],
            [
                'technology_name' => 'JS',
                'description' => 'JavaScript (JS) è un linguaggio di programmazione utilizzato per aggiungere interattività e dinamicità alle pagine web. Esso consente di manipolare gli elementi HTML, gestire eventi, creare animazioni e comunicare con i server. È un linguaggio versatile, supportato dalla maggior parte dei browser, che consente di sviluppare applicazioni web complesse e moderne.',
            ],
            [
                'technology_name' => 'PHP',
                'description' => 'PHP (Hypertext Preprocessor) è un linguaggio di scripting open-source utilizzato principalmente per lo sviluppo di siti web dinamici e applicazioni web. Con una vasta libreria di funzioni integrate, PHP può interagire con database, gestire sessioni utente, elaborare moduli web e generare contenuti dinamici. È incorporato direttamente nell\'HTML e può essere eseguito su molti server web, rendendolo una scelta popolare per lo sviluppo web.',
            ],
            [
                'technology_name' => 'CSS',
                'description' => 'CSS (Cascading Style Sheets) è un linguaggio di stile utilizzato per definire l\'aspetto e la presentazione dei documenti HTML e XML. Con CSS, è possibile controllare il layout, i colori, i tipi di carattere e altri aspetti visivi di una pagina web. Attraverso regole di stile e selezioni di elementi, CSS consente di separare la struttura del documento dalla sua presentazione, facilitando la creazione di design coerenti e responsivi per siti web.',
            ],
            [
                'technology_name' => 'SCSS',
                'description' => 'SCSS (Sassy CSS) è una forma estesa di CSS che offre funzionalità avanzate come variabili, nesting, mixin e altro ancora. Con una sintassi simile a quella di CSS, SCSS semplifica la scrittura e la manutenzione del codice CSS, consentendo una maggiore modularità e riutilizzo delle regole di stile. Essendo compatibile con CSS, può essere facilmente integrato nei progetti esistenti.',
            ],
            [
                'technology_name' => 'PYTHON',
                'description' => 'Python è un linguaggio di programmazione ad alto livello, versatile e facile da imparare. Con una sintassi chiara e leggibile, è ampiamente usato per lo sviluppo web, l\'analisi dei dati, l\'intelligenza artificiale, l\'automazione dei processi e altro ancora. La sua vasta libreria standard e la grande comunità lo rendono ideale per una varietà di progetti e applicazioni.',
            ],
        ];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();

            $newTechnology->technology_name = $technology['technology_name'];
            $newTechnology->description = $technology['description'];
            $newTechnology->save();
        }
    }
}