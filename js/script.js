function init() {
  window.onscroll = function(){scrollFunction()};

    function scrollFunction(){
        if(document.body.scrollTop > 0 || document.documentElement.scrollTop > 0){
            document.querySelector('.site-header').style['background-color'] = 'black';
        } else {
            document.querySelector('.site-header'). style['background-color'] = 'rgba(0, 0, 0, 0.5)';
        }
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("default-open").click();
}

function openTab(evt, propertyName) {
    var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tab-links");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(propertyName).style.display = "flex";
  evt.currentTarget.className += " active";
}


