(function() {
  $.ajaxSetup(function() {
    ({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    return null;
  });

}).call(this);
