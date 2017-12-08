<?php
/**
 * @package   Socialize Template
 * @copyright JomSocial, Copyright (C) 2015 All rights reserved.
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('breadcrumbs')) : ?>
<!-- BREADCRUMBS -->
	<div class="wrap t3-navhelper<?php $this->_c('breadcrumbs') ?>">
		<div class="container">
			<jdoc:include type="modules" name="<?php $this->_p('breadcrumbs') ?>" />
		</div>
	</div>
<!-- //BREADCRUMBS -->
<?php endif ?>
