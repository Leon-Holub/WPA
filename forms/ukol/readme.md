### **Úkol: Vytvoření Registračního Formuláře**

**Zadání úkolu:**

![Návrh formuláře](ukol.png)

Vytvořte jednoduchou webovou stránku s názvem "Registrace", která bude obsahovat následující části:

1. **Formulář pro registraci uživatele**:
    - Všechny vstupní pole musí být správně ošetřeny pomocí HTML validace (např. `required`, `type` atributy).
    - Všechny `label` musí obsahivat `for` odkazující na příslušný input
    - Vytvořte formulář podle přiloženého obrázku, který bude obsahovat následující pole:
        - **Celé jméno**: Textové pole pro celé jméno uživatele.
        - **Email**: Pole pro emailovou adresu (`type="email"`).
        - **Oblíbený den**: Pole pro výběr ze dnů. Možnosti rozdělte do kategorií na všední dny a víkend. Nastavte aby se odesílaly hodnoty "Pondělí", "Úterý" atd. místo základního číslování.
        - **Heslo**: Heslo (`type="password"`).
        - **Tlačítko**: Tlačítko pro odeslání formuláře s textem **Sign Up**.
    - Formulář bude také obsahovat odkaz **Login** pro přihlášení, umístěný pod tlačítkem odeslat.

2. **Stylizace Pomocí `style` Atributu:**
    - Stylizace musí přesně odpovídat návrhu z přiloženého obrázku. Nastavte:
        - **Zarovnání** všech prvků na střed stránky.
        - **Šířku** textových polí tak, aby byla přiměřená (např. 300px).
        - **Barvu tlačítka** na modrou a text bílý.
        - **Styl textu** a **rozložení prvků** přesně podle návrhu.

3. **Základní HTML validace**
   Formulář upravte tak, aby splňoval následující omezení:
    - **Celé jméno:** Povinné pole s maximální délkou 50 znaků.
    - **Email:** Povinné pole, musí být vyplněno správným formátem pro emailovou adresu.
    - **Heslo:** Povinné pole, musí obsahovat minimálně 8 znaků.

**Úkoly navíc:**

1. **Přidejte Pole pro Opakování Hesla**:
    - Přidejte nové pole pro opakování hesla, které zajistí, že uživatel zadá heslo správně dvakrát.

2. **Přidejte Specifické Inputy**:
    - Přidejte vstupní pole pro zjištění věku (`type="number"`) nebo oblíbené barvy (`type="color"`) uživatele.

3. **Přidejte Checkbox pro Přijetí Podmínek**:
    - Přidejte checkbox, který uživatel musí zaškrtnout pro potvrzení, že souhlasí s podmínkami registrace (např. "
      Souhlasím s podmínkami").