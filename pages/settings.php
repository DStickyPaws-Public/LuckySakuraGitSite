<?php 
    $config = include 'config.php';
?>
<div class="sub-page flex-container">
    <form method="post" action="scripts/settings-action-submit.php">
        <fieldset>
            <legend>Settings</legend>
            <label for="txtGitDirectories">Initial Git Directories:</label>
            <input type="text" id="txtGitDirectories" name="txtGitDirectories"/>             
        </fieldset>
        <button type="submit">Save Settings</button>
    </form>    
</div>