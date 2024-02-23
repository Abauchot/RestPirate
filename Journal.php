<?php

class Journal {
    private $filePath = 'journal_data.json';

    public function getEntries() {
        if(!file_exists($this->filePath)) {
            return [];
        }
        $content = file_get_contents($this->filePath);
        return json_decode($content, true);
    }

    public function addEntry($date, $title, $entry) {
        $newEntry = [
            'date' => $date,
            'title' => $title,
            'entry' => $entry
        ];
        if (!file_exists($this->filePath)) {
            file_put_contents($this->filePath, json_encode([$newEntry])); // Crée le fichier avec la première entrée
        } else {
            $currentData = json_decode(file_get_contents($this->filePath), true);
            array_push($currentData, $newEntry);
            file_put_contents($this->filePath, json_encode($currentData));
        }
    }
    
}