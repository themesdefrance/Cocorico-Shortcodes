( function() {
    tinymce.PluginManager.add( 'coco_shortcode_drop', function( editor, url ) {
		
		coco_shortcodesEd = editor;
		coco_shortcodesUrl = url;
		// We go up in the tree
		coco_shortcodes_url = coco_shortcodesUrl.substring(0, coco_shortcodesUrl.length-2);
		
		var buttonstyle = "background:url('" + coco_shortcodes_url + "img/cocorico.png') no-repeat 5px 2px";
		var columns = [	{text: '1/2', value: 'one_half'},
            			{text: '1/3', value: 'one_third'},
            			{text: '2/3', value: 'two_thirds'},
            			{text: '1/4', value: 'one_fourth'},
            			{text: '3/4', value: 'three_fourths'}
				      ];
		
        editor.addButton( 'coco_shortcodes_button', {
			type: 'menubutton',
            style: buttonstyle,
            tooltip: 'Cocorico Shortcodes',
            //tooltip: editor.getLang('etendard_i18n_shortcodes.tooltip'),
            menu: [
            		
            		{	text: '2 Colonnes', 
            		
            			onclick: function() {
				            // Open window
				            editor.windowManager.open({
				                title: 'Paramétrage des colonnes',
				                body: [
				                	{	type: 'label',
				                		text: 'Première colonne'
				                	},
				                										
				                    {	type: 'listbox',
				                    	name: 'format_col_1_2',
				                    	label: 'Format',
				                    	values:columns
				                    },
				                    
				                    {	type: 'textbox',
				                    	name: 'contenu_col_1_2',
				                    	label: 'Contenu',
				                    	multiline: true,
				                    	minWidth: 300,
				                    	minHeight: 100
									},
				                	
				                	{	type: 'label',
				                		text: 'Seconde colonne'
				                	},
				                									
				                    {	type: 'listbox',
				                    	name: 'format_col_2_2',
				                    	label: 'Format',
				                    	values: columns
				                    },
				                    
				                    {	type: 'textbox',
				                    	name: 'contenu_col_2_2',
				                    	label: 'Contenu',
				                    	multiline: true,
				                    	minWidth: 300,
				                    	minHeight: 100
									}

				                ],
				                onsubmit: function(e) {
				                
				                	var res = '';
				                	
				                	res += '[cocorico_column size="' + e.data.format_col_1_2 + '" position="first"]';
				                	res += e.data.contenu_col_1_2 + '[/cocorico_column]';
				                	
				                	res += '[cocorico_column size="' + e.data.format_col_2_2 + '"  position="last"]';
				                	res += e.data.contenu_col_2_2 + '[/cocorico_column]';
				                	
				                    editor.insertContent(res);
				                }
				                
				                
				            });
				        },
            			
            		},
            		
            		{	text: '3 Colonnes', 
            			
            			onclick: function() {
				            // Open window
				            editor.windowManager.open({
				                title: 'Paramétrage des colonnes',
				                body: [
				                	{	type: 'label',
				                		text: 'Première colonne'
				                	},
				                										
				                    {	type: 'listbox',
				                    	name: 'format_col_1_3',
				                    	label: 'Format',
				                    	values: columns
				                    },
				                    
				                    {	type: 'textbox',
				                    	name: 'contenu_col_1_3',
				                    	label: 'Contenu',
				                    	multiline: true,
				                    	minWidth: 300,
				                    	minHeight: 100
									},
				                	
				                	{	type: 'label',
				                		text: 'Seconde colonne'
				                	},
				                									
				                    {	type: 'listbox',
				                    	name: 'format_col_2_3',
				                    	label: 'Format',
				                    	values: columns
				                    },
				                    
				                    {	type: 'textbox',
				                    	name: 'contenu_col_2_3',
				                    	label: 'Contenu',
				                    	multiline: true,
				                    	minWidth: 300,
				                    	minHeight: 100
									},
									
									{	type: 'label',
				                		text: 'Troisième colonne'
				                	},
				                									
				                    {	type: 'listbox',
				                    	name: 'format_col_3_3',
				                    	label: 'Format',
				                    	values: columns
				                    },
				                    
				                    {	type: 'textbox',
				                    	name: 'contenu_col_3_3',
				                    	label: 'Contenu',
				                    	multiline: true,
				                    	minWidth: 300,
				                    	minHeight: 100
									}

				                ],
				                onsubmit: function(e) {
				                
				                	var res = '';
				                	
				                	res += '[cocorico_column size="' + e.data.format_col_1_3 + '" position="first"]';
				                	res += e.data.contenu_col_1_3 + '[/cocorico_column]';
				                	
				                	res += '[cocorico_column size="' + e.data.format_col_2_3 + '" position="middle"]';
				                	res += e.data.contenu_col_2_3 + '[/cocorico_column]';
				                	
				                	res += '[cocorico_column size="' + e.data.format_col_3_3 + '" position="last"]';
				                	res += e.data.contenu_col_3_3 + '[/cocorico_column]';
				                	
				                    editor.insertContent(res);
				                }
				                
				                
				            });
				        }
            			
            			
            		},
            		
            		
	        ]
            

        } );

		
    } );

} )();