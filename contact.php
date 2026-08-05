<?php
require __DIR__ . '/config.php';
$active = 'contact';
$nav_cta_href = '#audit';
$sent = isset($_GET['sent']);
$error = isset($_GET['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact — Book Your Free Audit | Digital Era Media</title>
<meta name="description" content="Book your free audit. No pitch, just answers: we benchmark you against your top competitors and show you exactly what we'd do — whether you hire us or not.">
<meta property="og:title" content="Contact — Book Your Free Audit | Digital Era Media">
<meta property="og:description" content="Book your free audit. No pitch, just answers: we benchmark you against your top competitors and show you exactly what we'd do — whether you hire us or not.">
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
  .mo-btn { transition:transform .3s cubic-bezier(.16,.84,.44,1), filter .3s ease; }
  @media (hover:hover) { .mo-btn:hover { transform:translateY(-2px); filter:brightness(1.06); } }
  nav[data-nav] ul a, footer nav a { position:relative; }
  nav[data-nav] ul a::after, footer nav a::after { content:""; position:absolute; left:0; bottom:-4px; height:1px; width:0; background:var(--accent); transition:width .38s cubic-bezier(.16,.84,.44,1); }
  @media (hover:hover) { nav[data-nav] ul a:hover::after, footer nav a:hover::after { width:100%; } }
  .fin label { display:block; font-size:13px; font-weight:600; color:#b4b8c2; margin-bottom:7px; }
  .fin input, .fin select, .fin textarea { width:100%; background:#0d0f14; border:1px solid rgba(255,255,255,.1); border-radius:10px; padding:13px 15px; color:#f5f6f8; font-size:14.5px; font-family:inherit; outline:none; transition:border-color .2s ease, box-shadow .2s ease; }
  .fin input::placeholder, .fin textarea::placeholder { color:#5f636d; }
  .fin input:focus, .fin select:focus, .fin textarea:focus { border-color:var(--accent); box-shadow:0 0 0 3px rgba(0,229,160,.12); }
  .fin select { appearance:none; -webkit-appearance:none; background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%239aa0aa' stroke-width='2'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E"); background-repeat:no-repeat; background-position:right 14px center; padding-right:40px; }
  .fin option { background:#0d0f14; color:#f5f6f8; }
  .fin textarea { min-height:110px; resize:vertical; }
  .cg { display:grid; grid-template-columns:1.1fr .9fr; gap:clamp(32px,4vw,56px); }
  @media (max-width:900px){ .cg { grid-template-columns:1fr; } }
</style>
</head>
<body>
<div style="position:relative; overflow:hidden; background:#07080c; min-height:100vh;">
  <div style="position:absolute; top:-220px; left:50%; transform:translateX(-50%); width:1050px; height:600px; background:radial-gradient(ellipse at center, rgba(0,229,160,.14), rgba(0,229,160,0) 62%); pointer-events:none; z-index:0;"></div>

  <?php include __DIR__ . '/includes/nav.php'; ?>

  <!-- HERO -->
  <section style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(60px,9vw,116px) clamp(20px,5vw,56px) clamp(24px,4vw,40px);">
    <div data-reveal style="display:inline-block; font-size:13px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; color:var(--accent); margin-bottom:20px;">Contact</div>
    <h1 data-reveal style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(40px,6.2vw,80px); line-height:1; letter-spacing:-.035em; margin:0 0 22px; max-width:16ch; text-wrap:balance;">Book your free audit. <span style="color:var(--accent);">No pitch. Just answers.</span></h1>
    <p data-reveal style="font-size:clamp(17px,1.6vw,21px); line-height:1.6; color:#b4b8c2; max-width:58ch; margin:0;">We'll look at your current setup, benchmark you against your top competitors, and show you exactly what we'd do — whether you hire us or not.</p>
  </section>

  <!-- FORM + INFO -->
  <section id="audit" style="position:relative; z-index:1; max-width:1180px; margin:0 auto; padding:clamp(24px,4vw,48px) clamp(20px,5vw,56px) clamp(56px,7vw,88px);">
    <div class="cg">
      <!-- FORM -->
      <div data-reveal>
        <?php if ($sent): ?>
          <div style="border:1px solid rgba(0,229,160,.28); border-radius:18px; background:linear-gradient(180deg, rgba(0,229,160,.06), rgba(255,255,255,.008)); padding:clamp(32px,4vw,48px); text-align:center;">
            <div style="display:flex; align-items:center; justify-content:center; width:64px; height:64px; border-radius:50%; background:rgba(0,229,160,.1); border:2px solid rgba(0,229,160,.35); color:var(--accent); font-size:26px; margin:0 auto 20px;">&#10003;</div>
            <div style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:clamp(22px,3vw,30px); letter-spacing:-.02em; margin-bottom:12px;">Request received.</div>
            <p style="font-size:15.5px; color:#9aa0aa; line-height:1.7; max-width:44ch; margin:0 auto;">We'll review your business, your market, and your competitors, then reach out within one business day to schedule your audit call. Talk soon.</p>
          </div>
        <?php else: ?>
          <div>
            <h3 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:20px; letter-spacing:-.01em; margin:0 0 22px;">Tell us about your business</h3>
            <?php if ($error): ?>
            <div style="border:1px solid rgba(255,107,107,.4); border-radius:10px; background:rgba(255,107,107,.08); color:#ffb4b4; font-size:14px; padding:13px 16px; margin-bottom:18px;">Something was missing or invalid — please check the required fields and try again.</div>
            <?php endif; ?>
            <form class="fin" action="send-audit.php" method="post" style="display:flex; flex-direction:column; gap:18px;">
              <div style="position:absolute; left:-9999px;" aria-hidden="true"><label>Website</label><input type="text" name="website" tabindex="-1" autocomplete="off"></div>
              <div><label>Your Name</label><input type="text" name="name" placeholder="First and last name" required></div>
              <div><label>Business Name</label><input type="text" name="business" placeholder="Your company name" required></div>
              <div><label>Your Trade</label>
                <select name="trade" required>
                  <option value="" disabled selected>Select your trade</option>
                  <option>Roofing</option><option>HVAC</option><option>Plumbing</option><option>Electrical</option>
                  <option>General Contracting</option><option>Windows &amp; Doors</option><option>Solar</option>
                  <option>Garage Doors</option><option>Pest Control</option><option>Foundation &amp; Waterproofing</option>
                  <option>Pool &amp; Spa</option><option>Painting</option><option>Landscaping &amp; Hardscaping</option><option>Other Trade</option>
                </select>
              </div>
              <div><label>Phone Number</label><input type="tel" name="phone" placeholder="(555) 000-0000" required></div>
              <div><label>Email Address</label><input type="email" name="email" placeholder="you@yourcompany.com" required></div>
              <div><label>Monthly Revenue Range</label>
                <select name="revenue">
                  <option value="" disabled selected>Approximate monthly revenue</option>
                  <option>Under $50K/month</option><option>$50K – $150K/month</option><option>$150K – $500K/month</option>
                  <option>$500K – $1M/month</option><option>$1M+/month</option>
                </select>
              </div>
              <div><label>Current Monthly Ad Spend</label>
                <select name="adspend">
                  <option value="" disabled selected>How much are you spending on ads?</option>
                  <option>$0 — not running ads yet</option><option>Under $1,000/month</option><option>$1,000 – $3,000/month</option>
                  <option>$3,000 – $10,000/month</option><option>$10,000+/month</option>
                </select>
              </div>
              <div><label>Biggest Challenge Right Now</label><textarea name="challenge" placeholder="e.g. Not enough inbound leads, can't compete on Google, missing calls, need to scale..."></textarea></div>
              <button type="submit" class="mo-btn" style="width:100%; padding:16px; font-size:16px; font-weight:700; color:var(--accent-ink); background:var(--accent); border:none; border-radius:11px; cursor:pointer; font-family:inherit; box-shadow:0 14px 40px -16px rgba(0,229,160,.75);">Request My Free Audit &rarr;</button>
              <p style="font-size:12px; color:#5f636d; text-align:center; margin:0;">We respond within 1 business day. No spam. No long-term commitment required.</p>
            </form>
          </div>
        <?php endif; ?>
      </div>

      <!-- INFO -->
      <div data-reveal style="display:flex; flex-direction:column; gap:20px;">
        <div style="border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006)); padding:clamp(24px,3vw,30px);">
          <h3 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:17px; margin:0 0 18px;">What happens next</h3>
          <div style="display:flex; flex-direction:column; gap:16px;">
            <div style="display:flex; gap:14px; align-items:flex-start;"><div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:28px; height:28px; border-radius:50%; background:rgba(0,229,160,.1); border:1px solid var(--accent); color:var(--accent); font-size:13px; font-weight:700;">1</div><div><div style="font-size:14.5px; font-weight:600; color:#f5f6f8; margin-bottom:3px;">We review your submission</div><p style="font-size:13.5px; color:#8b8f99; line-height:1.5; margin:0;">Your business, market, and competitors — before we ever get on a call.</p></div></div>
            <div style="display:flex; gap:14px; align-items:flex-start;"><div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:28px; height:28px; border-radius:50%; background:rgba(0,229,160,.1); border:1px solid var(--accent); color:var(--accent); font-size:13px; font-weight:700;">2</div><div><div style="font-size:14.5px; font-weight:600; color:#f5f6f8; margin-bottom:3px;">We schedule a 30-min audit call</div><p style="font-size:13.5px; color:#8b8f99; line-height:1.5; margin:0;">We show you where your market share is going and what competitors do that you don't.</p></div></div>
            <div style="display:flex; gap:14px; align-items:flex-start;"><div style="flex-shrink:0; display:flex; align-items:center; justify-content:center; width:28px; height:28px; border-radius:50%; background:rgba(0,229,160,.1); border:1px solid var(--accent); color:var(--accent); font-size:13px; font-weight:700;">3</div><div><div style="font-size:14.5px; font-weight:600; color:#f5f6f8; margin-bottom:3px;">You get a clear game plan</div><p style="font-size:13.5px; color:#8b8f99; line-height:1.5; margin:0;">Hire us or not — you leave with specific actions that move your business forward.</p></div></div>
          </div>
        </div>
        <div style="border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006)); padding:clamp(24px,3vw,30px);">
          <h3 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:17px; margin:0 0 6px;">Prefer to talk now?</h3>
          <p style="font-size:13.5px; color:#8b8f99; line-height:1.5; margin:0 0 12px;">Call or text us directly. We pick up.</p>
          <a href="tel:<?php echo SITE_PHONE_TEL; ?>" style="display:inline-block; font-size:22px; font-weight:800; color:var(--accent); font-family:'Space Grotesk',sans-serif; letter-spacing:-.01em;"><?php echo htmlspecialchars(SITE_PHONE_DISPLAY); ?></a>
          <p style="font-size:12px; color:#5f636d; margin:8px 0 0;">Monday – Friday, 8am – 6pm PT</p>
        </div>
        <div style="border:1px solid rgba(255,255,255,.08); border-radius:16px; background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,.006)); padding:clamp(24px,3vw,30px);">
          <h3 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:17px; margin:0 0 6px;">Email</h3>
          <a href="mailto:digitaleramediala@gmail.com" style="font-size:15px;">digitaleramediala@gmail.com</a>
        </div>
        <div style="border:1px solid rgba(0,229,160,.22); border-radius:16px; background:linear-gradient(180deg, rgba(0,229,160,.05), rgba(255,255,255,.008)); padding:clamp(24px,3vw,30px);">
          <h4 style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:15px; color:var(--accent); margin:0 0 10px;">Our commitment to you</h4>
          <p style="font-size:13.5px; color:#c7cbd3; line-height:1.65; margin:0;">The audit is genuinely free. No credit card. No obligation. No 90-minute sales pitch. The fastest way to earn your trust is to show you we know what we're doing before you spend a dollar.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FIT CHECK -->
  <section id="fit" style="position:relative; z-index:1;">
    <?php include __DIR__ . '/includes/fit-check.php'; ?>
  </section>

  <?php include __DIR__ . '/includes/footer.php'; ?>
</div>
</body>
</html>
