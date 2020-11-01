
    (function ($) {
    $(function () {

        $('.modal').modal();


        $('#posts-container').on('click', '.edit', function () {
            $('#modal1').modal('open');
            $("#post-id").val($(this).data('id'));
            document.getElementById("edit-post-text").focus();
            $('#edit-post-text').val($(this).siblings('p').text());
        });
        

    });
})(jQuery); 







const form = document.querySelector('form');


document.onload = post();



// form.addEventListener("submit", function(event){
//     event.preventDefault();
//     post(requestType);
// });

$("form").submit(function (e) {
    e.preventDefault();
});


    
form.querySelector('textarea').addEventListener('keyup', function () {
    if (form.querySelector('textarea').value.length > 0 && form.querySelector('textarea').value !== "") {
        document.querySelector('input').removeAttribute("disabled");
    } else { 
        document.querySelector('input').setAttribute("disabled","");
    }

});






function post(requestType, id) { 
    const user = "Anas Aldelq";
    let postText = document.querySelector('#post-text').value;

    const xhr = new XMLHttpRequest();

    if (requestType == undefined && id == undefined) {
        requestType = '';
        id = '';
    } else if (requestType == 'add') {
        id = '';
    } else if (requestType == 'delete') {
        const deleteConfiramtion = window.confirm('Are You Sure?!');
        if (deleteConfiramtion != true) {
            id = '';
        }
    } else if (requestType == 'edit') { 
        postText = document.querySelector('#edit-post-text').value; 
        id = document.querySelector("#post-id").value;
    }

    xhr.onreadystatechange = function () { 
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.querySelector('#posts-container').innerHTML = xhr.responseText;
            document.querySelector('#post-text').value = "";
        } 
    }

    xhr.open("GET", `server.php?requestType=${requestType}&id=${id}&user=${user}&postText=${postText}`, true);
    xhr.send();
}



