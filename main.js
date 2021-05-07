

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
