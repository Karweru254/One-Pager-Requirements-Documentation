
  <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Edit Product</h4>
            </div>
            <a href="product.php?action=add" type="button" class="btn btn-primary bg-gradient-primary">Back</a>
            <div class="card-body">

            <form role="form" method="post" action="pro_edit1.php">
              <input type="hidden" name="id" value="<?php echo $zz; ?>" />
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Product Code:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Product Code" name="prodcode" value="<?php echo $zzz; ?>" readonly>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Product Name:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Product Name" name="prodname" value="<?php echo $A; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Description:
                </div>
                <div class="col-sm-9">
                   <textarea class="form-control" placeholder="Description" name="description"><?php echo $B; ?></textarea>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Price:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Price" name="price" value="<?php echo $C; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-warning">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Categoty:
                </div>
                <div class="col-sm-9">
                   <?php
                    echo $opt;
                   ?>
                </div>
              </div>
              <hr>

                <button type="submit" class="btn btn-warning btn-block"><i class="fa fa-edit fa-fw"></i>Update</button>    
              </form>  
            </div>
          </div></center>

<?php
include'../includes/footer.php';
?>