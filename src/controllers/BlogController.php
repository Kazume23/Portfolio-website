// src/controllers/BlogController.php
<?php

class BlogController {
    // Pobieranie dwóch najnowszych postów
    public function showLatestPosts() {
        $posts = $this->getLatestPosts();
        include 'views/templates/latest_blogs.php'; // Ładowanie widoku z postami
    }

    // Pobieranie wszystkich postów
    public function showAllPosts() {
        $posts = $this->getAllPosts();
        include 'views/templates/all_blogs.php'; // Ładowanie widoku z wszystkimi postami
    }

    // Funkcja do pobrania dwóch najnowszych postów
    private function getLatestPosts() {
        $posts = $this->getAllPosts();
        return array_slice($posts, 0, 2); // Zwracamy tylko dwa najnowsze
    }

    // Funkcja do pobrania wszystkich postów
    private function getAllPosts() {
        $data = file_get_contents('content/blogs.json'); // Odczyt danych z pliku JSON
        return json_decode($data, true); // Dekodowanie JSON do tablicy PHP
    }
}
