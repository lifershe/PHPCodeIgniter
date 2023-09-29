<?= $this->extend('item/layout/main') ?>
<?= $this->section('content') ?>
    <div class="container">
        <!-- <h1>View Item</h1> -->
        <a style="margin-top: 10px" class="btn btn-primary" href="<?= base_url() ?>item/index" role="button">Back</a>
        <div class="row">
            <h1>Description</h1>
            <!-- Left column for the image -->
            <div class="col-md-4">
                <div class="form-group">
                   <img src="<?php echo $item->url; ?>" alt="Image" class="hover-image">
                </div>
            </div>

             <!-- Right column for the name, price, and description -->
            <div style="margin-top: 100px" class="col-md-8">
				<div class="form-group" style="display: flex; align-items: center;">
					<label style="font-weight: bolder" for="name" class="col-form-label">Name : ⠀</label>
					<h1> <?= $item->name ?></h1>
				</div>
				<div class="form-group" style="display: flex; align-items: center;">
					<label style="font-weight: bolder" for="price" class="col-form-label">Price : ⠀</label>
					<h1> <?= $item->price ?><h4>php</h4></h1>
				</div>
                <div class="form-group" style="display: flex; align-items: center;">
					<label style="font-weight: bolder" for="qty" class="col-form-label">Qty : ⠀</label>
					<h1> <?= $item->qty ?><h4>pcs</h4></h1>
				</div>
				<div class="form-group" style="display: flex; align-items: center;">
					<label style="font-weight: bolder" for="description" class="col-form-label">Description : ⠀</label>
					<h1> <?= $item->description ?></h1>
				</div>
            </div>
        </div>
    </div>
<?= $this->endSection('content') ?>
