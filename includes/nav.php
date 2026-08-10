<?php
// Shared site navigation.
// Before including, optionally set:
//   $active:       'services' | 'trades' | 'about' | 'contact'
//   $nav_cta_href: where the "See If We're a Fit" button points (default contact.php)
$active = $active ?? '';
$nav_cta_href = $nav_cta_href ?? 'contact.php';
$nav_items = [
  ['services', 'services.php', 'How We Grow You'],
  ['trades', 'index.php#trades', 'Who We Work With'],
  ['about', 'about.php', 'About'],
  ['contact', 'contact.php', 'Contact'],
];
?>
<style>
  .nav-burger { display:none; appearance:none; -webkit-appearance:none; background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.14); border-radius:9px; width:42px; height:40px; cursor:pointer; align-items:center; justify-content:center; flex-direction:column; gap:5px; padding:0; flex-shrink:0; }
  .nav-burger span { display:block; width:18px; height:2px; background:#f5f6f8; border-radius:2px; transition:transform .3s ease, opacity .3s ease; }
  .nav-burger.open span:nth-child(1) { transform:translateY(7px) rotate(45deg); }
  .nav-burger.open span:nth-child(2) { opacity:0; }
  .nav-burger.open span:nth-child(3) { transform:translateY(-7px) rotate(-45deg); }
  .nav-mobile { position:absolute; top:100%; left:0; right:0; background:#07080c; border-bottom:1px solid rgba(255,255,255,.08); padding:8px 20px 18px; display:none; z-index:49; }
  .nav-mobile.open { display:block; }
  .nav-mobile a { display:block; padding:13px 4px; font-size:15px; font-weight:600; color:#d6d9df; border-bottom:1px solid rgba(255,255,255,.05); }
  .nav-mobile a.nav-mobile-cta { color:var(--accent); border-bottom:none; }
  @media (max-width:920px) {
    nav[data-nav] ul.nav-links { display:none !important; }
    .nav-burger { display:flex; }
  }
  @media (min-width:921px) { .nav-mobile { display:none !important; } }
  @media (max-width:520px) { .nav-cta { display:none; } }
</style>
<nav data-nav style="position:sticky; top:0; z-index:50; display:flex; align-items:center; justify-content:space-between; gap:24px; padding:16px clamp(20px,5vw,56px); border-bottom:1px solid rgba(255,255,255,.05); background:rgba(7,8,12,.86);">
  <a href="index.php" style="font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:19px; letter-spacing:-.02em; color:#f5f6f8;">Digital<span style="color:var(--accent);">Era</span> Media</a>
  <ul class="nav-links" style="display:flex; align-items:center; gap:30px; list-style:none; margin:0; padding:0; font-size:14px; font-weight:500;">
    <?php foreach ($nav_items as [$key, $href, $label]): ?>
    <li><a href="<?php echo $href; ?>" style="color:<?php echo $active === $key ? 'var(--accent)' : '#a9adb6'; ?>;"><?php echo $label; ?></a></li>
    <?php endforeach; ?>
  </ul>
  <div style="display:flex; align-items:center; gap:12px;">
    <a href="<?php echo $nav_cta_href; ?>" class="mo-btn nav-cta" style="font-size:14px; font-weight:700; color:var(--accent-ink); background:var(--accent); padding:11px 20px; border-radius:9px; white-space:nowrap; box-shadow:0 0 0 1px rgba(0,229,160,.4), 0 12px 30px -12px rgba(0,229,160,.7);">See If We're a Fit</a>
    <button type="button" class="nav-burger" aria-label="Menu" aria-expanded="false"><span></span><span></span><span></span></button>
  </div>
  <div class="nav-mobile">
    <?php foreach ($nav_items as [$key, $href, $label]): ?>
    <a href="<?php echo $href; ?>"<?php if ($active === $key) echo ' style="color:var(--accent);"'; ?>><?php echo $label; ?></a>
    <?php endforeach; ?>
    <a href="<?php echo $nav_cta_href; ?>" class="nav-mobile-cta">See If We're a Fit &rarr;</a>
  </div>
</nav>
<script>
  (function () {
    var burger = document.querySelector('.nav-burger');
    var panel = document.querySelector('.nav-mobile');
    burger.addEventListener('click', function () {
      var open = panel.classList.toggle('open');
      burger.classList.toggle('open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    panel.addEventListener('click', function (e) {
      if (e.target.tagName === 'A') { panel.classList.remove('open'); burger.classList.remove('open'); }
    });
  })();
</script>
