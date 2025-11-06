 <section class="contact-section">
                <h2>Contactez-moi</h2>
                <div class="contact-flex">
                    <form class="contact-form" action="https://formspree.io/f/xldpnaqa" method="POST">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" required>

                        <label for="surname">Prénom :</label>
                        <input type="text" id="surname" name="surname" required>

                        <label for="email">Votre Email :</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Message :</label>
                        <textarea id="message" name="message" rows="5" required></textarea>

                        <button type="submit">Envoyer</button>
                    </form>
                    <div class="contact-info-map">
                        <div class="contact-info">
                            <h3>Mes coordonnées</h3>
                            <p><strong>Email :</strong> <a
                                    href="mailto:judebouity19@gmail.com" style="cursor: none; color: whitesmoke;">judebouity19@gmail.com</a></p>
                            <p><strong>Téléphone :</strong> <a href="tel:+33601462715" style="cursor: none; color: whitesmoke;">+33 6 01 46 27 15</a></p>
                            <h3>Localisation</h3>
                            <p>Nemours, France</p>
                        </div>
                        <div class="map-container">
                            <iframe
                                src="https://www.openstreetmap.org/export/embed.html?bbox=2.679%2C48.257%2C2.717%2C48.285&amp;layer=mapnik&amp;marker=48.275%2C2.698"
                                style="border:1px solid #222; width:100%; height:250px;" allowfullscreen=""
                                loading="lazy"></iframe>
                            <small><a
                                    href="https://www.openstreetmap.org/?mlat=48.275&amp;mlon=2.698#map=14/48.2750/2.6980"
                                    target="_blank" rel="noopener">Voir sur OpenStreetMap</a></small>
                        </div>
                    </div>
                </div>
</section>
            <style>
:root {
  --color-primary: #0C4B82;
  --color-secondary: #2e2d2b;
  --color-secondary2: #0b0b0b;
  --color-text: #ffffff;
  --color-primary-light: #156bb5;
  --color-secondary-light: #3c3b38;
  --color-text-muted: #cccccc;
  --background-dark: var(--color-secondary);
  --background-light: #f5f5f5;
  --border-color: rgba(255, 255, 255, 0.1);
  --shadow-color: rgba(0, 0, 0, 0.2);
}

.contact-section {
    background: #0c4b8242;
    backdrop-filter: blur(13px);
    color: var(--color-primary);
    padding: clamp(1rem, 4vw, 2rem);
    border: 1px solid var(--color-primary);
    border-radius: 12px;
    width: 95%;
    max-width: 900px;
    margin: 2rem auto;
}

.contact-section h2,
.contact-section h3 {
    color: #0C4B82;
    margin-bottom: clamp(0.5rem, 2vw, 1rem);
    font-size: clamp(1.2rem, 3vw, 1.5rem);
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
    gap: clamp(0.5rem, 2vw, 1rem);
    margin-bottom: 0;
    min-width: 250px;
    width: 100%;
    max-width: 450px;
}

.contact-form label {
    font-weight: bold;
    font-size: clamp(0.9rem, 2vw, 1rem);
}

.contact-form input,
.contact-form textarea {
    padding: clamp(0.3rem, 1.5vw, 0.5rem);
    border: 1px solid #0C4B82;
    border-radius: 6px;
    background: #222;
    color: #fff;
    font-size: clamp(0.9rem, 2vw, 1rem);
    width: 100%;
}

.contact-form button {
    background: #0C4B82;
    color: #181818;
    border: none;
    padding: clamp(0.5rem, 2vw, 0.7rem) clamp(1rem, 3vw, 1.5rem);
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.2s;
    font-size: clamp(0.9rem, 2vw, 1rem);
}

.contact-form button:hover {
    background: #156bb5;
}

.contact-info-map {
    flex: 1 1 300px;
    min-width: 250px;
    width: 100%;
    max-width: 450px;
    display: flex;
    flex-direction: column;
    gap: clamp(0.3rem, 1.5vw, 0.5rem);
}

.contact-info {
    margin-bottom: clamp(0.3rem, 1.5vw, 0.5rem);
    font-size: clamp(0.9rem, 2vw, 1rem);
}

.contact-info a {
    color: #0C4B82;
    text-decoration: underline;
}

.map-container {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
}

@media (max-width: 768px) {
    .contact-flex {
        flex-direction: column;
        align-items: center;
    }

    .contact-form,
    .contact-info-map {
        max-width: 100%;
    }

    .map-container iframe {
        height: clamp(180px, 30vw, 250px);
    }
}

@media (max-width: 480px) {
    .contact-section {
        padding: 1rem;
    }

    .contact-flex {
        gap: 1rem;
    }
}
            </style>