<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <?php include("header.php"); ?>

    <div class="container">

    
        <table class="table">
            <h2 style='margin-bottom: 20px;'>All Products</h2>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php


                    $sql = "SELECT * FROM `product`";

                    $response = $conn->query($sql);
                    
                    if($response->num_rows > 0){
                        while($row = $response->fetch_assoc()){
                            echo "<tr>
                                    <th scope='row'>1</th>
                                    <td>{$row['name']}</td>
                                    <td>{$row['description']}</td>
                                    <td>&#36;{$row['purchase_price']}</td>
                                    <td>{$row['quantity']}</td>
                                    <td>
                                        <a href='updateproduct.php?id={$row['id']}'>Update</a>
                                        <a href='deleteproduct.php?id={$row['id']}'>Delete</a>
                                    </td>
                                </tr>";
                        }
                    }

                ?>

            </tbody>
        </table>
    </div>

   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>