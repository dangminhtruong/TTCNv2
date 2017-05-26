/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = 'http://localhost/TTCNv2/ckfinder/ckfinder.html';
 
	config.filebrowserImageBrowseUrl = 'http://localhost/TTCNv2/ckfinder/ckfinder.html?type=Images';
	 
	config.filebrowserFlashBrowseUrl = 'http://localhost/TTCNv2/ckfinder/ckfinder.html?type=Flash';
	 
	config.filebrowserUploadUrl = 'http://localhost/TTCNv2/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	 
	config.filebrowserImageUploadUrl = 'http://localhost/TTCNv2/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	 
	config.filebrowserFlashUploadUrl = 'http://localhost/TTCNv2/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
