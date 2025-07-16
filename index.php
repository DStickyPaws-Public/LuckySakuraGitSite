<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
            require 'scripts/Application.php';
            $app = new Application();
        ?>
        <title><?php echo $app->ApplicationTitle; ?></title>
        <link rel="stylesheet" href="/styles/main.css">
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="brand"><?php echo $app->ApplicationName; ?></div>
                <ul class="menu">
                    <li><a href="?page=home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="?page=settings">Settings</a></li>
                </ul>
            </nav>
        </header>
        <content>
            <?php                
                $isPageSet = isset($_GET['page']);
                if ($isPageSet === false)
                {                    
                    session_start();
                    $_SESSION['gitServerVersion'] = $app->GitServerVersion;
                    $_SESSION['gitRepoDirectories'] = $app->RepositoriesDirectory;
                    include 'pages/main.php';
                }
                else
                {
                    $pageToBeAccessed = $_GET['page'];
                    switch ($pageToBeAccessed)
                    {
                        case 'home' :
                            session_start();
                            $_SESSION['gitServerVersion'] = $app->GitServerVersion;
                            $_SESSION['gitRepoDirectories'] = $app->RepositoriesDirectory;
                            include 'pages/main.php';
                            break;
                        case 'settings':
                            include 'pages/settings.php';
                            break;
                    }
                }
                ?>
        </content>
        <footer class="sticky-footer">
            <p>&copy; 2025 <?php echo $owner; ?>. All rights reserved.</p>
        </footer>
    </body>
</html>