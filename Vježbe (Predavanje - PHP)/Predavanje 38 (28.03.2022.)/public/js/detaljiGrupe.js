
    $( '#uvjet' ).autocomplete({
        source: function(req,res){
           $.ajax({
               url: '/polaznik/trazipolaznik/' + req.term + '/' + grupa,
               success:function(odgovor){
                   res(odgovor);
                //console.log(odgovor);
            }
           }); 
        },
        minLength: 2,
        select:function(dogadaj,ui){
            spremi(ui.item);
        }
    }).autocomplete( 'instance' )._renderItem = function( ul, item ) {
        return $( '<li>' )
          .append( '<div>' + item.sifra + ' ' + item.ime + ' ' + item.prezime + '</div>')
          .appendTo( ul );
      };

      function spremi(polaznik){
          console.log(grupa);
          console.log(polaznik.sifra);
          $.ajax({
            url: '/grupa/dodajpolaznik/' + grupa + '/' + polaznik.sifra,
            success:function(odgovor){
                if(odgovor==='OK'){
                    $('#polaznici').append('<tr>' + 
                        '<td>' + polaznik.ime +' ' + polaznik.prezime +'</td>' + 
                        '<td>' + 
                            '<a onclick="return confirm(\'Sigurno obrisati?\');"  href="#">' + 
                                '<i style="color: red" title="Obriši" ' + 
                                    'class="fas fa-2x fa-trash"></i>' + 
                            '</a>  ' + 
                        '</td>' + 
                    '</tr>');
                }else{
                    alert('Dogodola se pogreška, pokušajte ponovo');
                }
               
             
         }
        }); 
      }