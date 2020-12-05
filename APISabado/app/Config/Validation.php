<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $animalPOST=[

			'name'=>'alpha|required',
			'age'=>'required',
			'type'=>'required',
			'description'=>'required',
			'food'=>'required',
			'image'=>'required'


	];

	public $animalPUT=[

		'name'=>'alpha|required',
		'age'=>'required',
		'description'=>'required',
		'food'=>'required'
		


];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
