<?php include 'components/header.php'; ?>

<!-- Page Header -->
<div class="bg-law-blue text-white pt-40 pb-20 relative overflow-hidden">
     <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Legal Library" class="w-full h-full object-cover">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-law-blue via-law-blue/90 to-transparent"></div>
    <div class="container mx-auto px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-serif font-light mb-4">Våre tjenester</h1>
        <div class="flex justify-center items-center text-xs font-semibold tracking-widest text-slate-400 uppercase">
            <a href="index.php" class="hover:text-white transition-colors">Hjem</a> <span class="mx-4 text-law-gold">/</span> <span class="text-white">Tjenester</span>
        </div>
    </div>
</div>

<div class="container mx-auto px-8 py-24">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-16">
        
        <!-- Sidebar Navigation -->
        <div class="lg:col-span-1 hidden lg:block">
            <div class="sticky top-32 space-y-2">
                <a href="#family" class="group flex items-center justify-between px-6 py-4 bg-white border border-slate-100 rounded-sm shadow-sm hover:shadow-md transition-all duration-300">
                    <span class="text-sm font-semibold text-law-blue tracking-wide">Familierett</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-law-gold opacity-0 group-hover:opacity-100 transition-opacity"></span>
                </a>
                <a href="#social" class="group flex items-center justify-between px-6 py-4 bg-slate-50 hover:bg-white border border-transparent hover:border-slate-100 rounded-sm transition-all duration-300">
                    <span class="text-sm font-medium text-slate-500 group-hover:text-law-blue tracking-wide">Trygderett</span>
                     <span class="w-1.5 h-1.5 rounded-full bg-law-gold opacity-0 group-hover:opacity-100 transition-opacity"></span>
                </a>
                <a href="#child" class="group flex items-center justify-between px-6 py-4 bg-slate-50 hover:bg-white border border-transparent hover:border-slate-100 rounded-sm transition-all duration-300">
                    <span class="text-sm font-medium text-slate-500 group-hover:text-law-blue tracking-wide">Barnevern</span>
                     <span class="w-1.5 h-1.5 rounded-full bg-law-gold opacity-0 group-hover:opacity-100 transition-opacity"></span>
                </a>
                <a href="#immigration" class="group flex items-center justify-between px-6 py-4 bg-slate-50 hover:bg-white border border-transparent hover:border-slate-100 rounded-sm transition-all duration-300">
                    <span class="text-sm font-medium text-slate-500 group-hover:text-law-blue tracking-wide">Utlendingsrett</span>
                     <span class="w-1.5 h-1.5 rounded-full bg-law-gold opacity-0 group-hover:opacity-100 transition-opacity"></span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="lg:col-span-3 space-y-32">
            
            <!-- Family Law -->
            <section id="family" class="scroll-mt-32">
                <div class="flex flex-col-reverse md:flex-row gap-12 items-center">
                    <div class="md:w-1/2">
                         <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-white shadow-soft rounded-full flex items-center justify-center text-law-gold mr-4 border border-slate-50">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <h2 class="text-3xl font-serif font-light text-law-blue">Familierett</h2>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-light leading-loose">
                            <p class="mb-6">
                                Familierett handler om livets mest personlige spørsmål. Ved skilsmisse, foreldretvister eller arveoppgjør trenger du en rådgiver som kombinerer ro, tydelighet og juridisk presisjon.
                            </p>
                            <p class="mb-6">
                                Vi gir nøktern og profesjonell veiledning, med barnas beste som et sentralt hensyn. Vi søker gode løsninger gjennom dialog, men er klare til å prosedere når det er nødvendig.
                            </p>
                            <ul class="space-y-3 mt-8">
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Barnefordeling og samværsrett</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Skilsmisse og samlivsbrudd</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Deling av eiendeler, eiendom og gjeld</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Arverett, testamenter og fremtidsfullmakter</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Utforming av gyldige ektepakter</li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="relative rounded-sm overflow-hidden shadow-xl shadow-blue-900/10 group">
                            <img src="https://www.multipure.com/product_images/uploaded_images/family-double-piggyback-small.jpg" alt="Family Law" class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-law-blue/10 mix-blend-multiply"></div>
                        </div>
                    </div>
                </div>
            </section>
            
            <hr class="border-slate-100">

            <!-- Social Security -->
            <section id="social" class="scroll-mt-32">
                <div class="flex flex-col md:flex-row gap-12 items-center">
                    <div class="md:w-1/2 order-last md:order-first">
                         <div class="relative rounded-sm overflow-hidden shadow-xl shadow-blue-900/10 group">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Social Security NAV" class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-law-blue/10 mix-blend-multiply"></div>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-white shadow-soft rounded-full flex items-center justify-center text-law-gold mr-4 border border-slate-50">
                                 <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <h2 class="text-3xl font-serif font-light text-law-blue">Trygderett & NAV</h2>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-light leading-loose">
                            <p class="mb-6">
                                Trygdesystemet er omfattende, og NAVs regelverk kan være krevende å navigere. Mange får vedtak som ikke samsvarer med rettighetene de har.
                            </p>
                            <p class="mb-6">
                                Vi bistår med klager og anker mot NAV-vedtak. Med solid kunnskap om folketrygdloven hjelper vi deg å bygge saken med relevant medisinsk og faktisk dokumentasjon.
                            </p>
                             <ul class="space-y-3 mt-8">
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Klager på avslag og reduksjon av ytelser fra NAV</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Uføretrygd og arbeidsavklaringspenger (AAP)</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Sykepenger, dagpenger og foreldrepenger</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Vurdering av fri rettshjelp</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Representasjon i Trygderetten</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-slate-100">

            <!-- Child Welfare -->
            <section id="child" class="scroll-mt-32">
                <div class="flex flex-col-reverse md:flex-row gap-12 items-center">
                    <div class="md:w-1/2">
                         <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-white shadow-soft rounded-full flex items-center justify-center text-law-gold mr-4 border border-slate-50">
                                 <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h2 class="text-3xl font-serif font-light text-law-blue">Barnevern</h2>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-light leading-loose">
                            <p class="mb-6">
                                Barnevernssaker er blant de mest alvorlige og inngripende sakene en familie kan møte. Konsekvensene er store, og tidlig juridisk bistand er ofte avgjørende.
                            </p>
                            <p class="mb-6">
                                Vi gir tydelig og robust bistand for foreldre og barn. Vi ivaretar at lovkravene følges, og at retten til familieliv blir respektert.
                            </p>
                            <ul class="space-y-3 mt-8">
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Bistand under innledende undersøkelser og møter</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Klager på akuttvedtak</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Representasjon i saker om omsorgsovertakelse</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Forhandling om samværsrett og tilbakeføring</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Høringer i Barneverns- og helsenemnda</li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="relative rounded-sm overflow-hidden shadow-xl shadow-blue-900/10 group">
                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Child Welfare" class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-law-blue/10 mix-blend-multiply"></div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-slate-100">

            <!-- Immigration -->
            <section id="immigration" class="scroll-mt-32">
                <div class="flex flex-col md:flex-row gap-12 items-center">
                    <div class="md:w-1/2 order-last md:order-first">
                         <div class="relative rounded-sm overflow-hidden shadow-xl shadow-blue-900/10 group">
                            <img src="https://images.unsplash.com/photo-1569974498991-d3c12a504f95?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Immigration Law" class="w-full h-[400px] object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-law-blue/10 mix-blend-multiply"></div>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-white shadow-soft rounded-full flex items-center justify-center text-law-gold mr-4 border border-slate-50">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h2 class="text-3xl font-serif font-light text-law-blue">Utlendingsrett</h2>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-light leading-loose">
                            <p class="mb-6">
                                Flytting til et nytt land innebærer komplekse regler og strenge krav til dokumentasjon. Vi hjelper enkeltpersoner og familier med norsk utlendingsrett og sørger for at søknader er korrekte og komplette.
                            </p>
                            <p class="mb-6">
                                Fra første søknad til klager mot UDI og UNE står vi ved din side. Vi har bred erfaring med familiegjenforening, arbeidstillatelser og asylsaker.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                                <div class="bg-slate-50 p-6 rounded-sm border border-slate-100">
                                    <h4 class="font-serif font-medium text-law-blue mb-2">Familiegjenforening</h4>
                                    <p class="text-sm text-slate-600 font-light">Søknader for ektefeller og barn, med riktig dokumentasjon av inntekt og bolig.</p>
                                </div>
                                <div class="bg-slate-50 p-6 rounded-sm border border-slate-100">
                                    <h4 class="font-serif font-medium text-law-blue mb-2">Arbeids- og studietillatelser</h4>
                                    <p class="text-sm text-slate-600 font-light">Bistand til faglærte og studenter med nødvendige tillatelser for arbeid og utdanning i Norge.</p>
                                </div>
                                <div class="bg-law-gold/10 p-6 rounded-sm border border-law-gold/20">
                                    <h4 class="font-serif font-medium text-law-blue mb-2">Hurtigspor for kritiske saker</h4>
                                    <p class="text-sm text-slate-600 font-light">Bistand til rask behandling når tidskritiske behov krever umiddelbar innreise eller oppstart.</p>
                                </div>
                                <div class="bg-slate-50 p-6 rounded-sm border border-slate-100">
                                    <h4 class="font-serif font-medium text-law-blue mb-2">Permanent opphold & statsborgerskap</h4>
                                    <p class="text-sm text-slate-600 font-light">Veiledning gjennom kravene for varig opphold og veien til norsk statsborgerskap.</p>
                                </div>
                                <div class="bg-slate-50 p-6 rounded-sm border border-slate-100">
                                    <h4 class="font-serif font-medium text-law-blue mb-2">Asyl og Beskyttelse</h4>
                                    <p class="text-sm text-slate-600 font-light">Juridisk bistand ved asylsøknader og klager på avslag for de som trenger beskyttelse.</p>
                                </div>
                                <div class="bg-slate-50 p-6 rounded-sm border border-slate-100">
                                    <h4 class="font-serif font-medium text-law-blue mb-2">Forsvar mot Utvisning</h4>
                                    <p class="text-sm text-slate-600 font-light">Hjelp ved tilbakekall av tillatelser og utvisning, for å ivareta din rett til å bli.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-8 max-w-4xl">
        <div class="text-center mb-16">
            <span class="text-law-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Vanlige spørsmål</span>
            <h2 class="text-4xl font-serif font-light text-law-blue">Ofte stilte spørsmål</h2>
        </div>

        <div class="space-y-6">
            <!-- FAQ Item 1 -->
            <div class="bg-white rounded-sm shadow-sm border border-slate-100 overflow-hidden">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-law-blue hover:text-law-gold transition-colors">
                        <span>Tilbyr dere gratis vurdering?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-slate-500 font-light leading-relaxed p-6 pt-0 text-sm">
                        Ja, vi tilbyr en gratis innledende vurdering. Den gir oss innsikt i situasjonen din og deg en klarere forståelse av neste steg. Det er ingen forpliktelse til å gå videre.
                    </div>
                </details>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white rounded-sm shadow-sm border border-slate-100 overflow-hidden">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-law-blue hover:text-law-gold transition-colors">
                        <span>Hva koster det å bruke dere?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-slate-500 font-light leading-relaxed p-6 pt-0 text-sm">
                        Kostnadene avhenger av type sak og kompleksitet. Vi gir et tydelig kostnadsoverslag på forhånd, og i enkelte saker kan du ha krav på fri rettshjelp fra staten.
                    </div>
                </details>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white rounded-sm shadow-sm border border-slate-100 overflow-hidden">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-law-blue hover:text-law-gold transition-colors">
                        <span>Hvor lang tid tar en vanlig sak?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-slate-500 font-light leading-relaxed p-6 pt-0 text-sm">
                        Tidslinjen avhenger av sakens art og motparten (for eksempel NAV, UDI eller domstolene). Noen saker løses på uker, mens rettsprosesser kan ta måneder. Vi jobber for mest mulig effektiv fremdrift.
                    </div>
                </details>
            </div>
             <!-- FAQ Item 4 -->
            <div class="bg-white rounded-sm shadow-sm border border-slate-100 overflow-hidden">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-law-blue hover:text-law-gold transition-colors">
                        <span>Kan dere representere meg utenfor Oslo?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-slate-500 font-light leading-relaxed p-6 pt-0 text-sm">
                        Ja. Vi representerer klienter over hele Norge og internasjonalt, særlig i utlendings- og NAV-saker. Konsultasjoner kan gjennomføres via telefon eller video.
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>
