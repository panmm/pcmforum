<?php $this->_extends('_layouts/default_layout'); ?>
<?php $this->_block('user')?>
<?php echo isset($_SESSION["acl_forum_userdata"]["username"]) ? $_SESSION["acl_forum_userdata"]["username"] :'用户'; ?>
<?php $this->_endblock(); ?>



<?php $this->_block('content')?>
<?php $this->_element('login'); ?>

<?php $this->_endblock(); ?>


