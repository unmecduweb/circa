<?php

/* @MwebAdmin/filemanager/include/php_image_magician.php */
class __TwigTemplate_898504e5602f1cef6fbc40a0ffda7ac589b7964325829e553be82e28e5a09c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59e0d510b2cfcccd6feccf908e832429ca13002e0ba25136cae9292af63b9fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e0d510b2cfcccd6feccf908e832429ca13002e0ba25136cae9292af63b9fd4->enter($__internal_59e0d510b2cfcccd6feccf908e832429ca13002e0ba25136cae9292af63b9fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MwebAdmin/filemanager/include/php_image_magician.php"));

        // line 1
        echo "<?php
# ========================================================================#
#
#  This work is licensed under the Creative Commons Attribution 3.0 Unported
#  License. To view a copy of this license,
#  visit http://creativecommons.org/licenses/by/3.0/ or send a letter to
#  Creative Commons, 444 Castro Street, Suite 900, Mountain View, California,
#  94041, USA.
#
#  All rights reserved.
#
#  Author:    Jarrod Oberto
#  Version:   1.5.1
#  Date:      10-05-11
#  Purpose:   Provide tools for image manipulation using GD
#  Param In:  See functions.
#  Param Out: Produces a resized image
#  Requires : Requires PHP GD library.
#  Usage Example:
#                     include(\"lib/php_image_magician.php\");
#                     \$magicianObj = new resize('images/car.jpg');
#                     \$magicianObj -> resizeImage(150, 100, 0);
#                     \$magicianObj -> saveImage('images/car_small.jpg', 100);
#
#        - See end of doc for more examples -
#
#  Supported file types include: jpg, png, gif, bmp, psd (read)
#
#
#
#  The following functions are taken from phpThumb() [available from
#    http://phpthumb.sourceforge.net], and are used with written permission
#  from James Heinrich.
#    - GD2BMPstring
#      - GetPixelColor
#      - LittleEndian2String
#
#  The following functions are from Marc Hibbins and are used with written
#  permission (are also under the Attribution-ShareAlike
#  [http://creativecommons.org/licenses/by-sa/3.0/] license.
#    -
#
#  PhpPsdReader is used with written permission from Tim de Koning.
#  [http://www.kingsquare.nl/phppsdreader]
#
#
#
#  Modificatoin history
#  Date      Initials  Ver Description
#  10-05-11  J.C.O   0.0 Initial build
#  01-06-11  J.C.O   0.1.1   * Added reflections
#              * Added Rounded corners
#              * You can now use PNG interlacing
#              * Added shadow
#              * Added caption box
#              * Added vintage filter
#              * Added dynamic image resizing (resize on the fly)
#              * minor bug fixes
#  05-06-11  J.C.O   0.1.1.1 * Fixed undefined variables
#  17-06-11  J.C.O   0.1.2   * Added image_batch_class.php class
#              * Minor bug fixes
#  26-07-11  J.C.O   0.1.4 * Added support for external images
#              * Can now set the crop poisition
#  03-08-11  J.C.O   0.1.5 * Added reset() method to reset resource to
#                original input file.
#              * Added method addTextToCaptionBox() to
#                simplify adding text to a caption box.
#              * Added experimental writeIPTC. (not finished)
#              * Added experimental readIPTC. (not finished)
#  11-08-11  J.C.O     * Added initial border presets.
#  30-08-11  J.C.O     * Added 'auto' crop option to crop portrait
#                images near the top.
#  08-09-11  J.C.O     * Added cropImage() method to allow standalone
#                cropping.
#  17-09-11  J.C.O     * Added setCropFromTop() set method - set the
#                percentage to crop from the top when using
#                crop 'auto' option.
#              * Added setTransparency() set method - allows you
#                to turn transparency off (like when saving
#                as a jpg).
#              * Added setFillColor() set method - set the
#                background color to use instead of transparency.
#  05-11-11  J.C.O   0.1.5.1 * Fixed interlacing option
#  0-07-12  J.C.O   1.0
#
#  Known issues & Limitations:
# -------------------------------
#  Not so much an issue, the image is destroyed on the deconstruct rather than
#  when we have finished with it. The reason for this is that we don't know
#  when we're finished with it as you can both save the image and display
#  it directly to the screen (imagedestroy(\$this->imageResized))
#
#  Opening BMP files is slow. A test with 884 bmp files processed in a loop
#  takes forever - over 5 min. This test inlcuded opening the file, then
#  getting and displaying its width and height.
#
#  \$forceStretch:
# -------------------------------
#  On by default.
#  \$forceStretch can be disabled by calling method setForceStretch with false
#  parameter. If disabled, if an images original size is smaller than the size
#  specified by the user, the original size will be used. This is useful when
#  dealing with small images.
#
#  If enabled, images smaller than the size specified will be stretched to
#  that size.
#
#  Tips:
# -------------------------------
#  * If you're resizing a transparent png and saving it as a jpg, set
#  \$keepTransparency to false with: \$magicianObj->setTransparency(false);
#
#  FEATURES:
#    * EASY TO USE
#    * BMP SUPPORT (read & write)
#    * PSD (photoshop) support (read)
#    * RESIZE IMAGES
#      - Preserve transparency (png, gif)
#      - Apply sharpening (jpg) (requires PHP >= 5.1.0)
#      - Set image quality (jpg, png)
#      - Resize modes:
#        - exact size
#        - resize by width (auto height)
#        - resize by height (auto width)
#        - auto (automatically determine the best of the above modes to use)
#        - crop - resize as best as it can then crop the rest
#      - Force stretching of smaller images (upscale)
#    * APPLY FILTERS
#      - Convert to grey scale
#      - Convert to black and white
#      - Convert to sepia
#      - Convert to negative
#    * ROTATE IMAGES
#      - Rotate using predefined \"left\", \"right\", or \"180\"; or any custom degree amount
#    * EXTRACT EXIF DATA (requires exif module)
#      - make
#      - model
#      - date
#      - exposure
#      - aperture
#      - f-stop
#      - iso
#      - focal length
#      - exposure program
#      - metering mode
#      - flash status
#      - creator
#      - copyright
#    * ADD WATERMARK
#      - Specify exact x, y placement
#      - Or, specify using one of the 9 pre-defined placements such as \"tl\"
#        (for top left), \"m\" (for middle), \"br\" (for bottom right)
#        - also specify padding from edge amount (optional).
#      - Set opacity of watermark (png).
#    * ADD BORDER
#    * USE HEX WHEN SPECIFYING COLORS (eg: #ffffff)
#    * SAVE IMAGE OR OUTPUT TO SCREEN
#
#
# ========================================================================#


class imageLib {

\tprivate   \$fileName;
\tprivate   \$image;
\tprotected \$imageResized;
\tprivate   \$widthOriginal;     # Always be the original width
\tprivate   \$heightOriginal;
\tprivate   \$width;         # Current width (width after resize)
\tprivate   \$height;
\tprivate   \$imageSize;
\tprivate   \$fileExtension;

\tprivate \$debug      = true;
\tprivate \$errorArray = array();

\tprivate \$forceStretch        = true;
\tprivate \$aggresiveSharpening = false;

\tprivate \$transparentArray = array( '.png', '.gif' );
\tprivate \$keepTransparency = true;
\tprivate \$fillColorArray   = array( 'r' => 255, 'g' => 255, 'b' => 255 );

\tprivate \$sharpenArray = array( 'jpg' );

\tprivate \$psdReaderPath;
\tprivate \$filterOverlayPath;

\tprivate \$isInterlace;

\tprivate \$captionBoxPositionArray = array();

\tprivate \$fontDir = 'fonts';

\tprivate \$cropFromTopPercent = 10;


## --------------------------------------------------------

\tfunction __construct(\$fileName)
\t\t# Author:     Jarrod Oberto
\t\t# Date:     27-02-08
\t\t# Purpose:    Constructor
\t\t# Param in:   \$fileName: File name and path.
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif ( ! \$this->testGDInstalled())
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('The GD Library is not installed.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t};

\t\t\$this->initialise();

\t\t// *** Save the image file name. Only store this incase you want to display it
\t\t\$this->fileName = \$fileName;
\t\t\$this->fileExtension = fix_strtolower(strrchr(\$fileName, '.'));

\t\t// *** Open up the file
\t\t\$this->image = \$this->openImage(\$fileName);


\t\t// *** Assign here so we don't modify the original
\t\t\$this->imageResized = \$this->image;

\t\t// *** If file is an image
\t\tif (\$this->testIsImage(\$this->image))
\t\t{
\t\t\t// *** Get width and height
\t\t\t\$this->width = imagesx(\$this->image);
\t\t\t\$this->widthOriginal = imagesx(\$this->image);
\t\t\t\$this->height = imagesy(\$this->image);
\t\t\t\$this->heightOriginal = imagesy(\$this->image);


\t\t\t/*  Added 15-09-08
         *  Get the filesize using this build in method.
         *  Stores an array of size
         *
         *  \$this->imageSize[1] = width
         *  \$this->imageSize[2] = height
         *  \$this->imageSize[3] = width x height
         *
         */
\t\t\t\$this->imageSize = getimagesize(\$this->fileName);

\t\t}
\t\telse
\t\t{
\t\t\t\$this->errorArray[] = 'File is not an image';
\t\t}
\t}

## --------------------------------------------------------

\tprivate function initialise()
\t{

\t\t\$this->psdReaderPath = dirname(__FILE__) . '/classPhpPsdReader.php';
\t\t\$this->filterOverlayPath = dirname(__FILE__) . '/filters';

\t\t// *** Set if image should be interlaced or not.
\t\t\$this->isInterlace = false;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Resize
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/


\tpublic function resizeImage(\$newWidth, \$newHeight, \$option = 0, \$sharpen = false, \$autoRotate = false)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Resizes the image
\t\t# Param in:   \$newWidth:
\t\t#             \$newHeight:
\t\t#             \$option:     0 / exact = defined size;
\t\t#                          1 / portrait = keep aspect set height;
\t\t#                          2 / landscape = keep aspect set width;
\t\t#                          3 / auto = auto;
\t\t#                          4 / crop= resize and crop;
\t\t#
\t\t#         \$option can also be an array containing options for
\t\t#         cropping. E.G., array('crop', 'r')
\t\t#
\t\t#         This array only applies to 'crop' and the 'r' refers to
\t\t#         \"crop right\". Other value include; tl, t, tr, l, m (default),
\t\t#         r, bl, b, br, or you can specify your own co-ords (which
\t\t#         isn't recommended.
\t\t#
\t\t#       \$sharpen:    true: sharpen (jpg only);
\t\t#                false: don't sharpen
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:      To clarify the \$option input:
\t\t#               0 = The exact height and width dimensions you set.
\t\t#               1 = Whatever height is passed in will be the height that
\t\t#                   is set. The width will be calculated and set automatically
\t\t#                   to a the value that keeps the original aspect ratio.
\t\t#               2 = The same but based on the width. We try make the image the
\t\t#                  biggest size we can while stil fitting inside the box size
\t\t#               3 = Depending whether the image is landscape or portrait, this
\t\t#                   will automatically determine whether to resize via
\t\t#                   dimension 1,2 or 0
\t\t#               4 = Will resize and then crop the image for best fit
\t\t#
\t\t#       forceStretch can be applied to options 1,2,3 and 4
\t\t#
\t{

\t\t// *** We can pass in an array of options to change the crop position
\t\t\$cropPos = 'm';
\t\tif (is_array(\$option) && fix_strtolower(\$option[0]) == 'crop')
\t\t{
\t\t\t\$cropPos = \$option[1];         # get the crop option
\t\t}
\t\telse
\t\t{
\t\t\tif (strpos(\$option, '-') !== false)
\t\t\t{
\t\t\t\t// *** Or pass in a hyphen seperated option
\t\t\t\t\$optionPiecesArray = explode('-', \$option);
\t\t\t\t\$cropPos = end(\$optionPiecesArray);
\t\t\t}
\t\t}

\t\t// *** Check the option is valid
\t\t\$option = \$this->prepOption(\$option);

\t\t// *** Make sure the file passed in is valid
\t\tif ( ! \$this->image)
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('file ' . \$this->getFileName() . ' is missing or invalid');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t};

\t\t// *** Get optimal width and height - based on \$option
\t\t\$dimensionsArray = \$this->getDimensions(\$newWidth, \$newHeight, \$option);

\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];

\t\t// *** Resample - create image canvas of x, y size
\t\t\$this->imageResized = imagecreatetruecolor(\$optimalWidth, \$optimalHeight);
\t\t\$this->keepTransparancy(\$optimalWidth, \$optimalHeight, \$this->imageResized);
\t\timagecopyresampled(\$this->imageResized, \$this->image, 0, 0, 0, 0, \$optimalWidth, \$optimalHeight, \$this->width, \$this->height);


\t\t// *** If '4', then crop too
\t\tif (\$option == 4 || \$option == 'crop')
\t\t{

\t\t\tif ((\$optimalWidth >= \$newWidth && \$optimalHeight >= \$newHeight))
\t\t\t{
\t\t\t\t\$this->crop(\$optimalWidth, \$optimalHeight, \$newWidth, \$newHeight, \$cropPos);
\t\t\t}
\t\t}

\t\t// *** If Rotate.
\t\tif (\$autoRotate)
\t\t{

\t\t\t\$exifData = \$this->getExif(false);
\t\t\tif (count(\$exifData) > 0)
\t\t\t{

\t\t\t\tswitch (\$exifData['orientation'])
\t\t\t\t{
\t\t\t\t\tcase 8:
\t\t\t\t\t\t\$this->imageResized = imagerotate(\$this->imageResized, 90, 0);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 3:
\t\t\t\t\t\t\$this->imageResized = imagerotate(\$this->imageResized, 180, 0);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 6:
\t\t\t\t\t\t\$this->imageResized = imagerotate(\$this->imageResized, -90, 0);
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// *** Sharpen image (if jpg and the user wishes to do so)
\t\tif (\$sharpen && in_array(\$this->fileExtension, \$this->sharpenArray))
\t\t{

\t\t\t// *** Sharpen
\t\t\t\$this->sharpen();
\t\t}
\t}

## --------------------------------------------------------

\tpublic function cropImage(\$newWidth, \$newHeight, \$cropPos = 'm')
\t\t# Author:     Jarrod Oberto
\t\t# Date:       08-09-11
\t\t# Purpose:    Crops the image
\t\t# Param in:   \$newWidth: crop with
\t\t#             \$newHeight: crop height
\t\t#       \$cropPos: Can be any of the following:
\t\t#             tl, t, tr, l, m, r, bl, b, br, auto
\t\t#           Or:
\t\t#             a custom position such as '30x50'
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\t// *** Make sure the file passed in is valid
\t\tif ( ! \$this->image)
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('file ' . \$this->getFileName() . ' is missing or invalid');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t};

\t\t\$this->imageResized = \$this->image;
\t\t\$this->crop(\$this->width, \$this->height, \$newWidth, \$newHeight, \$cropPos);

\t}

## --------------------------------------------------------

\tprivate function keepTransparancy(\$width, \$height, \$im)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       08-04-11
\t\t# Purpose:    Keep transparency for png and gif image
\t\t# Param in:
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t// *** If PNG, perform some transparency retention actions (gif untested)
\t\tif (in_array(\$this->fileExtension, \$this->transparentArray) && \$this->keepTransparency)
\t\t{
\t\t\timagealphablending(\$im, false);
\t\t\timagesavealpha(\$im, true);
\t\t\t\$transparent = imagecolorallocatealpha(\$im, 255, 255, 255, 127);
\t\t\timagefilledrectangle(\$im, 0, 0, \$width, \$height, \$transparent);
\t\t}
\t\telse
\t\t{
\t\t\t\$color = imagecolorallocate(\$im, \$this->fillColorArray['r'], \$this->fillColorArray['g'], \$this->fillColorArray['b']);
\t\t\timagefilledrectangle(\$im, 0, 0, \$width, \$height, \$color);
\t\t}
\t}

## --------------------------------------------------------

\tprivate function crop(\$optimalWidth, \$optimalHeight, \$newWidth, \$newHeight, \$cropPos)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       15-09-08
\t\t# Purpose:    Crops the image
\t\t# Param in:   \$newWidth:
\t\t#             \$newHeight:
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\t// *** Get cropping co-ordinates
\t\t\$cropArray = \$this->getCropPlacing(\$optimalWidth, \$optimalHeight, \$newWidth, \$newHeight, \$cropPos);
\t\t\$cropStartX = \$cropArray['x'];
\t\t\$cropStartY = \$cropArray['y'];

\t\t// *** Crop this bad boy
\t\t\$crop = imagecreatetruecolor(\$newWidth, \$newHeight);
\t\t\$this->keepTransparancy(\$optimalWidth, \$optimalHeight, \$crop);
\t\timagecopyresampled(\$crop, \$this->imageResized, 0, 0, \$cropStartX, \$cropStartY, \$newWidth, \$newHeight, \$newWidth, \$newHeight);

\t\t\$this->imageResized = \$crop;

\t\t// *** Set new width and height to our variables
\t\t\$this->width = \$newWidth;
\t\t\$this->height = \$newHeight;

\t}

## --------------------------------------------------------

\tprivate function getCropPlacing(\$optimalWidth, \$optimalHeight, \$newWidth, \$newHeight, \$pos = 'm')
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   July 11
\t\t# Purpose:  Set the cropping area.
\t\t# Params in:
\t\t# Params out: (array) the crop x and y co-ordinates.
\t\t# Notes:    When specifying the exact pixel crop position (eg 10x15), be
\t\t#       very careful as it's easy to crop out of the image leaving
\t\t#       black borders.
\t\t#
\t{
\t\t\$pos = fix_strtolower(\$pos);

\t\t// *** If co-ords have been entered
\t\tif (strstr(\$pos, 'x'))
\t\t{
\t\t\t\$pos = str_replace(' ', '', \$pos);

\t\t\t\$xyArray = explode('x', \$pos);
\t\t\tlist(\$cropStartX, \$cropStartY) = \$xyArray;

\t\t}
\t\telse
\t\t{

\t\t\tswitch (\$pos)
\t\t\t{
\t\t\t\tcase 'tl':
\t\t\t\t\t\$cropStartX = 0;
\t\t\t\t\t\$cropStartY = 0;
\t\t\t\t\tbreak;

\t\t\t\tcase 't':
\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\$cropStartY = 0;
\t\t\t\t\tbreak;

\t\t\t\tcase 'tr':
\t\t\t\t\t\$cropStartX = \$optimalWidth - \$newWidth;
\t\t\t\t\t\$cropStartY = 0;
\t\t\t\t\tbreak;

\t\t\t\tcase 'l':
\t\t\t\t\t\$cropStartX = 0;
\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'm':
\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'r':
\t\t\t\t\t\$cropStartX = \$optimalWidth - \$newWidth;
\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'bl':
\t\t\t\t\t\$cropStartX = 0;
\t\t\t\t\t\$cropStartY = \$optimalHeight - \$newHeight;
\t\t\t\t\tbreak;

\t\t\t\tcase 'b':
\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\$cropStartY = \$optimalHeight - \$newHeight;
\t\t\t\t\tbreak;

\t\t\t\tcase 'br':
\t\t\t\t\t\$cropStartX = \$optimalWidth - \$newWidth;
\t\t\t\t\t\$cropStartY = \$optimalHeight - \$newHeight;
\t\t\t\t\tbreak;

\t\t\t\tcase 'auto':
\t\t\t\t\t// *** If image is a portrait crop from top, not center. v1.5
\t\t\t\t\tif (\$optimalHeight > \$optimalWidth)
\t\t\t\t\t{
\t\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\t\$cropStartY = (\$this->cropFromTopPercent / 100) * \$optimalHeight;
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{

\t\t\t\t\t\t// *** Else crop from the center
\t\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\t}
\t\t\t\t\tbreak;

\t\t\t\tdefault:
\t\t\t\t\t// *** Default to center
\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\treturn array( 'x' => \$cropStartX, 'y' => \$cropStartY );
\t}

## --------------------------------------------------------

\tprivate function getDimensions(\$newWidth, \$newHeight, \$option)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       17-11-09
\t\t# Purpose:    Get new image dimensions based on user specificaions
\t\t# Param in:   \$newWidth:
\t\t#             \$newHeight:
\t\t# Param out:  Array of new width and height values
\t\t# Reference:
\t\t# Notes:    If \$option = 3 then this function is call recursivly
\t\t#
\t\t#       To clarify the \$option input:
\t\t#               0 = The exact height and width dimensions you set.
\t\t#               1 = Whatever height is passed in will be the height that
\t\t#                   is set. The width will be calculated and set automatically
\t\t#                   to a the value that keeps the original aspect ratio.
\t\t#               2 = The same but based on the width.
\t\t#               3 = Depending whether the image is landscape or portrait, this
\t\t#                   will automatically determine whether to resize via
\t\t#                   dimension 1,2 or 0.
\t\t#               4 = Resize the image as much as possible, then crop the
\t\t#         remainder.
\t{

\t\tswitch (strval(\$option))
\t\t{
\t\t\tcase '0':
\t\t\tcase 'exact':
\t\t\t\t\$optimalWidth = \$newWidth;
\t\t\t\t\$optimalHeight = \$newHeight;
\t\t\t\tbreak;
\t\t\tcase '1':
\t\t\tcase 'portrait':
\t\t\t\t\$dimensionsArray = \$this->getSizeByFixedHeight(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\tbreak;
\t\t\tcase '2':
\t\t\tcase 'landscape':
\t\t\t\t\$dimensionsArray = \$this->getSizeByFixedWidth(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\tbreak;
\t\t\tcase '3':
\t\t\tcase 'auto':
\t\t\t\t\$dimensionsArray = \$this->getSizeByAuto(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\tbreak;
\t\t\tcase '4':
\t\t\tcase 'crop':
\t\t\t\t\$dimensionsArray = \$this->getOptimalCrop(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\tbreak;
\t\t}

\t\treturn array( 'optimalWidth' => \$optimalWidth, 'optimalHeight' => \$optimalHeight );
\t}

## --------------------------------------------------------

\tprivate function getSizeByFixedHeight(\$newWidth, \$newHeight)
\t{
\t\t// *** If forcing is off...
\t\tif ( ! \$this->forceStretch)
\t\t{

\t\t\t// *** ...check if actual height is less than target height
\t\t\tif (\$this->height < \$newHeight)
\t\t\t{
\t\t\t\treturn array( 'optimalWidth' => \$this->width, 'optimalHeight' => \$this->height );
\t\t\t}
\t\t}

\t\t\$ratio = \$this->width / \$this->height;

\t\t\$newWidth = \$newHeight * \$ratio;

\t\t//return \$newWidth;
\t\treturn array( 'optimalWidth' => \$newWidth, 'optimalHeight' => \$newHeight );
\t}

## --------------------------------------------------------

\tprivate function getSizeByFixedWidth(\$newWidth, \$newHeight)
\t{
\t\t// *** If forcing is off...
\t\tif ( ! \$this->forceStretch)
\t\t{

\t\t\t// *** ...check if actual width is less than target width
\t\t\tif (\$this->width < \$newWidth)
\t\t\t{
\t\t\t\treturn array( 'optimalWidth' => \$this->width, 'optimalHeight' => \$this->height );
\t\t\t}
\t\t}

\t\t\$ratio = \$this->height / \$this->width;

\t\t\$newHeight = \$newWidth * \$ratio;

\t\t//return \$newHeight;
\t\treturn array( 'optimalWidth' => \$newWidth, 'optimalHeight' => \$newHeight );
\t}

## --------------------------------------------------------

\tprivate function getSizeByAuto(\$newWidth, \$newHeight)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       19-08-08
\t\t# Purpose:    Depending on the height, choose to resize by 0, 1, or 2
\t\t# Param in:   The new height and new width
\t\t# Notes:
\t\t#
\t{
\t\t// *** If forcing is off...
\t\tif ( ! \$this->forceStretch)
\t\t{

\t\t\t// *** ...check if actual size is less than target size
\t\t\tif (\$this->width < \$newWidth && \$this->height < \$newHeight)
\t\t\t{
\t\t\t\treturn array( 'optimalWidth' => \$this->width, 'optimalHeight' => \$this->height );
\t\t\t}
\t\t}

\t\tif (\$this->height < \$this->width)
\t\t\t// *** Image to be resized is wider (landscape)
\t\t{
\t\t\t//\$optimalWidth = \$newWidth;
\t\t\t//\$optimalHeight= \$this->getSizeByFixedWidth(\$newWidth);

\t\t\t\$dimensionsArray = \$this->getSizeByFixedWidth(\$newWidth, \$newHeight);
\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t}
\t\telseif (\$this->height > \$this->width)
\t\t\t// *** Image to be resized is taller (portrait)
\t\t{
\t\t\t//\$optimalWidth = \$this->getSizeByFixedHeight(\$newHeight);
\t\t\t//\$optimalHeight= \$newHeight;

\t\t\t\$dimensionsArray = \$this->getSizeByFixedHeight(\$newWidth, \$newHeight);
\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t}
\t\telse
\t\t\t// *** Image to be resizerd is a square
\t\t{

\t\t\tif (\$newHeight < \$newWidth)
\t\t\t{
\t\t\t\t//\$optimalWidth = \$newWidth;
\t\t\t\t//\$optimalHeight= \$this->getSizeByFixedWidth(\$newWidth);
\t\t\t\t\$dimensionsArray = \$this->getSizeByFixedWidth(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tif (\$newHeight > \$newWidth)
\t\t\t\t{
\t\t\t\t\t//\$optimalWidth = \$this->getSizeByFixedHeight(\$newHeight);
\t\t\t\t\t//\$optimalHeight= \$newHeight;
\t\t\t\t\t\$dimensionsArray = \$this->getSizeByFixedHeight(\$newWidth, \$newHeight);
\t\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t// *** Sqaure being resized to a square
\t\t\t\t\t\$optimalWidth = \$newWidth;
\t\t\t\t\t\$optimalHeight = \$newHeight;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn array( 'optimalWidth' => \$optimalWidth, 'optimalHeight' => \$optimalHeight );
\t}

## --------------------------------------------------------

\tprivate function getOptimalCrop(\$newWidth, \$newHeight)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       17-11-09
\t\t# Purpose:    Get optimal crop dimensions
\t\t# Param in:   width and height as requested by user (fig 3)
\t\t# Param out:  Array of optimal width and height (fig 2)
\t\t# Reference:
\t\t# Notes:      The optimal width and height return are not the same as the
\t\t#       same as the width and height passed in. For example:
\t\t#
\t\t#
\t\t#   |-----------------|     |------------|       |-------|
\t\t#   |             |   =>  |**|      |**|   =>  |       |
\t\t#   |             |     |**|      |**|       |       |
\t\t#   |           |       |------------|       |-------|
\t\t#   |-----------------|
\t\t#        original                optimal             crop
\t\t#              size                   size               size
\t\t#  Fig          1                      2                  3
\t\t#
\t\t#       300 x 250           150 x 125          150 x 100
\t\t#
\t\t#    The optimal size is the smallest size (that is closest to the crop size)
\t\t#    while retaining proportion/ratio.
\t\t#
\t\t#  The crop size is the optimal size that has been cropped on one axis to
\t\t#  make the image the exact size specified by the user.
\t\t#
\t\t#               * represent cropped area
\t\t#
\t{

\t\t// *** If forcing is off...
\t\tif ( ! \$this->forceStretch)
\t\t{

\t\t\t// *** ...check if actual size is less than target size
\t\t\tif (\$this->width < \$newWidth && \$this->height < \$newHeight)
\t\t\t{
\t\t\t\treturn array( 'optimalWidth' => \$this->width, 'optimalHeight' => \$this->height );
\t\t\t}
\t\t}

\t\t\$heightRatio = \$this->height / \$newHeight;
\t\t\$widthRatio = \$this->width / \$newWidth;

\t\tif (\$heightRatio < \$widthRatio)
\t\t{
\t\t\t\$optimalRatio = \$heightRatio;
\t\t}
\t\telse
\t\t{
\t\t\t\$optimalRatio = \$widthRatio;
\t\t}

\t\t\$optimalHeight = round(\$this->height / \$optimalRatio);
\t\t\$optimalWidth = round(\$this->width / \$optimalRatio);

\t\treturn array( 'optimalWidth' => \$optimalWidth, 'optimalHeight' => \$optimalHeight );
\t}

## --------------------------------------------------------

\tprivate function sharpen()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       08 04 2011
\t\t# Purpose:    Sharpen image
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t# Credit:   Incorporates Joe Lencioni (August 6, 2008) code
\t{

\t\tif (version_compare(PHP_VERSION, '5.1.0') >= 0)
\t\t{

\t\t\t// ***
\t\t\tif (\$this->aggresiveSharpening)
\t\t\t{ # A more aggressive sharpening solution

\t\t\t\t\$sharpenMatrix = array( array( -1, -1, -1 ),
\t\t\t\t\t\t\t\t\t\tarray( -1, 16, -1 ),
\t\t\t\t\t\t\t\t\t\tarray( -1, -1, -1 ) );
\t\t\t\t\$divisor = 8;
\t\t\t\t\$offset = 0;

\t\t\t\timageconvolution(\$this->imageResized, \$sharpenMatrix, \$divisor, \$offset);
\t\t\t}
\t\t\telse # More subtle and personally more desirable
\t\t\t{
\t\t\t\t\$sharpness = \$this->findSharp(\$this->widthOriginal, \$this->width);

\t\t\t\t\$sharpenMatrix = array(
\t\t\t\t\tarray( -1, -2, -1 ),
\t\t\t\t\tarray( -2, \$sharpness + 12, -2 ), //Lessen the effect of a filter by increasing the value in the center cell
\t\t\t\t\tarray( -1, -2, -1 )
\t\t\t\t);
\t\t\t\t\$divisor = \$sharpness; // adjusts brightness
\t\t\t\t\$offset = 0;
\t\t\t\timageconvolution(\$this->imageResized, \$sharpenMatrix, \$divisor, \$offset);
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('Sharpening required PHP 5.1.0 or greater.');
\t\t\t}
\t\t}
\t}

\t## --------------------------------------------------------

\tprivate function sharpen2(\$level)
\t{
\t\t\$sharpenMatrix = array(
\t\t\tarray( \$level, \$level, \$level ),
\t\t\tarray( \$level, (8 * \$level) + 1, \$level ), //Lessen the effect of a filter by increasing the value in the center cell
\t\t\tarray( \$level, \$level, \$level )
\t\t);

\t}

## --------------------------------------------------------

\tprivate function findSharp(\$orig, \$final)
\t\t# Author:     Ryan Rud (http://adryrun.com)
\t\t# Purpose:    Find optimal sharpness
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t\$final = \$final * (750.0 / \$orig);
\t\t\$a = 52;
\t\t\$b = -0.27810650887573124;
\t\t\$c = .00047337278106508946;

\t\t\$result = \$a + \$b * \$final + \$c * \$final * \$final;

\t\treturn max(round(\$result), 0);
\t}

## --------------------------------------------------------

\tprivate function prepOption(\$option)
\t\t# Author:     Jarrod Oberto
\t\t# Purpose:    Prep option like change the passed in option to lowercase
\t\t# Param in:   (str/int) \$option: eg. 'exact', 'crop'. 0, 4
\t\t# Param out:  lowercase string
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (is_array(\$option))
\t\t{
\t\t\tif (fix_strtolower(\$option[0]) == 'crop' && count(\$option) == 2)
\t\t\t{
\t\t\t\treturn 'crop';
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception('Crop resize option array is badly formatted.');
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tif (strpos(\$option, 'crop') !== false)
\t\t\t{
\t\t\t\treturn 'crop';
\t\t\t}
\t\t}

\t\tif (is_string(\$option))
\t\t{
\t\t\treturn fix_strtolower(\$option);
\t\t}

\t\treturn \$option;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Presets
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

#
# Preset are pre-defined templates you can apply to your image.
#
# These are inteded to be applied to thumbnail images.
#


\tpublic function borderPreset(\$preset)
\t{
\t\tswitch (\$preset)
\t\t{

\t\t\tcase 'simple':
\t\t\t\t\$this->addBorder(7, '#fff');
\t\t\t\t\$this->addBorder(6, '#f2f1f0');
\t\t\t\t\$this->addBorder(2, '#fff');
\t\t\t\t\$this->addBorder(1, '#ccc');
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Draw border
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addBorder(\$thickness = 1, \$rgbArray = array( 255, 255, 255 ))
\t\t# Author:     Jarrod Oberto
\t\t# Date:       05-05-11
\t\t# Purpose:    Add a border to the image
\t\t# Param in:
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:    This border is added to the INSIDE of the image
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\t\$rgbArray = \$this->formatColor(\$rgbArray);
\t\t\t\$r = \$rgbArray['r'];
\t\t\t\$g = \$rgbArray['g'];
\t\t\t\$b = \$rgbArray['b'];


\t\t\t\$x1 = 0;
\t\t\t\$y1 = 0;
\t\t\t\$x2 = ImageSX(\$this->imageResized) - 1;
\t\t\t\$y2 = ImageSY(\$this->imageResized) - 1;

\t\t\t\$rgbArray = ImageColorAllocate(\$this->imageResized, \$r, \$g, \$b);


\t\t\tfor (\$i = 0; \$i < \$thickness; \$i++)
\t\t\t{
\t\t\t\tImageRectangle(\$this->imageResized, \$x1++, \$y1++, \$x2--, \$y2--, \$rgbArray);
\t\t\t}
\t\t}
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Gray Scale
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function greyScale()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image greyscale
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t}

\t}

\t## --------------------------------------------------------

\tpublic function greyScaleEnhanced()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image greyscale
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -15);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_BRIGHTNESS, 2);
\t\t\t\$this->sharpen(\$this->width);
\t\t}
\t}

\t## --------------------------------------------------------

\tpublic function greyScaleDramatic()
\t\t# Alias of gd_filter_monopin
\t{
\t\t\$this->gd_filter_monopin();
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Black 'n White
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function blackAndWhite()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image black and white
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -1000);
\t\t}

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Negative
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function negative()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image negative
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\timagefilter(\$this->imageResized, IMG_FILTER_NEGATE);
\t\t}

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Sepia
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function sepia()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image sepia
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_BRIGHTNESS, -10);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -20);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_COLORIZE, 60, 30, -15);
\t\t}
\t}

\t## --------------------------------------------------------

\tpublic function sepia2()

\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\t\$total = imagecolorstotal(\$this->imageResized);
\t\t\tfor (\$i = 0; \$i < \$total; \$i++)
\t\t\t{
\t\t\t\t\$index = imagecolorsforindex(\$this->imageResized, \$i);
\t\t\t\t\$red = (\$index[\"red\"] * 0.393 + \$index[\"green\"] * 0.769 + \$index[\"blue\"] * 0.189) / 1.351;
\t\t\t\t\$green = (\$index[\"red\"] * 0.349 + \$index[\"green\"] * 0.686 + \$index[\"blue\"] * 0.168) / 1.203;
\t\t\t\t\$blue = (\$index[\"red\"] * 0.272 + \$index[\"green\"] * 0.534 + \$index[\"blue\"] * 0.131) / 2.140;
\t\t\t\timagecolorset(\$this->imageResized, \$i, \$red, \$green, \$blue);
\t\t\t}


\t\t}
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Vintage
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function vintage()
\t\t# Alias of gd_filter_monopin
\t{
\t\t\$this->gd_filter_vintage();
\t}

\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Presets By Marc Hibbins
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/


\t/** Apply 'Monopin' preset */
\tpublic function gd_filter_monopin()
\t{

\t\tif (\$this->imageResized)
\t\t{
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_BRIGHTNESS, -15);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -15);
\t\t\t\$this->imageResized = \$this->gd_apply_overlay(\$this->imageResized, 'vignette', 100);
\t\t}
\t}

\t## --------------------------------------------------------

\tpublic function gd_filter_vintage()
\t{
\t\tif (\$this->imageResized)
\t\t{
\t\t\t\$this->imageResized = \$this->gd_apply_overlay(\$this->imageResized, 'vignette', 45);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_BRIGHTNESS, 20);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -35);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_COLORIZE, 60, -10, 35);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_SMOOTH, 7);
\t\t\t\$this->imageResized = \$this->gd_apply_overlay(\$this->imageResized, 'scratch', 10);
\t\t}
\t}

\t## --------------------------------------------------------

\t/** Apply a PNG overlay */
\tprivate function gd_apply_overlay(\$im, \$type, \$amount)
\t\t#
\t\t# Original Author:    Marc Hibbins
\t\t# License:  Attribution-ShareAlike 3.0
\t\t# Purpose:
\t\t# Params in:
\t\t# Params out:
\t\t# Notes:
\t\t#
\t{
\t\t\$width = imagesx(\$im);
\t\t\$height = imagesy(\$im);
\t\t\$filter = imagecreatetruecolor(\$width, \$height);

\t\timagealphablending(\$filter, false);
\t\timagesavealpha(\$filter, true);

\t\t\$transparent = imagecolorallocatealpha(\$filter, 255, 255, 255, 127);
\t\timagefilledrectangle(\$filter, 0, 0, \$width, \$height, \$transparent);

\t\t// *** Resize overlay
\t\t\$overlay = \$this->filterOverlayPath . '/' . \$type . '.png';
\t\t\$png = imagecreatefrompng(\$overlay);
\t\timagecopyresampled(\$filter, \$png, 0, 0, 0, 0, \$width, \$height, imagesx(\$png), imagesy(\$png));

\t\t\$comp = imagecreatetruecolor(\$width, \$height);
\t\timagecopy(\$comp, \$im, 0, 0, 0, 0, \$width, \$height);
\t\timagecopy(\$comp, \$filter, 0, 0, 0, 0, \$width, \$height);
\t\timagecopymerge(\$im, \$comp, 0, 0, 0, 0, \$width, \$height, \$amount);

\t\timagedestroy(\$comp);

\t\treturn \$im;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Colorise
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function image_colorize(\$rgb)
\t{
\t\timageTrueColorToPalette(\$this->imageResized, true, 256);
\t\t\$numColors = imageColorsTotal(\$this->imageResized);

\t\tfor (\$x = 0; \$x < \$numColors; \$x++)
\t\t{
\t\t\tlist(\$r, \$g, \$b) = array_values(imageColorsForIndex(\$this->imageResized, \$x));

\t\t\t// calculate grayscale in percent
\t\t\t\$grayscale = (\$r + \$g + \$b) / 3 / 0xff;

\t\t\timageColorSet(\$this->imageResized, \$x,
\t\t\t\t\$grayscale * \$rgb[0],
\t\t\t\t\$grayscale * \$rgb[1],
\t\t\t\t\$grayscale * \$rgb[2]
\t\t\t);

\t\t}

\t\treturn true;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Reflection
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addReflection(\$reflectionHeight = 50, \$startingTransparency = 30, \$inside = false, \$bgColor = '#fff', \$stretch = false, \$divider = 0)
\t{

\t\t// *** Convert color
\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\$r = \$rgbArray['r'];
\t\t\$g = \$rgbArray['g'];
\t\t\$b = \$rgbArray['b'];

\t\t\$im = \$this->imageResized;
\t\t\$li = imagecreatetruecolor(\$this->width, 1);

\t\t\$bgc = imagecolorallocate(\$li, \$r, \$g, \$b);
\t\timagefilledrectangle(\$li, 0, 0, \$this->width, 1, \$bgc);

\t\t\$bg = imagecreatetruecolor(\$this->width, \$reflectionHeight);
\t\t\$wh = imagecolorallocate(\$im, 255, 255, 255);

\t\t\$im = imagerotate(\$im, -180, \$wh);
\t\timagecopyresampled(\$bg, \$im, 0, 0, 0, 0, \$this->width, \$this->height, \$this->width, \$this->height);

\t\t\$im = \$bg;

\t\t\$bg = imagecreatetruecolor(\$this->width, \$reflectionHeight);

\t\tfor (\$x = 0; \$x < \$this->width; \$x++)
\t\t{
\t\t\timagecopy(\$bg, \$im, \$x, 0, \$this->width - \$x - 1, 0, 1, \$reflectionHeight);
\t\t}
\t\t\$im = \$bg;

\t\t\$transaprencyAmount = \$this->invertTransparency(\$startingTransparency, 100);


\t\t// *** Fade
\t\tif (\$stretch)
\t\t{
\t\t\t\$step = 100 / (\$reflectionHeight + \$startingTransparency);
\t\t}
\t\telse
\t\t{
\t\t\t\$step = 100 / \$reflectionHeight;
\t\t}
\t\tfor (\$i = 0; \$i <= \$reflectionHeight; \$i++)
\t\t{

\t\t\tif (\$startingTransparency > 100)
\t\t\t{
\t\t\t\t\$startingTransparency = 100;
\t\t\t}
\t\t\tif (\$startingTransparency < 1)
\t\t\t{
\t\t\t\t\$startingTransparency = 1;
\t\t\t}
\t\t\timagecopymerge(\$bg, \$li, 0, \$i, 0, 0, \$this->width, 1, \$startingTransparency);
\t\t\t\$startingTransparency += \$step;
\t\t}

\t\t// *** Apply fade
\t\timagecopymerge(\$im, \$li, 0, 0, 0, 0, \$this->width, \$divider, 100); // Divider


\t\t// *** width, height of reflection.
\t\t\$x = imagesx(\$im);
\t\t\$y = imagesy(\$im);


\t\t// *** Determines if the reflection should be displayed inside or outside the image
\t\tif (\$inside)
\t\t{

\t\t\t// Create new blank image with sizes.
\t\t\t\$final = imagecreatetruecolor(\$this->width, \$this->height);

\t\t\timagecopymerge(\$final, \$this->imageResized, 0, 0, 0, \$reflectionHeight, \$this->width, \$this->height - \$reflectionHeight, 100);
\t\t\timagecopymerge(\$final, \$im, 0, \$this->height - \$reflectionHeight, 0, 0, \$x, \$y, 100);

\t\t}
\t\telse
\t\t{

\t\t\t// Create new blank image with sizes.
\t\t\t\$final = imagecreatetruecolor(\$this->width, \$this->height + \$y);

\t\t\timagecopymerge(\$final, \$this->imageResized, 0, 0, 0, 0, \$this->width, \$this->height, 100);
\t\t\timagecopymerge(\$final, \$im, 0, \$this->height, 0, 0, \$x, \$y, 100);
\t\t}

\t\t\$this->imageResized = \$final;

\t\timagedestroy(\$li);
\t\timagedestroy(\$im);
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Rotate
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function rotate(\$value = 90, \$bgColor = 'transparent')
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Rotate image
\t\t# Param in:   (mixed) \$degrees: (int) number of degress to rotate image
\t\t#               (str) param \"left\": rotate left
\t\t#               (str) param \"right\": rotate right
\t\t#               (str) param \"upside\": upside-down image
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:    The default direction of imageRotate() is counter clockwise.
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\tif (is_integer(\$value))
\t\t\t{
\t\t\t\t\$degrees = \$value;
\t\t\t}

\t\t\t// *** Convert color
\t\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\t\$r = \$rgbArray['r'];
\t\t\t\$g = \$rgbArray['g'];
\t\t\t\$b = \$rgbArray['b'];
\t\t\tif (isset(\$rgbArray['a']))
\t\t\t{
\t\t\t\t\$a = \$rgbArray['a'];
\t\t\t}

\t\t\tif (is_string(\$value))
\t\t\t{

\t\t\t\t\$value = fix_strtolower(\$value);

\t\t\t\tswitch (\$value)
\t\t\t\t{
\t\t\t\t\tcase 'left':
\t\t\t\t\t\t\$degrees = 90;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'right':
\t\t\t\t\t\t\$degrees = 270;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'upside':
\t\t\t\t\t\t\$degrees = 180;
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t}

\t\t\t// *** The default direction of imageRotate() is counter clockwise
\t\t\t//   * This makes it clockwise
\t\t\t\$degrees = 360 - \$degrees;

\t\t\t// *** Create background color
\t\t\t\$bg = ImageColorAllocateAlpha(\$this->imageResized, \$r, \$g, \$b, \$a);

\t\t\t// *** Fill with background
\t\t\tImageFill(\$this->imageResized, 0, 0, \$bg);

\t\t\t// *** Rotate
\t\t\t\$this->imageResized = imagerotate(\$this->imageResized, \$degrees, \$bg); // Rotate 45 degrees and allocated the transparent colour as the one to make transparent (obviously)

\t\t\t// Ensure alpha transparency
\t\t\tImageSaveAlpha(\$this->imageResized, true);

\t\t}
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Round corners
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function roundCorners(\$radius = 5, \$bgColor = 'transparent')
\t\t# Author:     Jarrod Oberto
\t\t# Date:       19-05-2011
\t\t# Purpose:    Create rounded corners on your image
\t\t# Param in:   (int) radius = the amount of curvature
\t\t#       (mixed) \$bgColor = the corner background color
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\t// *** Check if the user wants transparency
\t\t\$isTransparent = false;
\t\tif ( ! is_array(\$bgColor))
\t\t{
\t\t\tif (fix_strtolower(\$bgColor) == 'transparent')
\t\t\t{
\t\t\t\t\$isTransparent = true;
\t\t\t}
\t\t}


\t\t// *** If we use transparency, we need to color our curved mask with a unique color
\t\tif (\$isTransparent)
\t\t{
\t\t\t\$bgColor = \$this->findUnusedGreen();
\t\t}

\t\t// *** Convert color
\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\$r = \$rgbArray['r'];
\t\t\$g = \$rgbArray['g'];
\t\t\$b = \$rgbArray['b'];
\t\tif (isset(\$rgbArray['a']))
\t\t{
\t\t\t\$a = \$rgbArray['a'];
\t\t}


\t\t// *** Create top-left corner mask (square)
\t\t\$cornerImg = imagecreatetruecolor(\$radius, \$radius);
\t\t//\$cornerImg = imagecreate(\$radius, \$radius);

\t\t//imagealphablending(\$cornerImg, true);
\t\t//imagesavealpha(\$cornerImg, true);

\t\t//imagealphablending(\$this->imageResized, false);
\t\t//imagesavealpha(\$this->imageResized, true);

\t\t// *** Give it a color
\t\t\$maskColor = imagecolorallocate(\$cornerImg, 0, 0, 0);


\t\t// *** Replace the mask color (black) to transparent
\t\timagecolortransparent(\$cornerImg, \$maskColor);


\t\t// *** Create the image background color
\t\t\$imagebgColor = imagecolorallocate(\$cornerImg, \$r, \$g, \$b);


\t\t// *** Fill the corner area to the user defined color
\t\timagefill(\$cornerImg, 0, 0, \$imagebgColor);


\t\timagefilledellipse(\$cornerImg, \$radius, \$radius, \$radius * 2, \$radius * 2, \$maskColor);


\t\t// *** Map to top left corner
\t\timagecopymerge(\$this->imageResized, \$cornerImg, 0, 0, 0, 0, \$radius, \$radius, 100); #tl

\t\t// *** Map rounded corner to other corners by rotating and applying the mask
\t\t\$cornerImg = imagerotate(\$cornerImg, 90, 0);
\t\timagecopymerge(\$this->imageResized, \$cornerImg, 0, \$this->height - \$radius, 0, 0, \$radius, \$radius, 100); #bl

\t\t\$cornerImg = imagerotate(\$cornerImg, 90, 0);
\t\timagecopymerge(\$this->imageResized, \$cornerImg, \$this->width - \$radius, \$this->height - \$radius, 0, 0, \$radius, \$radius, 100); #br

\t\t\$cornerImg = imagerotate(\$cornerImg, 90, 0);
\t\timagecopymerge(\$this->imageResized, \$cornerImg, \$this->width - \$radius, 0, 0, 0, \$radius, \$radius, 100); #tr


\t\t// *** If corners are to be transparent, we fill our chromakey color as transparent.
\t\tif (\$isTransparent)
\t\t{
\t\t\t//imagecolortransparent(\$this->imageResized, \$imagebgColor);
\t\t\t\$this->imageResized = \$this->transparentImage(\$this->imageResized);
\t\t\timagesavealpha(\$this->imageResized, true);
\t\t}

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Shadow
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addShadow(\$shadowAngle = 45, \$blur = 15, \$bgColor = 'transparent')
\t\t#
\t\t# Author:   Jarrod Oberto (Adapted from Pascal Naidon)
\t\t# Ref:    http://www.les-stooges.org/pascal/webdesign/vignettes/index.php?la=en
\t\t# Purpose:  Add a drop shadow to your image
\t\t# Params in:  (int) \$angle: the angle of the shadow
\t\t#       (int) \$blur: the blur distance
\t\t#       (mixed) \$bgColor: the color of the background
\t\t# Params out:
\t\t# Notes:
\t\t#
\t{
\t\t// *** A higher number results in a smoother shadow
\t\tdefine('STEPS', \$blur * 2);

\t\t// *** Set the shadow distance
\t\t\$shadowDistance = \$blur * 0.25;

\t\t// *** Set blur width and height
\t\t\$blurWidth = \$blurHeight = \$blur;


\t\tif (\$shadowAngle == 0)
\t\t{
\t\t\t\$distWidth = 0;
\t\t\t\$distHeight = 0;
\t\t}
\t\telse
\t\t{
\t\t\t\$distWidth = \$shadowDistance * cos(deg2rad(\$shadowAngle));
\t\t\t\$distHeight = \$shadowDistance * sin(deg2rad(\$shadowAngle));
\t\t}


\t\t// *** Convert color
\t\tif (fix_strtolower(\$bgColor) != 'transparent')
\t\t{
\t\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\t\$r0 = \$rgbArray['r'];
\t\t\t\$g0 = \$rgbArray['g'];
\t\t\t\$b0 = \$rgbArray['b'];
\t\t}


\t\t\$image = \$this->imageResized;
\t\t\$width = \$this->width;
\t\t\$height = \$this->height;


\t\t\$newImage = imagecreatetruecolor(\$width, \$height);
\t\timagecopyresampled(\$newImage, \$image, 0, 0, 0, 0, \$width, \$height, \$width, \$height);


\t\t// *** RGB
\t\t\$rgb = imagecreatetruecolor(\$width + \$blurWidth, \$height + \$blurHeight);
\t\t\$colour = imagecolorallocate(\$rgb, 0, 0, 0);
\t\timagefilledrectangle(\$rgb, 0, 0, \$width + \$blurWidth, \$height + \$blurHeight, \$colour);
\t\t\$colour = imagecolorallocate(\$rgb, 255, 255, 255);
\t\t//imagefilledrectangle(\$rgb, \$blurWidth*0.5-\$distWidth, \$blurHeight*0.5-\$distHeight, \$width+\$blurWidth*0.5-\$distWidth, \$height+\$blurWidth*0.5-\$distHeight, \$colour);
\t\timagefilledrectangle(\$rgb, \$blurWidth * 0.5 - \$distWidth, \$blurHeight * 0.5 - \$distHeight, \$width + \$blurWidth * 0.5 - \$distWidth, \$height + \$blurWidth * 0.5 - \$distHeight, \$colour);
\t\t//imagecopymerge(\$rgb, \$newImage, 1+\$blurWidth*0.5-\$distWidth, 1+\$blurHeight*0.5-\$distHeight, 0,0, \$width, \$height, 100);
\t\timagecopymerge(\$rgb, \$newImage, \$blurWidth * 0.5 - \$distWidth, \$blurHeight * 0.5 - \$distHeight, 0, 0, \$width + \$blurWidth, \$height + \$blurHeight, 100);


\t\t// *** Shadow (alpha)
\t\t\$shadow = imagecreatetruecolor(\$width + \$blurWidth, \$height + \$blurHeight);
\t\timagealphablending(\$shadow, false);
\t\t\$colour = imagecolorallocate(\$shadow, 0, 0, 0);
\t\timagefilledrectangle(\$shadow, 0, 0, \$width + \$blurWidth, \$height + \$blurHeight, \$colour);


\t\tfor (\$i = 0; \$i <= STEPS; \$i++)
\t\t{

\t\t\t\$t = ((1.0 * \$i) / STEPS);
\t\t\t\$intensity = 255 * \$t * \$t;

\t\t\t\$colour = imagecolorallocate(\$shadow, \$intensity, \$intensity, \$intensity);
\t\t\t\$points = array(
\t\t\t\t\$blurWidth * \$t, \$blurHeight,     // Point 1 (x, y)
\t\t\t\t\$blurWidth, \$blurHeight * \$t,  // Point 2 (x, y)
\t\t\t\t\$width, \$blurHeight * \$t,  // Point 3 (x, y)
\t\t\t\t\$width + \$blurWidth * (1 - \$t), \$blurHeight,     // Point 4 (x, y)
\t\t\t\t\$width + \$blurWidth * (1 - \$t), \$height,     // Point 5 (x, y)
\t\t\t\t\$width, \$height + \$blurHeight * (1 - \$t),  // Point 6 (x, y)
\t\t\t\t\$blurWidth, \$height + \$blurHeight * (1 - \$t),  // Point 7 (x, y)
\t\t\t\t\$blurWidth * \$t, \$height      // Point 8 (x, y)
\t\t\t);
\t\t\timagepolygon(\$shadow, \$points, 8, \$colour);
\t\t}

\t\tfor (\$i = 0; \$i <= STEPS; \$i++)
\t\t{

\t\t\t\$t = ((1.0 * \$i) / STEPS);
\t\t\t\$intensity = 255 * \$t * \$t;

\t\t\t\$colour = imagecolorallocate(\$shadow, \$intensity, \$intensity, \$intensity);
\t\t\timagefilledarc(\$shadow, \$blurWidth - 1, \$blurHeight - 1, 2 * (1 - \$t) * \$blurWidth, 2 * (1 - \$t) * \$blurHeight, 180, 268, \$colour, IMG_ARC_PIE);
\t\t\timagefilledarc(\$shadow, \$width, \$blurHeight - 1, 2 * (1 - \$t) * \$blurWidth, 2 * (1 - \$t) * \$blurHeight, 270, 358, \$colour, IMG_ARC_PIE);
\t\t\timagefilledarc(\$shadow, \$width, \$height, 2 * (1 - \$t) * \$blurWidth, 2 * (1 - \$t) * \$blurHeight, 0, 90, \$colour, IMG_ARC_PIE);
\t\t\timagefilledarc(\$shadow, \$blurWidth - 1, \$height, 2 * (1 - \$t) * \$blurWidth, 2 * (1 - \$t) * \$blurHeight, 90, 180, \$colour, IMG_ARC_PIE);
\t\t}


\t\t\$colour = imagecolorallocate(\$shadow, 255, 255, 255);
\t\timagefilledrectangle(\$shadow, \$blurWidth, \$blurHeight, \$width, \$height, \$colour);
\t\timagefilledrectangle(\$shadow, \$blurWidth * 0.5 - \$distWidth, \$blurHeight * 0.5 - \$distHeight, \$width + \$blurWidth * 0.5 - 1 - \$distWidth, \$height + \$blurHeight * 0.5 - 1 - \$distHeight, \$colour);


\t\t// *** The magic
\t\timagealphablending(\$rgb, false);

\t\tfor (\$theX = 0; \$theX < imagesx(\$rgb); \$theX++)
\t\t{
\t\t\tfor (\$theY = 0; \$theY < imagesy(\$rgb); \$theY++)
\t\t\t{

\t\t\t\t// *** Get the RGB values for every pixel of the RGB image
\t\t\t\t\$colArray = imagecolorat(\$rgb, \$theX, \$theY);
\t\t\t\t\$r = (\$colArray >> 16) & 0xFF;
\t\t\t\t\$g = (\$colArray >> 8) & 0xFF;
\t\t\t\t\$b = \$colArray & 0xFF;

\t\t\t\t// *** Get the alpha value for every pixel of the shadow image
\t\t\t\t\$colArray = imagecolorat(\$shadow, \$theX, \$theY);
\t\t\t\t\$a = \$colArray & 0xFF;
\t\t\t\t\$a = 127 - floor(\$a / 2);
\t\t\t\t\$t = \$a / 128.0;

\t\t\t\t// *** Create color
\t\t\t\tif (fix_strtolower(\$bgColor) == 'transparent')
\t\t\t\t{
\t\t\t\t\t\$myColour = imagecolorallocatealpha(\$rgb, \$r, \$g, \$b, \$a);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$myColour = imagecolorallocate(\$rgb, \$r * (1.0 - \$t) + \$r0 * \$t, \$g * (1.0 - \$t) + \$g0 * \$t, \$b * (1.0 - \$t) + \$b0 * \$t);
\t\t\t\t}

\t\t\t\t// *** Add color to new rgb image
\t\t\t\timagesetpixel(\$rgb, \$theX, \$theY, \$myColour);
\t\t\t}
\t\t}

\t\timagealphablending(\$rgb, true);
\t\timagesavealpha(\$rgb, true);

\t\t\$this->imageResized = \$rgb;

\t\timagedestroy(\$image);
\t\timagedestroy(\$newImage);
\t\timagedestroy(\$shadow);
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Add Caption Box
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addCaptionBox(\$side = 'b', \$thickness = 50, \$padding = 0, \$bgColor = '#000', \$transaprencyAmount = 30)
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   26 May 2011
\t\t# Purpose:  Add a caption box
\t\t# Params in:  (str) \$side: the side to add the caption box (t, r, b, or l).
\t\t#       (int) \$thickness: how thick you want the caption box to be.
\t\t#       (mixed) \$bgColor: The color of the caption box.
\t\t#       (int) \$transaprencyAmount: The amount of transparency to be
\t\t#       applied.
\t\t# Params out: n/a
\t\t# Notes:
\t\t#
\t{
\t\t\$side = fix_strtolower(\$side);

\t\t// *** Convert color
\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\$r = \$rgbArray['r'];
\t\t\$g = \$rgbArray['g'];
\t\t\$b = \$rgbArray['b'];

\t\t\$positionArray = \$this->calculateCaptionBoxPosition(\$side, \$thickness, \$padding);

\t\t// *** Store incase we want to use method addTextToCaptionBox()
\t\t\$this->captionBoxPositionArray = \$positionArray;


\t\t\$transaprencyAmount = \$this->invertTransparency(\$transaprencyAmount, 127, false);
\t\t\$transparent = imagecolorallocatealpha(\$this->imageResized, \$r, \$g, \$b, \$transaprencyAmount);
\t\timagefilledrectangle(\$this->imageResized, \$positionArray['x1'], \$positionArray['y1'], \$positionArray['x2'], \$positionArray['y2'], \$transparent);
\t}

\t## --------------------------------------------------------

\tpublic function addTextToCaptionBox(\$text, \$fontColor = '#fff', \$fontSize = 12, \$angle = 0, \$font = null)
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   03 Aug 11
\t\t# Purpose:  Simplify adding text to a caption box by automatically
\t\t#       locating the center of the caption box
\t\t# Params in:  The usually text paams (less a couple)
\t\t# Params out: n/a
\t\t# Notes:
\t\t#
\t{

\t\t// *** Get the caption box measurements
\t\tif (count(\$this->captionBoxPositionArray) == 4)
\t\t{
\t\t\t\$x1 = \$this->captionBoxPositionArray['x1'];
\t\t\t\$x2 = \$this->captionBoxPositionArray['x2'];
\t\t\t\$y1 = \$this->captionBoxPositionArray['y1'];
\t\t\t\$y2 = \$this->captionBoxPositionArray['y2'];
\t\t}
\t\telse
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('No caption box found.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn false;
\t\t\t}
\t\t}


\t\t// *** Get text font
\t\t\$font = \$this->getTextFont(\$font);

\t\t// *** Get text size
\t\t\$textSizeArray = \$this->getTextSize(\$fontSize, \$angle, \$font, \$text);
\t\t\$textWidth = \$textSizeArray['width'];
\t\t\$textHeight = \$textSizeArray['height'];

\t\t// *** Find the width/height middle points
\t\t\$boxXMiddle = ((\$x2 - \$x1) / 2);
\t\t\$boxYMiddle = ((\$y2 - \$y1) / 2);

\t\t// *** Box middle - half the text width/height
\t\t\$xPos = (\$x1 + \$boxXMiddle) - (\$textWidth / 2);
\t\t\$yPos = (\$y1 + \$boxYMiddle) - (\$textHeight / 2);

\t\t\$pos = \$xPos . 'x' . \$yPos;

\t\t\$this->addText(\$text, \$pos, \$padding = 0, \$fontColor, \$fontSize, \$angle, \$font);

\t}

\t## --------------------------------------------------------

\tprivate function calculateCaptionBoxPosition(\$side, \$thickness, \$padding)
\t{
\t\t\$positionArray = array();

\t\tswitch (\$side)
\t\t{
\t\t\tcase 't':
\t\t\t\t\$positionArray['x1'] = 0;
\t\t\t\t\$positionArray['y1'] = \$padding;
\t\t\t\t\$positionArray['x2'] = \$this->width;
\t\t\t\t\$positionArray['y2'] = \$thickness + \$padding;
\t\t\t\tbreak;
\t\t\tcase 'r':
\t\t\t\t\$positionArray['x1'] = \$this->width - \$thickness - \$padding;
\t\t\t\t\$positionArray['y1'] = 0;
\t\t\t\t\$positionArray['x2'] = \$this->width - \$padding;
\t\t\t\t\$positionArray['y2'] = \$this->height;
\t\t\t\tbreak;
\t\t\tcase 'b':
\t\t\t\t\$positionArray['x1'] = 0;
\t\t\t\t\$positionArray['y1'] = \$this->height - \$thickness - \$padding;
\t\t\t\t\$positionArray['x2'] = \$this->width;
\t\t\t\t\$positionArray['y2'] = \$this->height - \$padding;
\t\t\t\tbreak;
\t\t\tcase 'l':
\t\t\t\t\$positionArray['x1'] = \$padding;
\t\t\t\t\$positionArray['y1'] = 0;
\t\t\t\t\$positionArray['x2'] = \$thickness + \$padding;
\t\t\t\t\$positionArray['y2'] = \$this->height;
\t\t\t\tbreak;

\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t\treturn \$positionArray;

\t}

\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Get EXIF Data
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function getExif(\$debug = false)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Get image EXIF data
\t\t# Param in:   n/a
\t\t# Param out:  An associate array of EXIF data
\t\t# Reference:
\t\t# Notes:
\t\t# 23 May 13 : added orientation flag -jco
\t\t#
\t{

\t\tif ( ! \$this->debug || ! \$debug)
\t\t{
\t\t\t\$debug = false;
\t\t}

\t\t// *** Check all is good - check the EXIF library exists and the file exists, too.
\t\tif ( ! \$this->testEXIFInstalled())
\t\t{
\t\t\tif (\$debug)
\t\t\t{
\t\t\t\tthrow new Exception('The EXIF Library is not installed.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn array();
\t\t\t}
\t\t};
\t\tif ( ! file_exists(\$this->fileName))
\t\t{
\t\t\tif (\$debug)
\t\t\t{
\t\t\t\tthrow new Exception('Image not found.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn array();
\t\t\t}
\t\t};
\t\tif (\$this->fileExtension != '.jpg')
\t\t{
\t\t\tif (\$debug)
\t\t\t{
\t\t\t\tthrow new Exception('Metadata not supported for this image type.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn array();
\t\t\t}
\t\t};
\t\t\$exifData = exif_read_data(\$this->fileName, 'IFD0');

\t\t// *** Format the apperture value
\t\t\$ev = \$exifData['ApertureValue'];
\t\t\$apPeicesArray = explode('/', \$ev);
\t\tif (count(\$apPeicesArray) == 2)
\t\t{
\t\t\t\$apertureValue = round(\$apPeicesArray[0] / \$apPeicesArray[1], 2, PHP_ROUND_HALF_DOWN) . ' EV';
\t\t}
\t\telse
\t\t{
\t\t\t\$apertureValue = '';
\t\t}

\t\t// *** Format the focal length
\t\t\$focalLength = \$exifData['FocalLength'];
\t\t\$flPeicesArray = explode('/', \$focalLength);
\t\tif (count(\$flPeicesArray) == 2)
\t\t{
\t\t\t\$focalLength = \$flPeicesArray[0] / \$flPeicesArray[1] . '.0 mm';
\t\t}
\t\telse
\t\t{
\t\t\t\$focalLength = '';
\t\t}

\t\t// *** Format fNumber
\t\t\$fNumber = \$exifData['FNumber'];
\t\t\$fnPeicesArray = explode('/', \$fNumber);
\t\tif (count(\$fnPeicesArray) == 2)
\t\t{
\t\t\t\$fNumber = \$fnPeicesArray[0] / \$fnPeicesArray[1];
\t\t}
\t\telse
\t\t{
\t\t\t\$fNumber = '';
\t\t}

\t\t// *** Resolve ExposureProgram
\t\tif (isset(\$exifData['ExposureProgram']))
\t\t{
\t\t\t\$ep = \$exifData['ExposureProgram'];
\t\t}
\t\tif (isset(\$ep))
\t\t{
\t\t\t\$ep = \$this->resolveExposureProgram(\$ep);
\t\t}


\t\t// *** Resolve MeteringMode
\t\t\$mm = \$exifData['MeteringMode'];
\t\t\$mm = \$this->resolveMeteringMode(\$mm);

\t\t// *** Resolve Flash
\t\t\$flash = \$exifData['Flash'];
\t\t\$flash = \$this->resolveFlash(\$flash);


\t\tif (isset(\$exifData['Make']))
\t\t{
\t\t\t\$exifDataArray['make'] = \$exifData['Make'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['make'] = '';
\t\t}

\t\tif (isset(\$exifData['Model']))
\t\t{
\t\t\t\$exifDataArray['model'] = \$exifData['Model'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['model'] = '';
\t\t}

\t\tif (isset(\$exifData['DateTime']))
\t\t{
\t\t\t\$exifDataArray['date'] = \$exifData['DateTime'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['date'] = '';
\t\t}

\t\tif (isset(\$exifData['ExposureTime']))
\t\t{
\t\t\t\$exifDataArray['exposure time'] = \$exifData['ExposureTime'] . ' sec.';
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['exposure time'] = '';
\t\t}

\t\tif (\$apertureValue != '')
\t\t{
\t\t\t\$exifDataArray['aperture value'] = \$apertureValue;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['aperture value'] = '';
\t\t}

\t\tif (isset(\$exifData['COMPUTED']['ApertureFNumber']))
\t\t{
\t\t\t\$exifDataArray['f-stop'] = \$exifData['COMPUTED']['ApertureFNumber'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['f-stop'] = '';
\t\t}

\t\tif (isset(\$exifData['FNumber']))
\t\t{
\t\t\t\$exifDataArray['fnumber'] = \$exifData['FNumber'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['fnumber'] = '';
\t\t}

\t\tif (\$fNumber != '')
\t\t{
\t\t\t\$exifDataArray['fnumber value'] = \$fNumber;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['fnumber value'] = '';
\t\t}

\t\tif (isset(\$exifData['ISOSpeedRatings']))
\t\t{
\t\t\t\$exifDataArray['iso'] = \$exifData['ISOSpeedRatings'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['iso'] = '';
\t\t}

\t\tif (\$focalLength != '')
\t\t{
\t\t\t\$exifDataArray['focal length'] = \$focalLength;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['focal length'] = '';
\t\t}

\t\tif (isset(\$ep))
\t\t{
\t\t\t\$exifDataArray['exposure program'] = \$ep;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['exposure program'] = '';
\t\t}

\t\tif (\$mm != '')
\t\t{
\t\t\t\$exifDataArray['metering mode'] = \$mm;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['metering mode'] = '';
\t\t}

\t\tif (\$flash != '')
\t\t{
\t\t\t\$exifDataArray['flash status'] = \$flash;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['flash status'] = '';
\t\t}

\t\tif (isset(\$exifData['Artist']))
\t\t{
\t\t\t\$exifDataArray['creator'] = \$exifData['Artist'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['creator'] = '';
\t\t}

\t\tif (isset(\$exifData['Copyright']))
\t\t{
\t\t\t\$exifDataArray['copyright'] = \$exifData['Copyright'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['copyright'] = '';
\t\t}

\t\t// *** Orientation
\t\tif (isset(\$exifData['Orientation']))
\t\t{
\t\t\t\$exifDataArray['orientation'] = \$exifData['Orientation'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['orientation'] = '';
\t\t}

\t\treturn \$exifDataArray;
\t}

\t## --------------------------------------------------------

\tprivate function resolveExposureProgram(\$ep)
\t{
\t\tswitch (\$ep)
\t\t{
\t\t\tcase 0:
\t\t\t\t\$ep = '';
\t\t\t\tbreak;
\t\t\tcase 1:
\t\t\t\t\$ep = 'manual';
\t\t\t\tbreak;
\t\t\tcase 2:
\t\t\t\t\$ep = 'normal program';
\t\t\t\tbreak;
\t\t\tcase 3:
\t\t\t\t\$ep = 'aperture priority';
\t\t\t\tbreak;
\t\t\tcase 4:
\t\t\t\t\$ep = 'shutter priority';
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\t\$ep = 'creative program';
\t\t\t\tbreak;
\t\t\tcase 6:
\t\t\t\t\$ep = 'action program';
\t\t\t\tbreak;
\t\t\tcase 7:
\t\t\t\t\$ep = 'portrait mode';
\t\t\t\tbreak;
\t\t\tcase 8:
\t\t\t\t\$ep = 'landscape mode';
\t\t\t\tbreak;

\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t\treturn \$ep;
\t}

\t## --------------------------------------------------------

\tprivate function resolveMeteringMode(\$mm)
\t{
\t\tswitch (\$mm)
\t\t{
\t\t\tcase 0:
\t\t\t\t\$mm = 'unknown';
\t\t\t\tbreak;
\t\t\tcase 1:
\t\t\t\t\$mm = 'average';
\t\t\t\tbreak;
\t\t\tcase 2:
\t\t\t\t\$mm = 'center weighted average';
\t\t\t\tbreak;
\t\t\tcase 3:
\t\t\t\t\$mm = 'spot';
\t\t\t\tbreak;
\t\t\tcase 4:
\t\t\t\t\$mm = 'multi spot';
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\t\$mm = 'pattern';
\t\t\t\tbreak;
\t\t\tcase 6:
\t\t\t\t\$mm = 'partial';
\t\t\t\tbreak;
\t\t\tcase 255:
\t\t\t\t\$mm = 'other';
\t\t\t\tbreak;

\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t\treturn \$mm;
\t}

\t## --------------------------------------------------------

\tprivate function resolveFlash(\$flash)
\t{
\t\tswitch (\$flash)
\t\t{
\t\t\tcase 0:
\t\t\t\t\$flash = 'flash did not fire';
\t\t\t\tbreak;
\t\t\tcase 1:
\t\t\t\t\$flash = 'flash fired';
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\t\$flash = 'strobe return light not detected';
\t\t\t\tbreak;
\t\t\tcase 7:
\t\t\t\t\$flash = 'strobe return light detected';
\t\t\t\tbreak;
\t\t\tcase 9:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode';
\t\t\t\tbreak;
\t\t\tcase 13:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, return light not detected';
\t\t\t\tbreak;
\t\t\tcase 15:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, return light detected';
\t\t\t\tbreak;
\t\t\tcase 16:
\t\t\t\t\$flash = 'flash did not fire, compulsory flash mode';
\t\t\t\tbreak;
\t\t\tcase 24:
\t\t\t\t\$flash = 'flash did not fire, auto mode';
\t\t\t\tbreak;
\t\t\tcase 25:
\t\t\t\t\$flash = 'flash fired, auto mode';
\t\t\t\tbreak;
\t\t\tcase 29:
\t\t\t\t\$flash = 'flash fired, auto mode, return light not detected';
\t\t\t\tbreak;
\t\t\tcase 31:
\t\t\t\t\$flash = 'flash fired, auto mode, return light detected';
\t\t\t\tbreak;
\t\t\tcase 32:
\t\t\t\t\$flash = 'no flash function';
\t\t\t\tbreak;
\t\t\tcase 65:
\t\t\t\t\$flash = 'flash fired, red-eye reduction mode';
\t\t\t\tbreak;
\t\t\tcase 69:
\t\t\t\t\$flash = 'flash fired, red-eye reduction mode, return light not detected';
\t\t\t\tbreak;
\t\t\tcase 71:
\t\t\t\t\$flash = 'flash fired, red-eye reduction mode, return light detected';
\t\t\t\tbreak;
\t\t\tcase 73:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, red-eye reduction mode';
\t\t\t\tbreak;
\t\t\tcase 77:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, red-eye reduction mode, return light not detected';
\t\t\t\tbreak;
\t\t\tcase 79:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, red-eye reduction mode, return light detected';
\t\t\t\tbreak;
\t\t\tcase 89:
\t\t\t\t\$flash = 'flash fired, auto mode, red-eye reduction mode';
\t\t\t\tbreak;
\t\t\tcase 93:
\t\t\t\t\$flash = 'flash fired, auto mode, return light not detected, red-eye reduction mode';
\t\t\t\tbreak;
\t\t\tcase 95:
\t\t\t\t\$flash = 'flash fired, auto mode, return light detected, red-eye reduction mode';
\t\t\t\tbreak;

\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t\treturn \$flash;

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Get IPTC Data
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Write IPTC Data
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function writeIPTCcaption(\$value)
\t\t# Caption
\t{
\t\t\$this->writeIPTC(120, \$value);
\t}

\t## --------------------------------------------------------

\tpublic function writeIPTCwriter(\$value)
\t{
\t\t//\$this->writeIPTC(65, \$value);
\t}

\t## --------------------------------------------------------

\tprivate function writeIPTC(\$dat, \$value)
\t{

\t\t# LIMIT TO JPG

\t\t\$caption_block = \$this->iptc_maketag(2, \$dat, \$value);
\t\t\$image_string = iptcembed(\$caption_block, \$this->fileName);
\t\tfile_put_contents('iptc.jpg', \$image_string);
\t}

## --------------------------------------------------------

\tprivate function iptc_maketag(\$rec, \$dat, \$val)
\t\t# Author:   Thies C. Arntzen
\t\t# Purpose:    Function to format the new IPTC text
\t\t# Param in:   \$rec: Application record. (We’re working with #2)
\t\t#       \$dat: Index. (120 for caption, 118 for contact. See the IPTC IIM
\t\t#         specification:
\t\t#         http://www.iptc.org/std/IIM/4.1/specification/IIMV4.1.pdf
\t\t#       \$val: Value/data/text. Make sure this is within the length
\t\t#         constraints of the IPTC IIM specification
\t\t# Ref:      http://blog.peterhaza.no/working-with-image-meta-data-in-exif-and-iptc-headers-from-php/
\t\t#       http://php.net/manual/en/function.iptcembed.php
\t\t#
\t{
\t\t\$len = strlen(\$val);
\t\tif (\$len < 0x8000)
\t\t{
\t\t\treturn chr(0x1c) . chr(\$rec) . chr(\$dat) .
\t\t\tchr(\$len >> 8) .
\t\t\tchr(\$len & 0xff) .
\t\t\t\$val;
\t\t}
\t\telse
\t\t{
\t\t\treturn chr(0x1c) . chr(\$rec) . chr(\$dat) .
\t\t\tchr(0x80) . chr(0x04) .
\t\t\tchr((\$len >> 24) & 0xff) .
\t\t\tchr((\$len >> 16) & 0xff) .
\t\t\tchr((\$len >> 8) & 0xff) .
\t\t\tchr((\$len) & 0xff) .
\t\t\t\$val;
\t\t}
\t}



\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Write XMP Data
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\t//http://xmpphptoolkit.sourceforge.net/


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Add Text
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addText(\$text, \$pos = '20x20', \$padding = 0, \$fontColor = '#fff', \$fontSize = 12, \$angle = 0, \$font = null)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       18-11-09
\t\t# Purpose:    Add text to an image
\t\t# Param in:
\t\t# Param out:
\t\t# Reference:  http://php.net/manual/en/function.imagettftext.php
\t\t# Notes:      Make sure you supply the font.
\t\t#
\t{

\t\t// *** Convert color
\t\t\$rgbArray = \$this->formatColor(\$fontColor);
\t\t\$r = \$rgbArray['r'];
\t\t\$g = \$rgbArray['g'];
\t\t\$b = \$rgbArray['b'];

\t\t// *** Get text font
\t\t\$font = \$this->getTextFont(\$font);

\t\t// *** Get text size
\t\t\$textSizeArray = \$this->getTextSize(\$fontSize, \$angle, \$font, \$text);
\t\t\$textWidth = \$textSizeArray['width'];
\t\t\$textHeight = \$textSizeArray['height'];

\t\t// *** Find co-ords to place text
\t\t\$posArray = \$this->calculatePosition(\$pos, \$padding, \$textWidth, \$textHeight, false);
\t\t\$x = \$posArray['width'];
\t\t\$y = \$posArray['height'];

\t\t\$fontColor = imagecolorallocate(\$this->imageResized, \$r, \$g, \$b);

\t\t// *** Add text
\t\timagettftext(\$this->imageResized, \$fontSize, \$angle, \$x, \$y, \$fontColor, \$font, \$text);
\t}

\t## --------------------------------------------------------

\tprivate function getTextFont(\$font)
\t{
\t\t// *** Font path (shou
\t\t\$fontPath = dirname(__FILE__) . '/' . \$this->fontDir;


\t\t// *** The below is/may be needed depending on your version (see ref)
\t\tputenv('GDFONTPATH=' . realpath('.'));

\t\t// *** Check if the passed in font exsits...
\t\tif (\$font == null || ! file_exists(\$font))
\t\t{

\t\t\t// *** ...If not, default to this font.
\t\t\t\$font = \$fontPath . '/arimo.ttf';

\t\t\t// *** Check our default font exists...
\t\t\tif ( ! file_exists(\$font))
\t\t\t{

\t\t\t\t// *** If not, return false
\t\t\t\tif (\$this->debug)
\t\t\t\t{
\t\t\t\t\tthrow new Exception('Font not found');
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn \$font;

\t}

\t## --------------------------------------------------------

\tprivate function getTextSize(\$fontSize, \$angle, \$font, \$text)
\t{

\t\t// *** Define box (so we can get the width)
\t\t\$box = @imageTTFBbox(\$fontSize, \$angle, \$font, \$text);

\t\t// ***  Get width of text from dimensions
\t\t\$textWidth = abs(\$box[4] - \$box[0]);

\t\t// ***  Get height of text from dimensions (should also be same as \$fontSize)
\t\t\$textHeight = abs(\$box[5] - \$box[1]);

\t\treturn array( 'height' => \$textHeight, 'width' => \$textWidth );
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Add Watermark
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addWatermark(\$watermarkImage, \$pos, \$padding = 0, \$opacity = 0)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       18-11-09
\t\t# Purpose:    Add watermark image
\t\t# Param in:   (str) \$watermark: The watermark image
\t\t#       (str) \$pos: Could be a pre-determined position such as:
\t\t#           tl = top left,
\t\t#           t  = top (middle),
\t\t#           tr = top right,
\t\t#           l  = left,
\t\t#           m  = middle,
\t\t#           r  = right,
\t\t#           bl = bottom left,
\t\t#           b  = bottom (middle),
\t\t#           br = bottom right
\t\t#         Or, it could be a co-ordinate position such as: 50x100
\t\t#
\t\t#       (int) \$padding: If using a pre-determined position you can
\t\t#         adjust the padding from the edges by passing an amount
\t\t#         in pixels. If using co-ordinates, this value is ignored.
\t\t# Param out:
\t\t# Reference:  http://www.php.net/manual/en/image.examples-watermark.php
\t\t# Notes:      Based on example in reference.
\t\t#
\t\t#
\t{

\t\t// Load the stamp and the photo to apply the watermark to
\t\t\$stamp = \$this->openImage(\$watermarkImage);    # stamp
\t\t\$im = \$this->imageResized;            # photo

\t\t// *** Get stamps width and height
\t\t\$sx = imagesx(\$stamp);
\t\t\$sy = imagesy(\$stamp);

\t\t// *** Find co-ords to place image
\t\t\$posArray = \$this->calculatePosition(\$pos, \$padding, \$sx, \$sy);
\t\t\$x = \$posArray['width'];
\t\t\$y = \$posArray['height'];

\t\t// *** Set watermark opacity
\t\tif (fix_strtolower(strrchr(\$watermarkImage, '.')) == '.png')
\t\t{

\t\t\t\$opacity = \$this->invertTransparency(\$opacity, 100);
\t\t\t\$this->filterOpacity(\$stamp, \$opacity);
\t\t}

\t\t// Copy the watermark image onto our photo
\t\timagecopy(\$im, \$stamp, \$x, \$y, 0, 0, imagesx(\$stamp), imagesy(\$stamp));

\t}

\t## --------------------------------------------------------

\tprivate function calculatePosition(\$pos, \$padding, \$assetWidth, \$assetHeight, \$upperLeft = true)
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   08-05-11
\t\t# Purpose:  Calculate the x, y pixel cordinates of the asset to place
\t\t# Params in:  (str) \$pos: Either something like: \"tl\", \"l\", \"br\" or an
\t\t#         exact position like: \"100x50\"
\t\t#       (int) \$padding: The amount of padding from the edge. Only
\t\t#         used for the predefined \$pos.
\t\t#       (int) \$assetWidth: The width of the asset to add to the image
\t\t#       (int) \$assetHeight: The height of the asset to add to the image
\t\t#       (bol) \$upperLeft: if true, the asset will be positioned based
\t\t#         on the upper left x, y coords. If false, it means you're
\t\t#         using the lower left as the basepoint and this will
\t\t#         convert it to the upper left position
\t\t# Params out:
\t\t# NOTE: this is done from the UPPER left corner!! But will convert lower
\t\t#   left basepoints to upper left if \$upperleft is set to false
\t\t#
\t\t#
\t{
\t\t\$pos = fix_strtolower(\$pos);

\t\t// *** If co-ords have been entered
\t\tif (strstr(\$pos, 'x'))
\t\t{
\t\t\t\$pos = str_replace(' ', '', \$pos);

\t\t\t\$xyArray = explode('x', \$pos);
\t\t\tlist(\$width, \$height) = \$xyArray;

\t\t}
\t\telse
\t\t{

\t\t\tswitch (\$pos)
\t\t\t{
\t\t\t\tcase 'tl':
\t\t\t\t\t\$width = 0 + \$padding;
\t\t\t\t\t\$height = 0 + \$padding;
\t\t\t\t\tbreak;

\t\t\t\tcase 't':
\t\t\t\t\t\$width = (\$this->width / 2) - (\$assetWidth / 2);
\t\t\t\t\t\$height = 0 + \$padding;
\t\t\t\t\tbreak;

\t\t\t\tcase 'tr':
\t\t\t\t\t\$width = \$this->width - \$assetWidth - \$padding;
\t\t\t\t\t\$height = 0 + \$padding;;
\t\t\t\t\tbreak;

\t\t\t\tcase 'l':
\t\t\t\t\t\$width = 0 + \$padding;
\t\t\t\t\t\$height = (\$this->height / 2) - (\$assetHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'm':
\t\t\t\t\t\$width = (\$this->width / 2) - (\$assetWidth / 2);
\t\t\t\t\t\$height = (\$this->height / 2) - (\$assetHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'r':
\t\t\t\t\t\$width = \$this->width - \$assetWidth - \$padding;
\t\t\t\t\t\$height = (\$this->height / 2) - (\$assetHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'bl':
\t\t\t\t\t\$width = 0 + \$padding;
\t\t\t\t\t\$height = \$this->height - \$assetHeight - \$padding;
\t\t\t\t\tbreak;

\t\t\t\tcase 'b':
\t\t\t\t\t\$width = (\$this->width / 2) - (\$assetWidth / 2);
\t\t\t\t\t\$height = \$this->height - \$assetHeight - \$padding;
\t\t\t\t\tbreak;

\t\t\t\tcase 'br':
\t\t\t\t\t\$width = \$this->width - \$assetWidth - \$padding;
\t\t\t\t\t\$height = \$this->height - \$assetHeight - \$padding;
\t\t\t\t\tbreak;

\t\t\t\tdefault:
\t\t\t\t\t\$width = 0;
\t\t\t\t\t\$height = 0;
\t\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\tif ( ! \$upperLeft)
\t\t{
\t\t\t\$height = \$height + \$assetHeight;
\t\t}

\t\treturn array( 'width' => \$width, 'height' => \$height );
\t}


\t## --------------------------------------------------------

\tprivate function filterOpacity(&\$img, \$opacity = 75)
\t\t#
\t\t# Author:     aiden dot mail at freemail dot hu
\t\t# Author date:  29-03-08 08:16
\t\t# Date added:   08-05-11
\t\t# Purpose:    Change opacity of image
\t\t# Params in:    \$img: Image resource id
\t\t#         (int) \$opacity: the opacity amount: 0-100, 100 being not opaque.
\t\t# Params out:   (bool) true on success, else false
\t\t# Ref:      http://www.php.net/manual/en/function.imagefilter.php#82162
\t\t# Notes:      png only
\t\t#
\t{

\t\tif ( ! isset(\$opacity))
\t\t{
\t\t\treturn false;
\t\t}

\t\tif (\$opacity == 100)
\t\t{
\t\t\treturn true;
\t\t}

\t\t\$opacity /= 100;

\t\t//get image width and height
\t\t\$w = imagesx(\$img);
\t\t\$h = imagesy(\$img);

\t\t//turn alpha blending off
\t\timagealphablending(\$img, false);

\t\t//find the most opaque pixel in the image (the one with the smallest alpha value)
\t\t\$minalpha = 127;
\t\tfor (\$x = 0; \$x < \$w; \$x++)
\t\t{
\t\t\tfor (\$y = 0; \$y < \$h; \$y++)
\t\t\t{
\t\t\t\t\$alpha = (imagecolorat(\$img, \$x, \$y) >> 24) & 0xFF;
\t\t\t\tif (\$alpha < \$minalpha)
\t\t\t\t{
\t\t\t\t\t\$minalpha = \$alpha;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t//loop through image pixels and modify alpha for each
\t\tfor (\$x = 0; \$x < \$w; \$x++)
\t\t{
\t\t\tfor (\$y = 0; \$y < \$h; \$y++)
\t\t\t{
\t\t\t\t//get current alpha value (represents the TANSPARENCY!)
\t\t\t\t\$colorxy = imagecolorat(\$img, \$x, \$y);
\t\t\t\t\$alpha = (\$colorxy >> 24) & 0xFF;
\t\t\t\t//calculate new alpha
\t\t\t\tif (\$minalpha !== 127)
\t\t\t\t{
\t\t\t\t\t\$alpha = 127 + 127 * \$opacity * (\$alpha - 127) / (127 - \$minalpha);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$alpha += 127 * \$opacity;
\t\t\t\t}
\t\t\t\t//get the color index with new alpha
\t\t\t\t\$alphacolorxy = imagecolorallocatealpha(\$img, (\$colorxy >> 16) & 0xFF, (\$colorxy >> 8) & 0xFF, \$colorxy & 0xFF, \$alpha);
\t\t\t\t//set pixel with the new color + opacity
\t\t\t\tif ( ! imagesetpixel(\$img, \$x, \$y, \$alphacolorxy))
\t\t\t\t{

\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn true;
\t}

## --------------------------------------------------------

\tprivate function openImage(\$file)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:
\t\t# Param in:
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\tif ( ! file_exists(\$file) && ! \$this->checkStringStartsWith('http://', \$file) && ! \$this->checkStringStartsWith('https://', \$file) )
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('Image not found.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t};

\t\t// *** Get extension
\t\t\$extension = strrchr(\$file, '.');
\t\t\$extension = fix_strtolower(\$extension);
\t\tswitch (\$extension)
\t\t{
\t\t\tcase '.jpg':
\t\t\tcase '.jpeg':
\t\t\t\t\$img = @imagecreatefromjpeg(\$file);
\t\t\t\tbreak;
\t\t\tcase '.gif':
\t\t\t\t\$img = @imagecreatefromgif(\$file);
\t\t\t\tbreak;
\t\t\tcase '.png':
\t\t\t\t\$img = @imagecreatefrompng(\$file);
\t\t\t\tbreak;
\t\t\tcase '.bmp':
\t\t\t\t\$img = @\$this->imagecreatefrombmp(\$file);
\t\t\t\tbreak;
\t\t\tcase '.psd':
\t\t\t\t\$img = @\$this->imagecreatefrompsd(\$file);
\t\t\t\tbreak;


\t\t\t// ... etc

\t\t\tdefault:
\t\t\t\t\$img = false;
\t\t\t\tbreak;
\t\t}

\t\treturn \$img;
\t}

## --------------------------------------------------------

\tpublic function reset()
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   30-08-11
\t\t# Purpose:  Reset the resource (allow further editing)
\t\t# Params in:
\t\t# Params out:
\t\t# Notes:
\t\t#
\t{
\t\t\$this->__construct(\$this->fileName);
\t}

## --------------------------------------------------------

\tpublic function saveImage(\$savePath, \$imageQuality = \"100\")
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Saves the image
\t\t# Param in:   \$savePath: Where to save the image including filename:
\t\t#             \$imageQuality: image quality you want the image saved at 0-100
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:    * gif doesn't have a quality parameter
\t\t#       * jpg has a quality setting 0-100 (100 being the best)
\t\t#       * png has a quality setting 0-9 (0 being the best)
\t\t#
\t\t#             * bmp files have no native support for bmp files. We use a
\t\t#       third party class to save as bmp.
\t{

\t\t// *** Perform a check or two.
\t\tif ( ! is_resource(\$this->imageResized))
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('saveImage: This is not a resource.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t}
\t\t\$fileInfoArray = pathInfo(\$savePath);
\t\tclearstatcache();
\t\tif ( ! is_writable(\$fileInfoArray['dirname']))
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('The path is not writable. Please check your permissions.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t}

\t\t// *** Get extension
\t\t\$extension = strrchr(\$savePath, '.');
\t\t\$extension = fix_strtolower(\$extension);

\t\t\$error = '';

\t\tswitch (\$extension)
\t\t{
\t\t\tcase '.jpg':
\t\t\tcase '.jpeg':
\t\t\t\t\$this->checkInterlaceImage(\$this->isInterlace);
\t\t\t\tif (imagetypes() & IMG_JPG)
\t\t\t\t{
\t\t\t\t\timagejpeg(\$this->imageResized, \$savePath, \$imageQuality);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$error = 'jpg';
\t\t\t\t}
\t\t\t\tbreak;

\t\t\tcase '.gif':
\t\t\t\t\$this->checkInterlaceImage(\$this->isInterlace);
\t\t\t\tif (imagetypes() & IMG_GIF)
\t\t\t\t{
\t\t\t\t\timagegif(\$this->imageResized, \$savePath);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$error = 'gif';
\t\t\t\t}
\t\t\t\tbreak;

\t\t\tcase '.png':
\t\t\t\t// *** Scale quality from 0-100 to 0-9
\t\t\t\t\$scaleQuality = round((\$imageQuality / 100) * 9);

\t\t\t\t// *** Invert qualit setting as 0 is best, not 9
\t\t\t\t\$invertScaleQuality = 9 - \$scaleQuality;

\t\t\t\t\$this->checkInterlaceImage(\$this->isInterlace);
\t\t\t\tif (imagetypes() & IMG_PNG)
\t\t\t\t{
\t\t\t\t\timagepng(\$this->imageResized, \$savePath, \$invertScaleQuality);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$error = 'png';
\t\t\t\t}
\t\t\t\tbreak;

\t\t\tcase '.bmp':
\t\t\t\tfile_put_contents(\$savePath, \$this->GD2BMPstring(\$this->imageResized));
\t\t\t\tbreak;


\t\t\t// ... etc

\t\t\tdefault:
\t\t\t\t// *** No extension - No save.
\t\t\t\t\$this->errorArray[] = 'This file type (' . \$extension . ') is not supported. File not saved.';
\t\t\t\tbreak;
\t\t}

\t\t//imagedestroy(\$this->imageResized);

\t\t// *** Display error if a file type is not supported.
\t\tif (\$error != '')
\t\t{
\t\t\t\$this->errorArray[] = \$error . ' support is NOT enabled. File not saved.';
\t\t}
\t}

## --------------------------------------------------------

\tpublic function displayImage(\$fileType = 'jpg', \$imageQuality = \"100\")
\t\t# Author:     Jarrod Oberto
\t\t# Date:       18-11-09
\t\t# Purpose:    Display images directly to the browser
\t\t# Param in:   The image type you want to display
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\tif ( ! is_resource(\$this->imageResized))
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('saveImage: This is not a resource.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t}

\t\tswitch (\$fileType)
\t\t{
\t\t\tcase 'jpg':
\t\t\tcase 'jpeg':
\t\t\t\theader('Content-type: image/jpeg');
\t\t\t\timagejpeg(\$this->imageResized, '', \$imageQuality);
\t\t\t\tbreak;
\t\t\tcase 'gif':
\t\t\t\theader('Content-type: image/gif');
\t\t\t\timagegif(\$this->imageResized);
\t\t\t\tbreak;
\t\t\tcase 'png':
\t\t\t\theader('Content-type: image/png');

\t\t\t\t// *** Scale quality from 0-100 to 0-9
\t\t\t\t\$scaleQuality = round((\$imageQuality / 100) * 9);

\t\t\t\t// *** Invert qualit setting as 0 is best, not 9
\t\t\t\t\$invertScaleQuality = 9 - \$scaleQuality;

\t\t\t\timagepng(\$this->imageResized, '', \$invertScaleQuality);
\t\t\t\tbreak;
\t\t\tcase 'bmp':
\t\t\t\techo 'bmp file format is not supported.';
\t\t\t\tbreak;

\t\t\t// ... etc

\t\t\tdefault:
\t\t\t\t// *** No extension - No save.
\t\t\t\tbreak;
\t\t}


\t\t//imagedestroy(\$this->imageResized);
\t}

## --------------------------------------------------------

\tpublic function setTransparency(\$bool)
\t\t# Sep 2011
\t{
\t\t\$this->keepTransparency = \$bool;
\t}

## --------------------------------------------------------

\tpublic function setFillColor(\$value)
\t\t# Sep 2011
\t\t# Param in:   (mixed) \$value: (array) Could be an array of RGB
\t\t#               (str) Could be hex #ffffff or #fff, fff, ffffff
\t\t#
\t\t# If the keepTransparency is set to false, then no transparency is to be used.
\t\t# This is ideal when you want to save as jpg.
\t\t#
\t\t# this method allows you to set the background color to use instead of
\t\t# transparency.
\t\t#
\t{
\t\t\$colorArray = \$this->formatColor(\$value);
\t\t\$this->fillColorArray = \$colorArray;
\t}

## --------------------------------------------------------

\tpublic function setCropFromTop(\$value)
\t\t# Sep 2011
\t{
\t\t\$this->cropFromTopPercent = \$value;
\t}

## --------------------------------------------------------

\tpublic function testGDInstalled()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Test to see if GD is installed
\t\t# Param in:   n/a
\t\t# Param out:  (bool) True is gd extension loaded otherwise false
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (extension_loaded('gd') && function_exists('gd_info'))
\t\t{
\t\t\t\$gdInstalled = true;
\t\t}
\t\telse
\t\t{
\t\t\t\$gdInstalled = false;
\t\t}

\t\treturn \$gdInstalled;
\t}

## --------------------------------------------------------

\tpublic function testEXIFInstalled()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       08-05-11
\t\t# Purpose:    Test to see if EXIF is installed
\t\t# Param in:   n/a
\t\t# Param out:  (bool) True is exif extension loaded otherwise false
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (extension_loaded('exif'))
\t\t{
\t\t\t\$exifInstalled = true;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifInstalled = false;
\t\t}

\t\treturn \$exifInstalled;
\t}

## --------------------------------------------------------

\tpublic function testIsImage(\$image)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Test if file is an image
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$image)
\t\t{
\t\t\t\$fileIsImage = true;
\t\t}
\t\telse
\t\t{
\t\t\t\$fileIsImage = false;
\t\t}

\t\treturn \$fileIsImage;
\t}

## --------------------------------------------------------

\tpublic function testFunct()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Test Function
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\techo \$this->height;
\t}

## --------------------------------------------------------

\tpublic function setForceStretch(\$value)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       23-12-10
\t\t# Purpose:
\t\t# Param in:   (bool) \$value
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t\$this->forceStretch = \$value;
\t}

## --------------------------------------------------------

\tpublic function setFile(\$fileName)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       28-02-08
\t\t# Purpose:
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tself::__construct(\$fileName);
\t}

## --------------------------------------------------------

\tpublic function getFileName()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       10-09-08
\t\t# Purpose:
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\treturn \$this->fileName;
\t}

## --------------------------------------------------------

\tpublic function getHeight()
\t{
\t\treturn \$this->height;
\t}

## --------------------------------------------------------

\tpublic function getWidth()
\t{
\t\treturn \$this->width;
\t}

## --------------------------------------------------------

\tpublic function getOriginalHeight()
\t{
\t\treturn \$this->heightOriginal;
\t}

## --------------------------------------------------------

\tpublic function getOriginalWidth()
\t{
\t\treturn \$this->widthOriginal;
\t}

## --------------------------------------------------------

\tpublic function getErrors()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       19-11-09
\t\t# Purpose:    Returns the error array
\t\t# Param in:   n/a
\t\t# Param out:  Array of errors
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\treturn \$this->errorArray;
\t}

## --------------------------------------------------------

\tprivate function checkInterlaceImage(\$isEnabled)
\t\t# jpg will use progressive (they don't use interace)
\t{
\t\tif (\$isEnabled)
\t\t{
\t\t\timageinterlace(\$this->imageResized, \$isEnabled);
\t\t}
\t}

## --------------------------------------------------------

\tprotected function formatColor(\$value)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       09-05-11
\t\t# Purpose:    Determine color method passed in and return color as RGB
\t\t# Param in:   (mixed) \$value: (array) Could be an array of RGB
\t\t#               (str) Could be hex #ffffff or #fff, fff, ffffff
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t\$rgbArray = array();

\t\t// *** If it's an array it should be R, G, B
\t\tif (is_array(\$value))
\t\t{

\t\t\tif (key(\$value) == 0 && count(\$value) == 3)
\t\t\t{

\t\t\t\t\$rgbArray['r'] = \$value[0];
\t\t\t\t\$rgbArray['g'] = \$value[1];
\t\t\t\t\$rgbArray['b'] = \$value[2];

\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$rgbArray = \$value;
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tif (fix_strtolower(\$value) == 'transparent')
\t\t\t{

\t\t\t\t\$rgbArray = array(
\t\t\t\t\t'r' => 255,
\t\t\t\t\t'g' => 255,
\t\t\t\t\t'b' => 255,
\t\t\t\t\t'a' => 127
\t\t\t\t);

\t\t\t}
\t\t\telse
\t\t\t{

\t\t\t\t// *** ...Else it should be hex. Let's make it RGB
\t\t\t\t\$rgbArray = \$this->hex2dec(\$value);
\t\t\t}
\t\t}

\t\treturn \$rgbArray;
\t}

\t## --------------------------------------------------------

\tfunction hex2dec(\$hex)
\t\t# Purpose:  Convert #hex color to RGB
\t{
\t\t\$color = str_replace('#', '', \$hex);

\t\tif (strlen(\$color) == 3)
\t\t{
\t\t\t\$color = \$color . \$color;
\t\t}

\t\t\$rgb = array(
\t\t\t'r' => hexdec(substr(\$color, 0, 2)),
\t\t\t'g' => hexdec(substr(\$color, 2, 2)),
\t\t\t'b' => hexdec(substr(\$color, 4, 2)),
\t\t\t'a' => 0
\t\t);

\t\treturn \$rgb;
\t}

\t## --------------------------------------------------------

\tprivate function createImageColor(\$colorArray)
\t{
\t\t\$r = \$colorArray['r'];
\t\t\$g = \$colorArray['g'];
\t\t\$b = \$colorArray['b'];

\t\treturn imagecolorallocate(\$this->imageResized, \$r, \$g, \$b);
\t}

\t## --------------------------------------------------------

\tprivate function testColorExists(\$colorArray)
\t{
\t\t\$r = \$colorArray['r'];
\t\t\$g = \$colorArray['g'];
\t\t\$b = \$colorArray['b'];

\t\tif (imagecolorexact(\$this->imageResized, \$r, \$g, \$b) == -1)
\t\t{
\t\t\treturn false;
\t\t}
\t\telse
\t\t{
\t\t\treturn true;
\t\t}
\t}

\t## --------------------------------------------------------

\tprivate function findUnusedGreen()
\t\t# Purpose:  We find a green color suitable to use like green-screen effect.
\t\t#     Therefore, the color must not exist in the image.
\t{
\t\t\$green = 255;

\t\tdo
\t\t{

\t\t\t\$greenChroma = array( 0, \$green, 0 );
\t\t\t\$colorArray = \$this->formatColor(\$greenChroma);
\t\t\t\$match = \$this->testColorExists(\$colorArray);
\t\t\t\$green--;

\t\t} while (\$match == false && \$green > 0);

\t\t// *** If no match, just bite the bullet and use green value of 255
\t\tif ( ! \$match)
\t\t{
\t\t\t\$greenChroma = array( 0, \$green, 0 );
\t\t}

\t\treturn \$greenChroma;
\t}

\t## --------------------------------------------------------

\tprivate function findUnusedBlue()
\t\t# Purpose:  We find a green color suitable to use like green-screen effect.
\t\t#     Therefore, the color must not exist in the image.
\t{
\t\t\$blue = 255;

\t\tdo
\t\t{

\t\t\t\$blueChroma = array( 0, 0, \$blue );
\t\t\t\$colorArray = \$this->formatColor(\$blueChroma);
\t\t\t\$match = \$this->testColorExists(\$colorArray);
\t\t\t\$blue--;

\t\t} while (\$match == false && \$blue > 0);

\t\t// *** If no match, just bite the bullet and use blue value of 255
\t\tif ( ! \$match)
\t\t{
\t\t\t\$blueChroma = array( 0, 0, \$blue );
\t\t}

\t\treturn \$blueChroma;
\t}

\t## --------------------------------------------------------

\tprivate function invertTransparency(\$value, \$originalMax, \$invert = true)
\t\t# Purpose:  This does two things:
\t\t#       1) Convert the range from 0-127 to 0-100
\t\t#       2) Inverts value to 100 is not transparent while 0 is fully
\t\t#          transparent (like Photoshop)
\t{
\t\t// *** Test max range
\t\tif (\$value > \$originalMax)
\t\t{
\t\t\t\$value = \$originalMax;
\t\t}

\t\t// *** Test min range
\t\tif (\$value < 0)
\t\t{
\t\t\t\$value = 0;
\t\t}

\t\tif (\$invert)
\t\t{
\t\t\treturn \$originalMax - ((\$value / 100) * \$originalMax);
\t\t}
\t\telse
\t\t{
\t\t\treturn (\$value / 100) * \$originalMax;
\t\t}
\t}

\t## --------------------------------------------------------

\tprivate function transparentImage(\$src)
\t{
\t\t// *** making images with white bg transparent
\t\t\$r1 = 0;
\t\t\$g1 = 255;
\t\t\$b1 = 0;
\t\tfor (\$x = 0; \$x < imagesx(\$src); ++\$x)
\t\t{
\t\t\tfor (\$y = 0; \$y < imagesy(\$src); ++\$y)
\t\t\t{
\t\t\t\t\$color = imagecolorat(\$src, \$x, \$y);
\t\t\t\t\$r = (\$color >> 16) & 0xFF;
\t\t\t\t\$g = (\$color >> 8) & 0xFF;
\t\t\t\t\$b = \$color & 0xFF;
\t\t\t\tfor (\$i = 0; \$i < 270; \$i++)
\t\t\t\t{
\t\t\t\t\t//if (\$r . \$g . \$b == (\$r1 + \$i) . (\$g1 + \$i) . (\$b1 + \$i)) {
\t\t\t\t\tif (\$r == 0 && \$g == 255 && \$b == 0)
\t\t\t\t\t{
\t\t\t\t\t\t//if (\$g == 255) {
\t\t\t\t\t\t\$trans_colour = imagecolorallocatealpha(\$src, 0, 0, 0, 127);
\t\t\t\t\t\timagefill(\$src, \$x, \$y, \$trans_colour);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn \$src;
\t}

\t## --------------------------------------------------------

\tfunction checkStringStartsWith(\$needle, \$haystack)
\t\t# Check if a string starts with a specific pattern
\t{
\t\treturn (substr(\$haystack, 0, strlen(\$needle)) == \$needle);
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  BMP SUPPORT (SAVING) - James Heinrich
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tprivate function GD2BMPstring(&\$gd_image)
\t\t# Author:     James Heinrich
\t\t# Purpose:    Save file as type bmp
\t\t# Param in:   The image canvas (passed as ref)
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:    This code was stripped out of two external files
\t\t#       (phpthumb.bmp.php,phpthumb.functions.php) and added below to
\t\t#       avoid dependancies.
\t\t#
\t{
\t\t\$imageX = ImageSX(\$gd_image);
\t\t\$imageY = ImageSY(\$gd_image);

\t\t\$BMP = '';
\t\tfor (\$y = (\$imageY - 1); \$y >= 0; \$y--)
\t\t{
\t\t\t\$thisline = '';
\t\t\tfor (\$x = 0; \$x < \$imageX; \$x++)
\t\t\t{
\t\t\t\t\$argb = \$this->GetPixelColor(\$gd_image, \$x, \$y);
\t\t\t\t\$thisline .= chr(\$argb['blue']) . chr(\$argb['green']) . chr(\$argb['red']);
\t\t\t}
\t\t\twhile (strlen(\$thisline) % 4)
\t\t\t{
\t\t\t\t\$thisline .= \"\\x00\";
\t\t\t}
\t\t\t\$BMP .= \$thisline;
\t\t}

\t\t\$bmpSize = strlen(\$BMP) + 14 + 40;
\t\t// BITMAPFILEHEADER [14 bytes] - http://msdn.microsoft.com/library/en-us/gdi/bitmaps_62uq.asp
\t\t\$BITMAPFILEHEADER = 'BM';                                    // WORD    bfType;
\t\t\$BITMAPFILEHEADER .= \$this->LittleEndian2String(\$bmpSize, 4); // DWORD   bfSize;
\t\t\$BITMAPFILEHEADER .= \$this->LittleEndian2String(0, 2); // WORD    bfReserved1;
\t\t\$BITMAPFILEHEADER .= \$this->LittleEndian2String(0, 2); // WORD    bfReserved2;
\t\t\$BITMAPFILEHEADER .= \$this->LittleEndian2String(54, 4); // DWORD   bfOffBits;

\t\t// BITMAPINFOHEADER - [40 bytes] http://msdn.microsoft.com/library/en-us/gdi/bitmaps_1rw2.asp
\t\t\$BITMAPINFOHEADER = \$this->LittleEndian2String(40, 4); // DWORD  biSize;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(\$imageX, 4); // LONG   biWidth;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(\$imageY, 4); // LONG   biHeight;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(1, 2); // WORD   biPlanes;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(24, 2); // WORD   biBitCount;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(0, 4); // DWORD  biCompression;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(0, 4); // DWORD  biSizeImage;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(2835, 4); // LONG   biXPelsPerMeter;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(2835, 4); // LONG   biYPelsPerMeter;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(0, 4); // DWORD  biClrUsed;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(0, 4); // DWORD  biClrImportant;

\t\treturn \$BITMAPFILEHEADER . \$BITMAPINFOHEADER . \$BMP;
\t}

## --------------------------------------------------------

\tprivate function GetPixelColor(&\$img, \$x, \$y)
\t\t# Author:     James Heinrich
\t\t# Purpose:
\t\t# Param in:
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif ( ! is_resource(\$img))
\t\t{
\t\t\treturn false;
\t\t}

\t\treturn @ImageColorsForIndex(\$img, @ImageColorAt(\$img, \$x, \$y));
\t}

## --------------------------------------------------------

\tprivate function LittleEndian2String(\$number, \$minbytes = 1)
\t\t# Author:     James Heinrich
\t\t# Purpose:    BMP SUPPORT (SAVING)
\t\t# Param in:
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t\$intstring = '';
\t\twhile (\$number > 0)
\t\t{
\t\t\t\$intstring = \$intstring . chr(\$number & 255);
\t\t\t\$number >>= 8;
\t\t}

\t\treturn str_pad(\$intstring, \$minbytes, \"\\x00\", STR_PAD_RIGHT);
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  BMP SUPPORT (READING)
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tprivate function ImageCreateFromBMP(\$filename)
\t\t# Author:     DHKold
\t\t# Date:     The 15th of June 2005
\t\t# Version:    2.0B
\t\t# Purpose:    To create an image from a BMP file.
\t\t# Param in:   BMP file to open.
\t\t# Param out:  Return a resource like the other ImageCreateFrom functions
\t\t# Reference:  http://us3.php.net/manual/en/function.imagecreate.php#53879
\t\t# Bug fix:    Author:   domelca at terra dot es
\t\t#       Date:   06 March 2008
\t\t#       Fix:    Correct 16bit BMP support
\t\t# Notes:
\t\t#
\t{

\t\t//Ouverture du fichier en mode binaire
\t\tif ( ! \$f1 = fopen(\$filename, \"rb\"))
\t\t{
\t\t\treturn false;
\t\t}

\t\t//1 : Chargement des ent�tes FICHIER
\t\t\$FILE = unpack(\"vfile_type/Vfile_size/Vreserved/Vbitmap_offset\", fread(\$f1, 14));
\t\tif (\$FILE['file_type'] != 19778)
\t\t{
\t\t\treturn false;
\t\t}

\t\t//2 : Chargement des ent�tes BMP
\t\t\$BMP = unpack('Vheader_size/Vwidth/Vheight/vplanes/vbits_per_pixel' .
\t\t\t'/Vcompression/Vsize_bitmap/Vhoriz_resolution' .
\t\t\t'/Vvert_resolution/Vcolors_used/Vcolors_important', fread(\$f1, 40));
\t\t\$BMP['colors'] = pow(2, \$BMP['bits_per_pixel']);

\t\tif (\$BMP['size_bitmap'] == 0)
\t\t{
\t\t\t\$BMP['size_bitmap'] = \$FILE['file_size'] - \$FILE['bitmap_offset'];
\t\t}

\t\t\$BMP['bytes_per_pixel'] = \$BMP['bits_per_pixel'] / 8;
\t\t\$BMP['bytes_per_pixel2'] = ceil(\$BMP['bytes_per_pixel']);
\t\t\$BMP['decal'] = (\$BMP['width'] * \$BMP['bytes_per_pixel'] / 4);
\t\t\$BMP['decal'] -= floor(\$BMP['width'] * \$BMP['bytes_per_pixel'] / 4);
\t\t\$BMP['decal'] = 4 - (4 * \$BMP['decal']);

\t\tif (\$BMP['decal'] == 4)
\t\t{
\t\t\t\$BMP['decal'] = 0;
\t\t}

\t\t//3 : Chargement des couleurs de la palette
\t\t\$PALETTE = array();
\t\tif (\$BMP['colors'] < 16777216)
\t\t{
\t\t\t\$PALETTE = unpack('V' . \$BMP['colors'], fread(\$f1, \$BMP['colors'] * 4));
\t\t}

\t\t//4 : Cr�ation de l'image
\t\t\$IMG = fread(\$f1, \$BMP['size_bitmap']);
\t\t\$VIDE = chr(0);

\t\t\$res = imagecreatetruecolor(\$BMP['width'], \$BMP['height']);
\t\t\$P = 0;
\t\t\$Y = \$BMP['height'] - 1;
\t\twhile (\$Y >= 0)
\t\t{
\t\t\t\$X = 0;
\t\t\twhile (\$X < \$BMP['width'])
\t\t\t{
\t\t\t\tif (\$BMP['bits_per_pixel'] == 24)
\t\t\t\t{
\t\t\t\t\t\$COLOR = unpack(\"V\", substr(\$IMG, \$P, 3) . \$VIDE);
\t\t\t\t}
\t\t\t\telseif (\$BMP['bits_per_pixel'] == 16)
\t\t\t\t{

\t\t\t\t\t/*
           * BMP 16bit fix
           * =================
           *
           * Ref: http://us3.php.net/manual/en/function.imagecreate.php#81604
           *
           * Notes:
           * \"don't work with bmp 16 bits_per_pixel. change pixel
           * generator for this.\"
           *
           */

\t\t\t\t\t// *** Original code (don't work)
\t\t\t\t\t//\$COLOR = unpack(\"n\",substr(\$IMG,\$P,2));
\t\t\t\t\t//\$COLOR[1] = \$PALETTE[\$COLOR[1]+1];

\t\t\t\t\t\$COLOR = unpack(\"v\", substr(\$IMG, \$P, 2));
\t\t\t\t\t\$blue = (\$COLOR[1] & 0x001f) << 3;
\t\t\t\t\t\$green = (\$COLOR[1] & 0x07e0) >> 3;
\t\t\t\t\t\$red = (\$COLOR[1] & 0xf800) >> 8;
\t\t\t\t\t\$COLOR[1] = \$red * 65536 + \$green * 256 + \$blue;

\t\t\t\t}
\t\t\t\telseif (\$BMP['bits_per_pixel'] == 8)
\t\t\t\t{
\t\t\t\t\t\$COLOR = unpack(\"n\", \$VIDE . substr(\$IMG, \$P, 1));
\t\t\t\t\t\$COLOR[1] = \$PALETTE[ \$COLOR[1] + 1 ];
\t\t\t\t}
\t\t\t\telseif (\$BMP['bits_per_pixel'] == 4)
\t\t\t\t{
\t\t\t\t\t\$COLOR = unpack(\"n\", \$VIDE . substr(\$IMG, floor(\$P), 1));
\t\t\t\t\tif ((\$P * 2) % 2 == 0)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] >> 4);
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x0F);
\t\t\t\t\t}
\t\t\t\t\t\$COLOR[1] = \$PALETTE[ \$COLOR[1] + 1 ];
\t\t\t\t}
\t\t\t\telseif (\$BMP['bits_per_pixel'] == 1)
\t\t\t\t{
\t\t\t\t\t\$COLOR = unpack(\"n\", \$VIDE . substr(\$IMG, floor(\$P), 1));
\t\t\t\t\tif ((\$P * 8) % 8 == 0)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = \$COLOR[1] >> 7;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 1)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x40) >> 6;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 2)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x20) >> 5;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 3)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x10) >> 4;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 4)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x8) >> 3;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 5)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x4) >> 2;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 6)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x2) >> 1;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 7)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x1);
\t\t\t\t\t}
\t\t\t\t\t\$COLOR[1] = \$PALETTE[ \$COLOR[1] + 1 ];
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\timagesetpixel(\$res, \$X, \$Y, \$COLOR[1]);
\t\t\t\t\$X++;
\t\t\t\t\$P += \$BMP['bytes_per_pixel'];
\t\t\t}

\t\t\t\$Y--;
\t\t\t\$P += \$BMP['decal'];
\t\t}
\t\t//Fermeture du fichier
\t\tfclose(\$f1);

\t\treturn \$res;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  PSD SUPPORT (READING)
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tprivate function imagecreatefrompsd(\$fileName)
\t\t# Author:     Tim de Koning
\t\t# Version:    1.3
\t\t# Purpose:    To create an image from a PSD file.
\t\t# Param in:   PSD file to open.
\t\t# Param out:  Return a resource like the other ImageCreateFrom functions
\t\t# Reference:  http://www.kingsquare.nl/phppsdreader
\t\t# Notes:
\t\t#
\t{
\t\tif (file_exists(\$this->psdReaderPath))
\t\t{


\t\t\tinclude_once(\$this->psdReaderPath);

\t\t\t\$psdReader = new PhpPsdReader(\$fileName);

\t\t\tif (isset(\$psdReader->infoArray['error']))
\t\t\t{
\t\t\t\treturn '';
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn \$psdReader->getImage();
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\treturn false;
\t\t}
\t}

## --------------------------------------------------------

\tpublic function __destruct()
\t{
\t\tif (is_resource(\$this->imageResized))
\t\t{
\t\t\timagedestroy(\$this->imageResized);
\t\t}
\t}

## --------------------------------------------------------

}


/*
 *    Example with some API calls (outdated):
 *
 *
 *      ===============================
 *      Compulsary
 *      ===============================
 *
 *      include(\"classes/resize_class.php\");
 *
 *      // *** Initialise object
 *      \$magicianObj = new resize('images/cars/large/a.jpg');
 *
 *      // *** Turn off stretching (optional)
 *      \$magicianObj -> setForceStretch(false);
 *
 *      // *** Resize object
 *      \$magicianObj -> resizeImage(150, 100, 0);
 *
 *      ===============================
 *      Image options - can run none, one, or all.
 *      ===============================
 *
 *      //  *** Add watermark
 *        \$magicianObj -> addWatermark('stamp.png');
 *
 *          // *** Add text
 *      \$magicianObj -> addText('testing...');
 *
 *      ===============================
 *      Output options - can run one, or the other, or both.
 *      ===============================
 *
 *      // *** Save image to disk
 *      \$magicianObj -> saveImage('images/cars/large/b.jpg', 100);
 *
 *          // *** Or output to screen (params in can be jpg, gif, png)
 *      \$magicianObj -> displayImage('png');
 *
 *      ===============================
 *      Return options - return errors. nice for debuggin.
 *      ===============================
 *
 *      // *** Return error array
 *      \$errorArray = \$magicianObj -> getErrors();
 *
 *
 *      ===============================
 *      Cleanup options - not really neccessary, but good practice
 *      ===============================
 *
 *      // *** Free used memory
 *      \$magicianObj -> __destruct();
 */
";
        
        $__internal_59e0d510b2cfcccd6feccf908e832429ca13002e0ba25136cae9292af63b9fd4->leave($__internal_59e0d510b2cfcccd6feccf908e832429ca13002e0ba25136cae9292af63b9fd4_prof);

    }

    public function getTemplateName()
    {
        return "@MwebAdmin/filemanager/include/php_image_magician.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
# ========================================================================#
#
#  This work is licensed under the Creative Commons Attribution 3.0 Unported
#  License. To view a copy of this license,
#  visit http://creativecommons.org/licenses/by/3.0/ or send a letter to
#  Creative Commons, 444 Castro Street, Suite 900, Mountain View, California,
#  94041, USA.
#
#  All rights reserved.
#
#  Author:    Jarrod Oberto
#  Version:   1.5.1
#  Date:      10-05-11
#  Purpose:   Provide tools for image manipulation using GD
#  Param In:  See functions.
#  Param Out: Produces a resized image
#  Requires : Requires PHP GD library.
#  Usage Example:
#                     include(\"lib/php_image_magician.php\");
#                     \$magicianObj = new resize('images/car.jpg');
#                     \$magicianObj -> resizeImage(150, 100, 0);
#                     \$magicianObj -> saveImage('images/car_small.jpg', 100);
#
#        - See end of doc for more examples -
#
#  Supported file types include: jpg, png, gif, bmp, psd (read)
#
#
#
#  The following functions are taken from phpThumb() [available from
#    http://phpthumb.sourceforge.net], and are used with written permission
#  from James Heinrich.
#    - GD2BMPstring
#      - GetPixelColor
#      - LittleEndian2String
#
#  The following functions are from Marc Hibbins and are used with written
#  permission (are also under the Attribution-ShareAlike
#  [http://creativecommons.org/licenses/by-sa/3.0/] license.
#    -
#
#  PhpPsdReader is used with written permission from Tim de Koning.
#  [http://www.kingsquare.nl/phppsdreader]
#
#
#
#  Modificatoin history
#  Date      Initials  Ver Description
#  10-05-11  J.C.O   0.0 Initial build
#  01-06-11  J.C.O   0.1.1   * Added reflections
#              * Added Rounded corners
#              * You can now use PNG interlacing
#              * Added shadow
#              * Added caption box
#              * Added vintage filter
#              * Added dynamic image resizing (resize on the fly)
#              * minor bug fixes
#  05-06-11  J.C.O   0.1.1.1 * Fixed undefined variables
#  17-06-11  J.C.O   0.1.2   * Added image_batch_class.php class
#              * Minor bug fixes
#  26-07-11  J.C.O   0.1.4 * Added support for external images
#              * Can now set the crop poisition
#  03-08-11  J.C.O   0.1.5 * Added reset() method to reset resource to
#                original input file.
#              * Added method addTextToCaptionBox() to
#                simplify adding text to a caption box.
#              * Added experimental writeIPTC. (not finished)
#              * Added experimental readIPTC. (not finished)
#  11-08-11  J.C.O     * Added initial border presets.
#  30-08-11  J.C.O     * Added 'auto' crop option to crop portrait
#                images near the top.
#  08-09-11  J.C.O     * Added cropImage() method to allow standalone
#                cropping.
#  17-09-11  J.C.O     * Added setCropFromTop() set method - set the
#                percentage to crop from the top when using
#                crop 'auto' option.
#              * Added setTransparency() set method - allows you
#                to turn transparency off (like when saving
#                as a jpg).
#              * Added setFillColor() set method - set the
#                background color to use instead of transparency.
#  05-11-11  J.C.O   0.1.5.1 * Fixed interlacing option
#  0-07-12  J.C.O   1.0
#
#  Known issues & Limitations:
# -------------------------------
#  Not so much an issue, the image is destroyed on the deconstruct rather than
#  when we have finished with it. The reason for this is that we don't know
#  when we're finished with it as you can both save the image and display
#  it directly to the screen (imagedestroy(\$this->imageResized))
#
#  Opening BMP files is slow. A test with 884 bmp files processed in a loop
#  takes forever - over 5 min. This test inlcuded opening the file, then
#  getting and displaying its width and height.
#
#  \$forceStretch:
# -------------------------------
#  On by default.
#  \$forceStretch can be disabled by calling method setForceStretch with false
#  parameter. If disabled, if an images original size is smaller than the size
#  specified by the user, the original size will be used. This is useful when
#  dealing with small images.
#
#  If enabled, images smaller than the size specified will be stretched to
#  that size.
#
#  Tips:
# -------------------------------
#  * If you're resizing a transparent png and saving it as a jpg, set
#  \$keepTransparency to false with: \$magicianObj->setTransparency(false);
#
#  FEATURES:
#    * EASY TO USE
#    * BMP SUPPORT (read & write)
#    * PSD (photoshop) support (read)
#    * RESIZE IMAGES
#      - Preserve transparency (png, gif)
#      - Apply sharpening (jpg) (requires PHP >= 5.1.0)
#      - Set image quality (jpg, png)
#      - Resize modes:
#        - exact size
#        - resize by width (auto height)
#        - resize by height (auto width)
#        - auto (automatically determine the best of the above modes to use)
#        - crop - resize as best as it can then crop the rest
#      - Force stretching of smaller images (upscale)
#    * APPLY FILTERS
#      - Convert to grey scale
#      - Convert to black and white
#      - Convert to sepia
#      - Convert to negative
#    * ROTATE IMAGES
#      - Rotate using predefined \"left\", \"right\", or \"180\"; or any custom degree amount
#    * EXTRACT EXIF DATA (requires exif module)
#      - make
#      - model
#      - date
#      - exposure
#      - aperture
#      - f-stop
#      - iso
#      - focal length
#      - exposure program
#      - metering mode
#      - flash status
#      - creator
#      - copyright
#    * ADD WATERMARK
#      - Specify exact x, y placement
#      - Or, specify using one of the 9 pre-defined placements such as \"tl\"
#        (for top left), \"m\" (for middle), \"br\" (for bottom right)
#        - also specify padding from edge amount (optional).
#      - Set opacity of watermark (png).
#    * ADD BORDER
#    * USE HEX WHEN SPECIFYING COLORS (eg: #ffffff)
#    * SAVE IMAGE OR OUTPUT TO SCREEN
#
#
# ========================================================================#


class imageLib {

\tprivate   \$fileName;
\tprivate   \$image;
\tprotected \$imageResized;
\tprivate   \$widthOriginal;     # Always be the original width
\tprivate   \$heightOriginal;
\tprivate   \$width;         # Current width (width after resize)
\tprivate   \$height;
\tprivate   \$imageSize;
\tprivate   \$fileExtension;

\tprivate \$debug      = true;
\tprivate \$errorArray = array();

\tprivate \$forceStretch        = true;
\tprivate \$aggresiveSharpening = false;

\tprivate \$transparentArray = array( '.png', '.gif' );
\tprivate \$keepTransparency = true;
\tprivate \$fillColorArray   = array( 'r' => 255, 'g' => 255, 'b' => 255 );

\tprivate \$sharpenArray = array( 'jpg' );

\tprivate \$psdReaderPath;
\tprivate \$filterOverlayPath;

\tprivate \$isInterlace;

\tprivate \$captionBoxPositionArray = array();

\tprivate \$fontDir = 'fonts';

\tprivate \$cropFromTopPercent = 10;


## --------------------------------------------------------

\tfunction __construct(\$fileName)
\t\t# Author:     Jarrod Oberto
\t\t# Date:     27-02-08
\t\t# Purpose:    Constructor
\t\t# Param in:   \$fileName: File name and path.
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif ( ! \$this->testGDInstalled())
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('The GD Library is not installed.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t};

\t\t\$this->initialise();

\t\t// *** Save the image file name. Only store this incase you want to display it
\t\t\$this->fileName = \$fileName;
\t\t\$this->fileExtension = fix_strtolower(strrchr(\$fileName, '.'));

\t\t// *** Open up the file
\t\t\$this->image = \$this->openImage(\$fileName);


\t\t// *** Assign here so we don't modify the original
\t\t\$this->imageResized = \$this->image;

\t\t// *** If file is an image
\t\tif (\$this->testIsImage(\$this->image))
\t\t{
\t\t\t// *** Get width and height
\t\t\t\$this->width = imagesx(\$this->image);
\t\t\t\$this->widthOriginal = imagesx(\$this->image);
\t\t\t\$this->height = imagesy(\$this->image);
\t\t\t\$this->heightOriginal = imagesy(\$this->image);


\t\t\t/*  Added 15-09-08
         *  Get the filesize using this build in method.
         *  Stores an array of size
         *
         *  \$this->imageSize[1] = width
         *  \$this->imageSize[2] = height
         *  \$this->imageSize[3] = width x height
         *
         */
\t\t\t\$this->imageSize = getimagesize(\$this->fileName);

\t\t}
\t\telse
\t\t{
\t\t\t\$this->errorArray[] = 'File is not an image';
\t\t}
\t}

## --------------------------------------------------------

\tprivate function initialise()
\t{

\t\t\$this->psdReaderPath = dirname(__FILE__) . '/classPhpPsdReader.php';
\t\t\$this->filterOverlayPath = dirname(__FILE__) . '/filters';

\t\t// *** Set if image should be interlaced or not.
\t\t\$this->isInterlace = false;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Resize
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/


\tpublic function resizeImage(\$newWidth, \$newHeight, \$option = 0, \$sharpen = false, \$autoRotate = false)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Resizes the image
\t\t# Param in:   \$newWidth:
\t\t#             \$newHeight:
\t\t#             \$option:     0 / exact = defined size;
\t\t#                          1 / portrait = keep aspect set height;
\t\t#                          2 / landscape = keep aspect set width;
\t\t#                          3 / auto = auto;
\t\t#                          4 / crop= resize and crop;
\t\t#
\t\t#         \$option can also be an array containing options for
\t\t#         cropping. E.G., array('crop', 'r')
\t\t#
\t\t#         This array only applies to 'crop' and the 'r' refers to
\t\t#         \"crop right\". Other value include; tl, t, tr, l, m (default),
\t\t#         r, bl, b, br, or you can specify your own co-ords (which
\t\t#         isn't recommended.
\t\t#
\t\t#       \$sharpen:    true: sharpen (jpg only);
\t\t#                false: don't sharpen
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:      To clarify the \$option input:
\t\t#               0 = The exact height and width dimensions you set.
\t\t#               1 = Whatever height is passed in will be the height that
\t\t#                   is set. The width will be calculated and set automatically
\t\t#                   to a the value that keeps the original aspect ratio.
\t\t#               2 = The same but based on the width. We try make the image the
\t\t#                  biggest size we can while stil fitting inside the box size
\t\t#               3 = Depending whether the image is landscape or portrait, this
\t\t#                   will automatically determine whether to resize via
\t\t#                   dimension 1,2 or 0
\t\t#               4 = Will resize and then crop the image for best fit
\t\t#
\t\t#       forceStretch can be applied to options 1,2,3 and 4
\t\t#
\t{

\t\t// *** We can pass in an array of options to change the crop position
\t\t\$cropPos = 'm';
\t\tif (is_array(\$option) && fix_strtolower(\$option[0]) == 'crop')
\t\t{
\t\t\t\$cropPos = \$option[1];         # get the crop option
\t\t}
\t\telse
\t\t{
\t\t\tif (strpos(\$option, '-') !== false)
\t\t\t{
\t\t\t\t// *** Or pass in a hyphen seperated option
\t\t\t\t\$optionPiecesArray = explode('-', \$option);
\t\t\t\t\$cropPos = end(\$optionPiecesArray);
\t\t\t}
\t\t}

\t\t// *** Check the option is valid
\t\t\$option = \$this->prepOption(\$option);

\t\t// *** Make sure the file passed in is valid
\t\tif ( ! \$this->image)
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('file ' . \$this->getFileName() . ' is missing or invalid');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t};

\t\t// *** Get optimal width and height - based on \$option
\t\t\$dimensionsArray = \$this->getDimensions(\$newWidth, \$newHeight, \$option);

\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];

\t\t// *** Resample - create image canvas of x, y size
\t\t\$this->imageResized = imagecreatetruecolor(\$optimalWidth, \$optimalHeight);
\t\t\$this->keepTransparancy(\$optimalWidth, \$optimalHeight, \$this->imageResized);
\t\timagecopyresampled(\$this->imageResized, \$this->image, 0, 0, 0, 0, \$optimalWidth, \$optimalHeight, \$this->width, \$this->height);


\t\t// *** If '4', then crop too
\t\tif (\$option == 4 || \$option == 'crop')
\t\t{

\t\t\tif ((\$optimalWidth >= \$newWidth && \$optimalHeight >= \$newHeight))
\t\t\t{
\t\t\t\t\$this->crop(\$optimalWidth, \$optimalHeight, \$newWidth, \$newHeight, \$cropPos);
\t\t\t}
\t\t}

\t\t// *** If Rotate.
\t\tif (\$autoRotate)
\t\t{

\t\t\t\$exifData = \$this->getExif(false);
\t\t\tif (count(\$exifData) > 0)
\t\t\t{

\t\t\t\tswitch (\$exifData['orientation'])
\t\t\t\t{
\t\t\t\t\tcase 8:
\t\t\t\t\t\t\$this->imageResized = imagerotate(\$this->imageResized, 90, 0);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 3:
\t\t\t\t\t\t\$this->imageResized = imagerotate(\$this->imageResized, 180, 0);
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 6:
\t\t\t\t\t\t\$this->imageResized = imagerotate(\$this->imageResized, -90, 0);
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// *** Sharpen image (if jpg and the user wishes to do so)
\t\tif (\$sharpen && in_array(\$this->fileExtension, \$this->sharpenArray))
\t\t{

\t\t\t// *** Sharpen
\t\t\t\$this->sharpen();
\t\t}
\t}

## --------------------------------------------------------

\tpublic function cropImage(\$newWidth, \$newHeight, \$cropPos = 'm')
\t\t# Author:     Jarrod Oberto
\t\t# Date:       08-09-11
\t\t# Purpose:    Crops the image
\t\t# Param in:   \$newWidth: crop with
\t\t#             \$newHeight: crop height
\t\t#       \$cropPos: Can be any of the following:
\t\t#             tl, t, tr, l, m, r, bl, b, br, auto
\t\t#           Or:
\t\t#             a custom position such as '30x50'
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\t// *** Make sure the file passed in is valid
\t\tif ( ! \$this->image)
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('file ' . \$this->getFileName() . ' is missing or invalid');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t};

\t\t\$this->imageResized = \$this->image;
\t\t\$this->crop(\$this->width, \$this->height, \$newWidth, \$newHeight, \$cropPos);

\t}

## --------------------------------------------------------

\tprivate function keepTransparancy(\$width, \$height, \$im)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       08-04-11
\t\t# Purpose:    Keep transparency for png and gif image
\t\t# Param in:
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t// *** If PNG, perform some transparency retention actions (gif untested)
\t\tif (in_array(\$this->fileExtension, \$this->transparentArray) && \$this->keepTransparency)
\t\t{
\t\t\timagealphablending(\$im, false);
\t\t\timagesavealpha(\$im, true);
\t\t\t\$transparent = imagecolorallocatealpha(\$im, 255, 255, 255, 127);
\t\t\timagefilledrectangle(\$im, 0, 0, \$width, \$height, \$transparent);
\t\t}
\t\telse
\t\t{
\t\t\t\$color = imagecolorallocate(\$im, \$this->fillColorArray['r'], \$this->fillColorArray['g'], \$this->fillColorArray['b']);
\t\t\timagefilledrectangle(\$im, 0, 0, \$width, \$height, \$color);
\t\t}
\t}

## --------------------------------------------------------

\tprivate function crop(\$optimalWidth, \$optimalHeight, \$newWidth, \$newHeight, \$cropPos)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       15-09-08
\t\t# Purpose:    Crops the image
\t\t# Param in:   \$newWidth:
\t\t#             \$newHeight:
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\t// *** Get cropping co-ordinates
\t\t\$cropArray = \$this->getCropPlacing(\$optimalWidth, \$optimalHeight, \$newWidth, \$newHeight, \$cropPos);
\t\t\$cropStartX = \$cropArray['x'];
\t\t\$cropStartY = \$cropArray['y'];

\t\t// *** Crop this bad boy
\t\t\$crop = imagecreatetruecolor(\$newWidth, \$newHeight);
\t\t\$this->keepTransparancy(\$optimalWidth, \$optimalHeight, \$crop);
\t\timagecopyresampled(\$crop, \$this->imageResized, 0, 0, \$cropStartX, \$cropStartY, \$newWidth, \$newHeight, \$newWidth, \$newHeight);

\t\t\$this->imageResized = \$crop;

\t\t// *** Set new width and height to our variables
\t\t\$this->width = \$newWidth;
\t\t\$this->height = \$newHeight;

\t}

## --------------------------------------------------------

\tprivate function getCropPlacing(\$optimalWidth, \$optimalHeight, \$newWidth, \$newHeight, \$pos = 'm')
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   July 11
\t\t# Purpose:  Set the cropping area.
\t\t# Params in:
\t\t# Params out: (array) the crop x and y co-ordinates.
\t\t# Notes:    When specifying the exact pixel crop position (eg 10x15), be
\t\t#       very careful as it's easy to crop out of the image leaving
\t\t#       black borders.
\t\t#
\t{
\t\t\$pos = fix_strtolower(\$pos);

\t\t// *** If co-ords have been entered
\t\tif (strstr(\$pos, 'x'))
\t\t{
\t\t\t\$pos = str_replace(' ', '', \$pos);

\t\t\t\$xyArray = explode('x', \$pos);
\t\t\tlist(\$cropStartX, \$cropStartY) = \$xyArray;

\t\t}
\t\telse
\t\t{

\t\t\tswitch (\$pos)
\t\t\t{
\t\t\t\tcase 'tl':
\t\t\t\t\t\$cropStartX = 0;
\t\t\t\t\t\$cropStartY = 0;
\t\t\t\t\tbreak;

\t\t\t\tcase 't':
\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\$cropStartY = 0;
\t\t\t\t\tbreak;

\t\t\t\tcase 'tr':
\t\t\t\t\t\$cropStartX = \$optimalWidth - \$newWidth;
\t\t\t\t\t\$cropStartY = 0;
\t\t\t\t\tbreak;

\t\t\t\tcase 'l':
\t\t\t\t\t\$cropStartX = 0;
\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'm':
\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'r':
\t\t\t\t\t\$cropStartX = \$optimalWidth - \$newWidth;
\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'bl':
\t\t\t\t\t\$cropStartX = 0;
\t\t\t\t\t\$cropStartY = \$optimalHeight - \$newHeight;
\t\t\t\t\tbreak;

\t\t\t\tcase 'b':
\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\$cropStartY = \$optimalHeight - \$newHeight;
\t\t\t\t\tbreak;

\t\t\t\tcase 'br':
\t\t\t\t\t\$cropStartX = \$optimalWidth - \$newWidth;
\t\t\t\t\t\$cropStartY = \$optimalHeight - \$newHeight;
\t\t\t\t\tbreak;

\t\t\t\tcase 'auto':
\t\t\t\t\t// *** If image is a portrait crop from top, not center. v1.5
\t\t\t\t\tif (\$optimalHeight > \$optimalWidth)
\t\t\t\t\t{
\t\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\t\$cropStartY = (\$this->cropFromTopPercent / 100) * \$optimalHeight;
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{

\t\t\t\t\t\t// *** Else crop from the center
\t\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\t}
\t\t\t\t\tbreak;

\t\t\t\tdefault:
\t\t\t\t\t// *** Default to center
\t\t\t\t\t\$cropStartX = (\$optimalWidth / 2) - (\$newWidth / 2);
\t\t\t\t\t\$cropStartY = (\$optimalHeight / 2) - (\$newHeight / 2);
\t\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\treturn array( 'x' => \$cropStartX, 'y' => \$cropStartY );
\t}

## --------------------------------------------------------

\tprivate function getDimensions(\$newWidth, \$newHeight, \$option)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       17-11-09
\t\t# Purpose:    Get new image dimensions based on user specificaions
\t\t# Param in:   \$newWidth:
\t\t#             \$newHeight:
\t\t# Param out:  Array of new width and height values
\t\t# Reference:
\t\t# Notes:    If \$option = 3 then this function is call recursivly
\t\t#
\t\t#       To clarify the \$option input:
\t\t#               0 = The exact height and width dimensions you set.
\t\t#               1 = Whatever height is passed in will be the height that
\t\t#                   is set. The width will be calculated and set automatically
\t\t#                   to a the value that keeps the original aspect ratio.
\t\t#               2 = The same but based on the width.
\t\t#               3 = Depending whether the image is landscape or portrait, this
\t\t#                   will automatically determine whether to resize via
\t\t#                   dimension 1,2 or 0.
\t\t#               4 = Resize the image as much as possible, then crop the
\t\t#         remainder.
\t{

\t\tswitch (strval(\$option))
\t\t{
\t\t\tcase '0':
\t\t\tcase 'exact':
\t\t\t\t\$optimalWidth = \$newWidth;
\t\t\t\t\$optimalHeight = \$newHeight;
\t\t\t\tbreak;
\t\t\tcase '1':
\t\t\tcase 'portrait':
\t\t\t\t\$dimensionsArray = \$this->getSizeByFixedHeight(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\tbreak;
\t\t\tcase '2':
\t\t\tcase 'landscape':
\t\t\t\t\$dimensionsArray = \$this->getSizeByFixedWidth(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\tbreak;
\t\t\tcase '3':
\t\t\tcase 'auto':
\t\t\t\t\$dimensionsArray = \$this->getSizeByAuto(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\tbreak;
\t\t\tcase '4':
\t\t\tcase 'crop':
\t\t\t\t\$dimensionsArray = \$this->getOptimalCrop(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\tbreak;
\t\t}

\t\treturn array( 'optimalWidth' => \$optimalWidth, 'optimalHeight' => \$optimalHeight );
\t}

## --------------------------------------------------------

\tprivate function getSizeByFixedHeight(\$newWidth, \$newHeight)
\t{
\t\t// *** If forcing is off...
\t\tif ( ! \$this->forceStretch)
\t\t{

\t\t\t// *** ...check if actual height is less than target height
\t\t\tif (\$this->height < \$newHeight)
\t\t\t{
\t\t\t\treturn array( 'optimalWidth' => \$this->width, 'optimalHeight' => \$this->height );
\t\t\t}
\t\t}

\t\t\$ratio = \$this->width / \$this->height;

\t\t\$newWidth = \$newHeight * \$ratio;

\t\t//return \$newWidth;
\t\treturn array( 'optimalWidth' => \$newWidth, 'optimalHeight' => \$newHeight );
\t}

## --------------------------------------------------------

\tprivate function getSizeByFixedWidth(\$newWidth, \$newHeight)
\t{
\t\t// *** If forcing is off...
\t\tif ( ! \$this->forceStretch)
\t\t{

\t\t\t// *** ...check if actual width is less than target width
\t\t\tif (\$this->width < \$newWidth)
\t\t\t{
\t\t\t\treturn array( 'optimalWidth' => \$this->width, 'optimalHeight' => \$this->height );
\t\t\t}
\t\t}

\t\t\$ratio = \$this->height / \$this->width;

\t\t\$newHeight = \$newWidth * \$ratio;

\t\t//return \$newHeight;
\t\treturn array( 'optimalWidth' => \$newWidth, 'optimalHeight' => \$newHeight );
\t}

## --------------------------------------------------------

\tprivate function getSizeByAuto(\$newWidth, \$newHeight)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       19-08-08
\t\t# Purpose:    Depending on the height, choose to resize by 0, 1, or 2
\t\t# Param in:   The new height and new width
\t\t# Notes:
\t\t#
\t{
\t\t// *** If forcing is off...
\t\tif ( ! \$this->forceStretch)
\t\t{

\t\t\t// *** ...check if actual size is less than target size
\t\t\tif (\$this->width < \$newWidth && \$this->height < \$newHeight)
\t\t\t{
\t\t\t\treturn array( 'optimalWidth' => \$this->width, 'optimalHeight' => \$this->height );
\t\t\t}
\t\t}

\t\tif (\$this->height < \$this->width)
\t\t\t// *** Image to be resized is wider (landscape)
\t\t{
\t\t\t//\$optimalWidth = \$newWidth;
\t\t\t//\$optimalHeight= \$this->getSizeByFixedWidth(\$newWidth);

\t\t\t\$dimensionsArray = \$this->getSizeByFixedWidth(\$newWidth, \$newHeight);
\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t}
\t\telseif (\$this->height > \$this->width)
\t\t\t// *** Image to be resized is taller (portrait)
\t\t{
\t\t\t//\$optimalWidth = \$this->getSizeByFixedHeight(\$newHeight);
\t\t\t//\$optimalHeight= \$newHeight;

\t\t\t\$dimensionsArray = \$this->getSizeByFixedHeight(\$newWidth, \$newHeight);
\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t}
\t\telse
\t\t\t// *** Image to be resizerd is a square
\t\t{

\t\t\tif (\$newHeight < \$newWidth)
\t\t\t{
\t\t\t\t//\$optimalWidth = \$newWidth;
\t\t\t\t//\$optimalHeight= \$this->getSizeByFixedWidth(\$newWidth);
\t\t\t\t\$dimensionsArray = \$this->getSizeByFixedWidth(\$newWidth, \$newHeight);
\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tif (\$newHeight > \$newWidth)
\t\t\t\t{
\t\t\t\t\t//\$optimalWidth = \$this->getSizeByFixedHeight(\$newHeight);
\t\t\t\t\t//\$optimalHeight= \$newHeight;
\t\t\t\t\t\$dimensionsArray = \$this->getSizeByFixedHeight(\$newWidth, \$newHeight);
\t\t\t\t\t\$optimalWidth = \$dimensionsArray['optimalWidth'];
\t\t\t\t\t\$optimalHeight = \$dimensionsArray['optimalHeight'];
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t// *** Sqaure being resized to a square
\t\t\t\t\t\$optimalWidth = \$newWidth;
\t\t\t\t\t\$optimalHeight = \$newHeight;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn array( 'optimalWidth' => \$optimalWidth, 'optimalHeight' => \$optimalHeight );
\t}

## --------------------------------------------------------

\tprivate function getOptimalCrop(\$newWidth, \$newHeight)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       17-11-09
\t\t# Purpose:    Get optimal crop dimensions
\t\t# Param in:   width and height as requested by user (fig 3)
\t\t# Param out:  Array of optimal width and height (fig 2)
\t\t# Reference:
\t\t# Notes:      The optimal width and height return are not the same as the
\t\t#       same as the width and height passed in. For example:
\t\t#
\t\t#
\t\t#   |-----------------|     |------------|       |-------|
\t\t#   |             |   =>  |**|      |**|   =>  |       |
\t\t#   |             |     |**|      |**|       |       |
\t\t#   |           |       |------------|       |-------|
\t\t#   |-----------------|
\t\t#        original                optimal             crop
\t\t#              size                   size               size
\t\t#  Fig          1                      2                  3
\t\t#
\t\t#       300 x 250           150 x 125          150 x 100
\t\t#
\t\t#    The optimal size is the smallest size (that is closest to the crop size)
\t\t#    while retaining proportion/ratio.
\t\t#
\t\t#  The crop size is the optimal size that has been cropped on one axis to
\t\t#  make the image the exact size specified by the user.
\t\t#
\t\t#               * represent cropped area
\t\t#
\t{

\t\t// *** If forcing is off...
\t\tif ( ! \$this->forceStretch)
\t\t{

\t\t\t// *** ...check if actual size is less than target size
\t\t\tif (\$this->width < \$newWidth && \$this->height < \$newHeight)
\t\t\t{
\t\t\t\treturn array( 'optimalWidth' => \$this->width, 'optimalHeight' => \$this->height );
\t\t\t}
\t\t}

\t\t\$heightRatio = \$this->height / \$newHeight;
\t\t\$widthRatio = \$this->width / \$newWidth;

\t\tif (\$heightRatio < \$widthRatio)
\t\t{
\t\t\t\$optimalRatio = \$heightRatio;
\t\t}
\t\telse
\t\t{
\t\t\t\$optimalRatio = \$widthRatio;
\t\t}

\t\t\$optimalHeight = round(\$this->height / \$optimalRatio);
\t\t\$optimalWidth = round(\$this->width / \$optimalRatio);

\t\treturn array( 'optimalWidth' => \$optimalWidth, 'optimalHeight' => \$optimalHeight );
\t}

## --------------------------------------------------------

\tprivate function sharpen()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       08 04 2011
\t\t# Purpose:    Sharpen image
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t# Credit:   Incorporates Joe Lencioni (August 6, 2008) code
\t{

\t\tif (version_compare(PHP_VERSION, '5.1.0') >= 0)
\t\t{

\t\t\t// ***
\t\t\tif (\$this->aggresiveSharpening)
\t\t\t{ # A more aggressive sharpening solution

\t\t\t\t\$sharpenMatrix = array( array( -1, -1, -1 ),
\t\t\t\t\t\t\t\t\t\tarray( -1, 16, -1 ),
\t\t\t\t\t\t\t\t\t\tarray( -1, -1, -1 ) );
\t\t\t\t\$divisor = 8;
\t\t\t\t\$offset = 0;

\t\t\t\timageconvolution(\$this->imageResized, \$sharpenMatrix, \$divisor, \$offset);
\t\t\t}
\t\t\telse # More subtle and personally more desirable
\t\t\t{
\t\t\t\t\$sharpness = \$this->findSharp(\$this->widthOriginal, \$this->width);

\t\t\t\t\$sharpenMatrix = array(
\t\t\t\t\tarray( -1, -2, -1 ),
\t\t\t\t\tarray( -2, \$sharpness + 12, -2 ), //Lessen the effect of a filter by increasing the value in the center cell
\t\t\t\t\tarray( -1, -2, -1 )
\t\t\t\t);
\t\t\t\t\$divisor = \$sharpness; // adjusts brightness
\t\t\t\t\$offset = 0;
\t\t\t\timageconvolution(\$this->imageResized, \$sharpenMatrix, \$divisor, \$offset);
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('Sharpening required PHP 5.1.0 or greater.');
\t\t\t}
\t\t}
\t}

\t## --------------------------------------------------------

\tprivate function sharpen2(\$level)
\t{
\t\t\$sharpenMatrix = array(
\t\t\tarray( \$level, \$level, \$level ),
\t\t\tarray( \$level, (8 * \$level) + 1, \$level ), //Lessen the effect of a filter by increasing the value in the center cell
\t\t\tarray( \$level, \$level, \$level )
\t\t);

\t}

## --------------------------------------------------------

\tprivate function findSharp(\$orig, \$final)
\t\t# Author:     Ryan Rud (http://adryrun.com)
\t\t# Purpose:    Find optimal sharpness
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t\$final = \$final * (750.0 / \$orig);
\t\t\$a = 52;
\t\t\$b = -0.27810650887573124;
\t\t\$c = .00047337278106508946;

\t\t\$result = \$a + \$b * \$final + \$c * \$final * \$final;

\t\treturn max(round(\$result), 0);
\t}

## --------------------------------------------------------

\tprivate function prepOption(\$option)
\t\t# Author:     Jarrod Oberto
\t\t# Purpose:    Prep option like change the passed in option to lowercase
\t\t# Param in:   (str/int) \$option: eg. 'exact', 'crop'. 0, 4
\t\t# Param out:  lowercase string
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (is_array(\$option))
\t\t{
\t\t\tif (fix_strtolower(\$option[0]) == 'crop' && count(\$option) == 2)
\t\t\t{
\t\t\t\treturn 'crop';
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception('Crop resize option array is badly formatted.');
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tif (strpos(\$option, 'crop') !== false)
\t\t\t{
\t\t\t\treturn 'crop';
\t\t\t}
\t\t}

\t\tif (is_string(\$option))
\t\t{
\t\t\treturn fix_strtolower(\$option);
\t\t}

\t\treturn \$option;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Presets
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

#
# Preset are pre-defined templates you can apply to your image.
#
# These are inteded to be applied to thumbnail images.
#


\tpublic function borderPreset(\$preset)
\t{
\t\tswitch (\$preset)
\t\t{

\t\t\tcase 'simple':
\t\t\t\t\$this->addBorder(7, '#fff');
\t\t\t\t\$this->addBorder(6, '#f2f1f0');
\t\t\t\t\$this->addBorder(2, '#fff');
\t\t\t\t\$this->addBorder(1, '#ccc');
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Draw border
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addBorder(\$thickness = 1, \$rgbArray = array( 255, 255, 255 ))
\t\t# Author:     Jarrod Oberto
\t\t# Date:       05-05-11
\t\t# Purpose:    Add a border to the image
\t\t# Param in:
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:    This border is added to the INSIDE of the image
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\t\$rgbArray = \$this->formatColor(\$rgbArray);
\t\t\t\$r = \$rgbArray['r'];
\t\t\t\$g = \$rgbArray['g'];
\t\t\t\$b = \$rgbArray['b'];


\t\t\t\$x1 = 0;
\t\t\t\$y1 = 0;
\t\t\t\$x2 = ImageSX(\$this->imageResized) - 1;
\t\t\t\$y2 = ImageSY(\$this->imageResized) - 1;

\t\t\t\$rgbArray = ImageColorAllocate(\$this->imageResized, \$r, \$g, \$b);


\t\t\tfor (\$i = 0; \$i < \$thickness; \$i++)
\t\t\t{
\t\t\t\tImageRectangle(\$this->imageResized, \$x1++, \$y1++, \$x2--, \$y2--, \$rgbArray);
\t\t\t}
\t\t}
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Gray Scale
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function greyScale()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image greyscale
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t}

\t}

\t## --------------------------------------------------------

\tpublic function greyScaleEnhanced()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image greyscale
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -15);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_BRIGHTNESS, 2);
\t\t\t\$this->sharpen(\$this->width);
\t\t}
\t}

\t## --------------------------------------------------------

\tpublic function greyScaleDramatic()
\t\t# Alias of gd_filter_monopin
\t{
\t\t\$this->gd_filter_monopin();
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Black 'n White
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function blackAndWhite()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image black and white
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -1000);
\t\t}

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Negative
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function negative()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image negative
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\timagefilter(\$this->imageResized, IMG_FILTER_NEGATE);
\t\t}

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Sepia
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function sepia()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Make image sepia
\t\t# Param in:   n/a
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_BRIGHTNESS, -10);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -20);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_COLORIZE, 60, 30, -15);
\t\t}
\t}

\t## --------------------------------------------------------

\tpublic function sepia2()

\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\t\$total = imagecolorstotal(\$this->imageResized);
\t\t\tfor (\$i = 0; \$i < \$total; \$i++)
\t\t\t{
\t\t\t\t\$index = imagecolorsforindex(\$this->imageResized, \$i);
\t\t\t\t\$red = (\$index[\"red\"] * 0.393 + \$index[\"green\"] * 0.769 + \$index[\"blue\"] * 0.189) / 1.351;
\t\t\t\t\$green = (\$index[\"red\"] * 0.349 + \$index[\"green\"] * 0.686 + \$index[\"blue\"] * 0.168) / 1.203;
\t\t\t\t\$blue = (\$index[\"red\"] * 0.272 + \$index[\"green\"] * 0.534 + \$index[\"blue\"] * 0.131) / 2.140;
\t\t\t\timagecolorset(\$this->imageResized, \$i, \$red, \$green, \$blue);
\t\t\t}


\t\t}
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Vintage
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function vintage()
\t\t# Alias of gd_filter_monopin
\t{
\t\t\$this->gd_filter_vintage();
\t}

\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Presets By Marc Hibbins
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/


\t/** Apply 'Monopin' preset */
\tpublic function gd_filter_monopin()
\t{

\t\tif (\$this->imageResized)
\t\t{
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_GRAYSCALE);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_BRIGHTNESS, -15);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -15);
\t\t\t\$this->imageResized = \$this->gd_apply_overlay(\$this->imageResized, 'vignette', 100);
\t\t}
\t}

\t## --------------------------------------------------------

\tpublic function gd_filter_vintage()
\t{
\t\tif (\$this->imageResized)
\t\t{
\t\t\t\$this->imageResized = \$this->gd_apply_overlay(\$this->imageResized, 'vignette', 45);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_BRIGHTNESS, 20);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_CONTRAST, -35);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_COLORIZE, 60, -10, 35);
\t\t\timagefilter(\$this->imageResized, IMG_FILTER_SMOOTH, 7);
\t\t\t\$this->imageResized = \$this->gd_apply_overlay(\$this->imageResized, 'scratch', 10);
\t\t}
\t}

\t## --------------------------------------------------------

\t/** Apply a PNG overlay */
\tprivate function gd_apply_overlay(\$im, \$type, \$amount)
\t\t#
\t\t# Original Author:    Marc Hibbins
\t\t# License:  Attribution-ShareAlike 3.0
\t\t# Purpose:
\t\t# Params in:
\t\t# Params out:
\t\t# Notes:
\t\t#
\t{
\t\t\$width = imagesx(\$im);
\t\t\$height = imagesy(\$im);
\t\t\$filter = imagecreatetruecolor(\$width, \$height);

\t\timagealphablending(\$filter, false);
\t\timagesavealpha(\$filter, true);

\t\t\$transparent = imagecolorallocatealpha(\$filter, 255, 255, 255, 127);
\t\timagefilledrectangle(\$filter, 0, 0, \$width, \$height, \$transparent);

\t\t// *** Resize overlay
\t\t\$overlay = \$this->filterOverlayPath . '/' . \$type . '.png';
\t\t\$png = imagecreatefrompng(\$overlay);
\t\timagecopyresampled(\$filter, \$png, 0, 0, 0, 0, \$width, \$height, imagesx(\$png), imagesy(\$png));

\t\t\$comp = imagecreatetruecolor(\$width, \$height);
\t\timagecopy(\$comp, \$im, 0, 0, 0, 0, \$width, \$height);
\t\timagecopy(\$comp, \$filter, 0, 0, 0, 0, \$width, \$height);
\t\timagecopymerge(\$im, \$comp, 0, 0, 0, 0, \$width, \$height, \$amount);

\t\timagedestroy(\$comp);

\t\treturn \$im;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Colorise
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function image_colorize(\$rgb)
\t{
\t\timageTrueColorToPalette(\$this->imageResized, true, 256);
\t\t\$numColors = imageColorsTotal(\$this->imageResized);

\t\tfor (\$x = 0; \$x < \$numColors; \$x++)
\t\t{
\t\t\tlist(\$r, \$g, \$b) = array_values(imageColorsForIndex(\$this->imageResized, \$x));

\t\t\t// calculate grayscale in percent
\t\t\t\$grayscale = (\$r + \$g + \$b) / 3 / 0xff;

\t\t\timageColorSet(\$this->imageResized, \$x,
\t\t\t\t\$grayscale * \$rgb[0],
\t\t\t\t\$grayscale * \$rgb[1],
\t\t\t\t\$grayscale * \$rgb[2]
\t\t\t);

\t\t}

\t\treturn true;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Reflection
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addReflection(\$reflectionHeight = 50, \$startingTransparency = 30, \$inside = false, \$bgColor = '#fff', \$stretch = false, \$divider = 0)
\t{

\t\t// *** Convert color
\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\$r = \$rgbArray['r'];
\t\t\$g = \$rgbArray['g'];
\t\t\$b = \$rgbArray['b'];

\t\t\$im = \$this->imageResized;
\t\t\$li = imagecreatetruecolor(\$this->width, 1);

\t\t\$bgc = imagecolorallocate(\$li, \$r, \$g, \$b);
\t\timagefilledrectangle(\$li, 0, 0, \$this->width, 1, \$bgc);

\t\t\$bg = imagecreatetruecolor(\$this->width, \$reflectionHeight);
\t\t\$wh = imagecolorallocate(\$im, 255, 255, 255);

\t\t\$im = imagerotate(\$im, -180, \$wh);
\t\timagecopyresampled(\$bg, \$im, 0, 0, 0, 0, \$this->width, \$this->height, \$this->width, \$this->height);

\t\t\$im = \$bg;

\t\t\$bg = imagecreatetruecolor(\$this->width, \$reflectionHeight);

\t\tfor (\$x = 0; \$x < \$this->width; \$x++)
\t\t{
\t\t\timagecopy(\$bg, \$im, \$x, 0, \$this->width - \$x - 1, 0, 1, \$reflectionHeight);
\t\t}
\t\t\$im = \$bg;

\t\t\$transaprencyAmount = \$this->invertTransparency(\$startingTransparency, 100);


\t\t// *** Fade
\t\tif (\$stretch)
\t\t{
\t\t\t\$step = 100 / (\$reflectionHeight + \$startingTransparency);
\t\t}
\t\telse
\t\t{
\t\t\t\$step = 100 / \$reflectionHeight;
\t\t}
\t\tfor (\$i = 0; \$i <= \$reflectionHeight; \$i++)
\t\t{

\t\t\tif (\$startingTransparency > 100)
\t\t\t{
\t\t\t\t\$startingTransparency = 100;
\t\t\t}
\t\t\tif (\$startingTransparency < 1)
\t\t\t{
\t\t\t\t\$startingTransparency = 1;
\t\t\t}
\t\t\timagecopymerge(\$bg, \$li, 0, \$i, 0, 0, \$this->width, 1, \$startingTransparency);
\t\t\t\$startingTransparency += \$step;
\t\t}

\t\t// *** Apply fade
\t\timagecopymerge(\$im, \$li, 0, 0, 0, 0, \$this->width, \$divider, 100); // Divider


\t\t// *** width, height of reflection.
\t\t\$x = imagesx(\$im);
\t\t\$y = imagesy(\$im);


\t\t// *** Determines if the reflection should be displayed inside or outside the image
\t\tif (\$inside)
\t\t{

\t\t\t// Create new blank image with sizes.
\t\t\t\$final = imagecreatetruecolor(\$this->width, \$this->height);

\t\t\timagecopymerge(\$final, \$this->imageResized, 0, 0, 0, \$reflectionHeight, \$this->width, \$this->height - \$reflectionHeight, 100);
\t\t\timagecopymerge(\$final, \$im, 0, \$this->height - \$reflectionHeight, 0, 0, \$x, \$y, 100);

\t\t}
\t\telse
\t\t{

\t\t\t// Create new blank image with sizes.
\t\t\t\$final = imagecreatetruecolor(\$this->width, \$this->height + \$y);

\t\t\timagecopymerge(\$final, \$this->imageResized, 0, 0, 0, 0, \$this->width, \$this->height, 100);
\t\t\timagecopymerge(\$final, \$im, 0, \$this->height, 0, 0, \$x, \$y, 100);
\t\t}

\t\t\$this->imageResized = \$final;

\t\timagedestroy(\$li);
\t\timagedestroy(\$im);
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Rotate
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function rotate(\$value = 90, \$bgColor = 'transparent')
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Rotate image
\t\t# Param in:   (mixed) \$degrees: (int) number of degress to rotate image
\t\t#               (str) param \"left\": rotate left
\t\t#               (str) param \"right\": rotate right
\t\t#               (str) param \"upside\": upside-down image
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:    The default direction of imageRotate() is counter clockwise.
\t\t#
\t{
\t\tif (\$this->imageResized)
\t\t{

\t\t\tif (is_integer(\$value))
\t\t\t{
\t\t\t\t\$degrees = \$value;
\t\t\t}

\t\t\t// *** Convert color
\t\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\t\$r = \$rgbArray['r'];
\t\t\t\$g = \$rgbArray['g'];
\t\t\t\$b = \$rgbArray['b'];
\t\t\tif (isset(\$rgbArray['a']))
\t\t\t{
\t\t\t\t\$a = \$rgbArray['a'];
\t\t\t}

\t\t\tif (is_string(\$value))
\t\t\t{

\t\t\t\t\$value = fix_strtolower(\$value);

\t\t\t\tswitch (\$value)
\t\t\t\t{
\t\t\t\t\tcase 'left':
\t\t\t\t\t\t\$degrees = 90;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'right':
\t\t\t\t\t\t\$degrees = 270;
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 'upside':
\t\t\t\t\t\t\$degrees = 180;
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t}

\t\t\t// *** The default direction of imageRotate() is counter clockwise
\t\t\t//   * This makes it clockwise
\t\t\t\$degrees = 360 - \$degrees;

\t\t\t// *** Create background color
\t\t\t\$bg = ImageColorAllocateAlpha(\$this->imageResized, \$r, \$g, \$b, \$a);

\t\t\t// *** Fill with background
\t\t\tImageFill(\$this->imageResized, 0, 0, \$bg);

\t\t\t// *** Rotate
\t\t\t\$this->imageResized = imagerotate(\$this->imageResized, \$degrees, \$bg); // Rotate 45 degrees and allocated the transparent colour as the one to make transparent (obviously)

\t\t\t// Ensure alpha transparency
\t\t\tImageSaveAlpha(\$this->imageResized, true);

\t\t}
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Round corners
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function roundCorners(\$radius = 5, \$bgColor = 'transparent')
\t\t# Author:     Jarrod Oberto
\t\t# Date:       19-05-2011
\t\t# Purpose:    Create rounded corners on your image
\t\t# Param in:   (int) radius = the amount of curvature
\t\t#       (mixed) \$bgColor = the corner background color
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\t// *** Check if the user wants transparency
\t\t\$isTransparent = false;
\t\tif ( ! is_array(\$bgColor))
\t\t{
\t\t\tif (fix_strtolower(\$bgColor) == 'transparent')
\t\t\t{
\t\t\t\t\$isTransparent = true;
\t\t\t}
\t\t}


\t\t// *** If we use transparency, we need to color our curved mask with a unique color
\t\tif (\$isTransparent)
\t\t{
\t\t\t\$bgColor = \$this->findUnusedGreen();
\t\t}

\t\t// *** Convert color
\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\$r = \$rgbArray['r'];
\t\t\$g = \$rgbArray['g'];
\t\t\$b = \$rgbArray['b'];
\t\tif (isset(\$rgbArray['a']))
\t\t{
\t\t\t\$a = \$rgbArray['a'];
\t\t}


\t\t// *** Create top-left corner mask (square)
\t\t\$cornerImg = imagecreatetruecolor(\$radius, \$radius);
\t\t//\$cornerImg = imagecreate(\$radius, \$radius);

\t\t//imagealphablending(\$cornerImg, true);
\t\t//imagesavealpha(\$cornerImg, true);

\t\t//imagealphablending(\$this->imageResized, false);
\t\t//imagesavealpha(\$this->imageResized, true);

\t\t// *** Give it a color
\t\t\$maskColor = imagecolorallocate(\$cornerImg, 0, 0, 0);


\t\t// *** Replace the mask color (black) to transparent
\t\timagecolortransparent(\$cornerImg, \$maskColor);


\t\t// *** Create the image background color
\t\t\$imagebgColor = imagecolorallocate(\$cornerImg, \$r, \$g, \$b);


\t\t// *** Fill the corner area to the user defined color
\t\timagefill(\$cornerImg, 0, 0, \$imagebgColor);


\t\timagefilledellipse(\$cornerImg, \$radius, \$radius, \$radius * 2, \$radius * 2, \$maskColor);


\t\t// *** Map to top left corner
\t\timagecopymerge(\$this->imageResized, \$cornerImg, 0, 0, 0, 0, \$radius, \$radius, 100); #tl

\t\t// *** Map rounded corner to other corners by rotating and applying the mask
\t\t\$cornerImg = imagerotate(\$cornerImg, 90, 0);
\t\timagecopymerge(\$this->imageResized, \$cornerImg, 0, \$this->height - \$radius, 0, 0, \$radius, \$radius, 100); #bl

\t\t\$cornerImg = imagerotate(\$cornerImg, 90, 0);
\t\timagecopymerge(\$this->imageResized, \$cornerImg, \$this->width - \$radius, \$this->height - \$radius, 0, 0, \$radius, \$radius, 100); #br

\t\t\$cornerImg = imagerotate(\$cornerImg, 90, 0);
\t\timagecopymerge(\$this->imageResized, \$cornerImg, \$this->width - \$radius, 0, 0, 0, \$radius, \$radius, 100); #tr


\t\t// *** If corners are to be transparent, we fill our chromakey color as transparent.
\t\tif (\$isTransparent)
\t\t{
\t\t\t//imagecolortransparent(\$this->imageResized, \$imagebgColor);
\t\t\t\$this->imageResized = \$this->transparentImage(\$this->imageResized);
\t\t\timagesavealpha(\$this->imageResized, true);
\t\t}

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Shadow
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addShadow(\$shadowAngle = 45, \$blur = 15, \$bgColor = 'transparent')
\t\t#
\t\t# Author:   Jarrod Oberto (Adapted from Pascal Naidon)
\t\t# Ref:    http://www.les-stooges.org/pascal/webdesign/vignettes/index.php?la=en
\t\t# Purpose:  Add a drop shadow to your image
\t\t# Params in:  (int) \$angle: the angle of the shadow
\t\t#       (int) \$blur: the blur distance
\t\t#       (mixed) \$bgColor: the color of the background
\t\t# Params out:
\t\t# Notes:
\t\t#
\t{
\t\t// *** A higher number results in a smoother shadow
\t\tdefine('STEPS', \$blur * 2);

\t\t// *** Set the shadow distance
\t\t\$shadowDistance = \$blur * 0.25;

\t\t// *** Set blur width and height
\t\t\$blurWidth = \$blurHeight = \$blur;


\t\tif (\$shadowAngle == 0)
\t\t{
\t\t\t\$distWidth = 0;
\t\t\t\$distHeight = 0;
\t\t}
\t\telse
\t\t{
\t\t\t\$distWidth = \$shadowDistance * cos(deg2rad(\$shadowAngle));
\t\t\t\$distHeight = \$shadowDistance * sin(deg2rad(\$shadowAngle));
\t\t}


\t\t// *** Convert color
\t\tif (fix_strtolower(\$bgColor) != 'transparent')
\t\t{
\t\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\t\$r0 = \$rgbArray['r'];
\t\t\t\$g0 = \$rgbArray['g'];
\t\t\t\$b0 = \$rgbArray['b'];
\t\t}


\t\t\$image = \$this->imageResized;
\t\t\$width = \$this->width;
\t\t\$height = \$this->height;


\t\t\$newImage = imagecreatetruecolor(\$width, \$height);
\t\timagecopyresampled(\$newImage, \$image, 0, 0, 0, 0, \$width, \$height, \$width, \$height);


\t\t// *** RGB
\t\t\$rgb = imagecreatetruecolor(\$width + \$blurWidth, \$height + \$blurHeight);
\t\t\$colour = imagecolorallocate(\$rgb, 0, 0, 0);
\t\timagefilledrectangle(\$rgb, 0, 0, \$width + \$blurWidth, \$height + \$blurHeight, \$colour);
\t\t\$colour = imagecolorallocate(\$rgb, 255, 255, 255);
\t\t//imagefilledrectangle(\$rgb, \$blurWidth*0.5-\$distWidth, \$blurHeight*0.5-\$distHeight, \$width+\$blurWidth*0.5-\$distWidth, \$height+\$blurWidth*0.5-\$distHeight, \$colour);
\t\timagefilledrectangle(\$rgb, \$blurWidth * 0.5 - \$distWidth, \$blurHeight * 0.5 - \$distHeight, \$width + \$blurWidth * 0.5 - \$distWidth, \$height + \$blurWidth * 0.5 - \$distHeight, \$colour);
\t\t//imagecopymerge(\$rgb, \$newImage, 1+\$blurWidth*0.5-\$distWidth, 1+\$blurHeight*0.5-\$distHeight, 0,0, \$width, \$height, 100);
\t\timagecopymerge(\$rgb, \$newImage, \$blurWidth * 0.5 - \$distWidth, \$blurHeight * 0.5 - \$distHeight, 0, 0, \$width + \$blurWidth, \$height + \$blurHeight, 100);


\t\t// *** Shadow (alpha)
\t\t\$shadow = imagecreatetruecolor(\$width + \$blurWidth, \$height + \$blurHeight);
\t\timagealphablending(\$shadow, false);
\t\t\$colour = imagecolorallocate(\$shadow, 0, 0, 0);
\t\timagefilledrectangle(\$shadow, 0, 0, \$width + \$blurWidth, \$height + \$blurHeight, \$colour);


\t\tfor (\$i = 0; \$i <= STEPS; \$i++)
\t\t{

\t\t\t\$t = ((1.0 * \$i) / STEPS);
\t\t\t\$intensity = 255 * \$t * \$t;

\t\t\t\$colour = imagecolorallocate(\$shadow, \$intensity, \$intensity, \$intensity);
\t\t\t\$points = array(
\t\t\t\t\$blurWidth * \$t, \$blurHeight,     // Point 1 (x, y)
\t\t\t\t\$blurWidth, \$blurHeight * \$t,  // Point 2 (x, y)
\t\t\t\t\$width, \$blurHeight * \$t,  // Point 3 (x, y)
\t\t\t\t\$width + \$blurWidth * (1 - \$t), \$blurHeight,     // Point 4 (x, y)
\t\t\t\t\$width + \$blurWidth * (1 - \$t), \$height,     // Point 5 (x, y)
\t\t\t\t\$width, \$height + \$blurHeight * (1 - \$t),  // Point 6 (x, y)
\t\t\t\t\$blurWidth, \$height + \$blurHeight * (1 - \$t),  // Point 7 (x, y)
\t\t\t\t\$blurWidth * \$t, \$height      // Point 8 (x, y)
\t\t\t);
\t\t\timagepolygon(\$shadow, \$points, 8, \$colour);
\t\t}

\t\tfor (\$i = 0; \$i <= STEPS; \$i++)
\t\t{

\t\t\t\$t = ((1.0 * \$i) / STEPS);
\t\t\t\$intensity = 255 * \$t * \$t;

\t\t\t\$colour = imagecolorallocate(\$shadow, \$intensity, \$intensity, \$intensity);
\t\t\timagefilledarc(\$shadow, \$blurWidth - 1, \$blurHeight - 1, 2 * (1 - \$t) * \$blurWidth, 2 * (1 - \$t) * \$blurHeight, 180, 268, \$colour, IMG_ARC_PIE);
\t\t\timagefilledarc(\$shadow, \$width, \$blurHeight - 1, 2 * (1 - \$t) * \$blurWidth, 2 * (1 - \$t) * \$blurHeight, 270, 358, \$colour, IMG_ARC_PIE);
\t\t\timagefilledarc(\$shadow, \$width, \$height, 2 * (1 - \$t) * \$blurWidth, 2 * (1 - \$t) * \$blurHeight, 0, 90, \$colour, IMG_ARC_PIE);
\t\t\timagefilledarc(\$shadow, \$blurWidth - 1, \$height, 2 * (1 - \$t) * \$blurWidth, 2 * (1 - \$t) * \$blurHeight, 90, 180, \$colour, IMG_ARC_PIE);
\t\t}


\t\t\$colour = imagecolorallocate(\$shadow, 255, 255, 255);
\t\timagefilledrectangle(\$shadow, \$blurWidth, \$blurHeight, \$width, \$height, \$colour);
\t\timagefilledrectangle(\$shadow, \$blurWidth * 0.5 - \$distWidth, \$blurHeight * 0.5 - \$distHeight, \$width + \$blurWidth * 0.5 - 1 - \$distWidth, \$height + \$blurHeight * 0.5 - 1 - \$distHeight, \$colour);


\t\t// *** The magic
\t\timagealphablending(\$rgb, false);

\t\tfor (\$theX = 0; \$theX < imagesx(\$rgb); \$theX++)
\t\t{
\t\t\tfor (\$theY = 0; \$theY < imagesy(\$rgb); \$theY++)
\t\t\t{

\t\t\t\t// *** Get the RGB values for every pixel of the RGB image
\t\t\t\t\$colArray = imagecolorat(\$rgb, \$theX, \$theY);
\t\t\t\t\$r = (\$colArray >> 16) & 0xFF;
\t\t\t\t\$g = (\$colArray >> 8) & 0xFF;
\t\t\t\t\$b = \$colArray & 0xFF;

\t\t\t\t// *** Get the alpha value for every pixel of the shadow image
\t\t\t\t\$colArray = imagecolorat(\$shadow, \$theX, \$theY);
\t\t\t\t\$a = \$colArray & 0xFF;
\t\t\t\t\$a = 127 - floor(\$a / 2);
\t\t\t\t\$t = \$a / 128.0;

\t\t\t\t// *** Create color
\t\t\t\tif (fix_strtolower(\$bgColor) == 'transparent')
\t\t\t\t{
\t\t\t\t\t\$myColour = imagecolorallocatealpha(\$rgb, \$r, \$g, \$b, \$a);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$myColour = imagecolorallocate(\$rgb, \$r * (1.0 - \$t) + \$r0 * \$t, \$g * (1.0 - \$t) + \$g0 * \$t, \$b * (1.0 - \$t) + \$b0 * \$t);
\t\t\t\t}

\t\t\t\t// *** Add color to new rgb image
\t\t\t\timagesetpixel(\$rgb, \$theX, \$theY, \$myColour);
\t\t\t}
\t\t}

\t\timagealphablending(\$rgb, true);
\t\timagesavealpha(\$rgb, true);

\t\t\$this->imageResized = \$rgb;

\t\timagedestroy(\$image);
\t\timagedestroy(\$newImage);
\t\timagedestroy(\$shadow);
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Add Caption Box
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addCaptionBox(\$side = 'b', \$thickness = 50, \$padding = 0, \$bgColor = '#000', \$transaprencyAmount = 30)
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   26 May 2011
\t\t# Purpose:  Add a caption box
\t\t# Params in:  (str) \$side: the side to add the caption box (t, r, b, or l).
\t\t#       (int) \$thickness: how thick you want the caption box to be.
\t\t#       (mixed) \$bgColor: The color of the caption box.
\t\t#       (int) \$transaprencyAmount: The amount of transparency to be
\t\t#       applied.
\t\t# Params out: n/a
\t\t# Notes:
\t\t#
\t{
\t\t\$side = fix_strtolower(\$side);

\t\t// *** Convert color
\t\t\$rgbArray = \$this->formatColor(\$bgColor);
\t\t\$r = \$rgbArray['r'];
\t\t\$g = \$rgbArray['g'];
\t\t\$b = \$rgbArray['b'];

\t\t\$positionArray = \$this->calculateCaptionBoxPosition(\$side, \$thickness, \$padding);

\t\t// *** Store incase we want to use method addTextToCaptionBox()
\t\t\$this->captionBoxPositionArray = \$positionArray;


\t\t\$transaprencyAmount = \$this->invertTransparency(\$transaprencyAmount, 127, false);
\t\t\$transparent = imagecolorallocatealpha(\$this->imageResized, \$r, \$g, \$b, \$transaprencyAmount);
\t\timagefilledrectangle(\$this->imageResized, \$positionArray['x1'], \$positionArray['y1'], \$positionArray['x2'], \$positionArray['y2'], \$transparent);
\t}

\t## --------------------------------------------------------

\tpublic function addTextToCaptionBox(\$text, \$fontColor = '#fff', \$fontSize = 12, \$angle = 0, \$font = null)
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   03 Aug 11
\t\t# Purpose:  Simplify adding text to a caption box by automatically
\t\t#       locating the center of the caption box
\t\t# Params in:  The usually text paams (less a couple)
\t\t# Params out: n/a
\t\t# Notes:
\t\t#
\t{

\t\t// *** Get the caption box measurements
\t\tif (count(\$this->captionBoxPositionArray) == 4)
\t\t{
\t\t\t\$x1 = \$this->captionBoxPositionArray['x1'];
\t\t\t\$x2 = \$this->captionBoxPositionArray['x2'];
\t\t\t\$y1 = \$this->captionBoxPositionArray['y1'];
\t\t\t\$y2 = \$this->captionBoxPositionArray['y2'];
\t\t}
\t\telse
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('No caption box found.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn false;
\t\t\t}
\t\t}


\t\t// *** Get text font
\t\t\$font = \$this->getTextFont(\$font);

\t\t// *** Get text size
\t\t\$textSizeArray = \$this->getTextSize(\$fontSize, \$angle, \$font, \$text);
\t\t\$textWidth = \$textSizeArray['width'];
\t\t\$textHeight = \$textSizeArray['height'];

\t\t// *** Find the width/height middle points
\t\t\$boxXMiddle = ((\$x2 - \$x1) / 2);
\t\t\$boxYMiddle = ((\$y2 - \$y1) / 2);

\t\t// *** Box middle - half the text width/height
\t\t\$xPos = (\$x1 + \$boxXMiddle) - (\$textWidth / 2);
\t\t\$yPos = (\$y1 + \$boxYMiddle) - (\$textHeight / 2);

\t\t\$pos = \$xPos . 'x' . \$yPos;

\t\t\$this->addText(\$text, \$pos, \$padding = 0, \$fontColor, \$fontSize, \$angle, \$font);

\t}

\t## --------------------------------------------------------

\tprivate function calculateCaptionBoxPosition(\$side, \$thickness, \$padding)
\t{
\t\t\$positionArray = array();

\t\tswitch (\$side)
\t\t{
\t\t\tcase 't':
\t\t\t\t\$positionArray['x1'] = 0;
\t\t\t\t\$positionArray['y1'] = \$padding;
\t\t\t\t\$positionArray['x2'] = \$this->width;
\t\t\t\t\$positionArray['y2'] = \$thickness + \$padding;
\t\t\t\tbreak;
\t\t\tcase 'r':
\t\t\t\t\$positionArray['x1'] = \$this->width - \$thickness - \$padding;
\t\t\t\t\$positionArray['y1'] = 0;
\t\t\t\t\$positionArray['x2'] = \$this->width - \$padding;
\t\t\t\t\$positionArray['y2'] = \$this->height;
\t\t\t\tbreak;
\t\t\tcase 'b':
\t\t\t\t\$positionArray['x1'] = 0;
\t\t\t\t\$positionArray['y1'] = \$this->height - \$thickness - \$padding;
\t\t\t\t\$positionArray['x2'] = \$this->width;
\t\t\t\t\$positionArray['y2'] = \$this->height - \$padding;
\t\t\t\tbreak;
\t\t\tcase 'l':
\t\t\t\t\$positionArray['x1'] = \$padding;
\t\t\t\t\$positionArray['y1'] = 0;
\t\t\t\t\$positionArray['x2'] = \$thickness + \$padding;
\t\t\t\t\$positionArray['y2'] = \$this->height;
\t\t\t\tbreak;

\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t\treturn \$positionArray;

\t}

\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Get EXIF Data
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function getExif(\$debug = false)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       07-05-2011
\t\t# Purpose:    Get image EXIF data
\t\t# Param in:   n/a
\t\t# Param out:  An associate array of EXIF data
\t\t# Reference:
\t\t# Notes:
\t\t# 23 May 13 : added orientation flag -jco
\t\t#
\t{

\t\tif ( ! \$this->debug || ! \$debug)
\t\t{
\t\t\t\$debug = false;
\t\t}

\t\t// *** Check all is good - check the EXIF library exists and the file exists, too.
\t\tif ( ! \$this->testEXIFInstalled())
\t\t{
\t\t\tif (\$debug)
\t\t\t{
\t\t\t\tthrow new Exception('The EXIF Library is not installed.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn array();
\t\t\t}
\t\t};
\t\tif ( ! file_exists(\$this->fileName))
\t\t{
\t\t\tif (\$debug)
\t\t\t{
\t\t\t\tthrow new Exception('Image not found.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn array();
\t\t\t}
\t\t};
\t\tif (\$this->fileExtension != '.jpg')
\t\t{
\t\t\tif (\$debug)
\t\t\t{
\t\t\t\tthrow new Exception('Metadata not supported for this image type.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn array();
\t\t\t}
\t\t};
\t\t\$exifData = exif_read_data(\$this->fileName, 'IFD0');

\t\t// *** Format the apperture value
\t\t\$ev = \$exifData['ApertureValue'];
\t\t\$apPeicesArray = explode('/', \$ev);
\t\tif (count(\$apPeicesArray) == 2)
\t\t{
\t\t\t\$apertureValue = round(\$apPeicesArray[0] / \$apPeicesArray[1], 2, PHP_ROUND_HALF_DOWN) . ' EV';
\t\t}
\t\telse
\t\t{
\t\t\t\$apertureValue = '';
\t\t}

\t\t// *** Format the focal length
\t\t\$focalLength = \$exifData['FocalLength'];
\t\t\$flPeicesArray = explode('/', \$focalLength);
\t\tif (count(\$flPeicesArray) == 2)
\t\t{
\t\t\t\$focalLength = \$flPeicesArray[0] / \$flPeicesArray[1] . '.0 mm';
\t\t}
\t\telse
\t\t{
\t\t\t\$focalLength = '';
\t\t}

\t\t// *** Format fNumber
\t\t\$fNumber = \$exifData['FNumber'];
\t\t\$fnPeicesArray = explode('/', \$fNumber);
\t\tif (count(\$fnPeicesArray) == 2)
\t\t{
\t\t\t\$fNumber = \$fnPeicesArray[0] / \$fnPeicesArray[1];
\t\t}
\t\telse
\t\t{
\t\t\t\$fNumber = '';
\t\t}

\t\t// *** Resolve ExposureProgram
\t\tif (isset(\$exifData['ExposureProgram']))
\t\t{
\t\t\t\$ep = \$exifData['ExposureProgram'];
\t\t}
\t\tif (isset(\$ep))
\t\t{
\t\t\t\$ep = \$this->resolveExposureProgram(\$ep);
\t\t}


\t\t// *** Resolve MeteringMode
\t\t\$mm = \$exifData['MeteringMode'];
\t\t\$mm = \$this->resolveMeteringMode(\$mm);

\t\t// *** Resolve Flash
\t\t\$flash = \$exifData['Flash'];
\t\t\$flash = \$this->resolveFlash(\$flash);


\t\tif (isset(\$exifData['Make']))
\t\t{
\t\t\t\$exifDataArray['make'] = \$exifData['Make'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['make'] = '';
\t\t}

\t\tif (isset(\$exifData['Model']))
\t\t{
\t\t\t\$exifDataArray['model'] = \$exifData['Model'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['model'] = '';
\t\t}

\t\tif (isset(\$exifData['DateTime']))
\t\t{
\t\t\t\$exifDataArray['date'] = \$exifData['DateTime'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['date'] = '';
\t\t}

\t\tif (isset(\$exifData['ExposureTime']))
\t\t{
\t\t\t\$exifDataArray['exposure time'] = \$exifData['ExposureTime'] . ' sec.';
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['exposure time'] = '';
\t\t}

\t\tif (\$apertureValue != '')
\t\t{
\t\t\t\$exifDataArray['aperture value'] = \$apertureValue;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['aperture value'] = '';
\t\t}

\t\tif (isset(\$exifData['COMPUTED']['ApertureFNumber']))
\t\t{
\t\t\t\$exifDataArray['f-stop'] = \$exifData['COMPUTED']['ApertureFNumber'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['f-stop'] = '';
\t\t}

\t\tif (isset(\$exifData['FNumber']))
\t\t{
\t\t\t\$exifDataArray['fnumber'] = \$exifData['FNumber'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['fnumber'] = '';
\t\t}

\t\tif (\$fNumber != '')
\t\t{
\t\t\t\$exifDataArray['fnumber value'] = \$fNumber;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['fnumber value'] = '';
\t\t}

\t\tif (isset(\$exifData['ISOSpeedRatings']))
\t\t{
\t\t\t\$exifDataArray['iso'] = \$exifData['ISOSpeedRatings'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['iso'] = '';
\t\t}

\t\tif (\$focalLength != '')
\t\t{
\t\t\t\$exifDataArray['focal length'] = \$focalLength;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['focal length'] = '';
\t\t}

\t\tif (isset(\$ep))
\t\t{
\t\t\t\$exifDataArray['exposure program'] = \$ep;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['exposure program'] = '';
\t\t}

\t\tif (\$mm != '')
\t\t{
\t\t\t\$exifDataArray['metering mode'] = \$mm;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['metering mode'] = '';
\t\t}

\t\tif (\$flash != '')
\t\t{
\t\t\t\$exifDataArray['flash status'] = \$flash;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['flash status'] = '';
\t\t}

\t\tif (isset(\$exifData['Artist']))
\t\t{
\t\t\t\$exifDataArray['creator'] = \$exifData['Artist'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['creator'] = '';
\t\t}

\t\tif (isset(\$exifData['Copyright']))
\t\t{
\t\t\t\$exifDataArray['copyright'] = \$exifData['Copyright'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['copyright'] = '';
\t\t}

\t\t// *** Orientation
\t\tif (isset(\$exifData['Orientation']))
\t\t{
\t\t\t\$exifDataArray['orientation'] = \$exifData['Orientation'];
\t\t}
\t\telse
\t\t{
\t\t\t\$exifDataArray['orientation'] = '';
\t\t}

\t\treturn \$exifDataArray;
\t}

\t## --------------------------------------------------------

\tprivate function resolveExposureProgram(\$ep)
\t{
\t\tswitch (\$ep)
\t\t{
\t\t\tcase 0:
\t\t\t\t\$ep = '';
\t\t\t\tbreak;
\t\t\tcase 1:
\t\t\t\t\$ep = 'manual';
\t\t\t\tbreak;
\t\t\tcase 2:
\t\t\t\t\$ep = 'normal program';
\t\t\t\tbreak;
\t\t\tcase 3:
\t\t\t\t\$ep = 'aperture priority';
\t\t\t\tbreak;
\t\t\tcase 4:
\t\t\t\t\$ep = 'shutter priority';
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\t\$ep = 'creative program';
\t\t\t\tbreak;
\t\t\tcase 6:
\t\t\t\t\$ep = 'action program';
\t\t\t\tbreak;
\t\t\tcase 7:
\t\t\t\t\$ep = 'portrait mode';
\t\t\t\tbreak;
\t\t\tcase 8:
\t\t\t\t\$ep = 'landscape mode';
\t\t\t\tbreak;

\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t\treturn \$ep;
\t}

\t## --------------------------------------------------------

\tprivate function resolveMeteringMode(\$mm)
\t{
\t\tswitch (\$mm)
\t\t{
\t\t\tcase 0:
\t\t\t\t\$mm = 'unknown';
\t\t\t\tbreak;
\t\t\tcase 1:
\t\t\t\t\$mm = 'average';
\t\t\t\tbreak;
\t\t\tcase 2:
\t\t\t\t\$mm = 'center weighted average';
\t\t\t\tbreak;
\t\t\tcase 3:
\t\t\t\t\$mm = 'spot';
\t\t\t\tbreak;
\t\t\tcase 4:
\t\t\t\t\$mm = 'multi spot';
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\t\$mm = 'pattern';
\t\t\t\tbreak;
\t\t\tcase 6:
\t\t\t\t\$mm = 'partial';
\t\t\t\tbreak;
\t\t\tcase 255:
\t\t\t\t\$mm = 'other';
\t\t\t\tbreak;

\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t\treturn \$mm;
\t}

\t## --------------------------------------------------------

\tprivate function resolveFlash(\$flash)
\t{
\t\tswitch (\$flash)
\t\t{
\t\t\tcase 0:
\t\t\t\t\$flash = 'flash did not fire';
\t\t\t\tbreak;
\t\t\tcase 1:
\t\t\t\t\$flash = 'flash fired';
\t\t\t\tbreak;
\t\t\tcase 5:
\t\t\t\t\$flash = 'strobe return light not detected';
\t\t\t\tbreak;
\t\t\tcase 7:
\t\t\t\t\$flash = 'strobe return light detected';
\t\t\t\tbreak;
\t\t\tcase 9:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode';
\t\t\t\tbreak;
\t\t\tcase 13:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, return light not detected';
\t\t\t\tbreak;
\t\t\tcase 15:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, return light detected';
\t\t\t\tbreak;
\t\t\tcase 16:
\t\t\t\t\$flash = 'flash did not fire, compulsory flash mode';
\t\t\t\tbreak;
\t\t\tcase 24:
\t\t\t\t\$flash = 'flash did not fire, auto mode';
\t\t\t\tbreak;
\t\t\tcase 25:
\t\t\t\t\$flash = 'flash fired, auto mode';
\t\t\t\tbreak;
\t\t\tcase 29:
\t\t\t\t\$flash = 'flash fired, auto mode, return light not detected';
\t\t\t\tbreak;
\t\t\tcase 31:
\t\t\t\t\$flash = 'flash fired, auto mode, return light detected';
\t\t\t\tbreak;
\t\t\tcase 32:
\t\t\t\t\$flash = 'no flash function';
\t\t\t\tbreak;
\t\t\tcase 65:
\t\t\t\t\$flash = 'flash fired, red-eye reduction mode';
\t\t\t\tbreak;
\t\t\tcase 69:
\t\t\t\t\$flash = 'flash fired, red-eye reduction mode, return light not detected';
\t\t\t\tbreak;
\t\t\tcase 71:
\t\t\t\t\$flash = 'flash fired, red-eye reduction mode, return light detected';
\t\t\t\tbreak;
\t\t\tcase 73:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, red-eye reduction mode';
\t\t\t\tbreak;
\t\t\tcase 77:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, red-eye reduction mode, return light not detected';
\t\t\t\tbreak;
\t\t\tcase 79:
\t\t\t\t\$flash = 'flash fired, compulsory flash mode, red-eye reduction mode, return light detected';
\t\t\t\tbreak;
\t\t\tcase 89:
\t\t\t\t\$flash = 'flash fired, auto mode, red-eye reduction mode';
\t\t\t\tbreak;
\t\t\tcase 93:
\t\t\t\t\$flash = 'flash fired, auto mode, return light not detected, red-eye reduction mode';
\t\t\t\tbreak;
\t\t\tcase 95:
\t\t\t\t\$flash = 'flash fired, auto mode, return light detected, red-eye reduction mode';
\t\t\t\tbreak;

\t\t\tdefault:
\t\t\t\tbreak;
\t\t}

\t\treturn \$flash;

\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Get IPTC Data
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Write IPTC Data
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function writeIPTCcaption(\$value)
\t\t# Caption
\t{
\t\t\$this->writeIPTC(120, \$value);
\t}

\t## --------------------------------------------------------

\tpublic function writeIPTCwriter(\$value)
\t{
\t\t//\$this->writeIPTC(65, \$value);
\t}

\t## --------------------------------------------------------

\tprivate function writeIPTC(\$dat, \$value)
\t{

\t\t# LIMIT TO JPG

\t\t\$caption_block = \$this->iptc_maketag(2, \$dat, \$value);
\t\t\$image_string = iptcembed(\$caption_block, \$this->fileName);
\t\tfile_put_contents('iptc.jpg', \$image_string);
\t}

## --------------------------------------------------------

\tprivate function iptc_maketag(\$rec, \$dat, \$val)
\t\t# Author:   Thies C. Arntzen
\t\t# Purpose:    Function to format the new IPTC text
\t\t# Param in:   \$rec: Application record. (We’re working with #2)
\t\t#       \$dat: Index. (120 for caption, 118 for contact. See the IPTC IIM
\t\t#         specification:
\t\t#         http://www.iptc.org/std/IIM/4.1/specification/IIMV4.1.pdf
\t\t#       \$val: Value/data/text. Make sure this is within the length
\t\t#         constraints of the IPTC IIM specification
\t\t# Ref:      http://blog.peterhaza.no/working-with-image-meta-data-in-exif-and-iptc-headers-from-php/
\t\t#       http://php.net/manual/en/function.iptcembed.php
\t\t#
\t{
\t\t\$len = strlen(\$val);
\t\tif (\$len < 0x8000)
\t\t{
\t\t\treturn chr(0x1c) . chr(\$rec) . chr(\$dat) .
\t\t\tchr(\$len >> 8) .
\t\t\tchr(\$len & 0xff) .
\t\t\t\$val;
\t\t}
\t\telse
\t\t{
\t\t\treturn chr(0x1c) . chr(\$rec) . chr(\$dat) .
\t\t\tchr(0x80) . chr(0x04) .
\t\t\tchr((\$len >> 24) & 0xff) .
\t\t\tchr((\$len >> 16) & 0xff) .
\t\t\tchr((\$len >> 8) & 0xff) .
\t\t\tchr((\$len) & 0xff) .
\t\t\t\$val;
\t\t}
\t}



\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Write XMP Data
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\t//http://xmpphptoolkit.sourceforge.net/


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Add Text
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addText(\$text, \$pos = '20x20', \$padding = 0, \$fontColor = '#fff', \$fontSize = 12, \$angle = 0, \$font = null)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       18-11-09
\t\t# Purpose:    Add text to an image
\t\t# Param in:
\t\t# Param out:
\t\t# Reference:  http://php.net/manual/en/function.imagettftext.php
\t\t# Notes:      Make sure you supply the font.
\t\t#
\t{

\t\t// *** Convert color
\t\t\$rgbArray = \$this->formatColor(\$fontColor);
\t\t\$r = \$rgbArray['r'];
\t\t\$g = \$rgbArray['g'];
\t\t\$b = \$rgbArray['b'];

\t\t// *** Get text font
\t\t\$font = \$this->getTextFont(\$font);

\t\t// *** Get text size
\t\t\$textSizeArray = \$this->getTextSize(\$fontSize, \$angle, \$font, \$text);
\t\t\$textWidth = \$textSizeArray['width'];
\t\t\$textHeight = \$textSizeArray['height'];

\t\t// *** Find co-ords to place text
\t\t\$posArray = \$this->calculatePosition(\$pos, \$padding, \$textWidth, \$textHeight, false);
\t\t\$x = \$posArray['width'];
\t\t\$y = \$posArray['height'];

\t\t\$fontColor = imagecolorallocate(\$this->imageResized, \$r, \$g, \$b);

\t\t// *** Add text
\t\timagettftext(\$this->imageResized, \$fontSize, \$angle, \$x, \$y, \$fontColor, \$font, \$text);
\t}

\t## --------------------------------------------------------

\tprivate function getTextFont(\$font)
\t{
\t\t// *** Font path (shou
\t\t\$fontPath = dirname(__FILE__) . '/' . \$this->fontDir;


\t\t// *** The below is/may be needed depending on your version (see ref)
\t\tputenv('GDFONTPATH=' . realpath('.'));

\t\t// *** Check if the passed in font exsits...
\t\tif (\$font == null || ! file_exists(\$font))
\t\t{

\t\t\t// *** ...If not, default to this font.
\t\t\t\$font = \$fontPath . '/arimo.ttf';

\t\t\t// *** Check our default font exists...
\t\t\tif ( ! file_exists(\$font))
\t\t\t{

\t\t\t\t// *** If not, return false
\t\t\t\tif (\$this->debug)
\t\t\t\t{
\t\t\t\t\tthrow new Exception('Font not found');
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn \$font;

\t}

\t## --------------------------------------------------------

\tprivate function getTextSize(\$fontSize, \$angle, \$font, \$text)
\t{

\t\t// *** Define box (so we can get the width)
\t\t\$box = @imageTTFBbox(\$fontSize, \$angle, \$font, \$text);

\t\t// ***  Get width of text from dimensions
\t\t\$textWidth = abs(\$box[4] - \$box[0]);

\t\t// ***  Get height of text from dimensions (should also be same as \$fontSize)
\t\t\$textHeight = abs(\$box[5] - \$box[1]);

\t\treturn array( 'height' => \$textHeight, 'width' => \$textWidth );
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  Add Watermark
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tpublic function addWatermark(\$watermarkImage, \$pos, \$padding = 0, \$opacity = 0)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       18-11-09
\t\t# Purpose:    Add watermark image
\t\t# Param in:   (str) \$watermark: The watermark image
\t\t#       (str) \$pos: Could be a pre-determined position such as:
\t\t#           tl = top left,
\t\t#           t  = top (middle),
\t\t#           tr = top right,
\t\t#           l  = left,
\t\t#           m  = middle,
\t\t#           r  = right,
\t\t#           bl = bottom left,
\t\t#           b  = bottom (middle),
\t\t#           br = bottom right
\t\t#         Or, it could be a co-ordinate position such as: 50x100
\t\t#
\t\t#       (int) \$padding: If using a pre-determined position you can
\t\t#         adjust the padding from the edges by passing an amount
\t\t#         in pixels. If using co-ordinates, this value is ignored.
\t\t# Param out:
\t\t# Reference:  http://www.php.net/manual/en/image.examples-watermark.php
\t\t# Notes:      Based on example in reference.
\t\t#
\t\t#
\t{

\t\t// Load the stamp and the photo to apply the watermark to
\t\t\$stamp = \$this->openImage(\$watermarkImage);    # stamp
\t\t\$im = \$this->imageResized;            # photo

\t\t// *** Get stamps width and height
\t\t\$sx = imagesx(\$stamp);
\t\t\$sy = imagesy(\$stamp);

\t\t// *** Find co-ords to place image
\t\t\$posArray = \$this->calculatePosition(\$pos, \$padding, \$sx, \$sy);
\t\t\$x = \$posArray['width'];
\t\t\$y = \$posArray['height'];

\t\t// *** Set watermark opacity
\t\tif (fix_strtolower(strrchr(\$watermarkImage, '.')) == '.png')
\t\t{

\t\t\t\$opacity = \$this->invertTransparency(\$opacity, 100);
\t\t\t\$this->filterOpacity(\$stamp, \$opacity);
\t\t}

\t\t// Copy the watermark image onto our photo
\t\timagecopy(\$im, \$stamp, \$x, \$y, 0, 0, imagesx(\$stamp), imagesy(\$stamp));

\t}

\t## --------------------------------------------------------

\tprivate function calculatePosition(\$pos, \$padding, \$assetWidth, \$assetHeight, \$upperLeft = true)
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   08-05-11
\t\t# Purpose:  Calculate the x, y pixel cordinates of the asset to place
\t\t# Params in:  (str) \$pos: Either something like: \"tl\", \"l\", \"br\" or an
\t\t#         exact position like: \"100x50\"
\t\t#       (int) \$padding: The amount of padding from the edge. Only
\t\t#         used for the predefined \$pos.
\t\t#       (int) \$assetWidth: The width of the asset to add to the image
\t\t#       (int) \$assetHeight: The height of the asset to add to the image
\t\t#       (bol) \$upperLeft: if true, the asset will be positioned based
\t\t#         on the upper left x, y coords. If false, it means you're
\t\t#         using the lower left as the basepoint and this will
\t\t#         convert it to the upper left position
\t\t# Params out:
\t\t# NOTE: this is done from the UPPER left corner!! But will convert lower
\t\t#   left basepoints to upper left if \$upperleft is set to false
\t\t#
\t\t#
\t{
\t\t\$pos = fix_strtolower(\$pos);

\t\t// *** If co-ords have been entered
\t\tif (strstr(\$pos, 'x'))
\t\t{
\t\t\t\$pos = str_replace(' ', '', \$pos);

\t\t\t\$xyArray = explode('x', \$pos);
\t\t\tlist(\$width, \$height) = \$xyArray;

\t\t}
\t\telse
\t\t{

\t\t\tswitch (\$pos)
\t\t\t{
\t\t\t\tcase 'tl':
\t\t\t\t\t\$width = 0 + \$padding;
\t\t\t\t\t\$height = 0 + \$padding;
\t\t\t\t\tbreak;

\t\t\t\tcase 't':
\t\t\t\t\t\$width = (\$this->width / 2) - (\$assetWidth / 2);
\t\t\t\t\t\$height = 0 + \$padding;
\t\t\t\t\tbreak;

\t\t\t\tcase 'tr':
\t\t\t\t\t\$width = \$this->width - \$assetWidth - \$padding;
\t\t\t\t\t\$height = 0 + \$padding;;
\t\t\t\t\tbreak;

\t\t\t\tcase 'l':
\t\t\t\t\t\$width = 0 + \$padding;
\t\t\t\t\t\$height = (\$this->height / 2) - (\$assetHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'm':
\t\t\t\t\t\$width = (\$this->width / 2) - (\$assetWidth / 2);
\t\t\t\t\t\$height = (\$this->height / 2) - (\$assetHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'r':
\t\t\t\t\t\$width = \$this->width - \$assetWidth - \$padding;
\t\t\t\t\t\$height = (\$this->height / 2) - (\$assetHeight / 2);
\t\t\t\t\tbreak;

\t\t\t\tcase 'bl':
\t\t\t\t\t\$width = 0 + \$padding;
\t\t\t\t\t\$height = \$this->height - \$assetHeight - \$padding;
\t\t\t\t\tbreak;

\t\t\t\tcase 'b':
\t\t\t\t\t\$width = (\$this->width / 2) - (\$assetWidth / 2);
\t\t\t\t\t\$height = \$this->height - \$assetHeight - \$padding;
\t\t\t\t\tbreak;

\t\t\t\tcase 'br':
\t\t\t\t\t\$width = \$this->width - \$assetWidth - \$padding;
\t\t\t\t\t\$height = \$this->height - \$assetHeight - \$padding;
\t\t\t\t\tbreak;

\t\t\t\tdefault:
\t\t\t\t\t\$width = 0;
\t\t\t\t\t\$height = 0;
\t\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\tif ( ! \$upperLeft)
\t\t{
\t\t\t\$height = \$height + \$assetHeight;
\t\t}

\t\treturn array( 'width' => \$width, 'height' => \$height );
\t}


\t## --------------------------------------------------------

\tprivate function filterOpacity(&\$img, \$opacity = 75)
\t\t#
\t\t# Author:     aiden dot mail at freemail dot hu
\t\t# Author date:  29-03-08 08:16
\t\t# Date added:   08-05-11
\t\t# Purpose:    Change opacity of image
\t\t# Params in:    \$img: Image resource id
\t\t#         (int) \$opacity: the opacity amount: 0-100, 100 being not opaque.
\t\t# Params out:   (bool) true on success, else false
\t\t# Ref:      http://www.php.net/manual/en/function.imagefilter.php#82162
\t\t# Notes:      png only
\t\t#
\t{

\t\tif ( ! isset(\$opacity))
\t\t{
\t\t\treturn false;
\t\t}

\t\tif (\$opacity == 100)
\t\t{
\t\t\treturn true;
\t\t}

\t\t\$opacity /= 100;

\t\t//get image width and height
\t\t\$w = imagesx(\$img);
\t\t\$h = imagesy(\$img);

\t\t//turn alpha blending off
\t\timagealphablending(\$img, false);

\t\t//find the most opaque pixel in the image (the one with the smallest alpha value)
\t\t\$minalpha = 127;
\t\tfor (\$x = 0; \$x < \$w; \$x++)
\t\t{
\t\t\tfor (\$y = 0; \$y < \$h; \$y++)
\t\t\t{
\t\t\t\t\$alpha = (imagecolorat(\$img, \$x, \$y) >> 24) & 0xFF;
\t\t\t\tif (\$alpha < \$minalpha)
\t\t\t\t{
\t\t\t\t\t\$minalpha = \$alpha;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t//loop through image pixels and modify alpha for each
\t\tfor (\$x = 0; \$x < \$w; \$x++)
\t\t{
\t\t\tfor (\$y = 0; \$y < \$h; \$y++)
\t\t\t{
\t\t\t\t//get current alpha value (represents the TANSPARENCY!)
\t\t\t\t\$colorxy = imagecolorat(\$img, \$x, \$y);
\t\t\t\t\$alpha = (\$colorxy >> 24) & 0xFF;
\t\t\t\t//calculate new alpha
\t\t\t\tif (\$minalpha !== 127)
\t\t\t\t{
\t\t\t\t\t\$alpha = 127 + 127 * \$opacity * (\$alpha - 127) / (127 - \$minalpha);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$alpha += 127 * \$opacity;
\t\t\t\t}
\t\t\t\t//get the color index with new alpha
\t\t\t\t\$alphacolorxy = imagecolorallocatealpha(\$img, (\$colorxy >> 16) & 0xFF, (\$colorxy >> 8) & 0xFF, \$colorxy & 0xFF, \$alpha);
\t\t\t\t//set pixel with the new color + opacity
\t\t\t\tif ( ! imagesetpixel(\$img, \$x, \$y, \$alphacolorxy))
\t\t\t\t{

\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn true;
\t}

## --------------------------------------------------------

\tprivate function openImage(\$file)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:
\t\t# Param in:
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\tif ( ! file_exists(\$file) && ! \$this->checkStringStartsWith('http://', \$file) && ! \$this->checkStringStartsWith('https://', \$file) )
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('Image not found.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t};

\t\t// *** Get extension
\t\t\$extension = strrchr(\$file, '.');
\t\t\$extension = fix_strtolower(\$extension);
\t\tswitch (\$extension)
\t\t{
\t\t\tcase '.jpg':
\t\t\tcase '.jpeg':
\t\t\t\t\$img = @imagecreatefromjpeg(\$file);
\t\t\t\tbreak;
\t\t\tcase '.gif':
\t\t\t\t\$img = @imagecreatefromgif(\$file);
\t\t\t\tbreak;
\t\t\tcase '.png':
\t\t\t\t\$img = @imagecreatefrompng(\$file);
\t\t\t\tbreak;
\t\t\tcase '.bmp':
\t\t\t\t\$img = @\$this->imagecreatefrombmp(\$file);
\t\t\t\tbreak;
\t\t\tcase '.psd':
\t\t\t\t\$img = @\$this->imagecreatefrompsd(\$file);
\t\t\t\tbreak;


\t\t\t// ... etc

\t\t\tdefault:
\t\t\t\t\$img = false;
\t\t\t\tbreak;
\t\t}

\t\treturn \$img;
\t}

## --------------------------------------------------------

\tpublic function reset()
\t\t#
\t\t# Author:   Jarrod Oberto
\t\t# Date:   30-08-11
\t\t# Purpose:  Reset the resource (allow further editing)
\t\t# Params in:
\t\t# Params out:
\t\t# Notes:
\t\t#
\t{
\t\t\$this->__construct(\$this->fileName);
\t}

## --------------------------------------------------------

\tpublic function saveImage(\$savePath, \$imageQuality = \"100\")
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Saves the image
\t\t# Param in:   \$savePath: Where to save the image including filename:
\t\t#             \$imageQuality: image quality you want the image saved at 0-100
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:    * gif doesn't have a quality parameter
\t\t#       * jpg has a quality setting 0-100 (100 being the best)
\t\t#       * png has a quality setting 0-9 (0 being the best)
\t\t#
\t\t#             * bmp files have no native support for bmp files. We use a
\t\t#       third party class to save as bmp.
\t{

\t\t// *** Perform a check or two.
\t\tif ( ! is_resource(\$this->imageResized))
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('saveImage: This is not a resource.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t}
\t\t\$fileInfoArray = pathInfo(\$savePath);
\t\tclearstatcache();
\t\tif ( ! is_writable(\$fileInfoArray['dirname']))
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('The path is not writable. Please check your permissions.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t}

\t\t// *** Get extension
\t\t\$extension = strrchr(\$savePath, '.');
\t\t\$extension = fix_strtolower(\$extension);

\t\t\$error = '';

\t\tswitch (\$extension)
\t\t{
\t\t\tcase '.jpg':
\t\t\tcase '.jpeg':
\t\t\t\t\$this->checkInterlaceImage(\$this->isInterlace);
\t\t\t\tif (imagetypes() & IMG_JPG)
\t\t\t\t{
\t\t\t\t\timagejpeg(\$this->imageResized, \$savePath, \$imageQuality);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$error = 'jpg';
\t\t\t\t}
\t\t\t\tbreak;

\t\t\tcase '.gif':
\t\t\t\t\$this->checkInterlaceImage(\$this->isInterlace);
\t\t\t\tif (imagetypes() & IMG_GIF)
\t\t\t\t{
\t\t\t\t\timagegif(\$this->imageResized, \$savePath);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$error = 'gif';
\t\t\t\t}
\t\t\t\tbreak;

\t\t\tcase '.png':
\t\t\t\t// *** Scale quality from 0-100 to 0-9
\t\t\t\t\$scaleQuality = round((\$imageQuality / 100) * 9);

\t\t\t\t// *** Invert qualit setting as 0 is best, not 9
\t\t\t\t\$invertScaleQuality = 9 - \$scaleQuality;

\t\t\t\t\$this->checkInterlaceImage(\$this->isInterlace);
\t\t\t\tif (imagetypes() & IMG_PNG)
\t\t\t\t{
\t\t\t\t\timagepng(\$this->imageResized, \$savePath, \$invertScaleQuality);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$error = 'png';
\t\t\t\t}
\t\t\t\tbreak;

\t\t\tcase '.bmp':
\t\t\t\tfile_put_contents(\$savePath, \$this->GD2BMPstring(\$this->imageResized));
\t\t\t\tbreak;


\t\t\t// ... etc

\t\t\tdefault:
\t\t\t\t// *** No extension - No save.
\t\t\t\t\$this->errorArray[] = 'This file type (' . \$extension . ') is not supported. File not saved.';
\t\t\t\tbreak;
\t\t}

\t\t//imagedestroy(\$this->imageResized);

\t\t// *** Display error if a file type is not supported.
\t\tif (\$error != '')
\t\t{
\t\t\t\$this->errorArray[] = \$error . ' support is NOT enabled. File not saved.';
\t\t}
\t}

## --------------------------------------------------------

\tpublic function displayImage(\$fileType = 'jpg', \$imageQuality = \"100\")
\t\t# Author:     Jarrod Oberto
\t\t# Date:       18-11-09
\t\t# Purpose:    Display images directly to the browser
\t\t# Param in:   The image type you want to display
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{

\t\tif ( ! is_resource(\$this->imageResized))
\t\t{
\t\t\tif (\$this->debug)
\t\t\t{
\t\t\t\tthrow new Exception('saveImage: This is not a resource.');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tthrow new Exception();
\t\t\t}
\t\t}

\t\tswitch (\$fileType)
\t\t{
\t\t\tcase 'jpg':
\t\t\tcase 'jpeg':
\t\t\t\theader('Content-type: image/jpeg');
\t\t\t\timagejpeg(\$this->imageResized, '', \$imageQuality);
\t\t\t\tbreak;
\t\t\tcase 'gif':
\t\t\t\theader('Content-type: image/gif');
\t\t\t\timagegif(\$this->imageResized);
\t\t\t\tbreak;
\t\t\tcase 'png':
\t\t\t\theader('Content-type: image/png');

\t\t\t\t// *** Scale quality from 0-100 to 0-9
\t\t\t\t\$scaleQuality = round((\$imageQuality / 100) * 9);

\t\t\t\t// *** Invert qualit setting as 0 is best, not 9
\t\t\t\t\$invertScaleQuality = 9 - \$scaleQuality;

\t\t\t\timagepng(\$this->imageResized, '', \$invertScaleQuality);
\t\t\t\tbreak;
\t\t\tcase 'bmp':
\t\t\t\techo 'bmp file format is not supported.';
\t\t\t\tbreak;

\t\t\t// ... etc

\t\t\tdefault:
\t\t\t\t// *** No extension - No save.
\t\t\t\tbreak;
\t\t}


\t\t//imagedestroy(\$this->imageResized);
\t}

## --------------------------------------------------------

\tpublic function setTransparency(\$bool)
\t\t# Sep 2011
\t{
\t\t\$this->keepTransparency = \$bool;
\t}

## --------------------------------------------------------

\tpublic function setFillColor(\$value)
\t\t# Sep 2011
\t\t# Param in:   (mixed) \$value: (array) Could be an array of RGB
\t\t#               (str) Could be hex #ffffff or #fff, fff, ffffff
\t\t#
\t\t# If the keepTransparency is set to false, then no transparency is to be used.
\t\t# This is ideal when you want to save as jpg.
\t\t#
\t\t# this method allows you to set the background color to use instead of
\t\t# transparency.
\t\t#
\t{
\t\t\$colorArray = \$this->formatColor(\$value);
\t\t\$this->fillColorArray = \$colorArray;
\t}

## --------------------------------------------------------

\tpublic function setCropFromTop(\$value)
\t\t# Sep 2011
\t{
\t\t\$this->cropFromTopPercent = \$value;
\t}

## --------------------------------------------------------

\tpublic function testGDInstalled()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Test to see if GD is installed
\t\t# Param in:   n/a
\t\t# Param out:  (bool) True is gd extension loaded otherwise false
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (extension_loaded('gd') && function_exists('gd_info'))
\t\t{
\t\t\t\$gdInstalled = true;
\t\t}
\t\telse
\t\t{
\t\t\t\$gdInstalled = false;
\t\t}

\t\treturn \$gdInstalled;
\t}

## --------------------------------------------------------

\tpublic function testEXIFInstalled()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       08-05-11
\t\t# Purpose:    Test to see if EXIF is installed
\t\t# Param in:   n/a
\t\t# Param out:  (bool) True is exif extension loaded otherwise false
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (extension_loaded('exif'))
\t\t{
\t\t\t\$exifInstalled = true;
\t\t}
\t\telse
\t\t{
\t\t\t\$exifInstalled = false;
\t\t}

\t\treturn \$exifInstalled;
\t}

## --------------------------------------------------------

\tpublic function testIsImage(\$image)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Test if file is an image
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif (\$image)
\t\t{
\t\t\t\$fileIsImage = true;
\t\t}
\t\telse
\t\t{
\t\t\t\$fileIsImage = false;
\t\t}

\t\treturn \$fileIsImage;
\t}

## --------------------------------------------------------

\tpublic function testFunct()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       27-02-08
\t\t# Purpose:    Test Function
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\techo \$this->height;
\t}

## --------------------------------------------------------

\tpublic function setForceStretch(\$value)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       23-12-10
\t\t# Purpose:
\t\t# Param in:   (bool) \$value
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t\$this->forceStretch = \$value;
\t}

## --------------------------------------------------------

\tpublic function setFile(\$fileName)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       28-02-08
\t\t# Purpose:
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tself::__construct(\$fileName);
\t}

## --------------------------------------------------------

\tpublic function getFileName()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       10-09-08
\t\t# Purpose:
\t\t# Param in:   n/a
\t\t# Param out:  n/a
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\treturn \$this->fileName;
\t}

## --------------------------------------------------------

\tpublic function getHeight()
\t{
\t\treturn \$this->height;
\t}

## --------------------------------------------------------

\tpublic function getWidth()
\t{
\t\treturn \$this->width;
\t}

## --------------------------------------------------------

\tpublic function getOriginalHeight()
\t{
\t\treturn \$this->heightOriginal;
\t}

## --------------------------------------------------------

\tpublic function getOriginalWidth()
\t{
\t\treturn \$this->widthOriginal;
\t}

## --------------------------------------------------------

\tpublic function getErrors()
\t\t# Author:     Jarrod Oberto
\t\t# Date:       19-11-09
\t\t# Purpose:    Returns the error array
\t\t# Param in:   n/a
\t\t# Param out:  Array of errors
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\treturn \$this->errorArray;
\t}

## --------------------------------------------------------

\tprivate function checkInterlaceImage(\$isEnabled)
\t\t# jpg will use progressive (they don't use interace)
\t{
\t\tif (\$isEnabled)
\t\t{
\t\t\timageinterlace(\$this->imageResized, \$isEnabled);
\t\t}
\t}

## --------------------------------------------------------

\tprotected function formatColor(\$value)
\t\t# Author:     Jarrod Oberto
\t\t# Date:       09-05-11
\t\t# Purpose:    Determine color method passed in and return color as RGB
\t\t# Param in:   (mixed) \$value: (array) Could be an array of RGB
\t\t#               (str) Could be hex #ffffff or #fff, fff, ffffff
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t\$rgbArray = array();

\t\t// *** If it's an array it should be R, G, B
\t\tif (is_array(\$value))
\t\t{

\t\t\tif (key(\$value) == 0 && count(\$value) == 3)
\t\t\t{

\t\t\t\t\$rgbArray['r'] = \$value[0];
\t\t\t\t\$rgbArray['g'] = \$value[1];
\t\t\t\t\$rgbArray['b'] = \$value[2];

\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$rgbArray = \$value;
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tif (fix_strtolower(\$value) == 'transparent')
\t\t\t{

\t\t\t\t\$rgbArray = array(
\t\t\t\t\t'r' => 255,
\t\t\t\t\t'g' => 255,
\t\t\t\t\t'b' => 255,
\t\t\t\t\t'a' => 127
\t\t\t\t);

\t\t\t}
\t\t\telse
\t\t\t{

\t\t\t\t// *** ...Else it should be hex. Let's make it RGB
\t\t\t\t\$rgbArray = \$this->hex2dec(\$value);
\t\t\t}
\t\t}

\t\treturn \$rgbArray;
\t}

\t## --------------------------------------------------------

\tfunction hex2dec(\$hex)
\t\t# Purpose:  Convert #hex color to RGB
\t{
\t\t\$color = str_replace('#', '', \$hex);

\t\tif (strlen(\$color) == 3)
\t\t{
\t\t\t\$color = \$color . \$color;
\t\t}

\t\t\$rgb = array(
\t\t\t'r' => hexdec(substr(\$color, 0, 2)),
\t\t\t'g' => hexdec(substr(\$color, 2, 2)),
\t\t\t'b' => hexdec(substr(\$color, 4, 2)),
\t\t\t'a' => 0
\t\t);

\t\treturn \$rgb;
\t}

\t## --------------------------------------------------------

\tprivate function createImageColor(\$colorArray)
\t{
\t\t\$r = \$colorArray['r'];
\t\t\$g = \$colorArray['g'];
\t\t\$b = \$colorArray['b'];

\t\treturn imagecolorallocate(\$this->imageResized, \$r, \$g, \$b);
\t}

\t## --------------------------------------------------------

\tprivate function testColorExists(\$colorArray)
\t{
\t\t\$r = \$colorArray['r'];
\t\t\$g = \$colorArray['g'];
\t\t\$b = \$colorArray['b'];

\t\tif (imagecolorexact(\$this->imageResized, \$r, \$g, \$b) == -1)
\t\t{
\t\t\treturn false;
\t\t}
\t\telse
\t\t{
\t\t\treturn true;
\t\t}
\t}

\t## --------------------------------------------------------

\tprivate function findUnusedGreen()
\t\t# Purpose:  We find a green color suitable to use like green-screen effect.
\t\t#     Therefore, the color must not exist in the image.
\t{
\t\t\$green = 255;

\t\tdo
\t\t{

\t\t\t\$greenChroma = array( 0, \$green, 0 );
\t\t\t\$colorArray = \$this->formatColor(\$greenChroma);
\t\t\t\$match = \$this->testColorExists(\$colorArray);
\t\t\t\$green--;

\t\t} while (\$match == false && \$green > 0);

\t\t// *** If no match, just bite the bullet and use green value of 255
\t\tif ( ! \$match)
\t\t{
\t\t\t\$greenChroma = array( 0, \$green, 0 );
\t\t}

\t\treturn \$greenChroma;
\t}

\t## --------------------------------------------------------

\tprivate function findUnusedBlue()
\t\t# Purpose:  We find a green color suitable to use like green-screen effect.
\t\t#     Therefore, the color must not exist in the image.
\t{
\t\t\$blue = 255;

\t\tdo
\t\t{

\t\t\t\$blueChroma = array( 0, 0, \$blue );
\t\t\t\$colorArray = \$this->formatColor(\$blueChroma);
\t\t\t\$match = \$this->testColorExists(\$colorArray);
\t\t\t\$blue--;

\t\t} while (\$match == false && \$blue > 0);

\t\t// *** If no match, just bite the bullet and use blue value of 255
\t\tif ( ! \$match)
\t\t{
\t\t\t\$blueChroma = array( 0, 0, \$blue );
\t\t}

\t\treturn \$blueChroma;
\t}

\t## --------------------------------------------------------

\tprivate function invertTransparency(\$value, \$originalMax, \$invert = true)
\t\t# Purpose:  This does two things:
\t\t#       1) Convert the range from 0-127 to 0-100
\t\t#       2) Inverts value to 100 is not transparent while 0 is fully
\t\t#          transparent (like Photoshop)
\t{
\t\t// *** Test max range
\t\tif (\$value > \$originalMax)
\t\t{
\t\t\t\$value = \$originalMax;
\t\t}

\t\t// *** Test min range
\t\tif (\$value < 0)
\t\t{
\t\t\t\$value = 0;
\t\t}

\t\tif (\$invert)
\t\t{
\t\t\treturn \$originalMax - ((\$value / 100) * \$originalMax);
\t\t}
\t\telse
\t\t{
\t\t\treturn (\$value / 100) * \$originalMax;
\t\t}
\t}

\t## --------------------------------------------------------

\tprivate function transparentImage(\$src)
\t{
\t\t// *** making images with white bg transparent
\t\t\$r1 = 0;
\t\t\$g1 = 255;
\t\t\$b1 = 0;
\t\tfor (\$x = 0; \$x < imagesx(\$src); ++\$x)
\t\t{
\t\t\tfor (\$y = 0; \$y < imagesy(\$src); ++\$y)
\t\t\t{
\t\t\t\t\$color = imagecolorat(\$src, \$x, \$y);
\t\t\t\t\$r = (\$color >> 16) & 0xFF;
\t\t\t\t\$g = (\$color >> 8) & 0xFF;
\t\t\t\t\$b = \$color & 0xFF;
\t\t\t\tfor (\$i = 0; \$i < 270; \$i++)
\t\t\t\t{
\t\t\t\t\t//if (\$r . \$g . \$b == (\$r1 + \$i) . (\$g1 + \$i) . (\$b1 + \$i)) {
\t\t\t\t\tif (\$r == 0 && \$g == 255 && \$b == 0)
\t\t\t\t\t{
\t\t\t\t\t\t//if (\$g == 255) {
\t\t\t\t\t\t\$trans_colour = imagecolorallocatealpha(\$src, 0, 0, 0, 127);
\t\t\t\t\t\timagefill(\$src, \$x, \$y, \$trans_colour);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn \$src;
\t}

\t## --------------------------------------------------------

\tfunction checkStringStartsWith(\$needle, \$haystack)
\t\t# Check if a string starts with a specific pattern
\t{
\t\treturn (substr(\$haystack, 0, strlen(\$needle)) == \$needle);
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  BMP SUPPORT (SAVING) - James Heinrich
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tprivate function GD2BMPstring(&\$gd_image)
\t\t# Author:     James Heinrich
\t\t# Purpose:    Save file as type bmp
\t\t# Param in:   The image canvas (passed as ref)
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:    This code was stripped out of two external files
\t\t#       (phpthumb.bmp.php,phpthumb.functions.php) and added below to
\t\t#       avoid dependancies.
\t\t#
\t{
\t\t\$imageX = ImageSX(\$gd_image);
\t\t\$imageY = ImageSY(\$gd_image);

\t\t\$BMP = '';
\t\tfor (\$y = (\$imageY - 1); \$y >= 0; \$y--)
\t\t{
\t\t\t\$thisline = '';
\t\t\tfor (\$x = 0; \$x < \$imageX; \$x++)
\t\t\t{
\t\t\t\t\$argb = \$this->GetPixelColor(\$gd_image, \$x, \$y);
\t\t\t\t\$thisline .= chr(\$argb['blue']) . chr(\$argb['green']) . chr(\$argb['red']);
\t\t\t}
\t\t\twhile (strlen(\$thisline) % 4)
\t\t\t{
\t\t\t\t\$thisline .= \"\\x00\";
\t\t\t}
\t\t\t\$BMP .= \$thisline;
\t\t}

\t\t\$bmpSize = strlen(\$BMP) + 14 + 40;
\t\t// BITMAPFILEHEADER [14 bytes] - http://msdn.microsoft.com/library/en-us/gdi/bitmaps_62uq.asp
\t\t\$BITMAPFILEHEADER = 'BM';                                    // WORD    bfType;
\t\t\$BITMAPFILEHEADER .= \$this->LittleEndian2String(\$bmpSize, 4); // DWORD   bfSize;
\t\t\$BITMAPFILEHEADER .= \$this->LittleEndian2String(0, 2); // WORD    bfReserved1;
\t\t\$BITMAPFILEHEADER .= \$this->LittleEndian2String(0, 2); // WORD    bfReserved2;
\t\t\$BITMAPFILEHEADER .= \$this->LittleEndian2String(54, 4); // DWORD   bfOffBits;

\t\t// BITMAPINFOHEADER - [40 bytes] http://msdn.microsoft.com/library/en-us/gdi/bitmaps_1rw2.asp
\t\t\$BITMAPINFOHEADER = \$this->LittleEndian2String(40, 4); // DWORD  biSize;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(\$imageX, 4); // LONG   biWidth;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(\$imageY, 4); // LONG   biHeight;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(1, 2); // WORD   biPlanes;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(24, 2); // WORD   biBitCount;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(0, 4); // DWORD  biCompression;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(0, 4); // DWORD  biSizeImage;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(2835, 4); // LONG   biXPelsPerMeter;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(2835, 4); // LONG   biYPelsPerMeter;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(0, 4); // DWORD  biClrUsed;
\t\t\$BITMAPINFOHEADER .= \$this->LittleEndian2String(0, 4); // DWORD  biClrImportant;

\t\treturn \$BITMAPFILEHEADER . \$BITMAPINFOHEADER . \$BMP;
\t}

## --------------------------------------------------------

\tprivate function GetPixelColor(&\$img, \$x, \$y)
\t\t# Author:     James Heinrich
\t\t# Purpose:
\t\t# Param in:
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\tif ( ! is_resource(\$img))
\t\t{
\t\t\treturn false;
\t\t}

\t\treturn @ImageColorsForIndex(\$img, @ImageColorAt(\$img, \$x, \$y));
\t}

## --------------------------------------------------------

\tprivate function LittleEndian2String(\$number, \$minbytes = 1)
\t\t# Author:     James Heinrich
\t\t# Purpose:    BMP SUPPORT (SAVING)
\t\t# Param in:
\t\t# Param out:
\t\t# Reference:
\t\t# Notes:
\t\t#
\t{
\t\t\$intstring = '';
\t\twhile (\$number > 0)
\t\t{
\t\t\t\$intstring = \$intstring . chr(\$number & 255);
\t\t\t\$number >>= 8;
\t\t}

\t\treturn str_pad(\$intstring, \$minbytes, \"\\x00\", STR_PAD_RIGHT);
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  BMP SUPPORT (READING)
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tprivate function ImageCreateFromBMP(\$filename)
\t\t# Author:     DHKold
\t\t# Date:     The 15th of June 2005
\t\t# Version:    2.0B
\t\t# Purpose:    To create an image from a BMP file.
\t\t# Param in:   BMP file to open.
\t\t# Param out:  Return a resource like the other ImageCreateFrom functions
\t\t# Reference:  http://us3.php.net/manual/en/function.imagecreate.php#53879
\t\t# Bug fix:    Author:   domelca at terra dot es
\t\t#       Date:   06 March 2008
\t\t#       Fix:    Correct 16bit BMP support
\t\t# Notes:
\t\t#
\t{

\t\t//Ouverture du fichier en mode binaire
\t\tif ( ! \$f1 = fopen(\$filename, \"rb\"))
\t\t{
\t\t\treturn false;
\t\t}

\t\t//1 : Chargement des ent�tes FICHIER
\t\t\$FILE = unpack(\"vfile_type/Vfile_size/Vreserved/Vbitmap_offset\", fread(\$f1, 14));
\t\tif (\$FILE['file_type'] != 19778)
\t\t{
\t\t\treturn false;
\t\t}

\t\t//2 : Chargement des ent�tes BMP
\t\t\$BMP = unpack('Vheader_size/Vwidth/Vheight/vplanes/vbits_per_pixel' .
\t\t\t'/Vcompression/Vsize_bitmap/Vhoriz_resolution' .
\t\t\t'/Vvert_resolution/Vcolors_used/Vcolors_important', fread(\$f1, 40));
\t\t\$BMP['colors'] = pow(2, \$BMP['bits_per_pixel']);

\t\tif (\$BMP['size_bitmap'] == 0)
\t\t{
\t\t\t\$BMP['size_bitmap'] = \$FILE['file_size'] - \$FILE['bitmap_offset'];
\t\t}

\t\t\$BMP['bytes_per_pixel'] = \$BMP['bits_per_pixel'] / 8;
\t\t\$BMP['bytes_per_pixel2'] = ceil(\$BMP['bytes_per_pixel']);
\t\t\$BMP['decal'] = (\$BMP['width'] * \$BMP['bytes_per_pixel'] / 4);
\t\t\$BMP['decal'] -= floor(\$BMP['width'] * \$BMP['bytes_per_pixel'] / 4);
\t\t\$BMP['decal'] = 4 - (4 * \$BMP['decal']);

\t\tif (\$BMP['decal'] == 4)
\t\t{
\t\t\t\$BMP['decal'] = 0;
\t\t}

\t\t//3 : Chargement des couleurs de la palette
\t\t\$PALETTE = array();
\t\tif (\$BMP['colors'] < 16777216)
\t\t{
\t\t\t\$PALETTE = unpack('V' . \$BMP['colors'], fread(\$f1, \$BMP['colors'] * 4));
\t\t}

\t\t//4 : Cr�ation de l'image
\t\t\$IMG = fread(\$f1, \$BMP['size_bitmap']);
\t\t\$VIDE = chr(0);

\t\t\$res = imagecreatetruecolor(\$BMP['width'], \$BMP['height']);
\t\t\$P = 0;
\t\t\$Y = \$BMP['height'] - 1;
\t\twhile (\$Y >= 0)
\t\t{
\t\t\t\$X = 0;
\t\t\twhile (\$X < \$BMP['width'])
\t\t\t{
\t\t\t\tif (\$BMP['bits_per_pixel'] == 24)
\t\t\t\t{
\t\t\t\t\t\$COLOR = unpack(\"V\", substr(\$IMG, \$P, 3) . \$VIDE);
\t\t\t\t}
\t\t\t\telseif (\$BMP['bits_per_pixel'] == 16)
\t\t\t\t{

\t\t\t\t\t/*
           * BMP 16bit fix
           * =================
           *
           * Ref: http://us3.php.net/manual/en/function.imagecreate.php#81604
           *
           * Notes:
           * \"don't work with bmp 16 bits_per_pixel. change pixel
           * generator for this.\"
           *
           */

\t\t\t\t\t// *** Original code (don't work)
\t\t\t\t\t//\$COLOR = unpack(\"n\",substr(\$IMG,\$P,2));
\t\t\t\t\t//\$COLOR[1] = \$PALETTE[\$COLOR[1]+1];

\t\t\t\t\t\$COLOR = unpack(\"v\", substr(\$IMG, \$P, 2));
\t\t\t\t\t\$blue = (\$COLOR[1] & 0x001f) << 3;
\t\t\t\t\t\$green = (\$COLOR[1] & 0x07e0) >> 3;
\t\t\t\t\t\$red = (\$COLOR[1] & 0xf800) >> 8;
\t\t\t\t\t\$COLOR[1] = \$red * 65536 + \$green * 256 + \$blue;

\t\t\t\t}
\t\t\t\telseif (\$BMP['bits_per_pixel'] == 8)
\t\t\t\t{
\t\t\t\t\t\$COLOR = unpack(\"n\", \$VIDE . substr(\$IMG, \$P, 1));
\t\t\t\t\t\$COLOR[1] = \$PALETTE[ \$COLOR[1] + 1 ];
\t\t\t\t}
\t\t\t\telseif (\$BMP['bits_per_pixel'] == 4)
\t\t\t\t{
\t\t\t\t\t\$COLOR = unpack(\"n\", \$VIDE . substr(\$IMG, floor(\$P), 1));
\t\t\t\t\tif ((\$P * 2) % 2 == 0)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] >> 4);
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x0F);
\t\t\t\t\t}
\t\t\t\t\t\$COLOR[1] = \$PALETTE[ \$COLOR[1] + 1 ];
\t\t\t\t}
\t\t\t\telseif (\$BMP['bits_per_pixel'] == 1)
\t\t\t\t{
\t\t\t\t\t\$COLOR = unpack(\"n\", \$VIDE . substr(\$IMG, floor(\$P), 1));
\t\t\t\t\tif ((\$P * 8) % 8 == 0)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = \$COLOR[1] >> 7;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 1)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x40) >> 6;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 2)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x20) >> 5;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 3)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x10) >> 4;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 4)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x8) >> 3;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 5)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x4) >> 2;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 6)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x2) >> 1;
\t\t\t\t\t}
\t\t\t\t\telseif ((\$P * 8) % 8 == 7)
\t\t\t\t\t{
\t\t\t\t\t\t\$COLOR[1] = (\$COLOR[1] & 0x1);
\t\t\t\t\t}
\t\t\t\t\t\$COLOR[1] = \$PALETTE[ \$COLOR[1] + 1 ];
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\timagesetpixel(\$res, \$X, \$Y, \$COLOR[1]);
\t\t\t\t\$X++;
\t\t\t\t\$P += \$BMP['bytes_per_pixel'];
\t\t\t}

\t\t\t\$Y--;
\t\t\t\$P += \$BMP['decal'];
\t\t}
\t\t//Fermeture du fichier
\t\tfclose(\$f1);

\t\treturn \$res;
\t}


\t/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
  PSD SUPPORT (READING)
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/

\tprivate function imagecreatefrompsd(\$fileName)
\t\t# Author:     Tim de Koning
\t\t# Version:    1.3
\t\t# Purpose:    To create an image from a PSD file.
\t\t# Param in:   PSD file to open.
\t\t# Param out:  Return a resource like the other ImageCreateFrom functions
\t\t# Reference:  http://www.kingsquare.nl/phppsdreader
\t\t# Notes:
\t\t#
\t{
\t\tif (file_exists(\$this->psdReaderPath))
\t\t{


\t\t\tinclude_once(\$this->psdReaderPath);

\t\t\t\$psdReader = new PhpPsdReader(\$fileName);

\t\t\tif (isset(\$psdReader->infoArray['error']))
\t\t\t{
\t\t\t\treturn '';
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn \$psdReader->getImage();
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\treturn false;
\t\t}
\t}

## --------------------------------------------------------

\tpublic function __destruct()
\t{
\t\tif (is_resource(\$this->imageResized))
\t\t{
\t\t\timagedestroy(\$this->imageResized);
\t\t}
\t}

## --------------------------------------------------------

}


/*
 *    Example with some API calls (outdated):
 *
 *
 *      ===============================
 *      Compulsary
 *      ===============================
 *
 *      include(\"classes/resize_class.php\");
 *
 *      // *** Initialise object
 *      \$magicianObj = new resize('images/cars/large/a.jpg');
 *
 *      // *** Turn off stretching (optional)
 *      \$magicianObj -> setForceStretch(false);
 *
 *      // *** Resize object
 *      \$magicianObj -> resizeImage(150, 100, 0);
 *
 *      ===============================
 *      Image options - can run none, one, or all.
 *      ===============================
 *
 *      //  *** Add watermark
 *        \$magicianObj -> addWatermark('stamp.png');
 *
 *          // *** Add text
 *      \$magicianObj -> addText('testing...');
 *
 *      ===============================
 *      Output options - can run one, or the other, or both.
 *      ===============================
 *
 *      // *** Save image to disk
 *      \$magicianObj -> saveImage('images/cars/large/b.jpg', 100);
 *
 *          // *** Or output to screen (params in can be jpg, gif, png)
 *      \$magicianObj -> displayImage('png');
 *
 *      ===============================
 *      Return options - return errors. nice for debuggin.
 *      ===============================
 *
 *      // *** Return error array
 *      \$errorArray = \$magicianObj -> getErrors();
 *
 *
 *      ===============================
 *      Cleanup options - not really neccessary, but good practice
 *      ===============================
 *
 *      // *** Free used memory
 *      \$magicianObj -> __destruct();
 */
", "@MwebAdmin/filemanager/include/php_image_magician.php", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/filemanager/include/php_image_magician.php");
    }
}
