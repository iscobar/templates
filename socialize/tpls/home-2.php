<?php
/** 
 *------------------------------------------------------------------------------
 * @package	  T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license	  GNU General Public License; http://www.gnu.org/licenses/gpl.html
 * @author		JoomlArt, JoomlaBamboo 
 * 			      If you want to be come co-authors of this project, please follow 
 * 			      our guidelines at http://t3-framework.org/contribute
 *------------------------------------------------------------------------------
 */


defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
	  class='<jdoc:include type="pageclass" />'>

<head>
	<jdoc:include type="head" />
	<?php $this->loadBlock('head') ?>
	<?php $this->addCss('home') ?>
</head>

<?php if ($this->countModules('top-header')) : ?>
<body class="t3-has-navbar">
<?php else: ?>
<body>
<?php endif; ?>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

  <?php $this->loadBlock('top-header') ?>

  <?php $this->loadBlock('header') ?>

  <?php $this->loadBlock('mainnav') ?>

  <?php $this->loadBlock('home-wide') ?>

  <?php $this->loadBlock('top') ?>

  <?php $this->loadBlock('mainbody-home-2') ?>

  <?php $this->loadBlock('bottom') ?>

  <?php $this->loadBlock('footer') ?>

</div>

</body>
</html>