<?php require("page.php"); ?>

<div class="row">
    <?php require("php/table-list-studente.php"); ?>
    <div class="col-9">
        <table id="carrello" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>
<div class="row">
    <div class="position-relative">
        <div class="btn-group position-absolute top-50 start-50 translate-middle" role="group">
            <a class="btn btn-outline-dark btn-cart" href="#" role="button">Ordina</a>
        </div>
    </div>
</div>


<?php get_footer(); ?>