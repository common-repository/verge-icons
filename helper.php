<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // disable direct access
}

if ( ! class_exists( 'VergeIconsHelper' ) ) :
/**
 * VergeIconsHelper
 */
class VergeIconsHelper extends VergeIcons {

	/**
	 * @var string
	 */
	static public $is_verge_icons = true;

	/**
	 * Constructor
	 *
	 * @since 1.0
	 */
	public function __construct() {
		//..
	}

	/**
	 * VergeIconsHelper::getIcons
	 * Provide icons array in given format className => name
	 * 
	 * @return array
	 * @since 1.0
	 */
	static public function getIcons() {
		return VergeIcons::get_instance()->icons();
	}

	/**
	 * VergeIconsHelper::getDropdown
	 * Render <select> dropdown
	 * 
	 * @return string
	 * @since 1.0
	 */
	static public function getDropdown($className = 'verge-icons-dropdown', $name = 'icons', $selected = '') {
		$optset = '<select name="'.esc_attr($name).'" class="'.esc_attr($className).'">';
		foreach(VergeIcons::get_instance()->icons() as $class => $name) {
			$optset .= '<option value="'.esc_attr($class).'"'.(($class == $selected) ? ' selected' : '').'>'.$name.'</option>';
		}
		$optset .= '</select>';
		return $optset;
	}
}

endif;