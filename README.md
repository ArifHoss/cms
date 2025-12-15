# CMS Labb 1 WordPress Theme

Ett anpassat WordPress-tema skapat från statisk HTML-struktur för CMS-utveckling kursen.

## Installation

1. Kopiera hela temamappen till `wp-content/themes/` i din WordPress-installation
2. Kopiera även CSS, JS, bilder och fonter från den statiska webbplatsen:
    - `css/` → `wp-content/themes/cms/css/`
    - `js/` → `wp-content/themes/cms/js/`
    - `img/` → `wp-content/themes/cms/img/`
    - `fonts/` → `wp-content/themes/cms/fonts/`
3. Aktivera temat i WordPress Admin → Utseende → Teman

## Funktioner

### Sidmallar

Temat inkluderar följande sidmallar som kan väljas när du skapar en ny sida:

1. **Undersida** - Textspalt med sidomeny till höger
2. **Undersida 2** - Textspalt med sidomeny till vänster
3. **Undersida 3** - Textspalt över hela sidans innehållsbredd
4. **Undersida 4** - Textspalt till vänster och utvald bild till höger
5. **Kontakt** - Kontaktsida med kontaktformulär

### Template Filer

-   `front-page.php` - Startsida med hero-bild och välkomsttext
-   `home.php` - Blogg/nyhetssida som listar alla inlägg
-   `single.php` - Enskild bloggpost/nyhetsinlägg
-   `archive.php` - Arkiv-sida som listar alla inlägg för en vald datumperiod
-   `category.php` - Kategorisida som listar alla inlägg inom vald kategori
-   `author.php` - Författarsida som listar alla inlägg av en specifik författare
-   `search.php` - Sida som visar sökresultatet efter en sökning
-   `404.php` - 404-sida som visas om användaren hamnar fel

### Widget-områden

Temat har två widget-områden:

-   **Sidebar** - Huvudsidobar (visas på bloggsidor)
-   **Footer Widget Area** - Widget-område för sidfot

### Anpassad Widget

Temat inkluderar en anpassad widget: **Senaste inlägg med bild** som visar de senaste inläggen med utvald bild.

## Setup-instruktioner

### 0. Skapa Theme Screenshot (VIKTIGT!)

WordPress kräver en `screenshot.png` fil för att visa temat i admin-gränssnittet.

1. Ta en skärmdump av din webbplats
2. Anpassa storleken till **880x660 pixlar** (rekommenderad storlek)
3. Spara som `screenshot.png` i tema-mappen (`cms/screenshot.png`)

**Tips:** Du kan använda verktyg som GIMP, Photoshop, eller online-verktyg för att skapa bilden.

### 1. Skapa Meny

1. Gå till **Utseende → Menyer**
2. Skapa en ny meny och lägg till önskade sidor/länkar
3. Välj menyplatsen "Huvudmeny"
4. Spara menyn

### 2. Skapa Sidor

Skapa följande sidor:

-   **Startsida** - Välj "Startsida" som sidmall (eller använd `front-page.php`)
-   **Blogg** - Använd standardmall eller `home.php`
-   **Undersida** - Välj "Undersida" som sidmall
-   **Undersida 2** - Välj "Undersida 2" som sidmall
-   **Undersida 3** - Välj "Undersida 3" som sidmall
-   **Undersida 4** - Välj "Undersida 4" som sidmall
-   **Kontakt** - Välj "Kontakt" som sidmall

### 3. Konfigurera Startsida

1. Gå till **Inställningar → Läsning**
2. Välj "En statisk sida" som startsida
3. Välj din startsida under "Startsida"
4. Välj din bloggsida under "Inläggssida"

### 4. Skapa Användare

Skapa minst 3 användare med olika behörigheter:

-   **Administrator** - Full behörighet
-   **Editor** - Kan redigera alla inlägg och sidor
-   **Author** - Kan skapa och redigera egna inlägg

### 5. Lägg till Innehåll

-   Skapa blogginlägg i olika kategorier
-   Tilldela olika författare till inläggen
-   Lägg till utvalda bilder till inlägg och sidor
-   Fyll på sidor med innehåll

### 6. Konfigurera Widgets

1. Gå till **Utseende → Widgets**
2. Lägg till widgets i "Sidebar" och "Footer Widget Area"
3. Testa den anpassade widgeten "Senaste inlägg med bild"

### 7. Installera Plugins

Installera minst 3 plugins, till exempel:

-   **Contact Form 7** - För kontaktformulär (rekommenderas)
-   **Yoast SEO** - För SEO-optimering
-   **WP Super Cache** - För prestanda
-   Eller andra plugins efter behov

## Filer och Struktur

```
cms/
├── style.css              # Tema-header och importer
├── functions.php          # Tema-funktioner och setup
├── header.php             # Header-template
├── footer.php             # Footer-template
├── sidebar.php            # Sidebar-template
├── index.php              # Huvudtemplate (fallback)
├── front-page.php         # Startsida
├── home.php               # Blogglista
├── single.php             # Enskild post
├── archive.php            # Arkiv
├── category.php           # Kategori
├── author.php             # Författare
├── search.php             # Sökresultat
├── 404.php                # 404-sida
├── page.php               # Standardsidmall
├── page-undersida.php     # Sidmall: Undersida
├── page-undersida2.php    # Sidmall: Undersida 2
├── page-undersida3.php   # Sidmall: Undersida 3
├── page-undersida4.php    # Sidmall: Undersida 4
├── page-kontakt.php       # Sidmall: Kontakt
├── css/                   # CSS-filer (kopiera från statisk webbplats)
├── js/                    # JavaScript-filer (kopiera från statisk webbplats)
├── img/                   # Bilder (kopiera från statisk webbplats)
└── fonts/                 # Fonter (kopiera från statisk webbplats)
```

## Anpassningar

### Färger och Design

Du kan anpassa färger, typsnitt och design genom att redigera CSS-filerna i `css/`-mappen eller lägga till anpassad CSS i **Utseende → Anpassa → Ytterligare CSS**.

### Kontaktinformation

Kontaktinformation i sidfoten kan anpassas via WordPress Customizer eller genom att redigera `footer.php`.

## Krav

-   WordPress 5.0 eller senare
-   PHP 7.0 eller senare
-   MySQL 5.6 eller senare

## Support

För frågor eller problem, kontakta kursansvarig eller konsultera WordPress Codex.

## Licens

Detta tema är skapat för utbildningssyfte inom ramen för CMS-utveckling kursen.
