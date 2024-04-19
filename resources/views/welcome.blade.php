@extends('layouts.base')
@section('content')
    <header class="relative w-full bg-cover bg-center bg-fixed h-[85vh] flex items-center justify-center" style="background-image: url({{ asset('assets/gfc-berlin-header-image.jpg') }})">
        <div class="absolute bg-black bg-opacity-70 backdrop-blur-sm w-full h-full top-0 left-0 z-10"></div>
        <div class="text-center relative z-10 text-white">
            <h2 class="px-8 mb-8 font-semibold border-b border-white text-7xl py-3 w-fit m-auto 650px:text-4xl">Welcome</h2>
            <h1 class="font-bold text-7xl leading-[60px] 650px:text-3xl">German Fixing Consultants<br><span class="text-5xl span 650px:text-3xl">your solutions provider</span></h1>
        </div>
    </header>
    
    <section class="w-full" id="about">
        <div class="max-w-6xl m-auto py-12 px-4">
            <div class="grid grid-cols-3 gap-3 relative 950px:grid-cols-1">
                <div class="h-full relative">
                    <img class="max-w-[400px] w-full m-auto h-fit sticky top-[70px] left-0" src="{{ asset('assets/aamir-shaheen-4.png') }}" alt="About German Fixing Consultants">
                </div>
                <div class="col-span-2">
                    <h1 class="text-5xl font-semibold mb-4 pb-4 border-b border-gray-200 950px:text-3xl 950px:text-center">About Me</h1>
                    <p class="mb-4">Welcome to my professional journey in the world of anchoring technology, a path that has been both challenging and incredibly rewarding. With over a decade of dedicated experience, I have had the privilege of contributing to the advancement of this critical field, helping to secure structures and innovations across the globe.</p>
                    <p class="mb-4">My career commenced in 2011 at <strong>Jordahl</strong>, a name synonymous with excellence in the anchoring technology sector. During my time at Jordahl, I was immersed in a culture of innovation, excellence, and precision, laying a solid foundation for my professional development.</p>
                    <p class="mb-4">Seeking new challenges and opportunities for growth, I joined <strong>PEC Group Germany</strong> after my tenure at Jordahl. My journey with PEC Group was a testament to the rapid evolution and interconnectedness of the anchoring technology industry. It was a period marked by significant learning and professional development, as I delved deeper into the complexities of the field and contributed to innovative solutions.</p>
                    <p class="mb-4">In 2016, a pivotal moment in my career occurred when PEC Group was acquired by Hilti, a global leader in the anchoring technology industry. This transition was not just a change in corporate structure but a gateway to a world of new possibilities and resources. At <strong>Hilti</strong>, I continued to push the boundaries of anchoring technology, working on projects that spanned various countries and cultures, including the USA, UK, Europe, UAE, and Southeast Asia (SEA). Each project brought its unique set of challenges, further enriching my experience and perspective.</p>
                    <p class="mb-4">Throughout my career, I have had the honor of visiting and working closely with many esteemed customers all over the world, including Enclos, Inhabit, Permasteelisa, Lindner, Meinhardt, Besix, Kawneer, Yuanda, Joseph Gartner, Harmon, W&W Glass, New Hudson facades, Seele, CDC, Arup, Axis Facade, Buro Happold, Ramboll, BFG, Alabbar, Alumco, Priedemann, Facade Concept Design and many more. These interactions have not only provided me with a unique insight into the diverse needs and challenges faced by our clients but also enabled me to foster meaningful relationships and collaborations that have been instrumental in driving innovation and excellence in our field.</p>
                    <p class="mb-4">My expertise spans across designing standard and special solutions for thin slabs, metal decks, corner situations, and many other complex applications, ensuring safety, reliability, and efficiency even under the most demanding conditions.</p>
                    <p>Today, with 12 years of experience under my belt, I continue to be driven by a passion for excellence in anchoring technology. My journey has taught me the importance of adaptability, the value of cross-cultural collaboration, and the impact of innovative solutions on the world around us.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="w-full">
        <div class="max-w-3xl m-auto py-12 px-4">
            <img class="max-w-[400px] w-full m-auto h-fit" src="{{ asset('assets/aamir-shaheen-4.png') }}" alt="About German Fixing Consultants">
            <h1 class="text-4xl font-semibold mb-4">About Me</h1>
            <p class="mb-4">Welcome to my professional journey in the world of anchoring technology, a path that has been both challenging and incredibly rewarding. With over a decade of dedicated experience, I have had the privilege of contributing to the advancement of this critical field, helping to secure structures and innovations across the globe.</p>
            <p class="mb-4">My career commenced in 2011 at <strong>Jordahl</strong>, a name synonymous with excellence in the anchoring technology sector. During my time at Jordahl, I was immersed in a culture of innovation, excellence, and precision, laying a solid foundation for my professional development.</p>
            <p class="mb-4">Seeking new challenges and opportunities for growth, I joined <strong>PEC Group Germany</strong> after my tenure at Jordahl. My journey with PEC Group was a testament to the rapid evolution and interconnectedness of the anchoring technology industry. It was a period marked by significant learning and professional development, as I delved deeper into the complexities of the field and contributed to innovative solutions.</p>
            <p class="mb-4">In 2016, a pivotal moment in my career occurred when PEC Group was acquired by Hilti, a global leader in the anchoring technology industry. This transition was not just a change in corporate structure but a gateway to a world of new possibilities and resources. At <strong>Hilti</strong>, I continued to push the boundaries of anchoring technology, working on projects that spanned various countries and cultures, including the USA, UK, Europe, UAE, and Southeast Asia (SEA). Each project brought its unique set of challenges, further enriching my experience and perspective.</p>
            <p class="mb-4">Throughout my career, I have had the honor of visiting and working closely with many esteemed customers all over the world, including Enclos, Inhabit, Permasteelisa, Lindner, Meinhardt, Besix, Kawneer, Yuanda, Joseph Gartner, Harmon, W&W Glass, New Hudson facades, Seele, CDC, Arup, Axis Facade, Buro Happold, Ramboll, BFG, Alabbar, Alumco, Priedemann, Facade Concept Design and many more. These interactions have not only provided me with a unique insight into the diverse needs and challenges faced by our clients but also enabled me to foster meaningful relationships and collaborations that have been instrumental in driving innovation and excellence in our field.</p>
            <p class="mb-4">My expertise spans across designing standard and special solutions for thin slabs, metal decks, corner situations, and many other complex applications, ensuring safety, reliability, and efficiency even under the most demanding conditions.</p>
            <p>Today, with 12 years of experience under my belt, I continue to be driven by a passion for excellence in anchoring technology. My journey has taught me the importance of adaptability, the value of cross-cultural collaboration, and the impact of innovative solutions on the world around us.</p>
        </div>
    </section> --}}

    <section class="w-full bg-gray-100" id="services">
        <div class="max-w-7xl m-auto py-[100px] px-4">
            <div class="grid grid-cols-4 gap-6 800px:grid-cols-1 w-full">
                <div class="mb-6 col-span-3 h-fit 800px:col-span-1">
                    <h1 class="text-4xl mb-3 font-bold 600px:text-3xl">German Fixing Consultant Services</h1>
                    <p class="mb-3 leading-6">The function of an anchorage system is to transfer loads to the concrete or masonry from attachments such as brackets or anchor plates</p>
                    <p class="mb-3 leading-6">The combined efforts of our engineers and designers are to deliver exceptional results for our customers. We are looking forward for a loyal customer relationship which is for us most importance to make sure customer’s requirements and ideas are properly understood, communicated and realized</p>
                    <h2 class="mb-4 font-bold text-2xl">Our Services:</h2>
                    <ul class="list-disc ml-6">
                        <li class="mb-4">We provide highly professional solutions for fixing of non-structural elements to the main structure in different application areas like glass façade, tunnel, elevator, pre-cast and many more</li>
                        <li class="mb-4">We are specialized in design of anchor channels</li>
                        <li class="mb-4">We are specialized in static, seismic, fire and fatigue design of anchoring system</li>
                        <li class="mb-4">Our engineers are dedicated to provide you standard solutions based on European <strong>(EN 1992-4)</strong> and international standards e.g. <strong>(USA: AC 232 & ACI 318)</strong></li>
                        <li class="mb-4">Our main strength is to provide customized solutions when it comes to thin slabs, lightweight concrete, corners, very high wind loads or any other special design situations</li>
                        <li class="mb-4">We provide not only technical support to our customers but also high-quality, approved and cost-efficient products</li>
                        <li class="mb-4">We are partner with the major suppliers. Do not need to shop around, come to us we design and recommend the most suitable and economical products for your projects</li>
                        <li class="mb-4">Assessment and recommendations on wrongly installed anchor channels</li>
                        <li class="mb-4">Recommendations for the on-site testing of anchor channels</li>
                        <li class="mb-4">We provide engineering solutions within <span>24 hours</span></li>
                    </ul>
                </div>
                <div class="flex flex-col 800px:grid 800px:grid-cols-1 w-full">
                    <img class="w-full rounded-lg mb-5" src="{{ asset('assets/services/7.jpg') }}">
                    <img class="w-full rounded-lg mb-5" src="{{ asset('assets/applications/applications/5234 350.JPG') }}">
                    <div class="flex items-center justify-center bg-gray-200 rounded-lg h-[200px] w-full">
                        <img src="{{ asset('assets/applications/applications/24h.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="w-full" id="applications">
        <div class="max-w-7xl w-full m-auto pt-[100px] pb-[50px] px-4">
            <h1 class="text-5xl mb-3 font-bold 600px:text-3xl">German Fixing Consultant Applications</h1>
            <h2 class="mb-1 font-semibold text-2xl">Glass Façade/Curtain Wall</h2>
            <p class="mb-1"> Secure Fixing with Anchor Channels. We provide design calculations for fixing curtain wall brackets to the main structural system through the use of cast-in anchor channels.</p>
            <p class="mb-1">In modern buildings, glass walls are pretty common. They look cool and help with energy efficiency. But putting them up isn't easy. That's where we come in. At GFC, we're experts in making sure those glass walls stay put. We do this by figuring out the best way to attach them securely to the building's frame using special channels.</p>
            <p class="mb-3">We use something called anchor channels to attach the brackets to the building's frame. These channels are like super-strong hooks that go into the building's structure. They spread out the weight evenly and make sure everything stays in place. They're adjustable too, so we can get everything lined up just right.</p>
            <div class="grid grid-cols-3 gap-6 mb-6 600px:grid-cols-1">
                <img src="{{ asset('assets/applications/glass-facade-installation.jpg') }}" title="Glass Façade Installation" alt="Glass Façade Installation" class="w-full col-span-2 rounded-lg 600px:col-span-1">
                <img src="{{ asset('assets/applications/applications/curtain-wall-innstallation.png') }}" title="Curtain Wall Installation" alt="Curtain Wall Installation" class="w-full h-full rounded-lg 600px:col-span-1">
            </div>
            <h2 class="mb-1 font-semibold text-2xl">Complex situations in Curtain wall connection design:</h2>
             
            <h3 class="mb-1 font-semibold text-lg">1 - Thin Slabs:</h3>
            <p class="mb-3">When dealing with thin slabs, the structural integrity of the connection points becomes crucial. Specialized brackets and reinforcement techniques may be necessary to ensure adequate support for the curtain wall system without compromising the integrity of the slab.</p>


            <h3 class="mb-1 font-semibold text-lg">2 - Building Corners: </h3>
            <p class="mb-3">Corners pose unique challenges in curtain wall connection design due to increased stress concentrations and differential movement. Innovative corner bracket designs and flexible connection systems are often required to accommodate these challenges while maintaining structural stability and aesthetic appeal.</p>
 
            <h3 class="mb-1 font-semibold text-lg">3 - Very High Wind Loads:</h3>
            <p class="mb-3">Areas prone to very high wind loads demand robust connection designs capable of withstanding extreme forces. This may involve the use of reinforced brackets, high-strength anchor channels, and additional support elements to ensure the curtain wall system remains securely attached to the building's structure even under extreme wind conditions.</p>

            <h3 class="mb-1 font-semibold text-lg">4 - Seismic Loads:</h3>
            <p class="mb-3">Seismic loads introduce dynamic forces that can cause significant movement and deformation in buildings. Curtain wall connection designs in seismic regions must incorporate flexible joint systems, seismic dampers, and strategic reinforcement to mitigate the effects of seismic activity and ensure the continued performance of the curtain wall system during and after earthquakes.</p>
 
            <h3 class="mb-1 font-semibold text-lg">5 - Metal Decks:</h3>
            <p class="mb-3">Integration with metal decks requires careful coordination to ensure proper attachment and compatibility between the curtain wall system and the deck structure. Customized connection details and specialized fastening methods may be necessary to achieve secure and reliable attachment while accommodating the unique characteristics of metal decks.</p>

            <h3 class="mb-1 font-semibold text-lg">6 - Pockets in the Slabs:</h3>
            <p class="mb-3">Pockets or recesses in slabs present challenges for curtain wall connections, as they may limit the available space for anchoring and support elements. Creative solutions such as adjustable brackets, recessed anchor channels, or innovative attachment methods may be required to effectively secure the curtain wall system within these constrained spaces.</p>

            <h3 class="mb-1 font-semibold text-lg">7 - Lightweight Concrete:</h3>
            <p class="mb-5">Lightweight concrete presents challenges in terms of load-bearing capacity and structural stability. Curtain wall connection designs must account for the reduced strength and increased deflection characteristics of lightweight concrete, often necessitating specialized reinforcement techniques and careful consideration of load distribution to ensure reliable performance of the curtain wall system.</p>

            <h2 class="mb-1 font-semibold text-2xl">Elevator Design</h2>
            <p class="mb-3">Elevators are essential components of modern buildings, ensuring efficient vertical transportation for occupants and goods. A crucial aspect of elevator installation is the secure fixing of counter-weight and car brackets to the main structural system. At GFC, we specialize in providing precise design calculations for this purpose, utilizing cast-in anchor channels to ensure the safety and stability of elevator installations.</p>
            <div class="grid grid-cols-3 gap-6 mb-6 600px:grid-cols-1">
                <img src="{{ asset('assets/applications/elevator-installation-service.jpg') }}" title="Glass Façade Installation" alt="Glass Façade Installation" class="w-full col-span-2 rounded-lg 600px:col-span-1">
                <img src="{{ asset('assets/applications/applications/elevator-anchor-installation.png') }}" title="Curtain Wall Installation" alt="Curtain Wall Installation" class="w-full h-full rounded-lg 600px:col-span-1">
            </div>
            <h2 class="mb-1 font-semibold text-2xl">Complex situations in Evelator connection design:</h2>
            <h3 class="mb-1 font-semibold text-lg">1 - High Fatigue/Dynamic Loads</h3>
            <p class="mb-3">Elevator systems experience repetitive and dynamic loading conditions during operation, leading to high fatigue stresses on connection points. Specialized materials and fatigue-resistant designs are essential to withstand these dynamic loads over the elevator's lifespan. Additionally, dynamic analysis techniques and fatigue testing may be employed to ensure the durability and reliability of connections under varying operating conditions.</p>

            <h3 class="mb-1 font-semibold text-lg">2 - Divider Beams:</h3>
            <p class="mb-3">Divider beams are structural elements used to separate multiple elevator cars within a shaft. Connecting divider beams securely to the main structural system involves addressing challenges such as load distribution, alignment, and compatibility with elevator car brackets. Customized connection details and robust anchoring methods are necessary to ensure the stability and integrity of divider beam installations</p>

            <h3 class="mb-1 font-semibold text-lg">3 - Longitudinal Loads:</h3>
            <p class="mb-3">Elevator systems are subject to longitudinal forces resulting from acceleration, deceleration, and braking of the elevator car. Proper design of connections to accommodate these longitudinal loads is crucial for maintaining structural stability and preventing excessive deflection or displacement. Reinforced brackets, optimized anchor channel placements, and dynamic load analysis are essential components of effective longitudinal load management in elevator connection design.</p>

            <h2 class="mb-1 font-semibold text-2xl">Precast Fixing</h2>
            <p class="mb-1"> Precise Design Calculations for Secure Installation - Precast panels offer numerous advantages in construction, including efficiency, durability, and aesthetic appeal. However, ensuring their secure installation requires meticulous design calculations and the use of reliable fixing methods. At GFC, we specialize in providing comprehensive design calculations for precast panels, leveraging cast-in anchor channels and other innovative products to ensure safe and secure installation.</p>

            <h3 class="mb-1 font-semibold text-lg">1 - Sandwich Panel Anchors</h3>
            <p class="mb-3">Sandwich panels, comprising an insulating core between two facing panels, require specialized anchors to ensure their secure attachment to the supporting structure. Our design approach emphasizes the use of sandwich panel anchors that offer high load-bearing capacity and thermal efficiency. These anchors are carefully selected and positioned to provide optimal support and prevent thermal bridging, enhancing the energy performance and durability of the building envelope.</p>

            <h3 class="mb-1 font-semibold text-lg">2 - Facing Panel Anchors</h3>
            <p class="mb-3">Facing panels, which form the visible exterior surface of precast structures, rely on facing panel anchors to maintain their position and resist external forces. We utilize a variety of facing panel anchors, including concealed and visible options, to meet aesthetic requirements while ensuring structural stability. These anchors are designed to accommodate the unique characteristics of facing panels, such as size, weight, and material composition, while providing reliable attachment to the supporting structure.</p>

            <h3 class="mb-1 font-semibold text-lg">3 - Flexible Connection Systems</h3>
            <p class="mb-6">Connecting precast members often requires flexible connection systems that can accommodate movement, settlement, and differential thermal expansion. Our expertise lies in designing and implementing flexible connection systems that allow for controlled movement without compromising the integrity of the structure. Whether it's seismic joints, expansion joints, or articulated connections, we leverage advanced engineering principles to develop solutions that ensure long-term performance and reliability.</p>

            <div class="grid grid-cols-3 gap-6 mb-6 600px:grid-cols-1">
                <img src="{{ asset('assets/applications/precast-channels-installation.jpg') }}" title="Precast Channels Installation" alt="Precast Channels Installation" class="w-full col-span-2 rounded-lg 600px:col-span-1">
                <img src="{{ asset('assets/applications/applications/precast-anchor-channel-installation-service.png') }}" title="Precast Anchor Channel Installation Service" alt="Precast Anchor Channel Installation Service" class="w-full h-full rounded-lg 600px:col-span-1">
            </div>
        </div>
    </section>


    <section class="w-full bg-gray-100" id="solutions">
        <div class="max-w-7xl w-full m-auto pt-[50px] pb-[100px] px-4">
            <h1 class="text-5xl mb-3 font-bold 600px:text-3xl">German Fixing Consultant Solutions</h1>
            <h2 class="mb-1 font-semibold text-2xl">GFC Customized Products</h2>
            <p class="mb-1">In collaboration with premier product suppliers in Europe, we at GFC Europe specialize in providing bespoke design services tailored to unique construction scenarios. Our expertise lies in recommending and integrating specialized and customized products to address specific challenges and requirements. Here are some examples of the customized products we offer:</p>
            <div class="grid grid-cols-2 gap-6 mb-8 480px:grid-cols-1">
                <img class="w-full h-full object-cover rounded-lg" src="{{ asset('assets/solutions/ski-gfc-product-1.jpg') }}" title="GFC Custom Product 1" alt="GFC Custom Product 1">
                <img class="w-full h-full object-cover rounded-lg" src="{{ asset('assets/solutions/ski-gfc-product-2.jpg') }}" title="GFC Custom Product 2" alt="GFC Custom Product 2">
                <img class="w-full h-full object-cover rounded-lg" src="{{ asset('assets/solutions/ski-gfc-product-3.jpg') }}" title="GFC Custom Product 3" alt="GFC Custom Product 3">
                <img class="w-full h-full object-cover rounded-lg" src="{{ asset('assets/solutions/ski-gfc-product-4.jpg') }}" title="GFC Custom Product 4" alt="GFC Custom Product 4">
                <img class="w-full h-full object-cover rounded-lg" src="{{ asset('assets/solutions/ski-gfc-product-5.jpg') }}" title="GFC Custom Product 5" alt="GFC Custom Product 5">
            </div>
            <h2 class="mb-1 font-semibold text-2xl">Recommendations On Wrongly Installed Anchor Channels:</h2>
            <h3 class="mb-1 font-semibold text-lg">1 - Channel Installed Too Deep</h3>
            <p class="mb-3">If the anchor channel is installed too deep, it may compromise the integrity of the connection. One solution is to use spacer shims or washers to adjust the height of the anchor bolts, bringing them to the correct depth. Additionally, epoxy grout or filler material can be used to fill the excess space in the anchor channel, providing additional support and preventing movement.</p>

            <h3 class="mb-1 font-semibold text-lg">2 - Channel Installed Too High</h3>
            <p class="mb-3">If the anchor channel is installed too high, it may not provide sufficient engagement with the fasteners. In such cases, one approach is to use longer anchor bolts to reach the desired depth within the channel. Alternatively, if feasible, the anchor channel can be carefully removed and reinstalled at the correct height using proper alignment techniques.</p>

            <h3 class="mb-1 font-semibold text-lg">3 - Channel Installed at the Wrong Position</h3>
            <p class="mb-3">When the anchor channel is installed at the wrong position, it can lead to misalignment or inadequate support for the connected elements. Depending on the severity of the misalignment, adjustments can be made by repositioning the anchor channel using mechanical means or by carefully drilling new anchor channels at the correct positions. However, careful consideration must be given to structural integrity and load distribution during the reinstallation process.</p>

            <h3 class="mb-1 font-semibold text-lg">4 - Channel Installed Inclined</h3>
            <p class="mb-3">An anchor channel installed at an angle compromises the load-bearing capacity and can lead to uneven stress distribution. Rectifying this issue involves carefully removing the improperly installed anchor channel and reinstalling it in a perpendicular orientation to the surface. Specialized tools and equipment may be required to ensure accurate alignment during the reinstallation process.</p>

            <h3 class="mb-1 font-semibold text-lg">5 - Channel Bolts Torqued Too High</h3>
            <p class="mb-3">Over-torquing anchor channel bolts can cause damage to the fasteners or the surrounding structure and may result in reduced clamping force or premature failure. To address this issue, it is essential to carefully inspect the affected anchor channels and bolts for signs of damage. If necessary, the over-torqued bolts can be replaced with properly torqued fasteners, and additional measures such as thread-locking compounds can be applied to prevent future over-torquing.</p>
            <img src="{{ asset('assets/applications/fix-wrong-anchor-installation.png') }}" title="Fix Wrong Anchor Installation" alt="Fix Wrong Anchor Installation">
        </div>
    </section>
@endsection