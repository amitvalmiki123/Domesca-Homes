<?php
/**
 * Defaults.php — ALL original HTML content as PHP arrays.
 *
 * This is the FALLBACK content. ACF fields override these values. When ACF is
 * not installed (or fields are empty) the site renders exactly like the
 * original HTML.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/* -------------------------------------------------------------------------
 * Landing page defaults (from ads.html)
 * ------------------------------------------------------------------------- */

function dsc_default_landing() {
	return array(
		'hero_badges'   => array(
			array( 'label' => 'Melbourne North & West' ),
			array( 'label' => 'Building Since 2013' ),
			array( 'label' => 'Fixed-Price Contracts' ),
		),
		'hero_eyebrow'  => 'Custom Home Builder &mdash; Melbourne',
		'hero_title'    => 'Build your custom home with <em class="serif-accent">confidence.</em>',
		'hero_sub'      => 'Over 10 years of experience delivering custom homes across Melbourne&rsquo;s north and west. Fixed-price contracts, quality workmanship and direct communication from start to finish &mdash; whether you have plans and permits ready, or nothing more than a vision.',
		'hero_image'    => 'exterior-new-home-facade.jpg',
		'hero_alt'      => 'A completed custom new home built by Domesca Homes in Melbourne',
		'creds'         => array(
			array( 'value' => '2013', 'label' => 'Building custom homes in Melbourne since' ),
			array( 'value' => '10+', 'label' => 'Years delivering residential construction' ),
			array( 'value' => '4&ndash;6', 'label' => 'Months to build a typical single-storey home' ),
			array( 'value' => 'Melbourne', 'label' => 'Servicing the north and west, including the Moonee Valley region' ),
		),
		'about'         => array(
			'image_a' => 'kitchen-living-pendant.jpg',
			'image_b' => 'exterior-single-storey.jpg',
			'stamp'   => '2013',
			'eyebrow' => 'New Home Construction',
			'title'   => 'Homes built to last, by a builder you can <span class="serif-accent">talk to.</span>',
			'lead'    => '<p class="lead">At Domesca Homes, we are committed to delivering high-quality construction services tailored to each client&rsquo;s unique vision and lifestyle. Specialising in new home construction, we create homes that combine timeless design, functionality, and lasting value.</p><p>No matter if you have all the plans and permits ready for construction, or if you&rsquo;re starting from the ground up with nothing more than a vision, our architect and interior designer can assist with a concept plan to suit your needs.</p>',
			'more'    => '<p>From concept through to completion, our experienced team works closely with clients, architects, and designers to ensure every detail is carefully considered and professionally executed.</p><p>We understand that building a home is one of life&rsquo;s most significant investments, which is why we prioritise clear communication, personalised service, and exceptional workmanship throughout every stage of the journey. By using premium materials and trusted building practices, we deliver homes that not only reflect your individual style but are built to stand the test of time.</p><p>We use only the best building materials, suppliers and techniques to ensure you&rsquo;re getting the highest quality finished product. When you first turn the key to your custom new home, we want it to feel like a dream come true. Whether you have every part of your home mapped out already or you need us to guide you from start to finish, we&rsquo;re happy to be a part of your new home building experience.</p>',
			'points'  => array(
				array( 'label' => 'Custom & luxury new homes' ),
				array( 'label' => 'Knockdown rebuilds' ),
				array( 'label' => 'Sloping & difficult sites' ),
				array( 'label' => 'Sustainable, energy-efficient design' ),
			),
		),
		'why'           => array(
			'eyebrow' => 'Why Build With Domesca Homes',
			'title'   => 'What you get when you build with <span class="serif-accent">us.</span>',
			'items'   => array(
				array( 'icon' => 'price', 'title' => 'Transparent fixed pricing', 'text' => 'We aim to provide clear and detailed pricing once we have reviewed your plans and project requirements. Our focus is on transparency, so you can move forward with confidence and avoid hidden surprises.' ),
				array( 'icon' => 'chat', 'title' => 'One point of contact', 'text' => 'We keep communication clear and regular throughout the build. You will be kept informed on progress, key milestones and any important decisions, so you always know how your project is tracking.' ),
				array( 'icon' => 'cart', 'title' => 'Choose your own suppliers', 'text' => 'We give you the freedom to choose materials from any supplier you prefer. We recommend trusted retailers and materials to ensure quality and reliability, and support you in selecting what you like, from where you like.' ),
				array( 'icon' => 'build', 'title' => 'Design help if you need it', 'text' => 'Bring your own plans, or work with our partner designers, architect and interior designer on a concept plan that balances functionality, style and budget.' ),
				array( 'icon' => 'check', 'title' => 'Permits & approvals guided', 'text' => 'We can help guide you through the approvals and permit process. The exact requirements depend on your project, site and local council, but we aim to make the process clear and manageable from the start.' ),
				array( 'icon' => 'shield', 'title' => 'Warranty support after handover', 'text' => 'Final inspections, comprehensive warranty support, and assistance with any adjustments or repairs needed after the project is completed.' ),
			),
		),
		'assure'        => array(
			'title'   => 'Not sure where to start? Book a free, no-obligation consultation.',
			'text'    => 'At your first consultation you discuss your project goals, site details, budget and timeline with our team. It is also your chance to ask questions and understand the next steps before moving forward.',
			'button'  => 'Book My Consultation',
		),
		'process'       => array(
			'eyebrow' => 'How We Build',
			'title'   => 'A clear path from first call to <span class="serif-accent">handover.</span>',
			'lead'    => 'Our design process begins with an initial consultation to understand your vision and requirements. We then collaborate with our partner designers to create a tailored plan, incorporating your preferences and our expertise to ensure functionality and cost-efficiency.',
			'steps'   => array(
				array( 'label' => 'Step 01', 'title' => 'Consultation', 'text' => 'Discuss your project goals, site details, budget and timeline with our team, and understand the next steps.' ),
				array( 'label' => 'Step 02', 'title' => 'Design & Planning', 'text' => 'Bring your own plans, or work with our partner designers, architect and interior designer on a concept that suits your needs.' ),
				array( 'label' => 'Step 03', 'title' => 'Approvals & Permits', 'text' => 'We guide you through the approvals and permit process for your project, site and local council.' ),
				array( 'label' => 'Step 04', 'title' => 'Construction', 'text' => 'Trades, engineers and designers coordinated under one point of contact, with regular updates on progress and milestones.' ),
				array( 'label' => 'Step 05', 'title' => 'Handover & Warranty', 'text' => 'A thorough final inspection of all aspects of the construction, any adjustments made, then the keys &mdash; backed by warranty support.' ),
			),
			'note'    => 'A single-storey home typically takes <strong>4&ndash;6 months</strong>, and a double-storey home <strong>8&ndash;12 months</strong>. These durations may vary based on the specific size and complexity of the project.',
			'button'  => 'Get My Free Quote',
		),
		'projects'      => array(
			'eyebrow' => 'Completed Works',
			'title'   => 'Homes we&rsquo;ve <span class="serif-accent">delivered.</span>',
			'lead'    => 'A selection of completed Domesca Homes new builds across Melbourne&rsquo;s north and west.',
			'items'   => array(
				array( 'image' => 'living-open-plan.jpg', 'alt' => 'Open-plan living and dining area in a completed Domesca Homes new build', 'category' => 'New Homes', 'title' => 'Open-Plan Living', 'class' => 'is-wide' ),
				array( 'image' => 'exterior-townhouse-dusk.jpg', 'alt' => 'Completed two-storey home façade in brick and render at dusk', 'category' => 'New Homes', 'title' => 'Facade at Dusk', 'class' => '' ),
				array( 'image' => 'bathroom-marble-vanity.jpg', 'alt' => 'Stone-clad ensuite with twin basins and brushed brass tapware', 'category' => 'New Homes', 'title' => 'Twin-Basin Ensuite', 'class' => '' ),
				array( 'image' => 'kitchen-dark-cabinetry.jpg', 'alt' => 'Kitchen with dark cabinetry, stone island and integrated appliances', 'category' => 'New Homes', 'title' => 'Kitchen & Island', 'class' => '' ),
				array( 'image' => 'stairwell-void.jpg', 'alt' => 'Double-height stairwell void with pendant light in a two-storey home', 'category' => 'New Homes', 'title' => 'Stairwell Void', 'class' => '' ),
				array( 'image' => 'living-sliding-doors.jpg', 'alt' => 'Living area with full-height sliding doors opening to the backyard', 'category' => 'New Homes', 'title' => 'Indoor&ndash;Outdoor Living', 'class' => 'is-half' ),
				array( 'image' => 'alfresco-outdoor.jpg', 'alt' => 'Covered alfresco entertaining area completed by Domesca Homes', 'category' => 'New Homes', 'title' => 'Alfresco Entertaining', 'class' => 'is-half' ),
				array( 'image' => 'bedroom-master.jpg', 'alt' => 'Master bedroom with built-in robes in a Domesca Homes new build', 'category' => 'New Homes', 'title' => 'Master Suite', 'class' => '' ),
				array( 'image' => 'hallway-timber.jpg', 'alt' => 'Timber-floored entry hallway with a feature door', 'category' => 'New Homes', 'title' => 'Entry Hallway', 'class' => '' ),
			),
		),
		'testimonials'  => array(
			'eyebrow' => 'Google Reviews',
			'title'   => 'What our clients <span class="serif-accent">say.</span>',
			'lead'    => 'Reviews published by Domesca Homes clients.',
			'rating'  => '0.0',
			'count'   => '00',
			'url'     => 'https://www.google.com/search?q=Domesca+Homes+Hillside',
			'foot'    => 'Whether it&rsquo;s a family home or an investment development, we take the time to understand your goals.',
			'foot_btn'=> 'Get Your Free Quote',
			'foot_url'=> '#enquiry-form',
			'items'   => array(
				array(
					'quote' => '<p>If I could give 10 stars, I would! The work completed by Hamza and his team was outstanding. From communication to the quality of the work, I could not be happier. I highly recommend Domesca Homes.</p>',
					'more' => '', 'initials' => 'R', 'avatar_bg' => '#1a73e8', 'name' => 'Rebecca Tipping', 'role' => 'Domesca Homes client',
				),
				array(
					'quote' => '<p>Literally counting our blessings for having found Hamza and Domesca Homes to build our 2 units!! For the 10 months we worked with him, work progressed very well, Hamza was super easy to talk to and communicated well regarding any issues&hellip;</p>',
					'more' => '<p>&hellip;and he was always positive of getting work done and stuck to his timelines well, managing delays with a lot of patience. His standards are high and his work is of top quality and we are super impressed by his materials and fittings. We are lucky to have a good relationship with our builder in an industry where most building experiences can be traumatic.</p>',
					'initials' => 'J', 'avatar_bg' => '#e8710a', 'name' => 'Jeena S', 'role' => '2-unit development',
				),
				array(
					'quote' => '<p>I cannot begin to express how happy we were with Domesca Homes in building our forever home. From the very beginning Hamza was amazing in terms of guiding us with everything, I cannot speak more highly of him&hellip;</p>',
					'more' => '<p>Having never built before, Hamza was awesome through the whole process, always communicated with us, very patient and provided us with advice throughout the build. He was able to build us an amazing house on time and within our budget.</p><p>The craftsmanship and eye for detail during the build by Hamza was excellent. I would highly highly recommend him to anyone looking to build their house and would not hesitate to go straight to him if I was ever building again.</p>',
					'initials' => 'J', 'avatar_bg' => '#137333', 'name' => 'Jon Siotas', 'role' => 'New home build',
				),
			),
		),
		'areas'         => array(
			'eyebrow' => 'Where We Build',
			'title'   => 'Building across Melbourne&rsquo;s north &amp; <span class="serif-accent">west.</span>',
			'prose'   => '<p class="lead">Domesca Homes primarily works across Melbourne&rsquo;s north and west, including the Moonee Valley region and surrounding areas.</p><p>Our team is based in Hillside, Victoria, and we build new homes and knockdown rebuilds throughout the surrounding suburbs.</p>',
			'list'    => array(
				array( 'label' => 'Melbourne&rsquo;s North' ),
				array( 'label' => 'Melbourne&rsquo;s West' ),
				array( 'label' => 'Moonee Valley region' ),
				array( 'label' => 'Hillside, VIC 3037' ),
			),
			'box'     => 'Outside these areas? Get in touch and we can confirm whether your project is a fit.',
			'btn1'    => 'Check Your Suburb',
			'btn2'    => 'Call 0411 526 251',
			'map'     => 'https://www.google.com/maps?q=Hillside+VIC+3037+Australia&z=11&output=embed',
		),
		'faq'           => array(
			'eyebrow' => 'Frequently Asked Questions',
			'title'   => 'Answers before you <span class="serif-accent">build.</span>',
			'aside_title' => 'Ready to start?',
			'aside_text'  => 'Share a few details about your project and our team will review your needs and respond with the next steps.',
			'items'   => array(
				array( 'question' => 'Why choose Domesca Homes for custom home building in Melbourne?', 'answer' => 'Domesca Homes has been a trusted name in Melbourne since 2013, known for delivering high-quality custom homes tailored to individual needs. Our commitment to integrity, quality workmanship, and client satisfaction sets us apart.' ),
				array( 'question' => 'What is the process for building a new home with Domesca Homes?', 'answer' => 'Your new home journey usually starts with an initial consultation, followed by design planning, approvals, and construction. Throughout the process, you stay informed and involved so your home is built to suit your needs and goals.' ),
				array( 'question' => 'How long does it take to build a house with Domesca Homes?', 'answer' => 'The time it takes to build a house with Domesca Homes depends on the type and size of the house. For a single-story home, it typically takes 4-6 months. For a double-story home, the timeframe is usually 8-12 months. These durations may vary based on the specific size and complexity of the project.' ),
				array( 'question' => 'Do you provide fixed-price quotes for building projects?', 'answer' => 'Yes, we aim to provide clear and detailed pricing once we have reviewed your plans and project requirements. Our focus is on transparency, so you can move forward with confidence and avoid hidden surprises.' ),
				array( 'question' => 'Do you build knockdown rebuild projects?', 'answer' => 'Yes. If your current home no longer suits your needs, we can help you explore a knockdown rebuild. We will assess the site, discuss your design options and guide you through the process from planning through to handover.' ),
				array( 'question' => 'Can Domesca Homes build on a sloping or difficult site?', 'answer' => 'Yes, we can assess challenging sites and advise on the most suitable building approach. Every site is different, so we review the conditions carefully before recommending a practical solution for your project.' ),
				array( 'question' => 'How can customers bring their own designs and plans to Domesca Homes?', 'answer' => 'Customers can bring their own designs and plans to Domesca Homes by scheduling a consultation with our team. We will review the designs, discuss the vision, and provide expert advice to ensure the project aligns with their goals. Our team is dedicated to bringing your vision to life and building a home that meets your expectations.' ),
				array( 'question' => 'How does Domesca Homes ensure that the design meets my budget?', 'answer' => 'We work closely with you to understand your budget and provide cost-effective solutions without compromising on quality. Our team reviews every aspect of the design to ensure it aligns with your financial goals.' ),
				array( 'question' => 'Can Domesca Homes help with sustainable and eco-friendly home designs?', 'answer' => 'Yes, we specialize in sustainable home designs. Our team can incorporate eco-friendly materials, energy-efficient solutions, and sustainable practices into your home design to reduce environmental impact and save on long-term costs.' ),
				array( 'question' => 'Can I make changes to the design during the planning phase?', 'answer' => 'Absolutely! We encourage client input throughout the planning phase. Our team is flexible and will work with you to make adjustments to the design to ensure it meets your expectations.' ),
				array( 'question' => 'Can clients choose materials from any supplier when building with Domesca Homes?', 'answer' => 'Yes, at Domesca Homes, we provide our clients the freedom to choose materials from any supplier they prefer. While we recommend trusted retailers and materials to ensure quality and reliability, we respect our clients&rsquo; choices and support them in selecting what they like from where they like.' ),
				array( 'question' => 'What can you expect at your first consultation?', 'answer' => 'At your first consultation, you discuss your project goals, site details, budget, and timeline with the Domesca Homes team. It is also your chance to ask questions and understand the next steps before moving forward.' ),
				array( 'question' => 'Do you help with council approvals and building permits?', 'answer' => 'Yes, we can help guide you through the approvals and permit process. The exact requirements depend on your project, site and local council, but we aim to make the process clear and manageable from the start.' ),
				array( 'question' => 'Which Melbourne areas do you work in?', 'answer' => 'Domesca Homes primarily works across Melbourne&rsquo;s north and west, including Moonee Valley region and surrounding areas. If you are outside these areas, get in touch and we can confirm whether your project is a fit.' ),
				array( 'question' => 'Does Domesca Homes provide warranty support?', 'answer' => 'Yes, Domesca Homes offers comprehensive warranty support to address any issues that may arise after construction. Our team is committed to ensuring your satisfaction and the quality of your home.' ),
			),
		),
		'cta'           => array(
			'eyebrow' => 'Get In Touch With Us Today',
			'title'   => 'Let&rsquo;s build something you&rsquo;ll be proud of for <span class="serif-accent">decades.</span>',
			'sub'     => 'Whether you have all the plans and permits ready for construction, or nothing more than a vision, our team can help you take the next step.',
			'image'   => 'kitchen-white-island.jpg',
			'form_eyebrow' => 'Enquire Online',
			'form_title'   => 'Request Your Free Quote',
			'form_text'    => 'Tell us what you&rsquo;re planning and we&rsquo;ll come back to you with the next steps.',
		),
		'enquiry_types' => array( 'New home construction', 'Knockdown rebuild', 'Custom / luxury home', 'Not sure yet' ),
		'enquiry_stages'=> array(
			'I have plans and permits ready',
			'I have plans, but no permits yet',
			'I have land, but no plans yet',
			"I'm still looking for land",
			'I have a home to knock down and rebuild',
			'Just starting to research',
		),
	);
}

/**
 * Defaults used by the index.html "home page" template.
 */
function dsc_default_home() {
	return array(
		'hero_badges' => array(
			array( 'label' => 'Melbourne North & West' ),
			array( 'label' => 'Established 2013' ),
			array( 'label' => 'Fixed-Price Contracts' ),
		),
		'hero_title' => 'Build with <em class="serif-accent">confidence.</em>',
		'hero_sub'   => 'Over 10 years of experience delivering custom homes, extensions, renovations and townhouse developments across Melbourne. Fixed-price contracts, quality workmanship and direct communication from start to finish.',
		'hero_image' => 'exterior-new-home-facade.jpg',
		'about'      => array(
			'image_a' => 'hallway-timber.jpg',
			'image_b' => 'alfresco-outdoor.jpg',
			'stamp'   => '2013',
			'eyebrow' => 'About Domesca Homes',
			'title'   => 'Quality over quantity, on every&nbsp;project.',
			'lead'    => '<p class="lead">Founded in 2013, Domesca Homes is a Melbourne-based building company specialising in custom homes, renovations, knockdown rebuilds, and multi-unit developments across Melbourne&rsquo;s north and west.</p><p>We were established to meet the growing demand for reliable, high-quality residential construction delivered with clear communication, strong project management, and consistent results.</p>',
			'more'    => '<p>At Domesca Homes, we focus on quality over quantity. Every project is managed with care from pre-construction through to completion, ensuring attention to detail, transparency, and a smooth building experience for our clients.</p><p>We understand the trust involved in building &mdash; whether it&rsquo;s a family home or an investment development. That&rsquo;s why we take the time to understand your goals, communicate openly, and deliver work that meets both your expectations and industry standards.</p><p>Our team works closely with homeowners, investors, and developers to deliver practical building solutions that achieve strong outcomes. From concept through to completion, we are committed to making the process straightforward, professional, and well-managed.</p><p>Explore our services to learn more about how we can help bring your project to life.</p>',
			'points'  => array(
				array( 'label' => 'Custom & luxury new homes' ),
				array( 'label' => 'Townhouse & multi-unit developments' ),
				array( 'label' => 'Renovations & extensions' ),
				array( 'label' => 'Knockdown rebuilds' ),
			),
		),
		'services'   => array(
			array(
				'url'    => home_url( '/our-plans/' ),
				'title'  => 'Our Plans',
				'image'  => 'living-open-plan.jpg',
				'number' => '01 / Design',
				'text'   => 'Bring us your own designs and plans, or start from nothing more than a vision &mdash; our architect and interior designer can assist with a concept plan to suit your needs.',
				'more'   => '<p>We collaborate with our partner designers to create a design that is both efficient and tailored to your needs. Our team ensures that every aspect of the design is optimized for your budget and lifestyle.</p><p>We stay updated with the latest design trends and incorporate them into our projects. Whether you prefer a contemporary, minimalist, or traditional style, we ensure your home reflects modern aesthetics while meeting your personal preferences.</p><p>We also specialise in sustainable home designs, incorporating eco-friendly materials, energy-efficient solutions, and sustainable practices to reduce environmental impact and save on long-term costs.</p>',
				'tags'   => array(
					array( 'label' => 'Concept plans' ),
					array( 'label' => 'Partner designers' ),
					array( 'label' => 'Bring your own plans' ),
					array( 'label' => 'Sustainable design' ),
				),
			),
			array(
				'url'    => home_url( '/new-builds/' ),
				'title'  => 'New Builds',
				'image'  => 'exterior-single-storey.jpg',
				'number' => '02 / New Homes',
				'text'   => 'We are committed to delivering high-quality construction services tailored to each client&rsquo;s unique vision and lifestyle, creating homes that combine timeless design, functionality, and lasting value.',
				'more'   => '<p>From concept through to completion, our experienced team works closely with clients, architects, and designers to ensure every detail is carefully considered and professionally executed.</p><p>We understand that building a home is one of life&rsquo;s most significant investments, which is why we prioritise clear communication, personalised service, and exceptional workmanship throughout every stage of the journey.</p>',
				'tags'   => array(
					array( 'label' => 'Custom homes' ),
					array( 'label' => 'Luxury homes' ),
					array( 'label' => 'Knockdown rebuild' ),
					array( 'label' => 'Sloping sites' ),
				),
			),
			array(
				'url'    => home_url( '/townhouse-developments/' ),
				'title'  => 'Townhouse Developments',
				'image'  => 'exterior-townhouse-dusk.jpg',
				'number' => '03 / Developments',
				'text'   => 'We deliver townhouse developments for landowners, developers and investors with a focus on approvals, consultants and trades coordinated under one point of contact.',
				'more'   => '<p>Our team works closely with you from early planning through to completion, including council development applications, engineering, landscape and interior design.</p>',
				'tags'   => array(
					array( 'label' => 'Townhouses' ),
					array( 'label' => 'Duplex' ),
					array( 'label' => 'Developers & investors' ),
					array( 'label' => 'Small-scale residential' ),
				),
			),
			array(
				'url'    => home_url( '/multi-unit-projects/' ),
				'title'  => 'Multi-Unit Projects',
				'image'  => 'exterior-townhouse-brick.jpg',
				'number' => '04 / Developments',
				'text'   => 'A trusted partner on larger projects &mdash; unit and small-scale residential developments delivered with efficient planning, strong project management and attention to detail.',
				'more'   => '<p>We take on townhouse, unit and small-scale residential developments, managing council approvals, engineering and trades under one point of contact.</p>',
				'tags'   => array(
					array( 'label' => 'Unit developments' ),
					array( 'label' => 'Multi-unit' ),
					array( 'label' => 'Developers' ),
					array( 'label' => 'Investors' ),
				),
			),
			array(
				'url'    => home_url( '/extensions/' ),
				'title'  => 'Extensions',
				'image'  => 'living-sliding-doors.jpg',
				'number' => '05 / Extensions',
				'text'   => 'Add extra bedrooms, bathrooms, living areas and storage while keeping the home and neighbourhood you love.',
				'more'   => '<p>From concept planning through to construction, we focus on seamless results that complement your existing home while elevating its overall style and value.</p>',
				'tags'   => array(
					array( 'label' => 'Bedrooms & bathrooms' ),
					array( 'label' => 'Living areas' ),
					array( 'label' => 'Built-in robes' ),
					array( 'label' => 'Council approvals guided' ),
				),
			),
			array(
				'url'    => home_url( '/renovations/' ),
				'title'  => 'Renovations',
				'image'  => 'kitchen-island-stone.jpg',
				'number' => '06 / Renovations',
				'text'   => 'Turn your old home into your dream home &mdash; kitchen, bathroom, laundry or whole-of-house renovations.',
				'more'   => '<p>Our renovation and extension process starts with an initial consultation and site review, then we confirm the scope and guide you through planning, approvals and construction through to completion.</p>',
				'tags'   => array(
					array( 'label' => 'Kitchens' ),
					array( 'label' => 'Bathrooms' ),
					array( 'label' => 'Laundries' ),
					array( 'label' => 'Whole of house' ),
				),
			),
		),
		'plans'      => array(
			'eyebrow'     => 'Our Plans',
			'title'       => 'Your plans, or ours &mdash; either way we <span class="serif-accent">build it.</span>',
			'lead'        => '<p class="lead">No matter if you have all the plans and permits ready for construction, or if you&rsquo;re starting from the ground up with nothing more than a vision, our architect and interior designer can assist with a concept plan to suit your needs.</p>',
			'more'        => '<p>Customers can bring their own designs and plans to Domesca Homes by scheduling a consultation with our team. We will review the designs, discuss the vision, and provide expert advice to ensure the project aligns with their goals.</p><p>Our design process begins with an initial consultation to understand your vision and requirements. We then collaborate with our partner designers to create a tailored plan, incorporating your preferences and our expertise to ensure functionality and cost-efficiency. Our partner designers bring their expertise to create innovative and functional designs tailored to your needs.</p><p>We encourage client input throughout the planning phase. Our team is flexible and will work with you to make adjustments to the design to ensure it meets your expectations.</p>',
			'more_label'  => 'Read more about our design process',
			'routes'      => array(
				array( 'icon' => 'plans', 'title' => 'You already have plans', 'text' => 'Book a consultation and we&rsquo;ll review your designs, discuss the vision, and give you expert advice to make sure the project aligns with your goals.' ),
				array( 'icon' => 'pencil', 'title' => 'You&rsquo;re starting from scratch', 'text' => 'Our architect and interior designer can prepare a concept plan to suit your needs, your budget and how you want to live.' ),
			),
			'image'       => 'hallway-timber.jpg',
			'alt'         => 'Timber-floored entry hallway with a feature door in a Domesca Homes build',
			'stamp'       => 'Design',
			'stamp_text'  => 'Concept to keys',
		),
		'why'        => array(
			'eyebrow' => 'Why Build With Domesca Homes',
			'title'   => 'A builder you can <span class="serif-accent">talk to.</span>',
			'image'   => 'kitchen-living-pendant.jpg',
			'items'   => array(
				array( 'number' => '01', 'title' => 'Quality over quantity', 'text' => 'Every project is managed with care from pre-construction through to completion, ensuring attention to detail, transparency, and a smooth building experience.' ),
				array( 'number' => '02', 'title' => 'Clear, direct communication', 'text' => 'We keep communication clear and regular throughout the build. You will be kept informed on progress, key milestones and any important decisions, so you always know how your project is tracking.' ),
				array( 'number' => '03', 'title' => 'Transparent fixed pricing', 'text' => 'We aim to provide clear and detailed pricing once we have reviewed your plans and project requirements. Our focus is on transparency, so you can move forward with confidence and avoid hidden surprises.' ),
				array( 'number' => '04', 'title' => 'Choose your own suppliers', 'text' => 'We give clients the freedom to choose materials from any supplier they prefer. We recommend trusted retailers and materials to ensure quality and reliability.' ),
				array( 'number' => '05', 'title' => 'Difficult sites welcome', 'text' => 'We can assess challenging sites and advise on the most suitable building approach. Every site is different, so we review the conditions carefully before recommending a practical solution.' ),
				array( 'number' => '06', 'title' => 'Support after handover', 'text' => 'Final inspections, warranty support, and assistance with any adjustments or repairs needed after the project is completed &mdash; our team resolves post-construction concerns promptly.' ),
			),
			'btn1'    => 'Book Your Free Consultation',
			'btn1_url' => '#banner-form',
			'btn2'    => 'Call 0411 526 251',
			'btn2_url' => 'tel:+61411526251',
			'note'    => "Servicing Melbourne’s north & west.",
		),
		'developers' => array(
			'eyebrow'    => 'For Developers & Investors',
			'title'      => 'Multi-unit builder for developers & <span class="serif-accent">investors.</span>',
			'prose'      => '<p class="lead">As a developer or investor, you need a builder who delivers certainty &mdash; on cost, timelines, and quality. At Domesca Homes, we specialise in multi-unit, townhouse, and small-scale residential developments across Melbourne.</p><p>We work closely with you from early planning through to completion to ensure your project is delivered efficiently, professionally, and with strong attention to detail. Our focus is simple: practical construction solutions that help you maximise your return while reducing risk.</p><p>We understand that successful developments rely on clear communication, realistic planning, and proactive problem-solving. That&rsquo;s exactly how we operate on every project.</p>',
			'list'       => array(
				array( 'label' => 'Council development applications through to approval' ),
				array( 'label' => 'Coordination with town planners and building consultants' ),
				array( 'label' => 'Engineering services including structural, civil, acoustic, environmental and hydraulic' ),
				array( 'label' => 'Heritage, bushfire, arboricultural and biodiversity reports' ),
				array( 'label' => 'Architectural and building design coordination' ),
				array( 'label' => 'Interior and landscape design collaboration' ),
			),
			'assist_title' => 'What we can assist with',
			'badge_title'  => 'Duplex, townhouse & multi-unit',
			'badge_text'   => 'Small-scale residential developments across Melbourne',
			'image'        => 'interior-open-plan-handover.jpg',
			'button'       => 'Talk to Us About Your Site',
			'url'          => '#banner-form',
		),
		'faq'        => array(
			'eyebrow' => 'Frequently Asked Questions',
			'title'   => 'Answers before you <span class="serif-accent">build.</span>',
			'aside_title' => 'Ready to start?',
			'aside_text'  => 'Share a few details about your project and our team will review your needs and respond with the next steps.',
			'tabs'    => array(
				array( 'id' => 'f1', 'label' => 'Design & Planning', 'items' => dsc_home_faq_design() ),
				array( 'id' => 'f2', 'label' => 'Home Building & Developments', 'items' => dsc_home_faq_build() ),
				array( 'id' => 'f3', 'label' => 'Renovations & Extensions', 'items' => dsc_home_faq_reno() ),
				array( 'id' => 'f4', 'label' => 'Project Enquiries', 'items' => dsc_home_faq_enquiries() ),
				array( 'id' => 'f5', 'label' => 'Permits & Approvals', 'items' => dsc_home_faq_permits() ),
				array( 'id' => 'f6', 'label' => 'Post-Construction', 'items' => dsc_home_faq_post() ),
				array( 'id' => 'f7', 'label' => 'Service Areas', 'items' => dsc_home_faq_areas() ),
			),
		),
	);
}

function dsc_home_faq_design() {
	return array(
		array( 'question' => 'How does Domesca Homes assist in designing homes and saving costs?', 'answer' => 'Domesca Homes offers expert guidance in designing homes by providing input on functionality and cost-saving measures. We collaborate with our partner designers to create a design that is both efficient and tailored to your needs.' ),
		array( 'question' => 'What is the process for designing a custom home with Domesca Homes?', 'answer' => 'Our design process begins with an initial consultation to understand your vision and requirements. We then collaborate with our partner designers to create a tailored plan, incorporating your preferences and our expertise to ensure functionality and cost-efficiency.' ),
		array( 'question' => 'How can customers bring their own designs and plans to Domesca Homes?', 'answer' => 'Customers can bring their own designs and plans to Domesca Homes by scheduling a consultation with our team. We will review the designs, discuss the vision, and provide expert advice to ensure the project aligns with their goals.' ),
		array( 'question' => 'Can Domesca Homes help with sustainable and eco-friendly home designs?', 'answer' => 'Yes, we specialize in sustainable home designs. Our team can incorporate eco-friendly materials, energy-efficient solutions, and sustainable practices into your home design to reduce environmental impact and save on long-term costs.' ),
		array( 'question' => 'How does Domesca Homes ensure that the design meets my budget?', 'answer' => 'We work closely with you to understand your budget and provide cost-effective solutions without compromising on quality. Our team reviews every aspect of the design to ensure it aligns with your financial goals.' ),
		array( 'question' => 'Can I make changes to the design during the planning phase?', 'answer' => 'Absolutely! We encourage client input throughout the planning phase. Our team is flexible and will work with you to make adjustments to the design to ensure it meets your expectations.' ),
	);
}

function dsc_home_faq_build() {
	return array(
		array( 'question' => 'Why choose Domesca Homes for custom home building in Melbourne?', 'answer' => 'Domesca Homes has been a trusted name in Melbourne since 2013, known for delivering high-quality custom homes tailored to individual needs. Our commitment to integrity, quality workmanship, and client satisfaction sets us apart.' ),
		array( 'question' => 'What is the process for building a new home with Domesca Homes?', 'answer' => 'Your new home journey usually starts with an initial consultation, followed by design planning, approvals, and construction. Throughout the process, you stay informed and involved so your home is built to suit your needs and goals.' ),
		array( 'question' => 'Do you build townhouses and multi-unit developments?', 'answer' => 'Yes. Domesca Homes works on townhouse and multi-unit projects for developers, investors, and landowners in Melbourne. We can help you assess the site, review the scope, and plan a build that suits your goals and budget.' ),
		array( 'question' => 'How long does it take to build a house with Domesca Homes?', 'answer' => 'For a single-story home it typically takes 4-6 months. For a double-story home, the timeframe is usually 8-12 months. These durations may vary based on the specific size and complexity of the project.' ),
		array( 'question' => 'Do you build knockdown rebuild projects?', 'answer' => 'Yes. If your current home no longer suits your needs, we can help you explore a knockdown rebuild. We will assess the site, discuss your design options and guide you through the process from planning through to handover.' ),
		array( 'question' => 'Can Domesca Homes build on a sloping or difficult site?', 'answer' => 'Yes, we can assess challenging sites and advise on the most suitable building approach. Every site is different, so we review the conditions carefully before recommending a practical solution for your project.' ),
	);
}

function dsc_home_faq_reno() {
	return array(
		array( 'question' => 'Can you help with home renovations and extensions?', 'answer' => 'Yes. Domesca Homes takes on renovation and extension projects across Melbourne. We work with you to understand your needs, improve the layout and function of your home, and deliver a result that suits your property and lifestyle.' ),
		array( 'question' => 'What is the process for a renovation or extension project?', 'answer' => 'Our renovation and extension process starts with an initial consultation and site review. From there, we discuss your ideas, confirm the scope, and guide you through planning, approvals and construction through to completion.' ),
	);
}

function dsc_home_faq_enquiries() {
	return array(
		array( 'question' => 'How can you request a quote from Domesca Homes?', 'answer' => 'You can request a quote by sending an enquiry through the Domesca Homes website. Share a few details about your project, and the team will review your needs and respond with the next steps.' ),
		array( 'question' => 'Do you provide fixed-price quotes for building projects?', 'answer' => 'Yes, we aim to provide clear and detailed pricing once we have reviewed your plans and project requirements. Our focus is on transparency, so you can move forward with confidence and avoid hidden surprises.' ),
		array( 'question' => 'What can you expect at your first consultation?', 'answer' => 'At your first consultation, you discuss your project goals, site details, budget, and timeline with the Domesca Homes team. It is also your chance to ask questions and understand the next steps before moving forward.' ),
		array( 'question' => 'How will Domesca Homes keep me updated during my project?', 'answer' => 'We keep communication clear and regular throughout the build. You will be kept informed on progress, key milestones and any important decisions, so you always know how your project is tracking.' ),
	);
}

function dsc_home_faq_permits() {
	return array(
		array( 'question' => 'Do you help with council approvals and building permits?', 'answer' => 'Yes, we can help guide you through the approvals and permit process. The exact requirements depend on your project, site and local council, but we aim to make the process clear and manageable from the start.' ),
		array( 'question' => 'Will Domesca Homes coordinate consultants and approvals for larger projects?', 'answer' => 'Yes. For townhouse, unit and small-scale residential developments we coordinate council approvals, town planners, building consultants, engineering and trades under one point of contact.' ),
	);
}

function dsc_home_faq_post() {
	return array(
		array( 'question' => 'What post-construction services does Domesca Homes offer?', 'answer' => 'Domesca Homes provides a range of post-construction services, including final inspections, warranty support, and assistance with any adjustments or repairs needed after the project is completed.' ),
		array( 'question' => 'What is included in Domesca Homes final inspection process?', 'answer' => 'Our final inspection process includes a thorough review of all aspects of the construction to ensure everything meets our high standards. We address any concerns and make necessary adjustments before handing over the keys.' ),
		array( 'question' => 'How does Domesca Homes address post-construction concerns?', 'answer' => 'Domesca Homes is committed to ensuring that all post-construction concerns are addressed promptly and to the highest standard. Our team works diligently to resolve any issues and ensure your complete satisfaction with your new home.' ),
		array( 'question' => 'Does Domesca Homes provide warranty support?', 'answer' => 'Yes, Domesca Homes offers comprehensive warranty support to address any issues that may arise after construction. Our team is committed to ensuring your satisfaction and the quality of your home.' ),
	);
}

function dsc_home_faq_areas() {
	return array(
		array( 'question' => 'Which Melbourne areas do you work in?', 'answer' => 'Domesca Homes primarily works across Melbourne&rsquo;s north and west, including Moonee Valley region and surrounding areas. If you are outside these areas, get in touch and we can confirm whether your project is a fit.' ),
	);
}
