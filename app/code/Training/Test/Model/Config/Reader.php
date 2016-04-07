<?php

namespace Training\Test\Model\Config;

class Reader extends \Magento\Framework\Config\Reader\Filesystem{
    
    protected  $_idAttributes = [];
    
    public function __construct(
            \Magento\Framework\Config\FileResolverInterface $fileResolver,
            \Training\Test\Model\Config\Converter $converter,
            \Training\Test\Model\Config\SchemaLocator $schemaLocator,
            \Magento\Framework\Config\ValidationStateInterface $validateionState,
            $filename = 'test.xml',
            $idAttributes = [],
            $domDocumentClass = 'Magento\Framework\Config\Dom',
            $defaultScope = 'global'
     ){
        
         parent::__construct(
          $fileResolver,
          $converter,
          $schemaLocator,
          $validateionState,
          $filename,
          $idAttributes,
          $domDocumentClass,
          $defaultScope
          );
        
        
    }
}

?>