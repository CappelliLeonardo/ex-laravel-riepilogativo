# Passi da fare per poter utilizzare il template di Laravel

0. Creo la repository a partire dal template e mi clono la repository appena creata

1. Copio il file .env.example e lo rinomino in .env

2. Apro il terminale ed eseguo il comando composer install

3. Sempre nel terminale, al termine del comando composer install, eseguo il comando php artisan key:generate

4. Sempre nel terminale, al termine dell'esecuzione di php artisan key:generate, eseguiamo il comando npm install (oppure, npm i)

5. Sempre nel terminale, al termine di npm install, eseguire il comando npm run build
- Al posto di npm run build, potreste eseguire npm run dev e lasciarlo attivo

6. Aprire un altro terminale ed eseguire il comando php artisan serve

Sviluppare un'applicazione web per la gestione di contenuti multimediali, come film e libri. L'applicazione deve consentire agli utenti di visualizzare una lista completa di film e libri e di vedere i dettagli di ciascun elemento.
Requisiti Funzionali:
Creazione dei Modelli: Creare due modelli: uno per i film e uno per i libri. Ogni modello deve includere i campi appropriati per memorizzare le informazioni relative ai contenuti multimediali, come titolo, autore/regista, genere, anno di pubblicazione/uscita, e una breve descrizione.
Creazione delle Migration: Creare le migrazioni per definire gli schemi del database per i modelli dei film e dei libri.
Creazione dei Seeder: Creare i seeder per popolare il database con dati di esempio per i film e i libri.
Creazione dei Controller: Creare i controller per gestire le rotte per la visualizzazione della lista completa dei film e dei libri, nonché per visualizzare i dettagli di ciascun film e libro.