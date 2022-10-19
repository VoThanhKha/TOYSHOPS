<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<label for="site-search">Search the site:</label>
<input type="search" id="site-search" name="q">

<button>Search</button>
</head>
<body>
<li class="nav-item">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Enter the search word" value = "" >
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </li>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "shop_200092");
                if(isset($_GET["Search"]) && !empty($_GET["Search"])){
                    $key = $_GET["Search"];
                    $sql = "SELECT * FROM product`(`Product_ID`, `Product_Name`, `Price`, `DetailDesc`, `Pro_qty`,`Pro_image`,`Cat_ID`)";
                }
                else
                {
                    $sql = "SELECT * FROM product";
                }
                $result = mysqli_query($conn, $sql);
            ?>
            <tr>
            <td>
            
            </form>
            </td>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result))
            {
            $proname = $row['Product_Name'];
            $price      = $row['Price'];
            $description      = $row['DetailDesc'];
            $quantity      = $row['Pro_qty'];
            // $proimage      = $row['Image'];
            $procate      = $row['Cat_ID'];
            ?>
            <tr>

                <td><?php echo $proname ?></td>
                <td><?php echo $price ?></td>
                <td><?php echo $description ?></td>
                <td><?php echo $quantity ?></td>
                <td><?php echo $proimage ?></td>
                <td><?php echo $prprocateoid ?></td>
            </tr>
            <?php
            }
            ?>
            <?php
            mysqli_close($conn);?>
</body>
</html>
