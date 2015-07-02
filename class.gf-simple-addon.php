<?php
/**
 * The Main Class for the Gravity Forms Simple Add-on
 *
 * @author Nikhil Vimal
 * @since 1.0
 */

if (class_exists("GFForms")) {

	// Let's include the add-on framework with the GFForms Class
	GFForms::include_addon_framework();

	/**
	 * Class GFSample and MUST extend the GFAddOn Class
	 *
	 * The class that will hold most of the code for our add-on
	 */
	class GFSample extends GFAddOn {

		// Protected variables for use only in the Class
		protected $_version = "1.0";
		protected $_min_gravityforms_version = "1.7.9999";
		protected $_slug = "simpleaddon";
		protected $_path = "simpleaddon/simpleaddon.php";
		protected $_full_path = __FILE__;
		protected $_url = "http://www.gravityforms.com";
		protected $_title = "Gravity Forms Simple Add-On";
		protected $_short_title = "Test Add-On";
		private static $_instance = null;

		public static function get_instance() {

			if ( self::$_instance == null )
				self::$_instance = new GFSample();

			return self::$_instance;

		}


		/**
		 * This function is meant to be used when you'll need to use an action or hook or filter.
		 *
		 * @since 1.0
		 */

		// public function init() {

		//	parent::init();

		//  add_action() here


		// }

		/**
		 * A simple page that you can use to add extra options to your plugin or present an introduction to your add-on
		 */
		public function plugin_page() {
			?>

			<strong>This is an infomational page. Not a required thing to have, but it's nice, is suppose. ¯\_(ツ)_/¯</strong>

			<?php
		}

		/**
		 * All fields registerd here go into the Form Settings tab when creating a new form
		 *
		 * @param $form The current form
		 *
		 * @return array Array for settings fields for the form
		 */
		public function form_settings_fields( $form ) {
			return array(
				array(
					"title"  => "Simple Add-On Settings",
					'description' => 'This is a description of the purpose of Section 1',
					"fields" => array(
						array(
							"name"    => "textbox",
							"tooltip" => "This is the tooltip",
							"label"   => "This is the label",
							"type"    => "text",
							"class"   => "small",
							"required" => true,

						),
						array(
							"name"    => "textbox",
							"tooltip" => "This is the tooltip",
							"label"   => "This is the label",
							"type"    => "radio",
							"class"   => "small",
							'choices'       => array(
								array(
									'name'   => 'choice1',
									'label'  => 'this is the label for choice1',
									'value'  => 'this is the value for choice1'
								),
								array(
									'name'    => 'choice2',
									'label'   => 'this is the label for choice2',
								),
							),
						),
						array(
							"name"    => "samplecheckbox",
							"tooltip" => "This is the tooltip",
							"label"   => "This is the label",
							"type"    => "checkbox",
							"class"   => "small",
							'onclick' => 'alert("Right you are! Good Choice")',
							'choices'       => array(
								array(
									'name'   => 'choice1',
									'tooltip'=> 'this is the tooltip for choice1',
									'label'  => 'this is the label for choice1',
									'value'  => 'this is the value for choice1'
								),
								array(
									'name'    => 'choice2',
									'tooltip' => 'this is the tooltip for choice2',
									'label'   => 'this is the label for choice2',
								),
							),
						),
					)
				)
			);
		}

		/**
		 * Columns for the Feed
		 *
		 * @return array
		 */
		protected function feed_list_columns() {
			return array(
				'feedName' => __('Name', 'simplefeedaddon'),
				'mytext'   => __('My Textbox', 'simplefeedaddon')
			);
		}

		/**
		 * @param $feed
		 *
		 * @return string
		 */
		public function get_column_value_mytext( $feed ){
			return '<b>' . $feed['meta']['mytext'] . '</b>';
		}

		/**
		 * All fields here go into the Gravity Form Plugin Settings Page
		 *
		 * @return array Settings fields for the plugin settings
		 */
		public function plugin_settings_fields() {
			return array(
				array(
					"title"  => "Simple Add-On Settings",
					'description' => 'This is a description of the purpose of Section 1',
					"fields" => array(
						array(
							"name"    => "textbox",
							"tooltip" => "This is the tooltip",
							"label"   => "This is the label",
							"type"    => "text",
							"class"   => "small",
							"required" => true,

						),
						array(
							"name"    => "textbox",
							"tooltip" => "This is the tooltip",
							"label"   => "This is the label",
							"type"    => "radio",
							"class"   => "small",
							'choices'       => array(
								array(
									'name'   => 'choice1',
									'tooltip'=> 'this is the tooltip for choice1',
									'label'  => 'this is the label for choice1',
									'value'  => 'this is the value for choice1'
								),
								array(
									'name'    => 'choice2',
									'tooltip' => 'this is the tooltip for choice2',
									'label'   => 'this is the label for choice2',
								),
							),
						),
						array(
							"name"    => "samplecheckbox",
							"tooltip" => "This is the tooltip",
							"label"   => "This is the label",
							"type"    => "checkbox",
							"class"   => "small",
							'onclick' => 'alert("Right you are! Good Choice")',
							'choices'       => array(
								array(
									'name'   => 'choice1',
									'tooltip'=> 'this is the tooltip for choice1',
									'label'  => 'this is the label for choice1',
									'value'  => 'this is the value for choice1'
								),
								array(
									'name'    => 'choice2',
									'tooltip' => 'this is the tooltip for choice2',
									'label'   => 'this is the label for choice2',
								),
							),
						),
					)
				)
			);
		}

	}

}