<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
	<div class="container">
		<h1>Inventory</h1>
		<a style="margin-bottom: 10px" class="btn btn-primary" href="<?=base_url()?>item/add" role="button">Add Item</a>
	
		<form action="<?= base_url() ?>item/search" method="post">
			<div class="input-group mb-3">
				<input type="text" name="search_query" class="form-control" placeholder="Search by name">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit">Search</button>
				</div>
			</div>
		</form>
		<div style="padding: 10px" class="row">
		<?php if (!empty($items)) : ?>
			<table  class="table table-striped">
				<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Qty</th>
					<th>Action</th>
					<th>Images</th>
				</tr>
			</thead>
			<tbody >
				<?php foreach ($items as $item) : ?> 
					<tr onclick="window.location.href='<?= base_url() ?>item/view/<?= $item->id ?>';" role="button">
						<td><?= $item->id ?></td>
						<td><?= $item->name ?></td>
						<td><?= $item->price ?></td>
						<td><?= $item->qty ?></td>
						<td>
							<!-- <a class="btn btn-primary" href="<?=base_url()?>item/view/<?=$item->id?>" role="button">View</a> -->
							<a class="btn btn-warning" href="<?=base_url()?>item/edit/<?=$item->id?>" role="button">Edit</a>
							<a class="btn btn-danger" href="<?=base_url()?>item/delete/<?=$item->id?>" role="button">Delete</a>
						</td>
						<td>
							<img src="<?php echo $item->url; ?>" alt="Image" class="thumbnail-image">
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
			</table>
			<?php else : ?>
				<p>No items found.</p>
			<?php endif; ?>
		</div>
	</div>

<?= $this->endSection('content') ?>