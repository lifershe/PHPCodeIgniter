<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
<div class='container'>
    <div class='row'>
        <h1>List of Items </h1>
        <a href="<?=base_url()?>item/add" style="width: 60px;" type="button" class="btn btn-outline-primary">Add</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $item): ?>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->name ?></td>
                        <td><?= $item->price ?></td>
                        <td>
                        <a class="btn btn-primary" href="<?= base_url() ?>item/view/<?=$item->id?>" role="button">View</a>
                        <a class="btn btn-warning" href="<?= base_url() ?>item/edit/<?=$item->id?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="<?= base_url() ?>item/delete/<?=$item->id?>" role="button">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection('content') ?>
