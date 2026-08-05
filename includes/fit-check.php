<?php // Interactive "Fit Check" quiz — shared by index.php and contact.php. ?>
<style>
  .fc-root { font-family:'Manrope',system-ui,sans-serif; }
  .fc-root a { text-decoration:none; }
  .fc-trigger { display:inline-flex; align-items:center; gap:10px; background:var(--accent); color:var(--accent-ink); font-weight:800; font-size:15px; padding:16px 30px; border-radius:11px; border:none; cursor:pointer; font-family:inherit; transition:transform .2s ease, filter .2s ease; box-shadow:0 14px 40px -16px rgba(0,229,160,.75); }
  .fc-trigger:hover { transform:translateY(-2px); filter:brightness(1.06); }
  .fc-opt { display:flex; align-items:center; gap:14px; width:100%; text-align:left; background:#0d0f14; border:1.5px solid rgba(255,255,255,.08); border-radius:12px; padding:15px 18px; cursor:pointer; color:#c7cbd3; font-size:15px; font-weight:500; font-family:inherit; line-height:1.4; transition:border-color .16s ease, background .16s ease, color .16s ease; }
  .fc-opt:hover { color:#fff; }
  .fc-opt.green:hover { border-color:rgba(0,229,160,.4); background:rgba(0,229,160,.06); }
  .fc-opt.yellow:hover { border-color:rgba(245,200,66,.4); background:rgba(245,200,66,.06); }
  .fc-opt.red:hover { border-color:rgba(255,107,107,.4); background:rgba(255,107,107,.06); }
  .fc-opt.green.sel { border-color:var(--accent); background:rgba(0,229,160,.12); color:#fff; }
  .fc-opt.yellow.sel { border-color:rgba(245,200,66,.6); background:rgba(245,200,66,.12); color:#fff; }
  .fc-opt.red.sel { border-color:rgba(255,107,107,.6); background:rgba(255,107,107,.12); color:#fff; }
  .fc-ic { width:28px; height:28px; border-radius:50%; border:1.5px solid rgba(255,255,255,.14); display:flex; align-items:center; justify-content:center; font-size:12px; font-weight:800; flex-shrink:0; color:#7a7f89; transition:border-color .16s ease, color .16s ease, background .16s ease; }
  .fc-opt.green.sel .fc-ic { border-color:var(--accent); color:var(--accent); background:rgba(0,229,160,.14); }
  .fc-opt.yellow.sel .fc-ic { border-color:#f5c842; color:#f5c842; }
  .fc-opt.red.sel .fc-ic { border-color:#ff6b6b; color:#ff6b6b; }
  .fc-next { background:var(--accent); color:var(--accent-ink); border:none; padding:13px 26px; border-radius:9px; cursor:pointer; font-weight:800; font-size:15px; font-family:inherit; margin-left:auto; transition:filter .2s ease, transform .2s ease; }
  .fc-next:hover { filter:brightness(1.06); transform:translateY(-1px); }
  .fc-next:disabled { background:rgba(255,255,255,.06); color:#555; cursor:not-allowed; transform:none; filter:none; }
  .fc-back { background:transparent; border:1px solid rgba(255,255,255,.14); color:#8b8f99; padding:12px 22px; border-radius:9px; cursor:pointer; font-weight:600; font-size:14px; font-family:inherit; transition:border-color .2s ease, color .2s ease; }
  .fc-back:hover { border-color:rgba(255,255,255,.3); color:#c7cbd3; }
  .fc-tag { display:inline-block; font-size:12px; font-weight:700; letter-spacing:.1em; text-transform:uppercase; padding:6px 14px; border-radius:20px; margin-bottom:16px; }
  .fc-tag.green { background:rgba(0,229,160,.1); color:var(--accent); border:1px solid rgba(0,229,160,.3); }
  .fc-tag.yellow { background:rgba(245,200,66,.08); color:#f5c842; border:1px solid rgba(245,200,66,.3); }
  .fc-tag.red { background:rgba(255,107,107,.08); color:#ff6b6b; border:1px solid rgba(255,107,107,.3); }
  .fc-ic-lg { width:72px; height:72px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:28px; margin:0 auto 20px; }
  .fc-ic-lg.green { background:rgba(0,229,160,.08); border:2px solid rgba(0,229,160,.35); color:var(--accent); }
  .fc-ic-lg.yellow { background:rgba(245,200,66,.06); border:2px solid rgba(245,200,66,.35); color:#f5c842; }
  .fc-ic-lg.red { background:rgba(255,107,107,.06); border:2px solid rgba(255,107,107,.35); color:#ff6b6b; }
  .fc-btn { display:inline-block; background:var(--accent); color:var(--accent-ink); font-weight:800; font-size:15px; padding:15px 26px; border-radius:11px; transition:transform .2s ease, filter .2s ease; box-shadow:0 14px 40px -16px rgba(0,229,160,.7); }
  .fc-btn:hover { transform:translateY(-2px); filter:brightness(1.06); }
  .fc-link { font-size:14px; color:#8b8f99; text-decoration:underline; text-underline-offset:3px; }
  .fc-link:hover { color:#c7cbd3; }
  .fc-reset { background:transparent; border:none; color:#6b6f79; font-size:13px; cursor:pointer; margin-top:16px; text-decoration:underline; text-underline-offset:3px; font-family:inherit; }
  .fc-reset:hover { color:#9aa0aa; }
  @keyframes fcUp { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:none; } }
  .fc-anim { animation:fcUp .32s ease; }
</style>
<div class="fc-root" style="position:relative;">
  <!-- BANNER -->
  <div style="border-top:1px solid rgba(0,229,160,.22); border-bottom:1px solid rgba(0,229,160,.22); background:radial-gradient(ellipse at 50% 0%, rgba(0,229,160,.08), rgba(0,229,160,0) 60%), #0a0f0d; padding:clamp(52px,7vw,84px) clamp(20px,5vw,56px); text-align:center;">
    <div style="font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:14px;">Growth Partners Only</div>
    <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(28px,4.6vw,52px); line-height:1.05; letter-spacing:-.03em; margin:0 0 16px; text-wrap:balance;">Check to see if <span style="color:var(--accent);">we're a good fit.</span></h2>
    <p style="font-size:clamp(15px,1.5vw,18px); line-height:1.6; color:#9aa0aa; max-width:56ch; margin:0 auto 30px;">We only work with 10&ndash;15 contractors at a time. Answer 6 quick questions and we'll tell you instantly if we're the right partner for where you want to go.</p>
    <button type="button" class="fc-trigger" id="fc-trigger">
      <span id="fc-trigger-label">Take the 60-Second Fit Check</span>
      <span style="font-size:18px;">&rarr;</span>
    </button>
  </div>

  <!-- QUIZ / RESULT -->
  <div id="fc-panel" hidden style="max-width:760px; margin:0 auto; padding:clamp(36px,5vw,56px) clamp(20px,5vw,40px);">
    <div id="fc-quiz" class="fc-anim">
      <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
        <div id="fc-progress-label" style="font-size:12px; font-weight:700; letter-spacing:.1em; text-transform:uppercase; color:var(--accent);">Question 1 of 6</div>
      </div>
      <div style="width:100%; height:4px; background:rgba(255,255,255,.08); border-radius:4px; overflow:hidden; margin-bottom:28px;">
        <div id="fc-bar" style="height:100%; background:var(--accent); border-radius:4px; transition:width .4s ease; width:0%;"></div>
      </div>
      <div id="fc-q" style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(20px,2.4vw,28px); letter-spacing:-.02em; line-height:1.25; margin-bottom:8px;"></div>
      <div id="fc-qsub" style="font-size:14px; color:#8b8f99; font-style:italic; margin-bottom:24px;"></div>
      <div id="fc-options" style="display:flex; flex-direction:column; gap:10px; margin-bottom:28px;"></div>
      <div style="display:flex; justify-content:space-between; align-items:center; gap:12px;">
        <button type="button" class="fc-back" id="fc-back">&larr; Back</button>
        <button type="button" class="fc-next" id="fc-next" disabled>Next &rarr;</button>
      </div>
    </div>
    <div id="fc-result" class="fc-anim" hidden style="text-align:center; padding:20px 0;">
      <span class="fc-tag" id="fc-tag"></span>
      <div class="fc-ic-lg" id="fc-icon"></div>
      <div id="fc-rtitle" style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(24px,3.2vw,38px); letter-spacing:-.025em; line-height:1.12; margin-bottom:14px; text-wrap:balance;"></div>
      <p id="fc-rsub" style="font-size:clamp(15px,1.4vw,17px); line-height:1.7; color:#9aa0aa; max-width:52ch; margin:0 auto 28px;"></p>
      <div style="display:flex; flex-direction:column; align-items:center; gap:14px;">
        <a class="fc-btn" id="fc-cta" href="#"></a>
        <a class="fc-link" id="fc-rlink" href="#"></a>
      </div>
      <div><button type="button" class="fc-reset" id="fc-reset">Start over</button></div>
    </div>
  </div>
</div>
<script>
  (function () {
    var Q = [
      { q: "What is your current annual revenue?", sub: "Be honest — this helps us give you an accurate answer.", options: [
        { label: "Under $300K", score: -2, tone: "red" },
        { label: "$300K – $499K", score: 0, tone: "yellow" },
        { label: "$500K – $1M", score: 2, tone: "green" },
        { label: "$1M – $3M", score: 3, tone: "green" },
        { label: "$3M+", score: 3, tone: "green" }
      ]},
      { q: "How many crews are you running right now?", sub: "This tells us if you have capacity to handle more leads.", options: [
        { label: "Just me — I'm still doing the work myself", score: -2, tone: "red" },
        { label: "1 crew", score: 0, tone: "yellow" },
        { label: "2–3 crews", score: 2, tone: "green" },
        { label: "4+ crews", score: 3, tone: "green" }
      ]},
      { q: "Who handles your incoming calls and bookings?", sub: "Leads mean nothing if no one picks up.", options: [
        { label: "Me — calls go to my cell", score: -1, tone: "red" },
        { label: "Part-time or inconsistent", score: 1, tone: "yellow" },
        { label: "Office staff or answering service", score: 2, tone: "green" },
        { label: "Dedicated dispatcher", score: 3, tone: "green" }
      ]},
      { q: "What are you willing to invest in ads monthly?", sub: "We manage the campaigns — this is the budget you put into the platforms.", options: [
        { label: "I don't want to spend on ads", score: -2, tone: "red" },
        { label: "Under $1,500/month", score: -1, tone: "red" },
        { label: "$1,500 – $3,000/month", score: 1, tone: "yellow" },
        { label: "$3,000 – $6,000/month", score: 2, tone: "green" },
        { label: "$6,000+/month", score: 3, tone: "green" }
      ]},
      { q: "Where do you want to be in 18 months?", sub: "Be specific — vague goals get vague results.", options: [
        { label: "I just want a few more consistent jobs", score: -1, tone: "red" },
        { label: "I want to grow but I'm not sure by how much", score: 1, tone: "yellow" },
        { label: "I want to double my revenue", score: 2, tone: "green" },
        { label: "I have a specific target and I'm ready to invest to hit it", score: 3, tone: "green" }
      ]},
      { q: "What's your biggest bottleneck right now?", sub: "Honest answer only — it changes what we'd recommend.", options: [
        { label: "Capacity — I can't handle more work right now", score: -1, tone: "red" },
        { label: "Both — I need more leads AND more capacity", score: 1, tone: "yellow" },
        { label: "Leads — I have the crew, I need the jobs", score: 2, tone: "green" },
        { label: "Conversion — I get leads but need to close more", score: 2, tone: "green" }
      ]}
    ];
    var RESULTS = {
      strong: { tag: "Strong Fit", cls: "green", icon: "✓",
        title: "You're exactly who we work with.",
        sub: "Based on where you are and where you want to go, we can build a system that gets you there. We have limited spots — let's talk before one opens up to someone else.",
        ctaLabel: "Book Your Free Audit →", ctaHref: "contact.php",
        linkLabel: "See how we grew The Roofer Bros to 8 figures first", linkHref: "results.php" },
      maybe: { tag: "Getting There", cls: "yellow", icon: "◐",
        title: "You're close — but not quite ready.",
        sub: "You have the foundation, but a few pieces need to be in place before we can get you real results. We don't want to take your money and underdeliver — see what we've built, and come back when you're ready to go all in.",
        ctaLabel: "See The Roofer Bros Case Study →", ctaHref: "results.php",
        linkLabel: "Still want to talk? We'll be honest with you.", linkHref: "contact.php" },
      no: { tag: "Not Right Now", cls: "red", icon: "✕",
        title: "We're not the right partner for you yet.",
        sub: "That's not a knock — it just means the timing isn't right. We only take on clients where we're confident we can deliver, and right now we'd be setting you up to spend money you're not ready to spend. Build your foundation first — when the revenue is there, we'll be here.",
        ctaLabel: null, ctaHref: null,
        linkLabel: "Read our case study while you build", linkHref: "results.php" }
    };

    var state = { open: false, step: 1, scores: {}, result: null };
    var el = function (id) { return document.getElementById(id); };
    var panel = el('fc-panel'), quiz = el('fc-quiz'), resultBox = el('fc-result');

    function replay(node) { node.classList.remove('fc-anim'); void node.offsetWidth; node.classList.add('fc-anim'); }

    function render() {
      el('fc-trigger-label').textContent = state.open ? 'Close Fit Check' : 'Take the 60-Second Fit Check';
      panel.hidden = !state.open;
      if (!state.open) return;
      quiz.hidden = !!state.result;
      resultBox.hidden = !state.result;
      if (state.result) { renderResult(); return; }
      var st = state.step, q = Q[st - 1], sel = state.scores[st];
      el('fc-progress-label').textContent = 'Question ' + st + ' of 6';
      el('fc-bar').style.width = Math.round(((st - 1) / 6) * 100) + '%';
      el('fc-q').textContent = q.q;
      el('fc-qsub').textContent = q.sub;
      var opts = el('fc-options');
      opts.innerHTML = '';
      q.options.forEach(function (o, i) {
        var b = document.createElement('button');
        b.type = 'button';
        b.className = 'fc-opt ' + o.tone + (sel === i ? ' sel' : '');
        var ic = o.tone === 'green' ? '●' : (o.tone === 'yellow' ? '◐' : '✕');
        b.innerHTML = '<span class="fc-ic">' + ic + '</span><span></span>';
        b.lastChild.textContent = o.label;
        b.addEventListener('click', function () { state.scores[st] = i; render(); });
        opts.appendChild(b);
      });
      el('fc-back').style.visibility = st > 1 ? 'visible' : 'hidden';
      el('fc-next').disabled = sel == null;
      el('fc-next').innerHTML = st === 6 ? 'See My Results →' : 'Next →';
    }

    function renderResult() {
      var r = RESULTS[state.result];
      el('fc-tag').textContent = r.tag;
      el('fc-tag').className = 'fc-tag ' + r.cls;
      el('fc-icon').textContent = r.icon;
      el('fc-icon').className = 'fc-ic-lg ' + r.cls;
      el('fc-rtitle').textContent = r.title;
      el('fc-rsub').textContent = r.sub;
      var cta = el('fc-cta');
      cta.hidden = !r.ctaLabel;
      if (r.ctaLabel) { cta.textContent = r.ctaLabel; cta.href = r.ctaHref; }
      el('fc-rlink').textContent = r.linkLabel;
      el('fc-rlink').href = r.linkHref;
      replay(resultBox);
    }

    function compute() {
      var total = 0, negs = 0, hardNo = false;
      Object.keys(state.scores).forEach(function (k) {
        var sc = Q[Number(k) - 1].options[state.scores[k]].score;
        total += sc; if (sc < 0) negs++; if (sc === -2) hardNo = true;
      });
      if (hardNo || total < 0) return 'no';
      if (total < 6 || negs >= 2) return 'maybe';
      return 'strong';
    }

    el('fc-trigger').addEventListener('click', function () {
      state = { open: !state.open, step: 1, scores: {}, result: null };
      render();
      if (state.open) replay(quiz);
    });
    el('fc-back').addEventListener('click', function () {
      if (state.step > 1) { state.step--; render(); replay(quiz); }
    });
    el('fc-next').addEventListener('click', function () {
      var st = state.step, idx = state.scores[st];
      if (idx == null) return;
      var score = Q[st - 1].options[idx].score;
      if ((st === 1 || st === 4) && score === -2) { state.result = 'no'; render(); return; }
      if (st < 6) { state.step = st + 1; render(); replay(quiz); }
      else { state.result = compute(); render(); }
    });
    el('fc-reset').addEventListener('click', function () {
      state = { open: true, step: 1, scores: {}, result: null };
      render();
      replay(quiz);
    });

    render();
  })();
</script>
