$root = "c:\Users\lucre_lsq7qo1\Desktop\lucri\ultimo progetto"

$rootMap = [ordered]@{
  "index.html" = "en\index.html"
  "chi-siamo.html" = "en\about.html"
  "prodotti.html" = "en\products.html"
  "cataloghi.html" = "en\catalogs.html"
  "progetti.html" = "en\projects.html"
  "contatti.html" = "en\contacts.html"
  "privacy-policy.html" = "en\privacy-policy.html"
  "domus.html" = "en\domus.html"
  "grazie.html" = "en\thank-you.html"
}

$productMap = [ordered]@{
  "prodotti-singoli\applique-v-parete.html" = "en\products-single\applique-v-parete.html"
  "prodotti-singoli\barcelo-tavolo.html" = "en\products-single\barcelo-table.html"
  "prodotti-singoli\barra-parete.html" = "en\products-single\barra-parete.html"
  "prodotti-singoli\bolla-sospensione.html" = "en\products-single\bolla-sospensione.html"
  "prodotti-singoli\camilla-sospensione.html" = "en\products-single\camilla-suspension.html"
  "prodotti-singoli\cono-sospensione.html" = "en\products-single\cono-sospensione.html"
  "prodotti-singoli\domus-sospensione.html" = "en\products-single\domus-suspension.html"
  "prodotti-singoli\ellisse-parete.html" = "en\products-single\ellisse-parete.html"
  "prodotti-singoli\fungo-black.html" = "en\products-single\luminero-suspension.html"
  "prodotti-singoli\gabs-sospensione.html" = "en\products-single\gabs-sospensione.html"
  "prodotti-singoli\garden-light-spot.html" = "en\products-single\garden-light-spot.html"
  "prodotti-singoli\ofelia-applique.html" = "en\products-single\ofelia-applique.html"
  "prodotti-singoli\ofelia-sospensione.html" = "en\products-single\ofelia-suspension.html"
  "prodotti-singoli\piantana-bolle.html" = "en\products-single\piantana-bolle.html"
  "prodotti-singoli\prodotto-outdoor.html" = "en\products-single\outdoor-product.html"
  "prodotti-singoli\sospensione-fungo.html" = "en\products-single\sospensione-fungo.html"
  "prodotti-singoli\sospensione-piatto.html" = "en\products-single\sospensione-piatto.html"
  "prodotti-singoli\sospensione-tubo.html" = "en\products-single\sospensione-tubo.html"
  "prodotti-singoli\tavolo-cubo.html" = "en\products-single\tavolo-cubo.html"
  "prodotti-singoli\terra-light.html" = "en\products-single\terra-light.html"
  "prodotti-singoli\vino-sospensione.html" = "en\products-single\vino-suspension.html"
}

$replacements = [ordered]@{
  'lang="it"' = 'lang="en"'
  'Artigiani della luce dal' = 'Artisans of light since'
  'Design & Illuminazione' = 'Design & Lighting'
  'Comfort Visivo' = 'Visual Comfort'
  'Novità 2026' = 'New for 2026'
  'Vetro di Murano e design contemporaneo. Ogni lampada è un pezzo unico, irripetibile come la tua casa.' = 'Murano glass and contemporary design. Each lamp is a unique piece, as one-of-a-kind as your home.'
  'Progettiamo e realizziamo soluzioni luminose uniche, unendo maestria artigiana e tecnologia contemporanea.' = 'We design and craft unique lighting solutions, combining artisanal mastery with contemporary technology.'
  'Sistemi integrati e soluzioni minimali. Quando la tecnologia scompare per dare spazio solo alla bellezza del tuo ambiente.' = 'Integrated systems and minimal solutions. When technology disappears to leave room only for the beauty of your space.'
  'Luce  <i><br>Architetturale.</i>' = 'Architectural <i><br>Light.</i>'
  'Artigiani della luce dal 1970.' = 'Artisans of light since 1970.'
  'Granfo Luce | Lampadari e Progettazione Illuminotecnica Verona' = 'Granfo Luce | Chandeliers and Lighting Design Verona'
  'Granfo Luce (Granfo Illuminazione S.N.C.) a Verona in Via Ponte S. Pancrazio 8. Esperti in lampadari artigianali, luce architetturale e progetti su misura dal 1970.' = 'Granfo Luce (Granfo Illuminazione S.N.C.) in Verona, Via Ponte S. Pancrazio 8. Experts in handcrafted chandeliers, architectural lighting, and bespoke projects since 1970.'
  'Artigiani della luce dal 1970. Scopri le nostre collezioni in vetro di Murano e design su misura.' = 'Artisans of light since 1970. Discover our collections in Murano glass and bespoke design.'
  'Artisans of light since 1970. Discover our collections in vetro di Murano e Design su misura.' = 'Artisans of light since 1970. Discover our collections in Murano glass and bespoke design.'
  'Artisans of light since 1970. Discover our collections in Murano glass e bespoke Design.' = 'Artisans of light since 1970. Discover our collections in Murano glass and bespoke design.'
  'Artisans of light since 1970. Creazioni uniche in vetro di Murano e Design Contemporary.' = 'Artisans of light since 1970. Unique creations in Murano glass and contemporary design.'
  'Granfo Luce - Esperti in lampadari artigianali, luce architetturale e progetti su misura dal 1970 a Verona' = 'Granfo Luce - Experts in handcrafted chandeliers, architectural lighting, and bespoke projects since 1970 in Verona'
  'vetro di Murano' = 'Murano glass'
  'Design su misura' = 'bespoke design'
  'Design Contemporary' = 'contemporary design'
  'Chi Siamo' = 'About'
  'Contattaci' = 'Contact Us'
  'Contatti' = 'Contacts'
  'Cataloghi' = 'Catalogs'
  'Progetti' = 'Projects'
  'Prodotti' = 'Products'
  'Collezioni & Cataloghi | GRANFO' = 'Collections & Catalogs | GRANFO'
  'Collezioni & Catalogs | GRANFO' = 'Collections & Catalogs | GRANFO'
  'Scarica i Cataloghi GRANFO Illuminazione. Collezioni decorative, tecniche e soluzioni su misura per il tuo progetto di luce.' = 'Download GRANFO catalogs. Decorative and technical collections and bespoke solutions for your lighting project.'
  'Scarica i Catalogs GRANFO Illuminazione. Collezioni decorative, tecniche e soluzioni su misura per il tuo progetto di luce.' = 'Download GRANFO catalogs. Decorative and technical collections and bespoke solutions for your lighting project.'
  'I nostri Cataloghi' = 'Our Catalogs'
  'I nostri Catalogs' = 'Our Catalogs'
  'Sfoglia le nostre creazioni e trova l''ispirazione per il tuo prossimo progetto.' = 'Browse our creations and find inspiration for your next project.'
  'Scarica il Catalogo' = 'Download catalog'
  'Area Professionisti' = 'Professional Area'
  'Progetti la luce?' = 'Designing light?'
  'Projects la luce?' = 'Designing light?'
  'lighting Designers' = 'lighting designers'
  'bespoke Design' = 'bespoke design'
  'Collaboriamo con architetti e lighting Designer fornendo supporto tecnico, file 3D e realizzazioni su misura per contract e residenziale.' = 'We collaborate with architects and lighting designers, providing technical support, 3D files, and bespoke solutions for contract and residential projects.'
  'Parla con il nostro ufficio tecnico' = 'Talk to our technical team'
  'Scopri i Progetti' = 'Discover the Projects'
  'Scopri la collezione' = 'Discover the collection'
  'Scopri le nostre collezioni' = 'Discover our collections'
  'Vieni a Trovarci' = 'Visit us'
  'Progetti Custom' = 'Custom Projects'
  'Nuova Collezione' = 'New Collection'
  'Collezione <br><i>Domus.</i>' = 'Collection <br><i>Domus.</i>'
  'Artigiano al lavoro' = 'Artisan at work'
  'Le Collezioni' = 'Collections'
  'Collezione Domus' = 'Domus Collection'
  'Collezione Generale' = 'General Collection'
  'Collezione Venezia' = 'Venice Collection'
  'Design della Luce' = 'Lighting Design'
  'Esplora le Categorie' = 'Explore Categories'
  'Sospensione' = 'Suspension'
  'Tavolo' = 'Table'
  'Terra' = 'Floor'
  'Parete' = 'Wall'
  'Soffitto' = 'Ceiling'
  'Una selezione di realizzazioni complesse che raccontano la nostra capacità di trasformare la luce in scultura. <br> La dimostrazione che, nel nostro laboratorio, nessuna sfida è impossibile.' = 'A selection of complex projects that show our ability to transform light into sculpture.<br>Proof that, in our workshop, no challenge is impossible.'
  'Esclusiva' = 'Exclusive'
  'L''eleganza del vetro di Murano' = 'The elegance of Murano glass'
  'La luce non è mai stata così materica.' = 'Light has never felt so tangible.'
  'Domus nasce dall''incontro tra l''antica tradizione del vetro cotto e un design contemporaneo basato sull''incastro puro.' = 'Domus is born from the meeting of the ancient tradition of kiln-fired glass and a contemporary design based on pure interlocking.'
  'Ogni lampada è fatta di formelle in vetro artistico, lavorate a mano per esaltare texture e imperfezioni che rendono ogni pezzo unico. La vera magia è la libertà: <strong>le lastre non sono fisse</strong>, puoi comporle e ricomporle per creare volumi e giochi di colore sempre nuovi.' = 'Each lamp is made of artistic glass tiles, handcrafted to highlight textures and imperfections that make every piece unique. The real magic is freedom: <strong>the plates are not fixed</strong>, you can compose and recompose them to create ever-new volumes and color plays.'
  'Vetro di Murano - Arancio e Smeraldo' = 'Murano glass - Orange and Emerald'
  'Vetro di Murano - Cristallo e Lapislazzulo' = 'Murano glass - Crystal and Lapis Lazuli'
  'Nessun prodotto trovato con questo colore.' = 'No products found with this color.'
  'Mostra tutti' = 'Show all'
  'Clicca su un colore per filtrare i prodotti.' = 'Click a color to filter products.'
  'L''eleganza del vetro e la tradizione artigiana reinterpretata in chiave moderna. Pezzi unici per ambienti esclusivi.' = 'The elegance of glass and artisan tradition reinterpreted in a modern key. Unique pieces for exclusive spaces.'
  'Una panoramica completa delle nostre soluzioni decorative e tecniche. L''essenza di Granfo Luce in un unico volume.' = 'A complete overview of our decorative and technical solutions. The essence of Granfo Luce in a single volume.'
  'Realizzate lampade su misura?' = 'Do you make bespoke lamps?'
  'Assolutamente sì. Uniamo la maestria artigiana alle tue esigenze: personalizziamo ogni dettaglio, dalla finitura alla dimensione, per offrirti non solo una lampada, ma un elemento di design unico e su misura.' = 'Absolutely. We combine artisanal mastery with your needs: we customize every detail, from finish to size, to offer not just a lamp but a unique bespoke design element.'
  'Operate solo a Verona?' = 'Do you only operate in Verona?'
  'La nostra sede è a Verona, ma operiamo ovunque. Seguiamo progetti in tutta Italia e all''estero, garantendo la stessa cura e competenza tecnica, sia per residenze private che per grandi spazi architettonici.' = 'Our headquarters are in Verona, but we operate everywhere. We follow projects throughout Italy and abroad, guaranteeing the same care and technical expertise, for both private residences and large architectural spaces.'
  'La nostra sede Ã¨ a Verona, ma operiamo ovunque. Seguiamo Projects in tutta Italia e all''estero, garantendo la stessa cura e competenza tecnica, sia per residenze private che per grandi spazi architettonici.' = 'Our headquarters are in Verona, but we operate everywhere. We follow projects throughout Italy and abroad, guaranteeing the same care and technical expertise, for both private residences and large architectural spaces.'
  'La nostra sede Ã¨ a Verona, ma operiamo ovunque.' = 'Our headquarters are in Verona, but we operate everywhere.'
  'La nostra sede Ã¨ a Verona, ma operiamo ovunque. We follow projects throughout Italy and abroad, guaranteeing the same care and technical expertise, for both private residences and large architectural spaces.' = 'Our headquarters are in Verona, but we operate everywhere. We follow projects throughout Italy and abroad, guaranteeing the same care and technical expertise, for both private residences and large architectural spaces.'
  'Seguiamo Projects in tutta Italia e all''estero, garantendo la stessa cura e competenza tecnica, sia per residenze private che per grandi spazi architettonici.' = 'We follow projects throughout Italy and abroad, guaranteeing the same care and technical expertise, for both private residences and large architectural spaces.'
  'Che tipo di illuminazione trattate?' = 'What type of lighting do you handle?'
  'Viviamo di due anime complementari. Da noi trovi sia l''illuminazione decorativa, fatta di pezzi artigianali dal calore unico, sia l''illuminazione tecnica e architetturale, essenziale e invisibile. Il nostro obiettivo è far convivere questi due mondi nel tuo spazio.' = 'We live by two complementary souls. With us you will find both decorative lighting, made of handcrafted pieces with unique warmth, and technical and architectural lighting, essential and invisible. Our goal is to make these two worlds coexist in your space.'
  'È un posto magico: ogni lampadario ha una storia ed è un capolavoro!' = 'It''s a magical place: every chandelier has a story and is a masterpiece!'
  'Cliente' = 'Customer'
  'Nota: Per maggiori informazioni e varianti Contattaci.' = 'Note: For more information and variants contact us.'
  'Nota: Per maggiori informazioni e varianti Contact Us.' = 'Note: For more information and variants contact us.'
  'value="vetro">Vetro' = 'value="vetro">Glass'
  'Barra Vetro' = 'Glass Bar'
  'Sospensione in vetro soffiato' = 'Blown glass suspension'
  'Realizzazione Artigianale su Misura' = 'Bespoke handcrafted production'
  'Vari colori disponibili' = 'Various colors available'
  'Due dimensioni' = 'Two sizes'
  'Vetro soffiato' = 'Blown glass'
  'Varianti colore' = 'Color variants'
  'Due misure disponibili per composizioni singole o in serie su isole e tavoli.' = 'Two sizes available for single compositions or series over islands and tables.'
  'Ogni pezzo è lavorato artigianalmente per ottenere una diffusione luminosa uniforme e raffinata.' = 'Each piece is handcrafted to achieve a uniform, refined light diffusion.'
  'Disponibile in diverse tonalità per coordinarsi con l’identità del progetto.' = 'Available in different shades to match the project’s identity.'
  'OFELIA è una sospensione in vetro soffiato che valorizza la materia con una luce morbida e controllata. Disponibile in vari colori e due dimensioni, si adatta con eleganza a progetti residenziali e hospitality.' = 'OFELIA is a blown glass suspension that enhances the material with a soft, controlled light. Available in various colors and two sizes, it suits residential and hospitality projects with elegance.'
  'Due misure disponibili' = 'Two sizes available'
  'CAMILLA è una sospensione in vetro soffiato lavorato da Maestri di Murano, in esclusivo colore fumuè. Ogni pezzo riflette l''arte del vetro veneziano con una luce morbida e raffinata, perfetta per interni che cercano autenticità artigianale e eleganza senza tempo.' = 'CAMILLA is a blown glass suspension crafted by Murano masters, in an exclusive smoky gray color. Each piece reflects the art of Venetian glass with a soft, refined light—perfect for interiors seeking artisanal authenticity and timeless elegance.'
  'Realizzata da artigiani veneziani di Murano con tecniche tradizionali tramandate da generazioni, ogni sospensione è un''opera d''arte unica.' = 'Made by Murano Venetian artisans with traditional techniques passed down for generations, each suspension is a unique work of art.'
  'Il colore fumuè, tonalità grigia affumicata, conferisce mistero e raffinatezza, adattandosi perfettamente a spazi contemporanei e classici.' = 'The smoky gray tone adds mystery and refinement, fitting perfectly into both contemporary and classic spaces.'
  'Il vetro soffiato crea una diffusione luminosa uniforme e delicata, ideale per atmosfere accoglienti e professionali.' = 'Blown glass creates a uniform, delicate light diffusion, ideal for welcoming and professional atmospheres.'
  'Sospensione Murano' = 'Murano suspension'
  'Sospensione vetro soffiato Murano' = 'Murano blown glass suspension'
  'Vetro soffiato Murano' = 'Murano blown glass'
  'Colore Fumuè' = 'Smoky gray'
  'Maestri artigiani Murano' = 'Murano master artisans'
  'Maestri di Murano' = 'Murano masters'
  'DOMUS è una sospensione in vetro in pasta trasparente, lavorato da Maestri di Murano con tecniche tradizionali veneziane. Disponibile in vari colori, crea una diffusione luminosa cristallina e sofisticata, perfetta per ambienti contemporanei e classici.' = 'DOMUS is a suspension in transparent glass paste, crafted by Murano masters with traditional Venetian techniques. Available in various colors, it creates a crystalline, sophisticated light diffusion—perfect for both contemporary and classic settings.'
  'Vetro in pasta trasparente' = 'Transparent glass paste'
  'Il vetro trasparente crea una diffusione luminosa cristallina e sofisticata, permettendo una visione pura della fonte luminosa con eleganza minimalista.' = 'The transparent glass creates a crystalline, sophisticated light diffusion, allowing a pure view of the light source with minimalist elegance.'
  'Disponibile in vari colori per adattarsi a diversi stili d''arredamento, da ambienti contemporanei a interni classici e raffinati.' = 'Available in various colors to suit different interior styles, from contemporary spaces to classic, refined interiors.'
  'Realizzata da artigiani veneziani con tecniche tradizionali tramandate da generazioni, ogni sospensione è un''opera unica in vetro in pasta trasparente.' = 'Made by Venetian artisans with traditional techniques passed down for generations, each suspension is a unique work in transparent glass paste.'
  'Vetro Pasta Trasparente Murano' = 'Transparent Glass Paste Murano'
  'Sospensione vetro pasta trasparente' = 'Transparent glass paste suspension'
  'Dettaglio vetro' = 'Glass detail'
  'Dettaglio finitura' = 'Finish detail'
  'in ambiente' = 'in setting'
  'Dettaglio Bagno' = 'Bathroom detail'
  'hero-novitÃ.webp' = 'hero-novità.webp'
  'hero-novitÃ .webp' = 'hero-novità.webp'
  'Ã—' = '×'
  'BARCELÃ“' = 'BARCELÓ'
  'BARCELÃ“ Tavolo' = 'BARCELÓ Table'
  'FumuÃ¨' = 'Smoky gray'
  'Vetro Murano' = 'Murano glass'
  'Vari colori' = 'Various colors'
  'Domus: la collezione esclusiva GRANFO in vetro di Murano.' = 'Domus: GRANFO''s exclusive collection in Murano glass.'
  'Cascata di Vetro' = 'Glass Cascade'
  'Salone delle Feste' = 'Grand Hall'
  'Villa sul Mare' = 'Seaside Villa'
  'Dettagli di Luce' = 'Light Details'
  'Cupola Artistica' = 'Artistic Dome'
  'Mosca' = 'Moscow'
  'Arabia Saudita' = 'Saudi Arabia'
  'Italia' = 'Italy'
  'EAU' = 'UAE'
  'Dettaglio bagno padronale: applique su misura in vetro artistico per integrarsi con i marmi.' = 'Master bathroom detail: bespoke applique in artistic glass to integrate with marble.'
  'Cupola in vetro artistico retroilluminata per soffitto a cassettoni.' = 'Backlit artistic glass dome for a coffered ceiling.'
  'Siamo located in Via Ponte S. Pancrazio 8 a Verona, unica sede di Granfo Illuminazione S.N.C. Non siamo una catena di negozi omonimi. Qui ricevi la competenza di chi ha passato cinquant''anni a perfezionare l''arte della luce.' = 'We are located at Via Ponte S. Pancrazio 8 in Verona, the sole location of Granfo Illuminazione S.N.C. We are not a chain of stores with the same name. Here you get the expertise of those who have spent fifty years perfecting the art of light.'
  'Granfo Luce è progettazione, non semplice vendita.' = 'Granfo Luce is design, not simple retail.'
  'Fondato nel 1970 come laboratorio artigiano a Verona, abbiamo costruito la nostra reputazione su una specializzazione unica: trasformare la luce in strumento di architettura e emozione.' = 'Founded in 1970 as an artisan workshop in Verona, we built our reputation on a unique specialization: turning light into a tool of architecture and emotion.'
  'Ogni progetto nasce da una consultazione approfondita. Analizziamo spazi, materialismi, volontà emotive. Non vendiamo cataloghi: disegniamo soluzioni su misura che rispondono a necessità specifiche. Che si tratti di una residenza privata, una struttura commerciale o un progetto architetturale complesso, la nostra filiera verticale (dalla progettazione alla produzione) garantisce totale controllo della qualità e della visione finale.' = 'Every project starts with an in-depth consultation. We analyze spaces, materials, and emotional intent. We don''t sell catalogs: we design bespoke solutions that meet specific needs. Whether it’s a private residence, a commercial venue, or a complex architectural project, our vertical supply chain (from design to production) ensures full control of quality and the final vision.'
  'Ogni progetto nasce da una consultazione approfondita. Analizziamo spazi, materialismi, volontÃ emotive. Non vendiamo Catalogs: disegniamo soluzioni su misura che rispondono a necessitÃ specifiche. Che si tratti di una Private Residence, una struttura commerciale o un progetto architetturale complesso, la nostra filiera verticale (dalla progettazione alla produzione) garantisce totale controllo della Quality e della visione finale.' = 'Every project starts with an in-depth consultation. We analyze spaces, materials, and emotional intent. We don''t sell catalogs: we design bespoke solutions that meet specific needs. Whether it’s a private residence, a commercial venue, or a complex architectural project, our vertical supply chain (from design to production) ensures full control of quality and the final vision.'
  'volontÃ emotive' = 'emotional intent'
  'volontÃ  emotive' = 'emotional intent'
  'necessitÃ specifiche' = 'specific needs'
  'necessitÃ  specifiche' = 'specific needs'
  'Non vendiamo Catalogs:' = 'We don''t sell catalogs:'
  'disegniamo soluzioni su misura che rispondono a' = 'we design bespoke solutions that meet'
  'Ogni progetto nasce da una consultazione approfondita.' = 'Every project starts with an in-depth consultation.'
  'Analizziamo spazi, materialismi,' = 'We analyze spaces, materials,'
  'Che si tratti di una Private Residence, una struttura commerciale o un progetto architetturale complesso,' = 'Whether it’s a private residence, a commercial venue, or a complex architectural project,'
  'garantisce totale controllo della Quality e della visione finale.' = 'ensures full control of quality and the final vision.'
  'OFELIA Ã¨ una Blown glass suspension con Socket E27. Disponibile in Various colors e Two sizes. Design artigianale Granfo Luce a Verona.' = 'OFELIA is a blown glass suspension with E27 socket. Available in various colors and two sizes. Handcrafted design by Granfo Luce in Verona.'
  'OFELIA Ã¨ una Blown glass suspension che valorizza la materia con una luce morbida e controllata. Disponibile in Various colors e Two sizes, si adatta con eleganza a Projects residenziali e hospitality.' = 'OFELIA is a blown glass suspension that enhances the material with a soft, controlled light. Available in various colors and two sizes, it suits residential and hospitality projects with elegance.'
  ' Ã¨ ' = ' is '
  'Ã¨ una' = 'is a'
  'Ã¨ un' = 'is a'
  'Ã¨ una Blown glass suspension' = 'is a blown glass suspension'
  'che valorizza la materia con una luce morbida e controllata.' = 'that enhances the material with a soft, controlled light.'
  'è una' = 'is a'
  'è un' = 'is a'
  'Disponibile in Various colors e Two sizes, si adatta con eleganza a Projects residenziali e hospitality.' = 'Available in various colors and two sizes, it suits residential and hospitality projects with elegance.'
  'Disponibile in Various colors e Two sizes.' = 'Available in various colors and two sizes.'
  'con Socket E27.' = 'with E27 socket.'
  'Design artigianale Granfo Luce a Verona.' = 'Handcrafted design by Granfo Luce in Verona.'
  'con Socket E27' = 'with E27 socket'
  'Handcrafted Design' = 'Handcrafted design'
  'Handcrafted Design by' = 'Handcrafted design by'
  'Socket E27.' = 'E27 socket.'
  'Blown glass suspension' = 'blown glass suspension'
  'DOMUS Ã¨ una Suspension in Transparent glass paste, lavorato da Murano masters, disponibile in Various colors. Socket E27. Illuminazione artigianale Granfo Luce a Verona.' = 'DOMUS is a transparent glass paste suspension crafted by Murano masters, available in various colors. E27 socket. Handcrafted lighting by Granfo Luce in Verona.'
  'DOMUS Ã¨ una Suspension in Transparent glass paste, lavorato da Murano masters con tecniche tradizionali veneziane. Disponibile in Various colors, crea una diffusione luminosa cristallina e sofisticata, perfetta per ambienti contemporanei e classici.' = 'DOMUS is a transparent glass paste suspension crafted by Murano masters with traditional Venetian techniques. Available in various colors, it creates a crystalline, sophisticated light diffusion, perfect for both contemporary and classic interiors.'
  'Realizzata da artigiani veneziani con tecniche tradizionali tramandate da generazioni, ogni Suspension Ã¨ un''opera unica in Transparent glass paste.' = 'Made by Venetian artisans with traditional techniques passed down for generations, each suspension is a unique work in transparent glass paste.'
  'DOMUS Ã¨ una' = 'DOMUS is a'
  'Ã¨ una Suspension in Transparent glass paste' = 'is a transparent glass paste suspension'
  'lavorato da Murano masters' = 'crafted by Murano masters'
  'disponibile in Various colors.' = 'available in various colors.'
  'Illuminazione artigianale Granfo Luce a Verona.' = 'Handcrafted lighting by Granfo Luce in Verona.'
  'crea una diffusione luminosa cristallina e sofisticata, perfetta per ambienti contemporanei e classici.' = 'creates a crystalline, sophisticated light diffusion, perfect for contemporary and classic interiors.'
  'ogni Suspension Ã¨ un''opera unica in Transparent glass paste.' = 'each suspension is a unique work in transparent glass paste.'
  'CAMILLA Ã¨ una' = 'CAMILLA is a'
  'lavorato da Murano masters, Smoky gray.' = 'crafted by Murano masters in smoky gray.'
  'in esclusivo Smoky gray.' = 'in an exclusive smoky gray.'
  'Elegante illuminazione artigianale Granfo Luce a Verona.' = 'Elegant handcrafted lighting by Granfo Luce in Verona.'
  'Searchno autenticitÃ  artigianale e eleganza senza tempo.' = 'seeking artisanal authenticity and timeless elegance.'
  'Spot Ã¨ una' = 'Spot is a'
  'Suspension a LED in ottone con Design minimalista e risparmio energetico.' = 'brass LED suspension with minimalist design and energy efficiency.'
  'Illuminazione moderna per ambienti residenziali e commerciali.' = 'Modern lighting for residential and commercial spaces.'
  'Suspension a LED in ottone che combina tecnologia moderna con Design minimalista.' = 'brass LED suspension that combines modern technology with minimalist design.'
  'Progettata per offrire illuminazione efficiente ed elegante, Ã¨ ideale per spazi residenziali e ambienti commerciali contemporanei.' = 'Designed to offer efficient, elegant lighting, it is ideal for residential spaces and contemporary commercial environments.'
  'LumiNero Ã¨ una' = 'LumiNero is a'
  'Suspension in metallo con Diameter 40 cm a luce diretta, Socket GU10.' = 'metal suspension with 40 cm diameter and direct light, GU10 socket.'
  'Dotata di Socket GU10, offre prestazioni luminose eccellenti per spazi residenziali e commercial.' = 'Equipped with a GU10 socket, it offers excellent lighting performance for residential and commercial spaces.'
  'Design minimale che si adatta a ogni ambiente.' = 'Minimal design that fits any environment.'
  'CAMILLA Ã¨ una Blown glass suspension lavorato da Murano masters, Smoky gray. Socket E27. Elegante illuminazione artigianale Granfo Luce a Verona.' = 'CAMILLA is a blown glass suspension crafted by Murano masters in smoky gray. E27 socket. Elegant handcrafted lighting by Granfo Luce in Verona.'
  'CAMILLA Ã¨ una Blown glass suspension lavorato da Murano masters, in esclusivo Smoky gray. Ogni pezzo riflette l''arte del vetro veneziano con una luce morbida e raffinata, perfetta per interni che Searchno autenticitÃ  artigianale e eleganza senza tempo.' = 'CAMILLA is a blown glass suspension crafted by Murano masters in an exclusive smoky gray. Each piece reflects the art of Venetian glass with a soft, refined light, perfect for interiors seeking artisanal authenticity and timeless elegance.'
  'Spot Ã¨ una Suspension a LED in ottone con Design minimalista e risparmio energetico. Illuminazione moderna per ambienti residenziali e commerciali. Granfo Luce Verona.' = 'Spot is a brass LED suspension with minimalist design and energy efficiency. Modern lighting for residential and commercial spaces. Granfo Luce Verona.'
  'Spot Ã¨ una Suspension a LED in ottone che combina tecnologia moderna con Design minimalista. Progettata per offrire illuminazione efficiente ed elegante, Ã¨ ideale per spazi residenziali e ambienti commerciali contemporanei.' = 'Spot is a brass LED suspension that combines modern technology with minimalist design. Designed to offer efficient, elegant lighting, it is ideal for residential spaces and contemporary commercial environments.'
  'LumiNero Ã¨ una Suspension in metallo con Diameter 40 cm a luce diretta, Socket GU10. Design artigianale Granfo Luce a Verona.' = 'LumiNero is a metal suspension with 40 cm diameter and direct light, GU10 socket. Handcrafted design by Granfo Luce in Verona.'
  'LumiNero Ã¨ una Suspension in metallo con Diameter 40 cm a luce diretta. Dotata di Socket GU10, offre prestazioni luminose eccellenti per spazi residenziali e commercial. Design minimale che si adatta a ogni ambiente.' = 'LumiNero is a metal suspension with 40 cm diameter and direct light. Equipped with a GU10 socket, it delivers excellent lighting performance for residential and commercial spaces. Minimal design that fits any environment.'
  'Costruzione in metallo di alta Quality per durabilitÃ  e prestazioni luminose ottimali.' = 'High-quality metal construction for durability and optimal lighting performance.'
  'Compatibile con lampade GU10 per massima flessibilitÃ  nella scelta delle sorgenti luminose.' = 'Compatible with GU10 lamps for maximum flexibility in choosing light sources.'
  'La wishlist Ã¨ vuota.' = 'The wishlist is empty.'
  'Thank you per averci contattato. Ti risponderemo al piÃ¹ presto.' = 'Thank you for contacting us. We will get back to you as soon as possible.'
  'Thank you per averci contattato. Ti risponderemo al più presto.' = 'Thank you for contacting us. We will get back to you as soon as possible.'
  'Thank you per averci contattato.' = 'Thank you for contacting us.'
  'Ti risponderemo al piÃ¹ presto.' = 'We will get back to you as soon as possible.'
  'Il tuo messaggio Ã¨ stato ricevuto con successo. Il nostro team ti risponderÃ  al piÃ¹ presto, solitamente entro 24 ore lavorative.' = 'Your message has been received successfully. Our team will get back to you as soon as possible, usually within 24 business hours.'
  'Il tuo messaggio Ã¨ stato ricevuto con successo.' = 'Your message has been received successfully.'
  'Il nostro team ti risponderÃ  al piÃ¹ presto, solitamente entro 24 ore lavorative.' = 'Our team will get back to you as soon as possible, usually within 24 business hours.'
  '"Non vendiamo luci. Progettiamo ambienti dove la luce diventa invisibile, ma la sua assenza se ne sentirebbe immediatamente."' = '"We don''t sell lights. We design spaces where light becomes invisible, but its absence would be felt immediately."'
  '"Non vendiamo luci. Projectsamo ambienti dove la luce diventa invisibile, ma la sua assenza se ne sentirebbe immediatamente."' = '"We don''t sell lights. We design spaces where light becomes invisible, but its absence would be felt immediately."'
  'La Nostra Identità' = 'Our Identity'
  'Due anime complementari' = 'Two complementary souls'
  'Crediamo che un ambiente perfetto nasca dall''equilibrio tra questi due mondi.' = 'We believe a perfect environment is born from the balance between these two worlds.'
  'Anima Decorativa' = 'Decorative Soul'
  'Pezzi unici realizzati a mano. Il calore imperfetto della lavorazione artigianale che dona carattere.' = 'Unique handmade pieces. The imperfect warmth of craftsmanship that gives character.'
  'Anima Tecnica' = 'Technical Soul'
  'Performance e funzionalità. Soluzioni tecniche per garantire comfort visivo e precisione.' = 'Performance and functionality. Technical solutions to ensure visual comfort and precision.'
  'Territorio' = 'Territory'
  'Produzione locale 100%.' = '100% local production.'
  'Qualità' = 'Quality'
  'Cura del Dettaglio' = 'Attention to Detail'
  'Controllo artigiano.' = 'Artisan control.'
  'Dal 1970' = 'Since 1970'
  'Atelier della Luce.' = 'Lighting Atelier.'
  'Granfo Luce è il marchio commerciale di Granfo Illuminazione S.N.C., unica sede Via Ponte S. Pancrazio 8, Verona.' = 'Granfo Luce is the trade name of Granfo Illuminazione S.N.C., sole location Via Ponte S. Pancrazio 8, Verona.'
  'Realizzazioni Light Design e Illuminazione su Misura | Granfo Luce' = 'Projects Light Design and Bespoke Lighting | Granfo Luce'
  'I Nostri Progetti' = 'Our Projects'
  'I Nostri Projects' = 'Our Projects'
  'Hai un progetto in mente?' = 'Have a project in mind?'
  'Dalla consulenza tecnica alla realizzazione di pezzi unici. Parliamo di come illuminare i tuoi spazi.' = 'From technical consulting to one-of-a-kind pieces. Let''s talk about how to light your spaces.'
  'Richiedi una consulenza' = 'Request a consultation'
  'Dettagli del progetto non disponibili.' = 'Project details not available.'
  'Tocca fuori per chiudere' = 'Click outside to close'
  'Installazione monumentale in vetro soffiato blu e bianco per l''ingresso principale. Altezza complessiva: 6 metri.' = 'Monumental installation in blue and white blown glass for the main entrance. Total height: 6 meters.'
  'Installazione monumentale in Blown glass blu e bianco per l''ingresso principale. Altezza complessiva: 6 metri.' = 'Monumental installation in blue and white blown glass for the main entrance. Total height: 6 meters.'
  'Progettazione completa per attico di lusso. Lampadari classici veneziani rivisitati con palette colori contemporanea.' = 'Full design for a luxury penthouse. Classic Venetian chandeliers reinterpreted with a contemporary color palette.'
  'Sistema di illuminazione a cascata che attraversa tre piani della villa, creando un effetto pioggia di luce.' = 'Cascading lighting system across three floors of the villa, creating a rain-of-light effect.'
  'Lampadario centrale per salone di rappresentanza. Struttura in oro 24k e cristallo molato a mano.' = 'Central chandelier for a grand reception hall. 24k gold structure and hand-cut crystal.'
  'Illuminazione architetturale esterna e interna per residenza privata sul mare.' = 'Exterior and interior architectural lighting for a private seaside residence.'
  'Bathroom detail padronale: applique su misura in vetro artistico per integrarsi con i marmi.' = 'Master bathroom detail: bespoke artistic glass applique to integrate with marble.'
  'Cupola in vetro artistico retroilluminata per Ceiling a cassettoni.' = 'Backlit artistic glass dome for a coffered ceiling.'
  'Complesso residenziale di lusso: illuminazione aree comuni e appartamenti privati.' = 'Luxury residential complex: lighting for common areas and private apartments.'
  'Informativa sulla Privacy' = 'Privacy Notice'
  'Contatti | GRANFO' = 'Contacts | GRANFO'
  'Contatta Granfo Luce. Showroom a Verona, progettazione su misura e assistenza clienti.' = 'Contact Granfo Luce. Showroom in Verona, bespoke design, and customer support.'
  'Contatta Granfo Luce. Showroom a Verona, progettazione su misura e Support clienti.' = 'Contact Granfo Luce. Showroom in Verona, bespoke design, and customer support.'
  'Parliamo di Luce' = 'Let''s talk about light'
  'Sede & Showroom' = 'Headquarters & Showroom'
  'Indirizzo' = 'Address'
  'Telefono' = 'Phone'
  'Orari Apertura' = 'Opening hours'
  'Lun:' = 'Mon:'
  'Mar-Sab:' = 'Tue-Sat:'
  'Scrivici un messaggio' = 'Send us a message'
  'Hai un progetto in mente o vuoi richiedere un preventivo?<br> Compila il form.' = 'Have a project in mind or want a quote?<br> Fill out the form.'
  'Il tuo nome' = 'Your name'
  'Nome e Cognome' = 'Full name'
  'Telefono (Opzionale)' = 'Phone (Optional)'
  'Phone (Opzionale)' = 'Phone (Optional)'
  'Messaggio' = 'Message'
  'Descrivi il tuo progetto o la tua richiesta...' = 'Describe your project or request...'
  'Invia Richiesta' = 'Send request'
  'La presente Privacy Policy descrive le modalità con cui GRANFO ILLUMINAZIONE S.N.C. (di seguito "Granfo Luce" o "noi") raccoglie, utilizza e protegge i dati personali degli utenti del sito web granfoluce.it in conformità al Regolamento (UE) 2016/679 (GDPR).' = 'This Privacy Policy describes how GRANFO ILLUMINAZIONE S.N.C. (hereinafter "Granfo Luce" or "we") collects, uses, and protects the personal data of users of the granfoluce.it website in accordance with Regulation (EU) 2016/679 (GDPR).'
  'Titolare del Trattamento' = 'Data Controller'
  'Dati Raccolti' = 'Data Collected'
  'Raccogliamo le seguenti tipologie di dati personali:' = 'We collect the following types of personal data:'
  'Dati di contatto:' = 'Contact data:'
  'Dati di navigazione:' = 'Navigation data:'
  'Dati di comunicazione:' = 'Communication data:'
  'Finalità del Trattamento' = 'Purpose of Processing'
  'I dati personali vengono trattati per le seguenti finalità:' = 'Personal data are processed for the following purposes:'
  'Risposta alle richieste:' = 'Responding to requests:'
  'Miglioramento del servizio:' = 'Service improvement:'
  'Obblighi di legge:' = 'Legal obligations:'
  'Base Giuridica del Trattamento' = 'Legal Basis for Processing'
  'Il trattamento dei dati personali si basa su:' = 'Processing of personal data is based on:'
  'Consenso:' = 'Consent:'
  'Esecuzione di un contratto:' = 'Performance of a contract:'
  'Legittimo interesse:' = 'Legitimate interest:'
  'Obbligo di legge:' = 'Legal obligation:'
  'Destinatari dei Dati' = 'Recipients of Data'
  'I tuoi dati personali possono essere comunicati a:' = 'Your personal data may be shared with:'
  'Collaboratori e dipendenti di Granfo Luce autorizzati al trattamento' = 'Collaborators and employees of Granfo Luce authorized to process data'
  'Fornitori di servizi tecnici (hosting, email marketing) in qualità di responsabili del trattamento' = 'Technical service providers (hosting, email marketing) acting as data processors'
  'Consulenti fiscali e commercialisti per adempimenti contabili' = 'Tax consultants and accountants for accounting obligations'
  'Autorità pubbliche in caso di obbligo di legge' = 'Public authorities in case of legal obligation'
  'I dati non vengono ceduti a terzi per finalità commerciali senza il tuo consenso esplicito.' = 'Data are not disclosed to third parties for commercial purposes without your explicit consent.'
  'Conservazione dei Dati' = 'Data Retention'
  'I dati personali vengono conservati per il tempo strettamente necessario alle finalità per cui sono stati raccolti:' = 'Personal data are stored for the time strictly necessary for the purposes for which they were collected:'
  'Richieste di contatto:' = 'Contact requests:'
  'Dati contabili:' = 'Accounting data:'
  'Diritti dell''Interessato' = 'Data Subject Rights'
  'In conformità al GDPR, hai il diritto di:' = 'Under the GDPR, you have the right to:'
  'Accesso:' = 'Access:'
  'Rettifica:' = 'Rectification:'
  'Cancellazione:' = 'Erasure:'
  'Limitazione:' = 'Restriction:'
  'Portabilità:' = 'Portability:'
  'Opposizione:' = 'Objection:'
  'Revoca del consenso:' = 'Withdrawal of consent:'
  'Per esercitare i tuoi diritti, contattaci all''indirizzo:' = 'To exercise your rights, contact us at:'
  'per finalità di analisi e miglioramento del servizio' = 'for analysis and service improvement purposes'
  'per finalitÃ di analisi e miglioramento del servizio' = 'for analysis and service improvement purposes'
  'Cookie' = 'Cookies'
  'Il sito utilizza cookie tecnici necessari per il funzionamento del sito (es. memorizzazione delle preferenze). Non utilizziamo cookie di profilazione o tracciamento di terze parti senza il tuo consenso.' = 'The site uses technical cookies necessary for its operation (e.g., storing preferences). We do not use profiling or third-party tracking cookies without your consent.'
  'Puoi gestire le preferenze sui cookie tramite le impostazioni del tuo browser.' = 'You can manage cookie preferences through your browser settings.'
  'Sicurezza dei Dati' = 'Data Security'
  'Adottiamo misure tecniche e organizzative adeguate per proteggere i dati personali da accessi non autorizzati, perdita, distruzione o alterazione. Il sito utilizza connessioni sicure (HTTPS) e i dati sono conservati su server protetti.' = 'We adopt appropriate technical and organizational measures to protect personal data from unauthorized access, loss, destruction, or alteration. The site uses secure connections (HTTPS) and data are stored on protected servers.'
  'Modifiche alla Privacy Policy' = 'Changes to this Privacy Policy'
  'Ci riserviamo il diritto di modificare questa Privacy Policy in qualsiasi momento. Le modifiche saranno pubblicate su questa pagina con l''indicazione della data di aggiornamento. Ti invitiamo a consultare periodicamente questa pagina.' = 'We reserve the right to change this Privacy Policy at any time. Changes will be published on this page with the update date. We invite you to review this page periodically.'
  'Ultimo aggiornamento:' = 'Last updated:'
  'Reclami' = 'Complaints'
  'Hai il diritto di proporre reclamo all''autorità di controllo competente (Garante per la Protezione dei Dati Personali - <a href="https://www.garanteprivacy.it" target="_blank" style="color: var(--color-accent);">www.garanteprivacy.it</a>) in caso di violazione delle normative sulla privacy.' = 'You have the right to lodge a complaint with the competent supervisory authority (Italian Data Protection Authority - <a href="https://www.garanteprivacy.it" target="_blank" style="color: var(--color-accent);">www.garanteprivacy.it</a>) in case of violation of privacy regulations.'
  'Per qualsiasi domanda o dubbio sulla presente Privacy Policy, contattaci:' = 'For any questions or concerns about this Privacy Policy, contact us:'
  'Vieni a trovarci in showroom per scoprire il nostro catalogo nella sua interezza.' = 'Visit our showroom to discover our full catalog.'
  'Visit us in showroom per scoprire il nostro catalogo nella sua interezza.' = 'Visit our showroom to discover our full catalog.'
  'Filtra' = 'Filter'
  'Vedi Risultati' = 'View results'
  'Applica filtri' = 'Apply filters'
  'Categoria' = 'Category'
  'Materiale' = 'Material'
  'Metallo' = 'Metal'
  'Oro' = 'Gold'
  'Stile' = 'Style'
  'Moderno' = 'Modern'
  'Classico' = 'Classic'
  'Contemporaneo' = 'Contemporary'
  'Vasi e Oggettistica' = 'Vases & Decor'
  'Sospensioni' = 'Suspensions'
  'Lampada a sospensione' = 'Suspension lamp'
  'Lampada da tavolo' = 'Table lamp'
  'Prezzo su richiesta' = 'Price on request'
  'Richiedi Consulenza' = 'Request consultation'
  'Richiedi Informazioni' = 'Request information'
  'Vedi tutto' = 'View all'
  'Vedi tutti' = 'View all'
  'Oltre lo standard' = 'Beyond the standard'
  'Studio e Progettazione' = 'Study & Design'
  'Sviluppiamo disegni tecnici e calcoli illuminotecnici precisi per definire dimensioni, materiali e resa luminosa prima di andare in produzione.' = 'We develop technical drawings and precise lighting calculations to define dimensions, materials, and light output before production.'
  'Abbiamo arredato la nostra casa con le lampade di Granfo Luce. Mi sono trovata benissimo. Ricevo moltissimi complimenti per i prodotti che ho acquistato.' = 'We furnished our home with Granfo Luce lamps. I was very satisfied. I receive many compliments for the products I purchased.'
  'Offrite consulenza illuminotecnica?' = 'Do you offer lighting consultancy?'
  'Certamente. Oltre alla creazione artigianale, offriamo un servizio tecnico completo: calcoli illuminotecnici e progettazione su misura per assicurare che ogni ambiente abbia la luce corretta, funzionale e performante.' = 'Certainly. Beyond craftsmanship, we provide a full technical service: lighting calculations and bespoke design to ensure every space has the right, functional, high-performance light.'
  'Residenza Privata' = 'Private Residence'
  'Villa Privata' = 'Private Villa'
  'Caratteristiche principali' = 'Key features'
  'Servizi inclusi' = 'Included services'
  'Consulenza' = 'Consulting'
  'Assistenza' = 'Support'
  'Garanzia' = 'Warranty'
  'anni' = 'years'
  'su difetti di produzione' = 'on manufacturing defects'
  'Prova materiali a Verona' = 'See materials in our Verona showroom'
  'Email' = 'Email'
  'latua@email.com' = 'you@email.com'
  'Attacco' = 'Socket'
  'Colori' = 'Colors'
  'Dimensioni' = 'Dimensions'
  'Lavorazione' = 'Craftsmanship'
  'Tipo luce' = 'Light type'
  'Consumo' = 'Consumption'
  'Funzionalità' = 'Function'
  'Base' = 'Base'
  'Paralume' = 'Shade'
  'Diametro' = 'Diameter'
  'Colore' = 'Color'
  'Mostrando' = 'Showing'
  'Nessun prodotto trovato.' = 'No products found.'
  'Collezione Lampadari e Sistemi Luce | Granfo Luce Verona' = 'Chandeliers and Lighting Systems Collection | Granfo Luce Verona'
  'Esperti in lampadari artigianali, luce architetturale e Projects su misura Since 1970.' = 'Experts in handcrafted chandeliers, architectural lighting, and bespoke projects since 1970.'
  'Vai alla wishlist' = 'Go to wishlist'
  'Preferiti' = 'Favorites'
  'La tua Wishlist' = 'Your Wishlist'
  'Invia via WhatsApp' = 'Send via WhatsApp'
  'Invia via Email' = 'Send via Email'
  'Nessun prodotto in wishlist.' = 'No products in wishlist.'
  'Tavolo Cubo' = 'Cube Table'
  'Tavolo Lastra' = 'Slab Table'
  'Tavolo Tubo' = 'Tube Table'
  'Tavolo Fungo' = 'Mushroom Table'
  'Tubo Gigante' = 'Giant Tube'
  'Suspension Tubo' = 'Tube Suspension'
  'Suspension Vino' = 'Vino Suspension'
  'Lampada Suspension Fungo' = 'Fungo Suspension Lamp'
  'Cerca...' = 'Search...'
  'Cerca..' = 'Search..'
  'Cerca' = 'Search'
  'Grazie' = 'Thank you'
  'Messaggio inviato' = 'Message sent'
  'Torna alla home' = 'Back to home'
}

function Apply-Replacements([string]$content) {
  foreach ($key in $replacements.Keys) {
    $content = $content -replace [regex]::Escape($key), $replacements[$key]
  }
  $content = $content -replace 'con Socket E27', 'with E27 socket'
  $content = $content -replace 'Handcrafted Design', 'Handcrafted design'
  $content = $content -replace 'Thank you per averci contattato\. Ti risponderemo al piÃ¹ presto\.', 'Thank you for contacting us. We will get back to you as soon as possible.'
  $content = $content -replace 'Thank you per averci contattato!', 'Thank you for contacting us!'
  $content = $content -replace 'Il tuo messaggio Ã¨ stato ricevuto con successo\. Il nostro team ti risponderÃ  al piÃ¹ presto, solitamente entro 24 ore lavorative\.', 'Your message has been received successfully. Our team will get back to you as soon as possible, usually within 24 business hours.'
  $content = $content -replace 'Il tuo messaggio[^.]*lavorative\.', 'Your message has been received successfully. Our team will get back to you as soon as possible, usually within 24 business hours.'
  $content = $content -replace 'Il tuo messaggio Ã¨ stato ricevuto con successo\.', 'Your message has been received successfully.'
  $content = $content -replace 'Il nostro team ti risponderÃ  al piÃ¹ presto, solitamente entro 24 ore lavorative\.', 'Our team will get back to you as soon as possible, usually within 24 business hours.'
  $content = $content -replace 'Nel frattempo, puoi esplorare le nostre collezioni o visitare il nostro showroom a Verona\.', 'In the meantime, you can explore our collections or visit our showroom in Verona.'
  $content = $content -replace 'Scopri i Products', 'Discover the products'
  $content = Fix-Mojibake $content
  $content = $content -replace 'Murano glass e bespoke Design', 'Murano glass and bespoke design'
  $content = $content -replace 'Murano glass e bespoke design', 'Murano glass and bespoke design'
  $content = $content -replace 'lighting Designers', 'lighting designers'
  $content = $content -replace 'Phone \(Opzionale\)', 'Phone (Optional)'
  $content = $content -replace 'Dettaglio progetto', 'Project detail'
  $content = $content -replace 'Chiudi', 'Close'
  $content = $content -replace 'Tocca fuori per chiudere', 'Click outside to close'
  $arrowChar = [char]0x2192
  $upArrowChar = [char]0x2191
  $timesChar = [char]0x00D7
  $copyChar = [char]0x00A9
  $rightArrowEntity = ([char]38) + 'rarr;'
  $upArrowEntity = ([char]38) + 'uarr;'
  $timesEntity = ([char]38) + 'times;'
  $copyEntity = ([char]38) + 'copy;'
  $content = $content -replace [regex]::Escape([string]$arrowChar), $rightArrowEntity
  $content = $content -replace [regex]::Escape([string]$upArrowChar), $upArrowEntity
  $content = $content -replace [regex]::Escape([string]$timesChar), $timesEntity
  $content = $content -replace [regex]::Escape([string]$copyChar), $copyEntity
  $mbClose = [string]([char]0x00E2) + [char]0x0153 + [char]0x2022
  $content = $content -replace [regex]::Escape($mbClose), $timesEntity
  $content = $content -replace ([string]([char]0x00C2) + $copyEntity), $copyEntity
  return $content
}

function Fix-Mojibake([string]$content) {
  if ($content -match '[Ãâ]') {
    $bytes = [System.Text.Encoding]::GetEncoding(1252).GetBytes($content)
    return [System.Text.Encoding]::UTF8.GetString($bytes)
  }
  return $content
}

function Normalize-ImagePaths([string]$content) {
  $content = $content -replace '(?i)images/Products/', 'images/prodotti/'
  $content = $content -replace '(?i)images/Projects/', 'images/progetti/'
  $content = $content -replace '(?i)images/Catalogs/', 'images/cataloghi/'
  $content = $content -replace '(?i)images/prodotti/Suspension/', 'images/prodotti/Sospensione/'
  $content = $content -replace '(?i)images/prodotti/Table/', 'images/prodotti/Tavolo/'
  $content = $content -replace '(?i)images/prodotti/Floor/', 'images/prodotti/Terra/'
  $content = $content -replace '(?i)images/prodotti/Wall/', 'images/prodotti/Parete/'
  $content = $content -replace '(?i)images/prodotti/Ceiling/', 'images/prodotti/Soffitto/'
  $content = $content -replace '(?i)copertina-Products\.webp', 'copertina-prodotti.webp'
  $content = $content -replace '(?i)Tablecubo\.webp', 'tavolocubo.webp'
  $content = $content -replace '(?i)Floorlight\.webp', 'terralight.webp'
  $content = $content -replace '(?i)Suspension-aurum\.webp', 'sospensione-aurum.webp'
  $content = $content -replace '(?i)Suspension-fungo\.webp', 'sospensione-fungo.webp'
  $content = $content -replace '(?i)Tube Suspension\.webp', 'sospensione tubo.webp'
  $content = $content -replace '(?i)hero-Projects\.webp', 'hero-progetti.webp'
  return $content
}

function Update-LinksRoot([string]$content) {
  $content = $content -replace 'href="style\.css(\?[^"\s]*)?"', 'href="../style.css$1"'
  $content = $content -replace 'src="luxury\.js(\?[^"\s]*)?"', 'src="../luxury.js$1"'
  $content = $content -replace 'src="nav-behavior\.js(\?[^"\s]*)?"', 'src="../nav-behavior.js$1"'
  $content = $content -replace 'src="product-search-index\.js(\?[^"\s]*)?"', 'src="../product-search-index.js$1"'
  $content = $content -replace '(href|src)="\./images/', '$1="../images/'
  $content = $content -replace '(href|src)="images/', '$1="../images/'
  $content = $content -replace 'url\((\s*["'']?)\./images/', 'url($1../images/'
  $content = $content -replace 'url\((\s*["'']?)images/', 'url($1../images/'
  $content = $content -replace '(href|src)="files/', '$1="../files/'
  $content = $content -replace '(href|src)="videos/', '$1="../videos/'
  $content = $content -replace '(["''])images/placeholder\.png\1', '$1../images/placeholder.png$1'
  $content = $content -replace 'placeholder="Cerca\.\.\."', 'placeholder="Search..."'
  $content = $content -replace 'placeholder="Cerca"', 'placeholder="Search"'
  $content = $content -replace '>Cerca<', '>Search<'

  $content = $content -replace 'Products\.html', 'products.html'
  $content = $content -replace 'Projects\.html', 'projects.html'
  $content = $content -replace 'Catalogs\.html', 'catalogs.html'
  $content = $content -replace 'Contacts\.html', 'contacts.html'
  $content = $content -replace 'chi-siamo\.html', 'about.html'
  $content = $content -replace 'prodotti\.html', 'products.html'
  $content = $content -replace 'cataloghi\.html', 'catalogs.html'
  $content = $content -replace 'progetti\.html', 'projects.html'
  $content = $content -replace 'contatti\.html', 'contacts.html'
  $content = $content -replace 'grazie\.html', 'thank-you.html'
  $content = $content -replace 'prodotti-singoli/', 'products-single/'

  $content = Normalize-ImagePaths $content

  return $content
}

function Update-LinksProduct([string]$content) {
  $content = $content -replace 'href="\.\./style\.css(\?[^"\s]*)?"', 'href="../../style.css$1"'
  $content = $content -replace '(href|src)="\.\./images/', '$1="../../images/'
  $content = $content -replace '(href|src)="\.\./files/', '$1="../../files/'
  $content = $content -replace '(href|src)="\.\./videos/', '$1="../../videos/'
  $content = $content -replace 'url\((\s*["'']?)\./images/', 'url($1../../images/'
  $content = $content -replace 'url\((\s*["'']?)images/', 'url($1../../images/'
  $content = $content -replace '(["''])images/placeholder\.png\1', '$1../../images/placeholder.png$1'
  $content = $content -replace 'src="\.\./luxury\.js(\?[^"\s]*)?"', 'src="../../luxury.js$1"'
  $content = $content -replace 'src="\.\./nav-behavior\.js(\?[^"\s]*)?"', 'src="../../nav-behavior.js$1"'
  $content = $content -replace 'placeholder="Cerca\.\.\."', 'placeholder="Search..."'
  $content = $content -replace 'placeholder="Cerca"', 'placeholder="Search"'
  $content = $content -replace '>Cerca<', '>Search<'

  $content = $content -replace '\.\./chi-siamo\.html', '../about.html'
  $content = $content -replace '\.\./prodotti\.html', '../products.html'
  $content = $content -replace '\.\./cataloghi\.html', '../catalogs.html'
  $content = $content -replace '\.\./progetti\.html', '../projects.html'
  $content = $content -replace '\.\./contatti\.html', '../contacts.html'

  $content = Normalize-ImagePaths $content

  return $content
}

function Ensure-ProjectsModal([string]$content) {
  if ($content -match 'id="project-modal"') { return $content }
  $modal = @'
    <div id="project-modal" class="project-modal" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="project-modal-content" onclick="event.stopPropagation()">
            <button class="project-modal-close" onclick="closeProjectModal()" aria-label="Chiudi">&times;</button>
            <img id="modal-project-image" src="" alt="Dettaglio progetto" loading="lazy">
            <div class="project-modal-text">
                <span id="modal-project-tag" class="project-modal-tag"></span>
                <h3 id="modal-project-title"></h3>
                <p id="modal-project-desc"></p>
            </div>
            <div class="project-modal-hint">Tocca fuori per chiudere</div>
        </div>
    </div>
'@
  $footerToken = '<footer class="footer">'
  if ($content -match $footerToken) {
    $replacement = $modal + "`r`n`r`n" + $footerToken
    return ($content -replace [regex]::Escape($footerToken), $replacement)
  }
  return $content + "`r`n`r`n" + $modal
}

function Set-LangSelector([string]$content, [string]$itRel, [string]$enRel) {
  $itRel = $itRel -replace '\\', '/'
  $enRel = $enRel -replace '\\', '/'
  $block = '<div class="lang-selector"><a href="' + $itRel + '" class="lang-item">IT</a><a href="' + $enRel + '" class="lang-item active">EN</a></div>'
  return $content -replace '<div class="lang-selector">.*?</div>', $block
}

foreach ($pair in $rootMap.GetEnumerator()) {
  $src = Join-Path $root $pair.Key
  $dst = Join-Path $root $pair.Value
  if (!(Test-Path $src)) { continue }
  $content = Get-Content $src -Raw
  if ($pair.Key -eq 'progetti.html') {
    $content = Ensure-ProjectsModal $content
  }
  $content = Apply-Replacements $content
  $content = Update-LinksRoot $content
  $itRel = "../" + $pair.Key
  $content = Set-LangSelector $content $itRel '#'
  Set-Content -Path $dst -Value $content -Encoding UTF8
}

foreach ($pair in $productMap.GetEnumerator()) {
  $src = Join-Path $root $pair.Key
  $dst = Join-Path $root $pair.Value
  if (!(Test-Path $src)) { continue }
  $content = Get-Content $src -Raw
  $content = Apply-Replacements $content
  $content = Update-LinksProduct $content
  $itRel = "../../" + $pair.Key.Replace('\\','/')
  $content = Set-LangSelector $content $itRel '#'
  Set-Content -Path $dst -Value $content -Encoding UTF8
}

Write-Host "EN pages regenerated."