

function test() {
    var x = document.getElementById('burgerlist');
    if (x.style.display === 'none'){
      x.style.display = 'block';
    } else {
      x.style.display = 'none';
    }
  };





  window.addEventListener('resize', onResize);

  function onResize(){
      if(window.innerWidth > 570) {
          document.getElementById('burgerlist').classList.add('hidden');
      }else{
        document.getElementById('burgerlist').classList.remove('hidden');
      }
  }




/*function test() {
    document.getElementById('bg').click();
    list.style.display = 'block';
    
  };
*/

(function() {
    // Add event listener
    document.addEventListener("mousemove", parallax);
    const elem = document.querySelector("#parallax");
    // Magic happens here
    function parallax(e) {
        let _w = window.innerWidth/2;
        let _h = window.innerHeight/2;
        let _mouseX = e.clientX;
        let _mouseY = e.clientY;
        let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
        let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
        let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
        let x = `${_depth3}, ${_depth2}, ${_depth1}`;
        console.log(x);
        elem.style.backgroundPosition = x;
    }

})();