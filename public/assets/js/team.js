(function () {
    "use strict";
    
    /* options added via config with no search */
    var singleNoSearch = new Choices('#team-choice', {
        allowHTML: true,
        searchEnabled: false,
        removeItemButton: true,
    })

    let teambtn = document.querySelectorAll(".team-remove");

    teambtn.forEach((eleBtn) => {
        eleBtn.onclick = () => {
            let team = eleBtn.closest(".team-box");
            team.remove();
        }
    })

})();