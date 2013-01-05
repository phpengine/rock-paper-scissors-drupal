<form action="index.php">
    <input type="submit" id="startGameButton" class="startImage pointerHover" alt="Next" value="" />
    <input type="hidden" name="control" value="game" />
    <input type="hidden" name="action" value="choosePlayers" />
</form>

<?php
if (isset($pageVars["browser"]) && $pageVars["browser"] == "ie") {
?>
   <script type="text/javascript">alert("There are reported issues with IE. Please use Firefox or Chrome")</script>';
<?php
}
?>