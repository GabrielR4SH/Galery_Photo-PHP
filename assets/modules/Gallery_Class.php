<?php 

class Gallery {

    public function __construct()
    {
        
    }

    public function getAllGallery(){
        $final = [];
        $galleries = glob(Gallery_Folder."*"); //reading folder

            //TODO
        foreach($galleries as $gallery){
          if($gallery === '.' or $gallery === '..') continue;
        }

        if(is_dir($gallery)){
            $final[] = explode("/",$gallery)[1];
        }

        return $final;
    }


    public function addGallery($name){
        if(!file_exists(Gallery_Folder.$name)){
            if(mkdir(Gallery_Folder.$name)){
                return true;
            }
        }
        return false;
    }

}

