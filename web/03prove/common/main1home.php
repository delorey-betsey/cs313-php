<main>
    <div>
        <!-- FIRST DIV--COMMENT:  main title     -->
        <div class="main1" >
            <?php include 'modules/title.php'; ?>
        </div>
        <?php echo $_SESSION['username']; ?>        
        <!-- SECOND DIV--COMMENT:  main inventory     -->
        <div class="main2" >  
            <?php include 'modules/inventory.php'; ?>                    
        </div>
      
    </div>
</main>

