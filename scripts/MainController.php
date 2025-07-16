<?php
    class MainController 
    {
        const ConsoleCommandLS = "ls";
        const GitDirectoryFolder = ".git";

        public string $RepositoriesDirectory;
        public string $GitServerVersion;
        public array $GitRepositories;

        
        public function __construct(string $repositoriesDirectory, string $gitServerVersion) {
            $this->RepositoriesDirectory = $repositoriesDirectory;
            $this->GitServerVersion = $gitServerVersion;
            $this->GitRepositories = $this->getGitRepositoriesFromRepositoriesDirectory();
        }

        private function getGitRepositoriesFromRepositoriesDirectory() : array
        {            
            $lsConsoleCommandResponse = shell_exec(self::ConsoleCommandLS . " " . $this->RepositoriesDirectory);
            $plausibleGitDirectories = explode("\n",$lsConsoleCommandResponse);
            $cntr = 0;
            $result = array(0, "");

            foreach($plausibleGitDirectories as $plausibleGitDirectory)
            {
                $targetPlausibleGitDirectory = $this->RepositoriesDirectory . "/" . $plausibleGitDirectory;
                $isAConfirmedGitDirectory = $this->isAGitDirectory($targetPlausibleGitDirectory);
                if ($isAConfirmedGitDirectory)
                {
                    array_push($result,$cntr, $plausibleGitDirectory);
                    $cntr++ ;
                }
            }

            return $result;
        }

        private function isAGitDirectory(string $targetDirectory) : bool
        {
            $lsConsoleCommandResponse = shell_exec(self::ConsoleCommandLS. " -a " . $targetDirectory);
            $result = str_contains($lsConsoleCommandResponse, self::GitDirectoryFolder);
            return $result;
        }

        public function GenerateGitDirectoryPanel() : string 
        {
            $result = "";
            // Create a loop for Git Directories
            return $result;
        }
    }
?>