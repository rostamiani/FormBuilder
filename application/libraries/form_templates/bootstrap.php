<?php
class bootstrap
{
	function form($elements, $method, $action, $attribs)
	{
		$out = "<form method='$method' action='$action' $attribs">
		foreach ($elements as $type => element) {
			$out .= $$type($element);
		}
		$out .= '</form>';
		return $out;
	}

	private function input($elements)
	{
		$out = "<input type='{$elements['type']}' name='{$elements['name']}' value='{$elements['value']}' {$elements['attribs']'";
		return $out;
	}
}