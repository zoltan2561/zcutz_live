<?php
require_once __DIR__ . '/vendor/autoload.php';

function addEventToEmployeeCalendar($startDateTime, $endDateTime, $summary, $description, $employeeId) {
    try {
        $client = new Google_Client();
        $client->setAuthConfig(__DIR__ . '/credentials.json');
        $client->setScopes(Google_Service_Calendar::CALENDAR);
        $client->setAccessType('offline');

        // Dolgozó tokenjének betöltése
        $tokenPath = __DIR__ . "/tokens/employee_{$employeeId}_token.json";
        if (!file_exists($tokenPath)) {
            throw new Exception("Nincs token mentve a dolgozó számára. Kérlek, hitelesítsd a dolgozót!");
        }
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);

        // Ha a token lejárt, frissítsük
        if ($client->isAccessTokenExpired()) {
            if ($client->getRefreshToken()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                file_put_contents($tokenPath, json_encode($client->getAccessToken()));
            } else {
                throw new Exception("A dolgozó hitelesítése lejárt, és nem lehet frissíteni a tokent.");
            }
        }

        $service = new Google_Service_Calendar($client);
        $event = new Google_Service_Calendar_Event([
            'summary' => $summary,
            'description' => $description,
            'start' => [
                'dateTime' => $startDateTime,
                'timeZone' => 'Europe/Budapest',
            ],
            'end' => [
                'dateTime' => $endDateTime,
                'timeZone' => 'Europe/Budapest',
            ],
        ]);

        $calendarId = 'primary';
        $event = $service->events->insert($calendarId, $event);
        return $event->htmlLink;
    } catch (Exception $e) {
        // Részletes naplózás
        error_log("Google Calendar API hiba: " . $e->getMessage());
        echo "<div class='alert alert-danger'>Hiba történt a Google Calendar API használata közben: " . $e->getMessage() . "</div>";
        return false;
    }
}
