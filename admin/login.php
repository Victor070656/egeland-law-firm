<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Egeland Law Firm Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'law-blue': '#0f172a',
                        'law-gold': '#c5a059',
                    },
                    fontFamily: {
                        'serif': ['Merriweather', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 h-screen flex items-center justify-center">

    <div class="bg-white p-10 rounded-sm shadow-xl w-full max-w-md border-t-4 border-law-gold">
        <div class="text-center mb-8">
            <div class="w-12 h-12 bg-law-blue text-law-gold flex items-center justify-center font-serif font-bold text-xl rounded-sm mx-auto mb-4">E</div>
            <h1 class="text-2xl font-serif text-law-blue font-bold">Admin Portal</h1>
            <p class="text-slate-400 text-sm mt-2">Please sign in to continue</p>
        </div>

        <?php if (isset($_GET['error'])): ?>
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 text-sm" role="alert">
                <p><?php echo htmlspecialchars($_GET['error']); ?></p>
            </div>
        <?php endif; ?>

        <form action="auth_login.php" method="POST" class="space-y-6">
            <div>
                <label for="username" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Username</label>
                <input type="text" id="username" name="username" required class="w-full bg-slate-50 border-slate-200 rounded-sm focus:border-law-blue focus:ring-0 transition-colors py-3 px-4 text-slate-700">
            </div>
            <div>
                <label for="password" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Password</label>
                <input type="password" id="password" name="password" required class="w-full bg-slate-50 border-slate-200 rounded-sm focus:border-law-blue focus:ring-0 transition-colors py-3 px-4 text-slate-700">
            </div>
            
            <button type="submit" class="w-full bg-law-blue text-white font-bold tracking-widest uppercase text-xs py-4 px-6 rounded-sm hover:bg-slate-800 transition-colors duration-300 shadow-lg shadow-blue-900/10">
                Sign In
            </button>
        </form>
        
        <div class="mt-8 text-center">
            <a href="../index.php" class="text-xs text-slate-400 hover:text-law-blue transition-colors">← Back to Website</a>
        </div>
    </div>

</body>
</html>
