<div align="center">
  
  <img src="app/public/img/profilecircle.png" alt="Bild på mig" width="100">
  
  <h1>Hannas Redovisningssida</h1>
  
</div>

På den här sidan kommer jag presentera lösningar och redovisningar från mitt arbete med kursen MVC (Model-View-Controller). 

Det här repot innehåller koden till en webbapplikation jag byggt som en del av min utbildning i webbutveckling. Projektet illustrerar hur man kan använda MVC-mönstret för att strukturera en webbapplikation på ett effektivt sätt.

## Teknologier

Projektet använder följande teknologier och verktyg:

- **Frontend**: JavaScript, HTML, CSS, SASS/SCSS (med Symfony Webpack Encore för tillgångshantering)
- **Backend**: PHP, Symfony (ett webbapplikationsramverk)
- **Templating**: Twig (för att skapa dynamiska HTML-vyer)
- **Databas**: MariaDB, SQLite
- **Utvecklingsverktyg**: Symfony Webpack Encore för frontend-resurshantering, inklusive kompilering av SASS/SCSS till CSS.

# Instruktioner 
## Komma Igång

För att sätta upp och köra projektet lokalt, följ dessa steg:

**Klona repot**:

Klona repot innebär att du skapar en lokal kopia av koden som finns i GitHub-repot. Detta gör du genom att köra följande kommando i din terminal:

```bash
git clone git@github.com:hagw23bth/BTH-MVC.git
```

**Installera PHP-beroenden med Composer**:
För att installera alla PHP-beroenden som projektet kräver, inklusive Twig:

```bash
composer install
```

**Se till att Node.js och npm är installerade.**:

Om du inte redan har Node.js och npm installerat:
* Gå till Node.js officiella webbplats och ladda ner den senaste stabila versionen för ditt operativsystem.
* Följ installationsguiden som ingår med nedladdningen. Npm installeras automatiskt tillsammans med Node.js.
* Verifiera installationen genom att öppna en terminal eller kommandotolk och kör:

```bash
node -v
```
```bash
npm -v
```

**Installera JavaScript-beroenden och bygg frontend-resurser med npm och Webpack Encore**:

Med Node.js och npm installerat, är det dags att installera projektets JavaScript-beroenden. Detta inkluderar Encore och alla andra paket som behövs för att kompilera dina SASS/SCSS-filer och annan frontend-kod. Öppna din terminal i projektets rotkatalog och kör:

```bash
npm install
```

**Bygg SASS/SCSS och andra frontend-resurser:**:

```bash
npm run build
```

**För att köra projektet lokalt::**:

Använd PHP:s inbyggda server för att snabbt starta din applikation:

```bash
symfony server:start
```

```bash
php -S localhost:8080 -t public
```

## Scrutinizer badges:

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hagw23bth/BTH-MVC/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/hagw23bth/BTH-MVC/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/hagw23bth/BTH-MVC/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/hagw23bth/BTH-MVC/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/hagw23bth/BTH-MVC/badges/build.png?b=master)](https://scrutinizer-ci.com/g/hagw23bth/BTH-MVC/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/hagw23bth/BTH-MVC/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

## Tester

För att köra projektets enhetstester:

```bash
php bin/phpunit
```

# Länkar
## Kursrepo Github 
https://github.com/dbwebb-se/mvc 

## Mitt repo på Github 
https://github.com/hagw23bth/BTH-MVC/tree/master

