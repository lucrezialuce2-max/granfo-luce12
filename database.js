/**
 * GRANFO LUCE - DATABASE AS CODE
 * Architettura Modulare Multilingua
 * Database-driven content management system
 */

const GRANFO_DATABASE = {
    
    // ============================================
    // PRODOTTI (Products)
    // ============================================
    products: {
        'camilla-sospensione': {
            id: 'camilla-sospensione',
            name: { it: 'CAMILLA', en: 'CAMILLA' },
            tagline: { it: 'Sospensione in vetro soffiato', en: 'Blown glass suspension' },
            category: { it: 'Sospensione', en: 'Suspension' },
            breadcrumb: { it: 'Prodotti / Sospensioni / Camilla', en: 'Products / Suspensions / Camilla' },
            subtitle: { it: 'Vetro Soffiato Murano Fumé', en: 'Murano Fumé Blown Glass' },
            priceStatement: { it: 'Realizzazione Artigianale Veneziana su Misura', en: 'Handcrafted Venetian Custom Made' },
            images: {
                main: '../images/prodotti/Sospensione/camilla.webp',
                thumbnails: [
                    '../images/prodotti/Sospensione/camilla.webp',
                    '../images/prodotti/Sospensione/camilla.webp',
                    '../images/prodotti/Sospensione/camilla.webp'
                ]
            },
            badges: [
                { text: { it: 'Maestri di Murano', en: 'Murano Masters' }, accent: false },
                { text: { it: 'Vetro soffiato a mano', en: 'Hand-blown glass' }, accent: true },
                { text: { it: 'Esclusivo', en: 'Exclusive' }, accent: false }
            ],
            description: {
                it: 'Sospensione in vetro soffiato Murano fumé, realizzata dai maestri artigiani veneziani. Colore fumé elegante, attacco E27, luce calda/fredda regolabile. Ogni pezzo è unico e realizzato a mano secondo le tradizioni muranesi.',
                en: 'Murano fumé blown glass suspension, crafted by Venetian master artisans. Elegant fumé color, E27 socket, warm/cold adjustable light. Each piece is unique and handmade following Murano traditions.'
            },
            techSpecs: [
                { label: { it: 'Tipo', en: 'Type' }, value: { it: 'Sospensione', en: 'Suspension' } },
                { label: { it: 'Materiale', en: 'Material' }, value: { it: 'Vetro soffiato Murano', en: 'Murano blown glass' } },
                { label: { it: 'Colore', en: 'Color' }, value: { it: 'Fumé', en: 'Fumé' } },
                { label: { it: 'Attacco', en: 'Socket' }, value: { it: '1 x E27', en: '1 x E27' } },
                { label: { it: 'Lavorazione', en: 'Craftsmanship' }, value: { it: 'Maestri Murano', en: 'Murano Masters' } },
                { label: { it: 'Tipo Luce', en: 'Light Type' }, value: { it: 'Calda/Fredda', en: 'Warm/Cold' } }
            ],
            features: [
                {
                    title: { it: 'Artigianato Veneziano', en: 'Venetian Craftsmanship' },
                    description: { it: 'Realizzata dai maestri soffiatori di Murano con tecniche tradizionali tramandate da generazioni.', en: 'Crafted by Murano master glassblowers using traditional techniques passed down through generations.' }
                },
                {
                    title: { it: 'Luce Diffusa', en: 'Diffused Light' },
                    description: { it: 'Il vetro fumé diffonde una luce morbida e avvolgente, perfetta per creare atmosfere eleganti.', en: 'The fumé glass diffuses soft, enveloping light, perfect for creating elegant atmospheres.' }
                },
                {
                    title: { it: 'Pezzo Unico', en: 'Unique Piece' },
                    description: { it: 'Ogni lampada è un pezzo unico, con variazioni naturali che ne certificano l\'autenticità artigianale.', en: 'Each lamp is a unique piece with natural variations that certify its handcrafted authenticity.' }
                }
            ],
            related: ['domus-sospensione', 'bolla-sospensione', 'ofelia-sospensione']
        },

        'domus-sospensione': {
            id: 'domus-sospensione',
            name: { it: 'DOMUS', en: 'DOMUS' },
            tagline: { it: 'Sospensione vetro trasparente', en: 'Transparent glass suspension' },
            category: { it: 'Sospensione', en: 'Suspension' },
            breadcrumb: { it: 'Prodotti / Sospensioni / Domus', en: 'Products / Suspensions / Domus' },
            subtitle: { it: 'Vetro Pasta Trasparente Murano', en: 'Murano Transparent Glass' },
            priceStatement: { it: 'Disponibile in Vari Colori Murano', en: 'Available in Various Murano Colors' },
            images: {
                main: '../images/prodotti/Sospensione/domus.webp',
                thumbnails: [
                    '../images/prodotti/Sospensione/domus.webp',
                    '../images/prodotti/Sospensione/domus.webp',
                    '../images/prodotti/Sospensione/domus.webp'
                ]
            },
            badges: [
                { text: { it: 'Vetro trasparente', en: 'Transparent glass' }, accent: false },
                { text: { it: 'Vari colori disponibili', en: 'Various colors available' }, accent: true },
                { text: { it: 'Dimmerabile', en: 'Dimmable' }, accent: false }
            ],
            description: {
                it: 'Sospensione in vetro pasta trasparente Murano, disponibile in vari colori. Dimmerabile, maestria artigianale. Design contract Granfo Luce per progetti residenziali e contract di alto livello.',
                en: 'Murano transparent glass suspension, available in various colors. Dimmable, handcrafted mastery. Granfo Luce contract design for high-level residential and contract projects.'
            },
            techSpecs: [
                { label: { it: 'Tipo', en: 'Type' }, value: { it: 'Sospensione', en: 'Suspension' } },
                { label: { it: 'Materiale', en: 'Material' }, value: { it: 'Vetro pasta trasparente Murano', en: 'Murano transparent glass' } },
                { label: { it: 'Colori', en: 'Colors' }, value: { it: 'Vari colori disponibili', en: 'Various colors available' } },
                { label: { it: 'Attacco', en: 'Socket' }, value: { it: '1 x E27', en: '1 x E27' } },
                { label: { it: 'Funzione', en: 'Function' }, value: { it: 'Dimmerabile', en: 'Dimmable' } },
                { label: { it: 'Tipo Luce', en: 'Light Type' }, value: { it: 'Diretta/Diffusa', en: 'Direct/Diffused' } }
            ],
            features: [
                {
                    title: { it: 'Trasparenza Luminosa', en: 'Luminous Transparency' },
                    description: { it: 'Il vetro trasparente crea effetti di luce pura e cristallina, valorizzando ogni ambiente.', en: 'Transparent glass creates pure, crystalline light effects, enhancing any environment.' }
                },
                {
                    title: { it: 'Varianti Cromatiche', en: 'Color Variants' },
                    description: { it: 'Disponibile in una vasta gamma di colori Murano per personalizzare ogni progetto.', en: 'Available in a wide range of Murano colors to customize every project.' }
                },
                {
                    title: { it: 'Controllo Luminoso', en: 'Light Control' },
                    description: { it: 'Sistema dimmerabile per regolare l\'intensità luminosa secondo le necessità.', en: 'Dimmable system to adjust light intensity according to needs.' }
                }
            ],
            related: ['camilla-sospensione', 'bolla-sospensione', 'cono-sospensione']
        },

        'ofelia-sospensione': {
            id: 'ofelia-sospensione',
            name: { it: 'OFELIA', en: 'OFELIA' },
            tagline: { it: 'Sospensione design organico', en: 'Organic design suspension' },
            category: { it: 'Sospensione', en: 'Suspension' },
            breadcrumb: { it: 'Prodotti / Sospensioni / Ofelia', en: 'Products / Suspensions / Ofelia' },
            subtitle: { it: 'Design Biomorfico Soffiato a Mano', en: 'Hand-blown Biomorphic Design' },
            priceStatement: { it: 'Disponibile in 2 Misure', en: 'Available in 2 Sizes' },
            images: {
                main: '../images/prodotti/Sospensione/ofelia.webp',
                thumbnails: [
                    '../images/prodotti/Sospensione/ofelia.webp',
                    '../images/prodotti/Sospensione/ofelia.webp',
                    '../images/prodotti/Sospensione/ofelia.webp'
                ]
            },
            badges: [
                { text: { it: 'Design organico', en: 'Organic design' }, accent: false },
                { text: { it: 'Vari colori disponibili', en: 'Various colors available' }, accent: true },
                { text: { it: '2 dimensioni', en: '2 sizes' }, accent: false }
            ],
            description: {
                it: 'Sospensione con forme biomorfe morbide, realizzata in vetro soffiato a mano. Disponibile in 2 misure scalabili, attacco E27, luce diretta/indiretta. Ideale per ambienti che richiedono eleganza organica e flessibilità dimensionale.',
                en: 'Suspension with soft biomorphic forms, made of hand-blown glass. Available in 2 scalable sizes, E27 socket, direct/indirect light. Ideal for environments requiring organic elegance and dimensional flexibility.'
            },
            techSpecs: [
                { label: { it: 'Tipo', en: 'Type' }, value: { it: 'Sospensione', en: 'Suspension' } },
                { label: { it: 'Materiale', en: 'Material' }, value: { it: 'Vetro soffiato', en: 'Blown glass' } },
                { label: { it: 'Attacco', en: 'Socket' }, value: { it: '1 x E27', en: '1 x E27' } },
                { label: { it: 'Colori', en: 'Colors' }, value: { it: 'Vari', en: 'Various' } },
                { label: { it: 'Dimensioni', en: 'Sizes' }, value: { it: '2 misure', en: '2 sizes' } },
                { label: { it: 'Tipo Luce', en: 'Light Type' }, value: { it: 'Diretta/Indiretta', en: 'Direct/Indirect' } }
            ],
            features: [
                {
                    title: { it: 'Design Biomorfico', en: 'Biomorphic Design' },
                    description: { it: 'Forme organiche e fluide ispirate alla natura, create attraverso la soffiatura a mano.', en: 'Organic, fluid forms inspired by nature, created through hand-blowing.' }
                },
                {
                    title: { it: 'Soffiato a Mano', en: 'Hand-blown' },
                    description: { it: 'Ogni pezzo è realizzato artigianalmente, garantendo unicità e qualità superiore.', en: 'Each piece is handcrafted, ensuring uniqueness and superior quality.' }
                },
                {
                    title: { it: 'Flessibilità Dimensionale', en: 'Dimensional Flexibility' },
                    description: { it: 'Due misure disponibili per adattarsi a diverse esigenze progettuali.', en: 'Two sizes available to adapt to different design needs.' }
                }
            ],
            related: ['camilla-sospensione', 'bolla-sospensione', 'gabs-sospensione']
        },

        // ... Altri prodotti seguiranno lo stesso schema
    },

    // ============================================
    // PROGETTI (Projects)
    // ============================================
    projects: {
        'progetto-1': {
            id: 'progetto-1',
            title: { it: 'Villa Moderna Verona', en: 'Modern Villa Verona' },
            category: { it: 'Residenziale', en: 'Residential' },
            year: '2025',
            location: { it: 'Verona, Italia', en: 'Verona, Italy' },
            description: {
                it: 'Progetto completo di illuminazione per villa moderna con particolare attenzione all\'integrazione tra luce naturale e artificiale.',
                en: 'Complete lighting project for a modern villa with particular attention to the integration between natural and artificial light.'
            },
            images: {
                main: '../images/progetti/progetto-1.webp',
                gallery: [
                    '../images/progetti/progetto-1.webp',
                    '../images/progetti/progetto-1-detail.webp'
                ]
            },
            tags: ['residential', 'modern', 'custom']
        }
    },

    // ============================================
    // CATALOGHI (Catalogs)
    // ============================================
    catalogs: [
        {
            id: 'catalogo-collezioni',
            title: { it: 'Catalogo Collezioni 2026', en: 'Collections Catalog 2026' },
            description: { it: 'Scopri tutte le nostre collezioni', en: 'Discover all our collections' },
            image: '../images/cataloghi/collezioni-2026.webp',
            downloadUrl: '../files/cataloghi/granfo-luce-collezioni-2026.pdf',
            year: '2026'
        },
        {
            id: 'catalogo-contract',
            title: { it: 'Catalogo Contract & Hospitality', en: 'Contract & Hospitality Catalog' },
            description: { it: 'Soluzioni per progetti contract', en: 'Solutions for contract projects' },
            image: '../images/cataloghi/contract.webp',
            downloadUrl: '../files/cataloghi/granfo-luce-contract.pdf',
            year: '2026'
        }
    ],

    // ============================================
    // CONFIGURAZIONE GLOBALE
    // ============================================
    config: {
        brandName: 'Granfo Luce',
        brandLogo: './images/brand/granfoluce-logo.png',
        colors: {
            primary: '#0B1C18',
            accent: '#FF8C1A',
            gold: '#B8860B',
            textLight: '#E8E6E1'
        },
        contact: {
            phone: '+39 045 528541',
            email: 'granfoluce@hotmail.it',
            address: {
                it: 'Via Ponte S. Pancrazio 8, Verona',
                en: 'Via Ponte S. Pancrazio 8, Verona'
            }
        },
        social: {
            facebook: 'https://www.facebook.com/Granfoluce.lampadari/',
            instagram: 'https://www.instagram.com/granfoluce/',
            pinterest: 'https://it.pinterest.com/granfolucefb/'
        }
    }
};

// Export per uso globale
if (typeof window !== 'undefined') {
    window.GRANFO_DATABASE = GRANFO_DATABASE;
}

if (typeof module !== 'undefined' && module.exports) {
    module.exports = GRANFO_DATABASE;
}
