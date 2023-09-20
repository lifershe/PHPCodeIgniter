<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
<div class='container'>
    <div class='row'>
        <h1>Add Item </h1>
        <a href="<?=base_url()?>item/index" style="width: 60px;" type="button" class="btn btn-outline-primary">Back</a>
        <form action="<?=base_url()?>item/add" method="POST">
            
            <div class="alert alert-danger" role="alert">
                <?php if(isset($validation)): ?>
                    <?= $validation->listErrors(); ?>
                <?php endIf; ?>
            </div>

            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Name</label> 
                <div class="col-8">
                <input id="name" name="name" value="<?=set_value('name')?>" placeholder="Item name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-4 col-form-label">Price</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">PHP</div>
                    </div> 
                    <input id="price" value="<?=set_value('price')?>" name="price" placeholder="0" type="number" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-4 col-form-label">Description</label> 
                <div class="col-8">
                <textarea id="description" value="<?=set_value('description')?>" name="description" cols="40" rows="5" class="form-control"></textarea>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button  name="submit" type="submit" class="btn btn-primary">Submit</button>                
                </div>
            </div>
        </form>               
    </div>
</div>
<?= $this->endSection('content') ?>
