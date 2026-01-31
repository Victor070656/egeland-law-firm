<?php include 'components/header.php'; ?>

<!-- Page Header -->
<div class="bg-law-blue text-white pt-40 pb-20 relative overflow-hidden">
     <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Legal Library" class="w-full h-full object-cover">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-law-blue via-law-blue/90 to-transparent"></div>
    <div class="container mx-auto px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-serif font-light mb-4">Practice Areas</h1>
        <div class="flex justify-center items-center text-xs font-semibold tracking-widest text-slate-400 uppercase">
            <a href="index.php" class="hover:text-white transition-colors">Home</a> <span class="mx-4 text-law-gold">/</span> <span class="text-white">Services</span>
        </div>
    </div>
</div>

<div class="container mx-auto px-8 py-24">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-16">
        
        <!-- Sidebar Navigation -->
        <div class="lg:col-span-1 hidden lg:block">
            <div class="sticky top-32 space-y-2">
                <a href="#family" class="group flex items-center justify-between px-6 py-4 bg-white border border-slate-100 rounded-sm shadow-sm hover:shadow-md transition-all duration-300">
                    <span class="text-sm font-semibold text-law-blue tracking-wide">Family Law</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-law-gold opacity-0 group-hover:opacity-100 transition-opacity"></span>
                </a>
                <a href="#social" class="group flex items-center justify-between px-6 py-4 bg-slate-50 hover:bg-white border border-transparent hover:border-slate-100 rounded-sm transition-all duration-300">
                    <span class="text-sm font-medium text-slate-500 group-hover:text-law-blue tracking-wide">Social Security</span>
                     <span class="w-1.5 h-1.5 rounded-full bg-law-gold opacity-0 group-hover:opacity-100 transition-opacity"></span>
                </a>
                <a href="#child" class="group flex items-center justify-between px-6 py-4 bg-slate-50 hover:bg-white border border-transparent hover:border-slate-100 rounded-sm transition-all duration-300">
                    <span class="text-sm font-medium text-slate-500 group-hover:text-law-blue tracking-wide">Child Welfare</span>
                     <span class="w-1.5 h-1.5 rounded-full bg-law-gold opacity-0 group-hover:opacity-100 transition-opacity"></span>
                </a>
                <a href="#immigration" class="group flex items-center justify-between px-6 py-4 bg-slate-50 hover:bg-white border border-transparent hover:border-slate-100 rounded-sm transition-all duration-300">
                    <span class="text-sm font-medium text-slate-500 group-hover:text-law-blue tracking-wide">Immigration</span>
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
                            <h2 class="text-3xl font-serif font-light text-law-blue">Family Law</h2>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-light leading-loose">
                            <p class="mb-6">
                                Family law conflicts are often the most personal and emotionally draining legal challenges one can face. Whether you are going through a divorce, fighting for custody of your children, or dealing with complex inheritance issues, you need an attorney who is both compassionate and legally sharp.
                            </p>
                            <p class="mb-6">
                                We provide objective, professional guidance to help you reach fair resolutions, prioritizing the well-being of children involved. We strive for amicable solutions but are fully prepared to litigate when necessary to protect your interests.
                            </p>
                            <ul class="space-y-3 mt-8">
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Child custody and visitation rights disputes</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Divorce and separation financial settlements</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Division of assets, property, and debts</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Inheritance law, wills, and estate planning</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Drafting valid prenuptial agreements</li>
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
                            <h2 class="text-3xl font-serif font-light text-law-blue">Social Security Law & NAV</h2>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-light leading-loose">
                            <p class="mb-6">
                                The Norwegian social security system is complex, and navigating NAV regulations can be overwhelming. Many individuals unfortunately receive incorrect decisions regarding benefits they are entitled to by law.
                            </p>
                            <p class="mb-6">
                                We specialize in assisting clients with complaints and appeals against NAV decisions. Our attorneys have deep knowledge of the National Insurance Act and can help you gather the necessary medical and factual documentation to strengthen your case.
                            </p>
                             <ul class="space-y-3 mt-8">
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Appeals against NAV rejections and benefit reductions</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Disability benefits (Uføretrygd) and Work Assessment Allowance (AAP)</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Sickness benefits, unemployment benefits, and parental leave</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Evaluations for Free Legal Aid (Fri rettshjelp)</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Representation in the National Insurance Court (Trygderetten)</li>
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
                            <h2 class="text-3xl font-serif font-light text-law-blue">Child Welfare</h2>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-light leading-loose">
                            <p class="mb-6">
                                Cases involving Child Welfare Services (Barnevernet) are among the most intrusive and serious legal matters a family can face. The stakes are incredibly high, and early legal intervention is often critical.
                            </p>
                            <p class="mb-6">
                                We provide robust defense and support for parents and children in these proceedings. We ensure that the Child Welfare Service adheres to strict legal requirements and that your rights to family life are respected and protected.
                            </p>
                            <ul class="space-y-3 mt-8">
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Assistance during initial investigations and meetings</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Appeals against emergency placement orders</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Representation in care order proceedings</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Negotiating visitation rights and reunification goals</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-gold rounded-full mr-3"></span>Hearings in the Child Welfare and Health Board</li>
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
                            <h2 class="text-3xl font-serif font-light text-law-blue">Immigration Law</h2>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-light leading-loose">
                            <p class="mb-6">
                                Moving to a new country involves complex regulations and strict documentation requirements. We help individuals and families with all aspects of Norwegian immigration law, ensuring your applications are correct and complete to avoid unnecessary delays or rejections.
                            </p>
                            <p class="mb-6">
                                From initial applications to complex appeals against UDI (Directorate of Immigration) and UNE (Immigration Appeals Board), we stand by your side. We have extensive experience with family reunification, work permits, and asylum cases.
                            </p>
                            <ul class="space-y-3 mt-8">
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Family reunification applications for spouses and children</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Skilled worker permits and study permits</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Permanent residence and Norwegian citizenship</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Asylum applications and protection appeals</li>
                                <li class="flex items-center text-sm"><span class="w-1.5 h-1.5 bg-law-blue rounded-full mr-3"></span>Defense against expulsion and revocation of permits</li>
                            </ul>
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
            <span class="text-law-gold text-xs font-bold tracking-[0.2em] uppercase mb-4 block">Common Questions</span>
            <h2 class="text-4xl font-serif font-light text-law-blue">Frequently Asked Questions</h2>
        </div>

        <div class="space-y-6">
            <!-- FAQ Item 1 -->
            <div class="bg-white rounded-sm shadow-sm border border-slate-100 overflow-hidden">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-law-blue hover:text-law-gold transition-colors">
                        <span>Do you offer free legal advice?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-slate-500 font-light leading-relaxed p-6 pt-0 text-sm">
                        Yes, we offer a free initial assessment of your case. This helps us understand your situation and determine if and how we can assist you. There is no obligation to proceed after this conversation.
                    </div>
                </details>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white rounded-sm shadow-sm border border-slate-100 overflow-hidden">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-law-blue hover:text-law-gold transition-colors">
                        <span>How much will my case cost?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-slate-500 font-light leading-relaxed p-6 pt-0 text-sm">
                        Legal costs vary depending on the complexity and type of the case. We provide a clear estimate of costs upfront. In some cases, such as certain NAV appeals or child welfare cases, you may be eligible for free legal aid (fri rettshjelp) from the government.
                    </div>
                </details>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white rounded-sm shadow-sm border border-slate-100 overflow-hidden">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-law-blue hover:text-law-gold transition-colors">
                        <span>How long does a typical case take?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-slate-500 font-light leading-relaxed p-6 pt-0 text-sm">
                        The timeline depends heavily on the nature of the case and the opposing parties (e.g., NAV, UDI, courts). Some matters can be resolved in weeks, while court proceedings may take several months. We strive to resolve cases as efficiently as possible.
                    </div>
                </details>
            </div>
             <!-- FAQ Item 4 -->
            <div class="bg-white rounded-sm shadow-sm border border-slate-100 overflow-hidden">
                <details class="group">
                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none p-6 text-law-blue hover:text-law-gold transition-colors">
                        <span>Can you represent me if I live outside Stavanger?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-slate-500 font-light leading-relaxed p-6 pt-0 text-sm">
                        Absolutely. We represent clients all over Norway and internationally, especially in immigration and NAV cases. Consultations can be conducted via phone or video call.
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>