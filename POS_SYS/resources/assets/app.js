$(function () {
      const taskInput = $('#item-input');
      const addItem = $('#will');
      const Container = $('#transactions');
      const baseUrl = "http://htudemo.local";


      $.ajax({
        type: "GET",
        url: baseUrl + "/sales",
        success: function (response) {
          console.log(response);
          response.body.forEach(element => {
            console.log(response);
            Container.append(`
                <tr data-id=${element.id}>
                        <input type="hidden" name='id'data-id=id${element.id} value=${element.id}>
                        <td class="text-center">${element.id}</td>
                        <td class="text-center">${element.item_id}</td>
                        <td class="text-center">${element.item_name}</td>
                        <td class="text-center"><input  type="number" data-id=input${element.id} name=input${element.id} value=${element.quantity} style="
                        width: 5rem;
                        border: none;
                        background-color: #ffffff00;" class="text-center"></td>
                        <input type="hidden" name='price'data-id=price${element.id} value=${element.price}>
                        <td class="text-center" >${element.price}</td>
                        <td class="text-center">${element.total}</td>
                        <td class="text-center" >${element.created_at}</td>
                        <td class="text-center">${element.updated_at}</td>
                        <td class="text-center">
                        <button type="submit" data-id=edit${element.id} class="text-center btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button data-id=delete${element.id} class="text-center btn btn-danger" type="button"><i class="fa-solid fa-trash"></i></button>
                        </td>
                        </tr>




                `);
                $(`button[data-id="edit${element.id}"]`).click(function () {
                let quantity_update= $(`input[data-id="input${element.id}"]`).val();
                
                  $.ajax({
                      type: "PUT",
                      url: baseUrl + "/sales/update",
                      data: JSON.stringify({
                          id: element.id,
                          quantity:quantity_update
                      }),
                      dataType: "application/json",
                      success: function (response) {
                      }
                  });
                });
                $(`button[data-id="delete${element.id}"]`).click(function () {
                  $.ajax({
                      type: "DELETE",
                      url: baseUrl + "/sales/delete",
                      data: JSON.stringify({
                      id: element.id
                      }),
                      dataType: "application/json",
                      success: function (response) {
                      }
                  });
                  $(this).parent().hide('slow', function () {
                      $(this).parent().remove();
                  });
                  totalSales -= element.quantity * element.price;
                  totalSalesElement.text(totalSales);
              });
          });
          
        }
      });
      $('#items_id').focus();
        addItem.click(function () {
        let user_id_input = $('#user_id').val();
        let items_id_input = $('#items_id').val();
        let quantity_input = $('#quantity').val();
        if (user_id_input == "" || items_id_input == "" || quantity_input == "") {
          alert('you should put the information');
        }




        $.ajax({
          type: "POST",
          url: baseUrl + "/sales/create",
          data: JSON.stringify({
            user_id: user_id_input,
            item_input_id: items_id_input,
            quantity: quantity_input
          }),
          dataType: "application/json",
          success: function (response) {
            response.body.forEach(element => {
              Container.append(`
                <tr data-id=${element.id}>
                    <input type="hidden" name='id'data-id=id${element.id} value=${element.id}>
                    <td class="text-center">${element.id}</td>
                    <td class="text-center">${element.item_id}</td>
                    <td class="text-center">${element.item_name}</td>
                    <td class="text-center"><input  type="number" data-id=input${element.id} name=input${element.id} value=${element.quantity} style="
                    background-color: white;
                    width: 5rem;
                    border: none;
                    background-color: white;" class="text-center"></td>
                    <input type="hidden" name='price'data-id=price${element.id} value=${element.price}>
                    <td class="text-center">${element.price}</td>
                    <td class="text-center">${element.total}</td>
                    <td class="text-center">${element.created_at}</td>
                    <td class="text-center">${element.updated_at}</td>
                    <td class="text-center">
                    <button type="submit" data-id=edit${element.id} class="text-center btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button data-id=delete${element.id} class="text-center btn btn-danger" type="button"><i class="fa-solid fa-trash"></i></button>
                    </td>
                    </tr>
                `);
              totalSales += element.quantity * element.price;
              totalSalesElement.text(totalSales);
            });
          }
        });
      })
});