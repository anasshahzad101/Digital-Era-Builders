# Deploying to Hostinger

Two ways to go live. Git deployment (Option A) is recommended — after the first
setup, every push to the branch redeploys the site automatically.

## Before you deploy

Edit `config.php`:

1. `CONTACT_EMAIL` — where audit-request leads are emailed (currently
   `digitaleramediala@gmail.com`).
2. `PUBLIC_EMAIL` — the address shown to visitors on the contact page (currently
   `sam@digitaleramedia.io`). Intentionally different from `CONTACT_EMAIL`: leads
   keep going to the Gmail inbox. Point `CONTACT_EMAIL` here too once
   `sam@digitaleramedia.io` is confirmed to be receiving mail.
3. `SITE_PHONE_DISPLAY` / `SITE_PHONE_TEL` — the real business phone number
   (currently `(818) 626-4133`).

## Option A — Git deployment (recommended)

1. Log in to **hPanel** → your website → **Advanced → Git**.
2. Under *Create a New Repository*:
   - **Repository address**: `https://github.com/anasshahzad101/Digital-Era-Builders.git`
     (for a private repo, use the SSH address and add Hostinger's deploy key to
     GitHub under *Settings → Deploy keys* first — hPanel shows the key on the same page).
   - **Branch**: `main` (or whichever branch holds the site).
   - **Directory**: leave **empty** so files deploy straight into `public_html`.
3. Click **Create**, then **Deploy**. The site is live.
4. (Optional) Copy the **Webhook URL** hPanel shows and add it in GitHub under
   *Settings → Webhooks* — then every push deploys automatically.

## Option B — File Manager / FTP upload

1. hPanel → **Files → File Manager** (or connect via FTP).
2. Open `public_html` and upload the contents of this repository into it
   (the files themselves — `index.php`, `contact.php`, `includes/`, etc. —
   not the repo folder).
3. Done. `index.php` is served automatically as the homepage.

## After deploying — checklist

- [ ] Visit the site — all five pages load, dark theme, green accent.
- [ ] Submit the contact form with your own details — you should get the email at
      `CONTACT_EMAIL` and see the "Request received." confirmation.
- [ ] If the email doesn't arrive: check spam first. Hostinger supports PHP
      `mail()` by default, but Gmail sometimes filters it — for reliable delivery,
      create a mailbox in hPanel (**Emails**) for your domain and set
      `CONTACT_EMAIL` to it, or check hPanel → Emails → **Email logs**.
      Every submission is also saved to `leads/leads.log` on the server
      (visible in File Manager, never over the web), so no lead is ever lost.
- [ ] Update `config.php` with the real phone number when available.
- [ ] hPanel → **Security → SSL** — make sure SSL is active and *Force HTTPS* is on.

## PHP version

Any PHP 7.4+ works; PHP 8.1 or newer recommended
(hPanel → **Advanced → PHP Configuration**).
