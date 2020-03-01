<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<title></title>
</head>
<body>

<button type="button" class="btn btn-dark m-3 p-3" data-toggle="modal" data-target="#Modal">Text</button>


  <div class="modal fade" id="Modal">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Form Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> 

        <div class="modal-body">
        	<form action="#" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Order ID" name="order_id" autofocus>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Product ID" name="product_id">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Customer Details" name="customer_details">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Product Title" name="product_title">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Amount" name="amount">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Quantity" name="quantity">
				</div>
				<div class="form-group">
					<input type="date" class="form-control" placeholder="Date" name="date">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Shipping Cost" name="shipping_cost">
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="3" name="description" maxlength="500" placeholder="Type here...."></textarea>
				</div>
			</form>	
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" name="submit-btn" class="btn btn-success">Submit</button>
        </div>
        
      </div>
    </div>
  </div>
</body>
</html>