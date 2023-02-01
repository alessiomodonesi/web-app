<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-vendite.php"); ?>
    <div class="col-10">
        <table id="nutritional-value" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Kcal</th>
                    <th>Grassi</th>
                    <th>Saturi</th>
                    <th>Carboidrati</th>
                    <th>Zuccheri</th>
                    <th>Proteine</th>
                    <th>Fibre</th>
                    <th>Sale</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>