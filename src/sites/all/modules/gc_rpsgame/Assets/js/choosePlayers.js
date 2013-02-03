window.onload = function () {
    openHumanChoicesOnPageLoadIfNeeded();
}

function openHumanChoicesOnPageLoadIfNeeded(){
    changePlayerType("p1");
    changePlayerType("p2");
}

function changePlayerType(playerType) {
    if (document.getElementById(playerType+"radioComp").checked) {
        document.getElementById(playerType+"choicediv").style.display = 'none'; }
    else if (document.getElementById(playerType+"radioHuman").checked) {
        document.getElementById(playerType+"choicediv").style.display = 'block'; }
    checkChoice();
}

function checkChoice() {
    $areBothPlayersTypesChosen = areBothPlayersTypesChosen();
    $bothHumanPlayersHaveChosenWeapons = anyHumanPlayersHaveChosenWeapons();
    if ( $areBothPlayersTypesChosen==true && $bothHumanPlayersHaveChosenWeapons==true) {
        document.getElementById("playGameButton").style.display = 'block'; }
    else {
        document.getElementById("playGameButton").style.display = 'none'; }
}

function areBothPlayersTypesChosen() {
    if ( document.getElementById("p2radioComp").checked || document.getElementById("p2radioHuman").checked ) {
        if (document.getElementById("p1radioComp").checked || document.getElementById("p1radioHuman").checked) {
            return true; } }
    return false;
}

function anyHumanPlayersHaveChosenWeapons() {
    if (aPlayersHasChosenAWeaponIfHuman("p1") == true &&
        aPlayersHasChosenAWeaponIfHuman("p2") == true) {
        return true; }
    return false;
}

function aPlayersHasChosenAWeaponIfHuman(playerType) {
    if (document.getElementById(playerType+"radioHuman").checked) {
        if (document.getElementById(playerType+"radioPaper").checked ||
            document.getElementById(playerType+"radioRock").checked ||
            document.getElementById(playerType+"radioScissors").checked) {
            return true; }
        return false; }
    else {
        return true; }
}
