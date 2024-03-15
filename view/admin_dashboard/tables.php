<main>
    <body class="user-table">
        <div class="recent-orders">
        <div class="utable-container">
        <h1>User Table</h1>
        <table class="utable">
            <thead>
                <tr class="utr">
                    <th class="uth">Name</th>
                    <th class="uth">Phone Number</th>
                    <th class="uth">Email ID</th>
                </tr>
            </thead>
            <tbody>  
        <?php
        foreach($response['data'] as $user)
        {
            ?>
            <tr>
            <td> <?php echo $user->NAME; ?> </td>
            <td> <?php echo $user->NUMBER; ?> </td>
            <td> <?php echo $user->EMAIL; ?> </td>
            </tr>
            <?php
        }
        ?>
            </tbody>
        </table>      
        <table>
            <thead>
                <tr class="utr ">
                    <th class="uth">Movie ID </th>
                    <th class="uth">Movie Name</th>
                    <th class="uth">Movie_IMG</th>
                    <th class="uth">Movie Tittle</th>                  
               </tr>
            </thead>>
            <tbody>   
               <?php
               foreach($responses['data'] as $products)
               { 
                   ?>
                   <tr>
                   <td> <?php echo $products->product_ID; ?> </td>
                   <td> <?php echo $products->NAME; ?> </td>
                   <td> <?php echo $products->Product_IMG; ?> </td>
                   <td> <?php echo $products->tittle; ?> </td>
                  <td>


                   <form action="updates" method="post">
                        <a href="updates">
                            <button name="product_ID" value="<?php echo $products->product_ID; ?>" class="update-btn">
                                update
                            </button>
                        </a>
                   </form>
                   <form action="" method="post">
                    <a href="">
                        <button name="delete_btn" value="<?php echo $products->product_ID; ?>"  class="delete-btn">
                                delete
                        </button>
                    </a>
                   </form>
               </td>
                   </tr>
                   </tr>
                   <?php
               }             
               ?>      
            </tbody>
            <tbody>
        </tbody>
        <table>
            <thead>
                <tr class="utr ">
                    <th class="uth">Movie ID </th>
                    <th class="uth">Movie Name</th>
                    <th class="uth">Movie_IMG</th>
                    <th class="uth">Movie Tittle</th>
                </tr>
            </thead>>
            <tbody>
               <?php
               foreach($harry['data'] as $products)
               { 
                   ?>
                   <tr>
                   <td> <?php echo $products->harry_ID; ?> </td>
                   <td> <?php echo $products->NAME; ?> </td>
                   <td> <?php echo $products->Product_IMG; ?> </td>
                   <td> <?php echo $products->tittle; ?> </td>
                   <td>


                   <form action="updates" method="post">
                        <a href="updates">
                            <button name="harry_ID" value="<?php echo $products->harry_ID; ?>" class="update-btn">
                                                update
                            </button>
                        </a>
                   </form>
                   <form action="" method="post">
                    <a href="">
                        <button name="delete_btn" value="<?php echo $products->harry_ID; ?>" class="delete-btn">
                                                delete
                        </button>
                    </a>
                   </form>
               </td>
                   </tr>
                   <?php
               }
               ?>
                   </tbody>
            <tbody>
        </tbody>
        </table>
    </div>
    </div>
</body>
</main>
<style>
        .user-table {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5 ;
            margin: 0;
            padding: 0;
            width: 800px;
            /* width: 100%; */
        }
        .utable-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #E2E0E0  ;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 500px;
            width: 600px;
        }
        .utable {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 2px;
        }
        .uth, .utd {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .uth {
            background-color: #f2f2f2;
        }
        .utr:hover {
            background-color: #f5f5f5;
        }
        .update-btn
        {
            background: green;
            color: black;
        }
        .delete-btn {
            background : red;
            color: black;
        }
    </style>