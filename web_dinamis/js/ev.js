function get_all_data(){

  $.ajax({
  method: "POST",
  url: "api.php",
  dataType:'json',
  data: { action: "get"}
 })
  .done(function(data) {
    text = '';
    for( x in data ){
      number_rp = new Intl.NumberFormat("bali").format(data[x]['salary']);
      text += "<tr>"+
              "<td>"+data[x]['name']+"</td>"+
              "<td>"+data[x]['work']+"</td>"+
              "<td> Rp "+number_rp+"</td>"+
              "<td><i class='far fa-trash-alt mx-2 text-danger' onclick=delete_data("+data[x]['id']+")></i><i class='far fa-edit mx-2 text-info' data-toggle='modal' data-target='#edit-modal' onclick=edit_data("+data[x]['id']+")></i></td>"+
              "</tr>";
    }
    $('tbody').html(text);
  });

}

function delete_data(id){
    $.ajax({
    method: "POST",
    url: "api.php",
    dataType:'json',
    data: {action:'delete',id:id}
   })
    .done(function(data) {

      if(data['status'] == 1){
        location.reload();
      }
    });
}

function edit_data(id){

  $.ajax({
  method: "POST",
  url: "api.php",
  dataType:'json',
  data: { action: "get_by_id", id:id}
 })
  .done(function(data) {
    $('#name').val(data[0]['name']);
    $('#work').val(data[0]['work']);
    $('#salary').val(data[0]['salary']);
    $('#id').val(data[0]['id']);
  });

}

get_all_data();

$(function(){

  $("#tambah").click(function(){
    $.ajax({
    method: "POST",
    url: "api.php",
    dataType:'json',
    data: $('#form-tambah').serialize()
   })
    .done(function(data) {

      if(data['status'] == 1){
        location.reload();
      }
    });
  });

  $("#edit").click(function(){
    $.ajax({
    method: "POST",
    url: "api.php",
    dataType:'json',
    data: $('#form-edit').serialize()
   })
    .done(function(data) {
      if(data['status'] == 1){
        location.reload();
      }
    });
  });

});
