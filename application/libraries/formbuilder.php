<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormBuilder
{
	protected $ci;
	private $elements = [];
	private $method;
	private $action;
	private $attribs;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function form_params($method, $action, $attribs)
	{
		$this->method = $method;
		$this->action = $action;
		$this->attribs = $attribs;
	}

	public function add_input($type, $name, $value, $attribs)
	{
		$this->elements[] = ['tag'=>'input', 'type'=>$type, 'name'=>$name, 'value'=>$value, 'attribs'=>$attribs];
	}

	public function generate()
	{
		return $this->form($this->elements, $this->method, $this->action, $this->attribs );
	}

	//////////////////// Templates //////////////////////

	function form($elements, $method, $action, $attribs)
	{
		$out = "<form method='$method' action='$action' $attribs>";
		foreach ($elements as $element) {

			$tag = $element['tag'];
			$out .= $this->$tag($element);
		}
		$out .= '</form>';
		return $out;
	}

	private function input($elements)
	{
		$out = "<input type='{$elements['type']}' name='{$elements['name']}' value='{$elements['value']}' {$elements['attribs']} />";
		return $out;
	}

}

/* End of file formBuilder.php */
/* Location: ./application/libraries/formBuilder.php */
