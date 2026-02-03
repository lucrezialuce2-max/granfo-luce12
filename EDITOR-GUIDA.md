# 🎨 GRANFO VISUAL EDITOR - Guida Rapida

## Come Modificare il Sito Visualmente

### 1. APRI UNA PAGINA SU LOCALHOST

Apri qualsiasi pagina del sito dal tuo computer (localhost o file://):
- `index.html`
- `prodotti.html`
- `cataloghi.html`
- ecc.

### 2. ATTIVA L'EDITOR

Vedrai un bottone **"✏️ EDIT"** in basso a destra.

**Clicca sul bottone** oppure premi **`Ctrl + E`**

### 3. MODIFICA IL SITO

Ora puoi:

#### ✏️ MODIFICARE TESTI
- **Clicca su qualsiasi testo** (titoli, paragrafi, bottoni, card)
- Modifica direttamente
- Il testo diventa arancione quando ci passi sopra

#### 🖼️ CAMBIARE IMMAGINI
- **Clicca su un'immagine**
- Si apre un popup: inserisci il nuovo percorso
- Esempio: `images/prodotti/nuovo-prodotto.webp`

#### 📊 AGGIUNGERE FOTO ALLA GRIGLIA PRODOTTI
1. Apri `prodotti.html`
2. Attiva Edit Mode
3. Clicca sull'immagine del prodotto che vuoi cambiare
4. Inserisci il nuovo percorso dell'immagine
5. Modifica anche il titolo e descrizione cliccandoci sopra

### 4. SALVA LE MODIFICHE

Nel pannello in alto a destra:

#### 💾 SALVA MODIFICHE
- Scarica un file JSON con tutte le tue modifiche
- Puoi usarlo come backup o riferimento

#### 📄 ESPORTA HTML
- Scarica la pagina HTML completa con le tue modifiche
- **Sostituisci il file originale** con questo
- Le modifiche saranno permanenti

#### 📋 COPIA MODIFICHE
- Copia negli appunti la lista delle modifiche
- Utile per documentare cosa hai cambiato

### 5. RESET (Annulla Tutto)
Clicca **"↺ RESET PAGINA"** per annullare tutte le modifiche e ricaricare

---

## ⌨️ SCORCIATOIE TASTIERA

- **`Ctrl + E`** → Attiva/Disattiva Edit Mode
- **`Ctrl + S`** → Salva Modifiche
- **`Esc`** → Disattiva Edit Mode

---

## 📝 ESEMPIO: Modificare la Griglia Prodotti

1. Apri `prodotti.html` su localhost
2. Clicca **"✏️ EDIT"**
3. **Cambia immagine prodotto:**
   - Clicca sull'immagine del prodotto
   - Inserisci: `images/prodotti/Sospensione/nuovo-lampadario.webp`
   - Clicca OK

4. **Cambia nome prodotto:**
   - Clicca sul titolo (es. "CAMILLA")
   - Scrivi il nuovo nome
   
5. **Cambia descrizione:**
   - Clicca sul testo sotto il titolo
   - Scrivi la nuova descrizione

6. **Salva tutto:**
   - Clicca **"📄 ESPORTA HTML"**
   - Sostituisci il file `prodotti.html` con quello scaricato

---

## ✅ COSA PUOI MODIFICARE

- ✅ Tutti i testi (titoli, descrizioni, bottoni)
- ✅ Tutte le immagini
- ✅ Nomi prodotti
- ✅ Prezzi e tagline
- ✅ Contenuti delle card
- ✅ Breadcrumb

## ❌ COSA NON PUOI MODIFICARE (per ora)

- ❌ Aggiungere/eliminare prodotti (devi farlo manualmente nell'HTML)
- ❌ Modificare la struttura della pagina
- ❌ Cambiare colori e stili CSS

---

## 🔧 TROUBLESHOOTING

### Non vedo il bottone "✏️ EDIT"
→ Assicurati di aprire da `localhost` o `file://`  
→ L'editor funziona SOLO in locale per sicurezza

### Le modifiche non si salvano
→ Devi cliccare **"📄 ESPORTA HTML"** e sostituire il file

### Ho sbagliato una modifica
→ Clicca **"↺ RESET PAGINA"** o ricarica la pagina (F5)

### L'immagine non si vede
→ Verifica che il percorso sia corretto  
→ Usa percorsi relativi: `images/folder/file.webp`

---

## 🎯 WORKFLOW CONSIGLIATO

1. **Fai Backup** del file originale prima di modificare
2. **Apri la pagina** su localhost
3. **Attiva Edit Mode** (Ctrl+E)
4. **Fai le modifiche** necessarie
5. **Esporta HTML** (Ctrl+S)
6. **Testa** la pagina esportata
7. Se OK → **Sostituisci** il file originale
8. Se NO → **Reset** e riprova

---

**L'editor è attivo su:**
- ✅ index.html
- ✅ prodotti.html
- ✅ cataloghi.html
- ✅ progetti.html (dopo l'aggiunta)

**Creato per Granfo Luce** | Visual Editor v1.0
