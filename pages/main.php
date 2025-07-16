<?php
    include 'scripts/MainController.php';        
    $potentialRequestor = str_replace("/","",$_SERVER['REQUEST_URI']);
    $isValidRequestor = $potentialRequestor === '' || $potentialRequestor === 'index.php' || $potentialRequestor === '?page=home';
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && $isValidRequestor)
    {
        if (isset($_SESSION['gitServerVersion']) && !is_null($_SESSION['gitServerVersion']))
            $gitServerVersion = $_SESSION['gitServerVersion'];
        if (isset($_SESSION['gitRepoDirectories']) && !is_null($_SESSION['gitRepoDirectories']))
            $gitRepositoryDirectories = $_SESSION['gitRepoDirectories'];
        else $gitRepositoryDirectories = "/";
        $Controller = new MainController($gitRepositoryDirectories, $gitServerVersion);        
        unset($_SESSION['gitRepoDirectories']);
        unset($_SESSION['gitServerVersion']);
        session_destroy();
    }    
?>
<div class="sub-page">
    <div class="hud-version">        
        git server version : <i><b><?php echo $Controller->GitServerVersion; ?></b></i>
    </div>
    <div class="card-container">
        <div class="card">
            <div class="card-header">Card 1</div>
            <div class="card-body">
                <p>This is the content of card 1.</p>
            </div>
            <div class="card-footer">Footer Content 1</div>
        </div>
        <div class="card">
            <div class="card-header">Card 2</div>
            <div class="card-body">
                <p>This is the content of card 2.</p>
            </div>
            <div class="card-footer">Footer Content 2</div>
        </div>
        <div class="card">
            <div class="card-header">Card 3</div>
            <div class="card-body">
                <p>This is the content of card 3.</p>
            </div>
            <div class="card-footer">Footer Content 3</div>
        </div>
        <div class="card">
            <div class="card-header">Card 4</div>
            <div class="card-body">
                <p>This is the content of card 4.</p>
            </div>
            <div class="card-footer">Footer Content 4</div>
        </div>
        <div class="card">
            <div class="card-header">Card 4</div>
            <div class="card-body">
                <p>This is the content of card 4.</p>
            </div>
            <div class="card-footer">Footer Content 4</div>
        </div>
        <div class="card">
            <div class="card-header">Card 4</div>
            <div class="card-body">
                <p>This is the content of card 4.</p>
            </div>
            <div class="card-footer">Footer Content 4</div>
        </div>
        <div class="card">
            <div class="card-header">Card 4</div>
            <div class="card-body">
                <p>This is the content of card 4.</p>
            </div>
            <div class="card-footer">Footer Content 4</div>
        </div>
    </div>
</div>