        <!-- jQuery (required for Bootstrap JS) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Bootstrap JS (without CSS) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
image.onchange = evt => {
  const [file] = image.files
  if (file) {
    blah.classList.remove("d_none")
    blah.src = URL.createObjectURL(file)
  }
}
</script>
<script>
    
</script>