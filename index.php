<?php include 'components/header.php'; ?>

<!-- Hero Section -->
<section class="relative bg-law-blue text-white min-h-[90vh] flex items-center">
    <div class="absolute inset-0 overflow-hidden">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-slate-900/40 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-law-blue via-slate-900/80 to-transparent z-10"></div>
        <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Law Office" class="w-full h-full object-cover grayscale opacity-40">
    </div>
    
    <div class="container mx-auto px-8 relative z-20">
        <div class="max-w-4xl">
            <h1 class="text-5xl md:text-7xl font-serif font-light leading-tight mb-8">
                Juridisk bistand <br>
                <span class="italic text-law-gold font-serif">du kan stole på</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl font-light leading-relaxed tracking-wide">
                Spesialisert kompetanse innen familierett, trygderett og utlendingsrett. Vi beskytter dine rettigheter med integritet og profesjonalitet.
            </p>
            <div class="flex flex-col md:flex-row gap-6">
                <a href="contact.php" class="bg-law-gold text-white px-10 py-4 rounded-sm hover:bg-white hover:text-law-blue transition-all duration-300 font-semibold tracking-widest text-xs uppercase shadow-lg shadow-yellow-900/20 text-center">
                    Få en gratis vurdering
                </a>
                <a href="services.php" class="border border-white/30 backdrop-blur-sm text-white px-10 py-4 rounded-sm hover:bg-white hover:text-law-blue transition-all duration-300 font-semibold tracking-widest text-xs uppercase text-center">
                    Våre fagområder
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-law-blue border-b border-slate-800 py-12 relative z-20 -mt-10 mx-8 rounded-sm shadow-xl">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-slate-700/50">
            <div>
                <div class="text-4xl font-serif text-law-gold font-light mb-2">20+</div>
                <div class="text-xs uppercase tracking-widest text-slate-400">Års erfaring</div>
            </div>
            <div>
                <div class="text-4xl font-serif text-law-gold font-light mb-2">500+</div>
                <div class="text-xs uppercase tracking-widest text-slate-400">Saker løst</div>
            </div>
            <div>
                <div class="text-4xl font-serif text-law-gold font-light mb-2">100%</div>
                <div class="text-xs uppercase tracking-widest text-slate-400">Dedikasjon</div>
            </div>
            <div>
                <div class="text-4xl font-serif text-law-gold font-light mb-2">24t</div>
                <div class="text-xs uppercase tracking-widest text-slate-400">Responstid</div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-32 bg-white">
    <div class="container mx-auto px-8">
        <div class="flex flex-col md:flex-row items-center gap-20">
            <div class="md:w-1/2 relative">
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-law-gray rounded-full mix-blend-multiply filter blur-2xl opacity-70 animate-blob"></div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-law-gold-light rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob animation-delay-2000"></div>
                <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Legal Consultation" class="relative rounded-sm shadow-2xl shadow-blue-900/20 object-cover h-[500px] w-full z-10">
                <!-- Decorative border -->
                <div class="absolute top-10 -right-6 w-full h-full border-2 border-law-gold z-0 hidden md:block"></div>
            </div>
            
            <div class="md:w-1/2">
                <span class="text-law-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Om vårt firma</span>
                <h2 class="text-4xl font-serif font-light text-law-blue mb-8 leading-tight">Forpliktet til dine rettigheter og fremtid</h2>
                
                <p class="text-slate-600 mb-6 leading-loose font-light">
                    Tillit er hjørnesteinen i ethvert effektivt advokat-klient-forhold. Hos Patricks Juridisk Senter spesialiserer vi oss på å hjelpe enkeltpersoner med å navigere i det komplekse juridiske landskapet innen barnevern, trygderett (NAV), utlendingsrett og familierett.
                </p>
                <p class="text-slate-600 mb-10 leading-loose font-light">
                    Vårt team har bred ekspertise og innsikt fra de faglige organene vi møter. Vi har dokumenterte resultater og sikrer at du får representasjon av høyeste kvalitet.
                </p>
                
                <a href="about.php" class="group inline-flex items-center text-law-blue font-semibold tracking-widest text-xs uppercase hover:text-law-gold transition-colors">
                    <span class="border-b border-law-blue group-hover:border-law-gold pb-1 transition-colors">Les mer om oss</span>
                    <svg class="w-4 h-4 ml-3 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Our Process Section -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-8">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <span class="text-law-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Slik jobber vi</span>
            <h2 class="text-4xl font-serif font-light text-law-blue mb-6">Din vei til en løsning</h2>
            <p class="text-slate-500 font-light leading-relaxed">Vi tror på en transparent og strukturert tilnærming for å håndtere dine juridiske saker effektivt.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
            <!-- Connecting Line (Desktop) -->
            <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-slate-200 z-0"></div>

            <!-- Step 1 -->
            <div class="relative z-10 text-center">
                <div class="w-24 h-24 bg-white border-4 border-slate-50 rounded-full flex items-center justify-center text-law-blue shadow-lg mx-auto mb-8">
                    <span class="font-serif text-3xl font-bold">1</span>
                </div>
                <h3 class="text-xl font-serif font-medium text-law-blue mb-4">Konsultasjon</h3>
                <p class="text-slate-500 text-sm leading-relaxed font-light px-4">
                    Vi starter med en grundig vurdering av din sak for å forstå detaljene og bestemme den beste fremgangsmåten.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 text-center">
                <div class="w-24 h-24 bg-white border-4 border-slate-50 rounded-full flex items-center justify-center text-law-blue shadow-lg mx-auto mb-8">
                    <span class="font-serif text-3xl font-bold">2</span>
                </div>
                <h3 class="text-xl font-serif font-medium text-law-blue mb-4">Strategi</h3>
                <p class="text-slate-500 text-sm leading-relaxed font-light px-4">
                    Vårt team utvikler en skreddersydd juridisk strategi, samler nødvendig dokumentasjon og forbereder sterke argumenter.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 text-center">
                <div class="w-24 h-24 bg-law-gold border-4 border-slate-100 rounded-full flex items-center justify-center text-white shadow-lg mx-auto mb-8">
                    <span class="font-serif text-3xl font-bold">3</span>
                </div>
                <h3 class="text-xl font-serif font-medium text-law-blue mb-4">Representasjon</h3>
                <p class="text-slate-500 text-sm leading-relaxed font-light px-4">
                    Vi står ved din side og representerer deg i forhandlinger, høringer eller retten for å oppnå det optimale resultatet.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Practice Areas Preview -->
<section class="py-32 bg-white relative">
    <!-- Background decoration -->
    <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="container mx-auto px-8">
        <div class="text-center mb-24 max-w-3xl mx-auto">
            <span class="text-law-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Vår ekspertise</span>
            <h2 class="text-4xl font-serif font-light text-law-blue mb-6">Spesialiserte juridiske tjenester</h2>
            <p class="text-slate-500 font-light leading-relaxed">Vi tilbyr skreddersydd juridisk rådgivning designet for å møte de unike utfordringene i din personlige situasjon.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <a href="services.php#family" class="group bg-white p-10 rounded-sm shadow-soft hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500 transform hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-law-gold transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                <div class="w-14 h-14 bg-slate-50 rounded-full flex items-center justify-center text-law-blue mb-8 group-hover:bg-law-blue group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-serif font-medium text-law-blue mb-4">Familierett</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 font-light">
                    Veiledning om barnefordeling, arv, skifteoppgjør og eiendomsdeling.
                </p>
                <span class="text-law-gold text-xs font-bold tracking-widest uppercase flex items-center group-hover:translate-x-2 transition-transform duration-300">
                    Utforsk <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </span>
            </a>

            <!-- Service 2 -->
            <a href="services.php#social" class="group bg-white p-10 rounded-sm shadow-soft hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500 transform hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-law-blue transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                <div class="w-14 h-14 bg-slate-50 rounded-full flex items-center justify-center text-law-blue mb-8 group-hover:bg-law-blue group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-xl font-serif font-medium text-law-blue mb-4">Trygderett</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 font-light">
                    Bistand med klager på NAV-vedtak, uføretrygd og trygderettigheter.
                </p>
                <span class="text-law-gold text-xs font-bold tracking-widest uppercase flex items-center group-hover:translate-x-2 transition-transform duration-300">
                    Utforsk <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </span>
            </a>

            <!-- Service 3 -->
            <a href="services.php#child" class="group bg-white p-10 rounded-sm shadow-soft hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500 transform hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-law-gold transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                <div class="w-14 h-14 bg-slate-50 rounded-full flex items-center justify-center text-law-blue mb-8 group-hover:bg-law-blue group-hover:text-white transition-colors duration-300">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-serif font-medium text-law-blue mb-4">Barnevern</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 font-light">
                    Representasjon i omsorgsovertakelse, samværsrett og fylkesnemndsaker.
                </p>
                <span class="text-law-gold text-xs font-bold tracking-widest uppercase flex items-center group-hover:translate-x-2 transition-transform duration-300">
                    Utforsk <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </span>
            </a>

            <!-- Service 4 -->
            <a href="services.php#immigration" class="group bg-white p-10 rounded-sm shadow-soft hover:shadow-2xl hover:shadow-blue-900/5 transition-all duration-500 transform hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-law-blue transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                <div class="w-14 h-14 bg-slate-50 rounded-full flex items-center justify-center text-law-blue mb-8 group-hover:bg-law-blue group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-serif font-medium text-law-blue mb-4">Utlendingsrett</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-8 font-light">
                    Hjelp med oppholdstillatelse, familiegjenforening, statsborgerskap og asylklager.
                </p>
                <span class="text-law-gold text-xs font-bold tracking-widest uppercase flex items-center group-hover:translate-x-2 transition-transform duration-300">
                    Utforsk <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-8">
        <div class="text-center mb-16">
            <span class="text-law-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Kundeomtaler</span>
            <h2 class="text-4xl font-serif font-light text-law-blue">Betrodd av våre klienter</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 shadow-soft rounded-sm border-t-4 border-law-gold relative h-full flex flex-col">
                <svg class="w-10 h-10 text-slate-100 absolute top-4 right-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.054 15.331 15.189 16.494 14.249C17.294 13.603 17.653 12.871 17.653 11.517C17.653 10.468 16.92 9.697 15.86 9.697C14.735 9.697 13.754 10.74 13.067 11.527L11.522 10.053C12.433 8.783 14.156 7 16.29 7C18.847 7 20.672 8.747 20.672 11.751C20.672 15.111 18.271 17.33 16.494 18.733C15.694 19.364 15.225 19.824 15.225 21L14.017 21ZM6.017 21L6.017 18C6.017 16.054 7.331 15.189 8.494 14.249C9.294 13.603 9.653 12.871 9.653 11.517C9.653 10.468 8.92 9.697 7.86 9.697C6.735 9.697 5.754 10.74 5.067 11.527L3.522 10.053C4.433 8.783 6.156 7 8.29 7C10.847 7 12.672 8.747 12.672 11.751C12.672 15.111 10.271 17.33 8.494 18.733C7.694 19.364 7.225 19.824 7.225 21L6.017 21Z"/></svg>
                <div class="flex items-center mb-6">
                    <div class="text-law-gold flex">★★★★★</div>
                </div>
                <p class="text-slate-600 font-light italic mb-6 leading-relaxed flex-grow">
                    "Jeg stod i en svært vanskelig familiesituasjon, og teamet hos Patricks håndterte det med stor profesjonalitet og empati. De forklarte alt tydelig og kjempet for mine rettigheter."
                </p>
                <div class="text-sm mt-auto">
                    <span class="font-bold text-law-blue block">Kari H.</span>
                    <span class="text-slate-400 text-xs">Klient familierett</span>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-8 shadow-soft rounded-sm border-t-4 border-law-gold relative h-full flex flex-col">
                <svg class="w-10 h-10 text-slate-100 absolute top-4 right-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.054 15.331 15.189 16.494 14.249C17.294 13.603 17.653 12.871 17.653 11.517C17.653 10.468 16.92 9.697 15.86 9.697C14.735 9.697 13.754 10.74 13.067 11.527L11.522 10.053C12.433 8.783 14.156 7 16.29 7C18.847 7 20.672 8.747 20.672 11.751C20.672 15.111 18.271 17.33 16.494 18.733C15.694 19.364 15.225 19.824 15.225 21L14.017 21ZM6.017 21L6.017 18C6.017 16.054 7.331 15.189 8.494 14.249C9.294 13.603 9.653 12.871 9.653 11.517C9.653 10.468 8.92 9.697 7.86 9.697C6.735 9.697 5.754 10.74 5.067 11.527L3.522 10.053C4.433 8.783 6.156 7 8.29 7C10.847 7 12.672 8.747 12.672 11.751C12.672 15.111 10.271 17.33 8.494 18.733C7.694 19.364 7.225 19.824 7.225 21L6.017 21Z"/></svg>
                <div class="flex items-center mb-6">
                    <div class="text-law-gold flex">★★★★★</div>
                </div>
                <p class="text-slate-600 font-light italic mb-6 leading-relaxed flex-grow">
                    "Å navigere i NAV-systemet føltes umulig frem til jeg kontaktet Patricks Juridisk Senter. Deres ekspertise var tydelig fra dag én, og vi fikk omgjort vedtaket."
                </p>
                <div class="text-sm mt-auto">
                    <span class="font-bold text-law-blue block">Anders P.</span>
                    <span class="text-slate-400 text-xs">Klient trygderett</span>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white p-8 shadow-soft rounded-sm border-t-4 border-law-gold relative h-full flex flex-col">
                <svg class="w-10 h-10 text-slate-100 absolute top-4 right-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.054 15.331 15.189 16.494 14.249C17.294 13.603 17.653 12.871 17.653 11.517C17.653 10.468 16.92 9.697 15.86 9.697C14.735 9.697 13.754 10.74 13.067 11.527L11.522 10.053C12.433 8.783 14.156 7 16.29 7C18.847 7 20.672 8.747 20.672 11.751C20.672 15.111 18.271 17.33 16.494 18.733C15.694 19.364 15.225 19.824 15.225 21L14.017 21ZM6.017 21L6.017 18C6.017 16.054 7.331 15.189 8.494 14.249C9.294 13.603 9.653 12.871 9.653 11.517C9.653 10.468 8.92 9.697 7.86 9.697C6.735 9.697 5.754 10.74 5.067 11.527L3.522 10.053C4.433 8.783 6.156 7 8.29 7C10.847 7 12.672 8.747 12.672 11.751C12.672 15.111 10.271 17.33 8.494 18.733C7.694 19.364 7.225 19.824 7.225 21L6.017 21Z"/></svg>
                <div class="flex items-center mb-6">
                    <div class="text-law-gold flex">★★★★★</div>
                </div>
                <p class="text-slate-600 font-light italic mb-6 leading-relaxed flex-grow">
                    "Profesjonelle, pålitelige og resultatorienterte. De hjalp meg med søknad om oppholdstillatelse og gjorde hele prosessen stressfri."
                </p>
                <div class="text-sm mt-auto">
                    <span class="font-bold text-law-blue block">Elena S.</span>
                    <span class="text-slate-400 text-xs">Klient utlendingsrett</span>
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="bg-white p-8 shadow-soft rounded-sm border-t-4 border-law-gold relative h-full flex flex-col">
                <svg class="w-10 h-10 text-slate-100 absolute top-4 right-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.054 15.331 15.189 16.494 14.249C17.294 13.603 17.653 12.871 17.653 11.517C17.653 10.468 16.92 9.697 15.86 9.697C14.735 9.697 13.754 10.74 13.067 11.527L11.522 10.053C12.433 8.783 14.156 7 16.29 7C18.847 7 20.672 8.747 20.672 11.751C20.672 15.111 18.271 17.33 16.494 18.733C15.694 19.364 15.225 19.824 15.225 21L14.017 21ZM6.017 21L6.017 18C6.017 16.054 7.331 15.189 8.494 14.249C9.294 13.603 9.653 12.871 9.653 11.517C9.653 10.468 8.92 9.697 7.86 9.697C6.735 9.697 5.754 10.74 5.067 11.527L3.522 10.053C4.433 8.783 6.156 7 8.29 7C10.847 7 12.672 8.747 12.672 11.751C12.672 15.111 10.271 17.33 8.494 18.733C7.694 19.364 7.225 19.824 7.225 21L6.017 21Z"/></svg>
                <div class="flex items-center mb-6">
                    <div class="text-law-gold flex">★★★★★</div>
                </div>
                <p class="text-slate-600 font-light italic mb-6 leading-relaxed flex-grow">
                    "Da barnevernet ble involvert, var jeg livredd. Patricks Juridisk Senter stod ved min side hele veien og hjalp med å bringe familien min sammen igjen."
                </p>
                <div class="text-sm mt-auto">
                    <span class="font-bold text-law-blue block">Thomas L.</span>
                    <span class="text-slate-400 text-xs">Klient barnevern</span>
                </div>
            </div>

            <!-- Testimonial 5 -->
            <div class="bg-white p-8 shadow-soft rounded-sm border-t-4 border-law-gold relative h-full flex flex-col">
                <svg class="w-10 h-10 text-slate-100 absolute top-4 right-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.054 15.331 15.189 16.494 14.249C17.294 13.603 17.653 12.871 17.653 11.517C17.653 10.468 16.92 9.697 15.86 9.697C14.735 9.697 13.754 10.74 13.067 11.527L11.522 10.053C12.433 8.783 14.156 7 16.29 7C18.847 7 20.672 8.747 20.672 11.751C20.672 15.111 18.271 17.33 16.494 18.733C15.694 19.364 15.225 19.824 15.225 21L14.017 21ZM6.017 21L6.017 18C6.017 16.054 7.331 15.189 8.494 14.249C9.294 13.603 9.653 12.871 9.653 11.517C9.653 10.468 8.92 9.697 7.86 9.697C6.735 9.697 5.754 10.74 5.067 11.527L3.522 10.053C4.433 8.783 6.156 7 8.29 7C10.847 7 12.672 8.747 12.672 11.751C12.672 15.111 10.271 17.33 8.494 18.733C7.694 19.364 7.225 19.824 7.225 21L6.017 21Z"/></svg>
                <div class="flex items-center mb-6">
                    <div class="text-law-gold flex">★★★★★</div>
                </div>
                <p class="text-slate-600 font-light italic mb-6 leading-relaxed flex-grow">
                    "Jeg fikk utmerket rådgivning angående skifteoppgjøret mitt. Advokaten var skarp, forberedt og sørget for at jeg fikk en rettferdig avtale."
                </p>
                <div class="text-sm mt-auto">
                    <span class="font-bold text-law-blue block">Maria K.</span>
                    <span class="text-slate-400 text-xs">Klient familierett</span>
                </div>
            </div>

            <!-- Testimonial 6 -->
            <div class="bg-white p-8 shadow-soft rounded-sm border-t-4 border-law-gold relative h-full flex flex-col">
                <svg class="w-10 h-10 text-slate-100 absolute top-4 right-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.054 15.331 15.189 16.494 14.249C17.294 13.603 17.653 12.871 17.653 11.517C17.653 10.468 16.92 9.697 15.86 9.697C14.735 9.697 13.754 10.74 13.067 11.527L11.522 10.053C12.433 8.783 14.156 7 16.29 7C18.847 7 20.672 8.747 20.672 11.751C20.672 15.111 18.271 17.33 16.494 18.733C15.694 19.364 15.225 19.824 15.225 21L14.017 21ZM6.017 21L6.017 18C6.017 16.054 7.331 15.189 8.494 14.249C9.294 13.603 9.653 12.871 9.653 11.517C9.653 10.468 8.92 9.697 7.86 9.697C6.735 9.697 5.754 10.74 5.067 11.527L3.522 10.053C4.433 8.783 6.156 7 8.29 7C10.847 7 12.672 8.747 12.672 11.751C12.672 15.111 10.271 17.33 8.494 18.733C7.694 19.364 7.225 19.824 7.225 21L6.017 21Z"/></svg>
                <div class="flex items-center mb-6">
                    <div class="text-law-gold flex">★★★★★</div>
                </div>
                <p class="text-slate-600 font-light italic mb-6 leading-relaxed flex-grow">
                    "Anbefales på det sterkeste! De håndterte min klage til UNE med stor dyktighet, og vi oppnådde et positivt resultat. Jeg er evig takknemlig."
                </p>
                <div class="text-sm mt-auto">
                    <span class="font-bold text-law-blue block">Hassan A.</span>
                    <span class="text-slate-400 text-xs">Klient utlendingsrett</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet Our Experts Teaser -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-8">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2">
                <img src="assets/images/ceo.jpeg" alt="Our Team" class="rounded-sm shadow-xl shadow-blue-900/10 grayscale hover:grayscale-0 transition-all duration-700">
            </div>
            <div class="md:w-1/2">
                <span class="text-law-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Teamet</span>
                <h2 class="text-4xl font-serif font-light text-law-blue mb-6">Møt våre advokater</h2>
                <p class="text-slate-600 mb-8 leading-loose font-light">
                    Vår styrke ligger i våre folk. Patricks Juridisk Senter består av dedikerte advokater med spesialisert erfaring innen sine felt. Vi samarbeider for å sikre at du får best mulig juridisk representasjon.
                </p>
                <a href="about.php" class="bg-law-blue text-white px-8 py-4 rounded-sm hover:bg-law-gold transition-all duration-300 font-bold tracking-widest text-xs uppercase shadow-lg shadow-blue-900/20">
                    Se vårt team
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact-form" class="bg-law-blue py-24 relative overflow-hidden">
    <!-- Pattern -->
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#c5a059 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="container mx-auto px-8 relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 items-start">
            
            <!-- Left Column: Text & Info -->
            <div class="lg:w-1/2 text-white">
                <span class="text-law-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Ta kontakt</span>
                <h2 class="text-4xl font-serif font-light mb-6">Trenger du juridisk bistand?</h2>
                <p class="text-slate-300 mb-10 leading-loose font-light text-lg">
                    Vi tilbyr en gratis innledende vurdering av din sak helt uforpliktende. Fyll ut skjemaet, så kommer vårt team tilbake til deg innen 24 timer.
                </p>

                <div class="space-y-8">
                    <!-- <div class="flex items-start">
                        <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-law-gold mr-6 flex-shrink-0 backdrop-blur-sm border border-white/10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-serif font-medium text-white text-lg">Ring oss</h4>
                            <p class="text-slate-400 font-light mt-1">+47 51 89 60 50</p>
                        </div>
                    </div> -->

                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-law-gold mr-6 flex-shrink-0 backdrop-blur-sm border border-white/10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-serif font-medium text-white text-lg">Send oss e-post</h4>
                            <p class="text-slate-400 font-light mt-1">post@patricks-juridisk.no</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-law-gold mr-6 flex-shrink-0 backdrop-blur-sm border border-white/10">
                           <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-serif font-medium text-white text-lg">Besøk oss</h4>
                            <p class="text-slate-400 font-light mt-1">Kongsgata 44, 4005 Stavanger, Norway</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Form -->
            <div class="lg:w-1/2">
                <div class="bg-white p-10 rounded-sm shadow-2xl relative">
                     <?php if (isset($_GET['success'])): ?>
                        <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-sm text-sm" role="alert">
                            <p class="font-bold mb-1">Melding sendt!</p>
                            <p>Vi kontakter deg snart.</p>
                        </div>
                    <?php endif; ?>

                    <form action="submit_contact.php" method="POST" class="space-y-6">
                        <input type="hidden" name="redirect" value="index.php">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Ditt navn</label>
                                <input type="text" id="name" name="name" required class="w-full bg-slate-50 border-slate-200 rounded-sm focus:border-law-blue focus:ring-0 transition-colors py-3 px-4 text-slate-700">
                            </div>
                            <div>
                                <label for="phone" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Telefonnummer</label>
                                <input type="tel" id="phone" name="phone" class="w-full bg-slate-50 border-slate-200 rounded-sm focus:border-law-blue focus:ring-0 transition-colors py-3 px-4 text-slate-700">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">E-postadresse</label>
                            <input type="email" id="email" name="email" required class="w-full bg-slate-50 border-slate-200 rounded-sm focus:border-law-blue focus:ring-0 transition-colors py-3 px-4 text-slate-700">
                        </div>
                        <div>
                            <label for="subject" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Emne</label>
                            <div class="relative">
                                <select id="subject" name="subject" class="w-full bg-slate-50 border-slate-200 rounded-sm focus:border-law-blue focus:ring-0 transition-colors py-3 px-4 text-slate-700 appearance-none">
                                    <option value="General Inquiry">Generell henvendelse</option>
                                    <option value="Family Law">Familierett</option>
                                    <option value="Social Security">Trygderett / NAV</option>
                                    <option value="Child Welfare">Barnevern</option>
                                    <option value="Immigration">Utlendingsrett</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Melding</label>
                            <textarea id="message" name="message" rows="3" required class="w-full bg-slate-50 border-slate-200 rounded-sm focus:border-law-blue focus:ring-0 transition-colors py-3 px-4 text-slate-700"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-law-gold text-white font-bold tracking-widest uppercase text-xs py-4 px-6 rounded-sm hover:bg-law-blue transition-colors duration-300 shadow-lg shadow-yellow-900/10">
                            Send melding
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>