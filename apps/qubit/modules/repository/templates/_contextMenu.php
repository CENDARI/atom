<?php echo get_component('repository', 'logo') ?>

<?php if (QubitAcl::check($resource, 'update')): ?>
  <?php include_component('repository', 'uploadLimit', array('resource' => $resource)) ?>
<?php endif; ?>

<?php if ($resource->getRawValue() instanceof QubitRepository): ?>
  <?php include_component('repository', 'holdings', array('resource' => $resource)) ?>
<?php endif; ?>
