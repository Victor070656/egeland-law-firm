<?php include 'components/header.php'; ?>

<!-- Page Header -->
<div class="bg-law-blue text-white pt-40 pb-20 relative overflow-hidden">
     <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Case Archive" class="w-full h-full object-cover">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-law-blue via-law-blue/90 to-transparent"></div>
    <div class="container mx-auto px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-serif font-light mb-4">Saksarkiv</h1>
        <div class="flex justify-center items-center text-xs font-semibold tracking-widest text-slate-400 uppercase">
            <a href="index.php" class="hover:text-white transition-colors">Hjem</a> <span class="mx-4 text-law-gold">/</span> <span class="text-white">Saksarkiv</span>
        </div>
    </div>
</div>

<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-8">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <span class="text-law-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Våre Resultater</span>
            <h2 class="text-4xl font-serif font-light text-law-blue mb-6">Nylige Saker</h2>
            <p class="text-slate-500 font-light leading-relaxed">Et utvalg av saker hvor vi har bistått våre klienter med å oppnå rettferdighet og gode løsninger.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            <!-- Case 1: Visa Fast Track -->
            <div class="bg-white rounded-sm shadow-soft overflow-hidden group hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1544027993-37dbfe43562a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Visa Fast Track" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-law-gold text-white text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-sm">Utlendingsrett</div>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-serif font-medium text-law-blue mb-4 group-hover:text-law-gold transition-colors">Hurtigbehandling av Visum</h3>
                    <p class="text-slate-500 font-light leading-relaxed mb-6">
                        En internasjonal spesialist trengte arbeidsvisum raskt for å starte i en kritisk stilling i Oslo. Den vanlige behandlingstiden ville ført til tap av jobbtilbudet.
                    </p>
                    <div class="border-l-2 border-law-gold pl-4 mb-6">
                        <p class="text-sm text-law-blue font-medium italic">"Advokat Patrick sørget for en effektiv prosess som reduserte ventetiden betraktelig."</p>
                    </div>
                    <div class="flex items-center text-sm font-bold text-law-blue uppercase tracking-wider">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Sak løst: 2 uker
                    </div>
                </div>
            </div>

            <!-- Case 2: Family Reunification -->
            <div class="bg-white rounded-sm shadow-soft overflow-hidden group hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Family Reunification" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-law-blue text-white text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-sm">Familierett</div>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-serif font-medium text-law-blue mb-4 group-hover:text-law-gold transition-colors">Familiegjenforening</h3>
                    <p class="text-slate-500 font-light leading-relaxed mb-6">
                        En familie ble splittet på grunn av byråkratiske feil i søknadsprosessen. Vi tok saken til UNE og fikk omgjort vedtaket, slik at familien kunne gjenforenes i Norge.
                    </p>
                    <div class="border-l-2 border-law-gold pl-4 mb-6">
                        <p class="text-sm text-law-blue font-medium italic">"Takket være grundig dokumentasjon og iherdig innsats, fikk vi familien samlet igjen."</p>
                    </div>
                    <div class="flex items-center text-sm font-bold text-law-blue uppercase tracking-wider">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Vedtak omgjort
                    </div>
                </div>
            </div>

            <!-- Case 3: NAV Appeal -->
            <div class="bg-white rounded-sm shadow-soft overflow-hidden group hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="NAV Appeal" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-slate-700 text-white text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-sm">Trygderett</div>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-serif font-medium text-law-blue mb-4 group-hover:text-law-gold transition-colors">Vant frem mot NAV</h3>
                    <p class="text-slate-500 font-light leading-relaxed mb-6">
                        En klient fikk avslag på uføretrygd til tross for klare medisinske bevis. Vi bisto med klage til Trygderetten, som ga klienten fullt medhold og etterbetaling.
                    </p>
                    <div class="border-l-2 border-law-gold pl-4 mb-6">
                        <p class="text-sm text-law-blue font-medium italic">"Rettferdigheten seiret til slutt. En viktig seier for klientens økonomiske trygghet."</p>
                    </div>
                    <div class="flex items-center text-sm font-bold text-law-blue uppercase tracking-wider">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Fullt medhold
                    </div>
                </div>
            </div>

            <!-- Case 4: Child Welfare -->
            <div class="bg-white rounded-sm shadow-soft overflow-hidden group hover:shadow-2xl hover:shadow-blue-900/10 transition-all duration-500">
                <div class="h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Child Welfare" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-law-gold-light text-law-blue text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-sm">Barnevern</div>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-serif font-medium text-law-blue mb-4 group-hover:text-law-gold transition-colors">Tilbakeføring av omsorg</h3>
                    <p class="text-slate-500 font-light leading-relaxed mb-6">
                        Etter en akuttplassering bisto vi foreldrene i fylkesnemnda. Vi beviste at vilkårene for omsorgsovertakelse ikke var oppfylt, og barna ble tilbakeført til hjemmet.
                    </p>
                    <div class="border-l-2 border-law-gold pl-4 mb-6">
                        <p class="text-sm text-law-blue font-medium italic">"En sensitiv sak håndtert med den største respekt og faglig tyngde."</p>
                    </div>
                    <div class="flex items-center text-sm font-bold text-law-blue uppercase tracking-wider">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Barn tilbakeført
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>