<?php

// echo "<pre>";
// print_r($data);
// echo "</pre>";


// echo $data['data'][0]->tittle;
// echo $data['data'][0]->about;
?>
<div class="display-container">
<?php
foreach($data as $products)
{

    ?>
    
        <div class="movie-dis">
            <h3>
        <?php echo $data['data'][0]->tittle;?>
</h3>
        </div>
        <div class="movie-img">
            <img src="upload/<?php echo  $data['data'][0]->Product_IMG; ?>" alt="">
        </div>
        <div class="about-movie">
           <h3>
           <span>
            Story Line
           </span>

           </h3><br>
           <p>
           <?php echo $data['data'][0]->about;?>
           </p>
            </div>
            
        <div class="movie-links">
        <h3>Movie Links</h3>
            TBD
        </div>

    


<?php 
break;
}
?>
</div>

    <style>
        .display-container
{
    height: 100%;
    /* width: 100%; */
    margin: 2.4rem 8.5rem 1rem 8.5rem;
    border-radius: 0.8rem;
    background-color: rgb(62, 57, 57);
    display: flex;
    flex-direction: column;
    gap: 1rem;
    padding: 1rem;
}
.display-container h3{
    color: black;
    /* background-color: rgb(46, 43, 43); */
    font-size: 20px;
}
.display-container p{
    color: rgb(129, 125, 121);
}
.display-container .movie-img img{
    height: 23rem;
    width: 25rem;
}
.display-container .about-movie p{
    font-size: 16px;
    color: rgb(174, 170, 164);
}
.display-container .about-movie span{
    font-size: 25px;
    font-family: Cambria;
}
    </style>