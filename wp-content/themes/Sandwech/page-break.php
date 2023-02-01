<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-mng.php"); ?>
    <div class="col-10">
        <table id="break" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>