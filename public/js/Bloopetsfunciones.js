
$(document).ready(main);
  function main (){
    $('span#btn_si').click(function() {
	  var $principal = $('section.content');
    var $secundaria = $('section.content1');
        $secundaria.removeClass('heidde');
        $secundaria.removeClass('aparecer');
        $principal.addClass('heidde');
  });
}

$(document).ready(function(){
	$('input').iCheck({
  checkboxClass: 'icheckbox_flat-orange',
  radioClass: 'iradio_flat-orange',
  increaseArea: '20%' // optional
	});
});

$( "div.foto" ).mouseover(function() {
    $(this).find("span").html("<i class='fa fa-camera'></i> <br> Subir foto");
    $(this).find( "span" ).addClass('txt_subir');

  })
  .mouseout(function() {
    $(this).find("span").html("");
    $(this).find( "span" ).removeClass('txt_subir');
  });

/* funciones de index.blade.php para js*/  

$('#listaComunidad').on('change',function(e){
    //console.log(e);
    var comu_id = e.target.value;

    $.get('/razas?comu_id='+comu_id, function(data){
        $('#Selectrazas').empty();
        $.each(data, function(index, razaObj) {
           $('#Selectrazas').append('<option value="'+razaObj.id+'">'+razaObj.raza+'</option>');
        });
    });
});

/*codigo del boton btn_registrar
espera la accion del btn_registrar del formulario principal 
*/

$('#btn_registrar').click(function() {
 var formData = new FormData($("#registro")[0]);
 $.ajax({
  url: 'http://localhost:8000/usuario', 
  type: 'POST',
  headers :{'X-CSRF-TOKEN': token},
  dataType: 'json',
  cache: false,
  contentType: false,
  processData: false,
  data: formData,
  success:function(data){

      if(data.imgInval=='false'){
        alert('La imagen ingresada es invalida');
      }
      if(data.mensaje=='true'){
        alert('Bienvenido a Blooplets! usted ya es parte de Blooplets');
        document.getElementById("registro").reset();
      }
  }
});

});


$("#btn_login").click(function(event) {
  var formData =new FormData($("#login")[0]);

  $.ajax({
    url: '/path/to/file',
    type: 'default GET (Other values: POST)',
    dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
    data: {param1: 'value1'},
  })
  .done(function() {
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});


    function solo_numeros(e){
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8 || tecla==9)
      return true;
      patron =/[0-9]/;
      tecla_final = String.fromCharCode(tecla);
      return (patron.test(tecla_final));
    }

    function validar_numeros(e) {
      tecla = e.which || e.keyCode;
      patron = /\d/; // Solo acepta números
      te = String.fromCharCode(tecla);
      return (patron.test(te) || tecla == 9 || tecla == 8);
    }

    function solo_numeros1(e){
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8)
      return true;
      patron =/[1-3]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }


    function solo_monedas(e){
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8)
      return true;
      patron =/[0123456789.]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

    function solo_fechas(e){
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8)
      return true;
      patron =/[0-9, -]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

    function solo_letras(e){
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8)
      return true;
      patron =/[A-Z, a-z,ñ,Ñ]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

    function numeros_letras(e){
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8)
      return true;
      patron =/[A-Z, a-z, 0-9,ñ,Ñ]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

    function valemail(valor){
      re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
      if(!re.exec(valor))    {
        return false;
      }else{
        return true;
      }
    }
