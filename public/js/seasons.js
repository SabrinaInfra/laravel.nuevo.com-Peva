var timer;
function myFunction(){
  timer = setTimeout(function(){
    var x = $('#fname').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    if( x.length > 0 )
    {
        $.post('http://laravel.serie.com/executeSearch',{ x: x, _token: token },
         function(markup){
           $('.welcome').hide();
           $('#muestro').removeClass('hide').show();
            $('#muestro').html(markup);
        });

          //$("#muestro").text(x)
    }
  },500);

}
function down(){

  clearTimeout(timer);
}

function showSeason(){
      var valor = $('select[name=serie_id]').val();
      if( valor == ''){
        $('.muestro').addClass('hide');
        $('.formulario').addClass('hide');
      }
      else {
      $('.muestro').removeClass('hide').show();
        $.post('http://laravel.serie.com/getSeason',{ valor: valor},
         function(markup){
            $('.muestro').html(markup);
        });

      }
}
function showSeasonEpisode(){
      var valor = $('select[name=serie_id]').val();
      if( valor == ''){
        $('.muestro').addClass('hide');
      }
      else {
      $('.muestro').removeClass('hide').show();
        $.post('http://laravel.serie.com/getSeasonEpisode',{ valor: valor},
         function(markup){
            $('.muestro').html(markup);
        });
      }
}
function showEpisodes(){
      var valor = $('select[name=Season]').val();
      if( valor == ''){
        $('.episodes').addClass('hide');
      }
      else {
      $('.episodes').removeClass('hide').show();
      $('.formulario').removeClass('hide').show();
        $.post('http://laravel.serie.com/getEpisodes',{ valor: valor},
         function(markup){
            $('.episodes').html(markup);
        });
    }

}
function showEpisode(){
      var valor = $('select[name=Season]').val();
      if( valor == ''){
        $('.formulario').addClass('hide');
      }
      else {
      $('.formulario').removeClass('hide').show();
    }
}
function showWelcome(){
        $('#muestro').addClass('hide');
        $('.welcome').removeClass('hide').show();
    }
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
