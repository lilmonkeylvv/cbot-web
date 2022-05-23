$(document).ready(function () {
       $(".row-dropdown").toggle();

       $(".commands-block-table__rows").click(function () {
              const dropdownList = $(".row-dropdown");
              const elClass = $(this).attr("class");

              for (let i = 0; i < dropdownList.length; i++) {
                     if (elClass.includes($(dropdownList[i]).attr("id"))) {
                            $(dropdownList[i]).slideToggle();
                     }
              }
       });
});
