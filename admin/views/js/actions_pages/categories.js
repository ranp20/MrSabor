// ------------ LISTAR RESTAURANTES
$(() => {
  listCategories();
});
// ------------ AGREGAR RESTAURANTE
$(document).on('click', '#btnadd-category', function(e){
  e.preventDefault();
  var formdata = new FormData();
  var filelength = $('.images')[0].files.length;
  for (var i = 0;i < filelength; i ++) {
    formdata.append("imagen", $('.images')[0].files[i]);
  }
  formdata.append("name", $('#name').val());
  formdata.append("selrestaurant", $('#selrestaurant').val());
  $.ajax({
    url: "../admin/controllers/add_categories.php",
    method: "POST",
    data: formdata,
    contentType: false,
    cache: false,
    processData: false,
  }).done((e) => {
    if(e != "" && e != "[]"){
      if(e == "true"){
        $('#form-add-category')[0].reset();
        listCategories();
        $('#addcategoryModal').modal("hide");
        Swal.fire({
          title: 'Èxito!',
          html: `<span class='font-w-300'>Se ha creado una categoría.</span>`,
          icon: 'success',
          confirmButtonText: 'Aceptar'
        });
      }else{
        console.log('Lo sentimos, ocurriò un ror al procesar la solicitud');
      }
    }else{
      console.log('Lo sentimos, ocurriò un ror al procesar la solicitud');
    }
  });
});
// ------------ AGREGAR RESTAURANTES
function listCategories(searchVal){ 
  $.ajax({
    url: "../admin/controllers/list_categories.php",
    method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: {searchList : searchVal},
  }).done((r) => {
    var response = JSON.parse(r);
    var template = "";
    if(response.length == 0){
      template = `
        <tr>
          <td colspan="7">
            <div class="msg-non-results-res">
              <img src="admin/assets/img/icons/icon-sad-face.svg" alt="" class="msg-non-results-res__icon">
              <h3 class="msg-non-results-res__title">No se encontraron resultados...</h3>
            </div>
          </td>
        </tr>
      `;
      $("#tbl_categories").html(template);
    }else{
      response.forEach(e => {
      var img_route = "../admin/views/assets/img/categories/"+e.photo;
      template += `
        <tr id="item-${e.id}">
          <td>${e.id}</td>
          <td>${e.name}</td>
          <td class="cont-img-table">
            <a href="${img_route}" target="_blank">
              <img loading="lazy" src="${img_route}">
            </a>
          </td>
          <td>${e.name_restaurant}</td>
          <td class="cont-btn-update">
            <a class="btn-update-category" data-toggle="modal" data-target="#updateModal"  href="#" 
              data-id="${e.id}"
              data-name="${e.name}"
              data-photo="${img_route}"
              data-idrest="${e.id_restaurant}"
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
      $("#tbl_categories").html(template);
    }
  });
}
// ------------ BUSCADOR DE RESTAURANTES
$(document).on('keyup', '#searchcategories', function() {
  var searchVal = $(this).val();
  if(searchVal != ""){
    listCategories(searchVal);
  }else{
    listCategories();
  }
});
// ------------ LISTAR DATOS DEL RESTAURANTE EN EL
$(document).on('click', '.btn-update-category', function(e){
  e.preventDefault();
  $.each($(this), function(i, v){
    var item_data = {
      id: $(this).attr('data-id'),
      name: $(this).attr('data-name'),
      photo: $(this).attr('data-photo'),
      idrestaurant: $(this).attr('data-idrest'),
    };
    $('#idupdate-category').val(item_data['id']);
    $('#name-update').val(item_data['name']);
    $('#photo-update').attr('href', item_data['photo']);
  });
});
// ------------ LISTAR ID DEL RESTAURANTE EN EL MODAL
$(document).on('click', '.btn-delete-category', function(e){
  e.preventDefault();
  var id = $(this).attr('data-id');
  $('#iddelete-category').val(id);
});
// ------------ ELIMINAR RESTAURANTE
$(document).on('click', '#btndelete-category', function(e){
  e.preventDefault();
	var id = $('#iddelete-category').val();
  $.ajax({
    url: "../admin/controllers/delete_categories.php",
    method: "POST",
    data: {id : id},
  }).done((e) => { 
    $("#item-" + id).remove();
    $('#deleteModal').modal("hide");
  });
});
// ------------ ACTUALIZAR RESTAURANTE POR ID
$(document).on('click', '#btnupdate-category', function(e){
  e.preventDefault();
  var formdata = new FormData();
  var filelength = $('.images-update')[0].files.length;
  for (var i = 0;i < filelength; i ++) {
    formdata.append("imagen", $('.images-update')[0].files[i]);
  }
  formdata.append("name", $('#name-update').val());
  //formdata.append("id_restaurant", $('#selrestaurant-update').val());
  formdata.append("id", $('#idupdate-category').val());
  $.ajax({
    url: "../admin/controllers/update_categories.php",
    method: "POST",
    data: formdata,
    contentType: false,
    cache: false,
    processData: false
  }).done((res) => {
    listCategories();
    $('#updateModal').modal("hide");
  });
});