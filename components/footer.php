</div> <!-- End flex-grow -->

<footer class="bg-law-blue text-white pt-20 pb-10 border-t border-slate-800">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <!-- Company Info -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                     <div class="w-8 h-8 bg-law-gold text-law-blue flex items-center justify-center font-serif font-bold text-lg rounded-sm">P</div>
                     <span class="text-xl font-serif font-bold tracking-wide">PATRICKS</span>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed mb-8 max-w-sm font-light">
                    Spesialister innen familierett, trygderett og utlendingsrett. Vi tilbyr erfaren juridisk bistand med en personlig tilnærming og en forpliktelse til integritet.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-slate-400 hover:text-white transition-colors"><span class="sr-only">Facebook</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors"><span class="sr-only">LinkedIn</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-xs font-bold text-law-gold uppercase tracking-[0.2em] mb-8">Fagområder</h4>
                <ul class="space-y-4 text-sm text-slate-400 font-light">
                    <li><a href="services.php#family" class="hover:text-white transition-colors flex items-center"><span class="w-1 h-1 bg-slate-600 rounded-full mr-2"></span>Familierett</a></li>
                    <li><a href="services.php#social" class="hover:text-white transition-colors flex items-center"><span class="w-1 h-1 bg-slate-600 rounded-full mr-2"></span>Trygderett & NAV</a></li>
                    <li><a href="services.php#child" class="hover:text-white transition-colors flex items-center"><span class="w-1 h-1 bg-slate-600 rounded-full mr-2"></span>Barnevern</a></li>
                    <li><a href="services.php#immigration" class="hover:text-white transition-colors flex items-center"><span class="w-1 h-1 bg-slate-600 rounded-full mr-2"></span>Utlendingsrett</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-xs font-bold text-law-gold uppercase tracking-[0.2em] mb-8">Kontakt oss</h4>
                <ul class="space-y-6 text-sm text-slate-400 font-light">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-3 text-law-gold opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Hegdehaugsveien 34, <br>0352 Oslo, Norway</span>
                    </li>
                    
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-law-gold opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>post@patricks-juridisk.no</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-800 pt-8 text-center text-xs text-slate-600 uppercase tracking-widest">
            &copy; <?php echo date("Y"); ?> Patricks Juridisk Senter. Alle rettigheter reservert.
        </div>
    </div>
</footer>

<script>
    // Mobile menu toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Header scroll effect
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 20) {
            header.classList.add('shadow-sm');
        } else {
            header.classList.remove('shadow-sm');
        }
    });
</script>
</body>
</html>