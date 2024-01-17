<?php
return [
    'projects' => [
        [
            'title' => 'laravel-comics-2',
            "image" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png',
            'gitHub' => 'https://github.com/burillu/laravel-comics-2',
            'body' => 'Descrizione:
            Milestone 1
            Tramite gli appositi comandi artisan create un model con relativa migration e seeder e resource controller. Editate la resource route
            
            Milestone 2
            Iniziate a definire le prime operazioni CRUD con le relative view dove necessarie:
            
            index()
            show()
            create()
            store() (solo dump dei dati)
            Milestone 3
            Completare le operazioni CRUD.
            
            Milestone 4
            Sempre lavorando sulla repo di ieri, potete aggiungere le validazioni in modo da rendere più stabile il vostro gestionale di fumetti.
            
            Validare gli input ricevuti in fase di creazione e modifica, rispondendo con errori chiari e in italiano.
            Bonus:
            Procedere con il salvataggio dei dati sul db
            Aggiungere validazioni e messaggi di errore e alla cancellazione messaggio di conferma all\'utente
            utilizzare le Request personalizzate per validare i dati
            aggiungere conferma alla cancellazione degli elementi
            aggiungere un filtro a vostra scelta per i dati dei comics',
        ],
        [
            "title" => "vite-boolfix",
            "image" => "https://repository-images.githubusercontent.com/419951272/4313c939-0318-43bf-ba85-b78cca43dedc",
            'gitHub' => 'https://github.com/burillu/vite-boolflix',
            "body" => "In questo esercizio iniziamo a replicare la logica che sta dietro a tantissimi siti che permettono la visione di film e telefilm.
            Per fare questo, come fanno siti molto più rinomati, utilizzeremo un API che ci permette di avere un insieme di risultati congrui alla nostra ricerca.
            Milestone 0:
Progettare la struttura del global state sulla linea degli esercizi svolti nei giorni precedenti.

Milestone 1:
Creare un layout base con una searchbar (una input e un button) in cui possiamo scrivere completamente o parzialmente il nome di un film. Possiamo, cliccando il  bottone, cercare sull’API tutti i film che contengono ciò che ha scritto l’utente.
Vogliamo dopo la risposta dell’API visualizzare a schermo i seguenti valori per ogni film trovato: 
Titolo
Titolo Originale
Lingua
Voto

Milestone 2:
Trasformiamo la stringa statica della lingua in una vera e propria bandiera della nazione corrispondente, gestendo il caso in cui non abbiamo la bandiera della nazione ritornata dall’API (le flag non ci sono in FontAwesome).

Allarghiamo poi la ricerca anche alle serie tv. Con la stessa azione di ricerca dovremo prendere sia i film che corrispondono alla query, sia le serie tv, stando attenti ad avere alla fine dei valori simili (le serie e i film hanno campi nel JSON di risposta diversi, simili ma non sempre identici)
Qui un esempio di chiamata per le serie tv:
https://api.themoviedb.org/3/search/tv?api_key=e99307154c6dfb0b4750f6603256716d&language=it_IT&query=scrubs


Milestone 3:
In questa milestone come prima cosa aggiungiamo la copertina del film o della serie al nostro elenco. Ci viene passata dall’API solo la parte finale dell’URL, questo perché poi potremo generare da quella porzione di URL tante dimensioni diverse. Dovremo prendere quindi l’URL base delle immagini di TMDB: https://image.tmdb.org/t/p/ per poi aggiungere la dimensione che vogliamo generare (troviamo tutte le dimensioni possibili a questo link: https://www.themoviedb.org/talk/53c11d4ec3a3684cf4006400) per poi aggiungere la parte finale dell’URL passata dall’API.
Esempio di URL:
https://image.tmdb.org/t/p/w342/wwemzKWzjKYJFfCeiB57q3r4Bcm.png

Trasformiamo poi il voto da 1 a 10 decimale in un numero intero da 1 a 5, così da permetterci di stampare a schermo un numero di stelle piene che vanno da 1 a 5, lasciando le restanti vuote (troviamo le icone in FontAwesome).
Arrotondiamo sempre per eccesso all’unità successiva, non gestiamo icone mezze piene (o mezze vuote :P)

Milestone 4:
Trasformiamo quello che abbiamo fatto fino ad ora in una vera e propria webapp, creando un layout completo simil-Netflix:
Un header che contiene logo e search bar
Dopo aver ricercato qualcosa nella searchbar, i risultati appaiono sotto forma di “card” in cui lo sfondo è rappresentato dall’immagine di copertina (consiglio la poster_path con w342)
Andando con il mouse sopra una card (on hover), appaiono le informazioni aggiuntive già prese nei punti precedenti più la overview.

Consigli:
Andate in fila, seguendo le milestone, non pensate all’interfaccia grafica fino al punto 4
Non pensate all’interfaccia grafica fino al punto 4 (si, l’ho scritto due volte), tutto può essere risolto con una <ul> non stilizzata
Ricordatevi quanto imparato finora con le diverse esercitazioni:
Affrontate sempre prima il caso base minimo, senza complicazioni (ad es. “Se il titolo originale è uguale al titolo, magari dovrei nasconderlo”, “Se faccio una ricerca che non ha nessun risultato dovrei scrivere qualcosa” sono domande da NON FARSI fino a quando non si è fatto completamente un caso base)
Se ti viene volta di copiare/incollare codice, NON FARLO, fai una funzione! Quei pochi minuti risparmiati renderanno il tuo codice meno leggibile ed ogni volta che dovrai intervenire su quella parte perderai molto più tempo
Prima di andare avanti, assicurati di aver risolto quella parte nel miglior modo possibile (codice non ripetuto, minimo codice possibile, funzioni chiare e riutilizzabili). Risparmierai tantissimo tempo risolvendo gli esercizi successivi
Meglio risolvere una milestone in meno, ma con codice scritto bene.

SE HAI FINITO LE MILESTONE PRECEDENTI E VUOI ANDARE OLTRE, PUOI FARE LE MILESTONE SUCCESSIVE, MA SONO FACOLTATIVE:

Milestone 5 (Opzionale):
Partendo da un film o da una serie, richiedere all'API quali sono gli attori che fanno parte del cast aggiungendo alla nostra scheda Film / Serie SOLO i primi 5 restituiti dall’API con Nome e Cognome, e i generi associati al film con questo schema: “Genere 1, Genere 2, …”.

Milestone 6 (Opzionale):
Creare una lista di generi richiedendo quelli disponibili all'API e creare dei filtri con i generi tv e movie per mostrare/nascondere le schede ottenute con la ricerca.",
        ],
        [
            "title" => "proj-html-vuejs",
            "image" => "https://repository-images.githubusercontent.com/419951272/4313c939-0318-43bf-ba85-b78cca43dedc",
            'gitHub' => 'https://github.com/burillu/proj-html-vuejs',
            "body" => "Milestone 0
            Progettazione con Figma (preparazione delle variabili, schema del layout con la suddivisione delle varie sezioni);
            creazione della repo : proj-html-vuejs
            Scaffolding con vite;
            impostazione del font (Chakra Petch); -caricamento di Bootstrap e fontawesome;
            Milestone 1
            Creazione delle macroaree (header, main, footer);
            impostazione della struttura base di ogni macroarea e successivamente suddividere in componenti;
            cercare la posizione approsimativa dei vari oggetti che compongono l’hero(senza pensare alle animazioni);
            impostare i caroselli;
            Fine Primo giorno;
            
            Milestone 2
            impostare dei dati (array di oggetti ) per poter creare dinamicamente l’header ed il footer
            stessa cosa per i caroselli creati come componenti a parte;
            Milestone 3
            riprodurre animating counter (https://css-tricks.com/animating-number-counters/);
            l’header appare da 50vh in giù con classe bg diversa;
            Fine secondo giorno;
            
            Milestone 4
            migliorare la grafica;
            aggiunta degli effetti di comparsa quando la sezione è in primo piano;
            Milestone 5
            la freccetta che comparirà in basso a destra riporterà il primo piano sulla prima pagina;
            riprodurre i vari effetti hover sulle immagini, e sui pulsanti;
            riprodurre animazioni dei pianeti rotanti e omini che fluttuano
            animazione dei bottoni play che pulsano;",
        ],
        [
            "title" => 'vue-boolzapp',
            "image" => 'https://assets.stickpng.com/images/62a74f85223343fbc2207d05.png',
            'gitHub' => 'https://github.com/burillu/vue-boolzapp',
            "body" => 'Milestone 1
            Replica della grafica con la possibilità di avere messaggi scritti dall’utente (verdi) e dall’interlocutore (bianco) assegnando due classi CSS diverse
            Visualizzazione dinamica della lista contatti: tramite la direttiva v-for, visualizzare nome e immagine di ogni contatto
            Milestone 2
            Visualizzazione dinamica dei messaggi: tramite la direttiva v-for, visualizzare tutti i messaggi relativi al contatto attivo all’interno del pannello della conversazione
            Click sul contatto mostra la conversazione del contatto cliccato
            
            
            Milestone 3
            Aggiunta di un messaggio: l’utente scrive un testo nella parte bassa e digitando “enter” il testo viene aggiunto al thread sopra, come messaggio verde
            Risposta dall’interlocutore: ad ogni inserimento di un messaggio, l’utente riceverà un “ok” come risposta, che apparirà dopo 1 secondo.
            Milestone 4
            Ricerca utenti: scrivendo qualcosa nell’input a sinistra, vengono visualizzati solo i contatti il cui nome contiene le lettere inserite (es, Marco, Matteo Martina -> Scrivo “mar” rimangono solo Marco e Martina)
            Milestone 5 - opzionale
            Cancella messaggio: cliccando sul messaggio appare un menu a tendina che permette di cancellare il messaggio selezionato.
            Visualizzazione ora e ultimo messaggio inviato/ricevuto nella lista dei contatti 

Consigli utili:
Si possono trascurare le scrollbar verticali, sia nel pannello dei messaggi, che nella lista dei contatti
I pulsanti e le icone possono non funzionare (a parte l’invio del messaggio)
Per gestire le date, può essere utile la libreria Luxon
La struttura dell’array dei contatti potrebbe avere questa forma:

            '
        ],
        [
            'title' => 'html-css-bootstrap-dashboard',
            'image' => 'https://avatars.githubusercontent.com/u/2918581?s=280&v=4',
            'gitHub' => 'https://github.com/burillu/html-css-bootstrap-dashboard',
            'body' => 'Descrizione
    Ricreiamo il layout responsive di una dashboard, ovvero il pannello di controllo di una ipotetica applicazione web, seguendo gli screenshot allegati. La richiesta è realizzarlo utilizzando Bootstrap 5. Teniamo sempre sotto mano la documentazione della libreria per usare le caratteristiche principali nel modo corretto. Potrebbero tornarci utili anche classi helper, utilities etc. Avrete due giorni per completare il layout, come sempre partite dall’analisi delle macroaree. Di questo cercate anche di capire cosa è uguale o molto simile e quindi realizzabile una volta per poi essere riciclato, ottimizzando tempo e codice.
    
    Consigli:
    Ricordiamo che lavorando in responsive ogni blocco e sezione va pensato in quell’ottica da subito.
    
    Tenete un approccio ordinato ma non strafate anche con l’ottimizzazione durante il primo sviluppo di ogni blocco. Prima di passare al prossimo potete sempre tornarci e ripulire/ottimizzare/aggiustare. Soprattutto in ottica di riciclo, questo approccio, sul lungo termine vi farà risparmiare tempo.
    
    Questa volta essendo un layout composto da vari componenti, concentriamoci a portare a termine sezione per sezione anche in formato responsive, quando una macroarea funziona allora passiamo alla successiva. L’ordine di sviluppo dei blocchi lo possiamo decidere anche in ottica di ottimizzazione. Partite comunque sempre semplici e fate un passo alla volta.
    
    Come sempre cercate di capire quello che state facendo, cercate di finirlo ma non puntate a finirlo a tutti i costi, se ciò vuol dire non capirci più nulla.
    
    Ricordiamo anche che Bootstrap ha già molti componenti pronti all’uso che potete utilizzare direttamente come sono (as-is) o con qualche personalizzazione (customized). Molti li avete già usati, altri li trovate come sempre nella documentazione ufficiale del framework. Ogni volta che volete usare un componente di Bootstrap fate sempre una prova su un altro file, copiate il codice di esempio dalla documentazione, osservate il comportamento, e solo quando siete sicuri che tutto funzioni come volete, integratelo nel vostro layout. Così facendo il codice CSS custom che scriverete risulterà abbastanza ridotto.',

        ]
    ]
]



    ?>