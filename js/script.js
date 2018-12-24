function init() {
  window.onscroll = function(){scrollFunction()};

    function scrollFunction(){
        if(document.body.scrollTop > 0 || document.documentElement.scrollTop > 0){
            document.querySelector('.site-header').style['background-color'] = 'black';
        } else {
            document.querySelector('.site-header'). style['background-color'] = 'rgba(0, 0, 0, 0.5)';
        }
    }

}