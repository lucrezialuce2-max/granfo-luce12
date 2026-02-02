# Design System - Granfo Luce

## 📏 Logica Matematica e Proporzioni

### Colori - Identità Cromatica

```css
--bg-dark: #0B1C18;                          /* Verde Notte Profondo */
--bg-card: #142B24;                          /* Verde Bosco */
--accent-orange: linear-gradient(135deg, #FF8C00 0%, #E65100 100%);  /* Arancio Ambrato */
--accent-orange-solid: #FF8C1A;              /* Arancione Solido */
--text-pearl: #E8E6E1;                       /* Soft Pearl */
```

### Griglia Desktop - Proporzioni Rigorose

- **Grid Template**: `repeat(3, 1fr)` (3 colonne uguali)
- **Gap**: `2rem` tra gli elementi
- **Banner Domus**: `grid-column: span 2` (occupa 2 colonne)
- **Banner Altezza**: Identica a 1 elemento della griglia (min-height: 420px)
- **Struttura Banner**: 50% testo (sinistra) + 50% immagine (destra)

### Tipografia

- **Titoli (h1, h2)**: Playfair Display, weight 600
- **Testo Corpo**: Segoe UI, weight 300
- **Menu/Filtri**: Segoe UI, weight 300, 0.8rem, uppercase

### Filtri Desktop

- **Layout**: Orizzontale, flexbox con `gap: 3rem`
- **Stile**: Border-bottom arancione 1px, testo Pearl, freccia arancione
- **Medial Query**: Visibile da 769px in su

### Filtri Mobile

- **Layout**: Unico bottone "FILTRA E ORDINA" centralizzato
- **Stile**: Border arancione, testo arancione, hover background arancione
- **Media Query**: Visibile fino a 768px

### Griglia Mobile

- **Grid Template**: `repeat(2, 1fr)` (2 colonne)
- **Gap**: `1.5rem`
- **Banner Domus**: Vertical stack (immagine sopra, testo sotto)
  - Grid: `grid-template-columns: 1fr`
  - Immagine: `grid-row: 1`, height 260px
  - Testo: `grid-row: 2`

### Product Cards

- **Background**: `var(--bg-dark)` (#0B1C18)
- **Aspect Ratio Desktop**: 4/5
- **Aspect Ratio Mobile**: 1/1 (quadrato)
- **Titolo**: Font Serif, centrato, sotto l'immagine
- **Hover Effect**: `transform: scale(1.05)` su immagine

### Footer

- **Identità**: "Granfo Illuminazione S.N.C."
- **Indirizzo**: "Via Ponte S. Pancrazio 8, Verona"
- **P.IVA**: 01410980237

---

## 🎯 Linee Guida Implementazione

1. **Non modificare le variabili CSS** - Mantengono coerenza cromatica
2. **Rispettare la griglia 3-colonne desktop** - È il fulcro del layout
3. **Il banner Domus occupa sempre 2 colonne** - Non deve mai cambiare
4. **Mobile: sempre 2 colonne** - Per leggibilità e proporzione
5. **Filtri**: seguono la regola 769px - Desktop sopra, Mobile sotto
6. **Font weights**: Serif 600 per titoli, Sans 300 per corpo

---

## ✅ Checklist Verifica

- [ ] Griglia desktop 3 colonne visibile
- [ ] Banner Domus occupa 2 colonne e 1 riga
- [ ] Banner interno: 50% testo sinistra, 50% immagine destra
- [ ] Filtri desktop orizzontali con bordo arancione
- [ ] Filtri mobile nascosti su desktop, bottone centralizzato su mobile
- [ ] Product cards con sfondo verde scuro
- [ ] Titoli prodotti centrati sotto immagini
- [ ] Hover effect scale(1.05) funzionante
- [ ] Mobile: 2 colonne prodotti
- [ ] Banner mobile: full-width, immagine sopra, testo sotto
- [ ] Footer con indirizzo Granfo Illuminazione

---

Ultima modifica: Design System v1.0 - Locked Layout
