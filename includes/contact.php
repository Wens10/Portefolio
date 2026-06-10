<section class="contact-section">
    <div class="contact-flex">
        <form class="contact-form" id="contact-form" action="https://formspree.io/f/xldpnaqa" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="surname">Prénom :</label>
            <input type="text" id="surname" name="surname" required>

            <label for="email">Votre Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" id="submit-btn">Envoyer</button>

            <p id="confirmation-status" style="margin-top: 15px; font-weight: bold;"></p>
        </form>

        <div class="contact-info-map">
            <div class="contact-info">
                <h3>Mes coordonnées</h3>
                <p><strong>Email :</strong> <a href="mailto:wenceslasbouity92@gmail.com">wenceslasbouity92@gmail.com</a></p>
                <p><strong>Téléphone :</strong> <a href="tel:+33601462715">+33 6 01 46 27 15</a></p>
                <h3>Localisation</h3>
                <p>Nemours, France</p>
            </div>
            <div class="map-container">
                <iframe
                    src="https://www.openstreetmap.org/export/embed.html?bbox=2.679%2C48.257%2C2.717%2C48.285&amp;layer=mapnik&amp;marker=48.275%2C2.698"
                    style="border: 1px solid var(--border); width:100%; height:250px; border-radius: 8px;" allowfullscreen=""
                    loading="lazy"></iframe>
                <small><a href="https://www.openstreetmap.org/?mlat=48.275&amp;mlon=2.698#map=14/48.2750/2.6980"
                    target="_blank" rel="noopener">Voir sur OpenStreetMap</a></small>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
  (function() { emailjs.init("PGOmChPZ7T3f2gdmE"); })();

  document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const confirmation = document.getElementById("confirmation-status");
    const btn = document.getElementById("submit-btn");
    const params = {
      name:    document.getElementById("name").value,
      surname: document.getElementById("surname").value,
      email:   document.getElementById("email").value,
      message: document.getElementById("message").value,
      time:    new Date().toLocaleString("fr-FR")
    };
    btn.textContent = "Envoi en cours...";
    btn.disabled = true;
    emailjs.send("service_240de3n", "template_rus6xqa", params)
    .then(() => emailjs.send("service_240de3n", "template_zjaw9sa", params))
    .then(() => {
      confirmation.textContent = "Merci ! Votre message a bien été envoyé.";
      confirmation.style.color = "var(--accent)";
      document.getElementById('contact-form').reset();
    })
    .catch(() => {
      confirmation.textContent = "Une erreur est survenue. Réessayez plus tard.";
      confirmation.style.color = "#dc2626";
    })
    .finally(() => { btn.textContent = "Envoyer"; btn.disabled = false; });
  });
</script>

<style>
.contact-section {
    background: transparent;
    border: none;
    border-radius: 0;
    padding: 0;
    width: 95%;
    max-width: 900px;
    margin: 0 auto;
    box-shadow: none;
}

.contact-section h2 {
    color: var(--accent);
    font-size: clamp(1.4rem, 3vw, 1.8rem);
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-align: center;
}

.contact-section h3 {
    color: var(--txt);
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    margin-top: 1rem;
}

.contact-flex {
    display: flex;
    gap: clamp(1rem, 3vw, 2rem);
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
}

.contact-form {
    flex: 1 1 300px;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    min-width: 250px;
    max-width: 450px;
}

.contact-form label {
    font-weight: 600;
    font-size: 0.875rem;
    color: var(--txt);
}

.contact-form input,
.contact-form textarea {
    padding: 10px 14px;
    border: 1.5px solid var(--border);
    border-radius: 8px;
    background: var(--bg-soft);
    color: var(--txt);
    font-size: 0.9rem;
    width: 100%;
    font-family: var(--font);
    transition: border-color var(--tr);
    outline: none;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: var(--accent);
    background: var(--bg-hover);
}

.contact-form button {
    background: var(--accent);
    color: #fff;
    border: none;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 700;
    cursor: pointer;
    font-size: 0.9rem;
    font-family: var(--font);
    transition: background var(--tr), transform var(--tr), box-shadow var(--tr);
    box-shadow: 0 2px 10px rgba(196,30,58,0.25);
}

.contact-form button:hover {
    background: var(--accent-h);
    transform: translateY(-2px);
    box-shadow: var(--shadow-a);
}

.contact-form button:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

.contact-info-map {
    flex: 1 1 300px;
    min-width: 250px;
    max-width: 450px;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    font-size: 0.9rem;
    color: var(--txt-muted);
}

.contact-info a {
    color: var(--accent);
    text-decoration: none;
}

.contact-info a:hover { text-decoration: underline; }

.map-container {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
}

@media (max-width: 768px) {
    .contact-flex { flex-direction: column; align-items: center; }
    .contact-form, .contact-info-map { max-width: 100%; }
    .map-container iframe { height: 200px; }
}
</style>
