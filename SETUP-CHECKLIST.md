# Setup Checklist för CMS Labb 1

Använd denna checklista för att säkerställa att allt är korrekt konfigurerat.

## ✅ Steg 1: Kopiera Assets

- [ ] Kopiera `css/` mappen från statisk webbplats till `wp-content/themes/cms/css/`
- [ ] Kopiera `js/` mappen från statisk webbplats till `wp-content/themes/cms/js/`
- [ ] Kopiera `img/` mappen från statisk webbplats till `wp-content/themes/cms/img/`
- [ ] Kopiera `fonts/` mappen från statisk webbplats till `wp-content/themes/cms/fonts/`

## ✅ Steg 2: Aktivera Tema

- [ ] Gå till WordPress Admin → Utseende → Teman
- [ ] Aktivera "CMS Labb 1" temat
- [ ] Verifiera att temat visas korrekt

## ✅ Steg 3: Skapa Meny

- [ ] Gå till Utseende → Menyer
- [ ] Skapa en ny meny (t.ex. "Huvudmeny")
- [ ] Lägg till sidor: Hem, Blogg, Undersida, Undersida 2, Undersida 3, Undersida 4, Kontakt
- [ ] Välj menyplatsen "Huvudmeny"
- [ ] Spara menyn

## ✅ Steg 4: Skapa Sidor

- [ ] **Startsida** - Skapa en sida med titel "Hem" eller "Välkommen"
  - [ ] Lägg till hero-bild (utvald bild)
  - [ ] Lägg till välkomsttext
  - [ ] Sätt som startsida (se Steg 5)

- [ ] **Blogg** - Skapa en sida med titel "Blogg"
  - [ ] Sätt som inläggssida (se Steg 5)

- [ ] **Undersida** - Skapa en sida med titel "Undersida"
  - [ ] Välj sidmall: "Undersida"
  - [ ] Lägg till innehåll

- [ ] **Undersida 2** - Skapa en sida med titel "Undersida 2"
  - [ ] Välj sidmall: "Undersida 2"
  - [ ] Lägg till innehåll

- [ ] **Undersida 3** - Skapa en sida med titel "Undersida 3"
  - [ ] Välj sidmall: "Undersida 3"
  - [ ] Lägg till innehåll

- [ ] **Undersida 4** - Skapa en sida med titel "Undersida 4"
  - [ ] Välj sidmall: "Undersida 4"
  - [ ] Lägg till innehåll
  - [ ] Lägg till utvald bild (visas till höger)

- [ ] **Kontakt** - Skapa en sida med titel "Kontakt"
  - [ ] Välj sidmall: "Kontakt"
  - [ ] Lägg till kontaktinformation

## ✅ Steg 5: Konfigurera Startsida

- [ ] Gå till Inställningar → Läsning
- [ ] Välj "En statisk sida"
- [ ] Välj din startsida under "Startsida"
- [ ] Välj din bloggsida under "Inläggssida"
- [ ] Spara ändringar

## ✅ Steg 6: Skapa Användare

- [ ] **Administrator**
  - [ ] Användarnamn: (t.ex. "admin")
  - [ ] Roll: Administrator
  - [ ] E-post: (giltig e-postadress)

- [ ] **Editor**
  - [ ] Användarnamn: (t.ex. "editor")
  - [ ] Roll: Editor
  - [ ] E-post: (giltig e-postadress)

- [ ] **Author**
  - [ ] Användarnamn: (t.ex. "author")
  - [ ] Roll: Författare
  - [ ] E-post: (giltig e-postadress)

## ✅ Steg 7: Skapa Kategorier

- [ ] Gå till Inlägg → Kategorier
- [ ] Skapa minst 3 kategorier (t.ex. "Kategori 1", "Kategori 2", "Kategori 3")

## ✅ Steg 8: Skapa Blogginlägg

Skapa minst 5-10 blogginlägg:
- [ ] Varje inlägg har en titel
- [ ] Varje inlägg har innehåll
- [ ] Varje inlägg har en utvald bild
- [ ] Varje inlägg tilldelas en eller flera kategorier
- [ ] Varje inlägg tilldelas en författare (använd olika författare)
- [ ] Inlägg har olika publiceringsdatum

## ✅ Steg 9: Konfigurera Widgets

- [ ] Gå till Utseende → Widgets
- [ ] **Sidebar**
  - [ ] Lägg till "Sök"-widget
  - [ ] Lägg till "Sidor"-widget
  - [ ] Lägg till "Arkiv"-widget
  - [ ] Lägg till "Kategorier"-widget
  - [ ] Lägg till "Senaste inlägg med bild"-widget (anpassad widget)

- [ ] **Footer Widget Area** (valfritt)
  - [ ] Lägg till widgets efter behov

## ✅ Steg 10: Installera Plugins

Installera minst 3 plugins:

- [ ] **Contact Form 7** (eller liknande)
  - [ ] Installera och aktivera
  - [ ] Skapa ett kontaktformulär
  - [ ] Lägg till shortcode på kontaktsidan

- [ ] **Plugin 2** (t.ex. Yoast SEO, WP Super Cache, etc.)
  - [ ] Installera och aktivera
  - [ ] Konfigurera efter behov

- [ ] **Plugin 3**
  - [ ] Installera och aktivera
  - [ ] Konfigurera efter behov

## ✅ Steg 11: Testa Funktioner

- [ ] **Startsida**
  - [ ] Hero-bild visas
  - [ ] Välkomsttext visas
  - [ ] Meny fungerar

- [ ] **Blogglista**
  - [ ] Alla inlägg visas
  - [ ] Utvalda bilder visas
  - [ ] Metadata (datum, författare, kategorier) visas
  - [ ] Paginering fungerar
  - [ ] Sidebar visas korrekt

- [ ] **Enskild post**
  - [ ] Postinnehåll visas
  - [ ] Utvald bild visas
  - [ ] Metadata visas
  - [ ] Navigation till föregående/nästa post fungerar

- [ ] **Arkiv**
  - [ ] Välj en månad/år
  - [ ] Verifiera att inlägg för den perioden visas

- [ ] **Kategori**
  - [ ] Klicka på en kategori
  - [ ] Verifiera att inlägg i kategorin visas

- [ ] **Författare**
  - [ ] Klicka på en författare
  - [ ] Verifiera att författarens inlägg visas

- [ ] **Sök**
  - [ ] Utför en sökning
  - [ ] Verifiera att sökresultat visas korrekt

- [ ] **Sidmallar**
  - [ ] Testa "Undersida" (meny till höger)
  - [ ] Testa "Undersida 2" (meny till vänster)
  - [ ] Testa "Undersida 3" (full bredd)
  - [ ] Testa "Undersida 4" (text + bild)

- [ ] **Kontaktsida**
  - [ ] Kontaktformulär visas
  - [ ] Testa att skicka ett meddelande
  - [ ] Verifiera att e-post skickas

- [ ] **404-sida**
  - [ ] Besök en icke-existerande URL
  - [ ] Verifiera att 404-sidan visas
  - [ ] Verifiera att länk till startsidan fungerar

- [ ] **Responsiv design**
  - [ ] Testa på mobil
  - [ ] Testa på tablet
  - [ ] Testa på desktop
  - [ ] Verifiera att meny fungerar på mobil

## ✅ Steg 12: Anpassningar

- [ ] Anpassa färger (om önskat)
- [ ] Anpassa typsnitt (om önskat)
- [ ] Lägg till logo (Utseende → Anpassa → Site Identity)
- [ ] Anpassa sidfotstext
- [ ] Lägg till sociala medier-länkar

## ✅ Steg 13: Final Kontroll

- [ ] Alla sidor fungerar
- [ ] Alla länkar fungerar
- [ ] Bilder laddas korrekt
- [ ] Meny fungerar på alla enheter
- [ ] Inga fel i konsolen (F12 → Console)
- [ ] Tema är responsivt
- [ ] Tillgänglighet: kontraster, klickytor, semantisk HTML

## Tips

- **Spara ofta** när du arbetar i WordPress Admin
- **Testa regelbundet** medan du bygger webbplatsen
- **Använd utkast** för att testa innan du publicerar
- **Backup** din webbplats innan större ändringar

## Hjälp

Om du stöter på problem:
1. Kontrollera att alla assets är kopierade korrekt
2. Kontrollera filrättigheter
3. Kontrollera WordPress-fel i Admin
4. Konsultera WordPress Codex eller kursmaterial
