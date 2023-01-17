<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-vendor.php"); ?>
    <div class="col-10">
        <table id="product-offer" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Offer</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>