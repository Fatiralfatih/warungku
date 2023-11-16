
(function () {
    'use strict'
      var icons = Quill.import('ui/icons');
      icons['bold'] = '<i class="ri ri-bold" aria-hidden="true"><\/i>';
      icons['italic'] = '<i class="ri ri-italic" aria-hidden="true"><\/i>';
      icons['underline'] = '<i class="ri ri-underline" aria-hidden="true"><\/i>';
      icons['strike'] = '<i class="ri ri-strikethrough" aria-hidden="true"><\/i>';
      icons['list']['ordered'] = '<i class="ri ri-list-ordered" aria-hidden="true"><\/i>';
      icons['list']['bullet'] = '<i class="ri ri-list-unordered" aria-hidden="true"><\/i>';
      icons['link'] = '<i class="ri ri-links-line" aria-hidden="true"><\/i>';
      icons['image'] = '<i class="ri ri-image-line" aria-hidden="true"><\/i>';
      icons['video'] = '<i class="ri ri-film-line" aria-hidden="true"><\/i>';
      icons['code-block'] = '<i class="ri ri-code-line" aria-hidden="true"><\/i>';
      var toolbarOptions = [
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{ 'font': [] }],
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        [{ 'script': 'sub' }, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1' }, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'align': [] }],

        ['image', 'video'],
        ['clean']                                         // remove formatting button
    ];
      var quill = new Quill('#editor', {
        modules: {
          toolbar: toolbarOptions
        },
        theme: 'snow'
      });

      
      var quill = new Quill('#quillEditorModal', {
        modules: {
          toolbar: toolbarOptions
        },
        theme: 'snow'
      });
      
      var toolbarInlineOptions = [
        ['bold', 'italic', 'underline'],
        [{
          'header': 1
        }, {
          'header': 2
        }, 'blockquote'],
        ['link', 'image', 'code-block'],
      ];

      var quillInline = new Quill('#quillInline', {
        modules: {
          toolbar: toolbarInlineOptions
        },
        bounds: '#quillInline',
        scrollingContainer: '#scrolling-container',
        placeholder: 'Write something...',
        theme: 'bubble'
      });
})();
