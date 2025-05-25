<?php
$csv_file = 'example.csv';

if (!isset($_POST['wartosc_1'], $_POST['wartosc_2'])) {
    die('Brakuje wymaganych danych.');
}

$wartosc_1 = $_POST['wartosc_1'];
$wartosc_2 = $_POST['wartosc_2'];

if (!file_exists($csv_file)) {
    die('Plik CSV nie istnieje.');
}

$file = fopen($csv_file, 'r');
$para_znaleziona = false;
$tylko_wartosc_1 = false;

while (($row = fgetcsv($file)) !== false) {
    if (isset($row[0], $row[1])) {
        if ($row[0] === $wartosc_1 && $row[1] === $wartosc_2) {
            $para_znaleziona = true;
            break;
        } elseif ($row[0] === $wartosc_1) {
            $tylko_wartosc_1 = true;
        }
    }
}

fclose($file);

if ($para_znaleziona) {
    echo "Wartości '{$wartosc_1}' i '{$wartosc_2}' występują w pliku CSV.";
} elseif ($tylko_wartosc_1) {
    echo "Wartość '{$wartosc_1}' występuje, ale '{$wartosc_2}' nie.";
} else {
    echo "Wartość '{$wartosc_1}' nie występuje w pliku CSV.";
}
?>

