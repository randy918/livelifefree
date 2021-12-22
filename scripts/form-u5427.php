<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.1.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Speaker Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => 'phone/index.html',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'mtm.inc@yahoo.com',
		'to' => 'mtm.inc@yahoo.com'
	),
	'fields' => array(
		'custom_U5527' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Sponsor/Host',
			'required' => false,
			'errors' => array(
			)
		),
		'Email' => array(
			'order' => 5,
			'type' => 'email',
			'label' => 'Cell Phone',
			'required' => false,
			'errors' => array(
				'format' => 'Field \'Cell Phone\' has an invalid email.'
			)
		),
		'custom_U5473' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Church/Org. Name',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5535' => array(
			'order' => 10,
			'type' => 'string',
			'label' => 'Street Address',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5497' => array(
			'order' => 11,
			'type' => 'string',
			'label' => 'City',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5523' => array(
			'order' => 12,
			'type' => 'string',
			'label' => 'State',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5428' => array(
			'order' => 13,
			'type' => 'string',
			'label' => 'ZIP Code',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5477' => array(
			'order' => 19,
			'type' => 'string',
			'label' => 'Speaking Dates/Times',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5543' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Pastor/Leader Name',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5556' => array(
			'order' => 14,
			'type' => 'string',
			'label' => 'Mailing Address',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5485' => array(
			'order' => 15,
			'type' => 'string',
			'label' => 'City',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5580' => array(
			'order' => 16,
			'type' => 'string',
			'label' => 'State',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5560' => array(
			'order' => 17,
			'type' => 'string',
			'label' => 'ZIP Code',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5436' => array(
			'order' => 18,
			'type' => 'string',
			'label' => 'Website Address',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5588' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'First Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'First Name\' is required.'
			)
		),
		'custom_U5531' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Last Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Last Name\' is required.'
			)
		),
		'custom_U5453' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Office Phone',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Office Phone\' is required.'
			)
		),
		'custom_U5507' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.'
			)
		),
		'custom_U5576' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Fax',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5469' => array(
			'order' => 20,
			'type' => 'string',
			'label' => 'Type of Event',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5511' => array(
			'order' => 21,
			'type' => 'string',
			'label' => 'Venue Name',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5519' => array(
			'order' => 22,
			'type' => 'string',
			'label' => 'Street Address',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5568' => array(
			'order' => 23,
			'type' => 'string',
			'label' => 'City',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5445' => array(
			'order' => 24,
			'type' => 'string',
			'label' => 'State',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5481' => array(
			'order' => 25,
			'type' => 'string',
			'label' => 'ZIP Code',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5432' => array(
			'order' => 26,
			'type' => 'string',
			'label' => 'Seating Capacity',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5552' => array(
			'order' => 27,
			'type' => 'string',
			'label' => 'Expected Attendance',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5489' => array(
			'order' => 28,
			'type' => 'string',
			'label' => 'Other Speakers Invited',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5441' => array(
			'order' => 29,
			'type' => 'string',
			'label' => 'Name of Hotel',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5564' => array(
			'order' => 30,
			'type' => 'string',
			'label' => 'Distance to Event',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5457' => array(
			'order' => 31,
			'type' => 'string',
			'label' => 'Street Address',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5584' => array(
			'order' => 32,
			'type' => 'string',
			'label' => 'City',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5465' => array(
			'order' => 33,
			'type' => 'string',
			'label' => 'State',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5461' => array(
			'order' => 34,
			'type' => 'string',
			'label' => 'ZIP Code',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5515' => array(
			'order' => 35,
			'type' => 'string',
			'label' => 'Name of AIrport',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5548' => array(
			'order' => 36,
			'type' => 'string',
			'label' => 'Distance to Event',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5493' => array(
			'order' => 37,
			'type' => 'string',
			'label' => 'Street Address',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5572' => array(
			'order' => 38,
			'type' => 'string',
			'label' => 'City',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5501' => array(
			'order' => 39,
			'type' => 'string',
			'label' => 'State',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5449' => array(
			'order' => 40,
			'type' => 'string',
			'label' => 'ZIP Code',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
