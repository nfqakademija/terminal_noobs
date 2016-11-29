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
        function getLectureAverageTeam(t, l) //team and lecture
        {
            var average = 0;
            var marks = 0;
            for (i = 0; i < t.members.length; i++) {
                    if (typeof t.members[i].grades[l] === 'undefined') {
                        }
                    else {
                           average += t.members[i].grades[l];
                            marks++;

                            }
                }
           average = average / marks;
            return average;
        }
        function getLecturesAverages(t)
        {
            averages = [];
            for (i = 0; i<4; i++)
            {}
            }
        //var x = getLectureAverageTeam(window.teams[1],2)
function getAttendanceAverages(workshopId, teams)
{
    var average = 0;
    var count = 0;
    for (i = 0; i < teams.length; i++)
    {
        for (j = 0; j < teams[i].members.length; j++)
        {
            for (k = 0; k < teams[i].members[j].attendances.length; k++)
            {
                if (teams[i].members[j].attendances[k].workshopId == workshopId)
                {
                    count++;
                    if(teams[i].members[j].attendances[k].attended) {
                        average++;
                    }
                }
            }
        }
    }
    average = average/count;
    return average;
}


$(document).ready(function() {


    //asnxaksx

});