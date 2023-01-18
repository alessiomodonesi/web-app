<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-vendite.php"); ?>
    <div class="col-1"></div>
    <div class="col-7">
        <table id="allergen" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
    <div class="col-2"></div>
</div>

<?php get_footer(); ?>