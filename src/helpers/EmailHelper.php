<?php
/**
 * Created by duongnh.
 * @project visionlink-io
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    9/13/2018
 * @time    9:10 AM
 */

namespace duongnh\email\helpers;
class EmailHelper {

	/**
	 * @param $email
	 *
	 * @return string
	 */
	public static function protectOff($email) {
		return '<!--email_off-->' . $email . '<!--/email_off-->';
	}
}
