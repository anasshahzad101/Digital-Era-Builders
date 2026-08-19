<?php
require __DIR__ . '/config.php';
$active = '';
$nav_cta_href = '#fit';
$trades = [
    ['name' => 'Roofing', 'blurb' => 'Storm surges, insurance claims, and a crowded map pack. We make you the roofer homeowners call first. And the one adjusters trust.'],
    ['name' => 'HVAC', 'blurb' => 'Demand swings with every heat wave and cold snap. We keep your calendar full in peak season and booked through the shoulders.'],
    ['name' => 'Plumbing', 'blurb' => 'Emergencies convert on speed and trust. We put you at the top of the search the moment a pipe bursts.'],
    ['name' => 'Electrical', 'blurb' => 'Permits, panels, and EV installs. We position you for the high-ticket work, not just the quick service calls.'],
    ['name' => 'General Contractors', 'blurb' => 'Long sales cycles and big-ticket bids. We build the authority that wins the projects worth chasing.'],
    ['name' => 'Windows & Doors', 'blurb' => 'A visual, financed purchase. We turn showroom curiosity into booked in-home estimates.'],
    ['name' => 'Solar', 'blurb' => 'A skeptical, high-consideration buyer. We build the credibility that clears the objections before the sit.'],
    ['name' => 'Garage Doors', 'blurb' => 'Fast, repeat, referral-driven work. We own the local searches that become same-week installs.'],
    ['name' => 'Pest Control', 'blurb' => 'Recurring revenue is the prize. We fill the top of the funnel and engineer the plans that renew.'],
    ['name' => 'Foundation & Waterproofing', 'blurb' => 'High-ticket, fear-driven decisions. We build the trust that justifies the invoice.'],
    ['name' => 'Pool & Spa', 'blurb' => 'Seasonal, aspirational, and competitive. We capture demand early and keep you booked through the build season.'],
    ['name' => 'Painting', 'blurb' => 'Volume and reputation win. We turn a wall of five-star reviews into a steady stream of estimates.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digital Era Media: Growth Partner for the Trades</title>
<meta name="description" content="Not an agency. A growth partner embedded in your contracting business. Website, SEO, ads, dispatch, and staffing for roofing, HVAC, plumbing, and other trades.">
<meta property="og:title" content="Digital Era Media: Growth Partner for the Trades">
<meta property="og:description" content="Not an agency. A growth partner embedded in your contracting business. Website, SEO, ads, dispatch, and staffing for roofing, HVAC, plumbing, and other trades.">
<meta property="og:type" content="website">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%2300e5a0'/%3E%3Ctext x='32' y='44' font-family='Arial, sans-serif' font-size='32' font-weight='800' text-anchor='middle' fill='%2304120c'%3EDE%3C/text%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  :root { --accent: #00e5a0; --accent-ink: #04120c; }
  * { box-sizing: border-box; }
  html, body { margin: 0; padding: 0; }
  body { background-color: #07080c; color: #f5f6f8; font-family: 'Manrope', system-ui, sans-serif; -webkit-font-smoothing: antialiased; }
  body[data-grain="on"] { background-image: radial-gradient(rgba(255,255,255,.014) 1px, transparent 1px); background-size: 4px 4px; }
  body[data-glow="off"] [data-glow] { display: none; }
  ::selection { background: var(--accent); color: var(--accent-ink); }
  a { color: var(--accent); text-decoration: none; }
  a:hover { opacity: .82; }
  @keyframes demPulse { 0%,100% { opacity:1; transform:scale(1);} 50% { opacity:.35; transform:scale(.7);} }
  @keyframes demReveal { from { opacity:0; transform:translateY(26px); } to { opacity:1; transform:none; } }
  /* Scroll reveals are pure CSS (scroll-timeline). No JS mutates the DOM,
     so the runtime never re-mounts in a loop. Browsers without view() just
     show everything (content is visible by default). */
  @supports (animation-timeline: view()) {
    [data-reveal] { animation: demReveal .8s cubic-bezier(.16,.84,.44,1) both; animation-timeline: view(); animation-range: entry 2% cover 26%; }
  }
  @media (prefers-reduced-motion: reduce) {
    [data-reveal] { opacity: 1 !important; animation: none !important; }
  }
  details.faq { border-bottom: 1px solid rgba(255,255,255,.09); }
  details.faq summary { list-style: none; cursor: pointer; display: flex; align-items: center; justify-content: space-between; gap: 20px; padding: 26px 4px; font-family: 'Space Grotesk', sans-serif; font-weight: 600; font-size: clamp(17px,1.8vw,20px); letter-spacing: -.01em; color: #f5f6f8; }
  details.faq summary::-webkit-details-marker { display: none; }
  details.faq summary:hover { color: var(--accent); }
  details.faq .chev { flex-shrink: 0; transition: transform .32s cubic-bezier(.16,.84,.44,1); color: var(--accent); }
  details.faq[open] .chev { transform: rotate(180deg); }
  details.faq .ans { padding: 0 4px 28px; font-size: clamp(15px,1.4vw,16.5px); line-height: 1.7; color: #9aa0aa; max-width: 68ch; }
  .svc-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 16px; }
  @media (max-width: 1024px) { .svc-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); } }
  @media (max-width: 560px) { .svc-grid { grid-template-columns: 1fr; } }

  /* ===== Interaction motion (pure CSS, no JS, no re-render) ===== */
  /* Cards: reveal elements have transform/opacity locked by the scroll
     animation, so we animate colour + shadow (free) and lift the inner icon. */
  .svc-grid > div, .mo-grid > div, .mo-card {
    transition: border-color .45s ease, box-shadow .45s ease, background .45s ease;
  }
  .svc-grid > div svg { transition: transform .5s cubic-bezier(.16,.84,.44,1); }
  @media (hover: hover) {
    .svc-grid > div:hover, .mo-grid > div:hover, .mo-card:hover {
      border-color: rgba(0,229,160,.4) !important;
      background: linear-gradient(180deg, rgba(0,229,160,.055), rgba(255,255,255,.012)) !important;
      box-shadow: 0 34px 74px -46px rgba(0,229,160,.6);
    }
    .svc-grid > div:hover svg { transform: scale(1.12) translateY(-2px); }
  }
  /* Trades pills: not animation-locked, so they can truly lift. */
  .mo-pills > div { transition: transform .32s cubic-bezier(.16,.84,.44,1), border-color .32s ease, background .32s ease, color .32s ease; }
  @media (hover: hover) {
    .mo-pills > div:hover { transform: translateY(-4px); }
    .mo-pills > div:not([style*="var(--accent)"]):hover { border-color: rgba(0,229,160,.5) !important; background: rgba(0,229,160,.08) !important; color: #eafff7 !important; }
  }
  /* Buttons */
  .mo-btn { transition: transform .3s cubic-bezier(.16,.84,.44,1), filter .3s ease; }
  @media (hover: hover) { .mo-btn:hover { transform: translateY(-2px); filter: brightness(1.06); } }
  .mo-ghost { transition: transform .3s cubic-bezier(.16,.84,.44,1), border-color .3s ease, background .3s ease; }
  @media (hover: hover) { .mo-ghost:hover { transform: translateY(-2px); border-color: rgba(255,255,255,.32) !important; background: rgba(255,255,255,.08) !important; } }
  /* Nav + footer animated underline */
  nav[data-nav] ul a, footer nav a { position: relative; }
  nav[data-nav] ul a::after, footer nav a::after { content: ""; position: absolute; left: 0; bottom: -4px; height: 1px; width: 0; background: var(--accent); transition: width .38s cubic-bezier(.16,.84,.44,1); }
  @media (hover: hover) { nav[data-nav] ul a:hover::after, footer nav a:hover::after { width: 100%; } }
  /* Stat/proof numbers: gentle continuous shimmer on the accent figures */
  @media (hover: hover) { details.faq:hover summary { color: var(--accent); } }
  @media (prefers-reduced-motion: reduce) {
    .mo-pills > div, .mo-btn, .mo-ghost, .svc-grid > div svg { transition: none !important; transform: none !important; }
  }
  /* Process steps: 2x2 so each card has room for its copy, single column on narrow screens */
  .proc-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }
  @media (max-width: 760px) { .proc-grid { grid-template-columns: 1fr; } }
  /* Founder quote: quote body beside an attribution rail, stacked on narrow screens */
  .founder-quote { display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 290px); gap: clamp(30px, 4vw, 60px); align-items: stretch; }
  .founder-quote > .fq-attr { display: flex; flex-direction: column; justify-content: center; border-left: 1px solid rgba(255,255,255,.1); padding-left: clamp(30px, 4vw, 60px); }
  @media (max-width: 860px) {
    .founder-quote { grid-template-columns: 1fr; gap: 30px; }
    .founder-quote > .fq-attr { border-left: 0; border-top: 1px solid rgba(255,255,255,.1); padding-left: 0; padding-top: 30px; }
  }
  /* Statement bar: the line beside the founder portrait, stacked on narrow screens */
  .stmt { display: grid; grid-template-columns: minmax(0, 1fr) auto; gap: clamp(30px, 5vw, 70px); align-items: center; }
  @media (max-width: 820px) { .stmt { grid-template-columns: 1fr; gap: 34px; justify-items: start; } }
  /* Hero proof strip: two stats anchored to the outer edges of the hero column */
  .hero-stats { display: grid; grid-template-columns: minmax(0, auto) minmax(0, auto); justify-content: space-between; gap: clamp(30px, 5vw, 64px); border-top: 1px solid rgba(255,255,255,.1); padding-top: clamp(28px, 3.4vw, 40px); }
  .hero-stats .hs-rule { display: block; width: 46px; height: 2px; border-radius: 2px; background: var(--accent); margin-bottom: 18px; box-shadow: 0 0 18px rgba(0,229,160,.55); }
  .hero-stats .hs-num { font-family: 'Space Grotesk', sans-serif; font-weight: 700; font-size: clamp(32px, 3.4vw, 46px); letter-spacing: -.03em; line-height: 1; white-space: nowrap; }
  .hero-stats .hs-num span { color: var(--accent); }
  .hero-stats .hs-cap { font-size: 14px; color: #8b8f99; margin-top: 11px; line-height: 1.5; max-width: 34ch; }
  .hero-stats .hs-end { text-align: right; }
  .hero-stats .hs-end .hs-rule, .hero-stats .hs-end .hs-cap { margin-left: auto; }
  @media (max-width: 820px) {
    .hero-stats { grid-template-columns: 1fr; justify-content: start; gap: 32px; }
    .hero-stats .hs-end { text-align: left; }
    .hero-stats .hs-end .hs-rule, .hero-stats .hs-end .hs-cap { margin-left: 0; }
  }
  /* Interactive trades: selectable pills + detail panel */
  .trade-pill { appearance:none; -webkit-appearance:none; padding:14px 22px; border-radius:100px; font-size:15px; font-weight:600; color:#d6d9df; background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.1); cursor:pointer; font-family:inherit; transition: transform .3s cubic-bezier(.16,.84,.44,1), border-color .3s ease, background .3s ease, color .3s ease, box-shadow .3s ease; }
  @media (hover:hover) { .trade-pill:hover { transform:translateY(-4px); border-color:rgba(0,229,160,.5); background:rgba(0,229,160,.08); color:#eafff7; } }
  .trade-pill.is-on { color:var(--accent-ink); background:var(--accent); border-color:var(--accent); font-weight:700; box-shadow:0 12px 34px -16px rgba(0,229,160,.7); }
  .trade-pill.is-on:hover { transform:translateY(-4px); color:var(--accent-ink); background:var(--accent); }
  @keyframes tradePanelIn { from { opacity:0; transform:translateY(10px); } to { opacity:1; transform:none; } }
  @media (prefers-reduced-motion: reduce) { .trade-pill { transition:none !important; } .trade-pill:hover { transform:none !important; } }
</style>
</head>
<body data-glow="on" data-grain="on">
<div style="position:relative; overflow:hidden; background:#07080c; min-height:100vh;">

  <!-- ambient glows (static, bounded) -->
  <div data-glow style="position:absolute; top:-260px; left:50%; transform:translateX(-50%); width:1100px; height:640px; background:radial-gradient(ellipse at center, rgba(0,229,160,.16), rgba(0,229,160,0) 62%); pointer-events:none; z-index:0;"></div>
  <div data-glow style="position:absolute; top:1100px; right:-200px; width:720px; height:720px; background:radial-gradient(circle at center, rgba(0,229,160,.09), rgba(0,229,160,0) 60%); pointer-events:none; z-index:0;"></div>
  <div data-glow style="position:absolute; top:2600px; left:-260px; width:760px; height:760px; background:radial-gradient(circle at center, rgba(0,229,160,.07), rgba(0,229,160,0) 60%); pointer-events:none; z-index:0;"></div>

  <!-- NAV -->
  <?php include __DIR__ . '/includes/nav.php'; ?>

  <!-- HERO -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(72px,11vw,132px) clamp(20px,5vw,56px) clamp(56px,7vw,84px);">
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); display:inline-flex; align-items:center; gap:9px; padding:8px 15px; border:1px solid rgba(0,229,160,.28); border-radius:100px; background:rgba(0,229,160,.06); font-size:13px; font-weight:600; color:#cfe9df; margin-bottom:34px;">
      <span style="width:8px; height:8px; border-radius:50%; background:var(--accent); animation:demPulse 2.2s ease-in-out infinite;"></span>
      Not an agency. A growth partner embedded in your business.
    </div>
    <h1 data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .06s, transform .8s cubic-bezier(.16,.84,.44,1) .06s; font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(42px,7.4vw,92px); line-height:.98; letter-spacing:-.035em; margin:0 0 26px; max-width:16ch; text-wrap:balance;">
      We Were the Marketers. Then We Became <span style="color:var(--accent);">the Contractors.</span>
    </h1>
    <p data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .12s, transform .8s cubic-bezier(.16,.84,.44,1) .12s; font-size:clamp(17px,1.5vw,21px); line-height:1.6; color:#b4b8c2; max-width:60ch; margin:0 0 40px;">
      Now we take what we built inside <strong style="color:#f5f6f8; font-weight:700;">The Roofer Bros</strong>. Every system, every strategy, every hard lesson. And we put it to work inside yours.
    </p>
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .18s, transform .8s cubic-bezier(.16,.84,.44,1) .18s; display:flex; flex-wrap:wrap; gap:14px; margin-bottom:clamp(52px,6vw,76px);">
      <a href="contact.php" class="mo-btn" style="font-size:15px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:16px 26px; border-radius:11px; box-shadow:0 14px 40px -14px rgba(0,229,160,.75);">See If We're a Fit &rarr;</a>
      <a href="services.php" class="mo-ghost" style="font-size:15px; font-weight:600; color:#f5f6f8; background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.14); padding:16px 26px; border-radius:11px;">How We Grow You</a>
    </div>
    <div data-reveal class="hero-stats" style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .24s, transform .8s cubic-bezier(.16,.84,.44,1) .24s;">
      <div class="hs">
        <span class="hs-rule"></span>
        <div class="hs-num">6-<span>MONTH</span></div>
        <div class="hs-cap">Minimum, then month-to-month</div>
      </div>
      <div class="hs hs-end">
        <span class="hs-rule"></span>
        <div class="hs-num">TOP-<span>RANKING</span></div>
        <div class="hs-cap">Google rankings across every market we've entered</div>
      </div>
    </div>
  </section>

  <!-- STATEMENT BAR -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06); border-bottom:1px solid rgba(255,255,255,.06); background:linear-gradient(180deg, rgba(0,229,160,.05), rgba(0,229,160,0));">
    <div data-reveal class="stmt" style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); max-width:1180px; margin:0 auto; padding:clamp(44px,5vw,68px) clamp(20px,5vw,56px);">
      <p style="font-family:'Space Grotesk',sans-serif; font-weight:500; font-size:clamp(28px,4vw,52px); line-height:1.16; letter-spacing:-.025em; margin:0; max-width:18ch;">
        We don't take on clients. <span style="color:var(--accent);">We take on partners. And we don't stop until your market knows your name.</span>
      </p>
      <?php if (file_exists(__DIR__ . '/assets/sako-rassam.jpg')): ?>
        <img src="assets/sako-rassam.jpg" alt="Sako Rassam, founder of The Roofer Bros and Digital Era Media" width="360" height="360" loading="lazy" style="display:block; width:clamp(200px,26vw,360px); aspect-ratio:1; object-fit:cover; object-position:center top; border-radius:22px; border:1px solid rgba(0,229,160,.22); box-shadow:0 40px 90px -50px rgba(0,229,160,.5);">
      <?php endif; ?>
    </div>
  </div>

  <!-- SERVICES -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(80px,10vw,130px) clamp(20px,5vw,56px);">
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); max-width:60ch;">
      <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:18px;">How We Grow Your Business</div>
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,4.4vw,54px); line-height:1.04; letter-spacing:-.03em; margin:0 0 16px;">Four areas. Total ownership.</h2>
      <p style="font-size:clamp(15px,1.4vw,18px); line-height:1.6; color:#9aa0aa; margin:0;">We don't hand you a report and disappear. We get inside your business and build the engine that runs it.</p>
    </div>

    <div class="svc-grid" style="margin-top:clamp(40px,4vw,56px);">
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); position:relative; padding:34px; border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); overflow:hidden;">
        <div style="display:flex; align-items:center; justify-content:center; width:52px; height:52px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22); margin-bottom:22px;">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        </div>
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em; margin-bottom:11px;">Get Found</div>
        <div style="font-size:14.5px; line-height:1.65; color:#9aa0aa;">We own your digital presence: website, SEO, and Google Business Profile. So when someone in your market searches, you're the first name they see.</div>
      </div>
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .07s, transform .8s cubic-bezier(.16,.84,.44,1) .07s; position:relative; padding:34px; border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); overflow:hidden;">
        <div style="display:flex; align-items:center; justify-content:center; width:52px; height:52px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22); margin-bottom:22px;">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.63 3.4 2 2 0 0 1 3.6 1.21h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.82a16 16 0 0 0 6.29 6.29l.97-.97a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </div>
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em; margin-bottom:11px;">Get Called</div>
        <div style="font-size:14.5px; line-height:1.65; color:#9aa0aa;">Paid ads that fill your schedule, and bilingual dispatchers who answer and book the job. We close the loop from the ad to the appointment.</div>
      </div>
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .14s, transform .8s cubic-bezier(.16,.84,.44,1) .14s; position:relative; padding:34px; border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); overflow:hidden;">
        <div style="display:flex; align-items:center; justify-content:center; width:52px; height:52px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22); margin-bottom:22px;">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg>
        </div>
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em; margin-bottom:11px;">Get Credible</div>
        <div style="font-size:14.5px; line-height:1.65; color:#9aa0aa;">Licenses, certifications, reviews, and social content that make you the obvious choice before a prospect even picks up the phone.</div>
      </div>
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .21s, transform .8s cubic-bezier(.16,.84,.44,1) .21s; position:relative; padding:34px; border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); overflow:hidden;">
        <div style="display:flex; align-items:center; justify-content:center; width:52px; height:52px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22); margin-bottom:22px;">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/><path d="M22 20c0-3-1.8-5.5-4.5-6.5"/></svg>
        </div>
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em; margin-bottom:11px;">Get Staffed</div>
        <div style="font-size:14.5px; line-height:1.65; color:#9aa0aa;">Never lose a job because you're short on crews. We source and vet qualified subcontractors in your trade so you can take on more work without turning it away, then push into the next market and do it again.</div>
      </div>
    </div>
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); margin-top:clamp(40px,5vw,60px); text-align:center;">
      <a href="services.php" class="mo-btn" style="display:inline-block; font-size:15px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:16px 26px; border-radius:11px; box-shadow:0 14px 40px -16px rgba(0,229,160,.7);">See exactly how we do it &rarr;</a>
    </div>
  </section>

  <!-- PROCESS -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(80px,10vw,130px) clamp(20px,5vw,56px);">
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); max-width:60ch;">
      <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:18px;">The Process</div>
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,4.4vw,54px); line-height:1.04; letter-spacing:-.03em; margin:0 0 16px;">From first call to owning your market.</h2>
      <p style="font-size:clamp(15px,1.4vw,18px); line-height:1.6; color:#9aa0aa; margin:0;">No mystery, no fluff. Here's exactly how a partnership moves from day one to the day your competitors start asking who's doing your marketing.</p>
    </div>
    <div class="mo-grid proc-grid" style="margin-top:clamp(40px,4vw,56px);">
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); position:relative; padding:32px; border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); overflow:hidden;">
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:14px; letter-spacing:.16em; color:var(--accent); margin-bottom:20px;">STEP 01</div>
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:19px; letter-spacing:-.01em; margin-bottom:11px;">Deep-Dive Audit</div>
        <div style="font-size:14.5px; line-height:1.65; color:#9aa0aa;">We tear into your numbers, your market, and your competition. You walk away with a clear picture of where money's leaking and where it's hiding.</div>
        <div style="position:absolute; top:-16px; right:6px; font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:110px; line-height:1; color:rgba(255,255,255,.03); pointer-events:none;">1</div>
      </div>
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .07s, transform .8s cubic-bezier(.16,.84,.44,1) .07s; position:relative; padding:32px; border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); overflow:hidden;">
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:14px; letter-spacing:.16em; color:var(--accent); margin-bottom:20px;">STEP 02</div>
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:19px; letter-spacing:-.01em; margin-bottom:11px;">Build the Engine</div>
        <div style="font-size:14.5px; line-height:1.65; color:#9aa0aa;">Website, ads, SEO, dispatch, credibility. We build and wire every system together so a click turns into a booked job, not a dead end.</div>
        <div style="position:absolute; top:-16px; right:6px; font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:110px; line-height:1; color:rgba(255,255,255,.03); pointer-events:none;">2</div>
      </div>
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .14s, transform .8s cubic-bezier(.16,.84,.44,1) .14s; position:relative; padding:32px; border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); overflow:hidden;">
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:14px; letter-spacing:.16em; color:var(--accent); margin-bottom:20px;">STEP 03</div>
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:19px; letter-spacing:-.01em; margin-bottom:11px;">Launch &amp; Optimize</div>
        <div style="font-size:14.5px; line-height:1.65; color:#9aa0aa;">We go live and watch the data daily, tuning ads, pages, and dispatch until the phone rings with the right calls at the right cost.</div>
        <div style="position:absolute; top:-16px; right:6px; font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:110px; line-height:1; color:rgba(255,255,255,.03); pointer-events:none;">3</div>
      </div>
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .21s, transform .8s cubic-bezier(.16,.84,.44,1) .21s; position:relative; padding:32px; border:1px solid rgba(0,229,160,.22); border-radius:16px; background:linear-gradient(180deg, rgba(0,229,160,.06), rgba(255,255,255,.008)); overflow:hidden;">
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:14px; letter-spacing:.16em; color:var(--accent); margin-bottom:20px;">STEP 04</div>
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:19px; letter-spacing:-.01em; margin-bottom:11px;">Guide to Credibility</div>
        <div style="font-size:14.5px; line-height:1.65; color:#9aa0aa;">We audit your current credentials and map out exactly which accreditations, certifications, and industry partnerships will make you stand out in your market. You handle the applications, we tell you which ones actually move the needle and in what order. BBB, manufacturer certifications, industry associations, we point you at the ones that close deals.</div>
        <div style="position:absolute; top:-16px; right:6px; font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:110px; line-height:1; color:rgba(0,229,160,.06); pointer-events:none;">4</div>
      </div>
    </div>
  </section>

  <!-- DIFFERENCE -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06); border-bottom:1px solid rgba(255,255,255,.06); background:#0a0b11;">
    <div style="max-width:1180px; margin:0 auto; padding:clamp(80px,10vw,130px) clamp(20px,5vw,56px); display:grid; grid-template-columns:repeat(auto-fit,minmax(340px,1fr)); gap:clamp(40px,5vw,72px); align-items:start;">
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1);">
        <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,4.2vw,52px); line-height:1.05; letter-spacing:-.03em; margin:0 0 20px;">You're not hiring a vendor. <span style="color:var(--accent);">You're gaining a partner.</span></h2>
        <p style="font-size:clamp(15px,1.4vw,17px); line-height:1.7; color:#9aa0aa; margin:0 0 30px; max-width:52ch;">Every agency you've ever hired sent reports. We send results. There's no account manager who's never touched a job site, no strategy built from a template, no upsell to services you don't need. Just someone who's run a contracting company and knows exactly what moves the needle.</p>
        <div style="display:flex; flex-direction:column; gap:14px;">
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#c7cbd3; line-height:1.5;">We report calls, booked jobs, and revenue, not impressions</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#c7cbd3; line-height:1.5;">6-month minimum, then month-to-month. No year-long lock-ins</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#c7cbd3; line-height:1.5;">One point of contact who knows your business inside out</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#c7cbd3; line-height:1.5;">Strategy built for your trade, your market, your margins</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#c7cbd3; line-height:1.5;">Full transparency: real-time access to every dollar and every metric</span></div>
        </div>
        <div style="margin-top:30px;">
          <a href="about.php" class="mo-ghost" style="display:inline-block; font-size:15px; font-weight:600; color:#f5f6f8; background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.14); padding:14px 24px; border-radius:11px;">Our Story &rarr;</a>
        </div>
      </div>
      <div data-reveal class="mo-card" style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .1s, transform .8s cubic-bezier(.16,.84,.44,1) .1s; border:1px solid rgba(0,229,160,.18); border-radius:20px; background:linear-gradient(180deg, rgba(0,229,160,.05), rgba(255,255,255,.008)); padding:clamp(28px,3vw,38px); box-shadow:0 40px 90px -50px rgba(0,229,160,.5);">
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:14px; letter-spacing:.02em; color:#8b8f99; text-transform:uppercase; margin-bottom:22px;">What a full partnership looks like</div>
        <div style="display:flex; justify-content:space-between; align-items:center; gap:16px; padding:15px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:15px; color:#d6d9df;">Get Found: Website, SEO, GMB</span><span style="color:var(--accent); font-weight:800;">&#10003;</span></div>
        <div style="display:flex; justify-content:space-between; align-items:center; gap:16px; padding:15px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:15px; color:#d6d9df;">Get Called: Ads, Dispatch</span><span style="color:var(--accent); font-weight:800;">&#10003;</span></div>
        <div style="display:flex; justify-content:space-between; align-items:center; gap:16px; padding:15px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:15px; color:#d6d9df;">Get Credible: Accreditations, Social</span><span style="color:var(--accent); font-weight:800;">&#10003;</span></div>
        <div style="display:flex; justify-content:space-between; align-items:center; gap:16px; padding:15px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:15px; color:#d6d9df;">Get Staffed: Subcontractor Sourcing</span><span style="color:var(--accent); font-weight:800;">&#10003;</span></div>
        <div style="display:flex; justify-content:space-between; align-items:center; gap:16px; padding:15px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:15px; color:#d6d9df;">Dedicated growth partner</span><span style="color:var(--accent); font-weight:800;">&#10003;</span></div>
        <div style="display:flex; justify-content:space-between; align-items:center; gap:16px; padding:15px 0;"><span style="font-size:15px; color:#d6d9df;">Monthly performance review</span><span style="color:var(--accent); font-weight:800;">&#10003;</span></div>
        <div style="margin-top:22px; padding:22px; border-radius:14px; background:rgba(0,229,160,.08); border:1px solid rgba(0,229,160,.2); display:flex; flex-direction:column; gap:16px;">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:17px; line-height:1.35;">Built around your business. Not a template.</div>
          <a href="contact.php" class="mo-btn" style="align-self:flex-start; font-size:14px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:12px 20px; border-radius:10px;">Let's Talk &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <!-- COMPARISON -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(80px,10vw,130px) clamp(20px,5vw,56px);">
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); max-width:62ch;">
      <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:18px;">Why Partners Switch</div>
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,4.4vw,54px); line-height:1.04; letter-spacing:-.03em; margin:0 0 16px;">The old way. <span style="color:var(--accent);">And the way that actually works.</span></h2>
      <p style="font-size:clamp(15px,1.4vw,18px); line-height:1.6; color:#9aa0aa; margin:0;">If you've hired a marketing company before, the left column will feel familiar. Here's what changes the day you bring on a partner instead.</p>
    </div>
    <div class="mo-grid" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:16px; margin-top:clamp(40px,4vw,56px);">
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); padding:clamp(28px,3vw,38px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:rgba(255,255,255,.02);">
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:13px; letter-spacing:.14em; text-transform:uppercase; color:#8b8f99; margin-bottom:24px;">The Typical Agency</div>
        <div style="display:flex; flex-direction:column; gap:16px;">
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(255,110,110,.12); color:#ff7a7a; font-size:12px; font-weight:800;">&#10005;</span><span style="font-size:15px; color:#9aa0aa; line-height:1.5;">Monthly reports full of impressions and clicks</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(255,110,110,.12); color:#ff7a7a; font-size:12px; font-weight:800;">&#10005;</span><span style="font-size:15px; color:#9aa0aa; line-height:1.5;">An account manager who's never held a ladder</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(255,110,110,.12); color:#ff7a7a; font-size:12px; font-weight:800;">&#10005;</span><span style="font-size:15px; color:#9aa0aa; line-height:1.5;">Locked into a 12-month contract on day one</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(255,110,110,.12); color:#ff7a7a; font-size:12px; font-weight:800;">&#10005;</span><span style="font-size:15px; color:#9aa0aa; line-height:1.5;">A cookie-cutter strategy pulled from a folder</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(255,110,110,.12); color:#ff7a7a; font-size:12px; font-weight:800;">&#10005;</span><span style="font-size:15px; color:#9aa0aa; line-height:1.5;">You chase them for updates and answers</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(255,110,110,.12); color:#ff7a7a; font-size:12px; font-weight:800;">&#10005;</span><span style="font-size:15px; color:#9aa0aa; line-height:1.5;">They get paid whether you grow or not</span></div>
        </div>
      </div>
      <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .1s, transform .8s cubic-bezier(.16,.84,.44,1) .1s; padding:clamp(28px,3vw,38px); border:1px solid rgba(0,229,160,.2); border-radius:18px; background:linear-gradient(180deg, rgba(0,229,160,.06), rgba(255,255,255,.008)); box-shadow:0 40px 90px -55px rgba(0,229,160,.5);">
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:13px; letter-spacing:.14em; text-transform:uppercase; color:var(--accent); margin-bottom:24px;">The DigitalEra Partnership</div>
        <div style="display:flex; flex-direction:column; gap:16px;">
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#d6d9df; line-height:1.5;">Reports on booked jobs and revenue you can bank</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#d6d9df; line-height:1.5;">A partner who's actually run a contracting company</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#d6d9df; line-height:1.5;">6-month minimum, then month-to-month. That's it</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#d6d9df; line-height:1.5;">Strategy built for your trade, market, and margins</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#d6d9df; line-height:1.5;">A real-time dashboard: every dollar, always on</span></div>
          <div style="display:flex; align-items:flex-start; gap:13px;"><span style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:22px; height:22px; border-radius:6px; background:rgba(0,229,160,.14); color:var(--accent); font-size:12px; font-weight:800;">&#10003;</span><span style="font-size:15px; color:#d6d9df; line-height:1.5;">We win when you grow. Period.</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- TRADES -->
  <section id="trades" style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(80px,10vw,130px) clamp(20px,5vw,56px);">
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); max-width:62ch;">
      <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:18px;">Who We Work With</div>
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,4.4vw,54px); line-height:1.04; letter-spacing:-.03em; margin:0 0 16px;">Contractor trades only.</h2>
      <p style="font-size:clamp(15px,1.4vw,18px); line-height:1.6; color:#9aa0aa; margin:0;">We go deep, not wide. Every trade has its own market dynamics, its own buying triggers, its own competitive landscape. We only work with the trades because that's where we're sharpest.</p>
    </div>
    <div data-reveal class="mo-pills" style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .08s, transform .8s cubic-bezier(.16,.84,.44,1) .08s; display:flex; flex-wrap:wrap; gap:12px; margin-top:clamp(36px,4vw,48px);">
      <?php foreach ($trades as $i => $t): ?>
        <button type="button" class="trade-pill<?php echo $i === 0 ? ' is-on' : ''; ?>" data-trade="<?php echo $i; ?>"><?php echo htmlspecialchars($t['name']); ?></button>
      <?php endforeach; ?>
    </div>

    <div id="trade-panel" data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .12s, transform .8s cubic-bezier(.16,.84,.44,1) .12s; margin-top:clamp(28px,4vw,40px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006)); padding:clamp(26px,3.4vw,40px); display:grid; grid-template-columns:auto 1fr; gap:clamp(18px,3vw,40px); align-items:start;">
      <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; letter-spacing:.14em; color:var(--accent); white-space:nowrap; padding-top:6px;" id="trade-count">01 / <?php echo count($trades); ?></div>
      <div>
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(22px,2.6vw,32px); letter-spacing:-.02em; margin-bottom:12px;" id="trade-name"><?php echo htmlspecialchars($trades[0]['name']); ?></div>
        <p style="font-size:clamp(15px,1.45vw,18px); line-height:1.6; color:#b4b8c2; margin:0; max-width:62ch;" id="trade-blurb"><?php echo htmlspecialchars($trades[0]['blurb']); ?></p>
      </div>
    </div>
  </section>

  <!-- FOUNDER QUOTE -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(80px,10vw,130px) clamp(20px,5vw,56px);">
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); max-width:60ch;">
      <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:18px;">From The Founder</div>
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,4.4vw,54px); line-height:1.04; letter-spacing:-.03em; margin:0;">We ran the playbook on <span style="color:var(--accent);">ourselves first.</span></h2>
    </div>
    <div data-reveal class="mo-card founder-quote" style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .1s, transform .8s cubic-bezier(.16,.84,.44,1) .1s; margin-top:clamp(40px,4vw,56px); border:1px solid rgba(0,229,160,.18); border-radius:20px; background:linear-gradient(180deg, rgba(0,229,160,.05), rgba(255,255,255,.008)); box-shadow:0 40px 90px -50px rgba(0,229,160,.5); padding:clamp(30px,3.6vw,50px);">
      <blockquote style="margin:0;">
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:60px; line-height:.6; color:var(--accent); opacity:.5; margin-bottom:12px;">&ldquo;</div>
        <p style="font-size:clamp(17px,1.8vw,23px); line-height:1.58; letter-spacing:-.01em; color:#e4e7ec; margin:0;">We spent years running marketing for other people's businesses. Then we bet on ourselves, started The Roofer Bros, and ran the same playbook on our own company. Eight figures in under 24 months. Now we run it for other contractors who are ready to stop guessing.</p>
      </blockquote>
      <div class="fq-attr">
        <div style="display:flex; align-items:center; justify-content:center; width:54px; height:54px; border-radius:50%; background:rgba(0,229,160,.12); border:1px solid rgba(0,229,160,.28); font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:17px; color:var(--accent); margin-bottom:18px;">SR</div>
        <div style="font-family:'Space Grotesk',sans-serif; font-size:18px; font-weight:700; color:#f5f6f8; letter-spacing:-.01em;">Sako Rassam</div>
        <div style="font-size:14px; color:#8b8f99; margin-top:6px; line-height:1.5;">Founder, The Roofer Bros and Digital Era Media</div>
      </div>
    </div>
  </section>

  <!-- PROOF STRIP -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06); background:radial-gradient(ellipse at 50% 0%, rgba(0,229,160,.09), rgba(0,229,160,0) 60%), #0a0b11;">
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); max-width:1180px; margin:0 auto; padding:clamp(72px,9vw,112px) clamp(20px,5vw,56px); text-align:center;">
      <div style="display:inline-flex; align-items:center; gap:10px; font-size:13px; font-weight:700; letter-spacing:.06em; text-transform:uppercase; color:var(--accent); margin-bottom:36px;">
        <span style="width:26px; height:1px; background:var(--accent); opacity:.5;"></span>
        The Roofer Bros: Built with this exact system
        <span style="width:26px; height:1px; background:var(--accent); opacity:.5;"></span>
      </div>
      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(180px,1fr)); gap:clamp(24px,4vw,48px); max-width:920px; margin:0 auto;">
        <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(38px,5vw,64px); letter-spacing:-.03em; line-height:1; color:var(--accent);">8-Fig</div><div style="font-size:14px; color:#9aa0aa; margin-top:12px; line-height:1.4;">Annual revenue in under 24 months</div></div>
        <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(38px,5vw,64px); letter-spacing:-.03em; line-height:1; color:var(--accent);">500+</div><div style="font-size:14px; color:#9aa0aa; margin-top:12px; line-height:1.4;">Reviews online at 4.9 stars</div></div>
        <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(38px,5vw,64px); letter-spacing:-.03em; line-height:1; color:var(--accent);">$1M+</div><div style="font-size:14px; color:#9aa0aa; margin-top:12px; line-height:1.4;">Ad spend managed</div></div>
        <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(38px,5vw,64px); letter-spacing:-.03em; line-height:1; color:var(--accent);">Top</div><div style="font-size:14px; color:#9aa0aa; margin-top:12px; line-height:1.4;">SEO rankings across primary keywords</div></div>
      </div>
    </div>
  </div>

  <!-- FAQ -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(80px,10vw,130px) clamp(20px,5vw,56px);">
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); max-width:60ch;">
      <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:18px;">Questions, Answered</div>
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,4.4vw,54px); line-height:1.04; letter-spacing:-.03em; margin:0;">Everything you're probably wondering.</h2>
    </div>
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1) .06s, transform .8s cubic-bezier(.16,.84,.44,1) .06s; max-width:860px; margin-top:clamp(36px,4vw,48px); border-top:1px solid rgba(255,255,255,.09);">
      <details class="faq">
        <summary>What exactly do you take over?<span class="chev"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></span></summary>
        <div class="ans">As much or as little as you need. That can mean your entire digital presence: website, SEO, and Google Business Profile, plus paid ads, bilingual dispatch, credibility building, and subcontractor sourcing. Most partners start with the areas that are leaking the most money and expand from there.</div>
      </details>
      <details class="faq">
        <summary>Why only a 6-month minimum?<span class="chev"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></span></summary>
        <div class="ans">Real growth compounds. Six months is the shortest honest window to build the systems, feed the data, and show revenue you can bank. After that we're month-to-month. We'd rather earn your business every month than trap you in a year-long contract.</div>
      </details>
      <details class="faq">
        <summary>Which trades do you work with?<span class="chev"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></span></summary>
        <div class="ans">Contractor trades only: roofing, HVAC, plumbing, electrical, general contracting, windows and doors, solar, and more. We go deep instead of wide because every trade has its own market dynamics and buying triggers, and that focus is where we're sharpest.</div>
      </details>
      <details class="faq">
        <summary>How is this different from hiring an agency?<span class="chev"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></span></summary>
        <div class="ans">You're not hiring a vendor who sends reports and disappears. You're gaining a partner who has run a contracting company, reports on booked jobs instead of impressions, and gives you one point of contact who knows your business inside out. We win when you grow, not when we bill.</div>
      </details>
      <details class="faq">
        <summary>What does a partnership cost?<span class="chev"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></span></summary>
        <div class="ans">Every partnership is scoped to your market, your goals, and the systems you actually need, so there's no one-size price tag. Book a fit call and we'll look at your business and give you a straight number. No pitch, no pressure.</div>
      </details>
      <details class="faq">
        <summary>Do you work with more than one contractor per market?<span class="chev"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg></span></summary>
        <div class="ans">No. When we take on a trade in a market, our job is to make you the name people know, so we won't split our effort with your direct competitor. Once your market's claimed, it's yours.</div>
      </details>
    </div>
  </section>

  <!-- FIT CHECK -->
  <section id="fit" style="position:relative; z-index:1;">
    <?php include __DIR__ . '/includes/fit-check.php'; ?>
  </section>

  <!-- CTA -->
  <div style="position:relative; z-index:1;">
    <div data-reveal style="transition:opacity .8s cubic-bezier(.16,.84,.44,1), transform .8s cubic-bezier(.16,.84,.44,1); max-width:1180px; margin:0 auto; padding:clamp(80px,10vw,140px) clamp(20px,5vw,56px); text-align:center;">
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(32px,5.2vw,66px); line-height:1.04; letter-spacing:-.03em; margin:0 0 22px; max-width:20ch; margin-left:auto; margin-right:auto; text-wrap:balance;">Ready to stop hiring vendors and start growing <span style="color:var(--accent);">with a partner?</span></h2>
      <p style="font-size:clamp(16px,1.5vw,19px); line-height:1.6; color:#9aa0aa; max-width:56ch; margin:0 auto 40px;">We'll look at your business, your market, and your competitors, then tell you exactly what we'd do. No pitch. Just answers.</p>
      <div style="display:flex; flex-wrap:wrap; gap:14px; justify-content:center;">
        <a href="contact.php" class="mo-btn" style="font-size:15px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:16px 28px; border-radius:11px; box-shadow:0 14px 46px -14px rgba(0,229,160,.8);">See If We're a Fit &rarr;</a>
        <a href="tel:<?php echo SITE_PHONE_TEL; ?>" class="mo-ghost" style="font-size:15px; font-weight:600; color:#f5f6f8; background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.14); padding:16px 28px; border-radius:11px;">Call Us Directly</a>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

</div>
<script>
  var TRADES = <?php echo json_encode($trades, JSON_UNESCAPED_UNICODE); ?>;
  (function () {
    var pills = Array.prototype.slice.call(document.querySelectorAll('.trade-pill'));
    var count = document.getElementById('trade-count');
    var name = document.getElementById('trade-name');
    var blurb = document.getElementById('trade-blurb');
    var panel = document.getElementById('trade-panel');
    pills.forEach(function (pill, i) {
      pill.addEventListener('click', function () {
        pills.forEach(function (p) { p.classList.remove('is-on'); });
        pill.classList.add('is-on');
        var t = TRADES[i];
        count.textContent = String(i + 1).padStart(2, '0') + ' / ' + TRADES.length;
        name.textContent = t.name;
        blurb.textContent = t.blurb;
        panel.style.animation = 'none';
        void panel.offsetWidth;
        panel.style.animation = 'tradePanelIn .45s cubic-bezier(.16,.84,.44,1)';
      });
    });
  })();
</script>

</body>
</html>
