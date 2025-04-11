
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