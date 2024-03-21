<div class="page-wrapper">
           
            <div class="container-fluid">
                
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Table </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table </li>
                        </ol>
                    </div>
                    
                </div>

                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table</h4>
                               
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Email ID</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        foreach($response['data'] as $user)
        {
            ?>
            <tr>
            <td> <?php echo $user->ID; ?> </td>
            <td> <?php echo $user->name; ?> </td>
            <td> <?php echo $user->ph_number; ?> </td>
            <td> <?php echo $user->Email; ?> </td>
            <td> <?php echo $user->Role; ?> </td>
            </tr>
            <?php
        }
       
        ?>
                                        </tbody>
                                        
                                    </table>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>images</th>
                                                <th>Price</th>
                                                <th>details</th>
                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
        foreach($responses['data'] as $user)
        {
            ?>
            <tr>
            <td> <?php echo $user->Product_ID ; ?> </td>
            <td> <?php echo $user->Product_Name; ?> </td>
            <td> <?php echo $user->Product_IMG; ?> </td>
            <td> <?php echo $user->Product_Price; ?> </td>
            <td> <?php echo $user->Product_Details; ?> </td>
            </tr>
            <?php
        }
       
        ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
