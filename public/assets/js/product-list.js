let checkAll = document.querySelector('.check-all');
checkAll.addEventListener('click', checkAllFn)

function checkAllFn() {
    if (checkAll.checked) {
        document.querySelectorAll('.product-checkbox input').forEach(function (e) {
            e.closest('.product-list').classList.add('selected');
            e.checked = true;
        });
    }
    else {
        document.querySelectorAll('.product-checkbox input').forEach(function (e) {
            e.closest('.product-list').classList.remove('selected');
            e.checked = false;
        });
    }
}

//For Date Range Picker
flatpickr("#daterange", {
    mode: "range",
    dateFormat: "d-m-y",
});

//To choose date
flatpickr(".product-date", {});


//delete Btn
let productbtn = document.querySelectorAll(".product-btn");

productbtn.forEach((eleBtn) => {
    eleBtn.onclick = () => {
        let product = eleBtn.closest(".product-list")
        product.remove();
    }
})

