<!DOCTYPE html>
<html>
	<head>
		<title>UCM e-Store All Orders</title>
		<link rel="stylesheet" href="styles/main.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<?php 
				require_once('view/header.php');
			?>
			<main>
				<div class="d-flex justify-content-center mt-5" >
          <h2 class="text-danger">All Orders</h2>
        </div>
				<div class="row">
          <div class="col-12">
            <div class="d-flex justify-content-center footer-container p-2">
              <h5 class="text-white">Items</h5>
            </div>
            <div class="border border-danger mb-3">
            <!-- while($row = $result ->fetch_assoc())  use this loop below while fetching from db -->
            <?php for($i=0;$i<6;$i++) { ?>
              <div class="row p-2">
                <div class="col-2 d-flex justify-content-center">
                  <!-- <img src="images/tumbler.png" alt="..." height="100px"> -->
                  <?php 
                    echo '<img height="100px"';
                    echo 'alt='.$ordersList['productName'].' ';
                    echo 'src=images/'.$ordersList['productImage'];
                    echo '>';
                  ?>
                </div>
                <div class="col-2 d-flex align-items-center">
                  <div>Tumbler</div>
                </div>
                <div class="col-1 d-flex align-items-center">
                  <div class="form-floating">
                    <?php 
                      echo '<input type="number" class="form-control" id="floatingInput"  disabled value='.$ordersList['quantity'].'>';
                    ?>
                    <label for="floatingInput">Quantity</label>
                  </div>
                </div>
                <div class="col-1 d-flex align-items-center">
									<div class="form-floating">
                    <?php 
                      echo '<input type="number" class="form-control" id="unitPrice"  disabled value='.$ordersList['unitPrice'].'>';
                    ?>
                    <label for="unitPrice">Unit Price ($)</label>
                  </div>
                </div>
                <div class="col-1 d-flex align-items-center">
									<div class="form-floating">
                    <?php 
                      echo '<input type="number" class="form-control" id="totalPrice"  disabled value='.$ordersList['quantity']*$ordersList['unitPrice'].'>';
                    ?>
                    <label for="totalPrice">Total Price ($)</label>
                  </div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="form-floating" style="width: 100%">
                    <?php 
                      echo '<input type="text" class="form-control" id="orderedBy" disabled value='.$ordersList['orderedBy'].'>';
                    ?>
                    <label for="totalPrice">Ordered By</label>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center">
									<div class="form-floating">
                    <input type="date" class="form-control" id="dateOrdered" disabled  value="2022-11-02">
                    <label for="dateOrdered">Date ordered</label>
                  </div>
                </div>
              </div>
              <?php if ($i != 5) { ?>
                <!-- show only hr if the item is not the last element -->
                <hr>   
              <?php } ?>
            <?php };?>

            
							
              <!-- <div class="row p-2">
                <div class="col-2 d-flex justify-content-center">
                  <img src="images/tumbler.png" alt="..." height="100px">
                </div>
                <div class="col-2 d-flex align-items-center">
                  <div>Tumbler</div>
                </div>
                <div class="col-1 d-flex align-items-center">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="floatingInput"  disabled value="2">
                    <label for="floatingInput">Quantity</label>
                  </div>
                </div>
                <div class="col-1 d-flex align-items-center">
									<div class="form-floating">
                    <input type="number" class="form-control" id="unitPrice"  disabled value="10">
                    <label for="unitPrice">Unit Price ($)</label>
                  </div>
                </div>
                <div class="col-1 d-flex align-items-center">
									<div class="form-floating">
                    <input type="number" class="form-control" id="totalPrice"  disabled value="20">
                    <label for="totalPrice">Total Price ($)</label>
                  </div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="form-floating" style="width: 100%">
                    <input type="text" class="form-control" id="orderedBy" disabled value="customerEmail@ucmstore.com">
                    <label for="totalPrice">Ordered By</label>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center">
									<div class="form-floating">
                    <input type="date" class="form-control" id="dateOrdered" disabled  value="2022-11-02">
                    <label for="dateOrdered">Date ordered</label>
                  </div>
                </div>
              </div> -->

              
            </div>
          </div>
          
        </div>
			</main>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	</body>

</html>