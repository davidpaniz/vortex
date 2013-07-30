<?php
/** Register nav menus. */
add_action( 'init', 'vortex_register_menus' );

/** Registers the the core menus */
function vortex_register_menus() {

	/* Register the 'primary' menu. */
	register_nav_menu( 'vortex-a-menu', __( 'Menu 1', 'vortex' ) );
	register_nav_menu( 'vortex-b-menu', __( 'Menu 2', 'vortex' ) );
	register_nav_menu( 'vortex-c-menu', __( 'Menu 3', 'vortex' ) );
	register_nav_menu( 'vortex-d-menu', __( 'Menu 4', 'vortex' ) );
	register_nav_menu( 'vortex-e-menu', __( 'Menu 5', 'vortex' ) );
	register_nav_menu( 'vortex-f-menu', __( 'Menu 6', 'vortex' ) );
	register_nav_menu( 'vortex-g-menu', __( 'Menu 7', 'vortex' ) );
	register_nav_menu( 'vortex-h-menu', __( 'Menu 8', 'vortex' ) );

}
?>