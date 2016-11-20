(function() {
  $(document).ready(function() {
    $("#loginButton").unbind().click(function() {
      console.log("[Login][Button]");
      $("#modal").modal("show");
      $(".modal-title").html(Lang.get("messages.login"));
      $(".modal-body").html("");
      return null;
    });
    return null;
  });

}).call(this);
