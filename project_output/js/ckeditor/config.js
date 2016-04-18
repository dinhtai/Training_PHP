/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.height = 300;
    // Toolbar configuration generated automatically by the editor based on config.toolbarGroups.
    config.toolbar = [
//        {name: 'clipboard', groups: ['clipboard', 'undo'], items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
//        {name: 'editing', groups: ['find', 'selection', 'spellchecker'], items: ['Scayt']},
        {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
        {name: 'insert', items: ['Image', 'Table', 'HorizontalRule']},
//        {name: 'tools', items: ['Maximize']},
        {name: 'document', groups: ['mode', 'document', 'doctools'], items: ['Source']},
//        {name: 'others', items: ['-']},
//        '/',
        {name: 'basicstyles', groups: ['basicstyles'], items: ['Bold', 'Italic', 'Underline', 'Strike']},
        {name: 'paragraph', groups: ['align'], items : [ 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ]},
        {name: 'styles', items: ['Styles', 'Format']},
        { name: 'morestyles',   items: [ 'Font', 'FontSize' ] },
        { name: 'colors',       items: [ 'BGColor', 'TextColor' ] },
//        {name: 'about', items: ['About']}
    ];
//
//// Toolbar groups configuration.
    config.toolbarGroups = [
//        {name: 'clipboard', groups: ['clipboard', 'undo']},
//        {name: 'editing', groups: ['find', 'selection', 'spellchecker']},
        {name: 'links'},
        {name: 'insert'},
//        {name: 'forms'},
//        {name: 'tools'},
        {name: 'document', groups: ['mode', 'document', 'doctools']},
//        {name: 'others'},
//        '/',
        {name: 'basicstyles', groups: ['basicstyles']},
        {name: 'paragraph', groups: ['align']},
        {name: 'styles'},
        {name: 'colors'}
//        {name: 'about'}
    ];
};
