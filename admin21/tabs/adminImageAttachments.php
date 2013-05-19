<?php

include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');
include_once(PS_ADMIN_DIR.'/../classes/ImageAttachments.php');

class adminImageAttachments extends AdminTab
{
    public function display(){
        
        global $currentIndex, $cookie;//dvuelve la url actual donde esta.
        $token = Tools::getAdminToken("adminImageAttachments".intval(Tab::getIdFromClassName("adminImageAttachments")).intval($cookie->id_employee));

        $dirt = _PS_ROOT_DIR_."/files";
        $href = $currentIndex.'&success=ok&token='.$this->token.'&imgatt=imagesattchment';
        
        echo '
			<script type="text/javascript">
                jQuery(function(){
                    $(".box_link_ia a").click(function(){
                        $("#title_attachment_images").text("'.$this->l('Please, wait several seconds').'");
                    });
                });
			</script>
		';
        
        if(isset($_GET['success']) && $_GET['success'] == "ok"){
            echo '<div class="conf confirm"><img src="../img/admin/ok.gif" />&nbsp;'.$this->l($cookie->msg_setting_images).' !</div>';
        }
        
        if(isset($_GET['success']) && $_GET['success'] == "error"){
            echo '<div class="alert error"><h3>&nbsp;'.$this->l($cookie->msg_delete_images).' </h3></div>';
        }
        
        echo '
            <div class="box_text_ia">
                <p class="text_ia">Los ficheros de Im&aacute;genes y Adjuntos se asignan por el nombre de la Referencia del Producto</p>
                <p class="text_ia">Para m&aacute;s de una Imagen o Adjunto, indicar referencia + doble gu&iacute;on y numero. Ejemplo; Ref--1, Ref--2,..</p>
                
                <h3>Instrucciones para Hospedar Im&aacute;genes y Adjuntos:</h3>
                
                <p class="text_ia_2">1.- Preciamente puede ser necesario dimensionar y comprimir sus Im&aacute;genes. Ver Gu&iacute;a</p>
                <p class="text_ia_2">2.- Ubicar todas sus Im&aacute;genes y Adjuntos en una carpeta local, segun estructura:</p>
                <div class="box_sub_tex_ia">
                    <p><span>Im&aacute;genes Categor&iacute;as</span><span>c:/files/categories</span></p>
                    <p><span>Im&aacute;genes Fabricantes</span><span>c:/files/manufacturers</span></p>
                    <p><span>Im&aacute;genes Productos</span><span>c:/files/products</span></p>
                    <p><span>Adjuntos Productos</span><span>c:/files/attachments</span></p>
                </div>
                <p class="text_ia_2">3.- Copiar carpeta c:/files a su Servidor de Hospedaje. Ver Gu&iacute;a</p>
                <p class="text_ia_2">4.- Al finalizar; botones "Ajuste de Im&aacute;genes" y "Ajuste de Adjuntos"</p>
            </div>
        ';
        
        echo '
            <div class="import_image_attachment">
                <div class="box_link_ia">
                    <h2>'.$this->l("Imagenes Categorias").'</h2>
                    <a class="enlace_del_ia" delete="images" message="'.$this->l('Delete all Images').'" href="index.php?tab=adminImageAttachments&token='.$this->token.'&delimages=categories">'.$this->l('Delete all Images').'</a>
                    <a class="enlace_ia ajusting_image" adjusting="images"  href="index.php?tab=adminImageAttachments&token='.$this->token.'&dirimages=categories">'.$this->l('Adjusting Images').'</a>
                </div>
                <div class="box_link_ia">
                    <h2>'.$this->l("Imagenes Fabricantes").'</h2>
                    <a class="enlace_del_ia" delete="images" message="'.$this->l('Delete all Images').'" href="index.php?tab=adminImageAttachments&token='.$this->token.'&delimages=manufacturers">'.$this->l('Delete all Images').'</a>
                    <a class="enlace_ia ajusting_image" adjusting="images"  href="index.php?tab=adminImageAttachments&token='.$this->token.'&dirimages=manufacturers">'.$this->l('Adjusting Images').'</a>
                </div>
                <div class="box_link_ia">
                    <h2>'.$this->l("Imagenes Productos").'</h2>
                    <a class="enlace_del_ia" delete="images" message="'.$this->l('Delete all Images').'" href="index.php?tab=adminImageAttachments&token='.$this->token.'&delimages=products">'.$this->l('Delete all Images').'</a>
                    <a class="enlace_ia ajusting_image" adjusting="images"  href="index.php?tab=adminImageAttachments&token='.$this->token.'&dirimages=products">'.$this->l('Adjusting Images').'</a>
                </div>
                <div class="box_link_ia">
                    <h2>'.$this->l("Adjuntos Productos").'</h2>
                    <a class="enlace_del_ia" delete="attachments" message="'.$this->l('Delete all Attachments').'" href="index.php?tab=adminImageAttachments&token='.$this->token.'&delattachment=adjuntos">'.$this->l('Delete all Attachments').'</a>
                    <a class="enlace_ia" adjusting="attachments" href="index.php?tab=adminImageAttachments&token='.$this->token.'&dirattachment=attachments">'.$this->l('Adjusting Attachments').'</a>
                </div>
            </div>';
        
        if(isset($_GET["dirimages"]) && $_GET["dirimages"] != ""){ 
            
            $nombreDir = $_GET["dirimages"];
            $dirimages = $dirt."/".$nombreDir;
            $enlace = $_SERVER['PHP_SELF']."?ajuste=image";
            $nombreEnlace = $this->l('Back to list');
            //echo "<h2 class='title_import_img'>".$this->l('Import images....')."</h2>";
            echo "<h2 class='title_import_img'>".$this->l('Please, wait several seconds')."</h2>";
              
            $imagenes = $this->getDirectoryList($dirimages);
            
            if(count($imagenes) > 0){
                
                $respuesta = $this->importarImagenes($imagenes, $dirimages, $nombreDir);
                //$respuesta = array(true, 2);
                if($respuesta[0] == true && $respuesta[1] > 0){
                    //$mensaje = $this->l("The imported was successful.");
                    $mensaje = $this->l("The images were imported successfully.");
                    $cookie->msg_setting_images = $mensaje;
                    Tools::redirectAdmin($currentIndex.'&success=ok&token='.$token);
                }else{
                    $tipo_msg = "The images already exist, or not created ".$respuesta[2];
                    $mensaje = $this->l("Failed to import.")." ".$this->l($tipo_msg);
                    $cookie->msg_setting_images = $mensaje;
                    Tools::redirectAdmin($currentIndex.'&success=error&token='.$token);
                } 
            }else{
                $mensaje = $this->l("Failed to import.")." ".$this->l("The folder has no images.");
                $cookie->msg_delete_images = $mensaje;
                Tools::redirectAdmin($currentIndex.'&success=error&token='.$token);  
            }   
        }
        
        if(isset($_GET["dirattachment"]) && $_GET["dirattachment"] != ""){
            $nombreDir = "attachments";
            $diriadjuntos = $dirt."/".$nombreDir;
            $nombreEnlace = $this->l('Back to list');
            echo "<h2 class='title_import_img'>".$this->l('Please, wait several seconds')."</h2>";
            //echo "<a href='".$currentIndex.'&token='.$this->token."&attchments=attchments'><img src='../img/admin/arrow2.gif'>".$nombreEnlace."</a><br/>";
                
            $adjuntos = $this->getDirectoryList($diriadjuntos);
            
            if(count($adjuntos) > 0){
                
                $respuesta = $this->importarAdjuntos($adjuntos, $diriadjuntos);
                if($respuesta){  
                    $mensaje = $this->l("Attachments are imported successfully.");
                    $cookie->msg_setting_images = $mensaje;
                    Tools::redirectAdmin($currentIndex.'&success=ok&token='.$token);
                }  
            }else{
                $mensaje = $this->l("Failed to import.")." ".$this->l("The folder has no attachments.");
                $cookie->msg_delete_images = $mensaje;
                Tools::redirectAdmin($currentIndex.'&success=error&token='.$token);
            }
        }
        
        if(isset($_GET['delimages']) && isset($_GET['delimages']) != ''){
            $namedir = $_GET['delimages'];
            $this->imagesDelete($namedir);
            $msg_del_image = $this->l('The images were successfully removed');
            $cookie->msg_setting_images = $msg_del_image;
            Tools::redirectAdmin($currentIndex.'&success=ok&token='.$token);
        }
        
        if(isset($_GET['delattachment']) && isset($_GET['delattachment']) != ''){
            $respuesta = ImageAttachments::deleteAttachments();
            $msg_del_attach = $this->l('The attachements were successfully removed');
            $cookie->msg_setting_images = $msg_del_attach;
            Tools::redirectAdmin($currentIndex.'&success=ok&token='.$token);
        }
    }
    
    public function cantidadCaracteres($DirAdjuntos)
    {
        $res = 0;
        foreach($DirAdjuntos as $dir){
        	$pos = strpos($dir,"adjuntos");
            if($pos!==false){
                $res = strlen($dir);
            }
        }
        return $res;
    }
    
    public function displayForm($isMainTab = true)
	{
		global $currentIndex, $cookie;
		parent::displayForm();
		
		echo '
		<script type="text/javascript">
		function runApp(which) {
		  WshShell = new ActiveXObject("WScript.Shell");
		  WshShell.Run (which,1,false);
		}
		</script>
		
		';

		echo "<a href=\"runApp('file://c:/test.bat');\">Batch File</a>";
	}
    
    function getDirectoryList($directory, $tipo=null) 
    {        
        if($tipo == "delete"){
            if(file_exists($directory."/Thumbs.db"))
                unlink($directory."/Thumbs.db");   
        }   
        $results = array();
        if(is_dir($directory)){
               
            if($handler = opendir($directory)){
                while (($file = readdir($handler)) !== false) {
                  // if file isn't this directory or its parent, add it to the results
                  if ($file != "." && $file != "..") {
                    $results[] = $file;
                  }
                }
                closedir($handler);     
            }
        }
        return $results;
    }
    
    public function importarImagenes($imagenes, $dirimages=null, $tipo)
    {
        
        if($tipo == "categories"){
            return $this->copyImagesCategories($imagenes, $dirimages, $tipo);        
        }elseif($tipo == "manufacturers"){
            return $this->copyImagesManufacturers($imagenes, $dirimages, $tipo);
        }elseif($tipo == "products"){
            return $this->copyImagesProducts($imagenes, $dirimages);
        }
    }
    
    public function copyImagesCategories($imagenes, $dirimages, $tipo)
    {
        $cant = 0;
        $res = false;
        if(count($imagenes) > 0){
            foreach($imagenes as $imagen):
                $id_category = Category::getFilenameCatgory($imagen);
                if($id_category != "" || $id_category != NULL)
                {
                    $this->copyImg($id_category, NULL, $imagen, $tipo, $dirimages);
                    $cant++;
                }
            endforeach;
            $res = true;
        }
        return array($res, $cant, "categories");  
    }
    
    public function copyImagesManufacturers($imagenes, $dirimages, $tipo)
    {
        $cant = 0;
        $res = false;
        if(count($imagenes) > 0){
            foreach($imagenes as $imagen):
                $id_manufacturer = Manufacturer::getFilenameManufacturer($imagen);
                if($id_manufacturer != "" || $id_manufacturer != NULL)
                {
                    $this->copyImg($id_manufacturer, NULL, $imagen, $tipo, $dirimages); 
                    $cant++;
                }
            endforeach;
            $res = true;
        }
        return array($res, $cant, "manufacturers");
    }
    
    public function copyImg($id_entity, $id_image = NULL, $url, $entity = 'products', $dirimages)
    {
    	$tmpfile = tempnam(_PS_TMP_IMG_DIR_, 'PS');
        //$dirImages = _PS_ROOT_DIR_."/files";
        $url_image = $dirimages."/".$url;
    	
    	switch($entity)
    	{
    		default:
    		case 'categories':
    			$path = _PS_CAT_IMG_DIR_.intval($id_entity);
    		break;
    		case 'manufacturers':
    			$path = _PS_MANU_IMG_DIR_.intval($id_entity);
    		break;
    	}

        if (@copy($url_image, $tmpfile))
    	{
    		imageResize($tmpfile, $path.'.jpg');
    		$imagesTypes = ImageType::getImagesTypes($entity);
    		foreach ($imagesTypes AS $k => $imageType)
    			imageResize($tmpfile, $path.'-'.stripslashes($imageType['name']).'.jpg', $imageType['width'], $imageType['height']);
    	}else{
    		echo "<br>Error al copiar la imagen desde ".$url." a ".$path;
    		unlink($tmpfile);
    		return false;
    	}
    	return true;
    }
    
    public function copyImagesProducts($imagenes, $dirimages)
    {
        $res = false;
        $cant = 0;
        
        if(count($imagenes) > 0){
                
            foreach($imagenes as $imagen){
                
                $refe = explode(".",$imagen);
                $refe = $refe[0];
                $pos = stripos($refe,"--");
            	
            	if($pos!==false){
            		$refe2 = explode("--",$refe);
            		$refe = $refe2[0];
            	}
            	
            	$idProducto = ImageAttachments::buscareferencia($refe);
                $idProducto = $idProducto[0]['id_product'];
                
            	if($idProducto){
        			$archivo = $dirimages."/".$imagen;
                    $existe = ImageAttachments::verificarImage($idProducto, $imagen);
                    if(!$existe){
                        $archidesti = $this->copiaraDestinoIMGs($archivo,$idProducto);
                        $this->ponertamanos($archidesti);
                        $cant++;
                    }else{
                        //echo "<br> >> No se esta Produciendo tamaños por que el archivo existe.";
                    }
            	}
            }//fin foreach imagenes
            $res = true;  
        }
        return array($res, $cant, "products");
    }
    
    public function copiaraDestinoIMGs($archivo,$idproduct)
    {
        //$cantImages = getImagesTotal($idproduct);
        $nombreImg = basename($archivo);
        $cantImages = Image::getHighestPosition($idproduct);
        
    	$datos["id_product"] = $idproduct;
    	//$datos["position"] = count($cantImages) + 1;
        $datos["position"] = $cantImages + 1;
        $datos["name_image"] = $nombreImg;
        if(count($cantImages) == 0){
            $datos["cover"] = 1;
        }else{
            $datos["cover"] = 0;
        }
    	$idImagen = $this->ingresarDatos($datos,_DB_PREFIX_."image");
        
        $ProductosLang = ImageAttachments::getProductosLang($idproduct);
        foreach($ProductosLang as $prod):
            $datos2["id_image"] = $idImagen;
            $datos2["id_lang"] = $prod["id_lang"];
            $datos2["legend"] = $prod["name"];
            $this->ingresarDatos($datos2,_DB_PREFIX_."image_lang");
        endforeach;
    	
        //echo "Archivo ".$archivo."<br/>";
        
    	$extension = explode(".",$archivo);
    	$cual = sizeof($extension)-1;
    	$extension = $extension[$cual];
    	//$dirdestino = $_SERVER['DOCUMENT_ROOT'].__PS_BASE_URI__."img/p";
    	$dirdestino = _PS_ROOT_DIR_."/img/p";
    	$nuevonombre = $dirdestino."/".$idproduct."-".$idImagen.".".$extension;
        
        @copy($archivo, $nuevonombre);
        
    	echo system("cp -af ".$archivo." ".$nuevonombre);
    	
    	return $nuevonombre;
    }
    
    public function ponertamanos($archivo)
    {
    	$tamanos = ImageAttachments::sacatamanos();
    	
    	foreach($tamanos as $tamano){
    		$ancho = $tamano["width"];
    		$alto = $tamano["height"];
    		$nombre = $tamano["name"];
            
    		$partido = explode(".",$archivo);
    		$cuanto = sizeof($partido)-1;
    		$nuevonombre = $partido[0];
    		for($c=1;$c<$cuanto;$c++){
    			$nuevonombre .= ".".$partido[$c];
    		}
    		$nuevonombre = $nuevonombre."-".$nombre.".jpg";
    		//echo "<br> >>>> ".$nuevonombre;
    		$sourceFile['tmp_name'] = $archivo;
    		//$resultado = imageCut($sourceFile,$nuevonombre,$ancho,$alto,'jpg',0,0);
    		//$resultado = imageResize($archivo, $nuevonombre, $ancho, $alto,'jpg');
            $resultado = imageResize($archivo, $nuevonombre, $ancho, $alto,'jpg');
    		if(!$resultado){
    			echo " -> No se puede transforma la imagen";
    		}
    	}
    	
    }
    
    public function conectar()
    {
        $pnconfig['dbhost']=_DB_SERVER_;
        $pnconfig['dbuname']=_DB_USER_;
        $pnconfig['dbpass']=_DB_PASSWD_;
        $pnconfig['dbname']=_DB_NAME_;
        	
    	$conexion=mysql_connect($pnconfig['dbhost'], $pnconfig['dbuname'], $pnconfig['dbpass']) or print mysql_error();
    	$dbn = $pnconfig['dbname'];
    	$seleccion=mysql_query("use $dbn", $conexion) or print mysql_error();
    	return $conexion;
    }
    
    public function ingresarDatos($datos, $tabla)
    {
        $x = $this->conectar();	
        $cuantos = sizeof($datos);
    	$columns = $cuantos + 1;
    	
        if ($cuantos == $columns - 1){
            
    		$nomDatos = array_keys($datos);
    		$valueDatos = array_values($datos);
    	
    		$campos = $nomDatos[0];
    		$valores = "'".$valueDatos[0]."'";
    		for ($i = 1; $i < sizeof($valueDatos);$i++){
    			$campos = $campos . ",". $nomDatos[$i];
    			$valores = $valores.",'".$valueDatos[$i]."'";	
    		}
    		
    		$query ="
    		INSERT INTO ".$tabla." 
    		(".$campos.") 
    		VALUES 
    		(".$valores.")
    		";
            
    		$result = mysql_query($query, $x) or print mysql_error();
    			
    		return mysql_insert_id($x);
        }else{
            echo "<br>La cantidad de Columnas es distinto al numero de datos enviados.<br>";
        }
    }
    
    public function importarAdjuntos($adjuntos, $diradjunto)
    {
        $dirroot = PS_ADMIN_DIR."/../../..";
        $res = false;
        
        if(count($adjuntos) > 0){
                
            foreach($adjuntos as $adjunto){
                
                /*$refe = explode(".",$adjunto);
                $refe = $refe[0];
                $isoLang = substr($refe, 0, 2);
                $refe = substr($refe, 5);
                $aux_ref = $refe;
                
                $pos = stripos($refe,"--");*/
                $refe = explode(".",$adjunto);
                $refe = $refe[0];
                //echo "REF ".$refe."<br/>";
                $isoLang = substr($refe, 0, 1);
                //$refe = substr($refe, 3);
                $refe = substr($refe, 2);
                //echo "REF2 ".$refe."<br/>"; 
                $aux_ref = $refe;
                //echo "ISO ".$isoLang."<br/>";
                //echo "AUX REF ".$aux_ref."<br/>";
                $pos = stripos($refe,"--");
                
            	if($pos!==false){
            		$refe2 = explode("--",$refe);
            		$refe = $refe2[0];
            	}
            	
            	$idProducto = ImageAttachments::buscareferencia($refe);
                $idProducto = $idProducto[0]['id_product'];
                
            	if($idProducto){
        			$archivo = $diradjunto."/".$adjunto;
                    
                    $referencia = $aux_ref;
                    $archidesti = $this->copiaraDestinoADJs($archivo,$idProducto, $referencia);
            	}
            }//fin foreach imagenes
            $res = true;  
        }
        return $res;
    }
    
    public function copiaraDestinoADJs($archivo,$idproduct,$referencia)
    {
        require(PS_ADMIN_DIR.'/mime.php');
        
    	$uniqid = substr(sha1(microtime()),0,15);
        $nomArchivo = basename($archivo);
    	$extension = explode(".",$archivo);
    	$cual = sizeof($extension)-1;
    	$ext = $extension[$cual];
        $nombreAdjunto = $extension[0];
        //$isoLang = substr($nomArchivo, 0, 2);
        $isoLang = substr($nomArchivo, 0, 1);
        $isoLang = "lang-".$isoLang;
    	
    	//$datos["file"] = $uniqid.".".$ext;
    	
    	if(function_exists("mime_content_type")){
    		$mime = mime_content_type($archivo);
    	}else{
    		$mime = "application/".$ext;
            //echo "<br/>entra mime 2 ".$mime;
    	}
        
        $datos["reference"] = $referencia;
        $datos["mime"] = $mime;
    	$existeAttachment = ImageAttachments::existeAttachment($referencia);
        
        if($existeAttachment){
            $attachmentReference = ImageAttachments::getAttachmentReference($referencia);
            $idattachment = $attachmentReference[0]['id_attachment'];
        }else{
            $idattachment = $this->ingresarDatos($datos,_DB_PREFIX_."attachment"); 
        }
        
        //$id_lang = Language::getIdByIso($isoLang);
        $id_lang = Language::getIdByIsoLang($isoLang);
        
        //$existe = ImageAttachments::existeAttachmentLang($nomArchivo);
        $existe = ImageAttachments::existeAttachmentLang($idattachment, $id_lang);
        
        //var_dump($existe);
        
        if(!$existe){
            //$id_lang = Language::getIdByIso($isoLang);
            $id_lang = Language::getIdByIsoLang($isoLang);
            $prod = ExportReports::getProductLang($idproduct,$id_lang);
        	$datos2["id_attachment"] = $idattachment;
        	$datos2["id_lang"] = $id_lang;
        	//$datos2["name"] = $uniqid.".".$ext;
            //$datos2["name"] = $prod["name"];
            $datos2["name"] = ($prod["name"] != "") ? $prod["name"] : "no name";
            $datos2["name_file"] = $uniqid.".".$ext;
            $datos2["reference_lang"] = $nomArchivo;
        	$datos2["description"]= $mime." ".$uniqid;
            $this->ingresarDatos($datos2,_DB_PREFIX_."attachment_lang");
        	//ingresarDatos($datos2,_DB_PREFIX_."attachment_lang");
            $dirdestino = _PS_ROOT_DIR_."/download";
        	$nuevonombre = $dirdestino."/".$uniqid.".".$ext;
            copy($archivo, $nuevonombre);
        }else{
            $attachment = ImageAttachments::getAttachmentLanguaje($idattachment, $id_lang);
            $dirdestino = _PS_ROOT_DIR_."/download";
            $nameFile = $attachment["name_file"];
            
            //if(file_exists($dirdestino."/".$nameFile))
              //  unlink($dirdestino."/".$nameFile);
            
            $datos2["name_file"] = $uniqid.".".$ext;
            $datos2["description"]= $mime." ".$uniqid;
            ImageAttachments::updateAttachment($idattachment, $id_lang, $datos2);
            
            $nuevonombre = $dirdestino."/".$uniqid.".".$ext;
            copy($archivo, $nuevonombre);
        }
            	
        $existePA = ImageAttachments::existeProductAttachment($idproduct, $idattachment);
        
        if(!$existePA){
            $datos3["id_product"] = $idproduct;
        	$datos3["id_attachment"] = $idattachment;
        	$this->ingresarDatos($datos3,_DB_PREFIX_."product_attachment");   
        }
    	
    	return $nuevonombre;
    }
    
    public function imagesDelete($dirname)
    {
        if($dirname == "categories")
        {
            $dirdel = _PS_CAT_IMG_DIR_;
            $dirtmp = _PS_TMP_IMG_DIR_.'category';
            $dirtmp_mini = _PS_TMP_IMG_DIR_.'category_mini';
            $tipo = "category";
        }elseif($dirname == "manufacturers"){
            $dirdel = _PS_MANU_IMG_DIR_;
            $dirtmp = _PS_TMP_IMG_DIR_.'manufacturer';
            $dirtmp_mini = _PS_TMP_IMG_DIR_.'manufacturer_mini';
            $tipo = "manufacturer";
        }elseif($dirname == "products"){
            $dirdel = _PS_PROD_IMG_DIR_;
            $dirtmp = _PS_TMP_IMG_DIR_.'product';
            $dirtmp_mini = _PS_TMP_IMG_DIR_.'product_mini';
            $tipo = "product";
        }
        ImageAttachments::deleteImages($dirdel, $dirtmp, $dirtmp_mini, $tipo);
    }
}
?>