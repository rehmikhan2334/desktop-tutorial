<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>CRM Dashboard Modernized</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                fontFamily: {
                    sans: ["Plus Jakarta Sans", "sans-serif"],
                },
                colors: {
                    sidebar: {
                        bg: '#0B0F19', // Very dark/deep blue-black
                        surface: '#151B2B',
                        hover: '#1E293B',
                        text: '#94A3B8',
                        active: '#F8FAFC'
                    },
                    brand: {
                        500: '#4F46E5', // Indigo
                        600: '#4338CA',
                        accent: '#818CF8'
                    }
                },
                boxShadow: {
                    'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.07)',
                    'soft-card': '0 10px 40px -10px rgba(0,0,0,0.05)',
                    'glow-accent': '0 0 20px rgba(79, 70, 229, 0.3)'
                },
                animation: {
                    'fade-in': 'fadeIn 0.5s ease-out',
                    'slide-up': 'slideUp 0.5s ease-out forwards'
                },
                keyframes: {
                    fadeIn: {
                        '0%': { opacity: '0' },
                        '100%': { opacity: '1' },
                    },
                    slideUp: {
                        '0%': { opacity: '0', transform: 'translateY(10px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' },
                    }
                }
            },
        },
    };
</script>
<style type="text/tailwindcss">
    @layer utilities {
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    }
    .glass-panel {
        @apply bg-white/70 dark:bg-[#1e293b]/70 backdrop-blur-xl border border-white/20 dark:border-gray-700/30;
    }
    .modern-card {
        @apply bg-white dark:bg-[#1e293b] rounded-3xl transition-all duration-300 border border-gray-100 dark:border-gray-800 hover:shadow-soft-card hover:border-brand-500/20 relative overflow-hidden;
    }
    .nav-link {
        @apply flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-medium text-sidebar-text transition-all duration-200 hover:bg-white/5 hover:text-white;
    }
    .nav-link.active {
        @apply bg-brand-500 text-white shadow-glow-accent;
    }
    .tab-item {
        @apply relative px-6 py-2.5 rounded-full text-sm font-semibold text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-all duration-300;
    }
    .tab-item.active {
        @apply bg-white dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm;
    }
    @media screen and (max-width: 400px) {
        .first-btns a {
            width: 100%;
        }
    }
</style>
</head>
<body class="font-sans bg-[#F3F4F6] dark:bg-[#0f1115] text-gray-900 dark:text-gray-100 h-screen flex overflow-hidden transition-colors duration-300 selection:bg-brand-500 selection:text-white">
<div class="lg:hidden absolute top-5 left-5 z-50">
    <button id="mobile-menu-button" aria-controls="sidebar" aria-expanded="false" class="p-3 flex justify-center items-center bg-white dark:bg-[#1e293b] rounded-[50%] w-[40px] h-[40px] shadow-lg text-gray-600 dark:text-gray-300 hover:text-brand-600 transition-transform hover:scale-105 active:scale-95">
        <span class="material-symbols-outlined text-xl">menu</span>
    </button>
</div>
<!-- Mobile overlay (hidden by default) -->
<div id="mobile-overlay" class="fixed inset-0 bg-black/40 z-30 hidden lg:hidden"></div>
<aside id="sidebar" class="w-[280px] bg-sidebar-bg text-gray-300 flex flex-col h-full shadow-2xl z-40 hidden lg:flex relative overflow-hidden border-r border-white/5">
<div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-b from-brand-900/20 to-transparent pointer-events-none"></div>
<div class="absolute -top-20 -right-20 w-64 h-64 bg-brand-500/10 rounded-full blur-[80px]"></div>
<div class="p-6 flex flex-col h-full relative z-10">
<div class="flex items-center gap-4 mb-10 px-2">
<div class="w-10 h-10 w-[5rem] h-[3.5rem] rounded-xl bg-gradient-to-br from-brand-500 to-purple-600 flex items-center justify-center shadow-lg shadow-brand-500/30 overflow-hidden">
    <img src="image/logo.jpeg" alt="EstateFlow logo" class="w-full h-full object-cover" />
</div>
<div>
<h1 class="font-bold text-lg text-white leading-tight">The Local Experts</h1>
<p class="text-[10px] text-gray-500 uppercase tracking-widest font-bold">Workspace</p>
</div>
<!-- Mobile close button (visible only on small screens) -->
<button id="mobile-menu-close" aria-controls="sidebar" aria-expanded="true" class="ml-auto p-2 rounded-full hover:bg-white/10 text-gray-400 transition-colors lg:hidden">
    <span class="material-symbols-outlined text-[20px]">close</span>
</button>

<button class="p-2 rounded-full hover:bg-white/10 text-gray-400 transition-colors" id="theme-toggle">
<span class="material-symbols-outlined text-[20px]">dark_mode</span>
</button>
</div>
<div class="relative mb-8 group mx-1">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-gray-500 group-focus-within:text-brand-400 transition-colors text-[20px]">search</span>
</div>
<input class="block w-full pl-11 pr-4 py-3 bg-white/5 border border-white/5 rounded-2xl text-sm placeholder-gray-500 text-gray-200 focus:outline-none focus:bg-white/10 focus:ring-1 focus:ring-brand-500/50 focus:border-brand-500/50 transition-all shadow-inner" placeholder="Search properties, leads..." type="text"/>
</div>
<nav class="space-y-1.5 flex-1 overflow-y-auto scrollbar-hide px-1">
<a class="nav-link active" href="#">
<span class="material-symbols-outlined filled">dashboard</span>
<span>Dashboard</span>
</a>
<a class="nav-link group" href="#">
<span class="material-symbols-outlined group-hover:text-purple-400 transition-colors">person</span>
<span>My Profile</span>
</a>
<div class="mt-8 mb-4 px-4 text-[10px] font-bold text-gray-500 uppercase tracking-widest flex items-center gap-2">
<span class="w-8 h-[1px] bg-gray-700"></span> Core Features
                </div>
<a class="nav-link group" href="#">
<span class="material-symbols-outlined group-hover:text-blue-400 transition-colors">phone_iphone</span>
<span>Lead Gen Pro</span>
</a>
<!-- <a class="nav-link group" href="#">
<span class="material-symbols-outlined group-hover:text-emerald-400 transition-colors">real_estate_agent</span>
<span>Consultations</span>
</a> -->
<div class="mt-8 mb-4 px-4 text-[10px] font-bold text-gray-500 uppercase tracking-widest flex items-center gap-2">
<span class="w-8 h-[1px] bg-gray-700"></span> Settings
                </div>
<a class="nav-link group" href="#">
<span class="material-symbols-outlined group-hover:text-orange-400 transition-colors">settings</span>
<span>Configuration</span>
</a>
</nav>
<div class="mt-4 pt-4 border-t border-white/5">
<div class="flex items-center gap-3 p-2 rounded-2xl hover:bg-white/5 cursor-pointer transition-all group">
<div class="relative">
<img alt="User" class="w-10 h-10 rounded-full object-cover ring-2 ring-transparent group-hover:ring-brand-500 transition-all" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKkKZVRm2wtO6ySkVOoTgm-DHKhfOwgi34ehF33PIj0fU4tPi_8k1p4-QgVuespzelO9133oNnOSG045d_ZFFe4dl8mTPcqju3cL6DT4H0PWPTf0Uyb0rn5e6oHSdsxNoR55aBAIVkL9Gz1yDLPvK5puQ3b57SqGZ7f2fiZAzXxcllKLbRtgQVCfeShPtCqvtA_X5Hm5xgBGUFukc2TUyxdisWVjjjn0FD9IBcbZWDbVxVnoiLdJrqAm-4zzNgopvFA6LW9EDK_Ih1"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-emerald-500 border-2 border-sidebar-bg rounded-full"></span>
</div>
<div class="flex-1 min-w-0">
<p class="text-sm font-semibold text-white truncate">Paul Nissiros</p>
<p class="text-xs text-gray-500 truncate">Senior Agent</p>
</div>
<span class="material-symbols-outlined text-gray-500 group-hover:text-white text-lg">more_vert</span>
</div>
</div>
</div>
</aside>
<main class="flex-1 flex flex-col h-screen overflow-hidden relative">
<div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9IiNhMWExYTEiIGZpbGwtb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==')] opacity-50 pointer-events-none"></div>
<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-500/5 rounded-full blur-[100px] pointer-events-none"></div>
<header class="sticky top-0 z-30 px-8 py-5">
<div class="max-w-7xl mx-auto glass-panel rounded-2xl shadow-sm px-4 py-3 flex items-center justify-between">
<nav class="relative p-1 bg-gray-100/50 dark:bg-gray-800/50 rounded-full backdrop-blur-sm overflow-hidden">
    <!-- Left arrow (shown on small screens when scroll is available) -->
    <button id="tabs-prev" class="hidden absolute left-1 top-1/2 -translate-y-1/2 p-1 rounded-full bg-white/90 dark:bg-gray-800/80 shadow z-20" aria-label="Scroll left">
        <span class="material-symbols-outlined">chevron_left</span>
    </button>

    <!-- Scrollable tabs container -->
    <div id="tabs-scroll" class="flex gap-2 flex-nowrap overflow-x-auto scrollbar-hide py-1 px-1 whitespace-nowrap">
        <a class="tab-item whitespace-nowrap min-w-max active shadow-sm ring-1 ring-black/5" href="#">Buyers Journey</a>
        <a class="tab-item whitespace-nowrap min-w-max" href="#">Sellers Journey</a>
        <a class="tab-item whitespace-nowrap min-w-max" href="#">Requests</a>
    </div>

    <!-- Right arrow (shown on small screens when scroll is available) -->
    <button id="tabs-next" class="hidden absolute right-1 top-1/2 -translate-y-1/2 p-1 rounded-full bg-white/90 dark:bg-gray-800/80 shadow z-20" aria-label="Scroll right">
        <span class="material-symbols-outlined">chevron_right</span>
    </button>
</nav>
<div class="hidden md:flex items-center gap-4">
<button class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center text-gray-500 hover:text-brand-500 hover:shadow-md transition-all relative group border border-gray-100 dark:border-gray-700">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2.5 right-2.5 w-2 h-2 bg-rose-500 rounded-full border border-white dark:border-gray-800 animate-pulse"></span>
</button>
<div class="h-8 w-[1px] bg-gray-200 dark:bg-gray-700 mx-2"></div>
<span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        Today, <span class="text-gray-900 dark:text-gray-200 font-semibold">Oct 24</span>
</span>
</div>
</div>
</header>
<div class="flex-1 overflow-y-auto scrollbar-hide p-6 md:p-8 relative z-0">
<div class="max-w-7xl mx-auto pb-20">
<section class="mb-12 animate-fade-in">
<div class="flex items-center justify-between mb-6 px-1">
<h2 class="text-lg font-bold text-gray-800 dark:text-gray-100 tracking-tight flex items-center gap-2">
<span class="material-symbols-outlined text-brand-500">apps</span>
                            External Applications
                        </h2>
<!-- <button class="text-xs font-semibold text-brand-500 hover:text-brand-600 dark:hover:text-brand-400">Customize</button> -->
</div>
<div class="first-btns flex flex-wrap gap-4 w-sm-full">
<a class="group flex items-center gap-3 pr-5 pl-2 py-2 bg-white dark:bg-[#1e293b] border border-gray-200/60 dark:border-gray-700 rounded-full hover:shadow-lg hover:border-blue-200 dark:hover:border-blue-800 transition-all duration-300" href="#">
<div class="w-10 h-10 rounded-full bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[20px]">grid_view</span>
</div>
<span class="text-sm font-semibold text-gray-600 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">CoreLogic</span>
</a>
<a class="group flex items-center gap-3 pr-5 pl-2 py-2 bg-white dark:bg-[#1e293b] border border-gray-200/60 dark:border-gray-700 rounded-full hover:shadow-lg hover:border-indigo-200 dark:hover:border-indigo-800 transition-all duration-300" href="#">
<div class="w-10 h-10 rounded-full bg-indigo-50 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600 dark:text-indigo-400 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[20px]">local_fire_department</span>
</div>
<span class="text-sm font-semibold text-gray-600 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Ignite</span>
</a>
<a class="group flex items-center gap-3 pr-5 pl-2 py-2 bg-white dark:bg-[#1e293b] border border-gray-200/60 dark:border-gray-700 rounded-full hover:shadow-lg hover:border-emerald-200 dark:hover:border-emerald-800 transition-all duration-300" href="#">
<div class="w-10 h-10 rounded-full bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600 dark:text-emerald-400 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<span class="text-sm font-semibold text-gray-600 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Rex</span>
</a>
<a class="group flex items-center gap-3 pr-5 pl-2 py-2 bg-white dark:bg-[#1e293b] border border-gray-200/60 dark:border-gray-700 rounded-full hover:shadow-lg hover:border-teal-200 dark:hover:border-teal-800 transition-all duration-300" href="#">
<div class="w-10 h-10 rounded-full bg-teal-50 dark:bg-teal-900/30 flex items-center justify-center text-teal-600 dark:text-teal-400 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[20px]">folder_shared</span>
</div>
<span class="text-sm font-semibold text-gray-600 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Openn</span>
</a>
<a class="group flex items-center gap-3 pr-5 pl-2 py-2 bg-white dark:bg-[#1e293b] border border-gray-200/60 dark:border-gray-700 rounded-full hover:shadow-lg hover:border-purple-200 dark:hover:border-purple-800 transition-all duration-300" href="#">
<div class="w-10 h-10 rounded-full bg-purple-50 dark:bg-purple-900/30 flex items-center justify-center text-purple-600 dark:text-purple-400 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[20px]">hub</span>
</div>
<span class="text-sm font-semibold text-gray-600 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">LawLab</span>
</a>
<a class="group flex items-center gap-3 pr-5 pl-2 py-2 bg-white dark:bg-[#1e293b] border border-gray-200/60 dark:border-gray-700 rounded-full hover:shadow-lg hover:border-orange-200 dark:hover:border-orange-800 transition-all duration-300" href="#">
<div class="w-10 h-10 rounded-full bg-orange-50 dark:bg-orange-900/30 flex items-center justify-center text-orange-600 dark:text-orange-400 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[20px]">view_kanban</span>
</div>
<span class="text-sm font-semibold text-gray-600 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">Realtair</span>
</a>
</div>
</section>
<section class="animate-slide-up" style="animation-delay: 0.1s;">
<h2 class="text-lg font-bold text-gray-800 dark:text-gray-100 tracking-tight mb-6 px-1 flex items-center gap-2">
<span class="material-symbols-outlined text-brand-500">bolt</span>
                        Quick Actions
                    </h2>
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6">
<!-- <a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-blue-50/80 to-transparent dark:from-blue-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-blue-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">phone_iphone</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors z-10">Lead Gen Pro</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Manage potential leads</p>
</a> -->
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-indigo-50/80 to-transparent dark:from-indigo-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-indigo-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">real_estate_agent</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors z-10">Consultations</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Book appointments</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-emerald-50/80 to-transparent dark:from-emerald-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-emerald-50 dark:bg-emerald-900/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-emerald-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">add_home</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors z-10">New Listing</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Create property profile</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-purple-50/80 to-transparent dark:from-purple-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-purple-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">strategy</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors z-10">Strategy</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Market analysis</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-orange-50/80 to-transparent dark:from-orange-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-orange-50 dark:bg-orange-900/20 text-orange-600 dark:text-orange-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-orange-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">edit_note</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors z-10">Copywriting</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Draft content</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-pink-50/80 to-transparent dark:from-pink-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-pink-50 dark:bg-pink-900/20 text-pink-600 dark:text-pink-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-pink-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">campaign</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-pink-600 dark:group-hover:text-pink-400 transition-colors z-10">VPA Ordering</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Vendor Paid Ads</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-teal-50/80 to-transparent dark:from-teal-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-teal-50 dark:bg-teal-900/20 text-teal-600 dark:text-teal-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-teal-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">fact_check</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-teal-600 dark:group-hover:text-teal-400 transition-colors z-10">Proofing</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Review materials</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-sky-50/80 to-transparent dark:from-sky-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-sky-50 dark:bg-sky-900/20 text-sky-600 dark:text-sky-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-sky-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">rocket_launch</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors z-10">Go Live</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Publish listing</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-cyan-50/80 to-transparent dark:from-cyan-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-cyan-50 dark:bg-cyan-900/20 text-cyan-600 dark:text-cyan-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-cyan-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">social_leaderboard</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors z-10">Social Boost</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Promote online</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-rose-50/80 to-transparent dark:from-rose-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-rose-50 dark:bg-rose-900/20 text-rose-600 dark:text-rose-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-rose-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">door_open</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-rose-600 dark:group-hover:text-rose-400 transition-colors z-10">Open Homes</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Schedule visits</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-green-50/80 to-transparent dark:from-green-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-green-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">price_change</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors z-10">Price Adjustment</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Update listing price</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-yellow-50/80 to-transparent dark:from-yellow-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-yellow-50 dark:bg-yellow-900/20 text-yellow-600 dark:text-yellow-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-yellow-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">contract</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors z-10">Order Offer</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Manage offers</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-red-50/80 to-transparent dark:from-red-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-red-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">cancel_presentation</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors z-10">Withdraw</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Remove listing</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-slate-50/80 to-transparent dark:from-slate-700/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
<span class="material-symbols-outlined text-3xl">school</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-slate-800 dark:group-hover:text-white transition-colors z-10">Training</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Skill building</p>
</a>
<a class="modern-card group p-5 flex flex-col items-center text-center hover:-translate-y-1" href="#">
<div class="absolute inset-0 bg-gradient-to-t from-red-100/50 to-transparent dark:from-red-900/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="w-16 h-16 rounded-2xl bg-red-100 dark:bg-red-900/30 text-red-500 dark:text-red-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-lg group-hover:shadow-red-500/20 transition-all duration-300">
<span class="material-symbols-outlined text-3xl">warning</span>
</div>
<h3 class="text-sm font-bold text-gray-800 dark:text-gray-100 group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors z-10">Report Issue</h3>
<p class="text-xs text-gray-400 mt-1 z-10">Support ticket</p>
</a>
</div>
</section>
<div class="h-10"></div>
</div>
</div>
</main>
<script>
        // Dark mode toggle logic
        const toggleBtn = document.getElementById('theme-toggle');
        const toggleIcon = toggleBtn.querySelector('span');
        const html = document.querySelector('html');
        // Function to update theme
        function updateTheme(isDark) {
            if (isDark) {
                html.classList.add('dark');
                toggleIcon.textContent = 'light_mode';
            } else {
                html.classList.remove('dark');
                toggleIcon.textContent = 'dark_mode';
            }
        }
        // Check local storage or system preference on load
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            updateTheme(true);
        } else {
            updateTheme(false);
        }
        toggleBtn.addEventListener('click', () => {
            const isDark = html.classList.toggle('dark');
            localStorage.theme = isDark ? 'dark' : 'light';
            updateTheme(isDark);
        });

        // Mobile sidebar toggle
        (function () {
            const btn = document.getElementById('mobile-menu-button');
            const closeBtn = document.getElementById('mobile-menu-close');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobile-overlay');
            if (!btn || !sidebar || !overlay) return;

            function openSidebar() {
                // Show sidebar on small screens
                sidebar.classList.remove('hidden');
                sidebar.classList.add('fixed', 'left-0', 'top-0', 'h-full', 'block');
                overlay.classList.remove('hidden');
                overlay.classList.add('block');
                btn.setAttribute('aria-expanded', 'true');
            }

            function closeSidebar() {
                // Hide sidebar on small screens
                sidebar.classList.add('hidden');
                sidebar.classList.remove('fixed', 'left-0', 'top-0', 'h-full', 'block');
                overlay.classList.add('hidden');
                overlay.classList.remove('block');
                btn.setAttribute('aria-expanded', 'false');
            }

            btn.addEventListener('click', function () {
                if (sidebar.classList.contains('hidden')) openSidebar(); else closeSidebar();
            });

            closeBtn && closeBtn.addEventListener('click', closeSidebar);
            overlay.addEventListener('click', closeSidebar);

            // Close when clicking a nav link on small screens
            sidebar.querySelectorAll('a.nav-link').forEach(function (link) {
                link.addEventListener('click', function () {
                    if (window.innerWidth < 1024) closeSidebar();
                });
            });

            // Close on Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') closeSidebar();
            });
        })();

        // Tabs slider for very small screens (<=540px)
        (function () {
            const scrollEl = document.getElementById('tabs-scroll');
            const prev = document.getElementById('tabs-prev');
            const next = document.getElementById('tabs-next');
            if (!scrollEl || !prev || !next) return;

            function updateButtons() {
                // Only enable slider under 540px
                const enabled = window.innerWidth <= 540 && scrollEl.scrollWidth > scrollEl.clientWidth + 1;
                if (enabled) {
                    prev.classList.remove('hidden');
                    next.classList.remove('hidden');
                } else {
                    prev.classList.add('hidden');
                    next.classList.add('hidden');
                }

                // Show/hide left/right depending on scroll position
                if (enabled) {
                    // small tolerance for float
                    prev.disabled = scrollEl.scrollLeft <= 2;
                    next.disabled = scrollEl.scrollLeft + scrollEl.clientWidth >= scrollEl.scrollWidth - 2;
                    prev.classList.toggle('opacity-40', prev.disabled);
                    next.classList.toggle('opacity-40', next.disabled);
                }
            }

            function scrollByPage(dir = 1) {
                const amount = Math.round(scrollEl.clientWidth * 0.8) * dir;
                scrollEl.scrollBy({ left: amount, behavior: 'smooth' });
            }

            prev.addEventListener('click', function () { scrollByPage(-1); });
            next.addEventListener('click', function () { scrollByPage(1); });
            scrollEl.addEventListener('scroll', updateButtons);
            window.addEventListener('resize', updateButtons);

            // Run once on load
            updateButtons();
        })();
    </script>

</body></html>