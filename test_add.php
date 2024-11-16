<?php
require_once 'google_calendar.php'; // Győződj meg róla, hogy a helyes útvonalat adod meg

// Teszt adatok
$startDateTime = '2024-11-16T10:00:00';
$endDateTime = '2024-11-16T11:00:00';
$summary = 'Teszt Esemény';
$description = 'Ez egy teszt esemény a Google Naptár API-hoz';
$employeeId = 3; // Használd az alkalmazott megfelelő ID-jét, akinek van mentett tokenje

// Függvény meghívása
$eventLink = addEventToEmployeeCalendar($startDateTime, $endDateTime, $summary, $description, $employeeId);

if ($eventLink) {
    echo "<div class='alert alert-success'>Az esemény sikeresen hozzáadva a dolgozó Google Naptárához: <a href='$eventLink' target='_blank'>Megnyitás</a></div>";
} else {
    echo "<div class='alert alert-danger'>Nem sikerült hozzáadni az eseményt a Google Naptárhoz.</div>";
}
?>
