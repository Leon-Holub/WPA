# Závěrečný projekt – Jednoduché fórum v PHP

Vaším úkolem je vytvořit jednoduché fórum v jazyce PHP bez použití databáze. Data se ukládají do textového souboru.
Projekt prověří vaši znalost práce s formuláři, sessions, soubory a rozdělením stránky do opakovaně použitelných částí.

## Popis projektu

### 1. Přihlášení uživatele

- Vytvořte stránku login.php, kde si uživatel zvolí přezdívku (username).
- Po odeslání se jméno uloží do session a uživatel bude přesměrován na hlavní stránku fóra (forum.php).
- Nepřihlášený uživatel nesmí mít přístup k index.php.

### 2. Hlavní stránka fóra

- Stránka bude přístupná pouze přihlášeným uživatelům. -> Nepřihlášený uživatel bude přesměrován na login.php
- Bude Obsahovat:
    - navigační panel připojený ze souboru header.php
    - formulář s textarea pro přidání nového příspěvku - může být též připojen ze souboru form.php
    - výpis všech příspěvků z textového souboru (např. posts.txt)
    - patičku připojenou ze souboru footer.php

### 3. Funkcionalita příspěvků

- Po odeslání se uloží:
    - autor (username) z session
    - čas přidání (timestamp)
    - text příspěvku z textarea
- příspěvek se uloží do textového souboru posts.txt např. ve formátu:

```
  timestamp|username|text
  ```

- Při výpisu:
    - zobrazte autora, čas a obsah
    - výstup ošetřete pomocí funkce htmlspecialchars() pro bezpečnost
    - zachovejte zalomení řádků -> uložte si místo \n jako nějaký speciální znak (např. |n|) a při výpisu ho nahraďte
      za <br>

### 4. Navigace

- Zobrazí název fóra vlevo
- Zobrazí přihlášeného uživatele vpravo a tlačítko pro odhlášení
- Odhlášení zruší session a přesměruje uživatele zpět na login.php

### 5. Patička

- V dolní části každé stránky uveďte své celé jméno a příjmení jako autor projektu.

## Vzhled a styl

- Stránka musí být vizuálně estetická a přehledná.
- Můžete:
    - vytvořit vlastní CSS a třídy,
    - nebo (doporučeno) připojit Bootstrap a použít jeho komponenty (např. pro tlačítka, formuláře a layout).

## Odevzdání projektu

- Projekt odevzdejte jako ZIP složku
- Název souboru: `prijmeni_forum.zip`
- Uvnitř musí být funkční kód i soubor `posts.txt` s alespoň jedním příspěvkem.
- Projekt musí fungovat lokálně bez databáze

## Nápověda

- Získání aktuálního data a času `date("d.m.Y H:i")`
- Při čtení ze souboru můžete použít `[$cas, $autor, $text] = explode("|", trim($radek));` pro rozdělení řádku.

## Hodnocení

### PHP funkčnost - 60 b

| Kritérium                      | Popis                                                                                          | Body |                              
|--------------------------------|------------------------------------------------------------------------------------------------|------| 
| Přihlášení uživatele           | Zpracování přezdívky, session, přesměrování                                                    | 6    |                               
| Ochrana stránky                | Kontrola session, přesměrování nepřihlášených                                                  | 4    |                                
| Přidání příspěvku              | Formulář, POST, kontrola, validace                                                             | 8    |                                
| Zápis do souboru               | Uložení data                                                                                   | 8    |
| Výpis příspěvků                | Zobrazí autora, čas, vypsání textu včetně řádkování                                            | 8    |   
| Navigace a footer přes require | `require` nebo `require_once`, použití opakovatelných souborů                                  | 6    |                                
| Odhlášení                      | Session zrušení, přesměrování                                                                  | 4    |                                
| Ošetření HTML výstupu          | `htmlspecialchars`, bezpečné výpisy                                                            | 6    |                              
| Vlastní rozšíření              | např.: zvýraznění vlastních příspěvků, počet příspěvků uživatele, mazání, ... buďte kreativní! | 10   |
| **CELKEM** PHP                 |                                                                                                | 60   |

### Styl a dokumentace - 40 b

| Kritérium                        | Popis                                                                    | Body   |
|----------------------------------|--------------------------------------------------------------------------|--------|
| Celkový dojem                    | Konzistentní vzhled všech stránek (login i fórum), jednotný styl         | 15     |
| Styl přihlašovací stránky        | Vzhledově odpovídá běžnému přihlášení, přehledné a estetické             | 10     |
| Styl stránky s příspěvky         | Dobré rozložení, čitelnost příspěvků, vizuální přehlednost               | 10     |
| **Popis projektu (`README.md`)** | V Markdown souboru student stručně popíše, co vytvořil a co přidal navíc | **5**  |
| **CELKEM** styl                  |                                                                          | **40** |
