// Fonction d'ajout de widget
var inputs = document.getElementsByClassName('widgetadd')
//En gros ici on detecte si on clique sur le bouton
Array.from(inputs).forEach(e => {
    e.addEventListener('click', function(e) {
        // J'envoie en ajax
        $.ajax({
            type    : 'post', 
            cache   : false,
            url     : 'projects/add_widget',
            data    : {type : this.id},
            success: function(resp) {
                // J'ajoute la reponse a l'html
                var target = document.getElementById('widgetcontainer')
                target.insertAdjacentHTML('beforeend', resp)
            }
        });
    });
  });

  //Fonction suppression widget