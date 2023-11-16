(function () {
  "use strict";

  /* default multi select */
  const secondElement = new Choices('#choices-multiple-default', { allowSearch: false }).setValue(['Choice 2', 'Choie 3']);

  /* multi select with remove button */
  const multipleCancelButton = new Choices(
    '#choices-multiple-remove-button',
    {
      allowHTML: true,
      removeItemButton: true,
    }
  );

  /* multi select with option groups */
  const multipleDefault = new Choices(
    document.getElementById('choices-multiple-groups'),
    { allowHTML: true }
  );


  /* Start::Choices JS */
  document.addEventListener('DOMContentLoaded', function () {
    var genericExamples = document.querySelectorAll('[data-trigger]');
    for (let i = 0; i < genericExamples.length; ++i) {
      var element = genericExamples[i];
      new Choices(element, {
        allowHTML: true,
        placeholderValue: 'This is a placeholder set in the config',
        searchPlaceholderValue: 'Search Crypto Currency',
      });
    }
  });
  /* passing through values */
  var textPresetVal = new Choices('#choices-text-preset-values', {
    allowHTML: true,
    items: [
      'one',
      {
        value: 'two',
        label: 'two',
        customProperties: {
          description: 'Numbers are infinite',
        },
      },
    ],
  });

  /* email address only */
  var textEmailFilter = new Choices('#choices-text-email-filter', {
    allowHTML: true,
    editItems: true,
    addItemFilter: function (value) {
      if (!value) {
        return false;
      }
      const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      const expression = new RegExp(regex.source, 'i');
      return expression.test(value);
    },
  }).setValue(['abc@hotmail.com']);

  /* options added via config with no search */
  var singleNoSearch = new Choices('#choices-single-no-search', {
    allowHTML: true,
    searchEnabled: false,
    removeItemButton: true,
    choices: [
      { value: 'One', label: 'Label One' },
      { value: 'Two', label: 'Label Two' },
      { value: 'Three', label: 'Label Three' },
    ],
  }).setChoices(
    [
      { value: 'Four', label: 'Label Four' },
      { value: 'Five', label: 'Label Five' },
      { value: 'Six', label: 'Label Six', selected: true },
    ],
    'value',
    'label',
    false
  );

  /* passing unique values */
  var textUniqueVals = new Choices('#choices-text-unique-values', {
    allowHTML: true,
    paste: false,
    duplicateItemsAllowed: false,
    editItems: true,
  });
})();