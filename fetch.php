<?php
    include('conn.php');
    if(isset($_POST['fetch'])){
        ?>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>ProductName</th>
                <th>Unit</th>
                <th>Price</th>
                <th>Date of expiry</th>
                <th>Available inventory</th>
                <th>Inventory cost</th>
                <th>Image</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php
                $query=$conn->query("select * from items");
                while($row=$query->fetch_array()){
                    ?>
                    <tr>
                        <td><span id="productname<?php echo $row['id']; ?>"><?php echo $row['productname']; ?></span></td>
                        <td><span id="unit<?php echo $row['id']; ?>"><?php echo $row['unit']; ?></span></td>
                        <td><span id="price<?php echo $row['id']; ?>"><?php echo $row['price']; ?></span></td>
                        <td><span id="expired<?php echo $row['id']; ?>"><?php echo $row['expired']; ?></span></td>
                        <td><span id="inventory<?php echo $row['id']; ?>"><?php echo $row['inventory']; ?></span></td>
                        <td><span id="sales<?php echo $row['id']; ?>"><?php echo $row['sales']; ?></span></td>
                        <td><span id="image<?php echo $row['id']; ?>"><?php echo $row['image']; ?></span></td>
                        <td>
                            <a style="cursor:pointer;" class="btn btn-warning edit" data-id="<?php echo $row['id']; ?>"><i class="bi bi-pencil"></i> Edit</a> || 
                            <a style="cursor:pointer;" class="btn btn-danger delete" data-id="<?php echo $row['id']; ?>"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <?php
                }
             
            ?>
            </tbody>
        </table>
        <?php
    }
?>