### **Úkol: Vytvoření Osobního Profilu s Navigací a Stylováním**

**Zadání úkolu:**

Vytvořte jednoduchou webovou stránku s názvem "Osobní profil", která bude obsahovat následující části:

1. **Záhlaví (Header) a Navigace:**
    - Přidejte záhlaví stránky s nadpisem **"Můj profil"**.
    - V navigační části `<nav>` bude nadpis **"Můj profil"** vlevo a napravo odkazy na sekce "Domů", "O mně", "Kontakt".
    - Navigace musí být stylována tak, aby odkazy byly vedle sebe.

2. **Sekce Osobního Profilu:**
    - Vytvořte sekci `<section>` s následujícími informacemi:
        - **Obrázek** vašeho profilového obrázku (můžete použít jakýkoliv obrázek) s atributy `src`, `alt` a `title`.
        - Pod obrázkem přidejte **HTML5 toggler** (např. pomocí `<details>` a `<summary>`), který bude obsahovat text "Více informací" a po kliknutí zobrazí další text s popisem o vás. U elementu `<summary>` nastavte kurzor na **pointer** při najetí.

3. **Stylizace Pomocí `style` Atributu:**
    - Nastavte:
        - **Barvu textu** nadpisu v záhlaví na modrou.
        - **Pozadí** navigačního menu na světle šedé.
        - **Zarovnání** odstavce s popisem na střed.
        - **Zaoblené rohy** obrázku.
        - **Rámeček obrázku** s vaší oblíbenou barvou.

**Úkol pro rychlejší studenty:**

Vytvořte další sekci s názvem **"Moje zájmy"**, která bude obsahovat:

1. **Seznam zájmů** pomocí `<ul>` a `<li>`. Zájmy mohou zahrnovat např. sport, hudbu, cestování atd.
2. Každý zájem bude:
    - **Podtržený a tučný**.
    - Jeden z uvedených zájmů by měl být **neaktuální** a zobrazený jako **škrtnutý**.
3. **Stylizace pomocí `style` Atributu**:
    - Nastavte pro každý zájem odlišnou barvu pozadí nebo jiný jednoduchý styl.
