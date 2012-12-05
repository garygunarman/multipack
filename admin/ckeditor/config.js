/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/



CKEDITOR.editorConfig = function(config) {
   config.filebrowserBrowseUrl = '../kcfinder/browse.php?type=files';
   config.filebrowserImageBrowseUrl = '../kcfinder/browse.php?type=images';
   config.filebrowserFlashBrowseUrl = '../kcfinder/browse.php?type=flash';
   config.filebrowserUploadUrl = '../kcfinder/upload.php?type=files';
   config.filebrowserImageUploadUrl = '../kcfinder/upload.php?type=images';
   config.filebrowserFlashUploadUrl = '../kcfinder/upload.php?type=flash';

	config.toolbar = 'abouttoolbar';

		config.toolbar_abouttoolbar =
		[
			
			{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike'] },
			
			{ name: 'insert', items : [ 'Image' ] },
	                
			{ name: 'styles', items : [ 'Font','FontSize'] },
				{ name: 'colors', items : [  'TextColor','BGColor'] },
			
			{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'] },
			
			
		];
		
		config.contentsCss = '../ckeditor/fonts.css';
		//the next line add the new font to the combobox in CKEditor
		config.font_names = 'Gotham Rounded Book;' + 'Gotham Rounded Medium;' + 'Gotham Rounded Bold' + config.font_names;
};
