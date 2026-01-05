<?php
session_start();
include "db.php"; // Your database connection

// Track whether the form was submitted so we can clear fields after processing
$clear_form = false;

$error = "";
$success = "";

if (isset($_POST['signup'])) {
    $clear_form = true;

    $name  = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass  = $_POST['password'];

    if (empty($name) || empty($email) || empty($pass)) {
        $error = "All fields are required";
    } elseif (strlen($pass) < 8) {
        $error = "Password must be at least 8 characters";
    } else {

        $check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email' LIMIT 1");
        if (mysqli_num_rows($check) > 0) {
            $error = "Email already registered";
        } else {

            $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

            $insert = mysqli_query(
                $conn,
                "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')"
            );

            if ($insert) {
                $success = "Account created successfully. You can login now.";
            } else {
                $error = "Something went wrong. Try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>CRM Sign Up</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "primary": "#137fec",
                "background-light": "#f6f7f8",
                "background-dark": "#101922",
            },
            fontFamily: {
                "display": ["Manrope", "sans-serif"],
                "body": ["Noto Sans", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
        },
    },
}
</script>
<style>
/* Custom scrollbar */
::-webkit-scrollbar { width: 8px; }
::-webkit-scrollbar-track { background: #101922; }
::-webkit-scrollbar-thumb { background: #3b4754; border-radius: 4px; }
::-webkit-scrollbar-thumb:hover { background: #4b5563; }
</style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display antialiased selection:bg-primary selection:text-white">

<div class="flex min-h-screen w-full overflow-hidden">
    <!-- Left Panel: Visual Hero (unchanged) -->
    <div class="hidden lg:flex lg:w-1/2 relative bg-background-dark flex-col justify-between overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 w-full h-full bg-cover bg-center opacity-60 mix-blend-overlay" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAYUBIbDfCnMkdVcZZ3i-E-a_-L7AQ6ItfGBcD2mOiu4cQShqLqXZN88WH6z_2uN1zcxAmeb8X4GeoCpIlDq4PFghXYb4P8cWge806Q5tOiMTixncbbkVGALh6_I2ULC3rGpLeyOhbn23m21M6sAs1LQyBuum2zuMINkM1UM-CVZQZzQkfuKLejHLrDBb0x5YxcLenrcA6SriqnHS8Zt61k-uGpxbD3ynOq2xTUZuelx0QrB4F5NiJVKOwO0ppas-XvTSgNh3b_JX46');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#101922] via-[#101922]/80 to-[#101922]/30"></div>
        <!-- Content -->
        <div class="relative z-10 p-12 h-full flex flex-col justify-between">
            <div class="flex items-center gap-3">
                <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-primary/20 text-primary">
                    <span class="material-symbols-outlined">apartment</span>
                </div>
                <span class="text-xl font-bold tracking-tight text-white">EstateFlow</span>
            </div>
            <div class="max-w-md">
                <h2 class="text-4xl font-bold leading-tight mb-4 text-white">Start closing more deals today with intelligent insights.</h2>
                <p class="text-slate-400 text-lg leading-relaxed">Join over 10,000 real estate agents managing their leads, properties, and closings in one modern dashboard.</p>
                <div class="mt-8 flex items-center gap-4">
                    <div class="flex -space-x-3">
                        <!-- Avatars -->
                        <img class="w-10 h-10 rounded-full border-2 border-background-dark object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5gr2Ta92-eXRwitva1SGwiRF2E96SBm2aRHfOuboLDKE-YWzdSPnPYbrVOcWhRvD3jE6k5yXkoaUX34yNca8kzB95P7CpfSBYMd_l-3Tu9zJMN6NHGidxjmrXJyNTRbGCUuif1Q_6SdBBfMNaGWJaMujECKgkg97X8heiykdwbec526A1KRrI_i9NtatdO8ROy_jZrv7VTijt-YxKqsF7YWzhx4SYj0QGM5f48EKXjYMAbLxn9QnG5Dw-XMcRXIDRMKrwRiNw2Tmf"/>
                        <img class="w-10 h-10 rounded-full border-2 border-background-dark object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsEQb8FfERNoKqxnCOd6yE0jW3KvqIg0mpKtJqGqUfTlC2lbPlKNtU8zoWEjOlnBuuV4ndz3yOme5CgYcFm87mV283IlKY9EjcUrKt4_0HvbvnlSeIwxDhyBq0o6dipt_vmGYWzTVizqf_aLZR5BtHgJcazEwcGf9uq0xzQ_JVLRJocvA_22yjkthSKjiFAvOBZMBYcusDSFb7Bkb7ChqxmjZTO9rqWN-Hy1EWxqrbeEPxv0fbKPTRREpikgaKzt99eb7R41vQkIuc"/>
                        <img class="w-10 h-10 rounded-full border-2 border-background-dark object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBzE59WvqKCRba-jU0HM294Bzar5A4C5AvglyTFh_ZTVsskmHoRBjoEd-X8wanR3VZ5RNKOOcDjy_aC7Yw5WDV9gYsCtsqsm8KPOsjszxIUxADP3Tcn6AJfVmy3y9RIrwcBiF7W7x2ypzAjAe6o3SAOPSeE3pKw1L_ikSyOmG6RTR0tN1agu8f9AdPrlnIJ7zHYSjBfE12Ezi-BQf_9QJIpwWJy35xRTLT5EqoMa0G6hll7yyaX1Swfe2IEVawc6SMFAWHkFMoqz7ew"/>
                        <div class="w-10 h-10 rounded-full border-2 border-background-dark bg-slate-800 flex items-center justify-center text-xs font-bold text-white">+2k</div>
                    </div>
                    <div class="text-sm text-slate-400"><span class="text-white font-bold">4.9/5</span> rating from agents</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Panel: Form -->
    <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-6 lg:p-12 overflow-y-auto bg-background-light dark:bg-background-dark relative">
        <!-- Mobile Logo -->
        <div class="lg:hidden absolute top-6 left-6 flex items-center gap-2 mb-8">
            <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary text-white">
                <span class="material-symbols-outlined text-lg">apartment</span>
            </div>
            <span class="text-lg font-bold tracking-tight dark:text-white text-slate-900">EstateFlow</span>
        </div>

        <div class="w-full max-w-[440px] flex flex-col gap-6">
            <!-- Header -->
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-black leading-tight tracking-[-0.033em] text-slate-900 dark:text-white">Create your account</h1>
                <p class="text-slate-500 dark:text-[#9dabb9] text-base font-normal">Enter your details below to get started with your 14-day free trial.</p>
            </div>

            <!-- Show messages -->
            <?php if($error): ?>
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm"><?= $error ?></div>
            <?php endif; ?>
            <?php if($success): ?>
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 text-sm"><?= $success ?></div>
            <?php endif; ?>

            <!-- Form -->
            <form id="signupForm" method="POST" class="flex flex-col gap-4">
                <div class="flex flex-col gap-1.5">
                    <label for="full_name" class="text-slate-900 dark:text-white text-sm font-semibold leading-normal">Full Name</label>
                    <div class="relative">
                        <input type="text" name="full_name" id="full_name" placeholder="Enter your full name" class="form-input block w-full rounded-xl border-slate-200 dark:border-[#3b4754] bg-white dark:bg-[#1c2127] text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#9dabb9] focus:border-primary focus:ring-primary h-12 pl-11 text-base shadow-sm transition-colors"/>
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 dark:text-[#9dabb9] text-[20px]">person</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="email" class="text-slate-900 dark:text-white text-sm font-semibold leading-normal">Work Email</label>
                    <div class="relative">
                        <input type="email" name="email" id="email" placeholder="name@company.com" class="form-input block w-full rounded-xl border-slate-200 dark:border-[#3b4754] bg-white dark:bg-[#1c2127] text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#9dabb9] focus:border-primary focus:ring-primary h-12 pl-11 text-base shadow-sm transition-colors"/>
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 dark:text-[#9dabb9] text-[20px]">mail</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="password" class="text-slate-900 dark:text-white text-sm font-semibold leading-normal">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" placeholder="Create a password" class="form-input block w-full rounded-xl border-slate-200 dark:border-[#3b4754] bg-white dark:bg-[#1c2127] text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#9dabb9] focus:border-primary focus:ring-primary h-12 pl-11 pr-10 text-base shadow-sm transition-colors"/>
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400 dark:text-[#9dabb9] text-[20px]">lock</span>
                        </div>
                        <button
                            class="toggle-password absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 dark:text-[#9dabb9] dark:hover:text-white focus:outline-none"
                            type="button"
                            data-target="#password"
                            aria-pressed="false"
                            aria-label="Show password">
                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                        </button>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-[#9dabb9] mt-1">Must be at least 8 characters.</p>
                </div>

                <button type="submit" name="signup" class="mt-2 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-5 bg-primary hover:bg-blue-600 text-white text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-blue-900/20 transition-all active:scale-[0.98]">
                    <span class="truncate">Sign Up</span>
                </button>
            </form>

            <div class="flex flex-col gap-4 text-center mt-4">
                <p class="text-slate-500 dark:text-[#9dabb9] text-sm">
                    Already have an account? 
                    <a class="text-primary font-bold hover:underline" href="login.php">Log in</a>
                </p>
                <p class="text-xs text-slate-400 dark:text-slate-600 max-w-[320px] mx-auto leading-relaxed">
                    By clicking "Sign Up", you agree to our 
                    <a class="underline hover:text-slate-500 dark:hover:text-slate-400" href="#">Terms of Service</a> 
                    and 
                    <a class="underline hover:text-slate-500 dark:hover:text-slate-400" href="#">Privacy Policy</a>.
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script>
// Show/hide password toggle for inputs with .toggle-password buttons
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.toggle-password').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var selector = btn.getAttribute('data-target');
            if (!selector) return;
            var input = document.querySelector(selector);
            if (!input) return;
            var icon = btn.querySelector('.material-symbols-outlined');
            if (input.type === 'password') {
                input.type = 'text';
                if (icon) icon.textContent = 'visibility_off';
                btn.setAttribute('aria-pressed', 'true');
                btn.setAttribute('aria-label', 'Hide password');
            } else {
                input.type = 'password';
                if (icon) icon.textContent = 'visibility';
                btn.setAttribute('aria-pressed', 'false');
                btn.setAttribute('aria-label', 'Show password');
            }
        });
    });
});
</script>
