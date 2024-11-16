<?php
require_once __DIR__ . '/vendor/autoload.php'; // Ellenőrizd az elérési út helyességét a Google API klienshez

session_start();

// Google Client inicializálása
$client = new Google_Client();
$client->setAuthConfig(__DIR__ . '/credentials.json');
$client->setRedirectUri('https://zcutzbarber.com/'); // Állítsd be a saját domain nevedre
$client->addScope(Google_Service_Calendar::CALENDAR);
$client->setAccessType('offline');
$client->setPrompt('consent');

// Ha a hitelesítési kód még nincs, irányítsuk át a Google OAuth oldalára
if (!isset($_POST['auth_code'])) {
    $authUrl = $client->createAuthUrl();
    echo "<a href='" . htmlspecialchars($authUrl) . "' target='_blank'>Kattints ide a Google hitelesítéshez</a>";
    echo "<form method='post'>
            <label for='auth_code'>Másold be ide a hitelesítési kódot:</label>
            <input type='text' id='auth_code' name='auth_code' required>
            <label for='employee_id'>Add meg az alkalmazott ID-ját:</label>
            <input type='text' id='employee_id' name='employee_id' required>
            <button type='submit'>Token Generálása</button>
          </form>";
} else {
    // A megadott kód használata a token megszerzéséhez
    $authCode = $_POST['auth_code'];
    $employeeId = $_POST['employee_id'];
    
    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

    // Ellenőrizzük, hogy van-e hiba a token megszerzésénél
    if (isset($accessToken['error'])) {
        echo "Hiba történt: " . htmlspecialchars($accessToken['error']);
        exit();
    }

    // Mentsük el a token fájlt
    if (!file_exists(__DIR__ . '/tokens')) {
        mkdir(__DIR__ . '/tokens', 0700, true); // Létrehozzuk a tokens mappát, ha nem létezik
    }

    $tokenPath = __DIR__ . "/tokens/employee_{$employeeId}_token.json";
    file_put_contents($tokenPath, json_encode($accessToken));

    echo "A token sikeresen generálva és elmentve a dolgozó számára!";
}
