let removeItem = document.getElementsByClassName('btn-danger');
console.log(removeItem);
for(let i=0; i<removeItem.length; i++) {
    let button = removeItem[i];
    button.addEventListener('click', function(event) {
        var btnclicked = event.target;
        btnclicked.parentElement.parentElement.remove();
        console.log('clicked');
        updateCartTotal();
    })

}

let quantityInputs = document.getElementsByClassName('form-control');
for(let i=0; i<quantityInputs.length; i++) {
    let input = quantityInputs[i];
    input.addEventListener('change', quantityChanged);
}

//increment-decrement buttons for changing the quantities

//jQuery event -> ensures first that all the html elements in the browser are loaded and than executes the script code
// $(document).ready(function () {
//     //JQuery event listener
//     $('.decrement-btn').click(function (e) { 
//         e.preventDefault();
//         let qty = $(this).closest('.product_data').find('.input-qty').val();   //finds the quantity value

//         let value = parseInt(qty, 10);  //we want the maximum quantity to be 10
//         value = isNaN(value) ? 0 : value;       //if the value is not a number, then we put 0, otherwise we put the value that we want
//         if(value > 1) {
//             value--; //we decrement the value
//             $('.input-qty').val(value);  //then we append the updated value back
//             $(this).closest('.product_data').find('.input-qty').val(value);
//         }
//     });
// });

// $(document).ready(function () {
//     $('.increment-btn').click(function (e) { 
//         e.preventDefault();
//         let qty = $(this).closest('.product_data').find('.input-qty').val();
 
//         let value = parseInt(qty, 10);   
//         value = isNaN(value) ? 0 : value;
//         if(value < 10) {
//             value++;
//             $('.input-qty').val(value);
//             $(this).closest('.product_data').find('.input-qty').val(value);
//         }
//     });
// });

//update the quantity when i click refresh button
// $(document).on('click','.updateQty', function (e) { 
//     let qty = $(this).closest('.product_data').find('.input-qty').val();
//     let prod_id =  $(this).closest('.product_data').find('.prodId').val();
   
//     $.ajax({
//         type: "POST",
//         url: "purchases.php",
//         data:  {
//             "prod_id" : prod_id,
//             "qty" : qty,
//             "action" : "update"  //action : update
//         },
//         success: function (response) {
            
//         }
//     });
// });

function quantityChanged(event) {
    let input = event.target;
    if(isNaN(input.value) || input.value <=0) {
        input.value = 1;
    }
}



function updateCartTotal() {
 
}

