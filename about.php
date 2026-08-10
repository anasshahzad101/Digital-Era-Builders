<?php
require __DIR__ . '/config.php';
$active = 'about';
$nav_cta_href = 'contact.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About | Digital Era Media</title>
<meta name="description" content="Digital Era Media was built inside a real contracting business. Every strategy was proven on our own company, The Roofer Bros, before we offered it to anyone else.">
<meta property="og:title" content="About | Digital Era Media">
<meta property="og:description" content="Digital Era Media was built inside a real contracting business. Every strategy was proven on our own company, The Roofer Bros, before we offered it to anyone else.">
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
  @media (hover:hover) { .card:hover { border-color:rgba(0,229,160,.4) !important; background:linear-gradient(180deg, rgba(0,229,160,.055), rgba(255,255,255,.012)) !important; box-shadow:0 34px 74px -46px rgba(0,229,160,.6); } }
  .mo-btn { transition:transform .3s cubic-bezier(.16,.84,.44,1), filter .3s ease; }
  @media (hover:hover) { .mo-btn:hover { transform:translateY(-2px); filter:brightness(1.06); } }
  .mo-ghost { transition:transform .3s cubic-bezier(.16,.84,.44,1), border-color .3s ease, background .3s ease; }
  @media (hover:hover) { .mo-ghost:hover { transform:translateY(-2px); border-color:rgba(255,255,255,.32) !important; background:rgba(255,255,255,.08) !important; } }
  nav[data-nav] ul a, footer nav a { position:relative; }
  nav[data-nav] ul a::after, footer nav a::after { content:""; position:absolute; left:0; bottom:-4px; height:1px; width:0; background:var(--accent); transition:width .38s cubic-bezier(.16,.84,.44,1); }
  @media (hover:hover) { nav[data-nav] ul a:hover::after, footer nav a:hover::after { width:100%; } }
  .grid2 { display:grid; grid-template-columns:1.1fr .9fr; gap:clamp(32px,5vw,64px); }
  .met3 { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:12px; }
  .adv2 { display:grid; grid-template-columns:1fr 1fr; gap:clamp(28px,4vw,48px); }
  .fit2 { display:grid; grid-template-columns:1fr 1fr; gap:16px; }
  @media (max-width:900px){ .grid2, .adv2, .fit2 { grid-template-columns:1fr; } .met3 { grid-template-columns:repeat(2,minmax(0,1fr)); } }
</style>
</head>
<body>
<div style="position:relative; overflow:hidden; background:#07080c; min-height:100vh;">
  <div style="position:absolute; top:-220px; left:50%; transform:translateX(-50%); width:1050px; height:600px; background:radial-gradient(ellipse at center, rgba(0,229,160,.14), rgba(0,229,160,0) 62%); pointer-events:none; z-index:0;"></div>

  <?php include __DIR__ . '/includes/nav.php'; ?>

  <!-- HERO -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(60px,9vw,116px) clamp(20px,5vw,56px) clamp(36px,5vw,56px);">
    <div data-reveal style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:20px;">About</div>
    <h1 data-reveal style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(38px,6vw,80px); line-height:1; letter-spacing:-.035em; margin:0 0 22px; max-width:18ch; text-wrap:balance;">We're not an agency. We're a contractor <span style="color:var(--accent);">who built the system.</span></h1>
    <p data-reveal style="font-size:clamp(17px,1.6vw,21px); line-height:1.6; color:#b4b8c2; max-width:58ch; margin:0;">Digital Era Media was built inside a real contracting business: The Roofer Bros. Every tool, every strategy, every process was proven on our own company before we offered it to anyone else.</p>
  </section>

  <!-- STATEMENT -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06); border-bottom:1px solid rgba(255,255,255,.06); background:linear-gradient(180deg, rgba(0,229,160,.05), rgba(0,229,160,0));">
    <div data-reveal style="max-width:1180px; margin:0 auto; padding:clamp(40px,5vw,60px) clamp(20px,5vw,56px);">
      <p style="font-family:'Space Grotesk',sans-serif; font-weight:500; font-size:clamp(22px,3vw,40px); line-height:1.2; letter-spacing:-.02em; margin:0; max-width:26ch;">We own The Roofer Bros. <span style="color:var(--accent);">We grew it to 8-figure revenue in under 2 years using the exact system we now offer the trades.</span></p>
    </div>
  </div>

  <!-- ORIGIN + METRICS -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(56px,7vw,96px) clamp(20px,5vw,56px);">
    <div class="grid2" style="align-items:start;">
      <div data-reveal>
        <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:16px;">The Origin</div>
        <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(26px,3.6vw,42px); line-height:1.08; letter-spacing:-.025em; margin:0 0 20px;">Built out of necessity. Proven in the field.</h2>
        <p style="font-size:15.5px; color:#9aa0aa; line-height:1.75; margin:0 0 16px;">We didn't start as an agency. We started as a roofing company trying to figure out why our competitors were getting all the calls.</p>
        <p style="font-size:15.5px; color:#9aa0aa; line-height:1.75; margin:0 0 16px;">We hired agencies. They sent traffic reports. We sent checks. The phone didn't ring any more than before. So we fired them. And built it ourselves.</p>
        <p style="font-size:15.5px; color:#9aa0aa; line-height:1.75; margin:0 0 16px;">Over 18 months we built a full growth engine from scratch: ads, SEO, GMB, reputation, and a bilingual dispatch team. The Roofer Bros went from chasing jobs to turning them away. 8-figure revenue. 500+ reviews. Top rankings across our primary keywords.</p>
        <p style="font-size:15.5px; color:#c7cbd3; line-height:1.75; margin:0;">Then other contractors started asking what we were doing. And Digital Era Media was born.</p>
      </div>
      <div data-reveal class="met3">
        <div style="border:1px solid rgba(255,255,255,.08); border-radius:14px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); padding:22px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:28px; letter-spacing:-.03em; color:var(--accent); line-height:1;">8-Fig</div><div style="font-size:12.5px; color:#8b8f99; margin-top:8px; line-height:1.4;">Annual revenue at The Roofer Bros</div></div>
        <div style="border:1px solid rgba(255,255,255,.08); border-radius:14px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); padding:22px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:28px; letter-spacing:-.03em; color:var(--accent); line-height:1;">&lt;24mo</div><div style="font-size:12.5px; color:#8b8f99; margin-top:8px; line-height:1.4;">To an 8-figure run rate</div></div>
        <div style="border:1px solid rgba(255,255,255,.08); border-radius:14px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); padding:22px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:28px; letter-spacing:-.03em; color:var(--accent); line-height:1;">500+</div><div style="font-size:12.5px; color:#8b8f99; margin-top:8px; line-height:1.4;">Reviews online at 4.9 stars</div></div>
        <div style="border:1px solid rgba(255,255,255,.08); border-radius:14px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); padding:22px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:28px; letter-spacing:-.03em; color:var(--accent); line-height:1;">60%+</div><div style="font-size:12.5px; color:#8b8f99; margin-top:8px; line-height:1.4;">Revenue from inbound, zero cold calling</div></div>
        <div style="border:1px solid rgba(255,255,255,.08); border-radius:14px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); padding:22px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:28px; letter-spacing:-.03em; color:var(--accent); line-height:1;">$1M+</div><div style="font-size:12.5px; color:#8b8f99; margin-top:8px; line-height:1.4;">Ad spend managed internally</div></div>
        <div style="border:1px solid rgba(255,255,255,.08); border-radius:14px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); padding:22px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:28px; letter-spacing:-.03em; color:var(--accent); line-height:1;">Top</div><div style="font-size:12.5px; color:#8b8f99; margin-top:8px; line-height:1.4;">SEO rankings across primary keywords</div></div>
      </div>
    </div>
  </section>

  <!-- ADVANTAGE -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06); border-bottom:1px solid rgba(255,255,255,.06); background:#0a0b11;">
    <section style="max-width:1180px; margin:0 auto; padding:clamp(56px,7vw,96px) clamp(20px,5vw,56px);">
      <div data-reveal style="max-width:60ch; margin-bottom:clamp(32px,4vw,48px);">
        <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:16px;">Why It's Different</div>
        <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(28px,4vw,50px); line-height:1.05; letter-spacing:-.03em; margin:0 0 14px;">The contractor advantage.</h2>
        <p style="font-size:clamp(15px,1.4vw,18px); line-height:1.6; color:#9aa0aa; margin:0;">This isn't positioning. These are structural differences that change the quality of what we build for you.</p>
      </div>
      <div class="adv2">
        <div style="display:flex; flex-direction:column; gap:24px;">
          <div data-reveal style="display:flex; gap:18px; align-items:flex-start;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); flex-shrink:0; padding-top:2px;">01</div><div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">We know what a slow week costs</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">We've sat in the truck on a Tuesday with zero calls. We know the difference between a vanity metric and one that pays your crew. And we build around the latter.</p></div></div>
          <div data-reveal style="display:flex; gap:18px; align-items:flex-start;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); flex-shrink:0; padding-top:2px;">02</div><div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">We've run ads on our own money</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">There's no better teacher than spending your own ad budget. We know which targeting burns cash and which fills a schedule. And we apply it from day one.</p></div></div>
          <div data-reveal style="display:flex; gap:18px; align-items:flex-start;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); flex-shrink:0; padding-top:2px;">03</div><div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">We built the dispatcher system first</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">We needed bilingual dispatch because we operate in a bilingual market. What we offer clients is the same system we refined over two years on our own leads.</p></div></div>
        </div>
        <div style="display:flex; flex-direction:column; gap:24px;">
          <div data-reveal style="display:flex; gap:18px; align-items:flex-start;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); flex-shrink:0; padding-top:2px;">04</div><div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">Contractor credibility opens doors</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">When you hear we own a roofing company, the conversation is different. We're peers, not vendors. And that trust transfers into better results.</p></div></div>
          <div data-reveal style="display:flex; gap:18px; align-items:flex-start;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); flex-shrink:0; padding-top:2px;">05</div><div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">We're incentivized the same way you are</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">Our company runs on booked jobs. So does yours. That shared incentive means we're never satisfied with traffic, only with a full schedule.</p></div></div>
          <div data-reveal style="display:flex; gap:18px; align-items:flex-start;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); flex-shrink:0; padding-top:2px;">06</div><div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">No long-term contracts. We don't need them</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">If what we build works, you stay. So we earn your business month to month, the same way you earn your clients' referrals.</p></div></div>
        </div>
      </div>
    </section>
  </div>

  <!-- FIT / NOT FIT -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(56px,7vw,96px) clamp(20px,5vw,56px);">
    <div data-reveal style="max-width:60ch; margin-bottom:clamp(28px,4vw,44px);">
      <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:16px;">Who We Work With</div>
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(28px,4vw,50px); line-height:1.05; letter-spacing:-.03em; margin:0 0 14px;">Serious contractors only.</h2>
      <p style="font-size:clamp(15px,1.4vw,18px); line-height:1.6; color:#9aa0aa; margin:0;">We're selective because the work is deep. We can't run someone's entire growth engine halfway.</p>
    </div>
    <div class="fit2">
      <div data-reveal class="card" style="border:1px solid rgba(0,229,160,.28); border-radius:16px; background:linear-gradient(180deg, rgba(0,229,160,.05), rgba(255,255,255,.008)); padding:clamp(26px,3vw,34px);">
        <h4 style="font-family:'Space Grotesk',sans-serif; font-size:16px; font-weight:700; color:var(--accent); margin:0 0 16px;">We're a fit if you…</h4>
        <div style="display:flex; flex-direction:column; gap:12px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14.5px; color:#c7cbd3; line-height:1.5;">Run a contractor business doing at least $500K/year</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14.5px; color:#c7cbd3; line-height:1.5;">Are ready to invest $15,000+ per month in ad spend</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14.5px; color:#c7cbd3; line-height:1.5;">Want to be found, not just look good on paper</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14.5px; color:#c7cbd3; line-height:1.5;">Can handle more leads and have the crew to fulfill them</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:var(--accent); font-weight:800; font-size:12px; margin-top:3px;">&#10003;</span><span style="font-size:14.5px; color:#c7cbd3; line-height:1.5;">Respond fast and close jobs professionally</span></div>
        </div>
      </div>
      <div data-reveal class="card" style="border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006)); padding:clamp(26px,3vw,34px);">
        <h4 style="font-family:'Space Grotesk',sans-serif; font-size:16px; font-weight:700; color:#8b8f99; margin:0 0 16px;">We're not a fit if you…</h4>
        <div style="display:flex; flex-direction:column; gap:12px;">
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:#6b6f79; font-weight:800; font-size:12px; margin-top:3px;">&#10005;</span><span style="font-size:14.5px; color:#8b8f99; line-height:1.5;">Are just starting out with no existing revenue</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:#6b6f79; font-weight:800; font-size:12px; margin-top:3px;">&#10005;</span><span style="font-size:14.5px; color:#8b8f99; line-height:1.5;">Want a cheap quick-fix with no real budget</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:#6b6f79; font-weight:800; font-size:12px; margin-top:3px;">&#10005;</span><span style="font-size:14.5px; color:#8b8f99; line-height:1.5;">Aren't in a contractor trade (we only work the trades)</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:#6b6f79; font-weight:800; font-size:12px; margin-top:3px;">&#10005;</span><span style="font-size:14.5px; color:#8b8f99; line-height:1.5;">Are looking for vanity metrics and flashy reports</span></div>
          <div style="display:flex; gap:11px; align-items:flex-start;"><span style="color:#6b6f79; font-weight:800; font-size:12px; margin-top:3px;">&#10005;</span><span style="font-size:14.5px; color:#8b8f99; line-height:1.5;">Operate where The Roofer Bros competes directly</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06);">
    <div data-reveal style="max-width:1180px; margin:0 auto; padding:clamp(72px,9vw,120px) clamp(20px,5vw,56px); text-align:center;">
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,5vw,60px); line-height:1.04; letter-spacing:-.03em; margin:0 0 22px; max-width:18ch; margin-left:auto; margin-right:auto; text-wrap:balance;">Sound like <span style="color:var(--accent);">a fit?</span></h2>
      <p style="font-size:clamp(16px,1.5vw,19px); line-height:1.6; color:#9aa0aa; max-width:54ch; margin:0 auto 36px;">Book a free audit. No pitch. We'll look at your setup and tell you exactly what we'd do, whether you hire us or not.</p>
      <div style="display:flex; flex-wrap:wrap; gap:14px; justify-content:center;">
        <a href="contact.php" class="mo-btn" style="font-size:15px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:16px 28px; border-radius:11px; box-shadow:0 14px 46px -14px rgba(0,229,160,.8);">Book Your Free Audit &rarr;</a>
      </div>
    </div>
  </div>

  <?php include __DIR__ . '/includes/footer.php'; ?>
</div>
</body>
</html>
