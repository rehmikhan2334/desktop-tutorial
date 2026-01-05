<?php
session_start();
include "db.php";

// Track whether the form was submitted so we can clear fields after processing
$clear_form = false;

$error = "";

if (isset($_POST['login'])) {
    $clear_form = true;
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Both fields are required";
    } else {
        $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' LIMIT 1");
        if (mysqli_num_rows($query) == 1) {
            $user = mysqli_fetch_assoc($query);
            
            // Remove or comment out this debug line:
            // print_r(password_verify($password, $user['password']));
            // die;
            
            if (password_verify($password, $user['password'])) {
                // Password is correct, set session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                header("Location: dashborad.php"); // Redirect to dashboard
                exit();
            } else {
                $error = "Incorrect password";
            }
        } else {
            $error = "Email not registered";
        }
    }
}
?>

<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>CRM Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Noto+Sans:wght@400;500;700;900&display=swap"
        rel="stylesheet" />
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
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased">
    <div class="flex min-h-screen w-full flex-col lg:flex-row overflow-hidden">
        <!-- Left Side: Login Form -->
        <div
            class="flex w-full flex-col justify-center px-6 py-12 lg:w-1/2 lg:px-20 xl:px-32 relative z-10 bg-background-light dark:bg-background-dark">
            <!-- Logo Section -->
            <div class="mb-10 flex items-center gap-3">
                <div class="flex size-10 items-center justify-center rounded-lg bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-3xl">apartment</span>
                </div>
                <h2 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">EstateFlow CRM</h2>
            </div>
            <!-- Header -->
            <div class="mb-10">
                <h1 class="text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-5xl mb-3">
                    Welcome Back
                </h1>
                <p class="text-lg text-slate-500 dark:text-slate-400">
                    Enter your credentials to access your agent dashboard.
                </p>
            </div>

            <!-- Display error -->
            <?php if ($error): ?>
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded text-sm">
                <?= $error ?>
            </div>
            <?php endif; ?>

            <!-- Form -->
            <form id="loginForm" method="POST" class="w-full max-w-md space-y-6">
                <!-- Email Field -->
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none text-slate-900 dark:text-slate-200"
                        for="email">Email Address</label>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-500">
                            <span class="material-symbols-outlined text-[20px]">mail</span>
                        </div>
                        <input
                            class="flex h-12 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 pl-10 text-sm placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent disabled:cursor-not-allowed disabled:opacity-50 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:ring-primary"
                            id="email" name="email" placeholder="agent@estateflow.com" type="email" required />
                    </div>
                </div>
                <!-- Password Field -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <label class="text-sm font-medium leading-none text-slate-900 dark:text-slate-200"
                            for="password">Password</label>
                        <a class="text-sm font-medium text-primary hover:text-primary/80" href="#">Forgot password?</a>
                    </div>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-500">
                            <span class="material-symbols-outlined text-[20px]">lock</span>
                        </div>
                        <input
                            class="flex h-12 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 pl-10 pr-10 text-sm placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent disabled:cursor-not-allowed disabled:opacity-50 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:focus:ring-primary"
                            id="password" name="password" placeholder="••••••••" type="password" required />
                        <button
                            class="toggle-password absolute inset-y-0 right-0 flex items-center pr-3 text-slate-500 hover:text-slate-900 dark:hover:text-slate-300 focus:outline-none"
                            type="button"
                            data-target="#password"
                            aria-pressed="false"
                            aria-label="Show password">
                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                        </button>
                    </div>
                </div>
                <!-- Submit Button -->
                <button
                    type="submit"
                    name="login"
                    class="inline-flex h-12 w-full items-center justify-center whitespace-nowrap rounded-lg bg-primary px-4 py-2 text-base font-bold text-white shadow-sm hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 transition-colors">
                    Log In to Dashboard
                </button>
                <div class="mt-3 text-center text-sm text-slate-600 dark:text-slate-400">
                    Don't have an account? <a href="signup.php" class="text-primary font-semibold hover:underline">Sign up</a>
                </div>
            </form>
        </div>

        <!-- Right Side: Hero Image -->
        <div class="hidden lg:block lg:w-1/2 relative bg-slate-900">
            <div class="absolute inset-0 bg-cover bg-center opacity-60 mix-blend-overlay"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC6iAo52kn7CXMikbs8ZHE1RDvI2QJipeO9XwFOjqwA0KxMI-wv6WjcXImHFLdeV7uZLANts1ev4wKnxyBc0Oq96nUTdx3RFtBPa5tlnpoz0AHGyb21j44ILbq59M_DjOrgGJygLpiBRGu1NLuIDFkG1Wc56b0Rp775LxNVA-9wf4iGZ92clAY8Rrk2dAt23tM8AMiEnGpyXAu9auaeo6nOmv0zQpXxHVcd7iW-EmeRZ6loZKu6nAJ-d_njbaKPhauJuLDWJcbeYGP7");'>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/20 to-transparent">
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

<?php if (!empty($clear_form)): ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('loginForm');
    if (form) form.reset();

    // Ensure password inputs are hidden and toggle buttons are reset
    document.querySelectorAll('.toggle-password').forEach(function (btn) {
        var selector = btn.getAttribute('data-target');
        var input = document.querySelector(selector);
        var icon = btn.querySelector('.material-symbols-outlined');
        if (input) input.type = 'password';
        if (icon) icon.textContent = 'visibility';
        btn.setAttribute('aria-pressed', 'false');
        btn.setAttribute('aria-label', 'Show password');
    });
});
</script>
<?php endif; ?>
