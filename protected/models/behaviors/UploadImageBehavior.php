<?php

/**
 * @author Igor Chepurnoy <@zfort.com>
 * @link http://www.zfort.com/
 * @copyright Copyright &copy; 2000-2013 Zfort Group
 * @license http://www.zfort.com/terms-of-use
 */
class UploadImageBehavior extends CActiveRecordBehavior
{

    /**
     *  The image attributes.'.
     *
     * @var array
     */
    public $imageAttrs = array();

    /**
     *  The Base path application.'.
     *
     * @var string
     */
    public $basePath = '';

    protected function createDir($path)
    {

        return mkdir($path, 0777, true);
    }

    /**
     * This method create folder for image.
     * This method resize image.
     */
    public function afterSave($event)
    {
        foreach ($this->imageAttrs as $imageDBField => $attr) {
            $uploadedFile = $this->getOwner()->{$imageDBField};
            if (!($uploadedFile instanceof CUploadedFile)) {
                return true;
            }
            $path = $this->basePath . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id;

            if (file_exists($path)) {
                $fullPath = $this->basePath . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id . '/' . $uploadedFile->getName();

                $uploadedFile->saveAs($fullPath);
            } elseif ($this->createDir($path)) {
                $fullPath = $this->basePath . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id . '/' . $uploadedFile->getName();
                $uploadedFile->saveAs($fullPath);
            }
            if ($attr['resize']) {
                $image = Yii::app()->image->load($fullPath);
                $image->resize($attr['width'], $attr['height']);
                $image->save();
            }
        }

        return true;
    }
    
    public function getImage() {

        $path = '/uploads/' . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id . '/' . $this->getOwner()->image;
        return $path;
    }
    
    public function getImageContent() {

        $path = '/uploads/' . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id . '/' . $this->getOwner()->imageContent;
        return $path;
    }

    /**
     * This method delete folder and image.
     */
    public function beforeDelete($event)
    {

        $path = $this->basePath . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id;



        $path = rtrim($path, '/') . '/';


        $handle = opendir($path);
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' and $file != '..') {
                $fullpath = $path . $file;

                if (is_dir($fullpath))
                    rmdir($fullpath);
                else
                    unlink($fullpath);
            }
        }
        closedir($handle);
        rmdir($path);

        //       BannersModel::model()->deleteAll();
        return true;
    }

}