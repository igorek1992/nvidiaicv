<?php
Yii::import('system.web.CUrlManager', true);


class CustomUrlRule extends CBaseUrlRule {

    public function createUrl($dataObject)
        {
                // use security manager to encrypt 
                $security = Yii::app()->getSecurityManager();
                $encryptedProperty = $security->encrypt( $dataObject->property,  $user->someKey );
                $utf8Property = utf8_encode($encryptedProperty);
                $property = $utf8Property;
                
                // build url
                $route = implode(UserModule::module()->activateUrl);
                $params = array(
                        'property'=>$property,
                        'someKey'=>$someKey,
                );
                return $this->createAbsoluteUrl($route, $params);
        }

    public function parseUrl($manager, $request, $pathInfo, $rawPathInfo) {
        
    }

}

?>
