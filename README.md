# Startowy obraz paczek Composer zespołu WEB IT Stow. WIOSNA

---

### Stworzenie nowego projektu
1. Sklonuj niniejsze repozytorium:
    `git clone git@github.com:michaloo/wiosna-boilerplate.git`
2. Upenij się, że Twój edytor ma zainstalowany dodatek http://editorconfig.org/
3. Ustaw w pliku `/composer.json` poniże pola:
    * name
    * description
    * autoload.psr-4
    * autoload-dev.psr-4
    * license
4. W razie potrzeby zmień zawartość pliku LICENSE.md
5. Zaktualizuj plik `README.md`:
    * ustaw poprawną nazwę repozytorium w linku do `Build Status` usługi Travis
    * ustaw opis projektu w miejscu [opis projektu]
    * ew. dodaj dodatkowe informacje do sekcji `Rozwój i utrzymwanie`
6. Na koniec usuń niniejszą sekcję pliku `README.md` razem z obejmującymi je znacznikami `---` oraz usuń katalog `/.git`. Zainicjuj nowe repozytorium git i wykonaj pierwszy commit:
    ```sh
    $ git init
    $ git add .
    $ git commit -am 'Baza nowego projektu'
    ```

---


[![Build Status](https://travis-ci.org/michaloo/wiosna-boilerplate.svg?branch=master)](https://travis-ci.org/michaloo/wiosna-boilerplate)

> [opis projektu]


# Rozwój i utrzymanie
1. Sklonuj repozytorium
2. Zainstaluj zależności zewnętrzne:
    `docker-compose run composer install`
3. Po wprowadzonych zmianach uruchom test jednostkowe oraz statyczną analizę kodu:
    `docker-compose run composer test`
4. Jeżeli test zwrócił wynik pozytywny zakommituj swoje zmiany i stwórz PR
