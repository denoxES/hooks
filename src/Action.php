<?php

/*
FORK
*/

namespace daniellucia\Hooks;

class Action extends Hook
{
	/**
	 * @param string $name The name of the hook.
	 * @return boolean
	 */
	public function run($name)
	{
		$args = array_slice(func_get_args(), 1);

		if (!$this->has($name))
		{
			return false;
		}

		ksort($this->hooks[ $name ]);

		/*
		@daniel.lucia
		Cambiado para que devuelva el resultado de las acciones
		*/
		$return = array();

		foreach ($this->hooks[$name] as $priority => $functions) {
			foreach ($functions as $function) {
				$return[] = call_user_func_array( $function, $args );
			}
		}
		return implode('', $return);
	}
}
