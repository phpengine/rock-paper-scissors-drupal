<div class="gamingWrap">
    <form id="playerChoices" method="POST" action="index.php">
        <div class="playimg">
            <div class="resultfieldsettitle">
                <h2 class="resultfieldsettitle"><img src="sites/all/modules/gc_rpsgame/Assets/images/player1.png" alt="Player 1" /></h2>
            </div>

            <div class="resultfieldsetbody">
                <div class="playimg">
                    <div class="playimginner">
                        <div class="row">
                            <span> <input type="radio" selected="selected" name="p1type" onchange='changePlayerType("p1");' id="p1radioComp" value="computer" /> Computer </span>
                        </div>
                        <div class="row">
                            <span> <input type="radio" name="p1type" id="p1radioHuman" onchange='changePlayerType("p1");' value="human" /> Human </span>
                        </div>
                    </div>
                    <div class="playimginner choicediv" id="p1choicediv">
                        <div class="row">
                            <h2>Choose:</h2>
                        </div>
                        <div class="row">
							<span class="lev1">
								<span class="lev2">
									<input type="radio" name="p1choice" id="p1radioPaper" onchange='changePlayerType("p1");' value="paper" /> <span class="lev3"> Paper </span>
								</span>
								<span class="lev2">
									<img src="sites/all/modules/gc_rpsgame/Assets/images/paper.png" alt="Paper" />
								</span>
							</span>
                        </div>
                        <div class="row">
							<span class="lev1">
								<span class="lev2">
									<input type="radio" name="p1choice" id="p1radioRock" onchange='changePlayerType("p1");' value="rock" /> <span class="lev3">  Rock </span>
								</span>
								<span class="lev2">
									<img src="sites/all/modules/gc_rpsgame/Assets/images/stone.png" alt="Rock" />
								</span>
							</span>
                        </div>
                        <div class="row">
							<span class="lev1">
								<span class="lev2">
									<input type="radio" name="p1choice" id="p1radioScissors" onchange='changePlayerType("p1");' value="scissors" /> <span class="lev3"> Scissors </span>
								</span>
								<span class="lev2">
									 <img src="sites/all/modules/gc_rpsgame/Assets/images/scissors.png" alt="Scissors" />
								</span>
							</span>
                        </div>
                    </div>
                </div>
            </div> <!-- end resultfieldsetbody -->
        </div> <!-- end resultfieldset -->

        <div class="vsHolder">
            <img src="sites/all/modules/gc_rpsgame/Assets/images/vs_ebay.jpg" style="border:none; float:left;" />
        </div> <!-- end resultfieldset -->

        <div class="playimg">
            <div class="resultfieldsettitle">
                <h2 class="resultfieldsettitle"><img src="sites/all/modules/gc_rpsgame/Assets/images/player2.png" alt="Player 2" /></h2>
            </div>
            <div class="resultfieldsetbody">
                <div class="playimg">
                    <div class="playimginner">
                        <div class="row">
                            <span> <input type="radio" selected="selected" name="p2type" id="p2radioComp" onchange='changePlayerType("p2");' value="computer" /> Computer </span>
                        </div>
                        <div class="row">
                            <span> <input type="radio" name="p2type" id="p2radioHuman" onchange='changePlayerType("p2");' value="human" /> Human </span>
                        </div>
                    </div>
                    <div class="playimginner choicediv" id="p2choicediv">
                        <div class="row">
                            <h2>Choose:</h2>                                                                
                        </div>
                        <div class="row">
							<span class="lev1">
								<span class="lev2">
									<input type="radio" name="p2choice" id="p2radioPaper" onchange='changePlayerType("p1");' value="paper" /> <span class="lev3"> Paper </span>
								</span>
								<span class="lev2">
									<img src="sites/all/modules/gc_rpsgame/Assets/images/paper.png" alt="Paper" />
								</span>
							</span>
                        </div>
                        <div class="row">
							<span class="lev1">
								<span class="lev2">
									<input type="radio" name="p2choice" id="p2radioRock" onchange='changePlayerType("p1");' value="rock" /> <span class="lev3">  Rock </span>
								</span>
								<span class="lev2">
									<img src="sites/all/modules/gc_rpsgame/Assets/images/stone.png" alt="Rock" />
								</span>
							</span>
                        </div>
                        <div class="row">
							<span class="lev1">
								<span class="lev2">
									<input type="radio" name="p2choice" id="p2radioScissors" onchange='changePlayerType("p1");' value="scissors" /> <span class="lev3"> Scissors </span>
								</span>
								<span class="lev2">
									 <img src="sites/all/modules/gc_rpsgame/Assets/images/scissors.png" alt="Scissors" />
								</span>
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fullrow">
            <input type="submit" id="playGameButton" class="playGameButton pointerHover" alt="Next" value="" />
            <input type="hidden" name="control" value="game" />
            <input type="hidden" name="action" value="choosePlayers" />
            <input type="hidden" name="run" value="run" />
        </div>

    </form>

</div>