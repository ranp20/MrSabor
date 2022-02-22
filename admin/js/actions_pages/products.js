/************************** LISTAR RESTAURANTES **************************/
$(function(){
  $("#newprice").attr("disabled", "disabled");
  $("#newprice").prev('label').addClass("disabled");
  $("#newprice").addClass("disabled");
  $("#newprice-update").attr("disabled", "disabled");
  $("#newprice-update").prev('label').addClass("disabled");
  $("#newprice-update").addClass("disabled");
  listProducts();
});

/* INSERTAR PRODUCTO - SELECT OFERTA*/
$("#seloffert").change(function(){
  let optionoffer = $(this).val();
  if(optionoffer == 1){
    $("#newprice").attr("disabled", "disabled");
    $("#newprice").prev('label').addClass("disabled");
    $("#newprice").addClass("disabled");
  }else{
    $("#newprice").removeAttr("disabled");
    $("#newprice").prev('label').removeClass("disabled");
    $("#newprice").removeClass("disabled");
  }
});
/* ACTUALIZAR PRODUCTO - SELECT OFERTA*/
$("#seloffert-update").change(function(){
  let optionoffer = $(this).val();
  if(optionoffer == 1){
    $("#newprice-update").attr("disabled", "disabled");
    $("#newprice-update").prev('label').addClass("disabled");
    $("#newprice-update").addClass("disabled");
  }else{
    $("#newprice-update").removeAttr("disabled");
    $("#newprice-update").prev('label').removeClass("disabled");
    $("#newprice-update").removeClass("disabled");
  }
});

/************************** AGREGAR PRODUCTO **************************/
$(document).on('click', '#btnadd-product', function(e){
  e.preventDefault();

  var formdata = new FormData();
  var filelength = $('.images')[0].files.length;
  for (var i = 0;i < filelength; i ++) {
    formdata.append("imagen", $('.images')[0].files[i]);
  }

  formdata.append("name", $('#name').val());
  formdata.append("price", $('#price').val());
  formdata.append("stock", $('#stock').val());
  formdata.append("offer", $('#seloffert').val());
  formdata.append("newprice", $('#newprice').val());
  formdata.append("idcategory", $('#selcategory').val());
  formdata.append("idrestaurant", $('#selrestaurant').val());
  formdata.append("description", $('#description').val());

  $.ajax({
    url: "admin/controllers/add_products.php",
    method: "POST",
    data: formdata,
    contentType: false,
    cache: false,
    processData: false,
  }).done((res) => {

    console.log(res);
    $('#form-add-product')[0].reset();
    listProducts();
    $('#addproductModal').modal("hide");

  });
});

/************************** LISTAR PRODUCTOS **************************/
function listProducts(searchVal){ 
  $.ajax({
    url: "admin/controllers/list_products.php",
    method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: {searchList : searchVal},
  }).done( function (res) {

    var response = JSON.parse(res);
    var template = "";

    if(response.length == 0){
      template = `
        <tr>
          <td colspan="11">
            <div class="msg-non-results-res">
              <img src="admin/assets/img/icons/icon-sad-face.svg" alt="" class="msg-non-results-res__icon">
              <h3 class="msg-non-results-res__title">No se encontraron resultados...</h3>
            </div>
          </td>
        </tr>
      `;

      $("#tbl_products").html(template);
    }else{
      response.forEach(e => {
      
      var img_route = "admin/assets/img/products/"+e.photo;

      template += `
        <tr id="item-${e.id}">
          <td>${e.id}</td>
          <td>${e.name}</td>
          <td>${e.description}</td>
          <td class="text-center">${e.price}</td>
          <td class="text-center">${e.stock}</td>
          <td class="cont-img-table">
            <a href="${img_route}" target="_blank">
              <img loading="lazy" src="${img_route}">
            </a>
          </td>
          <td class="text-center">${e.offer}</td>
          <td>${e.name_restaurant}</td>
          <td>${e.name_category}</td>
          <td class="cont-btn-update">
            <a class="btn-update-category" data-toggle="modal" data-target="#updateModal"  href="#" 
              data-id="${e.id}"
              data-name="${e.name}"
              data-description="${e.description}"
              data-price="${e.price}"
              data-stock="${e.stock}"
              data-photo="${img_route}"
              data-offer="${e.offer}"
              data-idrest="${e.id_restaurant}"
              data-idcateg="${e.id_category}"
              >Editar</a>
          </td>
          <td class="cont-btn-delete" id="cont-btn-delete">
            <a class="btn-delete-category" data-toggle="modal" data-target="#deleteModal" href="#"
              data-id="${e.id}"
              >Eliminar</a>
          </td>
        </tr>
        `;
      });
      
      $("#tbl_products").html(template);
    }

  });
}

/************************** BUSCADOR DE PRODUCTOS **************************/
$(document).on('keyup', '#searchproduct', function() {
  var searchVal = $(this).val();

  if(searchVal != ""){
    listProducts(searchVal);
  }else{
    listProducts();
  }
});

// /************************** LISTAR DATOS DEL RESTAURANTE EN EL MODAL**************************/
// $(document).on('click', '.btn-update-category', function(e){
//   e.preventDefault();

//   $.each($(this), function(i, v){
//     var item_data = {
//       id: $(this).attr('data-id'),
//       name: $(this).attr('data-name'),
//       photo: $(this).attr('data-photo'),
//       idrestaurant: $(this).attr('data-idrest'),
//     };

//     $('#idupdate-category').val(item_data['id']);
//     $('#name-update').val(item_data['name']);
//     $('#photo-update').attr('href', item_data['photo']);

//   });
// });

// /************************** LISTAR ID DEL RESTAURANTE EN EL MODAL **************************/
// $(document).on('click', '.btn-delete-category', function(e){
//   e.preventDefault();

//   var id = $(this).attr('data-id');
//   $('#iddelete-category').val(id);
// });

// /************************** ELIMINAR RESTAURANTE **************************/
// $(document).on('click', '#btndelete-category', function(e){
//   e.preventDefault();

// 	var id = $('#iddelete-category').val();

//   $.ajax({
//     url: "admin/controllers/delete_categories.php",
//     method: "POST",
//     data: {id : id},
//   }).done((e) => {
    
//     $("#item-" + id).remove();
//     $('#deleteModal').modal("hide");
//   });
// });

// /************************** ACTUALIZAR RESTAURANTE POR ID **************************/
// $(document).on('click', '#btnupdate-category', function(e){
//   e.preventDefault();
  
//   var formdata = new FormData();
//   var filelength = $('.images-update')[0].files.length;
//   for (var i = 0;i < filelength; i ++) {
//     formdata.append("imagen", $('.images-update')[0].files[i]);
//   }

//   formdata.append("name", $('#name-update').val());
//   //formdata.append("id_restaurant", $('#selrestaurant-update').val());
//   formdata.append("id", $('#idupdate-category').val());

//   $.ajax({
//     url: "admin/controllers/update_categories.php",
//     method: "POST",
//     data: formdata,
//     contentType: false,
//     cache: false,
//     processData: false
//   }).done((res) => {
//     listCategories();
//     $('#updateModal').modal("hide");
//   });
// });