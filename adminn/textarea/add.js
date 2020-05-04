$('form').on('click', '.removeVar', function() {
    $(this).closest('tr').remove();
    $('.count').each(function(i) {
        $(this).text(i + 1);
    });
    var varCount = $('#myTable tr').length - 1;
    $("#row_count").val(varCount);
});


//add a new node
$('#addVar').on('click', function() {
    var varCount = $('#myTable tr').length;
    $("#row_count").val(varCount);
    var a = Math.floor(100000 + Math.random() * 900000);
    a = String(a);
    //    loadReceiptLedgers(row_id);
    $node = ['<tr>',
        '<td><input type="date" required class="form-control" name="sh_date[]"></td><td><textarea required class="form-control" name="fn_sub[]"></textarea></td><td><textarea required class="form-control" name="an_sub[]"></textarea></td>',
        '<td><button type="button" class=" removeVar btn btn-danger fa fa-trash"> </button>',
        '</td></tr>'
    ].join('\n');
    $('#myTable > tbody:last').append($node);
});

$("#myTable").on('change', ".ctlGroup", function() {
    var row = $(this).closest('tr');
    $.getJSON("/ajax-select.php", { id: $(this).val(), ajax: 'true' }, function(j) {

        var options = '';

        for (var i = 0; i < j.length; i++) {
            options += '<option value="' + j[i].title + '">' + j[i].title + '</option>';
        }

        row.find(".ctlItem").html(options);
    });
});

//Table 1

// $('#myForm1').on('click', '.removeVar1', function() {
//     $(this).closest('tr').remove();
//     $('.count').each(function(i) {
//         $(this).text(i + 1);
//     });
//     var varCount1 = $('#myTable1 tr').length - 2;
//     $("#row_count1").val(varCount1);
//     if (varCount1 == 3) {
//         document.getElementById("check_4").value = "4";
//     }
// });

// //add a new node
// $('#addVar1').on('click', function() {
//     var varCount1 = $('#myTable1 tr').length - 1;
//     $("#row_count1").val(varCount1);
//     var a = Math.floor(100000 + Math.random() * 900000);
//     a = String(a);
//     var row_id = a.substring(0, 4);
//     var check_val = varCount1 + 1;
//     //    loadReceiptLedgers(row_id);
//     if (varCount1 < 5) {
//         $node = ['<tr>',
//             '<td><input type="date" class="form-control" name="option_text[]"></td><td><textarea class="form-control" name="option_text[]"></textarea></td><td><textarea class="form-control" name="option_text[]"></textarea></td>',
//             '<td><button type="button" class=" removeVar1 btn btn-danger fa fa-trash"> </button>',
//             '</td></tr>'
//         ].join('\n');
//         $('#myTable1 > tbody:last').append($node);
//     } else {
//         alert('Maximum six options allowed !!')
//     }
// });


// $("#myTable1").on('change', ".ctlGroup", function() {
//     var row = $(this).closest('tr');
//     $.getJSON("/ajax-select.php", { id: $(this).val(), ajax: 'true' }, function(j) {

//         var options = '';

//         for (var i = 0; i < j.length; i++) {
//             options += '<option value="' + j[i].title + '">' + j[i].title + '</option>';
//         }

//         row.find(".ctlItem").html(options);
//     });
// });