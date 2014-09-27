( function() {
    tinymce.PluginManager.add( 'coco_shortcode_drop', function( editor, url ) {
		
		coco_shortcodesEd = editor;
		coco_shortcodesUrl = url;
		// We go up in the tree
		coco_shortcodes_url = coco_shortcodesUrl.substring(0, coco_shortcodesUrl.length-2);
		
		var buttonstyle = "background:url('" + coco_shortcodes_url + "img/cocorico.png') no-repeat 5px 2px";
		
        editor.addButton( 'coco_shortcodes_button', {
			type: 'menubutton',
            style: buttonstyle,
            tooltip: 'Cocorico Shortcodes',
            menu: [
            		
            		{	text: editor.getLang('coco_shortcodes_tinymce.column'), 
            		
            			onclick: function() {
				            // Open window
				            editor.windowManager.open({
				                title: editor.getLang('coco_shortcodes_tinymce.column_add'),
				                body: [
				                	{	type: 'label',
				                		text: editor.getLang('coco_shortcodes_tinymce.column_howto')
				                	},
				                										
				                    {	type: 'listbox',
				                    	name: 'format_col',
				                    	label: editor.getLang('coco_shortcodes_tinymce.column_size'),
				                    	values:[	{text: '1/2', value: 'one_half'},
							            			{text: '1/3', value: 'one_third'},
							            			{text: '2/3', value: 'two_thirds'},
							            			{text: '1/4', value: 'one_fourth'},
							            			{text: '3/4', value: 'three_fourths'}
											    ]
				                    },
				                    
				                    {	type: 'listbox',
				                    	name: 'position_col',
				                    	label: editor.getLang('coco_shortcodes_tinymce.column_position'),
				                    	values:[	{text: editor.getLang('coco_shortcodes_tinymce.column_first'), value: 'first'},
				                    				{text: editor.getLang('coco_shortcodes_tinymce.column_middle'), value: 'middle'},
							            			{text: editor.getLang('coco_shortcodes_tinymce.column_last'), value: 'last'}
											    ]
				                    },
				                    
				                    {	type: 'textbox',
				                    	name: 'contenu_col',
				                    	label: editor.getLang('coco_shortcodes_tinymce.column_content'),
				                    	multiline: true,
				                    	minWidth: 300,
				                    	minHeight: 100
									},

				                ],
				                onsubmit: function(e) {
				                
				                	var res = '';
				                	
				                	res += '[cocorico_column size="' + e.data.format_col + '" position="' + e.data.position_col+ '"]<br>';
				                	res += e.data.contenu_col + '<br>[/cocorico_column]<br><br>';
				                	
				                    editor.insertContent(res);
				                }
				                
				                
				            });
				        },
            			
            		}
            		
	        ]
            

        } );

		
    } );

} )();