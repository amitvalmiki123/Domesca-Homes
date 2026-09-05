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
				array( 'icon' => 'shield', 'title' => 'Warranty support after handover', 'text' => 'Final inspections, warranty support, and assistance with any adjustments or repairs needed after the project is completed &mdash; our team resolves post-construction concerns promptly.' ),
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
			'eyebrow' => 'Testimonials',
			'title'   => 'What our clients <span class="serif-accent">say.</span>',
			'lead'    => 'Real reviews from homeowners and developers across Melbourne who built with Domesca Homes.',
			'items'   => array(
				array(
					'quote'   => 'Amit and the Domesca Homes team were great to work with on our new home build. The communication was excellent from day one, and the quality of the finish exceeded our expectations. Would highly recommend.',
					'author'  => 'Rebecca Tipping',
					'meta'    => 'New Home Build &bull; Melbourne',
					'rating'  => 5,
				),
				array(
					'quote'   => 'We engaged Domesca Homes for our 2-unit townhouse development. Amit was proactive with council requirements and kept the build moving on schedule. Very professional and straightforward to deal with.',
					'author'  => 'Jeena S',
					'meta'    => '2-Unit Development &bull; Melbourne West',
					'rating'  => 5,
				),
				array(
					'quote'   => 'From the initial design consultation through to handover, Domesca Homes delivered exactly what was promised. Having a single point of contact made the entire process stress-free.',
					'author'  => 'Jon Siotas',
					'meta'    => 'Custom New Build &bull; Melbourne North',
					'rating'  => 5,
				),
			),
		),
		'areas'         => array(
			'eyebrow' => 'Service Area',
			'title'   => 'Building across Melbourne&rsquo;s north &amp; <span class="serif-accent">west.</span>',
			'lead'    => 'Based in Hillside, Victoria, we build across Melbourne&rsquo;s north and west suburbs, including Moonee Valley and surrounding regions.',
			'map_url' => 'https://www.google.com/maps?q=Hillside+VIC+3037+Australia&z=11&output=embed',
			'suburbs' => array(
				'Hillside', 'Moonee Valley', 'Essendon', 'Keilor', 'Taylors Lakes',
				'Caroline Springs', 'Maribyrnong', 'Sunbury', 'Strathmore', 'Pascoe Vale',
				'Airport West', 'Avondale Heights', 'Niddrie', 'Coburg', 'Brunswick',
			),
		),
		'faq'           => array(
			'eyebrow' => 'Frequently Asked Questions',
			'title'   => 'Answers before you <span class="serif-accent">build.</span>',
			'lead'    => 'Got a question about building with Domesca Homes? Here are answers to the questions we hear most often.',
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
				array( 'question' => 'Do you help with council approvals and building permits?', 'answer' => 'Yes, we can help guide you through the approvals and permit process. The exact requirements depend on your project, site and local council, but we aim to make the process clear and manageable from the start.' ),
				array( 'question' => 'Which Melbourne areas do you work in?', 'answer' => 'Domesca Homes primarily works across Melbourne&rsquo;s north and west, including Moonee Valley region and surrounding areas. If you are outside these areas, get in touch and we can confirm whether your project is a fit.' ),
			),
		),
		'cta'           => array(
			'eyebrow'      => 'Get In Touch With Us Today',
			'title'        => 'Let&rsquo;s build something you&rsquo;ll be proud of for <span class="serif-accent">decades.</span>',
			'sub'          => 'Whether you have all the plans and permits ready for construction, or nothing more than a vision, our team can help you take the next step.',
			'image'        => 'kitchen-white-island.jpg',
			'form_eyebrow' => 'Enquire Online',
			'form_title'   => 'Request Your Free Quote',
			'form_text'    => 'Tell us what you&rsquo;re planning and we&rsquo;ll come back to you with the next steps.',
		),
		'enquiry_types' => array(
			'New home construction', 'Townhouse development', 'Unit development',
			'Knockdown rebuild', 'Renovation or extension', 'Kitchen renovation',
			'Bathroom renovation', 'Laundry renovation', 'Not sure yet'
		),
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
		'services'   => array(
			array(
				'title'  => 'New Home Construction',
				'image'  => 'exterior-single-storey.jpg',
				'number' => '01 / New Homes',
				'text'   => 'We are committed to delivering high-quality construction services tailored to each client&rsquo;s unique vision and lifestyle. Specialising in new home construction, we create homes that combine timeless design, functionality, and lasting value.',
				'link'   => 'new-builds.html',
				'tags'   => array(
					array( 'label' => 'Custom homes' ),
					array( 'label' => 'Luxury homes' ),
					array( 'label' => 'Knockdown rebuild' ),
					array( 'label' => 'Sloping sites' ),
				),
			),
			array(
				'title'  => 'Multi-Unit Developments',
				'image'  => 'exterior-townhouse-dusk.jpg',
				'number' => '02 / Developments',
				'text'   => 'We are a trusted partner in delivering high-quality multi-unit developments with efficiency, precision, and professionalism &mdash; taking a proactive approach to planning, communication, and project management.',
				'link'   => 'multi-unit-projects.html',
				'tags'   => array(
					array( 'label' => 'Townhouses' ),
					array( 'label' => 'Unit developments' ),
					array( 'label' => 'Duplex' ),
					array( 'label' => 'Developers & investors' ),
				),
			),
			array(
				'title'  => 'Renovations & Extensions',
				'image'  => 'kitchen-island-stone.jpg',
				'number' => '03 / Renovations',
				'text'   => 'Looking to transform your home? We specialise in high-quality renovations and extensions designed to enhance the way you live &mdash; modernising your space, improving functionality, or expanding your home.',
				'link'   => 'renovations.html',
				'tags'   => array(
					array( 'label' => 'Kitchens' ),
					array( 'label' => 'Bathrooms' ),
					array( 'label' => 'Laundries' ),
					array( 'label' => 'House extensions' ),
				),
			),
		),
		'projects'   => array(
			'eyebrow' => 'Our Projects &mdash; Completed Works',
			'title'   => 'Homes, townhouses and renovations we&rsquo;ve <span class="serif-accent">delivered.</span>',
			'lead'    => 'A selection of completed Domesca Homes projects across Melbourne &mdash; new builds, townhouse and unit developments, and full renovations.',
			'filters' => array(
				'all'          => 'All Projects',
				'new-homes'    => 'New Homes',
				'developments' => 'Townhouses & Units',
				'renovations'  => 'Renovations & Extensions',
				'kitchens'     => 'Kitchens',
				'bathrooms'    => 'Bathrooms',
			),
			'items'   => array(
				array( 'image' => 'kitchen-living-pendant.jpg', 'alt' => 'Open-plan kitchen and living area with feature pendant lighting in a Domesca Homes new build', 'cat' => 'New Homes', 'filters' => 'new-homes kitchens', 'title' => 'Open-Plan Kitchen & Living', 'class' => 'is-wide' ),
				array( 'image' => 'bathroom-marble-vanity.jpg', 'alt' => 'Stone-clad bathroom with twin basins and brushed brass tapware', 'cat' => 'Bathrooms', 'filters' => 'bathrooms renovations', 'title' => 'Twin-Basin Ensuite', 'class' => '' ),
				array( 'image' => 'exterior-townhouse-dusk.jpg', 'alt' => 'Two-storey townhouse development façade in brick and render at dusk', 'cat' => 'Townhouses & Units', 'filters' => 'developments', 'title' => 'Townhouse Development', 'class' => '' ),
				array( 'image' => 'kitchen-dark-cabinetry.jpg', 'alt' => 'Kitchen with dark cabinetry, stone island and integrated appliances', 'cat' => 'Kitchens', 'filters' => 'kitchens new-homes', 'title' => 'Dark Cabinetry & Stone', 'class' => '' ),
				array( 'image' => 'living-teal-lounge.jpg', 'alt' => 'Living room with large window, media wall and contemporary furnishings', 'cat' => 'New Homes', 'filters' => 'new-homes', 'title' => 'Family Living Zone', 'class' => '' ),
				array( 'image' => 'exterior-brick-garage.jpg', 'alt' => 'Renovated brick home exterior with new garage door and stone driveway', 'cat' => 'Renovations & Extensions', 'filters' => 'renovations', 'title' => 'Exterior Renovation', 'class' => 'is-half' ),
				array( 'image' => 'living-sliding-doors.jpg', 'alt' => 'Living area with full-height sliding doors opening to the backyard', 'cat' => 'New Homes', 'filters' => 'new-homes', 'title' => 'Indoor&ndash;Outdoor Living', 'class' => 'is-half' ),
				array( 'image' => 'bathroom-freestanding-bath.jpg', 'alt' => 'Bathroom renovation with freestanding bath and frameless glass shower', 'cat' => 'Bathrooms', 'filters' => 'bathrooms renovations', 'title' => 'Freestanding Bath', 'class' => '' ),
				array( 'image' => 'laundry-cabinetry.jpg', 'alt' => 'Laundry renovation with custom cabinetry and stone benchtop', 'cat' => 'Renovations & Extensions', 'filters' => 'renovations', 'title' => 'Laundry Renovation', 'class' => '' ),
			),
		),
	);
}

/**
 * Google Reviews dataset used by inner templates.
 */
function dsc_default_grev() {
	return array(
		'score'       => '5.0',
		'count'       => '15+',
		'review_link' => 'https://www.google.com/search?q=domesca+homes+melbourne',
		'reviews'     => array(
			array(
				'initial'  => 'R',
				'color'    => '#1a73e8',
				'name'     => 'Rebecca Tipping',
				'role'     => 'Domesca Homes client',
				'quote'    => 'Amit and the Domesca Homes team were great to work with on our new home build. The communication was excellent from day one, and the quality of the finish exceeded our expectations. Would highly recommend.',
			),
			array(
				'initial'  => 'J',
				'color'    => '#e8710a',
				'name'     => 'Jeena S',
				'role'     => '2-unit development',
				'quote'    => 'We engaged Domesca Homes for our 2-unit townhouse development. Amit was proactive with council requirements and kept the build moving on schedule. Very professional and straightforward to deal with.',
			),
			array(
				'initial'  => 'J',
				'color'    => '#137333',
				'name'     => 'Jon Siotas',
				'role'     => 'New home build',
				'quote'    => 'From the initial design consultation through to handover, Domesca Homes delivered exactly what was promised. Having a single point of contact made the entire process stress-free.',
			),
		),
	);
}
