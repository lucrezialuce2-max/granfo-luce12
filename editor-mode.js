/**
 * GRANFO LUCE - EDITOR MODE
 * Sistema di editing visuale offline con Drag & Drop
 * Attivato solo su localhost
 */

class GranfoEditorMode {
    constructor() {
        this.isLocalhost = this.checkLocalhost();
        this.editMode = false;
        this.sortableInstance = null;
        this.changes = {};
        
        if (this.isLocalhost) {
            this.init();
        }
    }

    checkLocalhost() {
        return window.location.hostname === 'localhost' || 
               window.location.hostname === '127.0.0.1' ||
               window.location.hostname === '' ||
               window.location.protocol === 'file:';
    }

    init() {
        console.log('🎨 Editor Mode Available (Localhost Detected)');
        this.createEditorToggle();
        this.setupKeyboardShortcuts();
    }

    // ============================================
    // TOGGLE EDIT MODE
    // ============================================
    
    createEditorToggle() {
        const toggle = document.createElement('button');
        toggle.id = 'editor-mode-toggle';
        toggle.innerHTML = `
            <style>
                #editor-mode-toggle {
                    position: fixed;
                    bottom: 20px;
                    left: 20px;
                    background: linear-gradient(135deg, #FF8C1A 0%, #E67A00 100%);
                    color: white;
                    border: none;
                    padding: 1rem 1.5rem;
                    border-radius: 50px;
                    cursor: pointer;
                    font-weight: 700;
                    font-size: 0.9rem;
                    box-shadow: 0 6px 24px rgba(255, 140, 26, 0.5);
                    z-index: 99999;
                    transition: all 0.3s ease;
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;
                }
                #editor-mode-toggle:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 8px 32px rgba(255, 140, 26, 0.6);
                }
                #editor-mode-toggle.active {
                    background: linear-gradient(135deg, #B8860B 0%, #9A7309 100%);
                }
                #editor-mode-toggle::before {
                    content: '✏️';
                    font-size: 1.2rem;
                }
            </style>
            <span>EDIT MODE</span>
        `;
        
        toggle.addEventListener('click', () => this.toggleEditMode());
        document.body.appendChild(toggle);
    }

    toggleEditMode() {
        this.editMode = !this.editMode;
        const toggle = document.getElementById('editor-mode-toggle');
        
        if (this.editMode) {
            this.enableEditMode();
            toggle.classList.add('active');
            toggle.innerHTML = '<span>✓ EDITING</span>';
            document.body.classList.add('edit-mode');
        } else {
            this.disableEditMode();
            toggle.classList.remove('active');
            toggle.innerHTML = '<span>✏️ EDIT MODE</span>';
            document.body.classList.remove('edit-mode');
        }
    }

    // ============================================
    // ENABLE EDIT MODE
    // ============================================
    
    enableEditMode() {
        console.log('🎨 Edit Mode ENABLED');
        
        // Rendi tutti i testi editabili
        this.makeContentEditable();
        
        // Abilita Drag & Drop per blocchi
        this.enableDragAndDrop();
        
        // Crea pannello di controllo
        this.createControlPanel();
        
        // Abilita editing immagini
        this.enableImageEditing();
        
        // Mostra overlay informativo
        this.showEditModeOverlay();
    }

    disableEditMode() {
        console.log('🎨 Edit Mode DISABLED');
        
        // Rimuovi contenteditable
        document.querySelectorAll('[contenteditable="true"]').forEach(el => {
            el.removeAttribute('contenteditable');
            el.classList.remove('editable');
        });
        
        // Disabilita Sortable
        if (this.sortableInstance) {
            this.sortableInstance.destroy();
            this.sortableInstance = null;
        }
        
        // Rimuovi pannello
        const panel = document.getElementById('editor-control-panel');
        if (panel) panel.remove();
        
        // Rimuovi overlay
        const overlay = document.querySelector('.edit-mode-overlay');
        if (overlay) overlay.remove();
    }

    // ============================================
    // CONTENTEDITABLE
    // ============================================
    
    makeContentEditable() {
        const selectors = [
            'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
            'p', 'span.product-tagline', 'span.subtitle',
            '.breadcrumb span', '.badge', '.description-essence p',
            '.spec-row span', '.feature-card h4', '.feature-card p',
            '.price-on-request'
        ];
        
        selectors.forEach(selector => {
            document.querySelectorAll(selector).forEach(el => {
                el.setAttribute('contenteditable', 'true');
                el.classList.add('editable');
                
                // Track changes
                el.addEventListener('input', (e) => {
                    this.trackChange(el, 'text', el.textContent);
                });
            });
        });
        
        // Stile per elementi editabili
        this.injectEditableStyles();
    }

    injectEditableStyles() {
        const style = document.createElement('style');
        style.id = 'editable-styles';
        style.textContent = `
            .editable {
                transition: all 0.2s;
                border-radius: 4px;
            }
            .editable:hover {
                background: rgba(255, 140, 26, 0.05);
                outline: 2px dashed #FF8C1A;
                outline-offset: 4px;
                cursor: text;
            }
            .editable:focus {
                background: rgba(255, 140, 26, 0.1);
                outline: 2px solid #FF8C1A;
                outline-offset: 4px;
            }
        `;
        document.head.appendChild(style);
    }

    // ============================================
    // DRAG & DROP (SortableJS)
    // ============================================
    
    enableDragAndDrop() {
        const container = document.getElementById('dynamic-content');
        if (!container) return;
        
        // Mostra handle per ogni blocco
        document.querySelectorAll('.content-block').forEach(block => {
            const handle = block.querySelector('.block-handle');
            if (handle) handle.style.display = 'block';
        });
        
        this.sortableInstance = Sortable.create(container, {
            animation: 200,
            handle: '.block-handle',
            ghostClass: 'sortable-ghost',
            dragClass: 'sortable-drag',
            onEnd: (evt) => {
                console.log('Block moved:', evt.oldIndex, '→', evt.newIndex);
                this.trackChange('layout', 'block-order', this.getBlockOrder());
            }
        });
        
        console.log('🔄 Drag & Drop enabled');
    }

    getBlockOrder() {
        return Array.from(document.querySelectorAll('.content-block'))
            .map(block => block.getAttribute('data-block-type'));
    }

    // ============================================
    // IMAGE EDITING
    // ============================================
    
    enableImageEditing() {
        document.querySelectorAll('img').forEach(img => {
            img.style.cursor = 'pointer';
            img.setAttribute('title', 'Click to change image path');
            
            img.addEventListener('click', (e) => {
                e.preventDefault();
                const newPath = prompt('Inserisci il nuovo percorso immagine:', img.src);
                if (newPath) {
                    img.src = newPath;
                    this.trackChange(img, 'image', newPath);
                }
            });
        });
    }

    // ============================================
    // CONTROL PANEL
    // ============================================
    
    createControlPanel() {
        const panel = document.createElement('div');
        panel.id = 'editor-control-panel';
        panel.innerHTML = `
            <style>
                #editor-control-panel {
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    background: rgba(11, 28, 24, 0.98);
                    backdrop-filter: blur(20px);
                    border: 2px solid #FF8C1A;
                    border-radius: 16px;
                    padding: 2rem;
                    z-index: 99998;
                    min-width: 350px;
                    box-shadow: 0 12px 48px rgba(0,0,0,0.6);
                }
                #editor-control-panel h3 {
                    margin: 0 0 1.5rem 0;
                    color: #FF8C1A;
                    font-size: 1.3rem;
                    font-weight: 700;
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;
                }
                #editor-control-panel h3::before {
                    content: '🎨';
                }
                .control-btn {
                    width: 100%;
                    padding: 1rem;
                    margin: 0.75rem 0;
                    background: linear-gradient(135deg, #FF8C1A 0%, #E67A00 100%);
                    color: white;
                    border: none;
                    border-radius: 8px;
                    cursor: pointer;
                    font-weight: 700;
                    font-size: 0.95rem;
                    transition: all 0.3s;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 0.5rem;
                }
                .control-btn:hover {
                    background: linear-gradient(135deg, #E67A00 0%, #CC6A00 100%);
                    transform: translateY(-2px);
                    box-shadow: 0 6px 20px rgba(255, 140, 26, 0.4);
                }
                .control-btn.secondary {
                    background: linear-gradient(135deg, #B8860B 0%, #9A7309 100%);
                }
                .control-btn.secondary:hover {
                    background: linear-gradient(135deg, #9A7309 0%, #7A5A07 100%);
                }
                #export-output {
                    width: 100%;
                    height: 200px;
                    margin-top: 1rem;
                    padding: 1rem;
                    background: #1a2f2a;
                    color: #E8E6E1;
                    border: 1px solid #FF8C1A;
                    border-radius: 8px;
                    font-family: 'Courier New', monospace;
                    font-size: 0.85rem;
                    display: none;
                    resize: vertical;
                }
                #export-output.visible {
                    display: block;
                }
                .change-counter {
                    text-align: center;
                    color: #B8860B;
                    font-size: 0.9rem;
                    margin: 1rem 0;
                    padding: 0.5rem;
                    background: rgba(184, 134, 11, 0.1);
                    border-radius: 6px;
                }
            </style>
            <h3>Editor Control</h3>
            
            <div class="change-counter">
                <strong>${Object.keys(this.changes).length}</strong> modifiche
            </div>
            
            <button class="control-btn" onclick="window.granfoEditor.exportJSON()">
                <span>📥</span> ESPORTA JSON
            </button>
            
            <button class="control-btn secondary" onclick="window.granfoEditor.copyToClipboard()">
                <span>📋</span> COPIA CLIPBOARD
            </button>
            
            <button class="control-btn secondary" onclick="window.granfoEditor.resetChanges()">
                <span>↺</span> RESET
            </button>
            
            <textarea id="export-output" readonly></textarea>
        `;
        document.body.appendChild(panel);
    }

    // ============================================
    // CHANGE TRACKING
    // ============================================
    
    trackChange(element, type, value) {
        const key = element.className || element.tagName || 'unknown';
        this.changes[key] = { type, value, timestamp: Date.now() };
        
        // Aggiorna counter
        const counter = document.querySelector('.change-counter');
        if (counter) {
            counter.innerHTML = `<strong>${Object.keys(this.changes).length}</strong> modifiche`;
        }
        
        console.log('✏️ Change tracked:', { key, type, value });
    }

    // ============================================
    // EXPORT JSON
    // ============================================
    
    exportJSON() {
        const productId = new URLSearchParams(window.location.search).get('id');
        
        const exportData = {
            id: productId || 'new-product',
            timestamp: new Date().toISOString(),
            changes: this.changes,
            content: {
                name: document.querySelector('h1')?.textContent || '',
                tagline: document.querySelector('.product-tagline')?.textContent || '',
                subtitle: document.querySelector('.subtitle')?.textContent || '',
                description: document.querySelector('.description-essence p')?.textContent || '',
                priceStatement: document.querySelector('.price-on-request')?.textContent || '',
                badges: Array.from(document.querySelectorAll('.badge')).map(b => b.textContent),
                techSpecs: Array.from(document.querySelectorAll('.spec-row')).map(row => ({
                    label: row.querySelector('span:first-child')?.textContent || '',
                    value: row.querySelector('span:last-child')?.textContent || ''
                })),
                features: Array.from(document.querySelectorAll('.feature-card')).map(card => ({
                    title: card.querySelector('h4')?.textContent || '',
                    description: card.querySelector('p')?.textContent || ''
                })),
                images: {
                    main: document.querySelector('.product-main-image img')?.src || '',
                    thumbnails: Array.from(document.querySelectorAll('.thumbs img')).map(img => img.src)
                },
                blockOrder: this.getBlockOrder()
            }
        };
        
        const jsonString = JSON.stringify(exportData, null, 2);
        
        const output = document.getElementById('export-output');
        if (output) {
            output.value = jsonString;
            output.classList.add('visible');
            output.select();
        }
        
        console.log('📥 Export Data:', exportData);
        alert('✅ JSON generato! Copia il contenuto e incollalo nel database.js');
    }

    copyToClipboard() {
        const output = document.getElementById('export-output');
        if (output && output.value) {
            output.select();
            document.execCommand('copy');
            alert('✅ JSON copiato negli appunti!');
        } else {
            alert('⚠️ Prima genera l\'export cliccando su "ESPORTA JSON"');
        }
    }

    resetChanges() {
        if (confirm('⚠️ Vuoi davvero resettare tutte le modifiche?')) {
            location.reload();
        }
    }

    // ============================================
    // OVERLAY INFORMATIVO
    // ============================================
    
    showEditModeOverlay() {
        const overlay = document.createElement('div');
        overlay.className = 'edit-mode-overlay';
        overlay.innerHTML = `
            <style>
                .edit-mode-overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    background: rgba(255, 140, 26, 0.95);
                    color: white;
                    padding: 1rem;
                    text-align: center;
                    z-index: 99997;
                    font-weight: 600;
                    animation: slideDown 0.3s ease;
                }
                @keyframes slideDown {
                    from { transform: translateY(-100%); }
                    to { transform: translateY(0); }
                }
                .edit-mode-overlay button {
                    background: white;
                    color: #FF8C1A;
                    border: none;
                    padding: 0.5rem 1rem;
                    margin-left: 1rem;
                    border-radius: 4px;
                    cursor: pointer;
                    font-weight: 700;
                }
            </style>
            <span>✏️ EDIT MODE ATTIVO - Clicca su testo per modificare | Trascina blocchi dai handle | Clicca immagini per cambiarle</span>
            <button onclick="this.parentElement.remove()">OK</button>
        `;
        document.body.appendChild(overlay);
        
        setTimeout(() => overlay.remove(), 5000);
    }

    // ============================================
    // KEYBOARD SHORTCUTS
    // ============================================
    
    setupKeyboardShortcuts() {
        document.addEventListener('keydown', (e) => {
            // Ctrl/Cmd + E = Toggle Edit Mode
            if ((e.ctrlKey || e.metaKey) && e.key === 'e') {
                e.preventDefault();
                this.toggleEditMode();
            }
            
            // Ctrl/Cmd + S = Export JSON
            if (this.editMode && (e.ctrlKey || e.metaKey) && e.key === 's') {
                e.preventDefault();
                this.exportJSON();
            }
            
            // Esc = Disable Edit Mode
            if (this.editMode && e.key === 'Escape') {
                this.toggleEditMode();
            }
        });
        
        console.log('⌨️ Shortcuts: Ctrl+E (Edit), Ctrl+S (Save), Esc (Exit)');
    }
}

// Auto-init
if (typeof window !== 'undefined') {
    window.granfoEditor = new GranfoEditorMode();
}
