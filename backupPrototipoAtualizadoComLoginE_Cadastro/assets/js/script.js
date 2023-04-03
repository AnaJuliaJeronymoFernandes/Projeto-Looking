//menu responsivo
const toggleButton = document.querySelector(".toggle-button")
const navbarLinks = document.querySelector('.navbar-links')

if(toggleButton){
    toggleButton.addEventListener('click', () => {
        
        navbarLinks.classList.toggle('active')
        
    })
}

// MENU LATERAL ~ TEM QUE FICAR NESSA ALTURA DO CÓDIGO ~
var checkBtn = document.querySelector("#check");
var sidebar = document.querySelector(".sidebar");

if (checkBtn) {
    checkBtn.addEventListener('click', () => {
        
        if (checkBtn.checked) {
            sidebar.style.animation = 'slide-out 1s ease-out';
            sidebar.style.left = '0'
        } else {
            sidebar.style.animation = 'slide-in 1s ease';
            sidebar.style.left = '-200px'
        }
        
    })
}

//redirecionamentos
function red_cadastro(){
    window.location.href = "../../SRC/cadastro.html";
}
function red_sucesso(){
    window.location.href = "../../SRC/sucesso.php";
}
function red_login(){
    window.location.href = "../../SRC/login.php";
}
function red_cadastro2(){
    window.location.href = "../../SRC/cadastro2.php";
}
function sucesso(){
    window.location.href = "../../SRC/sucesso.php";
}
function red_peca(){
    window.location.href = "../../SRC/cadastropeca.php"
}
function red_perfilpecas(){
    window.location.href = "../../SRC/perfilpecas.php"
}
function red_buscafavorito(){
    window.location.href = "../../SRC/buscafavorito.php"
}

//imagem no cadastro
function readImage() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("imgpreview").addEventListener("change", readImage, false);

//visualizar senha
function ver_senha() {
    const span = document.querySelector("#olho")
    var x = document.getElementById("senha");
    if (x.type === "password") {
      x.type = "text";
      span.textContent = "visibility_off";
    } else {
      x.type = "password";
      span.textContent = "visibility";
    }
}

//executar o gif apenas uma vez
window.onload = function() {
    Gifffer();
}

(function(){
  
    var $gif         = document.querySelector('verify-unscreen.gif'),
        GIF_DURATION = 1050;
  
    function handleGif(){
      
      // Cria o canvas com o mesmo tamanho da imagem.
      var $canvas = document.createElement('canvas');
      $canvas.setAttribute('width', $gif.width);
      $canvas.setAttribute('height', $gif.height);
      
      // Desenha a imagem no canvas
      var context = $canvas.getContext('2d');
      context.drawImage($gif, 0, 0);
      
      // Remove a imagem e insere o canvas
      document.body.removeChild($gif);
      document.body.appendChild($canvas);
    }
    
    var timeout = setTimeout(function(){
        handleGif();
      clearTimeout(timeout);
    }, GIF_DURATION);
    
  })();