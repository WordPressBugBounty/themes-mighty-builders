(function ($) {
  "use strict";
  $("#mighty-builders-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: ajaxurl,
      data: {
        action: "mighty-builders_dismissble_notice",
      },
    });
  });
  $("#mighty-builders-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: mighty_builders_admin_localize.ajax_url,
      method: "POST",
      data: {
        action: "mighty_builders_dismissble_notice",
        nonce: mighty_builders_admin_localize.nonce,
      },
      success: function (response) {
        if (response.success) {
          console.log("Notice dismissed successfully.");
          $("#mighty-builders-dismiss-notice").fadeOut(); // Hide the notice
        } else {
          console.log("Failed to dismiss notice:", response.data.message);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error:", textStatus, errorThrown);
      },
    });
  });
  $("#mighty-builders-dashboard-tabs-nav li:first-child").addClass("active");
  $(".tab-content").hide();
  $(".tab-content:first").show();
  $("#mighty-builders-dashboard-tabs-nav li").click(function () {
    $("#mighty-builders-dashboard-tabs-nav li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content").hide();
    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
  });
})(jQuery);
