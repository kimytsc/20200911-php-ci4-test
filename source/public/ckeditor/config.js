/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
/******** def ***********/
//CKEDITOR.editorConfig = function( config ) {
//	// Define changes to default configuration here. For example:
//	// config.language = 'fr';
//	// config.uiColor = '#AADC6E';
//};

/******** conf ***********/
CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },

		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.filebrowserImageUploadUrl = '/api/board/ckeditor/fileup/file_uploader.asp?type=image';
//	extraPlugins : 'uploadimage';
//	config.filebrowserUploadUrl = '/board/ckeditor/popup/file_uploader.asp';
//	config.image2_disableResizer = false;
//	config.pasteFilter = null;

//	config.extraPlugins = 'uploadimage';
//	config.extraPlugins = 'notificationaggregator';
//	config.extraPlugins = 'uploadwidget';
//	config.extraPlugins = 'filetools';
//	config.extraPlugins = 'notification';
	config.enterMode = CKEDITOR.ENTER_BR;

	config.extraPlugins = 'imageresizerowandcolumn';

	//config.font_names = '맑은 고딕; 돋움; 바탕; 궁서; 나눔고딕/나눔고딕, NanumGothic; ' + CKEDITOR.config.font_names;
	config.font_names = '나눔고딕/나눔고딕,  Nanum Gothic;나눔명조/나눔명조, Nanum Myeongjo;맑은 고딕; 돋움; 바탕; 궁서; ' + CKEDITOR.config.font_names;


	config.removeButtons = 'Templates,PasteText,Paste,Scayt,Flash,PageBreak,About,Save,Print,HiddenField,ImageButton,Button,Select,Textarea,TextField,Radio,Checkbox,Form,CreateDiv,Anchor,Styles,Format,Smiley,SpecialChar,PasteFromWord,Language,Find,RemoveFormat,CopyFormatting,NewPage,Preview';
//	config.removeButtons = 'Templates';

};