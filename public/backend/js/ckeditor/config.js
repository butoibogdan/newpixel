/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    config.language = 'ro';
    //config.uiColor = '#f5f5f5';
    // ...
    config.filebrowserBrowseUrl = "../../backend/js/kcfinder/browse.php?opener=ckeditor&type=files&dir=images&lang=ro";
    config.filebrowserImageBrowseUrl = "../../backend/js/kcfinder/browse.php?opener=ckeditor&type=images&dir=images&lang=ro";
    config.filebrowserFlashBrowseUrl = "../../backend/js/kcfinder/browse.php?opener=ckeditor&type=flash&dir=images&lang=ro";
    config.filebrowserUploadUrl = "../../backend/js/kcfinder/upload.php?opener=ckeditor&type=files&dir=images&lang=ro";
    config.filebrowserImageUploadUrl = "../../backend/js/kcfinder/upload.php?opener=ckeditor&type=images&dir=images&lang=ro";
    config.filebrowserFlashUploadUrl = "../../backend/js/kcfinder/upload.php?opener=ckeditor&type=flash&dir=images&lang=ro";
// ...
    config.toolbar = [
        {name: 'document', items: ['Source','-', 'Templates']},
        {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
        '/',
        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
	{ name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'] },
	{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
	{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] }
    ];
};
