<?php     
    class Application {        
        const ApplicationName = "Lucky Sakura";
        const Owner = "Gatchalian Clan Collective";
        const String1 = "Git";
        const GitConsoleResponse1 = "git version ";
        const GitCommandVersion = "git --version";
        // Properties
        public string $ApplicationName;
        public string $Owner;
        public string $ApplicationTitle;
        public string $GitServerVersion;
        public string $RepositoriesDirectory;

        public function __construct() {
            $this->ApplicationName = self::ApplicationName;
            $this->Owner = self::Owner;
            $this->ApplicationTitle = $this->ApplicationName . " " . self::String1;
            $this->GitServerVersion = $this->getGitServerVersion();            
            $this->RepositoriesDirectory = "/home/dstickypaws/Documents/Repositories/Personal";
        }

        private function getGitServerVersion() : string
        {
            $gitServerVersionConsoleResponse = shell_exec(self::GitCommandVersion);
            $gitVersion = str_replace(self::GitConsoleResponse1,"",$gitServerVersionConsoleResponse);
            return $gitVersion;
        }
    }
?>