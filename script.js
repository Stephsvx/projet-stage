$(document).ready(function() {
  // Lorsque vous cliquez sur un utilisateur de la liste
  $('#users li').click(function() {
    // Obtenez l'ID de l'utilisateur sélectionné
    var userId = $(this).data('id');
    
    // Mettez à jour l'ID du destinataire dans le formulaire
    $('#destinataire').val(userId);
    
    // Mettez en surbrillance l'utilisateur sélectionné
    $('#users li').removeClass('active');
    $(this).addClass('active');
    
    // Rechargez les messages de l'utilisateur sélectionné (si nécessaire)
    // Vous devrez implémenter cette partie en utilisant PHP pour récupérer les messages de la base de données et les afficher.
  });
});


