<div class="container" style="margin-top:50px;">
    <h1><span><b>G</b></span>yframe</h1> 
    <span class="text-info">Simple php framework for lazy collegue students.</span>
    <hr>
    <h3 class="text-primary">Help page.</h3>
    <ul>
        <li><a href="home">Home page.</a></li>
    </ul>
    <hr>
    <?php
        $r = false;
        $exploded = explode("-", $data["params"][3]);
        if(is_array($exploded)){
            $r = true;
            $replaced = str_replace("-", " ", $data["params"][3]);
            $msg = $replaced;
        }else{
            $msg = $data["params"][3];
        }
        
        if(count($data["params"]) == 4){   
    ?>      
        <p>Now you're viewing the help page for the <b><?php echo $msg;?></b> topic.</p>
    <?php 
        }else{
    ?>
        <p>This is the main page for the help view.</p>
    <?php
        }
    ?>      
</div>