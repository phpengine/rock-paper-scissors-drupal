<div class="gamingWrap">
    <div class="playimg">
        <div class="resultfieldsettitle">
            <?php if ($pageVars["playerChoices"]["p1"]["type"]=="human") { ?>
                <h2 class="resultfieldsettitle">Human Player 1</h2>
            <?php } else { ?>
                <h2 class="resultfieldsettitle">Computer Player 1</h2>
            <?php } ?>
            <?php if ($pageVars["results"]["p1"]=="win") { ?>
                <h2 class="resultfieldsettitle">Winner</h2>
            <?php } else if ($pageVars["results"]["p1"]=="draw")  {?>
                <h2 class="resultfieldsettitle">Draw</h2>
            <?php } else { ?>
                <h2 class="resultfieldsettitle">Loser</h2>
            <?php } ?>
        </div>
        <div class="resultfieldsetbody">
            <?php if ( $pageVars["playerChoices"]["p1"]["choice"]=="rock" ) { ?>
                <div class="playimg"><img src="sites/all/modules/gc_rpsgame/Assets/images/stone.png" alt="Rock" /> </div>
            <?php } else if ( $pageVars["playerChoices"]["p1"]["choice"]=="paper" ) { ?>
                <div class="playimg"><img src="sites/all/modules/gc_rpsgame/Assets/images/paper.png" alt="Paper" /> </div>
            <?php } else if ( $pageVars["playerChoices"]["p1"]["choice"]=="scissors" ) {  ?>
                <div class="playimg"><img src="sites/all/modules/gc_rpsgame/Assets/images/scissors.png" alt="Scissors" /> </div>
            <?php } ?>
        </div> <!-- end resultfieldsetbody -->
    </div> <!-- end resultfieldset -->

    <div class="vsHolder">
        <img src="sites/all/modules/gc_rpsgame/Assets/images/vs_ebay.jpg" />
    </div>

    <div class="playimg">
        <div class="resultfieldsettitle">
            <?php if ($pageVars["playerChoices"]["p2"]["type"]=="human") { ?>
                <h2 class="resultfieldsettitle">Human Player 2</h2>
            <?php } else { ?>
                <h2 class="resultfieldsettitle">Computer Player 2</h2>
            <?php } ?>

            <?php if ($pageVars["results"]["p2"]=="win") {  ?>
                <h2 class="resultfieldsettitle">Winner</h2>
            <?php } else if ($pageVars["results"]["p2"]=="draw") { ?>
                <h2 class="resultfieldsettitle">Draw</h2>
            <?php } else {  ?>
                <h2 class="resultfieldsettitle">Loser</h2>
            <?php } ?>

        </div>
        <div class="resultfieldsetbody">

            <?php if ( $pageVars["playerChoices"]["p2"]["choice"]=="rock" ) {  ?>
                <div class="playimg"><img src="sites/all/modules/gc_rpsgame/Assets/images/stone.png" alt="Rock" /> </div>
            <?php } else if ( $pageVars["playerChoices"]["p2"]["choice"]=="paper" ) {  ?>
                <div class="playimg"><img src="sites/all/modules/gc_rpsgame/Assets/images/paper.png" alt="Paper" /> </div>
            <?php } else if ( $pageVars["playerChoices"]["p2"]["choice"]=="scissors" ) {  ?>
                <div class="playimg"><img src="sites/all/modules/gc_rpsgame/Assets/images/scissors.png" alt="Scissors" /> </div>
            <?php } ?>


        </div>
    </div>
</div>