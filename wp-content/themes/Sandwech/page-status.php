<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-mng.php"); ?>
    <div class="col-9">
        <table id="status" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>