function save() {
    document.getElementById("mySelect").disabled = false;

}
function openModal(title, description){
    $("#modal-title").html(title);
    $("#modal-description").html(description);
    $("#myModal").show();
}

function closeModal(){
    $("#myModal").hide();
}

function EnableChekboxes() {
    for (i = 0; i < 52; i++) {
        document.getElementById("checkbox" + i).disabled = false;
    }
}
function DisableCheckboxes()
{
    for (i = 0; i < 52; i++){
        document.getElementById("checkbox"+i).disabled = true;
    }
}


$(document).ready(function() {


    //asnxaksx

});