<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
    <div class="container d-flex justify-content-center align-items-center" style="padding: 50px">
        <form class="text-center" action="<?= base_url() ?>item/destroy/<?= $item->id ?>">
            <div>
                <h1>Remove the item?</h1>
                <h4>Are you sure you want to delete this record?</h4>
                <button name="submit" type="submit" class="btn btn-danger">Yes</button>
                <a href="<?= base_url() ?>item/index" class="btn btn-primary">No</a>
            </div>
			<img src="<?php echo $item->url; ?>" alt="Image" class="hover-image">
        </form>
    </div>
<?= $this->endSection('content') ?>