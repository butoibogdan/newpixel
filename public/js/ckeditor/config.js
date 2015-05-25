/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    config.language = 'ro';
    // config.uiColor = '#AADC6E';
    // ...
    config.filebrowserBrowseUrl = 'js/kcfinder/browse.php?opener=ckeditor&type=files&dir=images&lang=ro';
    config.filebrowserImageBrowseUrl = 'js/kcfinder/browse.php?opener=ckeditor&type=images&dir=images&lang=ro';
    config.filebrowserFlashBrowseUrl = 'js/kcfinder/browse.php?opener=ckeditor&type=flash&dir=images&lang=ro';
    config.filebrowserUploadUrl = 'js/kcfinder/upload.php?opener=ckeditor&type=files&dir=images&lang=ro';
    config.filebrowserImageUploadUrl = 'js/kcfinder/upload.php?opener=ckeditor&type=images&dir=images&lang=ro';
    config.filebrowserFlashUploadUrl = 'js/kcfinder/upload.php?opener=ckeditor&type=flash&dir=images&lang=ro';
// ...
};
