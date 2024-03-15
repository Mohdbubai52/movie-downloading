<?php
?>


<div class="main">
<div class="utable-container">


    
    <form action="" method="post" enctype="multipart/form-data" class="pro-form">
        <h2>Poduct Upload Page</h2>
        <p>name</p>
        <input type="text" name="product_name" id="">
        <p>tittle</p>
        <input type="text" name="tittle" id="">
        <p>about</p>
        <input type="text" name="about" id="">
        <p>Upload Image</p>
        <input type="file" name="image" id="">
        <br>
        <input type="radio" name="movie" value="fast" class="radio">
        <label for="fast">fast</label>
        <br>
        <input type="radio" name="movie" value="harry" class="radio">
        <label for="harry">harry</label>
        <br><br>
        <button type="submit" name="pro_submit">Upload</button>
    </form>
    </div>
    </div>
    
<style>
   body{
    height: 100%;
   }
    .utable-container{

        text-align: center;
        justify-content: center;
    }
    .utable-container .pro-form{
        background-color: #aca7ab;
        justify-items: center;
    }
    .pro-form
    {
        height:100%;
    }
    button{
        width: 100%;
        border-radius: 2px;
       background-color: red;
    }
    .radio{
        color: blue;
    }
</style>