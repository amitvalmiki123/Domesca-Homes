<?php
/**
 * Navigation rendering. Header menus use the native WordPress menu system while
 * the exact `.nav__item`, `.drop` and `.mnav__*` markup from the static design
 * is preserved.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Build a tree (parent > children) from a flat WP menu item list.
 */
function dsc_menu_tree( $location = 'primary' ) {
	$items = dsc_get_menu_items( $location );
	$tree  = array();

	if ( empty( $items ) ) {
		return $tree;
	}

	foreach ( $items as $item ) {
		$item->children = array();
	}
	foreach ( $items as $item ) {
		if ( (int) $item->menu_item_parent > 0 ) {
			foreach ( $items as $parent ) {
				if ( (int) $parent->ID === (int) $item->menu_item_parent ) {
					$parent->children[] = $item;
					break;
				}
			}
		} else {
			$tree[] = $item;
		}
	}

	return $tree;
}

/**
 * Desktop header nav.
 */
function dsc_render_desktop_nav( $location = 'primary' ) {
	$tree = dsc_menu_tree( $location );

	if ( empty( $tree ) ) {
		?>
		<nav class="nav" aria-label="Primary">
			<div class="nav__item"><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></div>
			<div class="nav__item"><a class="nav__link" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></div>
			<div class="nav__item has-children">
				<a class="nav__link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services
					<svg class="chev" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>
				</a>
				<div class="drop">
					<a href="<?php echo esc_url( home_url( '/our-plans/' ) ); ?>">Our Plans</a>
					<a href="<?php echo esc_url( home_url( '/new-builds/' ) ); ?>">New Builds</a>
					<a href="<?php echo esc_url( home_url( '/townhouse-developments/' ) ); ?>">Townhouse Developments</a>
					<a href="<?php echo esc_url( home_url( '/multi-unit-projects/' ) ); ?>">Multi-Unit Projects</a>
					<a href="<?php echo esc_url( home_url( '/extensions/' ) ); ?>">Extensions</a>
					<a href="<?php echo esc_url( home_url( '/renovations/' ) ); ?>">Renovations</a>
				</div>
			</div>
			<div class="nav__item"><a class="nav__link" href="<?php echo esc_url( home_url( '/our-plans/' ) ); ?>">Our Plans</a></div>
			<div class="nav__item"><a class="nav__link" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">Portfolio</a></div>
			<div class="nav__item"><a class="nav__link" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></div>
		</nav>
		<?php
		return;
	}

	echo '<nav class="nav" aria-label="Primary">';
	foreach ( $tree as $item ) {
		$classes = 'nav__item';
		if ( ! empty( $item->children ) ) {
			$classes .= ' has-children';
		}
		if ( get_permalink( $item->ID ) && is_page( $item->object_id ) ) {
			$classes .= ' is-current';
		}
		echo '<div class="' . esc_attr( $classes ) . '">';
		echo '<a class="nav__link" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title );
		if ( ! empty( $item->children ) ) {
			echo '<svg class="chev" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>';
		}
		echo '</a>';

		if ( ! empty( $item->children ) ) {
			echo '<div class="drop">';
			foreach ( $item->children as $child ) {
				echo '<a href="' . esc_url( $child->url ) . '">' . esc_html( $child->title ) . '</a>';
			}
			echo '</div>';
		}
		echo '</div>';
	}
	echo '</nav>';
}

/**
 * Renders the primary nav inside the mobile drawer.
 */
function dsc_render_mobile_nav( $location = 'primary' ) {
	$tree = dsc_menu_tree( $location );

	echo '<ul class="mnav__body">';

	if ( empty( $tree ) ) {
		?>
		<li><a class="mnav__a" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
		<li><a class="mnav__a" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
		<li>
			<div class="mnav__row">
				<a class="mnav__a mnav__link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
				<button class="mnav__pm" type="button" aria-expanded="false" aria-controls="mnav-sub-fallback-services" aria-label="Toggle Services submenu"><span class="mnav__pm-i" aria-hidden="true"></span></button>
			</div>
			<div class="mnav__sub" id="mnav-sub-fallback-services"><div>
				<a href="<?php echo esc_url( home_url( '/our-plans/' ) ); ?>">Our Plans</a>
				<a href="<?php echo esc_url( home_url( '/new-builds/' ) ); ?>">New Builds</a>
				<a href="<?php echo esc_url( home_url( '/townhouse-developments/' ) ); ?>">Townhouse Developments</a>
				<a href="<?php echo esc_url( home_url( '/multi-unit-projects/' ) ); ?>">Multi-Unit Projects</a>
				<a href="<?php echo esc_url( home_url( '/extensions/' ) ); ?>">Extensions</a>
				<a href="<?php echo esc_url( home_url( '/renovations/' ) ); ?>">Renovations</a>
			</div></div>
		</li>
		<li><a class="mnav__a" href="<?php echo esc_url( home_url( '/our-plans/' ) ); ?>">Our Plans</a></li>
		<li><a class="mnav__a" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">Portfolio</a></li>
		<li><a class="mnav__a" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
		<?php
		echo '</ul>';
		return;
	}

	foreach ( $tree as $item ) {
		echo '<li>';
		if ( ! empty( $item->children ) ) {
			$panel = 'mnav-sub-' . absint( $item->ID );
			echo '<div class="mnav__row">';
			echo '<a class="mnav__a mnav__link" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
			echo '<button class="mnav__pm" type="button" aria-expanded="false" aria-controls="' . esc_attr( $panel ) . '" aria-label="' . esc_attr( sprintf( __( 'Toggle %s submenu', 'domesca-homes' ), $item->title ) ) . '"><span class="mnav__pm-i" aria-hidden="true"></span></button>';
			echo '</div>';
			echo '<div class="mnav__sub" id="' . esc_attr( $panel ) . '"><div>';
			foreach ( $item->children as $child ) {
				echo '<a href="' . esc_url( $child->url ) . '">' . esc_html( $child->title ) . '</a>';
			}
			echo '</div></div>';
		} else {
			echo '<a class="mnav__a" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
		}
		echo '</li>';
	}

	echo '</ul>';
}

/**
 * Footer menu columns.
 */
function dsc_render_footer_columns( $location = 'footer' ) {
	$tree = dsc_menu_tree( $location );

	if ( empty( $tree ) ) {
		return false;
	}

	foreach ( $tree as $i => $column ) {
		$panel = 'ft-col-' . $i;
		echo '<nav class="ft__col" aria-label="' . esc_attr( $column->title ) . '">';
		echo '<h4><button class="ft__toggle" type="button" data-ft-toggle aria-expanded="true" aria-controls="' . esc_attr( $panel ) . '">' . esc_html( $column->title ) . '<span class="ft__ic" aria-hidden="true"></span></button></h4>';
		echo '<div class="ft__panel" id="' . esc_attr( $panel ) . '">';

		if ( ! empty( $column->children ) ) {
			echo '<ul class="ft__nav">';
			foreach ( $column->children as $child ) {
				echo '<li><a href="' . esc_url( $child->url ) . '"' . ( $child->target ? ' target="' . esc_attr( $child->target ) . '" rel="noopener"' : '' ) . '>' . esc_html( $child->title ) . '</a></li>';
			}
			echo '</ul>';
		} else {
			echo '<ul class="ft__nav"><li><a href="' . esc_url( $column->url ) . '">' . esc_html( $column->title ) . '</a></li></ul>';
		}

		echo '</div></nav>';
	}

	return true;
}

/**
 * Footer bottom bar links (About, Services, Projects, Contact, Privacy).
 */
function dsc_render_footer_bottom( $location = 'footer_bottom' ) {
	$items = dsc_get_menu_items( $location );

	if ( empty( $items ) ) {
		return false;
	}

	echo '<nav aria-label="Footer">';

	foreach ( $items as $item ) {
		if ( (int) $item->menu_item_parent > 0 ) {
			continue;
		}
		$rel = $item->target ? ' target="' . esc_attr( $item->target ) . '" rel="noopener"' : '';
		echo '<a href="' . esc_url( $item->url ) . '"' . $rel . '>' . esc_html( $item->title ) . '</a>';
	}

	echo '</nav>';

	return true;
}

/**
 * Small icon helper for the "what you get"/included cells.
 */
function dsc_why_icon( $icon = '' ) {
	switch ( $icon ) {
		case 'price':
			return '<path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>';
		case 'cart':
			return '<path d="M3 7h18M6 7V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2M5 7l1 13a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-13"/>';
		case 'build':
			return '<path d="M2 20h20M4 20V9l8-6 8 6v11M9 20v-6h6v6"/>';
		case 'check':
			return '<path d="M9 11l3 3 8-8M20 12v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h9"/>';
		case 'shield':
			return '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>';
		case 'chat':
		default:
			return '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2Z"/>';
	}
}
