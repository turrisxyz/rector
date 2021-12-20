<?php

declare (strict_types=1);
namespace RectorPrefix20211220;

use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\ValueObject\MethodCallRename;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
# https://www.php.net/manual/en/book.gmagick.php → https://www.php.net/manual/en/book.imagick.php
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Rector\Renaming\Rector\Name\RenameClassRector::class)->configure(['Gmagick' => 'Imagick', 'GmagickPixel' => 'ImagickPixel']);
    $services->set(\Rector\Renaming\Rector\MethodCall\RenameMethodRector::class)->configure([new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'addimage', 'addImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'addnoiseimage', 'addNoiseImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'annotateimage', 'annotateImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'blurimage', 'blurImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'borderimage', 'borderImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'charcoalimage', 'charcoalImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'chopimage', 'chopImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'commentimage', 'commentImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'compositeimage', 'compositeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'cropimage', 'cropImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'cropthumbnailimage', 'cropThumbnailImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'cyclecolormapimage', 'cycleColormapImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'deconstructimages', 'deconstructImages'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'despeckleimage', 'despeckleImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'drawimage', 'drawImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'edgeimage', 'edgeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'embossimage', 'embossImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'enhanceimage', 'enhanceImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'equalizeimage', 'equalizeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'flipimage', 'flipImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'flopimage', 'flopImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'frameimage', 'frameImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'gammaimage', 'gammaImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getcopyright', 'getCopyright'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getfilename', 'getFilename'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagebackgroundcolor', 'getImageBackgroundColor'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageblueprimary', 'getImageBluePrimary'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagebordercolor', 'getImageBorderColor'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagechanneldepth', 'getImageChannelDepth'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagecolors', 'getImageColors'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagecolorspace', 'getImageColorspace'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagecompose', 'getImageCompose'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagedelay', 'getImageDelay'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagedepth', 'getImageDepth'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagedispose', 'getImageDispose'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageextrema', 'getImageExtrema'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagefilename', 'getImageFilename'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageformat', 'getImageFormat'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagegamma', 'getImageGamma'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagegreenprimary', 'getImageGreenPrimary'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageheight', 'getImageHeight'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagehistogram', 'getImageHistogram'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageindex', 'getImageIndex'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageinterlacescheme', 'getImageInterlaceScheme'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageiterations', 'getImageIterations'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagematte', 'getImageMatte'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagemattecolor', 'getImageMatteColor'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageprofile', 'getImageProfile'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageredprimary', 'getImageRedPrimary'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagerenderingintent', 'getImageRenderingIntent'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageresolution', 'getImageResolution'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagescene', 'getImageScene'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagesignature', 'getImageSignature'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagetype', 'getImageType'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimageunits', 'getImageUnits'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagewhitepoint', 'getImageWhitePoint'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getimagewidth', 'getImageWidth'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getpackagename', 'getPackageName'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getquantumdepth', 'getQuantumDepth'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getreleasedate', 'getReleaseDate'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getsamplingfactors', 'getSamplingFactors'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getsize', 'getSize'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'getversion', 'getVersion'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'hasnextimage', 'hasNextImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'haspreviousimage', 'hasPreviousImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'implodeimage', 'implodeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'labelimage', 'labelImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'levelimage', 'levelImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'magnifyimage', 'magnifyImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'mapimage', 'mapImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'medianfilterimage', 'medianFilterImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'minifyimage', 'minifyImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'modulateimage', 'modulateImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'motionblurimage', 'motionBlurImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'newimage', 'newImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'nextimage', 'nextImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'normalizeimage', 'normalizeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'oilpaintimage', 'oilPaintImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'previousimage', 'previousImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'profileimage', 'profileImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'quantizeimage', 'quantizeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'quantizeimages', 'quantizeImages'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'queryfontmetrics', 'queryFontMetrics'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'queryfonts', 'queryFonts'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'queryformats', 'queryFormats'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'radialblurimage', 'radialBlurImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'raiseimage', 'raiseImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'readimage', 'readimages'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'readimageblob', 'readImageBlob'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'readimagefile', 'readImageFile'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'reducenoiseimage', 'reduceNoiseImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'removeimage', 'removeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'removeimageprofile', 'removeImageProfile'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'resampleimage', 'resampleImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'resizeimage', 'resizeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'rollimage', 'rollImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'rotateimage', 'rotateImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'scaleimage', 'scaleImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'separateimagechannel', 'separateImageChannel'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setCompressionQuality', 'getCompressionQuality'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setfilename', 'setFilename'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagebackgroundcolor', 'setImageBackgroundColor'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimageblueprimary', 'setImageBluePrimary'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagebordercolor', 'setImageBorderColor'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagechanneldepth', 'setImageChannelDepth'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagecolorspace', 'setImageColorspace'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagecompose', 'setImageCompose'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagedelay', 'setImageDelay'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagedepth', 'setImageDepth'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagedispose', 'setImageDispose'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagefilename', 'setImageFilename'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimageformat', 'setImageFormat'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagegamma', 'setImageGamma'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagegreenprimary', 'setImageGreenPrimary'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimageindex', 'setImageIndex'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimageinterlacescheme', 'setImageInterlaceScheme'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimageiterations', 'setImageIterations'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimageprofile', 'setImageProfile'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimageredprimary', 'setImageRedPrimary'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagerenderingintent', 'setImageRenderingIntent'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimageresolution', 'setImageResolution'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagescene', 'setImageScene'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagetype', 'setImageType'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimageunits', 'setImageUnits'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setimagewhitepoint', 'setImageWhitePoint'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setsamplingfactors', 'setSamplingFactors'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'setsize', 'setSize'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'shearimage', 'shearImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'solarizeimage', 'solarizeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'spreadimage', 'spreadImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'stripimage', 'stripImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'swirlimage', 'swirlImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'thumbnailimage', 'thumbnailImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'trimimage', 'trimImage'), new \Rector\Renaming\ValueObject\MethodCallRename('Gmagick', 'writeimage', 'writeImage'), new \Rector\Renaming\ValueObject\MethodCallRename('GmagickPixel', 'getcolor', 'getColor'), new \Rector\Renaming\ValueObject\MethodCallRename('GmagickPixel', 'getcolorcount', 'getColorCount'), new \Rector\Renaming\ValueObject\MethodCallRename('GmagickPixel', 'getcolorvalue', 'getColorValue'), new \Rector\Renaming\ValueObject\MethodCallRename('GmagickPixel', 'setcolor', 'setColor'), new \Rector\Renaming\ValueObject\MethodCallRename('GmagickPixel', 'setcolorvalue', 'setColorValue')]);
};
