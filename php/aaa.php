<div id="aa">
  aaa

</div>

<script>
window.onload = function() {
    parent.postMessage({
        frameHeight: document.body.scrollHeight,
        frameWidth: document.body.scrollWidth
    }, "*");
};
</script>

<style>
#aa{
  height: 1000px;
  background-color: lightcoral;
}
</style>