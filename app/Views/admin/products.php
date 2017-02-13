<?php $this->layout('layout_dashboard', ['title' => 'Administration des produits du mois']) ?>

<?php $this->start('main_content') ?>
<?php if (!empty($_COOKIE['successMsg'])) { ?>
    <section>
        <div class="alert alert-success" role="alert"><?= $_COOKIE['successMsg'] ?></div>
    </section>
<?php } ?>
<div class="Wineofmonth">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <form class="form" id="winesOfTheMonth" action="<?= $this->url('admin_products') ?>" method="post">
                    <table border="1" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Vin du mois</th>
                                <th>Description</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($products as $product) : ?>
                            <tr>
                                <td><label for="<?= $product['id'] ?>"><?= $product['name'];?></label></td>
                                <td><input type="checkbox" class="wine_of_the_month" name="wine_of_the_month[]" id="<?= $product['id'] ?>" value="<?= $product['id'] ?>" <?php if ($product['checked'] == 1) { echo 'checked="checked"'; } ?> /></td>
                                <td><?= $product['description'];?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>

                    <span class="help-block" <?php if (empty($error)) { echo 'style="display: none"'; } ?>>
                        <?php if (isset($error)) { echo $error; } ?>
                    </span>
                <div class="row">
                        <div class="col-lg-12">
                            <div class="BtnSubmit">
                                <input type="submit" name="submit" value="Valider" class="btn btn-default"/>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('js') ?>
    <script src="<?= $this->assetUrl('js/forms.js') ?>"></script>
<?php $this->stop('js') ?>
