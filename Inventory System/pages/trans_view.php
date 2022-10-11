<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
  
            
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="form-group row text-left mb-0">
                <div class="col-sm-9">
                  <h5 class="font-weight-bold">
                    Sales and Inventory
                  </h5>
                </div>
                <div class="col-sm-3 py-1">
                  <h6>
                    Date: <?php echo $date; ?>
                  </h6>
                </div>
              </div>
<hr>
              <div class="form-group row text-left mb-0 py-2">
                <div class="col-sm-4 py-1">
                  <h6 class="font-weight-bold">
                    <?php echo $fname; ?> <?php echo $lname; ?>
                  </h6>
                  <h6>
                    Phone: <?php echo $pn; ?>
                  </h6>
                </div>
                <div class="col-sm-4 py-1"></div>
                <div class="col-sm-4 py-1">
                  <h6>
                    Transaction #<?php echo $tid; ?>
                  </h6>
                  <h6 class="font-weight-bold">
                    Encoder: <?php echo $role; ?>
                  </h6>
                  <h6>
                    <?php echo $roles; ?>
                  </h6>
                </div>
              </div>
          <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Products</th>
                <th width="8%">Qty</th>
                <th width="20%">Price</th>
                <th width="20%">Subtotal</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
            <div class="form-group row text-left mb-0 py-2">
                <div class="col-sm-4 py-1"></div>
                <div class="col-sm-3 py-1"></div>
                <div class="col-sm-4 py-1">
                  <h4>
                    Cash Amount: ₱ <?php echo number_format($cash, 2); ?>
                  </h4>
                  <table width="100%">
                    <tr>
                      <td class="font-weight-bold">Subtotal</td>
                      <td class="text-right">₱ <?php echo $sub; ?></td>
                    </tr>
                    <tr>
                      <td class="font-weight-bold">Less VAT</td>
                      <td class="text-right">₱ <?php echo $less; ?></td>
                    </tr>
                    <tr>
                      <td class="font-weight-bold">Net of VAT</td>
                      <td class="text-right">₱ <?php echo $net; ?></td>
                    </tr>
                    <tr>
                      <td class="font-weight-bold">Add VAT</td>
                      <td class="text-right">₱ <?php echo $add; ?></td>
                    </tr>
                    <tr>
                      <td class="font-weight-bold">Total</td>
                      <td class="font-weight-bold text-right text-primary">₱ <?php echo $grand; ?></td>
                    </tr>
                  </table>
                </div>
                <div class="col-sm-1 py-1"></div>
              </div>
            </div>
          </div>


<?php
include'../includes/footer.php';
?>
