<?php
// src/controllers/blogController.php

// src/controllers/blogController.php

function getLatestBlogs()
{
    $filePath = __DIR__ . '/../../content/blogs.json'; // Ścieżka do pliku JSON
    if (file_exists($filePath)) {
        $json = file_get_contents($filePath);
        $blogs = json_decode($json, true); // Dekodowanie JSON do tablicy PHP
        if (is_array($blogs)) {
            return array_slice($blogs, 0, 2); // Pobierz dwa najnowsze wpisy
        }
    }
    return []; // Zwróć pustą tablicę, jeśli brak danych

}

    function getAllBlogs() {
        $filePath = __DIR__ . '/../../content/blogs.json'; // Ścieżka do pliku JSON z wpisami
        if (file_exists($filePath)) {
            $json = file_get_contents($filePath); // Odczytanie zawartości pliku
            $blogs = json_decode($json, true); // Dekodowanie JSON na tablicę PHP
            if (is_array($blogs)) {
                return $blogs; // Zwraca tablicę wpisów
            }
        }
        return []; // Zwraca pustą tablicę, jeśli brak danych
    }

