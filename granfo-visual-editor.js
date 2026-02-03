var GranfoEditor = {
    isActive: false,
    changes: [],
    
    init: function() {
        console.log('🚀 [EDITOR] Inizializzazione');
        this.createStyles();
        this.createButton();
        this.setupKeyboardShortcuts();
    },
    
    createStyles: function() {
        var style = document.createElement('style');
        style.textContent = `
            #granfo-editor-toggle {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background: linear-gradient(135deg, #FF8C1A, #E67A00);
                color: white;
                border: none;
                padding: 1rem 1.5rem;
                border-radius: 50px;
                cursor: pointer;
                font-weight: 700;
                font-size: 1rem;
                box-shadow: 0 6px 24px rgba(255, 140, 26, 0.5);
                z-index: 999999;
                transition: all 0.3s;
            }
            #granfo-editor-toggle:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 32px rgba(255, 140, 26, 0.6);
            }
            #granfo-editor-toggle.active {
                background: linear-gradient(135deg, #28a745, #218838);
            }
            .granfo-editable {
                outline: 2px dashed #FF8C1A;
                outline-offset: 2px;
                cursor: text;
                padding: 2px;
            }
            .granfo-editable:hover {
                background: rgba(255, 140, 26, 0.1);
            }
            .granfo-navigation-blocked {
                pointer-events: none;
                opacity: 0.6;
            }
            #granfo-editor-panel {
                position: fixed;
                top: 80px;
                right: 20px;
                background: rgba(11, 28, 24, 0.98);
                border: 2px solid #FF8C1A;
                border-radius: 16px;
                padding: 2rem;
                z-index: 999998;
                width: 350px;
                box-shadow: 0 12px 48px rgba(0,0,0,0.6);
                display: none;
                color: white;
            }
            #granfo-editor-panel.active {
                display: block;
            }
            #granfo-editor-panel button {
                background: #FF8C1A;
                color: white;
                border: none;
                padding: 0.75rem 1.5rem;
                border-radius: 8px;
                cursor: pointer;
                font-weight: 600;
                width: 100%;
                margin: 0.5rem 0;
            }
            #granfo-editor-panel button:hover {
                background: #E67A00;
            }
        `;
        document.head.appendChild(style);
    },
    
    createButton: function() {
        var self = this;
        var btn = document.createElement('button');
        btn.id = 'granfo-editor-toggle';
        btn.innerHTML = '✏️ EDIT';
        btn.onclick = function() {
            self.toggle();
        };
        document.body.appendChild(btn);
        console.log('✅ [EDITOR] Pulsante creato');
    },
    
    toggle: function() {
        this.isActive = !this.isActive;
        console.log('🔄 [EDITOR] Toggle:', this.isActive ? 'ON' : 'OFF');
        
        var btn = document.getElementById('granfo-editor-toggle');
        btn.classList.toggle('active', this.isActive);
        btn.innerHTML = this.isActive ? '✓ EDITING' : '✏️ EDIT';
        
        if (this.isActive) {
            this.activate();
        } else {
            this.deactivate();
        }
    },
    
    activate: function() {
        console.log('🎨 [EDITOR] Attivazione modalità editing');
        
        var self = this;
        
        // Rendi tutto contenteditable (inclusi titoli card prodotto e progetti)
        document.querySelectorAll('h1, h2, h3, h4, h5, h6, p, span:not(.wishlist-btn):not([class*="icon"]), li, div[class*="title"], div[class*="heading"], .subtitle, .tagline, .card-title, .card-content, .card-content h3, .product-item h3, .project-card h3, .project-card p').forEach(function(el) {
            if (el.closest('#granfo-editor-panel') || el.closest('#granfo-editor-toggle')) return;
            if (el.closest('button') || el.closest('svg')) return; // Salta bottoni
            // Salta elementi nascosti o troppo piccoli
            if (el.offsetWidth === 0 || el.offsetHeight === 0) return;
            
            // Se è dentro un link, rendi editabile l'elemento non il link
            var parentLink = el.closest('a');
            if (parentLink) {
                parentLink.style.pointerEvents = 'none'; // Disabilita link durante editing
            }
            
            el.contentEditable = true;
            el.classList.add('granfo-editable');
            el.style.pointerEvents = 'auto'; // Abilita click sull'elemento
            
            // Traccia modifiche testo
            el.addEventListener('blur', function() {
                self.changes.push({
                    type: 'text',
                    element: el.tagName,
                    content: el.textContent.substring(0, 50),
                    timestamp: new Date().toISOString()
                });
            });
        });
        
        // Rendi le immagini cliccabili
        document.querySelectorAll('img').forEach(function(img) {
            if (img.width < 50 || img.height < 50) return; // Salta icone piccole
            img.classList.add('granfo-editable');
            img.style.cursor = 'pointer';
            img.onclick = function(e) {
                e.preventDefault();
                e.stopPropagation();
                var newSrc = prompt('Nuovo percorso immagine:', img.src);
                if (newSrc) {
                    img.src = newSrc;
                    self.changes.push({type: 'image', value: newSrc, timestamp: new Date().toISOString()});
                }
            };
        });
        
        // Blocca navigazione
        document.querySelectorAll('a').forEach(function(link) {
            link.classList.add('granfo-navigation-blocked');
            link.onclick = function(e) {
                e.preventDefault();
                alert('⚠️ Salva o esci dall\'editor prima di navigare');
            };
        });
        
        // Abilita assegnazione filtri sui prodotti
        this.setupProductFilters();
        
        // Crea pannello controlli
        this.createControlPanel();
        
        alert('✏️ EDITOR ATTIVO\n\n✓ Clicca i testi per modificarli\n✓ Clicca immagini per cambiarle\n✓ Salva con i bottoni a destra');
    },
    
    deactivate: function() {
        console.log('🔒 [EDITOR] Disattivazione');
        
        // Rimuovi contenteditable
        document.querySelectorAll('[contenteditable="true"]').forEach(function(el) {
            el.removeAttribute('contenteditable');
            el.classList.remove('granfo-editable');
        });
        
        // Rimuovi blocco navigazione
        document.querySelectorAll('a.granfo-navigation-blocked').forEach(function(link) {
            link.classList.remove('granfo-navigation-blocked');
            link.onclick = null;
        });
        
        // Rimuovi pannello
        var panel = document.getElementById('granfo-editor-panel');
        if (panel) panel.remove();
    },
    
    createControlPanel: function() {
        var self = this;
        var panel = document.createElement('div');
        panel.id = 'granfo-editor-panel';
        panel.className = 'active';
        panel.innerHTML = '<h3>🎨 Editor</h3>' +
            '<p style="color: #aaa; font-size: 0.9rem;">Modifiche: ' + this.changes.length + '</p>' +
            '<button onclick="GranfoEditor.exportHTML()">📥 Export HTML</button>' +
            '<button onclick="GranfoEditor.resetAll()">🔄 Reset All</button>';
        document.body.appendChild(panel);
    },
    
    exportHTML: function() {
        console.log('📥 [EDITOR] Esportando HTML');
        var clone = document.documentElement.cloneNode(true);
        
        // Rimuovi elementi editor
        clone.querySelectorAll('#granfo-editor-toggle, #granfo-editor-panel').forEach(function(el) {
            el.remove();
        });
        
        // Rimuovi contenteditable
        clone.querySelectorAll('[contenteditable]').forEach(function(el) {
            el.removeAttribute('contenteditable');
            el.classList.remove('granfo-editable');
        });
        
        var html = '<!DOCTYPE html>\n' + clone.outerHTML;
        var blob = new Blob([html], {type: 'text/html'});
        var url = URL.createObjectURL(blob);
        
        var a = document.createElement('a');
        a.href = url;
        a.download = 'pagina-modificata.html';
        a.click();
        
        URL.revokeObjectURL(url);
        alert('✅ HTML esportato! Scarica il file e caricalo online.');
    },
    
    resetAll: function() {
        if (confirm('⚠️ Annullare tutte le modifiche?')) {
            location.reload();
        }
    },
    
    setupKeyboardShortcuts: function() {
        var self = this;
        document.addEventListener('keydown', function(e) {
            if ((e.ctrlKey || e.metaKey) && e.key === 'e') {
                e.preventDefault();
                self.toggle();
            }
            if ((e.ctrlKey || e.metaKey) && e.key === 's') {
                e.preventDefault();
                if (self.isActive) self.exportHTML();
            }
            if (e.key === 'Escape' && self.isActive) {
                self.toggle();
            }
        });
    },
    
    setupProductFilters: function() {
        var self = this;
        var productCards = document.querySelectorAll('.product-card, .product-item, [class*="card"]');
        
        productCards.forEach(function(card) {
            var img = card.querySelector('img');
            if (!img) return;
            
            card.style.cursor = 'pointer';
            card.style.position = 'relative';
            
            // Badge per mostrare filtri attuali
            var badge = document.createElement('div');
            badge.className = 'granfo-filter-badge';
            badge.style.cssText = 'position: absolute; top: 10px; right: 10px; background: #FF8C1A; color: white; padding: 4px 8px; border-radius: 4px; font-size: 0.7rem; z-index: 100; display: none;';
            card.appendChild(badge);
            
            self.updateFilterBadge(card);
            
            // Ctrl+Click per aprire dialog filtri
            card.addEventListener('click', function(e) {
                if (e.ctrlKey || e.metaKey) {
                    e.preventDefault();
                    e.stopPropagation();
                    self.showFilterDialog(card);
                }
            });
        });
        
        console.log('🏷️ [EDITOR] Filtri prodotto attivi - usa Ctrl+Click sulle card');
    },
    
    updateFilterBadge: function(card) {
        var filters = card.getAttribute('data-filters') || '';
        var badge = card.querySelector('.granfo-filter-badge');
        
        if (filters && badge) {
            var count = filters.split(',').filter(function(f) { return f.trim(); }).length;
            badge.textContent = count + ' filtri';
            badge.style.display = 'block';
        } else if (badge) {
            badge.style.display = 'none';
        }
    },
    
    showFilterDialog: function(card) {
        var self = this;
        var currentFilters = (card.getAttribute('data-filters') || '').split(',').map(function(f) { return f.trim(); }).filter(Boolean);
        
        var availableFilters = {
            'Categoria': ['Sospensione', 'Parete', 'Tavolo', 'Terra', 'Soffitto', 'Outdoor', 'Oggettistica'],
            'Materiale': ['Vetro', 'Metallo', 'Oro', 'Ceramica', 'Legno'],
            'Stile': ['Moderno', 'Classico', 'Contemporaneo', 'Industriale', 'Minimal'],
            'Caratteristiche': ['Led', 'Dimmerabile', 'Interni', 'Esterni', 'Design']
        };
        
        // Crea overlay
        var overlay = document.createElement('div');
        overlay.style.cssText = 'position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999999; display: flex; align-items: center; justify-content: center;';
        
        var dialog = document.createElement('div');
        dialog.style.cssText = 'background: #0B1C18; border: 2px solid #FF8C1A; border-radius: 16px; padding: 2rem; max-width: 600px; max-height: 80vh; overflow-y: auto; color: white;';
        
        var html = '<h2 style="color: #FF8C1A; margin-top: 0;">🏷️ Assegna Filtri</h2>';
        html += '<p style="color: #aaa; margin-bottom: 2rem;">Seleziona i filtri per questo prodotto:</p>';
        
        Object.keys(availableFilters).forEach(function(category) {
            html += '<div style="margin-bottom: 1.5rem;"><h3 style="color: #FF8C1A; font-size: 1rem; margin-bottom: 0.5rem;">' + category + '</h3>';
            html += '<div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">';
            
            availableFilters[category].forEach(function(filter) {
                var isChecked = currentFilters.indexOf(filter) !== -1;
                html += '<label style="display: flex; align-items: center; gap: 0.5rem; background: rgba(255,140,26,0.1); padding: 0.5rem 1rem; border-radius: 8px; cursor: pointer;">';
                html += '<input type="checkbox" value="' + filter + '" ' + (isChecked ? 'checked' : '') + ' style="cursor: pointer;">';
                html += '<span>' + filter + '</span></label>';
            });
            
            html += '</div></div>';
        });
        
        html += '<div style="margin-top: 2rem; display: flex; gap: 1rem;">';
        html += '<button id="granfo-save-filters" style="flex: 1; background: #FF8C1A; color: white; border: none; padding: 1rem; border-radius: 8px; cursor: pointer; font-weight: 600;">✓ Salva Filtri</button>';
        html += '<button id="granfo-cancel-filters" style="flex: 1; background: #333; color: white; border: none; padding: 1rem; border-radius: 8px; cursor: pointer;">✕ Annulla</button>';
        html += '</div>';
        
        dialog.innerHTML = html;
        overlay.appendChild(dialog);
        document.body.appendChild(overlay);
        
        // Salva filtri
        dialog.querySelector('#granfo-save-filters').onclick = function() {
            var selected = [];
            dialog.querySelectorAll('input[type="checkbox"]:checked').forEach(function(cb) {
                selected.push(cb.value);
            });
            
            card.setAttribute('data-filters', selected.join(', '));
            self.updateFilterBadge(card);
            self.changes.push({type: 'filters', product: card.querySelector('img')?.alt || 'Prodotto', filters: selected, timestamp: new Date().toISOString()});
            
            overlay.remove();
            alert('✅ Filtri salvati! Usa "Export HTML" per scaricare la pagina modificata.');
        };
        
        // Annulla
        dialog.querySelector('#granfo-cancel-filters').onclick = function() {
            overlay.remove();
        };
        
        overlay.onclick = function(e) {
            if (e.target === overlay) overlay.remove();
        };
    }
};

// Inizializza quando DOM è pronto
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function() {
        var host = window.location.hostname;
        var isLocal = host === 'localhost' || host === '127.0.0.1' || host === '' || window.location.protocol === 'file:';
        if (!isLocal) {
            console.log('🔒 [EDITOR] Solo localhost');
            return;
        }
        GranfoEditor.init();
    });
} else {
    var host = window.location.hostname;
    var isLocal = host === 'localhost' || host === '127.0.0.1' || host === '' || window.location.protocol === 'file:';
    if (isLocal) {
        GranfoEditor.init();
    }
}
