$(".tabs-nav ul li").click(function() {
  var currentTabIndex = $(this).index();
  var tabsContainer = $(this).closest(".tabs");
  var tabsNav = $(tabsContainer)
    .children(".tabs-nav")
    .children("ul")
    .children("li");
  var tabsContent = $(tabsContainer)
    .children(".tabs-content")
    .children("div");

  $(tabsNav).removeClass("is-active");
  $(this).addClass("is-active");

  $(tabsContent).removeClass("is-active");
  $(tabsContent)
    .eq(currentTabIndex)
    .addClass("is-active");
});
