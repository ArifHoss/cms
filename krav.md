# CMS-utveckling 2025


## Krav på uppgiftens genomförande

### 1. Grundstruktur

Den statiska grundstrukturen för webbplatsen finns tillgänglig på kurswebbplatsen, ITs Learning. Alla dess delar och undersidor ska finnas med i det färdiga temat:

| Del    | Beskrivning                                                                                                                                                                                                           |
| ------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **a.** | Egen unik startsida. Välkomsthälsning och text samt header/hero-bild ska renderas dynamiskt                                                                                                                           |
| **b.** | En blogg/nyhetssida som listar alla blogg/nyhetsinlägg. Observera övrigt innehåll på sidan såsom sidomeny med sökfunktion, meny med länkar till webbplatsens alla sidor/undersidor, arkiv, kategorier, paginering osv |
| **c.** | Sida för enskild bloggpost/nyhetsinlägg. Notera den övriga informationen som skrivs ut; datum, författare, kategorier och utvald bild                                                                                 |
| **d.** | Arkiv-sida som listar alla inlägg för en vald datumperiod                                                                                                                                                             |
| **e.** | Kategorisida som listar alla inlägg inom vald kategori                                                                                                                                                                |
| **f.** | Författarsida som listar alla inlägg av en specifik författare                                                                                                                                                        |
| **g.** | 4 olika undersidor med olika layout (enligt den statiska grunden). Dessa ska vara valbara från WordPress-gränssnittet vid skapandet av ny sida (se specifikation för respektive sidmall under punkt 5)                |
| **h.** | Kontaktsida med kontaktformulär - någon form av stöd för att e-post skickas från formuläret ska finnas installerat                                                                                                    |
| **i.** | Sida som visar sökresultatet efter en sökning                                                                                                                                                                         |
| **j.** | 404-sida som visas om användaren hamnar fel (med länk till startsidan)                                                                                                                                                |
| **k.** | En dynamisk huvudmeny som kan anpassas från WordPress-gränssnittet                                                                                                                                                    |

### 2. Design och inriktning

Webbplatsen ska först anpassas så att den får en realistisk inriktning med passande design. Välj vad webbplatsens syfte ska vara – en blogg eller nyhetssida, inom vilket område?

Design kan anpassas fritt inom ramen för webbplatsens grundläggande layout. Exempelvis:

-   Färger
-   Typsnitt
-   Ikoner
-   Storlek på bilder

> ⚠️ Layouten ska i grunden vara den samma och alla delar finnas kvar.

### 3. WordPress-tema

Skapa ett eget WordPress-tema med metadata som syns i WordPress-gränssnittet. Även en skärmdump av temat ska visas i gränssnittet.

### 4. Dynamisk utläsning

Skapa dynamisk utläsning av alla sidor och inlägg på webbplatsen.

**Hårdkodat innehåll** kan användas till mindre delar såsom:

-   Copyright-texter i sidfoten (gärna med dynamisk utläsning av årtal)
-   Etiketter och platshållare i kontaktformuläret
-   Platshållare i sökrutor och liknande

### 5. Sidmallar

Skapa sidmallar med olika utseende som är möjligt att välja från WordPress-gränssnittet. De olika sidmallar som ska finnas är samma som undersida 1-4:

| Sidmall         | Beskrivning                                                            |
| --------------- | ---------------------------------------------------------------------- |
| **Undersida**   | En textspalt med sidomeny till höger med länk till övriga undersidor   |
| **Undersida 2** | En textspalt med sidomeny till vänster med länk till övriga undersidor |
| **Undersida 3** | En textspalt över hela sidans innehållsbredd                           |
| **Undersida 4** | En textspalt till vänster och utvald bild till höger                   |

### 6. Widget Area

Skapa ett "Widget Area" någonstans på webbplatsen och skapa en widget av valfri karaktär som går att lägga till från WordPress-gränssnittet.

### 7. Plugins

Installera de tillägg/plugin som du anser användbara.

> ✅ **Krav:** Minst **3** olika plugins

### 8. Användare

Skapa användare för webbplatsen med olika namn och behörigheter.

> ✅ **Krav:** Minst **3** olika användare

### 9. Dynamiskt innehåll

Fyll på webbplatsen med dynamiskt innehåll, såsom:

-   Inlägg i olika kategorier
-   Av olika användare
-   osv.

---

## Övriga krav på webbplatsen

| Krav               | Beskrivning                                                                                                                                                |
| ------------------ | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Responsivitet**  | Webbplatsen ska vara responsiv och fungera på olika enheter/skärmstorlek samt i de vanliga webbläsarna (små avvikelser är okej men de ska fungera)         |
| **Tillgänglighet** | Webbplatsen ska vara tillgänglig avseende de viktigaste delarna (ej alla WCAG-krav). Särskilt viktigt med kontraster, klickytor, typografi, semantisk HTML |
| **Prestanda**      | Rimligt optimerad prestanda avseende exempelvis bildstorlekar                                                                                              |
| **Källkod**        | Källkoden ska vara välstrukturerad och kommenterad där så är tillämpligt för ökad läsbarhet                                                                |
