# **Projekt: Web pro fiktivní firmu/službu**

## **Cíl projektu**
Vaším úkolem je vytvořit **moderní a responzivní webovou stránku** pro **fiktivní firmu nebo službu**.  
Web musí být postaven **výhradně pomocí Bootstrapu** a musí být **kompletně responzivní**.

Projekt bude obsahovat **dvě hlavní stránky**:  
✔ **`index.html`** – hlavní stránka s přehledem nabídky  
✔ **`items.html`** – detailní přehled produktů/služeb

### **📂 Struktura webu**

### **1️⃣ Hlavní stránka (`index.html`)**
💡 **Navigace**
- Logo/název firmy vlevo
- Odkazy **"Hlavní stránka"** a **"Produkty"** napravo

💡 **Úvodní sekce ("Landing")**
- Název firmy, krátký popis
- Tlačítko **"O nás"** posouvající na sekci "O nás"
- Tlačítko **"Nabídka služeb"** posouvající na sekci "Nabídka služeb"

💡 **Sekce "O nás"**
- Text **nebo** obrázek + text s informacemi o firmě

💡 **Sekce "Nabídka služeb/produktů"**
- 3 karty s produkty/službami
- Každá karta obsahuje: obrázek, název, popis, cenu a tlačítko **"Koupit"**
- Na konci tlačítko **"Zobrazit více"**, které vede na `items.html`

💡 **Kontaktní formulář**
- **Jméno** a **E-mail** vedle sebe
- **Pole pro zprávu** (textarea)
- **Tlačítko pro odeslání**

💡 **Často kladené dotazy (FAQ)**
- Použití **Bootstrap Accordion**

💡 **Patička**
- Text: **"Vytvořil/a: [Jméno studenta]"**

---

### **2️⃣ Stránka s produkty (`items.html`)**
💡 **Navigace**
- Stejná jako na hlavní stránce

💡 **Landing sekce**
- Název stránky **(např. "Služby" nebo "Produkty")**

💡 **Hlavní obsah**
- Mřížka s **minimálně 9 produkty/službami** ve stejném stylu jako na hlavní stránce

💡 **Patička**
- Stejná jako na hlavní stránce

---

## **📝 Pravidla pro hodnocení**
✅ **Vše musí být responzivní** (správně se zobrazovat na mobilu i desktopu)  
✅ **Bootstrap Grid** – správné rozvržení stránky  
✅ **Použití Bootstrap komponent** – tlačítka, karty, navigace, accordion, formuláře  
✅ **Použití GitHubu** – projekt musí být nahrán na GitHub  
✅ **Odevzdání = pouze odkaz na GitHub**

---

## 📝 **Důležité požadavky a pravidla navíc**

📌 **Obsah webu musí být legální a vhodný pro školní prostředí.**
- Nevhodné, neetické nebo nelegální téma bude mít za následek **ztrátu bodů** nebo nutnost přepracování.

📌 **Všechny texty na webu musí být smysluplné a relevantní k tématu.**
- Žádný "lorem ipsum" – texty musí dávat smysl a odpovídat nabídce fiktivní firmy/služby.

📌 **Konzultace (příští týden) je povinná a bude hodnocená!**
- Na konzultaci musíte mít připravenou:
    - alespoň částečnou strukturu webu (např. rozvržení sekcí)
    - návrhy designu nebo rozvržení
    - **jasně definované téma a nabídku** vaší fiktivní firmy/služby
- Pokud nebude nic připraveno, **můžete ztratit body za postup a přípravu.**

---

## 🎯 **Deadline:**
- Příští týden konzultace a opravy.
- Odevzdání následující týden. **(4.4.2025)**

💡 **Tip:** Vyberte si zajímavé fiktivní téma – například kavárna, IT služby, designérské studio, cestovní agentura...

---

## 💻 **Coding Challenge – bonusové úkoly (nepovinné)**
🎁 Za každý splněný challenge můžete získat známku navíc.

---

#### 🧩 **Coding Challenge #1 – SCSS/SASS & vlastní barvy**
- Zjistěte, jak funguje **SCSS/SASS** a použijte ho místo běžného Bootstrap CSS.
- Nahraďte **primární barvu** Bootstrapu za svou vlastní.
- Jak na to?
    1. Stáhněte si SCSS/SASS soubory Bootstrapu
    2. Upravte proměnnou `$primary` ve stylu
    3. Zkompilujte upravený SCSS do CSS
    4. Nahraďte jím původní Bootstrap na své stránce


📌 **Cíl:** Web bude mít vaši vlastní vizuální identitu a styl. 

🎁 **Odměna**  - **1** S váhou 0.25

---

#### 🧩 **Coding Challenge #2 – Dynamické modální okno s detailem produktu**
- Implementujte **modální okno**, které se otevře při kliknutí na produkt (na `index.html` i `items.html`)
- V modálu zobrazte:  
  ✔ Obrázek produktu  
  ✔ Název + popis  
  ✔ Cenu  
  ✔ Tlačítko **„Přidat do košíku“** s ikonou košíku

📌 **Pozor:** Obsah modálního okna se musí měnit **dynamicky pomocí JavaScriptu**
- Není dovoleno mít pro každý produkt vlastní modál – musí se používat **jeden** společný, do kterého se data doplňují podle kliknuté položky.

🎁 **Odměna**  - **1** S váhou 0.5
