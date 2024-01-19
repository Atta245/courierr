<!--Start footer-->
<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->



  <script>
    var btn = document.querySelectorAll(".rotbtn");
    var flag = 0;

    btn.forEach(function (val) {

    val.addEventListener("click",function(){
        if(flag == 0){
            val.childNodes[3].style.transform = "rotate(-90deg)"
            val.childNodes[3].style.transition = ".5s"
            flag = 1;
        }
        else{
          val.childNodes[3].style.transform = "rotate(0deg)"
          val.childNodes[3].style.transition = ".5s"
            flag = 0;
        }
      });
    });
  </script>

<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })()
  </script>