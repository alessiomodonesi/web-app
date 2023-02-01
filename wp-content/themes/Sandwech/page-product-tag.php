<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-vendite.php"); ?>
    <div class="col-10">
        <table id="product-tag" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Tag</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>