<?php
require __DIR__ . '/config.php';
$active = 'services';
$nav_cta_href = 'contact.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>How We Grow You — Digital Era Media</title>
<meta name="description" content="Nine revenue-driving services, one partner: website, local SEO, Google Business Profile, paid ads, reputation, bilingual dispatch, subcontractor sourcing, and more.">
<meta property="og:title" content="How We Grow You — Digital Era Media">
<meta property="og:description" content="Nine revenue-driving services, one partner: website, local SEO, Google Business Profile, paid ads, reputation, bilingual dispatch, subcontractor sourcing, and more.">
<meta property="og:type" content="website">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%2300e5a0'/%3E%3Ctext x='32' y='44' font-family='Arial, sans-serif' font-size='32' font-weight='800' text-anchor='middle' fill='%2304120c'%3EDE%3C/text%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  :root { --accent:#00e5a0; --accent-ink:#04120c; }
  * { box-sizing:border-box; }
  html, body { margin:0; padding:0; }
  body { background-color:#07080c; color:#f5f6f8; font-family:'Manrope',system-ui,sans-serif; -webkit-font-smoothing:antialiased; }
  ::selection { background:var(--accent); color:var(--accent-ink); }
  a { color:var(--accent); text-decoration:none; }
  a:hover { opacity:.9; }
  @keyframes demReveal { from { opacity:0; transform:translateY(26px); } to { opacity:1; transform:none; } }
  @supports (animation-timeline: view()) { [data-reveal] { animation:demReveal .8s cubic-bezier(.16,.84,.44,1) both; animation-timeline:view(); animation-range:entry 2% cover 26%; } }
  @media (prefers-reduced-motion: reduce) { [data-reveal] { opacity:1 !important; animation:none !important; } }
  .card { transition:border-color .45s ease, box-shadow .45s ease, background .45s ease; }
  .card svg { transition:transform .5s cubic-bezier(.16,.84,.44,1); }
  @media (hover:hover) { .card:hover { border-color:rgba(0,229,160,.4) !important; background:linear-gradient(180deg, rgba(0,229,160,.055), rgba(255,255,255,.012)) !important; box-shadow:0 34px 74px -46px rgba(0,229,160,.6); } .card:hover svg { transform:scale(1.1); } }
  .mo-btn { transition:transform .3s cubic-bezier(.16,.84,.44,1), filter .3s ease; }
  @media (hover:hover) { .mo-btn:hover { transform:translateY(-2px); filter:brightness(1.06); } }
  .mo-ghost { transition:transform .3s cubic-bezier(.16,.84,.44,1), border-color .3s ease, background .3s ease; }
  @media (hover:hover) { .mo-ghost:hover { transform:translateY(-2px); border-color:rgba(255,255,255,.32) !important; background:rgba(255,255,255,.08) !important; } }
  nav[data-nav] ul a, footer nav a { position:relative; }
  nav[data-nav] ul a::after, footer nav a::after { content:""; position:absolute; left:0; bottom:-4px; height:1px; width:0; background:var(--accent); transition:width .38s cubic-bezier(.16,.84,.44,1); }
  @media (hover:hover) { nav[data-nav] ul a:hover::after, footer nav a:hover::after { width:100%; } }
  .svc2 { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:16px; }
  .price3 { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:16px; }
  @media (max-width:900px){ .svc2 { grid-template-columns:1fr; } .price3 { grid-template-columns:1fr; } }
</style>
</head>
<body>
<div style="position:relative; overflow:hidden; background:#07080c; min-height:100vh;">
  <div style="position:absolute; top:-220px; left:50%; transform:translateX(-50%); width:1050px; height:600px; background:radial-gradient(ellipse at center, rgba(0,229,160,.14), rgba(0,229,160,0) 62%); pointer-events:none; z-index:0;"></div>

  <?php include __DIR__ . '/includes/nav.php'; ?>

  <!-- HERO -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(60px,9vw,116px) clamp(20px,5vw,56px) clamp(36px,5vw,56px);">
    <div data-reveal style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:20px;">How We Grow You</div>
    <h1 data-reveal style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(40px,6.4vw,84px); line-height:1; letter-spacing:-.035em; margin:0 0 22px; max-width:16ch; text-wrap:balance;">Everything that fills <span style="color:var(--accent);">your schedule.</span></h1>
    <p data-reveal style="font-size:clamp(17px,1.6vw,21px); line-height:1.6; color:#b4b8c2; max-width:56ch; margin:0;">Nine revenue-driving services. One partner. One invoice covering your entire digital growth engine — built exclusively for contractor trades.</p>
  </section>

  <!-- STATEMENT -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06); border-bottom:1px solid rgba(255,255,255,.06); background:linear-gradient(180deg, rgba(0,229,160,.05), rgba(0,229,160,0));">
    <div data-reveal style="max-width:1180px; margin:0 auto; padding:clamp(40px,5vw,60px) clamp(20px,5vw,56px);">
      <p style="font-family:'Space Grotesk',sans-serif; font-weight:500; font-size:clamp(22px,3vw,40px); line-height:1.2; letter-spacing:-.02em; margin:0; max-width:24ch;">No vendor juggling. <span style="color:var(--accent);">No fragmented reporting. Just the whole engine, owned end to end.</span></p>
    </div>
  </div>

  <!-- SERVICES GRID -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(56px,7vw,96px) clamp(20px,5vw,56px);">
    <div class="svc2">
      <div data-reveal class="card" style="padding:clamp(26px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
        <div style="display:flex; align-items:flex-start; gap:16px; margin-bottom:16px;">
          <div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:50px; height:50px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22);"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em;">Website Dev &amp; Optimization</div><div style="font-size:13px; color:var(--accent); font-weight:600; margin-top:5px;">$2,500 – $3,500 / mo · incl. hosting</div></div>
        </div>
        <p style="font-size:14.5px; line-height:1.65; color:#9aa0aa; margin:0 0 16px;">Your website is your #1 sales rep — it works 24/7 and closes jobs while you sleep. We build high-converting contractor sites and keep them optimized every month.</p>
        <div style="display:flex; flex-direction:column; gap:9px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Custom-built around your trade, service area, and target jobs</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Speed-optimized, mobile-first, click-to-call throughout</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Managed hosting + monthly conversion optimization</span></div>
        </div>
      </div>

      <div data-reveal class="card" style="padding:clamp(26px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
        <div style="display:flex; align-items:flex-start; gap:16px; margin-bottom:16px;">
          <div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:50px; height:50px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22);"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em;">Local SEO</div><div style="font-size:13px; color:var(--accent); font-weight:600; margin-top:5px;">$2,500 / mo</div></div>
        </div>
        <p style="font-size:14.5px; line-height:1.65; color:#9aa0aa; margin:0 0 16px;">Organic leads are the cheapest leads you'll ever get. We dominate Google for every service + city in your market — so you're the obvious answer at 11pm.</p>
        <div style="display:flex; flex-direction:column; gap:9px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Full keyword map: every service × every target city</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">On-page + technical SEO, schema, Core Web Vitals</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Monthly rank tracking — keywords, not just traffic</span></div>
        </div>
      </div>

      <div data-reveal class="card" style="padding:clamp(26px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
        <div style="display:flex; align-items:flex-start; gap:16px; margin-bottom:16px;">
          <div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:50px; height:50px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22);"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em;">Google Business Profile</div><div style="font-size:13px; color:var(--accent); font-weight:600; margin-top:5px;">$500 – $1,000 / mo</div></div>
        </div>
        <p style="font-size:14.5px; line-height:1.65; color:#9aa0aa; margin:0 0 16px;">Your GBP is often the first thing a customer sees — before your site, before your ads. We turn yours into a lead machine with weekly activity Google rewards.</p>
        <div style="display:flex; flex-direction:column; gap:9px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Weekly posts, geotagged photos, Q&amp;A seeding</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Every review answered within 24 hours</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Local-pack rank tracking + competitor spam fighting</span></div>
        </div>
      </div>

      <div data-reveal class="card" style="padding:clamp(26px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
        <div style="display:flex; align-items:flex-start; gap:16px; margin-bottom:16px;">
          <div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:50px; height:50px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22);"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v10M9.5 9.5h4a1.5 1.5 0 0 1 0 3h-3a1.5 1.5 0 0 0 0 3h4"/></svg></div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em;">Paid Ads (PPC &amp; LSA)</div><div style="font-size:13px; color:var(--accent); font-weight:600; margin-top:5px;">15% of spend · $3K–5K min budget</div></div>
        </div>
        <p style="font-size:14.5px; line-height:1.65; color:#9aa0aa; margin:0 0 16px;">The fastest way to fill your schedule — when run correctly. Google Search, Local Service Ads, and Meta campaigns built around one goal: booked jobs, not clicks.</p>
        <div style="display:flex; flex-direction:column; gap:9px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">High-intent Search + Google-Guaranteed LSA setup</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Every call &amp; form tied back to a campaign</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">You own the ad account — 100% transparent, always</span></div>
        </div>
      </div>

      <div data-reveal class="card" style="padding:clamp(26px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
        <div style="display:flex; align-items:flex-start; gap:16px; margin-bottom:16px;">
          <div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:50px; height:50px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22);"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.3 6.9.8-5.1 4.7 1.4 6.8L12 17.8 5.9 20.6l1.4-6.8L2.2 9.1l6.9-.8z"/></svg></div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em;">Reputation Management</div><div style="font-size:13px; color:var(--accent); font-weight:600; margin-top:5px;">$300 – $500 / mo</div></div>
        </div>
        <p style="font-size:14.5px; line-height:1.65; color:#9aa0aa; margin:0 0 16px;">Contractors win on reviews — a 4.9-star profile beats a 3.8 in every market. We build your review count systematically and handle every one the right way.</p>
        <div style="display:flex; flex-direction:column; gap:9px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Automated post-job review requests via text &amp; email</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Google, Yelp, Facebook, BBB — multi-platform</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Negative-review strategy + competitor benchmarking</span></div>
        </div>
      </div>

      <div data-reveal class="card" style="padding:clamp(26px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
        <div style="display:flex; align-items:flex-start; gap:16px; margin-bottom:16px;">
          <div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:50px; height:50px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22);"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.63 3.4 2 2 0 0 1 3.6 1.21h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.82a16 16 0 0 0 6.29 6.29l.97-.97a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em;">Bilingual Dispatch (EN/ES)</div><div style="font-size:13px; color:var(--accent); font-weight:600; margin-top:5px;">$1,800 – $2,500 / mo</div></div>
        </div>
        <p style="font-size:14.5px; line-height:1.65; color:#9aa0aa; margin:0 0 16px;">The fastest way to kill a lead is to miss the call. Our bilingual dispatchers are trained on your business — your services, pricing, and how to book the job.</p>
        <div style="display:flex; flex-direction:column; gap:9px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Dedicated dispatcher — not a shared call center</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Booking straight into your CRM + lead qualification</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">English &amp; Spanish — capture your full market</span></div>
        </div>
      </div>

      <div data-reveal class="card" style="padding:clamp(26px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
        <div style="display:flex; align-items:flex-start; gap:16px; margin-bottom:16px;">
          <div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:50px; height:50px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22);"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><path d="M16 4a3.5 3.5 0 0 1 0 7M21 20c0-2.6-1.5-4.8-3.7-5.7"/></svg></div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em;">Subcontractor Sourcing</div><div style="font-size:13px; color:var(--accent); font-weight:600; margin-top:5px;">Custom · by trade &amp; volume</div></div>
        </div>
        <p style="font-size:14.5px; line-height:1.65; color:#9aa0aa; margin:0 0 16px;">Losing a job because you don't have the crew is one of the most expensive problems in contracting. We source, screen, and connect you with qualified subs.</p>
        <div style="display:flex; flex-direction:column; gap:9px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Vetted subs matched to your trade, market, and job type</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Licensing &amp; insurance verified before intro</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Ongoing roster management — a bench, not a scramble</span></div>
        </div>
      </div>

      <div data-reveal class="card" style="padding:clamp(26px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
        <div style="display:flex; align-items:flex-start; gap:16px; margin-bottom:16px;">
          <div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:50px; height:50px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22);"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12v7a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-7"/><path d="M16 6l-4-4-4 4M12 2v13"/></svg></div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em;">Social Media Management</div><div style="font-size:13px; color:var(--accent); font-weight:600; margin-top:5px;">$800 – $1,500 / mo</div></div>
        </div>
        <p style="font-size:14.5px; line-height:1.65; color:#9aa0aa; margin:0 0 16px;">Homeowners choose contractors on trust — and social is where that trust is built before the call. We make you look like the dominant player in your market.</p>
        <div style="display:flex; flex-direction:column; gap:9px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">3–5 posts/week across Facebook &amp; Instagram</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Short-form Reels &amp; TikToks: job footage, before/afters</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Monthly content calendar + community management</span></div>
        </div>
      </div>

      <div data-reveal class="card" style="padding:clamp(26px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
        <div style="display:flex; align-items:flex-start; gap:16px; margin-bottom:16px;">
          <div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:50px; height:50px; border-radius:13px; background:rgba(0,229,160,.1); border:1px solid rgba(0,229,160,.22);"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em;">Contractor Accreditations</div><div style="font-size:13px; color:var(--accent); font-weight:600; margin-top:5px;">$500 – $1,200 one-time each</div></div>
        </div>
        <p style="font-size:14.5px; line-height:1.65; color:#9aa0aa; margin:0 0 16px;">Licenses, certifications, and badges aren't paperwork — they're trust signals that close jobs. We help you get them and make sure they're visible everywhere.</p>
        <div style="display:flex; flex-direction:column; gap:9px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Highest-impact accreditations for your trade &amp; market</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Manufacturer certs (GAF, CertainTeed, Carrier…) + BBB</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="flex-shrink:0; color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:13.5px; color:#c7cbd3; line-height:1.5;">Badge placement across site, GMB, ads, and proposals</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06); border-bottom:1px solid rgba(255,255,255,.06); background:#0a0b11;">
    <section style="max-width:1180px; margin:0 auto; padding:clamp(56px,7vw,96px) clamp(20px,5vw,56px);">
      <div data-reveal style="max-width:60ch; margin-bottom:clamp(32px,4vw,48px);">
        <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:18px;">Pricing</div>
        <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,4.4vw,54px); line-height:1.04; letter-spacing:-.03em; margin:0 0 16px;">Three ways to get started.</h2>
        <p style="font-size:clamp(15px,1.4vw,18px); line-height:1.6; color:#9aa0aa; margin:0;">Every plan includes a dedicated point of contact and a 6-month minimum — the lowest commitment in the industry.</p>
      </div>
      <div class="price3">
        <div data-reveal class="card" style="padding:clamp(28px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:14px; letter-spacing:.02em; text-transform:uppercase; color:#8b8f99; margin-bottom:14px;">Foundation</div>
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(34px,4vw,46px); letter-spacing:-.03em; line-height:1;">$2,000<span style="font-size:16px; color:#8b8f99; font-weight:500;"> / mo</span></div>
          <p style="font-size:14px; line-height:1.6; color:#9aa0aa; margin:16px 0 20px;">Get your digital foundation solid — a website that converts, hosted and optimized every month.</p>
          <div style="display:flex; flex-direction:column; gap:10px;">
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Website build &amp; hosting</span></div>
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Monthly optimization</span></div>
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Basic call tracking</span></div>
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Dedicated account contact</span></div>
          </div>
        </div>
        <div data-reveal class="card" style="padding:clamp(28px,3vw,36px); border:1px solid rgba(0,229,160,.35); border-radius:18px; background:linear-gradient(180deg, rgba(0,229,160,.07), rgba(255,255,255,.008)); box-shadow:0 40px 90px -50px rgba(0,229,160,.5);">
          <div style="display:flex; align-items:center; gap:10px; margin-bottom:14px;"><span style="font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:14px; letter-spacing:.02em; text-transform:uppercase; color:var(--accent);">Growth</span><span style="font-size:11px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:3px 9px; border-radius:100px; letter-spacing:.04em;">POPULAR</span></div>
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(34px,4vw,46px); letter-spacing:-.03em; line-height:1;">$4,500<span style="font-size:16px; color:#8b8f99; font-weight:500;"> / mo</span></div>
          <p style="font-size:14px; line-height:1.6; color:#9aa0aa; margin:16px 0 20px;">Add SEO to the foundation. Start ranking organically and building long-term lead flow.</p>
          <div style="display:flex; flex-direction:column; gap:10px;">
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Everything in Foundation</span></div>
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Local SEO + Google Business Profile</span></div>
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Reputation management</span></div>
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Monthly rank reports</span></div>
          </div>
        </div>
        <div data-reveal class="card" style="padding:clamp(28px,3vw,36px); border:1px solid rgba(255,255,255,.08); border-radius:18px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:14px; letter-spacing:.02em; text-transform:uppercase; color:#8b8f99; margin-bottom:14px;">Full Stack</div>
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(34px,4vw,46px); letter-spacing:-.03em; line-height:1;">$4,500<span style="font-size:16px; color:#8b8f99; font-weight:500;"> + 15% spend</span></div>
          <p style="font-size:14px; line-height:1.6; color:#9aa0aa; margin:16px 0 20px;">The full growth engine — every service, including paid ads and bilingual dispatch.</p>
          <div style="display:flex; flex-direction:column; gap:10px;">
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Everything in Growth</span></div>
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Google &amp; LSA + Meta ad management</span></div>
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Bilingual dispatch support</span></div>
            <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14px; color:#c7cbd3;">Full revenue reporting</span></div>
          </div>
        </div>
      </div>
      <div data-reveal style="text-align:center; margin-top:36px;">
        <p style="font-size:13px; color:#6b6f79; margin:0 0 20px;">Pricing is customized to your market size, competition, and baseline. These are starting ranges.</p>
        <a href="contact.php" class="mo-btn" style="display:inline-block; font-size:15px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:16px 26px; border-radius:11px; box-shadow:0 14px 40px -16px rgba(0,229,160,.7);">Get a Custom Quote &rarr;</a>
      </div>
    </section>
  </div>

  <!-- CTA -->
  <div style="position:relative; z-index:1;">
    <div data-reveal style="max-width:1180px; margin:0 auto; padding:clamp(72px,9vw,120px) clamp(20px,5vw,56px); text-align:center;">
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,5vw,60px); line-height:1.04; letter-spacing:-.03em; margin:0 0 22px; max-width:20ch; margin-left:auto; margin-right:auto; text-wrap:balance;">Not sure which plan <span style="color:var(--accent);">fits?</span></h2>
      <p style="font-size:clamp(16px,1.5vw,19px); line-height:1.6; color:#9aa0aa; max-width:52ch; margin:0 auto 36px;">Book a free audit. We'll assess your current setup and tell you exactly where to start.</p>
      <div style="display:flex; flex-wrap:wrap; gap:14px; justify-content:center;">
        <a href="contact.php" class="mo-btn" style="font-size:15px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:16px 28px; border-radius:11px; box-shadow:0 14px 46px -14px rgba(0,229,160,.8);">Book Your Free Audit &rarr;</a>
        <a href="about.php" class="mo-ghost" style="font-size:15px; font-weight:600; color:#f5f6f8; background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.14); padding:16px 28px; border-radius:11px;">Learn About Us</a>
      </div>
    </div>
  </div>

  <?php include __DIR__ . '/includes/footer.php'; ?>
</div>
</body>
</html>
