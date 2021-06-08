
function loaddoctor()
{



    $.ajax({
        url: "getdoctor.php",
        type: "POST",
        dataType: "JSON",
        success: function(data)
        {

            $.each(data,function(key,value){
                var fname =value.fname;
                var lname =value.lname;
                var email =value.email;
                var phone =value.phone;
                var designation =value.designation;
                var gender =value.gender;

                $("#load_doctor").append(fname+" "+lname+" "+email+" "+phone+" "+designation+" "
                    +gender+"  "+"<br>");
            })
        }
    });
}


$("#load_data").append('<input type="checkbox" class="check"/>')
.append(item1+" "+"("+quantity1+")"
 +'<button onclick="deleteFun(this)"  id="'+item1+'">Delete</button>'
 +"  "+"<br>");
$(".check").prop("checked",true)
                             //.append();
                             
                         })





function deleteFun(element){

    var item2 =element.id;
    $.ajax({
        url: "delete_item.php",
        type: "GET",
        data: {itemm2:item2},
        success: function(data){
            if(data ==1)
            {
                $("#load_data").html("");
                loaddata();
            }else{
                alert("Can't delete record");
            }

        }
    });

}


$(document).ready(function() {

    loaddoctor();
    deleteFun();
});
