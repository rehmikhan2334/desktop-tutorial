<?php
// Configuration for password handling
// SECURITY WARNING: Storing plaintext passwords is insecure and exposes users to account theft.
// Only enable plaintext passwords for short-lived local testing (never in production).

// When false (default), code uses password_hash() / password_verify() (recommended).
// When true, passwords are stored and compared in plaintext (unsafe).
$ALLOW_PLAINTEXT_PASSWORDS = false;

// If you enable plaintext mode, you may also want to enable additional logging or
// force a password reset for existing users.

?>