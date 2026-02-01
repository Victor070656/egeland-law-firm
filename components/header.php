<?php require_once __DIR__ . '/../config/config.php'; ?>
<!DOCTYPE html>
<html lang="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patricks Juridisk Senter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'law-blue': '#0f172a',
                        'law-gold': '#c5a059',
                        'law-gold-light': '#e6c88a',
                        'law-gray': '#f8fafc',
                    },
                    fontFamily: {
                        'serif': ['Merriweather', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 20px 40px -15px rgba(0, 0, 0, 0.05)',
                    }
                }
            }
        }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Merriweather', serif;
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.03);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen selection:bg-law-gold selection:text-white">

    <header class="glass-header fixed w-full z-50 transition-all duration-300">
        <div class="container mx-auto px-8 py-5 flex justify-between items-center">
            <!-- Logo -->
            <a href="index.php" class="group flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-law-blue text-law-gold flex items-center justify-center font-serif font-bold text-xl rounded-sm">
                    P</div>
                <div class="flex flex-col">
                    <span
                        class="text-xl font-serif font-bold text-law-blue tracking-wide leading-none group-hover:text-law-gold transition duration-300">PATRICKS</span>
                    <span
                        class="text-[10px] font-medium text-slate-500 uppercase tracking-[0.25em] leading-none mt-1">Juridisk Senter</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-10">
                <a href="index.php"
                    class="text-xs font-semibold uppercase tracking-widest text-slate-500 hover:text-law-blue transition-colors duration-300">Hjem</a>
                <a href="about.php"
                    class="text-xs font-semibold uppercase tracking-widest text-slate-500 hover:text-law-blue transition-colors duration-300">Om oss</a>
                <a href="case-archive.php"
                    class="text-xs font-semibold uppercase tracking-widest text-slate-500 hover:text-law-blue transition-colors duration-300">Saksarkiv</a>
                <div class="relative group h-full flex items-center">
                    <button
                        class="text-xs font-semibold uppercase tracking-widest text-slate-500 hover:text-law-blue transition-colors duration-300 flex items-center py-4">
                        Tjenester
                        <svg class="w-3 h-3 ml-1 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="absolute left-1/2 -translate-x-1/2 top-full w-64 bg-white shadow-soft rounded-sm overflow-hidden hidden group-hover:block border border-slate-100 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                        <div class="h-1 bg-law-gold w-full"></div>
                        <a href="services.php#family"
                            class="block px-6 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-law-blue transition border-b border-slate-50">Familierett</a>
                        <a href="services.php#social"
                            class="block px-6 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-law-blue transition border-b border-slate-50">Trygderett
                            & NAV</a>
                        <a href="services.php#child"
                            class="block px-6 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-law-blue transition border-b border-slate-50">Barnevern</a>
                        <a href="services.php#immigration"
                            class="block px-6 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-law-blue transition">Utlendingsrett</a>
                    </div>
                </div>
                <a href="contact.php"
                    class="text-xs font-bold uppercase tracking-widest bg-law-blue text-white px-6 py-3 rounded-sm hover:bg-law-gold transition-colors duration-300 shadow-lg shadow-blue-900/10">Kontakt
                    oss</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-slate-800 focus:outline-none p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 absolute w-full shadow-xl">
            <a href="index.php"
                class="block px-8 py-4 text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-law-blue border-b border-slate-50">Hjem</a>
            <a href="about.php"
                class="block px-8 py-4 text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-law-blue border-b border-slate-50">Om
                oss</a>
            <a href="case-archive.php"
                class="block px-8 py-4 text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-law-blue border-b border-slate-50">Saksarkiv</a>
            <a href="services.php"
                class="block px-8 py-4 text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-law-blue border-b border-slate-50">Tjenester</a>
            <a href="contact.php" class="block px-8 py-4 text-sm font-bold text-law-blue bg-slate-50">Kontakt oss</a>
        </div>
    </header>

    <div class="pt-24 flex-grow"> <!-- Spacer for fixed header -->