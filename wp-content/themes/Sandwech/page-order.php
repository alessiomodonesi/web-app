<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-vendite.php"); ?>
    <div class="col-9">
        <table id="order" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Class</th>
                    <th>Price</th>
                    <th>Created</th>
                    <th>Pickup</th>
                    <th>Break</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>