<script src="{{asset('front/node_modules/jquery/dist/jquery.min.js')}}"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{asset('front/node_modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('front/scripts/style.js')}}"></script>
<script>
$("#messg").click(function () {
    $(".show-popup").fadeToggle();
});

var choices = [];
// $(".bulk-delete").change(function(){
//     $(".bulk-delete").each(function(key,obj){
//         if ($(obj).is(':checked')) {
//             choices.push($(obj).val());
//         }
//     });
//     console.log(choices);
// });

$(".bulk-delete").each(function (e) {
    $(this).on('change', function (event) {
        let vaal = $(this).val();
        if ($(this).is(':checked')) {
            choices.push(vaal);
        } else {
            choices = jQuery.grep(choices, function (value) {
                return value != vaal;
            });
        }
        console.log(choices);
    });
});

$('#checkAll').on('change', function (e) {
    if ($(this).is(':checked')) {
        $(".bulk-delete").each(function (e) {
            var vaaal = $(this).val();
            choices.push(vaaal);
        });
    } else {
        $(".bulk-delete").each(function (e) {
            var vaaal = $(this).val();
            choices = jQuery.grep(choices, function (value) {
                return value != vaaal;
            });
        });
    }
    console.log(choices);
});


function deleteData(url, id, data) {
    $.ajax({
        type: 'DELETE',
        url: url,
        data: data,
        success: function (data) {
            console.log(data);
            $(id).html(data);
        }
    })
}

$("#soft-delete-btn").click(function () {
    console.log(choices);
    deleteData('{{ url("/messages-soft-delete") }}', '#soft-delete-btn', {choices: choices});
});

$("#hard-delete-btn").click(function () {
    console.log(choices);
    deleteData('{{ url("/messages-hard-delete") }}', '#hard-delete-btn', {choices: choices});
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

function follow_user(user_id, follow_id, index) {
//        ("#btn_follow").attr('style','display:none');
    var follow = {
        user_id: user_id,
        follow_id: follow_id,
    };
    console.log(follow);
    $.ajax({
        type: "GET",
        url: '/user-follow',
        data: follow,
        success: function () {
            console.log("Geodata sent");
            //alert("Geodata sent");
            document.getElementById("btn_follow_" + index).style.display = "none";
            document.getElementById("btn_followed_" + index).style.display = "block";

        },
        error: function () {
            console.log('failure');
            // alert('failure');
        }

    })
}
;
$("#city_id").on("change", function () {
   // alert($(this).val());
    $.ajax({
        type: "GET",
        url: '/get_districts/' + $(this).val(),
        data: $(this).val(),
        success: function (result) {
            console.log("Geodata sent");
            for (i = 0; i < result.data.length; i++) {
                console.log("my :  " + result.data[i].text);
                $('#district_id').append("<option value='" + result.data[i].id + "'>" + result.data[i].text + "</option>");
            }
        },
        error: function () {
            console.log('failure');
        }

    })
})

function getDistricts(user_id, follow_id, index) {
//        ("#btn_follow").attr('style','display:none');
    var follow = {
        user_id: user_id,
        follow_id: follow_id,
    };
    console.log(follow);
    $.ajax({
        type: "GET",
        url: '/user-follow',
        data: follow,
        success: function () {
            console.log("Geodata sent");
            // alert("Geodata sent");

        },
        error: function () {
            console.log('failure');
            // alert('failure');
        }

    })
}
;
</script>
@stack('more_footer')
