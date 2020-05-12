<?php
	  class UploadText extends Uploadt {
	      
        protected static $dir;
        protected static $mime_types;
		
	  }
	  
	 class Uploadt {
	   
       protected static $dir = "text";
       protected static $mime_types = array("text/plain");	

       public static function uploadFile($file) {
	       if (!(self::isSecurity($file))) return false;
		   $uploadfile = self::$dir."/".$file["name"];
		   return move_uploaded_file($file["tmp_name"], $uploadfile); 
	   
	   }	
       protected static function isSecurity($file) {
		    $blacklist = array(".php", ".html", ".php3", ".php4", "htm");
            foreach ($blacklist as $item)  {
			      if (preg_match("/$item\$/i", $file["name"])) return false;
			}	
        $type = $file["type"];
         for ($i = 0; $i < count(self::$mime_types); $i++) {
		    if ($type == self::$mime_types[$i]) break;
			if ($i + 1 == count(self::$mime_types)) return false;
		 }	
       		$size = $file["size"]; 
			if ($size > 10000048000) return false;
			else return true;
	   }	 
	}	
	///////////////For IMAGES
	
		  class UploadImage extends Uploadim {
	      
        protected static $diri;
        protected static $mime_typesi;
		
	  }
	  
	 class Uploadim {
	   
       protected static $diri = "images";
       protected static $mime_typesi = array("image/png", "image/jpeg", "image/gif");	

       public static function uploadFile($file) {
	       if (!(self::isSecurity($file))) return false;
		   $uploadfile = self::$diri."/".$file["name"];
		   return move_uploaded_file($file["tmp_name"], $uploadfile); 
	   
	   }	
       protected static function isSecurity($file) {
		    $blacklist = array(".php", ".html", ".php3", ".php4", "htm");
            foreach ($blacklist as $item)  {
			      if (preg_match("/$item\$/i", $file["name"])) return false;
			}	
        $type = $file["type"];
         for ($i = 0; $i < count(self::$mime_typesi); $i++) {
		    if ($type == self::$mime_typesi[$i]) break;
			if ($i + 1 == count(self::$mime_typesi)) return false;
		 }	
       		$size = $file["size"]; 
			if ($size > 10000048000) return false;
			else return true;
	   }	 
	}
 ///////////////For MUSIC
 	  class UploadMusic extends Uploadmus {
	      
        protected static $dirm;
        protected static $mime_typesm;
		
	  }
	  
     class Uploadmus {
	   
       protected static $dirm = "music";
       protected static $mime_typesm = array("audio/mpeg", "audio/mp3", "audio/mp4");

       public static function uploadFile($file) {
	       if (!(self::isSecurity($file))) return false;
		   $uploadfile = self::$dirm."/".$file["name"];
		   return move_uploaded_file($file["tmp_name"], $uploadfile); 
	   
	   }	
       protected static function isSecurity($file) {
		    $blacklist = array(".php", ".html", ".php3", ".php4", "htm");
            foreach ($blacklist as $item)  {
			      if (preg_match("/$item\$/i", $file["name"])) return false;
			}	
        $type = $file["type"];
         for ($i = 0; $i < count(self::$mime_typesm); $i++) {
		    if ($type == self::$mime_typesm[$i]) break;
			if ($i + 1 == count(self::$mime_typesm)) return false;
		 }	
       		$size = $file["size"]; 
			if ($size > 10000048000) return false;
			else return true;
	   }	 
	} 

 ///////////////For VIDEO
 	  class UploadVideo extends Uploadvid {
	      
        protected static $dirv;
        protected static $mime_typesv;
		
	  }
	  
     class Uploadvid {
	   
       protected static $dirv = "video";
       protected static $mime_typesv = array("video/quicktime", "video/mp4");

       public static function uploadFile($file) {
	       if (!(self::isSecurity($file))) return false;
		   $uploadfile = self::$dirv."/".$file["name"];
		   return move_uploaded_file($file["tmp_name"], $uploadfile); 
	   
	   }	
       protected static function isSecurity($file) {
		    $blacklist = array(".php", ".html", ".php3", ".php4", "htm");
            foreach ($blacklist as $item)  {
			      if (preg_match("/$item\$/i", $file["name"])) return false;
			}	
        $type = $file["type"];
         for ($i = 0; $i < count(self::$mime_typesv); $i++) {
		    if ($type == self::$mime_typesv[$i]) break;
			if ($i + 1 == count(self::$mime_typesv)) return false;
		 }	
       		$size = $file["size"]; 
			if ($size > 10000048000) return false;
			else return true;
	   }	 
	}  	  		
?>