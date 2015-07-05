<?php
	/*
	Plugin Name: TCR clean user profiles
	Description: Removes aim/yim/jabber junk from user profiles
	Version: 1.0.0
	Plugin URI: http://thecellarroom.uk
	Author: The Cellar Room Limited
	Author URI: http://www.thecellarroom.uk
	Copyright (c) 2015 The Cellar Room Limited
	*/

	defined( 'ABSPATH' ) or die();

	/*************************************************************************/

	if ( ! class_exists( 'tcr_clean_user_profiles' ) ) :

		class tcr_clean_user_profiles {

			function __construct() {
				add_filter( 'user_contactmethods', array ( $this, 'extra_contact_info' ) );
			}

			function extra_contact_info( $contactmethods ) {

				unset( $contactmethods['aim'] );
				unset( $contactmethods['yim'] );
				unset( $contactmethods['jabber'] );
				$contactmethods['twitter'] = 'Twitter';

				return $contactmethods;


			}

		}

		new tcr_clean_user_profiles;

	endif;

