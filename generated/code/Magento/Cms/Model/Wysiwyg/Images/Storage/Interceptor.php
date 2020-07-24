<?php
namespace Magento\Cms\Model\Wysiwyg\Images\Storage;

/**
 * Interceptor class for @see \Magento\Cms\Model\Wysiwyg\Images\Storage
 */
class Interceptor extends \Magento\Cms\Model\Wysiwyg\Images\Storage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Model\Session $session, \Magento\Backend\Model\UrlInterface $backendUrl, \Magento\Cms\Helper\Wysiwyg\Images $cmsWysiwygImages, \Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Image\AdapterFactory $imageFactory, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Cms\Model\Wysiwyg\Images\Storage\CollectionFactory $storageCollectionFactory, \Magento\MediaStorage\Model\File\Storage\FileFactory $storageFileFactory, \Magento\MediaStorage\Model\File\Storage\DatabaseFactory $storageDatabaseFactory, \Magento\MediaStorage\Model\File\Storage\Directory\DatabaseFactory $directoryDatabaseFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, array $resizeParameters = [], array $extensions = [], array $dirs = [], array $data = [], ?\Magento\Framework\Filesystem\DriverInterface $file = null, ?\Magento\Framework\Filesystem\Io\File $ioFile = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($session, $backendUrl, $cmsWysiwygImages, $coreFileStorageDb, $filesystem, $imageFactory, $assetRepo, $storageCollectionFactory, $storageFileFactory, $storageDatabaseFactory, $directoryDatabaseFactory, $uploaderFactory, $resizeParameters, $extensions, $dirs, $data, $file, $ioFile, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function getDirsCollection($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDirsCollection');
        if (!$pluginInfo) {
            return parent::getDirsCollection($path);
        } else {
            return $this->___callPlugins('getDirsCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFilesCollection($path, $type = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilesCollection');
        if (!$pluginInfo) {
            return parent::getFilesCollection($path, $type);
        } else {
            return $this->___callPlugins('getFilesCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection($path = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        if (!$pluginInfo) {
            return parent::getCollection($path);
        } else {
            return $this->___callPlugins('getCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createDirectory($name, $path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createDirectory');
        if (!$pluginInfo) {
            return parent::createDirectory($name, $path);
        } else {
            return $this->___callPlugins('createDirectory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteDirectory($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteDirectory');
        if (!$pluginInfo) {
            return parent::deleteDirectory($path);
        } else {
            return $this->___callPlugins('deleteDirectory', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteFile($target)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteFile');
        if (!$pluginInfo) {
            return parent::deleteFile($target);
        } else {
            return $this->___callPlugins('deleteFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function uploadFile($targetPath, $type = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'uploadFile');
        if (!$pluginInfo) {
            return parent::uploadFile($targetPath, $type);
        } else {
            return $this->___callPlugins('uploadFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbnailPath($filePath, $checkFile = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbnailPath');
        if (!$pluginInfo) {
            return parent::getThumbnailPath($filePath, $checkFile);
        } else {
            return $this->___callPlugins('getThumbnailPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbnailUrl($filePath, $checkFile = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbnailUrl');
        if (!$pluginInfo) {
            return parent::getThumbnailUrl($filePath, $checkFile);
        } else {
            return $this->___callPlugins('getThumbnailUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resizeFile($source, $keepRatio = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resizeFile');
        if (!$pluginInfo) {
            return parent::resizeFile($source, $keepRatio);
        } else {
            return $this->___callPlugins('resizeFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resizeOnTheFly($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resizeOnTheFly');
        if (!$pluginInfo) {
            return parent::resizeOnTheFly($filename);
        } else {
            return $this->___callPlugins('resizeOnTheFly', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbsPath($filePath = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbsPath');
        if (!$pluginInfo) {
            return parent::getThumbsPath($filePath);
        } else {
            return $this->___callPlugins('getThumbsPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSession');
        if (!$pluginInfo) {
            return parent::getSession();
        } else {
            return $this->___callPlugins('getSession', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedExtensions($type = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedExtensions');
        if (!$pluginInfo) {
            return parent::getAllowedExtensions($type);
        } else {
            return $this->___callPlugins('getAllowedExtensions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbnailRoot()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbnailRoot');
        if (!$pluginInfo) {
            return parent::getThumbnailRoot();
        } else {
            return $this->___callPlugins('getThumbnailRoot', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isImage($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isImage');
        if (!$pluginInfo) {
            return parent::isImage($filename);
        } else {
            return $this->___callPlugins('isImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResizeWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResizeWidth');
        if (!$pluginInfo) {
            return parent::getResizeWidth();
        } else {
            return $this->___callPlugins('getResizeWidth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResizeHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResizeHeight');
        if (!$pluginInfo) {
            return parent::getResizeHeight();
        } else {
            return $this->___callPlugins('getResizeHeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCmsWysiwygImages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCmsWysiwygImages');
        if (!$pluginInfo) {
            return parent::getCmsWysiwygImages();
        } else {
            return $this->___callPlugins('getCmsWysiwygImages', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
