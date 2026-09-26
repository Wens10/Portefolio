<?php /* Widget chatbot IA — inclus depuis footer.php, parle à api_chat.php */ ?>
<div class="wb-chat" id="wbChat">
  <button class="wb-chat-toggle" id="wbChatToggle" type="button" aria-expanded="false" aria-controls="wbChatPanel" aria-label="Ouvrir l'assistant IA">
    <svg class="wb-ico-open" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><path d="M8 9h8M8 13h5"/></svg>
    <svg class="wb-ico-close" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    <span class="wb-chat-badge" aria-hidden="true">IA</span>
  </button>

  <section class="wb-chat-panel" id="wbChatPanel" role="dialog" aria-label="Assistant IA de Wenceslas" hidden>
    <header class="wb-chat-head">
      <div class="wb-chat-avatar" aria-hidden="true">WB</div>
      <div class="wb-chat-title">
        <strong>Assistant de Wenceslas</strong>
        <span><span class="wb-dot" aria-hidden="true"></span>GPT-OSS 120B · Groq</span>
      </div>
      <button class="wb-chat-reset" id="wbChatReset" type="button" title="Nouvelle conversation" aria-label="Nouvelle conversation">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12a9 9 0 1 0 3-6.7L3 8"/><path d="M3 3v5h5"/></svg>
      </button>
    </header>

    <div class="wb-chat-log" id="wbChatLog" aria-live="polite"></div>

    <div class="wb-chat-suggest" id="wbChatSuggest">
      <button type="button">Quel est son parcours ?</button>
      <button type="button">Quelles compétences en IA ?</button>
      <button type="button">Cherche-t-il une alternance ?</button>
      <button type="button">Parle-moi de Prestalia</button>
    </div>

    <form class="wb-chat-form" id="wbChatForm" autocomplete="off">
      <textarea id="wbChatInput" rows="1" maxlength="600" placeholder="Posez une question sur Wenceslas…" aria-label="Votre message"></textarea>
      <button type="submit" id="wbChatSend" aria-label="Envoyer">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
      </button>
    </form>
    <p class="wb-chat-note">Réponses générées par IA à partir de son CV — elles peuvent contenir des erreurs.</p>
  </section>
</div>

<style>
.wb-chat { position: fixed; right: 24px; bottom: 24px; z-index: 1100; font-family: var(--font); }

.wb-chat-toggle {
  position: relative;
  width: 60px; height: 60px;
  border: none; border-radius: 50%;
  background: var(--wave);
  color: #fff;
  display: grid; place-items: center;
  cursor: pointer;
  box-shadow: var(--shadow-a);
  transition: transform var(--tr), box-shadow var(--tr);
}
.wb-chat-toggle:hover { transform: translateY(-3px) scale(1.04); }
.wb-chat-toggle:focus-visible { outline: 3px solid var(--accent2); outline-offset: 3px; }
.wb-chat-toggle .wb-ico-close { display: none; }
.wb-chat.open .wb-ico-open,
.wb-chat.open .wb-chat-badge { display: none; }
.wb-chat.open .wb-ico-close { display: block; }
.wb-chat-badge {
  position: absolute; top: -2px; right: -2px;
  background: var(--accent3); color: #fff;
  font-size: 10px; font-weight: 700; letter-spacing: .5px;
  padding: 2px 6px; border-radius: 999px;
  border: 2px solid var(--bg);
}

.wb-chat-panel {
  position: absolute; right: 0; bottom: 76px;
  width: 380px; max-width: calc(100vw - 32px);
  height: 560px; max-height: calc(100vh - 120px);
  display: flex; flex-direction: column;
  background: var(--glass-bg);
  backdrop-filter: var(--glass-blur);
  -webkit-backdrop-filter: var(--glass-blur);
  border: 1px solid var(--glass-border);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  overflow: hidden;
  animation: wbChatIn .22s ease;
}
.wb-chat-panel[hidden] { display: none; }
@keyframes wbChatIn { from { opacity: 0; transform: translateY(12px) scale(.98); } }

.wb-chat-head {
  display: flex; align-items: center; gap: 12px;
  padding: 14px 16px;
  background: var(--bg-card);
  border-bottom: 1px solid var(--border);
}
.wb-chat-avatar {
  width: 38px; height: 38px; border-radius: 50%;
  background: var(--wave); color: #fff;
  display: grid; place-items: center;
  font-weight: 700; font-size: 13px;
}
.wb-chat-title { flex: 1; display: flex; flex-direction: column; line-height: 1.25; }
.wb-chat-title strong { color: var(--txt); font-size: 15px; }
.wb-chat-title span { color: var(--txt-muted); font-size: 12px; display: flex; align-items: center; gap: 6px; }
.wb-dot { width: 7px; height: 7px; border-radius: 50%; background: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,.2); }
.wb-chat-reset {
  background: none; border: 1px solid var(--border); border-radius: var(--radius-sm);
  color: var(--txt-muted); width: 32px; height: 32px; display: grid; place-items: center; cursor: pointer;
  transition: all var(--tr);
}
.wb-chat-reset:hover { color: var(--accent); border-color: var(--accent); }

.wb-chat-log {
  flex: 1; overflow-y: auto;
  padding: 16px; display: flex; flex-direction: column; gap: 10px;
  scroll-behavior: smooth;
}
.wb-msg {
  max-width: 85%;
  padding: 10px 14px;
  border-radius: 16px;
  font-size: 14px; line-height: 1.5;
  white-space: pre-wrap; word-wrap: break-word;
}
.wb-msg a { color: inherit; text-decoration: underline; }
.wb-msg.bot  { align-self: flex-start; background: var(--bg-card); color: var(--txt); border: 1px solid var(--border); border-bottom-left-radius: 4px; }
.wb-msg.user { align-self: flex-end; background: var(--accent); color: #fff; border-bottom-right-radius: 4px; }
.wb-msg.error { border-color: #e5484d; color: #e5484d; }

.wb-typing { display: inline-flex; gap: 4px; padding: 14px 16px; }
.wb-typing i { width: 7px; height: 7px; border-radius: 50%; background: var(--txt-muted); animation: wbBlink 1.2s infinite; }
.wb-typing i:nth-child(2) { animation-delay: .2s; }
.wb-typing i:nth-child(3) { animation-delay: .4s; }
@keyframes wbBlink { 0%, 80%, 100% { opacity: .25; transform: translateY(0); } 40% { opacity: 1; transform: translateY(-3px); } }

.wb-chat-suggest { display: flex; flex-wrap: wrap; gap: 6px; padding: 0 16px 10px; }
.wb-chat-suggest[hidden] { display: none; }
.wb-chat-suggest button {
  background: var(--accent-lit2); color: var(--accent);
  border: 1px solid var(--accent-lit); border-radius: 999px;
  padding: 6px 12px; font-size: 12.5px; cursor: pointer;
  transition: all var(--tr);
}
html:not([data-theme="light"]) .wb-chat-suggest button { color: #8FB4F0; }
.wb-chat-suggest button:hover { background: var(--accent); color: #fff; border-color: var(--accent); }

.wb-chat-form {
  display: flex; align-items: flex-end; gap: 8px;
  padding: 10px 12px; border-top: 1px solid var(--border);
  background: var(--bg-card);
}
.wb-chat-form textarea {
  flex: 1; resize: none;
  max-height: 110px;
  background: var(--bg-soft); color: var(--txt);
  border: 1px solid var(--border); border-radius: 12px;
  padding: 10px 12px; font: inherit; font-size: 14px; line-height: 1.4;
}
.wb-chat-form textarea:focus { outline: none; border-color: var(--accent); }
.wb-chat-form button {
  width: 42px; height: 42px; flex-shrink: 0;
  border: none; border-radius: 12px;
  background: var(--accent); color: #fff;
  display: grid; place-items: center; cursor: pointer;
  transition: background var(--tr);
}
.wb-chat-form button:hover { background: var(--accent-h); }
.wb-chat-form button:disabled { opacity: .5; cursor: not-allowed; }
.wb-chat-note { margin: 0; padding: 6px 12px 10px; font-size: 11px; color: var(--txt-light); text-align: center; background: var(--bg-card); }

@media (max-width: 520px) {
  .wb-chat { right: 16px; bottom: 16px; }
  .wb-chat-panel { position: fixed; left: 16px; right: 16px; bottom: 88px; width: auto; max-width: none; height: calc(100dvh - 170px); max-height: none; }
}
@media (prefers-reduced-motion: reduce) {
  .wb-chat-panel, .wb-typing i { animation: none; }
}
</style>

<script>
(function () {
  const root    = document.getElementById('wbChat');
  const toggle  = document.getElementById('wbChatToggle');
  const panel   = document.getElementById('wbChatPanel');
  const log     = document.getElementById('wbChatLog');
  const form    = document.getElementById('wbChatForm');
  const input   = document.getElementById('wbChatInput');
  const send    = document.getElementById('wbChatSend');
  const suggest = document.getElementById('wbChatSuggest');
  const reset   = document.getElementById('wbChatReset');

  const STORE    = 'wbChatHistory';
  const GREETING = "Bonjour ! 👋 Je suis l'assistant IA de Wenceslas. Posez-moi vos questions sur son parcours, ses projets, ses compétences ou sa recherche d'alternance.";

  let history = [];
  try { history = JSON.parse(sessionStorage.getItem(STORE)) || []; } catch (e) {}
  const save = () => { try { sessionStorage.setItem(STORE, JSON.stringify(history)); } catch (e) {} };

  /* Échappe le HTML puis rend un markdown minimal : **gras**, liens, emails */
  function format(text) {
    const esc = text.replace(/[&<>"']/g, c => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]));
    return esc
      .replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>')
      .replace(/(https?:\/\/[^\s)]+)/g, '<a href="$1" target="_blank" rel="noopener noreferrer">$1</a>')
      .replace(/([\w.+-]+@[\w-]+\.[\w.]+)/g, '<a href="mailto:$1">$1</a>');
  }

  function bubble(role, text, extra) {
    const div = document.createElement('div');
    div.className = 'wb-msg ' + (role === 'user' ? 'user' : 'bot') + (extra ? ' ' + extra : '');
    div.innerHTML = format(text);
    log.appendChild(div);
    log.scrollTop = log.scrollHeight;
    return div;
  }

  function render() {
    log.innerHTML = '';
    bubble('assistant', GREETING);
    history.forEach(m => bubble(m.role, m.content));
    suggest.hidden = history.length > 0;
  }

  function setOpen(open) {
    root.classList.toggle('open', open);
    panel.hidden = !open;
    toggle.setAttribute('aria-expanded', open);
    toggle.setAttribute('aria-label', open ? "Fermer l'assistant IA" : "Ouvrir l'assistant IA");
    if (open) { log.scrollTop = log.scrollHeight; input.focus(); }
  }

  async function ask(text) {
    text = text.trim();
    if (!text || send.disabled) return;
    history.push({ role: 'user', content: text });
    save();
    bubble('user', text);
    suggest.hidden = true;
    input.value = '';
    input.style.height = '';
    send.disabled = true;

    const typing = document.createElement('div');
    typing.className = 'wb-msg bot wb-typing';
    typing.setAttribute('aria-label', "L'assistant écrit");
    typing.innerHTML = '<i></i><i></i><i></i>';
    log.appendChild(typing);
    log.scrollTop = log.scrollHeight;

    try {
      const res  = await fetch('/api_chat.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ messages: history })
      });
      const data = await res.json().catch(() => ({}));
      typing.remove();
      if (!res.ok || !data.reply) throw new Error(data.error || 'Erreur inattendue.');
      history.push({ role: 'assistant', content: data.reply });
      save();
      bubble('assistant', data.reply);
    } catch (err) {
      typing.remove();
      history.pop(); /* on retire la question restée sans réponse */
      save();
      bubble('assistant', err.message || "Connexion impossible.", 'error');
    } finally {
      send.disabled = false;
      input.focus();
    }
  }

  toggle.addEventListener('click', () => setOpen(panel.hidden));
  document.addEventListener('keydown', e => { if (e.key === 'Escape' && !panel.hidden) { setOpen(false); toggle.focus(); } });
  form.addEventListener('submit', e => { e.preventDefault(); ask(input.value); });
  input.addEventListener('keydown', e => {
    if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); ask(input.value); }
  });
  input.addEventListener('input', () => {
    input.style.height = 'auto';
    input.style.height = Math.min(input.scrollHeight, 110) + 'px';
  });
  suggest.querySelectorAll('button').forEach(b => b.addEventListener('click', () => ask(b.textContent)));
  reset.addEventListener('click', () => { history = []; save(); render(); input.focus(); });

  render();
}());
</script>
