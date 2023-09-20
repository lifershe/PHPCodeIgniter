<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
<div class='container'>
    <div class='row'>
        <h1>View Item </h1>
        <a href="<?=base_url()?>item/index" style="width: 60px;" type="button" class="btn btn-outline-primary">Back</a>
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Name</label> 
                <div class="col-8">
                <input readonly id="name" name="name" value="<?= $item->name?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-4 col-form-label">Price</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">PHP</div>
                    </div> 
                    <input readonly id="price" value="<?= $item->price?>" name="price"  type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-4 col-form-label">Description</label> 
                <div class="col-8">
                    <textarea readonly id="description" name="description" cols="40" rows="5" class="form-control"><?= $item->description ?></textarea>
                </div>
            </div>
    </div>
</div>
<?= $this->endSection('content') ?>
