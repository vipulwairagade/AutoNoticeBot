
  // Toggle between showing and hiding the sidebar, and add overlay effect
  function w3_open(id) {
      var id = document.getElementById(id);
      if (id.style.display === 'block') {
          id.style.display = 'none';
      } else {
          id.style.display = 'block';
      }
  }

window.onresize=
  function(){
    if(window.innerWidth < 768){
      // Get the Sidebar
      var list = document.getElementById("list");
      if (list.style.display !== 'none') {
          list.style.display = 'none';
      }

    }
    if(window.innerWidth > 767){
        // Get the Sidebar
        var list = document.getElementById("list");
        if (list.style.display === 'none') {
            list.style.display = '';
        }

    }
  };

if(window.innerWidth < 768){
      // Get the Sidebar
      var list = document.getElementById("list");
      if (list.style.display !== 'none') {
          list.style.display = 'none';
      }

    }

  // Close the sidebar
  function w3_close(id) {
      id.style.display = "none";
      window.resize()
  }
