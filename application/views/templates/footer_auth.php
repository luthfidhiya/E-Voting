<script>
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container");

      sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
      });

      sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
      });
    </script>

<script>
  document.querySelector("#sign-up-btn").addEventListener("click", () => {
    document.querySelector(".container").add("sign-up-mode");
  });
</script>


<script src="<?php echo base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
	</body>
</html>