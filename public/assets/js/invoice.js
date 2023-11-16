(function () {
    "use strict";

    let checkAll = document.querySelector('.check-all');
    checkAll.addEventListener('click', checkAllFn)

    function checkAllFn() {
        if (checkAll.checked) {
            document.querySelectorAll('.invoice-checkbox input').forEach(function (e) {
                e.closest('.invoice-list').classList.add('selected');
                e.checked = true;
            });
        }
        else {
            document.querySelectorAll('.invoice-checkbox input').forEach(function (e) {
                e.closest('.invoice-list').classList.remove('selected');
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
    flatpickr(".invoice-date", {});


    let index = 0
    document.querySelector(".invoice-add-item").onclick = () => {
        let element = `<tr class="invoice-list">
        <td class=""><input type="number" class="ti-form-input " placeholder="s.no"></td>
        <td class=""><input type="text" class="ti-form-input " placeholder="Product name"></td>
        <td class="font-semibold ">
            <div class="flex rounded-sm shadow-sm">
            <button type="button"
              class="quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-2 focus:ring-primary transition-all text-sm">
              <i class="ti ti-minus"></i>
            </button>
            <input type="text" id="quantity-${index}" name="quantity"
              class="p-0 ti-form-input w-20 rounded-none shadow-sm focus:z-10 text-center"
               value=0 readonly>
            <button type="button"
              class="quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8  ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-2 focus:ring-primary transition-all text-sm">
              <i class="ti ti-plus"></i>
            </button>
          </div>
        </td>
        <td class=""><input type="number" class="ti-form-input " placeholder="value"></td>
        <td class= " font-medium"><input type="number" class="ti-form-input " placeholder="Total amount"></td>
        <td class= " font-medium">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <a href="javascript:void(0);"
                                                    class="invoice-btn m-0 hs-tooltip-toggle w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none bg-danger/10 border-danger/10 text-danger hover:bg-danger/30 hover:border-danger hover:text-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
        </tr>`
        document.querySelector(".invoice-body").innerHTML += element
        index = index + 1
    }

    var minusBtn = document.querySelectorAll(".quantity-minus"),
        PlusBtn = document.querySelectorAll(".quantity-plus"),
        
       
        minValue = 0,
        maxValue = 30;


    minusBtn.forEach((eleBtn1) => {
        eleBtn1.onclick = function (e) {
            let value =  e.currentTarget.nextElementSibling.value
            if (value > minValue) {
                value = value - 1;
                e.currentTarget.nextElementSibling.value=value;
            }
        }
    })
    PlusBtn.forEach((eleBtn2) => {
        eleBtn2.onclick = function (e) {
            let value =  e.currentTarget.previousElementSibling.value
            if (value < maxValue) {
                value = Number(value) + 1;
                e.currentTarget.previousElementSibling.value=value;
            }
        }
    })


    /* Start::Choices JS */
    document.addEventListener('DOMContentLoaded', function () {
        var genericExamples = document.querySelectorAll('[data-trigger]');
        for (let i = 0; i < genericExamples.length; ++i) {
            var element = genericExamples[i];
            new Choices(element, {
                allowHTML: true,
                searchEnabled: false,
                removeItemButton: true,
            });
        }
    });


    //delete Btn
    let invoicebtn = document.querySelectorAll(".invoice-btn");

    invoicebtn.forEach((eleBtn) => {
        eleBtn.onclick = () => {
            let invoice = eleBtn.closest(".invoice-list")
            invoice.remove();
        }
    })



})();

let GuantityPlus = (ele) => {
}


let changeTheInfo = (title, name, address, address1, id, create, due) => {
    document.querySelector(".invoice-title").innerHTML = title,
        document.querySelectorAll(".company-name").forEach((companyval) => {
            companyval.value = name
        }),
        document.querySelectorAll(".company-address").forEach((companyadr) => {
            companyadr.value = address
        }),
        document.querySelectorAll(".company-address1").forEach((companyadr1) => {
            companyadr1.value = address1
        }),
        document.querySelector(".invoice-id").value = id,
        document.querySelector(".create-date").value = create,
        document.querySelector(".due-date").value = due
}

document.getElementById("invoice-create").onclick = () => {
    document.querySelector(".invoice-title").innerHTML = "Create Invoice"

}
let invoicePrint = (ele)=>{
    document.querySelector(".invoice-edit").click()
    setTimeout(()=>{
        window.print()
    },100)
}