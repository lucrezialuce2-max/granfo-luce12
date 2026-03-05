<form class="luxury-contact-form" action="https://formspree.io/f/mzzyojpq" method="POST">
    <h3 class="luxury-title">Scrivici un messaggio</h3>
    <p class="luxury-subtitle">Hai un progetto in mente o vuoi richiedere un preventivo? Compila il form e ti ricontattiamo.</p>

    <div class="luxury-field">
        <label for="contact-name">Il tuo nome</label>
        <input id="contact-name" type="text" name="name" placeholder="Nome e Cognome" required>
    </div>

    <div class="luxury-field">
        <label for="contact-email">Email</label>
        <input id="contact-email" type="email" name="email" placeholder="latua@email.com" required>
    </div>

    <div class="luxury-field">
        <label for="contact-phone">Telefono (Opzionale)</label>
        <input id="contact-phone" type="tel" name="phone" placeholder="+39 ...">
    </div>

    <div class="luxury-field">
        <label for="contact-message">Messaggio</label>
        <textarea id="contact-message" name="message" rows="5" placeholder="Descrivi il tuo progetto o la tua richiesta..." required></textarea>
    </div>

    <button type="submit" class="btn btn-gold w-full luxury-submit">Invia Richiesta</button>
</form>
