/**
 * GRANFO LUCE - TEMPLATE ENGINE
 * Sistema di rendering dinamico con fallback multilingua
 */

class GranfoTemplateEngine {
    constructor(database) {
        this.db = database;
        this.currentLang = this.detectLanguage();
        this.editMode = this.isLocalhost();
    }

    // ============================================
    // GESTIONE LINGUA
    // ============================================
    
    detectLanguage() {
        // Rileva lingua da URL o localStorage
        const urlParams = new URLSearchParams(window.location.search);
        const langParam = urlParams.get('lang');
        if (langParam) return langParam;
        
        const savedLang = localStorage.getItem('granfo_lang');
        if (savedLang) return savedLang;
        
        // Detecta da path (se dentro /en/)
        if (window.location.pathname.includes('/en/')) return 'en';
        
        return 'it'; // Default
    }

    setLanguage(lang) {
        this.currentLang = lang;
        localStorage.setItem('granfo_lang', lang);
        this.render();
    }

    // Fallback: se 'en' non disponibile, mostra 'it'
    getText(textObj) {
        if (typeof textObj === 'string') return textObj;
        if (!textObj) return '';
        
        if (this.currentLang === 'en' && textObj.en) {
            return textObj.en;
        }
        return textObj.it || textObj.en || '';
    }

    // ============================================
    // RENDERING DINAMICO
    // ============================================
    
    renderProduct(productId) {
        const product = this.db.products[productId];
        if (!product) {
            console.error(`Product ${productId} not found`);
            return;
        }

        // Meta tags
        document.title = this.getText(product.name) + ' | Granfo Luce Verona';
        this.setMetaTag('description', this.getText(product.description));

        // Breadcrumb
        this.renderElement('.breadcrumb', this.getText(product.breadcrumb));

        // Product header
        this.renderElement('.product-tagline', this.getText(product.tagline));
        this.renderElement('h1', this.getText(product.name));
        this.renderElement('.subtitle', this.getText(product.subtitle));
        this.renderElement('.price-on-request', this.getText(product.priceStatement));

        // Images
        const mainImg = document.querySelector('.product-main-image img');
        if (mainImg) mainImg.src = product.images.main;

        const thumbs = document.querySelectorAll('.thumbs img');
        product.images.thumbnails.forEach((thumb, i) => {
            if (thumbs[i]) thumbs[i].src = thumb;
        });

        // Badges
        const badgeContainer = document.querySelector('.badge-row');
        if (badgeContainer) {
            badgeContainer.innerHTML = product.badges.map(badge => 
                `<span class="badge ${badge.accent ? 'accent' : ''}">${this.getText(badge.text)}</span>`
            ).join('');
        }

        // Description
        this.renderElement('.description-essence p', this.getText(product.description));

        // Tech Specs
        const techSpecsContainer = document.querySelector('.tech-specs');
        if (techSpecsContainer) {
            techSpecsContainer.innerHTML = product.techSpecs.map(spec => 
                `<div class="spec-row">
                    <span>${this.getText(spec.label)}</span>
                    <span>${this.getText(spec.value)}</span>
                </div>`
            ).join('');
        }

        // Features
        const featuresContainer = document.querySelector('.features-grid');
        if (featuresContainer) {
            featuresContainer.innerHTML = product.features.map(feature => 
                `<div class="feature-card">
                    <h4>${this.getText(feature.title)}</h4>
                    <p>${this.getText(feature.description)}</p>
                </div>`
            ).join('');
        }

        // Related Products
        this.renderRelatedProducts(product.related);

        // Abilita edit mode se localhost
        if (this.editMode) {
            this.enableEditMode();
        }
    }

    renderRelatedProducts(relatedIds) {
        const container = document.querySelector('.related-products-grid');
        if (!container || !relatedIds) return;

        container.innerHTML = relatedIds.map(id => {
            const relatedProduct = this.db.products[id];
            if (!relatedProduct) return '';
            
            return `
                <a href="?id=${id}" class="product-card">
                    <div class="product-image">
                        <img src="${relatedProduct.images.main}" alt="${this.getText(relatedProduct.name)}">
                    </div>
                    <div class="card-content">
                        <h3>${this.getText(relatedProduct.name)}</h3>
                        <p>${this.getText(relatedProduct.tagline)}</p>
                    </div>
                </a>
            `;
        }).join('');
    }

    // ============================================
    // UTILITY
    // ============================================
    
    renderElement(selector, content) {
        const el = document.querySelector(selector);
        if (el) {
            el.innerHTML = content;
            if (this.editMode) {
                el.setAttribute('contenteditable', 'true');
                el.setAttribute('data-editable', 'true');
            }
        }
    }

    setMetaTag(name, content) {
        let meta = document.querySelector(`meta[name="${name}"]`);
        if (!meta) {
            meta = document.createElement('meta');
            meta.name = name;
            document.head.appendChild(meta);
        }
        meta.content = content;
    }

    isLocalhost() {
        return window.location.hostname === 'localhost' || 
               window.location.hostname === '127.0.0.1' ||
               window.location.hostname === '';
    }

    // ============================================
    // EDIT MODE (Attivato solo su localhost)
    // ============================================
    
    enableEditMode() {
        console.log('🎨 Edit Mode Enabled');
        
        // Aggiungi indicatore visivo
        const editIndicator = document.createElement('div');
        editIndicator.id = 'edit-mode-indicator';
        editIndicator.innerHTML = `
            <style>
                #edit-mode-indicator {
                    position: fixed;
                    top: 80px;
                    right: 20px;
                    background: #FF8C1A;
                    color: white;
                    padding: 0.75rem 1.5rem;
                    border-radius: 30px;
                    z-index: 9999;
                    font-size: 0.85rem;
                    font-weight: 600;
                    box-shadow: 0 4px 20px rgba(255, 140, 26, 0.4);
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;
                }
                #edit-mode-indicator::before {
                    content: '✏️';
                }
                [contenteditable="true"]:hover {
                    outline: 2px dashed #FF8C1A;
                    outline-offset: 4px;
                    cursor: text;
                }
                [contenteditable="true"]:focus {
                    outline: 2px solid #FF8C1A;
                    background: rgba(255, 140, 26, 0.05);
                }
            </style>
            EDIT MODE
        `;
        document.body.appendChild(editIndicator);

        // Rendi tutti i testi editabili
        document.querySelectorAll('h1, h2, h3, h4, p, .tagline, .subtitle, .breadcrumb, .description-essence p, .badge').forEach(el => {
            el.setAttribute('contenteditable', 'true');
            el.setAttribute('data-editable', 'true');
        });

        // Aggiungi pannello di controllo
        this.createControlPanel();
    }

    createControlPanel() {
        const panel = document.createElement('div');
        panel.id = 'edit-control-panel';
        panel.innerHTML = `
            <style>
                #edit-control-panel {
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    background: #0B1C18;
                    border: 2px solid #FF8C1A;
                    border-radius: 12px;
                    padding: 1.5rem;
                    z-index: 9999;
                    min-width: 300px;
                    box-shadow: 0 8px 32px rgba(0,0,0,0.4);
                }
                #edit-control-panel h3 {
                    margin: 0 0 1rem 0;
                    color: #FF8C1A;
                    font-size: 1.1rem;
                }
                #edit-control-panel button {
                    width: 100%;
                    padding: 0.75rem;
                    margin: 0.5rem 0;
                    background: #FF8C1A;
                    color: white;
                    border: none;
                    border-radius: 6px;
                    cursor: pointer;
                    font-weight: 600;
                    transition: all 0.3s;
                }
                #edit-control-panel button:hover {
                    background: #E67A00;
                    transform: translateY(-2px);
                }
                #edit-control-panel textarea {
                    width: 100%;
                    height: 150px;
                    margin-top: 1rem;
                    padding: 0.75rem;
                    background: #1a2f2a;
                    color: #E8E6E1;
                    border: 1px solid #FF8C1A;
                    border-radius: 6px;
                    font-family: monospace;
                    font-size: 0.85rem;
                    display: none;
                }
                #edit-control-panel.exported textarea {
                    display: block;
                }
            </style>
            <h3>🎨 Edit Control</h3>
            <button onclick="granfoEngine.exportJSON()">📥 ESPORTA JSON</button>
            <button onclick="granfoEngine.toggleLanguage()">🌐 Cambia Lingua (${this.currentLang.toUpperCase()})</button>
            <textarea id="export-output" readonly></textarea>
        `;
        document.body.appendChild(panel);
    }

    exportJSON() {
        // Raccogli tutti i dati modificati
        const productId = new URLSearchParams(window.location.search).get('id');
        const product = this.db.products[productId];
        if (!product) return;

        // Crea copia con modifiche
        const exportData = JSON.parse(JSON.stringify(product));

        // Aggiorna con contenuti editati
        document.querySelectorAll('[data-editable]').forEach(el => {
            const text = el.textContent.trim();
            // Qui andrebbe mappato a quale campo appartiene
            console.log('Modified:', text);
        });

        // Mostra JSON
        const output = document.getElementById('export-output');
        if (output) {
            output.value = JSON.stringify(exportData, null, 2);
            output.parentElement.classList.add('exported');
            output.select();
        }

        alert('✅ JSON copiato! Incollalo nel tuo database.js');
    }

    toggleLanguage() {
        this.currentLang = this.currentLang === 'it' ? 'en' : 'it';
        localStorage.setItem('granfo_lang', this.currentLang);
        location.reload();
    }

    // ============================================
    // INIZIALIZZAZIONE
    // ============================================
    
    init() {
        // Detecta tipo di pagina da URL
        const urlParams = new URLSearchParams(window.location.search);
        const productId = urlParams.get('id');
        
        if (productId) {
            this.renderProduct(productId);
        }

        // Setup lingua switcher
        this.setupLanguageSwitcher();
    }

    setupLanguageSwitcher() {
        document.querySelectorAll('.lang-item').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const lang = btn.textContent.toLowerCase();
                this.setLanguage(lang);
            });
        });
    }
}

// Auto-init quando il DOM è pronto
if (typeof window !== 'undefined' && window.GRANFO_DATABASE) {
    window.granfoEngine = new GranfoTemplateEngine(window.GRANFO_DATABASE);
    
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => window.granfoEngine.init());
    } else {
        window.granfoEngine.init();
    }
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = GranfoTemplateEngine;
}
