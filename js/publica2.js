(function ($, Drupal) {
  Drupal.behaviors.publica2 = {
    attach: function (context, settings) {
      $('#publica2-checkbox-tuteanuncias', context).change(function () {
        var isChecked = $(this).is(':checked');
        var iframe = $('#contenedor-formulario-externo');

        if (isChecked) {
          // Extracción de datos basada en la estructura del HTML
          //var descripcion = $("div:contains('anuncio')").next('div').find('p').text();
          //var titulo = $("div:contains('titulo')").text();

          // Construye la URL con parámetros
          var urlConDatos = "https://tuteanuncias.com/listing-form/?" + 
            //"title=" + encodeURIComponent(titulo) + 
            //"&description=" + encodeURIComponent(descripcion) +


          console.log(urlConDatos); // Log para depuración
          //añadimos el iframe al contenedor, sin eliminar lo que haya
          iframe.html('<iframe src="' + urlConDatos + '" style="width:100%; height:600px;"></iframe>').show();          
        } else {
          iframe.hide();
        }
      });
      $('#publica2-checkbox-vipscort', context).change(function () {
        var isChecked = $(this).is(':checked');
        var iframe = $('#contenedor-formulario-externo');
        console.log("changed");

        if (isChecked) {
          // Extracción de datos basada en la estructura del HTML
          //var descripcion = $("div:contains('anuncio')").next('div').find('p').text();
          //var titulo = $("div:contains('titulo')").text();
          //log
          console.log("checked");
          // Construye la URL con parámetros
          var urlConDatos = "https://vipscort.es/listing-form/" + 
            //"title=" + encodeURIComponent(titulo) + 
            //"&description=" + encodeURIComponent(descripcion) +


          console.log(urlConDatos); // Log para depuración
          iframe.html('<iframe src="' + urlConDatos + '" style="width:100%; height:600px;"></iframe>').show();
        } else {
          iframe.hide();
        }
      });
      $('#publica2-checkbox-destacamos', context).change(function () {
        var isChecked = $(this).is(':checked');
        var iframe = $('#contenedor-formulario-externo');
        console.log("changed");

        if (isChecked) {
          // Extracción de datos basada en la estructura del HTML
          //var descripcion = $("div:contains('anuncio')").next('div').find('p').text();
          //var titulo = $("div:contains('titulo')").text();
          //log
          console.log("checked");
          // Construye la URL con parámetros
          var urlConDatos = "https://destacamos.net/newad.php" + 
            //"title=" + encodeURIComponent(titulo) + 
            //"&description=" + encodeURIComponent(descripcion) +


          console.log(urlConDatos); // Log para depuración
          iframe.html('<iframe src="' + urlConDatos + '" style="width:100%; height:600px;"></iframe>').show();
        } else {
          iframe.hide();
        }
      });
      $('#publica2-checkbox-loquosex', context).change(function () {
        var isChecked = $(this).is(':checked');
        var iframe = $('#contenedor-formulario-externo');
        console.log("changed");

        if (isChecked) {
          // Extracción de datos basada en la estructura del HTML
          //var descripcion = $("div:contains('anuncio')").next('div').find('p').text();
          //var titulo = $("div:contains('titulo')").text();
          //log
          console.log("checked");
          // Construye la URL con parámetros
          var urlConDatos = "https://www.loquosex.com/publicar-anuncio/" + 
            //"title=" + encodeURIComponent(titulo) + 
            //"&description=" + encodeURIComponent(descripcion) +


          console.log(urlConDatos); // Log para depuración
          iframe.html('<iframe src="' + urlConDatos + '" style="width:100%; height:600px;"></iframe>').show();
        } else {
          iframe.hide();
        }
      });
    }
  };
})(jQuery, Drupal);

  