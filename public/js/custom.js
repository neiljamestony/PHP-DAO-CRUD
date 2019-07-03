Swal.fire({
    position: "top-end",
    type: "success",
    title: "DATA INSERTED SUCCESSFULLY",
    showConfirmButton: false,
    timer: 1500
});
// $(function(){

//     $('body')
//         .on('click', '#add-btn', function(){

//             var fn = $('#fname').val();
//             var ln = $('#lname').val();

//             // var res = fname . lname;

//             // console.log(res);

//             $.ajax({

//                 url: URL + 'home/addUser',
//                 method: 'POST',
//                 datatype: 'json',
//                 data: {

//                     fname:fn,
//                     lname:ln
//                 },
//                 success:function(data){

//                     switch(data){

//                         case 1:

//                             alert('DATA SUCCESSFULLY INSERTED!');

//                         break;

//                         case 2:
//                             alert('FAILED TO INSERT DATA!');
//                         break;
//                     }

//                 }
//             });

//         })

// });