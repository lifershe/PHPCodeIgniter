<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
	<div class="container">
		<h1>Add Item</h1>
		<a class="btn btn-primary" href="<?=base_url()?>item/index" role="button">Back</a>
		<div class="row">
			<?= form_open('item/add')?>
			<?php

			$data = [
			    'name'  => 'name',
			    'id' => 'name',
			    'value'   => set_value('name'),
			    'placeholder' => 'Item Name',
			    'class' => 'form-control'
			];
			?>
			<?= form_input($data)?>
		</div>
	</div>

<?= $this->endSection('content') ?>