<?php
// 1. Obavezno uključi autoload!
require_once 'vendor/autoload.php';

// 2. Inicijaliziraj Faker
$faker = Faker\Factory::create('hr_HR'); // 'hr_HR' daje hrvatska imena i gradove

// 3. Napravi neku listu podataka (npr. 10 korisnika)
$korisnici = [];
for ($i = 0; $i < 10; $i++) {
    $korisnici[] = [
        'ime' => $faker->firstName,
        'prezime' => $faker->lastName,
        'email' => $faker->email,
        'grad' => $faker->city
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parcijalni Ispit</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Popis korisnika</h1>
    <table>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Email</th>
            <th>Grad</th>
        </tr>
        <?php foreach ($korisnici as $k): ?>
        <tr>
            <td><?= $k['ime'] ?></td>
            <td><?= $k['prezime'] ?></td>
            <td><?= $k['email'] ?></td>
            <td><?= $k['grad'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
