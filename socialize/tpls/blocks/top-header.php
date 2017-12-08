<?php
/**
 * @package   Socialize Template
 * @copyright JomSocial, Copyright (C) 2015 All rights reserved.
 */

defined('_JEXEC') or die;
?>

<!-- Script auth facebook -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1772715232968236',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Fim do Script auth facebook -->


<?php if ($this->countModules('top-header')) : ?>
<!-- TOP-HEADER -->
<jdoc:include type="modules" name="<?php $this->_p('top-header') ?>" />
<!-- //TOP-HEADER -->
<?php endif ?>

