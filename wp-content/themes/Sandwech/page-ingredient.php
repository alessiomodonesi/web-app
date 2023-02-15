<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-vendite.php"); ?>
    <div class="col-9">
        <table id="ingredient" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Extra</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>