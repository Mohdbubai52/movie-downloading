<style>
    .main-container
    {
        height: 100%;
        width: 100%;
        background: lightgray;
        padding: 10px 10px;
        align-items: center;
        justify-content: center;
    }

    .main-container .input-container
    {
        height: 100%;
        width: 100%;
        background: whitesmoke;
        padding: 8px 8px;
        
    }
    .input-container input{
        
        border-radius: 3px solid black;
    }
    .input-container .lable
    {
        font-size: 12px;
        color: black;
    }
</style>
<div class="main-container">
    <h2>Update users</h2>
    <div class="input-container">
        <form action="update" method="post" enctype="multipart/form-data">
            <input type="text" name="NAME" value="<?php echo $data['data'][0]->NAME ?> ">
            <div class="lable">
                <label for="NAME">MOVIE NAME</label>
            </div>
           
            <input type="text" name="Product_IMG" value="<?php echo $data['data'][0]->Product_IMG?>">
            <img src="upload/<?php echo $data['data'][0]->Product_IMG ?>" alt="" height="100px" width="100px">
            <div class="lable">
                <label for="Product_IMG">MOVIE IMAGE NAME</label>
            </div>
            <!-- <input type="hidden"> -->
            <input type="text" name="tittle" value="<?php echo $data['data'][0]->tittle?>">
            <div class="lable">
                <label for="tittle">MOVIE TITTLE</label>
            </div>
            <button name="update-btn" type="submit" >update</button>
           
        </form>
    </div>
</div>







<?php
echo"<pre>";
print_r($data);
print_r($data['data'][0]->NAME);
echo"</pre>";


?>