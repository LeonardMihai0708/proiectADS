$('.dropdown-toggle').on("click", function() {
    var dropdownList = $('.dropdown-menu'),
    dropdownOffset = $(this).offset(),
    offsetLeft = dropdownOffset.left,
    dropdownWidth = dropdownList.width(),
    docWidth = $(window).width(),
  
    subDropdown = dropdownList.eq(1),
    subDropdownWidth = subDropdown.width(),
  
    isDropdownVisible = (offsetLeft + dropdownWidth <= docWidth),
    isSubDropdownVisible = (offsetLeft + dropdownWidth + subDropdownWidth <= docWidth);
  
    if (!isDropdownVisible || !isSubDropdownVisible) {
          dropdownList.addClass('pull-right');
    } else {
          dropdownList.removeClass('pull-right');
    }
  });