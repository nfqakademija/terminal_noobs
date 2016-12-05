//edit type modal

function openModalTeam(id, name, mentor){
    $("#modal-team-id").html(id);
    $("#modal-team-name").html(name);
    $("#modal-team-mentor-name").html(mentor);
    $("#myModal").show();
}

function closeModalTeam(){
    $("#myModal").hide();
}


//create type modal
function openModalLector(){
    $("#modal-lector-name").html(name);
    $("#modal-lector-email").html(email);
    $("#modal-lector-lecture").html(title);
    $("#myModal").show();
}

function closeModalLector(){
    $("#myModal").hide();
}
