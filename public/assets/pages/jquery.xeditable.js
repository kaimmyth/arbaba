
/**
* Theme: Moltran - Responsive Bootstrap 4 Admin Dashboard
* Author: Coderthemes
* Demo: Editable (Inline editing)
* 
*/


$(function(){

// Product
$('#inline-pcolumn1').editable({
  type: 'text',
  pk: 1,
  name: 'Column1',
  title: 'Enter Column1',
  mode: 'inline'
});
$('#inline-pcolumn2').editable({
  type: 'text',
  pk: 1,
  name: 'Column2',
  title: 'Enter Column2',
  mode: 'inline'
});
$('#inline-pcolumn3').editable({
  type: 'text',
  pk: 1,
  name: 'Column3',
  title: 'Enter Column3',
  mode: 'inline'
});
$('#inline-pcolumn4').editable({
  type: 'text',
  pk: 1,
  name: 'Column4',
  title: 'Enter Column4',
  mode: 'inline'
});

  // Lease 
  $('#inline-lcolumn1').editable({
    type: 'text',
    pk: 1,
    name: 'Column1',
    title: 'Enter Column1',
    mode: 'inline'
  });
  $('#inline-lcolumn2').editable({
    type: 'text',
    pk: 1,
    name: 'Column1',
    title: 'Enter Column1',
    mode: 'inline'
  });
  $('#inline-lcolumn3').editable({
    type: 'text',
    pk: 1,
    name: 'Column1',
    title: 'Enter Column1',
    mode: 'inline'
  });
  $('#inline-lcolumn4').editable({
    type: 'text',
    pk: 1,
    name: 'Column4',
    title: 'Enter Column4',
    mode: 'inline'
  });


  // Service

  $('#inline-scolumn1').editable({
    type: 'text',
    pk: 1,
    name: 'Column1',
    title: 'Enter Column1',
    mode: 'inline'
  });
  $('#inline-scolumn2').editable({
    type: 'text',
    pk: 1,
    name: 'Column1',
    title: 'Enter Column1',
    mode: 'inline'
  });
  $('#inline-scolumn3').editable({
    type: 'text',
    pk: 1,
    name: 'Column1',
    title: 'Enter Column1',
    mode: 'inline'
  });
  $('#inline-scolumn4').editable({
    type: 'text',
    pk: 1,
    name: 'Column4',
    title: 'Enter Column4',
    mode: 'inline'
  });

    //modify buttons style
    $.fn.editableform.buttons = 
    '<button type="submit" class="btn btn-primary editable-submit btn-sm waves-effect waves-light"><i class="md md-done"></i></button>' +
    '<button type="button" class="btn editable-cancel btn-sm waves-effect waves-light"><i class="md md-clear"></i></button>';         
    
    //editables 
    $('#username').editable({
     type: 'text',
     pk: 1,
     name: 'username',
     title: 'Enter username'
   });
    
    $('#firstname').editable({
      validate: function(value) {
       if($.trim(value) == '') return 'This field is required';
     }
   });
    
    $('#sex').editable({
      prepend: "not selected",
      source: [
      {value: 1, text: 'Male'},
      {value: 2, text: 'Female'}
      ],
      display: function(value, sourceData) {
       var colors = {"": "gray", 1: "green", 2: "blue"},
       elem = $.grep(sourceData, function(o){return o.value == value;});

       if(elem.length) {
         $(this).text(elem[0].text).css("color", colors[value]);
       } else {
         $(this).empty();
       }
     }
   });
    
    $('#status').editable();
    
    $('#group').editable({
      showbuttons: false
    });

    $('#dob').editable();

    $('#comments').editable({
      showbuttons: 'bottom'
    });



    //inline


    $('#inline-username').editable({
     type: 'text',
     pk: 1,
     name: 'username',
     title: 'Enter username',
     mode: 'inline'
   });
    
    $('#inline-firstname').editable({
      validate: function(value) {
       if($.trim(value) == '') return 'This field is required';
     },
     mode: 'inline'
   });
    
    $('#inline-sex').editable({
      prepend: "not selected",
      mode: 'inline',
      source: [
      {value: 1, text: 'Male'},
      {value: 2, text: 'Female'}
      ],
      display: function(value, sourceData) {
       var colors = {"": "gray", 1: "green", 2: "blue"},
       elem = $.grep(sourceData, function(o){return o.value == value;});

       if(elem.length) {
         $(this).text(elem[0].text).css("color", colors[value]);
       } else {
         $(this).empty();
       }
     }
   });
    
    $('#inline-status').editable({mode: 'inline'});
    
    $('#inline-group').editable({
      showbuttons: false,
      mode: 'inline'
    });

    $('#inline-dob').editable({mode: 'inline'});

    $('#inline-comments').editable({
      showbuttons: 'bottom',
      mode: 'inline'
    });



  });