/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

    // toolbar
    ///////////////////////////////////////////////////////
    config.toolbar_Everywriter =
    [
     { name: 'document',    items : ['Source','Maximize','-','Save','NewPage','DocProps','Preview','Print','-','Templates']},
     { name: 'clipboard',   items : ['Cut','Copy','Paste','PasteText','PasteFromWord']},
     { name: 'editing',     items : ['Find','Replace','SelectAll','-','Undo','Redo']},
     { name: 'insert',      items : ['Table','HorizontalRule','SpecialChar','PageBreak']},
     { name: 'text',        items : ['Link','Unlink','Anchor','TextColor','BGColor']},
     '/',
     { name: 'styles',      items : ['RemoveFormat','Format','Font','FontSize','Styles','Bold','Italic','Underline','Strike','Subscript','Superscript']},
     { name: 'paragraph',   items : ['NumberedList','BulletedList','-','Blockquote','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl']}];
    config.toolbar = 'Everywriter';

    // skin & theme
    ///////////////////////////////////////////////////////
    // config.skin = 'kama';
};
