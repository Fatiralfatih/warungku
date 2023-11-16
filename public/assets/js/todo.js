(function () {
    "use strict";
    let checkAll = document.querySelector('.check-all');
    checkAll.addEventListener('click', checkAllFn)

    function checkAllFn() {
        if (checkAll.checked) {
            document.querySelectorAll('.todo-checkbox input').forEach(function (e) {
                e.closest('.todo-box').classList.add('selected');
                e.checked = true;
            });
        }
        else {
            document.querySelectorAll('.todo-checkbox input').forEach(function (e) {
                e.closest('.todo-box').classList.remove('selected');
                e.checked = false;
            });
        }
    }

    dragula([document.querySelector('.todo-drag')]);

    /* Start::Choices JS */
    document.addEventListener('DOMContentLoaded', function () {
        var genericExamples = document.querySelectorAll('.todo-choice');
        for (let i = 0; i < genericExamples.length; ++i) {
            var element = genericExamples[i];
            new Choices(element, {
                allowHTML: true,
                searchEnabled: false,
                removeItemButton: true,
            });
        }
    });

    let todobtn = document.querySelectorAll(".todo-remove");

    todobtn.forEach((eleBtn) => {
        eleBtn.onclick = () => {
            let todo = eleBtn.closest(".todo-box");
            todo.remove();
        }
    })
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


})();
