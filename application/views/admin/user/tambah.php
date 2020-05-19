<?php 
// notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

// form open
echo form_open(base_url('admin/user/tambah'));
?>

<?php echo form_close(); ?>