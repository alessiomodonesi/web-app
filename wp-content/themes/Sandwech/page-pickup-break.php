<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-mng.php"); ?>
    <div class="col-9">
        <table id="pickup-break" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Pickup</th>
                    <th>Break</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>