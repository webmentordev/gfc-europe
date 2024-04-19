@extends('layouts.base')
@section('content')
    <section class="w-full bg-gray-100" id="services">
        <div class="max-w-7xl m-auto pt-[50px] pb-[100px] px-4">
            <h1 class="text-4xl mb-3 font-bold">German Fixing Consultants Project References</h1>
            <p class="mb-3">At German Fixing Consultants (GFC) Europe, we take pride in our track record of providing innovative fixing solutions for a diverse range of projects across the globe. Our commitment to excellence and our expertise in engineering solutions have made us a trusted partner in various application areas. Here are some notable project references showcasing our successful collaborations:</p>
            <h3 class="mb-1 font-semibold text-lg">Commercial Buildings</h3>
            <p class="mb-3">GFC Europe provided customized fixing solutions for the construction of several high-rise commercial buildings in Frankfurt's financial district. Our expertise in high-strength anchoring systems and advanced connection technologies ensured the structural integrity and stability of these iconic skyscrapers.</p>

            <h3 class="mb-1 font-semibold text-lg">Infrastructure Projects</h3>
            <p class="mb-3">GFC Europe played a key role in infrastructure projects such as bridge constructions and transportation hubs. Our specialized solutions for bridge bearings, expansion joints, and anchoring systems contributed to the successful completion of these critical infrastructure projects.</p>

            <h3 class="mb-1 font-semibold text-lg">Energy Sector</h3>
            <p class="mb-3">GFC Europe provided comprehensive fixing solutions for energy sector projects, including power plants and renewable energy facilities. Our expertise in thermal insulation, seismic dampers, and modular construction components ensured the safety, efficiency, and durability of these energy infrastructure projects.</p>

            <h3 class="mb-1 font-semibold text-lg">Residential Developments</h3>
            <p class="mb-3">GFC Europe collaborated on residential developments, delivering customized fixing solutions for prefabricated housing and apartment complexes. Our focus on energy-efficient façade systems, sound insulation, and flexible connection systems contributed to the sustainability and comfort of these residential communities.</p>

            <h3 class="mb-1 font-semibold text-lg">Industrial Facilities</h3>
            <p class="mb-3">GFC Europe provided specialized fixing solutions for industrial facilities and manufacturing plants. Our expertise in chemical anchor systems, corrosion-resistant materials, and explosion-proof fasteners ensured the safety, reliability, and compliance of these industrial installations.</p>


            <h3 class="mb-1 font-semibold text-lg">Public Infrastructure</h3>
            <p class="mb-3">GFC Europe contributed to public infrastructure projects. Our tailored fixing solutions for architectural façades, glass canopies, and heritage structures enhanced the aesthetic appeal and functionality of these public spaces.</p>
        
            <div class="grid grid-cols-3 gap-3 930px:grid-cols-2 600px:grid-cols-1">
                <div class="relative w-full">
                    <img class="h-[400px] object-cover w-full rounded-lg" src="{{ asset('assets/projects/gfc-50-eastbourne-terrace.png') }}" title="GFC 50 Eastbourne Terrace Project" alt="50 Eastbourne Terrace">
                    <p class="absolute bottom-0 rounded-lg left-0 p-2 h-fit w-full flex justify-center items-center text-white bg-black bg-opacity-60 backdrop-blur-md border border-white/10">50 Eastbourne Terrace</p>
                </div>

                <div class="relative w-full">
                    <img class="h-[400px] object-cover w-full rounded-lg" src="{{ asset('assets/projects/gfc-52-54-lime-street-london-uK.jpg') }}" title="GFC 52-54 Lime street (London/UK) Project" alt="52-54 Lime street (London/UK)">
                    <p class="absolute bottom-0 rounded-lg left-0 p-2 h-fit w-full flex justify-center items-center text-white bg-black bg-opacity-60 backdrop-blur-md border border-white/10">52-54 Lime street (London/UK)</p>
                </div>

                <div class="relative w-full">
                    <img class="h-[400px] object-cover w-full rounded-lg" src="{{ asset('assets/projects/gfc-everton-football-stadium.png') }}" title="GFC Everton football stadium Project" alt="Everton football stadium">
                    <p class="absolute bottom-0 rounded-lg left-0 p-2 h-fit w-full flex justify-center items-center text-white bg-black bg-opacity-60 backdrop-blur-md border border-white/10">Everton football stadium</p>
                </div>

                <div class="relative w-full">
                    <img class="h-[400px] object-cover w-full rounded-lg" src="{{ asset('assets/projects/gfc-battersea-power-station-phase-4a.jpg') }}" title="GFC Battersea power Station Phase 4a Project" alt="Battersea power Station Phase 4a">
                    <p class="absolute bottom-0 rounded-lg left-0 p-2 h-fit w-full flex justify-center items-center text-white bg-black bg-opacity-60 backdrop-blur-md border border-white/10">Battersea power Station Phase 4a</p>
                </div>

                <div class="relative w-full">
                    <img class="h-[400px] object-cover w-full rounded-lg" src="{{ asset('assets/projects/gfc-co-op-live-arena-manchester.jpg') }}" title="GFC Co-op Live Arena Manchester Project" alt="Co-op Live Arena Manchester">
                    <p class="absolute bottom-0 rounded-lg left-0 p-2 h-fit w-full flex justify-center items-center text-white bg-black bg-opacity-60 backdrop-blur-md border border-white/10">Co-op Live Arena Manchester</p>
                </div>

                <div class="relative w-full">
                    <img class="h-[400px] object-cover w-full rounded-lg" src="{{ asset('assets/projects/gfc-reforma-latino-mexico-city.jpg') }}" title="GFC Reforma Latino (Mexico City/Mexico) Project" alt="Reforma Latino (Mexico City/Mexico)">
                    <p class="absolute bottom-0 rounded-lg left-0 p-2 h-fit w-full flex justify-center items-center text-white bg-black bg-opacity-60 backdrop-blur-md border border-white/10">Reforma Latino (Mexico City/Mexico)</p>
                </div>

                <div class="relative w-full">
                    <img class="h-[400px] object-cover w-full rounded-lg" src="{{ asset('assets/projects/gfc-20-gresham-street-london.jpg') }}" title="GFC 20 Gresham Street London Project" alt="20 Gresham Street London">
                    <p class="absolute bottom-0 rounded-lg left-0 p-2 h-fit w-full flex justify-center items-center text-white bg-black bg-opacity-60 backdrop-blur-md border border-white/10">20 Gresham Street London</p>
                </div>

                <div class="relative w-full">
                    <img class="h-[400px] object-cover w-full rounded-lg" src="{{ asset('assets/projects/gfc-world-crest-mumbai-india.jpg') }}" title="GFC World Crest (Mumbai/India) Project" alt="World Crest (Mumbai/India)">
                    <p class="absolute bottom-0 rounded-lg left-0 p-2 h-fit w-full flex justify-center items-center text-white bg-black bg-opacity-60 backdrop-blur-md border border-white/10">World Crest (Mumbai/India)</p>
                </div>

                <div class="relative w-full">
                    <img class="h-[400px] object-cover w-full rounded-lg" src="{{ asset('assets/projects/gfc-world-trade-center-doha-qatar.jpg') }}" title="GFC World Trade Center (Doha/Qatar) Project" alt="World Trade Center (Doha/Qatar)">
                    <p class="absolute bottom-0 rounded-lg left-0 p-2 h-fit w-full flex justify-center items-center text-white bg-black bg-opacity-60 backdrop-blur-md border border-white/10">World Trade Center (Doha/Qatar)</p>
                </div>
            </div>
        </div>
    </section>
@endsection