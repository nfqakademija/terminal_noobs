function openModalTeam(id, name, mentor){
    $("#modal-team-id").html(id);
    $("#modal-team-name").html(name);
    $("#modal-team-mentor-name").html(mentor);
    $("#myModal").show();
}

function closeModalTeam(){
    $("#myModal").hide();
}/**
 * Created by vika on 16.12.5.
 */
