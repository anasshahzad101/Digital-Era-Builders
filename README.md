# Digital Era Media — Website

Custom PHP website for Digital Era Media, a growth partner for contractor trades.
Built to run on any standard PHP host (Hostinger shared hosting works out of the box —
see [DEPLOY.md](DEPLOY.md) for step-by-step instructions).

## Pages

| File | Page |
|---|---|
| `index.php` | Home — hero, services overview, process, trades selector, testimonials, FAQ, fit check |
| `services.php` | How We Grow You — all nine services + pricing plans |
| `about.php` | About — origin story, contractor advantage, who we work with |
| `contact.php` | Contact — free audit request form + fit check |

## Structure

- `includes/nav.php` — shared navigation (desktop + mobile menu). Highlights the current page via `$active`.
- `includes/footer.php` — shared footer.
- `includes/fit-check.php` — the interactive 6-question "Fit Check" quiz, embedded on Home and Contact.
- `send-audit.php` — handles the audit request form: emails the lead to `CONTACT_EMAIL` and appends a backup copy to `leads/leads.log` (blocked from the web by `leads/.htaccess`).
- `config.php` — site settings: **edit this before going live** (contact email, phone number).
- `.htaccess` — directory listing off + basic security headers.

No build step, no database, no Composer — upload and it runs. The only external
dependency is Google Fonts (Space Grotesk + Manrope).

## Local development

```bash
php -S localhost:8080
```

Then open http://localhost:8080. Note that `mail()` usually doesn't send from a local
machine — form submissions still land in `leads/leads.log` so you can verify the flow.
