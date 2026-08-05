<?php
require __DIR__ . '/config.php';
$active = 'results';
$nav_cta_href = 'contact.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Results — The Roofer Bros Case Study | Digital Era Media</title>
<meta name="description" content="How we took The Roofer Bros from zero inbound to 8-figure revenue in under 24 months — the exact month-by-month growth system we now run for other trades.">
<meta property="og:title" content="Results — The Roofer Bros Case Study | Digital Era Media">
<meta property="og:description" content="How we took The Roofer Bros from zero inbound to 8-figure revenue in under 24 months — the exact month-by-month growth system we now run for other trades.">
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
  .stat4 { display:grid; grid-template-columns:repeat(4,minmax(0,1fr)); gap:1px; background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.08); border-radius:16px; overflow:hidden; }
  .grid2 { display:grid; grid-template-columns:1fr 1fr; gap:clamp(28px,4vw,56px); }
  .drv3 { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:16px; }
  @media (max-width:900px){ .stat4 { grid-template-columns:repeat(2,minmax(0,1fr)); } .drv3 { grid-template-columns:1fr; } .grid2 { grid-template-columns:1fr; } }
  @media (max-width:520px){ .stat4 { grid-template-columns:1fr; } }
</style>
</head>
<body>
<div style="position:relative; overflow:hidden; background:#07080c; min-height:100vh;">
  <div style="position:absolute; top:-220px; left:50%; transform:translateX(-50%); width:1050px; height:600px; background:radial-gradient(ellipse at center, rgba(0,229,160,.14), rgba(0,229,160,0) 62%); pointer-events:none; z-index:0;"></div>

  <?php include __DIR__ . '/includes/nav.php'; ?>

  <!-- HERO -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(60px,9vw,116px) clamp(20px,5vw,56px) clamp(36px,5vw,56px);">
    <div data-reveal style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:20px;">The Roofer Bros — Case Study</div>
    <h1 data-reveal style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(40px,6.4vw,84px); line-height:1; letter-spacing:-.035em; margin:0 0 22px; max-width:15ch; text-wrap:balance;">From zero inbound to <span style="color:var(--accent);">8 figures.</span></h1>
    <p data-reveal style="font-size:clamp(17px,1.6vw,21px); line-height:1.6; color:#b4b8c2; max-width:56ch; margin:0;">We built and ran this exact system on our own company first. Here's what happened — month by month.</p>
  </section>

  <!-- STATS -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(0,229,160,.18); border-bottom:1px solid rgba(0,229,160,.18); background:radial-gradient(ellipse at 50% 0%, rgba(0,229,160,.08), rgba(0,229,160,0) 60%), #0a0f0d;">
    <section data-reveal style="max-width:1180px; margin:0 auto; padding:clamp(48px,6vw,80px) clamp(20px,5vw,56px);">
      <div class="stat4">
        <div style="background:#0a0b11; padding:26px 28px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,3vw,44px); letter-spacing:-.03em; line-height:1; color:var(--accent);">8-Fig</div><div style="font-size:13px; color:#8b8f99; margin-top:10px; line-height:1.4;">Annual revenue in under 24 months</div></div>
        <div style="background:#0a0b11; padding:26px 28px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,3vw,44px); letter-spacing:-.03em; line-height:1; color:var(--accent);">500+</div><div style="font-size:13px; color:#8b8f99; margin-top:10px; line-height:1.4;">Google reviews at 4.9 stars</div></div>
        <div style="background:#0a0b11; padding:26px 28px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,3vw,44px); letter-spacing:-.03em; line-height:1; color:var(--accent);">$1M+</div><div style="font-size:13px; color:#8b8f99; margin-top:10px; line-height:1.4;">Paid ad spend managed</div></div>
        <div style="background:#0a0b11; padding:26px 28px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,3vw,44px); letter-spacing:-.03em; line-height:1; color:var(--accent);">60%+</div><div style="font-size:13px; color:#8b8f99; margin-top:10px; line-height:1.4;">Revenue from inbound — no cold calling</div></div>
        <div style="background:#0a0b11; padding:26px 28px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,3vw,44px); letter-spacing:-.03em; line-height:1; color:var(--accent);">#1</div><div style="font-size:13px; color:#8b8f99; margin-top:10px; line-height:1.4;">SEO rankings across all primary keywords</div></div>
        <div style="background:#0a0b11; padding:26px 28px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,3vw,44px); letter-spacing:-.03em; line-height:1; color:var(--accent);">Top 3</div><div style="font-size:13px; color:#8b8f99; margin-top:10px; line-height:1.4;">Local pack position for primary terms</div></div>
        <div style="background:#0a0b11; padding:26px 28px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,3vw,44px); letter-spacing:-.03em; line-height:1; color:var(--accent);">100s</div><div style="font-size:13px; color:#8b8f99; margin-top:10px; line-height:1.4;">Videos &amp; Reels for organic &amp; paid</div></div>
        <div style="background:#0a0b11; padding:26px 28px;"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,3vw,44px); letter-spacing:-.03em; line-height:1; color:var(--accent);">Press</div><div style="font-size:13px; color:#8b8f99; margin-top:10px; line-height:1.4;">National &amp; local media coverage secured</div></div>
      </div>
    </section>
  </div>

  <!-- STARTING POINT -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(56px,7vw,96px) clamp(20px,5vw,56px);">
    <div data-reveal style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:16px;">Where We Started</div>
    <h2 data-reveal style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(28px,4vw,48px); line-height:1.05; letter-spacing:-.03em; margin:0 0 clamp(28px,4vw,44px);">Month 0 — the baseline.</h2>
    <div class="grid2" style="align-items:start;">
      <div data-reveal>
        <p style="font-size:15.5px; color:#9aa0aa; line-height:1.75; margin:0 0 16px;">The Roofer Bros launched with one van, one crew, and zero digital presence. No website. No reviews. No ad history. No GMB. Nothing.</p>
        <p style="font-size:15.5px; color:#9aa0aa; line-height:1.75; margin:0 0 16px;">We were chasing jobs through word of mouth and door knocking — the way most contractors start. Nothing wrong with it. But it had a ceiling.</p>
        <p style="font-size:15.5px; color:#9aa0aa; line-height:1.75; margin:0;">So we decided to build the entire digital growth engine ourselves — not hire an agency. And track everything.</p>
      </div>
      <div data-reveal class="card" style="border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008)); padding:clamp(24px,3vw,32px);">
        <div style="font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:14px; letter-spacing:.02em; text-transform:uppercase; color:#8b8f99; margin-bottom:18px;">Month 0 Snapshot</div>
        <div style="display:flex; justify-content:space-between; gap:16px; padding:13px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:14.5px; color:#d6d9df;">Website</span><span style="font-size:13px; color:#8b8f99;">None</span></div>
        <div style="display:flex; justify-content:space-between; gap:16px; padding:13px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:14.5px; color:#d6d9df;">Google Reviews</span><span style="font-size:13px; color:#8b8f99;">0</span></div>
        <div style="display:flex; justify-content:space-between; gap:16px; padding:13px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:14.5px; color:#d6d9df;">Google Business Profile</span><span style="font-size:13px; color:#8b8f99;">Unclaimed</span></div>
        <div style="display:flex; justify-content:space-between; gap:16px; padding:13px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:14.5px; color:#d6d9df;">SEO Rankings</span><span style="font-size:13px; color:#8b8f99;">None</span></div>
        <div style="display:flex; justify-content:space-between; gap:16px; padding:13px 0; border-bottom:1px solid rgba(255,255,255,.07);"><span style="font-size:14.5px; color:#d6d9df;">Monthly Inbound Leads</span><span style="font-size:13px; color:#8b8f99;">0</span></div>
        <div style="display:flex; justify-content:space-between; gap:16px; padding:13px 0;"><span style="font-size:14.5px; color:#d6d9df;">Monthly Revenue</span><span style="font-size:13px; color:#8b8f99;">Word of mouth only</span></div>
      </div>
    </div>
  </section>

  <!-- TIMELINE -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06); border-bottom:1px solid rgba(255,255,255,.06); background:#0a0b11;">
    <section style="max-width:1180px; margin:0 auto; padding:clamp(56px,7vw,96px) clamp(20px,5vw,56px);">
      <div data-reveal style="margin-bottom:clamp(32px,4vw,48px);">
        <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:16px;">The Growth Timeline</div>
        <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(28px,4vw,48px); line-height:1.05; letter-spacing:-.03em; margin:0;">Month by month.</h2>
      </div>
      <div style="display:flex; flex-direction:column; gap:14px;">
        <div data-reveal class="card" style="display:grid; grid-template-columns:150px 1fr; gap:clamp(16px,3vw,32px); padding:clamp(22px,3vw,30px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); letter-spacing:.02em;">Month 1–2</div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">Foundation: Website + GMB + Tracking</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">Built the website from scratch — fast, mobile-first, conversion-focused. Claimed and fully optimized the GBP. Set up call and form tracking. Launched with zero paid spend to learn our organic baseline first.</p></div>
        </div>
        <div data-reveal class="card" style="display:grid; grid-template-columns:150px 1fr; gap:clamp(16px,3vw,32px); padding:clamp(22px,3vw,30px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); letter-spacing:.02em;">Month 3</div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">First Google Search Ads — $3K/mo</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">Launched a targeted Search campaign on high-intent roofing keywords. Within 30 days we had a measurable cost-per-lead and adjusted bids weekly. First booked inbound jobs from digital — not referral, not door knock.</p></div>
        </div>
        <div data-reveal class="card" style="display:grid; grid-template-columns:150px 1fr; gap:clamp(16px,3vw,32px); padding:clamp(22px,3vw,30px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); letter-spacing:.02em;">Month 4–5</div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">SEO Content Push + Review Generation</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">Began publishing city and service pages targeting every keyword/location combo in our market. Launched a post-job review sequence via text — reviews went 0 to 40+ in 60 days. First local-pack appearances.</p></div>
        </div>
        <div data-reveal class="card" style="display:grid; grid-template-columns:150px 1fr; gap:clamp(16px,3vw,32px); padding:clamp(22px,3vw,30px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); letter-spacing:.02em;">Month 6</div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">Video Content + Facebook Ads</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">Started shooting short-form video — job sites, before/afters, crew footage — and ran it as Meta ads and retargeting. Brand recognition compounded. People started saying "I see you guys everywhere."</p></div>
        </div>
        <div data-reveal class="card" style="display:grid; grid-template-columns:150px 1fr; gap:clamp(16px,3vw,32px); padding:clamp(22px,3vw,30px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); letter-spacing:.02em;">Month 7–9</div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">Local Service Ads + Bilingual Dispatch</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">Added LSA to the paid stack and hired a bilingual dispatcher for the growing inbound volume. Within 60 days, Spanish-language leads were 20%+ of booked jobs — a market we'd left completely untouched.</p></div>
        </div>
        <div data-reveal class="card" style="display:grid; grid-template-columns:150px 1fr; gap:clamp(16px,3vw,32px); padding:clamp(22px,3vw,30px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); letter-spacing:.02em;">Month 10–12</div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">SEO Breaks Through — Organic Compounds</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">City pages hit page 1, then #1 across most target terms. Organic leads arrived without ad spend behind them, and cost per lead dropped sharply as inbound volume grew.</p></div>
        </div>
        <div data-reveal class="card" style="display:grid; grid-template-columns:150px 1fr; gap:clamp(16px,3vw,32px); padding:clamp(22px,3vw,30px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); letter-spacing:.02em;">Month 13–18</div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">Full Engine — Scale Spend + Press</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">Scaled ad spend past $30K/mo as returns proved out. Secured local and national press — authoritative backlinks that accelerated domain authority. Reviews crossed 300 at 4.9. Revenue run rate crossed into 8 figures.</p></div>
        </div>
        <div data-reveal class="card" style="display:grid; grid-template-columns:150px 1fr; gap:clamp(16px,3vw,32px); padding:clamp(22px,3vw,30px); border:1px solid rgba(0,229,160,.22); border-radius:16px; background:linear-gradient(180deg, rgba(0,229,160,.06), rgba(255,255,255,.006));">
          <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); letter-spacing:.02em;">Month 19–24</div>
          <div><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:8px;">Market Dominance — Turning Jobs Away</div><p style="font-size:14.5px; color:#9aa0aa; line-height:1.65; margin:0;">The dominant digital presence in our market. 500+ reviews, #1 across all primary terms, top 3 in the local pack. We had to turn jobs away because demand exceeded capacity — that's when we knew the system was real enough to offer other trades.</p></div>
        </div>
      </div>
    </section>
  </div>

  <!-- DRIVERS -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(56px,7vw,96px) clamp(20px,5vw,56px);">
    <div data-reveal style="max-width:60ch; margin-bottom:clamp(28px,4vw,44px);">
      <div style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:16px;">What Moved the Needle</div>
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(28px,4vw,48px); line-height:1.05; letter-spacing:-.03em; margin:0 0 14px;">The real drivers.</h2>
      <p style="font-size:clamp(15px,1.4vw,18px); line-height:1.6; color:#9aa0aa; margin:0;">Not everything worked equally. These drove the majority of the results.</p>
    </div>
    <div class="drv3">
      <div data-reveal class="card" style="padding:clamp(26px,3vw,32px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:10px;">Reviews — the biggest multiplier</div><p style="font-size:14px; color:#9aa0aa; line-height:1.65; margin:0;">0 to 500+ at 4.9 stars changed everything. Close rate up, CPL down, more Google visibility. Reviews compound like almost nothing else.</p></div>
      <div data-reveal class="card" style="padding:clamp(26px,3vw,32px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:10px;">City-page SEO — long-term equity</div><p style="font-size:14px; color:#9aa0aa; line-height:1.65; margin:0;">Took 6–9 months to kick in, then never stopped. Every ranked page became a lead source that costs nothing per month to maintain.</p></div>
      <div data-reveal class="card" style="padding:clamp(26px,3vw,32px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:10px;">Bilingual dispatch — hidden revenue</div><p style="font-size:14px; color:#9aa0aa; line-height:1.65; margin:0;">Spanish-language leads were completely untapped. One bilingual dispatcher unlocked 20%+ more booked jobs with no extra ad spend.</p></div>
      <div data-reveal class="card" style="padding:clamp(26px,3vw,32px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:10px;">Paid ads — gas on the fire</div><p style="font-size:14px; color:#9aa0aa; line-height:1.65; margin:0;">Worked from month 3 — not magic, a tool. Tight management (keywords, match types, landing pages, tracking) prints jobs; mediocre management wastes money.</p></div>
      <div data-reveal class="card" style="padding:clamp(26px,3vw,32px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:10px;">Video — brand presence</div><p style="font-size:14px; color:#9aa0aa; line-height:1.65; margin:0;">Choosing a contractor is a trust decision. Video made us real — crew, work, culture. "I see you guys everywhere" became a common first line on calls.</p></div>
      <div data-reveal class="card" style="padding:clamp(26px,3vw,32px); border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.035), rgba(255,255,255,.008));"><div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:18px; margin-bottom:10px;">GMB activity — local visibility</div><p style="font-size:14px; color:#9aa0aa; line-height:1.65; margin:0;">Weekly posts and photos were a constant signal to Google. Competitors went silent after claiming their profile; we stayed active — and the rankings reflected it.</p></div>
    </div>
  </section>

  <!-- CTA -->
  <div style="position:relative; z-index:1; border-top:1px solid rgba(255,255,255,.06);">
    <div data-reveal style="max-width:1180px; margin:0 auto; padding:clamp(72px,9vw,120px) clamp(20px,5vw,56px); text-align:center;">
      <h2 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(30px,5vw,60px); line-height:1.04; letter-spacing:-.03em; margin:0 0 22px; max-width:20ch; margin-left:auto; margin-right:auto; text-wrap:balance;">Want the same system <span style="color:var(--accent);">in your market?</span></h2>
      <p style="font-size:clamp(16px,1.5vw,19px); line-height:1.6; color:#9aa0aa; max-width:54ch; margin:0 auto 36px;">Book a free audit. We'll show you where your competitors are outranking you — and exactly what it would take to flip that.</p>
      <div style="display:flex; flex-wrap:wrap; gap:14px; justify-content:center;">
        <a href="contact.php" class="mo-btn" style="font-size:15px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:16px 28px; border-radius:11px; box-shadow:0 14px 46px -14px rgba(0,229,160,.8);">Book Your Free Audit &rarr;</a>
        <a href="services.php" class="mo-ghost" style="font-size:15px; font-weight:600; color:#f5f6f8; background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.14); padding:16px 28px; border-radius:11px;">See Our Services</a>
      </div>
    </div>
  </div>

  <?php include __DIR__ . '/includes/footer.php'; ?>
</div>
</body>
</html>
