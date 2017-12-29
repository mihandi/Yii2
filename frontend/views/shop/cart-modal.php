
<?php if (!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">

            <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($session['cart'] as $id => $item):?>
            <tr>
                <td><?= $item['image']?></td>
                <td><?= $item['title']?></td>
                <td><?= $item['qty']?></td>
                <td><?= $item['price']?></td>
                <td><a href="#"><span class="glyphicon glyphicon-remove" onclick="RemoveItem(<?= $id?>)"  aria-hidden="true"></span></a></td>
            </tr>
            <?php endforeach;?>
            <tr>
                <td colspan="4"> At all</td>
                <td><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">Sum</td>
                <td><?= $session['cart.sum'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
<h3>Cart is empty</h3>
<?php endif; ?>


<script>


    function showCart(cart) {
        $('#cart .modal-body').html(cart);
        $('#cart').modal();
    }

    function RemoveItem(id) {
        $.ajax({
            url: '/cart/remove-cart-item',
            data: {id: id},
            type: 'GET',
            success: function (res) {
                if(!res){alert('product does not exist');}
                showCart(res);
            },
            error:function () {
                alert('Error');
            }

        });
    }
</script>
