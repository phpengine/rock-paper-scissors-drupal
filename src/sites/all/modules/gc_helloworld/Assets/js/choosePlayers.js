window.onload = function () {
    openHumanChoicesOnPageLoadIfNeeded();
}

function openHumanChoicesOnPageLoadIfNeeded(){
    changePlayerType("p1");
    changePlayerType("p2");
}

function changePlayerType(playerType) {
    if (document.getElementById(playerType+"radioComp").checked) {
        hideDiv(playerType+"choicediv"); }
    else if (document.getElementById(playerType+"radioHuman").checked) {
        showDiv(playerType+"choicediv"); }
    checkChoice();
}

function hideDiv(divid) {
	document.getElementById(divid).style.display = 'none';
}

function showDiv(divid) {
	document.getElementById(divid).style.display = 'block';
}

function checkChoice() {
    $areBothPlayersTypesChosen = areBothPlayersTypesChosen();
    $bothHumanPlayersHaveChosenWeapons = anyHumanPlayersHaveChosenWeapons();
    if ( $areBothPlayersTypesChosen==true && $bothHumanPlayersHaveChosenWeapons==true) {
        showStartGameButton(); }
    else {
        hideStartGameButton(); }
}

function areBothPlayersTypesChosen() {
    if ( document.getElementById("p2radioComp").checked || document.getElementById("p2radioHuman").checked ) {
        if (document.getElementById("p1radioComp").checked || document.getElementById("p1radioHuman").checked) {
            return true; } }
    return false;
}

function anyHumanPlayersHaveChosenWeapons() {
    if (aHumanPlayersHasChosenAWeapon("p1") == true &&
        aHumanPlayersHasChosenAWeapon("p2") == true) {
        return true; }
    return false;
}

function aHumanPlayersHasChosenAWeapon(playerType) {
    if (document.getElementById(playerType+"radioHuman").checked) {
        if (document.getElementById(playerType+"radioPaper").checked ||
            document.getElementById(playerType+"radioRock").checked ||
            document.getElementById(playerType+"radioScissors").checked) {
            return true; }
        return false; }
    else {
        return true; }
}

function hideStartGameButton() {
	document.getElementById("playGameButton").style.display = 'none';
}

function showStartGameButton() {
	document.getElementById("playGameButton").style.display = 'block';
}