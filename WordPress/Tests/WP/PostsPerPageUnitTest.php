<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace WordPressCS\WordPress\Tests\WP;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the PostsPerPage sniff.
 *
 * @package WPCS\WordPressCodingStandards
 *
 * @since   0.3.0
 * @since   0.13.0 Class name changed: this class is now namespaced.
 * @since   1.0.0  This sniff has been split into two, with the check for high pagination
 *                 limit being part of the WP category, and the check for pagination
 *                 disabling being part of the VIP category.
 *
 * @covers \WordPressCS\WordPress\AbstractArrayAssignmentRestrictionsSniff
 * @covers \WordPressCS\WordPress\Sniffs\WP\PostsPerPageSniff
 */
final class PostsPerPageUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array();
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array(
			4   => 1,
			10  => 1,
			11  => 1,
			13  => 1,
			22  => 1,
			23  => 1,
			24  => 1,
			29  => 1,
			49  => 1,
			51  => 1,
			54  => 1,
			57  => 1,
			59  => 1,
			67  => 1,
			72  => 1,
			80  => 1,
			82  => 1,
			103 => 1,
			104 => 1,
			109 => 1,
			115 => 1,
			117 => 1,
			119 => 1,
			121 => 1,
			123 => 1,
			125 => 1,
		);
	}
}
