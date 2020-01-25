
<!--  inventory <div></div>  -->

<form method="post" action="cartpage.php">
    <div class="grouping">

        <div class="art">
            <div><a  class="item" href="../03prove/modules/dog1.php" title="dog1" >Item 1</a></div>       
            <input class=“largerCheckbox” type="checkbox" id="item1" name="items[]" value="item1">
            <br>
            <div><img   src="images/dog1.jpg"  alt= "dog1"  /> </div>
            <label for="item1">Item 1 - $10</label>
        </div>
        <br><br>

        <div class="art">   
            <div><a class="item" href="../03prove/modules/dog2.php" title="dog2" >Item 2</a> </div>
            <input class=“largerCheckbox” type="checkbox" id="item2" name="items[]" value="item2">
            <br>
            <div><img  src="images/dog2.jpg"  alt= "dog2"  /> </div>
            <label for="item2">Item 2 - $20</label>
        </div>
        <br><br>

        <div class="art">    
            <div><a class="item"  href="../03prove/modules/cat1.php" title="cat1" >Item 3</a></div>
            <input class=“largerCheckbox” type="checkbox" id="item3" name="items[]" value="item3">
            <br>
            <div><img  src="images/cat1.jpg"  alt= "cat1"  /> </div>
            <label for="item3">Item 3 - $30</label>
        </div>       
        <br><br>

        <div class="art">    
            <div><a class="item"  href="../03prove/modules/cat2.php" title="cat2" >Item 4</a></div>            
            <input class=“largerCheckbox” type="checkbox" id="item4" name="items[]" value="item4">
            <br>
            <div><img  src="images/cat3.jpg"  alt= "cat3"  /> </div>
            <label for="item4">Item 4 - $40</label>
        </div>
              
        <!-- <input type="submit" >  -->
        <button type="submit" name="addbutton" value="addbutton"><img src="images/addbutton.jpg" alt="addbutton"></button>      
        <br><br>
        
    </div>
</form>


  
