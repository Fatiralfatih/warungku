(function () {
  "use strict";
  dragula([document.querySelector('#task-left'), document.querySelector('#task-left1'), document.querySelector('#task-right'), document.querySelector('#task-right1')]);


  /* Start::Choices JS */
  document.addEventListener('DOMContentLoaded', function () {
    var genericExamples = document.querySelectorAll('.task-choice');
    for (let i = 0; i < genericExamples.length; ++i) {
      var element = genericExamples[i];
      new Choices(element, {
        allowHTML: true,
        searchEnabled: false,
        removeItemButton: true,
      });
    }
  });
  /* AssignedDate Picker */
  flatpickr("#addignedDate", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
  });

  /* TargetDate Picker */
  flatpickr("#targetDate", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
  });

  /* multi select with remove button */
  const multipleCancelButton = new Choices(
    '#choices-multiple-remove-button',
    {
      allowHTML: true,
      removeItemButton: true,
    }
  );

  // Initialize the plugin
  // var task = document.getElementById('task-left');
  // var task1 = document.getElementById('task-left1');
  // var task2 = document.getElementById('task-right');
  // var task3 = document.getElementById('task-right1');
  // new SimpleBar(task, { autoHide: true });
  // new SimpleBar(task1, { autoHide: true });
  // new SimpleBar(task2, { autoHide: true });
  // new SimpleBar(task3, { autoHide: true });

  let taskbtn = document.querySelectorAll(".task-remove");

  taskbtn.forEach((eleBtn) => {
    eleBtn.onclick = () => {
      let task = eleBtn.closest(".task-box");
      task.remove();
    }
  })

})();
