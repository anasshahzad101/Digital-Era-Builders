<?php
// Handles the "Request My Free Audit" form on contact.php.
// Emails the submission to CONTACT_EMAIL and keeps a local copy in leads/leads.log
// (that directory is blocked from the web) so nothing is lost if mail() fails.
require __DIR__ . '/config.php';

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Honeypot: real visitors never fill this field.
if (!empty($_POST['website'])) {
    header('Location: contact.php?sent=1#audit');
    exit;
}

$field = function (string $key, int $max = 300): string {
    $v = trim((string)($_POST[$key] ?? ''));
    $v = str_replace(["\r", "\n"], ' ', $v); // no header injection
    return mb_substr($v, 0, $max);
};

$name      = $field('name');
$business  = $field('business');
$trade     = $field('trade');
$phone     = $field('phone', 50);
$email     = $field('email');
$revenue   = $field('revenue');
$adspend   = $field('adspend');
$challenge = mb_substr(trim((string)($_POST['challenge'] ?? '')), 0, 3000);

if ($name === '' || $business === '' || $trade === '' || $phone === ''
    || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: contact.php?error=1#audit');
    exit;
}

$lines = [
    'New free audit request from the website.',
    '',
    'Name:               ' . $name,
    'Business:           ' . $business,
    'Trade:              ' . $trade,
    'Phone:              ' . $phone,
    'Email:              ' . $email,
    'Monthly revenue:    ' . ($revenue !== '' ? $revenue : 'Not provided'),
    'Monthly ad spend:   ' . ($adspend !== '' ? $adspend : 'Not provided'),
    '',
    'Biggest challenge:',
    $challenge !== '' ? $challenge : 'Not provided',
];
$body = implode("\n", $lines);

$host = preg_replace('/^www\./', '', $_SERVER['HTTP_HOST'] ?? 'localhost');
$headers = [
    'From: ' . SITE_NAME . ' <no-reply@' . $host . '>',
    'Reply-To: ' . $name . ' <' . $email . '>',
    'Content-Type: text/plain; charset=UTF-8',
];

@mail(CONTACT_EMAIL, 'New Free Audit Request: ' . $business, $body, implode("\r\n", $headers));

// Local backup copy, one JSON line per lead.
$log = [
    'time'      => date('c'),
    'name'      => $name,
    'business'  => $business,
    'trade'     => $trade,
    'phone'     => $phone,
    'email'     => $email,
    'revenue'   => $revenue,
    'adspend'   => $adspend,
    'challenge' => $challenge,
];
@file_put_contents(__DIR__ . '/leads/leads.log', json_encode($log, JSON_UNESCAPED_UNICODE) . "\n", FILE_APPEND | LOCK_EX);

header('Location: contact.php?sent=1#audit');
exit;
