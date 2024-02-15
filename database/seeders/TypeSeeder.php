<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'type' => 'Front-End',
                'description' => 'Il front end è la parte di un\'applicazione o di un sito web con cui gli utenti interagiscono direttamente. È responsabile della presentazione e dell\'interfaccia utente, inclusi layout, colori, tipi di carattere, icone, e tutti gli elementi visibili e interattivi che un utente può vedere e con cui può interagire. In sostanza, il front end si occupa di rendere l\'esperienza utente intuitiva, gradevole e funzionale. Questa parte del sistema comunica con il back end per recuperare e/o elaborare i dati necessari per mostrare le informazioni all\'utente. Solitamente, il front end è sviluppato utilizzando linguaggi di programmazione come HTML, CSS e JavaScript.',

                'technologies' => 'HTML, JS',
            ],
            [
                'type' => 'Back-End',
                'description' => 'Il back end è la parte invisibile di un\'applicazione o di un sito web che gestisce l\'elaborazione dei dati e la logica di business. Include il server, il database e l\'applicazione stessa. Le sue responsabilità principali comprendono l\'elaborazione dei dati, la gestione del database, la sicurezza, la gestione degli utenti e la gestione delle richieste degli utenti. In breve, il back end garantisce il corretto funzionamento e la sicurezza dell\'applicazione, gestendo gli aspetti non visibili agli utenti finali.',
                'technologies' => 'PHP',
            ],
            [
                'type' => 'Full-Stack',
                'description' => 'Certamente! Il termine "full stack" si riferisce a un tipo di sviluppatore che è in grado di lavorare sia sul front end che sul back end di un\'applicazione. Un \"full stack developer\" ha competenze sia nella creazione dell\'interfaccia utente che nella gestione dei server, dei database e della logica di business. In altre parole, sono in grado di occuparsi di tutti gli aspetti dell\'intero stack tecnologico di un\'applicazione, dalla parte visibile agli utenti fino a quella invisibile. Questo include la progettazione e lo sviluppo della parte front end, che gestisce \'aspetto e l\'interattività dell\'applicazione, e la parte back end, che gestisce l\'elaborazione dei dati e la logica di business. Inoltre, un full stack developer è in grado di comprendere e lavorare con una varietà di tecnologie e linguaggi di programmazione utilizzati in entrambe le parti dell\'applicazione. In sintesi, un full stack developer è un professionista versatile che può contribuire a diversi aspetti dello sviluppo di un\'applicazione, dall\'inizio alla fine.',
                'technologies' => 'TUTTE',
            ],
        ];

        foreach ($types as $type) {
            $newType = new Type();

            $newType->type = $type['type'];
            $newType->description = $type['description'];
            $newType->technologies = $type['technologies'];
            $newType->save();
        }
    }
}