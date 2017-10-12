
ApplicationLoad = {
  init: function () {
    this.load_page();
    this.load_plugins();
  },

  load_page: function(){
    $(window).load(function(){
      $("#load").fadeOut(500).delay(500);
    });

  },
  load_plugins: function(){
  	console.log("Plugins loaded");

$('.clock').each(function() {
            var $this = $(this),
                finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('%I:%M:%S'));
            });
        });


  }

}

$(document).ready(function(){ ApplicationLoad.init(); });