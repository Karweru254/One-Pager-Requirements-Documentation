<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>
            
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Employee&nbsp;<a  href="#" data-toggle="modal" data-target="#employeeModal" type="button" class="btn btn-primary bg-gradient-primary" style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a></h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Role</th>
                          <th>Action</th>
                        </tr>
                     </thead>
                    <tbody>
                    

<?php
include'../includes/footer.php';
?>