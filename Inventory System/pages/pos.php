           ?>
                <div class="row">
                <div class="col-lg-12">
                  <div class="card shadow mb-0">
                  <div class="card-header py-2">
                    <h4 class="m-1 text-lg text-primary">Product category</h4>
                  </div>
                        <!-- /.panel-heading -->
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                              <li class="nav-item">
                                <a class="nav-link" href="#" data-target="#keyboard" data-toggle="tab">Keyboard</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" data-target="#mouse" data-toggle="tab">Mouse</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#headset" data-toggle="tab">Headset</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#cpu" data-toggle="tab">CPU</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#monitor" data-toggle="tab">Monitor</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#motherboard" data-toggle="tab">Motherboard</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#processor" data-toggle="tab">Processor</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#powersupply" data-toggle="tab">Power Supply</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#others" data-toggle="tab">Others</a>
                              </li>
                            </ul>

<!-- TAB PANE AREA - ANG UNOD KA TABS ARA SA TABPANE.PHP -->
<?php include 'postabpane.php'; ?>
<!-- END TAB PANE AREA - ANG UNOD KA TABS ARA SA TABPANE.PHP -->

        <div style="clear:both"></div>  
        <br />  
        <div class="card shadow mb-4 col-md-12">
        <div class="card-header py-3 bg-white">
          <h4 class="m-2 font-weight-bold text-primary">Point of Sale</h4>
        </div>
        
      <div class="row">    
      <div class="card-body col-md-9">
        <div class="table-responsive">

        <!-- trial form lang   -->
<form role="form" method="post" action="pos_transac.php?action=add">
  <input type="hidden" name="employee" value="<?php echo $_SESSION['FIRST_NAME']; ?>">
  <input type="hidden" name="role" value="<?php echo $_SESSION['JOB_TITLE']; ?>">
  
        <table class="table">    
        <tr>  
             <th width="55%">Product Name</th>  
             <th width="10%">Quantity</th>  
             <th width="15%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
        </tr>  
        <?php  

        if(!empty($_SESSION['pointofsale'])):  
            
             $total = 0;  
        
             foreach($_SESSION['pointofsale'] as $key => $product): 
        ?>  
        <tr>  
          <td>
            <input type="hidden" name="name[]" value="<?php echo $product['name']; ?>">
            <?php echo $product['name']; ?>
          </td>  

           <td>
            <input type="hidden" name="quantity[]" value="<?php echo $product['quantity']; ?>">
            <?php echo $product['quantity']; ?>
          </td>  

           <td>
            <input type="hidden" name="price[]" value="<?php echo $product['price']; ?>">
            ₱ <?php echo number_format($product['price']); ?>
          </td>  

           <td>
            <input type="hidden" name="total" value="<?php echo $product['quantity'] * $product['price']; ?>">
            ₱ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>  
           <td>
               <a href="pos.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn bg-gradient-danger btn-danger"><i class="fas fa-fw fa-trash"></i></div>
               </a>
           </td>  
        </tr>
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);
             endforeach;  
        ?>


        <?php  
        endif;
        ?>  
        </table> 
         </div>
       </div> 

<?php
include 'posside.php';
include'../includes/footer.php';
?>