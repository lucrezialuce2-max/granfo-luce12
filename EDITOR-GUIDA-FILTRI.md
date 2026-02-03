## 🎨 GUIDA VISUAL EDITOR CON FILTRI PRODOTTO

### 📋 Panoramica
Il nuovo editor visuale permette di:
1. **Modificare TUTTI i testi** della pagina
2. **Cambiare immagini** con un click
3. **Spostare elementi** trascinandoli
4. **Assegnare filtri ai prodotti** per la ricerca

---

## 🚀 Come Attivare l'Editor

### Metodo 1: Pulsante Arancione
- Apri qualsiasi pagina su **http://127.0.0.1:8080**
- Clicca il pulsante **"✏️ EDIT"** in basso a destra

### Metodo 2: Scorciatoia Tastiera
- Premi **Ctrl + E** per attivare/disattivare l'editor

---

## ✏️ Modificare i Testi

### Qualsiasi Testo è Editabile
1. Quando attivi l'editor, **TUTTI i testi** avranno un contorno arancione punteggiato
2. Clicca su qualsiasi testo per modificarlo
3. Scrivi direttamente nel browser
4. Le modifiche vengono salvate in memoria

**Elementi editabili:**
- ✅ Titoli (H1, H2, H3, etc.)
- ✅ Paragrafi
- ✅ Descrizioni prodotti
- ✅ Badge e etichette
- ✅ Qualsiasi altro testo nella pagina
- ❌ Script e elementi di sistema (ignorati automaticamente)

---

## 🖼️ Cambiare Immagini

1. Clicca su qualsiasi immagine
2. Apparirà un prompt con il percorso attuale
3. Inserisci il nuovo percorso (es: `images/prodotti/nuovo-prodotto.jpg`)
4. Premi OK

Le immagini editabili hanno un contorno tratteggiato dorato.

---

## 🏷️ Assegnare Filtri ai Prodotti

### Come Funziona
I filtri permettono di categorizzare i prodotti per la ricerca. Quando un utente cerca "Sospensione", tutti i prodotti con il filtro "Sospensione" verranno mostrati.

### Procedura per Assegnare Filtri

**Passo 1: Attiva l'Editor**
- Clicca **"✏️ EDIT"** o premi Ctrl+E

**Passo 2: Seleziona un Prodotto**
- **Ctrl + Click** (Tenere Ctrl e cliccare) su un qualsiasi prodotto/card
- Alternativamente: clicca sulla card con Ctrl premuto

**Passo 3: Scegli i Filtri**
Una finestra popup apparirà con le categorie disponibili:

```
Categorie Predefinite:
- Sospensione
- Parete  
- Tavolo
- Terra
- Outdoor
- Design
- Moderno
- Classico
- Led
- Dimmerabile
- Interni
- Esterni
- Arredamento
- Illuminazione
```

**Passo 4: Aggiungi o Crea Filtri**

Opzione A - Seleziona dai Predefiniti:
- Spunta le caselle dei filtri da assegnare
- Es: ✅ Sospensione, ✅ Design, ✅ Led

Opzione B - Crea Filtri Personalizzati:
- Scrivi il nome del filtro nel campo "Nuovo filtro..."
- Clicca "Aggiungi"
- Es: "Eco-friendly", "Vintage", "Lusso"

**Passo 5: Salva**
- Clicca **"✅ Salva Filtri"**
- I filtri appariranno come badge colorati sul prodotto

---

## 🔍 Come Funziona la Ricerca con i Filtri

### Nel Sito Visitatore
Quando qualcuno cerca sulla pagina Prodotti:

1. **Ricerca testuale**: Digita "sospensione" nella lente
   - Troverà tutti i prodotti con "Sospensione" nel nome, descrizione O nei filtri assegnati

2. **Filtri automatici**: I prodotti verranno filtrati in tempo reale

3. **Combinazione**: Se assegni a un prodotto i filtri "Sospensione + Moderno + Led", lo troverà chi cerca:
   - "Sospensione" ✓
   - "Moderno" ✓
   - "Led" ✓
   - "Sospensione moderna" ✓
   - Qualsiasi combinazione di questi termini

---

## ⋮⋮ Spostare Elementi (Drag & Drop)

1. Quando attivi l'editor, sugli elementi trascinabili appare l'icona **⋮⋮** al hover
2. Clicca e trascina per riordinare
3. L'elemento seguirà il cursore
4. Rilascia per posizionarlo nella nuova posizione

---

## 💾 Salvare e Esportare le Modifiche

### Pannello Controlli (Destra)
Quando l'editor è attivo, vedrai un pannello con pulsanti:

**📥 Export HTML**
- Scarica la pagina completa modificata
- Il file è pronto da caricare online
- Nome: `page-modified.html`

**💾 Save JSON**
- Esporta un file JSON con tutte le modifiche
- Utile per backup o review
- Nome: `changes.json`

**📋 Copy Changes**
- Copia in memoria tutte le modifiche
- Incollabile in chat, email, etc.

**🔄 Reset All**
- Annulla TUTTE le modifiche
- Chiede conferma prima di eseguire

---

## 🚫 Blocco della Navigazione

**Durante l'editing, il sito è "congelato":**
- ❌ Non puoi cliccare link (mostra avviso)
- ❌ Non puoi andare ad altre pagine
- ❌ Non puoi chiudere la pagina senza salvar prima

Questo protegge le tue modifiche dall'essere perse accidentalmente.

**Per sbloccare:**
- Premi **Esc** (esce dall'editor)
- O clicca **"Exit"** nel pannello
- Oppure **salva/esporta** prima e poi uscirai dall'editor

---

## ⌨️ Scorciatoie Tastiera

| Scorciatoia | Azione |
|------------|--------|
| **Ctrl + E** | Attiva/Disattiva Editor |
| **Ctrl + Click** | Assegna filtri a prodotto |
| **Ctrl + S** | Salva modifiche (JSON) |
| **Esc** | Esci dall'editor |
| **Enter** (su testo) | Conferma modifica |

---

## 🐛 Troubleshooting

### Il pulsante non appare
- Assicurati di essere su **http://127.0.0.1:8080** (non file://)
- Apri la console (F12) e controlla i messaggi

### I filtri non funzionano
- Assicurati di aver premuto **Ctrl + Click** sul prodotto (non solo Click)
- Il dialogo filtri deve apparire come popup

### La ricerca non filtra i prodotti assegnati
- Ricarica la pagina dopo aver salvato
- I filtri vengono salvati nel `data-filters` del prodotto

### Non riesco a fare Ctrl+Click
- Su Mac, usa **Cmd + Click** al posto di Ctrl + Click

---

## 📝 Workflow Consigliato

1. **Attiva editor** (Ctrl+E)
2. **Modifica testi** se necessario
3. **Assegna filtri** ai prodotti (Ctrl+Click)
4. **Ordina elementi** se necessario (trascina)
5. **Salva/Esporta** (Export HTML)
6. **Scarica il file** e caricalo online
7. **Esci dall'editor** (Esc)
8. **Verifica la ricerca** nel sito live

---

## 💡 Tips & Tricks

**Usa i filtri predefiniti standardizzati:**
- Sospensione, Parete, Tavolo, Terra, Outdoor per categoria
- Design, Moderno, Classico per stile
- Led, Dimmerabile per funzionalità
- Questo rende la ricerca coerente

**Crea nomi di filtri coerenti:**
- Usa CamelCase o underscore
- Es: "Eco_Friendly" invece di "eco friendly"
- Così la ricerca funziona meglio

**Testa la ricerca:**
- Prima di esportare, prova a cercare i termini che hai usato nei filtri
- Assicurati che i prodotti siano trovabili

---

## 🔐 Sicurezza

L'editor è disponibile **SOLO su localhost**:
- ✅ Funziona su http://127.0.0.1:8080
- ✅ Funziona su file:// (locale)
- ❌ Non funziona su siti online
- ❌ Non funziona su domini remoti

---

**Versione:** 2.0 | **Data:** Febbraio 2026
