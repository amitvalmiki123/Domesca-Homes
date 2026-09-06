<?php
/**
 * Defaults for Domesca inner pages (converted from origin/main HTML).
 *
 * These are FALLBACK sections only. ACF fields on the Domesca Inner
 * Page template override them; the theme still renders like the original
 * HTML when ACF is empty/not installed.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

function dsc_inner_portfolio() {
	return array(
		'filters' => array(
    array(
      'key' => 'all',
      'label' => 'All Projects'
    ),
    array(
      'key' => 'new-homes',
      'label' => 'New Builds'
    ),
    array(
      'key' => 'developments',
      'label' => 'Townhouses & Units'
    ),
    array(
      'key' => 'renovations',
      'label' => 'Renovations & Extensions'
    ),
    array(
      'key' => 'kitchens',
      'label' => 'Kitchens'
    ),
    array(
      'key' => 'bathrooms',
      'label' => 'Bathrooms'
    )
  ),
		'items' => array(
    array(
      'image' => 'kitchen-living-pendant.jpg',
      'alt' => 'Open-plan kitchen and living area with feature pendant lighting in a Domesca Homes new build',
      'category' => 'New Homes',
      'filters' => 'new-homes kitchens',
      'title' => 'Open-Plan Kitchen & Living',
      'class' => 'is-wide'
    ),
    array(
      'image' => 'bathroom-marble-vanity.jpg',
      'alt' => 'Stone-clad bathroom with twin basins and brushed brass tapware',
      'category' => 'Bathrooms',
      'filters' => 'bathrooms renovations',
      'title' => 'Twin-Basin Ensuite',
      'class' => ''
    ),
    array(
      'image' => 'exterior-townhouse-dusk.jpg',
      'alt' => 'Two-storey townhouse development façade in brick and render at dusk',
      'category' => 'Townhouses & Units',
      'filters' => 'developments',
      'title' => 'Townhouse Development',
      'class' => ''
    ),
    array(
      'image' => 'kitchen-dark-cabinetry.jpg',
      'alt' => 'Kitchen with dark cabinetry, stone island and integrated appliances',
      'category' => 'Kitchens',
      'filters' => 'kitchens new-homes',
      'title' => 'Dark Cabinetry & Stone',
      'class' => ''
    ),
    array(
      'image' => 'living-teal-lounge.jpg',
      'alt' => 'Living room with large window, media wall and contemporary furnishings',
      'category' => 'New Homes',
      'filters' => 'new-homes',
      'title' => 'Family Living Zone',
      'class' => ''
    ),
    array(
      'image' => 'exterior-brick-garage.jpg',
      'alt' => 'Renovated brick home exterior with new garage door and stone driveway',
      'category' => 'Renovations & Extensions',
      'filters' => 'renovations',
      'title' => 'Exterior Renovation',
      'class' => 'is-half'
    ),
    array(
      'image' => 'living-sliding-doors.jpg',
      'alt' => 'Living area with full-height sliding doors opening to the backyard',
      'category' => 'New Homes',
      'filters' => 'new-homes',
      'title' => 'Indoor–Outdoor Living',
      'class' => 'is-half'
    ),
    array(
      'image' => 'bathroom-freestanding-bath.jpg',
      'alt' => 'Bathroom renovation with freestanding bath and frameless glass shower',
      'category' => 'Bathrooms',
      'filters' => 'bathrooms renovations',
      'title' => 'Freestanding Bath',
      'class' => ''
    ),
    array(
      'image' => 'laundry-cabinetry.jpg',
      'alt' => 'Laundry renovation with custom cabinetry and stone benchtop',
      'category' => 'Renovations & Extensions',
      'filters' => 'renovations',
      'title' => 'Laundry Renovation',
      'class' => ''
    ),
    array(
      'image' => 'kitchen-butlers-pantry.jpg',
      'alt' => 'Kitchen with butler\'s pantry, dark overhead cabinetry and window splashback',
      'category' => 'Kitchens',
      'filters' => 'kitchens',
      'title' => 'Butler’s Pantry',
      'class' => ''
    ),
    array(
      'image' => 'bedroom-master.jpg',
      'alt' => 'Master bedroom with built-in robes in a Domesca Homes new build',
      'category' => 'New Homes',
      'filters' => 'new-homes',
      'title' => 'Master Suite',
      'class' => ''
    ),
    array(
      'image' => 'exterior-townhouse-brick.jpg',
      'alt' => 'Completed multi-unit development in brick and dark render at dusk',
      'category' => 'Townhouses & Units',
      'filters' => 'developments new-homes',
      'title' => 'Unit Development',
      'class' => ''
    ),
    array(
      'image' => 'kitchen-white-island.jpg',
      'alt' => 'White kitchen with a large stone island bench in a Domesca Homes build',
      'category' => 'Kitchens',
      'filters' => 'kitchens new-homes',
      'title' => 'Island Bench',
      'class' => ''
    ),
    array(
      'image' => 'bathroom-round-mirrors.jpg',
      'alt' => 'Bathroom with round mirrors, twin vanity and floor-mounted tapware',
      'category' => 'Bathrooms',
      'filters' => 'bathrooms renovations',
      'title' => 'Twin Vanity',
      'class' => ''
    ),
    array(
      'image' => 'stairwell-void.jpg',
      'alt' => 'Double-height stairwell void with pendant light in a two-storey home',
      'category' => 'New Homes',
      'filters' => 'new-homes',
      'title' => 'Stairwell Void',
      'class' => ''
    ),
    array(
      'image' => 'kitchen-benchtop-garden.jpg',
      'alt' => 'Kitchen benchtop and rangehood looking out to the garden',
      'category' => 'Kitchens',
      'filters' => 'kitchens new-homes',
      'title' => 'Garden Outlook',
      'class' => ''
    ),
    array(
      'image' => 'entry-black-door.jpg',
      'alt' => 'Entry with black-framed glazed door and brick detailing',
      'category' => 'Renovations & Extensions',
      'filters' => 'renovations new-homes',
      'title' => 'Entry Detail',
      'class' => ''
    )
  ),
	);
}

function dsc_inner_pages() {
	return array(
		'about' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'exterior-townhouse-dusk.jpg',
    'title' => 'About Domesca Homes',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Talk To Our Team',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(
    array(
      'flip' => '0',
      'heading_tag' => 'h2',
      'eyebrow' => 'Who We Are',
      'heading' => 'Quality over quantity, on every project.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Founded in 2013, Domesca Homes is a Melbourne-based building company specialising in custom homes, renovations, knockdown rebuilds, and multi-unit developments across Melbourne&rsquo;s north and west.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We were established to meet the growing demand for reliable, high-quality residential construction delivered with clear communication, strong project management, and consistent results.'
        ),
        array(
          'tag' => 'p',
          'html' => 'At Domesca Homes, we focus on quality over quantity. Every project is managed with care from pre-construction through to completion, ensuring attention to detail, transparency, and a smooth building experience for our clients.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Start Your Project',
          'url' => '#banner-form',
          'style' => ''
        ),
        array(
          'label' => 'Call 0411 526 251',
          'url' => 'tel:+61411526251',
          'style' => 'ghost'
        )
      ),
      'image' => 'kitchen-living-pendant.jpg',
      'alt' => 'Open-plan kitchen and living area with feature pendant lighting in a Domesca Homes build',
      'tag' => 'Established 2013'
    ),
    array(
      'flip' => '1',
      'heading_tag' => 'h3',
      'eyebrow' => 'How We Work',
      'heading' => 'Built on trust, communication and results.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'We understand the trust involved in building &mdash; whether it&rsquo;s a family home or an investment development. That&rsquo;s why we take the time to understand your goals, communicate openly, and deliver work that meets both your expectations and industry standards.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Our team works closely with homeowners, investors, and developers to deliver practical building solutions that achieve strong outcomes. From concept through to completion, we are committed to making the process straightforward, professional, and well-managed.'
        )
      ),
      'list' => array(
        array(
          'label' => 'Clear, direct communication throughout the build',
          'url' => ''
        ),
        array(
          'label' => 'Transparent, detailed pricing with no hidden surprises',
          'url' => ''
        ),
        array(
          'label' => 'Freedom to choose materials from any supplier you prefer',
          'url' => ''
        ),
        array(
          'label' => 'Final inspections and warranty support after handover',
          'url' => ''
        )
      ),
      'actions' => array(),
      'image' => 'hallway-timber.jpg',
      'alt' => 'Timber-floored entry hallway with a feature door in a Domesca Homes custom build',
      'tag' => ''
    ),
    array(
      'flip' => '0',
      'heading_tag' => 'h3',
      'eyebrow' => 'Who We Build For',
      'heading' => 'Homeowners, investors and developers.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Whether you have all the plans and permits ready for construction, or you&rsquo;re starting from the ground up with nothing more than a vision, our architect and interior designer can assist with a concept plan to suit your needs.'
        ),
        array(
          'tag' => 'p',
          'html' => 'For developers and investors we take on townhouse, unit and small-scale residential developments, managing council approvals, engineering and trades under one point of contact.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'See All Services',
          'url' => 'services.html',
          'style' => 'ghost'
        ),
        array(
          'label' => 'View Our Work',
          'url' => 'portfolio.html',
          'style' => 'ghost'
        )
      ),
      'image' => 'exterior-townhouse-brick.jpg',
      'alt' => 'Completed multi-unit development in brick and dark render at dusk',
      'tag' => 'Melbourne north & west'
    )
  ),
		),
		'contact' => array(
			'banner' => array(
    'plain' => true,
    'image' => 'alfresco-outdoor.jpg',
    'title' => 'Get In Touch With Us Today',
    'sub' => '',
    'btn1_label' => '',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Send an Enquiry',
    'btn2_url' => '#enquire',
    'show_form' => '0',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Talk To Our Team',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(),
			'splits' => array(),
		),
		'new-builds' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'exterior-single-storey.jpg',
    'title' => 'New Home Construction',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Get Your Free Building Quote',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(
    array(
      'flip' => '0',
      'heading_tag' => 'h2',
      'eyebrow' => 'New Builds',
      'heading' => 'Built to stand the test of time.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'At Domesca Homes, we are committed to delivering high-quality construction services tailored to each client&rsquo;s unique vision and lifestyle. Specialising in new home construction, we create homes that combine timeless design, functionality, and lasting value.'
        ),
        array(
          'tag' => 'p',
          'html' => 'From concept through to completion, our experienced team works closely with clients, architects, and designers to ensure every detail is carefully considered and professionally executed.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We understand that building a home is one of life&rsquo;s most significant investments, which is why we prioritise clear communication, personalised service, and exceptional workmanship throughout every stage of the journey. By using premium materials and trusted building practices, we deliver homes that not only reflect your individual style but are built to stand the test of time.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Request a Quote',
          'url' => '#banner-form',
          'style' => ''
        ),
        array(
          'label' => 'See Completed Homes',
          'url' => 'portfolio.html',
          'style' => 'ghost'
        )
      ),
      'image' => 'exterior-new-home-facade.jpg',
      'alt' => 'Completed contemporary new home by Domesca Homes in Melbourne',
      'tag' => 'Custom & luxury homes'
    ),
    array(
      'flip' => '1',
      'heading_tag' => 'h3',
      'eyebrow' => 'Plans & Permits',
      'heading' => 'Bring your plans, or start from a vision.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'No matter if you have all the plans and permits ready for construction, or if you&rsquo;re starting from the ground up with nothing more than a vision, our architect and interior designer can assist with a concept plan to suit your needs.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We use only the best building materials, suppliers and techniques to ensure you&rsquo;re getting the highest quality finished product. When you first turn the key to your custom new home, we want it to feel like a dream come true.'
        )
      ),
      'list' => array(
        array(
          'label' => 'Knockdown rebuilds on your existing site',
          'url' => ''
        ),
        array(
          'label' => 'Sloping and difficult sites assessed before we advise',
          'url' => ''
        ),
        array(
          'label' => 'Sustainable, energy-efficient design options',
          'url' => ''
        ),
        array(
          'label' => 'Choose materials from any supplier you prefer',
          'url' => ''
        )
      ),
      'actions' => array(),
      'image' => 'living-open-plan.jpg',
      'alt' => 'Open-plan living and dining area in a Domesca Homes new build',
      'tag' => ''
    ),
    array(
      'flip' => '0',
      'heading_tag' => 'h3',
      'eyebrow' => 'Timeframes',
      'heading' => 'How long a new home takes.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'The time it takes to build depends on the type and size of the house. For a single-storey home, it typically takes <strong>4&ndash;6 months</strong>. For a double-storey home, the timeframe is usually <strong>8&ndash;12 months</strong>. These durations may vary based on the specific size and complexity of the project.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Throughout the build you stay informed on progress, key milestones and any important decisions, so you always know how your project is tracking.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Start Your New Home',
          'url' => '#banner-form',
          'style' => ''
        )
      ),
      'image' => 'stairwell-void.jpg',
      'alt' => 'Double-height stairwell void with pendant light in a two-storey Domesca Homes build',
      'tag' => ''
    )
  ),
		),
		'extensions' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'living-sliding-doors.jpg',
    'title' => 'House Extensions',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Get Your Extension Quote',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(
    array(
      'flip' => '0',
      'heading_tag' => 'h2',
      'eyebrow' => 'Extensions',
      'heading' => 'Expand the home you already love.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Expand your home with additional rooms and living areas &mdash; extra bedrooms and bathrooms, built-in robes, and any number of other home improvements to give you more space, more light and more modern conveniences.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We understand that every home and family is unique, which is why we take a personalised approach to every project, carefully balancing practicality, comfort, and modern design.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Request a Quote',
          'url' => '#banner-form',
          'style' => ''
        ),
        array(
          'label' => 'Renovations',
          'url' => 'renovations.html',
          'style' => 'ghost'
        )
      ),
      'image' => 'living-sliding-doors.jpg',
      'alt' => 'Extended living area with full-height sliding doors opening to the backyard',
      'tag' => 'More space, more light'
    ),
    array(
      'flip' => '1',
      'heading_tag' => 'h3',
      'eyebrow' => 'Design & Build',
      'heading' => 'Results that complement your existing home.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'From concept planning through to construction, we focus on delivering seamless results that complement your existing home while elevating its overall style and value.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Our renovation and extension process starts with an initial consultation and site review. From there, we discuss your ideas, confirm the scope, and guide you through planning, approvals and construction through to completion.'
        )
      ),
      'list' => array(
        array(
          'label' => 'Additional bedrooms and bathrooms',
          'url' => ''
        ),
        array(
          'label' => 'New or enlarged living areas',
          'url' => ''
        ),
        array(
          'label' => 'Built-in robes and storage',
          'url' => ''
        ),
        array(
          'label' => 'Council approvals and permits guided',
          'url' => ''
        )
      ),
      'actions' => array(),
      'image' => 'entry-black-door.jpg',
      'alt' => 'Entry with black-framed glazed door and brick detailing after an extension',
      'tag' => ''
    ),
    array(
      'flip' => '0',
      'heading_tag' => 'h3',
      'eyebrow' => 'Stay Where You Are',
      'heading' => 'Keep the neighbourhood you love.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'If you love your home but it no longer suits your lifestyle, it needs an upgrade, or you long for a change, don&rsquo;t go to all the expense and inconvenience of moving.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Let us transform your home to reflect your personality and lifestyle, add significant value, and enable you to stay in the area and neighbourhood that you love so much.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Start Your Extension',
          'url' => '#banner-form',
          'style' => ''
        )
      ),
      'image' => 'alfresco-outdoor.jpg',
      'alt' => 'Covered alfresco entertaining area added to an existing home',
      'tag' => ''
    )
  ),
		),
		'our-plans' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'stairwell-void.jpg',
    'title' => 'Our Plans',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Talk To Us About Your Plans',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(
    array(
      'flip' => '0',
      'heading_tag' => 'h2',
      'eyebrow' => 'Two Ways In',
      'heading' => 'Bring your plans, or start from a vision.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'No matter if you have all the plans and permits ready for construction, or if you&rsquo;re starting from the ground up with nothing more than a vision, our architect and interior designer can assist with a concept plan to suit your needs.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Customers can bring their own designs and plans to Domesca Homes by scheduling a consultation with our team. We will review the designs, discuss the vision, and provide expert advice to ensure the project aligns with their goals.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Book a Consultation',
          'url' => '#banner-form',
          'style' => ''
        ),
        array(
          'label' => 'New Builds',
          'url' => 'new-builds.html',
          'style' => 'ghost'
        )
      ),
      'image' => 'hallway-timber.jpg',
      'alt' => 'Timber-floored entry hallway with a feature door in a Domesca Homes build',
      'tag' => 'Concept plans available'
    ),
    array(
      'flip' => '1',
      'heading_tag' => 'h3',
      'eyebrow' => 'Our Design Process',
      'heading' => 'Efficient, tailored and built around your budget.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Our design process begins with an initial consultation to understand your vision and requirements. We then collaborate with our partner designers to create a tailored plan, incorporating your preferences and our expertise to ensure functionality and cost-efficiency.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Our partner designers bring their expertise to create innovative and functional designs tailored to your needs. We work closely with you to understand your budget and provide cost-effective solutions without compromising on quality.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We encourage client input throughout the planning phase. Our team is flexible and will work with you to make adjustments to the design to ensure it meets your expectations.'
        )
      ),
      'list' => array(),
      'actions' => array(),
      'image' => 'living-teal-lounge.jpg',
      'alt' => 'Living room with large window and contemporary furnishings in a Domesca Homes build',
      'tag' => ''
    ),
    array(
      'flip' => '0',
      'heading_tag' => 'h3',
      'eyebrow' => 'Design Options',
      'heading' => 'Modern, sustainable and built for how you live.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'We stay updated with the latest design trends and incorporate them into our projects. Whether you prefer a contemporary, minimalist, or traditional style, we ensure your home reflects modern aesthetics while meeting your personal preferences.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We also specialise in sustainable home designs, incorporating eco-friendly materials, energy-efficient solutions, and sustainable practices to reduce environmental impact and save on long-term costs.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Start Your Design',
          'url' => '#banner-form',
          'style' => ''
        )
      ),
      'image' => 'kitchen-benchtop-garden.jpg',
      'alt' => 'Kitchen benchtop looking out to the garden in a Domesca Homes build',
      'tag' => ''
    )
  ),
		),
		'location-hillside' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'exterior-single-storey.jpg',
    'title' => 'Home Builders in Hillside',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Get a Quote for Your Hillside Project',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(
    array(
      'flip' => '0',
      'heading_tag' => 'h2',
      'eyebrow' => 'Building in Hillside',
      'heading' => 'A local builder, based right here.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Domesca Homes is a Melbourne-based building company operating out of Hillside, Victoria 3037. Founded in 2013, we specialise in custom homes, renovations, knockdown rebuilds, and multi-unit developments across Melbourne&rsquo;s north and west.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We were established to meet the growing demand for reliable, high-quality residential construction delivered with clear communication, strong project management, and consistent results.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Being based locally means site visits, consultations and day-to-day decisions are straightforward. You deal directly with the team running your build, not a call centre.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Get a Free Quote',
          'url' => '#banner-form',
          'style' => ''
        ),
        array(
          'label' => 'Call 0411 526 251',
          'url' => 'tel:+61411526251',
          'style' => 'ghost'
        )
      ),
      'image' => 'exterior-new-home-facade.jpg',
      'alt' => 'Completed contemporary new home built by Domesca Homes',
      'tag' => 'Based in Hillside, VIC 3037'
    ),
    array(
      'flip' => '1',
      'heading_tag' => 'h3',
      'eyebrow' => 'What We Build',
      'heading' => 'Every service, available in Hillside.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Whether you have all the plans and permits ready for construction, or you&rsquo;re starting from the ground up with nothing more than a vision, our architect and interior designer can assist with a concept plan to suit your needs.'
        )
      ),
      'list' => array(
        array(
          'label' => 'New home construction — custom and luxury homes',
          'link_label' => 'New home construction',
          'url' => 'new-builds.html'
        ),
        array(
          'label' => 'Townhouse developments and duplexes',
          'link_label' => 'Townhouse developments',
          'url' => 'townhouse-developments.html'
        ),
        array(
          'label' => 'Multi-unit projects for developers and investors',
          'link_label' => 'Multi-unit projects',
          'url' => 'multi-unit-projects.html'
        ),
        array(
          'label' => 'House extensions — extra bedrooms, bathrooms and living areas',
          'link_label' => 'House extensions',
          'url' => 'extensions.html'
        ),
        array(
          'label' => 'Renovations — kitchens, bathrooms and laundries',
          'link_label' => 'Renovations',
          'url' => 'renovations.html'
        ),
        array(
          'label' => 'Knockdown rebuilds on your existing block',
          'url' => ''
        )
      ),
      'actions' => array(),
      'image' => 'kitchen-living-pendant.jpg',
      'alt' => 'Open-plan kitchen and living area with feature pendant lighting',
      'tag' => ''
    ),
    array(
      'flip' => '0',
      'heading_tag' => 'h3',
      'eyebrow' => 'Sites & Approvals',
      'heading' => 'We assess the site before we advise.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Every site is different, so we review the conditions carefully before recommending a practical solution for your project. We can assess challenging and sloping sites and advise on the most suitable building approach.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We can also help guide you through the approvals and permit process. The exact requirements depend on your project, site and local council, but we aim to make the process clear and manageable from the start.'
        ),
        array(
          'tag' => 'p',
          'html' => 'For a single-storey home the build typically takes <strong>4&ndash;6 months</strong>, and a double-storey home <strong>8&ndash;12 months</strong>, varying with the size and complexity of the project.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Ask About Your Site',
          'url' => '#banner-form',
          'style' => ''
        )
      ),
      'image' => 'exterior-brick-garage.jpg',
      'alt' => 'Renovated brick home exterior with new garage door and stone driveway',
      'tag' => ''
    )
  ),
		),
		'portfolio' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'kitchen-living-pendant.jpg',
    'title' => 'Portfolio & Photo Gallery',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Start a Project Like These',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(),
		),
		'services' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'exterior-new-home-facade.jpg',
    'title' => 'Our Construction Services',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Discuss Your Project',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(
    array(
      'flip' => '0',
      'heading_tag' => 'h2',
      'eyebrow' => 'What We Offer',
      'heading' => 'One builder, from concept to handover.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'At Domesca Homes we are committed to delivering high-quality construction services tailored to each client&rsquo;s unique vision and lifestyle &mdash; whether that is a single family home, a knockdown rebuild, or a multi-unit development.'
        ),
        array(
          'tag' => 'p',
          'html' => 'From navigating council approvals and regulatory requirements to coordinating trades, engineers, and designers, we manage every stage of the construction process with attention to detail and a commitment to excellence.'
        )
      ),
      'list' => array(
        array(
          'label' => 'Concept plans with our architect and interior designer',
          'url' => ''
        ),
        array(
          'label' => 'Council approvals and building permits guided',
          'url' => ''
        ),
        array(
          'label' => 'Trades, engineers and designers under one point of contact',
          'url' => ''
        ),
        array(
          'label' => 'Final inspection and warranty support after handover',
          'url' => ''
        )
      ),
      'actions' => array(),
      'image' => 'kitchen-island-stone.jpg',
      'alt' => 'Open-plan kitchen with stone island bench by Domesca Homes',
      'tag' => ''
    )
  ),
		),
		'townhouse-developments' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'exterior-townhouse-dusk.jpg',
    'title' => 'Townhouse Developments',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Talk To Us About Your Site',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(
    array(
      'flip' => '0',
      'heading_tag' => 'h2',
      'eyebrow' => 'Townhouse Developments',
      'heading' => 'A builder who delivers certainty.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Domesca Homes works on townhouse projects for developers, investors, and landowners in Melbourne. We can help you assess the site, review the scope, and plan a build that suits your goals and budget.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We specialise in multi-unit, townhouse, and small-scale residential developments across Melbourne, working closely with you from early planning through to completion to ensure your project is delivered efficiently, professionally, and with strong attention to detail.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Our focus is simple: practical construction solutions that help you maximise your return while reducing risk.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Assess My Site',
          'url' => '#banner-form',
          'style' => ''
        ),
        array(
          'label' => 'Multi-Unit Projects',
          'url' => 'multi-unit-projects.html',
          'style' => 'ghost'
        )
      ),
      'image' => 'exterior-townhouse-brick.jpg',
      'alt' => 'Completed townhouse development in brick and dark render at dusk',
      'tag' => 'Duplex & townhouse'
    ),
    array(
      'flip' => '1',
      'heading_tag' => 'h3',
      'eyebrow' => 'What We Assist With',
      'heading' => 'Approvals, consultants and trades under one roof.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'We understand that successful developments rely on clear communication, realistic planning, and proactive problem-solving. That&rsquo;s exactly how we operate on every project.'
        )
      ),
      'list' => array(
        array(
          'label' => 'Council development applications through to approval',
          'url' => ''
        ),
        array(
          'label' => 'Coordination with town planners and building consultants',
          'url' => ''
        ),
        array(
          'label' => 'Engineering services including structural, civil, acoustic, environmental and hydraulic',
          'url' => ''
        ),
        array(
          'label' => 'Heritage, bushfire, arboricultural and biodiversity reports',
          'url' => ''
        ),
        array(
          'label' => 'Architectural and building design coordination',
          'url' => ''
        ),
        array(
          'label' => 'Interior and landscape design collaboration',
          'url' => ''
        )
      ),
      'actions' => array(),
      'image' => 'interior-open-plan-handover.jpg',
      'alt' => 'Completed open-plan townhouse interior at handover',
      'tag' => ''
    ),
    array(
      'flip' => '0',
      'heading_tag' => 'h3',
      'eyebrow' => 'Built For Investment',
      'heading' => 'Designed to support your project outcomes.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Whether you&rsquo;re building a duplex, townhouse development, or multi-unit project, we partner with you to deliver a smooth, well-managed construction process designed to support your investment goals and project outcomes.'
        ),
        array(
          'tag' => 'p',
          'html' => 'With a strong focus on quality workmanship, timelines, and budget control, we build to a high standard while maximising value and long-term potential.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Request a Quote',
          'url' => '#banner-form',
          'style' => ''
        )
      ),
      'image' => 'kitchen-white-island.jpg',
      'alt' => 'White kitchen with a large stone island bench in a completed townhouse',
      'tag' => ''
    )
  ),
		),
		'multi-unit-projects' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'exterior-townhouse-brick.jpg',
    'title' => 'Multi-Unit Projects',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Talk To Us About Your Development',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(
    array(
      'flip' => '0',
      'heading_tag' => 'h2',
      'eyebrow' => 'Multi-Unit Projects',
      'heading' => 'A trusted partner on larger projects.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'At Domesca Homes, we are a trusted partner in delivering high-quality multi-unit developments with efficiency, precision, and professionalism. We understand the complexities involved in larger-scale residential projects and take a proactive approach to planning, communication, and project management.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Our experienced team works closely with clients, consultants, and industry professionals to develop practical and cost-effective building solutions tailored to each project&rsquo;s unique requirements.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Discuss Your Project',
          'url' => '#banner-form',
          'style' => ''
        ),
        array(
          'label' => 'Townhouse Developments',
          'url' => 'townhouse-developments.html',
          'style' => 'ghost'
        )
      ),
      'image' => 'interior-open-plan-handover.jpg',
      'alt' => 'Completed open-plan unit interior at handover, built by Domesca Homes',
      'tag' => 'Developers & investors'
    ),
    array(
      'flip' => '1',
      'heading_tag' => 'h3',
      'eyebrow' => 'Approvals & Coordination',
      'heading' => 'Every stage managed with attention to detail.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'From navigating council approvals and regulatory requirements to coordinating trades, engineers, and designers, we manage every stage of the construction process with attention to detail and a commitment to excellence.'
        )
      ),
      'list' => array(
        array(
          'label' => 'Council development applications through to approval',
          'url' => ''
        ),
        array(
          'label' => 'Coordination with town planners and building consultants',
          'url' => ''
        ),
        array(
          'label' => 'Engineering services including structural, civil, acoustic, environmental and hydraulic',
          'url' => ''
        ),
        array(
          'label' => 'Heritage, bushfire, arboricultural and biodiversity reports',
          'url' => ''
        ),
        array(
          'label' => 'Architectural and building design coordination',
          'url' => ''
        ),
        array(
          'label' => 'Interior and landscape design collaboration',
          'url' => ''
        )
      ),
      'actions' => array(),
      'image' => 'kitchen-galley.jpg',
      'alt' => 'Galley kitchen in a completed Domesca Homes unit development',
      'tag' => ''
    ),
    array(
      'flip' => '0',
      'heading_tag' => 'h3',
      'eyebrow' => 'Quality & Budget Control',
      'heading' => 'Maximising value and long-term potential.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'With a strong focus on quality workmanship, timelines, and budget control, Domesca Homes delivers multi-unit developments that are built to a high standard while maximising value and long-term potential for our clients.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We aim to provide clear and detailed pricing once we have reviewed your plans and project requirements, so you can move forward with confidence and avoid hidden surprises.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Request a Quote',
          'url' => '#banner-form',
          'style' => ''
        )
      ),
      'image' => 'bathroom-ensuite.jpg',
      'alt' => 'Ensuite bathroom in a completed Domesca Homes unit',
      'tag' => ''
    )
  ),
		),
		'renovations' => array(
			'banner' => array(
    'plain' => false,
    'image' => 'kitchen-island-stone.jpg',
    'title' => 'Home Renovations',
    'sub' => '',
    'btn1_label' => 'Request Your Free Quote',
    'btn1_url' => '#banner-form',
    'btn2_label' => 'Call 0411 526 251',
    'btn2_url' => 'tel:+61411526251',
    'show_form' => '1',
    'form_eyebrow' => 'Free & no-obligation',
    'form_title' => 'Get Your Renovation Quote',
    'form_text' => 'Share a few details about your project and our team will review your needs and respond with the next steps.'
  ),
			'creds' => array(
    array(
      'value' => '2013',
      'label' => 'Founded as a Melbourne-based building company'
    ),
    array(
      'value' => '10+',
      'label' => 'Years delivering residential construction across Melbourne'
    ),
    array(
      'value' => '4',
      'label' => 'Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds'
    ),
    array(
      'value' => 'Melbourne',
      'label' => 'Servicing the north and west, including the Moonee Valley region'
    )
  ),
			'splits' => array(
    array(
      'flip' => '0',
      'heading_tag' => 'h2',
      'eyebrow' => 'Renovations',
      'heading' => 'Turn your old home into your dream home.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'If you love your home but it no longer suits your lifestyle, it needs an upgrade, or you long for a change, don&rsquo;t go to all the expense and inconvenience of moving; consider home renovations instead.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Our creative home renovations can turn your beloved old home into your dream home with modern upgrades, extra bedrooms and bathrooms, built-in robes, and any number of other home improvements.'
        ),
        array(
          'tag' => 'p',
          'html' => 'We specialise in high-quality renovations designed to enhance the way you live, whether you are looking to modernise your existing space or improve its functionality.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Request a Quote',
          'url' => '#banner-form',
          'style' => ''
        ),
        array(
          'label' => 'House Extensions',
          'url' => 'extensions.html',
          'style' => 'ghost'
        )
      ),
      'image' => 'kitchen-dark-cabinetry.jpg',
      'alt' => 'Renovated kitchen with dark cabinetry, stone island and integrated appliances',
      'tag' => 'Kitchens, bathrooms & laundries'
    ),
    array(
      'flip' => '1',
      'heading_tag' => 'h3',
      'eyebrow' => 'What We Renovate',
      'heading' => 'Room by room, or the whole house.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'We take a personalised approach to every project, carefully balancing practicality, comfort, and modern design, and deliver seamless results that complement your existing home while elevating its overall style and value.'
        )
      ),
      'list' => array(
        array(
          'label' => 'Kitchen renovations, including butler’s pantries',
          'url' => ''
        ),
        array(
          'label' => 'Bathroom and ensuite renovations',
          'url' => ''
        ),
        array(
          'label' => 'Laundry renovations and custom cabinetry',
          'url' => ''
        ),
        array(
          'label' => 'Whole-home renovations and modern upgrades',
          'url' => ''
        )
      ),
      'actions' => array(),
      'image' => 'bathroom-marble-vanity.jpg',
      'alt' => 'Renovated bathroom with stone-clad walls, twin basins and brushed brass tapware',
      'tag' => ''
    ),
    array(
      'flip' => '0',
      'heading_tag' => 'h3',
      'eyebrow' => 'The Process',
      'heading' => 'A consultation, a site review, then a clear scope.',
      'prose' => array(
        array(
          'tag' => 'p',
          'html' => 'Our renovation and extension process starts with an initial consultation and site review. From there, we discuss your ideas, confirm the scope, and guide you through planning, approvals and construction through to completion.'
        ),
        array(
          'tag' => 'p',
          'html' => 'Let us transform your home to reflect your personality and lifestyle, add significant value, and enable you to stay in the area and neighbourhood that you love so much.'
        )
      ),
      'list' => array(),
      'actions' => array(
        array(
          'label' => 'Start Your Renovation',
          'url' => '#banner-form',
          'style' => ''
        )
      ),
      'image' => 'laundry-cabinetry.jpg',
      'alt' => 'Laundry renovation with custom cabinetry and stone benchtop',
      'tag' => ''
    )
  ),
		),
	);
}

/**
 * Compose the default flexible-content sections for an inner page type.
 *
 * Layout names match the ACF flexible content layouts registered on the
 * "Domesca Inner Page" template.
 */
function dsc_inner_default_sections( $type = 'about' ) {
	$pages = dsc_inner_pages();
	if ( ! isset( $pages[ $type ] ) ) {
		$type = 'about';
	}
	$p = $pages[ $type ];

	$sections = array();

	if ( ! empty( $p['banner'] ) ) {
		$sections[] = array_merge( array( 'acf_fc_layout' => 'banner' ), $p['banner'] );
	}

	if ( 'contact' === $type ) {
		$sections[] = array( 'acf_fc_layout' => 'contact' );
		$sections[] = array( 'acf_fc_layout' => 'contact_map' );
		return $sections;
	}

	if ( 'privacy-policy' === $type || 'plain' === $type ) {
		$sections[] = array( 'acf_fc_layout' => 'prose' );
		return $sections;
	}

	if ( ! empty( $p['creds'] ) ) {
		$sections[] = array( 'acf_fc_layout' => 'creds', 'items' => $p['creds'] );
	}

	if ( ! empty( $p['splits'] ) ) {
		$sections[] = array( 'acf_fc_layout' => 'splits', 'items' => $p['splits'] );
	}

	// Service / plan pages also get the services and plans grids.
	$service_types = array( 'services', 'new-builds', 'townhouse-developments', 'multi-unit-projects', 'extensions', 'renovations' );
	if ( in_array( $type, $service_types, true ) ) {
		$sections[] = array( 'acf_fc_layout' => 'services' );
		$sections[] = array( 'acf_fc_layout' => 'plans' );
	}

	$sections[] = array( 'acf_fc_layout' => 'portfolio' );

	if ( 'location-hillside' === $type ) {
		$sections[] = array( 'acf_fc_layout' => 'areas' );
	}

	if ( 'portfolio' !== $type ) {
		$sections[] = array( 'acf_fc_layout' => 'testimonials' );
		$sections[] = array( 'acf_fc_layout' => 'faq' );
		$sections[] = array( 'acf_fc_layout' => 'cta' );
	} else {
		$sections[] = array( 'acf_fc_layout' => 'testimonials' );
		$sections[] = array( 'acf_fc_layout' => 'cta' );
	}

	return dsc_resolve_inner_urls( $sections );
}

/**
 * Convert static-style .html links to WordPress permalinks.
 */
function dsc_resolve_inner_urls( $value ) {
	if ( is_string( $value ) && preg_match( '/^[a-z0-9-]+\.html$/', $value ) ) {
		$slug = str_replace( '.html', '', $value );
		return home_url( '/' . trim( $slug, '/' ) . '/' );
	}
	if ( is_array( $value ) ) {
		foreach ( $value as $k => $v ) {
			$value[ $k ] = dsc_resolve_inner_urls( $v );
		}
	}
	return $value;
}

function dsc_inner_type_from_page() {
	$type = dsc_field( 'page_type', 'about' );
	if ( is_array( $type ) ) {
		return 'about';
	}
	return sanitize_key( (string) $type );
}

