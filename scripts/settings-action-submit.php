<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') 
  {
    $proposedDirectory = htmlspecialchars($_POST['txtGitDirectories']);        
  }
?>