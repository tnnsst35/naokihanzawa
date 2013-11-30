<?php
/**
 * NaokiHanzawa is Japanese.
 *
 * @version 1.0.0
 * @author tnnsst35 <http://tnnsst35.com>
 */
class NaokiHanzawa
{
	/**
	 * To twice return
	 *
	 * @param integer $value
	 * @return mixed
	 */
	public static function baigaeshida($value)
	{
		if (preg_match('/\A\d+(\.\d+)?\z/', $value)) {
			return ($value * 2);
		}

		return ($value . $value);
	}
}
