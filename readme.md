# CSV Field Checker (PHP)

Prosty skrypt PHP do sprawdzania, czy w pliku `.csv` znajduje się para wartości:
- pierwsza wartość w **pierwszej kolumnie**
- druga wartość w **drugiej kolumnie** tego samego wiersza

## Jak działa?

1. Użytkownik wpisuje dwie wartości w formularzu HTML.
2. Skrypt `check.php` otwiera plik CSV i sprawdza każdy wiersz:
   - Jeśli znajdzie **dokładnie taką parę**, zwraca informację o sukcesie.
   - Jeśli znajdzie tylko **pierwszą wartość**, ale nie w parze z drugą — zgłasza częściowe dopasowanie.
   - Jeśli **żadna wartość** nie występuje — zgłasza brak dopasowania.

## Zawartość repozytorium

- `check.php` – skrypt backendowy w PHP
- `index.html` – prosty frontend do testowania
- `example.csv` – przykładowy plik danych

## Wymagania

- PHP 7.0 lub nowszy
- Serwer lokalny lub hosting obsługujący PHP

## Jak uruchomić lokalnie

1. Pobierz repozytorium:
   ```bash
   git clone https://github.com/twoj-login/csv-field-checker.git

2. Wejdź do katalogu i uruchom lokalny serwer:

php -S localhost:8000

3. Otwórz przeglądarkę i przejdź pod adres:

http://localhost:8000/index.html
