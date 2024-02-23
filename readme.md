- EXERCICE 2: API REST
    LE JOURNAL DES PIRATES
    Objectif : 
        - Construire une API REST en PHP qui permet la gestion d'un carnet de bord de pirate, offrant des fonctionnalités pour ajouter et consulter des entrées.
    Endpoints :
        - GET /carnet : Pour consulter toutes les entrées du journal.
        - POST /carnet : Pour ajouter une nouvelle entrée au journal. Chaque entrée doit inclure une date, un titre, et le récit de l'aventure.
    Implémentation :
        - Développer l'API en respectant les principes REST, sans l'utilisation de frameworks. Test : Utiliser des outils comme Postman pour tester les fonctionnalités de l'API.


DOCUMENTATION : 

- Journal.php : 
    Classe Journal
--------------

    La classe Journal permet de gérer un journal d'entrées stockées dans un fichier JSON.

    Propriétés :
        - $filePath : Chemin vers le fichier JSON utilisé pour stocker les entrées du journal. Par défaut, il est défini sur 'journal_data.json'.

    Méthodes :
        - getEntries() : Cette méthode permet de récupérer les entrées du journal. Si le fichier n'existe pas, elle retourne un tableau vide.
            Signature : getEntries() -> array

    - addEntry($date, $title, $entry) : Cette méthode permet d'ajouter une nouvelle entrée au journal.
    Paramètres :
        - $date : La date de l'entrée.
        - $title : Le titre de l'entrée.
        - $entry : Le contenu de l'entrée.
        Signature : addEntry(string $date, string $title, string $entry) -> void

    Utilisation :
    -------------
    Voici comment utiliser la classe Journal :

    1. Création d'une instance de la classe Journal :
   $journal = new Journal();

    2. Ajout d'une nouvelle entrée :
   $journal->addEntry('2024-02-23', 'Titre de l'entrée', 'Ceci est le contenu de l'entrée du journal.');

    3. Récupération de toutes les entrées :
   $entries = $journal->getEntries();

- index.php 
    Classe Journal
    --------------

    Cette classe permet de gérer un journal enregistré dans un fichier JSON.

    Propriétés :
        - $filePath : Chemin vers le fichier JSON utilisé pour stocker les entrées du journal. Par défaut, il est défini sur 'journal_data.json'.

    Méthodes :
        - getEntries() : Récupère les entrées du journal.
        Retourne un tableau contenant toutes les entrées du journal si le fichier existe, sinon retourne un tableau vide.
        Signature : getEntries() -> array

    - addEntry($date, $title, $entry) : Ajoute une nouvelle entrée au journal.
        Paramètres :
            - $date : La date de l'entrée.
            - $title : Le titre de l'entrée.
            - $entry : Le contenu de l'entrée.
    Si le fichier n'existe pas, il est créé avec la première entrée. Sinon, la nouvelle entrée est ajoutée aux données existantes.
    Signature : addEntry(string $date, string $title, string $entry) -> void

    Utilisation :
    -------------
        Exemple d'utilisation de la classe Journal :

    1. Instanciation de la classe Journal :
        $journal = new Journal();

    2. Ajout d'une nouvelle entrée :
        $journal->addEntry('2024-02-23', 'Titre de l'entrée', 'Contenu de l'entrée du journal.');

    3. Récupération de toutes les entrées :
        $entries = $journal->getEntries();


Tests réalisés : 
-  Utilisation de Postman : 
    utilisation de l'URL : http://localhost:8000/TresorService.php
    - création d'une request en POST pour ajouter au JSON des entrées dans le journal (200) 
    - création d'une request en GET pour récupérer toutes les éntrées dans le journal (200)



