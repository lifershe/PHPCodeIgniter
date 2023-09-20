<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
<div class='container'>
    <div class='row'>
        <h1>Delete Item </h1>
        <form action="<?= base_url('item/delete/' . $item->id) ?>" method="POST">
            <input type="hidden" name="id" value="<?= $item->id ?>"> <!-- need to access id -->
            <a href="<?=base_url()?>item/index" style="width: 60px;" type="button" class="btn btn-outline-primary">Back</a>
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Name</label> 
                <div class="col-8">
                <input id="name" name="name" value="<?= $item->name?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-4 col-form-label">Price</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">PHP</div>
                    </div> 
                    <input id="price" value="<?= $item->price?>" name="price"  type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-4 col-form-label">Description</label> 
                <div class="col-8">
                    <textarea id="description" name="description" cols="40" rows="5" class="form-control"><?= $item->description ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form> 
    </div>
</div>
<?= $this->endSection('content') ?>
