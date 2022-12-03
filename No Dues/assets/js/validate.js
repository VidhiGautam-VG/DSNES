function validateform() {
  var x = document.forms["applyform"]["scholar"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}


/*$('#my-form-id').submit(function() {
  var commentary = $('#commentary').val(); 
  if (commentary === undefined || commentary === "") {
    $('#commentary').attr('name', 'empty_commentary');
  } else {
    $('#commentary').attr('name', 'commentary');        
  }
});*/