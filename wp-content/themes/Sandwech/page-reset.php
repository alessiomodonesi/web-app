<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-mng.php"); ?>
    <div class="col-10">
        <table id="reset" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Password</th>
                    <th>Requested</th>
                    <th>Expires</th>
                    <th>Completed</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>