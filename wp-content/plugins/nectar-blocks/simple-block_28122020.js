var el = wp.element.createElement;
//container block
wp.blocks.registerBlockType('nectar-blocks/bootstrap-container', {
   title: 'BS Container', 
   icon: 'button' ,
   category  : 'common',
   edit: function(props) {
  return el("div",{className:"container"},
        el(wp.blockEditor.InnerBlocks             
         )); 

}, 
   save: function(props) {
   return el("div",{className:"container"},
    el(wp.blockEditor.InnerBlocks.Content 
      )); 
} 
});
// container fullwidth block
wp.blocks.registerBlockType('nectar-blocks/bootstrap-container-fullwidth', {
   title: 'BS Container Fullwidth', 
   icon: 'button' ,
   category  : 'common',
   edit: function(props) {
  return el("div",{className:"container-fluid"},
        el(wp.blockEditor.InnerBlocks             
         )); 

}, 
   save: function(props) {
   return el("div",{className:"container-fluid"},
    el(wp.blockEditor.InnerBlocks.Content 
      )); 
} 
});
// faq outer block
wp.blocks.registerBlockType('nectar-blocks/faq-inner', {
   title: 'FAQ Block', 
   icon: 'button' ,
   category  : 'common',
   edit: function(props) {
  return el("div",{className:"faq-outer container"},el("div",{id:"accordion"},
        el(wp.blockEditor.InnerBlocks,
        {
        allowedBlocks: ['nectar-blocks/faq-block']
        }           
         ))); 

}, 
   save: function(props) {
   return el("div",{className:"faq-outer container"},el("div",{id:"accordion"},
    el(wp.blockEditor.InnerBlocks.Content 
      ))); 
} 
});


// faq list
wp.blocks.registerBlockType('nectar-blocks/faq-block', {
   title: 'FAQ', 
   icon: 'sticky' ,
   category  : 'common',
   attributes: { 
      title: { type: 'array',source: 'children',selector: 'a'}, 
      count : {type:'number',default:1},
   },

   edit: function(props) {
   	console.log(props);
      return el("div",{className:"card"},el("div",{className:"card-header"},
        el(wp.editor.RichText, 
            {
                tagName: 'a',
               className: 'card-link',
               "data-toggle": "collapse",
               href: "#uid"+props.attributes.count,
               value: props.attributes.title,
               onChange: function( newtitle ) {
                  props.setAttributes( { title: newtitle } );
                  props.setAttributes({ count: props.attributes.count + 1 })

              }
            }
         ),el('i',{className:'customplus fa fa-plus'})),
      el("div",{className:"card-body collapse",id: "uid"+props.attributes.count,"data-parent": "#accordion"},
        el(wp.editor.InnerBlocks             
         )),
      ); 

}, 
   save: function(props) {
   return el("div",{className:"card"},el("div",{className:"card-header"},
    el(wp.editor.RichText.Content, 
            {
               tagName: 'a',
               className: 'card-link',
               "data-toggle": "collapse",
               href: "#uid"+props.attributes.count,
               value: props.attributes.title,
            }
         ),el('i',{className:'customplus fa fa-plus'})),
   el("div",{className:"card-body collapse",id: "uid"+props.attributes.count,"data-parent": "#accordion"},
        el(wp.editor.InnerBlocks.Content             
         ))
   ); 
} 
});

