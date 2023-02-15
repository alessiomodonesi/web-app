<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-vendite.php"); ?>
    <div class="col-9">
        <table id="product-offer" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>