<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-studente.php"); ?>
    <div class="col-10">
        <table id="piadine" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<?php get_footer(); ?>