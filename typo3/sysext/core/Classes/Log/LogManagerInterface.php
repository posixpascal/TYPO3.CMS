<?php
namespace TYPO3\CMS\Core\Log;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * LogManager Contract for delivering log instances.
 *
 * @author Steffen Müller <typo3@t3node.com>
 */
interface LogManagerInterface {

	/**
	 * Gets a logger instance for the given name.
	 *
	 * @param string $name
	 * @return \Psr\Log\LoggerInterface
	 */
	public function getLogger($name = '');

}
