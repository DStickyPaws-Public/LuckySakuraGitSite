<?php 
    class GitDirectory 
    {
        public string $ParentDirectory;
        public string $Name;
        public string $DirectoryFullPath;
        public string $CurrentHash;
        public array $GitBranches;

        public function __construct(string $parentDirectory, string $folderName) {
            $this->ParentDirectory = $parentDirectory;
            $this->Name = $folderName;
            $this->DirectoryFullPath = $this->ParentDirectory . "/" . $this->Name;            
        }        
    }
?>