<?php include_once "config/config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        
    <title>Arkademy COFFE SHOP</title>
</head>
<body>
    <!-- awal navbar -->
    <nav style="height: 5rem; background-color: #e3f2fd;" class="navbar navbar-expand-lg navbar-light justify-content-between">
        <div class="container">
            <a style="margin-left: 30px;" class="navbar-brand" href="#">Arkademy <b>COFFE SHOP</b></a>
            <a href="" style="margin-right: 30px;" onclick="return confirm('Add Data')" class="btn btn-primary btn-xs text-right">Add</a>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- awal tabel -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="float-right">
                                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="data">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Cashier</th>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         <?php
                                            $no=1;
                                            $query = "SELECT C.name AS cashier, P.id As product, CT.name As category, P.price As price
                                                        FROM product P
                                                        JOIN cashier C ON C.id = P.id_cashier
                                                        JOIN category CT ON CT.id = P.id_category
                                                        ORDER BY P.price";

                                            $sql_user = mysqli_query($con, $query) or die (mysqli_error($con));
                                            if (mysqli_num_rows($sql_user) > 0) {
                                                while($data = mysqli_fetch_array($sql_user)){?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $data['cashier'] ?></td>
                                                    <td><?php echo $data['product'] ?></td>
                                                    <td><?php echo $data['category'] ?></td>
                                                    <td><?php echo $data['price'] ?></td>
                                                    <td align="center">
                                                        <a class="text-success" onclick="return confirm('Edit Data')">Edit</a> | <a onclick="return confirm('Yakin ingin meghapus data ?')" class="text-danger"> Delete</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            }else{
                                                echo "<tr><td colspan=\"6\" align=\"center\">Data tidak temukan</td></tr>";
                                            }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>