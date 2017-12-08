<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->checkSpotlight('top-section', 'top-1, top-2, top-3, top-4')) : ?>
	<!-- TOP -->
	<div class="t3-top">
		<div class="container">
			<?php $this->spotlight('top-section', 'top-1, top-2, top-3, top-4') ?>
		</div>
	</div>
	<!-- //TOP -->
<?php endif ?>