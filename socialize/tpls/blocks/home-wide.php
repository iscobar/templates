<?php
/**
 * @package   Socialize Template
 * @copyright JomSocial, Copyright (C) 2015 All rights reserved.
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('home-wide')) : ?>
<!-- HOME-WIDE -->
<div class="t3-home-wide clearfix">
	<jdoc:include type="modules" name="<?php $this->_p('home-wide') ?>" />
</div>
<!-- //HOME-WIDE -->
<?php endif ?>
