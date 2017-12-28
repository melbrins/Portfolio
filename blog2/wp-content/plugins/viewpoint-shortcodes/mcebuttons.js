(function() {
    tinymce.create('tinymce.plugins.code', {
        init : function(ed, url) {

		/*button divider*/
            ed.addButton('dividerbutton', {
                title : 'Empty Space Divider',
                cmd : 'dividerbutton',
                image :  url + '/divider.png'
            });

            ed.addCommand('dividerbutton', function() {
                var return_text = '';
                return_text = '<hr class="divider" />';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
		  
		/*button new line*/
		   ed.addButton('newlinebutton', {
                title : 'New Line',
                cmd : 'newlinebutton',
                image :  url + '/newline.png'
            });

            ed.addCommand('newlinebutton', function() {
                var return_text = '';
                return_text = '<hr class="br" />';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
        },
        // ... Hidden code
    });
    // Register plugin
    tinymce.PluginManager.add( 'mynewbuttons', tinymce.plugins.code );
})();