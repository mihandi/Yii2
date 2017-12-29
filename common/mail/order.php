 <div class="table-responsive">
        <table class="table table-hover table-striped">

            <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($session['cart'] as $id => $item):?>
                <tr>
                    <td><?= $item['image']?></td>
                    <td><?= $item['title']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['price']?></td>
                </tr>
            <?php endforeach;?>
            <tr>
                <td colspan="3"> At all</td>
                <td><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="3">Sum</td>
                <td><?= $session['cart.sum'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>




