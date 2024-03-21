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
                                    <?php
                                     echo "<pre>";
                                     print_r($responses);
                                    echo "</pre>";
                                    foreach($responses as $products)
                                    {
                                        ?>
                                             <td> <?php echo  $products->Product_Name; ?> </td>
                                            <td> <?php echo  $products->Product_Price; ?></td>
                                            
                                            <?php 
                                                
                                    }
                                    
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Product Name</th>
                                                <th>Product Price </th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>state</th>
                                                <th>city</th>
                                                <th>zip</th>
                                                <th>address</th>
                                                <th>selection </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <?php 
            foreach($responses as $products)
            {
                ?>
                <tr>
                    <td> <?php echo  $products->Product_Name; ?> </td>
                    <td> <?php echo  $products->Product_Price; ?></td>
                <!-- </tr> -->
                <?php 
                        
                    }
                    
                    ?>
                                        <?php
                                        
                                        foreach($response['data'] as $user)
                                        {
                                            ?>
                                            <!-- <tr> -->
            <td> <?php echo $user->ID; ?> </td>
            <td> <?php echo $user->Name; ?> </td>
            <td> <?php echo $user->Phone; ?> </td>
            <td> <?php echo $user->State; ?> </td>
            <td> <?php echo $user->City; ?> </td>
            <td> <?php echo $user->zip; ?> </td>
            <td> <?php echo $user->address; ?> </td>
           
           
            <td>
                <button type="submit" name="accept"  class="btn btn-success">accept</button>
                <button type="submit" name="pending"  class="btn btn-primary">pending</button>
                <button type="submit" name="pending"  class="btn btn-danger">reject</button>
             </td>
            </tr>
            <?php
        }
       
        ?>
                                        </tbody>
                                        
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
