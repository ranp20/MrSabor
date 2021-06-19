$(function(){
	iniciarMap();		
  listRestaurants();
});

function iniciarMap(){
	var coord = {lat: - 12.0453 , lng: - 77.0311};
  var map = new google.maps.Map(document.getElementById('showMapRestaurants'), {
    zoom: 11,
    center: coord
  });  
  var marker = new google.maps.Marker({
    map: map,
    draggable: true,
    position: coord
  });

  marker.addListener("dragend", function(e){
    document.querySelector("#latdragendRest").innerHTML = this.getPosition().lat();
    document.querySelector("#lngdragendRest").innerHTML = this.getPosition().lng();
  });
}

$(document).on("keyup", "#searchIptRestaurant", function(e){
  e.preventDefault();
  var restsearch = $(this).val();
  if(restsearch != ""){
    lisSearchRestaurants(restsearch);
  }else{
    lisSearchRestaurants(restsearch);
  }
});

function lisSearchRestaurants(restsearch){
  $.ajax({
    url: "./controllers/search-Restaurants.php",
    method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: {searchRest : restsearch},
  }).done((res) => {

    var resultsearch = JSON.parse(res);
    var template = "";

    if($("#searchIptRestaurant").val() == ""){
      template = `
          <li class='search-rest__cont--cListRest--cL--c--contList--m--iAny'>
            <div class='search-rest__cont--cListRest--cL--c--contList--m--iAny--cAnyresult'>
              <img class='search-rest__cont--cListRest--cL--c--contList--m--iAny--cAnyresult--icon' src='./assets/img/icons/icon-keyboard.svg' alt='img_anymsgsearch'>
              <p class='search-rest__cont--cListRest--cL--c--contList--m--iAny--cAnyresult--msg'>Escribe algo...</p>
            </div>
          </li>
        `;

      $("#listsearchRest").html(template);
    }else if(resultsearch.length == 0){
      template = `
          <li class='search-rest__cont--cListRest--cL--c--contList--m--iAny'>
            <div class='search-rest__cont--cListRest--cL--c--contList--m--iAny--cAnyresult'>
              <img class='search-rest__cont--cListRest--cL--c--contList--m--iAny--cAnyresult--icon' src='./assets/img/icons/icon-keyboard.svg' alt='img_anymsgsearch'>
              <p class='search-rest__cont--cListRest--cL--c--contList--m--iAny--cAnyresult--msg'>Escribe algo...</p>
            </div>
          </li>
        `;

      $("#listsearchRest").html(template);

    }else{
      resultsearch.forEach( e =>{
        var pathstrphoto = "./admin/assets/img/restaurants/"+e.imgrest;
        template += `
          <li class='search-rest__cont--cListRest--cL--c--contList--m--i'>
            <a href='#' class='search-rest__cont--cListRest--cL--c--contList--m--i--link'>
              <div class='search-rest__cont--cListRest--cL--c--contList--m--i--link--cImg'>
                <img src='${pathstrphoto}' alt=''>
              </div>
              <div class='search-rest__cont--cListRest--cL--c--contList--m--i--link--cInfo'>
                <h3 class='search-rest__cont--cListRest--cL--c--contList--m--i--link--cInfo--title'>${e.namerest}</h3>
                <p class='search-rest__cont--cListRest--cL--c--contList--m--i--link--cInfo--address'><b>Dirección:</b>&nbsp;${e.address}</p>
                <p class='search-rest__cont--cListRest--cL--c--contList--m--i--link--cInfo--telephone'><b>Telf:</b>&nbsp;${e.telephone}</p>
                <p class='search-rest__cont--cListRest--cL--c--contList--m--i--link--cInfo--listcategs'><b>Categorías:</b>&nbsp;${e.namecateg}</p>
              </div>
            </a>
          </li>
        `;
      });     

      $("#listsearchRest").html(template);
    }
  });
}