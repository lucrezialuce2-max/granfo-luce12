# 🎨 GRANFO LUCE - ARCHITETTURA MODULARE

## Sistema Database-Driven con Editor Visuale Offline

Questo sistema trasforma il sito statico in un'architettura modulare basata su dati, con editor visuale integrato per modifiche offline.

---

## 📁 STRUTTURA FILE

```
├── database.js          → Database centrale con tutti i contenuti
├── template-engine.js   → Motore di rendering dinamico
├── editor-mode.js       → Editor visuale offline (solo localhost)
├── prodotto-master.html → Template master per prodotti
└── style.css           → Stili esistenti (mantenuti)
```

---

## 🚀 COME USARE

### 1. VISUALIZZARE UN PRODOTTO

Apri `prodotto-master.html` con parametro ID:

```
prodotto-master.html?id=camilla-sospensione
prodotto-master.html?id=domus-sospensione
prodotto-master.html?id=ofelia-sospensione
```

Il contenuto viene caricato automaticamente dal `database.js`.

---

### 2. CAMBIARE LINGUA (Senza Reload)

Clicca su **IT | EN** nel menu. Il sistema:
- Cambia istantaneamente tutti i testi
- Usa fallback automatico: se `en` manca, mostra `it`
- Salva preferenza in localStorage

---

### 3. EDIT MODE (Solo Localhost)

#### Attivazione:
1. Apri il file da `localhost` o `file://`
2. Clicca sul bottone **"✏️ EDIT MODE"** in basso a sinistra
3. Oppure premi **`Ctrl + E`** (Windows) o **`Cmd + E`** (Mac)

#### Funzionalità:
- **Click su testo** → Modifica diretta (contenteditable)
- **Click su immagine** → Cambia percorso file
- **Drag handle `⋮⋮`** → Riordina blocchi della pagina
- **Pannello Control** (in alto a destra):
  - 📥 **ESPORTA JSON** → Genera codice aggiornato
  - 📋 **COPIA CLIPBOARD** → Copia JSON negli appunti
  - ↺ **RESET** → Ricarica pagina

#### Shortcuts:
- `Ctrl + E` → Toggle Edit Mode
- `Ctrl + S` → Esporta JSON
- `Esc` → Disattiva Edit Mode

---

### 4. ESPORTARE MODIFICHE

1. Fai tutte le modifiche desiderate (testi, immagini, ordine blocchi)
2. Clicca **"📥 ESPORTA JSON"**
3. Copia il JSON generato
4. Incolla nel `database.js` sostituendo il prodotto corrispondente

**Esempio Output:**
```javascript
{
  "id": "camilla-sospensione",
  "content": {
    "name": "CAMILLA",
    "tagline": "Sospensione in vetro soffiato",
    "description": "Testo modificato...",
    // ... tutti i campi editati
  }
}
```

---

## 🗂️ STRUTTURA DATABASE.JS

### Schema Prodotto Multilingua:

```javascript
'prodotto-id': {
    id: 'prodotto-id',
    name: { it: 'Nome IT', en: 'Name EN' },
    tagline: { it: 'Tagline IT', en: 'Tagline EN' },
    category: { it: 'Categoria', en: 'Category' },
    
    images: {
        main: '../images/path.webp',
        thumbnails: ['img1.webp', 'img2.webp', 'img3.webp']
    },
    
    badges: [
        { text: { it: 'Badge IT', en: 'Badge EN' }, accent: false }
    ],
    
    description: {
        it: 'Descrizione completa in italiano...',
        en: 'Full description in English...'
    },
    
    techSpecs: [
        {
            label: { it: 'Etichetta', en: 'Label' },
            value: { it: 'Valore', en: 'Value' }
        }
    ],
    
    features: [
        {
            title: { it: 'Titolo', en: 'Title' },
            description: { it: 'Descrizione', en: 'Description' }
        }
    ],
    
    related: ['prodotto-1', 'prodotto-2', 'prodotto-3']
}
```

---

## 🎯 VANTAGGI DEL SISTEMA

### ✅ Separazione Contenuti/Struttura
- Tutti i testi in un unico file `database.js`
- Template HTML indipendenti
- Facile manutenzione e aggiornamento

### ✅ Multilingua Nativo
- Sistema { it: '...', en: '...' } per ogni testo
- Fallback automatico se traduzione manca
- Cambio lingua istantaneo senza reload

### ✅ Editor Visuale Offline
- Modifica come in Canva
- Drag & Drop per riordinare blocchi
- Click per editare testi e immagini
- Export JSON per salvare modifiche

### ✅ Performance
- Caricamento dinamico leggero
- Cache browser per database
- Zero ricaricamenti per cambio lingua

### ✅ Scalabilità
- Aggiungi prodotti editando solo `database.js`
- Template riutilizzabili
- Architettura modulare espandibile

---

## 🔧 AGGIUNGERE UN NUOVO PRODOTTO

1. Apri `database.js`
2. Copia uno schema prodotto esistente
3. Modifica i campi:
   ```javascript
   'nuovo-prodotto': {
       id: 'nuovo-prodotto',
       name: { it: 'Nome', en: 'Name' },
       // ... tutti i campi
   }
   ```
4. Salva
5. Apri: `prodotto-master.html?id=nuovo-prodotto`

**Fatto!** Il prodotto è live.

---

## 🎨 PERSONALIZZARE BLOCCHI

I blocchi sono modulari e riordinabili. Ogni blocco ha:
- `data-block-type="nome"` → Identificatore
- `.block-handle` → Handle per drag & drop
- Contenuto indipendente

**Tipi di blocchi:**
- `breadcrumb` → Percorso navigazione
- `product-header` → Immagini + Info prodotto
- `features` → Caratteristiche
- `related` → Prodotti correlati

**Aggiungere un blocco:**
```html
<div class="content-block" data-block-type="nuovo-blocco">
    <div class="block-handle">⋮⋮ Nuovo Blocco</div>
    <!-- Contenuto qui -->
</div>
```

---

## 🌐 SISTEMA CAMBIO LINGUA

Il template engine gestisce automaticamente:

```javascript
// Nel template-engine.js
getText(textObj) {
    if (currentLang === 'en' && textObj.en) {
        return textObj.en;
    }
    return textObj.it || textObj.en || ''; // Fallback
}
```

**Quando clicchi IT/EN:**
1. `setLanguage()` viene chiamato
2. Tutti i testi vengono ri-renderizzati
3. Preferenza salvata in localStorage
4. **ZERO ricaricamenti pagina**

---

## 📊 STATO ATTUALE

✅ **Completato:**
- Database.js con schema multilingua (3 prodotti esempio)
- Template engine con rendering dinamico
- Editor mode con contenteditable
- Drag & Drop tramite SortableJS
- Sistema export JSON
- Cambio lingua senza reload
- Template master HTML
- Shortcuts tastiera

⏳ **Da Espandere:**
- Aggiungere tutti i 20+ prodotti al database
- Creare template per progetti
- Creare template per cataloghi
- Sistema di autenticazione (opzionale)
- Backend per persistenza (opzionale)

---

## 🔍 TROUBLESHOOTING

### Edit Mode non appare?
→ Assicurati di aprire da `localhost` o `file://`

### Testi non cambiano lingua?
→ Verifica che il database abbia `{ it: '...', en: '...' }`

### Drag & Drop non funziona?
→ Verifica che SortableJS sia caricato (CDN nel template)

### Export JSON vuoto?
→ Attiva Edit Mode prima, poi fai modifiche, poi esporta

---

## 📞 PROSSIMI PASSI

1. **Testa il sistema:**
   - Apri `prodotto-master.html?id=camilla-sospensione`
   - Attiva Edit Mode
   - Modifica testi e immagini
   - Esporta JSON

2. **Espandi database:**
   - Aggiungi tutti i prodotti esistenti in `database.js`
   - Usa lo schema fornito

3. **Integra con sito esistente:**
   - Sostituisci link prodotti con `prodotto-master.html?id=...`
   - Mantieni stili esistenti (già collegati)

4. **Feedback e refinement:**
   - Testa con dati reali
   - Ottimizza UX editor
   - Aggiungi funzionalità richieste

---

## 💡 BEST PRACTICES

- **Backup:** Salva sempre backup del `database.js` prima di modifiche massive
- **Traduzioni:** Compila sempre prima `it`, poi `en` (fallback)
- **Immagini:** Usa percorsi relativi coerenti (`../images/...`)
- **IDs:** Usa kebab-case (`prodotto-nome`) per coerenza
- **Testing:** Testa sempre su localhost prima di deploy

---

**Creato per Granfo Luce** | Sistema modulare database-driven con editing visuale | v1.0
