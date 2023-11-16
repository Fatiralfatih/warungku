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
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        [{ 'indent': '-1' }, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction
        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        ['image', 'video'],
    ];
    var quill = new Quill('#product-editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });


    // for image uploads
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
        FilePondPluginFileEncode,
        FilePondPluginImageEdit,
        FilePondPluginFileValidateType,
        FilePondPluginImageCrop,
        FilePondPluginImageResize,
        FilePondPluginImageTransform
    );
    
  const MultipleElement = document.querySelector('.multiple-filepond');
  FilePond.create(MultipleElement);

    /* Start::Choices JS */
    document.addEventListener('DOMContentLoaded', function () {
        var genericExamples = document.querySelectorAll('.product-tags');
        for (let i = 0; i < genericExamples.length; ++i) {
            var element = genericExamples[i];
            new Choices(element, {
                allowHTML: true,
                paste: false,
                duplicateItemsAllowed: false,
                editItems: true, 
                removeItemButton: true,
            });
        }
    }); 
    /* Start::Choices JS */
    document.addEventListener('DOMContentLoaded', function () {
        var genericExamples = document.querySelectorAll('.product-search');
        for (let i = 0; i < genericExamples.length; ++i) {
            var element = genericExamples[i];
            new Choices(element, {
                allowHTML: true,
                searchEnabled: false,
                removeItemButton: true,
            });
        }
    }); 

     //To choose date and time
    flatpickr("#product-datetime", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });

})();