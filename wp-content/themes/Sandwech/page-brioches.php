<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-studente.php"); ?>
    <div class="col-9">
        <table id="brioches" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>ID</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

<script>
    $(window).on('load', function() {
        $('#brioches tbody').on('click', 'tr', function() {
            const id = $(this).attr("id").split("_");
            console.log("brioche: " + id[1]);
        });
    });
</script>

<?php

require("php/btn-tag.php");
get_footer();

?>